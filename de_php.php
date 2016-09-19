


<html>
<body>
<?php 
$name =  ucfirst(strtolower($_POST['name']));
$number =  $_POST['number'];

if($number < 15){
  if(isset($_POST['fout'])){
    if (!empty($name) && !empty($number) || $number != 0){
      
    $norm = $_POST['fout'];
    $uitslag = round(10 - ($number/$norm), 1);
    
    echo "Welcome $name <br>
    Your bad answers were:  $number  <br>
    your grade with the norm$norm will be : $uitslag
    go back to <a href='start.php'>start</a>";
    }else{
      echo "please fill in the number and name";
    }
  }else{
    echo "please fill in the norm";
  }
}else{
  echo "number is too high";
}

?>
</body>
</html>