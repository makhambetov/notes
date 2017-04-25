<?php
//session_start();
$edit = false;
include "lib/db_connect.php";
include "header.php";

?>
 <form class="form-signin" role="form" method="post" action="auth.php">
        <h2 class="form-signin-heading">Log in or Sign up</h2>
        <input type="text" class="form-control" placeholder="Email address" required="" autofocus="" name="username">
        <input type="password" class="form-control" placeholder="Password" required="" name="pwd">
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> <span>Remember</span>
        </label>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="btn_pressed">Sign in</button>

        <?php
            if($_GET && $_GET['auth']=='false')
            {
                ?>
                <br><div style="color: red; text-align: center;">Log in failed</div>
                <?php
            }
        ?>

      </form>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


<?php
/*
//echo "<pre>"; print_r($link); echo"</pre>";

if(isset($_POST["btn_pressed"]))
{
    $res = mysqli_query($link, "select * from notes_users where u_name='$_POST[username]' && u_password='$_POST[pwd]'");
    //echo "<pre>"."s"; var_dump($_POST["username"]); echo "</pre>";
    echo "<pre>";print_r($res); echo"</pre>";
    //echo $res;
    $count = 1;
    while($row = mysqli_fetch_array($res))
    {
        $_SESSION["username"] = $_GET["username"];
        ?>
        <script type="text/javascript">
            window.location = "list.php?username=<?="$_POST[username]"?>";
        </script>
        <?php
    }
$rrr = mysqli_fetch_array($res);
        echo "<pre>";var_dump($rrr); echo"</pre>";
}*/
?> 

</body>
</html>