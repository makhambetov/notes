<?php
include "lib/db_connect.php";
//echo "<pre>"; print_r($link); echo"</pre>";

if(isset($_POST["btn_pressed"]))
{
    $res = mysqli_query($link, "SELECT * FROM notes_users WHERE u_name='$_POST[username]' && u_password='$_POST[pwd]'");
    //echo "<pre>"."s"; var_dump($_POST["username"]); echo "</pre>";
    //echo "<pre>";print_r($res); echo"</pre>";
    //echo $res;
    //$count = 1;
    while($row = mysqli_fetch_array($res))
    {
        session_start();
        $_SESSION["authorized"] = true;
        $_SESSION["username"] = $_POST["username"];
        $_SESSION["user_id"] = $row["u_id"];
        
        header("Location: list.php?username=" . $_POST['username']);
    }

    ?>
    <script>
        window.location = "login.php?auth=false";
    </script>
    <?php
    
}
else header("Location: login.php");

?>