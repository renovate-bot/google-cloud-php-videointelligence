<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/videointelligence/v1/video_intelligence.proto

namespace Google\Cloud\VideoIntelligence\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A generic detected landmark represented by name in string format and a 2D
 * location.
 *
 * Generated from protobuf message <code>google.cloud.videointelligence.v1.DetectedLandmark</code>
 */
class DetectedLandmark extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of this landmark, for example, left_hand, right_shoulder.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * The 2D point of the detected landmark using the normalized image
     * coordindate system. The normalized coordinates have the range from 0 to 1.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1.NormalizedVertex point = 2;</code>
     */
    protected $point = null;
    /**
     * The confidence score of the detected landmark. Range [0, 1].
     *
     * Generated from protobuf field <code>float confidence = 3;</code>
     */
    protected $confidence = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The name of this landmark, for example, left_hand, right_shoulder.
     *     @type \Google\Cloud\VideoIntelligence\V1\NormalizedVertex $point
     *           The 2D point of the detected landmark using the normalized image
     *           coordindate system. The normalized coordinates have the range from 0 to 1.
     *     @type float $confidence
     *           The confidence score of the detected landmark. Range [0, 1].
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Videointelligence\V1\VideoIntelligence::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of this landmark, for example, left_hand, right_shoulder.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name of this landmark, for example, left_hand, right_shoulder.
     *
     * Generated from protobuf field <code>string name = 1;</code>
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
     * The 2D point of the detected landmark using the normalized image
     * coordindate system. The normalized coordinates have the range from 0 to 1.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1.NormalizedVertex point = 2;</code>
     * @return \Google\Cloud\VideoIntelligence\V1\NormalizedVertex|null
     */
    public function getPoint()
    {
        return $this->point;
    }

    public function hasPoint()
    {
        return isset($this->point);
    }

    public function clearPoint()
    {
        unset($this->point);
    }

    /**
     * The 2D point of the detected landmark using the normalized image
     * coordindate system. The normalized coordinates have the range from 0 to 1.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1.NormalizedVertex point = 2;</code>
     * @param \Google\Cloud\VideoIntelligence\V1\NormalizedVertex $var
     * @return $this
     */
    public function setPoint($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\VideoIntelligence\V1\NormalizedVertex::class);
        $this->point = $var;

        return $this;
    }

    /**
     * The confidence score of the detected landmark. Range [0, 1].
     *
     * Generated from protobuf field <code>float confidence = 3;</code>
     * @return float
     */
    public function getConfidence()
    {
        return $this->confidence;
    }

    /**
     * The confidence score of the detected landmark. Range [0, 1].
     *
     * Generated from protobuf field <code>float confidence = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setConfidence($var)
    {
        GPBUtil::checkFloat($var);
        $this->confidence = $var;

        return $this;
    }

}

