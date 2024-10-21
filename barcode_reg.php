


<?php

if(isset($_POST['barcode'])){
    
                $current_time=time();
                $DateTime=strftime("%d-%m-%y  %H:%M:%S",$current_time);
                $DateTime;
    
    $barcode=$_POST['barcode'];
    $barcode=mysqli_real_escape_string($connection,$barcode);
    
    //if data existed show message
    $query_grap="SELECT * FROM item WHERE barcode='$barcode'";
    $query_grap_exe=mysqli_query($connection,$query_grap);
    $count=mysqli_num_rows($query_grap_exe);
    
    if ($count>0) {
             $error="Data Duplicated!!";
         }else{
            $query="INSERT INTO item(barcode,datereg)";
            $query.="values('{$barcode}','{$DateTime}')";
            $query_exe=mysqli_query($connection,$query);
         }    
                
}

?>