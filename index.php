<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
table, td {
border: 1px solid black;
width: 50%;
align : center;

}
</style>
<body>

<h1>Q1</h1>
<?php 
/* Question 1 : Write a PHP script to display names and the salaries amounts, within a table. ou should use `echo ` to generate your table. */
//////////////////////// Your Code Here /////////////////////


   
    

echo  "<table>";
    
    echo "<tr>";
    echo "<td> Mr. X </td>";
    echo "<td> 800$ </td>";
    echo "</tr>";


    echo "<tr>";
    echo "<td> Mr. Y </td>";
    echo "<td> 1000$ </td>";
    echo "</tr>";

echo "</table>";


?>

</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Q2</h1>
<?php

/*Question 2 : Write a PHP script which displays the capital and country name from the below array $c. as unordered list after sorting the array list by countries names  */
//////////////////////// Your Code Here /////////////////////



$countries = array( "Italy"=>"Rome",
              "Luxembourg"=>"Luxembourg",
               "Belgium"=> "Brussels",
               "Denmark"=>"Copenhagen",
               "Finland"=>"Helsinki",
               "France" => "Paris",
               "Slovakia"=>"Bratislava" ) ;

               ksort($countries) ;
               foreach($countries as $country => $capital)
               {
               echo "The capital of $country is $capital"."<br>" ;
               }

    ?>
</body>
</html>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    

<h1>Q3</h1>
    <?php

/*Question 3 : Write a script to build the following stars pattern, using a nested for loop.

*
* *
* * *
* * * *
* * * * *
* * * * *
* * * *
* * *
* *
*

*/

        $shape="*";

    for($i=1; $i<=5; $i++) {   
        for($j=1; $j<=$i; $j++){   
            echo '*';   
            }  
    echo '<br>';   
    } 

    for($i=5; $i>=1; $i--){   
        for($j=1; $j<=$i; $j++)
    {  
    echo '*';   
    }   
    echo '<br>';   
    } 


    echo '<br>';    echo '<br>';    echo '<br>';  


?>
</body>
</html>
<p>------------------------------------------------</p>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<h1>Q4</h1>
<?php


$date1 = strtotime("1996-12-30");  
$date2 = strtotime("2019-09-01");  
  

$diff = abs($date2 - $date1);  
  
  
$years = floor($diff / (365*60*60*24));  
  
  




?>

</body>
</html>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1> Q5 </h1>

    
    
<!-- /*Question 5 : Create a simple HTML form that accept the user name after submitting display the name using PHP echo statement under the form. */ -->




  
   <form method='POST'>
   <h2>Enter your name:</h2>
    <input type="text" name="name">
    <input type="submit">

 
 </form>
<?php
//Retrieve name from query string and store to a local variable
$name = $_POST['name'];
echo "<h3> Hello $name </h3>";
?>
</body>
</html>













