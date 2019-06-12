<?php
if(strtolower($_REQUEST['code'])== $_SESSION['code']){
      
     echo "验证成功";
}
else {
	echo "验证失败";
}
?>