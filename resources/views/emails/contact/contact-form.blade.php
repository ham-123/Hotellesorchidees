
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <style>
        /* Ajoutez ici vos styles personnalisés */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .email-container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
        }
        .email-content {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 3px rgba(0,0,0,0.1);
        }
        .email-header,
        .email-footer {
            text-align: center;
            padding: 10px;
            background-color: #007BFF;
            color: #ffffff;
            border-radius: 5px;
        }
        .email-footer {
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="email-header">
            <h2>@yield('title')</h2>
        </div>
        <div class="email-content">
            <p><strong>Nom:</strong> {{ $firstname }}</p>
            <p><strong>Email:</strong> {{ $email }}</p>
            <p><strong>Sujet:</strong> {{ $subject }}</p>
            <p><strong>Message:</strong></p>
            <p>{{ $messageBody }}</p>     
        </div>
        <div class="email-footer">
            <!-- Vous pouvez ajouter votre propre texte ici -->
            Merci de nous avoir contacté !
        </div>
    </div>
</body>
</html>
