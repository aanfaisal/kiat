<?php

namespace App\Http\Controllers\jadwaltt;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\jadwaltt;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use DB;

class jadwalttController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $jadwaltt = jadwaltt::paginate(15);

        return view('jadwaltt.index', compact('jadwaltt'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('jadwaltt.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['nama' => 'required', 'jenistt_id' => 'required', 'tglmulai' => 'required', 'tglslese' => 'required', ]);

        jadwaltt::create($request->all());

        Session::flash('flash_message', 'jadwaltt Telah Ditambahkan!');

        return redirect('jadwaltt');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $jadwaltt_id
     *
     * @return Response
     */
    public function show($jadwaltt_id)
    {
        $jadwaltt = jadwaltt::findOrFail($jadwaltt_id);

        return view('jadwaltt.show', compact('jadwaltt'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $jadwaltt_id
     *
     * @return Response
     */
    public function edit($jadwaltt_id)
    {
        $jadwaltt = jadwaltt::findOrFail($jadwaltt_id);

        return view('jadwaltt.edit', compact('jadwaltt'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $jadwaltt_id
     *
     * @return Response
     */
    public function update($jadwaltt_id, Request $request)
    {
        $this->validate($request, ['nama' => 'required', 'jenistt_id' => 'required', 'tglmulai' => 'required', 'tglslese' => 'required', ]);

        $jadwaltt = jadwaltt::findOrFail($jadwaltt_id);
        $jadwaltt->update($request->all());

        Session::flash('flash_message', 'jadwaltt Telah Diupdate!');

        return redirect('jadwaltt');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $jadwaltt_id
     *
     * @return Response
     */
    public function destroy($jadwaltt_id)
    {
        jadwaltt::destroy($jadwaltt_id);

        Session::flash('flash_message', 'jadwaltt Telah Dihapus!');

        return redirect('jadwaltt');
    }

}
