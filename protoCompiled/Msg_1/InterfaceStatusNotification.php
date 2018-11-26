<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/messenger3.proto

namespace Msg_1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msg_1.InterfaceStatusNotification</code>
 */
class InterfaceStatusNotification extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .msg_1.Interface interfaces = 1;</code>
     */
    private $interfaces;
    /**
     * Generated from protobuf field <code>bool is_down = 2;</code>
     */
    private $is_down = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Msg_1\PBInterface[]|\Google\Protobuf\Internal\RepeatedField $interfaces
     *     @type bool $is_down
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Messenger3::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .msg_1.Interface interfaces = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInterfaces()
    {
        return $this->interfaces;
    }

    /**
     * Generated from protobuf field <code>repeated .msg_1.Interface interfaces = 1;</code>
     * @param \Msg_1\PBInterface[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInterfaces($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Msg_1\PBInterface::class);
        $this->interfaces = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool is_down = 2;</code>
     * @return bool
     */
    public function getIsDown()
    {
        return $this->is_down;
    }

    /**
     * Generated from protobuf field <code>bool is_down = 2;</code>
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

