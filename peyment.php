<?php
include("configvihecle.php");
class payment


{
    private $ID;
    private $Name;
    private $Address;
    private $Email;
    private $City;
    private $State;
    private $Zip;
    private $Card;
    private $Cardnumber;
    private $Price;
    private $Exp;
    private $Expyear;


    public function GetID()
    {
        return $this->ID;
    }
    public function SetId($id)
    {
        $this->ID=$id;
    }

    public function GetPrice()
    {
        return $this->Price;
    }
    public function SetPrice($price)
    {
        $this->Price=$price;
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

    public function GetCity()
    {
        return $this->City;
    }
    public function SetCity($city)
    {
        $this->City=$city;
    }

    public function GetState()
    {
        return $this->State;
    }
    public function SetState($state)
    {
        $this->State=$state;
    }

    
    public function GetCard()
    {
        return $this->Card;
    }
    public function SetCard($card)
    {
        $this->Card=$card;
    }

    public function GetZip()
    {
        return $this->Zip;
    }
    public function SetZip($zip)
    {
        $this->Zip=$zip;
    }

    public function GetCardnumber()
    {
        return $this->Cardnumber;
    }
    public function SetCardnumber($cardnumber)
    {
        $this->Cardnumber=$cardnumber;
    }

    public function GetExp()
    {
        return $this->Exp;
    }
    public function SetExp($exp)
    {
        $this->Exp=$exp;
    }

    public function GetExpyear()
    {
        return $this->Expyear;
    }
    public function SetExpyear($expyear)
    {
        $this->Expyear=$expyear;
    }

    public function Add()
    {
        try {
            $conn=ConfigDB::GetConnection();
            $query="INSERT INTO `payment`( `Name`, `Email`, `Address`, `City`, `State`, `Zip`, 
            `Card`, `Cardnumber`,`price`, `Exp`, `Expyear`) VALUES(?,?,?,?,?,?,?,?,?,?,?) ";

$stmt=$conn->prepare($query);
$stmt->bindparam(1,$this->Name,PDO::PARAM_STR);
$stmt->bindparam(2,$this->Email,PDO::PARAM_STR);
$stmt->bindparam(3,$this->Address,PDO::PARAM_STR);
$stmt->bindparam(4,$this->City,PDO::PARAM_STR);
$stmt->bindparam(5,$this->State,PDO::PARAM_STR);
$stmt->bindparam(6,$this->Zip,PDO::PARAM_STR);
$stmt->bindparam(7,$this->Card,PDO::PARAM_STR);
$stmt->bindparam(8,$this->Cardnumber,PDO::PARAM_STR);
$stmt->bindparam(9,$this->Price,PDO::PARAM_STR);

$stmt->bindparam(10,$this->Exp,PDO::PARAM_STR);
$stmt->bindparam(11,$this->Expyear,PDO::PARAM_STR);


$stmt->execute();
return $conn->lastInsertId();

        } catch (Exception $e) {
            throw $e;
        }
    }


}
?>
