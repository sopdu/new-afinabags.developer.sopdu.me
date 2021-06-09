<?php
	class sopdu {
		function phone($path){
			$phone = file_get_contents($path);
			$result = preg_replace('/[^0-9]/', '', $phone);
			return 'tel:+'.$result;
		}
		function phone_text($phone){
			return 'tel:+'.preg_replace('/[^0-9]/', '', $phone);
		}

	}
	$sopdu = new sopdu();
?>