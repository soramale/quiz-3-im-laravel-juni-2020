<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\ArtikelController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArtikelModel //   extends Model
{
    public static function get_all() {
        $artikel = DB::table('artikel')->get();
        return $artikel;
    }

    public static function save($data) {
        $save = DB::table('artikel')->insert($data);
        return $save;
    }

    public static function get_id($data) {
        $artikel = DB::table('artikel')->where('id', '=', $data)->first();
        return $artikel;
    }

    public static function update($data, $id) {
        $update = DB::table('artikel')->where('id', $id)->update($data);
        return $update;
    }

    public static function destroy($id) {
        $data = DB::table('artikel')->where('id', '=', $id)->delete();
        return $data;
    }
}
