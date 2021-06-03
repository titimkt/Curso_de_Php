<?php

$phpinput = file_get_contents("php://input");

echo json_encode($phpinput);

exit();

$dadosTarefa = isset($_POST['nomeDaTarefa']) ? $_POST['nomeDaTarefa'] : null;

header('Content-Type: application/json');
echo json_encode($dadosTarefa);

exit();
