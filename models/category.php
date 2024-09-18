<?php
    class Category{
        private $categoryID;
        private $categoryName;

        public function getCategoryID(){return $this -> categoryID;}
        public function getCategoryName(){return $this -> categoryName;}
        public function setCategoryID($categoryID){
            $this ->categoryID = $categoryID;
        }
        public function setCategoryName($categoryName){
            $this -> categoryName =$categoryName;
        }

        public function __construct($categoryID,$categoryName){
            $this ->categoryID = $categoryID;
            $this ->categoryName = $categoryName;
        }
    }
?>