<?php include ('transaction-top.php') ?>
<?php include ('left.php') ?>

<div class = "col-md-9 right">
    <h3 class = "mt-4 mb-3">Transactions History</h3>
    <h6>Filter by Cash Register ID:</h6>
    <input type="text" class="form-control form-control-sm" style="max-width: 20rem;" placeholder = "Enter Cash Register ID...">
    <button class = "btn btn-primary btn-sm mt-3">Filter</button>
    <center>
    <table class="table text-dark mt-4">
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
                <td class = "p-4">lorem ipsum</td>
                <td class = "p-4">PHP 700.00</td>
                <td class = "p-4">PHP 1000.00</td>
            </tr>
            <tr class="table-light">
                <td class = "p-4">1000000001</td>
                <td class = "p-4">MM-DD-YY</td>
                <td class = "p-4">lorem ipsum</td>
                <td class = "p-4">PHP 700.00</td>
                <td class = "p-4">PHP 1000.00</td>
            </tr>
            <tr class="table-light">
                <td class = "p-4">1000000001</td>
                <td class = "p-4">MM-DD-YY</td>
                <td class = "p-4">lorem ipsum</td>
                <td class = "p-4">PHP 700.00</td>
                <td class = "p-4">PHP 1000.00</td>
            </tr>
            <tr class="table-light">
                <td class = "p-4">1000000001</td>
                <td class = "p-4">MM-DD-YY</td>
                <td class = "p-4">lorem ipsum</td>
                <td class = "p-4">PHP 700.00</td>
                <td class = "p-4">PHP 1000.00</td>
            </tr>
            <tr class="table-light">
                <td class = "p-4">1000000001</td>
                <td class = "p-4">MM-DD-YY</td>
                <td class = "p-4">lorem ipsum</td>
                <td class = "p-4">PHP 700.00</td>
                <td class = "p-4">PHP 1000.00</td>
            </tr>
        </tbody>
    </table> 
    </center>
</div>

<?php include ('footer.php') ?>