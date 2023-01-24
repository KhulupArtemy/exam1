<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Вариант1 Оформление заказа</title>
        <link rel="stylesheet" type="text/css" href="bootstrap.css"/>
        <link rel="stylesheet" type="text/css" href="styles.css"/>
    </head>
    <body style="background: #e1b7bf">     
        <div class="container" style="background: #59437a; color: white; width: 30em; padding: 30px;">
            <h1>Оформление заказа</h1>
            <form>
                <hr>
                <label for="fullname" class="form-label">Введите ФИО:</label>
                <input type="text" class="form-control" id="fullname" placeholder="ФИО">
                <label for="phone" class="form-label">Введите телефон:</label>
                <input type="text" class="form-control" id="phone" placeholder="Телефон">
                <label for="stanok" class="form-label">Выберите станок:</label>
                <select id="stanok" class="form-select">
                    <option value="stanok1">Stanok1</option>
                    <option value="stanok2">Stanok2</option>
                    <option value="stanok3">Stanok3</option>
                </select>
                <hr>
                <input type="button" class="btn btn-danger" value="Отправить" onclick="addFeedback()"/>
            </form>
        </div>   
        <script src="validation.js"></script>
    </body>
</html>