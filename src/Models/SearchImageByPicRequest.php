<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20201214\Models;

use AlibabaCloud\Tea\Model;

class SearchImageByPicRequest extends Model
{
    /**
     * @var int
     */
    public $categoryId;

    /**
     * @var bool
     */
    public $crop;

    /**
     * @var string
     */
    public $filter;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var int
     */
    public $num;

    /**
     * @var string
     */
    public $picContent;

    /**
     * @var string
     */
    public $region;

    /**
     * @var int
     */
    public $start;
    protected $_name = [
        'categoryId'   => 'CategoryId',
        'crop'         => 'Crop',
        'filter'       => 'Filter',
        'instanceName' => 'InstanceName',
        'num'          => 'Num',
        'picContent'   => 'PicContent',
        'region'       => 'Region',
        'start'        => 'Start',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }
        if (null !== $this->crop) {
            $res['Crop'] = $this->crop;
        }
        if (null !== $this->filter) {
            $res['Filter'] = $this->filter;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->num) {
            $res['Num'] = $this->num;
        }
        if (null !== $this->picContent) {
            $res['PicContent'] = $this->picContent;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->start) {
            $res['Start'] = $this->start;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchImageByPicRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }
        if (isset($map['Crop'])) {
            $model->crop = $map['Crop'];
        }
        if (isset($map['Filter'])) {
            $model->filter = $map['Filter'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['Num'])) {
            $model->num = $map['Num'];
        }
        if (isset($map['PicContent'])) {
            $model->picContent = $map['PicContent'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Start'])) {
            $model->start = $map['Start'];
        }

        return $model;
    }
}
