<?php


    

    $name        = "";
    $id          = "";
    $dob         = "";
    $credit      = "";
    $cgpa        = "";
    $dept_id     = "";
    $err_name    = "";
    $err_id      = "";
    $err_dob     = "";
    $err_credit  = "";
    $err_cgpa    = "";
    $err_dept_id = "";


    if ($_SERVER ["REQUEST_METHOD"] =="POST")
	{
        if(empty($_POST["name"]))
		{
            $err_name="*Name required";
        }
        else{
            $name=$_POST["name"];
        }

        if(empty($_POST["id"]))
		{
            $err_id="*ID required";
        }
        else{
            $id=$_POST["id"];
        }

        if(empty($_POST["dob"]))
		{
            $err_dob="*DOB required";
        }
        else{
            $dob=$_POST["dob"];
        }

        if(empty($_POST["credit"]))
		{
            $err_credit="*credit required";
        }
        else{
            $credit=$_POST["credit"];
        }

        if(empty($_POST["cgpa"]))
		{
            $err_cgpa="*cgpa required";
        }
        else{
            $cgpa=$_POST["cgpa"];
        }

        if(empty($_POST["dept_id"]))
		{
            $err_deptid="*dept_id required";
        }
        else{
            $deptid=$_POST["dept_id"];
        }
    }
?>
<html>
      <head></head>
<body>
    <form method="post">
	
	Name:<input type="text" name="username"><span><?php echo $err_name; ?><br>
	ID:<input type="number" name="id"> <span><?php echo $err_id; ?><br>
    Date of Birth:<input type="number" name="dob"><span><?php echo $err_dob; ?> <br>
    Credit:<input type="number" name="credit"> <span><?php echo $err_credit; ?><br>
    CGPA:<input type="number" name="cgpa"><span><?php echo $err_cgpa; ?> <br>
    Dept ID:<input type="number" name="dept_id"><span><?php echo $err_dept_id; ?> <br>   
                   <input type="submit" name="submit" value="ADD">
    
    </form>
</body>
</html>