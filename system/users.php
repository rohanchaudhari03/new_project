<?php include("header.php"); ?>
<?php include("topbar.php"); ?>
<?php include("connection.php"); ?>
<input name="add_user" type="button" value="Add User" onclick="window.open('user.php')"/>

<?php 
  $sql="SELECT * FROM user_registration";
  $result = mysqli_query($conn,$sql);
?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank"
        href="https://datatables.net">official DataTables documentation</a>.
    </p>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Address1</th>
                            <th>Address2</th>
                            <th>Contact No</th>
                            <th>DOB</th>
                            <th>City</th>
                            <th>State</th>
                            <th>Pincode</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            if (mysqli_num_rows($result)>0){
                                while($data = mysqli_fetch_assoc($result)){
                                    $name=$data['name'];
                                    $email=$data['email'];
                                    $password=$data['password'];
                                    $address_1=$data['address_1'];
                                    $address_2=$data['address_2'];
                                    $contact_no=$data['contact_no'];
                                    $dob=$data['dob'];
                                    $city=$data['city'];
                                    $state=$data['state'];
                                    $pincode=$data['pincode'];
                                    $status=$data['status'];

                        ?>
                            <tr>
                                <td><?php echo $name; ?></td>
                                <td><?php echo $email; ?></td>
                                <td><?php echo $password; ?></td>
                                <td><?php echo $address_1; ?></td>
                                <td><?php echo $address_2; ?></td>
                                <td><?php echo $contact_no ; ?></td>
                                <td><?php echo $dob; ?></td>
                                <td><?php echo $city; ?></td>
                                <td><?php echo $state; ?></td>
                                <td><?php echo $pincode; ?></td>
                                <td><?php echo $status; ?></td>
                                <td><a title="Update" href="user_update.php?user_id=<?php echo $data['user_id']; ?>">UPDATE</a> | <a title="Delete" href="user_delete.php?user_id=<?php echo $data['user_id']; ?>">DELETE</a></td>
                            </tr>
                        <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
<?php include("footer.php"); ?>          