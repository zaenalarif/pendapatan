<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    public function pegawai($id)
    {
        $pegawai    = DB::table("tb_pegawai")->where("nip", $id)->first();
        $keluarga   = DB::table("tb_statuskeluarga")->where("nip", $id)->first();

        return response()->json([
            "pegawai"   => $pegawai,
            "keluarga"  => $keluarga,
            "message"   => "berhasil"
        ]);
    }

}
