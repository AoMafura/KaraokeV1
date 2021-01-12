<?php include ('branch-top.php') ?>
<?php include ('left.php'); ?>
<?php
    include ('./php/function.php');
    $res = displayBranch();

    if(isset($_POST["crt_branch"])){
        createBranch($_POST["branch_name"],$_POST["branch_type"],$_POST["branch_status"],$_POST["branch_address"]);
        $res = displayBranch();
    }

    if(isset($_POST["filter"])){
        $res = searchBranch($_POST["brnch_id"]);
    }

    if(isset($_POST["idCheck"])){
        if(isset($_POST["delete"])){
            $id = $_POST["idCheck"];
            deleteBranch($id);
            $res = displayBranch();
        }else if(isset($_POST["update"])){
            session_start();
            $_SESSION["id"] = $_POST["idCheck"];
            header('Location: update-branch.php');
        }
    }

    if(isset($_POST["updt_branch"])){
        session_start();
        updateBranch($_SESSION["id"],$_POST["branch_name"],$_POST["branch_type"],$_POST["branch_status"],$_POST["branch_address"]);
        $res = displayBranch();
    }
?>

<div class = "col-md-9 right">
    <h3 class = "mt-4 mb-3">Branches</h3>
    <h6>Search Branch:</h6>
    <form method="POST">
        <input type="number" name="brnch_id" class="form-control form-control-sm mr-2" style="max-width: 20rem; float: left;" placeholder = "Enter Branch ID...">
        <button class = "btn btn-primary btn-sm" style = "max-width: 4rem;" name="filter">Filter</button>
    </form>
   <a href="./add-branch.php"> <button class = "btn btn-primary btn-sm" style="float: right;">Create New</button></a>
    <center>
    <table class="table text-dark mt-4">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">Branch ID</th>
                <th scope="col">Branch Name</th>
                <th scope="col">Branch Type</th>
                <th scope="col">Branch Status</th>
                <th scope="col">Address</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php
                if(mysqli_num_rows($res) > 0){
                    while($row = mysqli_fetch_assoc($res)){
                        echo "<tr class='table-light'><form action='' method='POST'>";
                        $id = $row["branch_id"];
                        echo "<td class='p-4'> <input type='checkbox' value='$id' name='idCheck'></td><td class='p-4'>".$row["branch_id"]."</td><td class='p-4'>".$row["branch_name"]."</td><td class='p-4'>".$row["branch_type"]."
                             </td><td class='p-4'>".$row["branch_status"]."</td><td class='p-4'>".$row["branch_address"]."
                             </td><td class='p-4'><button type='submit' class = 'btn btn-primary btn-sm text-white' style = 'max-width: 5rem;' name='update'>Update</button></td>
                             <td class='p-4'><button type='submit' class = 'btn btn-primary btn-sm text-white' style = 'max-width: 5rem;' name='delete'>Delete</button></td>" ;
                        echo "<form></tr>";
                    }
                }
            ?>
        </tbody>
    </table> 
    </center>
</div>

<?php include ('footer.php') ?>