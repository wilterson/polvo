<?php

namespace App\Repositories;

use App\Presenters\SellPresenter;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Entities\Sell;

/**
 * Class SellRepositoryEloquent
 * @package namespace App\Repositories;
 */
class SellRepositoryEloquent extends BaseRepository implements SellRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Sell::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

    public function presenter()
    {
        return SellPresenter::class;
    }
}
