<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menus')->delete();
        
        \DB::table('menus')->insert(array (
            0 => 
            array (
                'active' => 1,
                'created_at' => '2023-09-30 09:36:43',
                'description' => 'Primary menu used on top',
                'id' => 1,
                'title' => 'Header Menu',
                'updated_at' => '2023-09-30 09:46:30',
            ),
            1 => 
            array (
                'active' => 1,
                'created_at' => '2023-09-30 09:45:17',
                'description' => 'footer section menu',
                'id' => 2,
                'title' => 'Footer Menu',
                'updated_at' => '2023-09-30 09:49:01',
            ),
        ));
        
        
    }
}