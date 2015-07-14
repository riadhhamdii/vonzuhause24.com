<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/lib/lang.php');

$errorInAction = array("isAnError" => FALSE, "message" => "");

if( isset($_POST['save_leads']) ){

	include($_SERVER['DOCUMENT_ROOT'].'/lib/database.php');
	include($_SERVER['DOCUMENT_ROOT'].'/class/getResponseCall.php');	
	
	$errorMessage = "";
	
	if( ($_POST['gender'] == "DV") || ($_POST['firstname'] == "") || ($_POST['lastname'] == "") || ($_POST['countrycode'] == "DV") || ($_POST['telnumber'] == "") || ($_POST['emailaddress'] == "")  ){
	
			$errorInAction['isAnError'] = TRUE;
			$errorInAction['message'] = getLangMessage("All fields are required");
	
	}
	
	if( !$errorInAction['isAnError'] ){
	
		$gender = ( !empty($_POST['gender']) ) ? $db->escape($_POST['gender']) : "";
		$first_name = ( !empty($_POST['firstname']) ) ? $db->escape($_POST['firstname']) : "";
		$last_name = ( !empty($_POST['lastname']) ) ? $db->escape($_POST['lastname']) : "";
		$country_code = ( $_POST['countrycode'] != "default_value" ) ? $db->escape($_POST['countrycode']) : "";
		$tel_number = ( !empty($_POST['telnumber']) ) ? $db->escape($_POST['telnumber']) : "";
		$email_address = ( !empty($_POST['emailaddress']) ) ? $db->escape($_POST['emailaddress']) : "";
		
		// leads details
		$data = Array ("gender" => $gender,
			       "first_name" => $first_name,
			       "last_name" => $last_name,
			       "country_code" => $country_code,
			       "email_address" => $email_address,
			       "tel_number" => $tel_number,
			       "activation_status" => 1
		);

		// Store lead in our database
		if( $db->insert ('leads', $data) ){
		
			//putErrorAction(&$errorInAction, "message1");
		
			$leadData = array(
				'basic_fileds' => array(
							'lastname' => array(
										'key' => 'lastname',
										'value' => $last_name
									    )
							,
							'email' => array(
										'key' => 'email',
										'value' => $email_address
									    )

									    
							),
				'customs_fileds' => array(
							'gender' => array(
										'key' => 'gender',
										'value' => $gender
									 )
							,'firstname' => array(
										'key' => 'firstname',
										'value' => $first_name
									 )
							,
							'countrycode' => array(
										'key' => 'countrycode',
										'value' => $country_code
									 )
							,
							'telnumber' => array(
										'key' => 'countrycode',
										'value' => $tel_number
									 )
									 
							)
				);
		
			// Call GetResponse API
		
			$getResponseInstance = new getResponseCall();
			
			$getResponseInstance->addLeads($leadData, "VAbV2");
			
			$resultResponse = $getResponseInstance->getErrors();
			
			if( $resultResponse['isError'] ){
			
				$errorInAction['isAnError'] = TRUE;
				$errorInAction['message'] = getLangMessage($resultResponse['error']['message']);
			
			}else{
			
				?>
				
				 <script type="text/javascript" language="JavaScript">
					window.location.replace("actions/confirmation.php") 
				 </script>
				
				<?php
			
			}
		    
		}
		
		// Close connection
		$db->__destruct();

	}	

}

?>