<?php

namespace Database\Seeders;

use App\Models\Municipio;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MunicipiosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('municipios')->insert([
            'name' =>  'Aguascalientes',
            'estado_id' => '01',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Asientos',
            'estado_id' => '01',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Calvillo',
            'estado_id' => '01',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cosío',
            'estado_id' => '01',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jesús María',
            'estado_id' => '01',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Pabellón de Arteaga',
            'estado_id' => '01',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Rincón de Romos',
            'estado_id' => '01',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San José de Gracia',
            'estado_id' => '01',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tepezalá',
            'estado_id' => '01',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'El Llano',
            'estado_id' => '01',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Francisco de los Romo',
            'estado_id' => '01',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ensenada',
            'estado_id' => '02',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mexicali',
            'estado_id' => '02',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tecate',
            'estado_id' => '02',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tijuana',
            'estado_id' => '02',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Playas de Rosarito',
            'estado_id' => '02',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Comondú',
            'estado_id' => '03',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mulegé',
            'estado_id' => '03',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'La Paz',
            'estado_id' => '03',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Los Cabos',
            'estado_id' => '03',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Loreto',
            'estado_id' => '03',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Calkiní',
            'estado_id' => '04',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Campeche',
            'estado_id' => '04',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Carmen',
            'estado_id' => '04',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Champotón',
            'estado_id' => '04',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Hecelchakán',
            'estado_id' => '04',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Hopelchén',
            'estado_id' => '04',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Palizada',
            'estado_id' => '04',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tenabo',
            'estado_id' => '04',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Escárcega',
            'estado_id' => '04',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Calakmul',
            'estado_id' => '04',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Candelaria',
            'estado_id' => '04',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Abasolo',
            'estado_id' => '05',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Acuña',
            'estado_id' => '05',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Allende',
            'estado_id' => '05',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Arteaga',
            'estado_id' => '05',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Candela',
            'estado_id' => '05',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Castaños',
            'estado_id' => '05',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cuatro Ciénegas',
            'estado_id' => '05',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Escobedo',
            'estado_id' => '05',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Francisco I. Madero',
            'estado_id' => '05',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Frontera',
            'estado_id' => '05',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'General Cepeda',
            'estado_id' => '05',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Guerrero',
            'estado_id' => '05',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Hidalgo',
            'estado_id' => '05',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jiménez',
            'estado_id' => '05',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Juárez',
            'estado_id' => '05',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Lamadrid',
            'estado_id' => '05',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Matamoros',
            'estado_id' => '05',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Monclova',
            'estado_id' => '05',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Morelos',
            'estado_id' => '05',
            'number' =>  '019',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Múzquiz',
            'estado_id' => '05',
            'number' =>  '020',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Nadadores',
            'estado_id' => '05',
            'number' =>  '021',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Nava',
            'estado_id' => '05',
            'number' =>  '022',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ocampo',
            'estado_id' => '05',
            'number' =>  '023',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Parras',
            'estado_id' => '05',
            'number' =>  '024',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Piedras Negras',
            'estado_id' => '05',
            'number' =>  '025',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Progreso',
            'estado_id' => '05',
            'number' =>  '026',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ramos Arizpe',
            'estado_id' => '05',
            'number' =>  '027',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Sabinas',
            'estado_id' => '05',
            'number' =>  '028',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Sacramento',
            'estado_id' => '05',
            'number' =>  '029',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Saltillo',
            'estado_id' => '05',
            'number' =>  '030',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Buenaventura',
            'estado_id' => '05',
            'number' =>  '031',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan de Sabinas',
            'estado_id' => '05',
            'number' =>  '032',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro',
            'estado_id' => '05',
            'number' =>  '033',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Sierra Mojada',
            'estado_id' => '05',
            'number' =>  '034',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Torreón',
            'estado_id' => '05',
            'number' =>  '035',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Viesca',
            'estado_id' => '05',
            'number' =>  '036',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Villa Unión',
            'estado_id' => '05',
            'number' =>  '037',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zaragoza',
            'estado_id' => '05',
            'number' =>  '038',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Armería',
            'estado_id' => '06',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Colima',
            'estado_id' => '06',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Comala',
            'estado_id' => '06',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Coquimatlán',
            'estado_id' => '06',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cuauhtémoc',
            'estado_id' => '06',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ixtlahuacán',
            'estado_id' => '06',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Manzanillo',
            'estado_id' => '06',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Minatitlán',
            'estado_id' => '06',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tecomán',
            'estado_id' => '06',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Villa de Álvarez',
            'estado_id' => '06',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Acacoyagua',
            'estado_id' => '07',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Acala',
            'estado_id' => '07',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Acapetahua',
            'estado_id' => '07',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Altamirano',
            'estado_id' => '07',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Amatán',
            'estado_id' => '07',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Amatenango de la Frontera',
            'estado_id' => '07',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Amatenango del Valle',
            'estado_id' => '07',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Angel Albino Corzo',
            'estado_id' => '07',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Arriaga',
            'estado_id' => '07',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Bejucal de Ocampo',
            'estado_id' => '07',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Bella Vista',
            'estado_id' => '07',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Berriozábal',
            'estado_id' => '07',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Bochil',
            'estado_id' => '07',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'El Bosque',
            'estado_id' => '07',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cacahoatán',
            'estado_id' => '07',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Catazajá',
            'estado_id' => '07',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cintalapa',
            'estado_id' => '07',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Coapilla',
            'estado_id' => '07',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Comitán de Domínguez',
            'estado_id' => '07',
            'number' =>  '019',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'La Concordia',
            'estado_id' => '07',
            'number' =>  '020',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Copainalá',
            'estado_id' => '07',
            'number' =>  '021',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chalchihuitán',
            'estado_id' => '07',
            'number' =>  '022',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chamula',
            'estado_id' => '07',
            'number' =>  '023',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chanal',
            'estado_id' => '07',
            'number' =>  '024',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chapultenango',
            'estado_id' => '07',
            'number' =>  '025',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chenalhó',
            'estado_id' => '07',
            'number' =>  '026',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chiapa de Corzo',
            'estado_id' => '07',
            'number' =>  '027',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chiapilla',
            'estado_id' => '07',
            'number' =>  '028',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chicoasén',
            'estado_id' => '07',
            'number' =>  '029',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chicomuselo',
            'estado_id' => '07',
            'number' =>  '030',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chilón',
            'estado_id' => '07',
            'number' =>  '031',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Escuintla',
            'estado_id' => '07',
            'number' =>  '032',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Francisco León',
            'estado_id' => '07',
            'number' =>  '033',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Frontera Comalapa',
            'estado_id' => '07',
            'number' =>  '034',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Frontera Hidalgo',
            'estado_id' => '07',
            'number' =>  '035',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'La Grandeza',
            'estado_id' => '07',
            'number' =>  '036',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huehuetán',
            'estado_id' => '07',
            'number' =>  '037',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huixtán',
            'estado_id' => '07',
            'number' =>  '038',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huitiupán',
            'estado_id' => '07',
            'number' =>  '039',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huixtla',
            'estado_id' => '07',
            'number' =>  '040',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'La Independencia',
            'estado_id' => '07',
            'number' =>  '041',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ixhuatán',
            'estado_id' => '07',
            'number' =>  '042',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ixtacomitán',
            'estado_id' => '07',
            'number' =>  '043',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ixtapa',
            'estado_id' => '07',
            'number' =>  '044',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ixtapangajoya',
            'estado_id' => '07',
            'number' =>  '045',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jiquipilas',
            'estado_id' => '07',
            'number' =>  '046',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jitotol',
            'estado_id' => '07',
            'number' =>  '047',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Juárez',
            'estado_id' => '07',
            'number' =>  '048',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Larráinzar',
            'estado_id' => '07',
            'number' =>  '049',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'La Libertad',
            'estado_id' => '07',
            'number' =>  '050',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mapastepec',
            'estado_id' => '07',
            'number' =>  '051',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Las Margaritas',
            'estado_id' => '07',
            'number' =>  '052',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mazapa de Madero',
            'estado_id' => '07',
            'number' =>  '053',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mazatán',
            'estado_id' => '07',
            'number' =>  '054',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Metapa',
            'estado_id' => '07',
            'number' =>  '055',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mitontic',
            'estado_id' => '07',
            'number' =>  '056',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Motozintla',
            'estado_id' => '07',
            'number' =>  '057',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Nicolás Ruíz',
            'estado_id' => '07',
            'number' =>  '058',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ocosingo',
            'estado_id' => '07',
            'number' =>  '059',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ocotepec',
            'estado_id' => '07',
            'number' =>  '060',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ocozocoautla de Espinosa',
            'estado_id' => '07',
            'number' =>  '061',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ostuacán',
            'estado_id' => '07',
            'number' =>  '062',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Osumacinta',
            'estado_id' => '07',
            'number' =>  '063',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Oxchuc',
            'estado_id' => '07',
            'number' =>  '064',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Palenque',
            'estado_id' => '07',
            'number' =>  '065',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Pantelhó',
            'estado_id' => '07',
            'number' =>  '066',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Pantepec',
            'estado_id' => '07',
            'number' =>  '067',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Pichucalco',
            'estado_id' => '07',
            'number' =>  '068',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Pijijiapan',
            'estado_id' => '07',
            'number' =>  '069',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'El Porvenir',
            'estado_id' => '07',
            'number' =>  '070',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Villa Comaltitlán',
            'estado_id' => '07',
            'number' =>  '071',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Pueblo Nuevo Solistahuacán',
            'estado_id' => '07',
            'number' =>  '072',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Rayón',
            'estado_id' => '07',
            'number' =>  '073',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Reforma',
            'estado_id' => '07',
            'number' =>  '074',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Las Rosas',
            'estado_id' => '07',
            'number' =>  '075',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Sabanilla',
            'estado_id' => '07',
            'number' =>  '076',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Salto de Agua',
            'estado_id' => '07',
            'number' =>  '077',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Cristóbal de las Casas',
            'estado_id' => '07',
            'number' =>  '078',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Fernando',
            'estado_id' => '07',
            'number' =>  '079',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Siltepec',
            'estado_id' => '07',
            'number' =>  '080',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Simojovel',
            'estado_id' => '07',
            'number' =>  '081',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Sitalá',
            'estado_id' => '07',
            'number' =>  '082',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Socoltenango',
            'estado_id' => '07',
            'number' =>  '083',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Solosuchiapa',
            'estado_id' => '07',
            'number' =>  '084',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Soyaló',
            'estado_id' => '07',
            'number' =>  '085',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Suchiapa',
            'estado_id' => '07',
            'number' =>  '086',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Suchiate',
            'estado_id' => '07',
            'number' =>  '087',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Sunuapa',
            'estado_id' => '07',
            'number' =>  '088',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tapachula',
            'estado_id' => '07',
            'number' =>  '089',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tapalapa',
            'estado_id' => '07',
            'number' =>  '090',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tapilula',
            'estado_id' => '07',
            'number' =>  '091',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tecpatán',
            'estado_id' => '07',
            'number' =>  '092',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tenejapa',
            'estado_id' => '07',
            'number' =>  '093',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Teopisca',
            'estado_id' => '07',
            'number' =>  '094',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tila',
            'estado_id' => '07',
            'number' =>  '096',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tonalá',
            'estado_id' => '07',
            'number' =>  '097',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Totolapa',
            'estado_id' => '07',
            'number' =>  '098',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'La Trinitaria',
            'estado_id' => '07',
            'number' =>  '099',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tumbalá',
            'estado_id' => '07',
            'number' =>  '100',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tuxtla Gutiérrez',
            'estado_id' => '07',
            'number' =>  '101',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tuxtla Chico',
            'estado_id' => '07',
            'number' =>  '102',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tuzantán',
            'estado_id' => '07',
            'number' =>  '103',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tzimol',
            'estado_id' => '07',
            'number' =>  '104',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Unión Juárez',
            'estado_id' => '07',
            'number' =>  '105',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Venustiano Carranza',
            'estado_id' => '07',
            'number' =>  '106',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Villa Corzo',
            'estado_id' => '07',
            'number' =>  '107',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Villaflores',
            'estado_id' => '07',
            'number' =>  '108',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Yajalón',
            'estado_id' => '07',
            'number' =>  '109',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Lucas',
            'estado_id' => '07',
            'number' =>  '110',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zinacantán',
            'estado_id' => '07',
            'number' =>  '111',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Cancuc',
            'estado_id' => '07',
            'number' =>  '112',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Aldama',
            'estado_id' => '07',
            'number' =>  '113',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Benemérito de las Américas',
            'estado_id' => '07',
            'number' =>  '114',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Maravilla Tenejapa',
            'estado_id' => '07',
            'number' =>  '115',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Marqués de Comillas',
            'estado_id' => '07',
            'number' =>  '116',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Montecristo de Guerrero',
            'estado_id' => '07',
            'number' =>  '117',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Andrés Duraznal',
            'estado_id' => '07',
            'number' =>  '118',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago el Pinar',
            'estado_id' => '07',
            'number' =>  '119',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ahumada',
            'estado_id' => '08',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Aldama',
            'estado_id' => '08',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Allende',
            'estado_id' => '08',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Aquiles Serdán',
            'estado_id' => '08',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ascensión',
            'estado_id' => '08',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Bachíniva',
            'estado_id' => '08',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Balleza',
            'estado_id' => '08',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Batopilas',
            'estado_id' => '08',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Bocoyna',
            'estado_id' => '08',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Buenaventura',
            'estado_id' => '08',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Camargo',
            'estado_id' => '08',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Carichí',
            'estado_id' => '08',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Casas Grandes',
            'estado_id' => '08',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Coronado',
            'estado_id' => '08',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Coyame del Sotol',
            'estado_id' => '08',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'La Cruz',
            'estado_id' => '08',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cuauhtémoc',
            'estado_id' => '08',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cusihuiriachi',
            'estado_id' => '08',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chihuahua',
            'estado_id' => '08',
            'number' =>  '019',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chínipas',
            'estado_id' => '08',
            'number' =>  '020',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Delicias',
            'estado_id' => '08',
            'number' =>  '021',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Dr. Belisario Domínguez',
            'estado_id' => '08',
            'number' =>  '022',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Galeana',
            'estado_id' => '08',
            'number' =>  '023',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Isabel',
            'estado_id' => '08',
            'number' =>  '024',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Gómez Farías',
            'estado_id' => '08',
            'number' =>  '025',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Gran Morelos',
            'estado_id' => '08',
            'number' =>  '026',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Guachochi',
            'estado_id' => '08',
            'number' =>  '027',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Guadalupe',
            'estado_id' => '08',
            'number' =>  '028',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Guadalupe y Calvo',
            'estado_id' => '08',
            'number' =>  '029',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Guazapares',
            'estado_id' => '08',
            'number' =>  '030',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Guerrero',
            'estado_id' => '08',
            'number' =>  '031',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Hidalgo del Parral',
            'estado_id' => '08',
            'number' =>  '032',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huejotitán',
            'estado_id' => '08',
            'number' =>  '033',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ignacio Zaragoza',
            'estado_id' => '08',
            'number' =>  '034',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Janos',
            'estado_id' => '08',
            'number' =>  '035',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jiménez',
            'estado_id' => '08',
            'number' =>  '036',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Juárez',
            'estado_id' => '08',
            'number' =>  '037',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Julimes',
            'estado_id' => '08',
            'number' =>  '038',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'López',
            'estado_id' => '08',
            'number' =>  '039',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Madera',
            'estado_id' => '08',
            'number' =>  '040',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Maguarichi',
            'estado_id' => '08',
            'number' =>  '041',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Manuel Benavides',
            'estado_id' => '08',
            'number' =>  '042',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Matachí',
            'estado_id' => '08',
            'number' =>  '043',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Matamoros',
            'estado_id' => '08',
            'number' =>  '044',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Meoqui',
            'estado_id' => '08',
            'number' =>  '045',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Morelos',
            'estado_id' => '08',
            'number' =>  '046',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Moris',
            'estado_id' => '08',
            'number' =>  '047',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Namiquipa',
            'estado_id' => '08',
            'number' =>  '048',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Nonoava',
            'estado_id' => '08',
            'number' =>  '049',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Nuevo Casas Grandes',
            'estado_id' => '08',
            'number' =>  '050',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ocampo',
            'estado_id' => '08',
            'number' =>  '051',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ojinaga',
            'estado_id' => '08',
            'number' =>  '052',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Praxedis G. Guerrero',
            'estado_id' => '08',
            'number' =>  '053',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Riva Palacio',
            'estado_id' => '08',
            'number' =>  '054',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Rosales',
            'estado_id' => '08',
            'number' =>  '055',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Rosario',
            'estado_id' => '08',
            'number' =>  '056',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Francisco de Borja',
            'estado_id' => '08',
            'number' =>  '057',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Francisco de Conchos',
            'estado_id' => '08',
            'number' =>  '058',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Francisco del Oro',
            'estado_id' => '08',
            'number' =>  '059',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Bárbara',
            'estado_id' => '08',
            'number' =>  '060',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Satevó',
            'estado_id' => '08',
            'number' =>  '061',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Saucillo',
            'estado_id' => '08',
            'number' =>  '062',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Temósachic',
            'estado_id' => '08',
            'number' =>  '063',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'El Tule',
            'estado_id' => '08',
            'number' =>  '064',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Urique',
            'estado_id' => '08',
            'number' =>  '065',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Uruachi',
            'estado_id' => '08',
            'number' =>  '066',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Valle de Zaragoza',
            'estado_id' => '08',
            'number' =>  '067',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Azcapotzalco',
            'estado_id' => '09',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Coyoacán',
            'estado_id' => '09',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cuajimalpa de Morelos',
            'estado_id' => '09',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Gustavo A. Madero',
            'estado_id' => '09',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Iztacalco',
            'estado_id' => '09',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Iztapalapa',
            'estado_id' => '09',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'La Magdalena Contreras',
            'estado_id' => '09',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Milpa Alta',
            'estado_id' => '09',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Álvaro Obregón',
            'estado_id' => '09',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tláhuac',
            'estado_id' => '09',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlalpan',
            'estado_id' => '09',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Xochimilco',
            'estado_id' => '09',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Benito Juárez',
            'estado_id' => '09',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cuauhtémoc',
            'estado_id' => '09',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Miguel Hidalgo',
            'estado_id' => '09',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Venustiano Carranza',
            'estado_id' => '09',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Canatlán',
            'estado_id' => '10',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Canelas',
            'estado_id' => '10',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Coneto de Comonfort',
            'estado_id' => '10',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cuencamé',
            'estado_id' => '10',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Durango',
            'estado_id' => '10',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'General Simón Bolívar',
            'estado_id' => '10',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Gómez Palacio',
            'estado_id' => '10',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Guadalupe Victoria',
            'estado_id' => '10',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Guanaceví',
            'estado_id' => '10',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Hidalgo',
            'estado_id' => '10',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Indé',
            'estado_id' => '10',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Lerdo',
            'estado_id' => '10',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mapimí',
            'estado_id' => '10',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mezquital',
            'estado_id' => '10',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Nazas',
            'estado_id' => '10',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Nombre de Dios',
            'estado_id' => '10',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ocampo',
            'estado_id' => '10',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'El Oro',
            'estado_id' => '10',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Otáez',
            'estado_id' => '10',
            'number' =>  '019',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Pánuco de Coronado',
            'estado_id' => '10',
            'number' =>  '020',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Peñón Blanco',
            'estado_id' => '10',
            'number' =>  '021',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Poanas',
            'estado_id' => '10',
            'number' =>  '022',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Pueblo Nuevo',
            'estado_id' => '10',
            'number' =>  '023',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Rodeo',
            'estado_id' => '10',
            'number' =>  '024',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Bernardo',
            'estado_id' => '10',
            'number' =>  '025',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Dimas',
            'estado_id' => '10',
            'number' =>  '026',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan de Guadalupe',
            'estado_id' => '10',
            'number' =>  '027',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan del Río',
            'estado_id' => '10',
            'number' =>  '028',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Luis del Cordero',
            'estado_id' => '10',
            'number' =>  '029',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro del Gallo',
            'estado_id' => '10',
            'number' =>  '030',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Clara',
            'estado_id' => '10',
            'number' =>  '031',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Papasquiaro',
            'estado_id' => '10',
            'number' =>  '032',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Súchil',
            'estado_id' => '10',
            'number' =>  '033',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tamazula',
            'estado_id' => '10',
            'number' =>  '034',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tepehuanes',
            'estado_id' => '10',
            'number' =>  '035',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlahualilo',
            'estado_id' => '10',
            'number' =>  '036',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Topia',
            'estado_id' => '10',
            'number' =>  '037',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Vicente Guerrero',
            'estado_id' => '10',
            'number' =>  '038',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Nuevo Ideal',
            'estado_id' => '10',
            'number' =>  '039',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Abasolo',
            'estado_id' => '11',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Acámbaro',
            'estado_id' => '11',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Miguel de Allende',
            'estado_id' => '11',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Apaseo el Alto',
            'estado_id' => '11',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Apaseo el Grande',
            'estado_id' => '11',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Atarjea',
            'estado_id' => '11',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Celaya',
            'estado_id' => '11',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Manuel Doblado',
            'estado_id' => '11',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Comonfort',
            'estado_id' => '11',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Coroneo',
            'estado_id' => '11',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cortazar',
            'estado_id' => '11',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cuerámaro',
            'estado_id' => '11',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Doctor Mora',
            'estado_id' => '11',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Dolores Hidalgo Cuna de la Independencia Nacional',
            'estado_id' => '11',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Guanajuato',
            'estado_id' => '11',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huanímaro',
            'estado_id' => '11',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Irapuato',
            'estado_id' => '11',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jaral del Progreso',
            'estado_id' => '11',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jerécuaro',
            'estado_id' => '11',
            'number' =>  '019',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'León',
            'estado_id' => '11',
            'number' =>  '020',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Moroleón',
            'estado_id' => '11',
            'number' =>  '021',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ocampo',
            'estado_id' => '11',
            'number' =>  '022',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Pénjamo',
            'estado_id' => '11',
            'number' =>  '023',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Pueblo Nuevo',
            'estado_id' => '11',
            'number' =>  '024',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Purísima del Rincón',
            'estado_id' => '11',
            'number' =>  '025',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Romita',
            'estado_id' => '11',
            'number' =>  '026',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Salamanca',
            'estado_id' => '11',
            'number' =>  '027',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Salvatierra',
            'estado_id' => '11',
            'number' =>  '028',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Diego de la Unión',
            'estado_id' => '11',
            'number' =>  '029',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Felipe',
            'estado_id' => '11',
            'number' =>  '030',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Francisco del Rincón',
            'estado_id' => '11',
            'number' =>  '031',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San José Iturbide',
            'estado_id' => '11',
            'number' =>  '032',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Luis de la Paz',
            'estado_id' => '11',
            'number' =>  '033',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Catarina',
            'estado_id' => '11',
            'number' =>  '034',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Cruz de Juventino Rosas',
            'estado_id' => '11',
            'number' =>  '035',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Maravatío',
            'estado_id' => '11',
            'number' =>  '036',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Silao de la Victoria',
            'estado_id' => '11',
            'number' =>  '037',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tarandacuao',
            'estado_id' => '11',
            'number' =>  '038',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tarimoro',
            'estado_id' => '11',
            'number' =>  '039',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tierra Blanca',
            'estado_id' => '11',
            'number' =>  '040',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Uriangato',
            'estado_id' => '11',
            'number' =>  '041',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Valle de Santiago',
            'estado_id' => '11',
            'number' =>  '042',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Victoria',
            'estado_id' => '11',
            'number' =>  '043',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Villagrán',
            'estado_id' => '11',
            'number' =>  '044',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Xichú',
            'estado_id' => '11',
            'number' =>  '045',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Yuriria',
            'estado_id' => '11',
            'number' =>  '046',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Acapulco de Juárez',
            'estado_id' => '12',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ahuacuotzingo',
            'estado_id' => '12',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ajuchitlán del Progreso',
            'estado_id' => '12',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Alcozauca de Guerrero',
            'estado_id' => '12',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Alpoyeca',
            'estado_id' => '12',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Apaxtla',
            'estado_id' => '12',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Arcelia',
            'estado_id' => '12',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Atenango del Río',
            'estado_id' => '12',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Atlamajalcingo del Monte',
            'estado_id' => '12',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Atlixtac',
            'estado_id' => '12',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Atoyac de Álvarez',
            'estado_id' => '12',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ayutla de los Libres',
            'estado_id' => '12',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Azoyú',
            'estado_id' => '12',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Benito Juárez',
            'estado_id' => '12',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Buenavista de Cuéllar',
            'estado_id' => '12',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Coahuayutla de José María Izazaga',
            'estado_id' => '12',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cocula',
            'estado_id' => '12',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Copala',
            'estado_id' => '12',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Copalillo',
            'estado_id' => '12',
            'number' =>  '019',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Copanatoyac',
            'estado_id' => '12',
            'number' =>  '020',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Coyuca de Benítez',
            'estado_id' => '12',
            'number' =>  '021',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Coyuca de Catalán',
            'estado_id' => '12',
            'number' =>  '022',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cuajinicuilapa',
            'estado_id' => '12',
            'number' =>  '023',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cualác',
            'estado_id' => '12',
            'number' =>  '024',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cuautepec',
            'estado_id' => '12',
            'number' =>  '025',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cuetzala del Progreso',
            'estado_id' => '12',
            'number' =>  '026',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cutzamala de Pinzón',
            'estado_id' => '12',
            'number' =>  '027',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chilapa de Álvarez',
            'estado_id' => '12',
            'number' =>  '028',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chilpancingo de los Bravo',
            'estado_id' => '12',
            'number' =>  '029',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Florencio Villarreal',
            'estado_id' => '12',
            'number' =>  '030',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'General Canuto A. Neri',
            'estado_id' => '12',
            'number' =>  '031',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'General Heliodoro Castillo',
            'estado_id' => '12',
            'number' =>  '032',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huamuxtitlán',
            'estado_id' => '12',
            'number' =>  '033',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huitzuco de los Figueroa',
            'estado_id' => '12',
            'number' =>  '034',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Iguala de la Independencia',
            'estado_id' => '12',
            'number' =>  '035',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Igualapa',
            'estado_id' => '12',
            'number' =>  '036',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ixcateopan de Cuauhtémoc',
            'estado_id' => '12',
            'number' =>  '037',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zihuatanejo de Azueta',
            'estado_id' => '12',
            'number' =>  '038',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Juan R. Escudero',
            'estado_id' => '12',
            'number' =>  '039',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Leonardo Bravo',
            'estado_id' => '12',
            'number' =>  '040',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Malinaltepec',
            'estado_id' => '12',
            'number' =>  '041',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mártir de Cuilapan',
            'estado_id' => '12',
            'number' =>  '042',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Metlatónoc',
            'estado_id' => '12',
            'number' =>  '043',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mochitlán',
            'estado_id' => '12',
            'number' =>  '044',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Olinalá',
            'estado_id' => '12',
            'number' =>  '045',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ometepec',
            'estado_id' => '12',
            'number' =>  '046',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Pedro Ascencio Alquisiras',
            'estado_id' => '12',
            'number' =>  '047',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Petatlán',
            'estado_id' => '12',
            'number' =>  '048',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Pilcaya',
            'estado_id' => '12',
            'number' =>  '049',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Pungarabato',
            'estado_id' => '12',
            'number' =>  '050',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Quechultenango',
            'estado_id' => '12',
            'number' =>  '051',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Luis Acatlán',
            'estado_id' => '12',
            'number' =>  '052',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Marcos',
            'estado_id' => '12',
            'number' =>  '053',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Miguel Totolapan',
            'estado_id' => '12',
            'number' =>  '054',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Taxco de Alarcón',
            'estado_id' => '12',
            'number' =>  '055',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tecoanapa',
            'estado_id' => '12',
            'number' =>  '056',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Técpan de Galeana',
            'estado_id' => '12',
            'number' =>  '057',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Teloloapan',
            'estado_id' => '12',
            'number' =>  '058',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tepecoacuilco de Trujano',
            'estado_id' => '12',
            'number' =>  '059',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tetipac',
            'estado_id' => '12',
            'number' =>  '060',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tixtla de Guerrero',
            'estado_id' => '12',
            'number' =>  '061',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlacoachistlahuaca',
            'estado_id' => '12',
            'number' =>  '062',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlacoapa',
            'estado_id' => '12',
            'number' =>  '063',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlalchapa',
            'estado_id' => '12',
            'number' =>  '064',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlalixtaquilla de Maldonado',
            'estado_id' => '12',
            'number' =>  '065',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlapa de Comonfort',
            'estado_id' => '12',
            'number' =>  '066',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlapehuala',
            'estado_id' => '12',
            'number' =>  '067',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'La Unión de Isidoro Montes de Oca',
            'estado_id' => '12',
            'number' =>  '068',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Xalpatláhuac',
            'estado_id' => '12',
            'number' =>  '069',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Xochihuehuetlán',
            'estado_id' => '12',
            'number' =>  '070',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Xochistlahuaca',
            'estado_id' => '12',
            'number' =>  '071',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zapotitlán Tablas',
            'estado_id' => '12',
            'number' =>  '072',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zirándaro',
            'estado_id' => '12',
            'number' =>  '073',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zitlala',
            'estado_id' => '12',
            'number' =>  '074',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Eduardo Neri',
            'estado_id' => '12',
            'number' =>  '075',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Acatepec',
            'estado_id' => '12',
            'number' =>  '076',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Marquelia',
            'estado_id' => '12',
            'number' =>  '077',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cochoapa el Grande',
            'estado_id' => '12',
            'number' =>  '078',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'José Joaquín de Herrera',
            'estado_id' => '12',
            'number' =>  '079',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Juchitán',
            'estado_id' => '12',
            'number' =>  '080',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Iliatenco',
            'estado_id' => '12',
            'number' =>  '081',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Acatlán',
            'estado_id' => '13',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Acaxochitlán',
            'estado_id' => '13',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Actopan',
            'estado_id' => '13',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Agua Blanca de Iturbide',
            'estado_id' => '13',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ajacuba',
            'estado_id' => '13',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Alfajayucan',
            'estado_id' => '13',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Almoloya',
            'estado_id' => '13',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Apan',
            'estado_id' => '13',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'El Arenal',
            'estado_id' => '13',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Atitalaquia',
            'estado_id' => '13',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Atlapexco',
            'estado_id' => '13',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Atotonilco el Grande',
            'estado_id' => '13',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Atotonilco de Tula',
            'estado_id' => '13',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Calnali',
            'estado_id' => '13',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cardonal',
            'estado_id' => '13',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cuautepec de Hinojosa',
            'estado_id' => '13',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chapantongo',
            'estado_id' => '13',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chapulhuacán',
            'estado_id' => '13',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chilcuautla',
            'estado_id' => '13',
            'number' =>  '019',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Eloxochitlán',
            'estado_id' => '13',
            'number' =>  '020',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Emiliano Zapata',
            'estado_id' => '13',
            'number' =>  '021',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Epazoyucan',
            'estado_id' => '13',
            'number' =>  '022',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Francisco I. Madero',
            'estado_id' => '13',
            'number' =>  '023',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huasca de Ocampo',
            'estado_id' => '13',
            'number' =>  '024',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huautla',
            'estado_id' => '13',
            'number' =>  '025',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huazalingo',
            'estado_id' => '13',
            'number' =>  '026',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huehuetla',
            'estado_id' => '13',
            'number' =>  '027',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huejutla de Reyes',
            'estado_id' => '13',
            'number' =>  '028',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huichapan',
            'estado_id' => '13',
            'number' =>  '029',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ixmiquilpan',
            'estado_id' => '13',
            'number' =>  '030',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jacala de Ledezma',
            'estado_id' => '13',
            'number' =>  '031',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jaltocán',
            'estado_id' => '13',
            'number' =>  '032',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Juárez Hidalgo',
            'estado_id' => '13',
            'number' =>  '033',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Lolotla',
            'estado_id' => '13',
            'number' =>  '034',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Metepec',
            'estado_id' => '13',
            'number' =>  '035',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Agustín Metzquititlán',
            'estado_id' => '13',
            'number' =>  '036',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Metztitlán',
            'estado_id' => '13',
            'number' =>  '037',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mineral del Chico',
            'estado_id' => '13',
            'number' =>  '038',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mineral del Monte',
            'estado_id' => '13',
            'number' =>  '039',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'La Misión',
            'estado_id' => '13',
            'number' =>  '040',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mixquiahuala de Juárez',
            'estado_id' => '13',
            'number' =>  '041',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Molango de Escamilla',
            'estado_id' => '13',
            'number' =>  '042',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Nicolás Flores',
            'estado_id' => '13',
            'number' =>  '043',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Nopala de Villagrán',
            'estado_id' => '13',
            'number' =>  '044',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Omitlán de Juárez',
            'estado_id' => '13',
            'number' =>  '045',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Felipe Orizatlán',
            'estado_id' => '13',
            'number' =>  '046',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Pacula',
            'estado_id' => '13',
            'number' =>  '047',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Pachuca de Soto',
            'estado_id' => '13',
            'number' =>  '048',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Pisaflores',
            'estado_id' => '13',
            'number' =>  '049',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Progreso de Obregón',
            'estado_id' => '13',
            'number' =>  '050',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mineral de la Reforma',
            'estado_id' => '13',
            'number' =>  '051',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Agustín Tlaxiaca',
            'estado_id' => '13',
            'number' =>  '052',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Bartolo Tutotepec',
            'estado_id' => '13',
            'number' =>  '053',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Salvador',
            'estado_id' => '13',
            'number' =>  '054',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago de Anaya',
            'estado_id' => '13',
            'number' =>  '055',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Tulantepec de Lugo Guerrero',
            'estado_id' => '13',
            'number' =>  '056',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Singuilucan',
            'estado_id' => '13',
            'number' =>  '057',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tasquillo',
            'estado_id' => '13',
            'number' =>  '058',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tecozautla',
            'estado_id' => '13',
            'number' =>  '059',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tenango de Doria',
            'estado_id' => '13',
            'number' =>  '060',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tepeapulco',
            'estado_id' => '13',
            'number' =>  '061',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tepehuacán de Guerrero',
            'estado_id' => '13',
            'number' =>  '062',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tepeji del Río de Ocampo',
            'estado_id' => '13',
            'number' =>  '063',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tepetitlán',
            'estado_id' => '13',
            'number' =>  '064',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tetepango',
            'estado_id' => '13',
            'number' =>  '065',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Villa de Tezontepec',
            'estado_id' => '13',
            'number' =>  '066',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tezontepec de Aldama',
            'estado_id' => '13',
            'number' =>  '067',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tianguistengo',
            'estado_id' => '13',
            'number' =>  '068',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tizayuca',
            'estado_id' => '13',
            'number' =>  '069',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlahuelilpan',
            'estado_id' => '13',
            'number' =>  '070',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlahuiltepa',
            'estado_id' => '13',
            'number' =>  '071',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlanalapa',
            'estado_id' => '13',
            'number' =>  '072',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlanchinol',
            'estado_id' => '13',
            'number' =>  '073',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlaxcoapan',
            'estado_id' => '13',
            'number' =>  '074',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tolcayuca',
            'estado_id' => '13',
            'number' =>  '075',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tula de Allende',
            'estado_id' => '13',
            'number' =>  '076',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tulancingo de Bravo',
            'estado_id' => '13',
            'number' =>  '077',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Xochiatipan',
            'estado_id' => '13',
            'number' =>  '078',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Xochicoatlán',
            'estado_id' => '13',
            'number' =>  '079',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Yahualica',
            'estado_id' => '13',
            'number' =>  '080',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zacualtipán de Ángeles',
            'estado_id' => '13',
            'number' =>  '081',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zapotlán de Juárez',
            'estado_id' => '13',
            'number' =>  '082',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zempoala',
            'estado_id' => '13',
            'number' =>  '083',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zimapán',
            'estado_id' => '13',
            'number' =>  '084',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Acatic',
            'estado_id' => '14',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Acatlán de Juárez',
            'estado_id' => '14',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ahualulco de Mercado',
            'estado_id' => '14',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Amacueca',
            'estado_id' => '14',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Amatitán',
            'estado_id' => '14',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ameca',
            'estado_id' => '14',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juanito de Escobedo',
            'estado_id' => '14',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Arandas',
            'estado_id' => '14',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'El Arenal',
            'estado_id' => '14',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Atemajac de Brizuela',
            'estado_id' => '14',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Atengo',
            'estado_id' => '14',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Atenguillo',
            'estado_id' => '14',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Atotonilco el Alto',
            'estado_id' => '14',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Atoyac',
            'estado_id' => '14',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Autlán de Navarro',
            'estado_id' => '14',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ayotlán',
            'estado_id' => '14',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ayutla',
            'estado_id' => '14',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'La Barca',
            'estado_id' => '14',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Bolaños',
            'estado_id' => '14',
            'number' =>  '019',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cabo Corrientes',
            'estado_id' => '14',
            'number' =>  '020',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Casimiro Castillo',
            'estado_id' => '14',
            'number' =>  '021',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cihuatlán',
            'estado_id' => '14',
            'number' =>  '022',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zapotlán el Grande',
            'estado_id' => '14',
            'number' =>  '023',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cocula',
            'estado_id' => '14',
            'number' =>  '024',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Colotlán',
            'estado_id' => '14',
            'number' =>  '025',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Concepción de Buenos Aires',
            'estado_id' => '14',
            'number' =>  '026',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cuautitlán de García Barragán',
            'estado_id' => '14',
            'number' =>  '027',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cuautla',
            'estado_id' => '14',
            'number' =>  '028',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cuquío',
            'estado_id' => '14',
            'number' =>  '029',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chapala',
            'estado_id' => '14',
            'number' =>  '030',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chimaltitán',
            'estado_id' => '14',
            'number' =>  '031',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chiquilistlán',
            'estado_id' => '14',
            'number' =>  '032',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Degollado',
            'estado_id' => '14',
            'number' =>  '033',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ejutla',
            'estado_id' => '14',
            'number' =>  '034',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Encarnación de Díaz',
            'estado_id' => '14',
            'number' =>  '035',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Etzatlán',
            'estado_id' => '14',
            'number' =>  '036',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'El Grullo',
            'estado_id' => '14',
            'number' =>  '037',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Guachinango',
            'estado_id' => '14',
            'number' =>  '038',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Guadalajara',
            'estado_id' => '14',
            'number' =>  '039',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Hostotipaquillo',
            'estado_id' => '14',
            'number' =>  '040',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huejúcar',
            'estado_id' => '14',
            'number' =>  '041',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huejuquilla el Alto',
            'estado_id' => '14',
            'number' =>  '042',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'La Huerta',
            'estado_id' => '14',
            'number' =>  '043',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ixtlahuacán de los Membrillos',
            'estado_id' => '14',
            'number' =>  '044',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ixtlahuacán del Río',
            'estado_id' => '14',
            'number' =>  '045',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jalostotitlán',
            'estado_id' => '14',
            'number' =>  '046',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jamay',
            'estado_id' => '14',
            'number' =>  '047',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jesús María',
            'estado_id' => '14',
            'number' =>  '048',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jilotlán de los Dolores',
            'estado_id' => '14',
            'number' =>  '049',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jocotepec',
            'estado_id' => '14',
            'number' =>  '050',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Juanacatlán',
            'estado_id' => '14',
            'number' =>  '051',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Juchitlán',
            'estado_id' => '14',
            'number' =>  '052',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Lagos de Moreno',
            'estado_id' => '14',
            'number' =>  '053',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'El Limón',
            'estado_id' => '14',
            'number' =>  '054',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Magdalena',
            'estado_id' => '14',
            'number' =>  '055',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María del Oro',
            'estado_id' => '14',
            'number' =>  '056',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'La Manzanilla de la Paz',
            'estado_id' => '14',
            'number' =>  '057',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mascota',
            'estado_id' => '14',
            'number' =>  '058',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mazamitla',
            'estado_id' => '14',
            'number' =>  '059',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mexticacán',
            'estado_id' => '14',
            'number' =>  '060',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mezquitic',
            'estado_id' => '14',
            'number' =>  '061',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mixtlán',
            'estado_id' => '14',
            'number' =>  '062',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ocotlán',
            'estado_id' => '14',
            'number' =>  '063',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ojuelos de Jalisco',
            'estado_id' => '14',
            'number' =>  '064',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Pihuamo',
            'estado_id' => '14',
            'number' =>  '065',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Poncitlán',
            'estado_id' => '14',
            'number' =>  '066',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Puerto Vallarta',
            'estado_id' => '14',
            'number' =>  '067',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Villa Purificación',
            'estado_id' => '14',
            'number' =>  '068',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Quitupan',
            'estado_id' => '14',
            'number' =>  '069',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'El Salto',
            'estado_id' => '14',
            'number' =>  '070',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Cristóbal de la Barranca',
            'estado_id' => '14',
            'number' =>  '071',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Diego de Alejandría',
            'estado_id' => '14',
            'number' =>  '072',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan de los Lagos',
            'estado_id' => '14',
            'number' =>  '073',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Julián',
            'estado_id' => '14',
            'number' =>  '074',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Marcos',
            'estado_id' => '14',
            'number' =>  '075',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Martín de Bolaños',
            'estado_id' => '14',
            'number' =>  '076',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Martín Hidalgo',
            'estado_id' => '14',
            'number' =>  '077',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Miguel el Alto',
            'estado_id' => '14',
            'number' =>  '078',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Gómez Farías',
            'estado_id' => '14',
            'number' =>  '079',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Sebastián del Oeste',
            'estado_id' => '14',
            'number' =>  '080',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María de los Ángeles',
            'estado_id' => '14',
            'number' =>  '081',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Sayula',
            'estado_id' => '14',
            'number' =>  '082',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tala',
            'estado_id' => '14',
            'number' =>  '083',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Talpa de Allende',
            'estado_id' => '14',
            'number' =>  '084',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tamazula de Gordiano',
            'estado_id' => '14',
            'number' =>  '085',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tapalpa',
            'estado_id' => '14',
            'number' =>  '086',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tecalitlán',
            'estado_id' => '14',
            'number' =>  '087',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tecolotlán',
            'estado_id' => '14',
            'number' =>  '088',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Techaluta de Montenegro',
            'estado_id' => '14',
            'number' =>  '089',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tenamaxtlán',
            'estado_id' => '14',
            'number' =>  '090',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Teocaltiche',
            'estado_id' => '14',
            'number' =>  '091',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Teocuitatlán de Corona',
            'estado_id' => '14',
            'number' =>  '092',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tepatitlán de Morelos',
            'estado_id' => '14',
            'number' =>  '093',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tequila',
            'estado_id' => '14',
            'number' =>  '094',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Teuchitlán',
            'estado_id' => '14',
            'number' =>  '095',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tizapán el Alto',
            'estado_id' => '14',
            'number' =>  '096',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlajomulco de Zúñiga',
            'estado_id' => '14',
            'number' =>  '097',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro Tlaquepaque',
            'estado_id' => '14',
            'number' =>  '098',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tolimán',
            'estado_id' => '14',
            'number' =>  '099',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tomatlán',
            'estado_id' => '14',
            'number' =>  '100',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tonalá',
            'estado_id' => '14',
            'number' =>  '101',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tonaya',
            'estado_id' => '14',
            'number' =>  '102',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tonila',
            'estado_id' => '14',
            'number' =>  '103',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Totatiche',
            'estado_id' => '14',
            'number' =>  '104',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tototlán',
            'estado_id' => '14',
            'number' =>  '105',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tuxcacuesco',
            'estado_id' => '14',
            'number' =>  '106',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tuxcueca',
            'estado_id' => '14',
            'number' =>  '107',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tuxpan',
            'estado_id' => '14',
            'number' =>  '108',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Unión de San Antonio',
            'estado_id' => '14',
            'number' =>  '109',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Unión de Tula',
            'estado_id' => '14',
            'number' =>  '110',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Valle de Guadalupe',
            'estado_id' => '14',
            'number' =>  '111',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Valle de Juárez',
            'estado_id' => '14',
            'number' =>  '112',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Gabriel',
            'estado_id' => '14',
            'number' =>  '113',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Villa Corona',
            'estado_id' => '14',
            'number' =>  '114',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Villa Guerrero',
            'estado_id' => '14',
            'number' =>  '115',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Villa Hidalgo',
            'estado_id' => '14',
            'number' =>  '116',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cañadas de Obregón',
            'estado_id' => '14',
            'number' =>  '117',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Yahualica de González Gallo',
            'estado_id' => '14',
            'number' =>  '118',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zacoalco de Torres',
            'estado_id' => '14',
            'number' =>  '119',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zapopan',
            'estado_id' => '14',
            'number' =>  '120',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zapotiltic',
            'estado_id' => '14',
            'number' =>  '121',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zapotitlán de Vadillo',
            'estado_id' => '14',
            'number' =>  '122',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zapotlán del Rey',
            'estado_id' => '14',
            'number' =>  '123',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zapotlanejo',
            'estado_id' => '14',
            'number' =>  '124',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Ignacio Cerro Gordo',
            'estado_id' => '14',
            'number' =>  '125',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Acambay de Ruíz Castañeda',
            'estado_id' => '15',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Acolman',
            'estado_id' => '15',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Aculco',
            'estado_id' => '15',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Almoloya de Alquisiras',
            'estado_id' => '15',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Almoloya de Juárez',
            'estado_id' => '15',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Almoloya del Río',
            'estado_id' => '15',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Amanalco',
            'estado_id' => '15',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Amatepec',
            'estado_id' => '15',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Amecameca',
            'estado_id' => '15',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Apaxco',
            'estado_id' => '15',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Atenco',
            'estado_id' => '15',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Atizapán',
            'estado_id' => '15',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Atizapán de Zaragoza',
            'estado_id' => '15',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Atlacomulco',
            'estado_id' => '15',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Atlautla',
            'estado_id' => '15',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Axapusco',
            'estado_id' => '15',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ayapango',
            'estado_id' => '15',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Calimaya',
            'estado_id' => '15',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Capulhuac',
            'estado_id' => '15',
            'number' =>  '019',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Coacalco de Berriozábal',
            'estado_id' => '15',
            'number' =>  '020',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Coatepec Harinas',
            'estado_id' => '15',
            'number' =>  '021',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cocotitlán',
            'estado_id' => '15',
            'number' =>  '022',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Coyotepec',
            'estado_id' => '15',
            'number' =>  '023',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cuautitlán',
            'estado_id' => '15',
            'number' =>  '024',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chalco',
            'estado_id' => '15',
            'number' =>  '025',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chapa de Mota',
            'estado_id' => '15',
            'number' =>  '026',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chapultepec',
            'estado_id' => '15',
            'number' =>  '027',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chiautla',
            'estado_id' => '15',
            'number' =>  '028',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chicoloapan',
            'estado_id' => '15',
            'number' =>  '029',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chiconcuac',
            'estado_id' => '15',
            'number' =>  '030',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chimalhuacán',
            'estado_id' => '15',
            'number' =>  '031',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Donato Guerra',
            'estado_id' => '15',
            'number' =>  '032',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ecatepec de Morelos',
            'estado_id' => '15',
            'number' =>  '033',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ecatzingo',
            'estado_id' => '15',
            'number' =>  '034',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huehuetoca',
            'estado_id' => '15',
            'number' =>  '035',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Hueypoxtla',
            'estado_id' => '15',
            'number' =>  '036',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huixquilucan',
            'estado_id' => '15',
            'number' =>  '037',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Isidro Fabela',
            'estado_id' => '15',
            'number' =>  '038',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ixtapaluca',
            'estado_id' => '15',
            'number' =>  '039',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ixtapan de la Sal',
            'estado_id' => '15',
            'number' =>  '040',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ixtapan del Oro',
            'estado_id' => '15',
            'number' =>  '041',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ixtlahuaca',
            'estado_id' => '15',
            'number' =>  '042',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Xalatlaco',
            'estado_id' => '15',
            'number' =>  '043',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jaltenco',
            'estado_id' => '15',
            'number' =>  '044',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jilotepec',
            'estado_id' => '15',
            'number' =>  '045',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jilotzingo',
            'estado_id' => '15',
            'number' =>  '046',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jiquipilco',
            'estado_id' => '15',
            'number' =>  '047',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jocotitlán',
            'estado_id' => '15',
            'number' =>  '048',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Joquicingo',
            'estado_id' => '15',
            'number' =>  '049',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Juchitepec',
            'estado_id' => '15',
            'number' =>  '050',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Lerma',
            'estado_id' => '15',
            'number' =>  '051',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Malinalco',
            'estado_id' => '15',
            'number' =>  '052',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Melchor Ocampo',
            'estado_id' => '15',
            'number' =>  '053',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Metepec',
            'estado_id' => '15',
            'number' =>  '054',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mexicaltzingo',
            'estado_id' => '15',
            'number' =>  '055',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Morelos',
            'estado_id' => '15',
            'number' =>  '056',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Naucalpan de Juárez',
            'estado_id' => '15',
            'number' =>  '057',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Nezahualcóyotl',
            'estado_id' => '15',
            'number' =>  '058',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Nextlalpan',
            'estado_id' => '15',
            'number' =>  '059',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Nicolás Romero',
            'estado_id' => '15',
            'number' =>  '060',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Nopaltepec',
            'estado_id' => '15',
            'number' =>  '061',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ocoyoacac',
            'estado_id' => '15',
            'number' =>  '062',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ocuilan',
            'estado_id' => '15',
            'number' =>  '063',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'El Oro',
            'estado_id' => '15',
            'number' =>  '064',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Otumba',
            'estado_id' => '15',
            'number' =>  '065',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Otzoloapan',
            'estado_id' => '15',
            'number' =>  '066',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Otzolotepec',
            'estado_id' => '15',
            'number' =>  '067',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ozumba',
            'estado_id' => '15',
            'number' =>  '068',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Papalotla',
            'estado_id' => '15',
            'number' =>  '069',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'La Paz',
            'estado_id' => '15',
            'number' =>  '070',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Polotitlán',
            'estado_id' => '15',
            'number' =>  '071',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Rayón',
            'estado_id' => '15',
            'number' =>  '072',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Antonio la Isla',
            'estado_id' => '15',
            'number' =>  '073',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Felipe del Progreso',
            'estado_id' => '15',
            'number' =>  '074',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Martín de las Pirámides',
            'estado_id' => '15',
            'number' =>  '075',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Mateo Atenco',
            'estado_id' => '15',
            'number' =>  '076',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Simón de Guerrero',
            'estado_id' => '15',
            'number' =>  '077',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santo Tomás',
            'estado_id' => '15',
            'number' =>  '078',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Soyaniquilpan de Juárez',
            'estado_id' => '15',
            'number' =>  '079',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Sultepec',
            'estado_id' => '15',
            'number' =>  '080',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tecámac',
            'estado_id' => '15',
            'number' =>  '081',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tejupilco',
            'estado_id' => '15',
            'number' =>  '082',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Temamatla',
            'estado_id' => '15',
            'number' =>  '083',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Temascalapa',
            'estado_id' => '15',
            'number' =>  '084',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Temascalcingo',
            'estado_id' => '15',
            'number' =>  '085',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Temascaltepec',
            'estado_id' => '15',
            'number' =>  '086',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Temoaya',
            'estado_id' => '15',
            'number' =>  '087',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tenancingo',
            'estado_id' => '15',
            'number' =>  '088',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tenango del Aire',
            'estado_id' => '15',
            'number' =>  '089',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tenango del Valle',
            'estado_id' => '15',
            'number' =>  '090',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Teoloyucan',
            'estado_id' => '15',
            'number' =>  '091',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Teotihuacán',
            'estado_id' => '15',
            'number' =>  '092',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tepetlaoxtoc',
            'estado_id' => '15',
            'number' =>  '093',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tepetlixpa',
            'estado_id' => '15',
            'number' =>  '094',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tepotzotlán',
            'estado_id' => '15',
            'number' =>  '095',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tequixquiac',
            'estado_id' => '15',
            'number' =>  '096',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Texcaltitlán',
            'estado_id' => '15',
            'number' =>  '097',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Texcalyacac',
            'estado_id' => '15',
            'number' =>  '098',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Texcoco',
            'estado_id' => '15',
            'number' =>  '099',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tezoyuca',
            'estado_id' => '15',
            'number' =>  '100',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tianguistenco',
            'estado_id' => '15',
            'number' =>  '101',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Timilpan',
            'estado_id' => '15',
            'number' =>  '102',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlalmanalco',
            'estado_id' => '15',
            'number' =>  '103',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlalnepantla de Baz',
            'estado_id' => '15',
            'number' =>  '104',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlatlaya',
            'estado_id' => '15',
            'number' =>  '105',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Toluca',
            'estado_id' => '15',
            'number' =>  '106',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tonatico',
            'estado_id' => '15',
            'number' =>  '107',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tultepec',
            'estado_id' => '15',
            'number' =>  '108',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tultitlán',
            'estado_id' => '15',
            'number' =>  '109',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Valle de Bravo',
            'estado_id' => '15',
            'number' =>  '110',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Villa de Allende',
            'estado_id' => '15',
            'number' =>  '111',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Villa del Carbón',
            'estado_id' => '15',
            'number' =>  '112',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Villa Guerrero',
            'estado_id' => '15',
            'number' =>  '113',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Villa Victoria',
            'estado_id' => '15',
            'number' =>  '114',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Xonacatlán',
            'estado_id' => '15',
            'number' =>  '115',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zacazonapan',
            'estado_id' => '15',
            'number' =>  '116',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zacualpan',
            'estado_id' => '15',
            'number' =>  '117',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zinacantepec',
            'estado_id' => '15',
            'number' =>  '118',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zumpahuacán',
            'estado_id' => '15',
            'number' =>  '119',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zumpango',
            'estado_id' => '15',
            'number' =>  '120',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cuautitlán Izcalli',
            'estado_id' => '15',
            'number' =>  '121',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Valle de Chalco Solidaridad',
            'estado_id' => '15',
            'number' =>  '122',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Luvianos',
            'estado_id' => '15',
            'number' =>  '123',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San José del Rincón',
            'estado_id' => '15',
            'number' =>  '124',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tonanitla',
            'estado_id' => '15',
            'number' =>  '125',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Acuitzio',
            'estado_id' => '16',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Aguililla',
            'estado_id' => '16',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Álvaro Obregón',
            'estado_id' => '16',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Angamacutiro',
            'estado_id' => '16',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Angangueo',
            'estado_id' => '16',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Apatzingán',
            'estado_id' => '16',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Aporo',
            'estado_id' => '16',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Aquila',
            'estado_id' => '16',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ario',
            'estado_id' => '16',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Arteaga',
            'estado_id' => '16',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Briseñas',
            'estado_id' => '16',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Buenavista',
            'estado_id' => '16',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Carácuaro',
            'estado_id' => '16',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Coahuayana',
            'estado_id' => '16',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Coalcomán de Vázquez Pallares',
            'estado_id' => '16',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Coeneo',
            'estado_id' => '16',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Contepec',
            'estado_id' => '16',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Copándaro',
            'estado_id' => '16',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cotija',
            'estado_id' => '16',
            'number' =>  '019',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cuitzeo',
            'estado_id' => '16',
            'number' =>  '020',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Charapan',
            'estado_id' => '16',
            'number' =>  '021',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Charo',
            'estado_id' => '16',
            'number' =>  '022',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chavinda',
            'estado_id' => '16',
            'number' =>  '023',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cherán',
            'estado_id' => '16',
            'number' =>  '024',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chilchota',
            'estado_id' => '16',
            'number' =>  '025',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chinicuila',
            'estado_id' => '16',
            'number' =>  '026',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chucándiro',
            'estado_id' => '16',
            'number' =>  '027',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Churintzio',
            'estado_id' => '16',
            'number' =>  '028',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Churumuco',
            'estado_id' => '16',
            'number' =>  '029',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ecuandureo',
            'estado_id' => '16',
            'number' =>  '030',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Epitacio Huerta',
            'estado_id' => '16',
            'number' =>  '031',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Erongarícuaro',
            'estado_id' => '16',
            'number' =>  '032',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Gabriel Zamora',
            'estado_id' => '16',
            'number' =>  '033',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Hidalgo',
            'estado_id' => '16',
            'number' =>  '034',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'La Huacana',
            'estado_id' => '16',
            'number' =>  '035',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huandacareo',
            'estado_id' => '16',
            'number' =>  '036',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huaniqueo',
            'estado_id' => '16',
            'number' =>  '037',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huetamo',
            'estado_id' => '16',
            'number' =>  '038',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huiramba',
            'estado_id' => '16',
            'number' =>  '039',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Indaparapeo',
            'estado_id' => '16',
            'number' =>  '040',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Irimbo',
            'estado_id' => '16',
            'number' =>  '041',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ixtlán',
            'estado_id' => '16',
            'number' =>  '042',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jacona',
            'estado_id' => '16',
            'number' =>  '043',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jiménez',
            'estado_id' => '16',
            'number' =>  '044',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jiquilpan',
            'estado_id' => '16',
            'number' =>  '045',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Juárez',
            'estado_id' => '16',
            'number' =>  '046',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jungapeo',
            'estado_id' => '16',
            'number' =>  '047',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Lagunillas',
            'estado_id' => '16',
            'number' =>  '048',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Madero',
            'estado_id' => '16',
            'number' =>  '049',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Maravatío',
            'estado_id' => '16',
            'number' =>  '050',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Marcos Castellanos',
            'estado_id' => '16',
            'number' =>  '051',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Lázaro Cárdenas',
            'estado_id' => '16',
            'number' =>  '052',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Morelia',
            'estado_id' => '16',
            'number' =>  '053',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Morelos',
            'estado_id' => '16',
            'number' =>  '054',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Múgica',
            'estado_id' => '16',
            'number' =>  '055',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Nahuatzen',
            'estado_id' => '16',
            'number' =>  '056',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Nocupétaro',
            'estado_id' => '16',
            'number' =>  '057',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Nuevo Parangaricutiro',
            'estado_id' => '16',
            'number' =>  '058',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Nuevo Urecho',
            'estado_id' => '16',
            'number' =>  '059',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Numarán',
            'estado_id' => '16',
            'number' =>  '060',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ocampo',
            'estado_id' => '16',
            'number' =>  '061',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Pajacuarán',
            'estado_id' => '16',
            'number' =>  '062',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Panindícuaro',
            'estado_id' => '16',
            'number' =>  '063',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Parácuaro',
            'estado_id' => '16',
            'number' =>  '064',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Paracho',
            'estado_id' => '16',
            'number' =>  '065',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Pátzcuaro',
            'estado_id' => '16',
            'number' =>  '066',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Penjamillo',
            'estado_id' => '16',
            'number' =>  '067',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Peribán',
            'estado_id' => '16',
            'number' =>  '068',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'La Piedad',
            'estado_id' => '16',
            'number' =>  '069',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Purépero',
            'estado_id' => '16',
            'number' =>  '070',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Puruándiro',
            'estado_id' => '16',
            'number' =>  '071',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Queréndaro',
            'estado_id' => '16',
            'number' =>  '072',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Quiroga',
            'estado_id' => '16',
            'number' =>  '073',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cojumatlán de Régules',
            'estado_id' => '16',
            'number' =>  '074',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Los Reyes',
            'estado_id' => '16',
            'number' =>  '075',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Sahuayo',
            'estado_id' => '16',
            'number' =>  '076',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Lucas',
            'estado_id' => '16',
            'number' =>  '077',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Ana Maya',
            'estado_id' => '16',
            'number' =>  '078',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Salvador Escalante',
            'estado_id' => '16',
            'number' =>  '079',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Senguio',
            'estado_id' => '16',
            'number' =>  '080',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Susupuato',
            'estado_id' => '16',
            'number' =>  '081',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tacámbaro',
            'estado_id' => '16',
            'number' =>  '082',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tancítaro',
            'estado_id' => '16',
            'number' =>  '083',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tangamandapio',
            'estado_id' => '16',
            'number' =>  '084',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tangancícuaro',
            'estado_id' => '16',
            'number' =>  '085',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tanhuato',
            'estado_id' => '16',
            'number' =>  '086',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Taretan',
            'estado_id' => '16',
            'number' =>  '087',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tarímbaro',
            'estado_id' => '16',
            'number' =>  '088',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tepalcatepec',
            'estado_id' => '16',
            'number' =>  '089',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tingambato',
            'estado_id' => '16',
            'number' =>  '090',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tingüindín',
            'estado_id' => '16',
            'number' =>  '091',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tiquicheo de Nicolás Romero',
            'estado_id' => '16',
            'number' =>  '092',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlalpujahua',
            'estado_id' => '16',
            'number' =>  '093',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlazazalca',
            'estado_id' => '16',
            'number' =>  '094',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tocumbo',
            'estado_id' => '16',
            'number' =>  '095',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tumbiscatío',
            'estado_id' => '16',
            'number' =>  '096',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Turicato',
            'estado_id' => '16',
            'number' =>  '097',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tuxpan',
            'estado_id' => '16',
            'number' =>  '098',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tuzantla',
            'estado_id' => '16',
            'number' =>  '099',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tzintzuntzan',
            'estado_id' => '16',
            'number' =>  '100',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tzitzio',
            'estado_id' => '16',
            'number' =>  '101',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Uruapan',
            'estado_id' => '16',
            'number' =>  '102',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Venustiano Carranza',
            'estado_id' => '16',
            'number' =>  '103',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Villamar',
            'estado_id' => '16',
            'number' =>  '104',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Vista Hermosa',
            'estado_id' => '16',
            'number' =>  '105',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Yurécuaro',
            'estado_id' => '16',
            'number' =>  '106',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zacapu',
            'estado_id' => '16',
            'number' =>  '107',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zamora',
            'estado_id' => '16',
            'number' =>  '108',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zináparo',
            'estado_id' => '16',
            'number' =>  '109',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zinapécuaro',
            'estado_id' => '16',
            'number' =>  '110',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ziracuaretiro',
            'estado_id' => '16',
            'number' =>  '111',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zitácuaro',
            'estado_id' => '16',
            'number' =>  '112',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'José Sixto Verduzco',
            'estado_id' => '16',
            'number' =>  '113',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Amacuzac',
            'estado_id' => '17',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Atlatlahucan',
            'estado_id' => '17',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Axochiapan',
            'estado_id' => '17',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ayala',
            'estado_id' => '17',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Coatlán del Río',
            'estado_id' => '17',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cuautla',
            'estado_id' => '17',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cuernavaca',
            'estado_id' => '17',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Emiliano Zapata',
            'estado_id' => '17',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huitzilac',
            'estado_id' => '17',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jantetelco',
            'estado_id' => '17',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jiutepec',
            'estado_id' => '17',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jojutla',
            'estado_id' => '17',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jonacatepec',
            'estado_id' => '17',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mazatepec',
            'estado_id' => '17',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Miacatlán',
            'estado_id' => '17',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ocuituco',
            'estado_id' => '17',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Puente de Ixtla',
            'estado_id' => '17',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Temixco',
            'estado_id' => '17',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tepalcingo',
            'estado_id' => '17',
            'number' =>  '019',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tepoztlán',
            'estado_id' => '17',
            'number' =>  '020',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tetecala',
            'estado_id' => '17',
            'number' =>  '021',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tetela del Volcán',
            'estado_id' => '17',
            'number' =>  '022',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlalnepantla',
            'estado_id' => '17',
            'number' =>  '023',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlaltizapán de Zapata',
            'estado_id' => '17',
            'number' =>  '024',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlaquiltenango',
            'estado_id' => '17',
            'number' =>  '025',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlayacapan',
            'estado_id' => '17',
            'number' =>  '026',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Totolapan',
            'estado_id' => '17',
            'number' =>  '027',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Xochitepec',
            'estado_id' => '17',
            'number' =>  '028',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Yautepec',
            'estado_id' => '17',
            'number' =>  '029',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Yecapixtla',
            'estado_id' => '17',
            'number' =>  '030',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zacatepec',
            'estado_id' => '17',
            'number' =>  '031',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zacualpan de Amilpas',
            'estado_id' => '17',
            'number' =>  '032',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Temoac',
            'estado_id' => '17',
            'number' =>  '033',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Acaponeta',
            'estado_id' => '18',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ahuacatlán',
            'estado_id' => '18',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Amatlán de Cañas',
            'estado_id' => '18',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Compostela',
            'estado_id' => '18',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huajicori',
            'estado_id' => '18',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ixtlán del Río',
            'estado_id' => '18',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jala',
            'estado_id' => '18',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Xalisco',
            'estado_id' => '18',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Del Nayar',
            'estado_id' => '18',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Rosamorada',
            'estado_id' => '18',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ruíz',
            'estado_id' => '18',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Blas',
            'estado_id' => '18',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro Lagunillas',
            'estado_id' => '18',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María del Oro',
            'estado_id' => '18',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Ixcuintla',
            'estado_id' => '18',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tecuala',
            'estado_id' => '18',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tepic',
            'estado_id' => '18',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tuxpan',
            'estado_id' => '18',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'La Yesca',
            'estado_id' => '18',
            'number' =>  '019',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Bahía de Banderas',
            'estado_id' => '18',
            'number' =>  '020',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Abasolo',
            'estado_id' => '19',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Agualeguas',
            'estado_id' => '19',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Los Aldamas',
            'estado_id' => '19',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Allende',
            'estado_id' => '19',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Anáhuac',
            'estado_id' => '19',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Apodaca',
            'estado_id' => '19',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Aramberri',
            'estado_id' => '19',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Bustamante',
            'estado_id' => '19',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cadereyta Jiménez',
            'estado_id' => '19',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'El Carmen',
            'estado_id' => '19',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cerralvo',
            'estado_id' => '19',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ciénega de Flores',
            'estado_id' => '19',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'China',
            'estado_id' => '19',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Doctor Arroyo',
            'estado_id' => '19',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Doctor Coss',
            'estado_id' => '19',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Doctor González',
            'estado_id' => '19',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Galeana',
            'estado_id' => '19',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'García',
            'estado_id' => '19',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro Garza García',
            'estado_id' => '19',
            'number' =>  '019',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'General Bravo',
            'estado_id' => '19',
            'number' =>  '020',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'General Escobedo',
            'estado_id' => '19',
            'number' =>  '021',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'General Terán',
            'estado_id' => '19',
            'number' =>  '022',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'General Treviño',
            'estado_id' => '19',
            'number' =>  '023',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'General Zaragoza',
            'estado_id' => '19',
            'number' =>  '024',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'General Zuazua',
            'estado_id' => '19',
            'number' =>  '025',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Guadalupe',
            'estado_id' => '19',
            'number' =>  '026',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Los Herreras',
            'estado_id' => '19',
            'number' =>  '027',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Higueras',
            'estado_id' => '19',
            'number' =>  '028',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Hualahuises',
            'estado_id' => '19',
            'number' =>  '029',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Iturbide',
            'estado_id' => '19',
            'number' =>  '030',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Juárez',
            'estado_id' => '19',
            'number' =>  '031',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Lampazos de Naranjo',
            'estado_id' => '19',
            'number' =>  '032',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Linares',
            'estado_id' => '19',
            'number' =>  '033',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Marín',
            'estado_id' => '19',
            'number' =>  '034',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Melchor Ocampo',
            'estado_id' => '19',
            'number' =>  '035',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mier y Noriega',
            'estado_id' => '19',
            'number' =>  '036',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mina',
            'estado_id' => '19',
            'number' =>  '037',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Montemorelos',
            'estado_id' => '19',
            'number' =>  '038',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Monterrey',
            'estado_id' => '19',
            'number' =>  '039',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Parás',
            'estado_id' => '19',
            'number' =>  '040',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Pesquería',
            'estado_id' => '19',
            'number' =>  '041',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Los Ramones',
            'estado_id' => '19',
            'number' =>  '042',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Rayones',
            'estado_id' => '19',
            'number' =>  '043',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Sabinas Hidalgo',
            'estado_id' => '19',
            'number' =>  '044',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Salinas Victoria',
            'estado_id' => '19',
            'number' =>  '045',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Nicolás de los Garza',
            'estado_id' => '19',
            'number' =>  '046',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Hidalgo',
            'estado_id' => '19',
            'number' =>  '047',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Catarina',
            'estado_id' => '19',
            'number' =>  '048',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago',
            'estado_id' => '19',
            'number' =>  '049',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Vallecillo',
            'estado_id' => '19',
            'number' =>  '050',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Villaldama',
            'estado_id' => '19',
            'number' =>  '051',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Abejones',
            'estado_id' => '20',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Acatlán de Pérez Figueroa',
            'estado_id' => '20',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Asunción Cacalotepec',
            'estado_id' => '20',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Asunción Cuyotepeji',
            'estado_id' => '20',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Asunción Ixtaltepec',
            'estado_id' => '20',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Asunción Nochixtlán',
            'estado_id' => '20',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Asunción Ocotlán',
            'estado_id' => '20',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Asunción Tlacolulita',
            'estado_id' => '20',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ayotzintepec',
            'estado_id' => '20',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'El Barrio de la Soledad',
            'estado_id' => '20',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Calihualá',
            'estado_id' => '20',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Candelaria Loxicha',
            'estado_id' => '20',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ciénega de Zimatlán',
            'estado_id' => '20',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ciudad Ixtepec',
            'estado_id' => '20',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Coatecas Altas',
            'estado_id' => '20',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Coicoyán de las Flores',
            'estado_id' => '20',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'La Compañía',
            'estado_id' => '20',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Concepción Buenavista',
            'estado_id' => '20',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Concepción Pápalo',
            'estado_id' => '20',
            'number' =>  '019',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Constancia del Rosario',
            'estado_id' => '20',
            'number' =>  '020',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cosolapa',
            'estado_id' => '20',
            'number' =>  '021',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cosoltepec',
            'estado_id' => '20',
            'number' =>  '022',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cuilápam de Guerrero',
            'estado_id' => '20',
            'number' =>  '023',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cuyamecalco Villa de Zaragoza',
            'estado_id' => '20',
            'number' =>  '024',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chahuites',
            'estado_id' => '20',
            'number' =>  '025',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chalcatongo de Hidalgo',
            'estado_id' => '20',
            'number' =>  '026',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chiquihuitlán de Benito Juárez',
            'estado_id' => '20',
            'number' =>  '027',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Heroica Ciudad de Ejutla de Crespo',
            'estado_id' => '20',
            'number' =>  '028',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Eloxochitlán de Flores Magón',
            'estado_id' => '20',
            'number' =>  '029',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'El Espinal',
            'estado_id' => '20',
            'number' =>  '030',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tamazulápam del Espíritu Santo',
            'estado_id' => '20',
            'number' =>  '031',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Fresnillo de Trujano',
            'estado_id' => '20',
            'number' =>  '032',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Guadalupe Etla',
            'estado_id' => '20',
            'number' =>  '033',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Guadalupe de Ramírez',
            'estado_id' => '20',
            'number' =>  '034',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Guelatao de Juárez',
            'estado_id' => '20',
            'number' =>  '035',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Guevea de Humboldt',
            'estado_id' => '20',
            'number' =>  '036',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mesones Hidalgo',
            'estado_id' => '20',
            'number' =>  '037',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Villa Hidalgo',
            'estado_id' => '20',
            'number' =>  '038',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Heroica Ciudad de Huajuapan de León',
            'estado_id' => '20',
            'number' =>  '039',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huautepec',
            'estado_id' => '20',
            'number' =>  '040',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huautla de Jiménez',
            'estado_id' => '20',
            'number' =>  '041',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ixtlán de Juárez',
            'estado_id' => '20',
            'number' =>  '042',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Heroica Ciudad de Juchitán de Zaragoza',
            'estado_id' => '20',
            'number' =>  '043',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Loma Bonita',
            'estado_id' => '20',
            'number' =>  '044',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Magdalena Apasco',
            'estado_id' => '20',
            'number' =>  '045',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Magdalena Jaltepec',
            'estado_id' => '20',
            'number' =>  '046',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Magdalena Jicotlán',
            'estado_id' => '20',
            'number' =>  '047',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Magdalena Mixtepec',
            'estado_id' => '20',
            'number' =>  '048',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Magdalena Ocotlán',
            'estado_id' => '20',
            'number' =>  '049',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Magdalena Peñasco',
            'estado_id' => '20',
            'number' =>  '050',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Magdalena Teitipac',
            'estado_id' => '20',
            'number' =>  '051',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Magdalena Tequisistlán',
            'estado_id' => '20',
            'number' =>  '052',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Magdalena Tlacotepec',
            'estado_id' => '20',
            'number' =>  '053',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Magdalena Zahuatlán',
            'estado_id' => '20',
            'number' =>  '054',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mariscala de Juárez',
            'estado_id' => '20',
            'number' =>  '055',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mártires de Tacubaya',
            'estado_id' => '20',
            'number' =>  '056',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Matías Romero Avendaño',
            'estado_id' => '20',
            'number' =>  '057',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mazatlán Villa de Flores',
            'estado_id' => '20',
            'number' =>  '058',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Miahuatlán de Porfirio Díaz',
            'estado_id' => '20',
            'number' =>  '059',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mixistlán de la Reforma',
            'estado_id' => '20',
            'number' =>  '060',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Monjas',
            'estado_id' => '20',
            'number' =>  '061',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Natividad',
            'estado_id' => '20',
            'number' =>  '062',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Nazareno Etla',
            'estado_id' => '20',
            'number' =>  '063',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Nejapa de Madero',
            'estado_id' => '20',
            'number' =>  '064',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ixpantepec Nieves',
            'estado_id' => '20',
            'number' =>  '065',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Niltepec',
            'estado_id' => '20',
            'number' =>  '066',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Oaxaca de Juárez',
            'estado_id' => '20',
            'number' =>  '067',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ocotlán de Morelos',
            'estado_id' => '20',
            'number' =>  '068',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'La Pe',
            'estado_id' => '20',
            'number' =>  '069',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Pinotepa de Don Luis',
            'estado_id' => '20',
            'number' =>  '070',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Pluma Hidalgo',
            'estado_id' => '20',
            'number' =>  '071',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San José del Progreso',
            'estado_id' => '20',
            'number' =>  '072',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Putla Villa de Guerrero',
            'estado_id' => '20',
            'number' =>  '073',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Catarina Quioquitani',
            'estado_id' => '20',
            'number' =>  '074',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Reforma de Pineda',
            'estado_id' => '20',
            'number' =>  '075',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'La Reforma',
            'estado_id' => '20',
            'number' =>  '076',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Reyes Etla',
            'estado_id' => '20',
            'number' =>  '077',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Rojas de Cuauhtémoc',
            'estado_id' => '20',
            'number' =>  '078',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Salina Cruz',
            'estado_id' => '20',
            'number' =>  '079',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Agustín Amatengo',
            'estado_id' => '20',
            'number' =>  '080',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Agustín Atenango',
            'estado_id' => '20',
            'number' =>  '081',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Agustín Chayuco',
            'estado_id' => '20',
            'number' =>  '082',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Agustín de las Juntas',
            'estado_id' => '20',
            'number' =>  '083',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Agustín Etla',
            'estado_id' => '20',
            'number' =>  '084',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Agustín Loxicha',
            'estado_id' => '20',
            'number' =>  '085',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Agustín Tlacotepec',
            'estado_id' => '20',
            'number' =>  '086',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Agustín Yatareni',
            'estado_id' => '20',
            'number' =>  '087',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Andrés Cabecera Nueva',
            'estado_id' => '20',
            'number' =>  '088',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Andrés Dinicuiti',
            'estado_id' => '20',
            'number' =>  '089',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Andrés Huaxpaltepec',
            'estado_id' => '20',
            'number' =>  '090',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Andrés Huayápam',
            'estado_id' => '20',
            'number' =>  '091',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Andrés Ixtlahuaca',
            'estado_id' => '20',
            'number' =>  '092',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Andrés Lagunas',
            'estado_id' => '20',
            'number' =>  '093',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Andrés Nuxiño',
            'estado_id' => '20',
            'number' =>  '094',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Andrés Paxtlán',
            'estado_id' => '20',
            'number' =>  '095',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Andrés Sinaxtla',
            'estado_id' => '20',
            'number' =>  '096',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Andrés Solaga',
            'estado_id' => '20',
            'number' =>  '097',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Andrés Teotilálpam',
            'estado_id' => '20',
            'number' =>  '098',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Andrés Tepetlapa',
            'estado_id' => '20',
            'number' =>  '099',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Andrés Yaá',
            'estado_id' => '20',
            'number' =>  '100',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Andrés Zabache',
            'estado_id' => '20',
            'number' =>  '101',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Andrés Zautla',
            'estado_id' => '20',
            'number' =>  '102',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Antonino Castillo Velasco',
            'estado_id' => '20',
            'number' =>  '103',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Antonino el Alto',
            'estado_id' => '20',
            'number' =>  '104',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Antonino Monte Verde',
            'estado_id' => '20',
            'number' =>  '105',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Antonio Acutla',
            'estado_id' => '20',
            'number' =>  '106',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Antonio de la Cal',
            'estado_id' => '20',
            'number' =>  '107',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Antonio Huitepec',
            'estado_id' => '20',
            'number' =>  '108',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Antonio Nanahuatípam',
            'estado_id' => '20',
            'number' =>  '109',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Antonio Sinicahua',
            'estado_id' => '20',
            'number' =>  '110',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Antonio Tepetlapa',
            'estado_id' => '20',
            'number' =>  '111',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Baltazar Chichicápam',
            'estado_id' => '20',
            'number' =>  '112',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Baltazar Loxicha',
            'estado_id' => '20',
            'number' =>  '113',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Baltazar Yatzachi el Bajo',
            'estado_id' => '20',
            'number' =>  '114',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Bartolo Coyotepec',
            'estado_id' => '20',
            'number' =>  '115',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Bartolomé Ayautla',
            'estado_id' => '20',
            'number' =>  '116',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Bartolomé Loxicha',
            'estado_id' => '20',
            'number' =>  '117',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Bartolomé Quialana',
            'estado_id' => '20',
            'number' =>  '118',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Bartolomé Yucuañe',
            'estado_id' => '20',
            'number' =>  '119',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Bartolomé Zoogocho',
            'estado_id' => '20',
            'number' =>  '120',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Bartolo Soyaltepec',
            'estado_id' => '20',
            'number' =>  '121',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Bartolo Yautepec',
            'estado_id' => '20',
            'number' =>  '122',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Bernardo Mixtepec',
            'estado_id' => '20',
            'number' =>  '123',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Blas Atempa',
            'estado_id' => '20',
            'number' =>  '124',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Carlos Yautepec',
            'estado_id' => '20',
            'number' =>  '125',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Cristóbal Amatlán',
            'estado_id' => '20',
            'number' =>  '126',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Cristóbal Amoltepec',
            'estado_id' => '20',
            'number' =>  '127',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Cristóbal Lachirioag',
            'estado_id' => '20',
            'number' =>  '128',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Cristóbal Suchixtlahuaca',
            'estado_id' => '20',
            'number' =>  '129',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Dionisio del Mar',
            'estado_id' => '20',
            'number' =>  '130',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Dionisio Ocotepec',
            'estado_id' => '20',
            'number' =>  '131',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Dionisio Ocotlán',
            'estado_id' => '20',
            'number' =>  '132',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Esteban Atatlahuca',
            'estado_id' => '20',
            'number' =>  '133',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Felipe Jalapa de Díaz',
            'estado_id' => '20',
            'number' =>  '134',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Felipe Tejalápam',
            'estado_id' => '20',
            'number' =>  '135',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Felipe Usila',
            'estado_id' => '20',
            'number' =>  '136',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Francisco Cahuacuá',
            'estado_id' => '20',
            'number' =>  '137',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Francisco Cajonos',
            'estado_id' => '20',
            'number' =>  '138',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Francisco Chapulapa',
            'estado_id' => '20',
            'number' =>  '139',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Francisco Chindúa',
            'estado_id' => '20',
            'number' =>  '140',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Francisco del Mar',
            'estado_id' => '20',
            'number' =>  '141',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Francisco Huehuetlán',
            'estado_id' => '20',
            'number' =>  '142',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Francisco Ixhuatán',
            'estado_id' => '20',
            'number' =>  '143',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Francisco Jaltepetongo',
            'estado_id' => '20',
            'number' =>  '144',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Francisco Lachigoló',
            'estado_id' => '20',
            'number' =>  '145',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Francisco Logueche',
            'estado_id' => '20',
            'number' =>  '146',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Francisco Nuxaño',
            'estado_id' => '20',
            'number' =>  '147',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Francisco Ozolotepec',
            'estado_id' => '20',
            'number' =>  '148',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Francisco Sola',
            'estado_id' => '20',
            'number' =>  '149',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Francisco Telixtlahuaca',
            'estado_id' => '20',
            'number' =>  '150',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Francisco Teopan',
            'estado_id' => '20',
            'number' =>  '151',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Francisco Tlapancingo',
            'estado_id' => '20',
            'number' =>  '152',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Gabriel Mixtepec',
            'estado_id' => '20',
            'number' =>  '153',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Ildefonso Amatlán',
            'estado_id' => '20',
            'number' =>  '154',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Ildefonso Sola',
            'estado_id' => '20',
            'number' =>  '155',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Ildefonso Villa Alta',
            'estado_id' => '20',
            'number' =>  '156',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Jacinto Amilpas',
            'estado_id' => '20',
            'number' =>  '157',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Jacinto Tlacotepec',
            'estado_id' => '20',
            'number' =>  '158',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Jerónimo Coatlán',
            'estado_id' => '20',
            'number' =>  '159',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Jerónimo Silacayoapilla',
            'estado_id' => '20',
            'number' =>  '160',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Jerónimo Sosola',
            'estado_id' => '20',
            'number' =>  '161',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Jerónimo Taviche',
            'estado_id' => '20',
            'number' =>  '162',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Jerónimo Tecóatl',
            'estado_id' => '20',
            'number' =>  '163',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Jorge Nuchita',
            'estado_id' => '20',
            'number' =>  '164',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San José Ayuquila',
            'estado_id' => '20',
            'number' =>  '165',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San José Chiltepec',
            'estado_id' => '20',
            'number' =>  '166',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San José del Peñasco',
            'estado_id' => '20',
            'number' =>  '167',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San José Estancia Grande',
            'estado_id' => '20',
            'number' =>  '168',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San José Independencia',
            'estado_id' => '20',
            'number' =>  '169',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San José Lachiguiri',
            'estado_id' => '20',
            'number' =>  '170',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San José Tenango',
            'estado_id' => '20',
            'number' =>  '171',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Achiutla',
            'estado_id' => '20',
            'number' =>  '172',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Atepec',
            'estado_id' => '20',
            'number' =>  '173',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ánimas Trujano',
            'estado_id' => '20',
            'number' =>  '174',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Bautista Atatlahuca',
            'estado_id' => '20',
            'number' =>  '175',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Bautista Coixtlahuaca',
            'estado_id' => '20',
            'number' =>  '176',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Bautista Cuicatlán',
            'estado_id' => '20',
            'number' =>  '177',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Bautista Guelache',
            'estado_id' => '20',
            'number' =>  '178',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Bautista Jayacatlán',
            'estado_id' => '20',
            'number' =>  '179',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Bautista Lo de Soto',
            'estado_id' => '20',
            'number' =>  '180',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Bautista Suchitepec',
            'estado_id' => '20',
            'number' =>  '181',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Bautista Tlacoatzintepec',
            'estado_id' => '20',
            'number' =>  '182',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Bautista Tlachichilco',
            'estado_id' => '20',
            'number' =>  '183',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Bautista Tuxtepec',
            'estado_id' => '20',
            'number' =>  '184',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Cacahuatepec',
            'estado_id' => '20',
            'number' =>  '185',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Cieneguilla',
            'estado_id' => '20',
            'number' =>  '186',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Coatzóspam',
            'estado_id' => '20',
            'number' =>  '187',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Colorado',
            'estado_id' => '20',
            'number' =>  '188',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Comaltepec',
            'estado_id' => '20',
            'number' =>  '189',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Cotzocón',
            'estado_id' => '20',
            'number' =>  '190',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Chicomezúchil',
            'estado_id' => '20',
            'number' =>  '191',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Chilateca',
            'estado_id' => '20',
            'number' =>  '192',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan del Estado',
            'estado_id' => '20',
            'number' =>  '193',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan del Río',
            'estado_id' => '20',
            'number' =>  '194',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Diuxi',
            'estado_id' => '20',
            'number' =>  '195',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Evangelista Analco',
            'estado_id' => '20',
            'number' =>  '196',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Guelavía',
            'estado_id' => '20',
            'number' =>  '197',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Guichicovi',
            'estado_id' => '20',
            'number' =>  '198',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Ihualtepec',
            'estado_id' => '20',
            'number' =>  '199',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Juquila Mixes',
            'estado_id' => '20',
            'number' =>  '200',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Juquila Vijanos',
            'estado_id' => '20',
            'number' =>  '201',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Lachao',
            'estado_id' => '20',
            'number' =>  '202',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Lachigalla',
            'estado_id' => '20',
            'number' =>  '203',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Lajarcia',
            'estado_id' => '20',
            'number' =>  '204',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Lalana',
            'estado_id' => '20',
            'number' =>  '205',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan de los Cués',
            'estado_id' => '20',
            'number' =>  '206',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Mazatlán',
            'estado_id' => '20',
            'number' =>  '207',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Mixtepec',
            'estado_id' => '20',
            'number' =>  '208',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Mixtepec',
            'estado_id' => '20',
            'number' =>  '209',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Ñumí',
            'estado_id' => '20',
            'number' =>  '210',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Ozolotepec',
            'estado_id' => '20',
            'number' =>  '211',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Petlapa',
            'estado_id' => '20',
            'number' =>  '212',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Quiahije',
            'estado_id' => '20',
            'number' =>  '213',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Quiotepec',
            'estado_id' => '20',
            'number' =>  '214',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Sayultepec',
            'estado_id' => '20',
            'number' =>  '215',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Tabaá',
            'estado_id' => '20',
            'number' =>  '216',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Tamazola',
            'estado_id' => '20',
            'number' =>  '217',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Teita',
            'estado_id' => '20',
            'number' =>  '218',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Teitipac',
            'estado_id' => '20',
            'number' =>  '219',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Tepeuxila',
            'estado_id' => '20',
            'number' =>  '220',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Teposcolula',
            'estado_id' => '20',
            'number' =>  '221',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Yaeé',
            'estado_id' => '20',
            'number' =>  '222',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Yatzona',
            'estado_id' => '20',
            'number' =>  '223',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Yucuita',
            'estado_id' => '20',
            'number' =>  '224',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Lorenzo',
            'estado_id' => '20',
            'number' =>  '225',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Lorenzo Albarradas',
            'estado_id' => '20',
            'number' =>  '226',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Lorenzo Cacaotepec',
            'estado_id' => '20',
            'number' =>  '227',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Lorenzo Cuaunecuiltitla',
            'estado_id' => '20',
            'number' =>  '228',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Lorenzo Texmelúcan',
            'estado_id' => '20',
            'number' =>  '229',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Lorenzo Victoria',
            'estado_id' => '20',
            'number' =>  '230',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Lucas Camotlán',
            'estado_id' => '20',
            'number' =>  '231',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Lucas Ojitlán',
            'estado_id' => '20',
            'number' =>  '232',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Lucas Quiaviní',
            'estado_id' => '20',
            'number' =>  '233',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Lucas Zoquiápam',
            'estado_id' => '20',
            'number' =>  '234',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Luis Amatlán',
            'estado_id' => '20',
            'number' =>  '235',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Marcial Ozolotepec',
            'estado_id' => '20',
            'number' =>  '236',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Marcos Arteaga',
            'estado_id' => '20',
            'number' =>  '237',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Martín de los Cansecos',
            'estado_id' => '20',
            'number' =>  '238',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Martín Huamelúlpam',
            'estado_id' => '20',
            'number' =>  '239',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Martín Itunyoso',
            'estado_id' => '20',
            'number' =>  '240',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Martín Lachilá',
            'estado_id' => '20',
            'number' =>  '241',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Martín Peras',
            'estado_id' => '20',
            'number' =>  '242',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Martín Tilcajete',
            'estado_id' => '20',
            'number' =>  '243',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Martín Toxpalan',
            'estado_id' => '20',
            'number' =>  '244',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Martín Zacatepec',
            'estado_id' => '20',
            'number' =>  '245',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Mateo Cajonos',
            'estado_id' => '20',
            'number' =>  '246',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Capulálpam de Méndez',
            'estado_id' => '20',
            'number' =>  '247',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Mateo del Mar',
            'estado_id' => '20',
            'number' =>  '248',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Mateo Yoloxochitlán',
            'estado_id' => '20',
            'number' =>  '249',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Mateo Etlatongo',
            'estado_id' => '20',
            'number' =>  '250',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Mateo Nejápam',
            'estado_id' => '20',
            'number' =>  '251',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Mateo Peñasco',
            'estado_id' => '20',
            'number' =>  '252',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Mateo Piñas',
            'estado_id' => '20',
            'number' =>  '253',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Mateo Río Hondo',
            'estado_id' => '20',
            'number' =>  '254',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Mateo Sindihui',
            'estado_id' => '20',
            'number' =>  '255',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Mateo Tlapiltepec',
            'estado_id' => '20',
            'number' =>  '256',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Melchor Betaza',
            'estado_id' => '20',
            'number' =>  '257',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Miguel Achiutla',
            'estado_id' => '20',
            'number' =>  '258',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Miguel Ahuehuetitlán',
            'estado_id' => '20',
            'number' =>  '259',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Miguel Aloápam',
            'estado_id' => '20',
            'number' =>  '260',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Miguel Amatitlán',
            'estado_id' => '20',
            'number' =>  '261',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Miguel Amatlán',
            'estado_id' => '20',
            'number' =>  '262',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Miguel Coatlán',
            'estado_id' => '20',
            'number' =>  '263',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Miguel Chicahua',
            'estado_id' => '20',
            'number' =>  '264',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Miguel Chimalapa',
            'estado_id' => '20',
            'number' =>  '265',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Miguel del Puerto',
            'estado_id' => '20',
            'number' =>  '266',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Miguel del Río',
            'estado_id' => '20',
            'number' =>  '267',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Miguel Ejutla',
            'estado_id' => '20',
            'number' =>  '268',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Miguel el Grande',
            'estado_id' => '20',
            'number' =>  '269',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Miguel Huautla',
            'estado_id' => '20',
            'number' =>  '270',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Miguel Mixtepec',
            'estado_id' => '20',
            'number' =>  '271',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Miguel Panixtlahuaca',
            'estado_id' => '20',
            'number' =>  '272',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Miguel Peras',
            'estado_id' => '20',
            'number' =>  '273',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Miguel Piedras',
            'estado_id' => '20',
            'number' =>  '274',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Miguel Quetzaltepec',
            'estado_id' => '20',
            'number' =>  '275',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Miguel Santa Flor',
            'estado_id' => '20',
            'number' =>  '276',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Villa Sola de Vega',
            'estado_id' => '20',
            'number' =>  '277',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Miguel Soyaltepec',
            'estado_id' => '20',
            'number' =>  '278',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Miguel Suchixtepec',
            'estado_id' => '20',
            'number' =>  '279',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Villa Talea de Castro',
            'estado_id' => '20',
            'number' =>  '280',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Miguel Tecomatlán',
            'estado_id' => '20',
            'number' =>  '281',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Miguel Tenango',
            'estado_id' => '20',
            'number' =>  '282',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Miguel Tequixtepec',
            'estado_id' => '20',
            'number' =>  '283',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Miguel Tilquiápam',
            'estado_id' => '20',
            'number' =>  '284',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Miguel Tlacamama',
            'estado_id' => '20',
            'number' =>  '285',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Miguel Tlacotepec',
            'estado_id' => '20',
            'number' =>  '286',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Miguel Tulancingo',
            'estado_id' => '20',
            'number' =>  '287',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Miguel Yotao',
            'estado_id' => '20',
            'number' =>  '288',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Nicolás',
            'estado_id' => '20',
            'number' =>  '289',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Nicolás Hidalgo',
            'estado_id' => '20',
            'number' =>  '290',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pablo Coatlán',
            'estado_id' => '20',
            'number' =>  '291',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pablo Cuatro Venados',
            'estado_id' => '20',
            'number' =>  '292',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pablo Etla',
            'estado_id' => '20',
            'number' =>  '293',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pablo Huitzo',
            'estado_id' => '20',
            'number' =>  '294',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pablo Huixtepec',
            'estado_id' => '20',
            'number' =>  '295',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pablo Macuiltianguis',
            'estado_id' => '20',
            'number' =>  '296',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pablo Tijaltepec',
            'estado_id' => '20',
            'number' =>  '297',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pablo Villa de Mitla',
            'estado_id' => '20',
            'number' =>  '298',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pablo Yaganiza',
            'estado_id' => '20',
            'number' =>  '299',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro Amuzgos',
            'estado_id' => '20',
            'number' =>  '300',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro Apóstol',
            'estado_id' => '20',
            'number' =>  '301',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro Atoyac',
            'estado_id' => '20',
            'number' =>  '302',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro Cajonos',
            'estado_id' => '20',
            'number' =>  '303',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro Coxcaltepec Cántaros',
            'estado_id' => '20',
            'number' =>  '304',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro Comitancillo',
            'estado_id' => '20',
            'number' =>  '305',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro el Alto',
            'estado_id' => '20',
            'number' =>  '306',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro Huamelula',
            'estado_id' => '20',
            'number' =>  '307',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro Huilotepec',
            'estado_id' => '20',
            'number' =>  '308',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro Ixcatlán',
            'estado_id' => '20',
            'number' =>  '309',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro Ixtlahuaca',
            'estado_id' => '20',
            'number' =>  '310',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro Jaltepetongo',
            'estado_id' => '20',
            'number' =>  '311',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro Jicayán',
            'estado_id' => '20',
            'number' =>  '312',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro Jocotipac',
            'estado_id' => '20',
            'number' =>  '313',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro Juchatengo',
            'estado_id' => '20',
            'number' =>  '314',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro Mártir',
            'estado_id' => '20',
            'number' =>  '315',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro Mártir Quiechapa',
            'estado_id' => '20',
            'number' =>  '316',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro Mártir Yucuxaco',
            'estado_id' => '20',
            'number' =>  '317',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro Mixtepec',
            'estado_id' => '20',
            'number' =>  '318',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro Mixtepec',
            'estado_id' => '20',
            'number' =>  '319',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro Molinos',
            'estado_id' => '20',
            'number' =>  '320',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro Nopala',
            'estado_id' => '20',
            'number' =>  '321',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro Ocopetatillo',
            'estado_id' => '20',
            'number' =>  '322',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro Ocotepec',
            'estado_id' => '20',
            'number' =>  '323',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro Pochutla',
            'estado_id' => '20',
            'number' =>  '324',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro Quiatoni',
            'estado_id' => '20',
            'number' =>  '325',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro Sochiápam',
            'estado_id' => '20',
            'number' =>  '326',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro Tapanatepec',
            'estado_id' => '20',
            'number' =>  '327',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro Taviche',
            'estado_id' => '20',
            'number' =>  '328',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro Teozacoalco',
            'estado_id' => '20',
            'number' =>  '329',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro Teutila',
            'estado_id' => '20',
            'number' =>  '330',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro Tidaá',
            'estado_id' => '20',
            'number' =>  '331',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro Topiltepec',
            'estado_id' => '20',
            'number' =>  '332',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro Totolápam',
            'estado_id' => '20',
            'number' =>  '333',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Villa de Tututepec de Melchor Ocampo',
            'estado_id' => '20',
            'number' =>  '334',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro Yaneri',
            'estado_id' => '20',
            'number' =>  '335',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro Yólox',
            'estado_id' => '20',
            'number' =>  '336',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro y San Pablo Ayutla',
            'estado_id' => '20',
            'number' =>  '337',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Villa de Etla',
            'estado_id' => '20',
            'number' =>  '338',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro y San Pablo Teposcolula',
            'estado_id' => '20',
            'number' =>  '339',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro y San Pablo Tequixtepec',
            'estado_id' => '20',
            'number' =>  '340',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro Yucunama',
            'estado_id' => '20',
            'number' =>  '341',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Raymundo Jalpan',
            'estado_id' => '20',
            'number' =>  '342',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Sebastián Abasolo',
            'estado_id' => '20',
            'number' =>  '343',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Sebastián Coatlán',
            'estado_id' => '20',
            'number' =>  '344',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Sebastián Ixcapa',
            'estado_id' => '20',
            'number' =>  '345',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Sebastián Nicananduta',
            'estado_id' => '20',
            'number' =>  '346',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Sebastián Río Hondo',
            'estado_id' => '20',
            'number' =>  '347',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Sebastián Tecomaxtlahuaca',
            'estado_id' => '20',
            'number' =>  '348',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Sebastián Teitipac',
            'estado_id' => '20',
            'number' =>  '349',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Sebastián Tutla',
            'estado_id' => '20',
            'number' =>  '350',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Simón Almolongas',
            'estado_id' => '20',
            'number' =>  '351',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Simón Zahuatlán',
            'estado_id' => '20',
            'number' =>  '352',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Ana',
            'estado_id' => '20',
            'number' =>  '353',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Ana Ateixtlahuaca',
            'estado_id' => '20',
            'number' =>  '354',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Ana Cuauhtémoc',
            'estado_id' => '20',
            'number' =>  '355',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Ana del Valle',
            'estado_id' => '20',
            'number' =>  '356',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Ana Tavela',
            'estado_id' => '20',
            'number' =>  '357',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Ana Tlapacoyan',
            'estado_id' => '20',
            'number' =>  '358',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Ana Yareni',
            'estado_id' => '20',
            'number' =>  '359',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Ana Zegache',
            'estado_id' => '20',
            'number' =>  '360',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Catalina Quierí',
            'estado_id' => '20',
            'number' =>  '361',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Catarina Cuixtla',
            'estado_id' => '20',
            'number' =>  '362',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Catarina Ixtepeji',
            'estado_id' => '20',
            'number' =>  '363',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Catarina Juquila',
            'estado_id' => '20',
            'number' =>  '364',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Catarina Lachatao',
            'estado_id' => '20',
            'number' =>  '365',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Catarina Loxicha',
            'estado_id' => '20',
            'number' =>  '366',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Catarina Mechoacán',
            'estado_id' => '20',
            'number' =>  '367',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Catarina Minas',
            'estado_id' => '20',
            'number' =>  '368',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Catarina Quiané',
            'estado_id' => '20',
            'number' =>  '369',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Catarina Tayata',
            'estado_id' => '20',
            'number' =>  '370',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Catarina Ticuá',
            'estado_id' => '20',
            'number' =>  '371',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Catarina Yosonotú',
            'estado_id' => '20',
            'number' =>  '372',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Catarina Zapoquila',
            'estado_id' => '20',
            'number' =>  '373',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Cruz Acatepec',
            'estado_id' => '20',
            'number' =>  '374',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Cruz Amilpas',
            'estado_id' => '20',
            'number' =>  '375',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Cruz de Bravo',
            'estado_id' => '20',
            'number' =>  '376',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Cruz Itundujia',
            'estado_id' => '20',
            'number' =>  '377',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Cruz Mixtepec',
            'estado_id' => '20',
            'number' =>  '378',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Cruz Nundaco',
            'estado_id' => '20',
            'number' =>  '379',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Cruz Papalutla',
            'estado_id' => '20',
            'number' =>  '380',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Cruz Tacache de Mina',
            'estado_id' => '20',
            'number' =>  '381',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Cruz Tacahua',
            'estado_id' => '20',
            'number' =>  '382',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Cruz Tayata',
            'estado_id' => '20',
            'number' =>  '383',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Cruz Xitla',
            'estado_id' => '20',
            'number' =>  '384',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Cruz Xoxocotlán',
            'estado_id' => '20',
            'number' =>  '385',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Cruz Zenzontepec',
            'estado_id' => '20',
            'number' =>  '386',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Gertrudis',
            'estado_id' => '20',
            'number' =>  '387',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Inés del Monte',
            'estado_id' => '20',
            'number' =>  '388',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Inés Yatzeche',
            'estado_id' => '20',
            'number' =>  '389',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Lucía del Camino',
            'estado_id' => '20',
            'number' =>  '390',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Lucía Miahuatlán',
            'estado_id' => '20',
            'number' =>  '391',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Lucía Monteverde',
            'estado_id' => '20',
            'number' =>  '392',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Lucía Ocotlán',
            'estado_id' => '20',
            'number' =>  '393',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Alotepec',
            'estado_id' => '20',
            'number' =>  '394',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Apazco',
            'estado_id' => '20',
            'number' =>  '395',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María la Asunción',
            'estado_id' => '20',
            'number' =>  '396',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Heroica Ciudad de Tlaxiaco',
            'estado_id' => '20',
            'number' =>  '397',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ayoquezco de Aldama',
            'estado_id' => '20',
            'number' =>  '398',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Atzompa',
            'estado_id' => '20',
            'number' =>  '399',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Camotlán',
            'estado_id' => '20',
            'number' =>  '400',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Colotepec',
            'estado_id' => '20',
            'number' =>  '401',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Cortijo',
            'estado_id' => '20',
            'number' =>  '402',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Coyotepec',
            'estado_id' => '20',
            'number' =>  '403',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Chachoápam',
            'estado_id' => '20',
            'number' =>  '404',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Villa de Chilapa de Díaz',
            'estado_id' => '20',
            'number' =>  '405',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Chilchotla',
            'estado_id' => '20',
            'number' =>  '406',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Chimalapa',
            'estado_id' => '20',
            'number' =>  '407',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María del Rosario',
            'estado_id' => '20',
            'number' =>  '408',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María del Tule',
            'estado_id' => '20',
            'number' =>  '409',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Ecatepec',
            'estado_id' => '20',
            'number' =>  '410',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Guelacé',
            'estado_id' => '20',
            'number' =>  '411',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Guienagati',
            'estado_id' => '20',
            'number' =>  '412',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Huatulco',
            'estado_id' => '20',
            'number' =>  '413',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Huazolotitlán',
            'estado_id' => '20',
            'number' =>  '414',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Ipalapa',
            'estado_id' => '20',
            'number' =>  '415',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Ixcatlán',
            'estado_id' => '20',
            'number' =>  '416',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Jacatepec',
            'estado_id' => '20',
            'number' =>  '417',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Jalapa del Marqués',
            'estado_id' => '20',
            'number' =>  '418',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Jaltianguis',
            'estado_id' => '20',
            'number' =>  '419',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Lachixío',
            'estado_id' => '20',
            'number' =>  '420',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Mixtequilla',
            'estado_id' => '20',
            'number' =>  '421',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Nativitas',
            'estado_id' => '20',
            'number' =>  '422',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Nduayaco',
            'estado_id' => '20',
            'number' =>  '423',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Ozolotepec',
            'estado_id' => '20',
            'number' =>  '424',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Pápalo',
            'estado_id' => '20',
            'number' =>  '425',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Peñoles',
            'estado_id' => '20',
            'number' =>  '426',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Petapa',
            'estado_id' => '20',
            'number' =>  '427',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Quiegolani',
            'estado_id' => '20',
            'number' =>  '428',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Sola',
            'estado_id' => '20',
            'number' =>  '429',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Tataltepec',
            'estado_id' => '20',
            'number' =>  '430',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Tecomavaca',
            'estado_id' => '20',
            'number' =>  '431',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Temaxcalapa',
            'estado_id' => '20',
            'number' =>  '432',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Temaxcaltepec',
            'estado_id' => '20',
            'number' =>  '433',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Teopoxco',
            'estado_id' => '20',
            'number' =>  '434',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Tepantlali',
            'estado_id' => '20',
            'number' =>  '435',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Texcatitlán',
            'estado_id' => '20',
            'number' =>  '436',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Tlahuitoltepec',
            'estado_id' => '20',
            'number' =>  '437',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Tlalixtac',
            'estado_id' => '20',
            'number' =>  '438',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Tonameca',
            'estado_id' => '20',
            'number' =>  '439',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Totolapilla',
            'estado_id' => '20',
            'number' =>  '440',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Xadani',
            'estado_id' => '20',
            'number' =>  '441',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Yalina',
            'estado_id' => '20',
            'number' =>  '442',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Yavesía',
            'estado_id' => '20',
            'number' =>  '443',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Yolotepec',
            'estado_id' => '20',
            'number' =>  '444',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Yosoyúa',
            'estado_id' => '20',
            'number' =>  '445',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Yucuhiti',
            'estado_id' => '20',
            'number' =>  '446',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Zacatepec',
            'estado_id' => '20',
            'number' =>  '447',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Zaniza',
            'estado_id' => '20',
            'number' =>  '448',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Zoquitlán',
            'estado_id' => '20',
            'number' =>  '449',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Amoltepec',
            'estado_id' => '20',
            'number' =>  '450',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Apoala',
            'estado_id' => '20',
            'number' =>  '451',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Apóstol',
            'estado_id' => '20',
            'number' =>  '452',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Astata',
            'estado_id' => '20',
            'number' =>  '453',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Atitlán',
            'estado_id' => '20',
            'number' =>  '454',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Ayuquililla',
            'estado_id' => '20',
            'number' =>  '455',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Cacaloxtepec',
            'estado_id' => '20',
            'number' =>  '456',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Camotlán',
            'estado_id' => '20',
            'number' =>  '457',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Comaltepec',
            'estado_id' => '20',
            'number' =>  '458',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Chazumba',
            'estado_id' => '20',
            'number' =>  '459',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Choápam',
            'estado_id' => '20',
            'number' =>  '460',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago del Río',
            'estado_id' => '20',
            'number' =>  '461',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Huajolotitlán',
            'estado_id' => '20',
            'number' =>  '462',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Huauclilla',
            'estado_id' => '20',
            'number' =>  '463',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Ihuitlán Plumas',
            'estado_id' => '20',
            'number' =>  '464',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Ixcuintepec',
            'estado_id' => '20',
            'number' =>  '465',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Ixtayutla',
            'estado_id' => '20',
            'number' =>  '466',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Jamiltepec',
            'estado_id' => '20',
            'number' =>  '467',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Jocotepec',
            'estado_id' => '20',
            'number' =>  '468',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Juxtlahuaca',
            'estado_id' => '20',
            'number' =>  '469',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Lachiguiri',
            'estado_id' => '20',
            'number' =>  '470',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Lalopa',
            'estado_id' => '20',
            'number' =>  '471',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Laollaga',
            'estado_id' => '20',
            'number' =>  '472',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Laxopa',
            'estado_id' => '20',
            'number' =>  '473',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Llano Grande',
            'estado_id' => '20',
            'number' =>  '474',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Matatlán',
            'estado_id' => '20',
            'number' =>  '475',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Miltepec',
            'estado_id' => '20',
            'number' =>  '476',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Minas',
            'estado_id' => '20',
            'number' =>  '477',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Nacaltepec',
            'estado_id' => '20',
            'number' =>  '478',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Nejapilla',
            'estado_id' => '20',
            'number' =>  '479',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Nundiche',
            'estado_id' => '20',
            'number' =>  '480',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Nuyoó',
            'estado_id' => '20',
            'number' =>  '481',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Pinotepa Nacional',
            'estado_id' => '20',
            'number' =>  '482',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Suchilquitongo',
            'estado_id' => '20',
            'number' =>  '483',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Tamazola',
            'estado_id' => '20',
            'number' =>  '484',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Tapextla',
            'estado_id' => '20',
            'number' =>  '485',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Villa Tejúpam de la Unión',
            'estado_id' => '20',
            'number' =>  '486',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Tenango',
            'estado_id' => '20',
            'number' =>  '487',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Tepetlapa',
            'estado_id' => '20',
            'number' =>  '488',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Tetepec',
            'estado_id' => '20',
            'number' =>  '489',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Texcalcingo',
            'estado_id' => '20',
            'number' =>  '490',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Textitlán',
            'estado_id' => '20',
            'number' =>  '491',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Tilantongo',
            'estado_id' => '20',
            'number' =>  '492',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Tillo',
            'estado_id' => '20',
            'number' =>  '493',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Tlazoyaltepec',
            'estado_id' => '20',
            'number' =>  '494',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Xanica',
            'estado_id' => '20',
            'number' =>  '495',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Xiacuí',
            'estado_id' => '20',
            'number' =>  '496',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Yaitepec',
            'estado_id' => '20',
            'number' =>  '497',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Yaveo',
            'estado_id' => '20',
            'number' =>  '498',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Yolomécatl',
            'estado_id' => '20',
            'number' =>  '499',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Yosondúa',
            'estado_id' => '20',
            'number' =>  '500',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Yucuyachi',
            'estado_id' => '20',
            'number' =>  '501',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Zacatepec',
            'estado_id' => '20',
            'number' =>  '502',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Zoochila',
            'estado_id' => '20',
            'number' =>  '503',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Nuevo Zoquiápam',
            'estado_id' => '20',
            'number' =>  '504',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santo Domingo Ingenio',
            'estado_id' => '20',
            'number' =>  '505',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santo Domingo Albarradas',
            'estado_id' => '20',
            'number' =>  '506',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santo Domingo Armenta',
            'estado_id' => '20',
            'number' =>  '507',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santo Domingo Chihuitán',
            'estado_id' => '20',
            'number' =>  '508',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santo Domingo de Morelos',
            'estado_id' => '20',
            'number' =>  '509',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santo Domingo Ixcatlán',
            'estado_id' => '20',
            'number' =>  '510',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santo Domingo Nuxaá',
            'estado_id' => '20',
            'number' =>  '511',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santo Domingo Ozolotepec',
            'estado_id' => '20',
            'number' =>  '512',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santo Domingo Petapa',
            'estado_id' => '20',
            'number' =>  '513',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santo Domingo Roayaga',
            'estado_id' => '20',
            'number' =>  '514',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santo Domingo Tehuantepec',
            'estado_id' => '20',
            'number' =>  '515',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santo Domingo Teojomulco',
            'estado_id' => '20',
            'number' =>  '516',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santo Domingo Tepuxtepec',
            'estado_id' => '20',
            'number' =>  '517',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santo Domingo Tlatayápam',
            'estado_id' => '20',
            'number' =>  '518',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santo Domingo Tomaltepec',
            'estado_id' => '20',
            'number' =>  '519',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santo Domingo Tonalá',
            'estado_id' => '20',
            'number' =>  '520',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santo Domingo Tonaltepec',
            'estado_id' => '20',
            'number' =>  '521',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santo Domingo Xagacía',
            'estado_id' => '20',
            'number' =>  '522',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santo Domingo Yanhuitlán',
            'estado_id' => '20',
            'number' =>  '523',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santo Domingo Yodohino',
            'estado_id' => '20',
            'number' =>  '524',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santo Domingo Zanatepec',
            'estado_id' => '20',
            'number' =>  '525',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santos Reyes Nopala',
            'estado_id' => '20',
            'number' =>  '526',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santos Reyes Pápalo',
            'estado_id' => '20',
            'number' =>  '527',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santos Reyes Tepejillo',
            'estado_id' => '20',
            'number' =>  '528',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santos Reyes Yucuná',
            'estado_id' => '20',
            'number' =>  '529',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santo Tomás Jalieza',
            'estado_id' => '20',
            'number' =>  '530',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santo Tomás Mazaltepec',
            'estado_id' => '20',
            'number' =>  '531',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santo Tomás Ocotepec',
            'estado_id' => '20',
            'number' =>  '532',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santo Tomás Tamazulapan',
            'estado_id' => '20',
            'number' =>  '533',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Vicente Coatlán',
            'estado_id' => '20',
            'number' =>  '534',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Vicente Lachixío',
            'estado_id' => '20',
            'number' =>  '535',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Vicente Nuñú',
            'estado_id' => '20',
            'number' =>  '536',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Silacayoápam',
            'estado_id' => '20',
            'number' =>  '537',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Sitio de Xitlapehua',
            'estado_id' => '20',
            'number' =>  '538',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Soledad Etla',
            'estado_id' => '20',
            'number' =>  '539',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Villa de Tamazulápam del Progreso',
            'estado_id' => '20',
            'number' =>  '540',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tanetze de Zaragoza',
            'estado_id' => '20',
            'number' =>  '541',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Taniche',
            'estado_id' => '20',
            'number' =>  '542',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tataltepec de Valdés',
            'estado_id' => '20',
            'number' =>  '543',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Teococuilco de Marcos Pérez',
            'estado_id' => '20',
            'number' =>  '544',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Teotitlán de Flores Magón',
            'estado_id' => '20',
            'number' =>  '545',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Teotitlán del Valle',
            'estado_id' => '20',
            'number' =>  '546',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Teotongo',
            'estado_id' => '20',
            'number' =>  '547',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tepelmeme Villa de Morelos',
            'estado_id' => '20',
            'number' =>  '548',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Heroica Villa Tezoatlán de Segura y Luna. Cuna de la Independencia de Oaxaca',
            'estado_id' => '20',
            'number' =>  '549',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Jerónimo Tlacochahuaya',
            'estado_id' => '20',
            'number' =>  '550',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlacolula de Matamoros',
            'estado_id' => '20',
            'number' =>  '551',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlacotepec Plumas',
            'estado_id' => '20',
            'number' =>  '552',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlalixtac de Cabrera',
            'estado_id' => '20',
            'number' =>  '553',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Totontepec Villa de Morelos',
            'estado_id' => '20',
            'number' =>  '554',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Trinidad Zaachila',
            'estado_id' => '20',
            'number' =>  '555',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'La Trinidad Vista Hermosa',
            'estado_id' => '20',
            'number' =>  '556',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Unión Hidalgo',
            'estado_id' => '20',
            'number' =>  '557',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Valerio Trujano',
            'estado_id' => '20',
            'number' =>  '558',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Bautista Valle Nacional',
            'estado_id' => '20',
            'number' =>  '559',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Villa Díaz Ordaz',
            'estado_id' => '20',
            'number' =>  '560',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Yaxe',
            'estado_id' => '20',
            'number' =>  '561',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Magdalena Yodocono de Porfirio Díaz',
            'estado_id' => '20',
            'number' =>  '562',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Yogana',
            'estado_id' => '20',
            'number' =>  '563',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Yutanduchi de Guerrero',
            'estado_id' => '20',
            'number' =>  '564',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Villa de Zaachila',
            'estado_id' => '20',
            'number' =>  '565',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Mateo Yucutindoo',
            'estado_id' => '20',
            'number' =>  '566',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zapotitlán Lagunas',
            'estado_id' => '20',
            'number' =>  '567',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zapotitlán Palmas',
            'estado_id' => '20',
            'number' =>  '568',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Inés de Zaragoza',
            'estado_id' => '20',
            'number' =>  '569',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zimatlán de Álvarez',
            'estado_id' => '20',
            'number' =>  '570',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Acajete',
            'estado_id' => '21',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Acateno',
            'estado_id' => '21',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Acatlán',
            'estado_id' => '21',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Acatzingo',
            'estado_id' => '21',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Acteopan',
            'estado_id' => '21',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ahuacatlán',
            'estado_id' => '21',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ahuatlán',
            'estado_id' => '21',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ahuazotepec',
            'estado_id' => '21',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ahuehuetitla',
            'estado_id' => '21',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ajalpan',
            'estado_id' => '21',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Albino Zertuche',
            'estado_id' => '21',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Aljojuca',
            'estado_id' => '21',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Altepexi',
            'estado_id' => '21',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Amixtlán',
            'estado_id' => '21',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Amozoc',
            'estado_id' => '21',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Aquixtla',
            'estado_id' => '21',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Atempan',
            'estado_id' => '21',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Atexcal',
            'estado_id' => '21',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Atlixco',
            'estado_id' => '21',
            'number' =>  '019',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Atoyatempan',
            'estado_id' => '21',
            'number' =>  '020',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Atzala',
            'estado_id' => '21',
            'number' =>  '021',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Atzitzihuacán',
            'estado_id' => '21',
            'number' =>  '022',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Atzitzintla',
            'estado_id' => '21',
            'number' =>  '023',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Axutla',
            'estado_id' => '21',
            'number' =>  '024',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ayotoxco de Guerrero',
            'estado_id' => '21',
            'number' =>  '025',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Calpan',
            'estado_id' => '21',
            'number' =>  '026',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Caltepec',
            'estado_id' => '21',
            'number' =>  '027',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Camocuautla',
            'estado_id' => '21',
            'number' =>  '028',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Caxhuacan',
            'estado_id' => '21',
            'number' =>  '029',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Coatepec',
            'estado_id' => '21',
            'number' =>  '030',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Coatzingo',
            'estado_id' => '21',
            'number' =>  '031',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cohetzala',
            'estado_id' => '21',
            'number' =>  '032',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cohuecan',
            'estado_id' => '21',
            'number' =>  '033',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Coronango',
            'estado_id' => '21',
            'number' =>  '034',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Coxcatlán',
            'estado_id' => '21',
            'number' =>  '035',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Coyomeapan',
            'estado_id' => '21',
            'number' =>  '036',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Coyotepec',
            'estado_id' => '21',
            'number' =>  '037',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cuapiaxtla de Madero',
            'estado_id' => '21',
            'number' =>  '038',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cuautempan',
            'estado_id' => '21',
            'number' =>  '039',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cuautinchán',
            'estado_id' => '21',
            'number' =>  '040',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cuautlancingo',
            'estado_id' => '21',
            'number' =>  '041',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cuayuca de Andrade',
            'estado_id' => '21',
            'number' =>  '042',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cuetzalan del Progreso',
            'estado_id' => '21',
            'number' =>  '043',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cuyoaco',
            'estado_id' => '21',
            'number' =>  '044',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chalchicomula de Sesma',
            'estado_id' => '21',
            'number' =>  '045',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chapulco',
            'estado_id' => '21',
            'number' =>  '046',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chiautla',
            'estado_id' => '21',
            'number' =>  '047',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chiautzingo',
            'estado_id' => '21',
            'number' =>  '048',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chiconcuautla',
            'estado_id' => '21',
            'number' =>  '049',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chichiquila',
            'estado_id' => '21',
            'number' =>  '050',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chietla',
            'estado_id' => '21',
            'number' =>  '051',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chigmecatitlán',
            'estado_id' => '21',
            'number' =>  '052',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chignahuapan',
            'estado_id' => '21',
            'number' =>  '053',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chignautla',
            'estado_id' => '21',
            'number' =>  '054',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chila',
            'estado_id' => '21',
            'number' =>  '055',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chila de la Sal',
            'estado_id' => '21',
            'number' =>  '056',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Honey',
            'estado_id' => '21',
            'number' =>  '057',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chilchotla',
            'estado_id' => '21',
            'number' =>  '058',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chinantla',
            'estado_id' => '21',
            'number' =>  '059',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Domingo Arenas',
            'estado_id' => '21',
            'number' =>  '060',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Eloxochitlán',
            'estado_id' => '21',
            'number' =>  '061',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Epatlán',
            'estado_id' => '21',
            'number' =>  '062',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Esperanza',
            'estado_id' => '21',
            'number' =>  '063',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Francisco Z. Mena',
            'estado_id' => '21',
            'number' =>  '064',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'General Felipe Ángeles',
            'estado_id' => '21',
            'number' =>  '065',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Guadalupe',
            'estado_id' => '21',
            'number' =>  '066',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Guadalupe Victoria',
            'estado_id' => '21',
            'number' =>  '067',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Hermenegildo Galeana',
            'estado_id' => '21',
            'number' =>  '068',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huaquechula',
            'estado_id' => '21',
            'number' =>  '069',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huatlatlauca',
            'estado_id' => '21',
            'number' =>  '070',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huauchinango',
            'estado_id' => '21',
            'number' =>  '071',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huehuetla',
            'estado_id' => '21',
            'number' =>  '072',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huehuetlán el Chico',
            'estado_id' => '21',
            'number' =>  '073',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huejotzingo',
            'estado_id' => '21',
            'number' =>  '074',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Hueyapan',
            'estado_id' => '21',
            'number' =>  '075',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Hueytamalco',
            'estado_id' => '21',
            'number' =>  '076',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Hueytlalpan',
            'estado_id' => '21',
            'number' =>  '077',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huitzilan de Serdán',
            'estado_id' => '21',
            'number' =>  '078',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huitziltepec',
            'estado_id' => '21',
            'number' =>  '079',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Atlequizayan',
            'estado_id' => '21',
            'number' =>  '080',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ixcamilpa de Guerrero',
            'estado_id' => '21',
            'number' =>  '081',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ixcaquixtla',
            'estado_id' => '21',
            'number' =>  '082',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ixtacamaxtitlán',
            'estado_id' => '21',
            'number' =>  '083',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ixtepec',
            'estado_id' => '21',
            'number' =>  '084',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Izúcar de Matamoros',
            'estado_id' => '21',
            'number' =>  '085',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jalpan',
            'estado_id' => '21',
            'number' =>  '086',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jolalpan',
            'estado_id' => '21',
            'number' =>  '087',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jonotla',
            'estado_id' => '21',
            'number' =>  '088',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jopala',
            'estado_id' => '21',
            'number' =>  '089',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Juan C. Bonilla',
            'estado_id' => '21',
            'number' =>  '090',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Juan Galindo',
            'estado_id' => '21',
            'number' =>  '091',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Juan N. Méndez',
            'estado_id' => '21',
            'number' =>  '092',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Lafragua',
            'estado_id' => '21',
            'number' =>  '093',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Libres',
            'estado_id' => '21',
            'number' =>  '094',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'La Magdalena Tlatlauquitepec',
            'estado_id' => '21',
            'number' =>  '095',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mazapiltepec de Juárez',
            'estado_id' => '21',
            'number' =>  '096',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mixtla',
            'estado_id' => '21',
            'number' =>  '097',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Molcaxac',
            'estado_id' => '21',
            'number' =>  '098',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cañada Morelos',
            'estado_id' => '21',
            'number' =>  '099',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Naupan',
            'estado_id' => '21',
            'number' =>  '100',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Nauzontla',
            'estado_id' => '21',
            'number' =>  '101',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Nealtican',
            'estado_id' => '21',
            'number' =>  '102',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Nicolás Bravo',
            'estado_id' => '21',
            'number' =>  '103',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Nopalucan',
            'estado_id' => '21',
            'number' =>  '104',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ocotepec',
            'estado_id' => '21',
            'number' =>  '105',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ocoyucan',
            'estado_id' => '21',
            'number' =>  '106',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Olintla',
            'estado_id' => '21',
            'number' =>  '107',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Oriental',
            'estado_id' => '21',
            'number' =>  '108',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Pahuatlán',
            'estado_id' => '21',
            'number' =>  '109',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Palmar de Bravo',
            'estado_id' => '21',
            'number' =>  '110',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Pantepec',
            'estado_id' => '21',
            'number' =>  '111',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Petlalcingo',
            'estado_id' => '21',
            'number' =>  '112',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Piaxtla',
            'estado_id' => '21',
            'number' =>  '113',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Puebla',
            'estado_id' => '21',
            'number' =>  '114',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Quecholac',
            'estado_id' => '21',
            'number' =>  '115',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Quimixtlán',
            'estado_id' => '21',
            'number' =>  '116',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Rafael Lara Grajales',
            'estado_id' => '21',
            'number' =>  '117',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Los Reyes de Juárez',
            'estado_id' => '21',
            'number' =>  '118',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Andrés Cholula',
            'estado_id' => '21',
            'number' =>  '119',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Antonio Cañada',
            'estado_id' => '21',
            'number' =>  '120',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Diego la Mesa Tochimiltzingo',
            'estado_id' => '21',
            'number' =>  '121',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Felipe Teotlalcingo',
            'estado_id' => '21',
            'number' =>  '122',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Felipe Tepatlán',
            'estado_id' => '21',
            'number' =>  '123',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Gabriel Chilac',
            'estado_id' => '21',
            'number' =>  '124',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Gregorio Atzompa',
            'estado_id' => '21',
            'number' =>  '125',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Jerónimo Tecuanipan',
            'estado_id' => '21',
            'number' =>  '126',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Jerónimo Xayacatlán',
            'estado_id' => '21',
            'number' =>  '127',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San José Chiapa',
            'estado_id' => '21',
            'number' =>  '128',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San José Miahuatlán',
            'estado_id' => '21',
            'number' =>  '129',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Atenco',
            'estado_id' => '21',
            'number' =>  '130',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Atzompa',
            'estado_id' => '21',
            'number' =>  '131',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Martín Texmelucan',
            'estado_id' => '21',
            'number' =>  '132',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Martín Totoltepec',
            'estado_id' => '21',
            'number' =>  '133',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Matías Tlalancaleca',
            'estado_id' => '21',
            'number' =>  '134',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Miguel Ixitlán',
            'estado_id' => '21',
            'number' =>  '135',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Miguel Xoxtla',
            'estado_id' => '21',
            'number' =>  '136',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Nicolás Buenos Aires',
            'estado_id' => '21',
            'number' =>  '137',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Nicolás de los Ranchos',
            'estado_id' => '21',
            'number' =>  '138',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pablo Anicano',
            'estado_id' => '21',
            'number' =>  '139',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro Cholula',
            'estado_id' => '21',
            'number' =>  '140',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro Yeloixtlahuaca',
            'estado_id' => '21',
            'number' =>  '141',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Salvador el Seco',
            'estado_id' => '21',
            'number' =>  '142',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Salvador el Verde',
            'estado_id' => '21',
            'number' =>  '143',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Salvador Huixcolotla',
            'estado_id' => '21',
            'number' =>  '144',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Sebastián Tlacotepec',
            'estado_id' => '21',
            'number' =>  '145',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Catarina Tlaltempan',
            'estado_id' => '21',
            'number' =>  '146',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Inés Ahuatempan',
            'estado_id' => '21',
            'number' =>  '147',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Isabel Cholula',
            'estado_id' => '21',
            'number' =>  '148',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Miahuatlán',
            'estado_id' => '21',
            'number' =>  '149',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huehuetlán el Grande',
            'estado_id' => '21',
            'number' =>  '150',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santo Tomás Hueyotlipan',
            'estado_id' => '21',
            'number' =>  '151',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Soltepec',
            'estado_id' => '21',
            'number' =>  '152',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tecali de Herrera',
            'estado_id' => '21',
            'number' =>  '153',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tecamachalco',
            'estado_id' => '21',
            'number' =>  '154',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tecomatlán',
            'estado_id' => '21',
            'number' =>  '155',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tehuacán',
            'estado_id' => '21',
            'number' =>  '156',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tehuitzingo',
            'estado_id' => '21',
            'number' =>  '157',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tenampulco',
            'estado_id' => '21',
            'number' =>  '158',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Teopantlán',
            'estado_id' => '21',
            'number' =>  '159',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Teotlalco',
            'estado_id' => '21',
            'number' =>  '160',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tepanco de López',
            'estado_id' => '21',
            'number' =>  '161',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tepango de Rodríguez',
            'estado_id' => '21',
            'number' =>  '162',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tepatlaxco de Hidalgo',
            'estado_id' => '21',
            'number' =>  '163',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tepeaca',
            'estado_id' => '21',
            'number' =>  '164',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tepemaxalco',
            'estado_id' => '21',
            'number' =>  '165',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tepeojuma',
            'estado_id' => '21',
            'number' =>  '166',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tepetzintla',
            'estado_id' => '21',
            'number' =>  '167',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tepexco',
            'estado_id' => '21',
            'number' =>  '168',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tepexi de Rodríguez',
            'estado_id' => '21',
            'number' =>  '169',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tepeyahualco',
            'estado_id' => '21',
            'number' =>  '170',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tepeyahualco de Cuauhtémoc',
            'estado_id' => '21',
            'number' =>  '171',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tetela de Ocampo',
            'estado_id' => '21',
            'number' =>  '172',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Teteles de Avila Castillo',
            'estado_id' => '21',
            'number' =>  '173',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Teziutlán',
            'estado_id' => '21',
            'number' =>  '174',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tianguismanalco',
            'estado_id' => '21',
            'number' =>  '175',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tilapa',
            'estado_id' => '21',
            'number' =>  '176',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlacotepec de Benito Juárez',
            'estado_id' => '21',
            'number' =>  '177',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlacuilotepec',
            'estado_id' => '21',
            'number' =>  '178',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlachichuca',
            'estado_id' => '21',
            'number' =>  '179',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlahuapan',
            'estado_id' => '21',
            'number' =>  '180',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlaltenango',
            'estado_id' => '21',
            'number' =>  '181',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlanepantla',
            'estado_id' => '21',
            'number' =>  '182',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlaola',
            'estado_id' => '21',
            'number' =>  '183',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlapacoya',
            'estado_id' => '21',
            'number' =>  '184',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlapanalá',
            'estado_id' => '21',
            'number' =>  '185',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlatlauquitepec',
            'estado_id' => '21',
            'number' =>  '186',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlaxco',
            'estado_id' => '21',
            'number' =>  '187',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tochimilco',
            'estado_id' => '21',
            'number' =>  '188',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tochtepec',
            'estado_id' => '21',
            'number' =>  '189',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Totoltepec de Guerrero',
            'estado_id' => '21',
            'number' =>  '190',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tulcingo',
            'estado_id' => '21',
            'number' =>  '191',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tuzamapan de Galeana',
            'estado_id' => '21',
            'number' =>  '192',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tzicatlacoyan',
            'estado_id' => '21',
            'number' =>  '193',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Venustiano Carranza',
            'estado_id' => '21',
            'number' =>  '194',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Vicente Guerrero',
            'estado_id' => '21',
            'number' =>  '195',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Xayacatlán de Bravo',
            'estado_id' => '21',
            'number' =>  '196',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Xicotepec',
            'estado_id' => '21',
            'number' =>  '197',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Xicotlán',
            'estado_id' => '21',
            'number' =>  '198',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Xiutetelco',
            'estado_id' => '21',
            'number' =>  '199',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Xochiapulco',
            'estado_id' => '21',
            'number' =>  '200',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Xochiltepec',
            'estado_id' => '21',
            'number' =>  '201',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Xochitlán de Vicente Suárez',
            'estado_id' => '21',
            'number' =>  '202',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Xochitlán Todos Santos',
            'estado_id' => '21',
            'number' =>  '203',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Yaonáhuac',
            'estado_id' => '21',
            'number' =>  '204',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Yehualtepec',
            'estado_id' => '21',
            'number' =>  '205',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zacapala',
            'estado_id' => '21',
            'number' =>  '206',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zacapoaxtla',
            'estado_id' => '21',
            'number' =>  '207',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zacatlán',
            'estado_id' => '21',
            'number' =>  '208',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zapotitlán',
            'estado_id' => '21',
            'number' =>  '209',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zapotitlán de Méndez',
            'estado_id' => '21',
            'number' =>  '210',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zaragoza',
            'estado_id' => '21',
            'number' =>  '211',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zautla',
            'estado_id' => '21',
            'number' =>  '212',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zihuateutla',
            'estado_id' => '21',
            'number' =>  '213',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zinacatepec',
            'estado_id' => '21',
            'number' =>  '214',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zongozotla',
            'estado_id' => '21',
            'number' =>  '215',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zoquiapan',
            'estado_id' => '21',
            'number' =>  '216',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zoquitlán',
            'estado_id' => '21',
            'number' =>  '217',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Amealco de Bonfil',
            'estado_id' => '22',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Pinal de Amoles',
            'estado_id' => '22',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Arroyo Seco',
            'estado_id' => '22',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cadereyta de Montes',
            'estado_id' => '22',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Colón',
            'estado_id' => '22',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Corregidora',
            'estado_id' => '22',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ezequiel Montes',
            'estado_id' => '22',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huimilpan',
            'estado_id' => '22',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jalpan de Serra',
            'estado_id' => '22',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Landa de Matamoros',
            'estado_id' => '22',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'El Marqués',
            'estado_id' => '22',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Pedro Escobedo',
            'estado_id' => '22',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Peñamiller',
            'estado_id' => '22',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Querétaro',
            'estado_id' => '22',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Joaquín',
            'estado_id' => '22',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan del Río',
            'estado_id' => '22',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tequisquiapan',
            'estado_id' => '22',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tolimán',
            'estado_id' => '22',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cozumel',
            'estado_id' => '23',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Felipe Carrillo Puerto',
            'estado_id' => '23',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Isla Mujeres',
            'estado_id' => '23',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Othón P. Blanco',
            'estado_id' => '23',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Benito Juárez',
            'estado_id' => '23',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'José María Morelos',
            'estado_id' => '23',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Lázaro Cárdenas',
            'estado_id' => '23',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Solidaridad',
            'estado_id' => '23',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tulum',
            'estado_id' => '23',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Bacalar',
            'estado_id' => '23',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ahualulco',
            'estado_id' => '24',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Alaquines',
            'estado_id' => '24',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Aquismón',
            'estado_id' => '24',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Armadillo de los Infante',
            'estado_id' => '24',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cárdenas',
            'estado_id' => '24',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Catorce',
            'estado_id' => '24',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cedral',
            'estado_id' => '24',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cerritos',
            'estado_id' => '24',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cerro de San Pedro',
            'estado_id' => '24',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ciudad del Maíz',
            'estado_id' => '24',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ciudad Fernández',
            'estado_id' => '24',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tancanhuitz',
            'estado_id' => '24',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ciudad Valles',
            'estado_id' => '24',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Coxcatlán',
            'estado_id' => '24',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Charcas',
            'estado_id' => '24',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ebano',
            'estado_id' => '24',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Guadalcázar',
            'estado_id' => '24',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huehuetlán',
            'estado_id' => '24',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Lagunillas',
            'estado_id' => '24',
            'number' =>  '019',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Matehuala',
            'estado_id' => '24',
            'number' =>  '020',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mexquitic de Carmona',
            'estado_id' => '24',
            'number' =>  '021',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Moctezuma',
            'estado_id' => '24',
            'number' =>  '022',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Rayón',
            'estado_id' => '24',
            'number' =>  '023',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Rioverde',
            'estado_id' => '24',
            'number' =>  '024',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Salinas',
            'estado_id' => '24',
            'number' =>  '025',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Antonio',
            'estado_id' => '24',
            'number' =>  '026',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Ciro de Acosta',
            'estado_id' => '24',
            'number' =>  '027',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Luis Potosí',
            'estado_id' => '24',
            'number' =>  '028',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Martín Chalchicuautla',
            'estado_id' => '24',
            'number' =>  '029',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Nicolás Tolentino',
            'estado_id' => '24',
            'number' =>  '030',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Catarina',
            'estado_id' => '24',
            'number' =>  '031',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María del Río',
            'estado_id' => '24',
            'number' =>  '032',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santo Domingo',
            'estado_id' => '24',
            'number' =>  '033',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Vicente Tancuayalab',
            'estado_id' => '24',
            'number' =>  '034',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Soledad de Graciano Sánchez',
            'estado_id' => '24',
            'number' =>  '035',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tamasopo',
            'estado_id' => '24',
            'number' =>  '036',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tamazunchale',
            'estado_id' => '24',
            'number' =>  '037',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tampacán',
            'estado_id' => '24',
            'number' =>  '038',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tampamolón Corona',
            'estado_id' => '24',
            'number' =>  '039',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tamuín',
            'estado_id' => '24',
            'number' =>  '040',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tanlajás',
            'estado_id' => '24',
            'number' =>  '041',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tanquián de Escobedo',
            'estado_id' => '24',
            'number' =>  '042',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tierra Nueva',
            'estado_id' => '24',
            'number' =>  '043',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Vanegas',
            'estado_id' => '24',
            'number' =>  '044',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Venado',
            'estado_id' => '24',
            'number' =>  '045',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Villa de Arriaga',
            'estado_id' => '24',
            'number' =>  '046',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Villa de Guadalupe',
            'estado_id' => '24',
            'number' =>  '047',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Villa de la Paz',
            'estado_id' => '24',
            'number' =>  '048',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Villa de Ramos',
            'estado_id' => '24',
            'number' =>  '049',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Villa de Reyes',
            'estado_id' => '24',
            'number' =>  '050',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Villa Hidalgo',
            'estado_id' => '24',
            'number' =>  '051',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Villa Juárez',
            'estado_id' => '24',
            'number' =>  '052',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Axtla de Terrazas',
            'estado_id' => '24',
            'number' =>  '053',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Xilitla',
            'estado_id' => '24',
            'number' =>  '054',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zaragoza',
            'estado_id' => '24',
            'number' =>  '055',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Villa de Arista',
            'estado_id' => '24',
            'number' =>  '056',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Matlapa',
            'estado_id' => '24',
            'number' =>  '057',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'El Naranjo',
            'estado_id' => '24',
            'number' =>  '058',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ahome',
            'estado_id' => '25',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Angostura',
            'estado_id' => '25',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Badiraguato',
            'estado_id' => '25',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Concordia',
            'estado_id' => '25',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cosalá',
            'estado_id' => '25',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Culiacán',
            'estado_id' => '25',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Choix',
            'estado_id' => '25',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Elota',
            'estado_id' => '25',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Escuinapa',
            'estado_id' => '25',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'El Fuerte',
            'estado_id' => '25',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Guasave',
            'estado_id' => '25',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mazatlán',
            'estado_id' => '25',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mocorito',
            'estado_id' => '25',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Rosario',
            'estado_id' => '25',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Salvador Alvarado',
            'estado_id' => '25',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Ignacio',
            'estado_id' => '25',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Sinaloa',
            'estado_id' => '25',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Navolato',
            'estado_id' => '25',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Aconchi',
            'estado_id' => '26',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Agua Prieta',
            'estado_id' => '26',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Alamos',
            'estado_id' => '26',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Altar',
            'estado_id' => '26',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Arivechi',
            'estado_id' => '26',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Arizpe',
            'estado_id' => '26',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Atil',
            'estado_id' => '26',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Bacadéhuachi',
            'estado_id' => '26',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Bacanora',
            'estado_id' => '26',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Bacerac',
            'estado_id' => '26',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Bacoachi',
            'estado_id' => '26',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Bácum',
            'estado_id' => '26',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Banámichi',
            'estado_id' => '26',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Baviácora',
            'estado_id' => '26',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Bavispe',
            'estado_id' => '26',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Benjamín Hill',
            'estado_id' => '26',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Caborca',
            'estado_id' => '26',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cajeme',
            'estado_id' => '26',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cananea',
            'estado_id' => '26',
            'number' =>  '019',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Carbó',
            'estado_id' => '26',
            'number' =>  '020',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'La Colorada',
            'estado_id' => '26',
            'number' =>  '021',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cucurpe',
            'estado_id' => '26',
            'number' =>  '022',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cumpas',
            'estado_id' => '26',
            'number' =>  '023',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Divisaderos',
            'estado_id' => '26',
            'number' =>  '024',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Empalme',
            'estado_id' => '26',
            'number' =>  '025',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Etchojoa',
            'estado_id' => '26',
            'number' =>  '026',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Fronteras',
            'estado_id' => '26',
            'number' =>  '027',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Granados',
            'estado_id' => '26',
            'number' =>  '028',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Guaymas',
            'estado_id' => '26',
            'number' =>  '029',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Hermosillo',
            'estado_id' => '26',
            'number' =>  '030',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huachinera',
            'estado_id' => '26',
            'number' =>  '031',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huásabas',
            'estado_id' => '26',
            'number' =>  '032',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huatabampo',
            'estado_id' => '26',
            'number' =>  '033',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huépac',
            'estado_id' => '26',
            'number' =>  '034',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Imuris',
            'estado_id' => '26',
            'number' =>  '035',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Magdalena',
            'estado_id' => '26',
            'number' =>  '036',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mazatán',
            'estado_id' => '26',
            'number' =>  '037',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Moctezuma',
            'estado_id' => '26',
            'number' =>  '038',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Naco',
            'estado_id' => '26',
            'number' =>  '039',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Nácori Chico',
            'estado_id' => '26',
            'number' =>  '040',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Nacozari de García',
            'estado_id' => '26',
            'number' =>  '041',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Navojoa',
            'estado_id' => '26',
            'number' =>  '042',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Nogales',
            'estado_id' => '26',
            'number' =>  '043',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Onavas',
            'estado_id' => '26',
            'number' =>  '044',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Opodepe',
            'estado_id' => '26',
            'number' =>  '045',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Oquitoa',
            'estado_id' => '26',
            'number' =>  '046',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Pitiquito',
            'estado_id' => '26',
            'number' =>  '047',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Puerto Peñasco',
            'estado_id' => '26',
            'number' =>  '048',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Quiriego',
            'estado_id' => '26',
            'number' =>  '049',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Rayón',
            'estado_id' => '26',
            'number' =>  '050',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Rosario',
            'estado_id' => '26',
            'number' =>  '051',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Sahuaripa',
            'estado_id' => '26',
            'number' =>  '052',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Felipe de Jesús',
            'estado_id' => '26',
            'number' =>  '053',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Javier',
            'estado_id' => '26',
            'number' =>  '054',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Luis Río Colorado',
            'estado_id' => '26',
            'number' =>  '055',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Miguel de Horcasitas',
            'estado_id' => '26',
            'number' =>  '056',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro de la Cueva',
            'estado_id' => '26',
            'number' =>  '057',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Ana',
            'estado_id' => '26',
            'number' =>  '058',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Cruz',
            'estado_id' => '26',
            'number' =>  '059',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Sáric',
            'estado_id' => '26',
            'number' =>  '060',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Soyopa',
            'estado_id' => '26',
            'number' =>  '061',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Suaqui Grande',
            'estado_id' => '26',
            'number' =>  '062',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tepache',
            'estado_id' => '26',
            'number' =>  '063',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Trincheras',
            'estado_id' => '26',
            'number' =>  '064',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tubutama',
            'estado_id' => '26',
            'number' =>  '065',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ures',
            'estado_id' => '26',
            'number' =>  '066',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Villa Hidalgo',
            'estado_id' => '26',
            'number' =>  '067',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Villa Pesqueira',
            'estado_id' => '26',
            'number' =>  '068',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Yécora',
            'estado_id' => '26',
            'number' =>  '069',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'General Plutarco Elías Calles',
            'estado_id' => '26',
            'number' =>  '070',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Benito Juárez',
            'estado_id' => '26',
            'number' =>  '071',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Ignacio Río Muerto',
            'estado_id' => '26',
            'number' =>  '072',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Balancán',
            'estado_id' => '27',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cárdenas',
            'estado_id' => '27',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Centla',
            'estado_id' => '27',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Centro',
            'estado_id' => '27',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Comalcalco',
            'estado_id' => '27',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cunduacán',
            'estado_id' => '27',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Emiliano Zapata',
            'estado_id' => '27',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huimanguillo',
            'estado_id' => '27',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jalapa',
            'estado_id' => '27',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jalpa de Méndez',
            'estado_id' => '27',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jonuta',
            'estado_id' => '27',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Macuspana',
            'estado_id' => '27',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Nacajuca',
            'estado_id' => '27',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Paraíso',
            'estado_id' => '27',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tacotalpa',
            'estado_id' => '27',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Teapa',
            'estado_id' => '27',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tenosique',
            'estado_id' => '27',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Abasolo',
            'estado_id' => '28',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Aldama',
            'estado_id' => '28',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Altamira',
            'estado_id' => '28',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Antiguo Morelos',
            'estado_id' => '28',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Burgos',
            'estado_id' => '28',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Bustamante',
            'estado_id' => '28',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Camargo',
            'estado_id' => '28',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Casas',
            'estado_id' => '28',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ciudad Madero',
            'estado_id' => '28',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cruillas',
            'estado_id' => '28',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Gómez Farías',
            'estado_id' => '28',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'González',
            'estado_id' => '28',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Güémez',
            'estado_id' => '28',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Guerrero',
            'estado_id' => '28',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Gustavo Díaz Ordaz',
            'estado_id' => '28',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Hidalgo',
            'estado_id' => '28',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jaumave',
            'estado_id' => '28',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jiménez',
            'estado_id' => '28',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Llera',
            'estado_id' => '28',
            'number' =>  '019',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mainero',
            'estado_id' => '28',
            'number' =>  '020',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'El Mante',
            'estado_id' => '28',
            'number' =>  '021',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Matamoros',
            'estado_id' => '28',
            'number' =>  '022',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Méndez',
            'estado_id' => '28',
            'number' =>  '023',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mier',
            'estado_id' => '28',
            'number' =>  '024',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Miguel Alemán',
            'estado_id' => '28',
            'number' =>  '025',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Miquihuana',
            'estado_id' => '28',
            'number' =>  '026',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Nuevo Laredo',
            'estado_id' => '28',
            'number' =>  '027',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Nuevo Morelos',
            'estado_id' => '28',
            'number' =>  '028',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ocampo',
            'estado_id' => '28',
            'number' =>  '029',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Padilla',
            'estado_id' => '28',
            'number' =>  '030',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Palmillas',
            'estado_id' => '28',
            'number' =>  '031',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Reynosa',
            'estado_id' => '28',
            'number' =>  '032',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Río Bravo',
            'estado_id' => '28',
            'number' =>  '033',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Carlos',
            'estado_id' => '28',
            'number' =>  '034',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Fernando',
            'estado_id' => '28',
            'number' =>  '035',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Nicolás',
            'estado_id' => '28',
            'number' =>  '036',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Soto la Marina',
            'estado_id' => '28',
            'number' =>  '037',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tampico',
            'estado_id' => '28',
            'number' =>  '038',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tula',
            'estado_id' => '28',
            'number' =>  '039',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Valle Hermoso',
            'estado_id' => '28',
            'number' =>  '040',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Victoria',
            'estado_id' => '28',
            'number' =>  '041',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Villagrán',
            'estado_id' => '28',
            'number' =>  '042',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Xicoténcatl',
            'estado_id' => '28',
            'number' =>  '043',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Amaxac de Guerrero',
            'estado_id' => '29',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Apetatitlán de Antonio Carvajal',
            'estado_id' => '29',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Atlangatepec',
            'estado_id' => '29',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Atltzayanca',
            'estado_id' => '29',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Apizaco',
            'estado_id' => '29',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Calpulalpan',
            'estado_id' => '29',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'El Carmen Tequexquitla',
            'estado_id' => '29',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cuapiaxtla',
            'estado_id' => '29',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cuaxomulco',
            'estado_id' => '29',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chiautempan',
            'estado_id' => '29',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Muñoz de Domingo Arenas',
            'estado_id' => '29',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Españita',
            'estado_id' => '29',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huamantla',
            'estado_id' => '29',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Hueyotlipan',
            'estado_id' => '29',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ixtacuixtla de Mariano Matamoros',
            'estado_id' => '29',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ixtenco',
            'estado_id' => '29',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mazatecochco de José María Morelos',
            'estado_id' => '29',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Contla de Juan Cuamatzi',
            'estado_id' => '29',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tepetitla de Lardizábal',
            'estado_id' => '29',
            'number' =>  '019',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Sanctórum de Lázaro Cárdenas',
            'estado_id' => '29',
            'number' =>  '020',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Nanacamilpa de Mariano Arista',
            'estado_id' => '29',
            'number' =>  '021',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Acuamanala de Miguel Hidalgo',
            'estado_id' => '29',
            'number' =>  '022',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Natívitas',
            'estado_id' => '29',
            'number' =>  '023',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Panotla',
            'estado_id' => '29',
            'number' =>  '024',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pablo del Monte',
            'estado_id' => '29',
            'number' =>  '025',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Cruz Tlaxcala',
            'estado_id' => '29',
            'number' =>  '026',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tenancingo',
            'estado_id' => '29',
            'number' =>  '027',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Teolocholco',
            'estado_id' => '29',
            'number' =>  '028',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tepeyanco',
            'estado_id' => '29',
            'number' =>  '029',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Terrenate',
            'estado_id' => '29',
            'number' =>  '030',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tetla de la Solidaridad',
            'estado_id' => '29',
            'number' =>  '031',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tetlatlahuca',
            'estado_id' => '29',
            'number' =>  '032',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlaxcala',
            'estado_id' => '29',
            'number' =>  '033',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlaxco',
            'estado_id' => '29',
            'number' =>  '034',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tocatlán',
            'estado_id' => '29',
            'number' =>  '035',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Totolac',
            'estado_id' => '29',
            'number' =>  '036',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ziltlaltépec de Trinidad Sánchez Santos',
            'estado_id' => '29',
            'number' =>  '037',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tzompantepec',
            'estado_id' => '29',
            'number' =>  '038',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Xaloztoc',
            'estado_id' => '29',
            'number' =>  '039',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Xaltocan',
            'estado_id' => '29',
            'number' =>  '040',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Papalotla de Xicohténcatl',
            'estado_id' => '29',
            'number' =>  '041',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Xicohtzinco',
            'estado_id' => '29',
            'number' =>  '042',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Yauhquemehcan',
            'estado_id' => '29',
            'number' =>  '043',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zacatelco',
            'estado_id' => '29',
            'number' =>  '044',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Benito Juárez',
            'estado_id' => '29',
            'number' =>  '045',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Emiliano Zapata',
            'estado_id' => '29',
            'number' =>  '046',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Lázaro Cárdenas',
            'estado_id' => '29',
            'number' =>  '047',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'La Magdalena Tlaltelulco',
            'estado_id' => '29',
            'number' =>  '048',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Damián Texóloc',
            'estado_id' => '29',
            'number' =>  '049',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Francisco Tetlanohcan',
            'estado_id' => '29',
            'number' =>  '050',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Jerónimo Zacualpan',
            'estado_id' => '29',
            'number' =>  '051',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San José Teacalco',
            'estado_id' => '29',
            'number' =>  '052',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Huactzinco',
            'estado_id' => '29',
            'number' =>  '053',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Lorenzo Axocomanitla',
            'estado_id' => '29',
            'number' =>  '054',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Lucas Tecopilco',
            'estado_id' => '29',
            'number' =>  '055',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Ana Nopalucan',
            'estado_id' => '29',
            'number' =>  '056',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Apolonia Teacalco',
            'estado_id' => '29',
            'number' =>  '057',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Catarina Ayometla',
            'estado_id' => '29',
            'number' =>  '058',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Cruz Quilehtla',
            'estado_id' => '29',
            'number' =>  '059',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Isabel Xiloxoxtla',
            'estado_id' => '29',
            'number' =>  '060',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Acajete',
            'estado_id' => '30',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Acatlán',
            'estado_id' => '30',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Acayucan',
            'estado_id' => '30',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Actopan',
            'estado_id' => '30',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Acula',
            'estado_id' => '30',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Acultzingo',
            'estado_id' => '30',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Camarón de Tejeda',
            'estado_id' => '30',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Alpatláhuac',
            'estado_id' => '30',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Alto Lucero de Gutiérrez Barrios',
            'estado_id' => '30',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Altotonga',
            'estado_id' => '30',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Alvarado',
            'estado_id' => '30',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Amatitlán',
            'estado_id' => '30',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Naranjos Amatlán',
            'estado_id' => '30',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Amatlán de los Reyes',
            'estado_id' => '30',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Angel R. Cabada',
            'estado_id' => '30',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'La Antigua',
            'estado_id' => '30',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Apazapan',
            'estado_id' => '30',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Aquila',
            'estado_id' => '30',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Astacinga',
            'estado_id' => '30',
            'number' =>  '019',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Atlahuilco',
            'estado_id' => '30',
            'number' =>  '020',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Atoyac',
            'estado_id' => '30',
            'number' =>  '021',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Atzacan',
            'estado_id' => '30',
            'number' =>  '022',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Atzalan',
            'estado_id' => '30',
            'number' =>  '023',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlaltetela',
            'estado_id' => '30',
            'number' =>  '024',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ayahualulco',
            'estado_id' => '30',
            'number' =>  '025',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Banderilla',
            'estado_id' => '30',
            'number' =>  '026',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Benito Juárez',
            'estado_id' => '30',
            'number' =>  '027',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Boca del Río',
            'estado_id' => '30',
            'number' =>  '028',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Calcahualco',
            'estado_id' => '30',
            'number' =>  '029',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Camerino Z. Mendoza',
            'estado_id' => '30',
            'number' =>  '030',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Carrillo Puerto',
            'estado_id' => '30',
            'number' =>  '031',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Catemaco',
            'estado_id' => '30',
            'number' =>  '032',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cazones de Herrera',
            'estado_id' => '30',
            'number' =>  '033',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cerro Azul',
            'estado_id' => '30',
            'number' =>  '034',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Citlaltépetl',
            'estado_id' => '30',
            'number' =>  '035',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Coacoatzintla',
            'estado_id' => '30',
            'number' =>  '036',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Coahuitlán',
            'estado_id' => '30',
            'number' =>  '037',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Coatepec',
            'estado_id' => '30',
            'number' =>  '038',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Coatzacoalcos',
            'estado_id' => '30',
            'number' =>  '039',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Coatzintla',
            'estado_id' => '30',
            'number' =>  '040',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Coetzala',
            'estado_id' => '30',
            'number' =>  '041',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Colipa',
            'estado_id' => '30',
            'number' =>  '042',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Comapa',
            'estado_id' => '30',
            'number' =>  '043',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Córdoba',
            'estado_id' => '30',
            'number' =>  '044',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cosamaloapan de Carpio',
            'estado_id' => '30',
            'number' =>  '045',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cosautlán de Carvajal',
            'estado_id' => '30',
            'number' =>  '046',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Coscomatepec',
            'estado_id' => '30',
            'number' =>  '047',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cosoleacaque',
            'estado_id' => '30',
            'number' =>  '048',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cotaxtla',
            'estado_id' => '30',
            'number' =>  '049',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Coxquihui',
            'estado_id' => '30',
            'number' =>  '050',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Coyutla',
            'estado_id' => '30',
            'number' =>  '051',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cuichapa',
            'estado_id' => '30',
            'number' =>  '052',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cuitláhuac',
            'estado_id' => '30',
            'number' =>  '053',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chacaltianguis',
            'estado_id' => '30',
            'number' =>  '054',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chalma',
            'estado_id' => '30',
            'number' =>  '055',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chiconamel',
            'estado_id' => '30',
            'number' =>  '056',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chiconquiaco',
            'estado_id' => '30',
            'number' =>  '057',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chicontepec',
            'estado_id' => '30',
            'number' =>  '058',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chinameca',
            'estado_id' => '30',
            'number' =>  '059',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chinampa de Gorostiza',
            'estado_id' => '30',
            'number' =>  '060',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Las Choapas',
            'estado_id' => '30',
            'number' =>  '061',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chocamán',
            'estado_id' => '30',
            'number' =>  '062',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chontla',
            'estado_id' => '30',
            'number' =>  '063',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chumatlán',
            'estado_id' => '30',
            'number' =>  '064',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Emiliano Zapata',
            'estado_id' => '30',
            'number' =>  '065',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Espinal',
            'estado_id' => '30',
            'number' =>  '066',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Filomeno Mata',
            'estado_id' => '30',
            'number' =>  '067',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Fortín',
            'estado_id' => '30',
            'number' =>  '068',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Gutiérrez Zamora',
            'estado_id' => '30',
            'number' =>  '069',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Hidalgotitlán',
            'estado_id' => '30',
            'number' =>  '070',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huatusco',
            'estado_id' => '30',
            'number' =>  '071',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huayacocotla',
            'estado_id' => '30',
            'number' =>  '072',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Hueyapan de Ocampo',
            'estado_id' => '30',
            'number' =>  '073',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huiloapan de Cuauhtémoc',
            'estado_id' => '30',
            'number' =>  '074',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ignacio de la Llave',
            'estado_id' => '30',
            'number' =>  '075',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ilamatlán',
            'estado_id' => '30',
            'number' =>  '076',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Isla',
            'estado_id' => '30',
            'number' =>  '077',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ixcatepec',
            'estado_id' => '30',
            'number' =>  '078',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ixhuacán de los Reyes',
            'estado_id' => '30',
            'number' =>  '079',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ixhuatlán del Café',
            'estado_id' => '30',
            'number' =>  '080',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ixhuatlancillo',
            'estado_id' => '30',
            'number' =>  '081',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ixhuatlán del Sureste',
            'estado_id' => '30',
            'number' =>  '082',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ixhuatlán de Madero',
            'estado_id' => '30',
            'number' =>  '083',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ixmatlahuacan',
            'estado_id' => '30',
            'number' =>  '084',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ixtaczoquitlán',
            'estado_id' => '30',
            'number' =>  '085',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jalacingo',
            'estado_id' => '30',
            'number' =>  '086',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Xalapa',
            'estado_id' => '30',
            'number' =>  '087',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jalcomulco',
            'estado_id' => '30',
            'number' =>  '088',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jáltipan',
            'estado_id' => '30',
            'number' =>  '089',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jamapa',
            'estado_id' => '30',
            'number' =>  '090',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jesús Carranza',
            'estado_id' => '30',
            'number' =>  '091',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Xico',
            'estado_id' => '30',
            'number' =>  '092',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jilotepec',
            'estado_id' => '30',
            'number' =>  '093',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Juan Rodríguez Clara',
            'estado_id' => '30',
            'number' =>  '094',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Juchique de Ferrer',
            'estado_id' => '30',
            'number' =>  '095',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Landero y Coss',
            'estado_id' => '30',
            'number' =>  '096',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Lerdo de Tejada',
            'estado_id' => '30',
            'number' =>  '097',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Magdalena',
            'estado_id' => '30',
            'number' =>  '098',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Maltrata',
            'estado_id' => '30',
            'number' =>  '099',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Manlio Fabio Altamirano',
            'estado_id' => '30',
            'number' =>  '100',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mariano Escobedo',
            'estado_id' => '30',
            'number' =>  '101',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Martínez de la Torre',
            'estado_id' => '30',
            'number' =>  '102',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mecatlán',
            'estado_id' => '30',
            'number' =>  '103',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mecayapan',
            'estado_id' => '30',
            'number' =>  '104',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Medellín de Bravo',
            'estado_id' => '30',
            'number' =>  '105',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Miahuatlán',
            'estado_id' => '30',
            'number' =>  '106',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Las Minas',
            'estado_id' => '30',
            'number' =>  '107',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Minatitlán',
            'estado_id' => '30',
            'number' =>  '108',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Misantla',
            'estado_id' => '30',
            'number' =>  '109',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mixtla de Altamirano',
            'estado_id' => '30',
            'number' =>  '110',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Moloacán',
            'estado_id' => '30',
            'number' =>  '111',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Naolinco',
            'estado_id' => '30',
            'number' =>  '112',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Naranjal',
            'estado_id' => '30',
            'number' =>  '113',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Nautla',
            'estado_id' => '30',
            'number' =>  '114',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Nogales',
            'estado_id' => '30',
            'number' =>  '115',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Oluta',
            'estado_id' => '30',
            'number' =>  '116',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Omealca',
            'estado_id' => '30',
            'number' =>  '117',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Orizaba',
            'estado_id' => '30',
            'number' =>  '118',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Otatitlán',
            'estado_id' => '30',
            'number' =>  '119',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Oteapan',
            'estado_id' => '30',
            'number' =>  '120',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ozuluama de Mascareñas',
            'estado_id' => '30',
            'number' =>  '121',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Pajapan',
            'estado_id' => '30',
            'number' =>  '122',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Pánuco',
            'estado_id' => '30',
            'number' =>  '123',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Papantla',
            'estado_id' => '30',
            'number' =>  '124',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Paso del Macho',
            'estado_id' => '30',
            'number' =>  '125',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Paso de Ovejas',
            'estado_id' => '30',
            'number' =>  '126',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'La Perla',
            'estado_id' => '30',
            'number' =>  '127',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Perote',
            'estado_id' => '30',
            'number' =>  '128',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Platón Sánchez',
            'estado_id' => '30',
            'number' =>  '129',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Playa Vicente',
            'estado_id' => '30',
            'number' =>  '130',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Poza Rica de Hidalgo',
            'estado_id' => '30',
            'number' =>  '131',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Las Vigas de Ramírez',
            'estado_id' => '30',
            'number' =>  '132',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Pueblo Viejo',
            'estado_id' => '30',
            'number' =>  '133',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Puente Nacional',
            'estado_id' => '30',
            'number' =>  '134',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Rafael Delgado',
            'estado_id' => '30',
            'number' =>  '135',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Rafael Lucio',
            'estado_id' => '30',
            'number' =>  '136',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Los Reyes',
            'estado_id' => '30',
            'number' =>  '137',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Río Blanco',
            'estado_id' => '30',
            'number' =>  '138',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Saltabarranca',
            'estado_id' => '30',
            'number' =>  '139',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Andrés Tenejapan',
            'estado_id' => '30',
            'number' =>  '140',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Andrés Tuxtla',
            'estado_id' => '30',
            'number' =>  '141',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Evangelista',
            'estado_id' => '30',
            'number' =>  '142',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Tuxtla',
            'estado_id' => '30',
            'number' =>  '143',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Sayula de Alemán',
            'estado_id' => '30',
            'number' =>  '144',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Soconusco',
            'estado_id' => '30',
            'number' =>  '145',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Sochiapa',
            'estado_id' => '30',
            'number' =>  '146',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Soledad Atzompa',
            'estado_id' => '30',
            'number' =>  '147',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Soledad de Doblado',
            'estado_id' => '30',
            'number' =>  '148',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Soteapan',
            'estado_id' => '30',
            'number' =>  '149',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tamalín',
            'estado_id' => '30',
            'number' =>  '150',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tamiahua',
            'estado_id' => '30',
            'number' =>  '151',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tampico Alto',
            'estado_id' => '30',
            'number' =>  '152',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tancoco',
            'estado_id' => '30',
            'number' =>  '153',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tantima',
            'estado_id' => '30',
            'number' =>  '154',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tantoyuca',
            'estado_id' => '30',
            'number' =>  '155',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tatatila',
            'estado_id' => '30',
            'number' =>  '156',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Castillo de Teayo',
            'estado_id' => '30',
            'number' =>  '157',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tecolutla',
            'estado_id' => '30',
            'number' =>  '158',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tehuipango',
            'estado_id' => '30',
            'number' =>  '159',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Álamo Temapache',
            'estado_id' => '30',
            'number' =>  '160',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tempoal',
            'estado_id' => '30',
            'number' =>  '161',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tenampa',
            'estado_id' => '30',
            'number' =>  '162',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tenochtitlán',
            'estado_id' => '30',
            'number' =>  '163',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Teocelo',
            'estado_id' => '30',
            'number' =>  '164',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tepatlaxco',
            'estado_id' => '30',
            'number' =>  '165',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tepetlán',
            'estado_id' => '30',
            'number' =>  '166',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tepetzintla',
            'estado_id' => '30',
            'number' =>  '167',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tequila',
            'estado_id' => '30',
            'number' =>  '168',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'José Azueta',
            'estado_id' => '30',
            'number' =>  '169',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Texcatepec',
            'estado_id' => '30',
            'number' =>  '170',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Texhuacán',
            'estado_id' => '30',
            'number' =>  '171',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Texistepec',
            'estado_id' => '30',
            'number' =>  '172',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tezonapa',
            'estado_id' => '30',
            'number' =>  '173',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tierra Blanca',
            'estado_id' => '30',
            'number' =>  '174',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tihuatlán',
            'estado_id' => '30',
            'number' =>  '175',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlacojalpan',
            'estado_id' => '30',
            'number' =>  '176',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlacolulan',
            'estado_id' => '30',
            'number' =>  '177',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlacotalpan',
            'estado_id' => '30',
            'number' =>  '178',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlacotepec de Mejía',
            'estado_id' => '30',
            'number' =>  '179',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlachichilco',
            'estado_id' => '30',
            'number' =>  '180',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlalixcoyan',
            'estado_id' => '30',
            'number' =>  '181',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlalnelhuayocan',
            'estado_id' => '30',
            'number' =>  '182',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlapacoyan',
            'estado_id' => '30',
            'number' =>  '183',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlaquilpa',
            'estado_id' => '30',
            'number' =>  '184',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlilapan',
            'estado_id' => '30',
            'number' =>  '185',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tomatlán',
            'estado_id' => '30',
            'number' =>  '186',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tonayán',
            'estado_id' => '30',
            'number' =>  '187',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Totutla',
            'estado_id' => '30',
            'number' =>  '188',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tuxpan',
            'estado_id' => '30',
            'number' =>  '189',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tuxtilla',
            'estado_id' => '30',
            'number' =>  '190',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ursulo Galván',
            'estado_id' => '30',
            'number' =>  '191',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Vega de Alatorre',
            'estado_id' => '30',
            'number' =>  '192',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Veracruz',
            'estado_id' => '30',
            'number' =>  '193',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Villa Aldama',
            'estado_id' => '30',
            'number' =>  '194',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Xoxocotla',
            'estado_id' => '30',
            'number' =>  '195',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Yanga',
            'estado_id' => '30',
            'number' =>  '196',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Yecuatla',
            'estado_id' => '30',
            'number' =>  '197',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zacualpan',
            'estado_id' => '30',
            'number' =>  '198',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zaragoza',
            'estado_id' => '30',
            'number' =>  '199',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zentla',
            'estado_id' => '30',
            'number' =>  '200',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zongolica',
            'estado_id' => '30',
            'number' =>  '201',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zontecomatlán de López y Fuentes',
            'estado_id' => '30',
            'number' =>  '202',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zozocolco de Hidalgo',
            'estado_id' => '30',
            'number' =>  '203',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Agua Dulce',
            'estado_id' => '30',
            'number' =>  '204',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'El Higo',
            'estado_id' => '30',
            'number' =>  '205',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Nanchital de Lázaro Cárdenas del Río',
            'estado_id' => '30',
            'number' =>  '206',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tres Valles',
            'estado_id' => '30',
            'number' =>  '207',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Carlos A. Carrillo',
            'estado_id' => '30',
            'number' =>  '208',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tatahuicapan de Juárez',
            'estado_id' => '30',
            'number' =>  '209',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Uxpanapa',
            'estado_id' => '30',
            'number' =>  '210',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Rafael',
            'estado_id' => '30',
            'number' =>  '211',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Sochiapan',
            'estado_id' => '30',
            'number' =>  '212',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Abalá',
            'estado_id' => '31',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Acanceh',
            'estado_id' => '31',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Akil',
            'estado_id' => '31',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Baca',
            'estado_id' => '31',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Bokobá',
            'estado_id' => '31',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Buctzotz',
            'estado_id' => '31',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cacalchén',
            'estado_id' => '31',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Calotmul',
            'estado_id' => '31',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cansahcab',
            'estado_id' => '31',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cantamayec',
            'estado_id' => '31',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Celestún',
            'estado_id' => '31',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cenotillo',
            'estado_id' => '31',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Conkal',
            'estado_id' => '31',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cuncunul',
            'estado_id' => '31',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cuzamá',
            'estado_id' => '31',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chacsinkín',
            'estado_id' => '31',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chankom',
            'estado_id' => '31',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chapab',
            'estado_id' => '31',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chemax',
            'estado_id' => '31',
            'number' =>  '019',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chicxulub Pueblo',
            'estado_id' => '31',
            'number' =>  '020',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chichimilá',
            'estado_id' => '31',
            'number' =>  '021',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chikindzonot',
            'estado_id' => '31',
            'number' =>  '022',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chocholá',
            'estado_id' => '31',
            'number' =>  '023',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chumayel',
            'estado_id' => '31',
            'number' =>  '024',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Dzán',
            'estado_id' => '31',
            'number' =>  '025',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Dzemul',
            'estado_id' => '31',
            'number' =>  '026',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Dzidzantún',
            'estado_id' => '31',
            'number' =>  '027',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Dzilam de Bravo',
            'estado_id' => '31',
            'number' =>  '028',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Dzilam González',
            'estado_id' => '31',
            'number' =>  '029',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Dzitás',
            'estado_id' => '31',
            'number' =>  '030',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Dzoncauich',
            'estado_id' => '31',
            'number' =>  '031',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Espita',
            'estado_id' => '31',
            'number' =>  '032',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Halachó',
            'estado_id' => '31',
            'number' =>  '033',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Hocabá',
            'estado_id' => '31',
            'number' =>  '034',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Hoctún',
            'estado_id' => '31',
            'number' =>  '035',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Homún',
            'estado_id' => '31',
            'number' =>  '036',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huhí',
            'estado_id' => '31',
            'number' =>  '037',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Hunucmá',
            'estado_id' => '31',
            'number' =>  '038',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ixil',
            'estado_id' => '31',
            'number' =>  '039',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Izamal',
            'estado_id' => '31',
            'number' =>  '040',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Kanasín',
            'estado_id' => '31',
            'number' =>  '041',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Kantunil',
            'estado_id' => '31',
            'number' =>  '042',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Kaua',
            'estado_id' => '31',
            'number' =>  '043',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Kinchil',
            'estado_id' => '31',
            'number' =>  '044',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Kopomá',
            'estado_id' => '31',
            'number' =>  '045',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mama',
            'estado_id' => '31',
            'number' =>  '046',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Maní',
            'estado_id' => '31',
            'number' =>  '047',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Maxcanú',
            'estado_id' => '31',
            'number' =>  '048',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mayapán',
            'estado_id' => '31',
            'number' =>  '049',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mérida',
            'estado_id' => '31',
            'number' =>  '050',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mocochá',
            'estado_id' => '31',
            'number' =>  '051',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Motul',
            'estado_id' => '31',
            'number' =>  '052',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Muna',
            'estado_id' => '31',
            'number' =>  '053',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Muxupip',
            'estado_id' => '31',
            'number' =>  '054',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Opichén',
            'estado_id' => '31',
            'number' =>  '055',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Oxkutzcab',
            'estado_id' => '31',
            'number' =>  '056',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Panabá',
            'estado_id' => '31',
            'number' =>  '057',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Peto',
            'estado_id' => '31',
            'number' =>  '058',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Progreso',
            'estado_id' => '31',
            'number' =>  '059',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Quintana Roo',
            'estado_id' => '31',
            'number' =>  '060',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Río Lagartos',
            'estado_id' => '31',
            'number' =>  '061',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Sacalum',
            'estado_id' => '31',
            'number' =>  '062',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Samahil',
            'estado_id' => '31',
            'number' =>  '063',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Sanahcat',
            'estado_id' => '31',
            'number' =>  '064',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Felipe',
            'estado_id' => '31',
            'number' =>  '065',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Elena',
            'estado_id' => '31',
            'number' =>  '066',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Seyé',
            'estado_id' => '31',
            'number' =>  '067',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Sinanché',
            'estado_id' => '31',
            'number' =>  '068',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Sotuta',
            'estado_id' => '31',
            'number' =>  '069',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Sucilá',
            'estado_id' => '31',
            'number' =>  '070',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Sudzal',
            'estado_id' => '31',
            'number' =>  '071',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Suma',
            'estado_id' => '31',
            'number' =>  '072',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tahdziú',
            'estado_id' => '31',
            'number' =>  '073',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tahmek',
            'estado_id' => '31',
            'number' =>  '074',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Teabo',
            'estado_id' => '31',
            'number' =>  '075',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tecoh',
            'estado_id' => '31',
            'number' =>  '076',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tekal de Venegas',
            'estado_id' => '31',
            'number' =>  '077',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tekantó',
            'estado_id' => '31',
            'number' =>  '078',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tekax',
            'estado_id' => '31',
            'number' =>  '079',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tekit',
            'estado_id' => '31',
            'number' =>  '080',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tekom',
            'estado_id' => '31',
            'number' =>  '081',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Telchac Pueblo',
            'estado_id' => '31',
            'number' =>  '082',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Telchac Puerto',
            'estado_id' => '31',
            'number' =>  '083',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Temax',
            'estado_id' => '31',
            'number' =>  '084',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Temozón',
            'estado_id' => '31',
            'number' =>  '085',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tepakán',
            'estado_id' => '31',
            'number' =>  '086',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tetiz',
            'estado_id' => '31',
            'number' =>  '087',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Teya',
            'estado_id' => '31',
            'number' =>  '088',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ticul',
            'estado_id' => '31',
            'number' =>  '089',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Timucuy',
            'estado_id' => '31',
            'number' =>  '090',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tinum',
            'estado_id' => '31',
            'number' =>  '091',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tixcacalcupul',
            'estado_id' => '31',
            'number' =>  '092',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tixkokob',
            'estado_id' => '31',
            'number' =>  '093',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tixmehuac',
            'estado_id' => '31',
            'number' =>  '094',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tixpéhual',
            'estado_id' => '31',
            'number' =>  '095',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tizimín',
            'estado_id' => '31',
            'number' =>  '096',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tunkás',
            'estado_id' => '31',
            'number' =>  '097',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tzucacab',
            'estado_id' => '31',
            'number' =>  '098',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Uayma',
            'estado_id' => '31',
            'number' =>  '099',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ucú',
            'estado_id' => '31',
            'number' =>  '100',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Umán',
            'estado_id' => '31',
            'number' =>  '101',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Valladolid',
            'estado_id' => '31',
            'number' =>  '102',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Xocchel',
            'estado_id' => '31',
            'number' =>  '103',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Yaxcabá',
            'estado_id' => '31',
            'number' =>  '104',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Yaxkukul',
            'estado_id' => '31',
            'number' =>  '105',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Yobaín',
            'estado_id' => '31',
            'number' =>  '106',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Apozol',
            'estado_id' => '32',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Apulco',
            'estado_id' => '32',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Atolinga',
            'estado_id' => '32',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Benito Juárez',
            'estado_id' => '32',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Calera',
            'estado_id' => '32',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cañitas de Felipe Pescador',
            'estado_id' => '32',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Concepción del Oro',
            'estado_id' => '32',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cuauhtémoc',
            'estado_id' => '32',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chalchihuites',
            'estado_id' => '32',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Fresnillo',
            'estado_id' => '32',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Trinidad García de la Cadena',
            'estado_id' => '32',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Genaro Codina',
            'estado_id' => '32',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'General Enrique Estrada',
            'estado_id' => '32',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'General Francisco R. Murguía',
            'estado_id' => '32',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'El Plateado de Joaquín Amaro',
            'estado_id' => '32',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'General Pánfilo Natera',
            'estado_id' => '32',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Guadalupe',
            'estado_id' => '32',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huanusco',
            'estado_id' => '32',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jalpa',
            'estado_id' => '32',
            'number' =>  '019',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jerez',
            'estado_id' => '32',
            'number' =>  '020',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jiménez del Teul',
            'estado_id' => '32',
            'number' =>  '021',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Juan Aldama',
            'estado_id' => '32',
            'number' =>  '022',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Juchipila',
            'estado_id' => '32',
            'number' =>  '023',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Loreto',
            'estado_id' => '32',
            'number' =>  '024',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Luis Moya',
            'estado_id' => '32',
            'number' =>  '025',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mazapil',
            'estado_id' => '32',
            'number' =>  '026',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Melchor Ocampo',
            'estado_id' => '32',
            'number' =>  '027',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mezquital del Oro',
            'estado_id' => '32',
            'number' =>  '028',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Miguel Auza',
            'estado_id' => '32',
            'number' =>  '029',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Momax',
            'estado_id' => '32',
            'number' =>  '030',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Monte Escobedo',
            'estado_id' => '32',
            'number' =>  '031',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Morelos',
            'estado_id' => '32',
            'number' =>  '032',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Moyahua de Estrada',
            'estado_id' => '32',
            'number' =>  '033',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Nochistlán de Mejía',
            'estado_id' => '32',
            'number' =>  '034',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Noria de Ángeles',
            'estado_id' => '32',
            'number' =>  '035',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ojocaliente',
            'estado_id' => '32',
            'number' =>  '036',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Pánuco',
            'estado_id' => '32',
            'number' =>  '037',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Pinos',
            'estado_id' => '32',
            'number' =>  '038',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Río Grande',
            'estado_id' => '32',
            'number' =>  '039',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Sain Alto',
            'estado_id' => '32',
            'number' =>  '040',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'El Salvador',
            'estado_id' => '32',
            'number' =>  '041',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Sombrerete',
            'estado_id' => '32',
            'number' =>  '042',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Susticacán',
            'estado_id' => '32',
            'number' =>  '043',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tabasco',
            'estado_id' => '32',
            'number' =>  '044',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tepechitlán',
            'estado_id' => '32',
            'number' =>  '045',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tepetongo',
            'estado_id' => '32',
            'number' =>  '046',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Teúl de González Ortega',
            'estado_id' => '32',
            'number' =>  '047',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlaltenango de Sánchez Román',
            'estado_id' => '32',
            'number' =>  '048',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Valparaíso',
            'estado_id' => '32',
            'number' =>  '049',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Vetagrande',
            'estado_id' => '32',
            'number' =>  '050',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Villa de Cos',
            'estado_id' => '32',
            'number' =>  '051',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Villa García',
            'estado_id' => '32',
            'number' =>  '052',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Villa González Ortega',
            'estado_id' => '32',
            'number' =>  '053',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Villa Hidalgo',
            'estado_id' => '32',
            'number' =>  '054',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Villanueva',
            'estado_id' => '32',
            'number' =>  '055',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zacatecas',
            'estado_id' => '32',
            'number' =>  '056',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Trancoso',
            'estado_id' => '32',
            'number' =>  '057',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María de la Paz',
            'estado_id' => '32',
            'number' =>  '058',
        ]);
    }
}
