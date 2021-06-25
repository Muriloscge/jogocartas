<DOCTYPE html>
<html>
<body>

<?php 
include_once 'funcao.php'; 
$num = isset($_POST['num']) ? $_POST['num'] : 0;
?>
<head>

</head>

<form method="post">
<select name="num" id="num">
<option value="2" <?php if ($num == 2) echo 'selected'; ?>>2</option>
<option value="3" <?php if ($num == 3) echo 'selected'; ?>>3</option>
<option value="4" <?php if ($num == 4) echo 'selected'; ?>>4</option>
<option value="5" <?php if ($num == 5) echo 'selected'; ?>>5</option>
<option value="6" <?php if ($num == 6) echo 'selected'; ?>>6</option>
</select>
<input type="submit" value="Sortear">
</form> 

<?php

 

  var_dump(sortear($num));


srand=(0,6);

?>

</body>
</html>