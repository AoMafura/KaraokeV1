<?php include ('songlist-top.php') ?>
<?php include ('left.php') ?>

<div class = "col-md-9 right">
    <h3 class = "m-4">Update Song</h3>
    
    <div class="card text-white bg-secondary" style="max-width: 30rem; margin-left: 250px;">
        <center><div class="card-header">Enter Song Details</div></center>
        <div class="card-body">
        <form>
            <div class="form-group">
            <label for="exampleInputEmail1">Song Name</label>
            <input type="email" class="form-control form-control-sm" placeholder="Enter song name...">
            </div>
            <div class="form-group">
            <label for="exampleInputEmail1">Released Date</label>
            <input type="email" class="form-control form-control-sm" placeholder="MM-DD-YY">
            </div>
            <div class="form-group">
            <label for="exampleInputEmail1">Genre</label>
            <select class="form-control form-control-sm mr-2"  id="exampleSelect1">
                <option>Rock</option>
                <option>Acoustic</option>
                <option>OPM</option>
                <option>RnB</option>
                <option>EDM</option>
                <option>Pop</option>
            </select>
            </div>
            <div class="form-group">
            <label for="exampleInputEmail1">Artist</label>
            <input type="email" class="form-control form-control-sm" placeholder="Enter artist...">
            </div>
            <div class="form-group">
            <label for="exampleInputEmail1">Album Name</label>
            <input type="email" class="form-control form-control-sm" placeholder="Enter album name...">
            </div>
            <center><input type="submit" class = "btn btn-primary btn-sm mt-3" value = "submit"></center>
        </form>
        </div>
    </div>
 
</div>

<?php include ('footer.php') ?>