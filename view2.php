<?php
require_once("model.php");

$query = "SELECT * FROM list_users";
$listus = $pdo->query($query);
?>
<!DOCTYPE html>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <title>Список резюме пользователей</title>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </head>
    <body>
        <h2 style="position: relative; left: 50px">Список резюме пользователей</h2>
        <form action="view3.php" id='form' method="POST">
            <input name='id' type="text" value="" hidden>
            <table style="position: relative; left: 50px" cellpadding="7" border="2">
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
                    <tr onclick="showResume(<?php echo $listuser['id']; ?>)">
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
        </form>
        <script>
            function showResume(id) {
                $("input[type=text]").val(id);
                document.getElementById("form").submit();
            }
        </script>
    </body>
</html>