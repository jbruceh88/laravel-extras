<?php



    $csvFile = file('{csvFile.csv}');

    //make the seeder array as a string
    $seederData = "[\n";
        foreach ($csvFile as $line) {
            $csvLine = str_getcsv($line);
            $seederData .= "[
                \"value 1\" => \"$csvLine[0]\",
                \"value 2\" => \"$csvLine[1]\",
                ...
            ],\n";
        }
    $seederData .= "]";


    //read the entire string
    $classLocation = '{seederFile.php}';
    $seederClass = file_get_contents($classLocation);

    $updatedSeeder = str_replace('$x', $seederData, $seederClass);

    //put the updated file back into the same file location
    file_put_contents($classLocation, $updatedSeeder);
