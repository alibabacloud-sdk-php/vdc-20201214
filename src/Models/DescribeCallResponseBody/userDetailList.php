<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeCallResponseBody;

use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeCallResponseBody\userDetailList\durMetricStatData;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeCallResponseBody\userDetailList\onlinePeriods;
use AlibabaCloud\Tea\Model;

class userDetailList extends Model
{
    /**
     * @description 通话体验，取值：GOOD:优良，BAD:欠佳。
     *
     * @var string
     */
    public $callExp;

    /**
     * @description 创建通话时间，使用UNIX时间戳表示，单位：秒。
     *
     * @var int
     */
    public $createdTs;

    /**
     * @description 释放通话时间，使用UNIX时间戳表示，单位：秒。通话未结束时值为0。
     *
     * @var int
     */
    public $destroyedTs;

    /**
     * @description 时长统计数据
     *
     * @var durMetricStatData
     */
    public $durMetricStatData;

    /**
     * @description 通话时长，首次进入到最后离开，单位：秒。
     *
     * @var int
     */
    public $duration;

    /**
     * @description 地理位置信息，例如：北京市-北京市
     *
     * @var string
     */
    public $location;

    /**
     * @description 网络类型，如WiFi，4G等
     *
     * @var string
     */
    public $network;

    /**
     * @description 网络类型，如WiFi，4G等
     *
     * @var string[]
     */
    public $networkList;

    /**
     * @description 在线时长，单位：秒。
     *
     * @var int
     */
    public $onlineDuration;

    /**
     * @description 在线时段信息。
     *
     * @var onlinePeriods[]
     */
    public $onlinePeriods;

    /**
     * @description 平台类型：若用户客户端为WEB则是浏览器类型，若客户端为NATIVE则是操作系统类型
     *
     * @var string
     */
    public $os;

    /**
     * @description 平台类型：若用户客户端为WEB则是浏览器类型，若客户端为NATIVE则是操作系统类型
     *
     * @var string[]
     */
    public $osList;

    /**
     * @description 用户角色，取值：SENDER：发布端。RECEIVER：订阅端。
     *
     * @var string[]
     */
    public $roles;

    /**
     * @description SDK版本，如1.0.0、1.1.1等
     *
     * @var string
     */
    public $sdkVersion;

    /**
     * @description SDK版本列表，如1.0.0、1.1.1等
     *
     * @var string[]
     */
    public $sdkVersionList;

    /**
     * @description 用户ID。
     *
     * @var string
     */
    public $userId;

    /**
     * @description 用户ID 别称
     *
     * @var string
     */
    public $userIdAlias;
    protected $_name = [
        'callExp'           => 'CallExp',
        'createdTs'         => 'CreatedTs',
        'destroyedTs'       => 'DestroyedTs',
        'durMetricStatData' => 'DurMetricStatData',
        'duration'          => 'Duration',
        'location'          => 'Location',
        'network'           => 'Network',
        'networkList'       => 'NetworkList',
        'onlineDuration'    => 'OnlineDuration',
        'onlinePeriods'     => 'OnlinePeriods',
        'os'                => 'Os',
        'osList'            => 'OsList',
        'roles'             => 'Roles',
        'sdkVersion'        => 'SdkVersion',
        'sdkVersionList'    => 'SdkVersionList',
        'userId'            => 'UserId',
        'userIdAlias'       => 'UserIdAlias',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callExp) {
            $res['CallExp'] = $this->callExp;
        }
        if (null !== $this->createdTs) {
            $res['CreatedTs'] = $this->createdTs;
        }
        if (null !== $this->destroyedTs) {
            $res['DestroyedTs'] = $this->destroyedTs;
        }
        if (null !== $this->durMetricStatData) {
            $res['DurMetricStatData'] = null !== $this->durMetricStatData ? $this->durMetricStatData->toMap() : null;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->network) {
            $res['Network'] = $this->network;
        }
        if (null !== $this->networkList) {
            $res['NetworkList'] = $this->networkList;
        }
        if (null !== $this->onlineDuration) {
            $res['OnlineDuration'] = $this->onlineDuration;
        }
        if (null !== $this->onlinePeriods) {
            $res['OnlinePeriods'] = [];
            if (null !== $this->onlinePeriods && \is_array($this->onlinePeriods)) {
                $n = 0;
                foreach ($this->onlinePeriods as $item) {
                    $res['OnlinePeriods'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->os) {
            $res['Os'] = $this->os;
        }
        if (null !== $this->osList) {
            $res['OsList'] = $this->osList;
        }
        if (null !== $this->roles) {
            $res['Roles'] = $this->roles;
        }
        if (null !== $this->sdkVersion) {
            $res['SdkVersion'] = $this->sdkVersion;
        }
        if (null !== $this->sdkVersionList) {
            $res['SdkVersionList'] = $this->sdkVersionList;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userIdAlias) {
            $res['UserIdAlias'] = $this->userIdAlias;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userDetailList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallExp'])) {
            $model->callExp = $map['CallExp'];
        }
        if (isset($map['CreatedTs'])) {
            $model->createdTs = $map['CreatedTs'];
        }
        if (isset($map['DestroyedTs'])) {
            $model->destroyedTs = $map['DestroyedTs'];
        }
        if (isset($map['DurMetricStatData'])) {
            $model->durMetricStatData = durMetricStatData::fromMap($map['DurMetricStatData']);
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['Network'])) {
            $model->network = $map['Network'];
        }
        if (isset($map['NetworkList'])) {
            if (!empty($map['NetworkList'])) {
                $model->networkList = $map['NetworkList'];
            }
        }
        if (isset($map['OnlineDuration'])) {
            $model->onlineDuration = $map['OnlineDuration'];
        }
        if (isset($map['OnlinePeriods'])) {
            if (!empty($map['OnlinePeriods'])) {
                $model->onlinePeriods = [];
                $n                    = 0;
                foreach ($map['OnlinePeriods'] as $item) {
                    $model->onlinePeriods[$n++] = null !== $item ? onlinePeriods::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Os'])) {
            $model->os = $map['Os'];
        }
        if (isset($map['OsList'])) {
            if (!empty($map['OsList'])) {
                $model->osList = $map['OsList'];
            }
        }
        if (isset($map['Roles'])) {
            if (!empty($map['Roles'])) {
                $model->roles = $map['Roles'];
            }
        }
        if (isset($map['SdkVersion'])) {
            $model->sdkVersion = $map['SdkVersion'];
        }
        if (isset($map['SdkVersionList'])) {
            if (!empty($map['SdkVersionList'])) {
                $model->sdkVersionList = $map['SdkVersionList'];
            }
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserIdAlias'])) {
            $model->userIdAlias = $map['UserIdAlias'];
        }

        return $model;
    }
}
