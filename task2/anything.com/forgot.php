
<html>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    Enter Username:<input type="text" name="name">
    <input type="submit">
    </form>
  
</html>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['name'];
}
$folder="/home/tharun/Desktop/task2/hacker.txt";
$command="grep -w -m 1 'username=$name' $folder | cut -f 2 -d '&' | cut -f 2 -d '=' | cut -d'[' -f 1";
$output=shell_exec($command);
echo $output;
?>