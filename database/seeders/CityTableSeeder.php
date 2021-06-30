<?php

namespace Database\Seeders;
use App\Models\City;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;


class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function run()
    {

        \DB::table('cities')->insert(array (
            0 =>
                array (
                    'name' => 'Paris',
                    'lng' => '2.20',
                    'lat' => '48.866667',
                    'created_at' => date('Y-m-d H:i:s'),
                    ),

            1 =>
            array (
                'name' => 'Montreuil',
                'lng' => '2.448451',
                'lat' => '50.4638918',
                'created_at' => date('Y-m-d H:i:s'),
                ),
            2 =>
                array (
                    'name' => 'La Rochelle',
                    'lng' => '-1.09',
                    'lat' => '46.1591126',
                    'created_at' => date('Y-m-d H:i:s'),
                ),
            3 =>
                array (
                    'name' =>'Lille' ,
                    'lng' => '3.03',
                    'lat' => '50.6365654',
                    'created_at' => date('Y-m-d H:i:s'),
                ),

            4 =>
                array (
                    'name' => 'Nevers',
                    'lng' => '3.03',
                    'lat' => '50.6365654',
                    'created_at' => date('Y-m-d H:i:s'),
                    ),
            5 =>
                array (
                    'name' => 'Bourges',
                    'lng' => '2.0833',
                    'lat' => '48.9356047',
                    'created_at' => date('Y-m-d H:i:s'),
                    ),
            6 =>
                array (
                    'name' => 'Limoges',
                    'lng' => '1.15',
                    'lat' => '45.8354243',
                    'created_at' => date('Y-m-d H:i:s'),
                    ),
            7 =>
                array (
                    'name' => 'St-Germain En Laye',
                    'lng' => '4.80559',
                    'lat' => '43.9492493',
                    'created_at' => date('Y-m-d H:i:s'),
                    ),
            8 =>
                array (
                    'name' => 'Nantes',
                    'lng' => '2.448451',
                    'lat' => '50.4638918',
                    'created_at' => date('Y-m-d H:i:s'),
                    ),
            9 =>
                array (
                    'name' => 'Grenoble',
                    'lng' => '5.724524',
                    'lat' => '45.1875602',
                    'created_at' => date('Y-m-d H:i:s'),
                    ),
            10 =>
                array (
                    'name' => 'Avignon',
                    'lng' => '5.724524',
                    'lat' => '47.2186371',
                    'created_at' => date('Y-m-d H:i:s'),
                    ),
            11 =>
                array (
                    'name' => 'Rennes',
                    'lng' => '-1.6777926',
                    'lat' => '48.1113387',
                    'created_at' => date('Y-m-d H:i:s'),
                    ),
            12 =>
                array (
                    'name' => 'Montreuil',
                    'lng' => '2.448451',
                    'lat' => '50.4638918',
                    'created_at' => date('Y-m-d H:i:s'),
                    ),


        )


        );
    }
}
