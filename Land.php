    <?php
        class Land
        {
            private $land = "";
            private $hoofdstad = "";
            private $antwoord = "";
    
            function __construct($land, $hoofdstad, $antwoord){
                $this->land = $land;
                $this->hoofdstad = $hoofdstad;
                $this->antwoord = $antwoord;
            }   
    
            function getHoofdstad(){
                return $this->hoofdstad;
            }
    
            function getLand(){
                return $this->land;
            }

            function getAntwoord(){
                $this->antwoord;
            }
    
            function setAntwoord($antwoord){
                $this->antwoord = $antwoord;
            }
        }
    ?>