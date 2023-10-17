<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Coba deret</title>
</head>
<body>
	<?php
    for($i=$_POST["awal"];$i<=$_POST["akhir"];$i++)
		{
		if ($i % 2!=0)
			echo "<font color=red size=15> $i </font>";
		else
			echo "<font color=gren size=15> $i </font>";
		}
    ?>
</body>
</html>