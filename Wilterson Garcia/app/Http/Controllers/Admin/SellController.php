<?php

namespace App\Http\Controllers\Admin;

use App\Repositories\ProductRepositoryEloquent;
use App\Repositories\SellRepositoryEloquent;
use App\Repositories\SellsItemsRepositoryEloquent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\SellService;

class SellController extends Controller
{
    /**
     * @var SellService
     */
    private $service;
    /**
     * @var SellRepositoryEloquent
     */
    private $repository;
    /**
     * @var SellsItemsRepositoryEloquent
     */
    private $sellsItemsRepository;
    /**
     * @var ProductRepositoryEloquent
     */
    private $productRepository;

    /**
     * SellController constructor.
     * @param SellService $service
     * @param SellRepositoryEloquent $repository
     * @param SellsItemsRepositoryEloquent $sellsItemsRepository
     * @param ProductRepositoryEloquent $productRepository
     */
    public function __construct(SellService $service, SellRepositoryEloquent $repository,
        SellsItemsRepositoryEloquent $sellsItemsRepository,
        ProductRepositoryEloquent $productRepository
    )
    {
        $this->service = $service;
        $this->repository = $repository;
        $this->sellsItemsRepository = $sellsItemsRepository;
        $this->productRepository = $productRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sells = $this->service->all();
        return view('admin.sells.index', compact('sells'));
    }

    public function store(Request $request)
    {
        $items = $request->get('ids');

        //Inicia a venda
        $this->service->addSell($items);

    }

    public function show($id)
    {
        $sell = $this->repository->findWhere(['id' => $id])["data"][0];
        $products = $this->sellsItemsRepository->findWhere(['sells_id' => $sell['sell_cod']]);

        $prods = [];

        foreach ($products as $product) {
            array_push($prods, $this->productRepository->findWhere(['id' => $product->product_id])["data"][0]);
        }

        return view('admin.sells.details', compact('sell', 'prods'));
    }

    public function destroy($id)
    {
        $this->service->delete($id);
        print true;
    }
}
