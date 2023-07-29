<?php 

include('config.php');

?>

<div class="container topshortHeight bottomshortHeight">
<a href="index.php" class="btn btn-light">Back to Home</a>
</div>


<div class="container topshortHeight">

<table id="example" class="display" style="width:100%">
<thead>
<tr>
<th>ID</th>
<th>Username</th>
<th>User Email</th>
<th>User Contact</th>
<th>Onboarding Date</th>
<th>Edit</th>
<th>Delete</th>
</tr>
</thead>
<tbody>

<?php 

$fetchdetails = mysqli_query($config,"SELECT * FROM userdetails");

while($row = mysqli_fetch_array($fetchdetails)) { ?>

<tr>
<td id="id"><?php echo $row['id']; ?></td>
<td><?php echo $row['username']; ?></td>
<td><?php echo $row['useremail']; ?></td>
<td><?php echo $row['usercontact']; ?></td>
<td><?php echo $row['registration_date']; ?></td>
<td><a href="editSingleData.php?<?php echo "id=".$row['id']; ?>" class="btn btn-primary">Edit Data</a></td>
<td><a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Delete Data</a></td>
</tr>

<?php } ?>
</tbody>
<tfoot>
<tr>
<th>ID</th>
<th>Username</th>
<th>User Email</th>
<th>User Contact</th>
<th>Onboarding Date</th>
<th>Edit</th>
<th>Delete</th>
</tr>
</tfoot>
</table>

</div>


<!-- section for modal starts here -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirm Deletion of Row Id: <span class='ShowData'> </span> </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <label id="id2"></label>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- section for modal ends here -->


<script type="text/javascript">
new DataTable('#example');


</script>

