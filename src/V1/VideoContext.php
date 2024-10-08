<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/videointelligence/v1/video_intelligence.proto

namespace Google\Cloud\VideoIntelligence\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Video context and/or feature-specific parameters.
 *
 * Generated from protobuf message <code>google.cloud.videointelligence.v1.VideoContext</code>
 */
class VideoContext extends \Google\Protobuf\Internal\Message
{
    /**
     * Video segments to annotate. The segments may overlap and are not required
     * to be contiguous or span the whole video. If unspecified, each video is
     * treated as a single segment.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1.VideoSegment segments = 1;</code>
     */
    private $segments;
    /**
     * Config for LABEL_DETECTION.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1.LabelDetectionConfig label_detection_config = 2;</code>
     */
    protected $label_detection_config = null;
    /**
     * Config for SHOT_CHANGE_DETECTION.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1.ShotChangeDetectionConfig shot_change_detection_config = 3;</code>
     */
    protected $shot_change_detection_config = null;
    /**
     * Config for EXPLICIT_CONTENT_DETECTION.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1.ExplicitContentDetectionConfig explicit_content_detection_config = 4;</code>
     */
    protected $explicit_content_detection_config = null;
    /**
     * Config for FACE_DETECTION.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1.FaceDetectionConfig face_detection_config = 5;</code>
     */
    protected $face_detection_config = null;
    /**
     * Config for SPEECH_TRANSCRIPTION.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1.SpeechTranscriptionConfig speech_transcription_config = 6;</code>
     */
    protected $speech_transcription_config = null;
    /**
     * Config for TEXT_DETECTION.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1.TextDetectionConfig text_detection_config = 8;</code>
     */
    protected $text_detection_config = null;
    /**
     * Config for PERSON_DETECTION.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1.PersonDetectionConfig person_detection_config = 11;</code>
     */
    protected $person_detection_config = null;
    /**
     * Config for OBJECT_TRACKING.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1.ObjectTrackingConfig object_tracking_config = 13;</code>
     */
    protected $object_tracking_config = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\VideoIntelligence\V1\VideoSegment>|\Google\Protobuf\Internal\RepeatedField $segments
     *           Video segments to annotate. The segments may overlap and are not required
     *           to be contiguous or span the whole video. If unspecified, each video is
     *           treated as a single segment.
     *     @type \Google\Cloud\VideoIntelligence\V1\LabelDetectionConfig $label_detection_config
     *           Config for LABEL_DETECTION.
     *     @type \Google\Cloud\VideoIntelligence\V1\ShotChangeDetectionConfig $shot_change_detection_config
     *           Config for SHOT_CHANGE_DETECTION.
     *     @type \Google\Cloud\VideoIntelligence\V1\ExplicitContentDetectionConfig $explicit_content_detection_config
     *           Config for EXPLICIT_CONTENT_DETECTION.
     *     @type \Google\Cloud\VideoIntelligence\V1\FaceDetectionConfig $face_detection_config
     *           Config for FACE_DETECTION.
     *     @type \Google\Cloud\VideoIntelligence\V1\SpeechTranscriptionConfig $speech_transcription_config
     *           Config for SPEECH_TRANSCRIPTION.
     *     @type \Google\Cloud\VideoIntelligence\V1\TextDetectionConfig $text_detection_config
     *           Config for TEXT_DETECTION.
     *     @type \Google\Cloud\VideoIntelligence\V1\PersonDetectionConfig $person_detection_config
     *           Config for PERSON_DETECTION.
     *     @type \Google\Cloud\VideoIntelligence\V1\ObjectTrackingConfig $object_tracking_config
     *           Config for OBJECT_TRACKING.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Videointelligence\V1\VideoIntelligence::initOnce();
        parent::__construct($data);
    }

    /**
     * Video segments to annotate. The segments may overlap and are not required
     * to be contiguous or span the whole video. If unspecified, each video is
     * treated as a single segment.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1.VideoSegment segments = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSegments()
    {
        return $this->segments;
    }

    /**
     * Video segments to annotate. The segments may overlap and are not required
     * to be contiguous or span the whole video. If unspecified, each video is
     * treated as a single segment.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1.VideoSegment segments = 1;</code>
     * @param array<\Google\Cloud\VideoIntelligence\V1\VideoSegment>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSegments($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\VideoIntelligence\V1\VideoSegment::class);
        $this->segments = $arr;

        return $this;
    }

    /**
     * Config for LABEL_DETECTION.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1.LabelDetectionConfig label_detection_config = 2;</code>
     * @return \Google\Cloud\VideoIntelligence\V1\LabelDetectionConfig|null
     */
    public function getLabelDetectionConfig()
    {
        return $this->label_detection_config;
    }

    public function hasLabelDetectionConfig()
    {
        return isset($this->label_detection_config);
    }

    public function clearLabelDetectionConfig()
    {
        unset($this->label_detection_config);
    }

    /**
     * Config for LABEL_DETECTION.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1.LabelDetectionConfig label_detection_config = 2;</code>
     * @param \Google\Cloud\VideoIntelligence\V1\LabelDetectionConfig $var
     * @return $this
     */
    public function setLabelDetectionConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\VideoIntelligence\V1\LabelDetectionConfig::class);
        $this->label_detection_config = $var;

        return $this;
    }

    /**
     * Config for SHOT_CHANGE_DETECTION.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1.ShotChangeDetectionConfig shot_change_detection_config = 3;</code>
     * @return \Google\Cloud\VideoIntelligence\V1\ShotChangeDetectionConfig|null
     */
    public function getShotChangeDetectionConfig()
    {
        return $this->shot_change_detection_config;
    }

    public function hasShotChangeDetectionConfig()
    {
        return isset($this->shot_change_detection_config);
    }

    public function clearShotChangeDetectionConfig()
    {
        unset($this->shot_change_detection_config);
    }

    /**
     * Config for SHOT_CHANGE_DETECTION.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1.ShotChangeDetectionConfig shot_change_detection_config = 3;</code>
     * @param \Google\Cloud\VideoIntelligence\V1\ShotChangeDetectionConfig $var
     * @return $this
     */
    public function setShotChangeDetectionConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\VideoIntelligence\V1\ShotChangeDetectionConfig::class);
        $this->shot_change_detection_config = $var;

        return $this;
    }

    /**
     * Config for EXPLICIT_CONTENT_DETECTION.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1.ExplicitContentDetectionConfig explicit_content_detection_config = 4;</code>
     * @return \Google\Cloud\VideoIntelligence\V1\ExplicitContentDetectionConfig|null
     */
    public function getExplicitContentDetectionConfig()
    {
        return $this->explicit_content_detection_config;
    }

    public function hasExplicitContentDetectionConfig()
    {
        return isset($this->explicit_content_detection_config);
    }

    public function clearExplicitContentDetectionConfig()
    {
        unset($this->explicit_content_detection_config);
    }

    /**
     * Config for EXPLICIT_CONTENT_DETECTION.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1.ExplicitContentDetectionConfig explicit_content_detection_config = 4;</code>
     * @param \Google\Cloud\VideoIntelligence\V1\ExplicitContentDetectionConfig $var
     * @return $this
     */
    public function setExplicitContentDetectionConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\VideoIntelligence\V1\ExplicitContentDetectionConfig::class);
        $this->explicit_content_detection_config = $var;

        return $this;
    }

    /**
     * Config for FACE_DETECTION.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1.FaceDetectionConfig face_detection_config = 5;</code>
     * @return \Google\Cloud\VideoIntelligence\V1\FaceDetectionConfig|null
     */
    public function getFaceDetectionConfig()
    {
        return $this->face_detection_config;
    }

    public function hasFaceDetectionConfig()
    {
        return isset($this->face_detection_config);
    }

    public function clearFaceDetectionConfig()
    {
        unset($this->face_detection_config);
    }

    /**
     * Config for FACE_DETECTION.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1.FaceDetectionConfig face_detection_config = 5;</code>
     * @param \Google\Cloud\VideoIntelligence\V1\FaceDetectionConfig $var
     * @return $this
     */
    public function setFaceDetectionConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\VideoIntelligence\V1\FaceDetectionConfig::class);
        $this->face_detection_config = $var;

        return $this;
    }

    /**
     * Config for SPEECH_TRANSCRIPTION.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1.SpeechTranscriptionConfig speech_transcription_config = 6;</code>
     * @return \Google\Cloud\VideoIntelligence\V1\SpeechTranscriptionConfig|null
     */
    public function getSpeechTranscriptionConfig()
    {
        return $this->speech_transcription_config;
    }

    public function hasSpeechTranscriptionConfig()
    {
        return isset($this->speech_transcription_config);
    }

    public function clearSpeechTranscriptionConfig()
    {
        unset($this->speech_transcription_config);
    }

    /**
     * Config for SPEECH_TRANSCRIPTION.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1.SpeechTranscriptionConfig speech_transcription_config = 6;</code>
     * @param \Google\Cloud\VideoIntelligence\V1\SpeechTranscriptionConfig $var
     * @return $this
     */
    public function setSpeechTranscriptionConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\VideoIntelligence\V1\SpeechTranscriptionConfig::class);
        $this->speech_transcription_config = $var;

        return $this;
    }

    /**
     * Config for TEXT_DETECTION.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1.TextDetectionConfig text_detection_config = 8;</code>
     * @return \Google\Cloud\VideoIntelligence\V1\TextDetectionConfig|null
     */
    public function getTextDetectionConfig()
    {
        return $this->text_detection_config;
    }

    public function hasTextDetectionConfig()
    {
        return isset($this->text_detection_config);
    }

    public function clearTextDetectionConfig()
    {
        unset($this->text_detection_config);
    }

    /**
     * Config for TEXT_DETECTION.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1.TextDetectionConfig text_detection_config = 8;</code>
     * @param \Google\Cloud\VideoIntelligence\V1\TextDetectionConfig $var
     * @return $this
     */
    public function setTextDetectionConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\VideoIntelligence\V1\TextDetectionConfig::class);
        $this->text_detection_config = $var;

        return $this;
    }

    /**
     * Config for PERSON_DETECTION.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1.PersonDetectionConfig person_detection_config = 11;</code>
     * @return \Google\Cloud\VideoIntelligence\V1\PersonDetectionConfig|null
     */
    public function getPersonDetectionConfig()
    {
        return $this->person_detection_config;
    }

    public function hasPersonDetectionConfig()
    {
        return isset($this->person_detection_config);
    }

    public function clearPersonDetectionConfig()
    {
        unset($this->person_detection_config);
    }

    /**
     * Config for PERSON_DETECTION.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1.PersonDetectionConfig person_detection_config = 11;</code>
     * @param \Google\Cloud\VideoIntelligence\V1\PersonDetectionConfig $var
     * @return $this
     */
    public function setPersonDetectionConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\VideoIntelligence\V1\PersonDetectionConfig::class);
        $this->person_detection_config = $var;

        return $this;
    }

    /**
     * Config for OBJECT_TRACKING.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1.ObjectTrackingConfig object_tracking_config = 13;</code>
     * @return \Google\Cloud\VideoIntelligence\V1\ObjectTrackingConfig|null
     */
    public function getObjectTrackingConfig()
    {
        return $this->object_tracking_config;
    }

    public function hasObjectTrackingConfig()
    {
        return isset($this->object_tracking_config);
    }

    public function clearObjectTrackingConfig()
    {
        unset($this->object_tracking_config);
    }

    /**
     * Config for OBJECT_TRACKING.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1.ObjectTrackingConfig object_tracking_config = 13;</code>
     * @param \Google\Cloud\VideoIntelligence\V1\ObjectTrackingConfig $var
     * @return $this
     */
    public function setObjectTrackingConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\VideoIntelligence\V1\ObjectTrackingConfig::class);
        $this->object_tracking_config = $var;

        return $this;
    }

}

