<!DOCTYPE html>
    <html>
    <head>
        <title>View users</title>
        <link rel="stylesheet" href="Checkusers.css">
    </head>
    <body>
        <table class="table">
            <thead>
                <th>username</th>
                <th>email</th>
                 <th>password</th>
                <th>Action</th>
            </thead>
            <tbody>
                <?php
                require_once("users_select.php");
                foreach($test as $key=> $value){
             ?>     
              <tr>
                  <td><?php echo $value["username"]?></td>
                  <td><?php echo $value["email"]?></td>
                    <td><?php echo $value["password"]?></td>
                  <td><a href=usersdb.php?edit="<?php echo $value["username"]?>">View</a></td>
                  <td><p class="button"><a href="C:\xampp\htdocs\Ecommerce2\Account.php"><input type="submit"value="EDIT"></a></p></button>/
              </tr>
              <?php
              }
              ?>
            </tbody>
        </table>
    </body>
</html>