<?php $name = ''; ?>

<html>
	<head>
		<title>
			Examinee - [<?php echo $name; ?>]
		</title>
	</head>
	<body>
		Examinee - [<?php echo $name; ?>]
		<div class="menu" style="width:100%; background-color: lightblue; padding:5px 0px 5px 5px;">
			<a href="exam.php?exam=1"> exam output 1</a> |
			<a href="exam.php?exam=2"> exam output 2</a>
		</div>
		<br/>
		<?php if ($_GET['exam']) include('exam' . $_GET['exam'] . '.php'); ?>
	</body>

</html>

