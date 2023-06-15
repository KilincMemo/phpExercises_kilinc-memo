
<?php
$tab=array ("kiwi", "pomme", "poire", "litchi", "rhubarbe");
$choice = "poire";
function searchingFruit($tab, $choice){
    foreach($tab as $value){
        echo $value, "<br>";
        if ($value === $choice){
            return "le fruit à été trouvé : $value";
        }
    }
    return "recherche infructueuse";
};
echo searchingFruit($tab, "kaki");
?>
