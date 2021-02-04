<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Figure;
use App\Merk;
use App\Supplier;
use App\Pembelian;

class PembelianController extends Controller
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
        return view('pembelian.index', ['figure' => $figure]);

    }

    public function detil(Request $req)
    {
        $pembelian = DB::table('pembelians')
        ->join('figures','figures.id','=','pembelians.figure_id')
        ->join('merks','merks.id','=','figures.merk_id')
        ->join('suppliers','suppliers.id','=','pembelians.supplier_id')->get();
        return view('pembelian.detil', ['pembelian' => $pembelian]);

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
        $supplier = Supplier::find($request->get('supplier'));
        $figure = Figure::find($request->get('figure_id'));
        $pembelian = new Pembelian();
        $pembelian->jumlah = $request->get('jumlah');
        $pembelian->total = $request->get('total');
        $pembelian->bayar = $request->get('bayar');
        $pembelian->supplier_id = $supplier->id;
        $pembelian->figure_id = $figure->id;
        $pembelian->save();
        $figure->stock = $figure->stock + $request->get('jumlah');
        $figure->save();
        return redirect()->route('pembelian.index')->with('message','Restock Berhasil! Silakan Check Transaksi Restock');
        
        
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
    public function beli($id)
    {
        // 
        $merk         = Merk::all();
        $supplier     = Supplier::all();
        $figure       = Figure::find($id);
        return view('pembelian.beli',[
            'merk'  => $merk,
            'supplier'  => $supplier,
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
