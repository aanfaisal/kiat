<?php

namespace App\Http\Controllers\surattt;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\surattt;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use DB;

class suratttController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $surattt = surattt::paginate(15);

        return view('surattt.index', compact('surattt'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('surattt.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['nama' => 'required', 'status' => 'required', 'tgl' => 'required', ]);

        surattt::create($request->all());

        Session::flash('flash_message', 'surattt Telah Ditambahkan!');

        return redirect('surattt');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $surattt_id
     *
     * @return Response
     */
    public function show($surattt_id)
    {
        $surattt = surattt::findOrFail($surattt_id);

        return view('surattt.show', compact('surattt'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $surattt_id
     *
     * @return Response
     */
    public function edit($surattt_id)
    {
        $surattt = surattt::findOrFail($surattt_id);

        return view('surattt.edit', compact('surattt'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $surattt_id
     *
     * @return Response
     */
    public function update($surattt_id, Request $request)
    {
        $this->validate($request, ['nama' => 'required', 'status' => 'required', 'tgl' => 'required', ]);

        $surattt = surattt::findOrFail($surattt_id);
        $surattt->update($request->all());

        Session::flash('flash_message', 'surattt Telah Diupdate!');

        return redirect('surattt');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $surattt_id
     *
     * @return Response
     */
    public function destroy($surattt_id)
    {
        surattt::destroy($surattt_id);

        Session::flash('flash_message', 'surattt Telah Dihapus!');

        return redirect('surattt');
    }

}
