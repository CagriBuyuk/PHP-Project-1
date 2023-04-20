<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q1</title>
    <style>
        h1{
            text-align:center;
        }
        .first{
            text-align:center;
        }
        table { border-collapse: collapse; margin: auto;}
        td, th { border: 1px solid black; padding: 5px; text-align: center;}
    </style>
</head>
<body>
    <h1 >Statistics</h1>
    <div class="first">
    <?php
    $array = array();
    for($count = 0; $count<=30; $count++)
    {
        $random = rand(0, 9);
        $array[]= $random;
    }
    echo "<p>", join(" " , $array), "</p>" ;
    ?>
    </div>

    <table>
     <tr>
     <th>Number</th>
     <th>Freq</th>
    </tr>
    <?php
    for ($i=1;$i<=10;$i++){
       
        echo "<tr>";
        echo "<td>$i</td>";
        echo "</tr>";
    }

    //frequencies can be seen at the bottom of the page in the server. 

    for($a=0;$a<=9;$a++){
        foreach($array as $r){
            if($a==$r)
            {
                $arr[$a]++;
            }
        }
    }
    
    foreach($arr as $key=>$value)
    {
        echo "<tr>";
        echo "<td>";
        echo $value." [".$key."] <br>";
        echo "</td>";
        echo "</tr>";
    }
    ?>
    </table>
</body>
</html>