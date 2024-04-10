
<?php
// ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
header('Content-Type: application/json; charset=utf-8');





$first_name = '';
$last_name = '';



$name = trim($_POST['name']);

$last_name = (strpos($name, ' ') === false) ? '' : preg_replace('#.*\s([\w-]*)$#', '$1', $name);
$first_name = trim( preg_replace('#'.preg_quote($last_name,'#').'#', '', $name ) );
$source = 'Formularz Mitsubishi Colt';

if(($_POST['form'] == 'contactForm') || ($_POST['form'] == 'contactFormMobile')){
    $message = $_POST['engine'] . ' ';
    $message .= $_POST['version'] . ' ';
    $message .= $_POST['color'] . ' ';
    $form_type = 'rezerwacja';
    $source = 'LP Colt - rezerwacja';
    $version = strtolower(trim(str_replace(array("\r", "\n"), '', (string)$_POST['version'])));
    $fuel_type = $version = strtolower(trim(str_replace(array("\r", "\n"), '', (string)$_POST['engine'])));

}else if($_POST['form'] == 'contactFormPolish'){
    $message = '';
    $source = 'Formularz Mitsubishi Colt';
}else if($_POST['form'] == 'contactFormLast'){
    $message = '';


    $form_type = 'formularz';
    /*$message = $_POST['engine'] . ' ';
    $message .= $_POST['version'] . ' ';
    $message .= $_POST['color'] . ' ';
    if($_POST['color_variable'] == 'basic'){
        $message .= 'Kolor: jednokolorowy';
    }else{
        $message .= 'Kolor: dwukolorowy';
    }*/
    $source = 'LP Colt - formularz';
    $version = null;
    $fuel_type = null;

}




// Fields to connect with API
$timestamp = '';
$timestamp = time();

$dealer = '';
if(!empty($_POST['dealer']))
    $dealer = $_POST['dealer'];

$email = '';
if(!empty($_POST['email']))
    $email = $_POST['email'];

$phone = '';
if(!empty($_POST['phone']))
    $phone = $_POST['phone'];

$referrer = '';
if(!empty($_POST['referrer']))
    $referrer = $_POST['referrer'];

$utm_source = '';
if(!empty($_POST['utm_source']))
    $utm_source = $_POST['utm_source'];

$utm_medium = '';
if(!empty($_POST['utm_medium']))
    $utm_medium = $_POST['utm_medium'];

$utm_campaign = '';
if(!empty($_POST['utm_campaign']))
    $utm_campaign = $_POST['utm_campaign'];


$fields = [
    'key' => 'B23958207993D0A950CFE94C5D204D1D',
    'department_id' => $dealer,
    'source' => $source,
    'cc' => '0',
    'client_email' => $email,
    'client_first_name' => $first_name,
    'client_last_name' => $last_name,
    'client_phone' => $phone,
    'brand' => "Mitsubishi",
    'model' => "Colt",
    'referer' => $referrer,
    'message' => $message,
    'utm_source' => $utm_source,
    'utm_medium' => $utm_medium,
    'utm_campaign' => $utm_campaign,
    'utm_timestamp' => $timestamp,
    'data' => array(
        'giodo' => array(
            '4206590a1b4de358b966687d4c15d56c' => $_POST['info'],
            '437cfd96091e193cc075374e5ca1f816' => $_POST['rules'],
        )
    )
];

if($_POST['mmc_phone'] == 'true'){
    $fields['data']['giodo']['d6e44529d1583a516ffd1850b97d892b'] = 1;
}
if($_POST['mmc_mail'] == 'true'){
    $fields['data']['giodo']['29638676a291ae31511090185595ee62'] = 1;
}
if($_POST['dealer_phone'] == 'true'){
    $fields['data']['giodo']['9a699fed71e64089511759750c2bc749'] = 1;
}
if($_POST['dealer_mail'] == 'true'){
    $fields['data']['giodo']['49be1cd4dd99e4b3ea7b5a6849e1eaef'] = 1;
}

// exit ();



