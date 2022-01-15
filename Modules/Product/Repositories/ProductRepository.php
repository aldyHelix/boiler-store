<?php

namespace Modules\Product\Repositories;

use Illuminate\Http\Request;
use Modules\Product\Entities\Product;
use Hexters\Ladmin\Contracts\MasterRepositoryInterface;
use App\Repositories\Repository;

class ProductRepository extends Repository implements MasterRepositoryInterface {

    protected $model;

    public function __construct(Product $model) {
        parent::__construct($model);
        $this->model = $model;
    }

    public function getLatestProductCode(){
        return $this->model->orderBy('product_code', 'desc')->pluck('product_code')->first();
    }

    public function getProductById($id){
        return $this->model->findOrFail($id);
    }

}
