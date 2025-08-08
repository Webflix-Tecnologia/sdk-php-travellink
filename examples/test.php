<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include __DIR__ . '/../vendor/autoload.php';

$config = parse_ini_file("config.ini");

/*$apiAir = new Travellink\Air\Api();

$apiAir
    ->setDeveloperToken($config['developerToken'])
    ->setDeveloperPublicKey($config['developerPublicKey'])
    ->setBinaryData($config['binaryData'])
    ->generateDeveloperAccesCode();

try{
    $recuperarSistemasPesquisaResponse = $apiAir->recuperarSistemasPesquisa([
        'Login' => $config['login'],
        'Senha' => $config['senha'],
        'Origem' => 'PPE',
        'Destino' => 'SAO',
    ]);

    var_dump($recuperarSistemasPesquisaResponse);

} catch (\Travellink\Exceptions\TravellinkException $ex) {

    var_dump($ex);

}*/

/*$apiCar = new Travellink\Car\Api();

$apiCar
    ->setDeveloperToken('')
    ->setDeveloperPublicKey('')
    ->setBinaryData('')
    ->generateDeveloperAccesCode();

try{
    $data = date('Y-m-d\TH:i:s.v\Z');
    $responseShoppingCar = $apiCar->carShopping([
        'PickupDateTime' => $data,
        'PickupLocation' => [
            "Code" => "GRU",
            "Latitude" => "",
            "Longitude" => "",
            "CountryCode" => "BR",
            "Continent" => "America_do_Sul",
            "LocationType" => "Airport",
        ],
        "ReturnDateTime" => $data,
        "ReturnLocation" => [
            "Code" => "GRU",
            "Latitude" => "",
            "Longitude" => "",
            "CountryCode" => "BR",
            "Continent" => "America_do_Sul",
            "LocationType" => "Airport",
        ],
        "DriverAge" => 39,
        "SearchModifiers" => [
            "UnlimitedMileage" => null,
            "SearchModifiersVehicle" => [
                "AirConditioning" => null,
                "TransmissionType" => null,
                "Menu" => [],
                "FuelType" => null,
                "VehicleClass" => [],
            ],
        ],
        "AccessCredentials" => [
            "Company" => [
                "Identifier" => "",
                "Password" => ""
            ]
        ],
    ]);
    var_dump($responseShoppingCar);

} catch (\Travellink\Exceptions\TravellinkException $ex) {

    var_dump($ex);

}*/

$apiHotel = new Travellink\Hotel\Api();

$apiHotel
    ->setDeveloperToken($config['developerToken'])
    ->setDeveloperPublicKey($config['developerPublicKey'])
    ->setBinaryData($config['binaryData'])
    ->generateDeveloperAccesCode();

try{
    $responseDestinos = $apiHotel->destinations([
        "AccessCredentials" => [
            "Company" => [
                "Identifier" => $config['loginHotel'],
                "Password" => $config['senhaHotel']
            ],
        ],
    ]);
    var_dump($responseDestinos);

} catch (\Travellink\Exceptions\TravellinkException $ex) {

    var_dump($ex);

}