<?php 
/**
 * Undocumented function
 *
 * @return boolean
 * This functions here are User define method against APIs
 */

	function redirect($url=''){
		if(!empty($url))
		echo '<script>location.href="'.ROOT.$url.'"</script>';
	}
	function getRequestMethod(){
		return strtoupper($_SERVER['REQUEST_METHOD']);
	}
	function isGet(){
		return $this->getRequestMethod() === 'GET';
	}
	function isPost(){
		return $this->getRequestMethod() === 'POST';
	}
	function isPut(){
		return $this->getRequestMethod() === 'PUT';
	}
	function isDelete(){
		return $this->getRequestMethod() === 'DELETE';
	}
	function isPatch(){
		return $this->getRequestMethod() === 'PATCH';
	}
	

function crypto_rand_secure($min, $max){
	$range = $max - $min;
	if ($range < 1) return $min; // not so random...
		$log = ceil(log($range, 2));
		$bytes = (int) ($log / 8) + 1; // length in bytes
		$bits = (int) $log + 1; // length in bits
		$filter = (int) (1 << $bits) - 1; // set all lower bits to 1
	do {
		$rnd = hexdec(bin2hex(openssl_random_pseudo_bytes($bytes)));
		$rnd = $rnd & $filter; // discard irrelevant bits
	} while ($rnd > $range);
	return $min + $rnd;
}

function jsonResponses($response){
	echo json_encode($response);
}

function validata_api_request_header(){
    header("Access-Control-Allow-Methods: *");
    header("Access-Control-Allow-Headers: *");
    header("Content-Type: application/json");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
    
    if ($_SERVER['REQUEST_METHOD']=='OPTIONS') {
        echo json_encode('Connection Failed.!');
        return false;
    }else{
        return true;
    }
}