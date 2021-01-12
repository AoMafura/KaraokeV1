<?php include ('branch-top.php') ?>
<?php include ('left.php');
    include ('php/function.php');
    session_start();
    $id = $_SESSION["id"];
    $res = searchBranch($id);
    $row = mysqli_fetch_assoc($res);
?>

<div class = "col-md-9 right">
    <h3 class = "m-4">Update Branch</h3>
    
    <div class="card text-white bg-secondary" style="max-width: 30rem; margin-left: 250px;">
        <center><div class="card-header">Update Branch (<?php echo $row['branch_name'] ?>) Details</div></center>
        <div class="card-body">
        <form action="./branches.php" method="POST">
            <div class="form-group">
            <label for="exampleInputEmail1">Branch Name</label>
            <input type="text" class="form-control form-control-sm" value="<?php echo $row['branch_name'] ?>" name="branch_name">
            </div>
            <div class="form-group">
            <label for="exampleInputEmail1">Branch Type</label>
            <input type="text" class="form-control form-control-sm" value="<?php echo $row['branch_type'] ?>" name="branch_type">
            </div>
            <div class="form-group">
            <label for="exampleInputEmail1">Status</label>
            <select name="branch_status" class="form-control form-control-sm mr-2"  id="exampleSelect1">
                <option>Active</option>
                <option>Inactive</option>
            </select>
            <div class="form-group">
            <label for="exampleInputEmail1">Address</label>
            
            <input type="text" class="form-control form-control-sm" value="<?php echo $row['branch_address'] ?>" name="branch_address">
            </div>
            <center><input type="submit" class = "btn btn-primary btn-sm mt-3" value ="submit" name="updt_branch"></center>
        </form>
        </div>
    </div>
    <?php

    ?>

</div>

<?php include ('footer.php') ?>