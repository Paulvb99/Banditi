<?php
	class httpRequest {
		var $response;
		
		/*	
			//Do a HTTP POST request to $url, put the arguments in $arguments
			//For example, you save this file to "class.httprequest.php". In the
			//script that should do the http request, you put this:
			
			include "class.httprequest.php";
			
			$url = "http://www.targetsms.nl/somepage.php";
			//This is just an example url
			
			$arguments["username"] = "yourusernamename";
			$arguments["aff"] = "12345";
			$arguments["handle"] = "...";
			//etcetera... (these are just examples)
			
			$http = new httpRequest($url, $arguments);
			echo $http->response;
		*/
		
		function httpRequest ($url, $arguments) {
			if (substr($url, 0, 7) == "http://") {
				$url = substr($url, 7);
			}
			
			list($host, $uri) = explode("/", $url, 2);
			$uri = "/$uri";
			
			foreach ($arguments as $k => $v) {
				$querystr .= "&$k=" . urlencode($v);
			}
			
			$querystr = substr($querystr, 1);
			$qlength = strlen($querystr);
			
			//Establish the connection to port 80.
			$remote = fsockopen($host, 80, $errno, $errstr, 30);
			
			//Creating http headers, whiteline, body and again a whiteline.
			$post =
				"POST $uri HTTP/1.0\r\n".
				"Host: $host\r\n".
				"Content-type: application/x-www-form-urlencoded\r\n".
				"Content-length: $qlength\r\n\r\n".
				"$querystr\r\n\r\n";
			
			if ($remote) {
				//Send the request:
				fputs($remote, $post);
				//Receive the response:
				while (!feof($remote)) {
					$a = fgets($remote, 4096);
					$response .= $a;
				}
			} else {
				$this->errorHandler("Connection failed $errno $errstr");
			}
			
			//Split the response into the header and the body. The body is the
			//"response" that will be stored in $this->response, and can be used
			//in your script.
			list($header, $response) = explode("\r\n\r\n", $response, 2);
			list($temp, $statuscode) = explode(" ", $header, 2);
			list($statuscode) = explode("\r\n", $statuscode);
			
			//Status 200 means success, something else usually means failure,
			//access denied, page not found, timeout, etc.
			if (substr($statuscode, 0, 3) == "200") {
				$this->response = $response;
			} else {
				$this->errorHandler($statuscode);
			}
		}
		
		//This function will be called upon failure
		function errorHandler ($errorMessage) {
			//Show the error message and stop execution of the entire page.
			//You can edit this to do something else than stopping the
			//execution, like for example only showing an error message.
			die($errorMessage);
		}
		
	}
?>

