<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('contacts')->get()->count() == 0){
            
                   DB::table('contacts')->insert([
                       
                          [
                    'name' => 'client test',
                    'contact'=> 123456789,
                    'email'=> 'client@example.com',
                    
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]
                       ]);
}

        }
        
    
}
