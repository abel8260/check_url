 

// Initialize a variable into domain name


	$domain1 = $_GET['input0'];
    
	// Function to get HTTP response code
	function get_http_response_code($domain1) {
		$headers = get_headers($domain1);
		return substr($headers[0], 9, 3);
	}
	echo $domain1."<br/>";
	// Function call
	$get_http_response_code = get_http_response_code($domain1);

	// Display the HTTP response code
	echo $get_http_response_code;
    $_SESSION['code_pre_input0'] = $domain1;
     $_SESSION['code_pre_input1'] = strval($get_http_response_code);
	// Check HTTP response code is 200 or not
	if ( $get_http_response_code == 200 ){
		echo "<br>HTTP request successfully";
	
	$_SESSION['code_pre_input2'] = "HTTP request successfully";
	}else{
		$_SESSION['code_pre_input2'] = "HTTP request not successfully";
		echo "<br>HTTP request not successfully!";}
	
	header('location: form_http.php');

?>
