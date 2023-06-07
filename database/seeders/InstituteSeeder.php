<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Institute;

class InstituteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $institute = Institute:: create ([
           'institute_name'=>'New Horizons',
           'email'=>'New Horizons@.com',
           'phone'=>'094429326',
           'account facbok'=>'New Horizons',
           'institute_image'=>'D:\mypuctuers\Snapchat',
           'location_institute'=>'المزة',
           'About the institute'=>'معهد اتقديم دورات ندريب وتأهيل الطلاب',
        ]);


        $institute = Institute:: create ([
            'institute_name'=>'Experts',
            'email'=>'Experts@.com',
            'phone'=>'09448756',
            'account facbok'=>'Experts',
           'institute_image'=>'D:\mypuctuers\Snapchat',
           'location_institute'=>'البرامكة',
           'About the institute'=>'معهد اتقديم دورات ندريب وتأهيل الطلاب',
         ]);

         $institute = Institute:: create ([
            'institute_name'=>'ICRC',
            'email'=>'ICRC@.com',
            'phone'=>'09442326',
            'account facbok'=>'ICRC',
           'institute_image'=>'D:\mypuctuers\Snapchat',
           'location_institute'=>'ركن الدين',
           'About the institute'=>'معهد اتقديم دورات ندريب وتأهيل الطلاب',
         ]);

         $institute = Institute:: create ([
            'institute_name'=>'Harvard American',
            'email'=>'Harvard American@.com',
            'phone'=>'0949897656',
            'account facbok'=>'Harvard American',
           'institute_image'=>'D:\mypuctuers\Snapchat',
           'location_institute'=>'مزة جبل',
           'About the institute'=>'معهد اتقديم دورات ندريب وتأهيل الطلاب',
         ]);

         $institute = Institute:: create ([
            'institute_name'=>'معهد الرواد ',
            'email'=>'معهد الرواد @.com',
            'phone'=>'094429656',
            'account facbok'=>'معهد الرواد ',
           'institute_image'=>'D:\mypuctuers\Snapchat',
           'location_institute'=>'المزة',
           'About the institute'=>'معهد اتقديم دورات ندريب وتأهيل الطلاب',
         ]);

         $institute = Institute:: create ([
            'institute_name'=>'Dar Al Alson',
            'email'=>'Dar Al Alson@.com',
            'phone'=>'094429656',
            'account facbok'=>'Dar Al Alson',
           'institute_image'=>'D:\mypuctuers\Snapchat',
           'location_institute'=>'قطنا',
           'About the institute'=>'معهد اتقديم دورات ندريب وتأهيل الطلاب',
         ]);

    }
}


