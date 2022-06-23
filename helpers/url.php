<?php

$BASE_URL = "http://" . $_SERVER["SERVER_NAME"] . dirname($_SERVER["REQUEST_URI"]. "?") . "/";
//$BASE_URL é a variavel que vai receber $_SERVER["SERVER_NAME"] o nome do dominio ou server nesse caso localhost/
// em seguida concatena dirname($_SERVER["REQUEST_URI"]. "?") . "/"; 
// que nesse caso é o nome do diretorio onde atual EX: http://localhost/pasta/index.php