<?php
$redirect=True;
$conn=new mysqli("localhost","root","","railway_reservation");
if($_SERVER["REQUEST_METHOD"]=="POST")
{ $mail = $_REQUEST["loginm"];
  $pss = $_REQUEST["loginp"];
  $result = $conn->query('SELECT email,password FROM user ;');
  if($result->num_rows>0)
  {while($row = $result->fetch_assoc())
        { if($row['email']==$mail && $row['password']==$pss)
           { $redirect=False;
             break;
           }
        }
   }
}
$conn->close();
function validate($redit){
 $p = "Location: http://localhost/Assignment/railway/".$redit;
header($p);
exit();
}
?>
<?php
if(!$redirect){
?>
<body onclick="<?php echo(validate('demo.php')); ?>"></body>
<?php
}
else
{
echo(validate("RailwayHomePage.html"));
}
?>