<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models;

use AlibabaCloud\Tea\Model;

class DescribeFaultDiagnosisFactorDistributionStatRequest extends Model
{
    /**
     * @description APP ID。
     *
     * @var string
     */
    public $appId;

    /**
     * @description 查询的开始时间，使用UNIX时间戳表示，单位：秒。
     *
     * @var int
     */
    public $startTs;

    /**
     * @description 查询的结束时间，使用UNIX时间戳表示，单位：秒。
     *
     * @var int
     */
    public $endTs;
    protected $_name = [
        'appId'   => 'AppId',
        'startTs' => 'StartTs',
        'endTs'   => 'EndTs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->startTs) {
            $res['StartTs'] = $this->startTs;
        }
        if (null !== $this->endTs) {
            $res['EndTs'] = $this->endTs;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeFaultDiagnosisFactorDistributionStatRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['StartTs'])) {
            $model->startTs = $map['StartTs'];
        }
        if (isset($map['EndTs'])) {
            $model->endTs = $map['EndTs'];
        }

        return $model;
    }
}
