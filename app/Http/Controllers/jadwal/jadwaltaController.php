<?php

namespace App\Http\Controllers\jadwal;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\jadwaltum;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use DB;

class jadwaltaController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $jadwalta = jadwaltum::paginate(15);

        return view('jadwalta.index', compact('jadwalta'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('jadwalta.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['nama' => 'required', 'jenista_id' => 'required', 'tglmulai' => 'required', 'tglslese' => 'required', ]);

        jadwaltum::create($request->all());

        Session::flash('flash_message', 'jadwaltum Telah Ditambahkan!');

        return redirect('jadwalta');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $jadwalta_id
     *
     * @return Response
     */
    public function show($jadwalta_id)
    {
        $jadwaltum = jadwaltum::findOrFail($jadwalta_id);

        return view('jadwalta.show', compact('jadwaltum'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $jadwalta_id
     *
     * @return Response
     */
    public function edit($jadwalta_id)
    {
        $jadwaltum = jadwaltum::findOrFail($jadwalta_id);

        return view('jadwalta.edit', compact('jadwaltum'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $jadwalta_id
     *
     * @return Response
     */
    public function update($jadwalta_id, Request $request)
    {

        $this->validate($request, ['nama' => 'required', 'jenista_id' => 'required', 'tglmulai' => 'required', 'tglslese' => 'required', ]);

        $jadwaltum = jadwaltum::findOrFail($jadwalta_id);
        $jadwaltum->update($request->all());

        Session::flash('flash_message', 'jadwaltum Telah Diupdate!');

        return redirect('jadwalta');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $jadwalta_id
     *
     * @return Response
     */
    public function destroy($jadwalta_id)
    {
        jadwaltum::destroy($jadwalta_id);

        Session::flash('flash_message', 'jadwaltum Telah Dihapus!');

        return redirect('jadwalta');
    }

}
