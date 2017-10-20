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


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
	
	if($data['ref'] == 'refs/heads/GITHUB-WEBHOOK') {
		autoPull();
	}
    else {
       echo "You are not on the right branch to autdeploy";
    }
}
?>
