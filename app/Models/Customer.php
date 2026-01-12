<?php

class Customer extends Model
{
    public function getAll()
    {
        $sql = "SELECT * from customers";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}