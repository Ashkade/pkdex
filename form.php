<?php

    $pkmn = $_POST("pkmnName");

    $pkmn_name = $pkmn -> get_Name($pkmn);

    $pkmn_nbr = $pkmn -> get_Nbr($pkmn);
    
    $pkmn_name = $pkmn -> get_Type($pkmn);

    echo "<table border='1px'>
            <tr>
                <th>".$pkmn_name."</th>
            </tr>
            <tr>
                <td>".$pkmn_nbr."</td>
            </tr>
            <tr>
                <td>".$pkmn_name."</td>
            </tr>
        </table>";

?>