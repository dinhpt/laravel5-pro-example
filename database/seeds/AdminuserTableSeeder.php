<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class AdminuserTableSeeder extends Seeder
{

    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        // DB::table('adminusers')->truncate();
        $user = array(
            'username' => 'admin@admin.com',
            'password' => Hash::make('123456'),
            'email' => 'admin@admin.com',
            'status' => 1,
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()')
        );
        
        DB::table('adminusers')->insert($user);
    }
}
