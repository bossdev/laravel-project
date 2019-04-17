<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;

class ProjectController extends Controller
{
    public function list(){
        return view('contents.project.list');
    }

    public function getTest(){
        $test = Test::get();
        $data = [
            "name"=>"bossza"
        ];
        return response()->json($test);
    }
}
