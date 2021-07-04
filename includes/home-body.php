<?php

if(isset($_GET['ID']))
{
include_once 'dbConnection.php';

$ID= mysqli_real_escape_string($conn, $_GET['ID']);



$sql="SELECT * FROM recipes WHERE  ID='$ID' ";
$result=mysqli_query($conn, $sql) or die("Bad Query: $sql");
$resltCheck=mysqli_num_rows($result);
$row =  mysqli_fetch_array($result);
echo $row['recipe_name'] ;
}
else{
   header("Location: parathas-body.html") ;
   exit();
}



?>


<!DOCTYPE html>
<html>
<head>
    <title>WELCOME | Recipie 01</title>
</head>

<style type="text/css">
    #body {
        background-color: white;
    }

    #title {
        border-style: solid;
        border-width: 1px;
        border-color: black;
        float: left;
        width: 950px;
        height: 100px;
        margin-bottom: 10px;
    }

    #picture {
        background-color: orange;
        border-radius: 10px;
        border-width: 1px;
        border-color: black;
        float: right;
        padding: 15px;
        width: 500px;
        height: 350px;
    }

    #ingredients {
        border-style: solid;
        border-width: 1px;
        border-color: black;
        float: left;
        width: 950px;
        height: 270px;
        margin-bottom: 10px;
    }

    #recipe {
        border-style: solid;
        border-width: 1px;
        border-color: black;
        float: left;
        width: 100%;
        height: 500px;
    }

    img {
        width: 500px;
        height: 350px;
        border-radius: 10px;
    }

    h1 {
        font-size: 3.1vw;
        color: #fdc029;
        line-height: 42px;
        text-shadow: 0 1px #aa3d01, 0 3px #aa3d01;
    }
</style>

<body>


<div id="recipe_container">
<?php
require_once 'recipe.php';
?>

<content>

    <div id="title"><h1> <?php echo $row['recipe_name']  ?> </h1></div>
    <div id="picture"><img src=  '..\meal-preference\breakfast\images\<?php echo $row['picture']?>'></div>

    <div id="recipe">recipie</div>
    
<content>
</div>
</body>
</html>

