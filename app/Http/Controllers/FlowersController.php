<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Flower;

class FlowersController extends Controller
{
    public function index()
    {
        $flowers=Flower::all();
        return view('pages.flowers')->with('title','Flowers data')
            ->with('flowers', $flowers);
    }
    public function index1()
    {
        $flowers=Flower::all();
        return view('pages.show1')->with('title','Flowers data')
            ->with('flowers', $flowers);
    }
    public function index2()
    {
        $flowers=Flower::all();
        return view('pages.show2')->with('title','Flowers data')
            ->with('flowers', $flowers);
    }
    public function show($nume)
    {
        //select * from flowers where flower=$flower LIMIT 1
        $flower=Flower::where('nume','=',$nume)->first();
        return view('flowers.showflower', ['flower'=>$flower]);
    }

}
