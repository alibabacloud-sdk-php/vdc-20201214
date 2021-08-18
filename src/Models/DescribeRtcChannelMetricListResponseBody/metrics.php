<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeRtcChannelMetricListResponseBody;

use AlibabaCloud\Tea\Model;

class metrics extends Model
{
    /**
     * @description 用户ID
     *
     * @var string
     */
    public $uid;

    /**
     * @description 指标ID
     *
     * @var int
     */
    public $mid;

    /**
     * @description 指标键值对,指标发生时间:指标值
     *
     * @var mixed[]
     */
    public $KVs;
    protected $_name = [
        'uid' => 'Uid',
        'mid' => 'Mid',
        'KVs' => 'KVs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }
        if (null !== $this->mid) {
            $res['Mid'] = $this->mid;
        }
        if (null !== $this->KVs) {
            $res['KVs'] = $this->KVs;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return metrics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }
        if (isset($map['Mid'])) {
            $model->mid = $map['Mid'];
        }
        if (isset($map['KVs'])) {
            $model->KVs = $map['KVs'];
        }

        return $model;
    }
}
