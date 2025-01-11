<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>One-Health</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Top Bar Styling */
        .top-bar {
            background-color: #f8f9fa;
            padding: 10px 80px; /* Match navbar padding */
            font-size: 14px;
            color: #555;
            display: flex;
            justify-content: space-between; /* Space between One-Health and contact info */
            align-items: center;
        }

        .top-bar .contact-info {
            display: flex;
            align-items: center;
            gap: 15px; /* Space between text/icons */
        }

        .top-bar .contact-info a {
            color: #28a745;
            text-decoration: none;
        }

        .top-bar .contact-info a:hover {
            color: #218838;
        }

        /* Navbar Styling */
        .navbar {
            background-color: #fff;
            border-bottom: 1px solid #ddd;
            padding-left: 80px;
        }

        .navbar-brand {
            color: #28a745;
            font-weight: bold;
        }

        .navbar-brand:hover {
            color: #218838;
        }

        .navbar-nav .nav-link {
            color: #555;
            margin-right: 20px;
        }

        .navbar-nav .nav-link:hover {
            color: #28a745;
        }

        .logout-btn {
            background-color: #dc3545;
            color: #fff;
            padding: 5px 15px;
            border-radius: 5px;
            text-decoration: none;
        }

        .logout-btn:hover {
            background-color: #bd2130;
        }

        /* Hero Section Styling */
        .hero {
            position: relative;
            text-align: center;
            color: white;
            background: url('images/background.png') no-repeat center center; /* Ensure correct path */
            background-size: cover;
            height: 90vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .hero-content {
            padding: 50px 20px;
            background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent background */
            color: white;
            text-shadow: 0 2px 5px rgba(0, 0, 0, 0.7);
            border-radius: 10px;
        }

        .hero-content h1 {
            font-size: 3rem;
            font-weight: bold;
            font-style: italic; /* Italic style */
            letter-spacing: 2px; /* Stylish spacing */
            text-transform: uppercase; /* Uppercase letters */
            background: linear-gradient(to right, #00c6ff, #0072ff); /* Bright blue to deep blue */
            -webkit-background-clip: text; 
            -webkit-text-fill-color: transparent; /* Makes gradient visible */
            text-shadow: 0 2px 10px rgba(0, 199, 255, 0.8); /* Adds glowing effect */
        }

        .hero-content h2 {
            font-size: 4rem;
            font-weight: bold;
            margin-top: 20px;
            color: #28a745; /* Vibrant green */
            text-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
        }

        .btn-hero {
            background-color: #28a745;
            color: #fff;
            padding: 15px 30px;
            font-size: 1.5rem;
            margin-top: 30px;
            border-radius: 5px;
        }

        .btn-hero:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <!-- Top Bar -->
    <div class="top-bar">
        <div class="contact-info">
            <span>📞 +011 123 4455 6789</span>
            <a href="mailto:mail@gmail.com">📧 myfitjourney@gmail.com</a>
        </div>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">MyFitJourney</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('about-us') }}">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Coach</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Class</a></li>
                </ul>
                <form action="/logout" method="POST" class="ms-3"> 
                    <button type="submit" class="btn logout-btn">Logout</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>LET'S MAKE YOUR LIFE HEALTHY</h1>
            <h2>Healthy Exercise</h2>
            <a href="#consult" class="btn btn-hero">Let's Consult</a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center py-4 bg-secondary text-white mt-5">
        <p>&copy; 2025 One-Health. All rights reserved.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
