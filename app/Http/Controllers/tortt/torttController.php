<?php

namespace App\Http\Controllers\tortt;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\tortt;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use DB;

class torttController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $tortt = tortt::paginate(15);

        return view('tortt.index', compact('tortt'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('tortt.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['nama' => 'required', 'status' => 'required', 'tgl' => 'required', ]);

        tortt::create($request->all());

        Session::flash('flash_message', 'tortt Telah Ditambahkan!');

        return redirect('tortt');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $tortt_id
     *
     * @return Response
     */
    public function show($tortt_id)
    {
        $tortt = tortt::findOrFail($tortt_id);

        return view('tortt.show', compact('tortt'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $tortt_id
     *
     * @return Response
     */
    public function edit($tortt_id)
    {
        $tortt = tortt::findOrFail($tortt_id);

        return view('tortt.edit', compact('tortt'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $tortt_id
     *
     * @return Response
     */
    public function update($tortt_id, Request $request)
    {
        $this->validate($request, ['nama' => 'required', 'status' => 'required', 'tgl' => 'required', ]);

        $tortt = tortt::findOrFail($tortt_id);
        $tortt->update($request->all());

        Session::flash('flash_message', 'tortt Telah Diupdate!');

        return redirect('tortt');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $tortt_id
     *
     * @return Response
     */
    public function destroy($tortt_id)
    {
        tortt::destroy($tortt_id);

        Session::flash('flash_message', 'tortt Telah Dihapus!');

        return redirect('tortt');
    }

}
