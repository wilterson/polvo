<?php
/**
 * Created by PhpStorm.
 * User: Wilterson Garcia
 * Date: 24/07/2017
 * Time: 04:54
 */

namespace App\Services;


use App\Repositories\ProductRepositoryEloquent;
use App\Repositories\SellRepositoryEloquent;
use App\Repositories\SellsItemsRepositoryEloquent;

class SellService
{
    /**
     * @var SellRepositoryEloquent
     */
    private $repository;
    /**
     * @var ProductRepositoryEloquent
     */
    private $productRepository;
    /**
     * @var SellsItemsRepositoryEloquent
     */
    private $sellsItemRepository;

    /**
     * SellService constructor.
     * @param SellRepositoryEloquent $repository
     * @param SellsItemsRepositoryEloquent $sellsItemRepository
     * @param ProductRepositoryEloquent $productRepository
     */
    public function __construct(SellRepositoryEloquent $repository, SellsItemsRepositoryEloquent $sellsItemRepository ,ProductRepositoryEloquent $productRepository)
    {
        $this->repository = $repository;
        $this->productRepository = $productRepository;
        $this->sellsItemRepository = $sellsItemRepository;
    }

    public function all()
    {
        return $this->repository->skipPresenter(false)->all()["data"];
    }

    public function addSell($items)
    {
        $data['sell_cod'] = substr(uniqid(rand(), true),1, 9);
        $data['buyer'] = "John Doe";
        $data['total'] = 0;

        foreach ($items as $item){
            $prod = $this->productRepository->skipPresenter(true)->findWhere(['id' => $item])->first();
            $data['total'] += $prod->price;

            $itensVenda['sells_id'] = $data['sell_cod'];
            $itensVenda['product_id'] = $prod->id;

            //Registra Produto na table Sells_Items
            $this->sellsItemRepository->create($itensVenda);
        }

        $this->repository->create($data);

        print true;
    }

    public function delete($id)
    {
        $this->repository->delete($id);

        return response()->json([
            'success' => true,
            'message'    => 'A venda foi deletada com sucesso',
        ], 200);
    }
}