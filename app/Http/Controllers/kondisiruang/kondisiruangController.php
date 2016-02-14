<?php

namespace App\Http\Controllers\kondisiruang;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\kondisiruang;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use DB;

class kondisiruangController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $kondisiruang = kondisiruang::paginate(15);

        return view('kondisiruang.index', compact('kondisiruang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('kondisiruang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['ruang_id' => 'required', 'dinding' => 'required', 'plafon' => 'required', 'pintu' => 'required', 'lemari' => 'required', 'mjangajar' => 'required', 'krsingajar' => 'required', 'mjapserta' => 'required', 'krsipserta' => 'required', 'mjaasisten' => 'required', 'soundmesin' => 'required', 'salon' => 'required', 'mic' => 'required', 'whiteboard' => 'required', 'penyangga' => 'required', 'lcd' => 'required', 'layar' => 'required', ]);

        kondisiruang::create($request->all());

        Session::flash('flash_message', 'kondisiruang Telah Ditambahkan!');

        return redirect('kondisiruang');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $kondisiruang_id
     *
     * @return Response
     */
    public function show($kondisiruang_id)
    {
        $kondisiruang = kondisiruang::findOrFail($kondisiruang_id);

        return view('kondisiruang.show', compact('kondisiruang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $kondisiruang_id
     *
     * @return Response
     */
    public function edit($kondisiruang_id)
    {
        $kondisiruang = kondisiruang::findOrFail($kondisiruang_id);

        return view('kondisiruang.edit', compact('kondisiruang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $kondisiruang_id
     *
     * @return Response
     */
    public function update($kondisiruang_id, Request $request)
    {
        $this->validate($request, ['ruang_id' => 'required', 'dinding' => 'required', 'plafon' => 'required', 'pintu' => 'required', 'lemari' => 'required', 'mjangajar' => 'required', 'krsingajar' => 'required', 'mjapserta' => 'required', 'krsipserta' => 'required', 'mjaasisten' => 'required', 'soundmesin' => 'required', 'salon' => 'required', 'mic' => 'required', 'whiteboard' => 'required', 'penyangga' => 'required', 'lcd' => 'required', 'layar' => 'required', ]);

        $kondisiruang = kondisiruang::findOrFail($kondisiruang_id);
        $kondisiruang->update($request->all());

        Session::flash('flash_message', 'kondisiruang Telah Diupdate!');

        return redirect('kondisiruang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $kondisiruang_id
     *
     * @return Response
     */
    public function destroy($kondisiruang_id)
    {
        kondisiruang::destroy($kondisiruang_id);

        Session::flash('flash_message', 'kondisiruang Telah Dihapus!');

        return redirect('kondisiruang');
    }

}
