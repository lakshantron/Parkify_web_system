<?php
include("configvihecle.php");
class vihecle
{
    private $ID;
    private $Name;
    private $Address;
    private $Email;
    private $Nic;
    private $Type;
    private $Model;
    private $Phone;
    private $Number;

    public function GetID()
    {
        return $this->ID;
    }
    public function SetId($id)
    {
        $this->ID=$id;
    }

    public function GetName()
    {
        return $this ->Name;
    }
    public function SetName($name)
    {
        $this->Name=$name;
    }

    public function GetEmail()
    {
        return $this ->Email;
    }
    public function SetEmail($email)
    {
        $this->Email=$email;
    }

    

    public function GetAddres()
    {
        return $this->Address;
    }
    public function SetAddress($address)
    {
        $this->Address=$address;
    }

    public function GetNic()
    {
        return $this->Nic;
    }
    public function SetNic($nic)
    {
        $this->Nic=$nic;
    }

    public function GetType()
    {
        return $this->Type;
    }
    public function SetType($type)
    {
        $this->Type=$type;
    }

    public function GetModel()
    {
        return $this->Model;
    } 
    public function setModel($model)
    {
        $this->Model=$model;
    }

    public function GetPhone()
    {
        return $this->Phone;
    }
    public function SetPhone($phone)
    {
        $this->Phone=$phone;
    }

    public function GetNumber()
    {
        return $this->Number;
    }
    public function SetNumber($number)
    {
        $this->Number=$number;
    }

    public function Add()
    {
        try {
     $conn=ConfigDB::GetConnection();
     $query="INSERT INTO `vihecle`(`Name`, `Address`, `Email`, 
     `Nic`, `Phone`, `Type`, `Model`, `Number`) VALUES(?,?,?,?,?,?,?,?)";
     
     $stmt=$conn->prepare($query);
     $stmt->bindparam(1,$this->Name,PDO::PARAM_STR);
     $stmt->bindparam(2,$this->Address,PDO::PARAM_STR);
     $stmt->bindparam(3,$this->Email,PDO::PARAM_STR);
     $stmt->bindparam(4,$this->Nic,PDO::PARAM_STR);
     $stmt->bindparam(5,$this->Phone,PDO::PARAM_STR);
     $stmt->bindparam(6,$this->Type,PDO::PARAM_STR);
     $stmt->bindparam(7,$this->Model,PDO::PARAM_STR);
     $stmt->bindparam(8,$this->Number,PDO::PARAM_STR);

     $stmt->execute();
     return $conn->lastInsertId();

        } catch (Exception $e) {
            throw $e;
        }
    }
}
?>