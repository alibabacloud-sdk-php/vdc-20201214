<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeCallResponseBody\userDetailList;

use AlibabaCloud\Tea\Model;

class durMetricStatData extends Model
{
    /**
     * @description 发布音频时长，单位秒
     *
     * @var int
     */
    public $pubAudio;

    /**
     * @description 发布1080P视频时长，单位：秒
     *
     * @var int
     */
    public $pubVideo1080;

    /**
     * @description 发布360P视频时长，单位秒
     *
     * @var int
     */
    public $pubVideo360;

    /**
     * @description 发布720P视频时长，单位：秒
     *
     * @var int
     */
    public $pubVideo720;

    /**
     * @description 发布屏幕共享时长，单位：秒
     *
     * @var int
     */
    public $pubVideoScreenShare;

    /**
     * @description 订阅音频时长，单位秒
     *
     * @var int
     */
    public $subAudio;

    /**
     * @description 订阅1080P视频时长，单位：秒
     *
     * @var int
     */
    public $subVideo1080;

    /**
     * @description 订阅360P视频时长，单位：秒
     *
     * @var int
     */
    public $subVideo360;

    /**
     * @description 订阅720P视频时长，单位：秒
     *
     * @var int
     */
    public $subVideo720;

    /**
     * @description 订阅屏幕共享时长，单位：秒
     *
     * @var int
     */
    public $subVideoScreenShare;
    protected $_name = [
        'pubAudio'            => 'PubAudio',
        'pubVideo1080'        => 'PubVideo1080',
        'pubVideo360'         => 'PubVideo360',
        'pubVideo720'         => 'PubVideo720',
        'pubVideoScreenShare' => 'PubVideoScreenShare',
        'subAudio'            => 'SubAudio',
        'subVideo1080'        => 'SubVideo1080',
        'subVideo360'         => 'SubVideo360',
        'subVideo720'         => 'SubVideo720',
        'subVideoScreenShare' => 'SubVideoScreenShare',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pubAudio) {
            $res['PubAudio'] = $this->pubAudio;
        }
        if (null !== $this->pubVideo1080) {
            $res['PubVideo1080'] = $this->pubVideo1080;
        }
        if (null !== $this->pubVideo360) {
            $res['PubVideo360'] = $this->pubVideo360;
        }
        if (null !== $this->pubVideo720) {
            $res['PubVideo720'] = $this->pubVideo720;
        }
        if (null !== $this->pubVideoScreenShare) {
            $res['PubVideoScreenShare'] = $this->pubVideoScreenShare;
        }
        if (null !== $this->subAudio) {
            $res['SubAudio'] = $this->subAudio;
        }
        if (null !== $this->subVideo1080) {
            $res['SubVideo1080'] = $this->subVideo1080;
        }
        if (null !== $this->subVideo360) {
            $res['SubVideo360'] = $this->subVideo360;
        }
        if (null !== $this->subVideo720) {
            $res['SubVideo720'] = $this->subVideo720;
        }
        if (null !== $this->subVideoScreenShare) {
            $res['SubVideoScreenShare'] = $this->subVideoScreenShare;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return durMetricStatData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PubAudio'])) {
            $model->pubAudio = $map['PubAudio'];
        }
        if (isset($map['PubVideo1080'])) {
            $model->pubVideo1080 = $map['PubVideo1080'];
        }
        if (isset($map['PubVideo360'])) {
            $model->pubVideo360 = $map['PubVideo360'];
        }
        if (isset($map['PubVideo720'])) {
            $model->pubVideo720 = $map['PubVideo720'];
        }
        if (isset($map['PubVideoScreenShare'])) {
            $model->pubVideoScreenShare = $map['PubVideoScreenShare'];
        }
        if (isset($map['SubAudio'])) {
            $model->subAudio = $map['SubAudio'];
        }
        if (isset($map['SubVideo1080'])) {
            $model->subVideo1080 = $map['SubVideo1080'];
        }
        if (isset($map['SubVideo360'])) {
            $model->subVideo360 = $map['SubVideo360'];
        }
        if (isset($map['SubVideo720'])) {
            $model->subVideo720 = $map['SubVideo720'];
        }
        if (isset($map['SubVideoScreenShare'])) {
            $model->subVideoScreenShare = $map['SubVideoScreenShare'];
        }

        return $model;
    }
}
