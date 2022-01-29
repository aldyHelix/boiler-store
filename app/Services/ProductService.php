<?php
namespace App\Services;

use Illuminate\Http\Request;
use Modules\Product\Repositories\ProductRepository;
use Carbon\Carbon;

class ProductService {
    public function __construct(ProductRepository $productRepository) {
        $this->productRepository = $productRepository;
    }

	public function insertProduct($request){

	}

    public function updateProduct($request){

    }

    public function generateProductCode()
    {
        $new_code = '';
        $prefix = 'PD';
        $period = Carbon::now()->format('Ym');

        $latest_code = $this->productRepository->getLatestProductCode();

        if ($latest_code) {
            $latest_sequence = explode("_", $latest_code)[1];
            $new_sequence = $latest_sequence + 1;
            $formatted_sequence = str_pad($new_sequence, 4, '0', STR_PAD_LEFT);
            $new_code = $prefix . '_' . $formatted_sequence;
        } else {
            $new_code =  $prefix . '_' . '0001';
        }

        return $new_code;
    }
}
