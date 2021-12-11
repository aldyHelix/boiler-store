<?php

namespace Modules\Product\Repositories;

use Illuminate\Http\Request;
use Modules\Product\Entities\Product;
use Hexters\Ladmin\Contracts\MasterRepositoryInterface;
use App\Repositories\Repository;
use App\Services\ProductService;

class ProductRepository extends Repository implements MasterRepositoryInterface {

    protected $model;
    protected $service;

    public function __construct(ProductService $service, Product $model) {
        parent::__construct($model);
        $this->model = $model;
        $this->service = $service;
    }

    public function getLatestProductCode(){
        return $this->model->orderBy('product_code', 'desc')->pluck('product_code')->first();
    }

}
