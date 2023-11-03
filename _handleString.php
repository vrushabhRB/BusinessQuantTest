<?php

$showError = "false";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php';
    
    $string= $_POST['stringEmail'];
    $crrUser=$_SESSION['useremail'];
   echo"$crrUser";
   
   $sql="INSERT INTO `strings` (`string`,`user_email`) VALUES ('$string', '$crrUser');";
$result=mysqli_query($conn,$sql);
$num_rows= mysqli_num_rows($result);
 

$srno=0;
if($num_rows>0){
    while($dta=mysqli_fetch_assoc($result)){
   
      echo"  <tr>
      
      <td>".$dta['string']."</td>
      </tr>
      ";

  }
  
  
}
    header("Location: /businessQuantTest/index.php?signupsuccess=false&error=$showError");

}
else{
    echo"hiii";

}
?>