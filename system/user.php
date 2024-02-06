<?php include("header.php"); ?>
<?php include("topbar.php"); ?>

<div class="container-fluid">
    <form method="POST" action="user_process.php">
        <h1>user registration</h1>
        <div class="row">
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">First name</label>
                <input type="text" class="form-control" placeholder="First name" name="fname">
            </div>
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">last name</label>
                <input type="text" class="form-control" placeholder="last name" name="lname">
            </div>
        </div>
        <div class="row" >
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Password</label>
                <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="password" >
            </div>
        </div>
        <div>
            <div>
                <label for="inputAddress" class="form-label">Address 1</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address_1">
            </div>
            <div>
                <label for="inputAddress2" class="form-label">Address 2</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" name="address_2">
            </div>
        </div>
        <div class="row" >
            <div class="col-md-6">
                <label for="inputcontact4" class="form-label">Contact number</label>
                <input type="number" class="form-control" id="inputcontact4" placeholder="Contact number" name="contact_no">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Date of Birth</label>
                <input type="date" class="form-control" id="inputPassword4" placeholder="Date of Birth " name="dob">
            </div>
        </div>
        <div  class="row">
            <div class="col-md-4">
                <label for="inputCity" class="form-label">City</label>
                <input type="text" class="form-control" id="inputCity" placeholder="City" name="city">
            </div>
            <div class="col-md-4">
                <label for="inputCity" class="form-label">state</label>
                <input type="text" class="form-control" id="inputCity" placeholder="State" name="state">
            </div>
            <div class="col-md-4">
                <label for="inputCity" class="form-label">Pincode</label>
                <input type="text" class="form-control" id="inputCity" placeholder="Pincode" name="pincode">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 form-group">
                <label for="inputState" class="form-label ">status</label>
                <select id="inputState" class="form-select form-control" name="status">
                    <option selected>Choose...</option>
                    <option value="draft">Draft</option>
                    <option value="publish">Publish</option>
                </select>
            </div>
            <div class="col-md-4 form-group ">
                <label for="inputState" class="form-label ">Role</label>
                <select id="inputState" class="form-select form-control" name="role">
                    <option selected>Choose...</option>
                    <option value="admin">Administrator</option>
                    <option value="user">USer</option>
                </select>
            </div>
            <!-- <div class="col-md-4">
                <label for="inputPassword4" class="form-label">Registration Date</label>
                <input type="date" class="form-control" id="inputPassword4" name="registration_date">
            </div> -->
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">submit</button>
        </div>

    </form>
</div>