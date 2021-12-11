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
		$data = $request->all();
        $path = 'images/category';
        $do_upload = imageUpload($data['image'], $path ,'public');

        if(!$do_upload){
            abort(500, 'Failed upload image');
        } else {
            $data['category_image'] = $do_upload;
        }

        unset($data['image']);

        foreach ($data as $key => $value){ $category[$key] = $value; }

        return $category;
	}

    public function updateProduct($request){
        $data = $request->all();
        $path = 'images/category';

        if(isset($data['image'])) {
            $do_upload = imageUpload($data['image'], $path, 'public');

            if(!$do_upload){
                abort(500, 'Failed upload image');
            } else {
                $data['category_image'] = $do_upload;
            }

            unset($data['image']);
        }

        foreach ($data as $key => $value) { $category[$key] = $value; }

        return $category;
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
