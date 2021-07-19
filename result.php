<html>
    <head>
        <meta charset="UTF-8">
        <title>LoginDB</title>
    </head>
    <body>

        <?php
        $con=  mysqli_connect("website0404.mysql.database.azure.com", "mahesh@website0404", "mko098ijn123!@#", "employee");
        if(!$con)
       {
           die('not connected');
       }
            $con=  mysqli_query($con, "select * from account");
       ?>
        <div>
            <td>Account Database</td>
         <table border="1">
            <th>Name</th>
            <th>Email</th>
            <th>Department</th>
            <th>Mobile</th>
         </tr>

        <?php

             while($row=  mysqli_fetch_array($con))
             {
                 ?>
            <tr>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['department']; ?></td>
                <td><?php echo $row['mobile'] ;?></td>
            </tr>
        <?php
             }
             ?>
             </table>
            </div>
    </body>
</html>
