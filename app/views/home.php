<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Flint Framework</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #1a1a2e;
            color: #eaeaea;
            font-family: 'Roboto', sans-serif;
        }
        .welcome-section {
            padding: 100px 0;
            text-align: center;
            background: linear-gradient(135deg, #6e7ff3, #a358df);
            color: #fff;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            margin: 50px auto;
            width: 80%;
        }
        .welcome-section h1 {
            font-size: 4rem;
            margin-bottom: 20px;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
        }
        .welcome-section p {
            font-size: 1.5rem;
            margin-bottom: 30px;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2);
        }
        .btn-primary {
            padding: 15px 30px;
            font-size: 1.2rem;
            background: linear-gradient(135deg, #ff6a00, #ee0979);
            border: none;
            border-radius: 50px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            transition: transform 0.2s;
        }
        .btn-primary:hover {
            transform: scale(1.05);
        }
        footer {
            background-color: #0f3460;
            color: #eaeaea;
            padding: 50px 0;
        }
        footer p {
            margin: 0;
            font-size: 1.2rem;
        }
        .footer-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        .footer-container img {
            width: 100px;
            margin-bottom: 20px;
        }
        .footer-container a {
            color: #ff6a00;
            text-decoration: none;
            transition: color 0.2s;
        }
        .footer-container a:hover {
            color: #ee0979;
        }
    </style>
</head>
<body>
    <header class="text-white text-center py-4" style="background: linear-gradient(135deg, #0f3460, #16213e); box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);">
        <div class="container">
            <h1>Welcome to Flint Framework</h1>
        </div>
    </header>

    <section class="welcome-section">
        <div class="container">
            <h1>Hello, Developer!</h1>
            <p>Flint is the simplest, minimal solution for PHP developers. Achieve most of your tasks with just a click. It is revolutionary.</p>
            <a href="#" class="btn btn-primary">Get Started</a>
        </div>
    </section>

    <footer class="text-center">
        <div class="container footer-container">
            <img src="https://via.placeholder.com/100" alt="Flint Framework Logo">
            <p>Created by Imran Khaliq &copy; 2024 Flint Framework. All rights reserved.</p>
            <p><a href="#">Contact Us</a> | <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
