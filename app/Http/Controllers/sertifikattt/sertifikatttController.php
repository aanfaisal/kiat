<?php

namespace App\Http\Controllers\sertifikattt;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\sertifikattt;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use DB;

class sertifikatttController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $sertifikattt = sertifikattt::paginate(15);

        return view('sertifikattt.index', compact('sertifikattt'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('sertifikattt.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['pesertatt_id' => 'required', 'diklattt_id' => 'required', 'jenistt_id' => 'required', ]);

        sertifikattt::create($request->all());

        Session::flash('flash_message', 'sertifikattt Telah Ditambahkan!');

        return redirect('sertifikattt');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $sertifikattt_id
     *
     * @return Response
     */
    public function show($sertifikattt_id)
    {
        $sertifikattt = sertifikattt::findOrFail($sertifikattt_id);

        return view('sertifikattt.show', compact('sertifikattt'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $sertifikattt_id
     *
     * @return Response
     */
    public function edit($sertifikattt_id)
    {
        $sertifikattt = sertifikattt::findOrFail($sertifikattt_id);

        return view('sertifikattt.edit', compact('sertifikattt'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $sertifikattt_id
     *
     * @return Response
     */
    public function update($sertifikattt_id, Request $request)
    {
        $this->validate($request, ['pesertatt_id' => 'required', 'diklattt_id' => 'required', 'jenistt_id' => 'required', ]);

        $sertifikattt = sertifikattt::findOrFail($sertifikattt_id);
        $sertifikattt->update($request->all());

        Session::flash('flash_message', 'sertifikattt Telah Diupdate!');

        return redirect('sertifikattt');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $sertifikattt_id
     *
     * @return Response
     */
    public function destroy($sertifikattt_id)
    {
        sertifikattt::destroy($sertifikattt_id);

        Session::flash('flash_message', 'sertifikattt Telah Dihapus!');

        return redirect('sertifikattt');
    }

}
