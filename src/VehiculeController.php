<?php 

class VehiculeController
{
    private $vehiculeModel;
    private $userId;

    public function __construct(VehiculeModel $vehiculeModel, int $userId)
    {
        $this->vehiculeModel = $vehiculeModel;
        $this->userId = $userId;
    }

    public function processRequest(string $method, ?string $id): void
    {
        if ($id === null) {
            if ($method == "GET") {
                
                echo json_encode($this->vehiculeModel->getAllForUser($this->userId));

            } else if ($method == "POST") {
                
                $data  = (array) json_decode(file_get_contents("php://input"), true);

                $errors = $this->getValidationErrors($data);

                if (!empty($errors)) {
                    $this->respondUnprocessableEntity($errors);
                    return;
                }

                switch($data["tipo"]) {
                    case 2: 
                        $vehicule = new Motocicleta();
                    case 1: 
                        $vehicule = new Sedan();
                }

                
                $id = $this->vehiculeModel->createForUser($this->userId, $data, $vehicule);
                
                $this->respondCreated($id);

            } else {
                $this->respondeMethodAllowed("GET, POST");
            }
        } 
    }

    private function respondUnprocessableEntity(array $errors): void
    {
        http_response_code(422);
        echo json_encode(["errors" => $errors]);
    }

    private function respondeMethodAllowed(string $allowed_methods): void
    {
        http_response_code(405);
        header("Allow: $allowed_methods");
    }

    private function respondCreated(string $id): void
    {
        http_response_code(201);
        echo json_encode(["message" => "Vehicule created", "id" => $id]);
    }

    private function getValidationErrors(array $data, bool $is_new = true): array
    {
        $errors = [];

        if($is_new && empty($data["name"])) {
            $errors[] = "name is required";
        }

        return $errors;
    }
}