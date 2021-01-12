<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/bootstrap.min.css">
    <link rel="stylesheet" href="./styles/style.css">
    <title>Document</title>
</head>
<body>
    <div class = "container">
        <div class = "row">
            <div class = "col-md-3 logo p-2">
                <img id="logo" src="/Karaoke/img/logo.png" alt="">
				<img id="title" src="/Karaoke/img/title.png" alt="">
            </div>
            <div class = "col-md-9 top d-flex align-items-center">
            </div>
        </div>
        <div class = "row">
            <div class = "col-md-3 left">
                <a href="NewCard.php" class="btn btn-primary my-2">Card Management</a>
				<a href="KaraokeHour.php" class="btn btn-primary my-2">Karaoke Hour</a>
                <a href="TransactionsHistory.php" class="btn btn-primary my-2">Transactions History</a>
                
                <div class = "employee-details">
                    <h5 id = "employee-fullname">Employee Fullname</h5>
                    <small><p>100000001</p></small>

                    <a href = "/Karaoke/Home.php" id = "logout" class="btn btn-primary text-white">Logout</a>
                    
                    <div class = "row machdetails mt-3">
                        <div class = "col-md-6">
                            <h6 id = "cash-register-id" class="bold">Cash Register ID</h6>
                            <small><p>100000001</p></small>
                        </div>
                        <div class = "col-md-6">
                            <h6 id = "branch-id" class="bold">Branch ID</h6>
                            <small><p>100000001</p></small>
                        </div>
                    </div>
			    </div>
            </div>
        