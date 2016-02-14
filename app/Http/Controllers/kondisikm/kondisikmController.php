<?php

namespace App\Http\Controllers\kondisikm;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\kondisikm;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use DB;

class kondisikmController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $kondisikm = kondisikm::paginate(15);

        return view('kondisikm.index', compact('kondisikm'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('kondisikm.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['kamar_id' => 'required', 'kmmandi' => 'required', 'bed' => 'required', 'slimut' => 'required', 'bak' => 'required', 'gantungan' => 'required', 'meja' => 'required', 'pnerangan' => 'required', 'ac' => 'required', ]);

        kondisikm::create($request->all());

        Session::flash('flash_message', 'kondisikm Telah Ditambahkan!');

        return redirect('kondisikm');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $kondisikm_id
     *
     * @return Response
     */
    public function show($kondisikm_id)
    {
        $kondisikm = kondisikm::findOrFail($kondisikm_id);

        return view('kondisikm.show', compact('kondisikm'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $kondisikm_id
     *
     * @return Response
     */
    public function edit($kondisikm_id)
    {
        $kondisikm = kondisikm::findOrFail($kondisikm_id);

        return view('kondisikm.edit', compact('kondisikm'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $kondisikm_id
     *
     * @return Response
     */
    public function update($kondisikm_id, Request $request)
    {
        $this->validate($request, ['kamar_id' => 'required', 'kmmandi' => 'required', 'bed' => 'required', 'slimut' => 'required', 'bak' => 'required', 'gantungan' => 'required', 'meja' => 'required', 'pnerangan' => 'required', 'ac' => 'required', ]);

        $kondisikm = kondisikm::findOrFail($kondisikm_id);
        $kondisikm->update($request->all());

        Session::flash('flash_message', 'kondisikm Telah Diupdate!');

        return redirect('kondisikm');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $kondisikm_id
     *
     * @return Response
     */
    public function destroy($kondisikm_id)
    {
        kondisikm::destroy($kondisikm_id);

        Session::flash('flash_message', 'kondisikm Telah Dihapus!');

        return redirect('kondisikm');
    }

}
