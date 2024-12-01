<?php 

	require_once 'DbConnect.php';
	
	$response = array();
	
	if(isset($_GET['apicall'])){
		
		switch($_GET['apicall']){
			
			
case 'hrate':
				if(isTheseParametersAvailable(array('userid','username','email','mobile','gender','heartrate','currentDate','currentTime')))
         {
                           $userid = $_POST['userid'];
					$username = $_POST['username']; 
					$email = $_POST['email']; 
					$mobile= $_POST['mobile'];
					$gender = $_POST['gender']; 
                            $heartrate= $_POST['heartrate']; 
                         $currentDate= $_POST['currentDate'];
                         $currentTime= $_POST['currentTime'];
					
											$stmt = $conn->prepare("INSERT                                                                                                   INTO heartrate (userid,username, email, mobile, gender,heartrate,currentDate,currentTime) VALUES (?,?, ?, ?, ?,?,?,?)");
						$stmt->bind_param("ssssssss",    $userid,$username, $email, $mobile, $gender,$heartrate,$currentDate,$currentTime);

						if($stmt->execute())
                                    {
							$stmt = $conn->prepare("SELECT  id,userid, username, email,mobile,gender,heartrate,currentDate,currentTime FROM heartrate WHERE username = ?"); 
							$stmt->bind_param("s",$username);
							$stmt->execute();
							$stmt->bind_result($id,$userid, $username, $email,$mobile, $gender,$heartrate,$currentDate,$currentTime);
							$stmt->fetch();
							
							$user = array(
								'id'=>$id, 
                                            'userid'=>$userid, 
                                            'username'=>$username, 
								                                                   
								'email'=>$email,
                                            'mobile'=>$mobile,
								'gender'=>$gender,
	                                     'heartrate'=>$heartrate,
'currentDate'=>$currentDate,
'currentTime'=>$currentTime


							);
							
							$stmt->close();
							
							$response['error'] = false; 
							$response['message'] = 'User inserted successfully'; 
							$response['user'] = $user; 
						}
					
					
				}else{
					$response['error'] = true; 
					$response['message'] = 'required parameters are not available'; 
				}
				
			break; 

case 'rprate':
			
	if(isTheseParametersAvailable(array('userid','username','email','mobile','gender','rprate','currentDate','currentTime')))
         {
                           $userid = $_POST['userid'];
					$username = $_POST['username']; 
					$email = $_POST['email']; 
					$mobile= $_POST['mobile'];
					$gender = $_POST['gender']; 
                            $rprate= $_POST['rprate']; 
                         $currentDate= $_POST['currentDate'];
                         $currentTime= $_POST['currentTime'];
					
											$stmt = $conn->prepare("INSERT                                                                                                   INTO rprate(userid,username, email, mobile, gender,rprate,currentDate,currentTime) VALUES (?,?, ?, ?, ?,?,?,?)");
						$stmt->bind_param("ssssssss",    $userid,$username, $email, $mobile, $gender,$rprate,$currentDate,$currentTime);

						if($stmt->execute())
                                    {
							$stmt = $conn->prepare("SELECT  id,userid, username, email,mobile,gender,rprate,currentDate,currentTime FROM rprate WHERE username = ?"); 
							$stmt->bind_param("s",$username);
							$stmt->execute();
							$stmt->bind_result($id,$userid, $username, $email,$mobile, $gender,$rprate,$currentDate,$currentTime);
							$stmt->fetch();
							
							$user = array(
								'id'=>$id, 
                                            'userid'=>$userid, 
                                            'username'=>$username, 
								                                                   
								'email'=>$email,
                                            'mobile'=>$mobile,
								'gender'=>$gender,
	                                     'rprate'=>$rprate,
                                     'currentDate'=>$currentDate,
                                     'currentTime'=>$currentTime
							);
							
							$stmt->close();
							
							$response['error'] = false; 
							$response['message'] = 'User inserted successfully'; 
							$response['user'] = $user; 
						}
					
					
				}else{
					$response['error'] = true; 
					$response['message'] = 'required parameters are not available'; 
				}
				
			break; 


case 'bp':
				if(isTheseParametersAvailable(array('userid','username','email','mobile','gender','bp','currentDate','currentTime')))
         {
                           $userid = $_POST['userid'];
					$username = $_POST['username']; 
					$email = $_POST['email']; 
					$mobile= $_POST['mobile'];
					$gender = $_POST['gender']; 
                            $bp= $_POST['bp']; 
                        $currentDate= $_POST['currentDate'];
                         $currentTime= $_POST['currentTime'];

					
											$stmt = $conn->prepare("INSERT                                                                                                   INTO bp(userid,username, email, mobile, gender,bp,currentDate,currentTime) VALUES (?,?, ?, ?, ?,?,?,?)");
						$stmt->bind_param("ssssssss",    $userid,$username, $email, $mobile, $gender,$bp,$currentDate,$currentTime);

						if($stmt->execute())
                                    {
							$stmt = $conn->prepare("SELECT  id,userid, username, email,mobile,gender,bp,currentDate,currentTime FROM bp WHERE username = ?"); 
							$stmt->bind_param("s",$username);
							$stmt->execute();
							$stmt->bind_result($id,$userid, $username, $email,$mobile, $gender,$bp,$currentDate,$currentTime);
							$stmt->fetch();
							
							$user = array(
								'id'=>$id, 
                                            'userid'=>$userid, 
                                            'username'=>$username, 
								                                                   
								'email'=>$email,
                                            'mobile'=>$mobile,
								'gender'=>$gender,
	                                     'bp'=>$bp,
                                     'currentDate'=>$currentDate,
                                     'currentTime'=>$currentTime



							);
							
							$stmt->close();
							
							$response['error'] = false; 
							$response['message'] = 'User inserted successfully'; 
							$response['user'] = $user; 
						}
					
					
				}else{
					$response['error'] = true; 
					$response['message'] = 'required parameters are not available'; 
				}
				
			break; 

case 'osaturation':
				if(isTheseParametersAvailable(array('userid','username','email','mobile','gender','osaturation','currentDate','currentTime')))
         {
                           $userid = $_POST['userid'];
					$username = $_POST['username']; 
					$email = $_POST['email']; 
					$mobile= $_POST['mobile'];
					$gender = $_POST['gender']; 
                            $osaturation= $_POST['osaturation']; 
                        $currentDate= $_POST['currentDate'];
                         $currentTime= $_POST['currentTime'];

					
											$stmt = $conn->prepare("INSERT                                                                                                   INTO osaturation(userid,username, email, mobile, gender,osaturation,currentDate,currentTime) VALUES (?,?, ?, ?, ?,?,?,?)");
						$stmt->bind_param("ssssssss",    $userid,$username, $email, $mobile, $gender,$osaturation,$currentDate,$currentTime);

						if($stmt->execute())
                                    {
							$stmt = $conn->prepare("SELECT  id,userid, username, email,mobile,gender,osaturation,currentDate,currentTime FROM osaturation WHERE username = ?"); 
							$stmt->bind_param("s",$username);
							$stmt->execute();
							$stmt->bind_result($id,$userid, $username, $email,$mobile, $gender,$osaturation,$currentDate,$currentTime);
							$stmt->fetch();
							
							$user = array(
								'id'=>$id, 
                                            'userid'=>$userid, 
                                            'username'=>$username, 
								                                                   
								'email'=>$email,
                                            'mobile'=>$mobile,
								'gender'=>$gender,
	                                     'osaturation'=>$osaturation,
'currentDate'=>$currentDate,
                                     'currentTime'=>$currentTime
							);
							
							$stmt->close();
							
							$response['error'] = false; 
							$response['message'] = 'User inserted successfully'; 
							$response['user'] = $user; 
						}
					
					
				}else{
					$response['error'] = true; 
					$response['message'] = 'required parameters are not available'; 
				}
				
			break; 
case 'allvsign':
				if(isTheseParametersAvailable(array('userid','username','email','mobile','gender','heartrate','rprate','bp','osaturation','currentDate','currentTime')))
         {
                           $userid = $_POST['userid'];
					$username = $_POST['username']; 
					$email = $_POST['email']; 
					$mobile= $_POST['mobile'];
					$gender = $_POST['gender']; 
                         $heartrate= $_POST['heartrate']; 
                         $rprate= $_POST['rprate']; 
                          $bp= $_POST['bp']; 
                            $osaturation= $_POST['osaturation']; 

                        $currentDate= $_POST['currentDate'];
                         $currentTime= $_POST['currentTime'];

					
											$stmt = $conn->prepare("INSERT                                                                                                   INTO allvsign(userid,username, email, mobile, gender,heartrate,rprate,bp,osaturation,currentDate,currentTime) VALUES (?,?, ?, ?,?, ?,?,?,?,?,?)");
						$stmt->bind_param("sssssssssss",    $userid,$username, $email, $mobile, $gender,$heartrate,$rprate,$bp,$osaturation,$currentDate,$currentTime);

						if($stmt->execute())
                                    {
							$stmt = $conn->prepare("SELECT  id,userid, username, email,mobile,gender,heartrate,rprate,bp,osaturation,currentDate,currentTime  FROM allvsign WHERE username = ?"); 
							$stmt->bind_param("s",$username);
							$stmt->execute();
							$stmt->bind_result($id,$userid, $username, $email,$mobile, $gender,$heartrate,$rprate,$bp,$osaturation,$currentDate,$currentTime );
							$stmt->fetch();
							
							$user = array(
								'id'=>$id, 
                                            'userid'=>$userid, 
                                            'username'=>$username, 
								                                                   
								'email'=>$email,

                                            'mobile'=>$mobile,
								'gender'=>$gender,
'heartrate'=>$heartrate,
'rprate'=>$rprate,
 'bp'=>$bp,                      'osaturation'=>$osaturation,
'currentDate'=>$currentDate,
                                     'currentTime'=>$currentTime


							);
							
							$stmt->close();
							
							$response['error'] = false; 
							$response['message'] = 'User inserted successfully'; 
							$response['user'] = $user; 
						}
					
					
				}else{
					$response['error'] = true; 
					$response['message'] = 'required parameters are not available'; 
				}
				
			break; 

			
			default: 
				$response['error'] = true; 
				$response['message'] = 'Invalid Operation Called';
		}
		
	}else{
		$response['error'] = true; 
		$response['message'] = 'Invalid API Call';
	}
	
	echo json_encode($response);
	
	function isTheseParametersAvailable($params){
		
		foreach($params as $param){
			if(!isset($_POST[$param])){
				return false; 
			}
		}
		return true; 
	}