<?php
<center>
$cricketPlayers = array("Mahendra Singh Dhoni", "Sachin Tendulkar", "Shubham Gill", "Yuvaraj Singh", "Virat Kohli");
echo "<table border='1'>
        <tr>
            <th>Player Name</th>
        </tr>";
foreach ($cricketPlayers as $player) {
    echo "<tr>
            <td>$player</td>
          </tr>";
}
echo "</table>";
?>