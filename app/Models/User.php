<?php

    namespace App\Models;

    class User {

        protected $first_name;
        
        

        /**
         * Get the value of firstName
         */ 
        public function getFirstName()
        {
                return $this->first_name;
                
        }

        /**
         * Set the value of firstName
         *
         * @return  self
         */ 
        public function setFirstName($firstName)
        {
                $this->first_name = $firstName;

                return $this;
        }
    }



?>