<?php

namespace App\Http\Controllers\Admin;

use App\Services\ProductService;
use App\Services\SellService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    /**
     * @var ProductService
     */
    private $productService;
    /**
     * @var SellService
     */
    private $sellService;

    /**
     * AdminController constructor.
     * @param ProductService $productService
     * @param SellService $sellService
     */
    public function __construct(ProductService $productService, SellService $sellService)
    {
        $this->productService = $productService;
        $this->sellService = $sellService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = $this->productService->all();
        $productsCount = count($products);

        $sells = $this->sellService->all();
        $sellsCount = count($sells);

        return view('admin.index', compact('productsCount', 'sellsCount'));
    }
}
