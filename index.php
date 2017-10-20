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

autoPull();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "Hello! Payload received";
    $data = json_decode(file_get_contents('php://input'), true);
	print_r($data);
}
?>
