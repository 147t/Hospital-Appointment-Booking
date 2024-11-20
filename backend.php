<?php

$fields = array('fname', 'eaddr', 'mobile', 'aptdate', 'apttime', 'cbdate', 'cbtime', 'deptname', 'docname');
$names = array('Full Name','Email Address','Mobile','Appointment Date','Appointment Time','Call Back Date','Call Back Time','Dept Name','Doc Name');

$nameptrn = "/^[a-zA-Z]+ [a-zA-Z]+$/";
$mobileptrn  = '/^00962[789][0-9]{7}$/';
$emailptrn  = '/^[a-zA-Z0-9._+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
$threat = false;


if(preg_match($nameptrn,$_POST['fname']) == 0){
    $threat = true;
    
    
}
if(preg_match($mobileptrn,$_POST['mobile']) == 1){
    $threat = true;
    
    
}
if(!preg_match($emailptrn,$_POST['eaddr']) == 1){
    $threat = true;

    
}
if ($threat == true){
    echo "<h1 style='color: crimson;'>Invalid Input detected </h1>";
    echo "<a href='http://localhost/index.php' style='color: blue'>Return to Main Page</a>";
    die();
}
   





$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "project";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error){
        echo " error in connection";
          die("Connection failed: " . $conn->connect_error);
        } else{
            echo "<br> connected to server successfully <br>";
        }

        $stmt = $conn->prepare("SELECT * FROM patients WHERE Fullname = ?");
        $stmt->bind_param("s", $_POST['fname']); 
        $stmt->execute();
        $result = $stmt->get_result();
        $stmt->close();

        $stmt2 = $conn->prepare("SELECT * FROM patients WHERE Email = ?");
        $stmt2->bind_param("s", $_POST['eaddr']); 
        $stmt2->execute();
        $result = $stmt2->get_result();
        $stmt2->close();

        $stmt3 = $conn->prepare("SELECT * FROM patients WHERE PhoneNumber = ?");
        $stmt3->bind_param("s", $_POST['mobile']); 
        $stmt3->execute();
        $result = $stmt3->get_result();
        $stmt3->close();
        
        $stmt4 = $conn->prepare("SELECT * FROM patients WHERE Remarks = ?");
        $stmt4->bind_param("s", $_POST['remarks']); 
        $stmt4->execute();
        $result = $stmt4->get_result();
        $stmt4->close();

        

    $query = "SELECT * FROM patients WHERE ApptDate = '". $_POST["aptdate"]. "' AND ApptTime = '". $_POST["apttime"]. "'";
    $result = $conn->query($query);

   if ($result->num_rows > 0) {
    echo "<h1 style='color: crimson;'> Appointment time is already booked. Please choose a different time.</h1>";
   } else {
    
    $sql = "INSERT INTO patients (Fullname, Email, PhoneNumber, ApptDate, ApptTime, CallBackDate, CallBackTime, Departement, Doctor, Remarks) VALUES ('". $_POST["fname"]. "', '". $_POST["eaddr"]. "', '". $_POST["mobile"]. "', '". $_POST["aptdate"]. "', '". $_POST["apttime"]. "', '". $_POST["cbdate"]. "', '". $_POST["cbtime"]. "', '". $_POST["deptname"]. "', '". $_POST["docname"]. "' , '". $_POST["comments"]. "')";
    $conn->query($sql);
    echo "<h1 style='color: blue'> Reservation Confirmed</h1>";
    $conn->close();
   }

 