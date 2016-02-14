<?php

namespace App\Http\Controllers\peserta;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\pesertum;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use DB;

class pesertaController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $peserta = pesertum::paginate(15);

        return view('peserta.index', compact('peserta'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('peserta.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['nama' => 'required', 'diklatta_id' => 'required', 'pend' => 'required', 'tmplahir' => 'required', 'jenkel' => 'required', 'pangkat' => 'required', 'jabatan' => 'required', 'instansi' => 'required', ]);

        pesertum::create($request->all());

        Session::flash('flash_message', 'pesertum Telah Ditambahkan!');

        return redirect('peserta');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $peserta_id
     *
     * @return Response
     */
    public function show($peserta_id)
    {
        $pesertum = pesertum::findOrFail($peserta_id);

        return view('peserta.show', compact('pesertum'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $peserta_id
     *
     * @return Response
     */
    public function edit($peserta_id)
    {
        $pesertum = pesertum::findOrFail($peserta_id);

        return view('peserta.edit', compact('pesertum'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $peserta_id
     *
     * @return Response
     */
    public function update($peserta_id, Request $request)
    {
        $this->validate($request, ['nama' => 'required', 'diklatta_id' => 'required', 'pend' => 'required', 'tmplahir' => 'required', 'jenkel' => 'required', 'pangkat' => 'required', 'jabatan' => 'required', 'instansi' => 'required', ]);

        $pesertum = pesertum::findOrFail($peserta_id);
        $pesertum->update($request->all());

        Session::flash('flash_message', 'pesertum Telah Diupdate!');

        return redirect('peserta');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $peserta_id
     *
     * @return Response
     */
    public function destroy($peserta_id)
    {
        pesertum::destroy($peserta_id);

        Session::flash('flash_message', 'pesertum Telah Dihapus!');

        return redirect('peserta');
    }

}
