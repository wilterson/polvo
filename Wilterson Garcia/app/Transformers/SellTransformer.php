<?php

namespace App\Transformers;

use App\Entities\Sell;
use League\Fractal\TransformerAbstract;

/**
 * Class SellTransformer
 * @package App\Transformers
 */
class SellTransformer extends TransformerAbstract
{


    /**
     * @param Sell $model
     * @return array
     */
    public function transform(Sell $model)
    {
        return [
            'id'       => (int) $model->id,
            'sell_cod' => $model->sell_cod,
            'buyer'    => $model->buyer,
            'date'     => date('d/m/Y', strtotime($model->date)),
            'total'    => $model->total,

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
