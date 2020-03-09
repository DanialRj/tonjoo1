<?php

use Illuminate\Database\Seeder;

class CrudsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for( $i = 1; $i <= 30; $i++ )
        {
            $data = new \App\Crud;
            $data->nama = 'Danial' . $i;
            $data->Umur = $i;

            $data->save();
        }
        
    }
}
