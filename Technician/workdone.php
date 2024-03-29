<?php

session_start();

include('../DBConnection.php');
include('istechnician.php');

$id = $_SESSION['tviewid'];
$sql2 = "SELECT * FROM serviceassign WHERE rid=$id";

$result2 = mysqli_query($conn, $sql2);

$row = mysqli_fetch_assoc($result2);
$uid=$row['uid'];
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>workdone</title>

    <!-- Bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <div class="container pt-5" id="registration">  <!-- start container-->
        <h2 class="text-center">Assign Request</h2>
        <div class="row mt-4 mb-4 loginformwidth">  <!-- start row-->
            <div class="col-md-6 offset-md-3 bg-success bg-opacity-25 py-3">  <!-- start column-->
                <form class="row g-3" method="POST" enctype="multipart/form-data">  <!-- start form-->
                    <div class="col-12">
                        <label for="inputAddress2" class="form-label">Request ID</label>
                        <input type="text" class="form-control px-3" name="rid" placeholder="Request Id" value="<?php if (isset($row['rid'])) {
                                                                                                                    echo $row['rid'];
                                                                                                                } ?>" readonly>
                    </div>
                    <div class="col-12">
                        <label for="inputAddress2" class="form-label">Request INFO</label>
                        <input type="text" class="form-control" name="request_info" placeholder="Request Info" value="<?php if (isset($row['request_info'])) {
                                                                                                                            echo $row['request_info'];
                                                                                                                        } ?>" readonly>
                    </div>
                    <div class="col-12">
                        <label for="inputAddress2" class="form-label">Request Description</label>
                        <input type="text" class="form-control" name="request_desc" placeholder="Request Description" value="<?php if (isset($row['request_desc'])) {
                                                                                                                                    echo $row['request_desc'];
                                                                                                                                } ?>" readonly>
                    </div>
                    <div class="col-12">
                        <label for="inputAddress2" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Name" value="<?php if (isset($row['name'])) {
                                                                                                            echo $row['name'];
                                                                                                        } ?>" readonly>
                    </div>

                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Address</label>
                        <input type="text" class="form-control" name="add1" placeholder="1234 Main St" value="<?php if (isset($row['add1'])) {
                                                                                                                    echo $row['add1'];
                                                                                                                } ?>" readonly>
                    </div>
                    <div class="col-12">
                        <label for="inputAddress2" class="form-label">Address 2</label>
                        <input type="text" class="form-control" name="add2" placeholder="Apartment, studio, or floor" value="<?php if (isset($row['add2'])) {
                                                                                                                                    echo $row['add2'];
                                                                                                                                } ?>" readonly>
                    </div>
                    <div class="col-md-6">
                        <label for="inputCity" class="form-label">City</label>
                        <input type="text" class="form-control" name="city" value="<?php if (isset($row['city'])) {
                                                                                        echo $row['city'];
                                                                                    } ?>" readonly>
                    </div>
                    <div class="col-md-4">
                        <label for="inputState" class="form-label">State</label>
                        <input type="text" class="form-control" name="state" value="<?php if (isset($row['state'])) {
                                                                                        echo $row['state'];
                                                                                    } ?>" readonly>
                    </div>
                    <div class="col-md-2">
                        <label for="inputZip" class="form-label">Zip</label>
                        <input type="text" class="form-control" name="zip" value="<?php if (isset($row['zip'])) {
                                                                                        echo $row['zip'];
                                                                                    } ?>" readonly>
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" value="<?php if (isset($row['email'])) {
                                                                                            echo $row['email'];
                                                                                        } ?>" readonly>
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Mobile</label>
                        <input type="text" class="form-control" name="mobile" value="<?php if (isset($row['mobile'])) {
                                                                                            echo $row['mobile'];
                                                                                        } ?>" readonly>
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Technician Name</label>
                        <input type="text" class="form-control" name="technician" value="<?php if (isset($row['technician'])) {
                                                                                                echo $row['technician'];
                                                                                            } ?>" readonly>
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Assign Date</label>
                        <input type="text" class="form-control" name="assign_date" value="<?php if (isset($row['assign_date'])) {
                                                                                                echo $row['assign_date'];
                                                                                            } ?>" readonly>
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Upload File</label>
                        <input type="file" class="form-control" name="myfile">
                        <!-- <button class="btn btn-primary mt-2 ms-3" name="upload">Upload</button> -->
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Money</label>
                        <input type="text" class="form-control" name="money">
                    </div>
                    <div class="col-12 float-right mt-5" style=" margin-left: 480px;">
                        <button type="submit" class="btn btn-primary" name="done">Done</button>
                        <button type="submit" class="btn btn-danger" name="close">close</button>
                    </div>
                </form>   <!-- end form-->
            </div>  <!-- end column-->
        </div>  <!-- end row-->
    </div> <!-- end container-->

    <!-- Bootstrap Js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>


<?php

//To insert data into servicedone table
if (isset($_REQUEST['done'])) {
    $tid = $_SESSION['is_technician'];
    $rid = $_REQUEST['rid'];
    $info = $_REQUEST['request_info'];
    $desc = $_REQUEST['request_desc'];
    $name = $_REQUEST['name'];
    $add1 = $_REQUEST['add1'];
    $add2 = $_REQUEST['add2'];
    $city = $_REQUEST['city'];
    $state = $_REQUEST['state'];
    $zip = $_REQUEST['zip'];
    $email = $_REQUEST['email'];
    $mobile = $_REQUEST['mobile'];
    $technician = $_REQUEST['technician'];
    $date = $_REQUEST['assign_date'];
    $money = $_REQUEST['money'];
    $file_name = $_FILES['myfile']['name'];
    $file_tmp_name = $_FILES['myfile']['tmp_name'];
    if (move_uploaded_file($file_tmp_name, "../Upload/" . $file_name)) {

        $sql = "INSERT INTO servicedone (tid,request_id,request_info,request_desc,name,email,add1,add2,city,state,zip,technician,money,mobile,done_file,assign_date,uid) values($tid,$rid,'$info','$desc','$name','$email','$add1','$add2','$city','$state','$zip','$technician',$money,'$mobile','$file_name','$date',$uid)";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $sql = "DELETE FROM serviceassign where rid=$rid";   //To delete row from serviceassign table
            $result = mysqli_query($conn, $sql);
            echo '<script> window.alert("Data Update Succesfully")</script>';
            echo '<script> location.href="technicianworkorder.php";</script>';
        } else {
            echo '<script> window.alert("Unable to update data")</script>';
            echo '<script> location.href="technicianworkorder.php";</script>';
        }
    } else {
        echo '<script> window.alert("Unable to upload file")</script>';
    }
}


//To close the page
if (isset($_REQUEST['close'])) {
    echo '<script> location.href="technicianworkorder.php";</script>';
}

?>