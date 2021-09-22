<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
        	'nosurat'=>'12345',
        	'tanggalsurat'=>'08012020',
  
        	'perihal' => 'surat ini ditujukan kepada anda',
        	'sifat' => 'surat dinas',
        	'lampiran' => '1(satu)berkas',
        	'kodeinstansi' => '32145',
        ]);
    }
}
