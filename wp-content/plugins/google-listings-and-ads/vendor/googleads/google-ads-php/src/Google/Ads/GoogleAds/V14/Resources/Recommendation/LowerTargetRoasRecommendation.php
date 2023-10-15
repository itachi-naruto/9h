<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/resources/recommendation.proto

namespace Google\Ads\GoogleAds\V14\Resources\Recommendation;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Recommendation to lower Target ROAS.
 *
 * Generated from protobuf message <code>google.ads.googleads.v14.resources.Recommendation.LowerTargetRoasRecommendation</code>
 */
class LowerTargetRoasRecommendation extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The relevant information describing the recommended target
     * adjustment.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.resources.Recommendation.TargetAdjustmentInfo target_adjustment = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $target_adjustment = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Ads\GoogleAds\V14\Resources\Recommendation\TargetAdjustmentInfo $target_adjustment
     *           Output only. The relevant information describing the recommended target
     *           adjustment.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V14\Resources\Recommendation::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The relevant information describing the recommended target
     * adjustment.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.resources.Recommendation.TargetAdjustmentInfo target_adjustment = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Ads\GoogleAds\V14\Resources\Recommendation\TargetAdjustmentInfo|null
     */
    public function getTargetAdjustment()
    {
        return $this->target_adjustment;
    }

    public function hasTargetAdjustment()
    {
        return isset($this->target_adjustment);
    }

    public function clearTargetAdjustment()
    {
        unset($this->target_adjustment);
    }

    /**
     * Output only. The relevant information describing the recommended target
     * adjustment.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.resources.Recommendation.TargetAdjustmentInfo target_adjustment = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V14\Resources\Recommendation\TargetAdjustmentInfo $var
     * @return $this
     */
    public function setTargetAdjustment($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V14\Resources\Recommendation\TargetAdjustmentInfo::class);
        $this->target_adjustment = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(LowerTargetRoasRecommendation::class, \Google\Ads\GoogleAds\V14\Resources\Recommendation_LowerTargetRoasRecommendation::class);

