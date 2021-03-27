<html>
<head>
    <style>
        table,th,td{
            border:1px solid;
            border-collapse:collapse;
            width:40px;
            height:50px;
            margin:10px;
            padding:10px;  
        }
    </style>
</head>
<body>
    <form method="post" action="<?php echo base_url()?>First/update_det">
    <?php
       if(isset($user_data))
       {
           foreach($user_data->result() as $row1)
           {
    ?>
        <table>
            <tr>
            <td>Name :</td>
            <td><input type="text" name="uname" value="<?php echo $row1->user_name; ?>"></td>
            </tr>
            <tr>
            <td>Address:</td>
            <td><textarea name="address" ><?php echo $row1->address; ?></textarea></td>
            </tr>
            <tr>
            <td>Gender :</td>
            <td><input type="radio" name="gender" value="<?php echo $row1->gender; ?>"></td>
            </tr>
            <td>Age :</td>
            <td><input type="text" name="age" value="<?php echo $row1->age; ?>"></td>
            </tr>
            <td>Email :</td>
            <td><input type="email" name="email" value="<?php echo $row1->email; ?>"></td>
            </tr>
            <tr>
            <td><input type="hidden" name="id" value=<?php echo $row1->user_id;?>></td>
            </tr>
            <tr>
            <td rowspan="5"><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    <?php           
           }
       }
    else
       {
    ?>


     
    <table>
    <thead>
        <tr>
        <th>Name</th>
        <th>Address</th>
        <th>Gender</th>
        <th>Age</th>
        <th>Email</th>
        <th colspan="2"></th>
        
        </tr>
    </thead>  
  
          <?php
            if($n->num_rows()>0)
            {
                foreach($n->result() as $row)
                {
                    ?>
            <tr>
            <td><?php echo $row->user_name; ?></td>
            <td><?php echo $row->address; ?></td>
            <td><?php echo $row->gender; ?></td>
            <td><?php echo $row->age; ?></td>
            <td><?php echo $row->email; ?></td>
            <td><a href="<?php echo base_url()?>First/update_det/<?php echo $row->user_id; ?>">Edit</a></td>
            <td><a href="<?php echo base_url()?>First/deletedetails/<?php echo $row->user_id; ?>">Delete</a></td>
            </tr>

              <?php
              }
            }
            else
            {
                ?>
                <tr>
                <td colspan="5">No Data found</td>
                </tr>
               <?php
            }
            }
            ?>
    
    </table>
    </form>
</body>
</html>