<?php 
unset($_SESSION['cargo']);
unset($_SESSION['id']);
unset($_SESSION['Autenticado']);

echo "<html>
<script type='text/javascript'>
	window.location.href = 'index.php?link=1';
</script>
</html>";
?>
