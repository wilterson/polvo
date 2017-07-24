<?php

namespace App\Presenters;

use App\Transformers\SellTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class SellPresenter
 *
 * @package namespace App\Presenters;
 */
class SellPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new SellTransformer();
    }
}
