
<?php
function  check_login($conn)
{
    if(isset($_SESSION['id']))
    {
        $id = $_SESSION['user_id'];
        $query = "select * from admin where id = '$id' limit 1 ";

        $result = mysqli_query($conn, $query);

        if($result && mysqli_num_rows($result) > 0)
        {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }

    }

    // redirect to login
    header("Location: admin-login.php");
    die;
}