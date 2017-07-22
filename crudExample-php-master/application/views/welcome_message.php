<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<head>
	
</head>
<body>

<center>Add User</center>
<center>
	<a href="<?php echo base_url();?>index.php/welcome/view_user"><button> View Details</button></a>
 <form method="POST" action="<?php echo base_url();?>index.php/welcome/add_user">
 <table border="1" align="center">
 
        <tr><td>Name</td><td><input type="text" name="name"  required/></td></tr><br/>

        <tr><td>Email</td><td><input type="email" name="email"  required/></td></tr><br/>
            <tr><td>Phone-no</td><td><input type="number" name="phno"  required/></td></tr><br/>
			   <tr><td>Password</td><td><input type="password" name="password"  required/></td></tr><br/>
        <tr><td><input type="submit" name="add" value="Submit"/></td>
	
		</tr>

      

    </table>
	 </form>
</center>
</body>
</html>