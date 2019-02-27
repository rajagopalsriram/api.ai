<?php
$method = $_SERVER['REQUEST_METHOD'];

//Process only when method is POST
if($method == "POST"){
	$requestBody = file_get_contents('php://input');
	$json = json_decode($requestBody);

	$text = $json->result->parameters->text;

	switch ($text) {
		case 'hi':
			# code...
		$speech = "Hi, Nice to meet you";
			break;

			case 'bye'
			$speech = "Bye, good night";
			break;

			case 'anything':
				# code...
			$speech = "Yes, you can type anything here.";
				break;
		
		default:
			# code...
		$speech = "Sorry, I didn't get that, Please ask me sometime else";
			break;
	}

	$response = new \stdClass();
	$response->speech = "";
	$response->displayText = "";
	$response->source = "webhook";
	echo json_encode($response);

}else {
	echo "Method not allowed";
}
?>