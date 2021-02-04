<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Figure;
use App\Merk;

class FigureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {
        //
        $figure = Figure::all();
        return view('figure.index', ['figure' => $figure]);

        $merk   = Merk::all();
        $figure      = collect([]);
        if ($req->k)
        {
            $figure = Merk::find($req->k)->figure;
        }
        return view('figure.index',[
            'merk'  => $merk,
            'figure'     => $figure,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $merk = Merk::all();
        return view('figure.tambah',['merk' => $merk]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
            $this->validator($request->all())->validate();
            $merk = Merk::find($request->merk);
            $saveFigure = $merk->figure()->create($request->except(['_token','merk']));
            if (!$saveFigure)
            {
                return back();
            }
            return redirect()->route('figure.index')->with('message','Figure Berhasil Ditambah!');
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $merk         = Merk::all();
        $figure       = Figure::find($id);
        return view('figure.edit',[
            'merk'  => $merk,
            'figure' => $figure,
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $merk = Merk::find((int) $request->merk);
        $figure = Figure::find($id);
        $updated = $figure->update($request->except(['_token','merk']));
        if ($updated)
        {
            $figure->merk()->associate($merk)->save();
            return redirect()->route('figure.index')->with('message','Figure Berhasil Ditambah!');
        }
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $figure = Figure::find($id);
        $figure->delete();
        return redirect(route('figure.index'))->with('message','Figure Berhasil Dihapus!');
    }

    private function validator(array $data)
    {
        return Validator::make($data,[
            'figure' => 'required',
            'harga' => 'required',
            'hargabeli' => 'required',
            'merk' => 'required'
        ]);
    }
}
