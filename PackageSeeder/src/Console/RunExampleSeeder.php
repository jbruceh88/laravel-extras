<?php
    namespace Company\Package\Console;

    use Agilis\ZohoConnector\Models\Pharmacy;
    use Illuminate\Console\Command;
    use Illuminate\Support\Facades\File;


    class RunExampleSeeder extends Command
    {


        protected $signature = 'package:commandName';

        protected $description = 'runs the Example Seeder';

        public function handle()
        {

            include __DIR__.'pathToExampleSeeder';
            $classes = get_declared_classes();
            $class = end($classes);
            $this->info('Starting Seeder...');

            $class = 'Company\Package\Database\Seeders\PharmaciesSeeder';

            $result = \Artisan::call('db:seed', ['--class' => $class]);

            $this->info($result);
            $this->info('Seeding Complete');

        }


    }