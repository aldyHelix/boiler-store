<?php

namespace Modules\SignaturePlayer\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\SignaturePlayer\Repositories\SignaturePlayerRepository;
use Modules\SignaturePlayer\Entities\SignaturePlayerDatatables;
use GuzzleHttp\Psr7\UploadedFile;
use Hexters\Ladmin\Exceptions\LadminException;
use Modules\SignaturePlayer\Entities\SignaturePlayer;

class SignaturePlayerController extends Controller
{
    protected $repository;

    public function __construct(SignaturePlayerRepository $repository) {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(SignaturePlayerDatatables $dataTables)
    {
        ladmin()->allow('administrator.master-data.signature-player.index');

        return $dataTables->render('signatureplayer::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        ladmin()->allow('administrator.master-data.signature-player.create');
        $data['signature'] = new SignaturePlayer();

        return view('signatureplayer::create', $data);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        try {
            $this->repository->createSignaturePlayer($request);
            session()->flash('success', [
                'SignaturePlayer has been created sucessfully'
            ]);
            return redirect()->back();
        } catch (LadminException $e) {
            return redirect()->back()->withErrors([
                $e->getMessage()
            ]);
        }
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('signatureplayer::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        ladmin()->allow('administrator.master-data.signature-player.update');
        $data['signature'] = $this->repository->getSignaturePlayerById($id);
        return view('signatureplayer::edit', $data);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        try {
            $this->repository->updateSignaturePlayer($request, $id);
            session()->flash('success', [
                'SignaturePlayer has been updated sucessfully'
            ]);
            return redirect()->back();
        } catch (LadminException $e) {
            return redirect()->back()->withErrors([
                $e->getMessage()
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        try {
            $deleted = $this->repository->deleteSignaturePlayer($id);

            if($deleted) {
                session()->flash('success', [
                    'SignaturePlayer has been deleted sucessfully'
                ]);
                return redirect()->back();
            }
        } catch (LadminException $e) {
            return redirect()->back()->withErrors([
                $e->getMessage()
            ]);
        }
    }
}
