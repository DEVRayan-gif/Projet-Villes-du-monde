<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backoffice</title>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;600;700&family=Jost:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            background-color: #f5f0eb;
            font-family: 'Jost', sans-serif;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .admin-container {
            background: #1a2236;
            border-radius: 16px;
            padding: 50px 60px;
            text-align: center;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
            min-width: 400px;
        }

        .admin-logo {
            color: #c9a84c;
            font-size: 13px;
            letter-spacing: 4px;
            text-transform: uppercase;
            margin-bottom: 10px;
        }

        h1 {
            font-family: 'Cormorant Garamond', serif;
            color: #ffffff;
            font-size: 42px;
            font-weight: 700;
            margin-bottom: 8px;
        }

        h1 span {
            color: #c9a84c;
        }

        .separator {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            margin: 20px 0 40px;
        }

        .separator::before,
        .separator::after {
            content: '';
            width: 60px;
            height: 1px;
            background: #c9a84c;
        }

        .separator-dot {
            width: 6px;
            height: 6px;
            background: #c9a84c;
            border-radius: 50%;
            display: inline-block;
        }

        .admin-links {
            display: flex;
            flex-direction: column;
            gap: 16px;
            margin-bottom: 40px;
        }

        .admin-links a {
            display: block;
            padding: 16px 30px;
            background: rgba(201, 168, 76, 0.1);
            border: 1px solid rgba(201, 168, 76, 0.3);
            border-radius: 8px;
            color: #ffffff;
            text-decoration: none;
            font-size: 14px;
            letter-spacing: 2px;
            text-transform: uppercase;
            transition: all 0.3s ease;
        }

        .admin-links a:hover {
            background: #c9a84c;
            color: #1a2236;
            border-color: #c9a84c;
        }

        .retour-link {
            color: #c9a84c;
            text-decoration: none;
            font-size: 13px;
            letter-spacing: 2px;
            text-transform: uppercase;
            opacity: 0.8;
            transition: opacity 0.3s;
        }

        .retour-link:hover {
            opacity: 1;
        }
    </style>
</head>
<body>
    <div class="admin-container">
        <h1>Back<span>office</span></h1>
        <div class="separator"><span class="separator-dot"></span></div>

        <div class="admin-links">
            <a href="/admin/table1_gestion.php"> Villes du monde</a>
            <a href="/admin/table2_gestion.php"> Attractions</a>
        </div>

        <a href="../index.php" class="retour-link">← Retour au site</a>
    </div>
</body>
</html>
