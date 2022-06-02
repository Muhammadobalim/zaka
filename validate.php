<?php include_once "includes/connect.php"; ?>
<?php
try {
    $conn = new PDO("mysql:host=$servername;dbname=zaka", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;

}
if($_SERVER["REQUEST_METHOD"] =="POST"){
    $username = test_input($_POST["Username"]);
    $password = test_input($_POST["Password"]);
    $stmt = $conn->prepare("SELECT * FROM login");
    $stmt->execute();
    $users = $stmt->fetchAll();
    foreach($users as $user){
        if(($user['Username']==$username) && ($user['Password']==$password)){
            header("Location: http://localhost/zaka/dashboard.php");
        }
        else{
            echo "wrong credentials";
        }
    }
}
?>