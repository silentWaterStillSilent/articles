<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SitesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        return '5678';
        return view('welcome');
//        return phpinfo();exit();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function about(){
/*//        $name = 'Jelly';
        $name = '<span style="color:red" >Jelly</span>';
        return view('sites.about')->with('name',$name);*/
/* 2
         return view('sites.about')->with([
            'first'=>'Du',
            'last'=>'Tianwen',
        ]);*/

        $data = [
            'first'=>'Du-',
            'last'=>'Tianwen',
        ];
        return view('sites.about',$data);
/*        $first = 'Du c';
        $last = 'Tianwen c';
        return view('sites.about',compact('first','last'));*/

//        return view('sites.about');
    }

    public function contact(){
//        $data = [
//            'first'=>'Du-',
//            'last'=>'Tianwen',
//        ];
        $data = [];
        $citys = DB::select("select * from city_demo where city = '' limit 10");
        $data = !empty($citys) ? $citys : $data;
        return view('sites.contact')->with('citys',$data);
//        $data = [
//            'first'=>'Du-',
//            'last'=>'Tianwen',
//        ];
//        return view('sites.contact');
    }
}
