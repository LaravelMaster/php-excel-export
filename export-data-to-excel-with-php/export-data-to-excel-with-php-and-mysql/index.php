<?php 
include_once("db_connect.php");
include("export_data.php");
?>
<div style="margin-left: 35%;">
			<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
				<button type="submit" id="export_data" name='export_data' value="Export to excel" class="btn btn-info">Export to excel</button>
			</form>

	<table id="" class="table table-striped table-bordered">
		<tr>
            <th>id</th>
			<th>Name</th>
			<th>email</th>
			<th>username</th>
			<th>password</th>
		</tr>
		<tbody>
			<?php foreach($developer_records as $developer) { ?>
			   <tr>
			   <td><?php echo $developer ['id']; ?></td>
			   <td><?php echo $developer ['name']; ?></td>
			   <td><?php echo $developer ['email']; ?></td>
			   <td><?php echo $developer ['username']; ?></td>
			   <td><?php echo $developer ['password']; ?></td>
			   </tr>
			<?php } ?>
		</tbody>
    </table>
</div>




