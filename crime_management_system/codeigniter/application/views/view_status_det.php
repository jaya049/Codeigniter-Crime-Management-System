<html>
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
            <?php
               if($row->status=='1')
               {
            ?> <td>Approved</td>  
            <td><a href="<?php echo base_url()?>First/reject_det/<?php echo $row->user_id; ?>">Reject</a></td>    
            <?php
            }
            else if($row->status=='2')
            {
             ?><td>Rejected</td>  
             <td><a href="<?php echo base_url()?>First/approve_det/<?php echo $row->user_id; ?>">Approve</a></td> 
           <?php 
           }
           else
           {

            ?>
             <td><a href="<?php echo base_url()?>First/approve_det/<?php echo $row->user_id; ?>">Approve</a></td> 
            <td><a href="<?php echo base_url()?>First/reject_det/<?php echo $row->user_id; ?>">Reject</a></td>    
            
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
    
    </table>
    
</body>
</html>