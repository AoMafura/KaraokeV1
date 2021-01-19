<?php include ('transaction-top.php') ?>
<?php include ('left.php') ?>

<div class = "col-md-9 right">
    <h3 class = "mt-4 mb-5">Delete Transaction</h3>
    <h6>Confirm Deletion:</h6>
    <center>
    <table class="table text-dark mt-5">
        <thead>
            <tr>
                <th scope="col">Card Number</th>
                <th scope="col">Transaction Date</th>
                <th scope="col">Type</th>
                <th scope="col">Price</th>
                <th scope="col">Payment</th>
            </tr>
        </thead>
        <tbody>
            <tr class="table-light">
                <td class = "p-4">1000000001</td>
                <td class = "p-4">MM-DD-YY</td>
                <td class = "p-4">Refill</td>
                <td class = "p-4">PHP 700.00</td>
                <td class = "p-4">PHP 1000.00</td>
            </tr>
        </tbody>
    </table> 

    <div class="card bg-light" style="max-width: 30rem; margin-top: 5rem;">
        <div class="card-header bg-light">Are you sure you wish to delete this transaction?</div>
        <div class="card-body">
            <form class="form-group row">
                <div class="col-sm-12">
                    <button class = "btn btn-primary btn-sm mt-3">Confirm</button>
                    <button class = "btn btn-primary btn-sm mt-3">Cancel</button>
                </div>
            </form>
        </div>
    </div>
    </center>
</div>

<?php include ('footer.php') ?>