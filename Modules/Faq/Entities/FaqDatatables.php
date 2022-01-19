<?php

  namespace Modules\Faq\Entities;

  use Modules\Faq\Entities\Faq;
  use Hexters\Ladmin\Datatables\Datatables;
  use Hexters\Ladmin\Contracts\DataTablesInterface;

  class FaqDatatables extends Datatables implements DataTablesInterface {

    /**
     * Datatables function
     */
    public function render() {

      /**
       * Data from controller
       */
      $data = self::$data;

      return $this->eloquent(Faq::query())
        ->addIndexColumn()
        ->addColumn('action', function($item) {
          return view('ladmin::table.action', [
            'show' => null,
            'edit' => [
              'gate' => 'administrator.master-data.faq.update',
              'url' => route('administrator.master-data.faq.edit', [$item->id, 'back' => request()->fullUrl()])
            ],
            'destroy' => [
              'gate' => 'administrator.master-data.faq.destroy',
              'url' => route('administrator.master-data.faq.destroy', [$item->id, 'back' => request()->fullUrl()]),
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
        'title' => 'List Of Faq',
        'buttons' => null, // e.g : view('user.actions.create')
        'fields' => [
          __('No'),
          __('ID'),
          __('Title'),
          __('Question'),
          __('Answer'),
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
              ['data' => 'faq_title'],
              ['data' => 'faq_question'],
              ['data' => 'faq_answer'],
              ['data' => 'action', 'class' => 'text-center datatables-action', 'orderable' => false],
          ]
        ]
      ];

    }

  }
