<?php include("header.php"); ?>
<?php include("topbar.php"); ?>
<?php include("developers.php");?>
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
                            <th>name</th>
                            <th>email</th>
                            <th>password</th>
                            <th>address1</th>
                            <th>address2</th>
                            <th>contact_no</th>
                            <th>dob</th>
                            <th>city</th>
                            <th>state</th>
                            <th>pincode</th>
                            <th>status</th>
                            <th>role</th>
                        </tr>
                        <tr>
                        <?php
      if(is_array($fetchData)){      
      $sn=1;
      foreach($fetchData as $data){
    ?>
      <tr>
      <td><?php echo $data['name']??''; ?></td>
      <td><?php echo $data['email']??''; ?></td>
      <td><?php echo $data['password']??''; ?></td>
      <td><?php echo $data['address_1']??''; ?></td>
      <td><?php echo $data['address_2']??''; ?></td>
      <td><?php echo $data['contact_no']??''; ?></td>
      <td><?php echo $data['dob']??''; ?></td>
      <td><?php echo $data['city']??''; ?></td>
      <td><?php echo $data['state']??''; ?></td>
      <td><?php echo $data['pincode']??''; ?></td>
      <td><?php echo $data['status']??''; ?></td>
      <td><?php echo $data['role']??''; ?></td>  
     </tr>
     <?php
      $sn++;}}else{ ?>
      <tr>
        <td colspan="8">
    <?php echo $fetchData; ?>
  </td>
    <tr>
    <?php
    }?>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
<?php include("footer.php"); ?>          