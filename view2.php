<?php
require_once("model.php");

$query = "SELECT * FROM list_users";
$listus = $pdo->query($query);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Список резюме пользователей</title>
    </head>
    <body>
        <h2>Список резюме пользователей</h2>
        <table cellpadding="7" border="2">
            <tr>
                <td>
                    Имя, фамилия
                </td>
                <td>
                    email
                </td>
            </tr>            
            <?php
            while ($listuser = $listus->fetch()) {
                ?>
                <tr onclick="window.location = 'view3.php'">
                    <td>
                        <?php
                        echo $listuser['name, surname'];
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $listuser['email'];
                        ?>
                    </td>
                </tr>
                <?php
            }
            ?>
        </table>
        <?php
        ?>
    </body>
</html>