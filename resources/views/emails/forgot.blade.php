<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Notification</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f7f9fc;
        }
        .card {
            max-width: 400px;
            width: 100%;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        .card-title {
            font-size: 1.5rem;
            font-weight: bold;
            color: #333;
        }
        .password-box {
            background-color: #f1f1f1;
            padding: 10px;
            border-radius: 5px;
            text-align: center;
            font-size: 1.25rem;
            font-weight: bold;
            color: #2c3e50;
            letter-spacing: 1px;
        }
        .btn {
            background-color: #3498db;
            color: white;
        }
        .btn:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <div class="card text-center">
        <h2 class="card-title">Ваш новый пароль</h2>
        <p>Вот ваш новый сгенерированный пароль. Пожалуйста, сохраните это:</p>
        <div class="password-box">
            {{ $password }}
        </div>
        <div class="mt-4">
            <a href="mysite/login">Войти</a>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
