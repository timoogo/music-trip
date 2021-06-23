<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class CitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index ()
    {
        /*      $cities = City::all();
           //
                 return Inertia::render('Admin/Cities', [
                     'cities' => [$cities]
                 ]);*/
        //   return $cities->toJSON(JSON_PRETTY_PRINT);
        $cities = DB::table('cities')

            ->get();
        return  $cities->toJSON(JSON_PRETTY_PRINT);//Inertia::render('Admin/Cities', [
        //      'cities' => [$cities]
        // ]);

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
        City::create([

            'city_id' => $request->city_id,
            'title' => $request->title,
            'description' =>$request->description,
            'img_src' =>$request->img_src,
            'video_src' =>$request->video_src,
            'yt_src' =>$request->yt_src,
            'isCompleted' =>$request->isCompleted,

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
        $city = DB::table('city')->where('city_id', '=', $cityId)
            ->get();
        return $city ->toJSON(JSON_PRETTY_PRINT);


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
