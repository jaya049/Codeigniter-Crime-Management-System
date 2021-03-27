<!DOCTYPE html>
<html>
    <head>
        <title>Crime Management System</title>
        <link rel="stylesheet"   href="<?php echo base_url(); ?>/css/case_style.css">
    </head>
    <style>
        table,th,td{
            border:1px solid;
            border-collapse: collapse;
            padding:10px;
        }
    </style>
    <body>
    <h1>Complaints Added</h1>
        <table>
            <div class="tab">
            <thead>
               <tr>
                <th>Complaint ID</th>
                <th>Complainer Name</th>
                <th>Complaint</th>
                <th>Current Date</th>
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
            <td><?php echo $row->complaint_id; ?></td>
            <td><?php echo $row->complainter_name; ?></td>
            <td><?php echo $row->complaint; ?></td>
            <td><?php echo $row->cur_date; ?></td>
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
            ?>
            </tbody>
        </div>
        </table>
    </body>
</html>
