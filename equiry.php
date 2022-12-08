<?php
$redirect=False;
$conn=new mysqli("localhost","root","","railway_reservation");
if($_SERVER["REQUEST_METHOD"]=="POST")
{ $file_p = $_SERVER['HTTP_REFERER'];
  $uname =$_REQUEST["uname"];
  $mail = $_REQUEST["mail"];
  $pss = $_REQUEST["sub"];
  $result = $conn->query('SELECT email,Username FROM user ;');
  if($result->num_rows>0)
  {while($row = $result->fetch_assoc())
        { if($row['email']==$mail && $row['Username']==$uname)
           { $redirect=True; 
           }
        }
   }
  if($redirect)
   {  $str = "INSERT INTO enquiry(Username,email,Query) VALUES('$uname','$mail','$pss');";
      $result1 = $conn->query($str);
      if($result1)
        {echo("<script>alert('POSTED SUCCESSFULLY');document.location='$file_p'</script>");
        }
   
   }

 echo("<script>alert('INVALID DETAILS');document.location='$file_p'</script>");
         
}
$conn->close();

?>