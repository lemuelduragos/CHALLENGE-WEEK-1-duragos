<?php

function autoPull() {

	$commands = array(
        'echo $PWD',
        'whoami',
        'sudo git pull',
    );
    foreach($commands AS $command){
        shell_exec("$command 2>&1");
    }
}


 if($_POST['Payload']) {
 	$payload  = $_POST['Payload'];
 	if($payload['ref'] ==  "refs/heads/GITHUB-WEBHOOK") {
 		 autoPull();

 	} else {
 		return json_encode("Not on branch allowed for autopull");
 	}
 }
    
?>