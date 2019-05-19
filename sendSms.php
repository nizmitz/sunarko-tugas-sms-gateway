
<?php


if(isset($_POST['submit-sms']))
{

/* $token ="";
*
* u can use this or make a file with the apitoken on it 
*/

	require_once('smsGatewayV4.php');
	require_once('apitoken.php'); //comment this command if you want to use $token = "";

	$deviceID = $_POST['device_id'];
	$message = $_POST['message_id']; 
	$phone_number_id = str_replace(' ', '', $_POST['phonenumber_id']); //remove space from input of phone example xxx,xxy
	if (strpos($phone_number_id, ',') !== false) { // check if number a and number b is different if false then run below
		$phone_number_id=explode(",",$phone_number_id); // put phonenumber into an array with delimiter of , into  xxx[0] xxy[1]
	}
	$options = []; //could add an expires a to cancel message if not sent yet??? if its needed

	$smsGateway = new SmsGateway($token);
	if(is_array($phone_number_id)){ //check if phone_number_id is an array if true use foreach if not use single message send
		foreach($phone_number_id as $phone_number){
			$result = $smsGateway->sendMessageToNumber($phone_number, $message, $deviceID, $options);
			print_r($result);
			exit();
			endforeach;

			/*still do know why the for doesn't api call json twice instead it only write once?
			 *in the documentation it use message1 + message2 = messages into one and then print it both?
			 *a buffer might work? put the data into a variable long text/string?? or the print_r 
			 *
			 * 1234 > 1234 
			 * phone_number_id > phone number
			 * result = json ( smsid = 909xxx, device id = 11245, 1234, this is a message, [])
			 *
			 *foreach($phone_number_id as $phone_number){
			 * 	$result[] = $smsGateway->sendMessageToNumber($phone_number, $message, $deviceID, $options);
			 *	foreach($result as message){
			 *	print_r($message);
			 *	}
			 *
			 *	exit();
			 * */
	} 
} 
	else {
		$smsGateway = new SmsGateway($token);
		$result = $smsGateway->sendMessageToNumber($phone_number_id, $message, $deviceID, $options);
		print_r($result);
		exit();
	}

	/* 
	 * example of input
	 * phone numbers =  1234,12345
	 * device id = 11435
	 * message = this is the test message
	 *
	 * phone number will be broken down to 1234[0], 12345[1]
	 *
	 * first iteration
	 * phone_number_array element 0 as $phonenumber[1234]
	 * run smsgateway(1234, this is the test message, 11435, null)
	 * 
	 * second iteration
	 * phone_number_array element 1 as $phonenumber[12345]
	 * run smsgateway(1234, this is the test message, 11435, null)
	 * 
	 * need test confirmation
	 */ 


}
?>
