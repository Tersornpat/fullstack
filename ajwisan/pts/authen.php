<?php
    // session_start();
    include "./connectdb.php";
?>
<?php
    $username = $_POST["username"];
    $password = $_POST["password"];

    $showdata = "SELECT
                    * 	
                    -- E_ID,	
                    -- E_Name,	
                    -- E_Surname,
                    -- E_Role,
                    -- E_Address
                FROM pts_employee WHERE E_Username='$username' AND E_Password='$password';";
    $result = $conn->query($showdata);
    $conn->close();
    $row = $result->fetch_assoc();
    echo $row["E_ID"]."   ".$row["E_Name"]."   ".$row["E_Surname"]."   ".$row["E_Role"]."   ".$row["Member_Tel"]."<br>";

    // $rowcount = mysqli_num_rows($result);
    // $row = $result->fetch_assoc();
    // if($rowcount == 1){

    //     $_SESSION['id']=$row["E_ID"];
    //     $_SESSION['name']=$row["E_Name"];
    //     $_SESSION['surname']=$row["E_Surname"];
    //     $_SESSION['key']=$row["E_Role"];
    //     $_SESSION['address']=$row["E_Address"];

    //     if($_SESSION['key'] == "admin"){
    //         header("Location: ./operator/index.php");
    //     }else {
    //         header("Location: ./user/index.php");
    //     }
    // }else {
    //     header("Location: index.php");
    // }

    // while($row = $result->fetch_assoc()) {
    //         echo $row["E_ID"]."   ".$row["E_Name"]."   ".$row["E_Surname"]."   ".$row["E_Role"]."   ".$row["Member_Tel"]."<br>";
        // }
?>