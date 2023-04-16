<?php
if(isset($_GET["path"])){
	if(file_exists($_SERVER["DOCUMENT_ROOT"]."/CSS/Base/CSS/FetchCSS/cssstorage19/".$_GET["path"])){
		header("content-type: text/css");
		echo file_get_contents($_SERVER["DOCUMENT_ROOT"]."/CSS/Base/CSS/FetchCSS/cssstorage19/".$_GET["path"]);
	}else{
		http_response_code(404);
	}
}else{
	http_response_code(404);
}
?>