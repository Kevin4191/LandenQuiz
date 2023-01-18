<table>

<?php
foreach($vragen as $vraag)
{
    echo "<tr>
        <td>".$vraag->getLand()."</td>
        <td>".$vraag->getHoofdstad()."</td>
        <td>".$vraag->getAntwoord()."</td>
    </tr>";
}
?>
</table>