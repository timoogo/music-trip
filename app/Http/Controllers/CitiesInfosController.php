<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\DB;
use \App\Models\CityInfo;


class CitiesInfosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index ()
    {
        $cities_info = DB::table('city_infos')->get();
        return $cities_info;
    }
    public function create(){
        return Inertia::render('Admin/CRUD/Cities/Create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        CityInfo::create([

            'city_id' => 1,
            'title' => $request->title,
            'description' =>$request->description,
            'img_src' =>$request->img_src,
            'video_src' =>$request->video_src,
            'yt_src' =>$request->yt_src,
            'is_completed'=>$request->isCompleted


        ]);

        return redirect('/dashboard');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($cityId)
    {
        $city_info = DB::table('city_infos')->where('city_id', '=', $cityId)
            ->get();
        return $city_info ->toJSON(JSON_PRETTY_PRINT);


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
}
