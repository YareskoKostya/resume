<?php
require_once("model.php");

$query = "SELECT * FROM user_resume WHERE id = :id";
$usresume = $pdo->prepare($query);
$usresume->execute(['id' => $_POST['id']]);
?>
<!DOCTYPE html>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <title>User's resume</title>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </head>
    <body>
        <h2 style="position: relative; left: 70px">User's resume</h2>
        <table style="position: relative; left: 50px" cellpadding="7" border="2">
            <?php
            while ($userresume = $usresume->fetch()) {
                ?>
                <tr>
                    <td>
                        name
                    </td>
                    <td>
                        <?php
                        echo $userresume['name'];
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        surname
                    </td>
                    <td>
                        <?php
                        echo $userresume['surname'];
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        birthdate
                    </td>
                    <td>
                        <?php
                        echo $userresume['birthdate'];
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        country
                    </td>
                    <td>
                        <?php
                        echo $userresume['country'];
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        tel
                    </td>
                    <td>
                        <?php
                        echo $userresume['tel'];
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        email
                    </td>
                    <td>
                        <?php
                        echo $userresume['email'];
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        address
                    </td>
                    <td>
                        <?php
                        echo $userresume['address'];
                        ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        Education
                    </td>
                </tr>
                <tr>
                    <td>
                        Date of begin training:
                    </td>
                    <td>
                        <?php
                        echo $userresume['datebeginstudy0'];
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Date of end training:
                    </td>
                    <td>
                        <?php
                        echo $userresume['dateendstudy0'];
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Name of the institution:
                    </td>
                    <td>
                        <?php
                        echo $userresume['studyname0'];
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Specialty:
                    </td>
                    <td>
                        <?php
                        echo $userresume['professionstudy0'];
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Rank:
                    </td>
                    <td>
                        <?php
                        echo $userresume['doctor0'];
                        ?>
                    </td>
                </tr>
                <tr <?php if ($userresume['datebeginstudy1'] == NULL) {?> hidden="" <?php } ?>>
                    <td>
                        Date of begin training:
                    </td>
                    <td>
                        <?php
                        echo $userresume['datebeginstudy1'];
                        ?>
                    </td>
                </tr>
                <tr <?php if ($userresume['dateendstudy1'] == NULL) {?> hidden="" <?php } ?>>
                    <td>
                        Date of end training:
                    </td>
                    <td>
                        <?php
                        echo $userresume['dateendstudy1'];
                        ?>
                    </td>
                </tr>
                <tr <?php if ($userresume['studyname1'] == NULL) {?> hidden="" <?php } ?>>
                    <td>
                        Name of the institution:
                    </td>
                    <td>
                        <?php
                        echo $userresume['studyname1'];
                        ?>
                    </td>
                </tr>
                <tr <?php if ($userresume['professionstudy1'] == NULL) {?> hidden="" <?php } ?>>
                    <td>
                        Specialty:
                    </td>
                    <td>
                        <?php
                        echo $userresume['professionstudy1'];
                        ?>
                    </td>
                </tr>
                <tr <?php if ($userresume['doctor1'] == NULL) {?> hidden="" <?php } ?>>
                    <td>
                        Rank:
                    </td>
                    <td>
                        <?php
                        echo $userresume['doctor1'];
                        ?>
                    </td>
                </tr>
                <tr <?php if ($userresume['datebeginstudy2'] == NULL) {?> hidden="" <?php } ?>>
                    <td>
                        Date of begin training:
                    </td>
                    <td>
                        <?php
                        echo $userresume['datebeginstudy2'];
                        ?>
                    </td>
                </tr>
                <tr <?php if ($userresume['dateendstudy2'] == NULL) {?> hidden="" <?php } ?>>
                    <td>
                        Date of end training:
                    </td>
                    <td>
                        <?php
                        echo $userresume['dateendstudy2'];
                        ?>
                    </td>
                </tr>
                <tr <?php if ($userresume['studyname2'] == NULL) {?> hidden="" <?php } ?>>
                    <td>
                        Name of the institution:
                    </td>
                    <td>
                        <?php
                        echo $userresume['studyname2'];
                        ?>
                    </td>
                </tr>
                <tr <?php if ($userresume['professionstudy2'] == NULL) {?> hidden="" <?php } ?>>
                    <td>
                        Specialty:
                    </td>
                    <td>
                        <?php
                        echo $userresume['professionstudy2'];
                        ?>
                    </td>
                </tr>
                <tr <?php if ($userresume['doctor2'] == NULL) {?> hidden="" <?php } ?>>
                    <td>
                        Rank:
                    </td>
                    <td>
                        <?php
                        echo $userresume['doctor2'];
                        ?>
                    </td>
                </tr>
                <tr <?php if ($userresume['datebeginstudy3'] == NULL) {?> hidden="" <?php } ?>>
                    <td>
                        Date of begin training:
                    </td>
                    <td>
                        <?php
                        echo $userresume['datebeginstudy3'];
                        ?>
                    </td>
                </tr>
                <tr <?php if ($userresume['dateendstudy3'] == NULL) {?> hidden="" <?php } ?>>
                    <td>
                        Date of end training:
                    </td>
                    <td>
                        <?php
                        echo $userresume['dateendstudy3'];
                        ?>
                    </td>
                </tr>
                <tr <?php if ($userresume['studyname3'] == NULL) {?> hidden="" <?php } ?>>
                    <td>
                        Name of the institution:
                    </td>
                    <td>
                        <?php
                        echo $userresume['studyname3'];
                        ?>
                    </td>
                </tr>
                <tr <?php if ($userresume['professionstudy3'] == NULL) {?> hidden="" <?php } ?>>
                    <td>
                        Specialty:
                    </td>
                    <td>
                        <?php
                        echo $userresume['professionstudy3'];
                        ?>
                    </td>
                </tr>
                <tr <?php if ($userresume['doctor3'] == NULL) {?> hidden="" <?php } ?>>
                    <td>
                        Rank:
                    </td>
                    <td>
                        <?php
                        echo $userresume['doctor3'];
                        ?>
                    </td>
                </tr>
                <tr <?php if ($userresume['datebeginstudy4'] == NULL) {?> hidden="" <?php } ?>>
                    <td>
                        Date of begin training:
                    </td>
                    <td>
                        <?php
                        echo $userresume['datebeginstudy4'];
                        ?>
                    </td>
                </tr>
                <tr <?php if ($userresume['dateendstudy4'] == NULL) {?> hidden="" <?php } ?>>
                    <td>
                        Date of end training:
                    </td>
                    <td>
                        <?php
                        echo $userresume['dateendstudy4'];
                        ?>
                    </td>
                </tr>
                <tr <?php if ($userresume['studyname4'] == NULL) {?> hidden="" <?php } ?>>
                    <td>
                        Name of the institution:
                    </td>
                    <td>
                        <?php
                        echo $userresume['studyname4'];
                        ?>
                    </td>
                </tr>
                <tr <?php if ($userresume['professionstudy4'] == NULL) {?> hidden="" <?php } ?>>
                    <td>
                        Specialty:
                    </td>
                    <td>
                        <?php
                        echo $userresume['professionstudy4'];
                        ?>
                    </td>
                </tr>
                <tr <?php if ($userresume['doctor4'] == NULL) {?> hidden="" <?php } ?>>
                    <td>
                        Rank:
                    </td>
                    <td>
                        <?php
                        echo $userresume['doctor4'];
                        ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        Work
                    </td>
                </tr>
                <tr>
                    <td>
                        Date of begin work:
                    </td>
                    <td>
                        <?php
                        echo $userresume['datebeginwork0'];
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Date of end work:
                    </td>
                    <td>
                        <?php
                        echo $userresume['dateendwork0'];
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Name of the company:
                    </td>
                    <td>
                        <?php
                        echo $userresume['workname0'];
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Specialty:
                    </td>
                    <td>
                        <?php
                        echo $userresume['professionwork0'];
                        ?>
                    </td>
                </tr>
                <tr <?php if ($userresume['datebeginwork1'] == NULL) {?> hidden="" <?php } ?>>
                    <td>
                        Date of begin work:
                    </td>
                    <td>
                        <?php
                        echo $userresume['datebeginwork1'];
                        ?>
                    </td>
                </tr>
                <tr <?php if ($userresume['dateendwork1'] == NULL) {?> hidden="" <?php } ?>>
                    <td>
                        Date of end work:
                    </td>
                    <td>
                        <?php
                        echo $userresume['dateendwork1'];
                        ?>
                    </td>
                </tr>
                <tr  <?php if ($userresume['workname1'] == NULL) {?> hidden="" <?php } ?>>
                    <td>
                        Name of the company:
                    </td>
                    <td>
                        <?php
                        echo $userresume['workname1'];
                        ?>
                    </td>
                </tr>
                <tr  <?php if ($userresume['professionwork1'] == NULL) {?> hidden="" <?php } ?>>
                    <td>
                        Specialty:
                    </td>
                    <td>
                        <?php
                        echo $userresume['professionwork1'];
                        ?>
                    </td>
                </tr>
                <tr <?php if ($userresume['datebeginwork2'] == NULL) {?> hidden="" <?php } ?>>
                    <td>
                        Date of begin work:
                    </td>
                    <td>
                        <?php
                        echo $userresume['datebeginwork2'];
                        ?>
                    </td>
                </tr>
                <tr <?php if ($userresume['dateendwork2'] == NULL) {?> hidden="" <?php } ?>>
                    <td>
                        Date of end work:
                    </td>
                    <td>
                        <?php
                        echo $userresume['dateendwork2'];
                        ?>
                    </td>
                </tr>
                <tr  <?php if ($userresume['workname2'] == NULL) {?> hidden="" <?php } ?>>
                    <td>
                        Name of the company:
                    </td>
                    <td>
                        <?php
                        echo $userresume['workname2'];
                        ?>
                    </td>
                </tr>
                <tr  <?php if ($userresume['professionwork2'] == NULL) {?> hidden="" <?php } ?>>
                    <td>
                        Specialty:
                    </td>
                    <td>
                        <?php
                        echo $userresume['professionwork2'];
                        ?>
                    </td>
                </tr>
                <tr <?php if ($userresume['datebeginwork3'] == NULL) {?> hidden="" <?php } ?>>
                    <td>
                        Date of begin work:
                    </td>
                    <td>
                        <?php
                        echo $userresume['datebeginwork3'];
                        ?>
                    </td>
                </tr>
                <tr <?php if ($userresume['dateendwork3'] == NULL) {?> hidden="" <?php } ?>>
                    <td>
                        Date of end work:
                    </td>
                    <td>
                        <?php
                        echo $userresume['dateendwork3'];
                        ?>
                    </td>
                </tr>
                <tr  <?php if ($userresume['workname3'] == NULL) {?> hidden="" <?php } ?>>
                    <td>
                        Name of the company:
                    </td>
                    <td>
                        <?php
                        echo $userresume['workname3'];
                        ?>
                    </td>
                </tr>
                <tr  <?php if ($userresume['professionwork3'] == NULL) {?> hidden="" <?php } ?>>
                    <td>
                        Specialty:
                    </td>
                    <td>
                        <?php
                        echo $userresume['professionwork3'];
                        ?>
                    </td>
                </tr>
                <tr <?php if ($userresume['datebeginwork4'] == NULL) {?> hidden="" <?php } ?>>
                    <td>
                        Date of begin work:
                    </td>
                    <td>
                        <?php
                        echo $userresume['datebeginwork4'];
                        ?>
                    </td>
                </tr>
                <tr <?php if ($userresume['dateendwork4'] == NULL) {?> hidden="" <?php } ?>>
                    <td>
                        Date of end work:
                    </td>
                    <td>
                        <?php
                        echo $userresume['dateendwork4'];
                        ?>
                    </td>
                </tr>
                <tr  <?php if ($userresume['workname4'] == NULL) {?> hidden="" <?php } ?>>
                    <td>
                        Name of the company:
                    </td>
                    <td>
                        <?php
                        echo $userresume['workname4'];
                        ?>
                    </td>
                </tr>
                <tr  <?php if ($userresume['professionwork4'] == NULL) {?> hidden="" <?php } ?>>
                    <td>
                        Specialty:
                    </td>
                    <td>
                        <?php
                        echo $userresume['professionwork4'];
                        ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                    </td>
                </tr>
                <tr>
                    <td>
                        interests
                    </td>
                    <td>
                        <?php
                        echo $userresume['interests'];
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