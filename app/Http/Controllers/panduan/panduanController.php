<?php

namespace App\Http\Controllers\panduan;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\panduan;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use DB;

class panduanController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $panduan = panduan::paginate(15);

        return view('panduan.index', compact('panduan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('panduan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['diklatta_id' => 'required', 'nama' => 'required', 'panduan' => 'required', ]);

        panduan::create($request->all());

        Session::flash('flash_message', 'panduan Telah Ditambahkan!');

        return redirect('panduan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $panduan_id
     *
     * @return Response
     */
    public function show($panduan_id)
    {
        $panduan = panduan::findOrFail($panduan_id);

        return view('panduan.show', compact('panduan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $panduan_id
     *
     * @return Response
     */
    public function edit($panduan_id)
    {
        $panduan = panduan::findOrFail($panduan_id);

        return view('panduan.edit', compact('panduan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $panduan_id
     *
     * @return Response
     */
    public function update($panduan_id, Request $request)
    {
        $this->validate($request, ['diklatta_id' => 'required', 'nama' => 'required', 'panduan' => 'required', ]);

        $panduan = panduan::findOrFail($panduan_id);
        $panduan->update($request->all());

        Session::flash('flash_message', 'panduan Telah Diupdate!');

        return redirect('panduan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $panduan_id
     *
     * @return Response
     */
    public function destroy($panduan_id)
    {
        panduan::destroy($panduan_id);

        Session::flash('flash_message', 'panduan Telah Dihapus!');

        return redirect('panduan');
    }

}
