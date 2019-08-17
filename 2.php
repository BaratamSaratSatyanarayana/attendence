<head>
<link rel="stylesheet" type="text/css" href="2css.css">
</head>
<body>
<div class="container">
<form method="POST" action="1.php">
    <?php
    for ($i = 1; $i <= 60; $i++) {
		if($i==23 || $i==30)
			continue;
        ?>
		<table border=1>
        <th><?php echo $i;?></th><th><input name="attendence[<?php echo $i;?>]"  type="radio" checked="checked" value="yes"/><label>yes</label></th>
		<th><input name="attendence[<?php echo $i;?>]" type="radio" value="no"/><label>no</label></th>

    <?php echo "<br>";} ?>
	</table>
    <input type="submit"  value="submit" class="submit1" />
	
</form>
</div>
</body>


