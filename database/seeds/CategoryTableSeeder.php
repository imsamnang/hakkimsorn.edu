<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
  public function run()
  {
  	\DB::table('categories')->truncate();
  	// categories
    	\DB::table('categories')->insert(['parent_id' => '0','category_name' => 'Phones & Tablets', 'icon'=>'mobile-phones-tablets.png']);
    	\DB::table('categories')->insert(['parent_id' => '0','category_name' => 'Computers & Accessories', 'icon'=>'computer-and-accessories.png']);
    	\DB::table('categories')->insert(['parent_id' => '0','category_name' => 'Electronics & Appliances', 'icon'=>'electronics-appliances.png']);
    	\DB::table('categories')->insert(['parent_id' => '0','category_name' => 'Cars and Vehicles', 'icon'=>'cars-and-vehicles.png']);
    	\DB::table('categories')->insert(['parent_id' => '0','category_name' => ' House & Lands', 'icon'=>'property-housing-rentals.png']);
    	\DB::table('categories')->insert(['parent_id' => '0','category_name' => 'Jobs', 'icon'=>'jobs.png']);
    	\DB::table('categories')->insert(['parent_id' => '0','category_name' => 'Services', 'icon'=>'services.png']);
    	\DB::table('categories')->insert(['parent_id' => '0','category_name' => 'Fashion & Beauty', 'icon'=>'fashion-beauty.png']);
    	\DB::table('categories')->insert(['parent_id' => '0','category_name' => 'Books, Sports & Hobbies', 'icon'=>'books-sports-hobbies.png']);
    	\DB::table('categories')->insert(['parent_id' => '0','category_name' => 'Furniture & Decor', 'icon'=>'furniture-decor.png']);
    	\DB::table('categories')->insert(['parent_id' => '0','category_name' => 'Pets', 'icon'=>'pets.png']);  	  	  	  	  	  	  	  	
    	\DB::table('categories')->insert(['parent_id' => '0','category_name' => 'Foods', 'icon'=>'foods.png']);

    // parent_category
      // Phones, Tablets
      	\DB::table('categories')->insert(['parent_id' => '1','category_name' => 'Phones, Tablets','form_name'=>'phone_tablets.phone']);
      	\DB::table('categories')->insert(['parent_id' => '1','category_name' => 'Smart Watches','form_name'=>'phone_tablets.watch']);
      	\DB::table('categories')->insert(['parent_id' => '1','category_name' => 'Phone Accessories','form_name'=>'phone_tablets.accessories']);
      	\DB::table('categories')->insert(['parent_id' => '1','category_name' => 'Phone Numbers','form_name'=>'phone_tablets.number']);
      // Computers & Accessories
      	\DB::table('categories')->insert(['parent_id' => '2','category_name' => 'Computers','form_name'=>'computer_accessories.computer']);
      	\DB::table('categories')->insert(['parent_id' => '2','category_name' => 'Computer accessories','form_name'=>'computer_accessories.accessories']);
      	\DB::table('categories')->insert(['parent_id' => '2','category_name' => 'Softwares','form_name'=>'computer_accessories.software']);
      // Consumer Electronics
      	\DB::table('categories')->insert(['parent_id' => '3','category_name' => 'Consumer Electronics','form_name'=>'electronic_appliances.electronic']); 	
      	\DB::table('categories')->insert(['parent_id' => '3','category_name' => 'Security Camera','form_name'=>'electronic_appliances.camera']);
      	\DB::table('categories')->insert(['parent_id' => '3','category_name' => 'Cameras, camcorders','form_name'=>'electronic_appliances.camcorder']);
      	\DB::table('categories')->insert(['parent_id' => '3','category_name' => 'TVs, Videos and Audios','form_name'=>'electronic_appliances.appliance_game_tv_video_audio']);
      	\DB::table('categories')->insert(['parent_id' => '3','category_name' => 'Home appliances','form_name'=>'electronic_appliances.appliance_game_tv_video_audio']);
      	\DB::table('categories')->insert(['parent_id' => '3','category_name' => 'Video games, consoles, toys','form_name'=>'electronic_appliances.appliance_game_tv_video_audio']);
      // Electronic & Appliances
      	\DB::table('categories')->insert(['parent_id' => '4','category_name' => 'Cars for Sale','form_name'=>'car_vehicles.car_sale']);
      	\DB::table('categories')->insert(['parent_id' => '4','category_name' => 'Bicycles','form_name'=>'car_vehicles.bicycle']);
      	\DB::table('categories')->insert(['parent_id' => '4','category_name' => 'Motorcycles for Sale','form_name'=>'car_vehicles.motocycle']);
      	\DB::table('categories')->insert(['parent_id' => '4','category_name' => 'Vehicles for Rent','form_name'=>'car_vehicles.vehicle_rent']);
      	\DB::table('categories')->insert(['parent_id' => '4','category_name' => 'Car Maintenance & Repair','form_name'=>'car_vehicles.repaire_insurance']); 	
      	\DB::table('categories')->insert(['parent_id' => '4','category_name' => 'Lorries & Vans','form_name'=>'car_vehicles.accessories_lorries_vans']);
      	\DB::table('categories')->insert(['parent_id' => '4','category_name' => 'Financing & Insurance','form_name'=>'car_vehicles.repaire_insurance']);
      	\DB::table('categories')->insert(['parent_id' => '4','category_name' => 'Car Parts & Accessories','form_name'=>'car_vehicles.accessories_lorries_vans']);
      	\DB::table('categories')->insert(['parent_id' => '4','category_name' => 'Others','form_name'=>'car_vehicles.others']);
      // House & Land
      	\DB::table('categories')->insert(['parent_id' => '5','category_name' => 'House for Sale','form_name'=>'house_lands.house']);
      	\DB::table('categories')->insert(['parent_id' => '5','category_name' => 'House for Rent','form_name'=>'house_lands.house']);
      	\DB::table('categories')->insert(['parent_id' => '5','category_name' => 'Apartment for Sale','form_name'=>'house_lands.land_commercial_apartment_room']);
      	\DB::table('categories')->insert(['parent_id' => '5','category_name' => 'Apartment for Rent','form_name'=>'house_lands.land_commercial_apartment_room']);
      	\DB::table('categories')->insert(['parent_id' => '5','category_name' => 'Land for Sale','form_name'=>'house_lands.land_commercial_apartment_room']);
      	\DB::table('categories')->insert(['parent_id' => '5','category_name' => 'Land for Rent','form_name'=>'house_lands.land_commercial_apartment_room']); 
      	\DB::table('categories')->insert(['parent_id' => '5','category_name' => 'Commercial for Sale','form_name'=>'house_lands.land_commercial_apartment_room']);
      	\DB::table('categories')->insert(['parent_id' => '5','category_name' => 'Commercial for Rent','form_name'=>'house_lands.land_commercial_apartment_room']);
      	\DB::table('categories')->insert(['parent_id' => '5','category_name' => 'Room for Rent','form_name'=>'house_lands.land_commercial_apartment_room']);
      	\DB::table('categories')->insert(['parent_id' => '5','category_name' => 'Properties Wanted','form_name'=>'house_lands.properties_wanted_agent_other']);
      	\DB::table('categories')->insert(['parent_id' => '5','category_name' => 'Agent Services','form_name'=>'house_lands.properties_wanted_agent_other']);
      	\DB::table('categories')->insert(['parent_id' => '5','category_name' => 'Others','form_name'=>'house_lands.properties_wanted_agent_other']);
      // Jobs
      	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Accounting','form_name'=>'jobs']);
      	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Administration','form_name'=>'jobs']);
      	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Assistant/Secretary','form_name'=>'jobs']);
      	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Audit/Taxation','form_name'=>'jobs']); 	
      	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Banking/Insurance','form_name'=>'jobs']);
      	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Cashier/Receptionist','form_name'=>'jobs']);
      	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Catering/Restaurant','form_name'=>'jobs']);
      	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Cleaner/Maid','form_name'=>'jobs']);
      	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Consultancy','form_name'=>'jobs']);
      	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Customer Service','form_name'=>'jobs']);
      	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Design','form_name'=>'jobs']);
      	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Education/Training','form_name'=>'jobs']);
      	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Finance','form_name'=>'jobs']);
      	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Freight/Shipping /Delivery/Warehouse','form_name'=>'jobs']);
      	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Hotel/Hospitality','form_name'=>'jobs']);
      	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Human Resource','form_name'=>'jobs']);
      	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Information Technology','form_name'=>'jobs']);
      	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Lawyer/Legal Service','form_name'=>'jobs']);
      	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Management','form_name'=>'jobs']);
      	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Manufacturing','form_name'=>'jobs']);
      	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Marketing','form_name'=>'jobs']);
      	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Media/Advertising','form_name'=>'jobs']);
      	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Medical/Health/Nursing','form_name'=>'jobs']);
      	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Merchandising/Purchasing','form_name'=>'jobs']); 	
      	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Operations','form_name'=>'jobs']);
      	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Project Management','form_name'=>'jobs']);
      	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Quality Control','form_name'=>'jobs']);
      	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Resort/Casino','form_name'=>'jobs']);
      	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Sales','form_name'=>'jobs']);
      	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Security/Driver','form_name'=>'jobs']);
      	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Technician','form_name'=>'jobs']);
      	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Telecommunication','form_name'=>'jobs']);
      	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Translation/Interpretation','form_name'=>'jobs']);
      	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Travel Agent/Ticket Sales','form_name'=>'jobs']);
      	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Others','form_name'=>'jobs']);
      // Services
      	\DB::table('categories')->insert(['parent_id' => '7','category_name' => 'Accounting','form_name'=>'services']);
      	\DB::table('categories')->insert(['parent_id' => '7','category_name' => 'Automotive','form_name'=>'services']);
      	\DB::table('categories')->insert(['parent_id' => '7','category_name' => 'Advertising & Media','form_name'=>'services']);
      	\DB::table('categories')->insert(['parent_id' => '7','category_name' => 'Bridal Services','form_name'=>'services']);
      	\DB::table('categories')->insert(['parent_id' => '7','category_name' => 'Cleaning & Maid Services','form_name'=>'services']);
      	\DB::table('categories')->insert(['parent_id' => '7','category_name' => 'Construction, Arch. & Interiors','form_name'=>'services']);
      	\DB::table('categories')->insert(['parent_id' => '7','category_name' => 'Education & Training','form_name'=>'services']);
      	\DB::table('categories')->insert(['parent_id' => '7','category_name' => 'Engineering','form_name'=>'services']);
      	\DB::table('categories')->insert(['parent_id' => '7','category_name' => 'Insurance','form_name'=>'services']);
      	\DB::table('categories')->insert(['parent_id' => '7','category_name' => 'Massage & Spa','form_name'=>'services']);
      	\DB::table('categories')->insert(['parent_id' => '7','category_name' => 'Hospitality, Travel & Tourism','form_name'=>'services']);
      	\DB::table('categories')->insert(['parent_id' => '7','category_name' => 'Health, Medical & Pharma','form_name'=>'services']);
      	\DB::table('categories')->insert(['parent_id' => '7','category_name' => 'IT & Telecom','form_name'=>'services']);
      	\DB::table('categories')->insert(['parent_id' => '7','category_name' => 'Interior Design & Renovation','form_name'=>'services']);
      	\DB::table('categories')->insert(['parent_id' => '7','category_name' => 'Legal','form_name'=>'services']);
      	\DB::table('categories')->insert(['parent_id' => '7','category_name' => 'Movers & Logistics','form_name'=>'services']);
      	\DB::table('categories')->insert(['parent_id' => '7','category_name' => 'Plumbing & Electrical','form_name'=>'services']);
      	\DB::table('categories')->insert(['parent_id' => '7','category_name' => 'Property & Real Estate','form_name'=>'services']);
      	\DB::table('categories')->insert(['parent_id' => '7','category_name' => 'Science','form_name'=>'services']);
      	\DB::table('categories')->insert(['parent_id' => '7','category_name' => 'Supply Chain & Logistics','form_name'=>'services']);
      	\DB::table('categories')->insert(['parent_id' => '7','category_name' => 'Printing & Publishing','form_name'=>'services']);
      	\DB::table('categories')->insert(['parent_id' => '7','category_name' => 'Other Services','form_name'=>'services']);
      // Fashion & Beauty
      	\DB::table('categories')->insert(['parent_id' => '8','category_name' => 'Jewelry, watches','form_name'=>'fashion_beauty.jewelry_watches']);
      	\DB::table('categories')->insert(['parent_id' => '8','category_name' => 'Clothing, accessories','form_name'=>'fashion_beauty.clothing_accessories']);
      	\DB::table('categories')->insert(['parent_id' => '8','category_name' => 'Beauty & Healthcare','form_name'=>'fashion_beauty.beauty_healthcare']);
      // Book Sport & Hobbies
      	\DB::table('categories')->insert(['parent_id' => '9','category_name' => 'CDS, DVDS, VHS','form_name'=>'book_sport_hobbies']);
      	\DB::table('categories')->insert(['parent_id' => '9','category_name' => 'Books','form_name'=>'book_sport_hobbies']);
      	\DB::table('categories')->insert(['parent_id' => '9','category_name' => 'Sports Equipment','form_name'=>'book_sport_hobbies']);
      	\DB::table('categories')->insert(['parent_id' => '9','category_name' => 'Others','form_name'=>'book_sport_hobbies']);
      // Furniture and Deco
      	\DB::table('categories')->insert(['parent_id' => '10','category_name' => 'Household Items','form_name'=>'furniture_decos']);
      	\DB::table('categories')->insert(['parent_id' => '10','category_name' => 'Office Furniture','form_name'=>'furniture_decos']);
      	\DB::table('categories')->insert(['parent_id' => '10','category_name' => 'Home Furniture','form_name'=>'furniture_decos']);
      	\DB::table('categories')->insert(['parent_id' => '10','category_name' => 'Kitchenware','form_name'=>'furniture_decos']);
      	\DB::table('categories')->insert(['parent_id' => '10','category_name' => 'Handicrafts Paintings','form_name'=>'furniture_decos']);
      // Pets
      	\DB::table('categories')->insert(['parent_id' => '11','category_name' => 'Dogs','form_name'=>'pets']);
      	\DB::table('categories')->insert(['parent_id' => '11','category_name' => 'Cats','form_name'=>'pets']);
      	\DB::table('categories')->insert(['parent_id' => '11','category_name' => 'Birds','form_name'=>'pets']);
      	\DB::table('categories')->insert(['parent_id' => '11','category_name' => 'Fish','form_name'=>'pets']);
      	\DB::table('categories')->insert(['parent_id' => '11','category_name' => 'Pet Food','form_name'=>'pets']);
      	\DB::table('categories')->insert(['parent_id' => '11','category_name' => 'Pet Accessories','form_name'=>'pets']);
      	\DB::table('categories')->insert(['parent_id' => '11','category_name' => 'Other','form_name'=>'pets']);
      // Foods
      	\DB::table('categories')->insert(['parent_id' => '12','category_name' => 'Meat','form_name'=>'foods']);
      	\DB::table('categories')->insert(['parent_id' => '12','category_name' => 'Seafood','form_name'=>'foods']);
      	\DB::table('categories')->insert(['parent_id' => '12','category_name' => 'Fruits','form_name'=>'foods']);
      	\DB::table('categories')->insert(['parent_id' => '12','category_name' => 'Vegetables','form_name'=>'foods']);
      	\DB::table('categories')->insert(['parent_id' => '12','category_name' => 'Beverages','form_name'=>'foods']);
      	\DB::table('categories')->insert(['parent_id' => '12','category_name' => 'Grocery','form_name'=>'foods']);
      	\DB::table('categories')->insert(['parent_id' => '12','category_name' => 'Bread & Bakery','form_name'=>'foods']);
      	\DB::table('categories')->insert(['parent_id' => '12','category_name' => 'Beer & Wine','form_name'=>'foods']);
      	\DB::table('categories')->insert(['parent_id' => '12','category_name' => 'Rice & Cereal','form_name'=>'foods']);
      	\DB::table('categories')->insert(['parent_id' => '12','category_name' => 'Other','form_name'=>'foods']);

  }
}
