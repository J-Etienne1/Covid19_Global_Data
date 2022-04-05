<?php 
session_start();

    include("connection.php");
    include("functions.php");
    include("api.php");

    $user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
    <title>COVID 19 DATA</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">





</head>



<body>



    <div class="jumbotron text-centre text-uppercase">
    <h2>Covid 19 Data</h2>
    </div>


    <p>Hello, <?php echo $user_data['user_name']; ?></p>

    
    

    



<form class="container col-md-4" action="index.php" method="POST">
    <div class="form-group">
        <label>Enter State :</label>
        <input type="text" name="state" class="form-control">     
    </div>
    <div class="form-group">
        <label>Enter District :</label>
        <input type="text" name="dist" class="form-control">     
    </div>
    <div class="form-group text-centre">
        <button type="submit" name="submit" class="btn btn-info">Get Details</button>     
    </div>
</form>



    
</body>


<br>




<div class="container col-md-4 m-auto text-centre">
<?php


    echo "Active :";    
    echo($corona[$state]['districtData'][$dist]['active']);
    echo "<br> Confirmed";
    echo($corona[$state]['districtData'][$dist]['confirmed']);
    echo "<br> Deaths :";
    echo($corona[$state]['districtData'][$dist]['deceased']);
    echo "<br> Recovered :";
    echo($corona[$state]['districtData'][$dist]['recovered']);   


 ?>
 </div>




 <footer>
    <div>
        <br>
        <a href="logout.php">Logout</a>
        <br>
    </div>
    
</footer>



</html>