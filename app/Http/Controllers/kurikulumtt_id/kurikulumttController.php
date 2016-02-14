<?php

namespace App\Http\Controllers\kurikulumtt_id;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\kurikulumtt;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use DB;

class kurikulumttController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $kurikulumtt = kurikulumtt::paginate(15);

        return view('kurikulumtt.index', compact('kurikulumtt'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('kurikulumtt.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['nama' => 'required', 'diklattt_id' => 'required', ]);

        kurikulumtt::create($request->all());

        Session::flash('flash_message', 'kurikulumtt Telah Ditambahkan!');

        return redirect('kurikulumtt');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $kurikulumtt_id
     *
     * @return Response
     */
    public function show($kurikulumtt_id)
    {
        $kurikulumtt = kurikulumtt::findOrFail($kurikulumtt_id);

        return view('kurikulumtt.show', compact('kurikulumtt'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $kurikulumtt_id
     *
     * @return Response
     */
    public function edit($kurikulumtt_id)
    {
        $kurikulumtt = kurikulumtt::findOrFail($kurikulumtt_id);

        return view('kurikulumtt.edit', compact('kurikulumtt'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $kurikulumtt_id
     *
     * @return Response
     */
    public function update($kurikulumtt_id, Request $request)
    {
        $this->validate($request, ['nama' => 'required', 'diklattt_id' => 'required', ]);

        $kurikulumtt = kurikulumtt::findOrFail($kurikulumtt_id);
        $kurikulumtt->update($request->all());

        Session::flash('flash_message', 'kurikulumtt Telah Diupdate!');

        return redirect('kurikulumtt');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $kurikulumtt_id
     *
     * @return Response
     */
    public function destroy($kurikulumtt_id)
    {
        kurikulumtt::destroy($kurikulumtt_id);

        Session::flash('flash_message', 'kurikulumtt Telah Dihapus!');

        return redirect('kurikulumtt');
    }

}
