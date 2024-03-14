<?php

namespace Database\Seeders;

use App\Models\unitOfMeasure;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class unitOfMeasureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $measurementUnits = [
            ['code' => 'BJ', 'description' => 'BALDE'],
            ['code' => 'BLL', 'description' => 'BARRILES'],
            ['code' => '4A', 'description' => 'BOBINAS'],
            ['code' => 'BG', 'description' => 'BOLSA'],
            ['code' => 'BO', 'description' => 'BOTELLAS'],
            ['code' => 'BX', 'description' => 'CAJAS'],
            ['code' => 'CT', 'description' => 'CARTONES'],
            ['code' => 'CMK', 'description' => 'CENTIMETRO CUADRADO'],
            ['code' => 'CMQ', 'description' => 'CENTIMETRO CUBICO'],
            ['code' => 'CMT', 'description' => 'CENTIMETRO LINEAL'],
            ['code' => 'CEN', 'description' => 'CIENTO DE UNIDADES'],
            ['code' => 'CY', 'description' => 'CILINDRO'],
            ['code' => 'CJ', 'description' => 'CONOS'],
            ['code' => 'DZN', 'description' => 'DOCENA'],
            ['code' => 'DZP', 'description' => 'DOCENA POR 10**6'],
            ['code' => 'BE', 'description' => 'FARDO'],
            ['code' => 'GLI', 'description' => 'GALON INGLES (4,545956L)'],
            ['code' => 'GRM', 'description' => 'GRAMO'],
            ['code' => 'GRO', 'description' => 'GRUESA'],
            ['code' => 'HLT', 'description' => 'HELECTROLITO'],
            ['code' => 'LEF', 'description' => 'HOJA'],
            ['code' => 'SET', 'description' => 'JUEGO'],
            ['code' => 'KGM', 'description' => 'KILOGRAMO'],
            ['code' => 'KTM', 'description' => 'KILOMETRO'],
            ['code' => 'KWH', 'description' => 'KILOVATIO HORA'],
            ['code' => 'KT', 'description' => 'KIT'],
            ['code' => 'CA', 'description' => 'LATAS'],
            ['code' => 'LBR', 'description' => 'LIBRAS'],
            ['code' => 'LTR', 'description' => 'LITROS'],
            ['code' => 'MWH', 'description' => 'MEGAWHAT HORA'],
            ['code' => 'MTR', 'description' => 'METRO'],
            ['code' => 'MTK', 'description' => 'METRO CUADRADO'],
            ['code' => 'MTQ', 'description' => 'METRO CUBICO'],
            ['code' => 'MGM', 'description' => 'MILIGRAMOS'],
            ['code' => 'MLT', 'description' => 'MILILITRO'],
            ['code' => 'MMT', 'description' => 'MILIMETRO'],
            ['code' => 'MMK', 'description' => 'MILIMETRO CUADRADO'],
            ['code' => 'MMQ', 'description' => 'MILIMETRO CUBICO'],
            ['code' => 'MLL', 'description' => 'MILLARES'],
            ['code' => 'MU', 'description' => 'MILLON DE UNIDADES'],
            ['code' => 'ONZ', 'description' => 'ONZAS'],
            ['code' => 'PF', 'description' => 'PALETAS'],
            ['code' => 'PK', 'description' => 'PAQUETE'],
            ['code' => 'PR', 'description' => 'PAR'],
            ['code' => 'FOT', 'description' => 'PIES'],
            ['code' => 'FTK', 'description' => 'PIES CUADRADOS'],
            ['code' => 'FTQ', 'description' => 'PIES CUBICOS'],
            ['code' => 'C62', 'description' => 'PIEZAS'],
            ['code' => 'PG', 'description' => 'PLACAS'],
            ['code' => 'ST', 'description' => 'PLIEGO'],
            ['code' => 'INH', 'description' => 'PULGADAS'],
            ['code' => 'RM', 'description' => 'RESMA'],
            ['code' => 'DR', 'description' => 'TAMBOR'],
            ['code' => 'STN', 'description' => 'TONELADA CORTA'],
            ['code' => 'LTN', 'description' => 'TONELADA LARGA'],
            ['code' => 'TNE', 'description' => 'TONELADAS'],
            ['code' => 'TU', 'description' => 'TUBOS'],
            ['code' => 'NIU', 'description' => 'UNIDAD (BIENES)'],
            ['code' => 'ZZ', 'description' => 'UNIDAD (SERVICIOS)'],
            ['code' => 'GLL', 'description' => 'US GALON (3,7843 L)'],
            ['code' => 'YRD', 'description' => 'YARDA'],
            ['code' => 'YDK', 'description' => 'YARDA CUADRADA']
        ];

        unitOfMeasure::insert($measurementUnits);
    }
}
