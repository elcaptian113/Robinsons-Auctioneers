<?php

$con = mysqli_init();
$host = 'auctionhouse-db.mysql.database.azure.com';
$port = 3306;
$user = 'auctionhouse_user';
$pass = 'auction12345';
$dbname = 'auctionhouse_db';

$conn = mysqli_real_connect($con,$host,$user,$pass,$dbname,$port);

if(!$conn){
    die("Database Connection Failed " . mysqli_connect_error());
}
else{
    echo "Connected to Database";
}

$salt1 = '8c6258f9b130741fa81ebe606186b4981deca6ca1c414f66ca0192b2ce194eadb65ad66969f67de78a6cf6bbacc4fecd57e6773f49f84fefcb1ae2e5e749ddf0';
$salt2 = '4565d4edd809d11c80eb63ea89b060cfee2b58be68524164fff7f68b7f8c00ef3dbb504effd0489219d88809e9e1fd46e751473469d6413576dc202dea211f95';

?>
