<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <title>Резюме</title>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/gijgo@1.9.10/js/gijgo.min.js" type="text/javascript"></script>
        <link href="https://cdn.jsdelivr.net/npm/gijgo@1.9.10/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <h2 style="position: relative; left: 100px">Заполните резюме</h2>
        <form action="controller.php" method="POST">
            <table>
                <tr>
                    <td align="right">
                        Ваше имя:
                    </td>
                    <td>
                        <input class="form-control" type="text" name="name">
                    </td>
                </tr>
                <tr>
                    <td align="right">
                        Ваша фамилия:
                    </td>
                    <td>
                        <input class="form-control" type="text" name="surname">
                    </td>
                </tr>
                <tr>
                    <td align="right">
                        Дата рождения:
                    </td>
                    <td>
                        <input class="form-control" type="date" name="datebirth">
                    </td>
                </tr>
                <tr>
                    <td align="right">
                        Национальность:
                    </td>
                    <td>
                        <select class="custom-select" name="country">
                            <option>Украина</option>
                            <option>Беларусь</option>
                            <option>Молдова</option>
                            <option>Польша</option>
                            <option>Словакия</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td align="right">
                        Телефон:
                    </td>
                    <td>
                        <input class="form-control" type="tel" name="tel">
                    </td>
                </tr>
                <tr>
                    <td align="right">
                        Почта:
                    </td>
                    <td>
                        <input class="form-control" type="email" name="email">
                    </td>
                </tr>
                <tr>
                    <td align="right">
                        Текущий адрес:
                    </td>
                    <td>
                        <input class="form-control" type="text" name="address">
                    </td>
                </tr>            
                <tr>
                    <td colspan="2" align="center">
                        <br/> Образование:

                    </td>
                </tr>

                <tr>
                    <td align="right">
                        Дата начала обучения:
                    </td>
                    <td>
                        <input class="form-control" type="date" name="datebeginstudy0">
                    </td>
                </tr>
                <tr>
                    <td align="right">
                        Дата окончания обучения:
                    </td>
                    <td>
                        <input class="form-control" type="date" name="dateendstudy0">
                    </td>
                </tr>
                <tr>
                    <td align="right">
                        Название учебного заведения:
                    </td>
                    <td>
                        <input class="form-control" type="text" name="studyname0">
                    </td>
                </tr>
                <tr>
                    <td align="right">
                        Специальность:
                    </td>
                    <td>
                        <input class="form-control" type="text" name="professionstudy0">
                    </td>
                </tr>
                <tr>
                    <td align="right">
                        Степень:
                    </td>
                    <td>
                        <input class="form-control" type="text" name="doctor0">
                    </td>
                </tr>
            </table>
            <div id="inputstudy0"></div>
            <button style="position: relative; left: 130px" type="button" class="btn btn-primary" onclick="addStudy()">Добавить ещё</button>

            <table style="position: relative; left: 45px">
                <tr>
                    <td colspan="2" align="center">
                        <br/> Трудоустройство:
                    </td>
                </tr>
                <tr>
                    <td align="right">
                        Дата начала работы:
                    </td>
                    <td>
                        <input class="form-control" type="date" name="datebeginwork0">
                    </td>
                </tr>
                <tr>
                    <td align="right">
                        Дата окончания работы:
                    </td>
                    <td>
                        <input class="form-control" type="date" name="dateendwork0">
                    </td>
                </tr>
                <tr>
                    <td align="right">
                        Место работы:
                    </td>
                    <td>
                        <input class="form-control" type="text" name="workname0">
                    </td>
                </tr>
                <tr>
                    <td align="right">
                        Специальность:
                    </td>
                    <td>
                        <input class="form-control" type="text" name="professionwork0">
                    </td>
                </tr>                
            </table>
            <div id="inputwork0"></div>
            <button style="position: relative; left: 130px" type="button" class="btn btn-primary" onclick="addWork()">Добавить ещё</button>

            <table style="position: relative; left: 150px">
                <tr>
                    <td colspan="2" align="center">
                        <br/>
                    </td>
                </tr>
                <tr>
                    <td align="right">
                        Интересы:
                    </td>
                    <td>
                        <input class="form-control" type="text" name="interest">
                    </td>
                </tr>
            </table>
            <button style="position: relative; left: 230px" type="submit" class="btn btn-primary">Отправить</button>
        </form>
        <script>
            var x = 0;
            function addStudy() {
                if (x < 5) {
                    var str1 = '<table><tr><td align="right">Дата начала обучения:</td><td><input class="form-control" type="date" name="datebeginstudy' + (x + 1) + '"></td></tr><tr><td align="right">Дата окончания обучения:</td>';
                    var str2 = '<td><input class="form-control" type="date" name="dateendstudy' + (x + 1) + '"></td></tr><tr><td align="right">Название учебного заведения:</td><td><input class="form-control" type="text" name="studyname' + (x + 1) + '"></td></tr>';
                    var str3 = '<tr><td align="right">Специальность:</td><td><input class="form-control" type="text" name="professionstudy' + (x + 1) + '"></td></tr><tr><td align="right">Степень:</td><td><input class="form-control" type="text" name="doctor' + (x + 1) + '"></td></tr></table><div id="inputstudy' + (x + 1) + '"></div>';
                    document.getElementById('inputstudy' + x).innerHTML = str1 + str2 + str3;
                    x++;
                } else
                {
                    alert('Достаточно!');
                }
            }
            var y = 0;
            function addWork() {
                if (x < 5) {
                    var str4 = '<table style="position: relative; left: 45px"><tr><td align="right">Дата начала работы:</td><td><input class="form-control" type="date" name="datebeginwork' + (x + 1) + '"></td></tr><tr><td align="right">Дата окончания работы:</td>';
                    var str5 = '<td><input class="form-control" type="date" name="dateendwork' + (x + 1) + '"></td></tr><tr><td align="right">Место работы:</td><td><input class="form-control" type="text" name="workname' + (x + 1) + '"></td></tr>';
                    var str6 = '<tr><td align="right">Специальность:</td><td><input class="form-control" type="text" name="professionwork' + (x + 1) + '"></td></tr></table><div id="inputwork' + (x + 1) + '"></div>';
                    document.getElementById('inputwork' + x).innerHTML = str4 + str5 + str6;
                    y++;
                } else
                {
                    alert('Достаточно!');
                }
            }
        </script>
    </body>
</html>