<!DOCTYPE html>
<title>crime</title>
<link rel="stylesheet" href="<?php echo base_url(); ?>/css/policeStyle.css">
<style>

</style>
<h1>CASE REGISTRATION TO COURT</h1>

<form method="post" action="<?php echo base_url(); ?>CrimeC/insert_police">
<div>
	<?php
if(isset($user_data))
{
	foreach($user_data->result() as $row1)
	{
		?>
		<table>
		<tr>
			<td>Complainter Name:</td>
			<td><input type="text" placeholder="Complainter Name" name="complainter_name" value="<?php echo $row1->complainter_name;?>" ></td>
		</tr>
		<tr>
			<td>Complaint:</td>
			<td><input type="text" placeholder="Complaint" name="complaint" value="<?php echo $row1->complaint;?>"></td>
		</tr>
		<tr>
			<td>Police Station Name:</td>
			<td><input type="text" placeholder="Police Station" name="police_station_name" value="<?php echo $row1->police_station_name;?>"></td>
		</tr>
		<tr>
			<td>District</td>
			<td><input type="text" placeholder="District" list="district" name="district" value="<?php echo $row1->district;?>"></td>
			
		<tr>
			<td>Upload Case Report:</td>
			<td><input type="file" placeholder="Choose file" name="file"></td>
		</tr>
		<tr>
			<td><td><input type="submit" value="Submit to Court"></td></td>
		</tr>
		</table>
		<?php
	}
}?>
		</div>

</form>
</body>
</html>