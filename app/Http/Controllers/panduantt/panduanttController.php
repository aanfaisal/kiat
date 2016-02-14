<?php

namespace App\Http\Controllers\panduantt;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\panduantt;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use DB;

class panduanttController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $panduantt = panduantt::paginate(15);

        return view('panduantt.index', compact('panduantt'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('panduantt.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['diklattt_id' => 'required', 'nama' => 'required', 'panduan' => 'required', ]);

        panduantt::create($request->all());

        Session::flash('flash_message', 'panduantt Telah Ditambahkan!');

        return redirect('panduantt');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $panduantt_id
     *
     * @return Response
     */
    public function show($panduantt_id)
    {
        $panduantt = panduantt::findOrFail($panduantt_id);

        return view('panduantt.show', compact('panduantt'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $panduantt_id
     *
     * @return Response
     */
    public function edit($panduantt_id)
    {
        $panduantt = panduantt::findOrFail($panduantt_id);

        return view('panduantt.edit', compact('panduantt'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $panduantt_id
     *
     * @return Response
     */
    public function update($panduantt_id, Request $request)
    {
        $this->validate($request, ['diklattt_id' => 'required', 'nama' => 'required', 'panduan' => 'required', ]);

        $panduantt = panduantt::findOrFail($panduantt_id);
        $panduantt->update($request->all());

        Session::flash('flash_message', 'panduantt Telah Diupdate!');

        return redirect('panduantt');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $panduantt_id
     *
     * @return Response
     */
    public function destroy($panduantt_id)
    {
        panduantt::destroy($panduantt_id);

        Session::flash('flash_message', 'panduantt Telah Dihapus!');

        return redirect('panduantt');
    }

}
