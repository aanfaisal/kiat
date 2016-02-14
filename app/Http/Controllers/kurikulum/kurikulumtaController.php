<?php

namespace App\Http\Controllers\kurikulum;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\kurikulumtum;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use DB;

class kurikulumtaController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $kurikulumta = kurikulumtum::paginate(15);

        return view('kurikulumta.index', compact('kurikulumta'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('kurikulumta.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['nama' => 'required', 'diklatta_id' => 'required', 'isi' => 'required', ]);

        kurikulumtum::create($request->all());

        Session::flash('flash_message', 'kurikulumtum Telah Ditambahkan!');

        return redirect('kurikulumta');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $kurikulumta_id
     *
     * @return Response
     */
    public function show($kurikulumta_id)
    {
        $kurikulumtum = kurikulumtum::findOrFail($kurikulumta_id);

        return view('kurikulumta.show', compact('kurikulumtum'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $kurikulumta_id
     *
     * @return Response
     */
    public function edit($kurikulumta_id)
    {
        $kurikulumtum = kurikulumtum::findOrFail($kurikulumta_id);

        return view('kurikulumta.edit', compact('kurikulumtum'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $kurikulumta_id
     *
     * @return Response
     */
    public function update($kurikulumta_id, Request $request)
    {
        $this->validate($request, ['nama' => 'required', 'diklatta_id' => 'required', 'isi' => 'required', ]);

        $kurikulumtum = kurikulumtum::findOrFail($kurikulumta_id);
        $kurikulumtum->update($request->all());

        Session::flash('flash_message', 'kurikulumtum Telah Diupdate!');

        return redirect('kurikulumta');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $kurikulumta_id
     *
     * @return Response
     */
    public function destroy($kurikulumta_id)
    {
        kurikulumtum::destroy($kurikulumta_id);

        Session::flash('flash_message', 'kurikulumtum Telah Dihapus!');

        return redirect('kurikulumta');
    }

}
