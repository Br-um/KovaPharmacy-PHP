<?php
    class User{
        private $fName;
        private $lName;
        private $email;
        private $password;


        public function getPassword()
        {
                return $this->password;
        }

        public function setPassword($password)
        {
                $this->password = $password;

                return $this;
        }

        public function getEmail()
        {
                return $this->email;
        }

        public function setEmail($email)
        {
                $this->email = $email;

                return $this;
        }

        public function getLName()
        {
                return $this->lName;
        }

        public function setLName($lName)
        {
                $this->lName = $lName;

                return $this;
        }
 
        public function getFName()
        {
                return $this->fName;
        }
        public function setFName($fName)
        {
                $this->fName = $fName;

                return $this;
        }

        public function validate(){
            $namePt = "/^[a-z]+$/i";
            $emailPt = "/^[a-z0-9]+@[a-z0-9]+.(com|br|com.br|gov.br|gov)$/i";
            $passwordPt = "/^[a-z0-9\@\#\!]+$/i";

            if(preg_match($namePt, $this->fName) && preg_match($namePt, $this->lName) && preg_match($emailPt, $this->email) && preg_match($passwordPt, $this->password)):
                return true;
            else:
                return false;
            endif;
        }
    }
