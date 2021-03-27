<!DOCTYPE html>
<html>
    <head>
        <title>Crime Management System</title>
        <link rel="stylesheet"   href="<?php echo base_url(); ?>/css/style.css">
    </head>
    <style>
        table,th,td{
            border:1px solid;
            border-collapse: collapse;
            padding:5px;
        }
    </style>
    <body>
    <h1>Court Details</h1>
        <table>
            <thead>
               <tr>
                <th>Court ID</th>
                <th>Court Name</th>
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
            <td><?php echo $row->court_id; ?></td>
            <td><?php echo $row->court_name; ?></td>
            <td><?php echo $row->district; ?></td>
            <td><?php echo $row->pincode; ?></td>
            <td><?php echo $row->phone_num; ?></td>
            <td><?php echo $row->email; ?></td>
            <?php
                if($row->status =='1')
                {
            ?>
                    <td>Approved/<a href="<?php echo base_url(); ?>CrimeC/reject_court/<?php echo $row->login_id; ?>">Reject</a></td>
            <?php
                }
                else if($row->status =='2')
                {
            ?>
                    <td>Rejected/<a href="<?php echo base_url(); ?>CrimeC/approve_court/<?php echo $row->login_id; ?>">Approve</a></td>
            <?php
                }
                else
                {
            ?>
                    <td><a href="<?php echo base_url(); ?>CrimeC/approve_court/<?php echo $row->login_id; ?>">Approve</a>/<a href="<?php echo base_url(); ?>CrimeC/reject_court/<?php echo $row->login_id; ?>">Reject</a></td>
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