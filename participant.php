<?php

extract ($_POST);
//$server="sql108.infinityfree.com";
$server="localhost";
//$username="if0_35764232";
$username="root";
//$password="cs477cs477";
$password="";
//$dbname="if0_35764232_Conference_information_system";
$dbname="conference_information_system";
$conn = mysqli_connect($server,$username,$password,$dbname);
if(!$conn){
    die("not connected".mysqli_connect_error());
}else{
    echo "Connected<br>";
}
$DB = mysqli_select_db($conn,"conference_information_system");

if(!$DB)
    die("NO DB");
else  
    echo "Database Connected<br>";
//uploading file process ......
    if (isset($_FILES['file'])) {
        $file = $_FILES['file'];


        $uploadDirectory = "uploads/";
		if (!is_dir($uploadDirectory)) {
          mkdir($uploadDirectory, 0755, true);}
		  
        $filename = $file['name'];
        $fileDestination = $uploadDirectory . $filename;

        if (move_uploaded_file($file['tmp_name'], $fileDestination)) {
            echo "File uploaded successfully!<br>";

        } else {
            echo "Error moving uploaded file to destination.<br>";

        }
    } else {
        echo "No file uploaded.<br>";
    }
//the operations .....	
if($op=="Delete")
{
$q = "DELETE from `conference_ participant` where Pid='$ID'";
        $result = mysqli_query($conn,$q);
        if(!$result){
            echo "Row Not DELETED\n";
        }else
            echo "Row DELETED\n";
}
else if($op=="Update_Project")
{
$q = "UPDATE `conference_ participant` set P_porject_name='$Project' where Pid='$ID'";
        $result = mysqli_query($conn,$q);
        if(!$result){
            echo "Row Not UPDATED\n";
        }else
            echo "Row UPDATED\n";
}
else
{
$q = "SELECT * from `conference_ participant` where Pid='$ID'";
        $result = mysqli_query($conn,$q);
        $r = mysqli_fetch_row($result);
 echo $r[0]."\n".$r[1]."\n".$r[2]."\n".$r[3]."\n".$r[4]."\n".$r[5]."\n".$r[6];	
}
?>