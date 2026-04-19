<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
header('Content-Type: text/html; charset=UTF-8');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Анкета | Задание 3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>📋 Анкета</h1>
        <p class="subtitle">Заполните форму и нажмите «Сохранить»</p>

        <form action="process.php" method="POST">
            <label>ФИО</label>
            <input type="text" name="full_name" required>

            <label>Телефон</label>
            <input type="tel" name="phone" required>

            <label>E-mail</label>
            <input type="email" name="email" required>

            <label>Дата рождения</label>
            <input type="date" name="birth_date" required>

            <label>Пол</label>
            <div class="radio-group">
                <label><input type="radio" name="gender" value="male"> Мужской</label>
                <label><input type="radio" name="gender" value="female"> Женский</label>
                <label><input type="radio" name="gender" value="other"> Другой</label>
            </div>

            <label>Любимые языки программирования</label>
            <select name="languages[]" multiple class="multi-select">
                <option value="Pascal">Pascal</option>
                <option value="C">C</option>
                <option value="C++">C++</option>
                <option value="JavaScript">JavaScript</option>
                <option value="PHP">PHP</option>
                <option value="Python">Python</option>
                <option value="Java">Java</option>
                <option value="Haskell">Haskell</option>
                <option value="Clojure">Clojure</option>
                <option value="Prolog">Prolog</option>
                <option value="Scala">Scala</option>
                <option value="Go">Go</option>
            </select>

            <label>Биография</label>
            <textarea name="bio" rows="5"></textarea>

            <label class="checkbox-label">
                <input type="checkbox" name="agreed" required>
                Я ознакомлен(а) с контрактом
            </label>

            <button type="submit">Сохранить</button>
        </form>
    </div>
</body>
</html>