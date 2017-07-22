<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>CI CRUD</title>

<script type="text/javascript">

function show_confirm(act,gotoid)

{

if(act=="edit")

var r=confirm("Do you really want to edit?");

else

var r=confirm("Do you really want to delete?");

if (r==true)

{

window.location="<?php echo base_url();?>index.php/users/"+act+"/"+gotoid;

}

}

</script>

</head>

<body>

 

<h2> Details </h2>

 

<table width="600" border="1" cellpadding="5">

 

<tr>

<th scope="col">Id</th>
<th scope="col">Name</th>

 

<th scope="col">Email</th>

 

<th scope="col">Phone-number</th>
<th scope="col" colspan="2">Action</th>

</tr>

 

<?php foreach ($user_list->result() as $row){ ?>

<tr>

<td><?php echo $row->id; ?></td>


<td><?php echo $row->name; ?></td>

 

<td><?php echo $row->email; ?></td>

 

<td><?php echo $row->phoneno; ?></td>

<td width="40" align="left" ><a href="<?php echo base_url() . "index.php/welcome/edit_details/".$row->id; ?>" onClick="show_confirm('edit',<?php echo $row->id;?>)">Edit</a></td>

<td width="40" align="left" ><a href="<?php echo base_url() . "index.php/welcome/delete/" . $row->id; ?>">
<button >Delete</button></a></td>




 

</tr>

<?php }?>

</table>

</body>
