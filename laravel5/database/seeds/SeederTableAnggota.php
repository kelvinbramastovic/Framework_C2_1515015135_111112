<?php

use Illuminate\Database\Seeder;

class SeederTableAnggota extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('anggota')->delete();
        // $this->call(UsersTableSeeder::class);
    	$anggota = array (
    		array('id'=>1, 'nama'=>'D', 'alamat'=>'Canada'),
    		array('id'=>2, 'nama'=>'L', 'alamat'=>'Rusia'),
    		array('id'=>3, 'nama'=>'A', 'alamat'=>'America'),
    		array('id'=>4, 'nama'=>'W', 'alamat'=>'France')
    		);
    	DB::table('anggota')->insert($anggota);
    }
}
