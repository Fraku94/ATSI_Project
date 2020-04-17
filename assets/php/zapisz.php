<?php



	require_once "connect.php";

	$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
	
	if ($polaczenie->connect_errno!=0)
	{
		echo "Error: ".$polaczenie->connect_errno;
	}
	else
	{
		$Name= $_POST['name'];
		$Email= $_POST['email'];
        $Phone= $_POST['phone'];
		$Subject= $_POST['subject'];
		$Message= $_POST['message'];

		$sql = "INSERT INTO Conntact
(ID, Name,Email,Phone,Subject,Message)
VALUES ('','$Name','$Email','$Phone','$Subject','$Message')
";
		$rezultat = @$polaczenie->query($sql);
		header('Location:  http://wakacyjni.cba.pl/');
		$polaczenie->close();
	}
	
?>	