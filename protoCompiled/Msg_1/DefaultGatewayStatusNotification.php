<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/messenger3.proto

namespace Msg_1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msg_1.DefaultGatewayStatusNotification</code>
 */
class DefaultGatewayStatusNotification extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool is_down = 1;</code>
     */
    private $is_down = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $is_down
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Messenger3::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool is_down = 1;</code>
     * @return bool
     */
    public function getIsDown()
    {
        return $this->is_down;
    }

    /**
     * Generated from protobuf field <code>bool is_down = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsDown($var)
    {
        GPBUtil::checkBool($var);
        $this->is_down = $var;

        return $this;
    }

}

