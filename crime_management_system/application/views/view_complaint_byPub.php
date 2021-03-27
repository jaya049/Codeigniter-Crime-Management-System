<!DOCTYPE html>
<html>
    <head>
        <title>Crime Management System</title>
        <link rel="stylesheet"   href="<?php echo base_url(); ?>/css/style.css">
    </head>
    <style>
        table,td,th
            {
                border:2px solid red;
                border-collapse:collapse;
            }
            
        </style>
    <body>
    <h1> VIEW ADD CASES</h1>
        <table>
            <thead>
               <tr>
                <th>complainter Name</th>
                <th>complaint</th>
                <th>complaint Date</th>
                <th>Delete Action</th>
               </tr>
            </thead>
            <tbody>
            <?php
           if(isset($user_data))
    {
    foreach($user_data->result() as $row)
    {
    ?>
            <tr>
            <td><?php echo $row->complainter_name; ?></td>
            <td><?php echo $row->complaint;?></td>
            <td><?php echo $row->cur_date; ?></td>
            <td><a href="<?php echo base_url() ?>CrimeC/delete_complaint/<?php $row->complaint_id; ?>">Delete</a></td>
            </tr>
            <?php
              }
            }
            /*else
            {
                ?>
                <tr>
                <td colspan="5">No Data found</td>
                </tr>
               <?php
            }*/
            ?>
            </tbody>
        </table>
    </body>
</html>