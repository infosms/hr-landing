<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Новый запрос на демо</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #f9f9f9;
        }
        .header {
            text-align: center;
            padding: 10px 0;
            border-bottom: 1px solid #ddd;
        }
        .header h1 {
            margin: 0;
            color: #007BFF;
        }
        .content {
            padding: 20px;
        }
        .content p {
            margin: 10px 0;
        }
        .content strong {
            color: #007BFF;
        }
        .footer {
            text-align: center;
            padding: 10px 0;
            border-top: 1px solid #ddd;
            font-size: 12px;
            color: #777;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Новый запрос на демо</h1>
        </div>
        <div class="content">
            <p><strong>Имя:</strong> {{ $first_name }}</p>
            <p><strong>Фамилия:</strong> {{ $last_name }}</p>
            <p><strong>Email:</strong> {{ $email }}</p>
            <p><strong>Телефон:</strong> {{ $phone }}</p>
            <p><strong>Должность:</strong> {{ $position }}</p>
            <p><strong>Компания:</strong> {{ $company }}</p>
            <p><strong>Количество сотрудников:</strong> {{ $employee_count }}</p>
        </div>
    
    </div>
</body>
</html>
