<?php include('partial/menu.php'); ?>

 <div class="main-content">
     
     <div class="wrapper">
     <h1>USERS</h1>

     <br>

     <?php 
     if(isset($_SESSION['add']))
     {
         echo $_SESSION['add'];
         unset($_SESSION['add']);
     }      
     ?>
<br><br>

     <!----------------------view users table----------------->
     <table class="user-tbl">
        <tr>
            <th>S.N</th>
            <th>FirstName</th>
            <th>LastName</th>
            <th>PhoneNumber</th>
            <th>Email</th>
           
        </tr>

        <?php

        $sql = "SELECT *FROM user";
        $res = mysqli_query($conn, $sql);

        $count = mysqli_num_rows($res);

        $sn=1;

        if($count>0)
        {
            while($row=mysqli_fetch_assoc($res))
            {
               $UserId=$row['UserId'];
               $FirstName=$row['FirstName'];
               $LastName=$row['LastName'];
               $PhoneNumber=$row['PhoneNumber'];
               $Email=$row['Email'];
               ?>

               
         <tr>
                  <td> <?php echo $sn++; ?> </td>
                  <td> <?php echo $FirstName; ?> </td>
                  <td> <?php echo $LastName; ?> </td>
                  <td> <?php echo $PhoneNumber; ?> </td>
                  <td> <?php echo $Email; ?> </td>
                  <td>

               
                <a href="" class="btn-primary">EDIT</a>
            </td>       
        </tr>

               <?php



            }
        }
        else
        {
           // echo"<tr> <td colspan="6" class=" ">User not added yet</td> </tr>";
        }

        
        ?>


     </table>

     <!-----------------------------------------php to collect information------------------------------------------->
    
    


    
    

     </div>
     
     </div>
    
    <?php include('partial/footer.php'); ?>
