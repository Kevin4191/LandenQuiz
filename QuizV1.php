<?php
include("model/Land.php");
include("model/Quiz.php");
session_start();
if(!isset($_SESSION['quiz'])){
    $quiz = new Quiz();
    $_SESSION["quiz"] = $quiz;
}
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
$quiz = $_SESSION['quiz'];
if (isset($_POST["antwoord"])){
    $antwoord = filter_input(INPUT_POST, 'antwoord');

    if ($antwoord == $quiz->getQuestion()->getHoofdstad()){
        $quiz->getQuestion()->setAntwoord('goed');
    }
    else {
        $quiz->getQuestion()->setAntwoord('fout');
    }

    unset($_POST["antwoord"]);
    showNext();
}
else{
    showNext();
}

function showNext()
{
    global $quiz;
    $quiz->getNext();
    $vraag = $quiz->getQuestion();

    $nummer = $quiz->getTeller() + 1;
    if( $quiz->getTeller() < 10){
        $land = $vraag->getLand();
        include ( "view/formQuiz.php");
    }
    else{
        $vragen = $quiz->getVragen();
        include('view/result.php');
        
        session_unset();
        session_destroy();
    }
}

?>


</body>
</html>