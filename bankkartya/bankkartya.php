<?php
declare(strict_types=1);
error_reporting(E_ALL);

require __DIR__ . '/vendor/autoload.php';

function CCV(){
    $ccv = "";
    for ($i=0; $i < 3; $i++) { 
        $ccv .= rand(0,9);
    }
    return $ccv;
}

$faker = Faker\Factory::create("hu_HU");

$type = $faker->creditCardType();
$number = $faker->creditCardNumber($type, true);
$expiration_date = $faker->creditCardExpirationDate()->format("y-m");
$ccv = CCV();
$name = $faker->name();

echo "\n";
echo "Kártya típusa: " . $type . PHP_EOL;
echo "Kártyaszám: " . $number . PHP_EOL;
echo "Kártya lejárati ideje (év/hó): " . $expiration_date . PHP_EOL;
echo "CCV: " . $ccv . PHP_EOL;
echo "Név: " . $name . PHP_EOL;
echo "\n";
?>