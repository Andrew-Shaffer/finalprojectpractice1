<?php

//print_r($_POST);
//
//echo '<br>';
//
//print_r($_FILES);
//
//echo '<br>';
//
//echo $_POST['name'];

$avatar = $_POST['avatar'];

$message = $_POST['comment'];

//$p = $_POST['project'];
//
//$d = $_POST['description'];

//mkdir('users/'.$u);

//$t = $_FILES['photo']['tmp_name'];
//
//$i = 'users/'.$u.'/'.$_FILES['photo']['name'];

//move_uploaded_file($t, $i);

$cnt = mysqli_connect('localhost','root','','myDatabase');

$qry = "insert into myTable (avatar, message) values ('$avatar', '$message');";

mysqli_query($cnt, $qry);

mysqli_close($cnt);

?>