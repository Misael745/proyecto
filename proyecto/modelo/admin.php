<?php

if (class_exists('admin') != true) {
    class admin
    {
        protected $id;
        protected $user;
        protected $password;

        public function __construct($id = null, $user = null, $password = null)
        {
            $this->id = $id;
            $this->user = $user;
            $this->password = $password;
        }

        public function getId()
        {
            return $this->id;
        }

        public function setId($id)
        {
            $this->id = $id;
            return $this;
        }

        public function getUser()
        {
            return $this->user;
        }

        public function setUser($user)
        {
            $this->user = $user;
            return $this;
        }

        public function getPassword()
        {
            return $this->password;
        }

        public function setPassword($password)
        {
            $this->password = $password;
            return $this;
        }
    }
}
?>