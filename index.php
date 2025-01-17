<?php
if(isset($_GET['page']))
{
    $page = $_GET['page'];
}
else
{
    $page = 1;
}
include('apppmvc.php');
$mavar = new ff();
$mavar -> afficherpage($page);
?>