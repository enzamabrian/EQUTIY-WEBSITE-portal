<?php



 //required files of the page
 session_start();
 $dbhost = "sql309.epizy.com";
    $dbuser = "epiz_33889337";
    $dbpassword = "FqMj2qy6NMw";
    $dbname = "epiz_33889337_equity_leaders_program";
 $conn = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);

if(!$conn = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname))
{
    echo "Conncetion to Database Failed";
    die;
}

 if($_SERVER['REQUEST_METHOD'] == "POST")
 {

 //get details from the form when submit is clicked
 $scholar_name = $_POST['scholar_number'];
 $scholar_number = $_POST['scholar_name'];
 $query = "insert into all_scholars (scholar_number, scholar_name) values ('$scholar_number','$scholar_name')";
 mysqli_query($conn, $query);
 echo "<script> alert('Scholar Successfully added')</script>";
 }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/logo.png" type="image/jpeg">
    <link rel="stylesheet" href="css/signup.css">
    <title>Add scholar</title>
</head>
<style>
    body{
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        flex-direction: row;
        height: 100vh;
        background: whitesmoke;
        
    }

    form{
    background: white;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    width: 387px;
    height: fit-content;
    position: relative;
    border-radius: 10px;
    padding: 5px;
    padding-top: 10px;
    gap: -10px;
    margin: 10px auto;
    box-shadow: .1px .1px 150px rgba(0,0,0,.08);
    
    }

    form input {
    width: 80%;
    padding: 10px;
    border-radius: 6px;
    outline: none;
    border: 1px solid rgb(77, 50, 2);
    color: rgb(77, 50, 2);
    font-size: 14px;
  }
  
  form input::placeholder {
    font-size: 15px;
    color: rgb(105, 5, 5);
    font-weight: 300;
    
  }

  form input[type="submit"] {
    background: rgb(77, 50, 2);
    width: 80%;
    color: white;
    font-size: 18px;
    transition: .3s;
    font-weight: lighter;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    font-family: arial;
    cursor: pointer;

  }

  form select
  {
    width: 80%;
    font-size: 14px;
    padding: 6px;
    color: rgb(105, 5, 5);
    font-weight: 300;
    transition: .3s;
    font-weight: lighter;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    font-family: arial;
    cursor: pointer;
    margin-bottom: 10px;
    border-radius: 6px;
  }

  form input[type="submit"]:hover {
    background:  rgba(77, 50, 2,.7);
    cursor: pointer;
    transform: scale(1.03);
    border: none;
  }

</style>
<body>
    <form method="post" autocomplete="off">
    <h2 style="font-family:arial;font-size:19px">Add a scholar</h2>
        <input type="text" placeholder="Scholar Name" name="scholar_name" required><br>
        <input type="text" placeholder="Scholar Number" name="scholar_number" required><br>
        <input type="submit" value="Add scholar"><br>
        <a href="dash.php">Back</a><br>

    </form>
</body>
</html>