<?php
/**
 * Created by PhpStorm.
 * User: alexanderburkut
 * Date: 11/24/18
 * Time: 11:45 PM
 */


require_once __DIR__ . '/vendor/autoload.php';


require_once __DIR__ . '/protoCompiled/GPBMetadata/Proto/Messenger3.php';

foreach (glob('protoCompiled/Msg_1/*.php') as $filename)
{
	require_once $filename;
}

\Ratchet\Client\connect('ws://13.52.16.27:8001/')->then(function($conn) {

	$messageSource = new \Msg_1\MessageSource();
	$messageSource->setId(1);
	$messageSource->setService(\Msg_1\ServiceType::WEB_SERVER);

	$messageDestination = new \Msg_1\MessageDestination();

	$messageDestination->setId(1);
	$messageDestination->setService(\Msg_1\ServiceType::MESSAGE_BROKER);

	$message = new \Msg_1\Message();
	$message->setId(1);
	$message->setSrc($messageSource);
	$message->setDst($messageDestination);
	$message->setRegisterMessageSourceRequest(new \Msg_1\RegisterMessageSourceRequest());

	var_dump('ENCODED: ', $message->serializeToJsonString());

	$binaryMessage = new \Ratchet\RFC6455\Messaging\Frame($message->serializeToString(), true, \Ratchet\RFC6455\Messaging\Frame::OP_BINARY);

	$conn->send($binaryMessage);

	$conn->on('message', function($msg) use ($conn) {
		$messageReceived = new \Msg_1\Message();
		$messageReceived->mergeFromString($msg->__toString());

		var_dump('DECODED: ', $messageReceived->serializeToJsonString());

		if($messageReceived->getRegisterMessageSourceResponse()) {
			$arr = json_decode($messageReceived->getRegisterMessageSourceResponse()->serializeToJsonString(), true);
			$curId = $arr['destinationId'];
			$fp = fopen(__DIR__ . '/cur-id.txt', 'wb');
			fwrite($fp, (string) $curId);
			fclose($fp);
		}

		if($messageReceived->getDownDevicesRequest()) {

			$curId = file_get_contents(__DIR__. '/cur-id.txt');

			$responseMessageSource = new \Msg_1\MessageSource();
			$responseMessageSource->setId((int) $curId);
			$responseMessageSource->setService(\Msg_1\ServiceType::WEB_SERVER);

			$responseMessageDestination = new \Msg_1\MessageDestination();
			$responseMessageDestination->setOption(\Msg_1\DestinationOption::TO_ONE);
			$responseMessageDestination->setService(\Msg_1\ServiceType::WEB_CLIENT);

			$downDevicesResponse = new \Msg_1\GetDownDevicesResponse();
			$downDevicesResponse->setIsReady(true);
			$downDevicesResponse->setDevices(array('5'));

			$responseMessage = new \Msg_1\Message();
			$responseMessage->setId(1);
			$responseMessage->setSrc($responseMessageSource);
			$responseMessage->setDst($responseMessageDestination);
			$responseMessage->setDownDevicesResponse($downDevicesResponse);

			var_dump('ENCODED: ', $responseMessage->serializeToJsonString());

			$conn->send(new \Ratchet\RFC6455\Messaging\Frame($responseMessage->serializeToString(), true, \Ratchet\RFC6455\Messaging\Frame::OP_BINARY));
		}

//		$conn->close();
	});

}, function ($e) {
	echo "Could not connect: {$e->getMessage()}\n";
});