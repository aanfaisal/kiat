<?php

namespace App\Http\Controllers\bahantt;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\bahantt;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use DB;

class bahanttController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $bahantt = bahantt::paginate(15);

        return view('bahantt.index', compact('bahantt'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('bahantt.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['nama' => 'required', 'diklattt_id' => 'required', 'upload' => 'required', ]);

        bahantt::create($request->all());

        Session::flash('flash_message', 'bahantt Telah Ditambahkan!');

        return redirect('bahantt');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $bahantt_id
     *
     * @return Response
     */
    public function show($bahantt_id)
    {
        $bahantt = bahantt::findOrFail($bahantt_id);

        return view('bahantt.show', compact('bahantt'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $bahantt_id
     *
     * @return Response
     */
    public function edit($bahantt_id)
    {
        $bahantt = bahantt::findOrFail($bahantt_id);

        return view('bahantt.edit', compact('bahantt'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $bahantt_id
     *
     * @return Response
     */
    public function update($bahantt_id, Request $request)
    {
        $this->validate($request, ['nama' => 'required', 'diklattt_id' => 'required', 'upload' => 'required', ]);

        $bahantt = bahantt::findOrFail($bahantt_id);
        $bahantt->update($request->all());

        Session::flash('flash_message', 'bahantt Telah Diupdate!');

        return redirect('bahantt');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $bahantt_id
     *
     * @return Response
     */
    public function destroy($bahantt_id)
    {
        bahantt::destroy($bahantt_id);

        Session::flash('flash_message', 'bahantt Telah Dihapus!');

        return redirect('bahantt');
    }

}
