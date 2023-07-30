<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\jabatan;
use Carbon\Carbon;


class TypeJabatan extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        jabatan::create(
            [
            'jabatan' => 'Super Admin',
            'role' => 'Super Admin',
            'id_khusus' => '',


            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
            jabatan::create(
            [
                'jabatan' => 'Admin Finance',
                'role' => 'Admin Finance',
                'id_khusus' => '',
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
            jabatan::create(
            [
                'jabatan' => 'Admin Sosmed',
                'role' => 'Admin Sosmed',
                'id_khusus' => '',   
                             'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
            jabatan::create(
            [
                'jabatan' => 'Produser',
                'role' => 'Admin Upload',
                'id_khusus' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
    );  
    jabatan::create(
        [
            'jabatan' => 'Writer',
            'role' => 'User',
            'id_khusus' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]
);  
jabatan::create(
    [
        'jabatan' => 'Talent/Host',
        'role' => 'User',
        'id_khusus' => '1',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
    ]
);  
jabatan::create(
    [
        'jabatan' => 'Camera Person',
        'role' => 'User',
        'id_khusus' => '1',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
    ]
);  
jabatan::create(
    [
        'jabatan' => 'Voice Over',
        'role' => 'User',
        'id_khusus' => '1',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
    ]
);  
jabatan::create(
    [
        'jabatan' => 'Video Editor',
        'role' => 'User',
        'id_khusus' => '1',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
    ]
);  
    }
}
