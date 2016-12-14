
/**
 * Created by PhpStorm.
 * User: Pawel
 * Date: 2016-12-14
 * Time: 20:34
 */

<?php
   session_start();
   unset($_SESSION["username"]);
   unset($_SESSION["password"]);

   echo 'Sesja wyczyszczona';
   header('Refresh: 2; URL = login.php');
?>