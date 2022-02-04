<?php

namespace DDEV;

use PDO;

class Company
{
    protected $pdo;
    private $title;
    private $code;
    private $pvm_code;
    private $address;
    private $phone;
    private $email;
    private $activity;
    private $manager;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function createCompany($item)
    {
        $this->title = $item['title'];
        $this->code = $item['code'];
        $this->pvm_code = $item['pvm_code'];
        $this->address = $item['address'];
        $this->phone = $item['phone'];
        $this->email = $item['email'];
        $this->activity = $item['activity'];
        $this->manager = $item['manager'];
        $this->insertTask();
    }

    private function insertTask()
    {
        try {
            $query = "INSERT INTO `company` (`title`,`code`,`pvm_code`,`address`,`phone`,`email`,`activity`,`manager`) 
            VALUES (:title,:code,:pvm_code,:address,:phone,:email,:activity,:manager)";
            $stmt = $this->pdo->prepare($query);
            $stmt->bindParam(':title', $this->title, PDO::PARAM_STR);
            $stmt->bindParam(':code', $this->code, PDO::PARAM_STR);
            $stmt->bindParam(':pvm_code', $this->pvm_code, PDO::PARAM_STR);
            $stmt->bindParam(':address', $this->address, PDO::PARAM_STR);
            $stmt->bindParam(':phone', $this->phone, PDO::PARAM_STR);
            $stmt->bindParam(':email', $this->email, PDO::PARAM_STR);
            $stmt->bindParam(':activity', $this->activity, PDO::PARAM_STR);
            $stmt->bindParam(':manager', $this->manager, PDO::PARAM_STR);
            $stmt->execute();
            header('Location:https://company.ddev.site');
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function listCompany()
    {
        $statement = $this->pdo->prepare('select * from company');
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function deleteCompany($id)
    {
        $statement = $this->pdo->prepare("DELETE FROM `company` WHERE code=$id");
        $statement->execute();
        header('Location:https://company.ddev.site/listCompany');
        return $statement;
    }

    public function updateCompany($id, $item)
    {
        try {
            $query = "UPDATE `company` SET title=:title,code=:code,pvm_code=:pvm_code,address=:address,phone=:phone,email=:email,activity=:activity,manager=:manager WHERE code=$id";

            $stmt = $this->pdo->prepare($query);

            $stmt->bindParam(':title', $item["title"], PDO::PARAM_STR);
            $stmt->bindParam(':code', $item['code'], PDO::PARAM_STR);
            $stmt->bindParam(':pvm_code', $item['pvm_code'], PDO::PARAM_STR);
            $stmt->bindParam(':address', $item['address'], PDO::PARAM_STR);
            $stmt->bindParam(':phone', $item['phone'], PDO::PARAM_STR);
            $stmt->bindParam(':email', $item['email'], PDO::PARAM_STR);
            $stmt->bindParam(':activity', $item['activity'], PDO::PARAM_INT);
            $stmt->bindParam(':manager', $item['manager'], PDO::PARAM_STR);
            $stmt->execute();
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }
}