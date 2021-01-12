<?php include ('Baseline2.php') ?>

<div class = "col-md-9 right">
    <h3 class = "mt-4 mb-4">Hourly Subscription</h3>
    <h5>Receipt:</h5>
    <center>
    <table class="table text-dark mt-2">
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
                <th class = "p-4">Transaction Date:</th>
                <td class = "p-4">MM-DD-YY</td>
            </tr>
            <tr class="table-light">
                <th scope="row"></th>
                <th class = "p-4">Number of Hours:</th>
                <td class = "p-4">3</td>
            </tr>
            <tr class="table-light">
                <th scope="row"></th>
                <th class = "p-4">Hourly Rate:</th>
                <td class = "p-4">PHP 100.00</td>
            </tr>
            <tr class="table-light">
                <th scope="row"></th>
                <th class = "p-4" style = "font-size: 20px;">TOTAL PRICE:</th>
                <td class = "p-4">PHP 300.00</td>
            </tr>
            <tr>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </tbody>
    </table> 
    <button class = "btn btn-secondary">Cancel</button>
    <a href="KaraokeHour(Swipe).php" class = "btn btn-secondary">Confirm</a>
    </center>
</div>

<?php include ('footer.php') ?>