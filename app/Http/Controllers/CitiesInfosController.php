<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\DB;


class CitiesInfosController extends Controller
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
        //
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
