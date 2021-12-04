<?php

  namespace Modules\Size\Entities;

  use Modules\Size\Entities\Size;
  use Hexters\Ladmin\Datatables\Datatables;
  use Hexters\Ladmin\Contracts\DataTablesInterface;

  class SizeDatatables extends Datatables implements DataTablesInterface {

    /**
     * Datatables function
     */
    public function render() {

      /**
       * Data from controller
       */
      $data = self::$data;

      return $this->eloquent(Size::query())
        ->addIndexColumn()
        ->addColumn('action', function($item) {
          return view('ladmin::table.action', [
            'show' => null,
            'edit' => [
              'gate' => 'administrator.master-data.size.update',
              'url' => route('administrator.master-data.size.edit', [$item->id, 'back' => request()->fullUrl()])
            ],
            'destroy' => [
              'gate' => 'administrator.master-data.size.destroy',
              'url' => route('administrator.master-data.size.destroy', [$item->id, 'back' => request()->fullUrl()]),
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
        'title' => 'List Of Size',
        'buttons' => null, // e.g : view('user.actions.create')
        'fields' => [
          __('No'),
          __('ID'),
          __('Title'),
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
              ['data' => 'id', 'class' => 'text-center datatables-id'],
              ['data' => 'size_title'],
              ['data' => 'action', 'class' => 'text-center datatables-action', 'orderable' => false],
          ]
        ]
      ];

    }

  }
