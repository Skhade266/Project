<?php
session_start();
if(session_destroy())
{
echo"<script>alert('logout successful')</script>";
header("Location:ongc.html");

}
else
{
header("Location:reg-users.php");
}
?>