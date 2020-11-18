<?php 
$localhost = "localhost"; #localhost
$dbusername = "root"; #username of phpmyadmin
$dbpassword = "";  #password of phpmyadmin
$dbname = "harsha";  #database name
 
#connection string
$conn = mysqli_connect($localhost,$dbusername,$dbpassword,$dbname);
 
if (isset($_POST["Submit"]))
 {
     
        $team_details = $_POST["team_details"];
     
    
     $pposter = rand(1000,10000)."-".$_FILES["poster"]["name"];
 
    
    $tposter = $_FILES["files"]["tmp_name"];
   
     
$uploads_dir = '/images';
    
    move_uploaded_file($tposter, $uploads_dir.'/'.$pposter);

     $preport = rand(100,1000)."-".$_FILES["report"]["name"];
 
    
    $treport = $_FILES["reports"]["report_name"];
   
     
$uploads_dir = '/documents';
    
    move_uploaded_file($treport, $uploads_dir.'/'.$preport);
 
   $video=$_POST["video"]; 
   $phone=$_POST["phone"];
    #sql query to insert into database
    $sql = "INSERT into upload(team_details,poster,report,video,phone) VALUES('$team_details','$pposter','$preport','$video','$phone')";
 
    if(mysqli_query($conn,$sql)){
        
        
 
    echo "File Sucessfully uploaded";
    header("Location: edited.html.html");
    }
    else{
        echo "Error";
    }
} 
 
?>