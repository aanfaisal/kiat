<?php

namespace App\Http\Controllers\tor;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\tor;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use DB;

class torController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $tor = tor::paginate(15);

        return view('tor.index', compact('tor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('tor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['nama' => 'required', 'status' => 'required', 'tanggal' => 'required', ]);

        tor::create($request->all());

        Session::flash('flash_message', 'tor Telah Ditambahkan!');

        return redirect('tor');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $tor_id
     *
     * @return Response
     */
    public function show($tor_id)
    {
        $tor = tor::findOrFail($tor_id);

        return view('tor.show', compact('tor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $tor_id
     *
     * @return Response
     */
    public function edit($tor_id)
    {
        $tor = tor::findOrFail($tor_id);

        return view('tor.edit', compact('tor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $tor_id
     *
     * @return Response
     */
    public function update($tor_id, Request $request)
    {
        $this->validate($request, ['nama' => 'required', 'status' => 'required', 'tanggal' => 'required', ]);

        $tor = tor::findOrFail($tor_id);
        $tor->update($request->all());

        Session::flash('flash_message', 'tor Telah Diupdate!');

        return redirect('tor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $tor_id
     *
     * @return Response
     */
    public function destroy($tor_id)
    {
        tor::destroy($tor_id);

        Session::flash('flash_message', 'tor Telah Dihapus!');

        return redirect('tor');
    }

}
