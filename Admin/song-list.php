<?php include ('songlist-top.php') ?>
<?php include ('left.php') ?>

<div class = "col-md-9 right">
    <h3 class = "mt-4 mb-3">Song List</h3>
    <div class = "row">
        <div class = "col-md-6">
            <h6>Song Name:</h6>
            <input type="text" class="form-control form-control-sm" style="max-width: 20rem;" placeholder = "Enter Song Name...">
        </div>
        <div class = "col-md-6">
            <h6>Artist Name:</h6>
            <input type="text" class="form-control form-control-sm" style="max-width: 20rem;" placeholder = "Enter Artist Name  ...">
        </div>
    </div>
    <div class="form-group mt-3">
      <h6>Genre</h6>
      <select class="form-control form-control-sm mr-2" style = "max-width: 20rem;" id="exampleSelect1">
        <option>Rock</option>
        <option>Acoustic</option>
        <option>OPM</option>
        <option>RnB</option>
        <option>EDM</option>
        <option>Pop</option>
      </select>
      <button class = "btn btn-primary btn-sm mt-3">Filter</button>
      <button class = "btn btn-primary btn-sm mt-3" style="float: right;">Create New</button>
    </div>
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
                <td class = "p-4">Refill</td>
                <td class = "p-4">PHP 700.00</td>
                <td class = "p-4">PHP 1000.00</td>
            </tr>
            <tr class="table-light">
                <td class = "p-4">1000000001</td>
                <td class = "p-4">MM-DD-YY</td>
                <td class = "p-4">Refill</td>
                <td class = "p-4">PHP 700.00</td>
                <td class = "p-4">PHP 1000.00</td>
            </tr>
            <tr class="table-light">
                <td class = "p-4">1000000001</td>
                <td class = "p-4">MM-DD-YY</td>
                <td class = "p-4">Refill</td>
                <td class = "p-4">PHP 700.00</td>
                <td class = "p-4">PHP 1000.00</td>
            </tr>
            <tr class="table-light">
                <td class = "p-4">1000000001</td>
                <td class = "p-4">MM-DD-YY</td>
                <td class = "p-4">Refill</td>
                <td class = "p-4">PHP 700.00</td>
                <td class = "p-4">PHP 1000.00</td>
            </tr>
            <tr class="table-light">
                <td class = "p-4">1000000001</td>
                <td class = "p-4">MM-DD-YY</td>
                <td class = "p-4">Refill</td>
                <td class = "p-4">PHP 700.00</td>
                <td class = "p-4">PHP 1000.00</td>
            </tr>
        </tbody>
    </table> 
    </center>
</div>

<?php include ('footer.php') ?>