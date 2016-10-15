<?php
/**
 * Created by PhpStorm.
 * User: Ishmael
 * Date: 7/22/2016
 * Time: 11:30 PM
 */
$file = getcwd() . "/data.txt";
$dataFile = fopen($file, "r") or die("Unable to open file!");
$data = fread($dataFile, filesize($file));
fclose($dataFile);
$jsonObj = json_decode($data, true);
?>
<html>
    <head><title>Pokedex - The ingress to Pokemon gym conversion tool</title></head>
    <body>
        <table border="1">
            <tr>
                <td>ID ???</td>
                <th>Name</th>
                <th>Lat</th>
                <th>Lon</th>
                <th>URL</th>
            </tr>
            <?php
                foreach($jsonObj["result"]["map"] as $map){
                    foreach($map["gameEntities"] as $gameEntity){
                        $entity = $gameEntity[2] ?? null;
                        if(!is_null($entity)){
                            if($entity[0] == 'p'){ //we have a portal
                                echo "<tr>";
                                    echo "<td>" . $gameEntity[0] . "</td>";
                                    echo "<td>" . $entity[8] . "</td>";
                                    echo "<td>" . $entity[2] . "</td>";
                                    echo "<td>" . $entity[3] . "</td>";
                                    echo "<td><img src='" . $entity[7] . "' style='height: 80px; width: 80px;'/></td>";
                                echo "</tr>";
                            }
                        }
                    }
                }
            ?>
        </table>
    </body>
</html>
