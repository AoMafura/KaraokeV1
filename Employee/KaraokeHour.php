<?php include ('shared/giBaseline2.php') ?>

<div class = "col-md-9 right">
    <h3 class = "m-3">Hourly Subscription</h3>
    <center>
    <div class="card text-white bg-secondary mb-3" style="max-width: 20rem;">
        <div class="card-body">
        <table class="table text-dark mt-3">
            <tbody>
            <tr class="table-light">
                    <th>Hourly Rate:</th>
                    <td></td>
                </tr>
                <tr class="table-light">
                    <th>Classic</th>
                    <td>PHP 50.00 / per hour</td>
                </tr>
                <tr class="table-light">
                    <th>VIP</th>
                    <td>PHP 40.00 / per hour</td>
                </tr>
            </tbody>
        </table>
        </div>
    </div>
    <div class="card text-white bg-secondary " style="max-width: 20rem;">
        <div class="card-body">
        <form class="form-group row">
                <div class="col-sm-12">
                    <input type="text" class="form-control mt-3 mb-2    " id="staticEmail" placeholder = "Enter Number of Hours...">
                    <select class="form-control" id="exampleSelect1">
                        <option>Room Number:</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                    <div class="btn-group btn-group-sm mt-4" role="group">   
                        <button class = "btn-line btn-primary btn-sm  mr-5" style = "width: 100px;">Cancel</button>
                        <a href="KaraokeHour(Room).php" class = "btn-line btn-primary btn-sm" style = "width: 100px;">Confirm</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </center>
</div>

<?php include ('shared/footer.php') ?>