<?php

  namespace Modules\Banner\Entities;

  use Modules\Banner\Entities\Banner;
  use Hexters\Ladmin\Datatables\Datatables;
  use Hexters\Ladmin\Contracts\DataTablesInterface;

  class BannerDatatables extends Datatables implements DataTablesInterface {

    /**
     * Datatables function
     */
    public function render() {

      /**
       * Data from controller
       */
      $data = self::$data;

      return $this->eloquent(Banner::query())
        ->addIndexColumn()
        ->addColumn('action', function($item) {
          return view('ladmin::table.action', [
            'show' => null,
            'edit' => [
              'gate' => 'administrator.master-data.banner.update',
              'url' => route('administrator.master-data.banner.edit', [$item->id, 'back' => request()->fullUrl()])
            ],
            'destroy' => [
              'gate' => 'administrator.master-data.banner.destroy',
              'url' => route('administrator.master-data.banner.destroy', [$item->id, 'back' => request()->fullUrl()]),
            ]
          ]);
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
        'title' => 'List Of Banner',
        'buttons' => null, // e.g : view('user.actions.create')
        'fields' => [
          __('No'),
          __('Order'),
          __('Image'),
          __('Url'),
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
              ['data' => 'order', 'class' => 'text-center datatables-id'],
              ['data' => 'banner_image'],
              ['data' => 'banner_url'],
              ['data' => 'action', 'class' => 'text-center datatables-action', 'orderable' => false],
          ]
        ]
      ];

    }

  }
