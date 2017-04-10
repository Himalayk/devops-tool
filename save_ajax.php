<?php
	include 'dbconfig.php';

    if(isset($_POST['ci']))
    {
        $ci = $_POST['ci'];
        $au = $_POST['au'];
        $cd = $_POST['cd'];  
        $mo = $_POST['mo'];
        
        $nonzero=$ci+$au+$cd+$mo;

        if ($nonzero != 0)
        {
        $query="INSERT INTO tb_score (ci,automation,cd,monitoring,result_date) VALUES('$ci','$au','$cd','$mo', now())";
    
        $result = mysql_query($query);
      
        if($result)
        {
            echo "<div class='alert alert-success'><button type='button' class='close' data-dismiss='alert'>×</button><strong>Success!</strong> data Added.</div>";
        }
        else
        {
            echo "<div class='alert alert-block alert-danger'><button type='button' class='close' data-dismiss='alert'>×</button><strong>Warning!</strong> Something went wrong please try Again.</div>";
        }
    }

    else

    {

            echo "<div class='alert alert-block alert-danger'><button type='button' class='close' data-dismiss='alert'>×</button><strong>Warning!</strong>Please select atleast one option.</div>";   
    }
    }

?>