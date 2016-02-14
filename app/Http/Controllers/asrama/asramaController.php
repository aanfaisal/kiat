<?php

namespace App\Http\Controllers\asrama;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\asrama;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use DB;

class asramaController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $asrama = asrama::paginate(15);

        return view('asrama.index', compact('asrama'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('asrama.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['nama' => 'required', 'petugas' => 'required', 'atasan' => 'required', ]);

        asrama::create($request->all());

        Session::flash('flash_message', 'asrama Telah Ditambahkan!');

        return redirect('asrama');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $asrama_id
     *
     * @return Response
     */
    public function show($asrama_id)
    {
        $asrama = asrama::findOrFail($asrama_id);

        return view('asrama.show', compact('asrama'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $asrama_id
     *
     * @return Response
     */
    public function edit($asrama_id)
    {
        $asrama = asrama::findOrFail($asrama_id);

        return view('asrama.edit', compact('asrama'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $asrama_id
     *
     * @return Response
     */
    public function update($asrama_id, Request $request)
    {
        $this->validate($request, ['nama' => 'required', 'petugas' => 'required', 'atasan' => 'required', ]);

        $asrama = asrama::findOrFail($asrama_id);
        $asrama->update($request->all());

        Session::flash('flash_message', 'asrama Telah Diupdate!');

        return redirect('asrama');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $asrama_id
     *
     * @return Response
     */
    public function destroy($asrama_id)
    {
        asrama::destroy($asrama_id);

        Session::flash('flash_message', 'asrama Telah Dihapus!');

        return redirect('asrama');
    }

}
