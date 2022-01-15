<?php

  namespace Modules\Product\Entities;

  use Modules\Product\Entities\Product;
  use Hexters\Ladmin\Datatables\Datatables;
  use Hexters\Ladmin\Contracts\DataTablesInterface;

  class ProductDatatables extends Datatables implements DataTablesInterface {

    /**
     * Datatables function
     */
    public function render() {

      /**
       * Data from controller
       */
      $data = self::$data;

      return $this->eloquent(Product::query())
        ->addIndexColumn()
        ->addColumn('action', function($item) {
          return view('ladmin::table.action', [
            'show' => null,
            'edit' => [
              'gate' => 'administrator.master-data.product.update',
              'url' => route('administrator.master-data.product.edit', [$item->id, 'back' => request()->fullUrl()])
            ],
            'destroy' => [
              'gate' => 'administrator.master-data.product.destroy',
              'url' => route('administrator.master-data.product.destroy', [$item->id, 'back' => request()->fullUrl()]),
            ]
          ]);
        })
        ->addColumn('image', function($item){
            $image = isset($item->image) ? 'uploads/'.$item->image : 'default/default.png';
            $url= asset('storage/images/'.$image);
            return '<img class="img-thumbnail m-2" width="75" src="'.$url.'" alt="product-image"></img>';
        })
        ->addColumn('selling_price', function($item) {
          return $item->detail->selling_price;
        })
        ->escapeColumns([])
        ->make(true);
    }

    /**
     * Datatables Option
     */
    public function options() {

      /**
       * Data from controller
       */
      $data = self::$data;

      return [
        'title' => 'List Of Model',
        'buttons' => null, // e.g : view('user.actions.create')
        'fields' => [
            __('No'),
            __('Image'),
            __('Code'),
            __('Name'),
            __('Price'),
            __('Action')
        ], // Table header
        /**
         * DataTables Options
         */
        'options' => [
          'processing' => true,
          'serverSide' => true,
          'ajax' => request()->fullurl(),
          'columns' => [
              ['data' => 'DT_RowIndex', 'name' => 'DT_RowIndex', 'orderable' => false, 'class' => 'datatables-number'],
              ['data' => 'image', 'orderable' => false, 'class' => 'text-center', 'width' => '80px', 'height' => '80px'],
              ['data' => 'product_code'],
              ['data' => 'product_name'],
              ['data' => 'selling_price'],
              ['data' => 'action', 'class' => 'text-center datatables-action', 'orderable' => false],
          ]
        ]
      ];

    }

  }
