<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
  public function run()
  {
  	\DB::table('categories')->truncate();
  	// categories
    	\DB::table('categories')->insert(['parent_id' => '0','type_id'=>'0','sub_type_id'=>'0','slug'=>'phones-and-tablets', 'category_name' => 'Phones & Tablets','icon'=>'mobile-phones-tablets.png']);
    	\DB::table('categories')->insert(['parent_id' => '0','type_id'=>'0','sub_type_id'=>'0','slug'=>'computers-and-accessories', 'category_name' => 'Computers & Accessories','icon'=>'computer-and-accessories.png']);
    	\DB::table('categories')->insert(['parent_id' => '0','type_id'=>'0','sub_type_id'=>'0','slug'=>'electronics-and-appliances', 'category_name' => 'Electronics & Appliances','icon'=>'electronics-appliances.png']);
    	\DB::table('categories')->insert(['parent_id' => '0','type_id'=>'0','sub_type_id'=>'0','slug'=>'cars-and-vehicles', 'category_name' => 'Cars and Vehicles','icon'=>'cars-and-vehicles.png']);
    	\DB::table('categories')->insert(['parent_id' => '0','type_id'=>'0','sub_type_id'=>'0','slug'=>'house-and-land', 'category_name' => ' House & Lands','icon'=>'property-housing-rentals.png','is_active'=>1]);
    	\DB::table('categories')->insert(['parent_id' => '0', 'type_id'=>'0','sub_type_id'=>'0', 'slug' => 'jobs','category_name' => 'Jobs','icon'=>'jobs.png']);
      \DB::table('categories')->insert(['parent_id' => '0', 'type_id'=>'0','sub_type_id'=>'0', 'slug' => 'services','category_name' => 'Services','icon'=>'services.png']);
      \DB::table('categories')->insert(['parent_id' => '0', 'type_id'=>'0','sub_type_id'=>'0', 'slug' => 'fashion-and-beauty','category_name' => 'Fashion & Beauty','icon'=>'fashion-beauty.png']);
      \DB::table('categories')->insert(['parent_id' => '0', 'type_id'=>'0','sub_type_id'=>'0', 'slug' => 'books-sports-hobbies','category_name' => 'Books, Sports & Hobbies','icon'=>'books-sports-hobbies.png']);
      \DB::table('categories')->insert(['parent_id' => '0', 'type_id'=>'0','sub_type_id'=>'0', 'slug' => 'furniture-decor','category_name' => 'Furniture & Decor','icon'=>'furniture-decor.png']);
      \DB::table('categories')->insert(['parent_id' => '0', 'type_id'=>'0','sub_type_id'=>'0', 'slug' => 'pets','category_name' => 'Pets','icon'=>'pets.png']);      
      \DB::table('categories')->insert(['parent_id' => '0', 'type_id'=>'0','sub_type_id'=>'0', 'slug' => 'foods','category_name' => 'foods','icon'=>'foods.png']);  	  	  	  	  	  	  	

    // parent_category
      // Phones, Tablets
      	\DB::table('categories')->insert(['parent_id' => '1','type_id'=>'0','sub_type_id'=>'0','slug'=>'phone-and-tablets', 'category_name' => 'Phones, Tablets','form_name'=>'phone_tablets.phone']);
      	\DB::table('categories')->insert(['parent_id' => '1','type_id'=>'0','sub_type_id'=>'0','slug'=>'smart-watches', 'category_name' => 'Smart Watches','form_name'=>'phone_tablets.watch']);
      	\DB::table('categories')->insert(['parent_id' => '1','type_id'=>'0','sub_type_id'=>'0','slug'=>'phone-and-ccessories', 'category_name' => 'Phone Accessories','form_name'=>'phone_tablets.accessories']);
      	\DB::table('categories')->insert(['parent_id' => '1','type_id'=>'0','sub_type_id'=>'0','slug'=>'phone-and-numbers', 'category_name' => 'Phone Numbers','form_name'=>'phone_tablets.number']);
      // Computers & Accessories
      	\DB::table('categories')->insert(['parent_id' => '2','type_id'=>'0','sub_type_id'=>'0','slug'=>'computers', 'category_name' => 'Computers','form_name'=>'computer_accessories.computer']);
      	\DB::table('categories')->insert(['parent_id' => '2','type_id'=>'0','sub_type_id'=>'0','slug'=>'computer-accessories', 'category_name' => 'Computer accessories','form_name'=>'computer_accessories.accessories']);
      	\DB::table('categories')->insert(['parent_id' => '2','type_id'=>'0','sub_type_id'=>'0','slug'=>'softwares', 'category_name' => 'Softwares','form_name'=>'computer_accessories.software']);
      // Consumer Electronics
      	\DB::table('categories')->insert(['parent_id' => '3','type_id'=>'0','sub_type_id'=>'0','slug'=>'consumer-electronics', 'category_name' => 'Consumer Electronics','form_name'=>'electronic_appliances.electronic']); 	
      	\DB::table('categories')->insert(['parent_id' => '3','type_id'=>'0','sub_type_id'=>'0','slug'=>'security-camera', 'category_name' => 'Security Camera','form_name'=>'electronic_appliances.camera']);
      	\DB::table('categories')->insert(['parent_id' => '3','type_id'=>'0','sub_type_id'=>'0','slug'=>'cameras-and-camcorders', 'category_name' => 'Cameras, camcorders','form_name'=>'electronic_appliances.camcorder']);
      	\DB::table('categories')->insert(['parent_id' => '3','type_id'=>'0','sub_type_id'=>'0','slug'=>'tv-videos-and-audios', 'category_name' => 'TVs, Videos and Audios','form_name'=>'electronic_appliances.appliance_game_tv_video_audio']);
      	\DB::table('categories')->insert(['parent_id' => '3','type_id'=>'0','sub_type_id'=>'0','slug'=>'home-appliances', 'category_name' => 'Home appliances','form_name'=>'electronic_appliances.appliance_game_tv_video_audio']);
      	\DB::table('categories')->insert(['parent_id' => '3','type_id'=>'0','sub_type_id'=>'0','slug'=>'video-games-consoles-toys', 'category_name' => 'Video games, consoles, toys','form_name'=>'electronic_appliances.appliance_game_tv_video_audio']);
      // Electronic & Appliances
      	\DB::table('categories')->insert(['parent_id' => '4','type_id'=>'0','sub_type_id'=>'0','slug'=>'cars-for-sale', 'category_name' => 'Cars for Sale','form_name'=>'car_vehicles.car_sale']);
      	\DB::table('categories')->insert(['parent_id' => '4','type_id'=>'0','sub_type_id'=>'0','slug'=>'bicycles', 'category_name' => 'Bicycles','form_name'=>'car_vehicles.bicycle']);
      	\DB::table('categories')->insert(['parent_id' => '4','type_id'=>'0','sub_type_id'=>'0','slug'=>'motorcycles-for-sale', 'category_name' => 'Motorcycles for Sale','form_name'=>'car_vehicles.motocycle']);
      	\DB::table('categories')->insert(['parent_id' => '4','type_id'=>'0','sub_type_id'=>'0','slug'=>'vehicles-for-ent', 'category_name' => 'Vehicles for Rent','form_name'=>'car_vehicles.vehicle_rent']);
      	\DB::table('categories')->insert(['parent_id' => '4','type_id'=>'0','sub_type_id'=>'0','slug'=>'car-maintenance-and-repair', 'category_name' => 'Car Maintenance & Repair','form_name'=>'car_vehicles.repaire_insurance']); 	
      	\DB::table('categories')->insert(['parent_id' => '4','type_id'=>'0','sub_type_id'=>'0','slug'=>'lorries-and-vans', 'category_name' => 'Lorries & Vans','form_name'=>'car_vehicles.accessories_lorries_vans']);
      	\DB::table('categories')->insert(['parent_id' => '4','type_id'=>'0','sub_type_id'=>'0','slug'=>'financing-and-insurance', 'category_name' => 'Financing & Insurance','form_name'=>'car_vehicles.repaire_insurance']);
      	\DB::table('categories')->insert(['parent_id' => '4','type_id'=>'0','sub_type_id'=>'0','slug'=>'car-parts-and-accessories', 'category_name' => 'Car Parts & Accessories','form_name'=>'car_vehicles.accessories_lorries_vans']);
      	\DB::table('categories')->insert(['parent_id' => '4','type_id'=>'0','sub_type_id'=>'0','slug'=>'others', 'category_name' => 'Others','form_name'=>'car_vehicles.others']);
      // House & Land
      	\DB::table('categories')->insert(['parent_id' => '5','type_id'=>'1','sub_type_id'=>'1','slug'=>'house-for-sale', 'category_name' => 'House for Sale','form_name'=>'house_lands.house']);
      	\DB::table('categories')->insert(['parent_id' => '5','type_id'=>'1','sub_type_id'=>'2','slug'=>'house-for-rent', 'category_name' => 'House for Rent','form_name'=>'house_lands.house']);
      	\DB::table('categories')->insert(['parent_id' => '5','type_id'=>'3','sub_type_id'=>'1','slug'=>'apartment-for-sale', 'category_name' => 'Apartment for Sale','form_name'=>'house_lands.land_commercial_apartment_room']);
      	\DB::table('categories')->insert(['parent_id' => '5','type_id'=>'3','sub_type_id'=>'2','slug'=>'apartment-for-rent', 'category_name' => 'Apartment for Rent','form_name'=>'house_lands.land_commercial_apartment_room']);
      	\DB::table('categories')->insert(['parent_id' => '5','type_id'=>'2','sub_type_id'=>'1','slug'=>'land-for-sale', 'category_name' => 'Land for Sale','form_name'=>'house_lands.land_commercial_apartment_room','is_active'=>1]);
      	\DB::table('categories')->insert(['parent_id' => '5','type_id'=>'2','sub_type_id'=>'2','slug'=>'land-for-rent', 'category_name' => 'Land for Rent','form_name'=>'house_lands.land_commercial_apartment_room','is_active'=>1]); 
      	\DB::table('categories')->insert(['parent_id' => '5','type_id'=>'4','sub_type_id'=>'1','slug'=>'commercial-for-sale', 'category_name' => 'Commercial for Sale','form_name'=>'house_lands.land_commercial_apartment_room']);
      	\DB::table('categories')->insert(['parent_id' => '5','type_id'=>'4','sub_type_id'=>'2','slug'=>'commercial-for-rent', 'category_name' => 'Commercial for Rent','form_name'=>'house_lands.land_commercial_apartment_room']);
      	\DB::table('categories')->insert(['parent_id' => '5','type_id'=>'5','sub_type_id'=>'1','slug'=>'room-for-rent', 'category_name' => 'Room for Rent','form_name'=>'house_lands.land_commercial_apartment_room']);
      	\DB::table('categories')->insert(['parent_id' => '5','type_id'=>'6','sub_type_id'=>'1','slug'=>'properties-wanted', 'category_name' => 'Properties Wanted','form_name'=>'house_lands.properties_wanted_agent_other']);
      	\DB::table('categories')->insert(['parent_id' => '5','type_id'=>'7','sub_type_id'=>'1','slug'=>'agent-services', 'category_name' => 'Agent Services','form_name'=>'house_lands.properties_wanted_agent_other']);
      	\DB::table('categories')->insert(['parent_id' => '5','type_id'=>'8','sub_type_id'=>'1','slug'=>'others', 'category_name' => 'Others','form_name'=>'house_lands.properties_wanted_agent_other']);
      // Jobs
      	\DB::table('categories')->insert(['parent_id' => '6','type_id'=>'0','sub_type_id'=>'0','slug'=>'accounting', 'category_name' => 'Accounting','form_name'=>'jobs']);
      	\DB::table('categories')->insert(['parent_id' => '6','type_id'=>'0','sub_type_id'=>'0','slug'=>'administration', 'category_name' => 'Administration','form_name'=>'jobs']);
      	\DB::table('categories')->insert(['parent_id' => '6','type_id'=>'0','sub_type_id'=>'0','slug'=>'assistant-secretary', 'category_name' => 'Assistant/Secretary','form_name'=>'jobs']);
      	\DB::table('categories')->insert(['parent_id' => '6','type_id'=>'0','sub_type_id'=>'0','slug'=>'audit-taxation', 'category_name' => 'Audit/Taxation','form_name'=>'jobs']); 	
      	\DB::table('categories')->insert(['parent_id' => '6','type_id'=>'0','sub_type_id'=>'0','slug'=>'banking-insurance', 'category_name' => 'Banking/Insurance','form_name'=>'jobs']);
      	\DB::table('categories')->insert(['parent_id' => '6','type_id'=>'0','sub_type_id'=>'0','slug'=>'cashier-receptionist', 'category_name' => 'Cashier/Receptionist','form_name'=>'jobs']);
      	\DB::table('categories')->insert(['parent_id' => '6','type_id'=>'0','sub_type_id'=>'0','slug'=>'catering-restaurant', 'category_name' => 'Catering/Restaurant','form_name'=>'jobs']);
      	\DB::table('categories')->insert(['parent_id' => '6','type_id'=>'0','sub_type_id'=>'0','slug'=>'cleaner-maid', 'category_name' => 'Cleaner/Maid','form_name'=>'jobs']);
      	\DB::table('categories')->insert(['parent_id' => '6','type_id'=>'0','sub_type_id'=>'0','slug'=>'consultancy', 'category_name' => 'Consultancy','form_name'=>'jobs']);
      	\DB::table('categories')->insert(['parent_id' => '6','type_id'=>'0','sub_type_id'=>'0','slug'=>'customer-service', 'category_name' => 'Customer Service','form_name'=>'jobs']);
      	\DB::table('categories')->insert(['parent_id' => '6','type_id'=>'0','sub_type_id'=>'0','slug'=>'design', 'category_name' => 'Design','form_name'=>'jobs']);
      	\DB::table('categories')->insert(['parent_id' => '6','type_id'=>'0','sub_type_id'=>'0','slug'=>'education-training', 'category_name' => 'Education/Training','form_name'=>'jobs']);
      	\DB::table('categories')->insert(['parent_id' => '6','type_id'=>'0','sub_type_id'=>'0','slug'=>'finance', 'category_name' => 'Finance','form_name'=>'jobs']);
      	\DB::table('categories')->insert(['parent_id' => '6','type_id'=>'0','sub_type_id'=>'0','slug'=>'freight-shipping-delivery-warehouse', 'category_name' => 'Freight/Shipping /Delivery/Warehouse','form_name'=>'jobs']);
      	\DB::table('categories')->insert(['parent_id' => '6','type_id'=>'0','sub_type_id'=>'0','slug'=>'hotel-hospitality', 'category_name' => 'Hotel/Hospitality','form_name'=>'jobs']);
      	\DB::table('categories')->insert(['parent_id' => '6','type_id'=>'0','sub_type_id'=>'0','slug'=>'human-resource', 'category_name' => 'Human Resource','form_name'=>'jobs']);
      	\DB::table('categories')->insert(['parent_id' => '6','type_id'=>'0','sub_type_id'=>'0','slug'=>'information-technology', 'category_name' => 'Information Technology','form_name'=>'jobs']);
      	\DB::table('categories')->insert(['parent_id' => '6','type_id'=>'0','sub_type_id'=>'0','slug'=>'lawyer-legal-service', 'category_name' => 'Lawyer/Legal Service','form_name'=>'jobs']);
      	\DB::table('categories')->insert(['parent_id' => '6','type_id'=>'0','sub_type_id'=>'0','slug'=>'management', 'category_name' => 'Management','form_name'=>'jobs']);
      	\DB::table('categories')->insert(['parent_id' => '6','type_id'=>'0','sub_type_id'=>'0','slug'=>'manufacturing', 'category_name' => 'Manufacturing','form_name'=>'jobs']);
      	\DB::table('categories')->insert(['parent_id' => '6','type_id'=>'0','sub_type_id'=>'0','slug'=>'marketing', 'category_name' => 'Marketing','form_name'=>'jobs']);
      	\DB::table('categories')->insert(['parent_id' => '6','type_id'=>'0','sub_type_id'=>'0','slug'=>'media-advertising', 'category_name' => 'Media/Advertising','form_name'=>'jobs']);
      	\DB::table('categories')->insert(['parent_id' => '6','type_id'=>'0','sub_type_id'=>'0','slug'=>'medical-health-nursing', 'category_name' => 'Medical/Health/Nursing','form_name'=>'jobs']);
      	\DB::table('categories')->insert(['parent_id' => '6','type_id'=>'0','sub_type_id'=>'0','slug'=>'merchandising-purchasing', 'category_name' => 'Merchandising/Purchasing','form_name'=>'jobs']); 	
      	\DB::table('categories')->insert(['parent_id' => '6','type_id'=>'0','sub_type_id'=>'0','slug'=>'operations', 'category_name' => 'Operations','form_name'=>'jobs']);
      	\DB::table('categories')->insert(['parent_id' => '6','type_id'=>'0','sub_type_id'=>'0','slug'=>'project-management', 'category_name' => 'Project Management','form_name'=>'jobs']);
      	\DB::table('categories')->insert(['parent_id' => '6','type_id'=>'0','sub_type_id'=>'0','slug'=>'quality-control', 'category_name' => 'Quality Control','form_name'=>'jobs']);
      	\DB::table('categories')->insert(['parent_id' => '6','type_id'=>'0','sub_type_id'=>'0','slug'=>'resort-casino', 'category_name' => 'Resort/Casino','form_name'=>'jobs']);
      	\DB::table('categories')->insert(['parent_id' => '6','type_id'=>'0','sub_type_id'=>'0','slug'=>'sales', 'category_name' => 'Sales','form_name'=>'jobs']);
      	\DB::table('categories')->insert(['parent_id' => '6','type_id'=>'0','sub_type_id'=>'0','slug'=>'security-driver', 'category_name' => 'Security/Driver','form_name'=>'jobs']);
      	\DB::table('categories')->insert(['parent_id' => '6','type_id'=>'0','sub_type_id'=>'0','slug'=>'technician', 'category_name' => 'Technician','form_name'=>'jobs']);
      	\DB::table('categories')->insert(['parent_id' => '6','type_id'=>'0','sub_type_id'=>'0','slug'=>'telecommunication', 'category_name' => 'Telecommunication','form_name'=>'jobs']);
      	\DB::table('categories')->insert(['parent_id' => '6','type_id'=>'0','sub_type_id'=>'0','slug'=>'translation-interpretation', 'category_name' => 'Translation/Interpretation','form_name'=>'jobs']);
      	\DB::table('categories')->insert(['parent_id' => '6','type_id'=>'0','sub_type_id'=>'0','slug'=>'travel-agent-and-ticket-sales', 'category_name' => 'Travel Agent/Ticket Sales','form_name'=>'jobs']);
      	\DB::table('categories')->insert(['parent_id' => '6','type_id'=>'0','sub_type_id'=>'0','slug'=>'others', 'category_name' => 'Others','form_name'=>'jobs']);
      // Services
      	\DB::table('categories')->insert(['parent_id' => '7','type_id'=>'0','sub_type_id'=>'0','slug'=>'accounting', 'category_name' => 'Accounting','form_name'=>'services']);
      	\DB::table('categories')->insert(['parent_id' => '7','type_id'=>'0','sub_type_id'=>'0','slug'=>'automotive', 'category_name' => 'Automotive','form_name'=>'services']);
      	\DB::table('categories')->insert(['parent_id' => '7','type_id'=>'0','sub_type_id'=>'0','slug'=>'advertising-and-media', 'category_name' => 'Advertising & Media','form_name'=>'services']);
      	\DB::table('categories')->insert(['parent_id' => '7','type_id'=>'0','sub_type_id'=>'0','slug'=>'bridal-services', 'category_name' => 'Bridal Services','form_name'=>'services']);
      	\DB::table('categories')->insert(['parent_id' => '7','type_id'=>'0','sub_type_id'=>'0','slug'=>'cleaning-and-maid-services', 'category_name' => 'Cleaning & Maid Services','form_name'=>'services']);
      	\DB::table('categories')->insert(['parent_id' => '7','type_id'=>'0','sub_type_id'=>'0','slug'=>'construction', 'category_name' => 'Construction, Arch. & Interiors','form_name'=>'services']);
      	\DB::table('categories')->insert(['parent_id' => '7','type_id'=>'0','sub_type_id'=>'0','slug'=>'education-and-training', 'category_name' => 'Education & Training','form_name'=>'services']);
      	\DB::table('categories')->insert(['parent_id' => '7','type_id'=>'0','sub_type_id'=>'0','slug'=>'engineering', 'category_name' => 'Engineering','form_name'=>'services']);
      	\DB::table('categories')->insert(['parent_id' => '7','type_id'=>'0','sub_type_id'=>'0','slug'=>'insurance', 'category_name' => 'Insurance','form_name'=>'services']);
      	\DB::table('categories')->insert(['parent_id' => '7','type_id'=>'0','sub_type_id'=>'0','slug'=>'massage-and-spa', 'category_name' => 'Massage & Spa','form_name'=>'services']);
      	\DB::table('categories')->insert(['parent_id' => '7','type_id'=>'0','sub_type_id'=>'0','slug'=>'hospitality-travel-and-tourism', 'category_name' => 'Hospitality, Travel & Tourism','form_name'=>'services']);
      	\DB::table('categories')->insert(['parent_id' => '7','type_id'=>'0','sub_type_id'=>'0','slug'=>'health-medical-and-pharma', 'category_name' => 'Health, Medical & Pharma','form_name'=>'services']);
      	\DB::table('categories')->insert(['parent_id' => '7','type_id'=>'0','sub_type_id'=>'0','slug'=>'it-and-telecom', 'category_name' => 'IT & Telecom','form_name'=>'services']);
      	\DB::table('categories')->insert(['parent_id' => '7','type_id'=>'0','sub_type_id'=>'0','slug'=>'interior-design-and-renovation', 'category_name' => 'Interior Design & Renovation','form_name'=>'services']);
      	\DB::table('categories')->insert(['parent_id' => '7','type_id'=>'0','sub_type_id'=>'0','slug'=>'legal', 'category_name' => 'Legal','form_name'=>'services']);
      	\DB::table('categories')->insert(['parent_id' => '7','type_id'=>'0','sub_type_id'=>'0','slug'=>'movers-and-logistics', 'category_name' => 'Movers & Logistics','form_name'=>'services']);
      	\DB::table('categories')->insert(['parent_id' => '7','type_id'=>'0','sub_type_id'=>'0','slug'=>'plumbing-and-electrical', 'category_name' => 'Plumbing & Electrical','form_name'=>'services']);
      	\DB::table('categories')->insert(['parent_id' => '7','type_id'=>'0','sub_type_id'=>'0','slug'=>'property-and-real-estate', 'category_name' => 'Property & Real Estate','form_name'=>'services']);
      	\DB::table('categories')->insert(['parent_id' => '7','type_id'=>'0','sub_type_id'=>'0','slug'=>'science', 'category_name' => 'Science','form_name'=>'services']);
      	\DB::table('categories')->insert(['parent_id' => '7','type_id'=>'0','sub_type_id'=>'0','slug'=>'supply-chain-and-logistics', 'category_name' => 'Supply Chain & Logistics','form_name'=>'services']);
      	\DB::table('categories')->insert(['parent_id' => '7','type_id'=>'0','sub_type_id'=>'0','slug'=>'printing-and-publishing', 'category_name' => 'Printing & Publishing','form_name'=>'services']);
      	\DB::table('categories')->insert(['parent_id' => '7','type_id'=>'0','sub_type_id'=>'0','slug'=>'other-services', 'category_name' => 'Other Services','form_name'=>'services']);
      // Fashion & Beauty
      	\DB::table('categories')->insert(['parent_id' => '8','type_id'=>'0','sub_type_id'=>'0','slug'=>'jewelry-watches', 'category_name' => 'Jewelry, watches','form_name'=>'fashion_beauty.jewelry_watches']);
      	\DB::table('categories')->insert(['parent_id' => '8','type_id'=>'0','sub_type_id'=>'0','slug'=>'clothing-accessories', 'category_name' => 'Clothing, accessories','form_name'=>'fashion_beauty.clothing_accessories']);
      	\DB::table('categories')->insert(['parent_id' => '8','type_id'=>'0','sub_type_id'=>'0','slug'=>'beauty-and-healthcare', 'category_name' => 'Beauty & Healthcare','form_name'=>'fashion_beauty.beauty_healthcare']);
      // Book Sport & Hobbies
      	\DB::table('categories')->insert(['parent_id' => '9','type_id'=>'0','sub_type_id'=>'0','slug'=>'cds-dvds-vhs', 'category_name' => 'CDS, DVDS, VHS','form_name'=>'book_sport_hobbies']);
      	\DB::table('categories')->insert(['parent_id' => '9','type_id'=>'0','sub_type_id'=>'0','slug'=>'books', 'category_name' => 'Books','form_name'=>'book_sport_hobbies']);
      	\DB::table('categories')->insert(['parent_id' => '9','type_id'=>'0','sub_type_id'=>'0','slug'=>'sports-equipment', 'category_name' => 'Sports Equipment','form_name'=>'book_sport_hobbies']);
      	\DB::table('categories')->insert(['parent_id' => '9','type_id'=>'0','sub_type_id'=>'0','slug'=>'others', 'category_name' => 'Others','form_name'=>'book_sport_hobbies']);
      // Furniture and Deco
      	\DB::table('categories')->insert(['parent_id' => '10','type_id'=>'0','sub_type_id'=>'0','slug'=>'household-items', 'category_name' => 'Household Items','form_name'=>'furniture_decos']);
      	\DB::table('categories')->insert(['parent_id' => '10','type_id'=>'0','sub_type_id'=>'0','slug'=>'office-furniture', 'category_name' => 'Office Furniture','form_name'=>'furniture_decos']);
      	\DB::table('categories')->insert(['parent_id' => '10','type_id'=>'0','sub_type_id'=>'0','slug'=>'home-furniture', 'category_name' => 'Home Furniture','form_name'=>'furniture_decos']);
      	\DB::table('categories')->insert(['parent_id' => '10','type_id'=>'0','sub_type_id'=>'0','slug'=>'kitchenware', 'category_name' => 'Kitchenware','form_name'=>'furniture_decos']);
      	\DB::table('categories')->insert(['parent_id' => '10','type_id'=>'0','sub_type_id'=>'0','slug'=>'handicrafts-paintings', 'category_name' => 'Handicrafts Paintings','form_name'=>'furniture_decos']);
      // Pets
      	\DB::table('categories')->insert(['parent_id' => '11','type_id'=>'0','sub_type_id'=>'0','slug'=>'dogs', 'category_name' => 'Dogs','form_name'=>'pets']);
      	\DB::table('categories')->insert(['parent_id' => '11','type_id'=>'0','sub_type_id'=>'0','slug'=>'cats', 'category_name' => 'Cats','form_name'=>'pets']);
      	\DB::table('categories')->insert(['parent_id' => '11','type_id'=>'0','sub_type_id'=>'0','slug'=>'birds', 'category_name' => 'Birds','form_name'=>'pets']);
      	\DB::table('categories')->insert(['parent_id' => '11','type_id'=>'0','sub_type_id'=>'0','slug'=>'fish', 'category_name' => 'Fish','form_name'=>'pets']);
      	\DB::table('categories')->insert(['parent_id' => '11','type_id'=>'0','sub_type_id'=>'0','slug'=>'pet-food', 'category_name' => 'Pet Food','form_name'=>'pets']);
      	\DB::table('categories')->insert(['parent_id' => '11','type_id'=>'0','sub_type_id'=>'0','slug'=>'pet-accessories', 'category_name' => 'Pet Accessories','form_name'=>'pets']);
      	\DB::table('categories')->insert(['parent_id' => '11','type_id'=>'0','sub_type_id'=>'0','slug'=>'other', 'category_name' => 'Other','form_name'=>'pets']);
      // Foods
      	\DB::table('categories')->insert(['parent_id' => '12','type_id'=>'0','sub_type_id'=>'0','slug'=>'meat', 'category_name' => 'Meat','form_name'=>'foods']);
      	\DB::table('categories')->insert(['parent_id' => '12','type_id'=>'0','sub_type_id'=>'0','slug'=>'seafood', 'category_name' => 'Seafood','form_name'=>'foods']);
      	\DB::table('categories')->insert(['parent_id' => '12','type_id'=>'0','sub_type_id'=>'0','slug'=>'fruits', 'category_name' => 'Fruits','form_name'=>'foods']);
      	\DB::table('categories')->insert(['parent_id' => '12','type_id'=>'0','sub_type_id'=>'0','slug'=>'vegetables', 'category_name' => 'Vegetables','form_name'=>'foods']);
      	\DB::table('categories')->insert(['parent_id' => '12','type_id'=>'0','sub_type_id'=>'0','slug'=>'beverages', 'category_name' => 'Beverages','form_name'=>'foods']);
      	\DB::table('categories')->insert(['parent_id' => '12','type_id'=>'0','sub_type_id'=>'0','slug'=>'grocery', 'category_name' => 'Grocery','form_name'=>'foods']);
      	\DB::table('categories')->insert(['parent_id' => '12','type_id'=>'0','sub_type_id'=>'0','slug'=>'bread-and-bakery', 'category_name' => 'Bread & Bakery','form_name'=>'foods']);
      	\DB::table('categories')->insert(['parent_id' => '12','type_id'=>'0','sub_type_id'=>'0','slug'=>'beer-and-wine', 'category_name' => 'Beer & Wine','form_name'=>'foods']);
      	\DB::table('categories')->insert(['parent_id' => '12','type_id'=>'0','sub_type_id'=>'0','slug'=>'rice-and-cereal', 'category_name' => 'Rice & Cereal','form_name'=>'foods']);
      	\DB::table('categories')->insert(['parent_id' => '12','type_id'=>'0','sub_type_id'=>'0','slug'=>'others', 'category_name' => 'Other','form_name'=>'foods']);

  }
}
