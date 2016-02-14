<?php

namespace App\Http\Controllers\diklattt;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\diklattt;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use DB;

class diklatttController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $diklattt = diklattt::paginate(15);

        return view('diklattt.index', compact('diklattt'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('diklattt.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['nama' => 'required', 'jenistt_id' => 'required', 'tglmulai' => 'required', 'tglslese' => 'required', ]);

        diklattt::create($request->all());

        Session::flash('flash_message', 'diklattt Telah Ditambahkan!');

        return redirect('diklattt');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $diklattt_id
     *
     * @return Response
     */
    public function show($diklattt_id)
    {
        $diklattt = diklattt::findOrFail($diklattt_id);

        return view('diklattt.show', compact('diklattt'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $diklattt_id
     *
     * @return Response
     */
    public function edit($diklattt_id)
    {
        $diklattt = diklattt::findOrFail($diklattt_id);

        return view('diklattt.edit', compact('diklattt'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $diklattt_id
     *
     * @return Response
     */
    public function update($diklattt_id, Request $request)
    {
        $this->validate($request, ['nama' => 'required', 'jenistt_id' => 'required', 'tglmulai' => 'required', 'tglslese' => 'required', ]);

        $diklattt = diklattt::findOrFail($diklattt_id);
        $diklattt->update($request->all());

        Session::flash('flash_message', 'diklattt Telah Diupdate!');

        return redirect('diklattt');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $diklattt_id
     *
     * @return Response
     */
    public function destroy($diklattt_id)
    {
        diklattt::destroy($diklattt_id);

        Session::flash('flash_message', 'diklattt Telah Dihapus!');

        return redirect('diklattt');
    }

}
