<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class HitungController extends Controller
{
    public function index()
    {
        $hitung = DB::table("hitung")->get();

        return view("hitung.index", compact("hitung"));
    }

    public function create()
    {
        $pegawai = DB::table("tb_pegawai")->get();

        return view("hitung.create", compact("pegawai"));
    }

    public function store(Request $request)
    {
        DB::table("hitung")->insert([
            "bulan"             => $request->bulan,
            "tahun"             => $request->tahun,
            "nip"               => $request->nip,
            "nama"              => $request->nama,
            "golongan"          => $request->golongan,
            "istri"             => $request->istri,
            "anak"              => $request->anak,
            "gaji"              => $request->gaji,
            "tunjangan_istri"   => $request->tunjangan_istri,
            "tunjangan_anak"    => $request->tunjangan_anak,
            "tunjangan_karir"   => $request->tunjangan_karir,
            "tunjangan_beras"   => $request->tunjangan_beras,
            "pph"               => $request->pph,
            "tak"               => $request->tak,
            "lw_pegawai"        => $request->lw_pegawai,
            "taperum"           => $request->taperum,
            "tpp"               => $request->tpp,
            "pph_21_tpp"        => $request->pph_21_tpp,
            "penerimaan_total"  => $request->penerimaan_total,
        ]);
        
        return redirect("/hitung")->with("msg", "Perhitungan berhasil di buat");
    }

    public function show($id)
    {
        $hitung = DB::table("hitung")->where("id", $id)->first();

        return view("hitung.show", compact("hitung"));
    }

    public function cetak($id)
    {
        $hitung = DB::table("hitung")->where("id", $id)->first();
        $pdf = PDF::loadView('hitung.cetak', compact("hitung"));
        return $pdf->stream('perhitungan.pdf');
    }

    public function cetakSemua()
    {
        $hitungs = DB::table("hitung")->get();
        $pdf = PDF::loadView('hitung.cetakSemua', compact("hitungs"));
        return $pdf->stream('perhitunganSemua.pdf');
    }
}
