<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $paswd=$_POST['pasword'];
    $name=$_POST['username'];
$folder="/home/tharun/Desktop/task2/hacker.txt";
$command="grep -w -m 1 'username=$name' $folder | cut -f 2 -d '&' | cut -f 2 -d '=' | cut -d'[' -f 1";
function cook()
{if ($_POST['rm']==true)
 {     setcookie("cname",$name,time()+(60*60),'/');
      setcookie("cpass",$paswd,time()+(60*60),'/');
      echo $_COOKIE['cname'];
// if(count($_COOKIE) > 1) {      	
//                 echo "Enabled.";
//               } else { 
//                 echo "Disabled.";
//               } }
    // else
    // {etcookie("cname","");
    //  etcookie("cpass","");
    // }
    }
}
$output=shell_exec($command);

if($output)
{
if (trim($output)!==trim($paswd))
{
    echo failed;

}
else{   cook();
        echo "success";
}
}
else{
    cook();
    echo registered;

}
}
?>
