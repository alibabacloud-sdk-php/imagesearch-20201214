<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20201214\Models;

use AlibabaCloud\Tea\Model;

class DeleteImageRequest extends Model
{
    /**
     * @description The name of the Image Search instance. The name can be up to 20 characters in length.
     *
     * @example demoinstance1
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The name of the image.
     *
     *   If this parameter is not set, the system deletes all the images that correspond to the specified ProductId parameter.
     *   If this parameter is set, the system deletes only the image that is specified by the ProductId and PicName parameters.
     *
     * @example 2092061_1.jpg
     *
     * @var string
     */
    public $picName;

    /**
     * @description The ID of the commodity.
     *
     * >  A commodity may have multiple images.
     * @example 2092061_1
     *
     * @var string
     */
    public $productId;
    protected $_name = [
        'instanceName' => 'InstanceName',
        'picName'      => 'PicName',
        'productId'    => 'ProductId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->picName) {
            $res['PicName'] = $this->picName;
        }
        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteImageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['PicName'])) {
            $model->picName = $map['PicName'];
        }
        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }

        return $model;
    }
}
