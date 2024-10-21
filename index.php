<?php

include "db.php"; 
$error="";
?>

<!DOCTYPE html>
<html>
<style type="text/css">
    
    .pos-style{
        background-image: url(img/epos.jpg);
        height: 400px;
    }
    </style>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Pos</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
</head>  

    <body onload="document.pos.barcode.focus();">
    
       
        <div class="container">
        
            <form class="pos-style" name="pos" action="" method="post">
            
            
            <div class="form-group">
                
                <input type="text" name="barcode" class="form-control" placeholder="bar code reader">
                </div>
            
            </form>
            
         
            <?php include "barcode_reg.php"; ?>
            <h1 style="color:red" class="error"><?php echo $error; ?></h1>
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>N°</th>
                        <th>Barcode</th>
                        <th>Date Registered</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $query_grap="SELECT * FROM item";
                        $query_exe=mysqli_query($connection,$query_grap);
                        while($row=mysqli_fetch_assoc($query_exe)){
                            $id=$row['id'];
                            $barcode=$row['barcode'];
                            $date=$row['datereg'];
                        ?>
                        <tr>
                        <td><?php echo $id; ?></td>
                        <td><?php echo $barcode; ?></td>
                        <td><?php echo $date; ?></td>
                        </tr>
                        <?php 

                        }
                     ?>
                </tbody>
            </table>
        </div>
        
    
    
    </body>

</html>