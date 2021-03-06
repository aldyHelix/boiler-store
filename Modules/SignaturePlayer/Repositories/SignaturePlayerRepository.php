<?php

namespace Modules\SignaturePlayer\Repositories;

use Illuminate\Http\Request;
use Modules\SignaturePlayer\Entities\SignaturePlayer;
use Hexters\Ladmin\Contracts\MasterRepositoryInterface;
use App\Repositories\Repository;
use App\Services\SignaturePlayerService;

class SignaturePlayerRepository extends Repository implements MasterRepositoryInterface {

  public function __construct(SignaturePlayerService $signaturePlayerService, SignaturePlayer $model) {
    parent::__construct($model);
    $this->signaturePlayerService = $signaturePlayerService;
  }

  /**
   * Update user
   *
   * @param Request $request
   * @param [Model] $user
   * @return Void
   */
  public function updateSignaturePlayer(Request $request, $id) {
    $signaturePlayer = $this->signaturePlayerService->updateSignaturePlayer($request);

    $get_signaturePlayer = $this->model->findOrFail($id);
    $get_signaturePlayer->update($signaturePlayer);
  }

  public function createSignaturePlayer(Request $request) {
    $signaturePlayer = $this->signaturePlayerService->insertSignaturePlayer($request);

    $this->model->create($signaturePlayer);
  }

  public function getSignaturePlayerById($id){
      return $this->model->findOrFail($id);
  }

  public function deleteSignaturePlayer($id){
      return $this->getSignaturePlayerById($id)->delete();
  }

  public function getSignatureTag(){
      return $this->model->select(
          'id as value',
          'signature_code as code',
          'signature_player_name as title',
          'signature_image as image'
          )->get();
  }
}
