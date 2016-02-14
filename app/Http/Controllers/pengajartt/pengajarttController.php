<?php

namespace App\Http\Controllers\pengajartt;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\pengajartt;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use DB;

class pengajarttController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $pengajartt = pengajartt::paginate(15);

        return view('pengajartt.index', compact('pengajartt'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('pengajartt.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['nama' => 'required', 'diklattt_id' => 'required', 'pend' => 'required', 'tmplahir' => 'required', 'tgllahir' => 'required', 'jenkel' => 'required', 'agama' => 'required', 'pangkat' => 'required', 'jabatan' => 'required', 'instansi' => 'required', 'nohp' => 'required', ]);

        pengajartt::create($request->all());

        Session::flash('flash_message', 'pengajartt Telah Ditambahkan!');

        return redirect('pengajartt');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $pengajartt_id
     *
     * @return Response
     */
    public function show($pengajartt_id)
    {
        $pengajartt = pengajartt::findOrFail($pengajartt_id);

        return view('pengajartt.show', compact('pengajartt'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $pengajartt_id
     *
     * @return Response
     */
    public function edit($pengajartt_id)
    {
        $pengajartt = pengajartt::findOrFail($pengajartt_id);

        return view('pengajartt.edit', compact('pengajartt'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $pengajartt_id
     *
     * @return Response
     */
    public function update($pengajartt_id, Request $request)
    {
        $this->validate($request, ['nama' => 'required', 'diklattt_id' => 'required', 'pend' => 'required', 'tmplahir' => 'required', 'tgllahir' => 'required', 'jenkel' => 'required', 'agama' => 'required', 'pangkat' => 'required', 'jabatan' => 'required', 'instansi' => 'required', 'nohp' => 'required', ]);

        $pengajartt = pengajartt::findOrFail($pengajartt_id);
        $pengajartt->update($request->all());

        Session::flash('flash_message', 'pengajartt Telah Diupdate!');

        return redirect('pengajartt');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $pengajartt_id
     *
     * @return Response
     */
    public function destroy($pengajartt_id)
    {
        pengajartt::destroy($pengajartt_id);

        Session::flash('flash_message', 'pengajartt Telah Dihapus!');

        return redirect('pengajartt');
    }

}
