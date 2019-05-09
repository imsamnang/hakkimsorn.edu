<?php

use Illuminate\Database\Seeder;

class PhoneOperatorSeeder extends Seeder
{

  public function run()
  {
  	\DB::table('phone_operators')->truncate();
  	DB::table('phone_operators')->insert([
	    [
	        'cellcard' => '011',
	        'smart' => '010',
	        'metfone' => '031',
	        'qb' => '013',
	    ],
	    [
	        'cellcard' => '012',
	        'smart' => '015',
	        'metfone' => '060',
	        'qb' => '080',
	    ],
	    [
	        'cellcard' => '014',
	        'smart' => '016',
	        'metfone' => '066',
	        'qb' => '083',
	    ],
	    [
	        'cellcard' => '017',
	        'smart' => '069',
	        'metfone' => '067',
	        'qb' => '084',
	    ],
	    [
	        'cellcard' => '061',
	        'smart' => '070',
	        'metfone' => '068',
	        'qb' => '',
	    ],
	    [
	        'cellcard' => '077',
	        'smart' => '081',
	        'metfone' => '071',
	        'qb' => '',
	    ],
	    [
	        'cellcard' => '078',
	        'smart' => '086',
	        'metfone' => '088',
	        'qb' => '',
	    ],
	    [   
	    		'cellcard' => '079',
	        'smart' => '087',
	        'metfone' => '090',
	        'qb' => '',
	    ],
	    [
	        'cellcard' => '085',
	        'smart' => '093',
	        'metfone' => '097',
	        'qb' => '',
	    ],
	    [
	        'cellcard' => '089',
	        'smart' => '096',
	        'metfone' => '',
	        'qb' => '',
	    ],
	    [
	        'cellcard' => '092',
	        'smart' => '098',
	        'metfone' => '',
	        'qb' => '',
	    ],
	    [
	        'cellcard' => '095',
	        'smart' => '',
	        'metfone' => '',
	        'qb' => '',
	    ],
	    [
	        'cellcard' => '099',
	        'smart' => '',
	        'metfone' => '',
	        'qb' => '',
	    ],	    
		]);

  }
}
