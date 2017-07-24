<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\SellsItemsRepository;
use App\Entities\SellsItems;
use App\Validators\SellsItemsValidator;

/**
 * Class SellsItemsRepositoryEloquent
 * @package namespace App\Repositories;
 */
class SellsItemsRepositoryEloquent extends BaseRepository implements SellsItemsRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return SellsItems::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
