<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\MYTC\Models;

use AlibabaCloud\Tea\Model;

class UpdateCodeRegistrationRequest extends Model
{
    // OAuth模式下的授权token
    /**
     * @var string
     */
    public $authToken;

    /**
     * @var string
     */
    public $productInstanceId;

    // 业务类型，客户自定义标签，做code数据隔离使用
    /**
     * @var string
     */
    public $bizType;

    // 溯源码，代表该账户的唯一资源标识。该字段不更新，仅做过滤使用。
    /**
     * @var string
     */
    public $code;

    // 注册记录唯一标识
    /**
     * @var string
     */
    public $uniqueId;

    // 状态,客户自定义状态，用于过滤查询使用。只能由字符+数字构成
    /**
     * @var string
     */
    public $status;

    // 注册内容。若已上链，则不可更新该信息。
    //
    /**
     * @var string
     */
    public $content;

    // 关联溯源码列表。最多200条关联码，关联码格式要求和溯源码要求一致。 可以通过接口查询关联溯源码绑定的信息。若已上链，则不可更新该信息。
    /**
     * @var string[]
     */
    public $relationCodes;

    // 关联溯源码递归检查，检查最多5层。默认NO_CHECK。枚举值如下，
    // NO_CHECK: 不做递归检查;
    // TREE_CHECK: 树结构检查;
    // DAG_CHECK: 有向无环图检查;
    /**
     * @var string
     */
    public $recursionType;

    // 是否上链，默认true。 为false时，仅做DB数据保存不上链。 若content数据大小超过要求限制，仅会保存content的hash值上链
    /**
     * @var bool
     */
    public $upChainFlag;
    protected $_name = [
        'authToken'         => 'auth_token',
        'productInstanceId' => 'product_instance_id',
        'bizType'           => 'biz_type',
        'code'              => 'code',
        'uniqueId'          => 'unique_id',
        'status'            => 'status',
        'content'           => 'content',
        'relationCodes'     => 'relation_codes',
        'recursionType'     => 'recursion_type',
        'upChainFlag'       => 'up_chain_flag',
    ];

    public function validate()
    {
        Model::validateRequired('bizType', $this->bizType, true);
        Model::validateRequired('uniqueId', $this->uniqueId, true);
        Model::validateMaxLength('bizType', $this->bizType, 32);
        Model::validateMaxLength('code', $this->code, 160);
        Model::validateMaxLength('uniqueId', $this->uniqueId, 64);
        Model::validateMaxLength('status', $this->status, 32);
        Model::validateMaxLength('recursionType', $this->recursionType, 32);
        Model::validateMinLength('bizType', $this->bizType, 1);
        Model::validateMinLength('code', $this->code, 1);
        Model::validateMinLength('uniqueId', $this->uniqueId, 1);
        Model::validateMinLength('status', $this->status, 1);
        Model::validateMinLength('recursionType', $this->recursionType, 1);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authToken) {
            $res['auth_token'] = $this->authToken;
        }
        if (null !== $this->productInstanceId) {
            $res['product_instance_id'] = $this->productInstanceId;
        }
        if (null !== $this->bizType) {
            $res['biz_type'] = $this->bizType;
        }
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        if (null !== $this->uniqueId) {
            $res['unique_id'] = $this->uniqueId;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }
        if (null !== $this->relationCodes) {
            $res['relation_codes'] = $this->relationCodes;
        }
        if (null !== $this->recursionType) {
            $res['recursion_type'] = $this->recursionType;
        }
        if (null !== $this->upChainFlag) {
            $res['up_chain_flag'] = $this->upChainFlag;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateCodeRegistrationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['auth_token'])) {
            $model->authToken = $map['auth_token'];
        }
        if (isset($map['product_instance_id'])) {
            $model->productInstanceId = $map['product_instance_id'];
        }
        if (isset($map['biz_type'])) {
            $model->bizType = $map['biz_type'];
        }
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }
        if (isset($map['unique_id'])) {
            $model->uniqueId = $map['unique_id'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }
        if (isset($map['relation_codes'])) {
            if (!empty($map['relation_codes'])) {
                $model->relationCodes = $map['relation_codes'];
            }
        }
        if (isset($map['recursion_type'])) {
            $model->recursionType = $map['recursion_type'];
        }
        if (isset($map['up_chain_flag'])) {
            $model->upChainFlag = $map['up_chain_flag'];
        }

        return $model;
    }
}
