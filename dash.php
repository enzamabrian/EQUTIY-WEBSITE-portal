

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dasboard</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body> 
    <div class="side-bar">
      
    </div>

    <div class="container">
        <div class="header">
            <div class="nav" style="display:flex;align-items:center;justify-content:space-between; margin-right: 10px">
              <h2 style="margin-left: 10px;">ELP ADMIN DASHBOARD</h2>
              <a href="admin-login.php" style="float:right">Log Out</a>
            </div>
        </div>
    
        
    <div class="content">
        <div class="nav">
            
            <div class="search">
            <form method="GET" action="search.php">
            <input type="text" placeholder="Search Scholar" name="search" required>
            <button type="submit" style="border:none; background: none;"><span><img src="socials/search.svg" style="width: 35px; cursor: pointer;"></span></button>
            </form>
        </div>
        </div>
    
        <div class="cards">
            <div class="card">
                <div class="box">
                    <h2>Total Registered Scholars</h2>
                    <span>
                    <?php
            $con = mysqli_connect("sql309.epizy.com","epiz_33889337","FqMj2qy6NMw","epiz_33889337_equity_leaders_program");
            
            $dashq1 = "SELECT * FROM all_scholars ";
            $dashq1_run = mysqli_query($con, $dashq1);

            if($a = mysqli_num_rows($dashq1_run))
            {
                echo '<span>'.$a.'</span>';
            }
            else
            {
                echo '<span>No data</span>';
            }
            ?>
                    </span><br><br>
                    <a href="total.php">Details</a>
                </div>
                <div class="icon-design">
                    <img src="socials/people.svg" alt="">
                </div>
            </div>

            <div class="card">
                <div class="box">
                    <h2>Sholars with contact</h2>
                    <span>
                    <?php
            $con = mysqli_connect("sql309.epizy.com","epiz_33889337","FqMj2qy6NMw","epiz_33889337_equity_leaders_program");
            
            $dashq1 = "SELECT * FROM equity_scholars_contact ";
            
            $dashq1_run = mysqli_query($con, $dashq1);

            if($a = mysqli_num_rows($dashq1_run))
            {
                echo '<span>'.$a.'</span>';
            }
            else
            {
                echo '<span>No data</span>';
            }
            ?>
                    </span><br><br>
                    <a href="scholars-with-contact.php">Details</a>
                </div>
                <div class="icon-design">
                    <img src="socials/contact.svg" alt="">
                </div>
            </div>

            <div class="card">
                <div class="box">
                    <h2>Scholars Registered on Whatsapp</h2>
                    <span>

                    <?php
            $con = mysqli_connect("sql309.epizy.com","epiz_33889337","FqMj2qy6NMw","epiz_33889337_equity_leaders_program");
            
            $dashq1 = "SELECT * FROM equity_scholars_contact WHERE whatsapp ='YES' ";
            $dashq1_run = mysqli_query($con, $dashq1);

            if($a = mysqli_num_rows($dashq1_run))
            {
                echo '<span>'.$a.'</span>';
            }
            else
            {
                echo '<span>No data</span>';
            }
            ?>
                    </span><br><br>
                    <a href="scholars_whatsapp.php">Details</a>
                    
                </div>
                <div class="icon-design">
                    <img src="socials/whatsapp.svg" alt="">
                </div>
            </div>

            <div class="card">
                <div class="box">
                    <h2>Scholars with email address</h2>
                    <span>
                    <?php
            $con = mysqli_connect("sql309.epizy.com","epiz_33889337","FqMj2qy6NMw","epiz_33889337_equity_leaders_program");
            
            $dashq1 = "SELECT * FROM equity_scholars_contact WHERE email<>'' ";
            $dashq1_run = mysqli_query($con, $dashq1);

            if($a = mysqli_num_rows($dashq1_run))
            {
                echo '<span>'.$a.'</span>';
            }
            else
            {
                echo '<span>No data</span>';
            }
            ?>
                    
                    </span><br><br>
                    <a href="scholar-email.php">Details</a>
                </div>
                <div class="icon-design">
                    <img src="socials/email.svg" alt="">
                </div>
            </div>

            <div class="card">
                <div class="box">
                    <h2>Scholars in <b>Kyambogo university</b></h2>
                    <span>
                    <?php
            $con = mysqli_connect("sql309.epizy.com","epiz_33889337","FqMj2qy6NMw","epiz_33889337_equity_leaders_program");
            
            $dashq1 = "SELECT * FROM equity_scholars_contact WHERE university='Kyambogo University' ";
            $dashq1_run = mysqli_query($con, $dashq1);

            if($a = mysqli_num_rows($dashq1_run))
            {
                echo '<span>'.$a.'</span>';
            }
            else
            {
                echo '<span>No data</span>';
            }
            ?>
                    
                    </span><br><br>
                    <a href="scholars-in-kyambogo.php">Details</a>
                </div>
                <div class="icon-design">
                    <img src="socials/kyu.jpg" alt="" style="height:auto">
                </div>
            </div>

            <div class="card">
                <div class="box">
                    <h2>Scholars in <b>Makerere University</b></h2>
                    <span>

                    <?php
            $con = mysqli_connect("sql309.epizy.com","epiz_33889337","FqMj2qy6NMw","epiz_33889337_equity_leaders_program");
            
            $dashq1 = "SELECT * FROM equity_scholars_contact WHERE university='Makerere University' ";
            $dashq1_run = mysqli_query($con, $dashq1);

            if($a = mysqli_num_rows($dashq1_run))
            {
                echo '<span>'.$a.'</span>';
            }
            else
            {
                echo '<span>No data</span>';
            }
            ?>
                    </span><br><br>
                    <a href="scholars-in-makerere.php">Details</a>
                </div>
                <div class="icon-design">
                    <img src="socials/WEB Mak-5.png" alt="" style="height: auto;">
                </div>
            </div>

            <div class="card">
                <div class="box">
                    <h2><b>Male</b> scholars with contact</h2>
                    <span>

                    <?php
            $con = mysqli_connect("sql309.epizy.com","epiz_33889337","FqMj2qy6NMw","epiz_33889337_equity_leaders_program");
            
            $dashq1 = "SELECT * FROM equity_scholars_contact WHERE gender='Male' ";
            $dashq1_run = mysqli_query($con, $dashq1);

            if($a = mysqli_num_rows($dashq1_run))
            {
                echo '<span>'.$a.'</span>';
            }
            else
            {
                echo '<span>No data</span>';
            }
            ?>
                    </span><br><br>
                    <a href="male.php">Details</a>
                </div>
                <div class="icon-design">
                    <img src="socials/boy.png" alt="">
                </div>
            </div>

            <div class="card">
                <div class="box">
                    <h2><b>Female scholars</b> with contact</h2>
                    <span>

                    <?php
            $con = mysqli_connect("sql309.epizy.com","epiz_33889337","FqMj2qy6NMw","epiz_33889337_equity_leaders_program");
            
            $dashq1 = "SELECT * FROM equity_scholars_contact WHERE gender='Female' ";
            $dashq1_run = mysqli_query($con, $dashq1);

            if($a = mysqli_num_rows($dashq1_run))
            {
                echo '<span>'.$a.'</span>';
            }
            else
            {
                echo '<span>No data</span>';
            }
            ?>
                    </span><br><br>
                    <a href="female.php">Details</a>
                </div>
                <div class="icon-design">
                    <img src="socials/girl.png" alt="">
                </div>
            </div>

            <div class="card" style="width: 100%; padding: 5px;margin-top:40px; justify-content: center; gap: 40px;">
                <div class="box">
                    <h2>Add a scholar</h2>
                </div>
                <div class="icon-design" style="padding: 10px;border-radius: 5px; border: 1px solid green;cursor: pointer;">
                <a href="add_scholar.php"><img src="socials/add.svg" style="width: 25px;height: 25px;"></a>
                </div>
            </div>

            <div class="card" style="width: 100%; padding: 5px;margin-top:40px; justify-content: center; gap: 40px;">
                <div class="box">
                    <h2>Add an admin</h2>
                </div>
                <div class="icon-design" style="padding: 10px;border-radius: 5px; border: 1px solid green;cursor: pointer;">
                    <a href="admin-add.php"><img src="socials/add.svg" style="width: 25px;height: 25px;"></a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>