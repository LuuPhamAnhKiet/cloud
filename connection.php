<?php
$conn = pg_connect("postgres://lgfcaixytznaft:6283dea978507943cc48135a3241ba1018c7f99066844d14342c9639a0c4dbfb@ec2-54-147-36-107.compute-1.amazonaws.com:5432/deogegs8stb7j");
	echo 'Connected Successfully!!!';
	if(!$conn)
	{
		die("Could not connect to database");
    }
    ?>