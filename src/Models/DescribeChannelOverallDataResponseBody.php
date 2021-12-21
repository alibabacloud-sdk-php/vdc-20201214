<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models;

use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeChannelOverallDataResponseBody\callInfo;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeChannelOverallDataResponseBody\metricDatas;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeChannelOverallDataResponseBody\overallData;
use AlibabaCloud\Tea\Model;

class DescribeChannelOverallDataResponseBody extends Model
{
    /**
     * @description 通信基本信息。
     *
     * @var callInfo
     */
    public $callInfo;

    /**
     * @description 指标数据列表。
     *
     * @var metricDatas[]
     */
    public $metricDatas;

    /**
     * @description 概览数据。
     *
     * @var overallData
     */
    public $overallData;

    /**
     * @description 请求ID。
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'callInfo'    => 'CallInfo',
        'metricDatas' => 'MetricDatas',
        'overallData' => 'OverallData',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callInfo) {
            $res['CallInfo'] = null !== $this->callInfo ? $this->callInfo->toMap() : null;
        }
        if (null !== $this->metricDatas) {
            $res['MetricDatas'] = [];
            if (null !== $this->metricDatas && \is_array($this->metricDatas)) {
                $n = 0;
                foreach ($this->metricDatas as $item) {
                    $res['MetricDatas'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->overallData) {
            $res['OverallData'] = null !== $this->overallData ? $this->overallData->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeChannelOverallDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallInfo'])) {
            $model->callInfo = callInfo::fromMap($map['CallInfo']);
        }
        if (isset($map['MetricDatas'])) {
            if (!empty($map['MetricDatas'])) {
                $model->metricDatas = [];
                $n                  = 0;
                foreach ($map['MetricDatas'] as $item) {
                    $model->metricDatas[$n++] = null !== $item ? metricDatas::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['OverallData'])) {
            $model->overallData = overallData::fromMap($map['OverallData']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
