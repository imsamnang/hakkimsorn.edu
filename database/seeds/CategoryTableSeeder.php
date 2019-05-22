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
  	\DB::table('categories')->insert(['parent_id' => '1','category_name' => 'Phones, Tablets','form_name'=>'phone_tablets.phone.create']);
  	\DB::table('categories')->insert(['parent_id' => '1','category_name' => 'Smart Watches','form_name'=>'phone_tablets.watch.create']);
  	\DB::table('categories')->insert(['parent_id' => '1','category_name' => 'Phone Accessories','form_name'=>'phone_tablets.accessories.create']);
  	\DB::table('categories')->insert(['parent_id' => '1','category_name' => 'Phone Numbers','form_name'=>'phone_tablets.number.create']);

  	\DB::table('categories')->insert(['parent_id' => '2','category_name' => 'Computers','form_name'=>'computer_accessories.computer.create']);
  	\DB::table('categories')->insert(['parent_id' => '2','category_name' => 'Computer accessories','form_name'=>'computer_accessories.accessories.create']);
  	\DB::table('categories')->insert(['parent_id' => '2','category_name' => 'Softwares','form_name'=>'computer_accessories.software.create']);

  	\DB::table('categories')->insert(['parent_id' => '3','category_name' => 'Consumer Electronics','form_name'=>'electronic_appliances.electronic.create']); 	
  	\DB::table('categories')->insert(['parent_id' => '3','category_name' => 'Security Camera','form_name'=>'electronic_appliances.camera.create']);
  	\DB::table('categories')->insert(['parent_id' => '3','category_name' => 'Cameras, camcorders','form_name'=>'electronic_appliances.camcorder.create']);
  	\DB::table('categories')->insert(['parent_id' => '3','category_name' => 'TVs, Videos and Audios','form_name'=>'electronic_appliances.appliance_game_tv_video_audio.create']);
  	\DB::table('categories')->insert(['parent_id' => '3','category_name' => 'Home appliances','form_name'=>'electronic_appliances.appliance_game_tv_video_audio.create']);
  	\DB::table('categories')->insert(['parent_id' => '3','category_name' => 'Video games, consoles, toys','form_name'=>'electronic_appliances.appliance_game_tv_video_audio.create']);

  	\DB::table('categories')->insert(['parent_id' => '4','category_name' => 'Cars for Sale','form_name'=>'car_vehicles.car_sale.create']);
  	\DB::table('categories')->insert(['parent_id' => '4','category_name' => 'Bicycles','form_name'=>'car_vehicles.bicycle.create']);
  	\DB::table('categories')->insert(['parent_id' => '4','category_name' => 'Motorcycles for Sale','form_name'=>'car_vehicles.motocycle.create']);
  	\DB::table('categories')->insert(['parent_id' => '4','category_name' => 'Vehicles for Rent','form_name'=>'car_vehicles.vehicle_rent.create']);
  	\DB::table('categories')->insert(['parent_id' => '4','category_name' => 'Car Maintenance & Repair','form_name'=>'car_vehicles.repaire_insurance.create']); 	
  	\DB::table('categories')->insert(['parent_id' => '4','category_name' => 'Lorries & Vans','form_name'=>'car_vehicles.accessories_lorries_vans.create']);
  	\DB::table('categories')->insert(['parent_id' => '4','category_name' => 'Financing & Insurance','form_name'=>'car_vehicles.repaire_insurance.create']);
  	\DB::table('categories')->insert(['parent_id' => '4','category_name' => 'Car Parts & Accessories','form_name'=>'car_vehicles.accessories_lorries_vans.create']);
  	\DB::table('categories')->insert(['parent_id' => '4','category_name' => 'Others','form_name'=>'car_vehicles.others.create']);

  	\DB::table('categories')->insert(['parent_id' => '5','category_name' => 'House for Sale','form_name'=>'house_lands.house.create']);
  	\DB::table('categories')->insert(['parent_id' => '5','category_name' => 'House for Rent','form_name'=>'house_lands.house.create']);
  	\DB::table('categories')->insert(['parent_id' => '5','category_name' => 'Apartment for Sale','form_name'=>'house_lands.land_commercial_apartment_room.create']);
  	\DB::table('categories')->insert(['parent_id' => '5','category_name' => 'Apartment for Rent','form_name'=>'house_lands.land_commercial_apartment_room.create']);
  	\DB::table('categories')->insert(['parent_id' => '5','category_name' => 'Land for Sale','form_name'=>'house_lands.land_commercial_apartment_room.create']);
  	\DB::table('categories')->insert(['parent_id' => '5','category_name' => 'Land for Rent','form_name'=>'house_lands.land_commercial_apartment_room.create']); 
  	\DB::table('categories')->insert(['parent_id' => '5','category_name' => 'Commercial for Sale','form_name'=>'house_lands.land_commercial_apartment_room.create']);
  	\DB::table('categories')->insert(['parent_id' => '5','category_name' => 'Commercial for Rent','form_name'=>'house_lands.land_commercial_apartment_room.create']);
  	\DB::table('categories')->insert(['parent_id' => '5','category_name' => 'Room for Rent','form_name'=>'house_lands.land_commercial_apartment_room.create']);
  	\DB::table('categories')->insert(['parent_id' => '5','category_name' => 'Properties Wanted','form_name'=>'house_lands.properties_wanted_agent_other.create']);
  	\DB::table('categories')->insert(['parent_id' => '5','category_name' => 'Agent Services','form_name'=>'house_lands.properties_wanted_agent_other.create']);
  	\DB::table('categories')->insert(['parent_id' => '5','category_name' => 'Others','form_name'=>'house_lands.properties_wanted_agent_other.create']);

  	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Accounting','form_name'=>'jobs.accounting.create']);
  	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Administration','form_name'=>'jobs.administration.create']);
  	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Assistant/Secretary','form_name'=>'jobs.assistant_secretary.create']);
  	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Audit/Taxation','form_name'=>'jobs.audit_taxation.create']); 	
  	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Banking/Insurance','form_name'=>'jobs.banking_insurance.create']);
  	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Cashier/Receptionist','form_name'=>'jobs.cashier_receptionist.create']);
  	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Catering/Restaurant','form_name'=>'jobs.catering_restaurant.create']);
  	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Cleaner/Maid','form_name'=>'jobs.cleaner_maid.create']);
  	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Consultancy','form_name'=>'jobs.consultancy.create']);
  	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Customer Service','form_name'=>'jobs.customer_service.create']);
  	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Design','form_name'=>'jobs.design.create']);
  	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Education/Training','form_name'=>'jobs.education_training.create']);
  	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Finance','form_name'=>'jobs.finance.create']);
  	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Freight/Shipping /Delivery/Warehouse','form_name'=>'jobs.accounting.create']);
  	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Hotel/Hospitality','form_name'=>'jobs.shipping_delivery.create']);
  	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Human Resource','form_name'=>'jobs.human_resource.create']);
  	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Information Technology','form_name'=>'jobs.information_technology.create']);
  	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Lawyer/Legal Service','form_name'=>'jobs.lawyer_legal_service.create']);
  	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Management','form_name'=>'jobs.management.create']);
  	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Manufacturing','form_name'=>'jobs.manufacturing.create']);
  	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Marketing','form_name'=>'jobs.marketing.create']);
  	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Media/Advertising','form_name'=>'jobs.media_advertising.create']);
  	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Medical/Health/Nursing','form_name'=>'jobs.medical_health_nursing.create']);
  	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Merchandising/Purchasing','form_name'=>'jobs.merchandising_purchasing.create']); 	
  	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Operations','form_name'=>'jobs.operations.create']);
  	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Project Management','form_name'=>'jobs.project_management.create']);
  	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Quality Control','form_name'=>'jobs.quality_control.create']);
  	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Resort/Casino','form_name'=>'jobs.resort_casino.create']);
  	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Sales','form_name'=>'jobs.sales.create']);
  	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Security/Driver','form_name'=>'jobs.security_driver.create']);
  	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Technician','form_name'=>'jobs.technician.create']);
  	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Telecommunication','form_name'=>'jobs.telecommunication.create']);
  	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Translation/Interpretation','form_name'=>'jobs.translation_interpretation.create']);
  	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Travel Agent/Ticket Sales','form_name'=>'jobs.travel_agent_ticket_sales.create']);
  	\DB::table('categories')->insert(['parent_id' => '6','category_name' => 'Others','form_name'=>'jobs.Others.create']);

  	\DB::table('categories')->insert(['parent_id' => '7','category_name' => 'Accounting','form_name'=>'services.accounting.create']);
  	\DB::table('categories')->insert(['parent_id' => '7','category_name' => 'Automotive','form_name'=>'services.automotive.create']);
  	\DB::table('categories')->insert(['parent_id' => '7','category_name' => 'Advertising & Media','form_name'=>'services.advertising_media.create']);
  	\DB::table('categories')->insert(['parent_id' => '7','category_name' => 'Bridal Services','form_name'=>'services.bridal_services.create']);
  	\DB::table('categories')->insert(['parent_id' => '7','category_name' => 'Cleaning & Maid Services','form_name'=>'services.cleaning_maid_services.create']);
  	\DB::table('categories')->insert(['parent_id' => '7','category_name' => 'Construction, Arch. & Interiors','form_name'=>'services.construction_interiors.create']);
  	\DB::table('categories')->insert(['parent_id' => '7','category_name' => 'Education & Training','form_name'=>'services.education_training.create']);
  	\DB::table('categories')->insert(['parent_id' => '7','category_name' => 'Engineering','form_name'=>'services.engineering.create']);
  	\DB::table('categories')->insert(['parent_id' => '7','category_name' => 'Insurance','form_name'=>'services.insurance.create']);
  	\DB::table('categories')->insert(['parent_id' => '7','category_name' => 'Massage & Spa','form_name'=>'services.massage_spa.create']);
  	\DB::table('categories')->insert(['parent_id' => '7','category_name' => 'Hospitality, Travel & Tourism','form_name'=>'services.hospitality_travel_tourism.create']);
  	\DB::table('categories')->insert(['parent_id' => '7','category_name' => 'Health, Medical & Pharma','form_name'=>'services.health_medical_pharma.create']);
  	\DB::table('categories')->insert(['parent_id' => '7','category_name' => 'IT & Telecom','form_name'=>'services.it_telecom.create']);
  	\DB::table('categories')->insert(['parent_id' => '7','category_name' => 'Interior Design & Renovation','form_name'=>'services.interior_dsign_renovation.create']);
  	\DB::table('categories')->insert(['parent_id' => '7','category_name' => 'Legal','form_name'=>'services.legal.create']);
  	\DB::table('categories')->insert(['parent_id' => '7','category_name' => 'Movers & Logistics','form_name'=>'services.movers_logistics.create']);
  	\DB::table('categories')->insert(['parent_id' => '7','category_name' => 'Plumbing & Electrical','form_name'=>'services.plumbing_electrical.create']);
  	\DB::table('categories')->insert(['parent_id' => '7','category_name' => 'Property & Real Estate','form_name'=>'services.property_real_state.create']);
  	\DB::table('categories')->insert(['parent_id' => '7','category_name' => 'Science','form_name'=>'services.science.create']);
  	\DB::table('categories')->insert(['parent_id' => '7','category_name' => 'Supply Chain & Logistics','form_name'=>'services.supply_chain_logistics.create']);
  	\DB::table('categories')->insert(['parent_id' => '7','category_name' => 'Printing & Publishing','form_name'=>'services.printing_publishing.create']);
  	\DB::table('categories')->insert(['parent_id' => '7','category_name' => 'Other Services','form_name'=>'services.other_services.create']);

  	\DB::table('categories')->insert(['parent_id' => '8','category_name' => 'Jewelry, watches','form_name'=>'fashion_beauty.jewelry_watches.create']);
  	\DB::table('categories')->insert(['parent_id' => '8','category_name' => 'Clothing, accessories','form_name'=>'fashion_beauty.clothing_accessories.create']);
  	\DB::table('categories')->insert(['parent_id' => '8','category_name' => 'Beauty & Healthcare','form_name'=>'fashion_beauty.beauty_healthcare.create']);

  	\DB::table('categories')->insert(['parent_id' => '9','category_name' => 'CDS, DVDS, VHS','form_name'=>'book_sport_hobbies.cd_dvd_vhs.create']);
  	\DB::table('categories')->insert(['parent_id' => '9','category_name' => 'Books','form_name'=>'book_sport_hobbies.books.create']);
  	\DB::table('categories')->insert(['parent_id' => '9','category_name' => 'Sports Equipment','form_name'=>'book_sport_hobbies.sports_equipment.create']);
  	\DB::table('categories')->insert(['parent_id' => '9','category_name' => 'Others','form_name'=>'book_sport_hobbies.others.create']);

  	\DB::table('categories')->insert(['parent_id' => '10','category_name' => 'Household Items','form_name'=>'furniture_decos.household_item.create']);
  	\DB::table('categories')->insert(['parent_id' => '10','category_name' => 'Office Furniture','form_name'=>'furniture_decos.office_furniture.create']);
  	\DB::table('categories')->insert(['parent_id' => '10','category_name' => 'Home Furniture','form_name'=>'furniture_decos.home_furniture.create']);
  	\DB::table('categories')->insert(['parent_id' => '10','category_name' => 'Kitchenware','form_name'=>'furniture_decos.kitchenware.create']);
  	\DB::table('categories')->insert(['parent_id' => '10','category_name' => 'Handicrafts Paintings','form_name'=>'furniture_decos.handicrafts_paintings.create']);

  	\DB::table('categories')->insert(['parent_id' => '11','category_name' => 'Dogs','form_name'=>'pets.dogs.create']);
  	\DB::table('categories')->insert(['parent_id' => '11','category_name' => 'Cats','form_name'=>'pets.cats.create']);
  	\DB::table('categories')->insert(['parent_id' => '11','category_name' => 'Birds','form_name'=>'pets.birds.create']);
  	\DB::table('categories')->insert(['parent_id' => '11','category_name' => 'Fish','form_name'=>'pets.fish.create']);
  	\DB::table('categories')->insert(['parent_id' => '11','category_name' => 'Pet Food','form_name'=>'pets.pet_food.create']);
  	\DB::table('categories')->insert(['parent_id' => '11','category_name' => 'Pet Accessories','form_name'=>'pets.pet_accessories.create']);
  	\DB::table('categories')->insert(['parent_id' => '11','category_name' => 'Other','form_name'=>'pets.others.create']);

  	\DB::table('categories')->insert(['parent_id' => '12','category_name' => 'Meat','form_name'=>'foods.meat.create']);
  	\DB::table('categories')->insert(['parent_id' => '12','category_name' => 'Seafood','form_name'=>'foods.seafood.create']);
  	\DB::table('categories')->insert(['parent_id' => '12','category_name' => 'Fruits','form_name'=>'foods.fruit.create']);
  	\DB::table('categories')->insert(['parent_id' => '12','category_name' => 'Vegetables','form_name'=>'foods.vegetable.create']);
  	\DB::table('categories')->insert(['parent_id' => '12','category_name' => 'Beverages','form_name'=>'foods.beverage.create']);
  	\DB::table('categories')->insert(['parent_id' => '12','category_name' => 'Grocery','form_name'=>'foods.grocery.create']);
  	\DB::table('categories')->insert(['parent_id' => '12','category_name' => 'Bread & Bakery','form_name'=>'foods.bread_bakery.create']);
  	\DB::table('categories')->insert(['parent_id' => '12','category_name' => 'Beer & Wine','form_name'=>'foods.beer_wine.create']);
  	\DB::table('categories')->insert(['parent_id' => '12','category_name' => 'Rice & Cereal','form_name'=>'foods.rice_cereal.create']);
  	\DB::table('categories')->insert(['parent_id' => '12','category_name' => 'Other','form_name'=>'foods.others.create']); 

  }
}
