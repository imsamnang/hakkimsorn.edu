<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
  public function run()
  {
	\DB::table('categories')->truncate();
	// categories
  	\DB::table('categories')->insert(['parent_id' => '0','category_name' => 'Phones & Tablets', 'icon'=>'default.png']);
  	\DB::table('categories')->insert(['parent_id' => '0','category_name' => 'Computers & Accessories', 'icon'=>'default.png']);
  	\DB::table('categories')->insert(['parent_id' => '0','category_name' => 'Electronics & Appliances', 'icon'=>'default.png']);
  	\DB::table('categories')->insert(['parent_id' => '0','category_name' => 'Cars and Vehicles', 'icon'=>'default.png']);
  	\DB::table('categories')->insert(['parent_id' => '0','category_name' => ' House & Lands', 'icon'=>'default.png']);
  	\DB::table('categories')->insert(['parent_id' => '0','category_name' => 'Jobs', 'icon'=>'default.png']);
  	\DB::table('categories')->insert(['parent_id' => '0','category_name' => 'Services', 'icon'=>'default.png']);
  	\DB::table('categories')->insert(['parent_id' => '0','category_name' => 'Fashion & Beauty', 'icon'=>'default.png']);
  	\DB::table('categories')->insert(['parent_id' => '0','category_name' => 'Books, Sports & Hobbies', 'icon'=>'default.png']);
  	\DB::table('categories')->insert(['parent_id' => '0','category_name' => 'Furniture & Decor', 'icon'=>'default.png']);
  	\DB::table('categories')->insert(['parent_id' => '0','category_name' => 'Pets', 'icon'=>'default.png']);  	  	  	  	  	  	  	  	
  	\DB::table('categories')->insert(['parent_id' => '0','category_name' => 'Foods', 'icon'=>'default.png']);

  	// parent_category
  	\DB::table('categories')->insert(['parent_id' => '1','category_name' => 'Phones, Tablets']);
  	\DB::table('categories')->insert(['parent_id' => '1','category_name' => 'Smart Watches']);
  	\DB::table('categories')->insert(['parent_id' => '1','category_name' => 'Phone Accessories']);
  	\DB::table('categories')->insert(['parent_id' => '1','category_name' => 'Phone Numbers']);

  	\DB::table('categories')->insert(['parent_id' => '2','category_name' => 'Computers']);
  	\DB::table('categories')->insert(['parent_id' => '2','category_name' => 'Computer accessories']);
  	\DB::table('categories')->insert(['parent_id' => '2','category_name' => 'Softwares']);

  	\DB::table('categories')->insert(['parent_id' => '3','category_name' => 'Consumer Electronics']); 	
  	\DB::table('categories')->insert(['parent_id' => '3','category_name' => 'Security Camera']);
  	\DB::table('categories')->insert(['parent_id' => '3','category_name' => 'Cameras, camcorders']);
  	\DB::table('categories')->insert(['parent_id' => '3','category_name' => 'TVs, Videos and Audios']);
  	\DB::table('categories')->insert(['parent_id' => '3','category_name' => 'Home appliances']);
  	\DB::table('categories')->insert(['parent_id' => '3','category_name' => 'Video games, consoles, toys']);

  	\DB::table('categories')->insert(['parent_id' => '4','category_name' => 'Cars for Sale']);
  	\DB::table('categories')->insert(['parent_id' => '4','category_name' => 'Bicycles']);
  	\DB::table('categories')->insert(['parent_id' => '4','category_name' => 'Motorcycles for Sale']);
  	\DB::table('categories')->insert(['parent_id' => '4','category_name' => 'Vehicles for Rent']);
  	\DB::table('categories')->insert(['parent_id' => '4','category_name' => 'Car Maintenance & Repair']); 	
  	\DB::table('categories')->insert(['parent_id' => '4','category_name' => 'Lorries & Vans']);
  	\DB::table('categories')->insert(['parent_id' => '4','category_name' => 'Financing & Insurance']);
  	\DB::table('categories')->insert(['parent_id' => '4','category_name' => 'Car Parts & Accessories']);
  	\DB::table('categories')->insert(['parent_id' => '4','category_name' => 'Others']);

  	\DB::table('categories')->insert(['parent_id' => '5','category_name' => 'House for Sale']);
  	\DB::table('categories')->insert(['parent_id' => '5','category_name' => 'House for Rent']);
  	\DB::table('categories')->insert(['parent_id' => '5','category_name' => 'Apartment for Sale']);
  	\DB::table('categories')->insert(['parent_id' => '5','category_name' => 'Apartment for Rent']);
  	\DB::table('categories')->insert(['parent_id' => '5','category_name' => 'Land for Sale']);
  	\DB::table('categories')->insert(['parent_id' => '5','category_name' => 'Landed Properties for Rent']); 
  	\DB::table('categories')->insert(['parent_id' => '5','category_name' => 'Commercial for Sale']);
  	\DB::table('categories')->insert(['parent_id' => '5','category_name' => 'Commercial for Rent']);
  	\DB::table('categories')->insert(['parent_id' => '5','category_name' => 'Room for Rent']);
  	\DB::table('categories')->insert(['parent_id' => '5','category_name' => 'Properties Wanted']);
  	\DB::table('categories')->insert(['parent_id' => '5','category_name' => 'Agent Services']);
  	\DB::table('categories')->insert(['parent_id' => '5','category_name' => 'Others']);

  	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Accounting']);
  	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Administration']);
  	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Assistant/Secretary']);
  	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Audit/Taxation']); 	
  	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Banking/Insurance']);
  	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Cashier/Receptionist']);
  	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Catering/Restaurant']);
  	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Cleaner/Maid']);
  	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Consultancy']);
  	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Customer Service']);
  	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Design']);
  	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Education/Training']);
  	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Finance']);
  	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Freight/Shipping /Delivery/Warehouse']);
  	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Hotel/Hospitality']);
  	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Human Resource']);
  	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Information Technology']);
  	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Lawyer/Legal Service']);
  	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Management']);
  	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Manufacturing']);
  	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Marketing']);
  	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Media/Advertising']);
  	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Medical/Health/Nursing']);
  	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Merchandising/Purchasing']); 	
  	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Operations']);
  	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Project Management']);
  	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Quality Control']);
  	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Resort/Casino']);
  	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Sales']);
  	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Security/Driver']);
  	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Technician']);
  	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Telecommunication']);
  	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Translation/Interpretation']);
  	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Travel Agent/Ticket Sales']);
  	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Others']);

  	\DB::table('categories')->insert(['parent_id' => '7','category_name' => 'Accounting']);
  	\DB::table('categories')->insert(['parent_id' => '7','category_name' => 'Automotive']);
  	\DB::table('categories')->insert(['parent_id' => '7','category_name' => 'Advertising & Media']);
  	\DB::table('categories')->insert(['parent_id' => '7','category_name' => 'Bridal Services']);
  	\DB::table('categories')->insert(['parent_id' => '7','category_name' => 'Cleaning & Maid Services']);
  	\DB::table('categories')->insert(['parent_id' => '7','category_name' => 'Construction, Arch. & Interiors']);
  	\DB::table('categories')->insert(['parent_id' => '7','category_name' => 'Education & Training']);
  	\DB::table('categories')->insert(['parent_id' => '7','category_name' => 'Engineering']);
  	\DB::table('categories')->insert(['parent_id' => '7','category_name' => 'Insurance']);
  	\DB::table('categories')->insert(['parent_id' => '7','category_name' => 'Massage & Spa']);
  	\DB::table('categories')->insert(['parent_id' => '7','category_name' => 'Hospitality, Travel & Tourism']);
  	\DB::table('categories')->insert(['parent_id' => '7','category_name' => 'Health, Medical & Pharma']);
  	\DB::table('categories')->insert(['parent_id' => '7','category_name' => 'IT & Telecom']);
  	\DB::table('categories')->insert(['parent_id' => '7','category_name' => 'Interior Design & Renovation']);
  	\DB::table('categories')->insert(['parent_id' => '7','category_name' => 'Legal']);
  	\DB::table('categories')->insert(['parent_id' => '7','category_name' => 'Movers & Logistics']);
  	\DB::table('categories')->insert(['parent_id' => '7','category_name' => 'Plumbing & Electrical']);
  	\DB::table('categories')->insert(['parent_id' => '7','category_name' => 'Property & Real Estate']);
  	\DB::table('categories')->insert(['parent_id' => '7','category_name' => 'Science']);
  	\DB::table('categories')->insert(['parent_id' => '7','category_name' => 'Supply Chain & Logistics']);
  	\DB::table('categories')->insert(['parent_id' => '7','category_name' => 'Printing & Publishing']);
  	\DB::table('categories')->insert(['parent_id' => '7','category_name' => 'Other Services']);

  	\DB::table('categories')->insert(['parent_id' => '8','category_name' => 'Jewelry, watches']);
  	\DB::table('categories')->insert(['parent_id' => '8','category_name' => 'Clothing, accessories']);
  	\DB::table('categories')->insert(['parent_id' => '8','category_name' => 'Beauty & Healthcare']);

  	\DB::table('categories')->insert(['parent_id' => '9','category_name' => 'CDS, DVDS, VHS']);
  	\DB::table('categories')->insert(['parent_id' => '9','category_name' => 'Books']);
  	\DB::table('categories')->insert(['parent_id' => '9','category_name' => 'Sports Equipment']);
  	\DB::table('categories')->insert(['parent_id' => '9','category_name' => 'Others']);

  	\DB::table('categories')->insert(['parent_id' => '10','category_name' => 'Household Items']);
  	\DB::table('categories')->insert(['parent_id' => '10','category_name' => 'Office Furniture']);
  	\DB::table('categories')->insert(['parent_id' => '10','category_name' => 'Home Furniture']);
  	\DB::table('categories')->insert(['parent_id' => '10','category_name' => 'Kitchenware']);
  	\DB::table('categories')->insert(['parent_id' => '10','category_name' => 'Handicrafts Paintings']);

  	\DB::table('categories')->insert(['parent_id' => '11','category_name' => 'Dogs']);
  	\DB::table('categories')->insert(['parent_id' => '11','category_name' => 'Cats']);
  	\DB::table('categories')->insert(['parent_id' => '11','category_name' => 'Birds']);
  	\DB::table('categories')->insert(['parent_id' => '11','category_name' => 'Fish']);
  	\DB::table('categories')->insert(['parent_id' => '11','category_name' => 'Pet Food']);
  	\DB::table('categories')->insert(['parent_id' => '11','category_name' => 'Pet Accessories']);
  	\DB::table('categories')->insert(['parent_id' => '11','category_name' => 'Other']);

  	\DB::table('categories')->insert(['parent_id' => '12','category_name' => 'Meat']);
  	\DB::table('categories')->insert(['parent_id' => '12','category_name' => 'Seafood']);
  	\DB::table('categories')->insert(['parent_id' => '12','category_name' => 'Fruits']);
  	\DB::table('categories')->insert(['parent_id' => '12','category_name' => 'Vegetables']);
  	\DB::table('categories')->insert(['parent_id' => '12','category_name' => 'Beverages']);
  	\DB::table('categories')->insert(['parent_id' => '12','category_name' => 'Grocery']);
  	\DB::table('categories')->insert(['parent_id' => '12','category_name' => 'Bread & Bakery']);
  	\DB::table('categories')->insert(['parent_id' => '12','category_name' => 'Beer & Wine']);
  	\DB::table('categories')->insert(['parent_id' => '12','category_name' => 'Rice & Cereal']);
  	\DB::table('categories')->insert(['parent_id' => '12','category_name' => 'Other']);

  }
}
