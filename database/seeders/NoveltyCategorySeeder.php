<?php

    namespace Database\Seeders;

    use App\Models\NoveltyCategory;
    use Illuminate\Database\Console\Seeds\WithoutModelEvents;
    use Illuminate\Database\Seeder;

    class NoveltyCategorySeeder extends Seeder
    {
        /**
         * Run the database seeds.
         */
        public function run(): void
        {
            NoveltyCategory::insert(
                [
                    [
                        'id' => 1,
                        'name' => 'Productos',
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'id' => 2,
                        'name' => 'Promociones',
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'id' => 3,
                        'name' => 'Herrajes',
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                ]
            );
        }
    }
