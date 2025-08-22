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

/*$apiHotel = new Travellink\Hotel\Api();

$apiHotel
    ->setDeveloperToken($config['developerToken'])
    ->setDeveloperPublicKey($config['developerPublicKey'])
    ->setBinaryData($config['binaryData'])
    ->generateDeveloperAccesCode();*/

/*try{
    $responseHotelsAvail = $apiHotel->avail([
        'AvailRequestSegments' => [
            [
                'HotelSearchCriteria' => [
                    'Criterion' => [
                        'Address' => [
                            'CityName' => 'PPB'
                        ],
                        'RoomStayCandidates' => [
                            [
                                'GuestCounts' => [
                                    [
                                        'Age' => 25,
                                        'Count' => 1
                                    ]
                                ]
                            ]
                        ]
                    ]
                ],
                'StayDateRange' => [
                    'Start' => '2025-08-25T00:00:00',
                    'End' => '2025-08-26T00:00:00'
                ],
                'TPA_Extensions' => [
                    'Providers' => [],
                    'MaxRoomTypes' => 0,
                    'OccupancyFilterType' => 'NoFilter',
                    'BlockRoomFeature' => false,
                    'TimeOutException' => false,
                    'TimeOut' => 60
                ]
            ]
        ],
        'POS' => [
            'Source' => [
                'RequestorID' => [
                    'TPA_Extensions' => [
                        'Company' => [
                            'Identifier' => $config['loginHotel'],
                            'Password' => $config['senhaHotel']
                        ]
                    ]
                ]
            ]
        ]
    ]);
    var_dump($responseHotelsAvail);
} catch (\Travellink\Exceptions\TravellinkException $ex) {

    var_dump($ex);

}*/

/*$apiBus = new \Travellink\Bus\Api();
$apiBus
    ->setDeveloperToken($config['developerToken'])
    ->setDeveloperPublicKey($config['developerPublicKey'])
    ->setBinaryData($config['binaryData'])
    ->generateDeveloperAccesCode();*/

/*try{
    $responseBusLocations = $apiBus->busLocations([
        'AccessCredentials' => [
            'Company' => [
                'Identifier' => $config['loginBus'],
                'Password' => $config['senhaBus'],
            ]
        ]
    ]);
    var_dump($responseBusLocations);
} catch (\Travellink\Exceptions\TravellinkException $ex) {

    var_dump($ex);

}*/

$apiInsurance = new \Travellink\Insurance\Api();
$apiInsurance
    ->setDeveloperToken($config['developerToken'])
    ->setDeveloperPublicKey($config['developerPublicKey'])
    ->setBinaryData($config['binaryData'])
    ->generateDeveloperAccesCode();
try{
    $responseInsuranceDestinations = $apiInsurance->insuranceDestination([
        'AccessCredentials' => [
            'Company' => [
                'Identifier' => $config['loginInsurance'],
                'Password' => $config['senhaInsurance']
            ]
        ]
    ]);
    var_dump($responseInsuranceDestinations);
} catch (\Travellink\Exceptions\TravellinkException $ex) {

    var_dump($ex);

}