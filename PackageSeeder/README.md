# Auto Seeder


createSeeder.php is a simple php script that will take the values from a csv and put them in to a seeder file for Laravel to run. 

To use copy /databases/seeders/ExampleSeeder.php to have an appropriate name and update the table name and name space ass needed.

Update the createSeeder.php file to use this new Seeder file you just created, and point it to the csv file.
Now run the script in a terminal php createSeeder.php.


If you are running a seeder form a laravel package you can use src/Console/RunExampleSeeder.php to run this new seeder for you. 

Simply copy this file and rename and update the name spaces as needed, as well as the command and the file path to the seeder. 

Once updated register this command in the packages Service Provider

    if ($this->app->runningInConsole()) {
        $this->commands([
            CommandClassName::class,
        ]);
    }

you can now run php artisan CommandClassName:command to run the seeder within the package. 

