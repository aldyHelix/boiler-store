<?php

namespace Modules\Tag\Repositories;

use Illuminate\Http\Request;
use Modules\Tag\Entities\Tag;
use Hexters\Ladmin\Contracts\MasterRepositoryInterface;
use App\Repositories\Repository;
use App\Services\TagService;

class TagRepository extends Repository implements MasterRepositoryInterface {

  public function __construct(TagService $tagService, Tag $model) {
    parent::__construct($model);
    $this->tagService = $tagService;
  }

  /**
   * Update user
   *
   * @param Request $request
   * @param [Model] $user
   * @return Void
   */
  public function updateTag(Request $request, $id) {
    $tag = $this->tagService->updateTag($request);

    $get_tag = $this->model->findOrFail($id);
    $get_tag->update($tag);
  }

  public function createTag(Request $request) {
    $tag = $this->tagService->insertTag($request);

    $this->model->create($tag);
  }

  public function getTagById($id){
      return $this->model->findOrFail($id);
  }

  public function deleteTag($id){
      return $this->getTagById($id)->delete();
  }

  public function getTagIdAndNameLivewire(){
      return $this->model->select('id', 'tag_title as value')->get();
  }
}
