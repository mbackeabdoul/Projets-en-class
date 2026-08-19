<?php

$url = parse_url($_SERVER['REQUEST_URI']);

$chemin = $url['path'];


switch ($chemin) {
    case '/':
        require_once dirname(__DIR__)."/Controller/ControllerEleve.php";
        $controller = new EleveController();
        $controller->index();
        break;

    default:
        http_response_code(404);
        echo "Page non trouvee";
        break;
}