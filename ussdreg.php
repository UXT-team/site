<?php
$registerurl_service_endpoint = "https://portal.safaricom.com/tregisterURL";
$validation_url = "https://31.3.252.42/~jbtke/mpesa_validate.php";
$confirmation_url = "https://31.3.252.42/~jbtke/mpesa_confirm.php";
$spid =107015; //100450;
$serviceid = 107015000;//100450000;
$password = "Kenya123!@";//"Raia*765";
$shortcode = 555691;
$timestamp = date('Ymdhis');
$phash = $spid.$password.$timestamp;
$phash1 = base64_encode(hash('sha256',$phash));
$correlator = 12345;
$conversationid = $shortcode.'_JUSTBET_'.$correlator;
$result = registerURLs($registerurl_service_endpoint,$validation_url,$confirmation_url,$spid,$serviceid,$phash1,$timestamp,$shortcode,$conversationid);
var_dump($result);

function registerURLs($registerurl_service_endpoint,$v_url,$c_url,$spid,$serviceid,$password,$timestamp,$shortcode,$conversationid){
	include_once 'sdplib/nusoap.php';
	$bodyxml = '<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:req="http://api-v1.gen.mm.vodafone.com/mminterface/request">
	<soapenv:Header>
		<tns:RequestSOAPHeader xmlns:tns="http://www.huawei.com/schema/osg/common/v2_1">
			<tns:spId>'.$spid.'</tns:spId>
			<tns:spPassword>'.$password.'</tns:spPassword>
			<tns:timeStamp>'.$timestamp.'</tns:timeStamp>
			<tns:serviceId>'.$serviceid.'</tns:serviceId>
		</tns:RequestSOAPHeader>
	</soapenv:Header>
	<soapenv:Body>
	<req:RequestMsg>
	<![CDATA[<?xml version="1.0" encoding="UTF-8"?>
		<request xmlns="http://api-v1.gen.mm.vodafone.com/mminterface/request">
			<Transaction>
				<CommandID>RegisterURL</CommandID>
				<OriginatorConversationID>'.$conversationid.'</OriginatorConversationID>
				<Parameters>
					<Parameter>
						<Key>ResponseType</Key>
						<Value>Completed</Value>
					</Parameter>
				</Parameters>
				<ReferenceData>
					<ReferenceItem>
						<Key>ValidationURL</Key>
						<Value>'.$v_url.'</Value>
					</ReferenceItem>
					<ReferenceItem>
						<Key>ConfirmationURL</Key>
						<Value>'.$c_url.'</Value>
					</ReferenceItem>
				</ReferenceData>
			</Transaction>
			<Identity>
				<PrimaryParty>
					<IdentifierType>1</IdentifierType>
					<ShortCode>'.$shortcode.'</ShortCode>
				</PrimaryParty>
			</Identity>
			<KeyOwner>1</KeyOwner>
		</request>]]>
	</req:RequestMsg>
	</soapenv:Body>
</soapenv:Envelope>';
	//echo $bodyxml; exit;

	//create the client
	$client = new nusoap_client($registerurl_service_endpoint,true);
	$bsoapaction = "";
	$client->soap_defencoding = 'utf-8';
	$client->useHTTPPersistentConnection();

	//send the request to the server
	$result = $client->send($bodyxml, $bsoapaction);

	//check for fault and return
	if ($client->fault) {
	  return array("ResultCode"=>"1","ResultDesc"=>"SOAP Fault","ResultDetails"=>$result);
	}

	// check for errors and return
	$err = $client->getError();
	if ($err) {
		return array("ResultCode"=>"2","ResultDesc"=>"Error","ResultDetails"=>$err);
	}
	else{
		//check for fault code
		if(isset($result['faultcode'])){
			return array("ResultCode"=>"3","ResultDesc"=>"Fault - ".$result['faultcode'],"ResultDetails"=>$result['faultstring']);
		}
		//return success
		return array("ResultCode"=>"0","ResultDesc"=>"Operation Successful.","ResultDetails"=>$result);
	}
}
