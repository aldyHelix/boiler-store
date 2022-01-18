<?php

  namespace Modules\SignaturePlayer\Entities;

  use Modules\SignaturePlayer\Entities\SignaturePlayer;
  use Hexters\Ladmin\Datatables\Datatables;
  use Hexters\Ladmin\Contracts\DataTablesInterface;

  class SignaturePlayerDatatables extends Datatables implements DataTablesInterface {

    /**
     * Datatables function
     */
    public function render() {

      /**
       * Data from controller
       */
      $data = self::$data;

      return $this->eloquent(SignaturePlayer::query())
        ->addIndexColumn()
        ->addColumn('action', function($item) {
          return view('ladmin::table.action', [
            'show' => null,
            'edit' => [
              'gate' => 'administrator.master-data.signature-player.update',
              'url' => route('administrator.master-data.signature-player.edit', [$item->id, 'back' => request()->fullUrl()])
            ],
            'destroy' => [
              'gate' => 'administrator.master-data.signature-player.destroy',
              'url' => route('administrator.master-data.signature-player.destroy', [$item->id, 'back' => request()->fullUrl()]),
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
        'title' => 'List Of Signature Player',
        'buttons' => null, // e.g : view('user.actions.create')
        'fields' => [
          __('No'),
          __('ID'),
          __('Title'),
          __('Player Name'),
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
              ['data' => 'signature_title'],
              ['data' => 'signature_player_name'],
              ['data' => 'action', 'class' => 'text-center datatables-action', 'orderable' => false],
          ]
        ]
      ];

    }

  }
