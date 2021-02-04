<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Figure;
use App\Merk;
use App\Penjualan;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $figure = Figure::where('stock', '!=', 0)->get();
        return view('penjualan.index', ['figure' => $figure]);
        
    }

    public function detil()
    {
        if(Auth::check()){
            $penjualan = DB::table('penjualans')
            ->join('figures','figures.id','=','penjualans.figure_id')
            ->join('merks','merks.id','=','figures.merk_id')
            ->join('users','users.id','=','penjualans.user_id')
            ->where('users.id',Auth()->user()->id)->get();
            return view('penjualan.detil', ['penjualan' => $penjualan]);
        }else{
            return redirect('/');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $figure = Figure::find($request->get('figure_id'));
        $penjualan = new Penjualan();
        $penjualan->jumlah = $request->get('jumlah');
        $penjualan->total = $request->get('total');
        $penjualan->bayar = $request->get('bayar');
        $penjualan->user_id = $request->get('user_id');
        $penjualan->figure_id = $figure->id;
        $penjualan->save();
        $figure->stock = $figure->stock - $request->get('jumlah');
        $figure->save();
        return redirect()->route('penjualan.index')->with('message','Pembelian Berhasil! Silakan Check Transaksi Pembelian Figure');
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
    public function jual($id)
    {
        //
        $merk         = Merk::all();
        $figure       = Figure::find($id);
        return view('penjualan.jual',[
            'merk'  => $merk,
            'figure' => $figure
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
    }
}
