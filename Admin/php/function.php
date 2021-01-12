<?php
    include ('connect.php');
    function displayBranch(){
        $conn = connectDB();
        $query = "SELECT * FROM branch";

        $res = mysqli_query($conn,$query);

        return $res;
    }

    function searchBranch($id){
        $conn = connectDB();
        if($id < 1){
            $res = displayBranch(); 
        }else{
            $query = "SELECT * FROM branch WHERE branch_id = $id";
            $res = mysqli_query($conn,$query);
        }
        return $res;
    }

    function createBranch($branch_name,$branch_type,$status,$add){
        $conn = connectDB();

        $query = "INSERT INTO branch (branch_name,branch_status,branch_type,branch_address)
                values ('$branch_name','$status','$branch_type','$add')";
    
        if(!mysqli_query($conn,$query)){
            echo "branch not created!";
        }
    }

    function deleteBranch($branch_id){
        $ret = "";
        $conn = connectDB();
        $query = "DELETE FROM branch WHERE branch_id = $branch_id";

        if(mysqli_query($conn,$query)){
            $ret = "Succesfully deleted Branch";
        }else{
            $ret = "Unsuccesful deletion";
        }

        return $ret;
    }

    function updateBranch($id,$name,$type,$status,$address){
        $conn = connectDB();
        $query = "UPDATE branch SET branch_name = '$name',branch_type = '$type',branch_status = '$status',branch_address = '$address' WHERE branch_id = $id ";
        mysqli_query($conn,$query);
    }
?>