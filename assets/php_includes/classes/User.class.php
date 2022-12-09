<?php

include_once('Log.class.php');

class User {
    private $id, $email, $password, $firstName, $lastName, $avatar, $session, $registrationDate;

    public function setID($id){
        $this->id=$id;
    }
    public function getID(){
        return $this->id;
    }
    public function setEmail($email){
        $this->email=$email;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setPassword($password){
        $this->password=$password;
    }
    public function getPassword(){
        return $this->password;
    }
    public function setFirstName($firstName){
        $this->firstName=$firstName;
    }
    public function getFirstName(){
        return $this->firstName;
    }
    public function setLastName($lastName){
        $this->lastName=$lastName;
    }
    public function getLastName(){
        return $this->lastName;
    }
    public function setAvatar($avatar){
        $this->avatar=$avatar;
    }
    public function getAvatar(){
        return $this->avatar;
    }
    public function setSession($session){
        $this->session=$session;
    }
    public function getSession(){
        return $this->session;
    }
    public function setRegistrationDate($registrationDate){
        $this->registrationDate=$registrationDate;
    }
    public function getRegistrationDate(){
        return $this->registrationDate;
    }

    private function generateCode($length){
        $chars = "vwxyzABCD0123456";
        $code = "";
        while(strlen($code)<$length){
            $code .=$chars[mt_rand(0, strlen($chars)-1)];
        }
        return $code;
    }

    public function authenticate(){
        $database = new Database;
        try{
            $database->query("SELECT id FROM Users WHERE email= :email AND password= :password");
            $database->bind(":email", $this->getEmail());
            $database->bind(":password", $this->getPassword());
            $row = $database->single();
            $myLog = new Log();
            if($row){
                $this->setID($row['id']);
                $myLog->setUserID($this->getID());
                $myLog->setLabelicon('user');
                $myLog->setLabeltype('success');
                $myLog->setOperation('Authentication successful');
                $myLog->writeToLog();
                // $this->writeToLogAuthenticationSuccessful();
                return true;
            }
            else{
                if($this->findGoogleUserIdByMail()){
                    $myLog->setUserID($this->getID());
                    $myLog->setLabelicon('user');
                    $myLog->setLabeltype('danger');
                    $myLog->setOperation('Registered Gmail user tried to authenticate with password');
                    $myLog->writeToLog();
                    return false;
                }
                else if($this->findUserIdByMail()){
                    $myLog->setUserID($this->getID());
                    $myLog->setLabelicon('user');
                    $myLog->setLabeltype('danger');
                    $myLog->setOperation('Authentication failed');
                    $myLog->writeToLog();
                    // $this->writeToLogAuthenticationFailed();
                    return false;
                }                
                
                return false;
            }
        }
        catch(Exception $e){
            echo $e->getMessage();
            return false;
        }
    }

    public function findUserIdByMail(){
        $database = new Database;
        $database->query("SELECT id FROM Users WHERE email=:email");
        $database->bind(':email', $this->getEmail());
        $row=$database->single();
        if($row){
            $this->setID($row['id']);
        return true;
        }
        else{
            return false;
        }
    }
    public function findGoogleUserIdByMail(){
        $database = new Database;
        $database->query("SELECT id FROM Users WHERE email=:email AND password is NULL");
        $database->bind(':email', $this->getEmail());
        $row=$database->single();
        if(substr($this->getEmail(), strpos($this->getEmail(), '@')+1, 5) === 'gmail'){
            // return true;
            if($row){
                $this->setID($row['id']);
                return true;
            }
        }
        else{
            return false;
        }
    }

    public function registerUser(){
        $session = $this->generateCode(20);
        $this->setSession($session);
        $database = new Database;
        try{
            $database->query('INSERT into Users
                                (email, password, firstName, lastName, session)
                                VALUES
                                (:email, :password, :firstName, :lastName, :session)');
            $database->bind(':email', $this->getEmail());
            $database->bind(':password', $this->getPassword());
            $database->bind(':firstName', $this->getFirstName());
            $database->bind(':lastName', $this->getLastName());
            $database->bind(':session', $this->getSession());
            $database->execute();
            $this->setID($database->lastInsertId());

            $myLog = new Log();
            $myLog->setUserID($this->getID());
            $myLog->setLabelicon('user');
            $myLog->setLabeltype('success');
            $myLog->setOperation('Registration successful');
            $myLog->writeToLog();
            // $this->writeToLogRegistrationSuccessful();
            return true;
        }
        catch(Exception $e){
            echo $e->getMessage();
            return false;
        }

    }

    public function signoutUser(){
        $database = new Database;
        $myLog = new Log();
        $myLog->setUserID($this->getID());
        $myLog->setLabelicon('user');
        $myLog->setLabeltype('success');
        $myLog->setOperation('Signout successful');
        $myLog->writeToLog();
    }

    public function getUser(){
        $database = new Database;
        try{
            $database->query('
                SELECT 
                    email, firstName, lastName, avatar, session, timestamp
                FROM 
                    Users
                WHERE
                    id=:id
            ');
            $database->bind(':id', $this->getID());
            $row = $database->single();
            $this->setEmail($row['email']);
            $this->setFirstName($row['firstName']);
            $this->setLastName($row['lastName']);
            $this->setAvatar($row['avatar']);
            $this->setSession($row['session']);
            $this->setRegistrationDate($row['timestamp']);
            return true;
        }
        catch(Exception $e){
            return false;
        }
    }

    //GOOGLE USER

    public function googleAuthenticate(){
        $database = new Database;
        try{
            $database->query("SELECT * from Users where email=:email");
            $database->bind(":email", $this->getEmail());
            $row = $database->single();
            if($row){
                $this->setID($row['id']);
                $myLog = new Log();
                $myLog->setUserID($this->getID());
                $myLog->setLabelicon('user');
                $myLog->setLabeltype('success');
                $myLog->setOperation('Authentication successful');
                $myLog->writeToLog();
                // $this->writeToLogAuthenticationSuccessful();
                return true;
            }
            else{
                $session = $this->generateCode(20);
                
                $query = "INSERT INTO Users (firstName, lastName, avatar, email, session) 
                            VALUES (:firstName, :lastName, :avatar, :email, :session)";
                $database->query($query);
                $database->bind(":firstName", $this->getFirstName());
                $database->bind(":lastName", $this->getLastName());
                $database->bind(":avatar", $this->getAvatar());
                $database->bind(":email", $this->getEmail());
                $database->bind(":session", $session);
                $database->execute();
                $this->setID($database->lastInsertId());

                $myLog = new Log();
                $myLog->setUserID($this->getID());
                $myLog->setLabelicon('user');
                $myLog->setLabeltype('success');
                $myLog->setOperation('Registration successful');
                $myLog->writeToLog();
                // $this->writeToLogRegistrationSuccessful();
                $myLog->setOperation('Authentication successful');
                $myLog->writeToLog();
                // $this->writeToLogAuthenticationSuccessful();
                return true;
            }
        }
        catch(Exception $e){
            echo $e->getMessage();
            return false;
        }
    }
}
