<?php

namespace Modules\Product\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Product\Repositories\ProductRepository;
use Modules\Product\Entities\ProductDatatables;
use GuzzleHttp\Psr7\UploadedFile;
use Hexters\Ladmin\Exceptions\LadminException;
use Modules\Product\Entities\Product;
use Modules\Product\Entities\ProductDetail;

class ProductController extends Controller
{
    protected $repository;

    public function __construct(ProductRepository $repository) {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        ladmin()->allow('administrator.master-data.product.index');
        $data['product'] = Product::with('detail')->first();

        return ProductDataTables::view('product::index', $data);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        ladmin()->allow('administrator.master-data.product.create');
        $data['product'] = new Product();

        return view('product::create', $data);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('product::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        ladmin()->allow('administrator.master-data.product.update');
        $data['product'] = $this->repository->getProductById($id);
        return view('product::edit', $data);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
