<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Search For Scholar</title>
</head>
<style>
    body
    {
        display: grid;
        place-items: center;
        height: 100vh;
        
    }
    table {
  border-collapse: collapse;
  width: 60%;
  box-shadow: 1px 1px 50px rgba(0,0,0,.2);
  background: white;
}

th, td {
  text-align: left;
  padding: 10px;
  font-family: sans-serif;
}


th {
  background-color: rgba(0,0,0,.8);
  color: white;
}


@media print {
  body * {
    visibility: hidden;
  }

  #print-me, #print-me * 
{
  visibility: visible;
  height: auto;
}

}
</style>
<body>

<table id="print-me">
    <tr>
    <th>scholar number</th>
        <th>scholar name</th>
        

    </tr>
    <tbody>
        <?php
        $con = mysqli_connect("sql309.epizy.com","epiz_33889337","FqMj2qy6NMw","epiz_33889337_equity_leaders_program");
        {
            $query = "SELECT * FROM all_scholars";
            
            $query_run = mysqli_query($con,$query);

            if(mysqli_num_rows($query_run) > 0)
            {
                foreach($query_run as $items)
                {
                    ?>
                        <tr>
                        <td><?php echo $items['scholar_number'] ?></td>
                            <td><?php echo $items['scholar_name'] ?></td>
                            


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
<a href="dash.php" style="text-decoration:none">Back</a>


<button id="print" style="margin-top:-200px; cursor:pointer"><span><img src="socials/print.png"></span></button>
<script>
    const printBtn = document.getElementById('print');

    printBtn.addEventListener('click' , function(){
        print();
    })
</script>

</body>