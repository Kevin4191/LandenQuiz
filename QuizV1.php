<?php
include("Land.php");
include("Quiz.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landen Quiz</title>
</head>
<body>

<?php

$quiz = new Quiz();
$_SESSION["quiz"] = $quiz;

// echo '<pre>'; print_r($quiz); echo '</pre>';
if (isset($_SESSION['counter'])){
    $aantal = $_SESSION['counter'];
    $aantal++;
    $_SESSION['counter'] = $aantal;
  }
   else{
      $_SESSION['counter'] = 0;
  
   }

    $vraag1 = $quiz->getVraag($_SESSION["counter"]);
        echo "Vraag ".($_SESSION["counter"] + 1).":<br>";
        echo "Wat is de hoofdstad van ".$vraag1->getLand(). "?";
        echo '<form action="quizV1.php" method="post">
        Antwoord: <input type="text" name="antwoord1"><br>
        <input type="submit">
        </form>';
    // echo $vraag1->getLand();
    // if(isset($_POST["antwoord10"])){
    //     $antwoord10 = $_POST["antwoord10"];
    //     $hoofdstad10 = $_SESSION["quiz"][9][1];
    //     if($antwoord10 == $hoofdstad10){
    //         $score = $_SESSION["score"];
    //         $score++;
    //         $_SESSION["score"] = $score;
    //         echo "Je score is: $score";
    //     }
    //     elseif(!isset($_SESSION["score"])){
    //         echo "Dombo, Je hebt alle vragen fout!";
    //     }
    //     else{
    //         $score = $_SESSION["score"];
    //         echo "Je score is: $score";
    //     }
            
    // }
    // elseif(isset($_POST["antwoord9"])){
    //     echo "Vraag 10:<br>";
    //     echo "Wat is de hoofdstad van ", $_SESSION["quiz"][9][0], "?";
    //     echo '<form action="quizV1.php" method="post">
    //     Antwoord: <input type="text" name="antwoord10"><br>
    //     <input type="submit">
    //     </form>';  
    //     $antwoord9 = $_POST["antwoord9"];
    //     $hoofdstad9 = $_SESSION["quiz"][8][1];
    //     if($antwoord9 == $hoofdstad9){
    //         $score = $_SESSION["score"];
    //         $score++;
    //         $_SESSION["score"] = $score;
    //     }
    // }
    // elseif(isset($_POST["antwoord8"])){
    //     echo "Vraag 9:<br>";
    //     echo "Wat is de hoofdstad van ", $_SESSION["quiz"][8][0], "?";
    //     echo '<form action="quizV1.php" method="post">
    //     Antwoord: <input type="text" name="antwoord9"><br>
    //     <input type="submit">
    //     </form>'; 
    //     $antwoord8 = $_POST["antwoord8"];
    //     $hoofdstad8 = $_SESSION["quiz"][7][1]; 
    //     if($antwoord8 == $hoofdstad8){
    //         $score = $_SESSION["score"];
    //         $score++;
    //         $_SESSION["score"] = $score;
    //     }   
    // }
    // elseif(isset($_POST["antwoord7"])){
    //     echo "Vraag 8:<br>";
    //     echo "Wat is de hoofdstad van ", $_SESSION["quiz"][7][0], "?";
    //     echo '<form action="quizV1.php" method="post">
    //     Antwoord: <input type="text" name="antwoord8"><br>
    //     <input type="submit">
    //     </form>';
    //     $antwoord7 = $_POST["antwoord7"];
    //     $hoofdstad7 = $_SESSION["quiz"][6][1]; 
    //     if($antwoord7 == $hoofdstad7){
    //         $score = $_SESSION["score"];
    //         $score++;
    //         $_SESSION["score"] = $score;
    //     }    
    // }
    // elseif(isset($_POST["antwoord6"])){
    //     echo "Vraag 7:<br>";
    //     echo "Wat is de hoofdstad van ", $_SESSION["quiz"][6][0], "?";
    //     echo '<form action="quizV1.php" method="post">
    //     Antwoord: <input type="text" name="antwoord7"><br>
    //     <input type="submit">
    //     </form>'; 
    //     $antwoord6 = $_POST["antwoord6"];
    //     $hoofdstad6 = $_SESSION["quiz"][5][1]; 
    //     if($antwoord6 == $hoofdstad6){
    //         $score = $_SESSION["score"];
    //         $score++;
    //         $_SESSION["score"] = $score;
    //     }  
    // }
    // elseif(isset($_POST["antwoord5"])){
    //     echo "Vraag 6:<br>";
    //     echo "Wat is de hoofdstad van ", $_SESSION["quiz"][5][0], "?";
    //     echo '<form action="quizV1.php" method="post">
    //     Antwoord: <input type="text" name="antwoord6"><br>
    //     <input type="submit">
    //     </form>'; 
    //     $antwoord5 = $_POST["antwoord5"];
    //     $hoofdstad5 = $_SESSION["quiz"][4][1]; 
    //     if($antwoord5 == $hoofdstad5){
    //         $score = $_SESSION["score"];
    //         $score++;
    //         $_SESSION["score"] = $score;
    //     }   
    // }
    // elseif(isset($_POST["antwoord4"])){
    //     echo "Vraag 5:<br>";
    //     echo "Wat is de hoofdstad van ", $_SESSION["quiz"][4][0], "?";
    //     echo '<form action="quizV1.php" method="post">
    //     Antwoord: <input type="text" name="antwoord5"><br>
    //     <input type="submit">
    //     </form>';
    //     $antwoord4 = $_POST["antwoord4"];
    //     $hoofdstad4 = $_SESSION["quiz"][3][1]; 
    //     if($antwoord4 == $hoofdstad4){
    //         $score = $_SESSION["score"];
    //         $score++;
    //         $_SESSION["score"] = $score;
    //     }    
    // }
    // elseif(isset($_POST["antwoord3"])){
    //     echo "Vraag 4:<br>";
    //     echo "Wat is de hoofdstad van ", $_SESSION["quiz"][3][0], "?";
    //     echo '<form action="quizV1.php" method="post">
    //     Antwoord: <input type="text" name="antwoord4"><br>
    //     <input type="submit">
    //     </form>'; 
    //     $antwoord3 = $_POST["antwoord3"];
    //     $hoofdstad3 = $_SESSION["quiz"][2][1];
    //     if($antwoord3 == $hoofdstad3){
    //         $score = $_SESSION["score"];
    //         $score++;
    //         $_SESSION["score"] = $score;
    //     }  
    // }
    // elseif(isset($_POST["antwoord2"])){
    //     echo "Vraag 3:<br>";
    //     echo "Wat is de hoofdstad van ", $_SESSION["quiz"][2][0], "?";
    //     echo '<form action="quizV1.php" method="post">
    //     Antwoord: <input type="text" name="antwoord3"><br>
    //     <input type="submit">
    //     </form>';   
    //     $antwoord2 = $_POST["antwoord2"];
    //     $hoofdstad2 = $_SESSION["quiz"][1][1];
    //     if($antwoord2 == $hoofdstad2){
    //         $score = $_SESSION["score"];
    //         $score++;
    //         $_SESSION["score"] = $score;
    //     }  
    // }
    
    // elseif(isset($_POST["antwoord1"])){
    //     echo "Vraag 2:<br>";
    //     echo "Wat is de hoofdstad van ", $_SESSION["quiz"][1][0], "?";
    //     echo '<form action="quizV1.php" method="post">
    //     Antwoord: <input type="text" name="antwoord2"><br>
    //     <input type="submit">
    //     </form>';
    //     $antwoord1 = $_POST["antwoord1"];
    //     $hoofdstad1 = $_SESSION["quiz"][0][1];
    //     if($antwoord1 == $hoofdstad1){
    //         $score = 0;
    //         $score++;
    //         $_SESSION["score"] = $score;
    //     }    
    // }
    // else{
    //     echo "Vraag 1:<br>";
    //     echo "Wat is de hoofdstad van ", , "?";
    //     echo '<form action="quizV1.php" method="post">
    //     Antwoord: <input type="text" name="antwoord1"><br>
    //     <input type="submit">
    //     </form>';
    // } 


// Antwoord sheet
// echo "<br>";
// echo '<pre>'; print_r($_SESSION["quiz"]); echo '</pre>';


?>


</body>
</html>