$dealerNames = array(
    "80" => "Białystok - Grafix",
    "70" => "Bielsko Biała - Japan Motors Bielsko Biała",
    "81" => "Częstochowa - Kombat Częstochowa",
    "69" => "Gdańsk - Motor Centrum",
    "87" => "Gdynia - K&K Wojtanowicz",
    "48" => "Gorzów Wlkp. - Gezet Gorzów",
    "50" => "Kalisz - AC Lis",
    "68" => "Katowice - MM Cars",
    "138" => "Kielce - CMC MOTORS",
    "56" => "Kraków - Auto Krak",
    "132" => "Lublin, Motycz - Technotop",
    "124" => "Łódź - Satall, Kolumny 3",
    "84" => "Łódź - Satall, Liściasta 104",
    "82" => "Opole - Kombat Opole",
    "61" => "Płońsk - Michalski Motors",
    "74" => "Poznań - Auto Salon Polody",
    "127" => "Przeźmierowo - Auto Salon Polody",
    "60" => "Rzeszów - Automarket",
    "72" => "Sosnowiec - Japan Motors Sosnowiec",
    "131" => "Szczecin - Gezet Szczecin",
    "51" => "Toruń - Arpol",
    "73" => "Warszawa - Japan Motors Warszawa",
    "129" => "Warszawa - Zaborowski",
    "137" => "Wrocław, Długołęka - Japan Motors Wrocław",
    "130" => "Zabrze - MM Cars",
    "49" => "Zielona Góra - Gezet"
);




//dealer name mapping

if (array_key_exists($dealer, $dealerNames)) {
    $dealer_name = $dealerNames[$dealer];
} else {
    $dealer_name = 'Nieznany dealer';
}


if (empty($email)) {
    $email_form = null;
    $email_form_sha = null;
} else {
    $email_form = strtolower($email);
    $email_form_sha = hash("sha256", $email);
}


//dataLayer data

$vehicle_type = 'car';
$brand = 'mitsubishi';
$product_condition = 'new';
$model = 'colt';
//$dealer_name = $dealer;
$name_form = $name;
$name_form_sha = hash("sha256", $name);
$phone_form = $phone;
$phone_form_sha = hash("sha256", $phone);
//$email_form = $email;
//$email_form_sha = hash("sha256", $email);
$step = '1/1';




$ch = curl_init();

//$dump = json_encode(array('data' => date('Y-m-d H:i:s'), 'ip' => $_SERVER["REMOTE_ADDR"], 'HTTP_X_REQUESTED_WITH' => $_SERVER["HTTP_X_REQUESTED_WITH"], 'POST' => $_POST), JSON_PRETTY_PRINT);
//file_put_contents('log.txt', $dump . PHP_EOL, FILE_APPEND);



// CRM ednpoint

if ($_SERVER['HTTP_HOST'] === "lp-mitsubishi-colt.thor.datadise.com") {
    $crm_endpoint = "https://crm.uat-mmc.dealercrm.pl/api/lead_add/";
} else {
    $crm_endpoint = "https://crm.mitsubishi-motors.pl/api/lead_add/";
}

// UAT ENDPOINT
// curl_setopt($ch, CURLOPT_URL,"https://crm.uat-mmc.dealercrm.pl/api/lead_add/"); /* W razie aktualizacji na produkcyjny endpoint, należy zakomentować tą linijkę i odkomentować poniższą */

// PRODUKCYJNY ENDPOINT
//curl_setopt($ch, CURLOPT_URL,"https://crm.mitsubishi-motors.pl/api/lead_add/");

curl_setopt($ch, CURLOPT_URL, $crm_endpoint);


curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($fields));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$result = curl_exec($ch);
curl_close($ch);




    echo json_encode([
        'status' => $result,
        'form_type' => $form_type,
        'vehicle_type' => $vehicle_type,
        'brand' => $brand,
        'product_condition' => $product_condition,
        'model' => $model,
        'version' => $version,
        'fuel_type' => $fuel_type,
        'dealer_name' => strtolower($dealer_name),
        'name_form' => strtolower($name_form),
        'name_form_sha' => $name_form_sha,
        'phone_form' => strtolower($phone_form),
        'phone_form_sha' => $phone_form_sha,
        'email_form' => $email_form,
        'email_form_sha' => $email_form_sha,
        'step' => strtolower($step)
    ]);


//$jsonData = json_encode(['status' => $result]);
//echo '<script>console.log(' . $jsonData . ');</script>';


/*echo "<script>
    dataLayer.push({
    event: 'info_request_view',
    comp_product: {
        vehicle_type: '".$vehicle_type."',
        brand: '".$brand."',
        product_condition: '".$product_condition."',
        model: '".$model."',
        version: '".$version."',
        fuel_type: '".$fuel_type."',
        dealer_name: '".$dealer_name."',
        name_form: '".$name_form."',
        name_form_sha: '".$name_form_sha."',
        phone_form: '".$phone_form."',
        phone_form_sha: '".$phone_form_sha."',
        email_form: '".$email_form."',
        email_form_sha: '".$email_form_sha."',
        step: '".$step."'
        }
    });
    <script>";*/


exit();
?> 
