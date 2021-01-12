<?php include ('Baseline.php') ?>

<div class = "col-md-9 right">
    <h3 class = "mt-5 mb-3">Card Created Successfully</h3>
    <center>
    <table class="table text-dark mt-4">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <tr class="table-light">
                <th scope="row"></th>
                <th class = "p-4">Card Number:</th>
                <td class = "p-4">1000000001</td>
            </tr>
            <tr class="table-light">
                <th scope="row"></th>
                <th class = "p-4">Date Registered:</th>
                <td class = "p-4">MM-DD-YY</td>
            </tr>
            <tr class="table-light">
                <th scope="row"></th>
                <th class = "p-4">Balance:</th>
                <td class = "p-4">PHP 100.00</td>
            </tr>
            <tr class="table-light">
                <th scope="row"></th>
                <th class = "p-4">VIP:</th>
                <td class = "p-4">N</td>
            </tr>
            <tr>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </tbody>
    </table> 
    <a href="NewCard.php" class = "btn btn-secondary">Cancel</a>
    <a href="NewCard.php" class = "btn btn-secondary">Confirm</a>
    </center>
</div>

<?php include ('footer.php') ?>