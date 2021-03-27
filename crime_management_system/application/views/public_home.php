<!DOCTYPE html>
<html>
<head>
<title>Crime Management System</title>
<link rel="stylesheet" href="<?php echo base_url();?>/css/homeStyle.css">
<style>

</style>
</head>
<body class="bi">
<div class="menubar">
   <h4> PUBLIC HOME PAGE</h4>
   <ul>
    <li><a href="<?php echo base_url();?>CrimeC/public_profile_update_form">Profile Updation</a></li>
        <li><a href="#">Cases</a>
        <div class="submenu">
        <ul>
            <li><a href="<?php echo base_url();?>CrimeC/add_complaint">Add</a></li>
            <li><a href="<?php echo base_url();?>CrimeC/view_complaint_byPub">view</a></li>
            <!---------<li><a href="<?php echo base_url();?>CrimeC/public_home">logout</a></li>----------->
        </ul>
        </div>
         </li>
    <li><a href="<?php echo base_url();?>CrimeC/public_home">Case Status</a></li>
    <li><a href="<?php echo base_url();?>CrimeC/loginform">Logout</a></li>
   </ul>
   </div>
  </body>
</html>