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
        
        // $datas = [
        //     "accountInfo"=>[
        //         "name"=>'bossza',
        //         "age"=>25,
        //         "maxz"=>null,
        //         "contact_address"=>[
        //             "house_no"=>012232,
        //             "district"=>'mung',
        //             "max"=>[
        //                 'sa','fff','we','hggd'
        //             ]
        //         ],
        //         "lists"=>[1,4,556,24,632,2,23]
        //     ],
        //     "province"=>'bk'
        // ];
        // $dd = ['sa','hh'];
        // $vals = array_get($datas,'');
        // // echo 'val  is '.$vals.'<br>';
        // echo 'type is '.gettype($vals).'<br>';
        // return $vals;
        
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

    public function getForm(Request $request){
        return view('contents.project.form');
    }

    public function postForm(Request $request){
        // return view('contents.project.form');
        return $request->all();
        // return redirect()->route('get.form');
    }
}
