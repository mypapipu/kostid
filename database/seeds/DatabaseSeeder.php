<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dummy_images = [
            'abstract', 'animals', 'business', 'cats', 'city', 'food', 'nightlife', 'fashion',
            'people', 'nature', 'sports', 'technics', 'transport'
        ];

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('city')->truncate();
        DB::table('type')->truncate();
        DB::table('product')->truncate();
        DB::table('product_facility')->truncate();
        DB::table('image')->truncate();
        DB::table('member')->truncate();
        DB::table('transaction')->truncate();

        // INSERT

        DB::table('type')->insert([
            'name' => 'kos',
            'description' => str_random(20),
            'status' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('type')->insert([
            'name' => 'kontrak',
            'description' => str_random(20),
            'status' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('type')->insert([
            'name' => 'apartment',
            'description' => str_random(20),
            'status' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        for ($i = 1; $i <= 50; $i++)
        {
            DB::table('city')->insert([
                'name' => str_random(10),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

            DB::table('product')->insert([
                'city_id' => $i,
                'type_id' => rand(1, 3),
                'name' => str_random(10),
                'description' => str_random(10),
                'price' => rand(100000, 1000000),
                'longitude' => rand(0, 100),
                'latitude' => rand(0, 100),
                'phone' => str_random(10),
                'status' => rand(0, 5),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

            for ($j = 0; $j <= 2; $j++)
            {
                DB::table('product_facility')->insert([
                    'product_id' => $i,
                    'group' => str_random(10),
                    'key' => str_random(10),
                    'value' => str_random(10),
                    'description' => str_random(10),
                    'status' => rand(0, 5),
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]);
            }

            for ($j = 0; $j <= 2; $j++)
            {
                DB::table('image')->insert([
                    'product_id' => $i,
                    'image_url' => 'http://lorempixel.com/500/300/' . $dummy_images[rand(0, count($dummy_images) - 1)] . '/' . rand(1, 10),
                    'description' => str_random(10),
                    'status' => rand(0, 5),
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]);
            }

            DB::table('member')->insert([
                'facebook_id' => $i,
                'name' => str_random(10),
                'address' => str_random(20),
                'ktp_id' => str_random(10),
                'image' => 'http://lorempixel.com/500/300/' . $dummy_images[rand(0, count($dummy_images) - 1)] . '/' . rand(1, 10),
                'phone' => str_random(10),
                'email' => str_random(10),
                'college' => str_random(10),
                'company' => str_random(10),
                'status' => rand(0, 5),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

            for ($j = 0; $j <= 2; $j++)
            {
                DB::table('transaction')->insert([
                    'member_id' => rand(1, 50),
                    'product_id' => rand(1, 50),
                    'date_start' => date('Y-m-d'),
                    'date_end' => date('Y-m-d'),
                    'total' => rand(100000, 1000000),
                    'note' => str_random(20),
                    'payment_type' => rand(1, 3),
                    'status' => rand(0, 5),
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]);
            }
        }

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // $this->call('UserTableSeeder');
    }

}
