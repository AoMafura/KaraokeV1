<?php include ('shared/branch-top.php') ?>
<?php include ('shared/left.php') ?>

<div class = "col-md-9 right">
    <h3 class = "m-4">Add Branch</h3>
    
    <div class="card text-white bg-secondary" style="max-width: 30rem; margin-left: 250px;">
        <center><div class="card-header">Enter Branch Details</div></center>
        <div class="card-body">
        <form action="./branches.php" method="POST">
            <div class="form-group">
            <label for="exampleInputEmail1">Branch Name</label>
            <input type="text" class="form-control form-control-sm" placeholder="Branch Name" name="branch_name">
            </div>
            <div class="form-group">
            <label for="exampleInputEmail1">Branch Type</label>
            <input type="text" class="form-control form-control-sm" placeholder="Branch Type" name="branch_type">
            </div>
            <div class="form-group">
            <label for="exampleInputEmail1">Status</label>
            <select name="branch_status" class="form-control form-control-sm mr-2"  id="exampleSelect1">
                <option>Active</option>
                <option>Inactive</option>
            </select>
            <div class="form-group">
            <label for="exampleInputEmail1">Address</label>
            <input type="text" class="form-control form-control-sm" placeholder="Enter Address..." name="branch_address">
            </div>
            <center><input type="submit" class = "btn btn-primary btn-sm mt-3" value ="submit" name="crt_branch"></center>
        </form>
        </div>
    </div>
    <?php

    ?>

</div>

<?php include ('shared/footer.php') ?>