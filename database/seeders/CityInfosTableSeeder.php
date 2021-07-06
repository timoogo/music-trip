<?php

namespace Database\Seeders;

use App\Models\CityInfo;
use Illuminate\Database\Seeder;
use Database\Seeders\DB;

class CityInfosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('city_infos')->insert([
            [
                "id"=> 1,
                "city_id"=> 1,
                "title"=> "Paris",
                "description"=> "Paris est la capitale française",
                "img_src"=> "https://www.toureiffel.paris/themes/custom/tour_eiffel/img/picto_myGoogleBusiness_1.jpg",
                "video_src"=> null,
                "yt_src"=> null,
                "isCompleted"=> 0
            ],
            [
                "id"=> 2,
                "city_id"=> 2,
                "title"=> "Montreuil",
                "description"=> "Montreuil, qui fut également appelé Montreuil-sous-Bois, est une commune française située dans le département de la Seine-Saint-Denis...",
                "img_src"=> "https://www.montreuil.fr/fileadmin/user_upload/bas-montreuil-aerien.jpg",
                "video_src"=> null,
                "yt_src"=> null,
                "isCompleted"=> 0
            ],
            [
                "id"=> 3,
                "city_id"=> 3,
                "title"=> "La Rochelle",
                "description"=> "Au bord de l'Océan Atlantique, face aux îles de Ré, Aix et Oléron, La Rochelle et son agglomération vous accueillent dans le département de la Charente-​Maritime ...",
                "img_src"=> "https://upload.wikimedia.org/wikipedia/commons/9/91/Entrance_La_Rochelle_old_harbor.jpg",
                "video_src"=> null,
                "yt_src"=> null,
                "isCompleted"=> 0
            ],
            [
                "id"=> 4,
                "city_id"=> 4,
                "title"=> "Lille",
                "description"=> "Lille, est une ville du nord de la France, préfecture du département du Nord et chef-lieu de la région Hauts-de-France",
                "img_src"=> "https://upload.wikimedia.org/wikipedia/commons/f/f8/Lille_vue_gd_place.JPG",
                "video_src"=> null,
                "yt_src"=> null,
                "isCompleted"=> 1
            ],
            [
                "id"=> 5,
                "city_id"=> 5,
                "title"=> "Nevers",
                "description"=> "Nevers, est une commune du centre de la France, située dans le département de la Nièvre en région Bourgogne-Franche-Comté",
                "img_src"=> "https://upload.wikimedia.org/wikipedia/commons/thumb/f/f2/Nevers-Loirebr%C3%A9ck--w.jpg/2880px-Nevers-Loirebr%C3%A9ck--w.jpg",
                "video_src"=> null,
                "yt_src"=> null,
                "isCompleted"=> 0
            ],
            [
                "id"=> 6,
                "city_id"=> 6,
                "title"=> "Bourges",
                "description"=> "Bourges est une commune française, préfecture du département du Cher",
                "img_src"=> "https://upload.wikimedia.org/wikipedia/commons/8/8f/Cath%C3%A9drale_Saint-%C3%89tienne_7SC2336CFP.jpg",
                "video_src"=> null,
                "yt_src"=> null,
                "isCompleted"=> 0
            ],
            [
                "id"=> 7,
                "city_id"=> 7,
                "title"=> "Limoges",
                "description"=> "Limoges est une ville du centre sud-ouest de la France. Elle est connue pour sa porcelaine décorée, dont le musée national Adrien Dubouché possède une vaste collection",
                "img_src"=> "https://upload.wikimedia.org/wikipedia/commons/0/09/Montage_Limoges.png",
                "video_src"=> null,
                "yt_src"=> null,
                "isCompleted"=> 0
            ],
            [
                "id"=> 8,
                "city_id"=> 8,
                "title"=> "St-Germain En Laye",
                "description"=> "St-Germain En Laye est une commune française située à 19 km à l'ouest de Paris dans le département des Yvelines en région Île-de-France",
                "img_src"=> "https://upload.wikimedia.org/wikipedia/commons/3/31/Ch%C3%A2teau_de_Saint-Germain-en-Laye01.jpg",
                "video_src"=> null,
                "yt_src"=> null,
                "isCompleted"=> 0
            ],
            [
                "id"=> 9,
                "city_id"=> 9,
                "title"=> "Nantes",
                "description"=> "Nantes est une commune de l'ouest de la France, située au sud du Massif armoricain, qui s'étend sur les rives de la Loire, à 50 km de l'océan Atlantique.",
                "img_src"=> "https://upload.wikimedia.org/wikipedia/commons/4/48/Ch%C3%A2teau_des_Ducs_de_Bretagne_%C3%A0_Nantes_-_Anne.jpg",
                "video_src"=> null,
                "yt_src"=> null,
                "isCompleted"=> 0
            ],
            [
                "id"=> 10,
                "city_id"=> 10,
                "title"=> "Grenoble",
                "description"=> "Grenoble, ville de la région Rhône-Alpes du sud-est de la France, se trouve au pied des montagnes entre le Drac et l'Isère. Entourée de montagnes, elle est le lieu idéal pour les sports d'hiver.",
                "img_src"=> "https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Cath%C3%A9drale_Notre-Dame_%C3%A0_Grenoble_2014-09-27.jpg/1024px-Cath%C3%A9drale_Notre-Dame_%C3%A0_Grenoble_2014-09-27.jpg",
                "video_src"=> null,
                "yt_src"=> null,
                "isCompleted"=> 0
            ],
            [
                "id"=> 11,
                "city_id"=> 11,
                "title"=> "Avignon",
                "description"=> "Avignon, ville de Provence dans le sud-est de la France, est traversée par le Rhône",
                "img_src"=> "https://upload.wikimedia.org/wikipedia/commons/thumb/e/e2/Vue_a%C3%A9rienne_2_JP_Campomar.jpg/2560px-Vue_a%C3%A9rienne_2_JP_Campomar.jpg",
                "video_src"=> null,
                "yt_src"=> null,
                "isCompleted"=> 0
            ],
            [
                "id"=> 12,
                "city_id"=> 12,
                "title"=> "Rennes",
                "description"=> "Rennes est la préfecture de la région Bretagne, au nord-ouest de la France. Elle est connue pour ses maisons médiévales à colombages et son immense cathédrale.",
                "img_src"=> "https://upload.wikimedia.org/wikipedia/commons/thumb/c/cf/Vue_sud-est_de_la_place_du_parlement_de_Bretagne%2C_Rennes%2C_France.jpg/556px-Vue_sud-est_de_la_place_du_parlement_de_Bretagne%2C_Rennes%2C_France.jpg",
                "video_src"=> null,
                "yt_src"=> null,
                "isCompleted"=> 0
            ],
        ]);
    }
}
