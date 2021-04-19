<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('cities')->delete();

        \DB::table('cities')->insert(array(
            0 =>
            array(
                'created_at' => '2021-02-16 10:17:30',
                'id' => 1,
                'name' => 'Adana',
                'status' => 0,
                'updated_at' => '2021-02-16 10:17:30',
            ),
            1 =>
            array(
                'created_at' => '2021-02-16 10:17:30',
                'id' => 2,
                'name' => 'Adıyaman',
                'status' => 0,
                'updated_at' => '2021-02-16 10:17:30',
            ),
            2 =>
            array(
                'created_at' => '2021-02-16 10:17:30',
                'id' => 3,
                'name' => 'Afyonkarahisar',
                'status' => 0,
                'updated_at' => '2021-02-16 10:17:30',
            ),
            3 =>
            array(
                'created_at' => '2021-02-16 10:17:30',
                'id' => 4,
                'name' => 'Ağrı',
                'status' => 0,
                'updated_at' => '2021-02-16 10:17:30',
            ),
            4 =>
            array(
                'created_at' => '2021-02-16 10:17:30',
                'id' => 5,
                'name' => 'Aksaray',
                'status' => 0,
                'updated_at' => '2021-02-16 10:17:30',
            ),
            5 =>
            array(
                'created_at' => '2021-02-16 10:17:30',
                'id' => 6,
                'name' => 'Amasya',
                'status' => 0,
                'updated_at' => '2021-02-16 10:17:30',
            ),
            6 =>
            array(
                'created_at' => '2021-02-16 10:17:30',
                'id' => 7,
                'name' => 'Ankara',
                'status' => 0,
                'updated_at' => '2021-02-16 10:17:30',
            ),
            7 =>
            array(
                'created_at' => '2021-02-16 10:17:30',
                'id' => 8,
                'name' => 'Antalya',
                'status' => 0,
                'updated_at' => '2021-02-16 10:17:30',
            ),
            8 =>
            array(
                'created_at' => '2021-02-16 10:17:30',
                'id' => 9,
                'name' => 'Ardahan',
                'status' => 0,
                'updated_at' => '2021-02-16 10:17:30',
            ),
            9 =>
            array(
                'created_at' => '2021-02-16 10:17:30',
                'id' => 10,
                'name' => 'Artvin',
                'status' => 0,
                'updated_at' => '2021-02-16 10:17:30',
            ),
            10 =>
            array(
                'created_at' => '2021-02-16 10:17:30',
                'id' => 11,
                'name' => 'Aydın',
                'status' => 0,
                'updated_at' => '2021-02-16 10:17:30',
            ),
            11 =>
            array(
                'created_at' => '2021-02-16 10:17:30',
                'id' => 12,
                'name' => 'Balıkesir',
                'status' => 0,
                'updated_at' => '2021-02-16 10:17:30',
            ),
            12 =>
            array(
                'created_at' => '2021-02-16 10:17:30',
                'id' => 13,
                'name' => 'Bartın',
                'status' => 0,
                'updated_at' => '2021-02-16 10:17:30',
            ),
            13 =>
            array(
                'created_at' => '2021-02-16 10:17:30',
                'id' => 14,
                'name' => 'Batman',
                'status' => 0,
                'updated_at' => '2021-02-16 10:17:30',
            ),
            14 =>
            array(
                'created_at' => '2021-02-16 10:17:30',
                'id' => 15,
                'name' => 'Bayburt',
                'status' => 0,
                'updated_at' => '2021-02-16 10:17:30',
            ),
            15 =>
            array(
                'created_at' => '2021-02-16 10:17:30',
                'id' => 16,
                'name' => 'Bilecik',
                'status' => 0,
                'updated_at' => '2021-02-16 10:17:30',
            ),
            16 =>
            array(
                'created_at' => '2021-02-16 10:17:30',
                'id' => 17,
                'name' => 'Bingöl',
                'status' => 0,
                'updated_at' => '2021-02-16 10:17:30',
            ),
            17 =>
            array(
                'created_at' => '2021-02-16 10:17:30',
                'id' => 18,
                'name' => 'Bitlis',
                'status' => 0,
                'updated_at' => '2021-02-16 10:17:30',
            ),
            18 =>
            array(
                'created_at' => '2021-02-16 10:17:30',
                'id' => 19,
                'name' => 'Bolu',
                'status' => 0,
                'updated_at' => '2021-02-16 10:17:30',
            ),
            19 =>
            array(
                'created_at' => '2021-02-16 10:17:30',
                'id' => 20,
                'name' => 'Burdur',
                'status' => 0,
                'updated_at' => '2021-02-16 10:17:30',
            ),
            20 =>
            array(
                'created_at' => '2021-02-16 10:17:30',
                'id' => 21,
                'name' => 'Bursa',
                'status' => 0,
                'updated_at' => '2021-02-16 10:17:30',
            ),
            21 =>
            array(
                'created_at' => '2021-02-16 10:17:30',
                'id' => 22,
                'name' => 'Çanakkale',
                'status' => 0,
                'updated_at' => '2021-02-16 10:17:30',
            ),
            22 =>
            array(
                'created_at' => '2021-02-16 10:17:30',
                'id' => 23,
                'name' => 'Çankırı',
                'status' => 0,
                'updated_at' => '2021-02-16 10:17:30',
            ),
            23 =>
            array(
                'created_at' => '2021-02-16 10:17:30',
                'id' => 24,
                'name' => 'Çorum',
                'status' => 0,
                'updated_at' => '2021-02-16 10:17:30',
            ),
            24 =>
            array(
                'created_at' => '2021-02-16 10:17:30',
                'id' => 25,
                'name' => 'Denizli',
                'status' => 0,
                'updated_at' => '2021-02-16 10:17:30',
            ),
            25 =>
            array(
                'created_at' => '2021-02-16 10:17:30',
                'id' => 26,
                'name' => 'Diyarbakır',
                'status' => 0,
                'updated_at' => '2021-02-16 10:17:30',
            ),
            26 =>
            array(
                'created_at' => '2021-02-16 10:17:30',
                'id' => 27,
                'name' => 'Düzce',
                'status' => 0,
                'updated_at' => '2021-02-16 10:17:30',
            ),
            27 =>
            array(
                'created_at' => '2021-02-16 10:17:30',
                'id' => 28,
                'name' => 'Edirne',
                'status' => 0,
                'updated_at' => '2021-02-16 10:17:30',
            ),
            28 =>
            array(
                'created_at' => '2021-02-16 10:17:30',
                'id' => 29,
                'name' => 'Elazığ',
                'status' => 0,
                'updated_at' => '2021-02-16 10:17:30',
            ),
            29 =>
            array(
                'created_at' => '2021-02-16 10:17:30',
                'id' => 30,
                'name' => 'Erzincan',
                'status' => 0,
                'updated_at' => '2021-02-16 10:17:30',
            ),
            30 =>
            array(
                'created_at' => '2021-02-16 10:17:30',
                'id' => 31,
                'name' => 'Erzurum',
                'status' => 0,
                'updated_at' => '2021-02-16 10:17:30',
            ),
            31 =>
            array(
                'created_at' => '2021-02-16 10:17:30',
                'id' => 32,
                'name' => 'Eskişehir',
                'status' => 0,
                'updated_at' => '2021-02-16 10:17:30',
            ),
            32 =>
            array(
                'created_at' => '2021-02-16 10:17:30',
                'id' => 33,
                'name' => 'Gaziantep',
                'status' => 0,
                'updated_at' => '2021-02-16 10:17:30',
            ),
            33 =>
            array(
                'created_at' => '2021-02-16 10:17:30',
                'id' => 34,
                'name' => 'Giresun',
                'status' => 0,
                'updated_at' => '2021-02-16 10:17:30',
            ),
            34 =>
            array(
                'created_at' => '2021-02-16 10:17:30',
                'id' => 35,
                'name' => 'Gümüşhane',
                'status' => 0,
                'updated_at' => '2021-02-16 10:17:30',
            ),
            35 =>
            array(
                'created_at' => '2021-02-16 10:17:30',
                'id' => 36,
                'name' => 'Hakkari',
                'status' => 0,
                'updated_at' => '2021-02-16 10:17:30',
            ),
            36 =>
            array(
                'created_at' => '2021-02-16 10:17:30',
                'id' => 37,
                'name' => 'Hatay',
                'status' => 0,
                'updated_at' => '2021-02-16 10:17:30',
            ),
            37 =>
            array(
                'created_at' => '2021-02-16 10:17:30',
                'id' => 38,
                'name' => 'Iğdır',
                'status' => 0,
                'updated_at' => '2021-02-16 10:17:30',
            ),
            38 =>
            array(
                'created_at' => '2021-02-16 10:17:30',
                'id' => 39,
                'name' => 'Isparta',
                'status' => 0,
                'updated_at' => '2021-02-16 10:17:30',
            ),
            39 =>
            array(
                'created_at' => '2021-02-16 10:17:30',
                'id' => 40,
                'name' => 'İstanbul',
                'status' => 0,
                'updated_at' => '2021-02-16 10:17:30',
            ),
            40 =>
            array(
                'created_at' => '2021-02-16 10:17:30',
                'id' => 41,
                'name' => 'İzmir',
                'status' => 0,
                'updated_at' => '2021-02-16 10:17:30',
            ),
            41 =>
            array(
                'created_at' => '2021-02-16 10:17:30',
                'id' => 42,
                'name' => 'Kahramanmaraş',
                'status' => 0,
                'updated_at' => '2021-02-16 10:17:30',
            ),
            42 =>
            array(
                'created_at' => '2021-02-16 10:17:30',
                'id' => 43,
                'name' => 'Karabük',
                'status' => 0,
                'updated_at' => '2021-02-16 10:17:30',
            ),
            43 =>
            array(
                'created_at' => '2021-02-16 10:17:30',
                'id' => 44,
                'name' => 'Karaman',
                'status' => 0,
                'updated_at' => '2021-02-16 10:17:30',
            ),
            44 =>
            array(
                'created_at' => '2021-02-16 10:17:30',
                'id' => 45,
                'name' => 'Kars',
                'status' => 0,
                'updated_at' => '2021-02-16 10:17:30',
            ),
            45 =>
            array(
                'created_at' => '2021-02-16 10:17:30',
                'id' => 46,
                'name' => 'Kastamonu',
                'status' => 0,
                'updated_at' => '2021-02-16 10:17:30',
            ),
            46 =>
            array(
                'created_at' => '2021-02-16 10:17:30',
                'id' => 47,
                'name' => 'Kayseri',
                'status' => 0,
                'updated_at' => '2021-02-16 10:17:30',
            ),
            47 =>
            array(
                'created_at' => '2021-02-16 10:17:30',
                'id' => 48,
                'name' => 'Kırıkkale',
                'status' => 0,
                'updated_at' => '2021-02-16 10:17:30',
            ),
            48 =>
            array(
                'created_at' => '2021-02-16 10:17:30',
                'id' => 49,
                'name' => 'Kırklareli',
                'status' => 0,
                'updated_at' => '2021-02-16 10:17:30',
            ),
            49 =>
            array(
                'created_at' => '2021-02-16 10:17:30',
                'id' => 50,
                'name' => 'Kırşehir',
                'status' => 0,
                'updated_at' => '2021-02-16 10:17:30',
            ),
            50 =>
            array(
                'created_at' => '2021-02-16 10:17:30',
                'id' => 51,
                'name' => 'Kilis',
                'status' => 0,
                'updated_at' => '2021-02-16 10:17:30',
            ),
            51 =>
            array(
                'created_at' => '2021-02-16 10:17:30',
                'id' => 52,
                'name' => 'Kocaeli',
                'status' => 0,
                'updated_at' => '2021-02-16 10:17:30',
            ),
            52 =>
            array(
                'created_at' => '2021-02-16 10:17:30',
                'id' => 53,
                'name' => 'Konya',
                'status' => 0,
                'updated_at' => '2021-02-16 10:17:30',
            ),
            53 =>
            array(
                'created_at' => '2021-02-16 10:17:30',
                'id' => 54,
                'name' => 'Kütahya',
                'status' => 0,
                'updated_at' => '2021-02-16 10:17:30',
            ),
            54 =>
            array(
                'created_at' => '2021-02-16 10:17:30',
                'id' => 55,
                'name' => 'Malatya',
                'status' => 0,
                'updated_at' => '2021-02-16 10:17:30',
            ),
            55 =>
            array(
                'created_at' => '2021-02-16 10:17:30',
                'id' => 56,
                'name' => 'Manisa',
                'status' => 0,
                'updated_at' => '2021-02-16 10:17:30',
            ),
            56 =>
            array(
                'created_at' => '2021-02-16 10:17:30',
                'id' => 57,
                'name' => 'Mardin',
                'status' => 0,
                'updated_at' => '2021-02-16 10:17:30',
            ),
            57 =>
            array(
                'created_at' => '2021-02-16 10:17:30',
                'id' => 58,
                'name' => 'Mersin',
                'status' => 0,
                'updated_at' => '2021-02-16 10:17:30',
            ),
            58 =>
            array(
                'created_at' => '2021-02-16 10:17:30',
                'id' => 59,
                'name' => 'Muğla',
                'status' => 0,
                'updated_at' => '2021-02-16 10:17:30',
            ),
            59 =>
            array(
                'created_at' => '2021-02-16 10:17:30',
                'id' => 60,
                'name' => 'Muş',
                'status' => 0,
                'updated_at' => '2021-02-16 10:17:30',
            ),
            60 =>
            array(
                'created_at' => '2021-02-16 10:17:30',
                'id' => 61,
                'name' => 'Nevşehir',
                'status' => 0,
                'updated_at' => '2021-02-16 10:17:30',
            ),
            61 =>
            array(
                'created_at' => '2021-02-16 10:17:30',
                'id' => 62,
                'name' => 'Niğde',
                'status' => 0,
                'updated_at' => '2021-02-16 10:17:30',
            ),
            62 =>
            array(
                'created_at' => '2021-02-16 10:17:30',
                'id' => 63,
                'name' => 'Ordu',
                'status' => 0,
                'updated_at' => '2021-02-16 10:17:30',
            ),
            63 =>
            array(
                'created_at' => '2021-02-16 10:17:30',
                'id' => 64,
                'name' => 'Osmaniye',
                'status' => 0,
                'updated_at' => '2021-02-16 10:17:30',
            ),
            64 =>
            array(
                'created_at' => '2021-02-16 10:17:30',
                'id' => 65,
                'name' => 'Rize',
                'status' => 0,
                'updated_at' => '2021-02-16 10:17:30',
            ),
            65 =>
            array(
                'created_at' => '2021-02-16 10:17:30',
                'id' => 66,
                'name' => 'Sakarya',
                'status' => 0,
                'updated_at' => '2021-02-16 10:17:30',
            ),
            66 =>
            array(
                'created_at' => '2021-02-16 10:17:30',
                'id' => 67,
                'name' => 'Samsun',
                'status' => 0,
                'updated_at' => '2021-02-16 10:17:30',
            ),
            67 =>
            array(
                'created_at' => '2021-02-16 10:17:30',
                'id' => 68,
                'name' => 'Siirt',
                'status' => 0,
                'updated_at' => '2021-02-16 10:17:30',
            ),
            68 =>
            array(
                'created_at' => '2021-02-16 10:17:30',
                'id' => 69,
                'name' => 'Sinop',
                'status' => 0,
                'updated_at' => '2021-02-16 10:17:30',
            ),
            69 =>
            array(
                'created_at' => '2021-02-16 10:17:30',
                'id' => 70,
                'name' => 'Sivas',
                'status' => 0,
                'updated_at' => '2021-02-16 10:17:30',
            ),
            70 =>
            array(
                'created_at' => '2021-02-16 10:17:30',
                'id' => 71,
                'name' => 'Şanlıurfa',
                'status' => 0,
                'updated_at' => '2021-02-16 10:17:30',
            ),
            71 =>
            array(
                'created_at' => '2021-02-16 10:17:30',
                'id' => 72,
                'name' => 'Şırnak',
                'status' => 0,
                'updated_at' => '2021-02-16 10:17:30',
            ),
            72 =>
            array(
                'created_at' => '2021-02-16 10:17:30',
                'id' => 73,
                'name' => 'Tekirdağ',
                'status' => 0,
                'updated_at' => '2021-02-16 10:17:30',
            ),
            73 =>
            array(
                'created_at' => '2021-02-16 10:17:30',
                'id' => 74,
                'name' => 'Tokat',
                'status' => 0,
                'updated_at' => '2021-02-16 10:17:30',
            ),
            74 =>
            array(
                'created_at' => '2021-02-16 10:17:30',
                'id' => 75,
                'name' => 'Trabzon',
                'status' => 0,
                'updated_at' => '2021-02-16 10:17:30',
            ),
            75 =>
            array(
                'created_at' => '2021-02-16 10:17:30',
                'id' => 76,
                'name' => 'Tunceli',
                'status' => 0,
                'updated_at' => '2021-02-16 10:17:30',
            ),
            76 =>
            array(
                'created_at' => '2021-02-16 10:17:30',
                'id' => 77,
                'name' => 'Uşak',
                'status' => 0,
                'updated_at' => '2021-02-16 10:17:30',
            ),
            77 =>
            array(
                'created_at' => '2021-02-16 10:17:30',
                'id' => 78,
                'name' => 'Van',
                'status' => 0,
                'updated_at' => '2021-02-16 10:17:30',
            ),
            78 =>
            array(
                'created_at' => '2021-02-16 10:17:30',
                'id' => 79,
                'name' => 'Yalova',
                'status' => 0,
                'updated_at' => '2021-02-16 10:17:30',
            ),
            79 =>
            array(
                'created_at' => '2021-02-16 10:17:30',
                'id' => 80,
                'name' => 'Yozgat',
                'status' => 0,
                'updated_at' => '2021-02-16 10:17:30',
            ),
            80 =>
            array(
                'created_at' => '2021-02-16 10:17:30',
                'id' => 81,
                'name' => 'Zonguldak',
                'status' => 0,
                'updated_at' => '2021-02-16 10:17:30',
            ),
        ));
    }
}
