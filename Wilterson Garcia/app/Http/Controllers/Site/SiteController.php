<?php

namespace App\Http\Controllers\Site;

use App\Services\ProductService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    /**
     * @var ProductService
     */
    private $service;

    /**
     * SiteController constructor.
     * @param ProductService $service
     */
    public function __construct(ProductService $service)
    {
        $this->service = $service;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = $this->service->all();
        return view('site.index', compact('products'));
    }

    public function products()
    {
        $products = $this->service->all();
        return view('site.products', compact('products'));
    }
}
