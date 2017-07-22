<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<head>
	
</head>
<body>

<center>Update User</center>
<center>
	
 <form method="POST" action="<?php echo base_url();?>index.php/welcome/update_user/">
 <?php foreach ($edit_list->result() as $row){ ?>
 <table border="1" align="center">
        <tr><td>Id</td><td><input type="text" name="id" value="<?php echo $row->id; ?>"></td></tr><br/>
        <tr><td>Name</td><td><input type="text" name="name" value="<?php echo $row->name; ?>"></td></tr><br/>

        <tr><td>Email</td><td><input type="email" name="email" value="<?php echo $row->email; ?>" ></td></tr><br/>
            <tr><td>Phone-no</td><td><input type="number" name="phno" value="<?php echo $row->phoneno; ?>" ></td></tr><br/>
			   <tr><td>Password</td><td><input type="text" name="password" value="<?php echo $row->password; ?>"></td></tr><br/>
        <tr><td><input type="submit" name="add" value="Update"/></td>
	
		</tr>

      

    </table>
	
<?php }?>
	 </form>
</center>
</body>
</html>