<?php

use Illuminate\Database\Seeder;

class PaisesTableSeeder extends Seeder
{

    /**
     *
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('paises')->delete();
        
        \DB::table('paises')->insert(array (
            0 => 
            array (
                'codigo' => 4,
                'nome' => 'Afeganistão',
                'nome_formal' => 'República Islâmica do Afeganistão',
                'iso' => 'AF',
                'iso3' => 'AFG',
                'fone' => 93,
            ),
            1 => 
            array (
                'codigo' => 8,
                'nome' => 'Albânia',
                'nome_formal' => 'República da Albânia',
                'iso' => 'AL',
                'iso3' => 'ALB',
                'fone' => 355,
            ),
            2 => 
            array (
                'codigo' => 12,
                'nome' => 'Algéria',
                'nome_formal' => 'República Democrática Popular da Algéria',
                'iso' => 'DZ',
                'iso3' => 'DZA',
                'fone' => 213,
            ),
            3 => 
            array (
                'codigo' => 16,
                'nome' => 'Samoa Americana',
                'nome_formal' => 'Território de Samoa Americana',
                'iso' => 'AS',
                'iso3' => 'ASM',
                'fone' => 1684,
            ),
            4 => 
            array (
                'codigo' => 20,
                'nome' => 'Andorra',
                'nome_formal' => 'Principado Andorra',
                'iso' => 'AD',
                'iso3' => 'AND',
                'fone' => 376,
            ),
            5 => 
            array (
                'codigo' => 24,
                'nome' => 'Angola',
                'nome_formal' => 'República de Angola',
                'iso' => 'AO',
                'iso3' => 'AGO',
                'fone' => 244,
            ),
            6 => 
            array (
                'codigo' => 660,
                'nome' => 'Anguilla',
                'nome_formal' => 'Anguilla',
                'iso' => 'AI',
                'iso3' => 'AIA',
                'fone' => 1264,
            ),
            7 => 
            array (
                'codigo' => 10,
                'nome' => 'Antártida',
                'nome_formal' => 'Antártida',
                'iso' => 'AQ',
                'iso3' => 'ATA',
                'fone' => 672,
            ),
            8 => 
            array (
                'codigo' => 28,
                'nome' => 'Antigua e Barbuda',
                'nome_formal' => 'Antigua e Barbuda',
                'iso' => 'AG',
                'iso3' => 'ATG',
                'fone' => 1268,
            ),
            9 => 
            array (
                'codigo' => 32,
                'nome' => 'Argentina',
                'nome_formal' => 'República Argentina',
                'iso' => 'AR',
                'iso3' => 'ARG',
                'fone' => 54,
            ),
            10 => 
            array (
                'codigo' => 51,
                'nome' => 'Armênia',
                'nome_formal' => 'República da Armênia',
                'iso' => 'AM',
                'iso3' => 'ARM',
                'fone' => 374,
            ),
            11 => 
            array (
                'codigo' => 533,
                'nome' => 'Aruba',
                'nome_formal' => 'Aruba',
                'iso' => 'AW',
                'iso3' => 'ABW',
                'fone' => 297,
            ),
            12 => 
            array (
                'codigo' => 36,
                'nome' => 'Austrália',
                'nome_formal' => 'Comunidade da Austrália',
                'iso' => 'AU',
                'iso3' => 'AUS',
                'fone' => 61,
            ),
            13 => 
            array (
                'codigo' => 40,
                'nome' => 'Áustria',
                'nome_formal' => 'República da Áustria',
                'iso' => 'AT',
                'iso3' => 'AUT',
                'fone' => 43,
            ),
            14 => 
            array (
                'codigo' => 31,
                'nome' => 'Azerbaijão',
                'nome_formal' => 'República do Azerbaijão',
                'iso' => 'AZ',
                'iso3' => 'AZE',
                'fone' => 994,
            ),
            15 => 
            array (
                'codigo' => 44,
                'nome' => 'Bahamas',
                'nome_formal' => 'Comunidade de Bahamas',
                'iso' => 'BS',
                'iso3' => 'BHS',
                'fone' => 1242,
            ),
            16 => 
            array (
                'codigo' => 48,
                'nome' => 'Bahrein',
                'nome_formal' => 'Reino do Bahrein',
                'iso' => 'BH',
                'iso3' => 'BHR',
                'fone' => 973,
            ),
            17 => 
            array (
                'codigo' => 50,
                'nome' => 'Bangladesh',
                'nome_formal' => 'República Popular de Bangladesh',
                'iso' => 'BD',
                'iso3' => 'BGD',
                'fone' => 880,
            ),
            18 => 
            array (
                'codigo' => 52,
                'nome' => 'Barbados',
                'nome_formal' => 'Barbados',
                'iso' => 'BB',
                'iso3' => 'BRB',
                'fone' => 246,
            ),
            19 => 
            array (
                'codigo' => 112,
                'nome' => 'Bielorrússia',
                'nome_formal' => 'República da Bielorrússia',
                'iso' => 'BY',
                'iso3' => 'BLR',
                'fone' => 375,
            ),
            20 => 
            array (
                'codigo' => 56,
                'nome' => 'Bélgica',
                'nome_formal' => 'Reino da Bélgica',
                'iso' => 'BE',
                'iso3' => 'BEL',
                'fone' => 32,
            ),
            21 => 
            array (
                'codigo' => 84,
                'nome' => 'Belize',
                'nome_formal' => 'Belize',
                'iso' => 'BZ',
                'iso3' => 'BLZ',
                'fone' => 501,
            ),
            22 => 
            array (
                'codigo' => 204,
                'nome' => 'Benin',
                'nome_formal' => 'República do Benin',
                'iso' => 'BJ',
                'iso3' => 'BEN',
                'fone' => 229,
            ),
            23 => 
            array (
                'codigo' => 60,
                'nome' => 'Bermuda',
                'nome_formal' => 'Bermuda',
                'iso' => 'BM',
                'iso3' => 'BMU',
                'fone' => 1441,
            ),
            24 => 
            array (
                'codigo' => 64,
                'nome' => 'Butão',
                'nome_formal' => 'Reino do Butão',
                'iso' => 'BT',
                'iso3' => 'BTN',
                'fone' => 975,
            ),
            25 => 
            array (
                'codigo' => 68,
                'nome' => 'Bolívia',
                'nome_formal' => 'Estado Plurinacional da Bolívia',
                'iso' => 'BO',
                'iso3' => 'BOL',
                'fone' => 591,
            ),
            26 => 
            array (
                'codigo' => 70,
                'nome' => 'Bósnia e Herzegovina',
                'nome_formal' => 'Bósnia e Herzegovina',
                'iso' => 'BA',
                'iso3' => 'BIH',
                'fone' => 387,
            ),
            27 => 
            array (
                'codigo' => 72,
                'nome' => 'Botswana',
                'nome_formal' => 'República da Botswana',
                'iso' => 'BW',
                'iso3' => 'BWA',
                'fone' => 267,
            ),
            28 => 
            array (
                'codigo' => 74,
                'nome' => 'Ilha Bouvet',
                'nome_formal' => 'Ilha Bouvet',
                'iso' => 'BV',
                'iso3' => 'BVT',
                'fone' => 47,
            ),
            29 => 
            array (
                'codigo' => 76,
                'nome' => 'Brasil',
                'nome_formal' => 'República Federativa do Brasil',
                'iso' => 'BR',
                'iso3' => 'BRA',
                'fone' => 55,
            ),
            30 => 
            array (
                'codigo' => 86,
                'nome' => 'Território Britânico do Oceano Índico',
                'nome_formal' => 'Território Britânico do Oceano Índico',
                'iso' => 'IO',
                'iso3' => 'IOT',
                'fone' => 246,
            ),
            31 => 
            array (
                'codigo' => 96,
                'nome' => 'Brunei',
                'nome_formal' => 'Estado do Brunei Darussalam',
                'iso' => 'BN',
                'iso3' => 'BRN',
                'fone' => 673,
            ),
            32 => 
            array (
                'codigo' => 100,
                'nome' => 'Bulgária',
                'nome_formal' => 'República da Bulgária',
                'iso' => 'BG',
                'iso3' => 'BGR',
                'fone' => 359,
            ),
            33 => 
            array (
                'codigo' => 854,
                'nome' => 'Burkina Faso',
                'nome_formal' => 'Burkina Faso',
                'iso' => 'BF',
                'iso3' => 'BFA',
                'fone' => 226,
            ),
            34 => 
            array (
                'codigo' => 108,
                'nome' => 'Burundi',
                'nome_formal' => 'República do Burundi',
                'iso' => 'BI',
                'iso3' => 'BDI',
                'fone' => 257,
            ),
            35 => 
            array (
                'codigo' => 116,
                'nome' => 'Camboja',
                'nome_formal' => 'Reino do Camboja',
                'iso' => 'KH',
                'iso3' => 'KHM',
                'fone' => 855,
            ),
            36 => 
            array (
                'codigo' => 120,
                'nome' => 'Camarões',
                'nome_formal' => 'República de Camarões',
                'iso' => 'CM',
                'iso3' => 'CMR',
                'fone' => 237,
            ),
            37 => 
            array (
                'codigo' => 124,
                'nome' => 'Canadá',
                'nome_formal' => 'Canadá',
                'iso' => 'CA',
                'iso3' => 'CAN',
                'fone' => 1,
            ),
            38 => 
            array (
                'codigo' => 132,
                'nome' => 'Cabo Verde',
                'nome_formal' => 'República do Cabo Verde',
                'iso' => 'CV',
                'iso3' => 'CPV',
                'fone' => 238,
            ),
            39 => 
            array (
                'codigo' => 136,
                'nome' => 'Ilhas Cayman',
                'nome_formal' => 'Ilhas Cayman',
                'iso' => 'KY',
                'iso3' => 'CYM',
                'fone' => 1345,
            ),
            40 => 
            array (
                'codigo' => 140,
                'nome' => 'República Centro-Africana',
                'nome_formal' => 'República Centro-Africana',
                'iso' => 'CF',
                'iso3' => 'CAF',
                'fone' => 236,
            ),
            41 => 
            array (
                'codigo' => 148,
                'nome' => 'Chade',
                'nome_formal' => 'República do Chade',
                'iso' => 'TD',
                'iso3' => 'TCD',
                'fone' => 235,
            ),
            42 => 
            array (
                'codigo' => 152,
                'nome' => 'Chile',
                'nome_formal' => 'República do Chile',
                'iso' => 'CL',
                'iso3' => 'CHL',
                'fone' => 56,
            ),
            43 => 
            array (
                'codigo' => 156,
                'nome' => 'China',
                'nome_formal' => 'República Popular da China',
                'iso' => 'CN',
                'iso3' => 'CHN',
                'fone' => 86,
            ),
            44 => 
            array (
                'codigo' => 162,
                'nome' => 'Ilha Christmas',
                'nome_formal' => 'Território da Ilha Christmas',
                'iso' => 'CX',
                'iso3' => 'CXR',
                'fone' => 61,
            ),
            45 => 
            array (
                'codigo' => 166,
            'nome' => 'Ilhas Cocos (Keeling)',
            'nome_formal' => 'Território das Ilhas Cocos (Keeling)',
                'iso' => 'CC',
                'iso3' => 'CCK',
                'fone' => 672,
            ),
            46 => 
            array (
                'codigo' => 170,
                'nome' => 'Colômbia',
                'nome_formal' => 'República da Colômbia',
                'iso' => 'CO',
                'iso3' => 'COL',
                'fone' => 57,
            ),
            47 => 
            array (
                'codigo' => 174,
                'nome' => 'Comores',
                'nome_formal' => 'União das Comores',
                'iso' => 'KM',
                'iso3' => 'COM',
                'fone' => 269,
            ),
            48 => 
            array (
                'codigo' => 178,
                'nome' => 'Congo',
                'nome_formal' => 'República do Congo',
                'iso' => 'CG',
                'iso3' => 'COG',
                'fone' => 242,
            ),
            49 => 
            array (
                'codigo' => 180,
            'nome' => 'Congo (DR)',
                'nome_formal' => 'República Democrática do Congo',
                'iso' => 'CD',
                'iso3' => 'COD',
                'fone' => 242,
            ),
            50 => 
            array (
                'codigo' => 184,
                'nome' => 'Ilhas Cook',
                'nome_formal' => 'Ilhas Cook',
                'iso' => 'CK',
                'iso3' => 'COK',
                'fone' => 682,
            ),
            51 => 
            array (
                'codigo' => 188,
                'nome' => 'Costa Rica',
                'nome_formal' => 'República da Costa Rica',
                'iso' => 'CR',
                'iso3' => 'CRI',
                'fone' => 506,
            ),
            52 => 
            array (
                'codigo' => 384,
                'nome' => 'Costa do Marfim',
                'nome_formal' => 'República da Costa do Marfim',
                'iso' => 'CI',
                'iso3' => 'CIV',
                'fone' => 225,
            ),
            53 => 
            array (
                'codigo' => 191,
                'nome' => 'Croácia',
                'nome_formal' => 'República da Croácia',
                'iso' => 'HR',
                'iso3' => 'HRV',
                'fone' => 385,
            ),
            54 => 
            array (
                'codigo' => 192,
                'nome' => 'Cuba',
                'nome_formal' => 'República de Cuba',
                'iso' => 'CU',
                'iso3' => 'CUB',
                'fone' => 53,
            ),
            55 => 
            array (
                'codigo' => 196,
                'nome' => 'Chipre',
                'nome_formal' => 'República do Chipre',
                'iso' => 'CY',
                'iso3' => 'CYP',
                'fone' => 357,
            ),
            56 => 
            array (
                'codigo' => 203,
                'nome' => 'República Tcheca',
                'nome_formal' => 'República Tcheca',
                'iso' => 'CZ',
                'iso3' => 'CZE',
                'fone' => 420,
            ),
            57 => 
            array (
                'codigo' => 208,
                'nome' => 'Dinamarca',
                'nome_formal' => 'Reino da Dinamarca',
                'iso' => 'DK',
                'iso3' => 'DNK',
                'fone' => 45,
            ),
            58 => 
            array (
                'codigo' => 262,
                'nome' => 'Djibuti',
                'nome_formal' => 'República do Djibuti',
                'iso' => 'DJ',
                'iso3' => 'DJI',
                'fone' => 253,
            ),
            59 => 
            array (
                'codigo' => 212,
                'nome' => 'Dominica',
                'nome_formal' => 'Comunidade da Dominica',
                'iso' => 'DM',
                'iso3' => 'DMA',
                'fone' => 1767,
            ),
            60 => 
            array (
                'codigo' => 214,
                'nome' => 'República Dominicana',
                'nome_formal' => 'República Dominicana',
                'iso' => 'DO',
                'iso3' => 'DOM',
                'fone' => 1809,
            ),
            61 => 
            array (
                'codigo' => 218,
                'nome' => 'Equador',
                'nome_formal' => 'República do Equador',
                'iso' => 'EC',
                'iso3' => 'ECU',
                'fone' => 593,
            ),
            62 => 
            array (
                'codigo' => 818,
                'nome' => 'Egito',
                'nome_formal' => 'República Árabe do Egito',
                'iso' => 'EG',
                'iso3' => 'EGY',
                'fone' => 20,
            ),
            63 => 
            array (
                'codigo' => 222,
                'nome' => 'El Salvador',
                'nome_formal' => 'República El Salvador',
                'iso' => 'SV',
                'iso3' => 'SLV',
                'fone' => 503,
            ),
            64 => 
            array (
                'codigo' => 226,
                'nome' => 'Guiné Equatorial',
                'nome_formal' => 'República do Guiné Equatorial',
                'iso' => 'GQ',
                'iso3' => 'GNQ',
                'fone' => 240,
            ),
            65 => 
            array (
                'codigo' => 232,
                'nome' => 'Eritreia',
                'nome_formal' => 'Estado da Eritreia',
                'iso' => 'ER',
                'iso3' => 'ERI',
                'fone' => 291,
            ),
            66 => 
            array (
                'codigo' => 233,
                'nome' => 'Estônia',
                'nome_formal' => 'República da Estônia',
                'iso' => 'EE',
                'iso3' => 'EST',
                'fone' => 372,
            ),
            67 => 
            array (
                'codigo' => 231,
                'nome' => 'Etiópia',
                'nome_formal' => 'República Democrática Federal da Etiópia',
                'iso' => 'ET',
                'iso3' => 'ETH',
                'fone' => 251,
            ),
            68 => 
            array (
                'codigo' => 238,
                'nome' => 'Ilhas Malvinas',
                'nome_formal' => 'Ilhas Malvinas',
                'iso' => 'FK',
                'iso3' => 'FLK',
                'fone' => 500,
            ),
            69 => 
            array (
                'codigo' => 234,
                'nome' => 'Ilhas Faroe',
                'nome_formal' => 'Ilhas Faroe',
                'iso' => 'FO',
                'iso3' => 'FRO',
                'fone' => 298,
            ),
            70 => 
            array (
                'codigo' => 242,
                'nome' => 'Fiji',
                'nome_formal' => 'República do Fiji',
                'iso' => 'FJ',
                'iso3' => 'FJI',
                'fone' => 679,
            ),
            71 => 
            array (
                'codigo' => 246,
                'nome' => 'Finlândia',
                'nome_formal' => 'República da Finlândia',
                'iso' => 'FI',
                'iso3' => 'FIN',
                'fone' => 358,
            ),
            72 => 
            array (
                'codigo' => 250,
                'nome' => 'França',
                'nome_formal' => 'República Francesa',
                'iso' => 'FR',
                'iso3' => 'FRA',
                'fone' => 33,
            ),
            73 => 
            array (
                'codigo' => 254,
                'nome' => 'Guiana Francesa',
                'nome_formal' => 'Guiana Francesa',
                'iso' => 'GF',
                'iso3' => 'GUF',
                'fone' => 594,
            ),
            74 => 
            array (
                'codigo' => 258,
                'nome' => 'Polinésia Francesa',
                'nome_formal' => 'Polinésia Francesa',
                'iso' => 'PF',
                'iso3' => 'PYF',
                'fone' => 689,
            ),
            75 => 
            array (
                'codigo' => 260,
                'nome' => 'Terras Austrais e Antárticas Francesas',
                'nome_formal' => 'Território das Terras Austrais e Antárticas France',
                'iso' => 'TF',
                'iso3' => 'ATF',
                'fone' => 33,
            ),
            76 => 
            array (
                'codigo' => 266,
                'nome' => 'Gabão',
                'nome_formal' => 'República Gabonesa',
                'iso' => 'GA',
                'iso3' => 'GAB',
                'fone' => 241,
            ),
            77 => 
            array (
                'codigo' => 270,
                'nome' => 'Gâmbia',
                'nome_formal' => 'República da Gâmbia',
                'iso' => 'GM',
                'iso3' => 'GMB',
                'fone' => 220,
            ),
            78 => 
            array (
                'codigo' => 268,
                'nome' => 'Geórgia',
                'nome_formal' => 'Geórgia',
                'iso' => 'GE',
                'iso3' => 'GEO',
                'fone' => 995,
            ),
            79 => 
            array (
                'codigo' => 276,
                'nome' => 'Alemanha',
                'nome_formal' => 'República Federal da Alemanha',
                'iso' => 'DE',
                'iso3' => 'DEU',
                'fone' => 49,
            ),
            80 => 
            array (
                'codigo' => 288,
                'nome' => 'Gana',
                'nome_formal' => 'Repúblia de Gana',
                'iso' => 'GH',
                'iso3' => 'GHA',
                'fone' => 233,
            ),
            81 => 
            array (
                'codigo' => 292,
                'nome' => 'Gibraltar',
                'nome_formal' => 'Gibraltar',
                'iso' => 'GI',
                'iso3' => 'GIB',
                'fone' => 350,
            ),
            82 => 
            array (
                'codigo' => 300,
                'nome' => 'Grécia',
                'nome_formal' => 'República Helênica',
                'iso' => 'GR',
                'iso3' => 'GRC',
                'fone' => 30,
            ),
            83 => 
            array (
                'codigo' => 304,
                'nome' => 'Groelândia',
                'nome_formal' => 'Groelândia',
                'iso' => 'GL',
                'iso3' => 'GRL',
                'fone' => 299,
            ),
            84 => 
            array (
                'codigo' => 308,
                'nome' => 'Granada',
                'nome_formal' => 'Granada',
                'iso' => 'GD',
                'iso3' => 'GRD',
                'fone' => 1473,
            ),
            85 => 
            array (
                'codigo' => 312,
                'nome' => 'Guadalupe',
                'nome_formal' => 'Guadalupe',
                'iso' => 'GP',
                'iso3' => 'GLP',
                'fone' => 590,
            ),
            86 => 
            array (
                'codigo' => 316,
                'nome' => 'Guão',
                'nome_formal' => 'Território do Guão',
                'iso' => 'GU',
                'iso3' => 'GUM',
                'fone' => 1671,
            ),
            87 => 
            array (
                'codigo' => 320,
                'nome' => 'Guatemala',
                'nome_formal' => 'República da Guatemala',
                'iso' => 'GT',
                'iso3' => 'GTM',
                'fone' => 502,
            ),
            88 => 
            array (
                'codigo' => 324,
                'nome' => 'Guiné',
                'nome_formal' => 'República do Guiné',
                'iso' => 'GN',
                'iso3' => 'GIN',
                'fone' => 224,
            ),
            89 => 
            array (
                'codigo' => 624,
                'nome' => 'Guiné-Bissau',
                'nome_formal' => 'República da Guiné-Bissau',
                'iso' => 'GW',
                'iso3' => 'GNB',
                'fone' => 245,
            ),
            90 => 
            array (
                'codigo' => 328,
                'nome' => 'Guiana',
                'nome_formal' => 'República Cooperativa da Guiana',
                'iso' => 'GY',
                'iso3' => 'GUY',
                'fone' => 592,
            ),
            91 => 
            array (
                'codigo' => 332,
                'nome' => 'Haiti',
                'nome_formal' => 'República do Haiti',
                'iso' => 'HT',
                'iso3' => 'HTI',
                'fone' => 509,
            ),
            92 => 
            array (
                'codigo' => 334,
                'nome' => 'Ilhas Heard e McDonald',
                'nome_formal' => 'Território das Ilhas Heard e McDonald',
                'iso' => 'HM',
                'iso3' => 'HMD',
                'fone' => 672,
            ),
            93 => 
            array (
                'codigo' => 336,
                'nome' => 'Vaticano',
                'nome_formal' => 'Estado da Cidade do Vaticano',
                'iso' => 'VA',
                'iso3' => 'VAT',
                'fone' => 39,
            ),
            94 => 
            array (
                'codigo' => 340,
                'nome' => 'Honduras',
                'nome_formal' => 'República de Honduras',
                'iso' => 'HN',
                'iso3' => 'HND',
                'fone' => 504,
            ),
            95 => 
            array (
                'codigo' => 344,
                'nome' => 'Hong Kong',
                'nome_formal' => 'Região Administrativa Especial de Hong Kong da Rep',
                'iso' => 'HK',
                'iso3' => 'HKG',
                'fone' => 852,
            ),
            96 => 
            array (
                'codigo' => 348,
                'nome' => 'Hungria',
                'nome_formal' => 'Hungria',
                'iso' => 'HU',
                'iso3' => 'HUN',
                'fone' => 36,
            ),
            97 => 
            array (
                'codigo' => 352,
                'nome' => 'Islândia',
                'nome_formal' => 'Islândia',
                'iso' => 'IS',
                'iso3' => 'ISL',
                'fone' => 354,
            ),
            98 => 
            array (
                'codigo' => 356,
                'nome' => 'Índia',
                'nome_formal' => 'República da Índia',
                'iso' => 'IN',
                'iso3' => 'IND',
                'fone' => 91,
            ),
            99 => 
            array (
                'codigo' => 360,
                'nome' => 'Indonésia',
                'nome_formal' => 'República da Indonésia',
                'iso' => 'ID',
                'iso3' => 'IDN',
                'fone' => 62,
            ),
            100 => 
            array (
                'codigo' => 364,
                'nome' => 'Iran',
                'nome_formal' => 'República Islâmica do Iran',
                'iso' => 'IR',
                'iso3' => 'IRN',
                'fone' => 98,
            ),
            101 => 
            array (
                'codigo' => 368,
                'nome' => 'Iraque',
                'nome_formal' => 'República do Iraque',
                'iso' => 'IQ',
                'iso3' => 'IRQ',
                'fone' => 964,
            ),
            102 => 
            array (
                'codigo' => 372,
                'nome' => 'Irlanda',
                'nome_formal' => 'Irlanda',
                'iso' => 'IE',
                'iso3' => 'IRL',
                'fone' => 353,
            ),
            103 => 
            array (
                'codigo' => 376,
                'nome' => 'Israel',
                'nome_formal' => 'Estado de Israel',
                'iso' => 'IL',
                'iso3' => 'ISR',
                'fone' => 972,
            ),
            104 => 
            array (
                'codigo' => 380,
                'nome' => 'Italia',
                'nome_formal' => 'República Italiana',
                'iso' => 'IT',
                'iso3' => 'ITA',
                'fone' => 39,
            ),
            105 => 
            array (
                'codigo' => 388,
                'nome' => 'Jamaica',
                'nome_formal' => 'Jamaica',
                'iso' => 'JM',
                'iso3' => 'JAM',
                'fone' => 1876,
            ),
            106 => 
            array (
                'codigo' => 392,
                'nome' => 'Japão',
                'nome_formal' => 'Japão',
                'iso' => 'JP',
                'iso3' => 'JPN',
                'fone' => 81,
            ),
            107 => 
            array (
                'codigo' => 400,
                'nome' => 'Jornânia',
                'nome_formal' => 'Reino Hachemita da Jordânia',
                'iso' => 'JO',
                'iso3' => 'JOR',
                'fone' => 962,
            ),
            108 => 
            array (
                'codigo' => 398,
                'nome' => 'Cazaquistão',
                'nome_formal' => 'República do Cazaquistão',
                'iso' => 'KZ',
                'iso3' => 'KAZ',
                'fone' => 7,
            ),
            109 => 
            array (
                'codigo' => 404,
                'nome' => 'Quênia',
                'nome_formal' => 'República do Quênia',
                'iso' => 'KE',
                'iso3' => 'KEN',
                'fone' => 254,
            ),
            110 => 
            array (
                'codigo' => 296,
                'nome' => 'Kiribati',
                'nome_formal' => 'República do Kiribati',
                'iso' => 'KI',
                'iso3' => 'KIR',
                'fone' => 686,
            ),
            111 => 
            array (
                'codigo' => 408,
                'nome' => 'Coreia do Norte',
                'nome_formal' => 'República Democrática Popular da Coreia',
                'iso' => 'KP',
                'iso3' => 'PRK',
                'fone' => 850,
            ),
            112 => 
            array (
                'codigo' => 410,
                'nome' => 'Coreia do Sul',
                'nome_formal' => 'República da Coreia',
                'iso' => 'KR',
                'iso3' => 'KOR',
                'fone' => 82,
            ),
            113 => 
            array (
                'codigo' => 414,
                'nome' => 'Kuwait',
                'nome_formal' => 'Estado do Kuwait',
                'iso' => 'KW',
                'iso3' => 'KWT',
                'fone' => 965,
            ),
            114 => 
            array (
                'codigo' => 417,
                'nome' => 'Quirguistão',
                'nome_formal' => 'República Quirguiz',
                'iso' => 'KG',
                'iso3' => 'KGZ',
                'fone' => 996,
            ),
            115 => 
            array (
                'codigo' => 418,
                'nome' => 'Laos',
                'nome_formal' => 'República Democrática Popular Lau',
                'iso' => 'LA',
                'iso3' => 'LAO',
                'fone' => 856,
            ),
            116 => 
            array (
                'codigo' => 428,
                'nome' => 'Letônia',
                'nome_formal' => 'República da Letônia',
                'iso' => 'LV',
                'iso3' => 'LVA',
                'fone' => 371,
            ),
            117 => 
            array (
                'codigo' => 422,
                'nome' => 'Líbano',
                'nome_formal' => 'República Libanesa',
                'iso' => 'LB',
                'iso3' => 'LBN',
                'fone' => 961,
            ),
            118 => 
            array (
                'codigo' => 426,
                'nome' => 'Lesoto',
                'nome_formal' => 'Reino do Lesoto',
                'iso' => 'LS',
                'iso3' => 'LSO',
                'fone' => 266,
            ),
            119 => 
            array (
                'codigo' => 430,
                'nome' => 'Libéria',
                'nome_formal' => 'República da Libéria',
                'iso' => 'LR',
                'iso3' => 'LBR',
                'fone' => 231,
            ),
            120 => 
            array (
                'codigo' => 434,
                'nome' => 'Líbia',
                'nome_formal' => 'Líbia',
                'iso' => 'LY',
                'iso3' => 'LBY',
                'fone' => 218,
            ),
            121 => 
            array (
                'codigo' => 438,
                'nome' => 'Liechtenstein',
                'nome_formal' => 'Principado de Liechtenstein',
                'iso' => 'LI',
                'iso3' => 'LIE',
                'fone' => 423,
            ),
            122 => 
            array (
                'codigo' => 440,
                'nome' => 'Lituânia',
                'nome_formal' => 'República da Lituânia',
                'iso' => 'LT',
                'iso3' => 'LTU',
                'fone' => 370,
            ),
            123 => 
            array (
                'codigo' => 442,
                'nome' => 'Luxemburgo',
                'nome_formal' => 'Grão-Ducado do Luxemburgo',
                'iso' => 'LU',
                'iso3' => 'LUX',
                'fone' => 352,
            ),
            124 => 
            array (
                'codigo' => 446,
                'nome' => 'Macao',
                'nome_formal' => 'Macao',
                'iso' => 'MO',
                'iso3' => 'MAC',
                'fone' => 853,
            ),
            125 => 
            array (
                'codigo' => 807,
                'nome' => 'Macedônia',
                'nome_formal' => 'República da Macedônia',
                'iso' => 'MK',
                'iso3' => 'MKD',
                'fone' => 389,
            ),
            126 => 
            array (
                'codigo' => 450,
                'nome' => 'Madagascar',
                'nome_formal' => 'República de Madagascar',
                'iso' => 'MG',
                'iso3' => 'MDG',
                'fone' => 261,
            ),
            127 => 
            array (
                'codigo' => 454,
                'nome' => 'Malawi',
                'nome_formal' => 'República de Malawi',
                'iso' => 'MW',
                'iso3' => 'MWI',
                'fone' => 265,
            ),
            128 => 
            array (
                'codigo' => 458,
                'nome' => 'Malásia',
                'nome_formal' => 'Malásia',
                'iso' => 'MY',
                'iso3' => 'MYS',
                'fone' => 60,
            ),
            129 => 
            array (
                'codigo' => 462,
                'nome' => 'Maldivas',
                'nome_formal' => 'Reública de Maldivas',
                'iso' => 'MV',
                'iso3' => 'MDV',
                'fone' => 960,
            ),
            130 => 
            array (
                'codigo' => 466,
                'nome' => 'Mali',
                'nome_formal' => 'República do Mali',
                'iso' => 'ML',
                'iso3' => 'MLI',
                'fone' => 223,
            ),
            131 => 
            array (
                'codigo' => 470,
                'nome' => 'Malta',
                'nome_formal' => 'República de Malta',
                'iso' => 'MT',
                'iso3' => 'MLT',
                'fone' => 356,
            ),
            132 => 
            array (
                'codigo' => 584,
                'nome' => 'Ilhas Marshall',
                'nome_formal' => 'República das Ilhas Marshall',
                'iso' => 'MH',
                'iso3' => 'MHL',
                'fone' => 692,
            ),
            133 => 
            array (
                'codigo' => 474,
                'nome' => 'Martinica',
                'nome_formal' => 'Martinica',
                'iso' => 'MQ',
                'iso3' => 'MTQ',
                'fone' => 596,
            ),
            134 => 
            array (
                'codigo' => 478,
                'nome' => 'Mauritânia',
                'nome_formal' => 'República Islâmica da Mauritânia',
                'iso' => 'MR',
                'iso3' => 'MRT',
                'fone' => 222,
            ),
            135 => 
            array (
                'codigo' => 480,
                'nome' => 'Maurício',
                'nome_formal' => 'República de Maurício',
                'iso' => 'MU',
                'iso3' => 'MUS',
                'fone' => 230,
            ),
            136 => 
            array (
                'codigo' => 175,
                'nome' => 'Mayotte',
                'nome_formal' => 'Departamento de Mayotte',
                'iso' => 'YT',
                'iso3' => 'MYT',
                'fone' => 269,
            ),
            137 => 
            array (
                'codigo' => 484,
                'nome' => 'México',
                'nome_formal' => 'Estados Unidos Mexicanos',
                'iso' => 'MX',
                'iso3' => 'MEX',
                'fone' => 52,
            ),
            138 => 
            array (
                'codigo' => 583,
                'nome' => 'Micronésia',
                'nome_formal' => 'Estados Federados da Micronesia',
                'iso' => 'FM',
                'iso3' => 'FSM',
                'fone' => 691,
            ),
            139 => 
            array (
                'codigo' => 498,
                'nome' => 'Moldova',
                'nome_formal' => 'República de Moldova',
                'iso' => 'MD',
                'iso3' => 'MDA',
                'fone' => 373,
            ),
            140 => 
            array (
                'codigo' => 492,
                'nome' => 'Mônaco',
                'nome_formal' => 'Principado de Mônaco',
                'iso' => 'MC',
                'iso3' => 'MCO',
                'fone' => 377,
            ),
            141 => 
            array (
                'codigo' => 496,
                'nome' => 'Mongólia',
                'nome_formal' => 'Mongólia',
                'iso' => 'MN',
                'iso3' => 'MNG',
                'fone' => 976,
            ),
            142 => 
            array (
                'codigo' => 500,
                'nome' => 'Montserrat',
                'nome_formal' => 'Montserrat',
                'iso' => 'MS',
                'iso3' => 'MSR',
                'fone' => 1664,
            ),
            143 => 
            array (
                'codigo' => 504,
                'nome' => 'Marrocos',
                'nome_formal' => 'Reino de Marrocos',
                'iso' => 'MA',
                'iso3' => 'MAR',
                'fone' => 212,
            ),
            144 => 
            array (
                'codigo' => 508,
                'nome' => 'Moçambique',
                'nome_formal' => 'República de Moçambique',
                'iso' => 'MZ',
                'iso3' => 'MOZ',
                'fone' => 258,
            ),
            145 => 
            array (
                'codigo' => 104,
                'nome' => 'Birmânia',
                'nome_formal' => 'República da União de Myanmar',
                'iso' => 'MM',
                'iso3' => 'MMR',
                'fone' => 95,
            ),
            146 => 
            array (
                'codigo' => 516,
                'nome' => 'Namíbia',
                'nome_formal' => 'República da Namíbia',
                'iso' => 'NA',
                'iso3' => 'NAM',
                'fone' => 264,
            ),
            147 => 
            array (
                'codigo' => 520,
                'nome' => 'Nauru',
                'nome_formal' => 'República de Nauru',
                'iso' => 'NR',
                'iso3' => 'NRU',
                'fone' => 674,
            ),
            148 => 
            array (
                'codigo' => 524,
                'nome' => 'Nepal',
                'nome_formal' => 'República Democrática Federativa do Nepal',
                'iso' => 'NP',
                'iso3' => 'NPL',
                'fone' => 977,
            ),
            149 => 
            array (
                'codigo' => 528,
                'nome' => 'Holanda',
                'nome_formal' => 'Holanda',
                'iso' => 'NL',
                'iso3' => 'NLD',
                'fone' => 31,
            ),
            150 => 
            array (
                'codigo' => 530,
                'nome' => 'Antilhas Holandesas',
                'nome_formal' => 'Antilhas Holandesas',
                'iso' => 'AN',
                'iso3' => 'ANT',
                'fone' => 599,
            ),
            151 => 
            array (
                'codigo' => 540,
                'nome' => 'Nova Caledônia',
                'nome_formal' => 'Nova Caledônia',
                'iso' => 'NC',
                'iso3' => 'NCL',
                'fone' => 687,
            ),
            152 => 
            array (
                'codigo' => 554,
                'nome' => 'Nova Zelândia',
                'nome_formal' => 'Nova Zelândia',
                'iso' => 'NZ',
                'iso3' => 'NZL',
                'fone' => 64,
            ),
            153 => 
            array (
                'codigo' => 558,
                'nome' => 'Nicarágua',
                'nome_formal' => 'República da Nicarágua',
                'iso' => 'NI',
                'iso3' => 'NIC',
                'fone' => 505,
            ),
            154 => 
            array (
                'codigo' => 562,
                'nome' => 'Niger',
                'nome_formal' => 'República do Niger',
                'iso' => 'NE',
                'iso3' => 'NER',
                'fone' => 227,
            ),
            155 => 
            array (
                'codigo' => 566,
                'nome' => 'Nigéria',
                'nome_formal' => 'República Federativa da Nigéria',
                'iso' => 'NG',
                'iso3' => 'NGA',
                'fone' => 234,
            ),
            156 => 
            array (
                'codigo' => 570,
                'nome' => 'Niue',
                'nome_formal' => 'Niue',
                'iso' => 'NU',
                'iso3' => 'NIU',
                'fone' => 683,
            ),
            157 => 
            array (
                'codigo' => 574,
                'nome' => 'Ilha Norfolk',
                'nome_formal' => 'Território da Ilha Norfolk',
                'iso' => 'NF',
                'iso3' => 'NFK',
                'fone' => 672,
            ),
            158 => 
            array (
                'codigo' => 580,
                'nome' => 'Ilhas Marianas do Norte',
                'nome_formal' => 'Comunidade das Ilhas Marianas do Norte',
                'iso' => 'MP',
                'iso3' => 'MNP',
                'fone' => 1670,
            ),
            159 => 
            array (
                'codigo' => 578,
                'nome' => 'Noruega',
                'nome_formal' => 'Reino da Noruega',
                'iso' => 'NO',
                'iso3' => 'NOR',
                'fone' => 47,
            ),
            160 => 
            array (
                'codigo' => 512,
                'nome' => 'Omã',
                'nome_formal' => 'Sultanato de Omã',
                'iso' => 'OM',
                'iso3' => 'OMN',
                'fone' => 968,
            ),
            161 => 
            array (
                'codigo' => 586,
                'nome' => 'Paquistão',
                'nome_formal' => 'República Islâmica do Paquistão',
                'iso' => 'PK',
                'iso3' => 'PAK',
                'fone' => 92,
            ),
            162 => 
            array (
                'codigo' => 585,
                'nome' => 'Palau',
                'nome_formal' => 'República de Palau',
                'iso' => 'PW',
                'iso3' => 'PLW',
                'fone' => 680,
            ),
            163 => 
            array (
                'codigo' => 275,
                'nome' => 'Palestina',
                'nome_formal' => 'Estado da Palestina',
                'iso' => 'PS',
                'iso3' => 'PSE',
                'fone' => 970,
            ),
            164 => 
            array (
                'codigo' => 591,
                'nome' => 'Panamá',
                'nome_formal' => 'República do Panamá',
                'iso' => 'PA',
                'iso3' => 'PAN',
                'fone' => 507,
            ),
            165 => 
            array (
                'codigo' => 598,
                'nome' => 'Papua-Nova Guiné',
                'nome_formal' => 'Estado Independente da Papua-Nova Guiné',
                'iso' => 'PG',
                'iso3' => 'PNG',
                'fone' => 675,
            ),
            166 => 
            array (
                'codigo' => 600,
                'nome' => 'Paraguai',
                'nome_formal' => 'República do Paraguai',
                'iso' => 'PY',
                'iso3' => 'PRY',
                'fone' => 595,
            ),
            167 => 
            array (
                'codigo' => 604,
                'nome' => 'Peru',
                'nome_formal' => 'República do Peru',
                'iso' => 'PE',
                'iso3' => 'PER',
                'fone' => 51,
            ),
            168 => 
            array (
                'codigo' => 608,
                'nome' => 'Filipinas',
                'nome_formal' => 'República das Filipinas',
                'iso' => 'PH',
                'iso3' => 'PHL',
                'fone' => 63,
            ),
            169 => 
            array (
                'codigo' => 612,
                'nome' => 'Ilhas Picárnia',
                'nome_formal' => 'Ilhas Picárnia',
                'iso' => 'PN',
                'iso3' => 'PCN',
                'fone' => 672,
            ),
            170 => 
            array (
                'codigo' => 616,
                'nome' => 'Polônia',
                'nome_formal' => 'República da Polônia',
                'iso' => 'PL',
                'iso3' => 'POL',
                'fone' => 48,
            ),
            171 => 
            array (
                'codigo' => 620,
                'nome' => 'Portugal',
                'nome_formal' => 'República Portuguesa',
                'iso' => 'PT',
                'iso3' => 'PRT',
                'fone' => 351,
            ),
            172 => 
            array (
                'codigo' => 630,
                'nome' => 'Porto Rico',
                'nome_formal' => 'Comunidade do Porto Rico',
                'iso' => 'PR',
                'iso3' => 'PRI',
                'fone' => 1787,
            ),
            173 => 
            array (
                'codigo' => 634,
                'nome' => 'Catar',
                'nome_formal' => 'Estado do Catar',
                'iso' => 'QA',
                'iso3' => 'QAT',
                'fone' => 974,
            ),
            174 => 
            array (
                'codigo' => 638,
                'nome' => 'Reunião',
                'nome_formal' => 'Polônia',
                'iso' => 'RE',
                'iso3' => 'REU',
                'fone' => 262,
            ),
            175 => 
            array (
                'codigo' => 642,
                'nome' => 'Romênia',
                'nome_formal' => 'Romênia',
                'iso' => 'RO',
                'iso3' => 'ROM',
                'fone' => 40,
            ),
            176 => 
            array (
                'codigo' => 643,
                'nome' => 'Rússia',
                'nome_formal' => 'Federação Russa',
                'iso' => 'RU',
                'iso3' => 'RUS',
                'fone' => 70,
            ),
            177 => 
            array (
                'codigo' => 646,
                'nome' => 'Ruanda',
                'nome_formal' => 'República da Ruanda',
                'iso' => 'RW',
                'iso3' => 'RWA',
                'fone' => 250,
            ),
            178 => 
            array (
                'codigo' => 654,
                'nome' => 'Santa Helena',
                'nome_formal' => 'Saint Helena',
                'iso' => 'SH',
                'iso3' => 'SHN',
                'fone' => 290,
            ),
            179 => 
            array (
                'codigo' => 659,
                'nome' => 'São Cristóvão',
                'nome_formal' => 'São Cristóvão',
                'iso' => 'KN',
                'iso3' => 'KNA',
                'fone' => 1869,
            ),
            180 => 
            array (
                'codigo' => 662,
                'nome' => 'Santa Lúcia',
                'nome_formal' => 'Santa Lúcia',
                'iso' => 'LC',
                'iso3' => 'LCA',
                'fone' => 1758,
            ),
            181 => 
            array (
                'codigo' => 666,
                'nome' => 'São Pedro e Miquelon',
                'nome_formal' => 'Coletividade Territorial de São Pedro e Miquelon',
                'iso' => 'PM',
                'iso3' => 'SPM',
                'fone' => 508,
            ),
            182 => 
            array (
                'codigo' => 670,
                'nome' => 'São Vicente e Granadinas',
                'nome_formal' => 'São Vicente e Granadinas',
                'iso' => 'VC',
                'iso3' => 'VCT',
                'fone' => 1784,
            ),
            183 => 
            array (
                'codigo' => 882,
                'nome' => 'Samoa',
                'nome_formal' => 'Estado Independente de Samoa',
                'iso' => 'WS',
                'iso3' => 'WSM',
                'fone' => 684,
            ),
            184 => 
            array (
                'codigo' => 674,
                'nome' => 'São Marino',
                'nome_formal' => 'República de São Marino',
                'iso' => 'SM',
                'iso3' => 'SMR',
                'fone' => 378,
            ),
            185 => 
            array (
                'codigo' => 678,
                'nome' => 'Sao Tomé e Príncipe',
                'nome_formal' => 'República Democrática de Sao Tomé e Príncipe',
                'iso' => 'ST',
                'iso3' => 'STP',
                'fone' => 239,
            ),
            186 => 
            array (
                'codigo' => 682,
                'nome' => 'Arábia Saudita',
                'nome_formal' => 'Reino da Arábia Saudita',
                'iso' => 'SA',
                'iso3' => 'SAU',
                'fone' => 966,
            ),
            187 => 
            array (
                'codigo' => 686,
                'nome' => 'Senegal',
                'nome_formal' => 'República do Senegal',
                'iso' => 'SN',
                'iso3' => 'SEN',
                'fone' => 221,
            ),
            188 => 
            array (
                'codigo' => 688,
                'nome' => 'Sérvia e Montenegro',
                'nome_formal' => 'União Estatal de Sérvia e Montenegro',
                'iso' => 'CS',
                'iso3' => 'SRB',
                'fone' => 381,
            ),
            189 => 
            array (
                'codigo' => 690,
                'nome' => 'Seicheles',
                'nome_formal' => 'República das Seicheles',
                'iso' => 'SC',
                'iso3' => 'SYC',
                'fone' => 248,
            ),
            190 => 
            array (
                'codigo' => 694,
                'nome' => 'República da Serra Leoa',
                'nome_formal' => 'República da Serra Leoa',
                'iso' => 'SL',
                'iso3' => 'SLE',
                'fone' => 232,
            ),
            191 => 
            array (
                'codigo' => 702,
                'nome' => 'Singapura',
                'nome_formal' => 'República da Singapura',
                'iso' => 'SG',
                'iso3' => 'SGP',
                'fone' => 65,
            ),
            192 => 
            array (
                'codigo' => 703,
                'nome' => 'Eslováquia',
                'nome_formal' => 'República Eslovaca',
                'iso' => 'SK',
                'iso3' => 'SVK',
                'fone' => 421,
            ),
            193 => 
            array (
                'codigo' => 705,
                'nome' => 'Eslovênia',
                'nome_formal' => 'República da Eslovênia',
                'iso' => 'SI',
                'iso3' => 'SVN',
                'fone' => 386,
            ),
            194 => 
            array (
                'codigo' => 90,
                'nome' => 'Ilhas Salomão',
                'nome_formal' => 'Ilhas Salomão',
                'iso' => 'SB',
                'iso3' => 'SLB',
                'fone' => 677,
            ),
            195 => 
            array (
                'codigo' => 706,
                'nome' => 'Somália',
                'nome_formal' => 'República da Somália',
                'iso' => 'SO',
                'iso3' => 'SOM',
                'fone' => 252,
            ),
            196 => 
            array (
                'codigo' => 710,
                'nome' => 'África do Sul',
                'nome_formal' => 'República da África do Sul',
                'iso' => 'ZA',
                'iso3' => 'ZAF',
                'fone' => 27,
            ),
            197 => 
            array (
                'codigo' => 239,
                'nome' => 'Ilhas Geórgia do Sul e Sandwich do Sul',
                'nome_formal' => 'Ilhas Geórgia do Sul e Sandwich do Sul',
                'iso' => 'GS',
                'iso3' => 'SGS',
                'fone' => 500,
            ),
            198 => 
            array (
                'codigo' => 724,
                'nome' => 'Espanha',
                'nome_formal' => 'Reino da Espanha',
                'iso' => 'ES',
                'iso3' => 'ESP',
                'fone' => 34,
            ),
            199 => 
            array (
                'codigo' => 144,
                'nome' => 'Sri Lanka',
                'nome_formal' => 'República Democrática Socialista do Sri Lanka',
                'iso' => 'LK',
                'iso3' => 'LKA',
                'fone' => 94,
            ),
            200 => 
            array (
                'codigo' => 736,
                'nome' => 'Sudão',
                'nome_formal' => 'República do Sudão',
                'iso' => 'SD',
                'iso3' => 'SDN',
                'fone' => 249,
            ),
            201 => 
            array (
                'codigo' => 740,
                'nome' => 'Suriname',
                'nome_formal' => 'República do Suriname',
                'iso' => 'SR',
                'iso3' => 'SUR',
                'fone' => 597,
            ),
            202 => 
            array (
                'codigo' => 744,
                'nome' => 'Esvalbarde',
                'nome_formal' => 'Esvalbarde',
                'iso' => 'SJ',
                'iso3' => 'SJM',
                'fone' => 47,
            ),
            203 => 
            array (
                'codigo' => 748,
                'nome' => 'Suazilândia',
                'nome_formal' => 'Reino da Suazilândia',
                'iso' => 'SZ',
                'iso3' => 'SWZ',
                'fone' => 268,
            ),
            204 => 
            array (
                'codigo' => 752,
                'nome' => 'Suécia',
                'nome_formal' => 'Reino da Suécia',
                'iso' => 'SE',
                'iso3' => 'SWE',
                'fone' => 46,
            ),
            205 => 
            array (
                'codigo' => 756,
                'nome' => 'Suiça',
                'nome_formal' => 'Confederação Suiça',
                'iso' => 'CH',
                'iso3' => 'CHE',
                'fone' => 41,
            ),
            206 => 
            array (
                'codigo' => 760,
                'nome' => 'Síria',
                'nome_formal' => 'República Árabe Síria',
                'iso' => 'SY',
                'iso3' => 'SYR',
                'fone' => 963,
            ),
            207 => 
            array (
                'codigo' => 158,
                'nome' => 'Taiwan',
                'nome_formal' => 'Taiwan',
                'iso' => 'TW',
                'iso3' => 'TWN',
                'fone' => 886,
            ),
            208 => 
            array (
                'codigo' => 762,
                'nome' => 'Tajiquistão',
                'nome_formal' => 'República do Tajiquistão',
                'iso' => 'TJ',
                'iso3' => 'TJK',
                'fone' => 992,
            ),
            209 => 
            array (
                'codigo' => 834,
                'nome' => 'Tanzânia',
                'nome_formal' => 'República Unida da Tanzânia',
                'iso' => 'TZ',
                'iso3' => 'TZA',
                'fone' => 255,
            ),
            210 => 
            array (
                'codigo' => 764,
                'nome' => 'Tailândia',
                'nome_formal' => 'Reino da Tailândia',
                'iso' => 'TH',
                'iso3' => 'THA',
                'fone' => 66,
            ),
            211 => 
            array (
                'codigo' => 626,
                'nome' => 'Timor-Leste',
                'nome_formal' => 'República Democrática de Timor-Leste',
                'iso' => 'TL',
                'iso3' => 'TLS',
                'fone' => 670,
            ),
            212 => 
            array (
                'codigo' => 768,
                'nome' => 'Togo',
                'nome_formal' => 'República Togolesa',
                'iso' => 'TG',
                'iso3' => 'TGO',
                'fone' => 228,
            ),
            213 => 
            array (
                'codigo' => 772,
                'nome' => 'Toquelau',
                'nome_formal' => 'Toquelau',
                'iso' => 'TK',
                'iso3' => 'TKL',
                'fone' => 690,
            ),
            214 => 
            array (
                'codigo' => 776,
                'nome' => 'Tonga',
                'nome_formal' => 'Reino de Tonga',
                'iso' => 'TO',
                'iso3' => 'TON',
                'fone' => 676,
            ),
            215 => 
            array (
                'codigo' => 780,
                'nome' => 'Trinidad e Tobago',
                'nome_formal' => 'República da Trinidad e Tobago',
                'iso' => 'TT',
                'iso3' => 'TTO',
                'fone' => 1868,
            ),
            216 => 
            array (
                'codigo' => 788,
                'nome' => 'Tunísia',
                'nome_formal' => 'República da Tunísia',
                'iso' => 'TN',
                'iso3' => 'TUN',
                'fone' => 216,
            ),
            217 => 
            array (
                'codigo' => 792,
                'nome' => 'Turquia',
                'nome_formal' => 'República da Turquia',
                'iso' => 'TR',
                'iso3' => 'TUR',
                'fone' => 90,
            ),
            218 => 
            array (
                'codigo' => 795,
                'nome' => 'Turcomenistão',
                'nome_formal' => 'Turcomenistão',
                'iso' => 'TM',
                'iso3' => 'TKM',
                'fone' => 7370,
            ),
            219 => 
            array (
                'codigo' => 796,
                'nome' => 'Ilhas Turks e Caicos',
                'nome_formal' => 'Ilhas Turks e Caicos',
                'iso' => 'TC',
                'iso3' => 'TCA',
                'fone' => 1649,
            ),
            220 => 
            array (
                'codigo' => 798,
                'nome' => 'Tuvalu',
                'nome_formal' => 'Tuvalu',
                'iso' => 'TV',
                'iso3' => 'TUV',
                'fone' => 688,
            ),
            221 => 
            array (
                'codigo' => 800,
                'nome' => 'Uganda',
                'nome_formal' => 'República de Uganda',
                'iso' => 'UG',
                'iso3' => 'UGA',
                'fone' => 256,
            ),
            222 => 
            array (
                'codigo' => 804,
                'nome' => 'Ucrânia',
                'nome_formal' => 'Ucrânia',
                'iso' => 'UA',
                'iso3' => 'UKR',
                'fone' => 380,
            ),
            223 => 
            array (
                'codigo' => 784,
                'nome' => 'Emirados Árabes',
                'nome_formal' => 'Emirados Árabes Unidos',
                'iso' => 'AE',
                'iso3' => 'ARE',
                'fone' => 971,
            ),
            224 => 
            array (
                'codigo' => 826,
                'nome' => 'Reino Unido',
                'nome_formal' => 'Reino Unido da Grã-Bretanha e Irlanda do Norte',
                'iso' => 'GB',
                'iso3' => 'GBR',
                'fone' => 44,
            ),
            225 => 
            array (
                'codigo' => 840,
                'nome' => 'Estados Unidos',
                'nome_formal' => 'Estados Unidos da América',
                'iso' => 'US',
                'iso3' => 'USA',
                'fone' => 1,
            ),
            226 => 
            array (
                'codigo' => 581,
                'nome' => 'Ilhas Menores Distantes dos Estados Unidos',
                'nome_formal' => 'Ilhas Menores Distantes dos Estados Unidos',
                'iso' => 'UM',
                'iso3' => 'UMI',
                'fone' => 1,
            ),
            227 => 
            array (
                'codigo' => 858,
                'nome' => 'Uruguai',
                'nome_formal' => 'República Oriental do Uruguai',
                'iso' => 'UY',
                'iso3' => 'URY',
                'fone' => 598,
            ),
            228 => 
            array (
                'codigo' => 860,
                'nome' => 'Uzbequistão',
                'nome_formal' => 'República do Uzbequistão',
                'iso' => 'UZ',
                'iso3' => 'UZB',
                'fone' => 998,
            ),
            229 => 
            array (
                'codigo' => 548,
                'nome' => 'Vanuatu',
                'nome_formal' => 'República de Vanuatu',
                'iso' => 'VU',
                'iso3' => 'VUT',
                'fone' => 678,
            ),
            230 => 
            array (
                'codigo' => 862,
                'nome' => 'Venezuela',
                'nome_formal' => 'República Bolivariana da Venezuela',
                'iso' => 'VE',
                'iso3' => 'VEN',
                'fone' => 58,
            ),
            231 => 
            array (
                'codigo' => 704,
                'nome' => 'Vietnam',
                'nome_formal' => 'República Socialista do Vietnam',
                'iso' => 'VN',
                'iso3' => 'VNM',
                'fone' => 84,
            ),
            232 => 
            array (
                'codigo' => 92,
                'nome' => 'Ilhas Virgens Inglesas',
                'nome_formal' => 'Ilhas Virgens',
                'iso' => 'VG',
                'iso3' => 'VGB',
                'fone' => 1284,
            ),
            233 => 
            array (
                'codigo' => 850,
            'nome' => 'Ilhas Virgens (USA)',
                'nome_formal' => 'Ilhas Virgens dos Estados Unidos',
                'iso' => 'VI',
                'iso3' => 'VIR',
                'fone' => 1340,
            ),
            234 => 
            array (
                'codigo' => 876,
                'nome' => 'Wallis e Futuna',
                'nome_formal' => 'Wallis e Futuna',
                'iso' => 'WF',
                'iso3' => 'WLF',
                'fone' => 681,
            ),
            235 => 
            array (
                'codigo' => 732,
                'nome' => 'Saara Ocidental',
                'nome_formal' => 'Saara Ocidental',
                'iso' => 'EH',
                'iso3' => 'ESH',
                'fone' => 212,
            ),
            236 => 
            array (
                'codigo' => 887,
                'nome' => 'Iêmen',
                'nome_formal' => 'República do Iêmen',
                'iso' => 'YE',
                'iso3' => 'YEM',
                'fone' => 967,
            ),
            237 => 
            array (
                'codigo' => 894,
                'nome' => 'Zâmbia',
                'nome_formal' => 'República do Zâmbia',
                'iso' => 'ZM',
                'iso3' => 'ZMB',
                'fone' => 260,
            ),
            238 => 
            array (
                'codigo' => 716,
                'nome' => 'Zimbábue',
                'nome_formal' => 'República do Zimbábue',
                'iso' => 'ZW',
                'iso3' => 'ZWE',
                'fone' => 263,
            ),
        ));
        
        
    }
}