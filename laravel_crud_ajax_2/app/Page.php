<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    public static function getuserData($id=null) {
        $value=DB::table('users')->orderBy('id', 'asc')->get(); 
        return $value;
    }
   
    public static function insertData($data) {
        $value=DB::table('users')->where('username', $data['username'])->get();
        if($value->count() == 0){
            $insertid = DB::table('users')->insertGetId($data);
            return $insertid;
        } else {
            return 0;
        }
    }
   
    public static function updateData($id,$data) {
        DB::table('users')->where('id', $id)->update($data);
    }
   
    public static function deleteData($id=0) {
        DB::table('users')->where('id', '=', $id)->delete();
    }

}
