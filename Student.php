<?php
    include_once 'IInformation.php';
    class Student implements IInformation {
        static $id_start = 1;
        const FEE = 1000000;   // Fee money
        private $id;
        private $firstname;
        private $lastname;
        private $age;
        private $fee;

        /**
         * @param mixed $id
         */
        public function setId($id){

            $this->id = $id;
        }

        /**
         * @return mixed
         */
        public function getId()
        {
            return $this->id;
        }
        /**
         * @return mixed
         */
        public function getAge()
        {
            return $this->age;
        }

        /**
         * @return mixed
         */
        public function getFirstname()
        {
            return $this->firstname;
        }

        /**
         * @return mixed
         */
        public function getLastname()
        {
            return $this->lastname;
        }

        /**
         * @param mixed $age
         */
        public function setAge($age): void
        {
            $this->age = $age;
        }

        /**
         * @param mixed $firstname
         */
        public function setFirstname($firstname): void
        {
            $this->firstname = $firstname;
        }

        /**
         * @param mixed $lastname
         */
        public function setLastname($lastname): void
        {
            $this->lastname = $lastname;
        }

        /**
         * @param mixed $fee
         */
        public function setFee($fee): void
        {
            $this->fee = $fee;
        }

        /**
         * @return mixed
         */
        public function getFee()
        {
            return $this->fee;
        }


        public function __construct($firstname, $lastname, $age){
            $this->id = Student::$id_start++;
            $this->firstname = $firstname;
            $this->lastname = $lastname;
            $this->age = $age;
        }


        public function showInfo()
        {
            // TODO: Implement showInfo() method.
            print "Id: ". $this->id . "\n";
            print "First Name: ". $this->firstname . "\n";
            print "Last Name: ". $this->lastname . "\n";
            print "Age: ". $this->age . "\n";
        }


    }


?>