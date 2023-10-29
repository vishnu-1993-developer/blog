<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MenuMenuItemTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menu__menu_item')->delete();
        
        \DB::table('menu__menu_item')->insert(array (
            0 => 
            array (
                'created_at' => '2023-09-30 12:23:54',
                'id' => 1,
                'include_subitem' => 0,
                'menu_id' => 1,
                'menu_item_id' => 1,
                'sort_order' => NULL,
                'updated_at' => '2023-09-30 12:23:54',
            ),
            1 => 
            array (
                'created_at' => '2023-09-30 12:23:54',
                'id' => 2,
                'include_subitem' => 0,
                'menu_id' => 1,
                'menu_item_id' => 2,
                'sort_order' => NULL,
                'updated_at' => '2023-09-30 12:23:54',
            ),
            2 => 
            array (
                'created_at' => '2023-09-30 12:23:54',
                'id' => 3,
                'include_subitem' => 0,
                'menu_id' => 1,
                'menu_item_id' => 3,
                'sort_order' => NULL,
                'updated_at' => '2023-09-30 12:23:54',
            ),
            3 => 
            array (
                'created_at' => '2023-09-30 12:23:54',
                'id' => 4,
                'include_subitem' => 0,
                'menu_id' => 1,
                'menu_item_id' => 4,
                'sort_order' => NULL,
                'updated_at' => '2023-09-30 12:23:54',
            ),
        ));
        
        
    }
}