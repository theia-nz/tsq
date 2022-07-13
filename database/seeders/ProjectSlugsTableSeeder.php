<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProjectSlugsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('project_slugs')->delete();
        
        \DB::table('project_slugs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'project_id' => 1,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 04:31:12',
                'slug' => 'project-a',
                'locale' => 'en',
                'active' => 0,
            ),
            1 => 
            array (
                'id' => 2,
                'project_id' => 1,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 04:31:12',
                'slug' => 'project-a1',
                'locale' => 'en',
                'active' => 0,
            ),
            2 => 
            array (
                'id' => 3,
                'project_id' => 2,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 20:55:47',
                'slug' => 'project-a2',
                'locale' => 'en',
                'active' => 0,
            ),
            3 => 
            array (
                'id' => 4,
                'project_id' => 3,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 04:33:28',
                'slug' => 'project-a3',
                'locale' => 'en',
                'active' => 0,
            ),
            4 => 
            array (
                'id' => 5,
                'project_id' => 4,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 04:35:28',
                'slug' => 'project-b1',
                'locale' => 'en',
                'active' => 0,
            ),
            5 => 
            array (
                'id' => 6,
                'project_id' => 5,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 04:35:59',
                'slug' => 'project-c1',
                'locale' => 'en',
                'active' => 0,
            ),
            6 => 
            array (
                'id' => 7,
                'project_id' => 1,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 04:31:12',
                'slug' => 'philson-terrace-browns-bay',
                'locale' => 'en',
                'active' => 1,
            ),
            7 => 
            array (
                'id' => 8,
                'project_id' => 2,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 20:55:47',
                'slug' => 'clayburn-road-gend-eden',
                'locale' => 'en',
                'active' => 0,
            ),
            8 => 
            array (
                'id' => 9,
                'project_id' => 3,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 04:33:28',
                'slug' => 'edmonton-residence-development',
                'locale' => 'en',
                'active' => 1,
            ),
            9 => 
            array (
                'id' => 10,
                'project_id' => 4,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 04:35:28',
                'slug' => 'beach-road-browns-bay',
                'locale' => 'en',
                'active' => 1,
            ),
            10 => 
            array (
                'id' => 11,
                'project_id' => 5,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 04:35:59',
                'slug' => 'marriott-road-pakuranga-heights',
                'locale' => 'en',
                'active' => 1,
            ),
            11 => 
            array (
                'id' => 12,
                'project_id' => 6,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 04:36:25',
                'slug' => 'springbank-lane-te-atatu-peninsula',
                'locale' => 'en',
                'active' => 1,
            ),
            12 => 
            array (
                'id' => 13,
                'project_id' => 7,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 04:36:50',
                'slug' => 'yeovil-road-te-atatu-peninsula',
                'locale' => 'en',
                'active' => 1,
            ),
            13 => 
            array (
                'id' => 14,
                'project_id' => 8,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 04:37:45',
                'slug' => 'princes-street-west-pukekohe',
                'locale' => 'en',
                'active' => 1,
            ),
            14 => 
            array (
                'id' => 15,
                'project_id' => 9,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 04:38:40',
                'slug' => 'rangeview-road-sunnyvale',
                'locale' => 'en',
                'active' => 1,
            ),
            15 => 
            array (
                'id' => 16,
                'project_id' => 10,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 04:38:55',
                'slug' => 'sorrel-crescent-half-moon-bay',
                'locale' => 'en',
                'active' => 1,
            ),
            16 => 
            array (
                'id' => 17,
                'project_id' => 11,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 20:27:43',
                'slug' => 'patons-road-howick',
                'locale' => 'en',
                'active' => 1,
            ),
            17 => 
            array (
                'id' => 18,
                'project_id' => 12,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 21:06:57',
                'slug' => 'elliot-street-papakura',
                'locale' => 'en',
                'active' => 1,
            ),
            18 => 
            array (
                'id' => 19,
                'project_id' => 13,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 21:07:34',
                'slug' => 'archibald-road-kelston',
                'locale' => 'en',
                'active' => 1,
            ),
            19 => 
            array (
                'id' => 20,
                'project_id' => 14,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 21:08:12',
                'slug' => 'yeovil-road-te-atatu-peninsula-2',
                'locale' => 'en',
                'active' => 1,
            ),
            20 => 
            array (
                'id' => 21,
                'project_id' => 15,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 21:09:01',
                'slug' => 'te-atatu-road-te-atatu-south',
                'locale' => 'en',
                'active' => 1,
            ),
            21 => 
            array (
                'id' => 22,
                'project_id' => 16,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 21:09:41',
                'slug' => 'jillian-drive-ranui',
                'locale' => 'en',
                'active' => 1,
            ),
            22 => 
            array (
                'id' => 23,
                'project_id' => 17,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 21:13:09',
                'slug' => 'hamlin-road-mount-wellington',
                'locale' => 'en',
                'active' => 1,
            ),
            23 => 
            array (
                'id' => 24,
                'project_id' => 18,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 21:13:48',
                'slug' => 'geordie-street-henderson',
                'locale' => 'en',
                'active' => 1,
            ),
            24 => 
            array (
                'id' => 25,
                'project_id' => 19,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 21:14:25',
                'slug' => 'fonteyn-street-avondale',
                'locale' => 'en',
                'active' => 1,
            ),
            25 => 
            array (
                'id' => 26,
                'project_id' => 20,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 21:15:15',
                'slug' => 'titirangi-road-new-lynn',
                'locale' => 'en',
                'active' => 1,
            ),
            26 => 
            array (
                'id' => 27,
                'project_id' => 21,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 21:23:31',
                'slug' => 'victoria-street-pukekohe',
                'locale' => 'en',
                'active' => 1,
            ),
            27 => 
            array (
                'id' => 28,
                'project_id' => 22,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 21:25:01',
                'slug' => 'hepper-street-new-lynn',
                'locale' => 'en',
                'active' => 1,
            ),
            28 => 
            array (
                'id' => 29,
                'project_id' => 23,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 21:25:43',
                'slug' => 'sturdee-road-manurewa',
                'locale' => 'en',
                'active' => 1,
            ),
            29 => 
            array (
                'id' => 30,
                'project_id' => 24,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 21:26:35',
                'slug' => 'quibray-place-botany-downs',
                'locale' => 'en',
                'active' => 1,
            ),
            30 => 
            array (
                'id' => 31,
                'project_id' => 25,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 21:27:28',
                'slug' => 'west-street-pukekohe',
                'locale' => 'en',
                'active' => 1,
            ),
            31 => 
            array (
                'id' => 32,
                'project_id' => 26,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 21:33:12',
                'slug' => 'brickworks-bay-road-hobsonville',
                'locale' => 'en',
                'active' => 1,
            ),
            32 => 
            array (
                'id' => 33,
                'project_id' => 27,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 21:33:59',
                'slug' => 'montmere-avenue-te-atatu',
                'locale' => 'en',
                'active' => 1,
            ),
            33 => 
            array (
                'id' => 34,
                'project_id' => 28,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 21:35:06',
                'slug' => 'pakuranga-road-pakuranga',
                'locale' => 'en',
                'active' => 1,
            ),
            34 => 
            array (
                'id' => 35,
                'project_id' => 29,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 21:35:56',
                'slug' => 'george-street-papakura',
                'locale' => 'en',
                'active' => 1,
            ),
            35 => 
            array (
                'id' => 36,
                'project_id' => 30,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 21:36:28',
                'slug' => 'mandarin-place-highland-park',
                'locale' => 'en',
                'active' => 1,
            ),
            36 => 
            array (
                'id' => 37,
                'project_id' => 31,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 21:38:09',
                'slug' => '70-merton-road-st-johns',
                'locale' => 'en',
                'active' => 1,
            ),
            37 => 
            array (
                'id' => 38,
                'project_id' => 32,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 21:38:41',
                'slug' => 'great-north-road-new-lynn',
                'locale' => 'en',
                'active' => 1,
            ),
            38 => 
            array (
                'id' => 39,
                'project_id' => 33,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 21:39:46',
                'slug' => 'walker-road-pt-chevalier',
                'locale' => 'en',
                'active' => 1,
            ),
            39 => 
            array (
                'id' => 40,
                'project_id' => 34,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 21:40:26',
                'slug' => 'taikata-road-te-atatu-peninsula',
                'locale' => 'en',
                'active' => 1,
            ),
            40 => 
            array (
                'id' => 41,
                'project_id' => 35,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 21:44:24',
                'slug' => 'shirley-road-papatoetoe',
                'locale' => 'en',
                'active' => 1,
            ),
            41 => 
            array (
                'id' => 42,
                'project_id' => 36,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 21:45:10',
                'slug' => 'massey-road-mangere',
                'locale' => 'en',
                'active' => 1,
            ),
            42 => 
            array (
                'id' => 43,
                'project_id' => 37,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 21:45:53',
                'slug' => 'gloucester-road-manurewa',
                'locale' => 'en',
                'active' => 1,
            ),
            43 => 
            array (
                'id' => 44,
                'project_id' => 38,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 21:46:28',
                'slug' => 'riverview-road-new-lynn',
                'locale' => 'en',
                'active' => 1,
            ),
            44 => 
            array (
                'id' => 45,
                'project_id' => 39,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 21:47:04',
                'slug' => 'dellwood-avenue-henderson',
                'locale' => 'en',
                'active' => 1,
            ),
            45 => 
            array (
                'id' => 46,
                'project_id' => 40,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 21:47:39',
                'slug' => 'taikata-road-te-atatu-peninsula-2',
                'locale' => 'en',
                'active' => 1,
            ),
            46 => 
            array (
                'id' => 47,
                'project_id' => 41,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 21:48:15',
                'slug' => 'beach-road-te-atatu-peninsula',
                'locale' => 'en',
                'active' => 1,
            ),
            47 => 
            array (
                'id' => 48,
                'project_id' => 42,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 21:48:44',
                'slug' => 'beach-haven-road',
                'locale' => 'en',
                'active' => 1,
            ),
            48 => 
            array (
                'id' => 49,
                'project_id' => 43,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 21:49:22',
                'slug' => 'glenhaven-place-te-atatu-peninsula',
                'locale' => 'en',
                'active' => 1,
            ),
            49 => 
            array (
                'id' => 50,
                'project_id' => 44,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 21:50:00',
                'slug' => 'ribblesdale-road-henderson',
                'locale' => 'en',
                'active' => 1,
            ),
            50 => 
            array (
                'id' => 51,
                'project_id' => 45,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 21:50:33',
                'slug' => 'fairdene-avenue-henderson',
                'locale' => 'en',
                'active' => 1,
            ),
            51 => 
            array (
                'id' => 52,
                'project_id' => 46,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 21:51:06',
                'slug' => 'woodford-avenue-henderson',
                'locale' => 'en',
                'active' => 1,
            ),
            52 => 
            array (
                'id' => 53,
                'project_id' => 47,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 21:51:35',
                'slug' => 'shoreham-street-avondale',
                'locale' => 'en',
                'active' => 1,
            ),
            53 => 
            array (
                'id' => 54,
                'project_id' => 48,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 21:53:23',
                'slug' => 'mahia-road-manurewa',
                'locale' => 'en',
                'active' => 1,
            ),
            54 => 
            array (
                'id' => 55,
                'project_id' => 49,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 21:54:10',
                'slug' => 'jayne-place-torbay',
                'locale' => 'en',
                'active' => 1,
            ),
            55 => 
            array (
                'id' => 56,
                'project_id' => 50,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 21:54:50',
                'slug' => 'richards-avenue-forrest-hill',
                'locale' => 'en',
                'active' => 1,
            ),
            56 => 
            array (
                'id' => 57,
                'project_id' => 51,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 21:55:28',
                'slug' => 'takapu-street-henderson',
                'locale' => 'en',
                'active' => 1,
            ),
            57 => 
            array (
                'id' => 58,
                'project_id' => 52,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 21:55:53',
                'slug' => 'blyton-lane-pakuranga-heights',
                'locale' => 'en',
                'active' => 1,
            ),
            58 => 
            array (
                'id' => 59,
                'project_id' => 53,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 21:56:24',
                'slug' => 'moire-road-massey',
                'locale' => 'en',
                'active' => 1,
            ),
            59 => 
            array (
                'id' => 60,
                'project_id' => 54,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 21:57:01',
                'slug' => 'pakuranga-road-pakuranga-2',
                'locale' => 'en',
                'active' => 1,
            ),
            60 => 
            array (
                'id' => 61,
                'project_id' => 55,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 21:57:31',
                'slug' => 'berwyn-avenue-takanini',
                'locale' => 'en',
                'active' => 1,
            ),
            61 => 
            array (
                'id' => 62,
                'project_id' => 56,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 21:57:57',
                'slug' => 'lavelle-road-henderson',
                'locale' => 'en',
                'active' => 1,
            ),
            62 => 
            array (
                'id' => 63,
                'project_id' => 57,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 21:58:25',
                'slug' => 'enderby-drive-te-atatu-peninsula',
                'locale' => 'en',
                'active' => 1,
            ),
            63 => 
            array (
                'id' => 64,
                'project_id' => 58,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 21:59:04',
                'slug' => 'abbotleigh-avenue-te-atatu-peninsula',
                'locale' => 'en',
                'active' => 1,
            ),
            64 => 
            array (
                'id' => 65,
                'project_id' => 59,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 22:00:13',
                'slug' => 'jolson-road-mount-wellington',
                'locale' => 'en',
                'active' => 1,
            ),
            65 => 
            array (
                'id' => 66,
                'project_id' => 60,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 22:01:23',
                'slug' => 'edgewater-drive-pakuranga',
                'locale' => 'en',
                'active' => 1,
            ),
            66 => 
            array (
                'id' => 67,
                'project_id' => 61,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 22:19:03',
                'slug' => 'rehia-road-massey',
                'locale' => 'en',
                'active' => 1,
            ),
            67 => 
            array (
                'id' => 68,
                'project_id' => 62,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 22:02:25',
                'slug' => 'royal-road-massey',
                'locale' => 'en',
                'active' => 1,
            ),
            68 => 
            array (
                'id' => 69,
                'project_id' => 63,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 22:02:54',
                'slug' => 'forrest-hill-road-milford',
                'locale' => 'en',
                'active' => 1,
            ),
            69 => 
            array (
                'id' => 70,
                'project_id' => 64,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 22:03:25',
                'slug' => 'tarawera-terrace-st-heliers',
                'locale' => 'en',
                'active' => 1,
            ),
            70 => 
            array (
                'id' => 71,
                'project_id' => 65,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 22:19:40',
                'slug' => 'camphora-place-ranui',
                'locale' => 'en',
                'active' => 1,
            ),
            71 => 
            array (
                'id' => 72,
                'project_id' => 66,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 22:04:33',
                'slug' => 'methuen-road-new-windsor',
                'locale' => 'en',
                'active' => 1,
            ),
            72 => 
            array (
                'id' => 73,
                'project_id' => 67,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 22:05:08',
                'slug' => 'ellesmere-crescent-pakuranga-heights',
                'locale' => 'en',
                'active' => 1,
            ),
            73 => 
            array (
                'id' => 74,
                'project_id' => 68,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 22:05:37',
                'slug' => 'allender-drive-torbay',
                'locale' => 'en',
                'active' => 1,
            ),
            74 => 
            array (
                'id' => 75,
                'project_id' => 69,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 22:06:19',
                'slug' => 'evelyn-place-hillcrest',
                'locale' => 'en',
                'active' => 1,
            ),
            75 => 
            array (
                'id' => 76,
                'project_id' => 70,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 22:06:50',
                'slug' => 'edwards-avenue-henderson',
                'locale' => 'en',
                'active' => 1,
            ),
            76 => 
            array (
                'id' => 77,
                'project_id' => 71,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 22:08:30',
                'slug' => 'stanley-road-glenfield',
                'locale' => 'en',
                'active' => 1,
            ),
            77 => 
            array (
                'id' => 78,
                'project_id' => 72,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 22:09:04',
                'slug' => 'regia-close-half-moon-bay',
                'locale' => 'en',
                'active' => 1,
            ),
            78 => 
            array (
                'id' => 79,
                'project_id' => 73,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 22:20:21',
                'slug' => 'donovan-avenue-massey',
                'locale' => 'en',
                'active' => 1,
            ),
            79 => 
            array (
                'id' => 80,
                'project_id' => 74,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 22:10:29',
                'slug' => 'fjord-way-hingaia',
                'locale' => 'en',
                'active' => 1,
            ),
            80 => 
            array (
                'id' => 81,
                'project_id' => 2,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-11 20:55:47',
                'slug' => 'clayburn-road-glen-eden',
                'locale' => 'en',
                'active' => 1,
            ),
        ));
        
        
    }
}