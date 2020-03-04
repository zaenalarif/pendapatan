<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    public function pegawai($id)
    {
        $pegawai        = DB::table("tb_pegawai")->where("nip", $id)->first();
        $keluarga       = DB::table("tb_statuskeluarga")->where("nip", $id)->first();
        $gajiPokok      = DB::table("tb_mstr_gaji")->where("nip", $id)->first();
        $tunjanganKarir = DB::table("tbl_mst_tunjangan")->where("nip", $id)->first();


        $gol = explode("/", $pegawai->pangkat_gol); 
        $gol  = trim($gol[1]);
        $gol2 = substr($gol,0,2);
        
        $golongan       = DB::table("tb_golongan")->where("golongan", $gol)->first();
        $taperum        = DB::table("tb_mst_taperum")->where("id_golongan", $gol2)->first();
        
        return response()->json([
            "pegawai"        => $pegawai,
            "keluarga"       => $keluarga,
            "gajiPokok"      => $gajiPokok,
            "tunjanganKarir" => $tunjanganKarir,
            "golongan"       => $golongan,
            "taperum"        => $taperum,
            "message"        => "berhasil"
        ]);
    }

}
