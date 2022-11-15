<?php
session_start();
require_once "Functions.php";
require_once "DBHandler.php";

if (isset($_POST['ProfilePicButton'])) {
	$file = $_FILES['NewProfilePic'];
	$fileName = $_FILES['NewProfilePic']['name'];
	$fileTmpName = $_FILES['NewProfilePic']['tmp_name'];
	$fileSize = $_FILES['NewProfilePic']['size'];
	$fileError = $_FILES['NewProfilePic']['error'];
	$fileType = $_FILES['NewProfilePic']['type'];
	
	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));
	$allowed = array('jpg', 'jpeg', 'png', 'pdf');
	if (in_array($fileActualExt, $allowed)){
		if($fileError === 0){
			if ($fileSize < 100000) {
				$fileNameNew = $_SESSION['UserID'].".".$fileActualExt;
				$fileDestination = 'ProfilePics/'.$fileNameNew;
				move_uploaded_file($fileTmpName, $fileDestination);
				$sql = "UPDATE playerdb SET ProfilePicAddress='/ProfilePics/'.$FileNameNew WHERE 'UserID'=10";

					if (mysqli_query($conn, $sql)) {
					  echo "Record updated successfully";
					} else {
					  echo "Error updating record: " . mysqli_error($conn);
					}

					mysqli_close($conn);
				//if ($result = mysqli_query($conn, UPDATE playerdb SET ProfilePicAddress = '/ProfilePics/'.$fileNameNew WHERE playerdb.UserID =10;
				//UPDATE `cashquestmain`.`playerdb` SET `ProfilePicAddress` = '/ProfilePics/default' WHERE `playerdb`.`UserID` =10;
				
				
				
				//$sql = "UPDATE 'playerdb' SET 'ProfilePicAddress'=[$fileDestination] WHERE 'UserID'= $_SESSION['UserID'];";
					//$stmt = mysqli_stmt_init($conn);
					//	if (!mysqli_stmt_prepare($stmt, $sql)){
						//	header ("location: SignUpProfileDetails.php?error=stmtfailed");
						//	exit();
						}
						
						
						mysqli_stmt_bind_param($stmt, "s", $fileDestination);
						mysqli_stmt_execute($stmt);
						mysqli_stmt_close($stmt);
						
						header ("location: http://localhost:8080/SignUpProfileDetails.php?error=none");
						exit();
				
				Header("Location: SignUpProfileDetails.php");
			} else {
				echo "Your File is too Big!";
			}
		} else {
			echo "There was an error uploading your file!";
		}
	} else
		echo "You cannot upload files of this type!";
?>