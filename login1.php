<?php
               /*As we will are using the mysqli_* set of PHP classes to access the MySQL database,
                 you will need the following versions of PHP and mySQL.
                 1)PHP version 5.3 or later
                 2)MySQL version 4.1.3 or later                              */

  session_start();

  $dbhost='localhost:3306';          //Chabge here for hostname 
 $dbuser='aman';                     //Change here for database username 
 $dbpass='aman';                     //Change here for database password

 $connection = mysqli_connect($dbhost,$dbuser,$dbpass);
   if (!$connection)
    {
      die("Database Connection Failed" . mysqli_error($connection));
    }

 $select_db = mysqli_select_db($connection, 'student');           //Change 'student' with Your Database name
    if (!$select_db)
    {
       die("Database Selection Failed" . mysqli_error($connection));
    }

/*--------------Validation-------------*/
    if ($_SERVER["REQUEST_METHOD"]=="POST") 
    {
    	if (empty($_POST['uname']) || empty($_POST['upass']))
    	 {
    	  $unameerr='<h2 align="center" style="color:red,font-family:sans-serif">Username or Password Required !</h2><br>';
    	  echo $unameerr;
    	  die();
    	 }
        else
          {
            $uname=$_POST['uname'];
            $upass=$_POST['upass'];

            // Checking the values are existing in the database or not
            $query = "SELECT * FROM `worker` WHERE username='$uname' and password='$upass'";
                         /* Change 'worker' with your Table name*/
            $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
            $count = mysqli_num_rows($result);

            //If the posted values are equal to the database values, then session will be created for the user.
            if ($count >= 1)
            {
               $_SESSION['username'] = $uname;
               //echo "<br> Data Fetch sucessful ".$uname;
               //echo "<br>Total Rows = ".$count;


               /*---------------------Record Analysis-----------------*/

            $query1 = "SELECT * FROM `worker` WHERE username='$uname' and flag='1'";
            $result1 = mysqli_query($connection, $query1) or die(mysqli_error($connection));
            $count1 = mysqli_num_rows($result1);
            //echo "<br>You are present = ".$count1." days<br>";


            $query2 = "SELECT * FROM `worker` WHERE username='$uname' and flag='0'";
            $result2 = mysqli_query($connection, $query2) or die(mysqli_error($connection));
            $count2 = mysqli_num_rows($result2);
            //echo "<br>You are absent = ".$count2." days<br>";

            $per=(($count1/$count)*100);
            $per1 =round($per,1);
            //echo "<br> Your Attendence % =".$per1."<br>";
            
            /*$_SESSION['total']=$count;
            $_SESSION['present']=$count1;
            $_SESSION['absent']=$count2;
            $_SESSION['present1']=round((($count1/$count)*100),1);
            $_SESSION['absent1']=round((($count2/$count)*100),1);
            $_SESSION['percentage']=$per1; */
            header('Location: main.php');
            //echo "<a href='index.php'><br>display</a><br>";
           
            //echo "<a href='logout.php'>Logout</a>";

            }
            else
            {
               //If the login credentials doesn't match, he will be shown with an error message.
               $fmsg = '<h2 align="center" style="color:red,font-family:sans-serif">Invalid Login Credentials.</h2><br>';
               echo $fmsg;
            }

          } 
    }




?>