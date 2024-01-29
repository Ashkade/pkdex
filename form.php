<?php

    include 'tablepkdex.php';
    include 'class.php';

    // $listPkmn = [
    //     ["Name" => "Pikachu" , "Nbr" => 1 , "Type" => "Elek"],
    //     ["Name" => "Fantominus" , "Nbr" => 2 , "Type" => "Spectre"],
    //     ["Name" => "Ronflex" , "Nbr" => 3 , "Type" => "Normal"]
    // ];
    

    //$pikachu = new Pokemon('pikachu',25,'elek');

    $pkmn = $_POST["pkmnName"];
    //var_dump($pkmn);

    // for ($i=0; $i < count($listPkmn) ; $i++) { 
    //     if($listPkmn[$i]["Name"]==$pkmn){
                        
    //         $pkmn_name = $listPkmn[$i]["Name"];
    //         $pkmn_nbr = $listPkmn[$i]["Nbr"];
    //         $pkmn_type = $listPkmn[$i]["Type"];

    //         $pkmnfound = true;
    //     }
    // }

    foreach ($listPkmn as $poke){
        if($poke["Name"]==$pkmn){

            $pkmn_name = $poke["Name"];
            $pkmn_nbr = $poke["Nbr"];
            $pkmn_type = $poke["Type"];

            $pkmnfound = true;
        }
    }

    // foreach($listPkmn as $pokemon){
    //     if($pokemon["Name"]!=$pkmn){
    //         echo "Pokemon not found in our database";
    //     }else{

    //     }
    // }

    // $pkmn_name = $pkmn -> get_Name();

    // $pkmn_nbr = $pkmn -> get_Nbr();
    
    // $pkmn_type = $pkmn -> get_Type();

    if(isset($pkmnfound)){
    echo "<table border='1px'>
    <tr>
        <th>".$pkmn_name."</th>
    </tr>
    <tr>
        <td>".$pkmn_nbr."</td>
    </tr>
    <tr>
        <td>".$pkmn_type."</td>
    </tr>
    </table>";
    }else{
        echo "Pokemon not found in our database";
    }


?>