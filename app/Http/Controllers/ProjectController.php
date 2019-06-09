<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use App\Models\Project;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    public function list(Request $request){
        // $now = Carbon::now();
        // $input = [
        //     'name' => 'naviza',
        //     'amount_worker' => 3,
        //     'status' => 'todo',
        //     'start_at' => $now->format('Y-m-d H:i:s'),
        //     'finish_at' => $now->add(30,'day')->format('Y-m-d H:i:s')
        // ];
        // $project = Project::create($input);
        $projects = Project::get();
        $data = [
            'projects' => $projects
        ];
        return view('contents.project.list',$data);
    }

    public function getTest(Request $request){
        // dd(Auth::check());
        // Auth::logout();
        return $request->session()->all();
        $test = Test::get();
        $data = [
            "name"=>"bossza"
        ];
        return response()->json($test);
    }
}
