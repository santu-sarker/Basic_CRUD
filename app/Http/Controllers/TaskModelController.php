<?php

namespace App\Http\Controllers;

use App\Models\TaskModel;
use Illuminate\Support\Facades\DB;

class TaskModelController extends Controller

{
    public function index( )
    {
        $tasks = DB::table('task_models')->get();
        return view('pages.home' , ['tasks' => $tasks]);
    }
}
