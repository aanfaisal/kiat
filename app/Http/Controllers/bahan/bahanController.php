<?php

namespace App\Http\Controllers\bahan;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\bahan;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use DB;

class bahanController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $bahan = bahan::paginate(15);

        return view('bahan.index', compact('bahan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('bahan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['nama' => 'required', 'diklatta_id' => 'required', ]);

        bahan::create($request->all());

        Session::flash('flash_message', 'bahan Telah Ditambahkan!');

        return redirect('bahan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $bahan_id
     *
     * @return Response
     */
    public function show($bahan_id)
    {
        $bahan = bahan::findOrFail($bahan_id);

        return view('bahan.show', compact('bahan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $bahan_id
     *
     * @return Response
     */
    public function edit($bahan_id)
    {
        $bahan = bahan::findOrFail($bahan_id);

        return view('bahan.edit', compact('bahan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $bahan_id
     *
     * @return Response
     */
    public function update($bahan_id, Request $request)
    {
        $this->validate($request, ['nama' => 'required', 'diklatta_id' => 'required', ]);

        $bahan = bahan::findOrFail($bahan_id);
        $bahan->update($request->all());

        Session::flash('flash_message', 'bahan Telah Diupdate!');

        return redirect('bahan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $bahan_id
     *
     * @return Response
     */
    public function destroy($bahan_id)
    {
        bahan::destroy($bahan_id);

        Session::flash('flash_message', 'bahan Telah Dihapus!');

        return redirect('bahan');
    }

}
