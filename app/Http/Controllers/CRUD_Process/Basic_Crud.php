<?php

namespace App\Http\Controllers\CRUD_Process;

use App\Http\Controllers\Controller;
use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Basic_Crud extends Controller
{
    public function index(){
        $users = DB::select('select * from test');


        foreach ($users as $key => $user) {
            echo '<pre>';
            echo ++$key."\t". $user->name."\t".$user->position."\t".$user->address;
            echo 'nl2br()';
        }
    }
    public function insert_user(){
        $user = DB::insert('insert into test (name,position,description,address) values
        (?, ?,?,?)', ['khadiza binte maznu', 'Web Developer' , 'sample description goes here
        i will write anything about me , like i dont love miss K' , '6B/9, Aziz moholla , Dhaka']);
        if($user){
            echo 'data inserted successfully';
        }
        else
        echo 'failed to insert';
    }

    public function edit_user(){
        $user = DB::update('update test set position = ? where id = ?', ['vue developer' , 1001]);

        if($user){
            echo 'data updated successfully';
        }
        else
        echo $user;

    }
    public function model_user(){
        $users = Test::where('name' , "khadizatul kubra")->get();

        if($users->isEmpty()){
            echo "no data found";
        }
        else{
            foreach ($users as $key => $user) {
                echo '<pre>';
                echo ++$key."\t". $user->name."\t".$user->position."\t".$user->address;
                echo 'nl2br()';
            }
        }

        echo '<pre>';
        // print_r($users);
        // echo $users->id ."\t".$users->name;
    }

    public function show_data(){
        $users = Test::all();

        return view("pages.user_datatable" , ["users" => $users]);
    }

    public function delete_user($id){
        $user = Test::find($id)->delete();
        if($user){
            //  session()->flash("delete_user", "user deleted successfully ");
            return redirect("show_user")->with("delete_user" , "user deleted successfully ");
        }
        else
        // session()->flash("delete_user" , "failed to delete user");
        return redirect("show_user")->with("delete_user" , "failed to delete user");

    }
}
