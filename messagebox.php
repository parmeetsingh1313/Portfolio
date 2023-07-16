<html>
    <head>
        <title>
            <h1>MESSAGES</h1>
</title>
<head>
<link rel ="stylesheet" type="text/css" href="1.css">
</head>
<?php
$con = mysqli_connect("localhost","root","","myprofile");
if ($con-> connect_error){
    die("connect failed:".$con-> connect_error);

}

$sql = " SELECT  *  from contact";
$res = mysqli_query($con,$sql);
  echo "total records: " .mysqli_num_rows($res)."<br>";
echo "<table border=7><tr><td><h2>name</h2></td><td><h2>email</h2></td><td><h2>phone</h2></td></tr>";
//$result = $con-> query($sql);
if(mysqli_num_rows($res)<1)
            echo "<br>No  records found!!! <br>";
        else    
           {
               while($rec = mysqli_fetch_assoc($res))
               {
                  
                ?>

                <tr>
                        
                        <td><h3><?php echo $rec ["name"]; ?> </h3></td>
                        <td><h3><?php echo $rec ["email"]; ?></h3> </td>
                        <td><h3><?php echo $rec ["phone"]; ?></h3> </td>
                      
                        
                        


            </tr>
            <?php
            }

    
        }
?>
</table>
</body>
</html>