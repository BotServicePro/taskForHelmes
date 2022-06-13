<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sectors')->insert([
            ['name' => 'Manufacturing', 'parentId' => null, 'depth' => null],
                ['name' => 'Construction material', 'parentId' => 1, 'depth' => 1],
                ['name' => 'Electronics and Optics', 'parentId' => 1, 'depth' => 1],
                ['name' => 'Food and Beverage', 'parentId' => 1, 'depth' => 1],
                    ['name' => 'Bakery & confectionery products', 'parentId' => 4, 'depth' => 2],
                    ['name' => 'Beverages', 'parentId' => 4, 'depth' => 2],
                    ['name' => 'Fish & fish products', 'parentId' => 4, 'depth' => 2],
                    ['name' => 'Meat & meat products', 'parentId' => 4, 'depth' => 2],
                    ['name' => 'Milk & dairy products', 'parentId' => 4, 'depth' => 2],
                    ['name' => 'Other', 'parentId' => 4, 'depth' => 2],
                    ['name' => 'Sweets & snack food', 'parentId' => 4, 'depth' => 2],
                ['name' => 'Furniture', 'parentId' => 1, 'depth' => 1],
                    ['name' => 'Bathroom/sauna', 'parentId' => 12, 'depth' => 2],
                    ['name' => 'Bedroom', 'parentId' => 12, 'depth' => 2],
                    ['name' => 'Children’s room', 'parentId' => 12, 'depth' => 2],
                    ['name' => 'Kitchen', 'parentId' => 12, 'depth' => 2],
                    ['name' => 'Living room', 'parentId' => 12, 'depth' => 2],
                    ['name' => 'Office', 'parentId' => 12, 'depth' => 2],
                    ['name' => 'Other (Furniture)', 'parentId' => 12, 'depth' => 2],
                    ['name' => 'Outdoor', 'parentId' => 12, 'depth' => 2],
                    ['name' => 'Project furniture', 'parentId' => 12, 'depth' => 2],
                ['name' => 'Machinery', 'parentId' => 1, 'depth' => 1],
                    ['name' => 'Machinery components', 'parentId' => 22, 'depth' => 2],
                    ['name' => 'Machinery equipment/tools', 'parentId' => 22, 'depth' => 2],
                    ['name' => 'Manufacture of machinery', 'parentId' => 22, 'depth' => 2],
                    ['name' => 'Maritime', 'parentId' => 22, 'depth' => 2],
                        ['name' => 'Aluminium and steel workboats', 'parentId' => 26, 'depth' => 3],
                        ['name' => 'Boat/Yacht building', 'parentId' => 26, 'depth' => 3],
                        ['name' => 'Ship repair and conversion', 'parentId' => 26, 'depth' => 3],
                    ['name' => 'Metal structures', 'parentId' => 22, 'depth' => 2],
                    ['name' => 'Other', 'parentId' => 22, 'depth' => 2],
                    ['name' => 'Repair and maintenance service', 'parentId' => 22, 'depth' => 2],
                ['name' => 'Metalworking', 'parentId' => 1, 'depth' => 1],
                    ['name' => 'Construction of metal structures', 'parentId' => 33, 'depth' => 2],
                    ['name' => 'Houses and buildings', 'parentId' => 33, 'depth' => 2],
                    ['name' => 'Metal products', 'parentId' => 33, 'depth' => 2],
                    ['name' => 'Metal works', 'parentId' => 33, 'depth' => 2],
                        ['name' => 'CNC-machining', 'parentId' => 37, 'depth' => 3],
                        ['name' => 'Forgigns, Fasteners', 'parentId' => 37, 'depth' => 3],
                        ['name' => 'Gas, Plasma, Laser cutting', 'parentId' => 37, 'depth' => 3],
                        ['name' => 'MIG, TIG, Aluminium welding', 'parentId' => 37, 'depth' => 3],
                ['name' => 'Plastic and Rubber', 'parentId' => 1, 'depth' => 1],
                    ['name' => 'Packaging', 'parentId' => 42, 'depth' => 2],
                    ['name' => 'Plastic goods', 'parentId' => 42, 'depth' => 2],
                    ['name' => 'Plastic processing technology', 'parentId' => 42, 'depth' => 2],
                        ['name' => 'Blowing', 'parentId' => 45, 'depth' => 3],
                        ['name' => 'Moulding', 'parentId' => 45, 'depth' => 3],
                        ['name' => 'Plastics welding and processing', 'parentId' => 45, 'depth' => 3],
                    ['name' => 'Plastic profiles', 'parentId' => 42, 'depth' => 2],
                ['name' => 'Printing', 'parentId' => 1, 'depth' => 1],
                    ['name' => 'Advertising', 'parentId' => 50, 'depth' => 2],
                    ['name' => 'Book/Periodicals printing', 'parentId' => 50, 'depth' => 2],
                    ['name' => 'Labelling and packaging printing', 'parentId' => 50, 'depth' => 2],
                ['name' => 'Textile and Clothing', 'parentId' => 1, 'depth' => 1],
                    ['name' => 'Clothing', 'parentId' => 54, 'depth' => 2],
                    ['name' => 'Textile', 'parentId' => 54, 'depth' => 2],
                ['name' => 'Wood', 'parentId' => 1, 'depth' => 1],
                    ['name' => 'Other wood', 'parentId' => 57, 'depth' => 2],
                    ['name' => 'Wooden building materials', 'parentId' => 57, 'depth' => 2],
                    ['name' => 'Wooden houses', 'parentId' => 57, 'depth' => 2],
            ['name' => 'Other', 'parentId' => null, 'depth' => null],
                ['name' => 'Creative industries', 'parentId' => 61, 'depth' => 1],
                ['name' => 'Energy technology', 'parentId' => 61, 'depth' => 1],
                ['name' => 'Environment', 'parentId' => 61, 'depth' => 1],
            ['name' => 'Service', 'parentId' => null, 'depth' => null],
                ['name' => 'Business services', 'parentId' => 65, 'depth' => 1],
                ['name' => 'Engineering', 'parentId' => 65, 'depth' => 1],
                ['name' => 'Information Technology and Telecommunications', 'parentId' => 65, 'depth' => 1],
                    ['name' => 'Data processing, Web portals, E-marketing', 'parentId' => 68, 'depth' => 2],
                    ['name' => 'Programming, Consultancy', 'parentId' => 68, 'depth' => 2],
                    ['name' => 'Software, Hardware', 'parentId' => 68, 'depth' => 2], 
                    ['name' => 'Telecommunications', 'parentId' => 68, 'depth' => 2],
                ['name' => 'Tourism', 'parentId' => 65, 'depth' => 1],
                ['name' => 'Translation services', 'parentId' => 65, 'depth' => 1],
                ['name' => 'Transport and Logistics', 'parentId' => 65, 'depth' => 1],
                    ['name' => 'Air', 'parentId' => 75, 'depth' => 2],
                    ['name' => 'Rail', 'parentId' => 75, 'depth' => 2],
                    ['name' => 'Road', 'parentId' => 75, 'depth' => 2],
                    ['name' => 'Water', 'parentId' => 75, 'depth' => 2],
        ]);
    }
}
