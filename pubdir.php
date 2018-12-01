<?php

if($_SERVER["SERVER_ADDR"] == $_SERVER["REMOTE_ADDR"]){
	echo (dirname(__FILE__));exit;
}