<?php

	# Load API class
	require "uxtsms.php";
	# Setup API credentials
	$api_key = '07671a038c0eb43723d421693b073c3b'; # Check under Settings->API Keys in uxtsms
	$senderid = '709709'; # Check under Services in uxtsms - Please ensure that they tally with Service ID
	$serviceid = '6015992000126913'; # Check under Services in uxtsms - please ensure that they tally with Sender ID

	# SEND SMS
	# Make API request
	$uxtsms = new uxtsms($api_key); # Instantiate API library
	$uxtsms->queue_sms("+254727134526", "Message 1", $senderid, $serviceid); # Replace example with valid recipient, message, sender id, service id, link id and scheduled datetime if required in format ("YYYY-MM-DD HH:mm:ss")
	$uxtsms->queue_sms("+254724816442", "Message 2.", $senderid, $serviceid); # Replace example with valid recipient, message, sender id, service id, link id and scheduled datetime if required in format ("YYYY-MM-DD HH:mm:ss")
	$uxtsms->send_sms(); # Initiate API call to send messages
	# Get API response
	echo $uxtsms->status; # View status either (SUCCESS or FAIL)
	echo $uxtsms->description; # Returns a status message
	echo $uxtsms->response_xml; # Returns full xml response
	echo $uxtsms->response_json; # Returns full json response

	# GET BALANCE
	# Make API request
	$uxtsms = new uxtsms($api_key); # Instantiate API library
	$uxtsms->get_balance(); # Initiate API call to check available SMS credits
	# Get API response
	echo $uxtsms->status; # View status either (SUCCESS or FAIL)
	echo $uxtsms->message; # Returns SMS available (Credits balance)
	echo $uxtsms->description; # Returns a status message
	echo $uxtsms->response_xml; # Returns full xml response
	echo $uxtsms->response_json; # Returns full json response

?>
