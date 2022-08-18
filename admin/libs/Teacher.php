<?php

namespace Admin\Libs;

use Exception;
use PDO;
use PDOException;

class Teacher extends Database
{
    use UploadPhoto;
    protected static $db_table = "teachers";
    protected static $db_fields = array("firstname", "lastname", "phone", "photo", "email", "mesage", "department", "password","roli");
    
    protected $id;
    protected $firstname;
    protected $lastname;
    protected $phone;
    protected $email;
    protected $mesage;
    protected $department;
    protected $password;
    protected $roli;
    protected $photo;
    protected $photoImage;
    

    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }

    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }
    public function getFirstname()
    {
        return $this->firstname;
    }

    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }
    public function getLastname()
    {
        return $this->lastname;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
    }
    public function getPhone()
    {
        return $this->phone;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setMesage($mesage)
    {
        $this->mesage = $mesage;
    }
    public function getMesage()
    {
        return $this->mesage;
    }
    public function setDepartment($department)
    {
        $this->department = $department;
    }
    public function getDepartment()
    {
        return $this->department;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }
    public function getPassword()
    {
        return $this->password;
    }
    
    public function setRoli($roli)
    {
        $this->roli = $roli;
    }
    public function getRoli()
    {
        return $this->roli;
    }

    public function setPhoto($photo)
    {
        $this->photo = $photo;
    }
    public function getPhoto()
    {
        return $this->photo;
    }
    public function setPhotoImage($photoImage)
    {
        $this->photoImage = $photoImage;
    }
    public function getPhotoImage()
    {
        return $this->photoImage;
    }



    

    
    public function getAllTeachers(){
        $this->query = "select * from " . static::$db_table;
        $statement = $this->connection->prepare($this->query);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function verifyTeachers($email, $password)
    {
        $sql = "SELECT * FROM " . static::$db_table; 
        $sql .= " WHERE email=:email, password=:password, roli=:roli";
        $result = $this->prepare($sql);
        $result->bindParam(':email', $email);
        $result->bindParam(':password', $password);
        $result->bindParam(':roli', $roli);
        $result->execute();
        $result->setFetchMode(PDO::FETCH_CLASS, __NAMESPACE__ . "\\{$this->getClassName()}");
        return $result->fetch();
    }
    public function create()
    {
        try {
            $this->startupLoad($this->photoImage);
            $this->photo = $this->filename;
            $uploadfile = $this->uploadFile();
            if ($uploadfile) {
                if (parent::create()) {
                    return true;
                }
            } else {
                foreach ($this->errors as $error) {
                    echo $error . "<br>";
                }
            }
        } catch (Exception $e) {
            echo "Teacher " . $e->getMessage();
        }
    }
    public function update()
    {
        try {
            if (isset($this->photoImage)) {
                $this->uploadfile = $this->src . $this->photo;
                unlink($this->uploadfile);
                $this->startupLoad($this->photoImage);
                $this->photo = $this->filename;
                $uploadFile = $this->uploadFile();
                if ($uploadFile) {
                    if (parent::update()) {
                        return true;
                    }
                } else {
                    foreach ($this->errors as $error) {
                        echo $error . "<br>";
                    }
                }
            }else{
                if (parent::update()) {
                    return true;
                }
            }
        } catch (Exception $e) {
            echo "Teacher " . $e->getMessage();
        }
    }
    public function delete()
    {
        try {
            if (parent::delete()) {
                $this->uploadfile = $this->src . $this->photo;
                unlink($this->uploadfile);
                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {
            echo "Teacher " . $e->getMessage();
        }
    }
}
