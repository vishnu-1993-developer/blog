<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MenuItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menu_items')->delete();
        
        \DB::table('menu_items')->insert(array (
            0 => 
            array (
                'active' => 1,
                'created_at' => '2023-09-30 09:50:28',
                'id' => 1,
                'is_external_link' => 0,
                'link' => 'home',
                'parent_id' => NULL,
                'sort_order' => 1,
                'title' => 'Home',
                'updated_at' => '2023-09-30 09:50:28',
            ),
            1 => 
            array (
                'active' => 1,
                'created_at' => '2023-09-30 09:51:54',
                'id' => 2,
                'is_external_link' => 0,
                'link' => 'about-us',
                'parent_id' => NULL,
                'sort_order' => 2,
                'title' => 'About Us',
                'updated_at' => '2023-09-30 09:51:54',
            ),
            2 => 
            array (
                'active' => 1,
                'created_at' => '2023-09-30 09:52:10',
                'id' => 3,
                'is_external_link' => 0,
                'link' => 'contact-us',
                'parent_id' => NULL,
                'sort_order' => 4,
                'title' => 'Contact Us',
                'updated_at' => '2023-09-30 09:53:18',
            ),
            3 => 
            array (
                'active' => 1,
                'created_at' => '2023-09-30 09:53:06',
                'id' => 4,
                'is_external_link' => 0,
                'link' => 'posts',
                'parent_id' => NULL,
                'sort_order' => 3,
                'title' => 'Blogs',
                'updated_at' => '2023-09-30 09:53:06',
            ),
        ));
        
        
    }
}