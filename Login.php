<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/bootstrap.min.css">
    <link rel="stylesheet" href="./styles/style-home.css">
    <title>Document</title>
</head>
<body>
    <div class = "container home">
        <div class = "row">
            <div class = "col-sm-12 home right">
                
                <div class="row">
                    <div id="machDetails" class="ml-auto col-sm-2">
                        <div class="row">
                            <div class = "ml-auto col-sm-9">
                                    <h5 id = "cash-register-id" class="bold">Cash Register ID</h5>
                                    <h6>100000001</h6>
                            </div>
                            <div class = "ml-auto col-sm-9" >
                                    <h5 id = "branch-id" class="bold">Branch ID</h5>
                                    <h6>100000001</h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class = "mx-auto col-sm-7 brand p-3">
                        <form action="Employee/NewCard.php" method="post" class = "bg-secondary">
                            <div class="container bg-primary">
                                <div class="row">
                                    <h4 class="mx-auto">Employee Login</h4>
                                </div>
                            </div>

                            <div class="container">
                                <label for="uname"><b>Username</b></label>
                                <input type="text" placeholder="Enter Username" name="uname" required>
                                <label for="psw"><b>Password</b></label>
                                <input type="password" placeholder="Enter Password" name="psw" required>
                            </div>

                            <div class="row pb-3">
                                <button type="submit" class="btn cancelbtn col-sm-7 mx-auto">Login</button>
                            </div>
                        </form>
                    </div>
                </div>


            </div>
        </div>
        <div class = "row footer">
            <p class="ml-auto">
				@Copyright Mafumafu Karaoke Manager 2020
			</p>
        </div>
    </div>
</body>
</html>