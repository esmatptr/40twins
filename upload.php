<?php


$f1=$_GET['f1'];

if ( 0 < $_FILES['file']['error'] ) {
    echo 'Error: ' . $_FILES['file']['error'] . '<br>';
}
else {
    move_uploaded_file($_FILES['file']['tmp_name'], 'uploads/'.$f1.'/'. $_FILES['file']['name']);
}

?>