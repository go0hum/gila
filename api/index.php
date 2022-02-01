<?php

declare(strict_types=1);

require __DIR__ . "/bootstrap.php";

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$parts = explode("/", $path);

$resource = $parts[2];
$id = $parts[3] ?? null;

if ($resource != "vehicule") {
    http_response_code(404);
    exit;
}

$database = new Database($_ENV["DB_HOST"], $_ENV["DB_NAME"], $_ENV["DB_USER"], $_ENV["DB_PASS"]);

$userModel = new UserModel($database);

$auth = new Auth($userModel);

if (! $auth->authenticateAccessToken()) {
    exit;
}

$userId = $auth->getUserID();

$vehiculeModel = new VehiculeModel($database);

$controller = new VehiculeController($vehiculeModel, $userId);

$controller->processRequest($_SERVER["REQUEST_METHOD"], $id);