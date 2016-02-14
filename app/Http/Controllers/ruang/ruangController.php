<?php

namespace App\Http\Controllers\ruang;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\ruang;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use DB;

class ruangController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $ruang = ruang::paginate(15);

        return view('ruang.index', compact('ruang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('ruang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['nama' => 'required', 'petugas' => 'required', 'atasan' => 'required', ]);

        ruang::create($request->all());

        Session::flash('flash_message', 'ruang Telah Ditambahkan!');

        return redirect('ruang');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $ruang_id
     *
     * @return Response
     */
    public function show($ruang_id)
    {
        $ruang = ruang::findOrFail($ruang_id);

        return view('ruang.show', compact('ruang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $ruang_id
     *
     * @return Response
     */
    public function edit($ruang_id)
    {
        $ruang = ruang::findOrFail($ruang_id);

        return view('ruang.edit', compact('ruang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $ruang_id
     *
     * @return Response
     */
    public function update($ruang_id, Request $request)
    {
        $this->validate($request, ['nama' => 'required', 'petugas' => 'required', 'atasan' => 'required', ]);

        $ruang = ruang::findOrFail($ruang_id);
        $ruang->update($request->all());

        Session::flash('flash_message', 'ruang Telah Diupdate!');

        return redirect('ruang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $ruang_id
     *
     * @return Response
     */
    public function destroy($ruang_id)
    {
        ruang::destroy($ruang_id);

        Session::flash('flash_message', 'ruang Telah Dihapus!');

        return redirect('ruang');
    }

}
