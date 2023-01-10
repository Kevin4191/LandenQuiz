<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landen quiz</title>
</head>
<body>

    <?php
    session_start();
       
    for($i = 0; $i < count($landenenhoofdsteden); $i++){
        $land = new Land($landenenhoofdsteden[$i][0],$landenenhoofdsteden[$i][1], "");
        $landenArray[$i] = $land;
    }  
            // $_POST["antwoord"]

    $score = 0;
    $quiz = array();
    $quiz1 = "";
    for($j = 0; $j < 11; $j++){
        $rand = rand(0,50);
        $quiz[$j] = $landenenhoofdsteden[$rand];
    }
        if(isset($_POST["antwoord10"])){
            if($quiz1 == $quiz[1][1]){
                $score++;
            }
            echo "Je score is: $score";
            echo $quiz1;
        }
        elseif(isset($_POST["antwoord9"])){
            echo "Wat is de hoofdstad van ", $quiz[10][0], "?";
            echo '<form action="landenenhoofdsteden.php" method="post">
            Antwoord: <input type="text" name="antwoord10"><br>
            <input type="submit">
            <input type="text" name="number" value="10">
            </form>';  
        }
        elseif(isset($_POST["antwoord8"])){
            echo "Wat is de hoofdstad van ", $quiz[9][0], "?";
            echo '<form action="landenenhoofdsteden.php" method="post">
            Antwoord: <input type="text" name="antwoord9"><br>
            <input type="submit">
            <input type="text" name="number" value="9">
            </form>';     
        }
        elseif(isset($_POST["antwoord7"])){
            echo "Wat is de hoofdstad van ", $quiz[8][0], "?";
            echo '<form action="landenenhoofdsteden.php" method="post">
            Antwoord: <input type="text" name="antwoord8"><br>
            <input type="submit">
            <input type="text" name="number" value="8">
            </form>';     
        }
        elseif(isset($_POST["antwoord6"])){
            echo "Wat is de hoofdstad van ", $quiz[7][0], "?";
            echo '<form action="landenenhoofdsteden.php" method="post">
            Antwoord: <input type="text" name="antwoord7"><br>
            <input type="submit">
            <input type="text" name="number" value="7">
            </form>';     
        }
        elseif(isset($_POST["antwoord5"])){
            echo "Wat is de hoofdstad van ", $quiz[6][0], "?";
            echo '<form action="landenenhoofdsteden.php" method="post">
            Antwoord: <input type="text" name="antwoord6"><br>
            <input type="submit">
            <input type="text" name="number" value="6">
            </form>';     
        }
        elseif(isset($_POST["antwoord4"])){
            echo "Wat is de hoofdstad van ", $quiz[5][0], "?";
            echo '<form action="landenenhoofdsteden.php" method="post">
            Antwoord: <input type="text" name="antwoord5"><br>
            <input type="submit">
            <input type="text" name="number" value="5">
            </form>';     
        }
        elseif(isset($_POST["antwoord3"])){
            echo "Wat is de hoofdstad van ", $quiz[4][0], "?";
            echo '<form action="landenenhoofdsteden.php" method="post">
            Antwoord: <input type="text" name="antwoord4"><br>
            <input type="submit">
            <input type="text" name="number" value="4">
            </form>';     
        }
        elseif(isset($_POST["antwoord2"])){
            echo "Wat is de hoofdstad van ", $quiz[3][0], "?";
            echo '<form action="landenenhoofdsteden.php" method="post">
            Antwoord: <input type="text" name="antwoord3"><br>
            <input type="submit">
            <input type="text" name="number" value="3">
            </form>';     
        }
        
        elseif(isset($_POST["antwoord1"])){
            echo "Wat is de hoofdstad van ", $quiz[2][0], "?";
            echo '<form action="landenenhoofdsteden.php" method="post">
            Antwoord: <input type="text" name="antwoord2"><br>
            <input type="submit">
            <input type="text" name="number" value="2">
            </form>';    
        }
        else{
            echo "Wat is de hoofdstad van ", $quiz[1][0], "?";
            echo '<form action="landenenhoofdsteden.php" method="post">
            Antwoord: <input type="text" name="antwoord1"><br>
            <input type="submit">
            <input type="text" name="number" value="1">
            </form>';
            $_POST["antwoord1"] = $quiz1; 
        }  
        // else{
        //     echo '<form method="post">
        //     <input type="submit" name="button1"
        //             class="button" value="Start de Quiz!" />
        //         </form>';
        //         if(array_key_exists('Start de Quiz!', $_POST)) {
        //             button1();
        //         }
        //     function button1(){
        //     for($j = 0; $j < 11; $j++){
        //         $rand = rand(0,50);
        //         $quiz[$j] = $landenenhoofdsteden[$rand];
        //     }
        //     $_SESSION["quiz1"] = $quiz;
        // }
        // }
        
        
    
    
        

    

    // if (isset($_POST["antwoord1"])){

    // $antwoord = $_POST["antwoord"];
    // $num = $_POST["number"];
    // $hoofdstad = $landenArray[$num]->getHoofdstad();
    //     if ($antwoord == $hoofdstad){
    //         echo " You win";
    //     }
    //     else {
    //         $randomnumber = rand(0,50);
    //         $land = $landenArray[$randomnumber]->getLand();
    //         echo "Wat is de hoofdstad van ", $land, "?";
    //         echo '<form action="landenenhoofdsteden.php" method="post">
    //         Antwoord: <input type="text" name="antwoord2"><br>
    //         <input type="submit">
    //         <input type="text" name="number" value="2">
    //         </form>';

    //     if(isset($_POST["antwoord2"])){
    //         $randomnumber = rand(0,50);
    //         $land = $landenArray[$randomnumber]->getLand();
    //         echo "Wat is de hoofdstad van ", $land, "?";
    //         echo '<form action="landenenhoofdsteden.php" method="post">
    //         Antwoord: <input type="text" name="antwoord3"><br>
    //         <input type="submit">
    //         <input type="text" name="number" value="3">
    //         </form>';
    //         if(isset($_POST["antwoord3"])){
    //             $randomnumber = rand(0,50);
    //             $land = $landenArray[$randomnumber]->getLand();
    //             echo "Wat is de hoofdstad van ", $land, "?";
    //             echo '<form action="landenenhoofdsteden.php" method="post">
    //             Antwoord: <input type="text" name="antwoord4"><br>
    //             <input type="submit">
    //             <input type="text" name="number" value="4">
    //             </form>';
    //         }
    //     }
    //     }
    //     // echo $hoofdstad;
    //     // echo $antwoord;
    //     // echo $_POST["antwoord"];
    // }
    // else{
    //     $randomnumber = rand(0,50);
    //     $land = $landenArray[$randomnumber]->getLand();
    //     echo "Wat is de hoofdstad van ", $land, "?";
    //     echo '<form action="landenenhoofdsteden.php" method="post">
    //     Antwoord: <input type="text" name="antwoord1"><br>
    //     <input type="submit">
    //     <input type="text" name="number" value="1">
    //     </form>';
    // }

    ?>


</body>
</html>