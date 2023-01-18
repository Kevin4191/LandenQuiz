<?php
class Quiz
{
    private $vragen = array();
    private $teller = -1;
    private $landenenhoofdsteden = array(
        array("Albanië", "Tirana"),
        array("Andorra", "Andorra la Vella"),
        array("Armenië", "Jerevan"),
        array("Azerbeidzjan", "Bakoe"),
        array("België", "Brussel"),
        array("Bosnië en Herzegovina", "Sarajevo"),
        array("Bulgarije", "Sofia"),
        array("Cyprus", "Nicosia"),
        array("Denemarken", "Kopenhagen"),
        array("Duitsland", "Berlijn"),
        array("Estland", "Tallinn"),
        array("Finland", "Helsinki"),
        array("Frankrijk", "Parijs"),
        array("Georgië", "Tbilisi"),
        array("Griekenland", "Athene"),
        array("Hongarije", "Boedapest"),
        array("Ierland", "Dublin"),
        array("IJsland", "Reykjavik"),
        array("Italië", "Rome"),
        array("Kazachstan", "Nur-Sultan"),
        array("Kosovo", "Pristina"),
        array("Kroatië", "Zagreb"),
        array("Letland", "Riga"),
        array("Liechtenstein", "Vaduz"),
        array("Litouwen", "Vilnius"),
        array("Luxemburg", "Luxemburg"),
        array("Malta", "Valletta"),
        array("Moldavië", "Chisinau"),
        array("Monaco", "Monaco"),
        array("Montenegro", "Podgorica"),
        array("Nederland", "Amsterdam"),
        array("Noord-Macedonië", "Skopje"),
        array("Noorwegen", "Oslo"),
        array("Oekraïne", "Kiev"),
        array("Oostenrijk", "Wenen"),
        array("Polen", "Warschau"),
        array("Portugal", "Lissabon"),
        array("Roemenië", "Boekarest"),
        array("Rusland", "Moskou"),
        array("San Marino", "San Marino"),
        array("Servië", "Belgrado"),
        array("Slovenië", "Ljubljana"),
        array("Slowakije", "Bratislava"),
        array("Spanje", "Madrid"),
        array("Tsjechië", "Praag"),
        array("Turkije", "Ankara"),
        array("Vaticaanstad", "Vaticaanstad"),
        array("Verenigd Koninkrijk", "Londen"),
        array("Wit-Rusland", "Minsk"),
        array("Zweden", "Stockholm"),
        array("Zwitserland", "Bern"),
    );

    function __construct(){
        for($i = 0; $i < 10; $i++){
        $r = rand(0,50);
        $this->vragen[$i] = $land = new Land($this->landenenhoofdsteden[$r][0],$this->landenenhoofdsteden[$r][1], "");
    }
    }

    function getNext()
    {
        $this->teller ++;
    }

    function getQuestion(){
        if($this->teller >=10)
        {
            $this->teller = 99;
            return;
        }
        $vraag = $this->vragen[$this->teller];
        return $vraag;
    }

    function getTeller()
    {
        return $this->teller;
    }
    function getVragen()
    {
        return $this->vragen;
    }
}


?>