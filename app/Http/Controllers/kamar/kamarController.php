<?php

namespace App\Http\Controllers\kamar;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\kamar;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use DB;

class kamarController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $kamar = kamar::paginate(15);

        return view('kamar.index', compact('kamar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('kamar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['nama' => 'required', 'asrama_id' => 'required', ]);

        kamar::create($request->all());

        Session::flash('flash_message', 'kamar Telah Ditambahkan!');

        return redirect('kamar');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $kamar_id
     *
     * @return Response
     */
    public function show($kamar_id)
    {
        $kamar = kamar::findOrFail($kamar_id);

        return view('kamar.show', compact('kamar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $kamar_id
     *
     * @return Response
     */
    public function edit($kamar_id)
    {
        $kamar = kamar::findOrFail($kamar_id);

        return view('kamar.edit', compact('kamar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $kamar_id
     *
     * @return Response
     */
    public function update($kamar_id, Request $request)
    {
        $this->validate($request, ['nama' => 'required', 'asrama_id' => 'required', ]);

        $kamar = kamar::findOrFail($kamar_id);
        $kamar->update($request->all());

        Session::flash('flash_message', 'kamar Telah Diupdate!');

        return redirect('kamar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $kamar_id
     *
     * @return Response
     */
    public function destroy($kamar_id)
    {
        kamar::destroy($kamar_id);

        Session::flash('flash_message', 'kamar Telah Dihapus!');

        return redirect('kamar');
    }

}
