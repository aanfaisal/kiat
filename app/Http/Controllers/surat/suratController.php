<?php

namespace App\Http\Controllers\surat;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\surat;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use DB;

class suratController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $surat = surat::paginate(15);

        return view('surat.index', compact('surat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('surat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['nama' => 'required', 'status' => 'required', 'tanggal' => 'required', ]);

        surat::create($request->all());

        Session::flash('flash_message', 'surat Telah Ditambahkan!');

        return redirect('surat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $surat_id
     *
     * @return Response
     */
    public function show($surat_id)
    {
        $surat = surat::findOrFail($surat_id);

        return view('surat.show', compact('surat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $surat_id
     *
     * @return Response
     */
    public function edit($surat_id)
    {
        $surat = surat::findOrFail($surat_id);

        return view('surat.edit', compact('surat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $surat_id
     *
     * @return Response
     */
    public function update($surat_id, Request $request)
    {
        $this->validate($request, ['nama' => 'required', 'status' => 'required', 'tanggal' => 'required', ]);

        $surat = surat::findOrFail($surat_id);
        $surat->update($request->all());

        Session::flash('flash_message', 'surat Telah Diupdate!');

        return redirect('surat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $surat_id
     *
     * @return Response
     */
    public function destroy($surat_id)
    {
        surat::destroy($surat_id);

        Session::flash('flash_message', 'surat Telah Dihapus!');

        return redirect('surat');
    }

}
