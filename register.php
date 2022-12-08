<?php
$redirect=True;
$conn=new mysqli("localhost","root","","railway_reservation");
if($_SERVER["REQUEST_METHOD"]=="POST")
{ $uname =$_REQUEST["regisn"];
  $mail = $_REQUEST["regism"];
  $pss = $_REQUEST["regisp"];
  $result = $conn->query('SELECT email FROM user ;');
  if($result->num_rows>0)
  {while($row = $result->fetch_assoc())
        { if($row['email']==$mail)
           { echo("<script>alert('Email already used');document.location='RailwayHomePage.html'</script>");
             $redirect=False;
             break;
           }
        }
   }
  if($redirect)
   {  $str = "INSERT INTO user(Username,email,password) VALUES('$uname','$mail','$pss');";
      $result1 = $conn->query($str);
      if($result1)
        {echo("<script>alert('WELCOME');document.location='demo.php'</script>");
        }
      else
        {echo("<script>alert('Username already used');document.location='RailwayHomePage.html'</script>");}
   }
   
         
}
$conn->close();

?>
