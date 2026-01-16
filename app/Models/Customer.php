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

    public function getOneById($customerId)
    {
        $sql = "SELECT * from customers WHERE id=:customerId";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute([
            'customerId' => $customerId
        ]);
        return $stmt->fetch();
    }

    public function create($data)
    {
        $sql = "INSERT INTO `customers`(`name`, `img`, `email`, `phoneNumber`, `birth`, `status`) VALUES (:name, :img, :email, :phoneNumber, :birth, :status)";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute($data);
        return $stmt->rowCount();
    }

    public function update($data)
    {
        $sql = "UPDATE `customers` SET `name`= :name,`img`= :img,`email`=:email,`phoneNumber`=:phoneNumber,`birth`=:birth,`status`=:status WHERE id=:id";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute($data);
        return $stmt->rowCount();
    }

    public function delete($id)
    {
        $sql = "DELETE FROM `customers` WHERE id=:id";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute([
            'id' => $id
        ]);
        return $stmt->rowCount();
    }

    public function search($keyword)
    {
        $sql = "SELECT * from customers WHERE name LIKE :keyword";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute([
            'keyword' => "%$keyword%"
        ]);
        return $stmt->fetchAll();
    }
}
