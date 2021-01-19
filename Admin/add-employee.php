<?php include ('shared/employees-top.php') ?>
<?php include ('shared/left.php') ?>

<div class = "col-md-9 right">
    <h3 class = "mt-4 ml-4">Add Employee</h3>
    
    <div class="card text-white bg-secondary" style="max-width: 30rem; margin-left: 250px;">
        <center><div class="card-header">Enter Employee Details</div></center>
        <div class="card-body">
        <form>
            <div class="form-group">
            <label for="exampleInputEmail1">Employee Name</label>
            <input type="email" class="form-control form-control-sm" placeholder="Enter employee name...">
            </div>
            <div class="form-group">
            <label for="exampleInputEmail1">Date Employed</label>
            <input type="email" class="form-control form-control-sm" placeholder="MM-DD-YY">
            </div>
            <div class="form-group">
            <label for="exampleInputEmail1">Cellphone Number</label>
            <input type="email" class="form-control form-control-sm" placeholder="Enter cellphone number...">
            </div>
            <div class="form-group">
            <label for="exampleInputEmail1">Date Assigned</label>
            <input type="email" class="form-control form-control-sm" placeholder="MM-DD-YY">
            </div>
            <div class="form-group">
            <label for="exampleInputEmail1">Salary</label>
            <input type="email" class="form-control form-control-sm" placeholder="Enter salary...">
            </div>
            <div class="form-group">
            <label for="exampleInputEmail1">Working Hours</label>
            <input type="email" class="form-control form-control-sm" placeholder="Enter working hours...">
            </div>
            <center><input type="submit" class = "btn btn-primary btn-sm mt-3" value = "submit"></center>
        </form>
        </div>
    </div>
 
</div>

<?php include ('shared/footer.php') ?>