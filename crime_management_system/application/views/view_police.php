<!DOCTYPE html>
<html>
    <head>
        <title>Crime Management System</title>
        <link rel="stylesheet"   href="<?php echo base_url(); ?>/css/style.css">
    </head>
    <body>
    <h1>Police Details</h1>
        <table>
            <thead>
               <tr>
                <th>Station ID</th>
                <th>Station Name</th>
                <th>District</th>
                <th>Pincode</th> 
                <th>Phone Number</th>                
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
            <td><?php echo $row->station_id; ?></td>
            <td><?php echo $row->station_name; ?></td>
            <td><?php echo $row->district; ?></td>
            <td><?php echo $row->pincode; ?></td>
            <td><?php echo $row->phone_num; ?></td>
            <td><?php echo $row->email; ?></td>
            <?php
                if($row->status =='1')
                {
            ?>
                    <td>Approved/<a href="<?php echo base_url(); ?>CrimeC/reject_police/<?php echo $row->login_id; ?>">Reject</a></td>
            <?php
                }
                else if($row->status =='2')
                {
            ?>
                    <td>Rejected/<a href="<?php echo base_url(); ?>CrimeC/approve_police/<?php echo $row->login_id; ?>">Approve</a></td>
            <?php
                }
                else
                {
            ?>
                    <td><a href="<?php echo base_url(); ?>CrimeC/approve_police/<?php echo $row->login_id; ?>">Approve</a>/<a href="<?php echo base_url(); ?>CrimeC/reject_police/<?php echo $row->login_id; ?>">Reject</a></td>
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