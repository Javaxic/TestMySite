<?php

$People = [
    'Name' => $_GET["UserName"],
    'Money' => 20,
    'Age' => 18
];

echo '<pre>';

var_dump((int)$People['Name'] + $People['Age']);

if ($People["Age"] >= 18 && $People["Age"] < 100){
    echo 'Вы можете пройти!)';
}
else if ($People["Age"] >= 100){
    echo 'Вы мертвы!!';
}

for ($i = 0; $i < 11; $i++){
    echo '<pre>';

    if ($i < 6){
        echo $People["Name"] .= 'A';
    }
    else{
        echo $People["Name"] = substr($People["Name"], 0, -1);
    }

    echo '</pre>';
}

echo AddInteger(array(1, 2, 4, 100, 6, 32, 9));

echo '</pre>';

function AddInteger($ListInt){
    $res;

    for ($i = 0; $i < count($ListInt); $i++){
        $res += $ListInt[$i];
    }

    return $res;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <link rel = "stylesheet" type = "text/css" href = "F:\Xampp\htdocs\Site\Style.css">
        <style>
            body {
                background: #8A2BE2; /* Цвет фона */
            }

            .FristTitle{
                color: #6495ED;
            }
        </style>
    </head>
    <body>
        <form>
            <input name = "UserName">Name</input>
            <button name = "send">Click</button>
        </form>

        <div>
            <p class = "FristTitle"><?php echo $_GET["UserName"]; ?></p>
        </div>
    </body>
</html>