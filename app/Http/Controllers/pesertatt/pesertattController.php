<?php

namespace App\Http\Controllers\pesertatt;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\pesertatt;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use DB;

class pesertattController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $pesertatt = pesertatt::paginate(15);

        return view('pesertatt.index', compact('pesertatt'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('pesertatt.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['nama' => 'required', 'diklattt_id' => 'required', 'pend' => 'required', 'tgllahir' => 'required', 'jenkel' => 'required', 'status' => 'required', 'agama' => 'required', 'pangkat' => 'required', 'jabatan' => 'required', 'instansi' => 'required', 'nohp' => 'required', ]);

        pesertatt::create($request->all());

        Session::flash('flash_message', 'pesertatt Telah Ditambahkan!');

        return redirect('pesertatt');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $pesertatt_id
     *
     * @return Response
     */
    public function show($pesertatt_id)
    {
        $pesertatt = pesertatt::findOrFail($pesertatt_id);

        return view('pesertatt.show', compact('pesertatt'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $pesertatt_id
     *
     * @return Response
     */
    public function edit($pesertatt_id)
    {
        $pesertatt = pesertatt::findOrFail($pesertatt_id);

        return view('pesertatt.edit', compact('pesertatt'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $pesertatt_id
     *
     * @return Response
     */
    public function update($pesertatt_id, Request $request)
    {
        $this->validate($request, ['nama' => 'required', 'diklattt_id' => 'required', 'pend' => 'required', 'tgllahir' => 'required', 'jenkel' => 'required', 'status' => 'required', 'agama' => 'required', 'pangkat' => 'required', 'jabatan' => 'required', 'instansi' => 'required', 'nohp' => 'required', ]);

        $pesertatt = pesertatt::findOrFail($pesertatt_id);
        $pesertatt->update($request->all());

        Session::flash('flash_message', 'pesertatt Telah Diupdate!');

        return redirect('pesertatt');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $pesertatt_id
     *
     * @return Response
     */
    public function destroy($pesertatt_id)
    {
        pesertatt::destroy($pesertatt_id);

        Session::flash('flash_message', 'pesertatt Telah Dihapus!');

        return redirect('pesertatt');
    }

}
