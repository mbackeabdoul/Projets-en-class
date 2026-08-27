<?php
require_once dirname(__DIR__).'/Controller/InscriptionEleve.php';

$url = parse_url($_SERVER['REQUEST_URI']);
$chemin = $url['path'];

switch ($chemin) {
    case '/':
        require_once dirname(__DIR__)."/Controller/InscriptionEleve.php";
        $controller = new InscriptionController();
        $controller->index();
        break;

    case '/inscription/nouvelle':
        require_once dirname(__DIR__)."/Controller/InscriptionFormController.php";
        $controller = new InscriptionFormController();
        $controller->nouvelle();
        break;

    default:
        http_response_code(404);
        echo "Page pas trouvee";
        break;
}