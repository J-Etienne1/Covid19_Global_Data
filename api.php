
<?php 

$data = file_get_contents("https://api.covid19india.org/state_district_wise.json");
$corona = json_decode($data, true);
//echo print_r($corona);

if(isset($_POST["submit"])){
    $state = $_POST["state"];
    $dist = $_POST["dist"];

    $state = ucfirst($state);
    $dist = ucfirst($dist);
}

?>



    

   
