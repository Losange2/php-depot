<?php
    class ff{
        private $monattribut;
        
        public function __construct()
        {

        }

        public function afficherpage($nb)
        {
            if($nb == 1)
            {
                $this -> page1();
            }
            if($nb == 2)
            {
                $this -> page2();
            }
            if($nb == 3)
            {
                $this -> page3();
            }
        }

        public function page1()
        {
            echo "Ma première page";
        }
        
        public function page2()
        {
            echo "Ma deuxième page";
        }

        public function page3()
        {
            echo "Ma troisième page";
        }

        public function setmamethode($values)
        {
            
        }
    }


?>