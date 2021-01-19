<?php include ('shared/Baseline.php') ?>

<div class = "col-md-9 right">
    <h3 class = "m-4">Balance Inquiry</h3>
    <center>
    <div class="card text-white bg-secondary mb-3" style="max-width: 20rem; margin-top: 8rem;">
        <div class="card-header">Enter Card Number</div>
        <div class="card-body">
            <form class="form-group row">
                <div class="col-sm-12">
                    <input type="text" class="form-control" id="staticEmail" placeholder = "Enter card number...">
                    <a href="BalInquiry(Success).php" class = "btn btn-primary btn-sm mt-3">Submit</a>
                </div>
            </form>
        </div>
    </div>
    </center>
</div>

<?php include ('shared/footer.php') ?>