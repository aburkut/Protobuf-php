<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/messenger3.proto

namespace Msg_1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msg_1.GetDownAwsInstancesResponse</code>
 */
class GetDownAwsInstancesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool is_ready = 1;</code>
     */
    private $is_ready = false;
    /**
     * Generated from protobuf field <code>repeated uint64 instances = 2;</code>
     */
    private $instances;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $is_ready
     *     @type int[]|string[]|\Google\Protobuf\Internal\RepeatedField $instances
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Messenger3::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool is_ready = 1;</code>
     * @return bool
     */
    public function getIsReady()
    {
        return $this->is_ready;
    }

    /**
     * Generated from protobuf field <code>bool is_ready = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsReady($var)
    {
        GPBUtil::checkBool($var);
        $this->is_ready = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint64 instances = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInstances()
    {
        return $this->instances;
    }

    /**
     * Generated from protobuf field <code>repeated uint64 instances = 2;</code>
     * @param int[]|string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInstances($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT64);
        $this->instances = $arr;

        return $this;
    }

}

