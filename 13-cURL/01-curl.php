<?php
error_reporting(E_ALL);

//CURL
//CURL (Client URL) is a software project that enables data
// exchange between various protocols.

if (extension_loaded("curl")) {
    echo "Curl is installed.";
} else {
    echo "Curl is not installed.";
}

// Initiating a CURL request
$curl = curl_init(/*url*/);

// Executing the CURL request
//$output = curl_exec($curl);

// Terminating the CURL request
//curl_close($curl);

//Setting curl options
// The URL to which the CURL request will be sent
curl_setopt($curl, CURLOPT_URL, "https://www.patika.dev/tr/programs");

// To return the transfer as a string from curl_exec() instead of directly outputting it
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($curl);
print_r($result);

curl_setopt_array($curl, [
    CURLOPT_URL => "https://www.patika.dev/tr/programs",
    CURLOPT_RETURNTRANSFER => true
]);

//Getting the headers
$pattern = '@<h2 class="emphasis-small-header bootcamp-card">(.*?)</h2>@';

preg_match_all($pattern, $result, $matches);
$count = 0;

foreach ($matches[1] as $item) {
    echo ++$count.' - '.$item."<br>---<br>";
}
?>

<?php 
echo "<br><br><br><br><hr>";
curl_setopt_array($curl, [
    CURLOPT_URL => "https://jsonplaceholder.typicode.com/posts",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_HTTPHEADER => [
        'Content-Type : application/json'
    ],
    CURLOPT_POSTFIELDS => json_encode([
        'title' => 'test title',
        'body'=> 'test body',
        'userId'=> 12,
    ])
]);
$result = curl_exec($curl);
echo "<pre>";
print_r($result);
?>


<?php 
echo "<br><br><br><br><hr>";
curl_setopt_array($curl, [
    CURLOPT_URL => "http://localhost/PHP-Course/13-cURL/01-post.php",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => [
        'username' => 'test username',
        'password'=> 123123,
        'userId'=> 12,
    ]
]);
$result = curl_exec($curl);
echo "<pre>";
print_r($result);
?>


