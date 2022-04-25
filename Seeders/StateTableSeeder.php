<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\State;
use Illuminate\Support\Facades\DB;

class StateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('states')->delete();

        $states = [

            [
                'en'=> 'Adrar',
                'ar'=> 'أدرار'
            ],
            [

                'en'=> 'Chlef',
                'ar'=> 'الشلف'
            ],
            [

                'en'=> 'Laghouat',
                'ar'=> 'الأغواط'
            ],
            [

                'en'=> 'Oum El Bouaghi',
                'ar'=> 'أم البواقي'
            ],
            [

                'en'=> 'Batna',
                'ar'=> 'باتنة'
            ],
            [

                'en'=> 'Béjaïa',
                'ar'=> 'بجاية'
            ],
            [

                'en'=> 'Biskra',
                'ar'=> 'بسكرة'
            ],
            [

                'en'=> 'Béchar',
                'ar'=> 'بشار'
            ],
            [

                'en'=> 'Blida',
                'ar'=> 'البليدة'
            ],
            [

                'en'=> 'Bouira',
                'ar'=> 'البويرة'
            ],
            [

                'en'=> 'Tamanrasset',
                'ar'=> 'تمنراست'
            ],
            [

                'en'=> 'Tébessa',
                'ar'=> 'تبسة'
            ],
            [

                'en'=> 'Tlemcen',
                'ar'=> 'تلمسان'
            ],
            [

                'en'=> 'Tiaret',
                'ar'=> 'تيارت'
            ],
            [

                'en'=> 'Tizi Ouzou',
                'ar'=> 'تيزي وزو'
            ],
            [

                'en'=> 'Alger',
                'ar'=> 'الجزائر'
            ],
            [

                'en'=> 'Djelfa',
                'ar'=> 'الجلفة'
            ],
            [

                'en'=> 'Jijel',
                'ar'=> 'جيجل'
            ],
            [

                'en'=> 'Sétif',
                'ar'=> 'سطيف'
            ],
            [

                'en'=> 'Saïda',
                'ar'=> 'سعيدة'
            ],
            [

                'en'=> 'Skikda',
                'ar'=> 'سكيكدة'
            ],
            [

                'en'=> 'Sidi Bel Abbès',
                'ar'=> 'سيدي بلعباس'
            ],
            [

                'en'=> 'Annaba',
                'ar'=> 'عنابة'
            ],
            [

                'en'=> 'Guelma',
                'ar'=> 'قالمة'
            ],
            [

                'en'=> 'Constantine',
                'ar'=> 'قسنطينة'
            ],
            [

                'en'=> 'Médéa',
                'ar'=> 'المدية'
            ],
            [

                'en'=> 'Mostaganem',
                'ar'=> 'مستغانم'
            ],
            [

                'en'=> 'Msila',
                'ar'=> 'المسيلة'
            ],
            [

                'en'=> 'Mascara',
                'ar'=> 'معسكر'
            ],
            [

                'en'=> 'Ouargla',
                'ar'=> 'ورقلة'
            ],
            [

                'en'=> 'Oran',
                'ar'=> 'وهران'
            ],
            [

                'en'=> 'El Bayadh',
                'ar'=> 'البيض'
            ],
            [

                'en'=> 'Illizi',
                'ar'=> 'إليزي'
            ],
            [

                'en'=> 'Bordj Bou Arreridj',
                'ar'=> 'برج بوعريريج'
            ],
            [

                'en'=> 'Boumerdès',
                'ar'=> 'بومرداس'
            ],
            [

                'en'=> 'El Tarf',
                'ar'=> 'الطارف'
            ],
            [

                'en'=> 'Tindouf',
                'ar'=> 'تندوف'
            ],
            [

                'en'=> 'Tissemsilt',
                'ar'=> 'تيسمسيلت'
            ],
            [

                'en'=> 'El Oued',
                'ar'=> 'الوادي'
            ],
            [

                'en'=> 'Khenchela',
                'ar'=> 'خنشلة'
            ],
            [

                'en'=> 'Souk Ahras',
                'ar'=> 'سوق أهراس'
            ],
            [

                'en'=> 'Tipaza',
                'ar'=> 'تيبازة'
            ],
            [

                'en'=> 'Mila',
                'ar'=> 'ميلة'
            ],
            [

                'en'=> 'Aïn Defla',
                'ar'=> 'عين الدفلى'
            ],
            [

                'en'=> 'Naâma',
                'ar'=> 'النعامة'
            ],
            [

                'en'=> 'Aïn Témouchent',
                'ar'=> 'عين تموشنت'
            ],
            [

                'en'=> 'Ghardaïa',
                'ar'=> 'غرداية'
            ],
            [

                'en'=> 'Relizane',
                'ar'=> 'غليزان'
            ],
        ];

        foreach ($states as $s) {
            State::create(['name' => $s]);
        }

    }
}
