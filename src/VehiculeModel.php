<?php 

class VehiculeModel
{
    private PDO $conn;

    public function __construct(Database $database)
    {
        $this->conn = $database->getConnection();
    }

    public function getAllForUser(int $userId): array 
    {
        $sql = "SELECT *
                FROM cars
                WHERE user_id = :user_id
                ORDER BY name";

        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(":user_id", $userId, PDO::PARAM_INT);
        $stmt->execute();

        $data = [];

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $data[] = $row;
        }
        return $data;
    }

    public function createForUser(int $userId, array $data, Vehicule $vehicule): string
    {
        $sql = "INSERT INTO cars (name, user_id, llantas, potencia, marca, fecha, tipo)
                VALUES (:name, :user_id, :llantas, :potencia, :marca, NOW(), :tipo)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(":name", $data["name"], PDO::PARAM_STR);
        $stmt->bindValue(":user_id", $userId, PDO::PARAM_INT);
        $stmt->bindValue(":llantas", $vehicule->getLlantas(), PDO::PARAM_INT);
        $stmt->bindValue(":potencia", $data["potencia"], PDO::PARAM_STR);
        $stmt->bindValue(":marca", $data["marca"], PDO::PARAM_STR);
        $stmt->bindValue(":tipo", $vehicule->getTipo(), PDO::PARAM_INT);
        $stmt->execute();
        return $this->conn->lastInsertId();
    }
}