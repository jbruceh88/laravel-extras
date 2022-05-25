<?php

    namespace Company\Package\Database\Seeders;

    use Illuminate\Database\Seeder;
    use Illuminate\Support\Facades\DB;

    class ExampleSeeder extends Seeder
    {


        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
           //$x will be replaced from the array created in createSeeder.php
            $seeData = [$x];

            foreach ($seeData as $index => $seed) {
                $result = DB::table('{table}')->insert($seed);

                if (!$result) {
                    $this->command->info("Insert failed at record $index.");

                    return;
                }
            }

            $this->command->info('Inserted ' . count(table) . ' records.');
        }
    }
