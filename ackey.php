<?php
session_start();
//common.php文件包含一些常用function
include("../lib/common.php");
$response_type = "code";
$grant_type = "authorization_code";
$client_id = "26EAC2509056EB38FB623D9A49296D2C";
$client_secret = "1abdc5a97ecb4594ab7b772296bcfbbd";
$redirect_uri = "jd.bopike.com/jos/token.php";
$state = "jdunion";
$codeurl = 'https://oauth.jd.com/oauth/authorize';
$tokenurl = "https://oauth.jd.com/oauth/token?";

$code = $_GET["code"];

if ($code != "")
{
	$fields = [
	  "grant_type" => urlencode($grant_type),
	  "client_id" => urlencode($client_id),
	  "redirect_uri" => urlencode($redirect_uri),
	  "code" => urlencode($code),
	  "state" => urlencode($state),
	  "client_secret" => urlencode($client_secret)
	];

	$fields_string = "";
	foreach($fields as $key=>$value) {
	 $fields_string .= $key.'='.$value.'&';
	}
	//$fields_string = rtrim($fields_string, '&');

	//send_get是发送get请求的function，在common.php文件中
	$result = send_get($tokenurl.$fields_string);
	
	//这里要把返回结果转换为utf-8，因为结果有用户昵称，如果是中文的就无法解析出token了
	$result = mb_convert_encoding($result,"UTF-8","GBK");
	
	$resuttjson = json_decode($result);

	//3种处理方式：
	
	//     1）直接输出结果
	// echo $resuttjson->{'access_token'};
	// exit();
	
	//     2）保存到session中
	//$_SESSION["jdtoken"] = $resuttjson->{'access_token'};
	//$_SESSION["jduid"] = $resuttjson->{'uid'};
	//$_SESSION["jdusernick"] = $resuttjson->{'user_nick'};
	
	//     3)token值写入本地文件中
	$file = fopen("token.txt", "w");
	fwrite($file, $resuttjson->{'access_token'});
	fclose($file);
	
	header("Location: index.php");
}
else
{
  header("Location: ".$codeurl."?response_type=".$response_type."&client_id=".$client_id."&redirect_uri=".$redirect_uri."&state=".$state);
}