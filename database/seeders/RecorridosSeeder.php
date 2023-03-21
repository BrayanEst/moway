<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class RecorridosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recorridos')->insert([
            'nombre_ruta' => 'Sotracauca Ruta 1 ida',
            'numero_ruta' => '1',
            'url_recorrido' => 'https://www.google.com/maps/d/u/0/edit?mid=12b_iVg6HJiX4j-9Kr6U0LufmDGdqAKs&usp=sharing',
            'imagen_recorrido' => 'https://i.imgur.com/CwAySeq.png',
            'id_horario' => '1',
            'id_empresa' => '1',
        ]);
        DB::table('recorridos')->insert([
            'nombre_ruta' => 'Sotracauca Ruta 1 vuelta',
            'numero_ruta' => '1',
            'url_recorrido' => 'https://www.google.com/maps/d/u/0/edit?mid=1kZUiaZTWpClZxeCBIAyRdBhKJmcIuTg&usp=sharing',
            'imagen_recorrido' => 'https://i.imgur.com/UQUZxKP.png',
            'id_horario' => '1',
            'id_empresa' => '1',
        ]);
        DB::table('recorridos')->insert([
            'nombre_ruta' => 'Sotracauca Ruta 2 ida',
            'numero_ruta' => '2',
            'url_recorrido' => 'https://www.google.com/maps/d/u/0/edit?mid=1mrkGq1lrMb6C6--vs5POkUtKqv2qrn0&usp=sharing',
            'imagen_recorrido' => 'https://i.imgur.com/R2hAITr.png',
            'id_horario' => '1',
            'id_empresa' => '1',
        ]);
        DB::table('recorridos')->insert([
            'nombre_ruta' => 'Sotracauca Ruta 2 vuelta',
            'numero_ruta' => '2',
            'url_recorrido' => 'https://www.google.com/maps/d/u/0/edit?mid=1kZUiaZTWpClZxeCBIAyRdBhKJmcIuTg&usp=sharing',
            'imagen_recorrido' => 'https://i.imgur.com/M0zQub5.png',
            'id_horario' => '1',
            'id_empresa' => '1',
        ]);
        DB::table('recorridos')->insert([
            'nombre_ruta' => 'Sotracauca Ruta 3 ida',
            'numero_ruta' => '3',
            'url_recorrido' => 'https://www.google.com/maps/d/u/0/edit?mid=11OkKvJ4If32QfhZVQM6adQwsndaDP7w&usp=sharing',
            'imagen_recorrido' => 'https://i.imgur.com/cPDjXRr.png',
            'id_horario' => '1',
            'id_empresa' => '1',
        ]);
        DB::table('recorridos')->insert([
            'nombre_ruta' => 'Sotracauca Ruta 3 vuelta',
            'numero_ruta' => '3',
            'url_recorrido' => 'https://www.google.com/maps/d/u/0/edit?mid=10aH68jom3Rdom1y6tzlPD_bxU0g0XQM&usp=sharing',
            'imagen_recorrido' => 'https://i.imgur.com/SBj91hf.png',
            'id_horario' => '1',
            'id_empresa' => '1',
        ]);
        DB::table('recorridos')->insert([
            'nombre_ruta' => 'Translibertad Ruta 1 ida',
            'numero_ruta' => '1',
            'url_recorrido' => 'https://www.google.com/maps/d/u/0/edit?mid=1E19VstM8OQ-1RNPsvGK4PVZS9b2LFEo&usp=sharing',
            'imagen_recorrido' => 'https://i.imgur.com/C4sBZ3p.png',
            'id_horario' => '1',
            'id_empresa' => '2',
        ]);
        DB::table('recorridos')->insert([
            'nombre_ruta' => 'Translibertad Ruta 1 vuelta',
            'numero_ruta' => '1',
            'url_recorrido' => 'https://www.google.com/maps/d/u/0/edit?mid=1g4YXYJDkeSekOw5_MPsJXODsOtZrxIg&usp=sharing',
            'imagen_recorrido' => 'https://i.imgur.com/Ujy30iJ.png',
            'id_horario' => '1',
            'id_empresa' => '2',
        ]);
        DB::table('recorridos')->insert([
            'nombre_ruta' => 'Translibertad Ruta 2 ida',
            'numero_ruta' => '2',
            'url_recorrido' => 'https://www.google.com/maps/d/u/0/edit?mid=1lQ9YTDzPvUaTjL8Q2FRUB-MgrjiL0g8&usp=sharing',
    'imagen_recorrido' => 'https://i.imgur.com/Wc6tZFM.png',
            'id_horario' => '1',
            'id_empresa' => '2',
        ]);
        DB::table('recorridos')->insert([
            'nombre_ruta' => 'Translibertad Ruta 2 vuelta',
            'numero_ruta' => '2',
            'url_recorrido' => 'https://www.google.com/maps/d/u/0/edit?mid=1sAeoOREAMkAQstpzNwsg8SEBAfROcp8&usp=sharing',
            'imagen_recorrido' => 'https://i.imgur.com/YVW00Dh.png',
            'id_horario' => '1',
            'id_empresa' => '2',
        ]);
        DB::table('recorridos')->insert([
            'nombre_ruta' => 'Translibertad Ruta 3 ida',
            'numero_ruta' => '3',
            'url_recorrido' => 'https://www.google.com/maps/d/u/0/edit?mid=13grG7P4te6VJP_TGkM0hkoh2o1XO9BM&usp=sharing',
            'imagen_recorrido' => 'https://i.imgur.com/146SljX.png',
            'id_horario' => '1',
            'id_empresa' => '2',
        ]);
        DB::table('recorridos')->insert([
            'nombre_ruta' => 'Translibertad Ruta 3 vuelta',
            'numero_ruta' => '3',
            'url_recorrido' => 'https://www.google.com/maps/d/u/0/edit?mid=1993xFeoXwhZ69tWKyoyu8iBq6szaOmQ&usp=sharing',
            'imagen_recorrido' => 'https://i.imgur.com/2byi84g.png',
            'id_horario' => '1',
            'id_empresa' => '2',
        ]);
        DB::table('recorridos')->insert([
            'nombre_ruta' => 'Transpubenza Ruta 1 ida',
            'numero_ruta' => '1',
            'url_recorrido' => 'https://www.google.com/maps/d/u/0/edit?mid=1KLSXuua0MoYobKIlcWkB2tdJRkKjV0A&usp=sharing',
            'imagen_recorrido' => 'https://i.imgur.com/gkrMTJF.png',
            'id_horario' => '1',
            'id_empresa' => '3',
        ]);
        DB::table('recorridos')->insert([
            'nombre_ruta' => 'Transpubenza Ruta 1 vuelta',
            'numero_ruta' => '1',
            'url_recorrido' => 'https://www.google.com/maps/d/u/0/edit?mid=1QJZAPpT7JmEUHp852BNuuqHjNgcEeew&usp=sharing',
            'imagen_recorrido' => 'https://i.imgur.com/1HcoABF.png',
            'id_horario' => '1',
            'id_empresa' => '3',
        ]);
        DB::table('recorridos')->insert([
            'nombre_ruta' => 'Transpubenza Ruta 2 ida',
            'numero_ruta' => '2',
            'url_recorrido' => 'https://www.google.com/maps/d/u/0/edit?mid=1zGdYZD9s4AH47234aGxIW_0ZQTz6hMs&usp=sharing',
            'imagen_recorrido' => 'https://i.imgur.com/7AFcySf.png',
            'id_horario' => '1',
            'id_empresa' => '3',
        ]);
        DB::table('recorridos')->insert([
            'nombre_ruta' => 'Transpubenza Ruta 2 vuelta',
            'numero_ruta' => '2',
            'url_recorrido' => 'https://www.google.com/maps/d/u/0/edit?mid=1AfwsBye43zG_skx7bIfMV8kHQc130ao&usp=sharing',
            'imagen_recorrido' => 'https://i.imgur.com/dJcLxRd.png',
            'id_horario' => '1',
            'id_empresa' => '3',
        ]);
        DB::table('recorridos')->insert([
            'nombre_ruta' => 'Transpubenza Ruta 3 ida',
            'numero_ruta' => '3',
            'url_recorrido' => 'https://www.google.com/maps/d/u/0/edit?mid=1LG1uGl-O2SHvjinhXwj89OC--oKD2JI&usp=sharing',
            'imagen_recorrido' => 'https://i.imgur.com/mOA6YAz.png',
            'id_horario' => '1',
            'id_empresa' => '3',
        ]);
        DB::table('recorridos')->insert([
            'nombre_ruta' => 'Transpubenza Ruta 3 vuelta',
            'numero_ruta' => '3',
            'url_recorrido' => 'https://www.google.com/maps/d/u/0/edit?mid=1bX3aMqt4xe-G4UW34oh3xXN5471yxOE&usp=sharing',
            'imagen_recorrido' => 'https://i.imgur.com/UD3CA5O.png',
            'id_horario' => '1',
            'id_empresa' => '3',
        ]);
        DB::table('recorridos')->insert([
            'nombre_ruta' => 'Transtambo Ruta 1 ida',
            'numero_ruta' => '1',
            'url_recorrido' => 'https://www.google.com/maps/d/u/0/edit?mid=1_HHBmbq3dn5psa6kbwWvKUm_wg2nd50&usp=sharing',
            'imagen_recorrido' => 'https://i.imgur.com/pSoE8aC.png',
            'id_horario' => '1',
            'id_empresa' => '4',
        ]);
        DB::table('recorridos')->insert([
            'nombre_ruta' => 'Transtambo Ruta 1 vuelta',
            'numero_ruta' => '1',
            'url_recorrido' => 'https://www.google.com/maps/d/u/0/edit?mid=1pmsPWRZDxVodHUK9xRGgdegEPQcM-Bc&usp=sharing',
            'imagen_recorrido' => 'https://i.imgur.com/zqcwCnD.png',
            'id_horario' => '1',
            'id_empresa' => '4',
        ]);
        DB::table('recorridos')->insert([
            'nombre_ruta' => 'Transtambo Ruta 2 ida',
            'numero_ruta' => '2',
            'url_recorrido' => 'https://www.google.com/maps/d/u/0/edit?mid=1GN6JJmL6zApTlyzcYA_3hB0-kvq-9Ak&usp=sharing',
            'imagen_recorrido' => 'https://i.imgur.com/6Fl2pPE.png',
            'id_horario' => '1',
            'id_empresa' => '4',
        ]);
        DB::table('recorridos')->insert([
            'nombre_ruta' => 'Transtambo Ruta 2 vuelta',
            'numero_ruta' => '2',
            'url_recorrido' => 'https://www.google.com/maps/d/u/0/edit?mid=1OxyQM8yi4olHQw8RbHZmHPWEhTm7iJo&usp=sharing',
            'imagen_recorrido' => 'https://i.imgur.com/KDqVSTT.png',
            'id_horario' => '1',
            'id_empresa' => '4',
        ]);
        DB::table('recorridos')->insert([
            'nombre_ruta' => 'Transtambo Ruta 3 ida',
            'numero_ruta' => '3',
            'url_recorrido' => 'https://www.google.com/maps/d/u/0/edit?mid=1Zndx7xin_S-_WaDNGG4mwahXNzrS8RQ&usp=sharing',
            'imagen_recorrido' => 'https://i.imgur.com/CYNTb1q.png',
            'id_horario' => '1',
            'id_empresa' => '4',
        ]);
        DB::table('recorridos')->insert([
            'nombre_ruta' => 'Transtambo Ruta 3 vuelta',
            'numero_ruta' => '3',
            'url_recorrido' => 'https://www.google.com/maps/d/u/0/edit?mid=1pd-hf9n0XFd27P_l82FWdVYTucaIugc&usp=sharing',
            'imagen_recorrido' => 'https://i.imgur.com/pKCQWXh.png',
            'id_horario' => '1',
            'id_empresa' => '4',
        ]);
        DB::table('recorrido_paradas')->insert([
            'id_parada' => '1',
            'id_recorrido' => '1',
        ]);
        DB::table('recorrido_paradas')->insert([
            'id_parada' => '2',
            'id_recorrido' => '1',
        ]);
        DB::table('recorrido_paradas')->insert([
            'id_parada' => '3',
            'id_recorrido' => '1',
        ]);
        DB::table('recorrido_paradas')->insert([
            'id_parada' => '4',
            'id_recorrido' => '1',
        ]);
        DB::table('recorrido_paradas')->insert([
            'id_parada' => '5',
            'id_recorrido' => '1',
        ]);
        DB::table('recorrido_paradas')->insert([
            'id_parada' => '6',
            'id_recorrido' => '1',
        ]);
        DB::table('recorrido_paradas')->insert([
            'id_parada' => '7',
            'id_recorrido' => '1',
        ]);
        DB::table('recorrido_paradas')->insert([
            'id_parada' => '8',
            'id_recorrido' => '1',
        ]);
        DB::table('recorrido_paradas')->insert([
            'id_parada' => '9',
            'id_recorrido' => '1',
        ]);



        DB::table('recorrido_paradas')->insert([
            'id_parada' => '1',
            'id_recorrido' => '2',
        ]);
        DB::table('recorrido_paradas')->insert([
            'id_parada' => '2',
            'id_recorrido' => '2',
        ]);
        DB::table('recorrido_paradas')->insert([
            'id_parada' => '3',
            'id_recorrido' => '2',
        ]);
        DB::table('recorrido_paradas')->insert([
            'id_parada' => '4',
            'id_recorrido' => '2',
        ]);
        DB::table('recorrido_paradas')->insert([
            'id_parada' => '5',
            'id_recorrido' => '2',
        ]);
        DB::table('recorrido_paradas')->insert([
            'id_parada' => '6',
            'id_recorrido' => '2',
        ]);
        DB::table('recorrido_paradas')->insert([
            'id_parada' => '7',
            'id_recorrido' => '2',
        ]);
        DB::table('recorrido_paradas')->insert([
            'id_parada' => '8',
            'id_recorrido' => '2',
        ]);
        DB::table('recorrido_paradas')->insert([
            'id_parada' => '9',
            'id_recorrido' => '2',
        ]);


        DB::table('recorrido_paradas')->insert([
            'id_parada' => '1',
            'id_recorrido' => '3',
        ]);
        DB::table('recorrido_paradas')->insert([
            'id_parada' => '2',
            'id_recorrido' => '3',
        ]);
        DB::table('recorrido_paradas')->insert([
            'id_parada' => '3',
            'id_recorrido' => '3',
        ]);
        DB::table('recorrido_paradas')->insert([
            'id_parada' => '4',
            'id_recorrido' => '3',
        ]);
        DB::table('recorrido_paradas')->insert([
            'id_parada' => '5',
            'id_recorrido' => '3',
        ]);
        DB::table('recorrido_paradas')->insert([
            'id_parada' => '6',
            'id_recorrido' => '3',
        ]);
        DB::table('recorrido_paradas')->insert([
            'id_parada' => '7',
            'id_recorrido' => '3',
        ]);
        DB::table('recorrido_paradas')->insert([
            'id_parada' => '8',
            'id_recorrido' => '3',
        ]);
        DB::table('recorrido_paradas')->insert([
            'id_parada' => '9',
            'id_recorrido' => '3',
        ]);


        DB::table('recorrido_paradas')->insert([
            'id_parada' => '1',
            'id_recorrido' => '4',
        ]);
        DB::table('recorrido_paradas')->insert([
            'id_parada' => '2',
            'id_recorrido' => '4',
        ]);
        DB::table('recorrido_paradas')->insert([
            'id_parada' => '3',
            'id_recorrido' => '4',
        ]);
        DB::table('recorrido_paradas')->insert([
            'id_parada' => '4',
            'id_recorrido' => '4',
        ]);
        DB::table('recorrido_paradas')->insert([
            'id_parada' => '5',
            'id_recorrido' => '4',
        ]);
        DB::table('recorrido_paradas')->insert([
            'id_parada' => '6',
            'id_recorrido' => '4',
        ]);
        DB::table('recorrido_paradas')->insert([
            'id_parada' => '7',
            'id_recorrido' => '4',
        ]);
        DB::table('recorrido_paradas')->insert([
            'id_parada' => '8',
            'id_recorrido' => '4',
        ]);
        DB::table('recorrido_paradas')->insert([
            'id_parada' => '9',
            'id_recorrido' => '4',
        ]);


        DB::table('recorrido_paradas')->insert([
            'id_parada' => '1',
            'id_recorrido' => '5',
        ]);
        DB::table('recorrido_paradas')->insert([
            'id_parada' => '2',
            'id_recorrido' => '5',
        ]);
        DB::table('recorrido_paradas')->insert([
            'id_parada' => '3',
            'id_recorrido' => '5',
        ]);
        DB::table('recorrido_paradas')->insert([
            'id_parada' => '4',
            'id_recorrido' => '5',
        ]);
        DB::table('recorrido_paradas')->insert([
            'id_parada' => '5',
            'id_recorrido' => '5',
        ]);
        DB::table('recorrido_paradas')->insert([
            'id_parada' => '6',
            'id_recorrido' => '5',
        ]);
        DB::table('recorrido_paradas')->insert([
            'id_parada' => '7',
            'id_recorrido' => '5',
        ]);
        DB::table('recorrido_paradas')->insert([
            'id_parada' => '8',
            'id_recorrido' => '5',
        ]);
        DB::table('recorrido_paradas')->insert([
            'id_parada' => '9',
            'id_recorrido' => '5',
        ]);








        DB::table('recorrido_paradas')->insert([
            'id_parada' => '1',
            'id_recorrido' => '6',
        ]);
        DB::table('recorrido_paradas')->insert([
            'id_parada' => '2',
            'id_recorrido' => '6',
        ]);
        DB::table('recorrido_paradas')->insert([
            'id_parada' => '3',
            'id_recorrido' => '6',
        ]);
        DB::table('recorrido_paradas')->insert([
            'id_parada' => '4',
            'id_recorrido' => '6',
        ]);
        DB::table('recorrido_paradas')->insert([
            'id_parada' => '5',
            'id_recorrido' => '6',
        ]);
        DB::table('recorrido_paradas')->insert([
            'id_parada' => '6',
            'id_recorrido' => '6',
        ]);
        DB::table('recorrido_paradas')->insert([
            'id_parada' => '7',
            'id_recorrido' => '6',
        ]);
        DB::table('recorrido_paradas')->insert([
            'id_parada' => '8',
            'id_recorrido' => '6',
        ]);
        DB::table('recorrido_paradas')->insert([
            'id_parada' => '9',
            'id_recorrido' => '6',
        ]);




        DB::table('recorrido_paradas')->insert([
            'id_parada' => '1',
            'id_recorrido' => '7',
        ]);
        DB::table('recorrido_paradas')->insert([
            'id_parada' => '2',
            'id_recorrido' => '7',
        ]);
        DB::table('recorrido_paradas')->insert([
            'id_parada' => '3',
            'id_recorrido' => '7',
        ]);
        DB::table('recorrido_paradas')->insert([
            'id_parada' => '4',
            'id_recorrido' => '7',
        ]);
        DB::table('recorrido_paradas')->insert([
            'id_parada' => '5',
            'id_recorrido' => '7',
        ]);
        DB::table('recorrido_paradas')->insert([
            'id_parada' => '6',
            'id_recorrido' => '7',
        ]);
        DB::table('recorrido_paradas')->insert([
            'id_parada' => '7',
            'id_recorrido' => '7',
        ]);
        DB::table('recorrido_paradas')->insert([
            'id_parada' => '8',
            'id_recorrido' => '7',
        ]);
        DB::table('recorrido_paradas')->insert([
            'id_parada' => '9',
            'id_recorrido' => '7',
        ]);




        DB::table('recorrido_paradas')->insert([
            'id_parada' => '1',
            'id_recorrido' => '8',
        ]);
        DB::table('recorrido_paradas')->insert([
            'id_parada' => '2',
            'id_recorrido' => '8',
        ]);
        DB::table('recorrido_paradas')->insert([
            'id_parada' => '3',
            'id_recorrido' => '8',
        ]);
        DB::table('recorrido_paradas')->insert([
            'id_parada' => '4',
            'id_recorrido' => '8',
        ]);
        DB::table('recorrido_paradas')->insert([
            'id_parada' => '5',
            'id_recorrido' => '8',
        ]);
        DB::table('recorrido_paradas')->insert([
            'id_parada' => '6',
            'id_recorrido' => '8',
        ]);
        DB::table('recorrido_paradas')->insert([
            'id_parada' => '7',
            'id_recorrido' => '8',
        ]);
        DB::table('recorrido_paradas')->insert([
            'id_parada' => '8',
            'id_recorrido' => '8',
        ]);
        DB::table('recorrido_paradas')->insert([
            'id_parada' => '9',
            'id_recorrido' => '8',
        ]);

    }
}
