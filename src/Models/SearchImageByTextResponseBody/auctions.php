<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20201214\Models\SearchImageByTextResponseBody;

use AlibabaCloud\Dara\Model;

class auctions extends Model
{
    /**
     * @var int
     */
    public $categoryId;

    /**
     * @var string
     */
    public $customContent;

    /**
     * @var int
     */
    public $intAttr;

    /**
     * @var int
     */
    public $intAttr2;

    /**
     * @var int
     */
    public $intAttr3;

    /**
     * @var int
     */
    public $intAttr4;

    /**
     * @var string
     */
    public $picName;

    /**
     * @var string
     */
    public $productId;

    /**
     * @var float
     */
    public $score;

    /**
     * @var string
     */
    public $strAttr;

    /**
     * @var string
     */
    public $strAttr2;

    /**
     * @var string
     */
    public $strAttr3;

    /**
     * @var string
     */
    public $strAttr4;
    protected $_name = [
        'categoryId' => 'CategoryId',
        'customContent' => 'CustomContent',
        'intAttr' => 'IntAttr',
        'intAttr2' => 'IntAttr2',
        'intAttr3' => 'IntAttr3',
        'intAttr4' => 'IntAttr4',
        'picName' => 'PicName',
        'productId' => 'ProductId',
        'score' => 'Score',
        'strAttr' => 'StrAttr',
        'strAttr2' => 'StrAttr2',
        'strAttr3' => 'StrAttr3',
        'strAttr4' => 'StrAttr4',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }

        if (null !== $this->customContent) {
            $res['CustomContent'] = $this->customContent;
        }

        if (null !== $this->intAttr) {
            $res['IntAttr'] = $this->intAttr;
        }

        if (null !== $this->intAttr2) {
            $res['IntAttr2'] = $this->intAttr2;
        }

        if (null !== $this->intAttr3) {
            $res['IntAttr3'] = $this->intAttr3;
        }

        if (null !== $this->intAttr4) {
            $res['IntAttr4'] = $this->intAttr4;
        }

        if (null !== $this->picName) {
            $res['PicName'] = $this->picName;
        }

        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }

        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }

        if (null !== $this->strAttr) {
            $res['StrAttr'] = $this->strAttr;
        }

        if (null !== $this->strAttr2) {
            $res['StrAttr2'] = $this->strAttr2;
        }

        if (null !== $this->strAttr3) {
            $res['StrAttr3'] = $this->strAttr3;
        }

        if (null !== $this->strAttr4) {
            $res['StrAttr4'] = $this->strAttr4;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }

        if (isset($map['CustomContent'])) {
            $model->customContent = $map['CustomContent'];
        }

        if (isset($map['IntAttr'])) {
            $model->intAttr = $map['IntAttr'];
        }

        if (isset($map['IntAttr2'])) {
            $model->intAttr2 = $map['IntAttr2'];
        }

        if (isset($map['IntAttr3'])) {
            $model->intAttr3 = $map['IntAttr3'];
        }

        if (isset($map['IntAttr4'])) {
            $model->intAttr4 = $map['IntAttr4'];
        }

        if (isset($map['PicName'])) {
            $model->picName = $map['PicName'];
        }

        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }

        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }

        if (isset($map['StrAttr'])) {
            $model->strAttr = $map['StrAttr'];
        }

        if (isset($map['StrAttr2'])) {
            $model->strAttr2 = $map['StrAttr2'];
        }

        if (isset($map['StrAttr3'])) {
            $model->strAttr3 = $map['StrAttr3'];
        }

        if (isset($map['StrAttr4'])) {
            $model->strAttr4 = $map['StrAttr4'];
        }

        return $model;
    }
}
