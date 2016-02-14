<?php

namespace App\Http\Controllers\diklatta;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\diklattum;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use DB;

class diklattaController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $diklatta = diklattum::paginate(15);

        return view('diklatta.index', compact('diklatta'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('diklatta.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['nama' => 'required', 'jenis_id' => 'required', ]);

        diklattum::create($request->all());

        Session::flash('flash_message', 'diklattum Telah Ditambahkan!');

        return redirect('diklatta');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $diklatta_id
     *
     * @return Response
     */
    public function show($diklatta_id)
    {
        $diklattum = diklattum::findOrFail($diklatta_id);

        return view('diklatta.show', compact('diklattum'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $diklatta_id
     *
     * @return Response
     */
    public function edit($diklatta_id)
    {
        $diklattum = diklattum::findOrFail($diklatta_id);

        return view('diklatta.edit', compact('diklattum'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $diklatta_id
     *
     * @return Response
     */
    public function update($diklatta_id, Request $request)
    {
        $this->validate($request, ['nama' => 'required', 'jenis_id' => 'required', ]);

        $diklattum = diklattum::findOrFail($diklatta_id);
        $diklattum->update($request->all());

        Session::flash('flash_message', 'diklattum Telah Diupdate!');

        return redirect('diklatta');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $diklatta_id
     *
     * @return Response
     */
    public function destroy($diklatta_id)
    {
        diklattum::destroy($diklatta_id);

        Session::flash('flash_message', 'diklattum Telah Dihapus!');

        return redirect('diklatta');
    }

}
