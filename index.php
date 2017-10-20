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
    return json_encode("Hello! Payload received");
}
?>
