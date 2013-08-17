<?php
require_once 'includes/common.inc.php';
if (isset($_GET['key'])) {	
	echo json_encode($redis->keys($_GET['key']));	
}
?>