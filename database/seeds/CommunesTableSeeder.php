<?php

use Illuminate\Database\Seeder;

class CommunesTableSeeder extends Seeder
{
	public function run()
	{
		\DB::table('communes')->truncate();
		// seeder table communes
			// phnom penh communes				
			  \DB::table('communes')->insert(['name_en' => 'Svay Pak','name_kh' => '','district_id'=>1]);
			  \DB::table('communes')->insert(['name_en' => 'Russey Keo','name_kh' => '','district_id'=>1]);
			  \DB::table('communes')->insert(['name_en' => 'Toul Sangke','name_kh' => '','district_id'=>1]);
			  \DB::table('communes')->insert(['name_en' => 'Kilometr Lek 6','name_kh' => '','district_id'=>1]);
			  \DB::table('communes')->insert(['name_en' => 'Chrang Chamreh 1','name_kh' => '','district_id'=>1]);
			  \DB::table('communes')->insert(['name_en' => 'Chrang Chamreh 2','name_kh' => '','district_id'=>1]);

			  \DB::table('communes')->insert(['name_en' => 'Krang Thnong','name_kh' => '','district_id'=>2]);
			  \DB::table('communes')->insert(['name_en' => 'Khmuonh','name_kh' => '','district_id'=>2]);
			  \DB::table('communes')->insert(['name_en' => 'Phnom Penh Thmei','name_kh' => '','district_id'=>2]);
				\DB::table('communes')->insert(['name_en' => 'Tuek Thla','name_kh' => '','district_id'=>2]);	
				\DB::table('communes')->insert(['name_en' => 'Obek Kaom','name_kh' => '','district_id'=>2]);	  

			  \DB::table('communes')->insert(['name_en' => 'Ovlaok','name_kh' => '','district_id'=>3]);
			  \DB::table('communes')->insert(['name_en' => 'Kamboul','name_kh' => '','district_id'=>3]);
			  \DB::table('communes')->insert(['name_en' => 'Kantaok','name_kh' => '','district_id'=>3]);
			  \DB::table('communes')->insert(['name_en' => 'Boeng Thum','name_kh' => '','district_id'=>3]);
			  \DB::table('communes')->insert(['name_en' => 'Phleung Chheh Roteh','name_kh' => '','district_id'=>3]);
			  \DB::table('communes')->insert(['name_en' => 'Chaom Chau','name_kh' => '','district_id'=>3]);
			  \DB::table('communes')->insert(['name_en' => 'Trapeang Krasang','name_kh' => '','district_id'=>3]);
			  \DB::table('communes')->insert(['name_en' => 'Kakab','name_kh' => '','district_id'=>3]);
			  \DB::table('communes')->insert(['name_en' => 'Samraong Kraom','name_kh' => '','district_id'=>3]);
			  \DB::table('communes')->insert(['name_en' => 'Snaor','name_kh' => '','district_id'=>3]);

			  \DB::table('communes')->insert(['name_en' => 'Bak Kheng','name_kh' => '','district_id'=>4]);
			  \DB::table('communes')->insert(['name_en' => 'Praek Leab','name_kh' => '','district_id'=>4]);
			  \DB::table('communes')->insert(['name_en' => 'Praek Ta Sek','name_kh' => '','district_id'=>4]);
			  \DB::table('communes')->insert(['name_en' => 'Chrouy Changvar','name_kh' => '','district_id'=>4]);
			  \DB::table('communes')->insert(['name_en' => 'Kaoh Dach','name_kh' => '','district_id'=>4]);

			  \DB::table('communes')->insert(['name_en' => 'Ponsang','name_kh' => '','district_id'=>5]);
			  \DB::table('communes')->insert(['name_en' => 'Kouk Roka','name_kh' => '','district_id'=>5]);
			  \DB::table('communes')->insert(['name_en' => 'Ponhea Pon','name_kh' => '','district_id'=>5]);
			  \DB::table('communes')->insert(['name_en' => 'Samraong','name_kh' => '','district_id'=>5]);
			  \DB::table('communes')->insert(['name_en' => 'Praek Phnov','name_kh' => '','district_id'=>5]);

			  \DB::table('communes')->insert(['name_en' => 'Veal Sbov','name_kh' => '','district_id'=>6]);
			  \DB::table('communes')->insert(['name_en' => 'Praek Aeng','name_kh' => '','district_id'=>6]);
			  \DB::table('communes')->insert(['name_en' => 'Chbar Ampov 1','name_kh' => '','district_id'=>6]);
			  \DB::table('communes')->insert(['name_en' => 'Chbar Ampov 2','name_kh' => '','district_id'=>6]);
			  \DB::table('communes')->insert(['name_en' => 'Nirouth','name_kh' => '','district_id'=>6]);
			  \DB::table('communes')->insert(['name_en' => 'Praek Pra','name_kh' => '','district_id'=>6]);
			  \DB::table('communes')->insert(['name_en' => 'Praek Thmei','name_kh' => '','district_id'=>6]);
			  \DB::table('communes')->insert(['name_en' => 'Kbal Kaoh','name_kh' => '','district_id'=>6]);

			// Daun Penh
			  \DB::table('communes')->insert(['name_en' => 'Psar Thmei1','name_kh' => '','district_id'=>7]);
			  \DB::table('communes')->insert(['name_en' => 'Psar Thmei2','name_kh' => '','district_id'=>7]);
			  \DB::table('communes')->insert(['name_en' => 'Psar Thmei3','name_kh' => '','district_id'=>7]);
			  \DB::table('communes')->insert(['name_en' => 'Boeung Reang','name_kh' => '','district_id'=>7]);
			  \DB::table('communes')->insert(['name_en' => 'Psar Kandal1','name_kh' => '','district_id'=>7]);
			  \DB::table('communes')->insert(['name_en' => 'Psar Kandal2','name_kh' => '','district_id'=>7]);
			  \DB::table('communes')->insert(['name_en' => 'Chaktomukh','name_kh' => '','district_id'=>7]);
			  \DB::table('communes')->insert(['name_en' => 'Chey Chumneah','name_kh' => '','district_id'=>7]);
			  \DB::table('communes')->insert(['name_en' => 'Psar Chas','name_kh' => '','district_id'=>7]);
			  \DB::table('communes')->insert(['name_en' => 'Srah Chork','name_kh' => '','district_id'=>7]);
			  \DB::table('communes')->insert(['name_en' => 'Vat Phnum','name_kh' => '','district_id'=>7]);

			// Prampir Makara
			 \DB::table('communes')->insert(['name_en' => 'O Reussei 1','name_kh' => '','district_id'=>8]);
			 \DB::table('communes')->insert(['name_en' => 'O Reussei 2','name_kh' => '','district_id'=>8]);
			 \DB::table('communes')->insert(['name_en' => 'O Reussei 3','name_kh' => '','district_id'=>8]);
			 \DB::table('communes')->insert(['name_en' => 'O Reussei 4','name_kh' => '','district_id'=>8]);
			 \DB::table('communes')->insert(['name_en' => 'Monorom','name_kh' => '','district_id'=>8]);
			 \DB::table('communes')->insert(['name_en' => 'Mittapheap','name_kh' => '','district_id'=>8]);
			 \DB::table('communes')->insert(['name_en' => 'Vealvong','name_kh' => '','district_id'=>8]);
			 \DB::table('communes')->insert(['name_en' => 'Beung Prolit','name_kh' => '','district_id'=>8]);

			// Toul Kork
			 \DB::table('communes')->insert(['name_en' => 'Psar Depot1','name_kh' => '','district_id'=>9]);
			 \DB::table('communes')->insert(['name_en' => 'Psar Depot2','name_kh' => '','district_id'=>9]);
			 \DB::table('communes')->insert(['name_en' => 'Psar Depot3','name_kh' => '','district_id'=>9]);
			 \DB::table('communes')->insert(['name_en' => 'Teuk Laork1','name_kh' => '','district_id'=>9]);
			 \DB::table('communes')->insert(['name_en' => 'Teuk Laork2','name_kh' => '','district_id'=>9]);
			 \DB::table('communes')->insert(['name_en' => 'Teuk Laork3','name_kh' => '','district_id'=>9]);
			 \DB::table('communes')->insert(['name_en' => 'Beung Kok1','name_kh' => '','district_id'=>9]);
			 \DB::table('communes')->insert(['name_en' => 'Beung Kok2','name_kh' => '','district_id'=>9]);
			 \DB::table('communes')->insert(['name_en' => 'Psar Deumkor','name_kh' => '','district_id'=>9]);
			 \DB::table('communes')->insert(['name_en' => 'Beung Salang','name_kh' => '','district_id'=>9]);

			// Dangkor
			 \DB::table('communes')->insert(['name_en' => 'Dangkor','name_kh' => '','district_id'=>10]);
			 \DB::table('communes')->insert(['name_en' => 'Prey Sa','name_kh' => '','district_id'=>10]);
			 \DB::table('communes')->insert(['name_en' => 'Cheung Aek','name_kh' => '','district_id'=>10]);
			 \DB::table('communes')->insert(['name_en' => 'Spean Thma','name_kh' => '','district_id'=>10]);
			 \DB::table('communes')->insert(['name_en' => 'Prey Vaeng','name_kh' => '','district_id'=>10]);
			 \DB::table('communes')->insert(['name_en' => 'Pong Tuek','name_kh' => '','district_id'=>10]);
			 \DB::table('communes')->insert(['name_en' => 'Prateah Lang','name_kh' => '','district_id'=>10]);
			 \DB::table('communes')->insert(['name_en' => 'Sak Sampov','name_kh' => '','district_id'=>10]);
			 \DB::table('communes')->insert(['name_en' => 'Krang Pongro','name_kh' => '','district_id'=>10]);
			 \DB::table('communes')->insert(['name_en' => 'Kong Noy','name_kh' => '','district_id'=>10]);
			 \DB::table('communes')->insert(['name_en' => 'Tien','name_kh' => '','district_id'=>10]);
			 \DB::table('communes')->insert(['name_en' => 'Praek Kampues','name_kh' => '','district_id'=>10]);

			// Meanchey
			 \DB::table('communes')->insert(['name_en' => 'Stung Meanchey','name_kh' => '','district_id'=>11]);
			 \DB::table('communes')->insert(['name_en' => 'Boeng Tompun','name_kh' => '','district_id'=>11]);
			 \DB::table('communes')->insert(['name_en' => 'Chak Angrae Leu','name_kh' => '','district_id'=>11]);
			 \DB::table('communes')->insert(['name_en' => 'Chak Angrae Kroam','name_kh' => '','district_id'=>11]);

			// Chamkar mon
			 \DB::table('communes')->insert(['name_en' => 'Tonle Bassac','name_kh' => '','district_id'=>12]);
			 \DB::table('communes')->insert(['name_en' => 'Beung Kengkang1','name_kh' => '','district_id'=>12]);
			 \DB::table('communes')->insert(['name_en' => 'Beung Kengkang2','name_kh' => '','district_id'=>12]);
			 \DB::table('communes')->insert(['name_en' => 'Beung Kengkang3','name_kh' => '','district_id'=>12]);
			 \DB::table('communes')->insert(['name_en' => 'Olympic','name_kh' => '','district_id'=>12]);
			 \DB::table('communes')->insert(['name_en' => 'Toul Svayprey1','name_kh' => '','district_id'=>12]);
			 \DB::table('communes')->insert(['name_en' => 'Toul Svayprey2','name_kh' => '','district_id'=>12]);
			 \DB::table('communes')->insert(['name_en' => 'Tomnub Teuk','name_kh' => '','district_id'=>12]);
			 \DB::table('communes')->insert(['name_en' => 'Toul Tompung1','name_kh' => '','district_id'=>12]);
			 \DB::table('communes')->insert(['name_en' => 'Toul Tompung2','name_kh' => '','district_id'=>12]);
			 \DB::table('communes')->insert(['name_en' => 'Beung Trabaek','name_kh' => '','district_id'=>12]);
			 \DB::table('communes')->insert(['name_en' => 'Psar Deumtkov','name_kh' => '','district_id'=>12]);

			// Shihanouk Ville
			 \DB::table('communes')->insert(['name_en' => 'Sangkat 1','name_kh' => '','district_id'=>13]);
			 \DB::table('communes')->insert(['name_en' => 'Sangkat 2','name_kh' => '','district_id'=>13]);
			 \DB::table('communes')->insert(['name_en' => 'Sangkat 3','name_kh' => '','district_id'=>13]);
			 \DB::table('communes')->insert(['name_en' => 'Sangkat 4','name_kh' => '','district_id'=>13]);
			 \DB::table('communes')->insert(['name_en' => 'Koh Rong','name_kh' => '','district_id'=>13]);

			// Prey Nob
			 \DB::table('communes')->insert(['name_en' => 'Andong Thmar','name_kh' => '','district_id'=>14]);
			 \DB::table('communes')->insert(['name_en' => 'Beung Taprum','name_kh' => '','district_id'=>14]);
			 \DB::table('communes')->insert(['name_en' => 'Bet Trang','name_kh' => '','district_id'=>14]);
			 \DB::table('communes')->insert(['name_en' => 'Cheung Koar','name_kh' => '','district_id'=>14]);
			 \DB::table('communes')->insert(['name_en' => 'Ou Chrov','name_kh' => '','district_id'=>14]);
			 \DB::table('communes')->insert(['name_en' => 'Ou Oknha Heng','name_kh' => '','district_id'=>14]);
			 \DB::table('communes')->insert(['name_en' => 'Prey Nob','name_kh' => '','district_id'=>14]);
			 \DB::table('communes')->insert(['name_en' => 'Ream','name_kh' => '','district_id'=>14]);
			 \DB::table('communes')->insert(['name_en' => 'Sammaki','name_kh' => '','district_id'=>14]);
			 \DB::table('communes')->insert(['name_en' => 'Somrong','name_kh' => '','district_id'=>14]);
			 \DB::table('communes')->insert(['name_en' => 'Teuk Laork','name_kh' => '','district_id'=>14]);
			 \DB::table('communes')->insert(['name_en' => 'Teuk Tla','name_kh' => '','district_id'=>14]);
			 \DB::table('communes')->insert(['name_en' => 'Toul Toteung','name_kh' => '','district_id'=>14]);
			 \DB::table('communes')->insert(['name_en' => 'Veal Rinh','name_kh' => '','district_id'=>14]);

			// Stueng Hav Chey
			 \DB::table('communes')->insert(['name_en' => 'Kompenh','name_kh' => '','district_id'=>15]);
			 \DB::table('communes')->insert(['name_en' => 'Ou Treh','name_kh' => '','district_id'=>15]);
			 \DB::table('communes')->insert(['name_en' => 'Tomnob Rolork','name_kh' => '','district_id'=>15]);
			 \DB::table('communes')->insert(['name_en' => 'Keo Phos','name_kh' => '','district_id'=>15]);
			 
			// Kompong Seila
			 \DB::table('communes')->insert(['name_en' => 'Chomkar Loung','name_kh' => '','district_id'=>16]);
			 \DB::table('communes')->insert(['name_en' => 'Kampong Seila','name_kh' => '','district_id'=>16]);
			 \DB::table('communes')->insert(['name_en' => 'Ou Bak Roteh','name_kh' => '','district_id'=>16]);
			 \DB::table('communes')->insert(['name_en' => 'Steung Chhay','name_kh' => '','district_id'=>16]);
		
		// Krong Kampong Cham		 
			// Krong Kampong Cham
			 \DB::table('communes')->insert(['name_en' => 'Boeng Kok','name_kh' => '','district_id'=>17]);
			 \DB::table('communes')->insert(['name_en' => 'Kampong Cham','name_kh' => '','district_id'=>17]);
			 \DB::table('communes')->insert(['name_en' => 'Sambuor Meas','name_kh' => '','district_id'=>17]);
			 \DB::table('communes')->insert(['name_en' => 'Veal Vong','name_kh' => '','district_id'=>17]);

			// Kampong Siem
			 \DB::table('communes')->insert(['name_en' => 'Ampil','name_kh' => '','district_id'=>18]);
			 \DB::table('communes')->insert(['name_en' => 'Hann Chey','name_kh' => '','district_id'=>18]);
			 \DB::table('communes')->insert(['name_en' => 'Kien Chrey','name_kh' => '','district_id'=>18]);
			 \DB::table('communes')->insert(['name_en' => 'Kokor','name_kh' => '','district_id'=>18]);
			 \DB::table('communes')->insert(['name_en' => 'Kaoh Mitt','name_kh' => '','district_id'=>18]);
			 \DB::table('communes')->insert(['name_en' => 'Kaoh Roka','name_kh' => '','district_id'=>18]);
			 \DB::table('communes')->insert(['name_en' => 'Kaoh Samraong','name_kh' => '','district_id'=>18]);
			 \DB::table('communes')->insert(['name_en' => 'Kaoh Tontuem','name_kh' => '','district_id'=>18]);
			 \DB::table('communes')->insert(['name_en' => 'Krala','name_kh' => '','district_id'=>18]);
			 \DB::table('communes')->insert(['name_en' => 'Ou Svay','name_kh' => '','district_id'=>18]);
			 \DB::table('communes')->insert(['name_en' => 'Ro any','name_kh' => '','district_id'=>18]);
			 \DB::table('communes')->insert(['name_en' => 'Rumchek','name_kh' => '','district_id'=>18]);
			 \DB::table('communes')->insert(['name_en' => 'Srak','name_kh' => '','district_id'=>18]);
			 \DB::table('communes')->insert(['name_en' => 'Trean','name_kh' => '','district_id'=>18]);
			 \DB::table('communes')->insert(['name_en' => 'Vihear Thum','name_kh' => '','district_id'=>18]);

			// KangMeas
			 \DB::table('communes')->insert(['name_en' => 'Angkor Ban','name_kh' => '','district_id'=>19]);
			 \DB::table('communes')->insert(['name_en' => 'Kong Taneung','name_kh' => '','district_id'=>19]);
			 \DB::table('communes')->insert(['name_en' => 'Khchau','name_kh' => '','district_id'=>19]);
			 \DB::table('communes')->insert(['name_en' => 'Peam Chikong','name_kh' => '','district_id'=>19]);
			 \DB::table('communes')->insert(['name_en' => 'Prek Koy','name_kh' => '','district_id'=>19]);
			 \DB::table('communes')->insert(['name_en' => 'Prek Krabau','name_kh' => '','district_id'=>19]);
			 \DB::table('communes')->insert(['name_en' => 'Reay Pay','name_kh' => '','district_id'=>19]);
			 \DB::table('communes')->insert(['name_en' => 'Roka-a','name_kh' => '','district_id'=>19]);
			 \DB::table('communes')->insert(['name_en' => 'Roka-koy','name_kh' => '','district_id'=>19]);
			 \DB::table('communes')->insert(['name_en' => 'Sdau','name_kh' => '','district_id'=>19]);
			 \DB::table('communes')->insert(['name_en' => 'Sor Korng','name_kh' => '','district_id'=>19]);

			// Kaoh Soutin
			 \DB::table('communes')->insert(['name_en' => 'Kampong Reab','name_kh' => '','district_id'=>20]);
			 \DB::table('communes')->insert(['name_en' => 'Koh Sotin','name_kh' => '','district_id'=>20]);
			 \DB::table('communes')->insert(['name_en' => 'Tve','name_kh' => '','district_id'=>20]);
			 \DB::table('communes')->insert(['name_en' => 'Mohaleap','name_kh' => '','district_id'=>20]);
			 \DB::table('communes')->insert(['name_en' => 'Moha Knhoung','name_kh' => '','district_id'=>20]);
			 \DB::table('communes')->insert(['name_en' => 'Peam Brothnous','name_kh' => '','district_id'=>20]);
			 \DB::table('communes')->insert(['name_en' => 'Pongro','name_kh' => '','district_id'=>20]);
			 \DB::table('communes')->insert(['name_en' => 'Prek Tanung','name_kh' => '','district_id'=>20]);
			
			// Prey Chhor
			 \DB::table('communes')->insert(['name_en' => 'Baray','name_kh' => '','district_id'=>21]);
			 \DB::table('communes')->insert(['name_en' => 'Beung Nay','name_kh' => '','district_id'=>21]);
			 \DB::table('communes')->insert(['name_en' => 'Chrey Vean','name_kh' => '','district_id'=>21]);
			 \DB::table('communes')->insert(['name_en' => 'Mean','name_kh' => '','district_id'=>21]);
			 \DB::table('communes')->insert(['name_en' => 'Trapeang Preah','name_kh' => '','district_id'=>21]);
			 \DB::table('communes')->insert(['name_en' => 'Khvet Thum','name_kh' => '','district_id'=>21]);
			 \DB::table('communes')->insert(['name_en' => 'Kor','name_kh' => '','district_id'=>21]);
			 \DB::table('communes')->insert(['name_en' => 'Krouch','name_kh' => '','district_id'=>21]);
			 \DB::table('communes')->insert(['name_en' => 'Lvea','name_kh' => '','district_id'=>21]);
			 \DB::table('communes')->insert(['name_en' => 'Prey Chor','name_kh' => '','district_id'=>21]);
			 \DB::table('communes')->insert(['name_en' => 'Sor Sen','name_kh' => '','district_id'=>21]);
			 \DB::table('communes')->insert(['name_en' => 'Somrorng','name_kh' => '','district_id'=>21]);
			 \DB::table('communes')->insert(['name_en' => 'Sro Ngae','name_kh' => '','district_id'=>21]);
			 \DB::table('communes')->insert(['name_en' => 'Thma Poun','name_kh' => '','district_id'=>21]);
			 \DB::table('communes')->insert(['name_en' => 'Tong Rong','name_kh' => '','district_id'=>21]);

			// Srey Santhor
			 \DB::table('communes')->insert(['name_en' => 'Baray','name_kh' => '','district_id'=>22]);
			 \DB::table('communes')->insert(['name_en' => 'Chibal','name_kh' => '','district_id'=>22]);
			 \DB::table('communes')->insert(['name_en' => 'Khnar Sor','name_kh' => '','district_id'=>22]);
			 \DB::table('communes')->insert(['name_en' => 'Koh Andet','name_kh' => '','district_id'=>22]);
			 \DB::table('communes')->insert(['name_en' => 'Mean Chey','name_kh' => '','district_id'=>22]);
			 \DB::table('communes')->insert(['name_en' => 'Phteas Kandal','name_kh' => '','district_id'=>22]);
			 \DB::table('communes')->insert(['name_en' => 'Bram Yam','name_kh' => '','district_id'=>22]);
			 \DB::table('communes')->insert(['name_en' => 'Prek Dombok','name_kh' => '','district_id'=>22]);
			 \DB::table('communes')->insert(['name_en' => 'Prek Por','name_kh' => '','district_id'=>22]);
			 \DB::table('communes')->insert(['name_en' => 'Prek Romdeng','name_kh' => '','district_id'=>22]);
			 \DB::table('communes')->insert(['name_en' => 'Russey Srok','name_kh' => '','district_id'=>22]);
			 \DB::table('communes')->insert(['name_en' => 'Svay Por','name_kh' => '','district_id'=>22]);
			 \DB::table('communes')->insert(['name_en' => 'Svay Ksach Phnom','name_kh' => '','district_id'=>22]);
			 \DB::table('communes')->insert(['name_en' => 'Torng Trolach','name_kh' => '','district_id'=>22]);

			// Stueng Trang
			 \DB::table('communes')->insert(['name_en' => 'Areak Tnort','name_kh' => '','district_id'=>23]);
			 \DB::table('communes')->insert(['name_en' => 'Dorng Kdar','name_kh' => '','district_id'=>23]);
			 \DB::table('communes')->insert(['name_en' => 'Kpob Tangoun','name_kh' => '','district_id'=>23]);
			 \DB::table('communes')->insert(['name_en' => 'Mesar Chrey','name_kh' => '','district_id'=>23]);
			 \DB::table('communes')->insert(['name_en' => 'Or Mlou','name_kh' => '','district_id'=>23]);
			 \DB::table('communes')->insert(['name_en' => 'Peam Koh Sna','name_kh' => '','district_id'=>23]);
			 \DB::table('communes')->insert(['name_en' => 'Preah Andong','name_kh' => '','district_id'=>23]);
			 \DB::table('communes')->insert(['name_en' => 'Prek Kork','name_kh' => '','district_id'=>23]);
			 \DB::table('communes')->insert(['name_en' => 'Sopheas','name_kh' => '','district_id'=>23]);
			 \DB::table('communes')->insert(['name_en' => 'Toul Preahkhleang','name_kh' => '','district_id'=>23]);
			 \DB::table('communes')->insert(['name_en' => 'Toul Sombor','name_kh' => '','district_id'=>23]);

			// Batheay
			 \DB::table('communes')->insert(['name_en' => 'Batheay','name_kh' => '','district_id'=>24]);
			 \DB::table('communes')->insert(['name_en' => 'Chbar Ampov','name_kh' => '','district_id'=>24]);
			 \DB::table('communes')->insert(['name_en' => 'Chealea','name_kh' => '','district_id'=>24]);
			 \DB::table('communes')->insert(['name_en' => 'Cheung Prey','name_kh' => '','district_id'=>24]);
			 \DB::table('communes')->insert(['name_en' => 'Me Pring','name_kh' => '','district_id'=>24]);
			 \DB::table('communes')->insert(['name_en' => 'Phav','name_kh' => '','district_id'=>24]);
			 \DB::table('communes')->insert(['name_en' => 'Sambour','name_kh' => '','district_id'=>24]);
			 \DB::table('communes')->insert(['name_en' => 'Sandaek','name_kh' => '','district_id'=>24]);
			 \DB::table('communes')->insert(['name_en' => 'Tang Krang','name_kh' => '','district_id'=>24]);
			 \DB::table('communes')->insert(['name_en' => 'Prasat','name_kh' => '','district_id'=>24]);
			 \DB::table('communes')->insert(['name_en' => 'Tang Krasang','name_kh' => '','district_id'=>24]);
			 \DB::table('communes')->insert(['name_en' => 'Trab Roung','name_kh' => '','district_id'=>24]);
			 \DB::table('communes')->insert(['name_en' => 'Tumnob','name_kh' => '','district_id'=>24]);

			// Chamkar Leu
			 \DB::table('communes')->insert(['name_en' => 'Bos Khnaor','name_kh' => '','district_id'=>25]);
			 \DB::table('communes')->insert(['name_en' => 'Chamkar Andoung','name_kh' => '','district_id'=>25]);
			 \DB::table('communes')->insert(['name_en' => 'Cheyyou','name_kh' => '','district_id'=>25]);
			 \DB::table('communes')->insert(['name_en' => 'Lvea Leu','name_kh' => '','district_id'=>25]);
			 \DB::table('communes')->insert(['name_en' => 'Spueu','name_kh' => '','district_id'=>25]);
			 \DB::table('communes')->insert(['name_en' => 'Svay Teab','name_kh' => '','district_id'=>25]);
			 \DB::table('communes')->insert(['name_en' => 'Ta Ong','name_kh' => '','district_id'=>25]);
			 \DB::table('communes')->insert(['name_en' => 'Ta Prok','name_kh' => '','district_id'=>25]);

			// Cheung Prey 
			 \DB::table('communes')->insert(['name_en' => 'Khnaor Dambang','name_kh' => '','district_id'=>26]);
			 \DB::table('communes')->insert(['name_en' => 'Kouk Rovieng','name_kh' => '','district_id'=>26]);
			 \DB::table('communes')->insert(['name_en' => 'Phdau Chum','name_kh' => '','district_id'=>26]);
			 \DB::table('communes')->insert(['name_en' => 'Prey Char','name_kh' => '','district_id'=>26]);
			 \DB::table('communes')->insert(['name_en' => 'Pring Chrum','name_kh' => '','district_id'=>26]);
			 \DB::table('communes')->insert(['name_en' => 'Sampong Chey','name_kh' => '','district_id'=>26]);
			 \DB::table('communes')->insert(['name_en' => 'Sdaeung Chey','name_kh' => '','district_id'=>26]);
			 \DB::table('communes')->insert(['name_en' => 'Soutip','name_kh' => '','district_id'=>26]);
			 \DB::table('communes')->insert(['name_en' => 'Srama','name_kh' => '','district_id'=>26]);
			 \DB::table('communes')->insert(['name_en' => 'Trapeang Kor','name_kh' => '','district_id'=>26]);

		// Siem Reap communes
			// Angkor Chum
			  \DB::table('communes')->insert(['name_en' => 'Char Chhouk','name_kh' => '','district_id'=>27]);
				\DB::table('communes')->insert(['name_en' => 'Daun Peng','name_kh' => '','district_id'=>27]);
				\DB::table('communes')->insert(['name_en' => 'Koak Daung','name_kh' => '','district_id'=>27]);				
				\DB::table('communes')->insert(['name_en' => 'Koal','name_kh' => '','district_id'=>27]);
				\DB::table('communes')->insert(['name_en' => 'Nokor Pheas','name_kh' => '','district_id'=>27]);
				\DB::table('communes')->insert(['name_en' => 'Srae Khvav','name_kh' => '','district_id'=>27]);
				\DB::table('communes')->insert(['name_en' => 'Tasoam','name_kh' => '','district_id'=>27]);

			// Angkor Thom						
				\DB::table('communes')->insert(['name_en' => 'Chub Tatrav','name_kh' => '','district_id'=>28]);
				\DB::table('communes')->insert(['name_en' => 'Leang Dai','name_kh' => '','district_id'=>28]);
				\DB::table('communes')->insert(['name_en' => 'Peak Snaeng','name_kh' => '','district_id'=>28]);
				\DB::table('communes')->insert(['name_en' => 'Svay Chek','name_kh' => '','district_id'=>28]);

			// Banteay Srey								
				\DB::table('communes')->insert(['name_en' => 'Khnar Sanday','name_kh' => '','district_id'=>29]);
				\DB::table('communes')->insert(['name_en' => 'Khun Ream','name_kh' => '','district_id'=>29]);
				\DB::table('communes')->insert(['name_en' => 'Preak Dak','name_kh' => '','district_id'=>29]);
				\DB::table('communes')->insert(['name_en' => 'Romchek','name_kh' => '','district_id'=>29]);
				\DB::table('communes')->insert(['name_en' => 'Run Ta Aek','name_kh' => '','district_id'=>29]);
				\DB::table('communes')->insert(['name_en' => 'Tbaeng','name_kh' => '','district_id'=>29]);

			// Chi Kraeng
				\DB::table('communes')->insert(['name_en' => 'Anlong Samnor','name_kh' => '','district_id'=>30]);
				\DB::table('communes')->insert(['name_en' => 'Chi Kraeng','name_kh' => '','district_id'=>30]);
				\DB::table('communes')->insert(['name_en' => 'Kampong Kdei','name_kh' => '','district_id'=>30]);
				\DB::table('communes')->insert(['name_en' => 'Khvav','name_kh' => '','district_id'=>30]);
				\DB::table('communes')->insert(['name_en' => 'Koak Thlok Krom','name_kh' => '','district_id'=>30]);
				\DB::table('communes')->insert(['name_en' => 'Koak Thlok Leu','name_kh' => '','district_id'=>30]);
				\DB::table('communes')->insert(['name_en' => 'Lveng Russei','name_kh' => '','district_id'=>30]);
				\DB::table('communes')->insert(['name_en' => 'Pongro Krom','name_kh' => '','district_id'=>30]);
				\DB::table('communes')->insert(['name_en' => 'Pongro Leu','name_kh' => '','district_id'=>30]);
				\DB::table('communes')->insert(['name_en' => 'Russei Lok','name_kh' => '','district_id'=>30]);
				\DB::table('communes')->insert(['name_en' => 'Songveuy','name_kh' => '','district_id'=>30]);
				\DB::table('communes')->insert(['name_en' => 'Spean Tnoat','name_kh' => '','district_id'=>30]);																
			// Kralanh	
				\DB::table('communes')->insert(['name_en' => 'Chonleas Dai','name_kh' => '','district_id'=>31]);
				\DB::table('communes')->insert(['name_en' => 'Kampong Thkov','name_kh' => '','district_id'=>31]);
				\DB::table('communes')->insert(['name_en' => 'Kralanh','name_kh' => '','district_id'=>31]);
				\DB::table('communes')->insert(['name_en' => 'Krouch Kor','name_kh' => '','district_id'=>31]);
				\DB::table('communes')->insert(['name_en' => 'Roang Koar','name_kh' => '','district_id'=>31]);
				\DB::table('communes')->insert(['name_en' => 'Sambour','name_kh' => '','district_id'=>31]);
				\DB::table('communes')->insert(['name_en' => 'Sen Sok','name_kh' => '','district_id'=>31]);
				\DB::table('communes')->insert(['name_en' => 'Snoul','name_kh' => '','district_id'=>31]);
				\DB::table('communes')->insert(['name_en' => 'Sronal','name_kh' => '','district_id'=>31]);
				\DB::table('communes')->insert(['name_en' => 'Ta An','name_kh' => '','district_id'=>31]);

			// Pouk
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);

			// Prasat Bakong
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);

			// Krong Siem Reap
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);

			// Soutr Nikum
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);

			// Srei Snam
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);

			// Svay Leu
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);

			// Varin	
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);

				
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>22]);















	}
}
