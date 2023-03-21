<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class EmpresasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('empresas')->insert([
            'nit_empresa' => '9002582300',
            'nombre_empresa' => 'SOTRACAUCA',
            'direccion_empresa' => 'CALLE 57 N 9 38, POPAYAN, CAUCA',
            'img_empresa' => 'https://i.imgur.com/Sji1Gp3.png',
        ]);
        DB::table('empresas')->insert([
            'nit_empresa' => '8000986793',
            'nombre_empresa' => 'TRANSLIBERTAD',
            'direccion_empresa' => 'CALLE 5 50 201, POPAYAN, CAUCA',
            'img_empresa' => 'https://i.imgur.com/znSaz6F.png',
        ]);
        DB::table('empresas')->insert([
            'nit_empresa' => '8915001569',
            'nombre_empresa' => 'TRANSPUBENZA',
            'direccion_empresa' => 'CARRERA 9 27 N 86, POPAYAN, CAUCA',
            'img_empresa' => 'https://i.imgur.com/eREiW42.png',
        ]);
        DB::table('empresas')->insert([
            'nit_empresa' => '8915001949',
            'nombre_empresa' => 'TRANSTAMBO',
            'direccion_empresa' => 'CALLE 4 17 49 P 2, POPAYAN, CAUCA',
            'img_empresa' => 'https://i.imgur.com/lVcSedN.jpg',
        ]);
        DB::table('horarios')->insert([
            'nombre_horario' => 'horario 1',
            'hora_inicio_semana' => '06:00:00',
            'hora_final_semana' => '21:00:00',
            'hora_inicio_festivo' => '05:30:00',
            'hora_final_festivo' => '21:00:00',
        ]);
        DB::table('paradas')->insert([
            'parada' => 'Campanario'
        ]);
        DB::table('paradas')->insert([
            'parada' => 'Exito'
        ]);
        DB::table('paradas')->insert([
            'parada' => 'Nueva Eps'
        ]);
        DB::table('paradas')->insert([
            'parada' => 'Terminal'
        ]);
        DB::table('paradas')->insert([
            'parada' => 'Autopista'
        ]);
        DB::table('paradas')->insert([
            'parada' => 'Terraplaza'
        ]);
        DB::table('paradas')->insert([
            'parada' => 'Sena'
        ]);
        DB::table('paradas')->insert([
            'parada' => 'Esmeralda'
        ]);
        DB::table('paradas')->insert([
            'parada' => 'La paz'
        ]);

    }
}
