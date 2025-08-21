<?php

namespace Modules\AdminBoard\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
use Modules\AdminBoard\Http\Models\AdminCareerNavigator;
use Modules\KamrulDashboard\Http\Models\Slug;
use SlugHelper;

class AdminCareerNavigatorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
//        $id = 1;
        $data = [];
        $data_slug = [];
        $order = 0;
//        $data = [
//            [ 'id' => $id++, 'uuid' => gen_uuid(), 'name' => "One", 'slug' => "one", 'description' => "one", 'short_description' => "one", 'order' => $order++,
//                'set_time' => '3:00 PM - 4:00 PM','start_date' => '2024-08-31','location' => '102/1, Sukrabad, Dhaka', 'status' => 'active', 'user_id' => 1 ],
//        ];
        for ($i = 1; $i <= 24; $i++) {
            $name = $faker->sentence(9); // Generates a title with 3 words
            $slug = Str::slug($name);
            $description = $faker->paragraph(70); // Generates a paragraph with 6 sentences
            $short_description = $faker->sentence(10); // Generates a short sentence
            $start_date = $faker->date('Y-m-d'); // Generates a random date

            $data[] = [
                'id' => $i,
                'uuid' => Str::uuid(),
                'name' => $name,
                'slug' => $slug,
                'description' => $description,
                'short_description' => $short_description,
                'start_date' => $start_date,
                'photo' => 'photo-12345.webp',
                'document' => 'document.pdf',
                'order' => $order++,
                'status' => 'active',
                'user_id' => 1,
            ];
            $data_slug[] = [
                'key'               => $slug,
                'reference_id'      => $i,
                'reference_type'    => AdminCareerNavigator::class,
                'prefix'            => SlugHelper::getPrefix(AdminCareerNavigator::class),
            ];
        }
        Slug::where('reference_type',AdminCareerNavigator::class)->delete();
//        SlugInterface::
//        print_r($data_slug);
        AdminCareerNavigator::upsert($data, ['name']);
        Slug::upsert($data_slug, ['key']);
    }
}
