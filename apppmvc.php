<?php
    class ff{
        private $monattribut;
        
        public function __construct()
        {
            $this-> monattribut = 10;
        }

        public function getmamethode()
        {
            return $this->monattribut;
        }

        public function setmamethode($values)
        {
            
            if($values >= 0 && $values <= 10) 
            {
                $this->monattribut = $values;
            }
        }
    }


?>