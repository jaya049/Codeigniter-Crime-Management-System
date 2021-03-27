<!DOCTYPE html>
<html>
    <head>
        <title>Crime Management System</title>
        <link rel="stylesheet"   href="<?php echo base_url(); ?>/css/style.css">
    </head>
    <body>
    <h1>Public Users</h1>
        <table>
            <thead>
               <tr>
                <th>Name</th>
                <th>Gender</th>
                <th>Age</th>
                <th>Address</th> 
                <th>Pincode</th>
                <th>District</th>
                <th>Mobile</th>
                <th>Email</th>
                <th>Action</th>
               </tr>
            </thead>
            <tbody>
            <?php
            if($n->num_rows()>0)
            {
                foreach($n->result() as $row)
                {
                    ?>
            <tr>
            <td><?php echo $row->name; ?></td>
            <td><?php echo $row->gender; ?></td>
            <td><?php echo $row->age; ?></td>
            <td><?php echo $row->address; ?></td>
            <td><?php echo $row->pincode; ?></td>
            <td><?php echo $row->district; ?></td>
            <td><?php echo $row->mob; ?></td>
            <td><?php echo $row->email; ?></td>
            <?php
                if($row->status =='1')
                {

            ?>
                    <td>Approved/<a href="<?php echo base_url(); ?>CrimeC/reject_public/<?php echo $row->login_id; ?>">Reject</a></td>
            
            <?php
                }
                else if($row->status=='2')
                {  
            ?>
                    <td>Rejected/<a href="<?php echo base_url(); ?>CrimeC/approve_public/<?php echo $row->login_id; ?>">Approve</a></td>
            
            <?php
                }
                else
                {
            ?>
                    <td><a href="<?php echo base_url(); ?>CrimeC/approve_public/<?php echo $row->login_id; ?>">Approve</a>/<a href="<?php echo base_url(); ?>CrimeC/reject_public/<?php echo $row->login_id; ?>">Reject</a></td>
            </tr>

              <?php
                }
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
            ?>
            </tbody>
        </table>
    </body>
</html>