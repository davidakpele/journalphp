<?php
use  Auth\authentication;
/**
 *
 * @return boolean 
 * 
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
		header('HTTP/1.1 401 Unauthorized');
        error_log_auth();
    }else{
        return true;
    }
}

function error_log_auth(){
	header('HTTP/1.1 401 Unauthorized');
	$response=
	[ 
		"status"=> http_response_code(401),
		"title"=> "Authentication Error",
		"detail"=> "Something went wrong with authentication to your SkyBase library.",
		"code"=> "generic_authentication_error"
	];
	echo json_encode($response);
}
function countriesList(){
	$k=[];
	$k["Countries"]= ["rs","hk","ru","jp","br","sg","mc","me","sm","id","ca","mk","gg","gi","ad","il","uy","kp","ch","za","cn","co","au","ph","vn","ng","tr"];
	$k["States"][]=array("ct", "ca", "va","co", "ut");
	$k["LanguageSwitcherPlaceholder"]= ["hi"=>"hi","ps"=>"ps","pt"=>"pt","hr"=>"hr","hu"=>"hu","yi"=>"yi","hy"=>"hy","yo"=>"yo","id"=>"id","af"=>"af","is"=>"is","it"=>"it","am"=>"am","zh"=>"zh","ar"=>"ar","ja"=>"ja","az"=>"az","zu"=>"zu","ro"=>"ro","ru"=>"ru","be"=>"be","bg"=>"bg","jv"=>"jv","bn"=>"bn","sd"=>"sd","bs"=>"bs","deflt"=> "en","si"=>"si","ka"=>"ka","sk"=>"sk","sl"=>"sl","sm"=>"sm","sn"=>"sn","so"=>"so","ca"=>"ca","sq"=>"sq","sr"=>"sr","kk"=>"kk","st"=>"st","kl"=>"kl","su"=>"su","km"=>"km","sv"=>"sv","kn"=>"kn","sw"=>"sw","ko"=>"ko","kr"=>"kr","ku"=>"ku","co"=>"co","ta"=>"ta","ky"=>"ky","cs"=>"cs","te"=>"te","tg"=>"tg","th"=>"th","cy"=>"cy","lb"=>"lb","tl"=>"tl","da"=>"da","tr"=>"tr","tt"=>"tt","de"=>"de","lo"=>"lo","lt"=>"lt","lv"=>"lv","uk"=>"uk","me"=>"me","mg"=>"mg","mi"=>"mi","ur"=>"ur","mk"=>"mk","ml"=>"ml","mn"=>"mn","uz"=>"uz","mr"=>"mr","ms"=>"ms","mt"=>"mt","el"=>"el","eo"=>"eo","my"=>"my","es"=>"es","et"=>"et","eu"=>"eu","vi"=>"vi","ne"=>"ne","fa"=>"fa","nl"=>"nl","no"=>"no","fi"=>"fi","fr"=>"fr","ga"=>"ga","gd"=>"gd","gl"=>"gl","gu"=>"gu","xh"=>"xh","pa"=>"pa","ha"=>"ha","pl"=>"pl","he"=>"he"];
    $k['CookieSPAEnabled']= 'false';
    $k['CookieSameSiteNoneEnabled']= 'false';
    $k['CookieV2CSPEnabled']= 'false';
    $k['UseV2']= 'true';
    $k['MobileSDK']= 'false';
    $k['SkipGeolocation']= 'false';
    $k['ScriptType']= 'PRODUCTION';
    $k['Version']= date('l');
    $k['GeolocationUrl']= "https://geolocation.onetrust.com/cookieconsentpub/v1/geo/location";
    $k['BulkDomainCheckUrl']= "https://cookies-data.onetrust.io/bannersdk/v1/domaingroupcheck";
    $k['BannerPushesDown']='false';
    $k['Default']='true';
    $k['Global']='false';
    $k['Type']='true';
    $k['UseGoogleVendors']='false';
    $k['VariantEnabled']='false';
    $k['TestEndTime']='null';
    $k['Variants']=[];
    $k['TemplateName']="General Opt-In Template";
    $k['Conditions']=[];
    $k['GCEnable']='false';
    $k['IsGPPEnabled']="false";
	return $k;

}


