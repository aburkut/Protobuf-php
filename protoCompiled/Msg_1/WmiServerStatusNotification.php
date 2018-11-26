<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/messenger3.proto

namespace Msg_1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msg_1.WmiServerStatusNotification</code>
 */
class WmiServerStatusNotification extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated uint64 servers = 1;</code>
     */
    private $servers;
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
     *     @type int[]|string[]|\Google\Protobuf\Internal\RepeatedField $servers
     *     @type bool $is_down
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Messenger3::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated uint64 servers = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getServers()
    {
        return $this->servers;
    }

    /**
     * Generated from protobuf field <code>repeated uint64 servers = 1;</code>
     * @param int[]|string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setServers($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT64);
        $this->servers = $arr;

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
