<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\District;
use App\Models\Province;
use Illuminate\Database\Seeder;

class UbigeoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $departments = [
            ["id"=>"010000", "name"=>"AMAZONAS"],
            ["id"=>"020000", "name"=>"ANCASH"],
            ["id"=>"030000", "name"=>"APURIMAC"],
            ["id"=>"040000", "name"=>"AREQUIPA"],
            ["id"=>"050000", "name"=>"AYACUCHO"],
            ["id"=>"060000", "name"=>"CAJAMARCA"],
            ["id"=>"070000", "name"=>"CALLAO"],
            ["id"=>"080000", "name"=>"CUSCO"],
            ["id"=>"090000", "name"=>"HUANCAVELICA"],
            ["id"=>"100000", "name"=>"HUANUCO"],
            ["id"=>"110000", "name"=>"ICA"],
            ["id"=>"120000", "name"=>"JUNIN"],
            ["id"=>"130000", "name"=>"LA LIBERTAD"],
            ["id"=>"140000", "name"=>"LAMBAYEQUE"],
            ["id"=>"150000", "name"=>"LIMA"],
            ["id"=>"160000", "name"=>"LORETO"],
            ["id"=>"170000", "name"=>"MADRE DE DIOS"],
            ["id"=>"180000", "name"=>"MOQUEGUA"],
            ["id"=>"190000", "name"=>"PASCO"],
            ["id"=>"200000", "name"=>"PIURA"],
            ["id"=>"210000", "name"=>"PUNO"],
            ["id"=>"220000", "name"=>"SAN MARTIN"],
            ["id"=>"230000", "name"=>"TACNA"],
            ["id"=>"240000", "name"=>"TUMBES"],
            ["id"=>"250000", "name"=>"UCAYALI"]
        ];

        Department::insert($departments);

        $provinces = [
            ["id"=>"010100", "department_id"=>"010000","name"=>"CHACHAPOYAS"],
            ["id"=>"010200", "department_id"=>"010000","name"=>"BAGUA"],
            ["id"=>"010300", "department_id"=>"010000","name"=>"BONGARA"],
            ["id"=>"010400", "department_id"=>"010000","name"=>"CONDORCANQUI"],
            ["id"=>"010500", "department_id"=>"010000","name"=>"LUYA"],
            ["id"=>"010600", "department_id"=>"010000","name"=>"RODRIGUEZ DE MENDOZA"],
            ["id"=>"010700", "department_id"=>"010000","name"=>"UTCUBAMBA"],
            ["id"=>"020100", "department_id"=>"020000","name"=>"HUARAZ"],
            ["id"=>"020200", "department_id"=>"020000","name"=>"AIJA"],
            ["id"=>"020300", "department_id"=>"020000","name"=>"ANTONIO RAYMONDI"],
            ["id"=>"020400", "department_id"=>"020000","name"=>"ASUNCION"],
            ["id"=>"020500", "department_id"=>"020000","name"=>"BOLOGNESI"],
            ["id"=>"020600", "department_id"=>"020000","name"=>"CARHUAZ"],
            ["id"=>"020700", "department_id"=>"020000","name"=>"CARLOS FERMIN FITZCARRALD"],
            ["id"=>"020800", "department_id"=>"020000","name"=>"CASMA"],
            ["id"=>"020900", "department_id"=>"020000","name"=>"CORONGO"],
            ["id"=>"021000", "department_id"=>"020000","name"=>"HUARI"],
            ["id"=>"021100", "department_id"=>"020000","name"=>"HUARMEY"],
            ["id"=>"021200", "department_id"=>"020000","name"=>"HUAYLAS"],
            ["id"=>"021300", "department_id"=>"020000","name"=>"MARISCAL LUZURIAGA"],
            ["id"=>"021400", "department_id"=>"020000","name"=>"OCROS"],
            ["id"=>"021500", "department_id"=>"020000","name"=>"PALLASCA"],
            ["id"=>"021600", "department_id"=>"020000","name"=>"POMABAMBA"],
            ["id"=>"021700", "department_id"=>"020000","name"=>"RECUAY"],
            ["id"=>"021800", "department_id"=>"020000","name"=>"SANTA"],
            ["id"=>"021900", "department_id"=>"020000","name"=>"SIHUAS"],
            ["id"=>"022000", "department_id"=>"020000","name"=>"YUNGAY"],
            ["id"=>"030100", "department_id"=>"030000","name"=>"ABANCAY"],
            ["id"=>"030200", "department_id"=>"030000","name"=>"ANDAHUAYLAS"],
            ["id"=>"030300", "department_id"=>"030000","name"=>"ANTABAMBA"],
            ["id"=>"030400", "department_id"=>"030000","name"=>"AYMARAES"],
            ["id"=>"030500", "department_id"=>"030000","name"=>"COTABAMBAS"],
            ["id"=>"030600", "department_id"=>"030000","name"=>"CHINCHEROS"],
            ["id"=>"030700", "department_id"=>"030000","name"=>"GRAU"],
            ["id"=>"040100", "department_id"=>"040000","name"=>"AREQUIPA"],
            ["id"=>"040200", "department_id"=>"040000","name"=>"CAMANA"],
            ["id"=>"040300", "department_id"=>"040000","name"=>"CARAVELI"],
            ["id"=>"040400", "department_id"=>"040000","name"=>"CASTILLA"],
            ["id"=>"040500", "department_id"=>"040000","name"=>"CAYLLOMA"],
            ["id"=>"040600", "department_id"=>"040000","name"=>"CONDESUYOS"],
            ["id"=>"040700", "department_id"=>"040000","name"=>"ISLAY"],
            ["id"=>"040800", "department_id"=>"040000","name"=>"LA UNION"],
            ["id"=>"050100", "department_id"=>"050000","name"=>"HUAMANGA"],
            ["id"=>"050200", "department_id"=>"050000","name"=>"CANGALLO"],
            ["id"=>"050300", "department_id"=>"050000","name"=>"HUANCA SANCOS"],
            ["id"=>"050400", "department_id"=>"050000","name"=>"HUANTA"],
            ["id"=>"050500", "department_id"=>"050000","name"=>"LA MAR"],
            ["id"=>"050600", "department_id"=>"050000","name"=>"LUCANAS"],
            ["id"=>"050700", "department_id"=>"050000","name"=>"PARINACOCHAS"],
            ["id"=>"050800", "department_id"=>"050000","name"=>"PAUCAR DEL SARA SARA"],
            ["id"=>"050900", "department_id"=>"050000","name"=>"SUCRE"],
            ["id"=>"051000", "department_id"=>"050000","name"=>"VICTOR FAJARDO"],
            ["id"=>"051100", "department_id"=>"050000","name"=>"VILCAS HUAMAN"],
            ["id"=>"060100", "department_id"=>"060000","name"=>"CAJAMARCA"],
            ["id"=>"060200", "department_id"=>"060000","name"=>"CAJABAMBA"],
            ["id"=>"060300", "department_id"=>"060000","name"=>"CELENDIN"],
            ["id"=>"060400", "department_id"=>"060000","name"=>"CHOTA"],
            ["id"=>"060500", "department_id"=>"060000","name"=>"CONTUMAZA"],
            ["id"=>"060600", "department_id"=>"060000","name"=>"CUTERVO"],
            ["id"=>"060700", "department_id"=>"060000","name"=>"HUALGAYOC"],
            ["id"=>"060800", "department_id"=>"060000","name"=>"JAEN"],
            ["id"=>"060900", "department_id"=>"060000","name"=>"SAN IGNACIO"],
            ["id"=>"061000", "department_id"=>"060000","name"=>"SAN MARCOS"],
            ["id"=>"061100", "department_id"=>"060000","name"=>"SAN MIGUEL"],
            ["id"=>"061200", "department_id"=>"060000","name"=>"SAN PABLO"],
            ["id"=>"061300", "department_id"=>"060000","name"=>"SANTA CRUZ"],
            ["id"=>"070100", "department_id"=>"070000","name"=>"CALLAO"],
            ["id"=>"080100", "department_id"=>"080000","name"=>"CUSCO"],
            ["id"=>"080200", "department_id"=>"080000","name"=>"ACOMAYO"],
            ["id"=>"080300", "department_id"=>"080000","name"=>"ANTA"],
            ["id"=>"080400", "department_id"=>"080000","name"=>"CALCA"],
            ["id"=>"080500", "department_id"=>"080000","name"=>"CANAS"],
            ["id"=>"080600", "department_id"=>"080000","name"=>"CANCHIS"],
            ["id"=>"080700", "department_id"=>"080000","name"=>"CHUMBIVILCAS"],
            ["id"=>"080800", "department_id"=>"080000","name"=>"ESPINAR"],
            ["id"=>"080900", "department_id"=>"080000","name"=>"LA CONVENCION"],
            ["id"=>"081000", "department_id"=>"080000","name"=>"PARURO"],
            ["id"=>"081100", "department_id"=>"080000","name"=>"PAUCARTAMBO"],
            ["id"=>"081200", "department_id"=>"080000","name"=>"QUISPICANCHI"],
            ["id"=>"081300", "department_id"=>"080000","name"=>"URUBAMBA"],
            ["id"=>"090100", "department_id"=>"090000","name"=>"HUANCAVELICA"],
            ["id"=>"090200", "department_id"=>"090000","name"=>"ACOBAMBA"],
            ["id"=>"090300", "department_id"=>"090000","name"=>"ANGARAES"],
            ["id"=>"090400", "department_id"=>"090000","name"=>"CASTROVIRREYNA"],
            ["id"=>"090500", "department_id"=>"090000","name"=>"CHURCAMPA"],
            ["id"=>"090600", "department_id"=>"090000","name"=>"HUAYTARA"],
            ["id"=>"090700", "department_id"=>"090000","name"=>"TAYACAJA"],
            ["id"=>"100100", "department_id"=>"100000","name"=>"HUANUCO"],
            ["id"=>"100200", "department_id"=>"100000","name"=>"AMBO"],
            ["id"=>"100300", "department_id"=>"100000","name"=>"DOS DE MAYO"],
            ["id"=>"100400", "department_id"=>"100000","name"=>"HUACAYBAMBA"],
            ["id"=>"100500", "department_id"=>"100000","name"=>"HUAMALIES"],
            ["id"=>"100600", "department_id"=>"100000","name"=>"LEONCIO PRADO"],
            ["id"=>"100700", "department_id"=>"100000","name"=>"MARAÑON"],
            ["id"=>"100800", "department_id"=>"100000","name"=>"PACHITEA"],
            ["id"=>"100900", "department_id"=>"100000","name"=>"PUERTO INCA"],
            ["id"=>"101000", "department_id"=>"100000","name"=>"LAURICOCHA"],
            ["id"=>"101100", "department_id"=>"100000","name"=>"YAROWILCA"],
            ["id"=>"110100", "department_id"=>"110000","name"=>"ICA"],
            ["id"=>"110200", "department_id"=>"110000","name"=>"CHINCHA"],
            ["id"=>"110300", "department_id"=>"110000","name"=>"NAZCA"],
            ["id"=>"110400", "department_id"=>"110000","name"=>"PALPA"],
            ["id"=>"110500", "department_id"=>"110000","name"=>"PISCO"],
            ["id"=>"120100", "department_id"=>"120000","name"=>"HUANCAYO"],
            ["id"=>"120200", "department_id"=>"120000","name"=>"CONCEPCION"],
            ["id"=>"120300", "department_id"=>"120000","name"=>"CHANCHAMAYO"],
            ["id"=>"120400", "department_id"=>"120000","name"=>"JAUJA"],
            ["id"=>"120500", "department_id"=>"120000","name"=>"JUNIN"],
            ["id"=>"120600", "department_id"=>"120000","name"=>"SATIPO"],
            ["id"=>"120700", "department_id"=>"120000","name"=>"TARMA"],
            ["id"=>"120800", "department_id"=>"120000","name"=>"YAULI"],
            ["id"=>"120900", "department_id"=>"120000","name"=>"CHUPACA"],
            ["id"=>"130100", "department_id"=>"130000","name"=>"TRUJILLO"],
            ["id"=>"130200", "department_id"=>"130000","name"=>"ASCOPE"],
            ["id"=>"130300", "department_id"=>"130000","name"=>"BOLIVAR"],
            ["id"=>"130400", "department_id"=>"130000","name"=>"CHEPEN"],
            ["id"=>"130500", "department_id"=>"130000","name"=>"JULCAN"],
            ["id"=>"130600", "department_id"=>"130000","name"=>"OTUZCO"],
            ["id"=>"130700", "department_id"=>"130000","name"=>"PACASMAYO"],
            ["id"=>"130800", "department_id"=>"130000","name"=>"PATAZ"],
            ["id"=>"130900", "department_id"=>"130000","name"=>"SANCHEZ CARRION"],
            ["id"=>"131000", "department_id"=>"130000","name"=>"SANTIAGO DE CHUCO"],
            ["id"=>"131100", "department_id"=>"130000","name"=>"GRAN CHIMU"],
            ["id"=>"131200", "department_id"=>"130000","name"=>"VIRU"],
            ["id"=>"140100", "department_id"=>"140000","name"=>"CHICLAYO"],
            ["id"=>"140200", "department_id"=>"140000","name"=>"FERREÑAFE"],
            ["id"=>"140300", "department_id"=>"140000","name"=>"LAMBAYEQUE"],
            ["id"=>"150100", "department_id"=>"150000","name"=>"LIMA"],
            ["id"=>"150200", "department_id"=>"150000","name"=>"BARRANCA"],
            ["id"=>"150300", "department_id"=>"150000","name"=>"CAJATAMBO"],
            ["id"=>"150400", "department_id"=>"150000","name"=>"CANTA"],
            ["id"=>"150500", "department_id"=>"150000","name"=>"CAÑETE"],
            ["id"=>"150600", "department_id"=>"150000","name"=>"HUARAL"],
            ["id"=>"150700", "department_id"=>"150000","name"=>"HUAROCHIRI"],
            ["id"=>"150800", "department_id"=>"150000","name"=>"HUAURA"],
            ["id"=>"150900", "department_id"=>"150000","name"=>"OYON"],
            ["id"=>"151000", "department_id"=>"150000","name"=>"YAUYOS"],
            ["id"=>"160100", "department_id"=>"160000","name"=>"MAYNAS"],
            ["id"=>"160200", "department_id"=>"160000","name"=>"ALTO AMAZONAS"],
            ["id"=>"160300", "department_id"=>"160000","name"=>"LORETO"],
            ["id"=>"160400", "department_id"=>"160000","name"=>"MARISCAL RAMON CASTILLA"],
            ["id"=>"160500", "department_id"=>"160000","name"=>"REQUENA"],
            ["id"=>"160600", "department_id"=>"160000","name"=>"UCAYALI"],
            ["id"=>"160700", "department_id"=>"160000","name"=>"DATEM DEL MARAÑON"],
            ["id"=>"170100", "department_id"=>"170000","name"=>"TAMBOPATA"],
            ["id"=>"170200", "department_id"=>"170000","name"=>"MANU"],
            ["id"=>"170300", "department_id"=>"170000","name"=>"TAHUAMANU"],
            ["id"=>"180100", "department_id"=>"180000","name"=>"MARISCAL NIETO"],
            ["id"=>"180200", "department_id"=>"180000","name"=>"GENERAL SANCHEZ CERRO"],
            ["id"=>"180300", "department_id"=>"180000","name"=>"ILO"],
            ["id"=>"190100", "department_id"=>"190000","name"=>"PASCO"],
            ["id"=>"190200", "department_id"=>"190000","name"=>"DANIEL ALCIDES CARRION"],
            ["id"=>"190300", "department_id"=>"190000","name"=>"OXAPAMPA"],
            ["id"=>"200100", "department_id"=>"200000","name"=>"PIURA"],
            ["id"=>"200200", "department_id"=>"200000","name"=>"AYABACA"],
            ["id"=>"200300", "department_id"=>"200000","name"=>"HUANCABAMBA"],
            ["id"=>"200400", "department_id"=>"200000","name"=>"MORROPON"],
            ["id"=>"200500", "department_id"=>"200000","name"=>"PAITA"],
            ["id"=>"200600", "department_id"=>"200000","name"=>"SULLANA"],
            ["id"=>"200700", "department_id"=>"200000","name"=>"TALARA"],
            ["id"=>"200800", "department_id"=>"200000","name"=>"SECHURA"],
            ["id"=>"210100", "department_id"=>"210000","name"=>"PUNO"],
            ["id"=>"210200", "department_id"=>"210000","name"=>"AZANGARO"],
            ["id"=>"210300", "department_id"=>"210000","name"=>"CARABAYA"],
            ["id"=>"210400", "department_id"=>"210000","name"=>"CHUCUITO"],
            ["id"=>"210500", "department_id"=>"210000","name"=>"EL COLLAO"],
            ["id"=>"210600", "department_id"=>"210000","name"=>"HUANCANE"],
            ["id"=>"210700", "department_id"=>"210000","name"=>"LAMPA"],
            ["id"=>"210800", "department_id"=>"210000","name"=>"MELGAR"],
            ["id"=>"210900", "department_id"=>"210000","name"=>"MOHO"],
            ["id"=>"211000", "department_id"=>"210000","name"=>"SAN ANTONIO DE PUTINA"],
            ["id"=>"211100", "department_id"=>"210000","name"=>"SAN ROMAN"],
            ["id"=>"211200", "department_id"=>"210000","name"=>"SANDIA"],
            ["id"=>"211300", "department_id"=>"210000","name"=>"YUNGUYO"],
            ["id"=>"220100", "department_id"=>"220000","name"=>"MOYOBAMBA"],
            ["id"=>"220200", "department_id"=>"220000","name"=>"BELLAVISTA"],
            ["id"=>"220300", "department_id"=>"220000","name"=>"EL DORADO"],
            ["id"=>"220400", "department_id"=>"220000","name"=>"HUALLAGA"],
            ["id"=>"220500", "department_id"=>"220000","name"=>"LAMAS"],
            ["id"=>"220600", "department_id"=>"220000","name"=>"MARISCAL CACERES"],
            ["id"=>"220700", "department_id"=>"220000","name"=>"PICOTA"],
            ["id"=>"220800", "department_id"=>"220000","name"=>"RIOJA"],
            ["id"=>"220900", "department_id"=>"220000","name"=>"SAN MARTIN"],
            ["id"=>"221000", "department_id"=>"220000","name"=>"TOCACHE"],
            ["id"=>"230100", "department_id"=>"230000","name"=>"TACNA"],
            ["id"=>"230200", "department_id"=>"230000","name"=>"CANDARAVE"],
            ["id"=>"230300", "department_id"=>"230000","name"=>"JORGE BASADRE"],
            ["id"=>"230400", "department_id"=>"230000","name"=>"TARATA"],
            ["id"=>"240100", "department_id"=>"240000","name"=>"TUMBES"],
            ["id"=>"240200", "department_id"=>"240000","name"=>"CONTRALMIRANTE VILLAR"],
            ["id"=>"240300", "department_id"=>"240000","name"=>"ZARUMILLA"],
            ["id"=>"250100", "department_id"=>"250000","name"=>"CORONEL PORTILLO"],
            ["id"=>"250200", "department_id"=>"250000","name"=>"ATALAYA"],
            ["id"=>"250300", "department_id"=>"250000","name"=>"PADRE ABAD"],
            ["id"=>"250400", "department_id"=>"250000","name"=>"PURUS"]
        ];

        Province::insert($provinces);

        $districts = [
            [
                "id"=> "010101",
                "province_id"=> "010100",
                "name"=> "CHACHAPOYAS"
            ],
            [
                "id"=> "010102",
                "province_id"=> "010100",
                "name"=> "ASUNCION"
            ],
            [
                "id"=> "010103",
                "province_id"=> "010100",
                "name"=> "BALSAS"
            ],
            [
                "id"=> "010104",
                "province_id"=> "010100",
                "name"=> "CHETO"
            ],
            [
                "id"=> "010105",
                "province_id"=> "010100",
                "name"=> "CHILIQUIN"
            ],
            [
                "id"=> "010106",
                "province_id"=> "010100",
                "name"=> "CHUQUIBAMBA"
            ],
            [
                "id"=> "010107",
                "province_id"=> "010100",
                "name"=> "GRANADA"
            ],
            [
                "id"=> "010108",
                "province_id"=> "010100",
                "name"=> "HUANCAS"
            ],
            [
                "id"=> "010109",
                "province_id"=> "010100",
                "name"=> "LA JALCA"
            ],
            [
                "id"=> "010110",
                "province_id"=> "010100",
                "name"=> "LEIMEBAMBA"
            ],
            [
                "id"=> "010111",
                "province_id"=> "010100",
                "name"=> "LEVANTO"
            ],
            [
                "id"=> "010112",
                "province_id"=> "010100",
                "name"=> "MAGDALENA"
            ],
            [
                "id"=> "010113",
                "province_id"=> "010100",
                "name"=> "MARISCAL CASTILLA"
            ],
            [
                "id"=> "010114",
                "province_id"=> "010100",
                "name"=> "MOLINOPAMPA"
            ],
            [
                "id"=> "010115",
                "province_id"=> "010100",
                "name"=> "MONTEVIDEO"
            ],
            [
                "id"=> "010116",
                "province_id"=> "010100",
                "name"=> "OLLEROS"
            ],
            [
                "id"=> "010117",
                "province_id"=> "010100",
                "name"=> "QUINJALCA"
            ],
            [
                "id"=> "010118",
                "province_id"=> "010100",
                "name"=> "SAN FRANCISCO DE DAGUAS"
            ],
            [
                "id"=> "010119",
                "province_id"=> "010100",
                "name"=> "SAN ISIDRO DE MAINO"
            ],
            [
                "id"=> "010120",
                "province_id"=> "010100",
                "name"=> "SOLOCO"
            ],
            [
                "id"=> "010121",
                "province_id"=> "010100",
                "name"=> "SONCHE"
            ],
            [
                "id"=> "010201",
                "province_id"=> "010200",
                "name"=> "BAGUA"
            ],
            [
                "id"=> "010202",
                "province_id"=> "010200",
                "name"=> "ARAMANGO"
            ],
            [
                "id"=> "010203",
                "province_id"=> "010200",
                "name"=> "COPALLIN"
            ],
            [
                "id"=> "010204",
                "province_id"=> "010200",
                "name"=> "EL PARCO"
            ],
            [
                "id"=> "010205",
                "province_id"=> "010200",
                "name"=> "IMAZA"
            ],
            [
                "id"=> "010206",
                "province_id"=> "010200",
                "name"=> "LA PECA"
            ],
            [
                "id"=> "010301",
                "province_id"=> "010300",
                "name"=> "JUMBILLA"
            ],
            [
                "id"=> "010302",
                "province_id"=> "010300",
                "name"=> "CHISQUILLA"
            ],
            [
                "id"=> "010303",
                "province_id"=> "010300",
                "name"=> "CHURUJA"
            ],
            [
                "id"=> "010304",
                "province_id"=> "010300",
                "name"=> "COROSHA"
            ],
            [
                "id"=> "010305",
                "province_id"=> "010300",
                "name"=> "CUISPES"
            ],
            [
                "id"=> "010306",
                "province_id"=> "010300",
                "name"=> "FLORIDA"
            ],
            [
                "id"=> "010307",
                "province_id"=> "010300",
                "name"=> "JAZAN"
            ],
            [
                "id"=> "010308",
                "province_id"=> "010300",
                "name"=> "RECTA"
            ],
            [
                "id"=> "010309",
                "province_id"=> "010300",
                "name"=> "SAN CARLOS"
            ],
            [
                "id"=> "010310",
                "province_id"=> "010300",
                "name"=> "SHIPASBAMBA"
            ],
            [
                "id"=> "010311",
                "province_id"=> "010300",
                "name"=> "VALERA"
            ],
            [
                "id"=> "010312",
                "province_id"=> "010300",
                "name"=> "YAMBRASBAMBA"
            ],
            [
                "id"=> "010401",
                "province_id"=> "010400",
                "name"=> "NIEVA"
            ],
            [
                "id"=> "010402",
                "province_id"=> "010400",
                "name"=> "EL CENEPA"
            ],
            [
                "id"=> "010403",
                "province_id"=> "010400",
                "name"=> "RIO SANTIAGO"
            ],
            [
                "id"=> "010501",
                "province_id"=> "010500",
                "name"=> "LAMUD"
            ],
            [
                "id"=> "010502",
                "province_id"=> "010500",
                "name"=> "CAMPORREDONDO"
            ],
            [
                "id"=> "010503",
                "province_id"=> "010500",
                "name"=> "COCABAMBA"
            ],
            [
                "id"=> "010504",
                "province_id"=> "010500",
                "name"=> "COLCAMAR"
            ],
            [
                "id"=> "010505",
                "province_id"=> "010500",
                "name"=> "CONILA"
            ],
            [
                "id"=> "010506",
                "province_id"=> "010500",
                "name"=> "INGUILPATA"
            ],
            [
                "id"=> "010507",
                "province_id"=> "010500",
                "name"=> "LONGUITA"
            ],
            [
                "id"=> "010508",
                "province_id"=> "010500",
                "name"=> "LONYA CHICO"
            ],
            [
                "id"=> "010509",
                "province_id"=> "010500",
                "name"=> "LUYA"
            ],
            [
                "id"=> "010510",
                "province_id"=> "010500",
                "name"=> "LUYA VIEJO"
            ],
            [
                "id"=> "010511",
                "province_id"=> "010500",
                "name"=> "MARIA"
            ],
            [
                "id"=> "010512",
                "province_id"=> "010500",
                "name"=> "OCALLI"
            ],
            [
                "id"=> "010513",
                "province_id"=> "010500",
                "name"=> "OCUMAL"
            ],
            [
                "id"=> "010514",
                "province_id"=> "010500",
                "name"=> "PISUQUIA"
            ],
            [
                "id"=> "010515",
                "province_id"=> "010500",
                "name"=> "PROVIDENCIA"
            ],
            [
                "id"=> "010516",
                "province_id"=> "010500",
                "name"=> "SAN CRISTOBAL"
            ],
            [
                "id"=> "010517",
                "province_id"=> "010500",
                "name"=> "SAN FRANCISCO DEL YESO"
            ],
            [
                "id"=> "010518",
                "province_id"=> "010500",
                "name"=> "SAN JERONIMO"
            ],
            [
                "id"=> "010519",
                "province_id"=> "010500",
                "name"=> "SAN JUAN DE LOPECANCHA"
            ],
            [
                "id"=> "010520",
                "province_id"=> "010500",
                "name"=> "SANTA CATALINA"
            ],
            [
                "id"=> "010521",
                "province_id"=> "010500",
                "name"=> "SANTO TOMAS"
            ],
            [
                "id"=> "010522",
                "province_id"=> "010500",
                "name"=> "TINGO"
            ],
            [
                "id"=> "010523",
                "province_id"=> "010500",
                "name"=> "TRITA"
            ],
            [
                "id"=> "010601",
                "province_id"=> "010600",
                "name"=> "SAN NICOLAS"
            ],
            [
                "id"=> "010602",
                "province_id"=> "010600",
                "name"=> "CHIRIMOTO"
            ],
            [
                "id"=> "010603",
                "province_id"=> "010600",
                "name"=> "COCHAMAL"
            ],
            [
                "id"=> "010604",
                "province_id"=> "010600",
                "name"=> "HUAMBO"
            ],
            [
                "id"=> "010605",
                "province_id"=> "010600",
                "name"=> "LIMABAMBA"
            ],
            [
                "id"=> "010606",
                "province_id"=> "010600",
                "name"=> "LONGAR"
            ],
            [
                "id"=> "010607",
                "province_id"=> "010600",
                "name"=> "MARISCAL BENAVIDES"
            ],
            [
                "id"=> "010608",
                "province_id"=> "010600",
                "name"=> "MILPUC"
            ],
            [
                "id"=> "010609",
                "province_id"=> "010600",
                "name"=> "OMIA"
            ],
            [
                "id"=> "010610",
                "province_id"=> "010600",
                "name"=> "SANTA ROSA"
            ],
            [
                "id"=> "010611",
                "province_id"=> "010600",
                "name"=> "TOTORA"
            ],
            [
                "id"=> "010612",
                "province_id"=> "010600",
                "name"=> "VISTA ALEGRE"
            ],
            [
                "id"=> "010701",
                "province_id"=> "010700",
                "name"=> "BAGUA GRANDE"
            ],
            [
                "id"=> "010702",
                "province_id"=> "010700",
                "name"=> "CAJARURO"
            ],
            [
                "id"=> "010703",
                "province_id"=> "010700",
                "name"=> "CUMBA"
            ],
            [
                "id"=> "010704",
                "province_id"=> "010700",
                "name"=> "EL MILAGRO"
            ],
            [
                "id"=> "010705",
                "province_id"=> "010700",
                "name"=> "JAMALCA"
            ],
            [
                "id"=> "010706",
                "province_id"=> "010700",
                "name"=> "LONYA GRANDE"
            ],
            [
                "id"=> "010707",
                "province_id"=> "010700",
                "name"=> "YAMON"
            ],
            [
                "id"=> "020101",
                "province_id"=> "020100",
                "name"=> "HUARAZ"
            ],
            [
                "id"=> "020102",
                "province_id"=> "020100",
                "name"=> "COCHABAMBA"
            ],
            [
                "id"=> "020103",
                "province_id"=> "020100",
                "name"=> "COLCABAMBA"
            ],
            [
                "id"=> "020104",
                "province_id"=> "020100",
                "name"=> "HUANCHAY"
            ],
            [
                "id"=> "020105",
                "province_id"=> "020100",
                "name"=> "INDEPENDENCIA"
            ],
            [
                "id"=> "020106",
                "province_id"=> "020100",
                "name"=> "JANGAS"
            ],
            [
                "id"=> "020107",
                "province_id"=> "020100",
                "name"=> "LA LIBERTAD"
            ],
            [
                "id"=> "020108",
                "province_id"=> "020100",
                "name"=> "OLLEROS"
            ],
            [
                "id"=> "020109",
                "province_id"=> "020100",
                "name"=> "PAMPAS"
            ],
            [
                "id"=> "020110",
                "province_id"=> "020100",
                "name"=> "PARIACOTO"
            ],
            [
                "id"=> "020111",
                "province_id"=> "020100",
                "name"=> "PIRA"
            ],
            [
                "id"=> "020112",
                "province_id"=> "020100",
                "name"=> "TARICA"
            ],
            [
                "id"=> "020201",
                "province_id"=> "020200",
                "name"=> "AIJA"
            ],
            [
                "id"=> "020202",
                "province_id"=> "020200",
                "name"=> "CORIS"
            ],
            [
                "id"=> "020203",
                "province_id"=> "020200",
                "name"=> "HUACLLAN"
            ],
            [
                "id"=> "020204",
                "province_id"=> "020200",
                "name"=> "LA MERCED"
            ],
            [
                "id"=> "020205",
                "province_id"=> "020200",
                "name"=> "SUCCHA"
            ],
            [
                "id"=> "020301",
                "province_id"=> "020300",
                "name"=> "LLAMELLIN"
            ],
            [
                "id"=> "020302",
                "province_id"=> "020300",
                "name"=> "ACZO"
            ],
            [
                "id"=> "020303",
                "province_id"=> "020300",
                "name"=> "CHACCHO"
            ],
            [
                "id"=> "020304",
                "province_id"=> "020300",
                "name"=> "CHINGAS"
            ],
            [
                "id"=> "020305",
                "province_id"=> "020300",
                "name"=> "MIRGAS"
            ],
            [
                "id"=> "020306",
                "province_id"=> "020300",
                "name"=> "SAN JUAN DE RONTOY"
            ],
            [
                "id"=> "020401",
                "province_id"=> "020400",
                "name"=> "CHACAS"
            ],
            [
                "id"=> "020402",
                "province_id"=> "020400",
                "name"=> "ACOCHACA"
            ],
            [
                "id"=> "020501",
                "province_id"=> "020500",
                "name"=> "CHIQUIAN"
            ],
            [
                "id"=> "020502",
                "province_id"=> "020500",
                "name"=> "ABELARDO PARDO LEZAMETA"
            ],
            [
                "id"=> "020503",
                "province_id"=> "020500",
                "name"=> "ANTONIO RAYMONDI"
            ],
            [
                "id"=> "020504",
                "province_id"=> "020500",
                "name"=> "AQUIA"
            ],
            [
                "id"=> "020505",
                "province_id"=> "020500",
                "name"=> "CAJACAY"
            ],
            [
                "id"=> "020506",
                "province_id"=> "020500",
                "name"=> "CANIS"
            ],
            [
                "id"=> "020507",
                "province_id"=> "020500",
                "name"=> "COLQUIOC"
            ],
            [
                "id"=> "020508",
                "province_id"=> "020500",
                "name"=> "HUALLANCA"
            ],
            [
                "id"=> "020509",
                "province_id"=> "020500",
                "name"=> "HUASTA"
            ],
            [
                "id"=> "020510",
                "province_id"=> "020500",
                "name"=> "HUAYLLACAYAN"
            ],
            [
                "id"=> "020511",
                "province_id"=> "020500",
                "name"=> "LA PRIMAVERA"
            ],
            [
                "id"=> "020512",
                "province_id"=> "020500",
                "name"=> "MANGAS"
            ],
            [
                "id"=> "020513",
                "province_id"=> "020500",
                "name"=> "PACLLON"
            ],
            [
                "id"=> "020514",
                "province_id"=> "020500",
                "name"=> "SAN MIGUEL DE CORPANQUI"
            ],
            [
                "id"=> "020515",
                "province_id"=> "020500",
                "name"=> "TICLLOS"
            ],
            [
                "id"=> "020601",
                "province_id"=> "020600",
                "name"=> "CARHUAZ"
            ],
            [
                "id"=> "020602",
                "province_id"=> "020600",
                "name"=> "ACOPAMPA"
            ],
            [
                "id"=> "020603",
                "province_id"=> "020600",
                "name"=> "AMASHCA"
            ],
            [
                "id"=> "020604",
                "province_id"=> "020600",
                "name"=> "ANTA"
            ],
            [
                "id"=> "020605",
                "province_id"=> "020600",
                "name"=> "ATAQUERO"
            ],
            [
                "id"=> "020606",
                "province_id"=> "020600",
                "name"=> "MARCARA"
            ],
            [
                "id"=> "020607",
                "province_id"=> "020600",
                "name"=> "PARIAHUANCA"
            ],
            [
                "id"=> "020608",
                "province_id"=> "020600",
                "name"=> "SAN MIGUEL DE ACO"
            ],
            [
                "id"=> "020609",
                "province_id"=> "020600",
                "name"=> "SHILLA"
            ],
            [
                "id"=> "020610",
                "province_id"=> "020600",
                "name"=> "TINCO"
            ],
            [
                "id"=> "020611",
                "province_id"=> "020600",
                "name"=> "YUNGAR"
            ],
            [
                "id"=> "020701",
                "province_id"=> "020700",
                "name"=> "SAN LUIS"
            ],
            [
                "id"=> "020702",
                "province_id"=> "020700",
                "name"=> "SAN NICOLAS"
            ],
            [
                "id"=> "020703",
                "province_id"=> "020700",
                "name"=> "YAUYA"
            ],
            [
                "id"=> "020801",
                "province_id"=> "020800",
                "name"=> "CASMA"
            ],
            [
                "id"=> "020802",
                "province_id"=> "020800",
                "name"=> "BUENA VISTA ALTA"
            ],
            [
                "id"=> "020803",
                "province_id"=> "020800",
                "name"=> "COMANDANTE NOEL"
            ],
            [
                "id"=> "020804",
                "province_id"=> "020800",
                "name"=> "YAUTAN"
            ],
            [
                "id"=> "020901",
                "province_id"=> "020900",
                "name"=> "CORONGO"
            ],
            [
                "id"=> "020902",
                "province_id"=> "020900",
                "name"=> "ACO"
            ],
            [
                "id"=> "020903",
                "province_id"=> "020900",
                "name"=> "BAMBAS"
            ],
            [
                "id"=> "020904",
                "province_id"=> "020900",
                "name"=> "CUSCA"
            ],
            [
                "id"=> "020905",
                "province_id"=> "020900",
                "name"=> "LA PAMPA"
            ],
            [
                "id"=> "020906",
                "province_id"=> "020900",
                "name"=> "YANAC"
            ],
            [
                "id"=> "020907",
                "province_id"=> "020900",
                "name"=> "YUPAN"
            ],
            [
                "id"=> "021001",
                "province_id"=> "021000",
                "name"=> "HUARI"
            ],
            [
                "id"=> "021002",
                "province_id"=> "021000",
                "name"=> "ANRA"
            ],
            [
                "id"=> "021003",
                "province_id"=> "021000",
                "name"=> "CAJAY"
            ],
            [
                "id"=> "021004",
                "province_id"=> "021000",
                "name"=> "CHAVIN DE HUANTAR"
            ],
            [
                "id"=> "021005",
                "province_id"=> "021000",
                "name"=> "HUACACHI"
            ],
            [
                "id"=> "021006",
                "province_id"=> "021000",
                "name"=> "HUACCHIS"
            ],
            [
                "id"=> "021007",
                "province_id"=> "021000",
                "name"=> "HUACHIS"
            ],
            [
                "id"=> "021008",
                "province_id"=> "021000",
                "name"=> "HUANTAR"
            ],
            [
                "id"=> "021009",
                "province_id"=> "021000",
                "name"=> "MASIN"
            ],
            [
                "id"=> "021010",
                "province_id"=> "021000",
                "name"=> "PAUCAS"
            ],
            [
                "id"=> "021011",
                "province_id"=> "021000",
                "name"=> "PONTO"
            ],
            [
                "id"=> "021012",
                "province_id"=> "021000",
                "name"=> "RAHUAPAMPA"
            ],
            [
                "id"=> "021013",
                "province_id"=> "021000",
                "name"=> "RAPAYAN"
            ],
            [
                "id"=> "021014",
                "province_id"=> "021000",
                "name"=> "SAN MARCOS"
            ],
            [
                "id"=> "021015",
                "province_id"=> "021000",
                "name"=> "SAN PEDRO DE CHANA"
            ],
            [
                "id"=> "021016",
                "province_id"=> "021000",
                "name"=> "UCO"
            ],
            [
                "id"=> "021101",
                "province_id"=> "021100",
                "name"=> "HUARMEY"
            ],
            [
                "id"=> "021102",
                "province_id"=> "021100",
                "name"=> "COCHAPETI"
            ],
            [
                "id"=> "021103",
                "province_id"=> "021100",
                "name"=> "CULEBRAS"
            ],
            [
                "id"=> "021104",
                "province_id"=> "021100",
                "name"=> "HUAYAN"
            ],
            [
                "id"=> "021105",
                "province_id"=> "021100",
                "name"=> "MALVAS"
            ],
            [
                "id"=> "021201",
                "province_id"=> "021200",
                "name"=> "CARAZ"
            ],
            [
                "id"=> "021202",
                "province_id"=> "021200",
                "name"=> "HUALLANCA"
            ],
            [
                "id"=> "021203",
                "province_id"=> "021200",
                "name"=> "HUATA"
            ],
            [
                "id"=> "021204",
                "province_id"=> "021200",
                "name"=> "HUAYLAS"
            ],
            [
                "id"=> "021205",
                "province_id"=> "021200",
                "name"=> "MATO"
            ],
            [
                "id"=> "021206",
                "province_id"=> "021200",
                "name"=> "PAMPAROMAS"
            ],
            [
                "id"=> "021207",
                "province_id"=> "021200",
                "name"=> "PUEBLO LIBRE"
            ],
            [
                "id"=> "021208",
                "province_id"=> "021200",
                "name"=> "SANTA CRUZ"
            ],
            [
                "id"=> "021209",
                "province_id"=> "021200",
                "name"=> "SANTO TORIBIO"
            ],
            [
                "id"=> "021210",
                "province_id"=> "021200",
                "name"=> "YURACMARCA"
            ],
            [
                "id"=> "021301",
                "province_id"=> "021300",
                "name"=> "PISCOBAMBA"
            ],
            [
                "id"=> "021302",
                "province_id"=> "021300",
                "name"=> "CASCA"
            ],
            [
                "id"=> "021303",
                "province_id"=> "021300",
                "name"=> "ELEAZAR GUZMAN BARRON"
            ],
            [
                "id"=> "021304",
                "province_id"=> "021300",
                "name"=> "FIDEL OLIVAS ESCUDERO"
            ],
            [
                "id"=> "021305",
                "province_id"=> "021300",
                "name"=> "LLAMA"
            ],
            [
                "id"=> "021306",
                "province_id"=> "021300",
                "name"=> "LLUMPA"
            ],
            [
                "id"=> "021307",
                "province_id"=> "021300",
                "name"=> "LUCMA"
            ],
            [
                "id"=> "021308",
                "province_id"=> "021300",
                "name"=> "MUSGA"
            ],
            [
                "id"=> "021401",
                "province_id"=> "021400",
                "name"=> "OCROS"
            ],
            [
                "id"=> "021402",
                "province_id"=> "021400",
                "name"=> "ACAS"
            ],
            [
                "id"=> "021403",
                "province_id"=> "021400",
                "name"=> "CAJAMARQUILLA"
            ],
            [
                "id"=> "021404",
                "province_id"=> "021400",
                "name"=> "CARHUAPAMPA"
            ],
            [
                "id"=> "021405",
                "province_id"=> "021400",
                "name"=> "COCHAS"
            ],
            [
                "id"=> "021406",
                "province_id"=> "021400",
                "name"=> "CONGAS"
            ],
            [
                "id"=> "021407",
                "province_id"=> "021400",
                "name"=> "LLIPA"
            ],
            [
                "id"=> "021408",
                "province_id"=> "021400",
                "name"=> "SAN CRISTOBAL DE RAJAN"
            ],
            [
                "id"=> "021409",
                "province_id"=> "021400",
                "name"=> "SAN PEDRO"
            ],
            [
                "id"=> "021410",
                "province_id"=> "021400",
                "name"=> "SANTIAGO DE CHILCAS"
            ],
            [
                "id"=> "021501",
                "province_id"=> "021500",
                "name"=> "CABANA"
            ],
            [
                "id"=> "021502",
                "province_id"=> "021500",
                "name"=> "BOLOGNESI"
            ],
            [
                "id"=> "021503",
                "province_id"=> "021500",
                "name"=> "CONCHUCOS"
            ],
            [
                "id"=> "021504",
                "province_id"=> "021500",
                "name"=> "HUACASCHUQUE"
            ],
            [
                "id"=> "021505",
                "province_id"=> "021500",
                "name"=> "HUANDOVAL"
            ],
            [
                "id"=> "021506",
                "province_id"=> "021500",
                "name"=> "LACABAMBA"
            ],
            [
                "id"=> "021507",
                "province_id"=> "021500",
                "name"=> "LLAPO"
            ],
            [
                "id"=> "021508",
                "province_id"=> "021500",
                "name"=> "PALLASCA"
            ],
            [
                "id"=> "021509",
                "province_id"=> "021500",
                "name"=> "PAMPAS"
            ],
            [
                "id"=> "021510",
                "province_id"=> "021500",
                "name"=> "SANTA ROSA"
            ],
            [
                "id"=> "021511",
                "province_id"=> "021500",
                "name"=> "TAUCA"
            ],
            [
                "id"=> "021601",
                "province_id"=> "021600",
                "name"=> "POMABAMBA"
            ],
            [
                "id"=> "021602",
                "province_id"=> "021600",
                "name"=> "HUAYLLAN"
            ],
            [
                "id"=> "021603",
                "province_id"=> "021600",
                "name"=> "PAROBAMBA"
            ],
            [
                "id"=> "021604",
                "province_id"=> "021600",
                "name"=> "QUINUABAMBA"
            ],
            [
                "id"=> "021701",
                "province_id"=> "021700",
                "name"=> "RECUAY"
            ],
            [
                "id"=> "021702",
                "province_id"=> "021700",
                "name"=> "CATAC"
            ],
            [
                "id"=> "021703",
                "province_id"=> "021700",
                "name"=> "COTAPARACO"
            ],
            [
                "id"=> "021704",
                "province_id"=> "021700",
                "name"=> "HUAYLLAPAMPA"
            ],
            [
                "id"=> "021705",
                "province_id"=> "021700",
                "name"=> "LLACLLIN"
            ],
            [
                "id"=> "021706",
                "province_id"=> "021700",
                "name"=> "MARCA"
            ],
            [
                "id"=> "021707",
                "province_id"=> "021700",
                "name"=> "PAMPAS CHICO"
            ],
            [
                "id"=> "021708",
                "province_id"=> "021700",
                "name"=> "PARARIN"
            ],
            [
                "id"=> "021709",
                "province_id"=> "021700",
                "name"=> "TAPACOCHA"
            ],
            [
                "id"=> "021710",
                "province_id"=> "021700",
                "name"=> "TICAPAMPA"
            ],
            [
                "id"=> "021801",
                "province_id"=> "021800",
                "name"=> "CHIMBOTE"
            ],
            [
                "id"=> "021802",
                "province_id"=> "021800",
                "name"=> "CACERES DEL PERU"
            ],
            [
                "id"=> "021803",
                "province_id"=> "021800",
                "name"=> "COISHCO"
            ],
            [
                "id"=> "021804",
                "province_id"=> "021800",
                "name"=> "MACATE"
            ],
            [
                "id"=> "021805",
                "province_id"=> "021800",
                "name"=> "MORO"
            ],
            [
                "id"=> "021806",
                "province_id"=> "021800",
                "name"=> "NEPEÑA"
            ],
            [
                "id"=> "021807",
                "province_id"=> "021800",
                "name"=> "SAMANCO"
            ],
            [
                "id"=> "021808",
                "province_id"=> "021800",
                "name"=> "SANTA"
            ],
            [
                "id"=> "021809",
                "province_id"=> "021800",
                "name"=> "NUEVO CHIMBOTE"
            ],
            [
                "id"=> "021901",
                "province_id"=> "021900",
                "name"=> "SIHUAS"
            ],
            [
                "id"=> "021902",
                "province_id"=> "021900",
                "name"=> "ACOBAMBA"
            ],
            [
                "id"=> "021903",
                "province_id"=> "021900",
                "name"=> "ALFONSO UGARTE"
            ],
            [
                "id"=> "021904",
                "province_id"=> "021900",
                "name"=> "CASHAPAMPA"
            ],
            [
                "id"=> "021905",
                "province_id"=> "021900",
                "name"=> "CHINGALPO"
            ],
            [
                "id"=> "021906",
                "province_id"=> "021900",
                "name"=> "HUAYLLABAMBA"
            ],
            [
                "id"=> "021907",
                "province_id"=> "021900",
                "name"=> "QUICHES"
            ],
            [
                "id"=> "021908",
                "province_id"=> "021900",
                "name"=> "RAGASH"
            ],
            [
                "id"=> "021909",
                "province_id"=> "021900",
                "name"=> "SAN JUAN"
            ],
            [
                "id"=> "021910",
                "province_id"=> "021900",
                "name"=> "SICSIBAMBA"
            ],
            [
                "id"=> "022001",
                "province_id"=> "022000",
                "name"=> "YUNGAY"
            ],
            [
                "id"=> "022002",
                "province_id"=> "022000",
                "name"=> "CASCAPARA"
            ],
            [
                "id"=> "022003",
                "province_id"=> "022000",
                "name"=> "MANCOS"
            ],
            [
                "id"=> "022004",
                "province_id"=> "022000",
                "name"=> "MATACOTO"
            ],
            [
                "id"=> "022005",
                "province_id"=> "022000",
                "name"=> "QUILLO"
            ],
            [
                "id"=> "022006",
                "province_id"=> "022000",
                "name"=> "RANRAHIRCA"
            ],
            [
                "id"=> "022007",
                "province_id"=> "022000",
                "name"=> "SHUPLUY"
            ],
            [
                "id"=> "022008",
                "province_id"=> "022000",
                "name"=> "YANAMA"
            ],
            [
                "id"=> "030101",
                "province_id"=> "030100",
                "name"=> "ABANCAY"
            ],
            [
                "id"=> "030102",
                "province_id"=> "030100",
                "name"=> "CHACOCHE"
            ],
            [
                "id"=> "030103",
                "province_id"=> "030100",
                "name"=> "CIRCA"
            ],
            [
                "id"=> "030104",
                "province_id"=> "030100",
                "name"=> "CURAHUASI"
            ],
            [
                "id"=> "030105",
                "province_id"=> "030100",
                "name"=> "HUANIPACA"
            ],
            [
                "id"=> "030106",
                "province_id"=> "030100",
                "name"=> "LAMBRAMA"
            ],
            [
                "id"=> "030107",
                "province_id"=> "030100",
                "name"=> "PICHIRHUA"
            ],
            [
                "id"=> "030108",
                "province_id"=> "030100",
                "name"=> "SAN PEDRO DE CACHORA"
            ],
            [
                "id"=> "030109",
                "province_id"=> "030100",
                "name"=> "TAMBURCO"
            ],
            [
                "id"=> "030201",
                "province_id"=> "030200",
                "name"=> "ANDAHUAYLAS"
            ],
            [
                "id"=> "030202",
                "province_id"=> "030200",
                "name"=> "ANDARAPA"
            ],
            [
                "id"=> "030203",
                "province_id"=> "030200",
                "name"=> "CHIARA"
            ],
            [
                "id"=> "030204",
                "province_id"=> "030200",
                "name"=> "HUANCARAMA"
            ],
            [
                "id"=> "030205",
                "province_id"=> "030200",
                "name"=> "HUANCARAY"
            ],
            [
                "id"=> "030206",
                "province_id"=> "030200",
                "name"=> "HUAYANA"
            ],
            [
                "id"=> "030207",
                "province_id"=> "030200",
                "name"=> "KISHUARA"
            ],
            [
                "id"=> "030208",
                "province_id"=> "030200",
                "name"=> "PACOBAMBA"
            ],
            [
                "id"=> "030209",
                "province_id"=> "030200",
                "name"=> "PACUCHA"
            ],
            [
                "id"=> "030210",
                "province_id"=> "030200",
                "name"=> "PAMPACHIRI"
            ],
            [
                "id"=> "030211",
                "province_id"=> "030200",
                "name"=> "POMACOCHA"
            ],
            [
                "id"=> "030212",
                "province_id"=> "030200",
                "name"=> "SAN ANTONIO DE CACHI"
            ],
            [
                "id"=> "030213",
                "province_id"=> "030200",
                "name"=> "SAN JERONIMO"
            ],
            [
                "id"=> "030214",
                "province_id"=> "030200",
                "name"=> "SAN MIGUEL DE CHACCRAMPA"
            ],
            [
                "id"=> "030215",
                "province_id"=> "030200",
                "name"=> "SANTA MARIA DE CHICMO"
            ],
            [
                "id"=> "030216",
                "province_id"=> "030200",
                "name"=> "TALAVERA"
            ],
            [
                "id"=> "030217",
                "province_id"=> "030200",
                "name"=> "TUMAY HUARACA"
            ],
            [
                "id"=> "030218",
                "province_id"=> "030200",
                "name"=> "TURPO"
            ],
            [
                "id"=> "030219",
                "province_id"=> "030200",
                "name"=> "KAQUIABAMBA"
            ],
            [
                "id"=> "030220",
                "province_id"=> "030200",
                "name"=> "JOSE MARIA ARGUEDAS"
            ],
            [
                "id"=> "030301",
                "province_id"=> "030300",
                "name"=> "ANTABAMBA"
            ],
            [
                "id"=> "030302",
                "province_id"=> "030300",
                "name"=> "EL ORO"
            ],
            [
                "id"=> "030303",
                "province_id"=> "030300",
                "name"=> "HUAQUIRCA"
            ],
            [
                "id"=> "030304",
                "province_id"=> "030300",
                "name"=> "JUAN ESPINOZA MEDRANO"
            ],
            [
                "id"=> "030305",
                "province_id"=> "030300",
                "name"=> "OROPESA"
            ],
            [
                "id"=> "030306",
                "province_id"=> "030300",
                "name"=> "PACHACONAS"
            ],
            [
                "id"=> "030307",
                "province_id"=> "030300",
                "name"=> "SABAINO"
            ],
            [
                "id"=> "030401",
                "province_id"=> "030400",
                "name"=> "CHALHUANCA"
            ],
            [
                "id"=> "030402",
                "province_id"=> "030400",
                "name"=> "CAPAYA"
            ],
            [
                "id"=> "030403",
                "province_id"=> "030400",
                "name"=> "CARAYBAMBA"
            ],
            [
                "id"=> "030404",
                "province_id"=> "030400",
                "name"=> "CHAPIMARCA"
            ],
            [
                "id"=> "030405",
                "province_id"=> "030400",
                "name"=> "COLCABAMBA"
            ],
            [
                "id"=> "030406",
                "province_id"=> "030400",
                "name"=> "COTARUSE"
            ],
            [
                "id"=> "030407",
                "province_id"=> "030400",
                "name"=> "HUAYLLO"
            ],
            [
                "id"=> "030408",
                "province_id"=> "030400",
                "name"=> "JUSTO APU SAHUARAURA"
            ],
            [
                "id"=> "030409",
                "province_id"=> "030400",
                "name"=> "LUCRE"
            ],
            [
                "id"=> "030410",
                "province_id"=> "030400",
                "name"=> "POCOHUANCA"
            ],
            [
                "id"=> "030411",
                "province_id"=> "030400",
                "name"=> "SAN JUAN DE CHACÑA"
            ],
            [
                "id"=> "030412",
                "province_id"=> "030400",
                "name"=> "SAÑAYCA"
            ],
            [
                "id"=> "030413",
                "province_id"=> "030400",
                "name"=> "SORAYA"
            ],
            [
                "id"=> "030414",
                "province_id"=> "030400",
                "name"=> "TAPAIRIHUA"
            ],
            [
                "id"=> "030415",
                "province_id"=> "030400",
                "name"=> "TINTAY"
            ],
            [
                "id"=> "030416",
                "province_id"=> "030400",
                "name"=> "TORAYA"
            ],
            [
                "id"=> "030417",
                "province_id"=> "030400",
                "name"=> "YANACA"
            ],
            [
                "id"=> "030501",
                "province_id"=> "030500",
                "name"=> "TAMBOBAMBA"
            ],
            [
                "id"=> "030502",
                "province_id"=> "030500",
                "name"=> "COTABAMBAS"
            ],
            [
                "id"=> "030503",
                "province_id"=> "030500",
                "name"=> "COYLLURQUI"
            ],
            [
                "id"=> "030504",
                "province_id"=> "030500",
                "name"=> "HAQUIRA"
            ],
            [
                "id"=> "030505",
                "province_id"=> "030500",
                "name"=> "MARA"
            ],
            [
                "id"=> "030506",
                "province_id"=> "030500",
                "name"=> "CHALLHUAHUACHO"
            ],
            [
                "id"=> "030601",
                "province_id"=> "030600",
                "name"=> "CHINCHEROS"
            ],
            [
                "id"=> "030602",
                "province_id"=> "030600",
                "name"=> "ANCO_HUALLO"
            ],
            [
                "id"=> "030603",
                "province_id"=> "030600",
                "name"=> "COCHARCAS"
            ],
            [
                "id"=> "030604",
                "province_id"=> "030600",
                "name"=> "HUACCANA"
            ],
            [
                "id"=> "030605",
                "province_id"=> "030600",
                "name"=> "OCOBAMBA"
            ],
            [
                "id"=> "030606",
                "province_id"=> "030600",
                "name"=> "ONGOY"
            ],
            [
                "id"=> "030607",
                "province_id"=> "030600",
                "name"=> "URANMARCA"
            ],
            [
                "id"=> "030608",
                "province_id"=> "030600",
                "name"=> "RANRACANCHA"
            ],
            [
                "id"=> "030701",
                "province_id"=> "030700",
                "name"=> "CHUQUIBAMBILLA"
            ],
            [
                "id"=> "030702",
                "province_id"=> "030700",
                "name"=> "CURPAHUASI"
            ],
            [
                "id"=> "030703",
                "province_id"=> "030700",
                "name"=> "GAMARRA"
            ],
            [
                "id"=> "030704",
                "province_id"=> "030700",
                "name"=> "HUAYLLATI"
            ],
            [
                "id"=> "030705",
                "province_id"=> "030700",
                "name"=> "MAMARA"
            ],
            [
                "id"=> "030706",
                "province_id"=> "030700",
                "name"=> "MICAELA BASTIDAS"
            ],
            [
                "id"=> "030707",
                "province_id"=> "030700",
                "name"=> "PATAYPAMPA"
            ],
            [
                "id"=> "030708",
                "province_id"=> "030700",
                "name"=> "PROGRESO"
            ],
            [
                "id"=> "030709",
                "province_id"=> "030700",
                "name"=> "SAN ANTONIO"
            ],
            [
                "id"=> "030710",
                "province_id"=> "030700",
                "name"=> "SANTA ROSA"
            ],
            [
                "id"=> "030711",
                "province_id"=> "030700",
                "name"=> "TURPAY"
            ],
            [
                "id"=> "030712",
                "province_id"=> "030700",
                "name"=> "VILCABAMBA"
            ],
            [
                "id"=> "030713",
                "province_id"=> "030700",
                "name"=> "VIRUNDO"
            ],
            [
                "id"=> "030714",
                "province_id"=> "030700",
                "name"=> "CURASCO"
            ],
            [
                "id"=> "040101",
                "province_id"=> "040100",
                "name"=> "AREQUIPA"
            ],
            [
                "id"=> "040102",
                "province_id"=> "040100",
                "name"=> "ALTO SELVA ALEGRE"
            ],
            [
                "id"=> "040103",
                "province_id"=> "040100",
                "name"=> "CAYMA"
            ],
            [
                "id"=> "040104",
                "province_id"=> "040100",
                "name"=> "CERRO COLORADO"
            ],
            [
                "id"=> "040105",
                "province_id"=> "040100",
                "name"=> "CHARACATO"
            ],
            [
                "id"=> "040106",
                "province_id"=> "040100",
                "name"=> "CHIGUATA"
            ],
            [
                "id"=> "040107",
                "province_id"=> "040100",
                "name"=> "JACOBO HUNTER"
            ],
            [
                "id"=> "040108",
                "province_id"=> "040100",
                "name"=> "LA JOYA"
            ],
            [
                "id"=> "040109",
                "province_id"=> "040100",
                "name"=> "MARIANO MELGAR"
            ],
            [
                "id"=> "040110",
                "province_id"=> "040100",
                "name"=> "MIRAFLORES"
            ],
            [
                "id"=> "040111",
                "province_id"=> "040100",
                "name"=> "MOLLEBAYA"
            ],
            [
                "id"=> "040112",
                "province_id"=> "040100",
                "name"=> "PAUCARPATA"
            ],
            [
                "id"=> "040113",
                "province_id"=> "040100",
                "name"=> "POCSI"
            ],
            [
                "id"=> "040114",
                "province_id"=> "040100",
                "name"=> "POLOBAYA"
            ],
            [
                "id"=> "040115",
                "province_id"=> "040100",
                "name"=> "QUEQUEÑA"
            ],
            [
                "id"=> "040116",
                "province_id"=> "040100",
                "name"=> "SABANDIA"
            ],
            [
                "id"=> "040117",
                "province_id"=> "040100",
                "name"=> "SACHACA"
            ],
            [
                "id"=> "040118",
                "province_id"=> "040100",
                "name"=> "SAN JUAN DE SIGUAS"
            ],
            [
                "id"=> "040119",
                "province_id"=> "040100",
                "name"=> "SAN JUAN DE TARUCANI"
            ],
            [
                "id"=> "040120",
                "province_id"=> "040100",
                "name"=> "SANTA ISABEL DE SIGUAS"
            ],
            [
                "id"=> "040121",
                "province_id"=> "040100",
                "name"=> "SANTA RITA DE SIGUAS"
            ],
            [
                "id"=> "040122",
                "province_id"=> "040100",
                "name"=> "SOCABAYA"
            ],
            [
                "id"=> "040123",
                "province_id"=> "040100",
                "name"=> "TIABAYA"
            ],
            [
                "id"=> "040124",
                "province_id"=> "040100",
                "name"=> "UCHUMAYO"
            ],
            [
                "id"=> "040125",
                "province_id"=> "040100",
                "name"=> "VITOR"
            ],
            [
                "id"=> "040126",
                "province_id"=> "040100",
                "name"=> "YANAHUARA"
            ],
            [
                "id"=> "040127",
                "province_id"=> "040100",
                "name"=> "YARABAMBA"
            ],
            [
                "id"=> "040128",
                "province_id"=> "040100",
                "name"=> "YURA"
            ],
            [
                "id"=> "040129",
                "province_id"=> "040100",
                "name"=> "JOSE LUIS BUSTAMANTE Y RIVERO"
            ],
            [
                "id"=> "040201",
                "province_id"=> "040200",
                "name"=> "CAMANA"
            ],
            [
                "id"=> "040202",
                "province_id"=> "040200",
                "name"=> "JOSE MARIA QUIMPER"
            ],
            [
                "id"=> "040203",
                "province_id"=> "040200",
                "name"=> "MARIANO NICOLAS VALCARCEL"
            ],
            [
                "id"=> "040204",
                "province_id"=> "040200",
                "name"=> "MARISCAL CACERES"
            ],
            [
                "id"=> "040205",
                "province_id"=> "040200",
                "name"=> "NICOLAS DE PIEROLA"
            ],
            [
                "id"=> "040206",
                "province_id"=> "040200",
                "name"=> "OCOÑA"
            ],
            [
                "id"=> "040207",
                "province_id"=> "040200",
                "name"=> "QUILCA"
            ],
            [
                "id"=> "040208",
                "province_id"=> "040200",
                "name"=> "SAMUEL PASTOR"
            ],
            [
                "id"=> "040301",
                "province_id"=> "040300",
                "name"=> "CARAVELI"
            ],
            [
                "id"=> "040302",
                "province_id"=> "040300",
                "name"=> "ACARI"
            ],
            [
                "id"=> "040303",
                "province_id"=> "040300",
                "name"=> "ATICO"
            ],
            [
                "id"=> "040304",
                "province_id"=> "040300",
                "name"=> "ATIQUIPA"
            ],
            [
                "id"=> "040305",
                "province_id"=> "040300",
                "name"=> "BELLA UNION"
            ],
            [
                "id"=> "040306",
                "province_id"=> "040300",
                "name"=> "CAHUACHO"
            ],
            [
                "id"=> "040307",
                "province_id"=> "040300",
                "name"=> "CHALA"
            ],
            [
                "id"=> "040308",
                "province_id"=> "040300",
                "name"=> "CHAPARRA"
            ],
            [
                "id"=> "040309",
                "province_id"=> "040300",
                "name"=> "HUANUHUANU"
            ],
            [
                "id"=> "040310",
                "province_id"=> "040300",
                "name"=> "JAQUI"
            ],
            [
                "id"=> "040311",
                "province_id"=> "040300",
                "name"=> "LOMAS"
            ],
            [
                "id"=> "040312",
                "province_id"=> "040300",
                "name"=> "QUICACHA"
            ],
            [
                "id"=> "040313",
                "province_id"=> "040300",
                "name"=> "YAUCA"
            ],
            [
                "id"=> "040401",
                "province_id"=> "040400",
                "name"=> "APLAO"
            ],
            [
                "id"=> "040402",
                "province_id"=> "040400",
                "name"=> "ANDAGUA"
            ],
            [
                "id"=> "040403",
                "province_id"=> "040400",
                "name"=> "AYO"
            ],
            [
                "id"=> "040404",
                "province_id"=> "040400",
                "name"=> "CHACHAS"
            ],
            [
                "id"=> "040405",
                "province_id"=> "040400",
                "name"=> "CHILCAYMARCA"
            ],
            [
                "id"=> "040406",
                "province_id"=> "040400",
                "name"=> "CHOCO"
            ],
            [
                "id"=> "040407",
                "province_id"=> "040400",
                "name"=> "HUANCARQUI"
            ],
            [
                "id"=> "040408",
                "province_id"=> "040400",
                "name"=> "MACHAGUAY"
            ],
            [
                "id"=> "040409",
                "province_id"=> "040400",
                "name"=> "ORCOPAMPA"
            ],
            [
                "id"=> "040410",
                "province_id"=> "040400",
                "name"=> "PAMPACOLCA"
            ],
            [
                "id"=> "040411",
                "province_id"=> "040400",
                "name"=> "TIPAN"
            ],
            [
                "id"=> "040412",
                "province_id"=> "040400",
                "name"=> "UÑON"
            ],
            [
                "id"=> "040413",
                "province_id"=> "040400",
                "name"=> "URACA"
            ],
            [
                "id"=> "040414",
                "province_id"=> "040400",
                "name"=> "VIRACO"
            ],
            [
                "id"=> "040501",
                "province_id"=> "040500",
                "name"=> "CHIVAY"
            ],
            [
                "id"=> "040502",
                "province_id"=> "040500",
                "name"=> "ACHOMA"
            ],
            [
                "id"=> "040503",
                "province_id"=> "040500",
                "name"=> "CABANACONDE"
            ],
            [
                "id"=> "040504",
                "province_id"=> "040500",
                "name"=> "CALLALLI"
            ],
            [
                "id"=> "040505",
                "province_id"=> "040500",
                "name"=> "CAYLLOMA"
            ],
            [
                "id"=> "040506",
                "province_id"=> "040500",
                "name"=> "COPORAQUE"
            ],
            [
                "id"=> "040507",
                "province_id"=> "040500",
                "name"=> "HUAMBO"
            ],
            [
                "id"=> "040508",
                "province_id"=> "040500",
                "name"=> "HUANCA"
            ],
            [
                "id"=> "040509",
                "province_id"=> "040500",
                "name"=> "ICHUPAMPA"
            ],
            [
                "id"=> "040510",
                "province_id"=> "040500",
                "name"=> "LARI"
            ],
            [
                "id"=> "040511",
                "province_id"=> "040500",
                "name"=> "LLUTA"
            ],
            [
                "id"=> "040512",
                "province_id"=> "040500",
                "name"=> "MACA"
            ],
            [
                "id"=> "040513",
                "province_id"=> "040500",
                "name"=> "MADRIGAL"
            ],
            [
                "id"=> "040514",
                "province_id"=> "040500",
                "name"=> "SAN ANTONIO DE CHUCA"
            ],
            [
                "id"=> "040515",
                "province_id"=> "040500",
                "name"=> "SIBAYO"
            ],
            [
                "id"=> "040516",
                "province_id"=> "040500",
                "name"=> "TAPAY"
            ],
            [
                "id"=> "040517",
                "province_id"=> "040500",
                "name"=> "TISCO"
            ],
            [
                "id"=> "040518",
                "province_id"=> "040500",
                "name"=> "TUTI"
            ],
            [
                "id"=> "040519",
                "province_id"=> "040500",
                "name"=> "YANQUE"
            ],
            [
                "id"=> "040520",
                "province_id"=> "040500",
                "name"=> "MAJES"
            ],
            [
                "id"=> "040601",
                "province_id"=> "040600",
                "name"=> "CHUQUIBAMBA"
            ],
            [
                "id"=> "040602",
                "province_id"=> "040600",
                "name"=> "ANDARAY"
            ],
            [
                "id"=> "040603",
                "province_id"=> "040600",
                "name"=> "CAYARANI"
            ],
            [
                "id"=> "040604",
                "province_id"=> "040600",
                "name"=> "CHICHAS"
            ],
            [
                "id"=> "040605",
                "province_id"=> "040600",
                "name"=> "IRAY"
            ],
            [
                "id"=> "040606",
                "province_id"=> "040600",
                "name"=> "RIO GRANDE"
            ],
            [
                "id"=> "040607",
                "province_id"=> "040600",
                "name"=> "SALAMANCA"
            ],
            [
                "id"=> "040608",
                "province_id"=> "040600",
                "name"=> "YANAQUIHUA"
            ],
            [
                "id"=> "040701",
                "province_id"=> "040700",
                "name"=> "MOLLENDO"
            ],
            [
                "id"=> "040702",
                "province_id"=> "040700",
                "name"=> "COCACHACRA"
            ],
            [
                "id"=> "040703",
                "province_id"=> "040700",
                "name"=> "DEAN VALDIVIA"
            ],
            [
                "id"=> "040704",
                "province_id"=> "040700",
                "name"=> "ISLAY"
            ],
            [
                "id"=> "040705",
                "province_id"=> "040700",
                "name"=> "MEJIA"
            ],
            [
                "id"=> "040706",
                "province_id"=> "040700",
                "name"=> "PUNTA DE BOMBON"
            ],
            [
                "id"=> "040801",
                "province_id"=> "040800",
                "name"=> "COTAHUASI"
            ],
            [
                "id"=> "040802",
                "province_id"=> "040800",
                "name"=> "ALCA"
            ],
            [
                "id"=> "040803",
                "province_id"=> "040800",
                "name"=> "CHARCANA"
            ],
            [
                "id"=> "040804",
                "province_id"=> "040800",
                "name"=> "HUAYNACOTAS"
            ],
            [
                "id"=> "040805",
                "province_id"=> "040800",
                "name"=> "PAMPAMARCA"
            ],
            [
                "id"=> "040806",
                "province_id"=> "040800",
                "name"=> "PUYCA"
            ],
            [
                "id"=> "040807",
                "province_id"=> "040800",
                "name"=> "QUECHUALLA"
            ],
            [
                "id"=> "040808",
                "province_id"=> "040800",
                "name"=> "SAYLA"
            ],
            [
                "id"=> "040809",
                "province_id"=> "040800",
                "name"=> "TAURIA"
            ],
            [
                "id"=> "040810",
                "province_id"=> "040800",
                "name"=> "TOMEPAMPA"
            ],
            [
                "id"=> "040811",
                "province_id"=> "040800",
                "name"=> "TORO"
            ],
            [
                "id"=> "050101",
                "province_id"=> "050100",
                "name"=> "AYACUCHO"
            ],
            [
                "id"=> "050102",
                "province_id"=> "050100",
                "name"=> "ACOCRO"
            ],
            [
                "id"=> "050103",
                "province_id"=> "050100",
                "name"=> "ACOS VINCHOS"
            ],
            [
                "id"=> "050104",
                "province_id"=> "050100",
                "name"=> "CARMEN ALTO"
            ],
            [
                "id"=> "050105",
                "province_id"=> "050100",
                "name"=> "CHIARA"
            ],
            [
                "id"=> "050106",
                "province_id"=> "050100",
                "name"=> "OCROS"
            ],
            [
                "id"=> "050107",
                "province_id"=> "050100",
                "name"=> "PACAYCASA"
            ],
            [
                "id"=> "050108",
                "province_id"=> "050100",
                "name"=> "QUINUA"
            ],
            [
                "id"=> "050109",
                "province_id"=> "050100",
                "name"=> "SAN JOSE DE TICLLAS"
            ],
            [
                "id"=> "050110",
                "province_id"=> "050100",
                "name"=> "SAN JUAN BAUTISTA"
            ],
            [
                "id"=> "050111",
                "province_id"=> "050100",
                "name"=> "SANTIAGO DE PISCHA"
            ],
            [
                "id"=> "050112",
                "province_id"=> "050100",
                "name"=> "SOCOS"
            ],
            [
                "id"=> "050113",
                "province_id"=> "050100",
                "name"=> "TAMBILLO"
            ],
            [
                "id"=> "050114",
                "province_id"=> "050100",
                "name"=> "VINCHOS"
            ],
            [
                "id"=> "050115",
                "province_id"=> "050100",
                "name"=> "JESUS NAZARENO"
            ],
            [
                "id"=> "050116",
                "province_id"=> "050100",
                "name"=> "ANDRES AVELINO CACERES DORREGARAY"
            ],
            [
                "id"=> "050201",
                "province_id"=> "050200",
                "name"=> "CANGALLO"
            ],
            [
                "id"=> "050202",
                "province_id"=> "050200",
                "name"=> "CHUSCHI"
            ],
            [
                "id"=> "050203",
                "province_id"=> "050200",
                "name"=> "LOS MOROCHUCOS"
            ],
            [
                "id"=> "050204",
                "province_id"=> "050200",
                "name"=> "MARIA PARADO DE BELLIDO"
            ],
            [
                "id"=> "050205",
                "province_id"=> "050200",
                "name"=> "PARAS"
            ],
            [
                "id"=> "050206",
                "province_id"=> "050200",
                "name"=> "TOTOS"
            ],
            [
                "id"=> "050301",
                "province_id"=> "050300",
                "name"=> "SANCOS"
            ],
            [
                "id"=> "050302",
                "province_id"=> "050300",
                "name"=> "CARAPO"
            ],
            [
                "id"=> "050303",
                "province_id"=> "050300",
                "name"=> "SACSAMARCA"
            ],
            [
                "id"=> "050304",
                "province_id"=> "050300",
                "name"=> "SANTIAGO DE LUCANAMARCA"
            ],
            [
                "id"=> "050401",
                "province_id"=> "050400",
                "name"=> "HUANTA"
            ],
            [
                "id"=> "050402",
                "province_id"=> "050400",
                "name"=> "AYAHUANCO"
            ],
            [
                "id"=> "050403",
                "province_id"=> "050400",
                "name"=> "HUAMANGUILLA"
            ],
            [
                "id"=> "050404",
                "province_id"=> "050400",
                "name"=> "IGUAIN"
            ],
            [
                "id"=> "050405",
                "province_id"=> "050400",
                "name"=> "LURICOCHA"
            ],
            [
                "id"=> "050406",
                "province_id"=> "050400",
                "name"=> "SANTILLANA"
            ],
            [
                "id"=> "050407",
                "province_id"=> "050400",
                "name"=> "SIVIA"
            ],
            [
                "id"=> "050408",
                "province_id"=> "050400",
                "name"=> "LLOCHEGUA"
            ],
            [
                "id"=> "050501",
                "province_id"=> "050500",
                "name"=> "SAN MIGUEL"
            ],
            [
                "id"=> "050502",
                "province_id"=> "050500",
                "name"=> "ANCO"
            ],
            [
                "id"=> "050503",
                "province_id"=> "050500",
                "name"=> "AYNA"
            ],
            [
                "id"=> "050504",
                "province_id"=> "050500",
                "name"=> "CHILCAS"
            ],
            [
                "id"=> "050505",
                "province_id"=> "050500",
                "name"=> "CHUNGUI"
            ],
            [
                "id"=> "050506",
                "province_id"=> "050500",
                "name"=> "LUIS CARRANZA"
            ],
            [
                "id"=> "050507",
                "province_id"=> "050500",
                "name"=> "SANTA ROSA"
            ],
            [
                "id"=> "050508",
                "province_id"=> "050500",
                "name"=> "TAMBO"
            ],
            [
                "id"=> "050509",
                "province_id"=> "050500",
                "name"=> "SAMUGARI"
            ],
            [
                "id"=> "050510",
                "province_id"=> "050500",
                "name"=> "ANCHIHUAY"
            ],
            [
                "id"=> "050601",
                "province_id"=> "050600",
                "name"=> "PUQUIO"
            ],
            [
                "id"=> "050602",
                "province_id"=> "050600",
                "name"=> "AUCARA"
            ],
            [
                "id"=> "050603",
                "province_id"=> "050600",
                "name"=> "CABANA"
            ],
            [
                "id"=> "050604",
                "province_id"=> "050600",
                "name"=> "CARMEN SALCEDO"
            ],
            [
                "id"=> "050605",
                "province_id"=> "050600",
                "name"=> "CHAVIÑA"
            ],
            [
                "id"=> "050606",
                "province_id"=> "050600",
                "name"=> "CHIPAO"
            ],
            [
                "id"=> "050607",
                "province_id"=> "050600",
                "name"=> "HUAC-HUAS"
            ],
            [
                "id"=> "050608",
                "province_id"=> "050600",
                "name"=> "LARAMATE"
            ],
            [
                "id"=> "050609",
                "province_id"=> "050600",
                "name"=> "LEONCIO PRADO"
            ],
            [
                "id"=> "050610",
                "province_id"=> "050600",
                "name"=> "LLAUTA"
            ],
            [
                "id"=> "050611",
                "province_id"=> "050600",
                "name"=> "LUCANAS"
            ],
            [
                "id"=> "050612",
                "province_id"=> "050600",
                "name"=> "OCAÑA"
            ],
            [
                "id"=> "050613",
                "province_id"=> "050600",
                "name"=> "OTOCA"
            ],
            [
                "id"=> "050614",
                "province_id"=> "050600",
                "name"=> "SAISA"
            ],
            [
                "id"=> "050615",
                "province_id"=> "050600",
                "name"=> "SAN CRISTOBAL"
            ],
            [
                "id"=> "050616",
                "province_id"=> "050600",
                "name"=> "SAN JUAN"
            ],
            [
                "id"=> "050617",
                "province_id"=> "050600",
                "name"=> "SAN PEDRO"
            ],
            [
                "id"=> "050618",
                "province_id"=> "050600",
                "name"=> "SAN PEDRO DE PALCO"
            ],
            [
                "id"=> "050619",
                "province_id"=> "050600",
                "name"=> "SANCOS"
            ],
            [
                "id"=> "050620",
                "province_id"=> "050600",
                "name"=> "SANTA ANA DE HUAYCAHUACHO"
            ],
            [
                "id"=> "050621",
                "province_id"=> "050600",
                "name"=> "SANTA LUCIA"
            ],
            [
                "id"=> "050701",
                "province_id"=> "050700",
                "name"=> "CORACORA"
            ],
            [
                "id"=> "050702",
                "province_id"=> "050700",
                "name"=> "CHUMPI"
            ],
            [
                "id"=> "050703",
                "province_id"=> "050700",
                "name"=> "CORONEL CASTAÑEDA"
            ],
            [
                "id"=> "050704",
                "province_id"=> "050700",
                "name"=> "PACAPAUSA"
            ],
            [
                "id"=> "050705",
                "province_id"=> "050700",
                "name"=> "PULLO"
            ],
            [
                "id"=> "050706",
                "province_id"=> "050700",
                "name"=> "PUYUSCA"
            ],
            [
                "id"=> "050707",
                "province_id"=> "050700",
                "name"=> "SAN FRANCISCO DE RAVACAYCO"
            ],
            [
                "id"=> "050708",
                "province_id"=> "050700",
                "name"=> "UPAHUACHO"
            ],
            [
                "id"=> "050801",
                "province_id"=> "050800",
                "name"=> "PAUSA"
            ],
            [
                "id"=> "050802",
                "province_id"=> "050800",
                "name"=> "COLTA"
            ],
            [
                "id"=> "050803",
                "province_id"=> "050800",
                "name"=> "CORCULLA"
            ],
            [
                "id"=> "050804",
                "province_id"=> "050800",
                "name"=> "LAMPA"
            ],
            [
                "id"=> "050805",
                "province_id"=> "050800",
                "name"=> "MARCABAMBA"
            ],
            [
                "id"=> "050806",
                "province_id"=> "050800",
                "name"=> "OYOLO"
            ],
            [
                "id"=> "050807",
                "province_id"=> "050800",
                "name"=> "PARARCA"
            ],
            [
                "id"=> "050808",
                "province_id"=> "050800",
                "name"=> "SAN JAVIER DE ALPABAMBA"
            ],
            [
                "id"=> "050809",
                "province_id"=> "050800",
                "name"=> "SAN JOSE DE USHUA"
            ],
            [
                "id"=> "050810",
                "province_id"=> "050800",
                "name"=> "SARA SARA"
            ],
            [
                "id"=> "050901",
                "province_id"=> "050900",
                "name"=> "QUEROBAMBA"
            ],
            [
                "id"=> "050902",
                "province_id"=> "050900",
                "name"=> "BELEN"
            ],
            [
                "id"=> "050903",
                "province_id"=> "050900",
                "name"=> "CHALCOS"
            ],
            [
                "id"=> "050904",
                "province_id"=> "050900",
                "name"=> "CHILCAYOC"
            ],
            [
                "id"=> "050905",
                "province_id"=> "050900",
                "name"=> "HUACAÑA"
            ],
            [
                "id"=> "050906",
                "province_id"=> "050900",
                "name"=> "MORCOLLA"
            ],
            [
                "id"=> "050907",
                "province_id"=> "050900",
                "name"=> "PAICO"
            ],
            [
                "id"=> "050908",
                "province_id"=> "050900",
                "name"=> "SAN PEDRO DE LARCAY"
            ],
            [
                "id"=> "050909",
                "province_id"=> "050900",
                "name"=> "SAN SALVADOR DE QUIJE"
            ],
            [
                "id"=> "050910",
                "province_id"=> "050900",
                "name"=> "SANTIAGO DE PAUCARAY"
            ],
            [
                "id"=> "050911",
                "province_id"=> "050900",
                "name"=> "SORAS"
            ],
            [
                "id"=> "051001",
                "province_id"=> "051000",
                "name"=> "HUANCAPI"
            ],
            [
                "id"=> "051002",
                "province_id"=> "051000",
                "name"=> "ALCAMENCA"
            ],
            [
                "id"=> "051003",
                "province_id"=> "051000",
                "name"=> "APONGO"
            ],
            [
                "id"=> "051004",
                "province_id"=> "051000",
                "name"=> "ASQUIPATA"
            ],
            [
                "id"=> "051005",
                "province_id"=> "051000",
                "name"=> "CANARIA"
            ],
            [
                "id"=> "051006",
                "province_id"=> "051000",
                "name"=> "CAYARA"
            ],
            [
                "id"=> "051007",
                "province_id"=> "051000",
                "name"=> "COLCA"
            ],
            [
                "id"=> "051008",
                "province_id"=> "051000",
                "name"=> "HUAMANQUIQUIA"
            ],
            [
                "id"=> "051009",
                "province_id"=> "051000",
                "name"=> "HUANCARAYLLA"
            ],
            [
                "id"=> "051010",
                "province_id"=> "051000",
                "name"=> "HUAYA"
            ],
            [
                "id"=> "051011",
                "province_id"=> "051000",
                "name"=> "SARHUA"
            ],
            [
                "id"=> "051012",
                "province_id"=> "051000",
                "name"=> "VILCANCHOS"
            ],
            [
                "id"=> "051101",
                "province_id"=> "051100",
                "name"=> "VILCAS HUAMAN"
            ],
            [
                "id"=> "051102",
                "province_id"=> "051100",
                "name"=> "ACCOMARCA"
            ],
            [
                "id"=> "051103",
                "province_id"=> "051100",
                "name"=> "CARHUANCA"
            ],
            [
                "id"=> "051104",
                "province_id"=> "051100",
                "name"=> "CONCEPCION"
            ],
            [
                "id"=> "051105",
                "province_id"=> "051100",
                "name"=> "HUAMBALPA"
            ],
            [
                "id"=> "051106",
                "province_id"=> "051100",
                "name"=> "INDEPENDENCIA"
            ],
            [
                "id"=> "051107",
                "province_id"=> "051100",
                "name"=> "SAURAMA"
            ],
            [
                "id"=> "051108",
                "province_id"=> "051100",
                "name"=> "VISCHONGO"
            ],
            [
                "id"=> "060101",
                "province_id"=> "060100",
                "name"=> "CAJAMARCA"
            ],
            [
                "id"=> "060102",
                "province_id"=> "060100",
                "name"=> "ASUNCION"
            ],
            [
                "id"=> "060103",
                "province_id"=> "060100",
                "name"=> "CHETILLA"
            ],
            [
                "id"=> "060104",
                "province_id"=> "060100",
                "name"=> "COSPAN"
            ],
            [
                "id"=> "060105",
                "province_id"=> "060100",
                "name"=> "ENCAÑADA"
            ],
            [
                "id"=> "060106",
                "province_id"=> "060100",
                "name"=> "JESUS"
            ],
            [
                "id"=> "060107",
                "province_id"=> "060100",
                "name"=> "LLACANORA"
            ],
            [
                "id"=> "060108",
                "province_id"=> "060100",
                "name"=> "LOS BAÑOS DEL INCA"
            ],
            [
                "id"=> "060109",
                "province_id"=> "060100",
                "name"=> "MAGDALENA"
            ],
            [
                "id"=> "060110",
                "province_id"=> "060100",
                "name"=> "MATARA"
            ],
            [
                "id"=> "060111",
                "province_id"=> "060100",
                "name"=> "NAMORA"
            ],
            [
                "id"=> "060112",
                "province_id"=> "060100",
                "name"=> "SAN JUAN"
            ],
            [
                "id"=> "060201",
                "province_id"=> "060200",
                "name"=> "CAJABAMBA"
            ],
            [
                "id"=> "060202",
                "province_id"=> "060200",
                "name"=> "CACHACHI"
            ],
            [
                "id"=> "060203",
                "province_id"=> "060200",
                "name"=> "CONDEBAMBA"
            ],
            [
                "id"=> "060204",
                "province_id"=> "060200",
                "name"=> "SITACOCHA"
            ],
            [
                "id"=> "060301",
                "province_id"=> "060300",
                "name"=> "CELENDIN"
            ],
            [
                "id"=> "060302",
                "province_id"=> "060300",
                "name"=> "CHUMUCH"
            ],
            [
                "id"=> "060303",
                "province_id"=> "060300",
                "name"=> "CORTEGANA"
            ],
            [
                "id"=> "060304",
                "province_id"=> "060300",
                "name"=> "HUASMIN"
            ],
            [
                "id"=> "060305",
                "province_id"=> "060300",
                "name"=> "JORGE CHAVEZ"
            ],
            [
                "id"=> "060306",
                "province_id"=> "060300",
                "name"=> "JOSE GALVEZ"
            ],
            [
                "id"=> "060307",
                "province_id"=> "060300",
                "name"=> "MIGUEL IGLESIAS"
            ],
            [
                "id"=> "060308",
                "province_id"=> "060300",
                "name"=> "OXAMARCA"
            ],
            [
                "id"=> "060309",
                "province_id"=> "060300",
                "name"=> "SOROCHUCO"
            ],
            [
                "id"=> "060310",
                "province_id"=> "060300",
                "name"=> "SUCRE"
            ],
            [
                "id"=> "060311",
                "province_id"=> "060300",
                "name"=> "UTCO"
            ],
            [
                "id"=> "060312",
                "province_id"=> "060300",
                "name"=> "LA LIBERTAD DE PALLAN"
            ],
            [
                "id"=> "060401",
                "province_id"=> "060400",
                "name"=> "CHOTA"
            ],
            [
                "id"=> "060402",
                "province_id"=> "060400",
                "name"=> "ANGUIA"
            ],
            [
                "id"=> "060403",
                "province_id"=> "060400",
                "name"=> "CHADIN"
            ],
            [
                "id"=> "060404",
                "province_id"=> "060400",
                "name"=> "CHIGUIRIP"
            ],
            [
                "id"=> "060405",
                "province_id"=> "060400",
                "name"=> "CHIMBAN"
            ],
            [
                "id"=> "060406",
                "province_id"=> "060400",
                "name"=> "CHOROPAMPA"
            ],
            [
                "id"=> "060407",
                "province_id"=> "060400",
                "name"=> "COCHABAMBA"
            ],
            [
                "id"=> "060408",
                "province_id"=> "060400",
                "name"=> "CONCHAN"
            ],
            [
                "id"=> "060409",
                "province_id"=> "060400",
                "name"=> "HUAMBOS"
            ],
            [
                "id"=> "060410",
                "province_id"=> "060400",
                "name"=> "LAJAS"
            ],
            [
                "id"=> "060411",
                "province_id"=> "060400",
                "name"=> "LLAMA"
            ],
            [
                "id"=> "060412",
                "province_id"=> "060400",
                "name"=> "MIRACOSTA"
            ],
            [
                "id"=> "060413",
                "province_id"=> "060400",
                "name"=> "PACCHA"
            ],
            [
                "id"=> "060414",
                "province_id"=> "060400",
                "name"=> "PION"
            ],
            [
                "id"=> "060415",
                "province_id"=> "060400",
                "name"=> "QUEROCOTO"
            ],
            [
                "id"=> "060416",
                "province_id"=> "060400",
                "name"=> "SAN JUAN DE LICUPIS"
            ],
            [
                "id"=> "060417",
                "province_id"=> "060400",
                "name"=> "TACABAMBA"
            ],
            [
                "id"=> "060418",
                "province_id"=> "060400",
                "name"=> "TOCMOCHE"
            ],
            [
                "id"=> "060419",
                "province_id"=> "060400",
                "name"=> "CHALAMARCA"
            ],
            [
                "id"=> "060501",
                "province_id"=> "060500",
                "name"=> "CONTUMAZA"
            ],
            [
                "id"=> "060502",
                "province_id"=> "060500",
                "name"=> "CHILETE"
            ],
            [
                "id"=> "060503",
                "province_id"=> "060500",
                "name"=> "CUPISNIQUE"
            ],
            [
                "id"=> "060504",
                "province_id"=> "060500",
                "name"=> "GUZMANGO"
            ],
            [
                "id"=> "060505",
                "province_id"=> "060500",
                "name"=> "SAN BENITO"
            ],
            [
                "id"=> "060506",
                "province_id"=> "060500",
                "name"=> "SANTA CRUZ DE TOLED"
            ],
            [
                "id"=> "060507",
                "province_id"=> "060500",
                "name"=> "TANTARICA"
            ],
            [
                "id"=> "060508",
                "province_id"=> "060500",
                "name"=> "YONAN"
            ],
            [
                "id"=> "060601",
                "province_id"=> "060600",
                "name"=> "CUTERVO"
            ],
            [
                "id"=> "060602",
                "province_id"=> "060600",
                "name"=> "CALLAYUC"
            ],
            [
                "id"=> "060603",
                "province_id"=> "060600",
                "name"=> "CHOROS"
            ],
            [
                "id"=> "060604",
                "province_id"=> "060600",
                "name"=> "CUJILLO"
            ],
            [
                "id"=> "060605",
                "province_id"=> "060600",
                "name"=> "LA RAMADA"
            ],
            [
                "id"=> "060606",
                "province_id"=> "060600",
                "name"=> "PIMPINGOS"
            ],
            [
                "id"=> "060607",
                "province_id"=> "060600",
                "name"=> "QUEROCOTILLO"
            ],
            [
                "id"=> "060608",
                "province_id"=> "060600",
                "name"=> "SAN ANDRES DE CUTERVO"
            ],
            [
                "id"=> "060609",
                "province_id"=> "060600",
                "name"=> "SAN JUAN DE CUTERVO"
            ],
            [
                "id"=> "060610",
                "province_id"=> "060600",
                "name"=> "SAN LUIS DE LUCMA"
            ],
            [
                "id"=> "060611",
                "province_id"=> "060600",
                "name"=> "SANTA CRUZ"
            ],
            [
                "id"=> "060612",
                "province_id"=> "060600",
                "name"=> "SANTO DOMINGO DE LA CAPILLA"
            ],
            [
                "id"=> "060613",
                "province_id"=> "060600",
                "name"=> "SANTO TOMAS"
            ],
            [
                "id"=> "060614",
                "province_id"=> "060600",
                "name"=> "SOCOTA"
            ],
            [
                "id"=> "060615",
                "province_id"=> "060600",
                "name"=> "TORIBIO CASANOVA"
            ],
            [
                "id"=> "060701",
                "province_id"=> "060700",
                "name"=> "BAMBAMARCA"
            ],
            [
                "id"=> "060702",
                "province_id"=> "060700",
                "name"=> "CHUGUR"
            ],
            [
                "id"=> "060703",
                "province_id"=> "060700",
                "name"=> "HUALGAYOC"
            ],
            [
                "id"=> "060801",
                "province_id"=> "060800",
                "name"=> "JAEN"
            ],
            [
                "id"=> "060802",
                "province_id"=> "060800",
                "name"=> "BELLAVISTA"
            ],
            [
                "id"=> "060803",
                "province_id"=> "060800",
                "name"=> "CHONTALI"
            ],
            [
                "id"=> "060804",
                "province_id"=> "060800",
                "name"=> "COLASAY"
            ],
            [
                "id"=> "060805",
                "province_id"=> "060800",
                "name"=> "HUABAL"
            ],
            [
                "id"=> "060806",
                "province_id"=> "060800",
                "name"=> "LAS PIRIAS"
            ],
            [
                "id"=> "060807",
                "province_id"=> "060800",
                "name"=> "POMAHUACA"
            ],
            [
                "id"=> "060808",
                "province_id"=> "060800",
                "name"=> "PUCARA"
            ],
            [
                "id"=> "060809",
                "province_id"=> "060800",
                "name"=> "SALLIQUE"
            ],
            [
                "id"=> "060810",
                "province_id"=> "060800",
                "name"=> "SAN FELIPE"
            ],
            [
                "id"=> "060811",
                "province_id"=> "060800",
                "name"=> "SAN JOSE DEL ALTO"
            ],
            [
                "id"=> "060812",
                "province_id"=> "060800",
                "name"=> "SANTA ROSA"
            ],
            [
                "id"=> "060901",
                "province_id"=> "060900",
                "name"=> "SAN IGNACIO"
            ],
            [
                "id"=> "060902",
                "province_id"=> "060900",
                "name"=> "CHIRINOS"
            ],
            [
                "id"=> "060903",
                "province_id"=> "060900",
                "name"=> "HUARANGO"
            ],
            [
                "id"=> "060904",
                "province_id"=> "060900",
                "name"=> "LA COIPA"
            ],
            [
                "id"=> "060905",
                "province_id"=> "060900",
                "name"=> "NAMBALLE"
            ],
            [
                "id"=> "060906",
                "province_id"=> "060900",
                "name"=> "SAN JOSE DE LOURDES"
            ],
            [
                "id"=> "060907",
                "province_id"=> "060900",
                "name"=> "TABACONAS"
            ],
            [
                "id"=> "061001",
                "province_id"=> "061000",
                "name"=> "PEDRO GALVEZ"
            ],
            [
                "id"=> "061002",
                "province_id"=> "061000",
                "name"=> "CHANCAY"
            ],
            [
                "id"=> "061003",
                "province_id"=> "061000",
                "name"=> "EDUARDO VILLANUEVA"
            ],
            [
                "id"=> "061004",
                "province_id"=> "061000",
                "name"=> "GREGORIO PITA"
            ],
            [
                "id"=> "061005",
                "province_id"=> "061000",
                "name"=> "ICHOCAN"
            ],
            [
                "id"=> "061006",
                "province_id"=> "061000",
                "name"=> "JOSE MANUEL QUIROZ"
            ],
            [
                "id"=> "061007",
                "province_id"=> "061000",
                "name"=> "JOSE SABOGAL"
            ],
            [
                "id"=> "061101",
                "province_id"=> "061100",
                "name"=> "SAN MIGUEL"
            ],
            [
                "id"=> "061102",
                "province_id"=> "061100",
                "name"=> "BOLIVAR"
            ],
            [
                "id"=> "061103",
                "province_id"=> "061100",
                "name"=> "CALQUIS"
            ],
            [
                "id"=> "061104",
                "province_id"=> "061100",
                "name"=> "CATILLUC"
            ],
            [
                "id"=> "061105",
                "province_id"=> "061100",
                "name"=> "EL PRADO"
            ],
            [
                "id"=> "061106",
                "province_id"=> "061100",
                "name"=> "LA FLORIDA"
            ],
            [
                "id"=> "061107",
                "province_id"=> "061100",
                "name"=> "LLAPA"
            ],
            [
                "id"=> "061108",
                "province_id"=> "061100",
                "name"=> "NANCHOC"
            ],
            [
                "id"=> "061109",
                "province_id"=> "061100",
                "name"=> "NIEPOS"
            ],
            [
                "id"=> "061110",
                "province_id"=> "061100",
                "name"=> "SAN GREGORIO"
            ],
            [
                "id"=> "061111",
                "province_id"=> "061100",
                "name"=> "SAN SILVESTRE DE COCHAN"
            ],
            [
                "id"=> "061112",
                "province_id"=> "061100",
                "name"=> "TONGOD"
            ],
            [
                "id"=> "061113",
                "province_id"=> "061100",
                "name"=> "UNION AGUA BLANCA"
            ],
            [
                "id"=> "061201",
                "province_id"=> "061200",
                "name"=> "SAN PABLO"
            ],
            [
                "id"=> "061202",
                "province_id"=> "061200",
                "name"=> "SAN BERNARDINO"
            ],
            [
                "id"=> "061203",
                "province_id"=> "061200",
                "name"=> "SAN LUIS"
            ],
            [
                "id"=> "061204",
                "province_id"=> "061200",
                "name"=> "TUMBADEN"
            ],
            [
                "id"=> "061301",
                "province_id"=> "061300",
                "name"=> "SANTA CRUZ"
            ],
            [
                "id"=> "061302",
                "province_id"=> "061300",
                "name"=> "ANDABAMBA"
            ],
            [
                "id"=> "061303",
                "province_id"=> "061300",
                "name"=> "CATACHE"
            ],
            [
                "id"=> "061304",
                "province_id"=> "061300",
                "name"=> "CHANCAYBAÑOS"
            ],
            [
                "id"=> "061305",
                "province_id"=> "061300",
                "name"=> "LA ESPERANZA"
            ],
            [
                "id"=> "061306",
                "province_id"=> "061300",
                "name"=> "NINABAMBA"
            ],
            [
                "id"=> "061307",
                "province_id"=> "061300",
                "name"=> "PULAN"
            ],
            [
                "id"=> "061308",
                "province_id"=> "061300",
                "name"=> "SAUCEPAMPA"
            ],
            [
                "id"=> "061309",
                "province_id"=> "061300",
                "name"=> "SEXI"
            ],
            [
                "id"=> "061310",
                "province_id"=> "061300",
                "name"=> "UTICYACU"
            ],
            [
                "id"=> "061311",
                "province_id"=> "061300",
                "name"=> "YAUYUCAN"
            ],
            [
                "id"=> "070101",
                "province_id"=> "070100",
                "name"=> "CALLAO"
            ],
            [
                "id"=> "070102",
                "province_id"=> "070100",
                "name"=> "BELLAVISTA"
            ],
            [
                "id"=> "070103",
                "province_id"=> "070100",
                "name"=> "CARMEN DE LA LEGUA REYNOSO"
            ],
            [
                "id"=> "070104",
                "province_id"=> "070100",
                "name"=> "LA PERLA"
            ],
            [
                "id"=> "070105",
                "province_id"=> "070100",
                "name"=> "LA PUNTA"
            ],
            [
                "id"=> "070106",
                "province_id"=> "070100",
                "name"=> "VENTANILLA"
            ],
            [
                "id"=> "070107",
                "province_id"=> "070100",
                "name"=> "MI PERU"
            ],
            [
                "id"=> "080101",
                "province_id"=> "080100",
                "name"=> "CUSCO"
            ],
            [
                "id"=> "080102",
                "province_id"=> "080100",
                "name"=> "CCORCA"
            ],
            [
                "id"=> "080103",
                "province_id"=> "080100",
                "name"=> "POROY"
            ],
            [
                "id"=> "080104",
                "province_id"=> "080100",
                "name"=> "SAN JERONIMO"
            ],
            [
                "id"=> "080105",
                "province_id"=> "080100",
                "name"=> "SAN SEBASTIAN"
            ],
            [
                "id"=> "080106",
                "province_id"=> "080100",
                "name"=> "SANTIAGO"
            ],
            [
                "id"=> "080107",
                "province_id"=> "080100",
                "name"=> "SAYLLA"
            ],
            [
                "id"=> "080108",
                "province_id"=> "080100",
                "name"=> "WANCHAQ"
            ],
            [
                "id"=> "080201",
                "province_id"=> "080200",
                "name"=> "ACOMAYO"
            ],
            [
                "id"=> "080202",
                "province_id"=> "080200",
                "name"=> "ACOPIA"
            ],
            [
                "id"=> "080203",
                "province_id"=> "080200",
                "name"=> "ACOS"
            ],
            [
                "id"=> "080204",
                "province_id"=> "080200",
                "name"=> "MOSOC LLACTA"
            ],
            [
                "id"=> "080205",
                "province_id"=> "080200",
                "name"=> "POMACANCHI"
            ],
            [
                "id"=> "080206",
                "province_id"=> "080200",
                "name"=> "RONDOCAN"
            ],
            [
                "id"=> "080207",
                "province_id"=> "080200",
                "name"=> "SANGARARA"
            ],
            [
                "id"=> "080301",
                "province_id"=> "080300",
                "name"=> "ANTA"
            ],
            [
                "id"=> "080302",
                "province_id"=> "080300",
                "name"=> "ANCAHUASI"
            ],
            [
                "id"=> "080303",
                "province_id"=> "080300",
                "name"=> "CACHIMAYO"
            ],
            [
                "id"=> "080304",
                "province_id"=> "080300",
                "name"=> "CHINCHAYPUJIO"
            ],
            [
                "id"=> "080305",
                "province_id"=> "080300",
                "name"=> "HUAROCONDO"
            ],
            [
                "id"=> "080306",
                "province_id"=> "080300",
                "name"=> "LIMATAMBO"
            ],
            [
                "id"=> "080307",
                "province_id"=> "080300",
                "name"=> "MOLLEPATA"
            ],
            [
                "id"=> "080308",
                "province_id"=> "080300",
                "name"=> "PUCYURA"
            ],
            [
                "id"=> "080309",
                "province_id"=> "080300",
                "name"=> "ZURITE"
            ],
            [
                "id"=> "080401",
                "province_id"=> "080400",
                "name"=> "CALCA"
            ],
            [
                "id"=> "080402",
                "province_id"=> "080400",
                "name"=> "COYA"
            ],
            [
                "id"=> "080403",
                "province_id"=> "080400",
                "name"=> "LAMAY"
            ],
            [
                "id"=> "080404",
                "province_id"=> "080400",
                "name"=> "LARES"
            ],
            [
                "id"=> "080405",
                "province_id"=> "080400",
                "name"=> "PISAC"
            ],
            [
                "id"=> "080406",
                "province_id"=> "080400",
                "name"=> "SAN SALVADOR"
            ],
            [
                "id"=> "080407",
                "province_id"=> "080400",
                "name"=> "TARAY"
            ],
            [
                "id"=> "080408",
                "province_id"=> "080400",
                "name"=> "YANATILE"
            ],
            [
                "id"=> "080501",
                "province_id"=> "080500",
                "name"=> "YANAOCA"
            ],
            [
                "id"=> "080502",
                "province_id"=> "080500",
                "name"=> "CHECCA"
            ],
            [
                "id"=> "080503",
                "province_id"=> "080500",
                "name"=> "KUNTURKANKI"
            ],
            [
                "id"=> "080504",
                "province_id"=> "080500",
                "name"=> "LANGUI"
            ],
            [
                "id"=> "080505",
                "province_id"=> "080500",
                "name"=> "LAYO"
            ],
            [
                "id"=> "080506",
                "province_id"=> "080500",
                "name"=> "PAMPAMARCA"
            ],
            [
                "id"=> "080507",
                "province_id"=> "080500",
                "name"=> "QUEHUE"
            ],
            [
                "id"=> "080508",
                "province_id"=> "080500",
                "name"=> "TUPAC AMARU"
            ],
            [
                "id"=> "080601",
                "province_id"=> "080600",
                "name"=> "SICUANI"
            ],
            [
                "id"=> "080602",
                "province_id"=> "080600",
                "name"=> "CHECACUPE"
            ],
            [
                "id"=> "080603",
                "province_id"=> "080600",
                "name"=> "COMBAPATA"
            ],
            [
                "id"=> "080604",
                "province_id"=> "080600",
                "name"=> "MARANGANI"
            ],
            [
                "id"=> "080605",
                "province_id"=> "080600",
                "name"=> "PITUMARCA"
            ],
            [
                "id"=> "080606",
                "province_id"=> "080600",
                "name"=> "SAN PABLO"
            ],
            [
                "id"=> "080607",
                "province_id"=> "080600",
                "name"=> "SAN PEDRO"
            ],
            [
                "id"=> "080608",
                "province_id"=> "080600",
                "name"=> "TINTA"
            ],
            [
                "id"=> "080701",
                "province_id"=> "080700",
                "name"=> "SANTO TOMAS"
            ],
            [
                "id"=> "080702",
                "province_id"=> "080700",
                "name"=> "CAPACMARCA"
            ],
            [
                "id"=> "080703",
                "province_id"=> "080700",
                "name"=> "CHAMACA"
            ],
            [
                "id"=> "080704",
                "province_id"=> "080700",
                "name"=> "COLQUEMARCA"
            ],
            [
                "id"=> "080705",
                "province_id"=> "080700",
                "name"=> "LIVITACA"
            ],
            [
                "id"=> "080706",
                "province_id"=> "080700",
                "name"=> "LLUSCO"
            ],
            [
                "id"=> "080707",
                "province_id"=> "080700",
                "name"=> "QUIÑOTA"
            ],
            [
                "id"=> "080708",
                "province_id"=> "080700",
                "name"=> "VELILLE"
            ],
            [
                "id"=> "080801",
                "province_id"=> "080800",
                "name"=> "ESPINAR"
            ],
            [
                "id"=> "080802",
                "province_id"=> "080800",
                "name"=> "CONDOROMA"
            ],
            [
                "id"=> "080803",
                "province_id"=> "080800",
                "name"=> "COPORAQUE"
            ],
            [
                "id"=> "080804",
                "province_id"=> "080800",
                "name"=> "OCORURO"
            ],
            [
                "id"=> "080805",
                "province_id"=> "080800",
                "name"=> "PALLPATA"
            ],
            [
                "id"=> "080806",
                "province_id"=> "080800",
                "name"=> "PICHIGUA"
            ],
            [
                "id"=> "080807",
                "province_id"=> "080800",
                "name"=> "SUYCKUTAMBO"
            ],
            [
                "id"=> "080808",
                "province_id"=> "080800",
                "name"=> "ALTO PICHIGUA"
            ],
            [
                "id"=> "080901",
                "province_id"=> "080900",
                "name"=> "SANTA ANA"
            ],
            [
                "id"=> "080902",
                "province_id"=> "080900",
                "name"=> "ECHARATE"
            ],
            [
                "id"=> "080903",
                "province_id"=> "080900",
                "name"=> "HUAYOPATA"
            ],
            [
                "id"=> "080904",
                "province_id"=> "080900",
                "name"=> "MARANURA"
            ],
            [
                "id"=> "080905",
                "province_id"=> "080900",
                "name"=> "OCOBAMBA"
            ],
            [
                "id"=> "080906",
                "province_id"=> "080900",
                "name"=> "QUELLOUNO"
            ],
            [
                "id"=> "080907",
                "province_id"=> "080900",
                "name"=> "KIMBIRI"
            ],
            [
                "id"=> "080908",
                "province_id"=> "080900",
                "name"=> "SANTA TERESA"
            ],
            [
                "id"=> "080909",
                "province_id"=> "080900",
                "name"=> "VILCABAMBA"
            ],
            [
                "id"=> "080910",
                "province_id"=> "080900",
                "name"=> "PICHARI"
            ],
            [
                "id"=> "080913",
                "province_id"=> "080900",
                "name"=> "VILLA KINTIARINA"
            ],
            [
                "id"=> "080914",
                "province_id"=> "080900",
                "name"=> "MEGANTONI"
            ],
            [
                "id"=> "080915",
                "province_id"=> "080900",
                "name"=> "KUMPIRUSHIATO"
            ],
            [
                "id"=> "081001",
                "province_id"=> "081000",
                "name"=> "PARURO"
            ],
            [
                "id"=> "081002",
                "province_id"=> "081000",
                "name"=> "ACCHA"
            ],
            [
                "id"=> "081003",
                "province_id"=> "081000",
                "name"=> "CCAPI"
            ],
            [
                "id"=> "081004",
                "province_id"=> "081000",
                "name"=> "COLCHA"
            ],
            [
                "id"=> "081005",
                "province_id"=> "081000",
                "name"=> "HUANOQUITE"
            ],
            [
                "id"=> "081006",
                "province_id"=> "081000",
                "name"=> "OMACHA"
            ],
            [
                "id"=> "081007",
                "province_id"=> "081000",
                "name"=> "PACCARITAMBO"
            ],
            [
                "id"=> "081008",
                "province_id"=> "081000",
                "name"=> "PILLPINTO"
            ],
            [
                "id"=> "081009",
                "province_id"=> "081000",
                "name"=> "YAURISQUE"
            ],
            [
                "id"=> "081101",
                "province_id"=> "081100",
                "name"=> "PAUCARTAMBO"
            ],
            [
                "id"=> "081102",
                "province_id"=> "081100",
                "name"=> "CAICAY"
            ],
            [
                "id"=> "081103",
                "province_id"=> "081100",
                "name"=> "CHALLABAMBA"
            ],
            [
                "id"=> "081104",
                "province_id"=> "081100",
                "name"=> "COLQUEPATA"
            ],
            [
                "id"=> "081105",
                "province_id"=> "081100",
                "name"=> "HUANCARANI"
            ],
            [
                "id"=> "081106",
                "province_id"=> "081100",
                "name"=> "KOSÑIPATA"
            ],
            [
                "id"=> "081201",
                "province_id"=> "081200",
                "name"=> "URCOS"
            ],
            [
                "id"=> "081202",
                "province_id"=> "081200",
                "name"=> "ANDAHUAYLILLAS"
            ],
            [
                "id"=> "081203",
                "province_id"=> "081200",
                "name"=> "CAMANTI"
            ],
            [
                "id"=> "081204",
                "province_id"=> "081200",
                "name"=> "CCARHUAYO"
            ],
            [
                "id"=> "081205",
                "province_id"=> "081200",
                "name"=> "CCATCA"
            ],
            [
                "id"=> "081206",
                "province_id"=> "081200",
                "name"=> "CUSIPATA"
            ],
            [
                "id"=> "081207",
                "province_id"=> "081200",
                "name"=> "HUARO"
            ],
            [
                "id"=> "081208",
                "province_id"=> "081200",
                "name"=> "LUCRE"
            ],
            [
                "id"=> "081209",
                "province_id"=> "081200",
                "name"=> "MARCAPATA"
            ],
            [
                "id"=> "081210",
                "province_id"=> "081200",
                "name"=> "OCONGATE"
            ],
            [
                "id"=> "081211",
                "province_id"=> "081200",
                "name"=> "OROPESA"
            ],
            [
                "id"=> "081212",
                "province_id"=> "081200",
                "name"=> "QUIQUIJANA"
            ],
            [
                "id"=> "081301",
                "province_id"=> "081300",
                "name"=> "URUBAMBA"
            ],
            [
                "id"=> "081302",
                "province_id"=> "081300",
                "name"=> "CHINCHERO"
            ],
            [
                "id"=> "081303",
                "province_id"=> "081300",
                "name"=> "HUAYLLABAMBA"
            ],
            [
                "id"=> "081304",
                "province_id"=> "081300",
                "name"=> "MACHUPICCHU"
            ],
            [
                "id"=> "081305",
                "province_id"=> "081300",
                "name"=> "MARAS"
            ],
            [
                "id"=> "081306",
                "province_id"=> "081300",
                "name"=> "OLLANTAYTAMBO"
            ],
            [
                "id"=> "081307",
                "province_id"=> "081300",
                "name"=> "YUCAY"
            ],
            [
                "id"=> "090101",
                "province_id"=> "090100",
                "name"=> "HUANCAVELICA"
            ],
            [
                "id"=> "090102",
                "province_id"=> "090100",
                "name"=> "ACOBAMBILLA"
            ],
            [
                "id"=> "090103",
                "province_id"=> "090100",
                "name"=> "ACORIA"
            ],
            [
                "id"=> "090104",
                "province_id"=> "090100",
                "name"=> "CONAYCA"
            ],
            [
                "id"=> "090105",
                "province_id"=> "090100",
                "name"=> "CUENCA"
            ],
            [
                "id"=> "090106",
                "province_id"=> "090100",
                "name"=> "HUACHOCOLPA"
            ],
            [
                "id"=> "090107",
                "province_id"=> "090100",
                "name"=> "HUAYLLAHUARA"
            ],
            [
                "id"=> "090108",
                "province_id"=> "090100",
                "name"=> "IZCUCHACA"
            ],
            [
                "id"=> "090109",
                "province_id"=> "090100",
                "name"=> "LARIA"
            ],
            [
                "id"=> "090110",
                "province_id"=> "090100",
                "name"=> "MANTA"
            ],
            [
                "id"=> "090111",
                "province_id"=> "090100",
                "name"=> "MARISCAL CACERES"
            ],
            [
                "id"=> "090112",
                "province_id"=> "090100",
                "name"=> "MOYA"
            ],
            [
                "id"=> "090113",
                "province_id"=> "090100",
                "name"=> "NUEVO OCCORO"
            ],
            [
                "id"=> "090114",
                "province_id"=> "090100",
                "name"=> "PALCA"
            ],
            [
                "id"=> "090115",
                "province_id"=> "090100",
                "name"=> "PILCHACA"
            ],
            [
                "id"=> "090116",
                "province_id"=> "090100",
                "name"=> "VILCA"
            ],
            [
                "id"=> "090117",
                "province_id"=> "090100",
                "name"=> "YAULI"
            ],
            [
                "id"=> "090118",
                "province_id"=> "090100",
                "name"=> "ASCENSION"
            ],
            [
                "id"=> "090119",
                "province_id"=> "090100",
                "name"=> "HUANDO"
            ],
            [
                "id"=> "090201",
                "province_id"=> "090200",
                "name"=> "ACOBAMBA"
            ],
            [
                "id"=> "090202",
                "province_id"=> "090200",
                "name"=> "ANDABAMBA"
            ],
            [
                "id"=> "090203",
                "province_id"=> "090200",
                "name"=> "ANTA"
            ],
            [
                "id"=> "090204",
                "province_id"=> "090200",
                "name"=> "CAJA"
            ],
            [
                "id"=> "090205",
                "province_id"=> "090200",
                "name"=> "MARCAS"
            ],
            [
                "id"=> "090206",
                "province_id"=> "090200",
                "name"=> "PAUCARA"
            ],
            [
                "id"=> "090207",
                "province_id"=> "090200",
                "name"=> "POMACOCHA"
            ],
            [
                "id"=> "090208",
                "province_id"=> "090200",
                "name"=> "ROSARIO"
            ],
            [
                "id"=> "090301",
                "province_id"=> "090300",
                "name"=> "LIRCAY"
            ],
            [
                "id"=> "090302",
                "province_id"=> "090300",
                "name"=> "ANCHONGA"
            ],
            [
                "id"=> "090303",
                "province_id"=> "090300",
                "name"=> "CALLANMARCA"
            ],
            [
                "id"=> "090304",
                "province_id"=> "090300",
                "name"=> "CCOCHACCASA"
            ],
            [
                "id"=> "090305",
                "province_id"=> "090300",
                "name"=> "CHINCHO"
            ],
            [
                "id"=> "090306",
                "province_id"=> "090300",
                "name"=> "CONGALLA"
            ],
            [
                "id"=> "090307",
                "province_id"=> "090300",
                "name"=> "HUANCA-HUANCA"
            ],
            [
                "id"=> "090308",
                "province_id"=> "090300",
                "name"=> "HUAYLLAY GRANDE"
            ],
            [
                "id"=> "090309",
                "province_id"=> "090300",
                "name"=> "JULCAMARCA"
            ],
            [
                "id"=> "090310",
                "province_id"=> "090300",
                "name"=> "SAN ANTONIO DE ANTAPARCO"
            ],
            [
                "id"=> "090311",
                "province_id"=> "090300",
                "name"=> "SANTO TOMAS DE PATA"
            ],
            [
                "id"=> "090312",
                "province_id"=> "090300",
                "name"=> "SECCLLA"
            ],
            [
                "id"=> "090401",
                "province_id"=> "090400",
                "name"=> "CASTROVIRREYNA"
            ],
            [
                "id"=> "090402",
                "province_id"=> "090400",
                "name"=> "ARMA"
            ],
            [
                "id"=> "090403",
                "province_id"=> "090400",
                "name"=> "AURAHUA"
            ],
            [
                "id"=> "090404",
                "province_id"=> "090400",
                "name"=> "CAPILLAS"
            ],
            [
                "id"=> "090405",
                "province_id"=> "090400",
                "name"=> "CHUPAMARCA"
            ],
            [
                "id"=> "090406",
                "province_id"=> "090400",
                "name"=> "COCAS"
            ],
            [
                "id"=> "090407",
                "province_id"=> "090400",
                "name"=> "HUACHOS"
            ],
            [
                "id"=> "090408",
                "province_id"=> "090400",
                "name"=> "HUAMATAMBO"
            ],
            [
                "id"=> "090409",
                "province_id"=> "090400",
                "name"=> "MOLLEPAMPA"
            ],
            [
                "id"=> "090410",
                "province_id"=> "090400",
                "name"=> "SAN JUAN"
            ],
            [
                "id"=> "090411",
                "province_id"=> "090400",
                "name"=> "SANTA ANA"
            ],
            [
                "id"=> "090412",
                "province_id"=> "090400",
                "name"=> "TANTARA"
            ],
            [
                "id"=> "090413",
                "province_id"=> "090400",
                "name"=> "TICRAPO"
            ],
            [
                "id"=> "090501",
                "province_id"=> "090500",
                "name"=> "CHURCAMPA"
            ],
            [
                "id"=> "090502",
                "province_id"=> "090500",
                "name"=> "ANCO"
            ],
            [
                "id"=> "090503",
                "province_id"=> "090500",
                "name"=> "CHINCHIHUASI"
            ],
            [
                "id"=> "090504",
                "province_id"=> "090500",
                "name"=> "EL CARMEN"
            ],
            [
                "id"=> "090505",
                "province_id"=> "090500",
                "name"=> "LA MERCED"
            ],
            [
                "id"=> "090506",
                "province_id"=> "090500",
                "name"=> "LOCROJA"
            ],
            [
                "id"=> "090507",
                "province_id"=> "090500",
                "name"=> "PAUCARBAMBA"
            ],
            [
                "id"=> "090508",
                "province_id"=> "090500",
                "name"=> "SAN MIGUEL DE MAYOCC"
            ],
            [
                "id"=> "090509",
                "province_id"=> "090500",
                "name"=> "SAN PEDRO DE CORIS"
            ],
            [
                "id"=> "090510",
                "province_id"=> "090500",
                "name"=> "PACHAMARCA"
            ],
            [
                "id"=> "090511",
                "province_id"=> "090500",
                "name"=> "COSME"
            ],
            [
                "id"=> "090601",
                "province_id"=> "090600",
                "name"=> "HUAYTARA"
            ],
            [
                "id"=> "090602",
                "province_id"=> "090600",
                "name"=> "AYAVI"
            ],
            [
                "id"=> "090603",
                "province_id"=> "090600",
                "name"=> "CORDOVA"
            ],
            [
                "id"=> "090604",
                "province_id"=> "090600",
                "name"=> "HUAYACUNDO ARMA"
            ],
            [
                "id"=> "090605",
                "province_id"=> "090600",
                "name"=> "LARAMARCA"
            ],
            [
                "id"=> "090606",
                "province_id"=> "090600",
                "name"=> "OCOYO"
            ],
            [
                "id"=> "090607",
                "province_id"=> "090600",
                "name"=> "PILPICHACA"
            ],
            [
                "id"=> "090608",
                "province_id"=> "090600",
                "name"=> "QUERCO"
            ],
            [
                "id"=> "090609",
                "province_id"=> "090600",
                "name"=> "QUITO-ARMA"
            ],
            [
                "id"=> "090610",
                "province_id"=> "090600",
                "name"=> "SAN ANTONIO DE CUSICANCHA"
            ],
            [
                "id"=> "090611",
                "province_id"=> "090600",
                "name"=> "SAN FRANCISCO DE SANGAYAICO"
            ],
            [
                "id"=> "090612",
                "province_id"=> "090600",
                "name"=> "SAN ISIDRO"
            ],
            [
                "id"=> "090613",
                "province_id"=> "090600",
                "name"=> "SANTIAGO DE CHOCORVOS"
            ],
            [
                "id"=> "090614",
                "province_id"=> "090600",
                "name"=> "SANTIAGO DE QUIRAHUARA"
            ],
            [
                "id"=> "090615",
                "province_id"=> "090600",
                "name"=> "SANTO DOMINGO DE CAPILLAS"
            ],
            [
                "id"=> "090616",
                "province_id"=> "090600",
                "name"=> "TAMBO"
            ],
            [
                "id"=> "090701",
                "province_id"=> "090700",
                "name"=> "PAMPAS"
            ],
            [
                "id"=> "090702",
                "province_id"=> "090700",
                "name"=> "ACOSTAMBO"
            ],
            [
                "id"=> "090703",
                "province_id"=> "090700",
                "name"=> "ACRAQUIA"
            ],
            [
                "id"=> "090704",
                "province_id"=> "090700",
                "name"=> "AHUAYCHA"
            ],
            [
                "id"=> "090705",
                "province_id"=> "090700",
                "name"=> "COLCABAMBA"
            ],
            [
                "id"=> "090706",
                "province_id"=> "090700",
                "name"=> "DANIEL HERNANDEZ"
            ],
            [
                "id"=> "090707",
                "province_id"=> "090700",
                "name"=> "HUACHOCOLPA"
            ],
            [
                "id"=> "090709",
                "province_id"=> "090700",
                "name"=> "HUARIBAMBA"
            ],
            [
                "id"=> "090710",
                "province_id"=> "090700",
                "name"=> "ÑAHUIMPUQUIO"
            ],
            [
                "id"=> "090711",
                "province_id"=> "090700",
                "name"=> "PAZOS"
            ],
            [
                "id"=> "090713",
                "province_id"=> "090700",
                "name"=> "QUISHUAR"
            ],
            [
                "id"=> "090714",
                "province_id"=> "090700",
                "name"=> "SALCABAMBA"
            ],
            [
                "id"=> "090715",
                "province_id"=> "090700",
                "name"=> "SALCAHUASI"
            ],
            [
                "id"=> "090716",
                "province_id"=> "090700",
                "name"=> "SAN MARCOS DE ROCCHAC"
            ],
            [
                "id"=> "090717",
                "province_id"=> "090700",
                "name"=> "SURCUBAMBA"
            ],
            [
                "id"=> "090718",
                "province_id"=> "090700",
                "name"=> "TINTAY PUNCU"
            ],
            [
                "id"=> "100101",
                "province_id"=> "100100",
                "name"=> "HUANUCO"
            ],
            [
                "id"=> "100102",
                "province_id"=> "100100",
                "name"=> "AMARILIS"
            ],
            [
                "id"=> "100103",
                "province_id"=> "100100",
                "name"=> "CHINCHAO"
            ],
            [
                "id"=> "100104",
                "province_id"=> "100100",
                "name"=> "CHURUBAMBA"
            ],
            [
                "id"=> "100105",
                "province_id"=> "100100",
                "name"=> "MARGOS"
            ],
            [
                "id"=> "100106",
                "province_id"=> "100100",
                "name"=> "QUISQUI (KICHKI)"
            ],
            [
                "id"=> "100107",
                "province_id"=> "100100",
                "name"=> "SAN FRANCISCO DE CAYRAN"
            ],
            [
                "id"=> "100108",
                "province_id"=> "100100",
                "name"=> "SAN PEDRO DE CHAULAN"
            ],
            [
                "id"=> "100109",
                "province_id"=> "100100",
                "name"=> "SANTA MARIA DEL VALLE"
            ],
            [
                "id"=> "100110",
                "province_id"=> "100100",
                "name"=> "YARUMAYO"
            ],
            [
                "id"=> "100111",
                "province_id"=> "100100",
                "name"=> "PILLCO MARCA"
            ],
            [
                "id"=> "100112",
                "province_id"=> "100100",
                "name"=> "YACUS"
            ],
            [
                "id"=> "100201",
                "province_id"=> "100200",
                "name"=> "AMBO"
            ],
            [
                "id"=> "100202",
                "province_id"=> "100200",
                "name"=> "CAYNA"
            ],
            [
                "id"=> "100203",
                "province_id"=> "100200",
                "name"=> "COLPAS"
            ],
            [
                "id"=> "100204",
                "province_id"=> "100200",
                "name"=> "CONCHAMARCA"
            ],
            [
                "id"=> "100205",
                "province_id"=> "100200",
                "name"=> "HUACAR"
            ],
            [
                "id"=> "100206",
                "province_id"=> "100200",
                "name"=> "SAN FRANCISCO"
            ],
            [
                "id"=> "100207",
                "province_id"=> "100200",
                "name"=> "SAN RAFAEL"
            ],
            [
                "id"=> "100208",
                "province_id"=> "100200",
                "name"=> "TOMAY KICHWA"
            ],
            [
                "id"=> "100301",
                "province_id"=> "100300",
                "name"=> "LA UNION"
            ],
            [
                "id"=> "100307",
                "province_id"=> "100300",
                "name"=> "CHUQUIS"
            ],
            [
                "id"=> "100311",
                "province_id"=> "100300",
                "name"=> "MARIAS"
            ],
            [
                "id"=> "100313",
                "province_id"=> "100300",
                "name"=> "PACHAS"
            ],
            [
                "id"=> "100316",
                "province_id"=> "100300",
                "name"=> "QUIVILLA"
            ],
            [
                "id"=> "100317",
                "province_id"=> "100300",
                "name"=> "RIPAN"
            ],
            [
                "id"=> "100321",
                "province_id"=> "100300",
                "name"=> "SHUNQUI"
            ],
            [
                "id"=> "100322",
                "province_id"=> "100300",
                "name"=> "SILLAPATA"
            ],
            [
                "id"=> "100323",
                "province_id"=> "100300",
                "name"=> "YANAS"
            ],
            [
                "id"=> "100401",
                "province_id"=> "100400",
                "name"=> "HUACAYBAMBA"
            ],
            [
                "id"=> "100402",
                "province_id"=> "100400",
                "name"=> "CANCHABAMBA"
            ],
            [
                "id"=> "100403",
                "province_id"=> "100400",
                "name"=> "COCHABAMBA"
            ],
            [
                "id"=> "100404",
                "province_id"=> "100400",
                "name"=> "PINRA"
            ],
            [
                "id"=> "100501",
                "province_id"=> "100500",
                "name"=> "LLATA"
            ],
            [
                "id"=> "100502",
                "province_id"=> "100500",
                "name"=> "ARANCAY"
            ],
            [
                "id"=> "100503",
                "province_id"=> "100500",
                "name"=> "CHAVIN DE PARIARCA"
            ],
            [
                "id"=> "100504",
                "province_id"=> "100500",
                "name"=> "JACAS GRANDE"
            ],
            [
                "id"=> "100505",
                "province_id"=> "100500",
                "name"=> "JIRCAN"
            ],
            [
                "id"=> "100506",
                "province_id"=> "100500",
                "name"=> "MIRAFLORES"
            ],
            [
                "id"=> "100507",
                "province_id"=> "100500",
                "name"=> "MONZON"
            ],
            [
                "id"=> "100508",
                "province_id"=> "100500",
                "name"=> "PUNCHAO"
            ],
            [
                "id"=> "100509",
                "province_id"=> "100500",
                "name"=> "PUÑOS"
            ],
            [
                "id"=> "100510",
                "province_id"=> "100500",
                "name"=> "SINGA"
            ],
            [
                "id"=> "100511",
                "province_id"=> "100500",
                "name"=> "TANTAMAYO"
            ],
            [
                "id"=> "100601",
                "province_id"=> "100600",
                "name"=> "RUPA-RUPA"
            ],
            [
                "id"=> "100602",
                "province_id"=> "100600",
                "name"=> "DANIEL ALOMIA ROBLES"
            ],
            [
                "id"=> "100603",
                "province_id"=> "100600",
                "name"=> "HERMILIO VALDIZAN"
            ],
            [
                "id"=> "100604",
                "province_id"=> "100600",
                "name"=> "JOSE CRESPO Y CASTILLO"
            ],
            [
                "id"=> "100605",
                "province_id"=> "100600",
                "name"=> "LUYANDO"
            ],
            [
                "id"=> "100606",
                "province_id"=> "100600",
                "name"=> "MARIANO DAMASO BERAUN"
            ],
            [
                "id"=> "100607",
                "province_id"=> "100600",
                "name"=> "PUCAYACU"
            ],
            [
                "id"=> "100608",
                "province_id"=> "100600",
                "name"=> "CASTILLO GRANDE"
            ],
            [
                "id"=> "100701",
                "province_id"=> "100700",
                "name"=> "HUACRACHUCO"
            ],
            [
                "id"=> "100702",
                "province_id"=> "100700",
                "name"=> "CHOLON"
            ],
            [
                "id"=> "100703",
                "province_id"=> "100700",
                "name"=> "SAN BUENAVENTURA"
            ],
            [
                "id"=> "100704",
                "province_id"=> "100700",
                "name"=> "LA MORADA"
            ],
            [
                "id"=> "100705",
                "province_id"=> "100700",
                "name"=> "SANTA ROSA DE ALTO YANAJANCA"
            ],
            [
                "id"=> "100801",
                "province_id"=> "100800",
                "name"=> "PANAO"
            ],
            [
                "id"=> "100802",
                "province_id"=> "100800",
                "name"=> "CHAGLLA"
            ],
            [
                "id"=> "100803",
                "province_id"=> "100800",
                "name"=> "MOLINO"
            ],
            [
                "id"=> "100804",
                "province_id"=> "100800",
                "name"=> "UMARI"
            ],
            [
                "id"=> "100901",
                "province_id"=> "100900",
                "name"=> "PUERTO INCA"
            ],
            [
                "id"=> "100902",
                "province_id"=> "100900",
                "name"=> "CODO DEL POZUZO"
            ],
            [
                "id"=> "100903",
                "province_id"=> "100900",
                "name"=> "HONORIA"
            ],
            [
                "id"=> "100904",
                "province_id"=> "100900",
                "name"=> "TOURNAVISTA"
            ],
            [
                "id"=> "100905",
                "province_id"=> "100900",
                "name"=> "YUYAPICHIS"
            ],
            [
                "id"=> "101001",
                "province_id"=> "101000",
                "name"=> "JESUS"
            ],
            [
                "id"=> "101002",
                "province_id"=> "101000",
                "name"=> "BAÑOS"
            ],
            [
                "id"=> "101003",
                "province_id"=> "101000",
                "name"=> "JIVIA"
            ],
            [
                "id"=> "101004",
                "province_id"=> "101000",
                "name"=> "QUEROPALCA"
            ],
            [
                "id"=> "101005",
                "province_id"=> "101000",
                "name"=> "RONDOS"
            ],
            [
                "id"=> "101006",
                "province_id"=> "101000",
                "name"=> "SAN FRANCISCO DE ASIS"
            ],
            [
                "id"=> "101007",
                "province_id"=> "101000",
                "name"=> "SAN MIGUEL DE CAURI"
            ],
            [
                "id"=> "101101",
                "province_id"=> "101100",
                "name"=> "CHAVINILLO"
            ],
            [
                "id"=> "101102",
                "province_id"=> "101100",
                "name"=> "CAHUAC"
            ],
            [
                "id"=> "101103",
                "province_id"=> "101100",
                "name"=> "CHACABAMBA"
            ],
            [
                "id"=> "101104",
                "province_id"=> "101100",
                "name"=> "APARICIO POMARES"
            ],
            [
                "id"=> "101105",
                "province_id"=> "101100",
                "name"=> "JACAS CHICO"
            ],
            [
                "id"=> "101106",
                "province_id"=> "101100",
                "name"=> "OBAS"
            ],
            [
                "id"=> "101107",
                "province_id"=> "101100",
                "name"=> "PAMPAMARCA"
            ],
            [
                "id"=> "101108",
                "province_id"=> "101100",
                "name"=> "CHORAS"
            ],
            [
                "id"=> "110101",
                "province_id"=> "110100",
                "name"=> "ICA"
            ],
            [
                "id"=> "110102",
                "province_id"=> "110100",
                "name"=> "LA TINGUIÑA"
            ],
            [
                "id"=> "110103",
                "province_id"=> "110100",
                "name"=> "LOS AQUIJES"
            ],
            [
                "id"=> "110104",
                "province_id"=> "110100",
                "name"=> "OCUCAJE"
            ],
            [
                "id"=> "110105",
                "province_id"=> "110100",
                "name"=> "PACHACUTEC"
            ],
            [
                "id"=> "110106",
                "province_id"=> "110100",
                "name"=> "PARCONA"
            ],
            [
                "id"=> "110107",
                "province_id"=> "110100",
                "name"=> "PUEBLO NUEVO"
            ],
            [
                "id"=> "110108",
                "province_id"=> "110100",
                "name"=> "SALAS"
            ],
            [
                "id"=> "110109",
                "province_id"=> "110100",
                "name"=> "SAN JOSE DE LOS MOLINOS"
            ],
            [
                "id"=> "110110",
                "province_id"=> "110100",
                "name"=> "SAN JUAN BAUTISTA"
            ],
            [
                "id"=> "110111",
                "province_id"=> "110100",
                "name"=> "SANTIAGO"
            ],
            [
                "id"=> "110112",
                "province_id"=> "110100",
                "name"=> "SUBTANJALLA"
            ],
            [
                "id"=> "110113",
                "province_id"=> "110100",
                "name"=> "TATE"
            ],
            [
                "id"=> "110114",
                "province_id"=> "110100",
                "name"=> "YAUCA DEL ROSARIO"
            ],
            [
                "id"=> "110201",
                "province_id"=> "110200",
                "name"=> "CHINCHA ALTA"
            ],
            [
                "id"=> "110202",
                "province_id"=> "110200",
                "name"=> "ALTO LARAN"
            ],
            [
                "id"=> "110203",
                "province_id"=> "110200",
                "name"=> "CHAVIN"
            ],
            [
                "id"=> "110204",
                "province_id"=> "110200",
                "name"=> "CHINCHA BAJA"
            ],
            [
                "id"=> "110205",
                "province_id"=> "110200",
                "name"=> "EL CARMEN"
            ],
            [
                "id"=> "110206",
                "province_id"=> "110200",
                "name"=> "GROCIO PRADO"
            ],
            [
                "id"=> "110207",
                "province_id"=> "110200",
                "name"=> "PUEBLO NUEVO"
            ],
            [
                "id"=> "110208",
                "province_id"=> "110200",
                "name"=> "SAN JUAN DE YANAC"
            ],
            [
                "id"=> "110209",
                "province_id"=> "110200",
                "name"=> "SAN PEDRO DE HUACARPANA"
            ],
            [
                "id"=> "110210",
                "province_id"=> "110200",
                "name"=> "SUNAMPE"
            ],
            [
                "id"=> "110211",
                "province_id"=> "110200",
                "name"=> "TAMBO DE MORA"
            ],
            [
                "id"=> "110301",
                "province_id"=> "110300",
                "name"=> "NAZCA"
            ],
            [
                "id"=> "110302",
                "province_id"=> "110300",
                "name"=> "CHANGUILLO"
            ],
            [
                "id"=> "110303",
                "province_id"=> "110300",
                "name"=> "EL INGENIO"
            ],
            [
                "id"=> "110304",
                "province_id"=> "110300",
                "name"=> "MARCONA"
            ],
            [
                "id"=> "110305",
                "province_id"=> "110300",
                "name"=> "VISTA ALEGRE"
            ],
            [
                "id"=> "110401",
                "province_id"=> "110400",
                "name"=> "PALPA"
            ],
            [
                "id"=> "110402",
                "province_id"=> "110400",
                "name"=> "LLIPATA"
            ],
            [
                "id"=> "110403",
                "province_id"=> "110400",
                "name"=> "RIO GRANDE"
            ],
            [
                "id"=> "110404",
                "province_id"=> "110400",
                "name"=> "SANTA CRUZ"
            ],
            [
                "id"=> "110405",
                "province_id"=> "110400",
                "name"=> "TIBILLO"
            ],
            [
                "id"=> "110501",
                "province_id"=> "110500",
                "name"=> "PISCO"
            ],
            [
                "id"=> "110502",
                "province_id"=> "110500",
                "name"=> "HUANCANO"
            ],
            [
                "id"=> "110503",
                "province_id"=> "110500",
                "name"=> "HUMAY"
            ],
            [
                "id"=> "110504",
                "province_id"=> "110500",
                "name"=> "INDEPENDENCIA"
            ],
            [
                "id"=> "110505",
                "province_id"=> "110500",
                "name"=> "PARACAS"
            ],
            [
                "id"=> "110506",
                "province_id"=> "110500",
                "name"=> "SAN ANDRES"
            ],
            [
                "id"=> "110507",
                "province_id"=> "110500",
                "name"=> "SAN CLEMENTE"
            ],
            [
                "id"=> "110508",
                "province_id"=> "110500",
                "name"=> "TUPAC AMARU INCA"
            ],
            [
                "id"=> "120101",
                "province_id"=> "120100",
                "name"=> "HUANCAYO"
            ],
            [
                "id"=> "120104",
                "province_id"=> "120100",
                "name"=> "CARHUACALLANGA"
            ],
            [
                "id"=> "120105",
                "province_id"=> "120100",
                "name"=> "CHACAPAMPA"
            ],
            [
                "id"=> "120106",
                "province_id"=> "120100",
                "name"=> "CHICCHE"
            ],
            [
                "id"=> "120107",
                "province_id"=> "120100",
                "name"=> "CHILCA"
            ],
            [
                "id"=> "120108",
                "province_id"=> "120100",
                "name"=> "CHONGOS ALTO"
            ],
            [
                "id"=> "120111",
                "province_id"=> "120100",
                "name"=> "CHUPURO"
            ],
            [
                "id"=> "120112",
                "province_id"=> "120100",
                "name"=> "COLCA"
            ],
            [
                "id"=> "120113",
                "province_id"=> "120100",
                "name"=> "CULLHUAS"
            ],
            [
                "id"=> "120114",
                "province_id"=> "120100",
                "name"=> "EL TAMBO"
            ],
            [
                "id"=> "120116",
                "province_id"=> "120100",
                "name"=> "HUACRAPUQUIO"
            ],
            [
                "id"=> "120117",
                "province_id"=> "120100",
                "name"=> "HUALHUAS"
            ],
            [
                "id"=> "120119",
                "province_id"=> "120100",
                "name"=> "HUANCAN"
            ],
            [
                "id"=> "120120",
                "province_id"=> "120100",
                "name"=> "HUASICANCHA"
            ],
            [
                "id"=> "120121",
                "province_id"=> "120100",
                "name"=> "HUAYUCACHI"
            ],
            [
                "id"=> "120122",
                "province_id"=> "120100",
                "name"=> "INGENIO"
            ],
            [
                "id"=> "120124",
                "province_id"=> "120100",
                "name"=> "PARIAHUANCA"
            ],
            [
                "id"=> "120125",
                "province_id"=> "120100",
                "name"=> "PILCOMAYO"
            ],
            [
                "id"=> "120126",
                "province_id"=> "120100",
                "name"=> "PUCARA"
            ],
            [
                "id"=> "120127",
                "province_id"=> "120100",
                "name"=> "QUICHUAY"
            ],
            [
                "id"=> "120128",
                "province_id"=> "120100",
                "name"=> "QUILCAS"
            ],
            [
                "id"=> "120129",
                "province_id"=> "120100",
                "name"=> "SAN AGUSTIN"
            ],
            [
                "id"=> "120130",
                "province_id"=> "120100",
                "name"=> "SAN JERONIMO DE TUNAN"
            ],
            [
                "id"=> "120132",
                "province_id"=> "120100",
                "name"=> "SAÑO"
            ],
            [
                "id"=> "120133",
                "province_id"=> "120100",
                "name"=> "SAPALLANGA"
            ],
            [
                "id"=> "120134",
                "province_id"=> "120100",
                "name"=> "SICAYA"
            ],
            [
                "id"=> "120135",
                "province_id"=> "120100",
                "name"=> "SANTO DOMINGO DE ACOBAMBA"
            ],
            [
                "id"=> "120136",
                "province_id"=> "120100",
                "name"=> "VIQUES"
            ],
            [
                "id"=> "120201",
                "province_id"=> "120200",
                "name"=> "CONCEPCION"
            ],
            [
                "id"=> "120202",
                "province_id"=> "120200",
                "name"=> "ACO"
            ],
            [
                "id"=> "120203",
                "province_id"=> "120200",
                "name"=> "ANDAMARCA"
            ],
            [
                "id"=> "120204",
                "province_id"=> "120200",
                "name"=> "CHAMBARA"
            ],
            [
                "id"=> "120205",
                "province_id"=> "120200",
                "name"=> "COCHAS"
            ],
            [
                "id"=> "120206",
                "province_id"=> "120200",
                "name"=> "COMAS"
            ],
            [
                "id"=> "120207",
                "province_id"=> "120200",
                "name"=> "HEROINAS TOLEDO"
            ],
            [
                "id"=> "120208",
                "province_id"=> "120200",
                "name"=> "MANZANARES"
            ],
            [
                "id"=> "120209",
                "province_id"=> "120200",
                "name"=> "MARISCAL CASTILLA"
            ],
            [
                "id"=> "120210",
                "province_id"=> "120200",
                "name"=> "MATAHUASI"
            ],
            [
                "id"=> "120211",
                "province_id"=> "120200",
                "name"=> "MITO"
            ],
            [
                "id"=> "120212",
                "province_id"=> "120200",
                "name"=> "NUEVE DE JULIO"
            ],
            [
                "id"=> "120213",
                "province_id"=> "120200",
                "name"=> "ORCOTUNA"
            ],
            [
                "id"=> "120214",
                "province_id"=> "120200",
                "name"=> "SAN JOSE DE QUERO"
            ],
            [
                "id"=> "120215",
                "province_id"=> "120200",
                "name"=> "SANTA ROSA DE OCOPA"
            ],
            [
                "id"=> "120301",
                "province_id"=> "120300",
                "name"=> "CHANCHAMAYO"
            ],
            [
                "id"=> "120302",
                "province_id"=> "120300",
                "name"=> "PERENE"
            ],
            [
                "id"=> "120303",
                "province_id"=> "120300",
                "name"=> "PICHANAQUI"
            ],
            [
                "id"=> "120304",
                "province_id"=> "120300",
                "name"=> "SAN LUIS DE SHUARO"
            ],
            [
                "id"=> "120305",
                "province_id"=> "120300",
                "name"=> "SAN RAMON"
            ],
            [
                "id"=> "120306",
                "province_id"=> "120300",
                "name"=> "VITOC"
            ],
            [
                "id"=> "120401",
                "province_id"=> "120400",
                "name"=> "JAUJA"
            ],
            [
                "id"=> "120402",
                "province_id"=> "120400",
                "name"=> "ACOLLA"
            ],
            [
                "id"=> "120403",
                "province_id"=> "120400",
                "name"=> "APATA"
            ],
            [
                "id"=> "120404",
                "province_id"=> "120400",
                "name"=> "ATAURA"
            ],
            [
                "id"=> "120405",
                "province_id"=> "120400",
                "name"=> "CANCHAYLLO"
            ],
            [
                "id"=> "120406",
                "province_id"=> "120400",
                "name"=> "CURICACA"
            ],
            [
                "id"=> "120407",
                "province_id"=> "120400",
                "name"=> "EL MANTARO"
            ],
            [
                "id"=> "120408",
                "province_id"=> "120400",
                "name"=> "HUAMALI"
            ],
            [
                "id"=> "120409",
                "province_id"=> "120400",
                "name"=> "HUARIPAMPA"
            ],
            [
                "id"=> "120410",
                "province_id"=> "120400",
                "name"=> "HUERTAS"
            ],
            [
                "id"=> "120411",
                "province_id"=> "120400",
                "name"=> "JANJAILLO"
            ],
            [
                "id"=> "120412",
                "province_id"=> "120400",
                "name"=> "JULCAN"
            ],
            [
                "id"=> "120413",
                "province_id"=> "120400",
                "name"=> "LEONOR ORDOÑEZ"
            ],
            [
                "id"=> "120414",
                "province_id"=> "120400",
                "name"=> "LLOCLLAPAMPA"
            ],
            [
                "id"=> "120415",
                "province_id"=> "120400",
                "name"=> "MARCO"
            ],
            [
                "id"=> "120416",
                "province_id"=> "120400",
                "name"=> "MASMA"
            ],
            [
                "id"=> "120417",
                "province_id"=> "120400",
                "name"=> "MASMA CHICCHE"
            ],
            [
                "id"=> "120418",
                "province_id"=> "120400",
                "name"=> "MOLINOS"
            ],
            [
                "id"=> "120419",
                "province_id"=> "120400",
                "name"=> "MONOBAMBA"
            ],
            [
                "id"=> "120420",
                "province_id"=> "120400",
                "name"=> "MUQUI"
            ],
            [
                "id"=> "120421",
                "province_id"=> "120400",
                "name"=> "MUQUIYAUYO"
            ],
            [
                "id"=> "120422",
                "province_id"=> "120400",
                "name"=> "PACA"
            ],
            [
                "id"=> "120423",
                "province_id"=> "120400",
                "name"=> "PACCHA"
            ],
            [
                "id"=> "120424",
                "province_id"=> "120400",
                "name"=> "PANCAN"
            ],
            [
                "id"=> "120425",
                "province_id"=> "120400",
                "name"=> "PARCO"
            ],
            [
                "id"=> "120426",
                "province_id"=> "120400",
                "name"=> "POMACANCHA"
            ],
            [
                "id"=> "120427",
                "province_id"=> "120400",
                "name"=> "RICRAN"
            ],
            [
                "id"=> "120428",
                "province_id"=> "120400",
                "name"=> "SAN LORENZO"
            ],
            [
                "id"=> "120429",
                "province_id"=> "120400",
                "name"=> "SAN PEDRO DE CHUNAN"
            ],
            [
                "id"=> "120430",
                "province_id"=> "120400",
                "name"=> "SAUSA"
            ],
            [
                "id"=> "120431",
                "province_id"=> "120400",
                "name"=> "SINCOS"
            ],
            [
                "id"=> "120432",
                "province_id"=> "120400",
                "name"=> "TUNAN MARCA"
            ],
            [
                "id"=> "120433",
                "province_id"=> "120400",
                "name"=> "YAULI"
            ],
            [
                "id"=> "120434",
                "province_id"=> "120400",
                "name"=> "YAUYOS"
            ],
            [
                "id"=> "120501",
                "province_id"=> "120500",
                "name"=> "JUNIN"
            ],
            [
                "id"=> "120502",
                "province_id"=> "120500",
                "name"=> "CARHUAMAYO"
            ],
            [
                "id"=> "120503",
                "province_id"=> "120500",
                "name"=> "ONDORES"
            ],
            [
                "id"=> "120504",
                "province_id"=> "120500",
                "name"=> "ULCUMAYO"
            ],
            [
                "id"=> "120601",
                "province_id"=> "120600",
                "name"=> "SATIPO"
            ],
            [
                "id"=> "120602",
                "province_id"=> "120600",
                "name"=> "COVIRIALI"
            ],
            [
                "id"=> "120603",
                "province_id"=> "120600",
                "name"=> "LLAYLLA"
            ],
            [
                "id"=> "120604",
                "province_id"=> "120600",
                "name"=> "MAZAMARI"
            ],
            [
                "id"=> "120605",
                "province_id"=> "120600",
                "name"=> "PAMPA HERMOSA"
            ],
            [
                "id"=> "120606",
                "province_id"=> "120600",
                "name"=> "PANGOA"
            ],
            [
                "id"=> "120607",
                "province_id"=> "120600",
                "name"=> "RIO NEGRO"
            ],
            [
                "id"=> "120608",
                "province_id"=> "120600",
                "name"=> "RIO TAMBO"
            ],
            [
                "id"=> "120701",
                "province_id"=> "120700",
                "name"=> "TARMA"
            ],
            [
                "id"=> "120702",
                "province_id"=> "120700",
                "name"=> "ACOBAMBA"
            ],
            [
                "id"=> "120703",
                "province_id"=> "120700",
                "name"=> "HUARICOLCA"
            ],
            [
                "id"=> "120704",
                "province_id"=> "120700",
                "name"=> "HUASAHUASI"
            ],
            [
                "id"=> "120705",
                "province_id"=> "120700",
                "name"=> "LA UNION"
            ],
            [
                "id"=> "120706",
                "province_id"=> "120700",
                "name"=> "PALCA"
            ],
            [
                "id"=> "120707",
                "province_id"=> "120700",
                "name"=> "PALCAMAYO"
            ],
            [
                "id"=> "120708",
                "province_id"=> "120700",
                "name"=> "SAN PEDRO DE CAJAS"
            ],
            [
                "id"=> "120709",
                "province_id"=> "120700",
                "name"=> "TAPO"
            ],
            [
                "id"=> "120801",
                "province_id"=> "120800",
                "name"=> "LA OROYA"
            ],
            [
                "id"=> "120802",
                "province_id"=> "120800",
                "name"=> "CHACAPALPA"
            ],
            [
                "id"=> "120803",
                "province_id"=> "120800",
                "name"=> "HUAY-HUAY"
            ],
            [
                "id"=> "120804",
                "province_id"=> "120800",
                "name"=> "MARCAPOMACOCHA"
            ],
            [
                "id"=> "120805",
                "province_id"=> "120800",
                "name"=> "MOROCOCHA"
            ],
            [
                "id"=> "120806",
                "province_id"=> "120800",
                "name"=> "PACCHA"
            ],
            [
                "id"=> "120807",
                "province_id"=> "120800",
                "name"=> "SANTA BARBARA DE CARHUACAYAN"
            ],
            [
                "id"=> "120808",
                "province_id"=> "120800",
                "name"=> "SANTA ROSA DE SACCO"
            ],
            [
                "id"=> "120809",
                "province_id"=> "120800",
                "name"=> "SUITUCANCHA"
            ],
            [
                "id"=> "120810",
                "province_id"=> "120800",
                "name"=> "YAULI"
            ],
            [
                "id"=> "120901",
                "province_id"=> "120900",
                "name"=> "CHUPACA"
            ],
            [
                "id"=> "120902",
                "province_id"=> "120900",
                "name"=> "AHUAC"
            ],
            [
                "id"=> "120903",
                "province_id"=> "120900",
                "name"=> "CHONGOS BAJO"
            ],
            [
                "id"=> "120904",
                "province_id"=> "120900",
                "name"=> "HUACHAC"
            ],
            [
                "id"=> "120905",
                "province_id"=> "120900",
                "name"=> "HUAMANCACA CHICO"
            ],
            [
                "id"=> "120906",
                "province_id"=> "120900",
                "name"=> "SAN JUAN DE ISCOS"
            ],
            [
                "id"=> "120907",
                "province_id"=> "120900",
                "name"=> "SAN JUAN DE JARPA"
            ],
            [
                "id"=> "120908",
                "province_id"=> "120900",
                "name"=> "TRES DE DICIEMBRE"
            ],
            [
                "id"=> "120909",
                "province_id"=> "120900",
                "name"=> "YANACANCHA"
            ],
            [
                "id"=> "130101",
                "province_id"=> "130100",
                "name"=> "TRUJILLO"
            ],
            [
                "id"=> "130102",
                "province_id"=> "130100",
                "name"=> "EL PORVENIR"
            ],
            [
                "id"=> "130103",
                "province_id"=> "130100",
                "name"=> "FLORENCIA DE MORA"
            ],
            [
                "id"=> "130104",
                "province_id"=> "130100",
                "name"=> "HUANCHACO"
            ],
            [
                "id"=> "130105",
                "province_id"=> "130100",
                "name"=> "LA ESPERANZA"
            ],
            [
                "id"=> "130106",
                "province_id"=> "130100",
                "name"=> "LAREDO"
            ],
            [
                "id"=> "130107",
                "province_id"=> "130100",
                "name"=> "MOCHE"
            ],
            [
                "id"=> "130108",
                "province_id"=> "130100",
                "name"=> "POROTO"
            ],
            [
                "id"=> "130109",
                "province_id"=> "130100",
                "name"=> "SALAVERRY"
            ],
            [
                "id"=> "130110",
                "province_id"=> "130100",
                "name"=> "SIMBAL"
            ],
            [
                "id"=> "130111",
                "province_id"=> "130100",
                "name"=> "VICTOR LARCO HERRERA"
            ],
            [
                "id"=> "130201",
                "province_id"=> "130200",
                "name"=> "ASCOPE"
            ],
            [
                "id"=> "130202",
                "province_id"=> "130200",
                "name"=> "CHICAMA"
            ],
            [
                "id"=> "130203",
                "province_id"=> "130200",
                "name"=> "CHOCOPE"
            ],
            [
                "id"=> "130204",
                "province_id"=> "130200",
                "name"=> "MAGDALENA DE CAO"
            ],
            [
                "id"=> "130205",
                "province_id"=> "130200",
                "name"=> "PAIJAN"
            ],
            [
                "id"=> "130206",
                "province_id"=> "130200",
                "name"=> "RAZURI"
            ],
            [
                "id"=> "130207",
                "province_id"=> "130200",
                "name"=> "SANTIAGO DE CAO"
            ],
            [
                "id"=> "130208",
                "province_id"=> "130200",
                "name"=> "CASA GRANDE"
            ],
            [
                "id"=> "130301",
                "province_id"=> "130300",
                "name"=> "BOLIVAR"
            ],
            [
                "id"=> "130302",
                "province_id"=> "130300",
                "name"=> "BAMBAMARCA"
            ],
            [
                "id"=> "130303",
                "province_id"=> "130300",
                "name"=> "CONDORMARCA"
            ],
            [
                "id"=> "130304",
                "province_id"=> "130300",
                "name"=> "LONGOTEA"
            ],
            [
                "id"=> "130305",
                "province_id"=> "130300",
                "name"=> "UCHUMARCA"
            ],
            [
                "id"=> "130306",
                "province_id"=> "130300",
                "name"=> "UCUNCHA"
            ],
            [
                "id"=> "130401",
                "province_id"=> "130400",
                "name"=> "CHEPEN"
            ],
            [
                "id"=> "130402",
                "province_id"=> "130400",
                "name"=> "PACANGA"
            ],
            [
                "id"=> "130403",
                "province_id"=> "130400",
                "name"=> "PUEBLO NUEVO"
            ],
            [
                "id"=> "130501",
                "province_id"=> "130500",
                "name"=> "JULCAN"
            ],
            [
                "id"=> "130502",
                "province_id"=> "130500",
                "name"=> "CALAMARCA"
            ],
            [
                "id"=> "130503",
                "province_id"=> "130500",
                "name"=> "CARABAMBA"
            ],
            [
                "id"=> "130504",
                "province_id"=> "130500",
                "name"=> "HUASO"
            ],
            [
                "id"=> "130601",
                "province_id"=> "130600",
                "name"=> "OTUZCO"
            ],
            [
                "id"=> "130602",
                "province_id"=> "130600",
                "name"=> "AGALLPAMPA"
            ],
            [
                "id"=> "130604",
                "province_id"=> "130600",
                "name"=> "CHARAT"
            ],
            [
                "id"=> "130605",
                "province_id"=> "130600",
                "name"=> "HUARANCHAL"
            ],
            [
                "id"=> "130606",
                "province_id"=> "130600",
                "name"=> "LA CUESTA"
            ],
            [
                "id"=> "130608",
                "province_id"=> "130600",
                "name"=> "MACHE"
            ],
            [
                "id"=> "130610",
                "province_id"=> "130600",
                "name"=> "PARANDAY"
            ],
            [
                "id"=> "130611",
                "province_id"=> "130600",
                "name"=> "SALPO"
            ],
            [
                "id"=> "130613",
                "province_id"=> "130600",
                "name"=> "SINSICAP"
            ],
            [
                "id"=> "130614",
                "province_id"=> "130600",
                "name"=> "USQUIL"
            ],
            [
                "id"=> "130701",
                "province_id"=> "130700",
                "name"=> "SAN PEDRO DE LLOC"
            ],
            [
                "id"=> "130702",
                "province_id"=> "130700",
                "name"=> "GUADALUPE"
            ],
            [
                "id"=> "130703",
                "province_id"=> "130700",
                "name"=> "JEQUETEPEQUE"
            ],
            [
                "id"=> "130704",
                "province_id"=> "130700",
                "name"=> "PACASMAYO"
            ],
            [
                "id"=> "130705",
                "province_id"=> "130700",
                "name"=> "SAN JOSE"
            ],
            [
                "id"=> "130801",
                "province_id"=> "130800",
                "name"=> "TAYABAMBA"
            ],
            [
                "id"=> "130802",
                "province_id"=> "130800",
                "name"=> "BULDIBUYO"
            ],
            [
                "id"=> "130803",
                "province_id"=> "130800",
                "name"=> "CHILLIA"
            ],
            [
                "id"=> "130804",
                "province_id"=> "130800",
                "name"=> "HUANCASPATA"
            ],
            [
                "id"=> "130805",
                "province_id"=> "130800",
                "name"=> "HUAYLILLAS"
            ],
            [
                "id"=> "130806",
                "province_id"=> "130800",
                "name"=> "HUAYO"
            ],
            [
                "id"=> "130807",
                "province_id"=> "130800",
                "name"=> "ONGON"
            ],
            [
                "id"=> "130808",
                "province_id"=> "130800",
                "name"=> "PARCOY"
            ],
            [
                "id"=> "130809",
                "province_id"=> "130800",
                "name"=> "PATAZ"
            ],
            [
                "id"=> "130810",
                "province_id"=> "130800",
                "name"=> "PIAS"
            ],
            [
                "id"=> "130811",
                "province_id"=> "130800",
                "name"=> "SANTIAGO DE CHALLAS"
            ],
            [
                "id"=> "130812",
                "province_id"=> "130800",
                "name"=> "TAURIJA"
            ],
            [
                "id"=> "130813",
                "province_id"=> "130800",
                "name"=> "URPAY"
            ],
            [
                "id"=> "130901",
                "province_id"=> "130900",
                "name"=> "HUAMACHUCO"
            ],
            [
                "id"=> "130902",
                "province_id"=> "130900",
                "name"=> "CHUGAY"
            ],
            [
                "id"=> "130903",
                "province_id"=> "130900",
                "name"=> "COCHORCO"
            ],
            [
                "id"=> "130904",
                "province_id"=> "130900",
                "name"=> "CURGOS"
            ],
            [
                "id"=> "130905",
                "province_id"=> "130900",
                "name"=> "MARCABAL"
            ],
            [
                "id"=> "130906",
                "province_id"=> "130900",
                "name"=> "SANAGORAN"
            ],
            [
                "id"=> "130907",
                "province_id"=> "130900",
                "name"=> "SARIN"
            ],
            [
                "id"=> "130908",
                "province_id"=> "130900",
                "name"=> "SARTIMBAMBA"
            ],
            [
                "id"=> "131001",
                "province_id"=> "131000",
                "name"=> "SANTIAGO DE CHUCO"
            ],
            [
                "id"=> "131002",
                "province_id"=> "131000",
                "name"=> "ANGASMARCA"
            ],
            [
                "id"=> "131003",
                "province_id"=> "131000",
                "name"=> "CACHICADAN"
            ],
            [
                "id"=> "131004",
                "province_id"=> "131000",
                "name"=> "MOLLEBAMBA"
            ],
            [
                "id"=> "131005",
                "province_id"=> "131000",
                "name"=> "MOLLEPATA"
            ],
            [
                "id"=> "131006",
                "province_id"=> "131000",
                "name"=> "QUIRUVILCA"
            ],
            [
                "id"=> "131007",
                "province_id"=> "131000",
                "name"=> "SANTA CRUZ DE CHUCA"
            ],
            [
                "id"=> "131008",
                "province_id"=> "131000",
                "name"=> "SITABAMBA"
            ],
            [
                "id"=> "131101",
                "province_id"=> "131100",
                "name"=> "CASCAS"
            ],
            [
                "id"=> "131102",
                "province_id"=> "131100",
                "name"=> "LUCMA"
            ],
            [
                "id"=> "131103",
                "province_id"=> "131100",
                "name"=> "MARMOT"
            ],
            [
                "id"=> "131104",
                "province_id"=> "131100",
                "name"=> "SAYAPULLO"
            ],
            [
                "id"=> "131201",
                "province_id"=> "131200",
                "name"=> "VIRU"
            ],
            [
                "id"=> "131202",
                "province_id"=> "131200",
                "name"=> "CHAO"
            ],
            [
                "id"=> "131203",
                "province_id"=> "131200",
                "name"=> "GUADALUPITO"
            ],
            [
                "id"=> "140101",
                "province_id"=> "140100",
                "name"=> "CHICLAYO"
            ],
            [
                "id"=> "140102",
                "province_id"=> "140100",
                "name"=> "CHONGOYAPE"
            ],
            [
                "id"=> "140103",
                "province_id"=> "140100",
                "name"=> "ETEN"
            ],
            [
                "id"=> "140104",
                "province_id"=> "140100",
                "name"=> "ETEN PUERTO"
            ],
            [
                "id"=> "140105",
                "province_id"=> "140100",
                "name"=> "JOSE LEONARDO ORTIZ"
            ],
            [
                "id"=> "140106",
                "province_id"=> "140100",
                "name"=> "LA VICTORIA"
            ],
            [
                "id"=> "140107",
                "province_id"=> "140100",
                "name"=> "LAGUNAS"
            ],
            [
                "id"=> "140108",
                "province_id"=> "140100",
                "name"=> "MONSEFU"
            ],
            [
                "id"=> "140109",
                "province_id"=> "140100",
                "name"=> "NUEVA ARICA"
            ],
            [
                "id"=> "140110",
                "province_id"=> "140100",
                "name"=> "OYOTUN"
            ],
            [
                "id"=> "140111",
                "province_id"=> "140100",
                "name"=> "PICSI"
            ],
            [
                "id"=> "140112",
                "province_id"=> "140100",
                "name"=> "PIMENTEL"
            ],
            [
                "id"=> "140113",
                "province_id"=> "140100",
                "name"=> "REQUE"
            ],
            [
                "id"=> "140114",
                "province_id"=> "140100",
                "name"=> "SANTA ROSA"
            ],
            [
                "id"=> "140115",
                "province_id"=> "140100",
                "name"=> "SAÑA"
            ],
            [
                "id"=> "140116",
                "province_id"=> "140100",
                "name"=> "CAYALTI"
            ],
            [
                "id"=> "140117",
                "province_id"=> "140100",
                "name"=> "PATAPO"
            ],
            [
                "id"=> "140118",
                "province_id"=> "140100",
                "name"=> "POMALCA"
            ],
            [
                "id"=> "140119",
                "province_id"=> "140100",
                "name"=> "PUCALA"
            ],
            [
                "id"=> "140120",
                "province_id"=> "140100",
                "name"=> "TUMAN"
            ],
            [
                "id"=> "140201",
                "province_id"=> "140200",
                "name"=> "FERREÑAFE"
            ],
            [
                "id"=> "140202",
                "province_id"=> "140200",
                "name"=> "CAÑARIS"
            ],
            [
                "id"=> "140203",
                "province_id"=> "140200",
                "name"=> "INCAHUASI"
            ],
            [
                "id"=> "140204",
                "province_id"=> "140200",
                "name"=> "MANUEL ANTONIO MESONES MURO"
            ],
            [
                "id"=> "140205",
                "province_id"=> "140200",
                "name"=> "PITIPO"
            ],
            [
                "id"=> "140206",
                "province_id"=> "140200",
                "name"=> "PUEBLO NUEVO"
            ],
            [
                "id"=> "140301",
                "province_id"=> "140300",
                "name"=> "LAMBAYEQUE"
            ],
            [
                "id"=> "140302",
                "province_id"=> "140300",
                "name"=> "CHOCHOPE"
            ],
            [
                "id"=> "140303",
                "province_id"=> "140300",
                "name"=> "ILLIMO"
            ],
            [
                "id"=> "140304",
                "province_id"=> "140300",
                "name"=> "JAYANCA"
            ],
            [
                "id"=> "140305",
                "province_id"=> "140300",
                "name"=> "MOCHUMI"
            ],
            [
                "id"=> "140306",
                "province_id"=> "140300",
                "name"=> "MORROPE"
            ],
            [
                "id"=> "140307",
                "province_id"=> "140300",
                "name"=> "MOTUPE"
            ],
            [
                "id"=> "140308",
                "province_id"=> "140300",
                "name"=> "OLMOS"
            ],
            [
                "id"=> "140309",
                "province_id"=> "140300",
                "name"=> "PACORA"
            ],
            [
                "id"=> "140310",
                "province_id"=> "140300",
                "name"=> "SALAS"
            ],
            [
                "id"=> "140311",
                "province_id"=> "140300",
                "name"=> "SAN JOSE"
            ],
            [
                "id"=> "140312",
                "province_id"=> "140300",
                "name"=> "TUCUME"
            ],
            [
                "id"=> "150101",
                "province_id"=> "150100",
                "name"=> "LIMA"
            ],
            [
                "id"=> "150102",
                "province_id"=> "150100",
                "name"=> "ANCON"
            ],
            [
                "id"=> "150103",
                "province_id"=> "150100",
                "name"=> "ATE"
            ],
            [
                "id"=> "150104",
                "province_id"=> "150100",
                "name"=> "BARRANCO"
            ],
            [
                "id"=> "150105",
                "province_id"=> "150100",
                "name"=> "BREÑA"
            ],
            [
                "id"=> "150106",
                "province_id"=> "150100",
                "name"=> "CARABAYLLO"
            ],
            [
                "id"=> "150107",
                "province_id"=> "150100",
                "name"=> "CHACLACAYO"
            ],
            [
                "id"=> "150108",
                "province_id"=> "150100",
                "name"=> "CHORRILLOS"
            ],
            [
                "id"=> "150109",
                "province_id"=> "150100",
                "name"=> "CIENEGUILLA"
            ],
            [
                "id"=> "150110",
                "province_id"=> "150100",
                "name"=> "COMAS"
            ],
            [
                "id"=> "150111",
                "province_id"=> "150100",
                "name"=> "EL AGUSTINO"
            ],
            [
                "id"=> "150112",
                "province_id"=> "150100",
                "name"=> "INDEPENDENCIA"
            ],
            [
                "id"=> "150113",
                "province_id"=> "150100",
                "name"=> "JESUS MARIA"
            ],
            [
                "id"=> "150114",
                "province_id"=> "150100",
                "name"=> "LA MOLINA"
            ],
            [
                "id"=> "150115",
                "province_id"=> "150100",
                "name"=> "LA VICTORIA"
            ],
            [
                "id"=> "150116",
                "province_id"=> "150100",
                "name"=> "LINCE"
            ],
            [
                "id"=> "150117",
                "province_id"=> "150100",
                "name"=> "LOS OLIVOS"
            ],
            [
                "id"=> "150118",
                "province_id"=> "150100",
                "name"=> "LURIGANCHO"
            ],
            [
                "id"=> "150119",
                "province_id"=> "150100",
                "name"=> "LURIN"
            ],
            [
                "id"=> "150120",
                "province_id"=> "150100",
                "name"=> "MAGDALENA DEL MAR"
            ],
            [
                "id"=> "150121",
                "province_id"=> "150100",
                "name"=> "PUEBLO LIBRE"
            ],
            [
                "id"=> "150122",
                "province_id"=> "150100",
                "name"=> "MIRAFLORES"
            ],
            [
                "id"=> "150123",
                "province_id"=> "150100",
                "name"=> "PACHACAMAC"
            ],
            [
                "id"=> "150124",
                "province_id"=> "150100",
                "name"=> "PUCUSANA"
            ],
            [
                "id"=> "150125",
                "province_id"=> "150100",
                "name"=> "PUENTE PIEDRA"
            ],
            [
                "id"=> "150126",
                "province_id"=> "150100",
                "name"=> "PUNTA HERMOSA"
            ],
            [
                "id"=> "150127",
                "province_id"=> "150100",
                "name"=> "PUNTA NEGRA"
            ],
            [
                "id"=> "150128",
                "province_id"=> "150100",
                "name"=> "RIMAC"
            ],
            [
                "id"=> "150129",
                "province_id"=> "150100",
                "name"=> "SAN BARTOLO"
            ],
            [
                "id"=> "150130",
                "province_id"=> "150100",
                "name"=> "SAN BORJA"
            ],
            [
                "id"=> "150131",
                "province_id"=> "150100",
                "name"=> "SAN ISIDRO"
            ],
            [
                "id"=> "150132",
                "province_id"=> "150100",
                "name"=> "SAN JUAN DE LURIGANCHO"
            ],
            [
                "id"=> "150133",
                "province_id"=> "150100",
                "name"=> "SAN JUAN DE MIRAFLORES"
            ],
            [
                "id"=> "150134",
                "province_id"=> "150100",
                "name"=> "SAN LUIS"
            ],
            [
                "id"=> "150135",
                "province_id"=> "150100",
                "name"=> "SAN MARTIN DE PORRES"
            ],
            [
                "id"=> "150136",
                "province_id"=> "150100",
                "name"=> "SAN MIGUEL"
            ],
            [
                "id"=> "150137",
                "province_id"=> "150100",
                "name"=> "SANTA ANITA"
            ],
            [
                "id"=> "150138",
                "province_id"=> "150100",
                "name"=> "SANTA MARIA DEL MAR"
            ],
            [
                "id"=> "150139",
                "province_id"=> "150100",
                "name"=> "SANTA ROSA"
            ],
            [
                "id"=> "150140",
                "province_id"=> "150100",
                "name"=> "SANTIAGO DE SURCO"
            ],
            [
                "id"=> "150141",
                "province_id"=> "150100",
                "name"=> "SURQUILLO"
            ],
            [
                "id"=> "150142",
                "province_id"=> "150100",
                "name"=> "VILLA EL SALVADOR"
            ],
            [
                "id"=> "150143",
                "province_id"=> "150100",
                "name"=> "VILLA MARIA DEL TRIUNFO"
            ],
            [
                "id"=> "150201",
                "province_id"=> "150200",
                "name"=> "BARRANCA"
            ],
            [
                "id"=> "150202",
                "province_id"=> "150200",
                "name"=> "PARAMONGA"
            ],
            [
                "id"=> "150203",
                "province_id"=> "150200",
                "name"=> "PATIVILCA"
            ],
            [
                "id"=> "150204",
                "province_id"=> "150200",
                "name"=> "SUPE"
            ],
            [
                "id"=> "150205",
                "province_id"=> "150200",
                "name"=> "SUPE PUERTO"
            ],
            [
                "id"=> "150301",
                "province_id"=> "150300",
                "name"=> "CAJATAMBO"
            ],
            [
                "id"=> "150302",
                "province_id"=> "150300",
                "name"=> "COPA"
            ],
            [
                "id"=> "150303",
                "province_id"=> "150300",
                "name"=> "GORGOR"
            ],
            [
                "id"=> "150304",
                "province_id"=> "150300",
                "name"=> "HUANCAPON"
            ],
            [
                "id"=> "150305",
                "province_id"=> "150300",
                "name"=> "MANAS"
            ],
            [
                "id"=> "150401",
                "province_id"=> "150400",
                "name"=> "CANTA"
            ],
            [
                "id"=> "150402",
                "province_id"=> "150400",
                "name"=> "ARAHUAY"
            ],
            [
                "id"=> "150403",
                "province_id"=> "150400",
                "name"=> "HUAMANTANGA"
            ],
            [
                "id"=> "150404",
                "province_id"=> "150400",
                "name"=> "HUAROS"
            ],
            [
                "id"=> "150405",
                "province_id"=> "150400",
                "name"=> "LACHAQUI"
            ],
            [
                "id"=> "150406",
                "province_id"=> "150400",
                "name"=> "SAN BUENAVENTURA"
            ],
            [
                "id"=> "150407",
                "province_id"=> "150400",
                "name"=> "SANTA ROSA DE QUIVES"
            ],
            [
                "id"=> "150501",
                "province_id"=> "150500",
                "name"=> "SAN VICENTE DE CAÑETE"
            ],
            [
                "id"=> "150502",
                "province_id"=> "150500",
                "name"=> "ASIA"
            ],
            [
                "id"=> "150503",
                "province_id"=> "150500",
                "name"=> "CALANGO"
            ],
            [
                "id"=> "150504",
                "province_id"=> "150500",
                "name"=> "CERRO AZUL"
            ],
            [
                "id"=> "150505",
                "province_id"=> "150500",
                "name"=> "CHILCA"
            ],
            [
                "id"=> "150506",
                "province_id"=> "150500",
                "name"=> "COAYLLO"
            ],
            [
                "id"=> "150507",
                "province_id"=> "150500",
                "name"=> "IMPERIAL"
            ],
            [
                "id"=> "150508",
                "province_id"=> "150500",
                "name"=> "LUNAHUANA"
            ],
            [
                "id"=> "150509",
                "province_id"=> "150500",
                "name"=> "MALA"
            ],
            [
                "id"=> "150510",
                "province_id"=> "150500",
                "name"=> "NUEVO IMPERIAL"
            ],
            [
                "id"=> "150511",
                "province_id"=> "150500",
                "name"=> "PACARAN"
            ],
            [
                "id"=> "150512",
                "province_id"=> "150500",
                "name"=> "QUILMANA"
            ],
            [
                "id"=> "150513",
                "province_id"=> "150500",
                "name"=> "SAN ANTONIO"
            ],
            [
                "id"=> "150514",
                "province_id"=> "150500",
                "name"=> "SAN LUIS"
            ],
            [
                "id"=> "150515",
                "province_id"=> "150500",
                "name"=> "SANTA CRUZ DE FLORES"
            ],
            [
                "id"=> "150516",
                "province_id"=> "150500",
                "name"=> "ZUÑIGA"
            ],
            [
                "id"=> "150601",
                "province_id"=> "150600",
                "name"=> "HUARAL"
            ],
            [
                "id"=> "150602",
                "province_id"=> "150600",
                "name"=> "ATAVILLOS ALTO"
            ],
            [
                "id"=> "150603",
                "province_id"=> "150600",
                "name"=> "ATAVILLOS BAJO"
            ],
            [
                "id"=> "150604",
                "province_id"=> "150600",
                "name"=> "AUCALLAMA"
            ],
            [
                "id"=> "150605",
                "province_id"=> "150600",
                "name"=> "CHANCAY"
            ],
            [
                "id"=> "150606",
                "province_id"=> "150600",
                "name"=> "IHUARI"
            ],
            [
                "id"=> "150607",
                "province_id"=> "150600",
                "name"=> "LAMPIAN"
            ],
            [
                "id"=> "150608",
                "province_id"=> "150600",
                "name"=> "PACARAOS"
            ],
            [
                "id"=> "150609",
                "province_id"=> "150600",
                "name"=> "SAN MIGUEL DE ACOS"
            ],
            [
                "id"=> "150610",
                "province_id"=> "150600",
                "name"=> "SANTA CRUZ DE ANDAMARCA"
            ],
            [
                "id"=> "150611",
                "province_id"=> "150600",
                "name"=> "SUMBILCA"
            ],
            [
                "id"=> "150612",
                "province_id"=> "150600",
                "name"=> "VEINTISIETE DE NOVIEMBRE"
            ],
            [
                "id"=> "150701",
                "province_id"=> "150700",
                "name"=> "MATUCANA"
            ],
            [
                "id"=> "150702",
                "province_id"=> "150700",
                "name"=> "ANTIOQUIA"
            ],
            [
                "id"=> "150703",
                "province_id"=> "150700",
                "name"=> "CALLAHUANCA"
            ],
            [
                "id"=> "150704",
                "province_id"=> "150700",
                "name"=> "CARAMPOMA"
            ],
            [
                "id"=> "150705",
                "province_id"=> "150700",
                "name"=> "CHICLA"
            ],
            [
                "id"=> "150706",
                "province_id"=> "150700",
                "name"=> "CUENCA"
            ],
            [
                "id"=> "150707",
                "province_id"=> "150700",
                "name"=> "HUACHUPAMPA"
            ],
            [
                "id"=> "150708",
                "province_id"=> "150700",
                "name"=> "HUANZA"
            ],
            [
                "id"=> "150709",
                "province_id"=> "150700",
                "name"=> "HUAROCHIRI"
            ],
            [
                "id"=> "150710",
                "province_id"=> "150700",
                "name"=> "LAHUAYTAMBO"
            ],
            [
                "id"=> "150711",
                "province_id"=> "150700",
                "name"=> "LANGA"
            ],
            [
                "id"=> "150712",
                "province_id"=> "150700",
                "name"=> "LARAOS"
            ],
            [
                "id"=> "150713",
                "province_id"=> "150700",
                "name"=> "MARIATANA"
            ],
            [
                "id"=> "150714",
                "province_id"=> "150700",
                "name"=> "RICARDO PALMA"
            ],
            [
                "id"=> "150715",
                "province_id"=> "150700",
                "name"=> "SAN ANDRES DE TUPICOCHA"
            ],
            [
                "id"=> "150716",
                "province_id"=> "150700",
                "name"=> "SAN ANTONIO"
            ],
            [
                "id"=> "150717",
                "province_id"=> "150700",
                "name"=> "SAN BARTOLOME"
            ],
            [
                "id"=> "150718",
                "province_id"=> "150700",
                "name"=> "SAN DAMIAN"
            ],
            [
                "id"=> "150719",
                "province_id"=> "150700",
                "name"=> "SAN JUAN DE IRIS"
            ],
            [
                "id"=> "150720",
                "province_id"=> "150700",
                "name"=> "SAN JUAN DE TANTARANCHE"
            ],
            [
                "id"=> "150721",
                "province_id"=> "150700",
                "name"=> "SAN LORENZO DE QUINTI"
            ],
            [
                "id"=> "150722",
                "province_id"=> "150700",
                "name"=> "SAN MATEO"
            ],
            [
                "id"=> "150723",
                "province_id"=> "150700",
                "name"=> "SAN MATEO DE OTAO"
            ],
            [
                "id"=> "150724",
                "province_id"=> "150700",
                "name"=> "SAN PEDRO DE CASTA"
            ],
            [
                "id"=> "150725",
                "province_id"=> "150700",
                "name"=> "SAN PEDRO DE HUANCAYRE"
            ],
            [
                "id"=> "150726",
                "province_id"=> "150700",
                "name"=> "SANGALLAYA"
            ],
            [
                "id"=> "150727",
                "province_id"=> "150700",
                "name"=> "SANTA CRUZ DE COCACHACRA"
            ],
            [
                "id"=> "150728",
                "province_id"=> "150700",
                "name"=> "SANTA EULALIA"
            ],
            [
                "id"=> "150729",
                "province_id"=> "150700",
                "name"=> "SANTIAGO DE ANCHUCAYA"
            ],
            [
                "id"=> "150730",
                "province_id"=> "150700",
                "name"=> "SANTIAGO DE TUNA"
            ],
            [
                "id"=> "150731",
                "province_id"=> "150700",
                "name"=> "SANTO DOMINGO DE LOS OLLEROS"
            ],
            [
                "id"=> "150732",
                "province_id"=> "150700",
                "name"=> "SURCO"
            ],
            [
                "id"=> "150801",
                "province_id"=> "150800",
                "name"=> "HUACHO"
            ],
            [
                "id"=> "150802",
                "province_id"=> "150800",
                "name"=> "AMBAR"
            ],
            [
                "id"=> "150803",
                "province_id"=> "150800",
                "name"=> "CALETA DE CARQUIN"
            ],
            [
                "id"=> "150804",
                "province_id"=> "150800",
                "name"=> "CHECRAS"
            ],
            [
                "id"=> "150805",
                "province_id"=> "150800",
                "name"=> "HUALMAY"
            ],
            [
                "id"=> "150806",
                "province_id"=> "150800",
                "name"=> "HUAURA"
            ],
            [
                "id"=> "150807",
                "province_id"=> "150800",
                "name"=> "LEONCIO PRADO"
            ],
            [
                "id"=> "150808",
                "province_id"=> "150800",
                "name"=> "PACCHO"
            ],
            [
                "id"=> "150809",
                "province_id"=> "150800",
                "name"=> "SANTA LEONOR"
            ],
            [
                "id"=> "150810",
                "province_id"=> "150800",
                "name"=> "SANTA MARIA"
            ],
            [
                "id"=> "150811",
                "province_id"=> "150800",
                "name"=> "SAYAN"
            ],
            [
                "id"=> "150812",
                "province_id"=> "150800",
                "name"=> "VEGUETA"
            ],
            [
                "id"=> "150901",
                "province_id"=> "150900",
                "name"=> "OYON"
            ],
            [
                "id"=> "150902",
                "province_id"=> "150900",
                "name"=> "ANDAJES"
            ],
            [
                "id"=> "150903",
                "province_id"=> "150900",
                "name"=> "CAUJUL"
            ],
            [
                "id"=> "150904",
                "province_id"=> "150900",
                "name"=> "COCHAMARCA"
            ],
            [
                "id"=> "150905",
                "province_id"=> "150900",
                "name"=> "NAVAN"
            ],
            [
                "id"=> "150906",
                "province_id"=> "150900",
                "name"=> "PACHANGARA"
            ],
            [
                "id"=> "151001",
                "province_id"=> "151000",
                "name"=> "YAUYOS"
            ],
            [
                "id"=> "151002",
                "province_id"=> "151000",
                "name"=> "ALIS"
            ],
            [
                "id"=> "151003",
                "province_id"=> "151000",
                "name"=> "ALLAUCA"
            ],
            [
                "id"=> "151004",
                "province_id"=> "151000",
                "name"=> "AYAVIRI"
            ],
            [
                "id"=> "151005",
                "province_id"=> "151000",
                "name"=> "AZANGARO"
            ],
            [
                "id"=> "151006",
                "province_id"=> "151000",
                "name"=> "CACRA"
            ],
            [
                "id"=> "151007",
                "province_id"=> "151000",
                "name"=> "CARANIA"
            ],
            [
                "id"=> "151008",
                "province_id"=> "151000",
                "name"=> "CATAHUASI"
            ],
            [
                "id"=> "151009",
                "province_id"=> "151000",
                "name"=> "CHOCOS"
            ],
            [
                "id"=> "151010",
                "province_id"=> "151000",
                "name"=> "COCHAS"
            ],
            [
                "id"=> "151011",
                "province_id"=> "151000",
                "name"=> "COLONIA"
            ],
            [
                "id"=> "151012",
                "province_id"=> "151000",
                "name"=> "HONGOS"
            ],
            [
                "id"=> "151013",
                "province_id"=> "151000",
                "name"=> "HUAMPARA"
            ],
            [
                "id"=> "151014",
                "province_id"=> "151000",
                "name"=> "HUANCAYA"
            ],
            [
                "id"=> "151015",
                "province_id"=> "151000",
                "name"=> "HUANGASCAR"
            ],
            [
                "id"=> "151016",
                "province_id"=> "151000",
                "name"=> "HUANTAN"
            ],
            [
                "id"=> "151017",
                "province_id"=> "151000",
                "name"=> "HUAÑEC"
            ],
            [
                "id"=> "151018",
                "province_id"=> "151000",
                "name"=> "LARAOS"
            ],
            [
                "id"=> "151019",
                "province_id"=> "151000",
                "name"=> "LINCHA"
            ],
            [
                "id"=> "151020",
                "province_id"=> "151000",
                "name"=> "MADEAN"
            ],
            [
                "id"=> "151021",
                "province_id"=> "151000",
                "name"=> "MIRAFLORES"
            ],
            [
                "id"=> "151022",
                "province_id"=> "151000",
                "name"=> "OMAS"
            ],
            [
                "id"=> "151023",
                "province_id"=> "151000",
                "name"=> "PUTINZA"
            ],
            [
                "id"=> "151024",
                "province_id"=> "151000",
                "name"=> "QUINCHES"
            ],
            [
                "id"=> "151025",
                "province_id"=> "151000",
                "name"=> "QUINOCAY"
            ],
            [
                "id"=> "151026",
                "province_id"=> "151000",
                "name"=> "SAN JOAQUIN"
            ],
            [
                "id"=> "151027",
                "province_id"=> "151000",
                "name"=> "SAN PEDRO DE PILAS"
            ],
            [
                "id"=> "151028",
                "province_id"=> "151000",
                "name"=> "TANTA"
            ],
            [
                "id"=> "151029",
                "province_id"=> "151000",
                "name"=> "TAURIPAMPA"
            ],
            [
                "id"=> "151030",
                "province_id"=> "151000",
                "name"=> "TOMAS"
            ],
            [
                "id"=> "151031",
                "province_id"=> "151000",
                "name"=> "TUPE"
            ],
            [
                "id"=> "151032",
                "province_id"=> "151000",
                "name"=> "VIÑAC"
            ],
            [
                "id"=> "151033",
                "province_id"=> "151000",
                "name"=> "VITIS"
            ],
            [
                "id"=> "160101",
                "province_id"=> "160100",
                "name"=> "IQUITOS"
            ],
            [
                "id"=> "160102",
                "province_id"=> "160100",
                "name"=> "ALTO NANAY"
            ],
            [
                "id"=> "160103",
                "province_id"=> "160100",
                "name"=> "FERNANDO LORES"
            ],
            [
                "id"=> "160104",
                "province_id"=> "160100",
                "name"=> "INDIANA"
            ],
            [
                "id"=> "160105",
                "province_id"=> "160100",
                "name"=> "LAS AMAZONAS"
            ],
            [
                "id"=> "160106",
                "province_id"=> "160100",
                "name"=> "MAZAN"
            ],
            [
                "id"=> "160107",
                "province_id"=> "160100",
                "name"=> "NAPO"
            ],
            [
                "id"=> "160108",
                "province_id"=> "160100",
                "name"=> "PUNCHANA"
            ],
            [
                "id"=> "160109",
                "province_id"=> "160100",
                "name"=> "PUTUMAYO"
            ],
            [
                "id"=> "160110",
                "province_id"=> "160100",
                "name"=> "TORRES CAUSANA"
            ],
            [
                "id"=> "160112",
                "province_id"=> "160100",
                "name"=> "BELEN"
            ],
            [
                "id"=> "160113",
                "province_id"=> "160100",
                "name"=> "SAN JUAN BAUTISTA"
            ],
            [
                "id"=> "160114",
                "province_id"=> "160100",
                "name"=> "TENIENTE MANUEL CLAVERO"
            ],
            [
                "id"=> "160201",
                "province_id"=> "160200",
                "name"=> "YURIMAGUAS"
            ],
            [
                "id"=> "160202",
                "province_id"=> "160200",
                "name"=> "BALSAPUERTO"
            ],
            [
                "id"=> "160205",
                "province_id"=> "160200",
                "name"=> "JEBEROS"
            ],
            [
                "id"=> "160206",
                "province_id"=> "160200",
                "name"=> "LAGUNAS"
            ],
            [
                "id"=> "160210",
                "province_id"=> "160200",
                "name"=> "SANTA CRUZ"
            ],
            [
                "id"=> "160211",
                "province_id"=> "160200",
                "name"=> "TENIENTE CESAR LOPEZ ROJAS"
            ],
            [
                "id"=> "160301",
                "province_id"=> "160300",
                "name"=> "NAUTA"
            ],
            [
                "id"=> "160302",
                "province_id"=> "160300",
                "name"=> "PARINARI"
            ],
            [
                "id"=> "160303",
                "province_id"=> "160300",
                "name"=> "TIGRE"
            ],
            [
                "id"=> "160304",
                "province_id"=> "160300",
                "name"=> "TROMPETEROS"
            ],
            [
                "id"=> "160305",
                "province_id"=> "160300",
                "name"=> "URARINAS"
            ],
            [
                "id"=> "160401",
                "province_id"=> "160400",
                "name"=> "RAMON CASTILLA"
            ],
            [
                "id"=> "160402",
                "province_id"=> "160400",
                "name"=> "PEBAS"
            ],
            [
                "id"=> "160403",
                "province_id"=> "160400",
                "name"=> "YAVARI"
            ],
            [
                "id"=> "160404",
                "province_id"=> "160400",
                "name"=> "SAN PABLO"
            ],
            [
                "id"=> "160501",
                "province_id"=> "160500",
                "name"=> "REQUENA"
            ],
            [
                "id"=> "160502",
                "province_id"=> "160500",
                "name"=> "ALTO TAPICHE"
            ],
            [
                "id"=> "160503",
                "province_id"=> "160500",
                "name"=> "CAPELO"
            ],
            [
                "id"=> "160504",
                "province_id"=> "160500",
                "name"=> "EMILIO SAN MARTIN"
            ],
            [
                "id"=> "160505",
                "province_id"=> "160500",
                "name"=> "MAQUIA"
            ],
            [
                "id"=> "160506",
                "province_id"=> "160500",
                "name"=> "PUINAHUA"
            ],
            [
                "id"=> "160507",
                "province_id"=> "160500",
                "name"=> "SAQUENA"
            ],
            [
                "id"=> "160508",
                "province_id"=> "160500",
                "name"=> "SOPLIN"
            ],
            [
                "id"=> "160509",
                "province_id"=> "160500",
                "name"=> "TAPICHE"
            ],
            [
                "id"=> "160510",
                "province_id"=> "160500",
                "name"=> "JENARO HERRERA"
            ],
            [
                "id"=> "160511",
                "province_id"=> "160500",
                "name"=> "YAQUERANA"
            ],
            [
                "id"=> "160601",
                "province_id"=> "160600",
                "name"=> "CONTAMANA"
            ],
            [
                "id"=> "160602",
                "province_id"=> "160600",
                "name"=> "INAHUAYA"
            ],
            [
                "id"=> "160603",
                "province_id"=> "160600",
                "name"=> "PADRE MARQUEZ"
            ],
            [
                "id"=> "160604",
                "province_id"=> "160600",
                "name"=> "PAMPA HERMOSA"
            ],
            [
                "id"=> "160605",
                "province_id"=> "160600",
                "name"=> "SARAYACU"
            ],
            [
                "id"=> "160606",
                "province_id"=> "160600",
                "name"=> "VARGAS GUERRA"
            ],
            [
                "id"=> "160701",
                "province_id"=> "160700",
                "name"=> "BARRANCA"
            ],
            [
                "id"=> "160702",
                "province_id"=> "160700",
                "name"=> "CAHUAPANAS"
            ],
            [
                "id"=> "160703",
                "province_id"=> "160700",
                "name"=> "MANSERICHE"
            ],
            [
                "id"=> "160704",
                "province_id"=> "160700",
                "name"=> "MORONA"
            ],
            [
                "id"=> "160705",
                "province_id"=> "160700",
                "name"=> "PASTAZA"
            ],
            [
                "id"=> "160706",
                "province_id"=> "160700",
                "name"=> "ANDOAS"
            ],
            [
                "id"=> "170101",
                "province_id"=> "170100",
                "name"=> "TAMBOPATA"
            ],
            [
                "id"=> "170102",
                "province_id"=> "170100",
                "name"=> "INAMBARI"
            ],
            [
                "id"=> "170103",
                "province_id"=> "170100",
                "name"=> "LAS PIEDRAS"
            ],
            [
                "id"=> "170104",
                "province_id"=> "170100",
                "name"=> "LABERINTO"
            ],
            [
                "id"=> "170201",
                "province_id"=> "170200",
                "name"=> "MANU"
            ],
            [
                "id"=> "170202",
                "province_id"=> "170200",
                "name"=> "FITZCARRALD"
            ],
            [
                "id"=> "170203",
                "province_id"=> "170200",
                "name"=> "MADRE DE DIOS"
            ],
            [
                "id"=> "170204",
                "province_id"=> "170200",
                "name"=> "HUEPETUHE"
            ],
            [
                "id"=> "170301",
                "province_id"=> "170300",
                "name"=> "IÑAPARI"
            ],
            [
                "id"=> "170302",
                "province_id"=> "170300",
                "name"=> "IBERIA"
            ],
            [
                "id"=> "170303",
                "province_id"=> "170300",
                "name"=> "TAHUAMANU"
            ],
            [
                "id"=> "180101",
                "province_id"=> "180100",
                "name"=> "MOQUEGUA"
            ],
            [
                "id"=> "180102",
                "province_id"=> "180100",
                "name"=> "CARUMAS"
            ],
            [
                "id"=> "180103",
                "province_id"=> "180100",
                "name"=> "CUCHUMBAYA"
            ],
            [
                "id"=> "180104",
                "province_id"=> "180100",
                "name"=> "SAMEGUA"
            ],
            [
                "id"=> "180105",
                "province_id"=> "180100",
                "name"=> "SAN CRISTOBAL"
            ],
            [
                "id"=> "180106",
                "province_id"=> "180100",
                "name"=> "TORATA"
            ],
            [
                "id"=> "180201",
                "province_id"=> "180200",
                "name"=> "OMATE"
            ],
            [
                "id"=> "180202",
                "province_id"=> "180200",
                "name"=> "CHOJATA"
            ],
            [
                "id"=> "180203",
                "province_id"=> "180200",
                "name"=> "COALAQUE"
            ],
            [
                "id"=> "180204",
                "province_id"=> "180200",
                "name"=> "ICHUÑA"
            ],
            [
                "id"=> "180205",
                "province_id"=> "180200",
                "name"=> "LA CAPILLA"
            ],
            [
                "id"=> "180206",
                "province_id"=> "180200",
                "name"=> "LLOQUE"
            ],
            [
                "id"=> "180207",
                "province_id"=> "180200",
                "name"=> "MATALAQUE"
            ],
            [
                "id"=> "180208",
                "province_id"=> "180200",
                "name"=> "PUQUINA"
            ],
            [
                "id"=> "180209",
                "province_id"=> "180200",
                "name"=> "QUINISTAQUILLAS"
            ],
            [
                "id"=> "180210",
                "province_id"=> "180200",
                "name"=> "UBINAS"
            ],
            [
                "id"=> "180211",
                "province_id"=> "180200",
                "name"=> "YUNGA"
            ],
            [
                "id"=> "180301",
                "province_id"=> "180300",
                "name"=> "ILO"
            ],
            [
                "id"=> "180302",
                "province_id"=> "180300",
                "name"=> "EL ALGARROBAL"
            ],
            [
                "id"=> "180303",
                "province_id"=> "180300",
                "name"=> "PACOCHA"
            ],
            [
                "id"=> "190101",
                "province_id"=> "190100",
                "name"=> "CHAUPIMARCA"
            ],
            [
                "id"=> "190102",
                "province_id"=> "190100",
                "name"=> "HUACHON"
            ],
            [
                "id"=> "190103",
                "province_id"=> "190100",
                "name"=> "HUARIACA"
            ],
            [
                "id"=> "190104",
                "province_id"=> "190100",
                "name"=> "HUAYLLAY"
            ],
            [
                "id"=> "190105",
                "province_id"=> "190100",
                "name"=> "NINACACA"
            ],
            [
                "id"=> "190106",
                "province_id"=> "190100",
                "name"=> "PALLANCHACRA"
            ],
            [
                "id"=> "190107",
                "province_id"=> "190100",
                "name"=> "PAUCARTAMBO"
            ],
            [
                "id"=> "190108",
                "province_id"=> "190100",
                "name"=> "SAN FRANCISCO DE ASIS DE YARUSYACAN"
            ],
            [
                "id"=> "190109",
                "province_id"=> "190100",
                "name"=> "SIMON BOLIVAR"
            ],
            [
                "id"=> "190110",
                "province_id"=> "190100",
                "name"=> "TICLACAYAN"
            ],
            [
                "id"=> "190111",
                "province_id"=> "190100",
                "name"=> "TINYAHUARCO"
            ],
            [
                "id"=> "190112",
                "province_id"=> "190100",
                "name"=> "VICCO"
            ],
            [
                "id"=> "190113",
                "province_id"=> "190100",
                "name"=> "YANACANCHA"
            ],
            [
                "id"=> "190201",
                "province_id"=> "190200",
                "name"=> "YANAHUANCA"
            ],
            [
                "id"=> "190202",
                "province_id"=> "190200",
                "name"=> "CHACAYAN"
            ],
            [
                "id"=> "190203",
                "province_id"=> "190200",
                "name"=> "GOYLLARISQUIZGA"
            ],
            [
                "id"=> "190204",
                "province_id"=> "190200",
                "name"=> "PAUCAR"
            ],
            [
                "id"=> "190205",
                "province_id"=> "190200",
                "name"=> "SAN PEDRO DE PILLAO"
            ],
            [
                "id"=> "190206",
                "province_id"=> "190200",
                "name"=> "SANTA ANA DE TUSI"
            ],
            [
                "id"=> "190207",
                "province_id"=> "190200",
                "name"=> "TAPUC"
            ],
            [
                "id"=> "190208",
                "province_id"=> "190200",
                "name"=> "VILCABAMBA"
            ],
            [
                "id"=> "190301",
                "province_id"=> "190300",
                "name"=> "OXAPAMPA"
            ],
            [
                "id"=> "190302",
                "province_id"=> "190300",
                "name"=> "CHONTABAMBA"
            ],
            [
                "id"=> "190303",
                "province_id"=> "190300",
                "name"=> "HUANCABAMBA"
            ],
            [
                "id"=> "190304",
                "province_id"=> "190300",
                "name"=> "PALCAZU"
            ],
            [
                "id"=> "190305",
                "province_id"=> "190300",
                "name"=> "POZUZO"
            ],
            [
                "id"=> "190306",
                "province_id"=> "190300",
                "name"=> "PUERTO BERMUDEZ"
            ],
            [
                "id"=> "190307",
                "province_id"=> "190300",
                "name"=> "VILLA RICA"
            ],
            [
                "id"=> "190308",
                "province_id"=> "190300",
                "name"=> "CONSTITUCION"
            ],
            [
                "id"=> "200101",
                "province_id"=> "200100",
                "name"=> "PIURA"
            ],
            [
                "id"=> "200104",
                "province_id"=> "200100",
                "name"=> "CASTILLA"
            ],
            [
                "id"=> "200105",
                "province_id"=> "200100",
                "name"=> "CATACAOS"
            ],
            [
                "id"=> "200107",
                "province_id"=> "200100",
                "name"=> "CURA MORI"
            ],
            [
                "id"=> "200108",
                "province_id"=> "200100",
                "name"=> "EL TALLAN"
            ],
            [
                "id"=> "200109",
                "province_id"=> "200100",
                "name"=> "LA ARENA"
            ],
            [
                "id"=> "200110",
                "province_id"=> "200100",
                "name"=> "LA UNION"
            ],
            [
                "id"=> "200111",
                "province_id"=> "200100",
                "name"=> "LAS LOMAS"
            ],
            [
                "id"=> "200114",
                "province_id"=> "200100",
                "name"=> "TAMBO GRANDE"
            ],
            [
                "id"=> "200115",
                "province_id"=> "200100",
                "name"=> "VEINTISEIS DE OCTUBRE"
            ],
            [
                "id"=> "200201",
                "province_id"=> "200200",
                "name"=> "AYABACA"
            ],
            [
                "id"=> "200202",
                "province_id"=> "200200",
                "name"=> "FRIAS"
            ],
            [
                "id"=> "200203",
                "province_id"=> "200200",
                "name"=> "JILILI"
            ],
            [
                "id"=> "200204",
                "province_id"=> "200200",
                "name"=> "LAGUNAS"
            ],
            [
                "id"=> "200205",
                "province_id"=> "200200",
                "name"=> "MONTERO"
            ],
            [
                "id"=> "200206",
                "province_id"=> "200200",
                "name"=> "PACAIPAMPA"
            ],
            [
                "id"=> "200207",
                "province_id"=> "200200",
                "name"=> "PAIMAS"
            ],
            [
                "id"=> "200208",
                "province_id"=> "200200",
                "name"=> "SAPILLICA"
            ],
            [
                "id"=> "200209",
                "province_id"=> "200200",
                "name"=> "SICCHEZ"
            ],
            [
                "id"=> "200210",
                "province_id"=> "200200",
                "name"=> "SUYO"
            ],
            [
                "id"=> "200301",
                "province_id"=> "200300",
                "name"=> "HUANCABAMBA"
            ],
            [
                "id"=> "200302",
                "province_id"=> "200300",
                "name"=> "CANCHAQUE"
            ],
            [
                "id"=> "200303",
                "province_id"=> "200300",
                "name"=> "EL CARMEN DE LA FRONTERA"
            ],
            [
                "id"=> "200304",
                "province_id"=> "200300",
                "name"=> "HUARMACA"
            ],
            [
                "id"=> "200305",
                "province_id"=> "200300",
                "name"=> "LALAQUIZ"
            ],
            [
                "id"=> "200306",
                "province_id"=> "200300",
                "name"=> "SAN MIGUEL DE EL FAIQUE"
            ],
            [
                "id"=> "200307",
                "province_id"=> "200300",
                "name"=> "SONDOR"
            ],
            [
                "id"=> "200308",
                "province_id"=> "200300",
                "name"=> "SONDORILLO"
            ],
            [
                "id"=> "200401",
                "province_id"=> "200400",
                "name"=> "CHULUCANAS"
            ],
            [
                "id"=> "200402",
                "province_id"=> "200400",
                "name"=> "BUENOS AIRES"
            ],
            [
                "id"=> "200403",
                "province_id"=> "200400",
                "name"=> "CHALACO"
            ],
            [
                "id"=> "200404",
                "province_id"=> "200400",
                "name"=> "LA MATANZA"
            ],
            [
                "id"=> "200405",
                "province_id"=> "200400",
                "name"=> "MORROPON"
            ],
            [
                "id"=> "200406",
                "province_id"=> "200400",
                "name"=> "SALITRAL"
            ],
            [
                "id"=> "200407",
                "province_id"=> "200400",
                "name"=> "SAN JUAN DE BIGOTE"
            ],
            [
                "id"=> "200408",
                "province_id"=> "200400",
                "name"=> "SANTA CATALINA DE MOSSA"
            ],
            [
                "id"=> "200409",
                "province_id"=> "200400",
                "name"=> "SANTO DOMINGO"
            ],
            [
                "id"=> "200410",
                "province_id"=> "200400",
                "name"=> "YAMANGO"
            ],
            [
                "id"=> "200501",
                "province_id"=> "200500",
                "name"=> "PAITA"
            ],
            [
                "id"=> "200502",
                "province_id"=> "200500",
                "name"=> "AMOTAPE"
            ],
            [
                "id"=> "200503",
                "province_id"=> "200500",
                "name"=> "ARENAL"
            ],
            [
                "id"=> "200504",
                "province_id"=> "200500",
                "name"=> "COLAN"
            ],
            [
                "id"=> "200505",
                "province_id"=> "200500",
                "name"=> "LA HUACA"
            ],
            [
                "id"=> "200506",
                "province_id"=> "200500",
                "name"=> "TAMARINDO"
            ],
            [
                "id"=> "200507",
                "province_id"=> "200500",
                "name"=> "VICHAYAL"
            ],
            [
                "id"=> "200601",
                "province_id"=> "200600",
                "name"=> "SULLANA"
            ],
            [
                "id"=> "200602",
                "province_id"=> "200600",
                "name"=> "BELLAVISTA"
            ],
            [
                "id"=> "200603",
                "province_id"=> "200600",
                "name"=> "IGNACIO ESCUDERO"
            ],
            [
                "id"=> "200604",
                "province_id"=> "200600",
                "name"=> "LANCONES"
            ],
            [
                "id"=> "200605",
                "province_id"=> "200600",
                "name"=> "MARCAVELICA"
            ],
            [
                "id"=> "200606",
                "province_id"=> "200600",
                "name"=> "MIGUEL CHECA"
            ],
            [
                "id"=> "200607",
                "province_id"=> "200600",
                "name"=> "QUERECOTILLO"
            ],
            [
                "id"=> "200608",
                "province_id"=> "200600",
                "name"=> "SALITRAL"
            ],
            [
                "id"=> "200701",
                "province_id"=> "200700",
                "name"=> "PARIÑAS"
            ],
            [
                "id"=> "200702",
                "province_id"=> "200700",
                "name"=> "EL ALTO"
            ],
            [
                "id"=> "200703",
                "province_id"=> "200700",
                "name"=> "LA BREA"
            ],
            [
                "id"=> "200704",
                "province_id"=> "200700",
                "name"=> "LOBITOS"
            ],
            [
                "id"=> "200705",
                "province_id"=> "200700",
                "name"=> "LOS ORGANOS"
            ],
            [
                "id"=> "200706",
                "province_id"=> "200700",
                "name"=> "MANCORA"
            ],
            [
                "id"=> "200801",
                "province_id"=> "200800",
                "name"=> "SECHURA"
            ],
            [
                "id"=> "200802",
                "province_id"=> "200800",
                "name"=> "BELLAVISTA DE LA UNION"
            ],
            [
                "id"=> "200803",
                "province_id"=> "200800",
                "name"=> "BERNAL"
            ],
            [
                "id"=> "200804",
                "province_id"=> "200800",
                "name"=> "CRISTO NOS VALGA"
            ],
            [
                "id"=> "200805",
                "province_id"=> "200800",
                "name"=> "VICE"
            ],
            [
                "id"=> "200806",
                "province_id"=> "200800",
                "name"=> "RINCONADA LLICUAR"
            ],
            [
                "id"=> "210101",
                "province_id"=> "210100",
                "name"=> "PUNO"
            ],
            [
                "id"=> "210102",
                "province_id"=> "210100",
                "name"=> "ACORA"
            ],
            [
                "id"=> "210103",
                "province_id"=> "210100",
                "name"=> "AMANTANI"
            ],
            [
                "id"=> "210104",
                "province_id"=> "210100",
                "name"=> "ATUNCOLLA"
            ],
            [
                "id"=> "210105",
                "province_id"=> "210100",
                "name"=> "CAPACHICA"
            ],
            [
                "id"=> "210106",
                "province_id"=> "210100",
                "name"=> "CHUCUITO"
            ],
            [
                "id"=> "210107",
                "province_id"=> "210100",
                "name"=> "COATA"
            ],
            [
                "id"=> "210108",
                "province_id"=> "210100",
                "name"=> "HUATA"
            ],
            [
                "id"=> "210109",
                "province_id"=> "210100",
                "name"=> "MAÑAZO"
            ],
            [
                "id"=> "210110",
                "province_id"=> "210100",
                "name"=> "PAUCARCOLLA"
            ],
            [
                "id"=> "210111",
                "province_id"=> "210100",
                "name"=> "PICHACANI"
            ],
            [
                "id"=> "210112",
                "province_id"=> "210100",
                "name"=> "PLATERIA"
            ],
            [
                "id"=> "210113",
                "province_id"=> "210100",
                "name"=> "SAN ANTONIO"
            ],
            [
                "id"=> "210114",
                "province_id"=> "210100",
                "name"=> "TIQUILLACA"
            ],
            [
                "id"=> "210115",
                "province_id"=> "210100",
                "name"=> "VILQUE"
            ],
            [
                "id"=> "210201",
                "province_id"=> "210200",
                "name"=> "AZANGARO"
            ],
            [
                "id"=> "210202",
                "province_id"=> "210200",
                "name"=> "ACHAYA"
            ],
            [
                "id"=> "210203",
                "province_id"=> "210200",
                "name"=> "ARAPA"
            ],
            [
                "id"=> "210204",
                "province_id"=> "210200",
                "name"=> "ASILLO"
            ],
            [
                "id"=> "210205",
                "province_id"=> "210200",
                "name"=> "CAMINACA"
            ],
            [
                "id"=> "210206",
                "province_id"=> "210200",
                "name"=> "CHUPA"
            ],
            [
                "id"=> "210207",
                "province_id"=> "210200",
                "name"=> "JOSE DOMINGO CHOQUEHUANCA"
            ],
            [
                "id"=> "210208",
                "province_id"=> "210200",
                "name"=> "MUÑANI"
            ],
            [
                "id"=> "210209",
                "province_id"=> "210200",
                "name"=> "POTONI"
            ],
            [
                "id"=> "210210",
                "province_id"=> "210200",
                "name"=> "SAMAN"
            ],
            [
                "id"=> "210211",
                "province_id"=> "210200",
                "name"=> "SAN ANTON"
            ],
            [
                "id"=> "210212",
                "province_id"=> "210200",
                "name"=> "SAN JOSE"
            ],
            [
                "id"=> "210213",
                "province_id"=> "210200",
                "name"=> "SAN JUAN DE SALINAS"
            ],
            [
                "id"=> "210214",
                "province_id"=> "210200",
                "name"=> "SANTIAGO DE PUPUJA"
            ],
            [
                "id"=> "210215",
                "province_id"=> "210200",
                "name"=> "TIRAPATA"
            ],
            [
                "id"=> "210301",
                "province_id"=> "210300",
                "name"=> "MACUSANI"
            ],
            [
                "id"=> "210302",
                "province_id"=> "210300",
                "name"=> "AJOYANI"
            ],
            [
                "id"=> "210303",
                "province_id"=> "210300",
                "name"=> "AYAPATA"
            ],
            [
                "id"=> "210304",
                "province_id"=> "210300",
                "name"=> "COASA"
            ],
            [
                "id"=> "210305",
                "province_id"=> "210300",
                "name"=> "CORANI"
            ],
            [
                "id"=> "210306",
                "province_id"=> "210300",
                "name"=> "CRUCERO"
            ],
            [
                "id"=> "210307",
                "province_id"=> "210300",
                "name"=> "ITUATA"
            ],
            [
                "id"=> "210308",
                "province_id"=> "210300",
                "name"=> "OLLACHEA"
            ],
            [
                "id"=> "210309",
                "province_id"=> "210300",
                "name"=> "SAN GABAN"
            ],
            [
                "id"=> "210310",
                "province_id"=> "210300",
                "name"=> "USICAYOS"
            ],
            [
                "id"=> "210401",
                "province_id"=> "210400",
                "name"=> "JULI"
            ],
            [
                "id"=> "210402",
                "province_id"=> "210400",
                "name"=> "DESAGUADERO"
            ],
            [
                "id"=> "210403",
                "province_id"=> "210400",
                "name"=> "HUACULLANI"
            ],
            [
                "id"=> "210404",
                "province_id"=> "210400",
                "name"=> "KELLUYO"
            ],
            [
                "id"=> "210405",
                "province_id"=> "210400",
                "name"=> "PISACOMA"
            ],
            [
                "id"=> "210406",
                "province_id"=> "210400",
                "name"=> "POMATA"
            ],
            [
                "id"=> "210407",
                "province_id"=> "210400",
                "name"=> "ZEPITA"
            ],
            [
                "id"=> "210501",
                "province_id"=> "210500",
                "name"=> "ILAVE"
            ],
            [
                "id"=> "210502",
                "province_id"=> "210500",
                "name"=> "CAPAZO"
            ],
            [
                "id"=> "210503",
                "province_id"=> "210500",
                "name"=> "PILCUYO"
            ],
            [
                "id"=> "210504",
                "province_id"=> "210500",
                "name"=> "SANTA ROSA"
            ],
            [
                "id"=> "210505",
                "province_id"=> "210500",
                "name"=> "CONDURIRI"
            ],
            [
                "id"=> "210601",
                "province_id"=> "210600",
                "name"=> "HUANCANE"
            ],
            [
                "id"=> "210602",
                "province_id"=> "210600",
                "name"=> "COJATA"
            ],
            [
                "id"=> "210603",
                "province_id"=> "210600",
                "name"=> "HUATASANI"
            ],
            [
                "id"=> "210604",
                "province_id"=> "210600",
                "name"=> "INCHUPALLA"
            ],
            [
                "id"=> "210605",
                "province_id"=> "210600",
                "name"=> "PUSI"
            ],
            [
                "id"=> "210606",
                "province_id"=> "210600",
                "name"=> "ROSASPATA"
            ],
            [
                "id"=> "210607",
                "province_id"=> "210600",
                "name"=> "TARACO"
            ],
            [
                "id"=> "210608",
                "province_id"=> "210600",
                "name"=> "VILQUE CHICO"
            ],
            [
                "id"=> "210701",
                "province_id"=> "210700",
                "name"=> "LAMPA"
            ],
            [
                "id"=> "210702",
                "province_id"=> "210700",
                "name"=> "CABANILLA"
            ],
            [
                "id"=> "210703",
                "province_id"=> "210700",
                "name"=> "CALAPUJA"
            ],
            [
                "id"=> "210704",
                "province_id"=> "210700",
                "name"=> "NICASIO"
            ],
            [
                "id"=> "210705",
                "province_id"=> "210700",
                "name"=> "OCUVIRI"
            ],
            [
                "id"=> "210706",
                "province_id"=> "210700",
                "name"=> "PALCA"
            ],
            [
                "id"=> "210707",
                "province_id"=> "210700",
                "name"=> "PARATIA"
            ],
            [
                "id"=> "210708",
                "province_id"=> "210700",
                "name"=> "PUCARA"
            ],
            [
                "id"=> "210709",
                "province_id"=> "210700",
                "name"=> "SANTA LUCIA"
            ],
            [
                "id"=> "210710",
                "province_id"=> "210700",
                "name"=> "VILAVILA"
            ],
            [
                "id"=> "210801",
                "province_id"=> "210800",
                "name"=> "AYAVIRI"
            ],
            [
                "id"=> "210802",
                "province_id"=> "210800",
                "name"=> "ANTAUTA"
            ],
            [
                "id"=> "210803",
                "province_id"=> "210800",
                "name"=> "CUPI"
            ],
            [
                "id"=> "210804",
                "province_id"=> "210800",
                "name"=> "LLALLI"
            ],
            [
                "id"=> "210805",
                "province_id"=> "210800",
                "name"=> "MACARI"
            ],
            [
                "id"=> "210806",
                "province_id"=> "210800",
                "name"=> "NUÑOA"
            ],
            [
                "id"=> "210807",
                "province_id"=> "210800",
                "name"=> "ORURILLO"
            ],
            [
                "id"=> "210808",
                "province_id"=> "210800",
                "name"=> "SANTA ROSA"
            ],
            [
                "id"=> "210809",
                "province_id"=> "210800",
                "name"=> "UMACHIRI"
            ],
            [
                "id"=> "210901",
                "province_id"=> "210900",
                "name"=> "MOHO"
            ],
            [
                "id"=> "210902",
                "province_id"=> "210900",
                "name"=> "CONIMA"
            ],
            [
                "id"=> "210903",
                "province_id"=> "210900",
                "name"=> "HUAYRAPATA"
            ],
            [
                "id"=> "210904",
                "province_id"=> "210900",
                "name"=> "TILALI"
            ],
            [
                "id"=> "211001",
                "province_id"=> "211000",
                "name"=> "PUTINA"
            ],
            [
                "id"=> "211002",
                "province_id"=> "211000",
                "name"=> "ANANEA"
            ],
            [
                "id"=> "211003",
                "province_id"=> "211000",
                "name"=> "PEDRO VILCA APAZA"
            ],
            [
                "id"=> "211004",
                "province_id"=> "211000",
                "name"=> "QUILCAPUNCU"
            ],
            [
                "id"=> "211005",
                "province_id"=> "211000",
                "name"=> "SINA"
            ],
            [
                "id"=> "211101",
                "province_id"=> "211100",
                "name"=> "JULIACA"
            ],
            [
                "id"=> "211102",
                "province_id"=> "211100",
                "name"=> "CABANA"
            ],
            [
                "id"=> "211103",
                "province_id"=> "211100",
                "name"=> "CABANILLAS"
            ],
            [
                "id"=> "211104",
                "province_id"=> "211100",
                "name"=> "CARACOTO"
            ],
            [
                "id"=> "211201",
                "province_id"=> "211200",
                "name"=> "SANDIA"
            ],
            [
                "id"=> "211202",
                "province_id"=> "211200",
                "name"=> "CUYOCUYO"
            ],
            [
                "id"=> "211203",
                "province_id"=> "211200",
                "name"=> "LIMBANI"
            ],
            [
                "id"=> "211204",
                "province_id"=> "211200",
                "name"=> "PATAMBUCO"
            ],
            [
                "id"=> "211205",
                "province_id"=> "211200",
                "name"=> "PHARA"
            ],
            [
                "id"=> "211206",
                "province_id"=> "211200",
                "name"=> "QUIACA"
            ],
            [
                "id"=> "211207",
                "province_id"=> "211200",
                "name"=> "SAN JUAN DEL ORO"
            ],
            [
                "id"=> "211208",
                "province_id"=> "211200",
                "name"=> "YANAHUAYA"
            ],
            [
                "id"=> "211209",
                "province_id"=> "211200",
                "name"=> "ALTO INAMBARI"
            ],
            [
                "id"=> "211210",
                "province_id"=> "211200",
                "name"=> "SAN PEDRO DE PUTINA PUNCO"
            ],
            [
                "id"=> "211301",
                "province_id"=> "211300",
                "name"=> "YUNGUYO"
            ],
            [
                "id"=> "211302",
                "province_id"=> "211300",
                "name"=> "ANAPIA"
            ],
            [
                "id"=> "211303",
                "province_id"=> "211300",
                "name"=> "COPANI"
            ],
            [
                "id"=> "211304",
                "province_id"=> "211300",
                "name"=> "CUTURAPI"
            ],
            [
                "id"=> "211305",
                "province_id"=> "211300",
                "name"=> "OLLARAYA"
            ],
            [
                "id"=> "211306",
                "province_id"=> "211300",
                "name"=> "TINICACHI"
            ],
            [
                "id"=> "211307",
                "province_id"=> "211300",
                "name"=> "UNICACHI"
            ],
            [
                "id"=> "220101",
                "province_id"=> "220100",
                "name"=> "MOYOBAMBA"
            ],
            [
                "id"=> "220102",
                "province_id"=> "220100",
                "name"=> "CALZADA"
            ],
            [
                "id"=> "220103",
                "province_id"=> "220100",
                "name"=> "HABANA"
            ],
            [
                "id"=> "220104",
                "province_id"=> "220100",
                "name"=> "JEPELACIO"
            ],
            [
                "id"=> "220105",
                "province_id"=> "220100",
                "name"=> "SORITOR"
            ],
            [
                "id"=> "220106",
                "province_id"=> "220100",
                "name"=> "YANTALO"
            ],
            [
                "id"=> "220201",
                "province_id"=> "220200",
                "name"=> "BELLAVISTA"
            ],
            [
                "id"=> "220202",
                "province_id"=> "220200",
                "name"=> "ALTO BIAVO"
            ],
            [
                "id"=> "220203",
                "province_id"=> "220200",
                "name"=> "BAJO BIAVO"
            ],
            [
                "id"=> "220204",
                "province_id"=> "220200",
                "name"=> "HUALLAGA"
            ],
            [
                "id"=> "220205",
                "province_id"=> "220200",
                "name"=> "SAN PABLO"
            ],
            [
                "id"=> "220206",
                "province_id"=> "220200",
                "name"=> "SAN RAFAEL"
            ],
            [
                "id"=> "220301",
                "province_id"=> "220300",
                "name"=> "SAN JOSE DE SISA"
            ],
            [
                "id"=> "220302",
                "province_id"=> "220300",
                "name"=> "AGUA BLANCA"
            ],
            [
                "id"=> "220303",
                "province_id"=> "220300",
                "name"=> "SAN MARTIN"
            ],
            [
                "id"=> "220304",
                "province_id"=> "220300",
                "name"=> "SANTA ROSA"
            ],
            [
                "id"=> "220305",
                "province_id"=> "220300",
                "name"=> "SHATOJA"
            ],
            [
                "id"=> "220401",
                "province_id"=> "220400",
                "name"=> "SAPOSOA"
            ],
            [
                "id"=> "220402",
                "province_id"=> "220400",
                "name"=> "ALTO SAPOSOA"
            ],
            [
                "id"=> "220403",
                "province_id"=> "220400",
                "name"=> "EL ESLABON"
            ],
            [
                "id"=> "220404",
                "province_id"=> "220400",
                "name"=> "PISCOYACU"
            ],
            [
                "id"=> "220405",
                "province_id"=> "220400",
                "name"=> "SACANCHE"
            ],
            [
                "id"=> "220406",
                "province_id"=> "220400",
                "name"=> "TINGO DE SAPOSOA"
            ],
            [
                "id"=> "220501",
                "province_id"=> "220500",
                "name"=> "LAMAS"
            ],
            [
                "id"=> "220502",
                "province_id"=> "220500",
                "name"=> "ALONSO DE ALVARADO"
            ],
            [
                "id"=> "220503",
                "province_id"=> "220500",
                "name"=> "BARRANQUITA"
            ],
            [
                "id"=> "220504",
                "province_id"=> "220500",
                "name"=> "CAYNARACHI"
            ],
            [
                "id"=> "220505",
                "province_id"=> "220500",
                "name"=> "CUÑUMBUQUI"
            ],
            [
                "id"=> "220506",
                "province_id"=> "220500",
                "name"=> "PINTO RECODO"
            ],
            [
                "id"=> "220507",
                "province_id"=> "220500",
                "name"=> "RUMISAPA"
            ],
            [
                "id"=> "220508",
                "province_id"=> "220500",
                "name"=> "SAN ROQUE DE CUMBAZA"
            ],
            [
                "id"=> "220509",
                "province_id"=> "220500",
                "name"=> "SHANAO"
            ],
            [
                "id"=> "220510",
                "province_id"=> "220500",
                "name"=> "TABALOSOS"
            ],
            [
                "id"=> "220511",
                "province_id"=> "220500",
                "name"=> "ZAPATERO"
            ],
            [
                "id"=> "220601",
                "province_id"=> "220600",
                "name"=> "JUANJUI"
            ],
            [
                "id"=> "220602",
                "province_id"=> "220600",
                "name"=> "CAMPANILLA"
            ],
            [
                "id"=> "220603",
                "province_id"=> "220600",
                "name"=> "HUICUNGO"
            ],
            [
                "id"=> "220604",
                "province_id"=> "220600",
                "name"=> "PACHIZA"
            ],
            [
                "id"=> "220605",
                "province_id"=> "220600",
                "name"=> "PAJARILLO"
            ],
            [
                "id"=> "220701",
                "province_id"=> "220700",
                "name"=> "PICOTA"
            ],
            [
                "id"=> "220702",
                "province_id"=> "220700",
                "name"=> "BUENOS AIRES"
            ],
            [
                "id"=> "220703",
                "province_id"=> "220700",
                "name"=> "CASPISAPA"
            ],
            [
                "id"=> "220704",
                "province_id"=> "220700",
                "name"=> "PILLUANA"
            ],
            [
                "id"=> "220705",
                "province_id"=> "220700",
                "name"=> "PUCACACA"
            ],
            [
                "id"=> "220706",
                "province_id"=> "220700",
                "name"=> "SAN CRISTOBAL"
            ],
            [
                "id"=> "220707",
                "province_id"=> "220700",
                "name"=> "SAN HILARION"
            ],
            [
                "id"=> "220708",
                "province_id"=> "220700",
                "name"=> "SHAMBOYACU"
            ],
            [
                "id"=> "220709",
                "province_id"=> "220700",
                "name"=> "TINGO DE PONASA"
            ],
            [
                "id"=> "220710",
                "province_id"=> "220700",
                "name"=> "TRES UNIDOS"
            ],
            [
                "id"=> "220801",
                "province_id"=> "220800",
                "name"=> "RIOJA"
            ],
            [
                "id"=> "220802",
                "province_id"=> "220800",
                "name"=> "AWAJUN"
            ],
            [
                "id"=> "220803",
                "province_id"=> "220800",
                "name"=> "ELIAS SOPLIN VARGAS"
            ],
            [
                "id"=> "220804",
                "province_id"=> "220800",
                "name"=> "NUEVA CAJAMARCA"
            ],
            [
                "id"=> "220805",
                "province_id"=> "220800",
                "name"=> "PARDO MIGUEL"
            ],
            [
                "id"=> "220806",
                "province_id"=> "220800",
                "name"=> "POSIC"
            ],
            [
                "id"=> "220807",
                "province_id"=> "220800",
                "name"=> "SAN FERNANDO"
            ],
            [
                "id"=> "220808",
                "province_id"=> "220800",
                "name"=> "YORONGOS"
            ],
            [
                "id"=> "220809",
                "province_id"=> "220800",
                "name"=> "YURACYACU"
            ],
            [
                "id"=> "220901",
                "province_id"=> "220900",
                "name"=> "TARAPOTO"
            ],
            [
                "id"=> "220902",
                "province_id"=> "220900",
                "name"=> "ALBERTO LEVEAU"
            ],
            [
                "id"=> "220903",
                "province_id"=> "220900",
                "name"=> "CACATACHI"
            ],
            [
                "id"=> "220904",
                "province_id"=> "220900",
                "name"=> "CHAZUTA"
            ],
            [
                "id"=> "220905",
                "province_id"=> "220900",
                "name"=> "CHIPURANA"
            ],
            [
                "id"=> "220906",
                "province_id"=> "220900",
                "name"=> "EL PORVENIR"
            ],
            [
                "id"=> "220907",
                "province_id"=> "220900",
                "name"=> "HUIMBAYOC"
            ],
            [
                "id"=> "220908",
                "province_id"=> "220900",
                "name"=> "JUAN GUERRA"
            ],
            [
                "id"=> "220909",
                "province_id"=> "220900",
                "name"=> "LA BANDA DE SHILCAYO"
            ],
            [
                "id"=> "220910",
                "province_id"=> "220900",
                "name"=> "MORALES"
            ],
            [
                "id"=> "220911",
                "province_id"=> "220900",
                "name"=> "PAPAPLAYA"
            ],
            [
                "id"=> "220912",
                "province_id"=> "220900",
                "name"=> "SAN ANTONIO"
            ],
            [
                "id"=> "220913",
                "province_id"=> "220900",
                "name"=> "SAUCE"
            ],
            [
                "id"=> "220914",
                "province_id"=> "220900",
                "name"=> "SHAPAJA"
            ],
            [
                "id"=> "221001",
                "province_id"=> "221000",
                "name"=> "TOCACHE"
            ],
            [
                "id"=> "221002",
                "province_id"=> "221000",
                "name"=> "NUEVO PROGRESO"
            ],
            [
                "id"=> "221003",
                "province_id"=> "221000",
                "name"=> "POLVORA"
            ],
            [
                "id"=> "221004",
                "province_id"=> "221000",
                "name"=> "SHUNTE"
            ],
            [
                "id"=> "221005",
                "province_id"=> "221000",
                "name"=> "UCHIZA"
            ],
            [
                "id"=> "221006",
                "province_id"=> "221000",
                "name"=> "SANTA LUCIA"
            ],
            [
                "id"=> "230101",
                "province_id"=> "230100",
                "name"=> "TACNA"
            ],
            [
                "id"=> "230102",
                "province_id"=> "230100",
                "name"=> "ALTO DE LA ALIANZA"
            ],
            [
                "id"=> "230103",
                "province_id"=> "230100",
                "name"=> "CALANA"
            ],
            [
                "id"=> "230104",
                "province_id"=> "230100",
                "name"=> "CIUDAD NUEVA"
            ],
            [
                "id"=> "230105",
                "province_id"=> "230100",
                "name"=> "INCLAN"
            ],
            [
                "id"=> "230106",
                "province_id"=> "230100",
                "name"=> "PACHIA"
            ],
            [
                "id"=> "230107",
                "province_id"=> "230100",
                "name"=> "PALCA"
            ],
            [
                "id"=> "230108",
                "province_id"=> "230100",
                "name"=> "POCOLLAY"
            ],
            [
                "id"=> "230109",
                "province_id"=> "230100",
                "name"=> "SAMA"
            ],
            [
                "id"=> "230110",
                "province_id"=> "230100",
                "name"=> "CORONEL GREGORIO ALBARRACIN LANCHIPA"
            ],
            [
                "id"=> "230111",
                "province_id"=> "230100",
                "name"=> "LA YARADA LOS PALOS"
            ],
            [
                "id"=> "230201",
                "province_id"=> "230200",
                "name"=> "CANDARAVE"
            ],
            [
                "id"=> "230202",
                "province_id"=> "230200",
                "name"=> "CAIRANI"
            ],
            [
                "id"=> "230203",
                "province_id"=> "230200",
                "name"=> "CAMILACA"
            ],
            [
                "id"=> "230204",
                "province_id"=> "230200",
                "name"=> "CURIBAYA"
            ],
            [
                "id"=> "230205",
                "province_id"=> "230200",
                "name"=> "HUANUARA"
            ],
            [
                "id"=> "230206",
                "province_id"=> "230200",
                "name"=> "QUILAHUANI"
            ],
            [
                "id"=> "230301",
                "province_id"=> "230300",
                "name"=> "LOCUMBA"
            ],
            [
                "id"=> "230302",
                "province_id"=> "230300",
                "name"=> "ILABAYA"
            ],
            [
                "id"=> "230303",
                "province_id"=> "230300",
                "name"=> "ITE"
            ],
            [
                "id"=> "230401",
                "province_id"=> "230400",
                "name"=> "TARATA"
            ],
            [
                "id"=> "230402",
                "province_id"=> "230400",
                "name"=> "HEROES ALBARRACIN"
            ],
            [
                "id"=> "230403",
                "province_id"=> "230400",
                "name"=> "ESTIQUE"
            ],
            [
                "id"=> "230404",
                "province_id"=> "230400",
                "name"=> "ESTIQUE-PAMPA"
            ],
            [
                "id"=> "230405",
                "province_id"=> "230400",
                "name"=> "SITAJARA"
            ],
            [
                "id"=> "230406",
                "province_id"=> "230400",
                "name"=> "SUSAPAYA"
            ],
            [
                "id"=> "230407",
                "province_id"=> "230400",
                "name"=> "TARUCACHI"
            ],
            [
                "id"=> "230408",
                "province_id"=> "230400",
                "name"=> "TICACO"
            ],
            [
                "id"=> "240101",
                "province_id"=> "240100",
                "name"=> "TUMBES"
            ],
            [
                "id"=> "240102",
                "province_id"=> "240100",
                "name"=> "CORRALES"
            ],
            [
                "id"=> "240103",
                "province_id"=> "240100",
                "name"=> "LA CRUZ"
            ],
            [
                "id"=> "240104",
                "province_id"=> "240100",
                "name"=> "PAMPAS DE HOSPITAL"
            ],
            [
                "id"=> "240105",
                "province_id"=> "240100",
                "name"=> "SAN JACINTO"
            ],
            [
                "id"=> "240106",
                "province_id"=> "240100",
                "name"=> "SAN JUAN DE LA VIRGEN"
            ],
            [
                "id"=> "240201",
                "province_id"=> "240200",
                "name"=> "ZORRITOS"
            ],
            [
                "id"=> "240202",
                "province_id"=> "240200",
                "name"=> "CASITAS"
            ],
            [
                "id"=> "240203",
                "province_id"=> "240200",
                "name"=> "CANOAS DE PUNTA SAL"
            ],
            [
                "id"=> "240301",
                "province_id"=> "240300",
                "name"=> "ZARUMILLA"
            ],
            [
                "id"=> "240302",
                "province_id"=> "240300",
                "name"=> "AGUAS VERDES"
            ],
            [
                "id"=> "240303",
                "province_id"=> "240300",
                "name"=> "MATAPALO"
            ],
            [
                "id"=> "240304",
                "province_id"=> "240300",
                "name"=> "PAPAYAL"
            ],
            [
                "id"=> "250101",
                "province_id"=> "250100",
                "name"=> "CALLERIA"
            ],
            [
                "id"=> "250102",
                "province_id"=> "250100",
                "name"=> "CAMPOVERDE"
            ],
            [
                "id"=> "250103",
                "province_id"=> "250100",
                "name"=> "IPARIA"
            ],
            [
                "id"=> "250104",
                "province_id"=> "250100",
                "name"=> "MASISEA"
            ],
            [
                "id"=> "250105",
                "province_id"=> "250100",
                "name"=> "YARINACOCHA"
            ],
            [
                "id"=> "250106",
                "province_id"=> "250100",
                "name"=> "NUEVA REQUENA"
            ],
            [
                "id"=> "250107",
                "province_id"=> "250100",
                "name"=> "MANANTAY"
            ],
            [
                "id"=> "250201",
                "province_id"=> "250200",
                "name"=> "RAYMONDI"
            ],
            [
                "id"=> "250202",
                "province_id"=> "250200",
                "name"=> "SEPAHUA"
            ],
            [
                "id"=> "250203",
                "province_id"=> "250200",
                "name"=> "TAHUANIA"
            ],
            [
                "id"=> "250204",
                "province_id"=> "250200",
                "name"=> "YURUA"
            ],
            [
                "id"=> "250301",
                "province_id"=> "250300",
                "name"=> "PADRE ABAD"
            ],
            [
                "id"=> "250302",
                "province_id"=> "250300",
                "name"=> "IRAZOLA"
            ],
            [
                "id"=> "250303",
                "province_id"=> "250300",
                "name"=> "CURIMANA"
            ],
            [
                "id"=> "250401",
                "province_id"=> "250400",
                "name"=> "PURUS"
            ]
        ];

        District::insert($districts);
    }
}
