<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="s.css">
  <title>Search For Scholar</title>
</head>
<style>
   
</style>
<body>
    <div class="table-search">
<table id="print-me">
    

    <tr>
        <th>scholar number</th>
        <th>scholar name</th>
        <th>primary phone</th>
        <th>alternative phone</th>
        <th>email</th>
        <th>university</th>


    </tr>
    <tbody>
        <?php
        $con = mysqli_connect("sql309.epizy.com","epiz_33889337","FqMj2qy6NMw","epiz_33889337_equity_leaders_program");
        if(isset($_GET['search']))
        {
            $filtervalues = $_GET['search'];
            $query = "SELECT * FROM equity_scholars_contact WHERE CONCAT(scholar_name,university) LIKE '%$filtervalues%' ";
            $query_run = mysqli_query($con,$query);

            if(mysqli_num_rows($query_run) > 0)
            {
                foreach($query_run as $items)
                {
                    ?>
                        <tr>
                            <td><?php echo $items['scholar_number'] ?></td>
                            <td><?php echo $items['scholar_name'] ?></td>
                            <td><?php echo $items['phone'] ?></td>
                            <td><?php echo $items['alternative_phone'] ?></td>
                            <td><?php echo $items['email'] ?></td>
                            <td><?php echo $items['university'] ?></td>



                        </tr> 

            <?php
            
                }
            }
            else
            {
                ?>
                        <tr>
                <td>No records found</td>
                        </tr> 
            <?php
            }
        }
        
        ?>
        <tr>
            <td>
            </td>
        </tr>
    </tbody>

    
</table>

    </div>
    <a href="dash.php" style="text-decoration:none">Back</a>

<button id="print" style="margin-top:-200px"><span><img src="socials/print.png"></span></button>
<script>
    const printBtn = document.getElementById('print');

    printBtn.addEventListener('click' , function(){
        print();
    })
</script>

</body>