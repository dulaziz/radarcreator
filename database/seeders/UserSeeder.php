<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
use Ramsey\Uuid\Uuid;
use Carbon\Carbon;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'id' => Uuid::uuid4(),
            'name' => 'elvan',
            'username' => 'elvan',
            'group' => 'Radar Bogor',
            'email' => 'elvanhazi@gmail.com',
            'password' => Hash::make('password'),
            'jabatan' => 'Super Admin',
            'role' => 'Super Admin',
            'gambar' => '-',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),



        ]);    }
}
