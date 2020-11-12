<?php

use Illuminate\Database\Seeder;
use App\Ramo;

class RamosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ramo::truncate();

        Ramo::create([
            'codigo'=> 'DAII-00600',
            'NRC'=> '21669',
            'nombre'=> 'Ingeniería Económica',
            'rut_profesor'=> 'awdawd'
        ]);

        Ramo::create([
            'codigo'=> 'DAII-00600',
            'NRC'=> '21670',
            'nombre'=> 'Ingeniería Económica',
            'rut_profesor'=> 'awdawd'
        ]);

        Ramo::create([
            'codigo'=> 'DAII-00600',
            'NRC'=> '22145',
            'nombre'=> 'Ingeniería Económica',
            'rut_profesor'=> 'awdawd'
        ]);

        Ramo::create([
            'codigo'=> 'DAIS-00601',
            'NRC'=> '21900',
            'nombre'=> 'Análisis de Señales',
            'rut_profesor'=> 'awdawd'
        ]);     


        Ramo::create([
            'codigo'=> 'DAIS-00603',
            'NRC'=> '21896',
            'nombre'=> 'Diseño y Análisis de Algoritmo',
            'rut_profesor'=> 'awdawd'
        ]);

        Ramo::create([
            'codigo'=> 'DAIS-00604',
            'NRC'=> '21905',
            'nombre'=> 'Lenguajes de Programación',
            'rut_profesor'=> 'awdawd'
        ]);
        Ramo::create([
            'codigo'=> 'DAIS-00605',
            'NRC'=> '21903',
            'nombre'=> 'Ingeniería de Software',
            'rut_profesor'=> 'awdawd'
        ]);

        Ramo::create([
            'codigo'=> 'DAIS-00606',
            'NRC'=> '23337',
            'nombre'=> 'Pr. Proces. Analítico de Datos',
            'rut_profesor'=> 'Pr. Proces. Analítico de Datos'
        ]);
    }
}
