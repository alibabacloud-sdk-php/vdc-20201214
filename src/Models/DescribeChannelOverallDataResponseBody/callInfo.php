<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeChannelOverallDataResponseBody;

use AlibabaCloud\Tea\Model;

class callInfo extends Model
{
    /**
     * @description 应用ID。
     *
     * @var string
     */
    public $appId;

    /**
     * @description 通信状态，取值：IN：进行中。OUT：已结束
     *
     * @var string
     */
    public $callStatus;

    /**
     * @description 频道ID。
     *
     * @var string
     */
    public $channelId;

    /**
     * @description 创建通信的时间戳，使用UNIX时间戳表示，单位：秒。
     *
     * @var int
     */
    public $createdTs;

    /**
     * @description 释放通信的时间戳，使用UNIX时间戳表示，单位：秒。
     *
     * @var int
     */
    public $destroyedTs;

    /**
     * @description 通信时长，单位：秒。
     *
     * @var int
     */
    public $duration;
    protected $_name = [
        'appId'       => 'AppId',
        'callStatus'  => 'CallStatus',
        'channelId'   => 'ChannelId',
        'createdTs'   => 'CreatedTs',
        'destroyedTs' => 'DestroyedTs',
        'duration'    => 'Duration',
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
        if (null !== $this->callStatus) {
            $res['CallStatus'] = $this->callStatus;
        }
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->createdTs) {
            $res['CreatedTs'] = $this->createdTs;
        }
        if (null !== $this->destroyedTs) {
            $res['DestroyedTs'] = $this->destroyedTs;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return callInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['CallStatus'])) {
            $model->callStatus = $map['CallStatus'];
        }
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['CreatedTs'])) {
            $model->createdTs = $map['CreatedTs'];
        }
        if (isset($map['DestroyedTs'])) {
            $model->destroyedTs = $map['DestroyedTs'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        return $model;
    }
}
