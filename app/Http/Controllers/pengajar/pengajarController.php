<?php

namespace App\Http\Controllers\pengajar;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\pengajar;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use DB;

class pengajarController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $pengajar = pengajar::paginate(15);

        return view('pengajar.index', compact('pengajar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('pengajar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['nama' => 'required', 'diklatta_id' => 'required', 'pend' => 'required', 'tmplahir' => 'required', 'tgllahir' => 'required', 'jenkel' => 'required', 'agama' => 'required', 'pangkat' => 'required', 'jabatan' => 'required', 'instansi' => 'required', ]);

        pengajar::create($request->all());

        Session::flash('flash_message', 'pengajar Telah Ditambahkan!');

        return redirect('pengajar');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $pengajar_id
     *
     * @return Response
     */
    public function show($pengajar_id)
    {
        $pengajar = pengajar::findOrFail($pengajar_id);

        return view('pengajar.show', compact('pengajar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $pengajar_id
     *
     * @return Response
     */
    public function edit($pengajar_id)
    {
        $pengajar = pengajar::findOrFail($pengajar_id);

        return view('pengajar.edit', compact('pengajar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $pengajar_id
     *
     * @return Response
     */
    public function update($pengajar_id, Request $request)
    {
        $this->validate($request, ['nama' => 'required', 'diklatta_id' => 'required', 'pend' => 'required', 'tmplahir' => 'required', 'tgllahir' => 'required', 'jenkel' => 'required', 'agama' => 'required', 'pangkat' => 'required', 'jabatan' => 'required', 'instansi' => 'required', ]);

        $pengajar = pengajar::findOrFail($pengajar_id);
        $pengajar->update($request->all());

        Session::flash('flash_message', 'pengajar Telah Diupdate!');

        return redirect('pengajar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $pengajar_id
     *
     * @return Response
     */
    public function destroy($pengajar_id)
    {
        pengajar::destroy($pengajar_id);

        Session::flash('flash_message', 'pengajar Telah Dihapus!');

        return redirect('pengajar');
    }

}
