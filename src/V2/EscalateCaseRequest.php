<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/support/v2/case_service.proto

namespace Google\Cloud\Support\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for the EscalateCase endpoint.
 *
 * Generated from protobuf message <code>google.cloud.support.v2.EscalateCaseRequest</code>
 */
class EscalateCaseRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The fully qualified name of the Case resource to be escalated.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * The escalation object to be sent with the escalation request.
     *
     * Generated from protobuf field <code>.google.cloud.support.v2.Escalation escalation = 2;</code>
     */
    protected $escalation = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The fully qualified name of the Case resource to be escalated.
     *     @type \Google\Cloud\Support\V2\Escalation $escalation
     *           The escalation object to be sent with the escalation request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Support\V2\CaseService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The fully qualified name of the Case resource to be escalated.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The fully qualified name of the Case resource to be escalated.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * The escalation object to be sent with the escalation request.
     *
     * Generated from protobuf field <code>.google.cloud.support.v2.Escalation escalation = 2;</code>
     * @return \Google\Cloud\Support\V2\Escalation|null
     */
    public function getEscalation()
    {
        return $this->escalation;
    }

    public function hasEscalation()
    {
        return isset($this->escalation);
    }

    public function clearEscalation()
    {
        unset($this->escalation);
    }

    /**
     * The escalation object to be sent with the escalation request.
     *
     * Generated from protobuf field <code>.google.cloud.support.v2.Escalation escalation = 2;</code>
     * @param \Google\Cloud\Support\V2\Escalation $var
     * @return $this
     */
    public function setEscalation($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Support\V2\Escalation::class);
        $this->escalation = $var;

        return $this;
    }

}

