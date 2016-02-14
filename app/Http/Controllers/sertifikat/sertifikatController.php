<?php

namespace App\Http\Controllers\sertifikat;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\sertifikat;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use DB;

class sertifikatController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $sertifikat = sertifikat::paginate(15);

        return view('sertifikat.index', compact('sertifikat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('sertifikat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {

        sertifikat::create($request->all());

        Session::flash('flash_message', 'Sertifikat Telah Ditambahkan!');

        return redirect('sertifikat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $sertifikat_id
     *
     * @return Response
     */
    public function show($sertifikat_id)
    {
        $sertifikat = sertifikat::findOrFail($sertifikat_id);

        return view('sertifikat.show', compact('sertifikat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $sertifikat_id
     *
     * @return Response
     */
    public function edit($sertifikat_id)
    {
        $sertifikat = sertifikat::findOrFail($sertifikat_id);

        return view('sertifikat.edit', compact('sertifikat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $sertifikat_id
     *
     * @return Response
     */
    public function update($sertifikat_id, Request $request)
    {

        $sertifikat = sertifikat::findOrFail($sertifikat_id);
        $sertifikat->update($request->all());

        Session::flash('flash_message', 'sertifikat Telah Diupdate!');

        return redirect('sertifikat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $sertifikat_id
     *
     * @return Response
     */
    public function destroy($sertifikat_id)
    {
        sertifikat::destroy($sertifikat_id);

        Session::flash('flash_message', 'sertifikat Telah Dihapus!');

        return redirect('sertifikat');
    }

}
