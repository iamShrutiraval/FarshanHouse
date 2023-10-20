<?php
    if(isset($_POST['Login']))
    {
        $email = $_POST['email'];
        $pass= $_POST['password'];

         include 'dbConnect.php';

        $qry = "select * from user where email_id = '$email'";
        $result = mysqli_query($conn, $qry);

        $numRows = mysqli_num_rows($result);
        // echo $numRows;
        if ($numRows==1) // if is customer
        {
            // echo 'hello';
                $row = mysqli_fetch_assoc($result);
            if (password_verify($pass,$row['password'])) // matlab login thai jiyu
            {
                // echo "oye hoye login thai jiyu";
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['Role'] = "$email";
                $_SESSION['Rolec'] = "Customer";
                $_SESSION['id'] = $row['user_id'];
                $_SESSION['name']=$row['firstname'];
            
                           
            header("Location:/project/pf/project/index.php?");
             
                exit();
            }
            else   
            {
                // echo "potaan id thi aay topa";
                echo "<script>alert('Please Enter correct password');</script>";
                header("Location:/project/pf/project/login.php?LoginSuccess=false&Fault=WrongPssword");
                // echo "<script>window.location.href='login.php'</script>";
                exit();
            }
        }
        else // when no emil id is in customer table
        {
            $qry2 = "select * from admin where email = '$email'";
            $result2 = mysqli_query($conn, $qry2);

            $numRows2 = mysqli_num_rows($result2);
           
            if ($numRows2 == 1)
            {
                $row2 = mysqli_fetch_assoc($result2);
                $first=$row2['first_name'];
                if(password_verify($pass,$row2['password'])){

                session_start();
                $_SESSION['Role'] =$email;
                $_SESSION['firstname'] =$first;
                header("Location:/project/pf/project/Adminfinal/or_index.php?");
                exit();
                    
                }
                else{
                    echo "<script>alert('Please Enter correct password');</script>";
                    header("Location:/project/pf/project/Login.php?LoginSuccess=false&Fault=WrongPssword");
                
                    exit();   
                }
            }
            else
            {
                echo "<script>alert('You are not user please register');</script>";
                echo "<script>window.location.href='Registration.php'</script>";

            }
        }
    }
?>
<script>


</script>