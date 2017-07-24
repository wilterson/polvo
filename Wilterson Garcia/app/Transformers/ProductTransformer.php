<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\Product;

/**
 * Class ProductTransformer
 * @package namespace App\Transformers;
 */
class ProductTransformer extends TransformerAbstract
{

    /**
     * Transform the \Product entity
     * @param \Product $model
     *
     * @return array
     */
    public function transform(Product $model)
    {
        return [
            'id'         => (int) $model->id,
            'name'       => $model->name,
            'sku'        => $model->sku,
            'category'   => (string) $model->category,
            'price'      => $model->price,
            'description'=> (string) $model->description,
            'image'      => $model->image,

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
