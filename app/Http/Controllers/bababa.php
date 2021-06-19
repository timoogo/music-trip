<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\DB;


class bababa extends Controller
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
        return Inertia::render('Admin/Cities', [
            'cities' => [$cities]
        ]);

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_city_info($cityId)
    {
        $city_info = DB::table('city_infos')->where('city_id', '=', $cityId)
            ->get();
        return Inertia::render('Admin/CRUD/Cities/Show', [
            'city_info' => [$city_info]
        ]);
    }
    public function show_heart_stroke($cityId)
    {
        $city_heart_stroke = DB::table('chron_favorites')->where('city_id', '=', $cityId)
            ->get();
        return Inertia::render('Admin/CRUD/Cities/Show', [
            'city_heart_stroke' => [$city_heart_stroke]
        ]);
    }
    public function show_locations($cityId)
    {
        $city_locations = DB::table('locations')->where('city_id', '=', $cityId)
            ->get();
        return Inertia::render('Admin/CRUD/Cities/Show', [
            'city_heart_stroke' => [$city_locations]
        ]);
    }
    public function show_music_group($cityId)
    {
        $city_music_groups = DB::table('music_groups')->where('city_id', '=', $cityId)
            ->get();
        return Inertia::render('Admin/CRUD/Cities/Show', [
            'city_music_groups' => [$city_music_groups]
        ]);
    }
    public function show_custom_data($cityId)
    {
        $city_custom_data = DB::table('custom_datas')->where('city_id', '=', $cityId)
            ->get();
        return Inertia::render('Admin/CRUD/Cities/Show', [
            'city_custom_data' => [$city_custom_data]
        ]);
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
