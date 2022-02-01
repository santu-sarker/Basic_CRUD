<?php

namespace App\Http\Controllers\CRUD_Process;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Query_BuilderController extends Controller
{
    public function show_data(){
        $users = DB::table('test')
        ->select("id as user_id" , "name as user_name" , "position" , "address")
        // ->where("id" , "<=" , 100)
        ->where("name" , "like" , "B%")
       ->orWhere("name" , "like" , "D%")
       ->orderBy("id", "asc")
        ->get();
        return view("pages.user_datatable" , ["users" =>$users]);
    }

    public function insert_data(){
        $user_insert = DB::table('test')
                            ->insert([
                                "name" => "md Rashed Sarker"  ,
                                "position" => "software Developer" ,
                                "description" => "he is a very poor developer" ,
                                "address" => "Chargobindapur , dulai , pabna"
                            ]);
        if($user_insert){
            echo "user saved successfully";
        }
        else
        echo "failed to save user";
    }
    public function update_data(){
        $update_user = DB::table('test')
                        ->where("id" , 1004)
                        ->update([
                            "description" => "he is a good developer but lazy" ,
                            "position" => "Laravel developer"
                        ]);
        if($update_user){
            echo "user update successfully";
        }
        else
        echo "failed to update user";
    }
}
