<?php



	require_once "connect.php";

	$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);

	if ($polaczenie->connect_errno!=0)
	{
		echo "Error: ".$polaczenie->connect_errno;
	}
	else
	{
		$Email= $_POST['email'];

		$sql = "INSERT INTO Email
(ID, Email)
VALUES ('','$Email')
";
		$rezultat = @$polaczenie->query($sql);
        header('Location:  http://wakacyjni.cba.pl/');
		$polaczenie->close();
	}

?>