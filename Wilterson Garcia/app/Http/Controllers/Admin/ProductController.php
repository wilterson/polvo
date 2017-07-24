<?php

namespace App\Http\Controllers\Admin;


use App\Repositories\ProductRepositoryEloquent;
use App\Services\ProductService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * @var ProductService
     */
    private $service;
    /**
     * @var ProductRepository
     */
    private $repository;

    /**
     * ProductController constructor.
     * @param ProductService $service
     * @param ProductRepositoryEloquent $repository
     */
    public function __construct(ProductService $service, ProductRepositoryEloquent $repository)
    {
        $this->service = $service;
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = $this->service->all();
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        if(isset($data['image'])){
            $file = $request->file('image');
            $path = $file->getRealPath();
            $type = pathinfo($path, PATHINFO_EXTENSION);
            $data_path = file_get_contents($path);
            $base64 = base64_encode($data_path);
            $addImage = $this->service->upload(['base64' => $base64]);
            $data['image'] = $addImage;
        }

        $return = $this->service->create($data);

        return redirect()->route('products.index')->with(["return" => $return->getData()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prod = $this->repository->skipPresenter(false)->findWhere(['id' => $id])['data'][0];
        return view('admin.products.edit', compact('prod'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $return = $this->service->update($request->all(), $id);
        return redirect()->route('products.index')->with(["return" => $return->getData()]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->service->delete($id);
        print true;
    }
}
