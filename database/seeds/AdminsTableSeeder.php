<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Admin::create([

            'name' => 'Master',
            'email' => 'sales@viewnetcomputers.com',
            'password' => bcrypt('221181')
            
        ]);
    }
}
