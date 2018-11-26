<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/messenger3.proto

namespace Msg_1\CollectConfigBackupDevicesResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msg_1.CollectConfigBackupDevicesResponse.DeviceBackupStatus</code>
 */
class DeviceBackupStatus extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 id = 1;</code>
     */
    private $id = 0;
    /**
     * Generated from protobuf field <code>bool is_done = 2;</code>
     */
    private $is_done = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $id
     *     @type bool $is_done
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Messenger3::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint64 id = 1;</code>
     * @return int|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>uint64 id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkUint64($var);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool is_done = 2;</code>
     * @return bool
     */
    public function getIsDone()
    {
        return $this->is_done;
    }

    /**
     * Generated from protobuf field <code>bool is_done = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsDone($var)
    {
        GPBUtil::checkBool($var);
        $this->is_done = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DeviceBackupStatus::class, \Msg_1\CollectConfigBackupDevicesResponse_DeviceBackupStatus::class);

