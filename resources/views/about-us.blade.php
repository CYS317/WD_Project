<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - MyFitJourney</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* General Styling */
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            background-color: #f4f4f4;
            color: #333;
        }

        /* Top Bar Styling */
        .top-bar {
            background-color: #f8f9fa;
            padding: 10px 80px;
            font-size: 14px;
            color: #555;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .top-bar .contact-info {
            display: flex;
            align-items: center;
            gap: 15px;
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
        .hero-about {
            background: url('/images/background.png') no-repeat center center/cover;
            height: 50vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
            padding: 50px 20px;
        }

        .hero-about h1 {
            font-size: 3rem;
            font-weight: bold;
            text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.7);
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* About Us Section Styling */
        .about-us-section {
            background-color: #ffffff;
            padding: 50px 20px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            margin-top: -50px; /* Pull the About Us section closer to the hero section */
            border-radius: 10px;
        }

        .about-us-title {
            font-size: 2.5rem;
            color: #28a745;
            font-weight: bold;
            margin-bottom: 20px;
            text-align: center;
        }

        .about-us-content {
            font-size: 1.2rem;
            line-height: 1.8;
            color: #555;
            text-align: center;
            margin-top: 20px;
        }

        .about-us-content strong {
            color: #0072ff;
        }

        .about-us-content p {
            margin-bottom: 30px;
        }

        /* Coach Section Styling */
        <style>
    /* Coach Section Styling */
    .coach-section {
        margin-top: 40px;
        padding: 40px 20px;
        background-color: #f9f9f9;
        border-radius: 10px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .coach-section h3 {
        font-size: 2rem;
        color:blue;
        margin-bottom: 30px;
        text-align: center;
    }

    .coach-profile {
        display: flex;
        align-items: center;
        gap: 20px;
        margin-bottom: 20px;
        padding: 20px;
        background: #ffffff;
        border-radius: 10px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .coach-profile:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }

    .coach-profile img {
    width: 200px;  
    height: 200px; 
    border-radius: 50%;
    object-fit: cover;
    border: 3px solid #28a745;
}

    .coach-details {
        font-size: 1rem;
        line-height: 1.5;
    }

    .coach-name {
        font-weight: bold;
        color: black;
        font-size: 1.2rem;
    }

    .coach-role {
        color: #555;
        font-size: 1rem;
        margin-bottom: 5px;
    }

    .coach-details p {
        margin: 0;
    }


        /* Footer Styling */
        footer {
            background-color: #f8f9fa;
            padding: 20px;
            text-align: center;
            margin-top: 50px;
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
                    <li class="nav-item"><a class="nav-link" href="#">Class</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Class</a></li>
                </ul>
                <form action="/logout" method="POST" class="ms-3">
                    <button type="submit" class="btn logout-btn">Logout</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero-about">
        <h1>About Us</h1>
    </div>

    <!-- About Us Content -->
    <section class="about-us-section">
        <div class="container">
            <h2 class="about-us-title">Who We Are</h2>
            <p class="about-us-content">
                Welcome to <strong>MyFitJourney</strong>, your ultimate destination for holistic health and wellness. We offer free, online courses in Wing Chun, swimming, dance, gym, and yoga to help you stay fit, active, and balanced. Our goal is to provide personalized training, expert tips, and a supportive community to guide you on your fitness journey.
            </p>
            <p class="about-us-content">
                Join us today and start transforming your health, one step at a time! Embrace your journey with us and become part of a healthier, happier world.
            </p>

            <!-- Coach Section -->
            <div class="coach-section" style="background-color: #e6f4ea; padding: 40px 20px; border-radius: 10px;">
                <h3 class="about-us-title">Our Professional Coaches</h3>

            <div class="coach-profile">
            <img src="/images/wingchun_coach.png" alt="Coach 1">
            <div class="coach-details">
                <p class="coach-name">Master Wong</p>
                <p class="coach-role">Specialized in Wing Chun</p>
                <p>Email: masterwong@martialarts.com | Phone: 012-3456789</p>
                <p>Course Details: Join our free online Wing Chun classes to learn effective self-defense techniques and improve your focus and agility. Suitable for beginners and experienced martial artists alike.</p>
            </div>
        </div>

        <div class="coach-profile">
            <img src="/images/swimming_coach.png" alt="Coach 2">
            <div class="coach-details">
                <p class="coach-name">Jordan Chen</p>
                <p class="coach-role">Specialized in Swimming</p>
                <p>Email: emilychen@swimpro.com | Phone: 013-4567890</p>
                <p>Course Details: Discover the fundamentals of swimming with our free online sessions. Perfect for those looking to build confidence in the water and enhance their swimming techniques.</p>
            </div>
        </div>

        <div class="coach-profile">
            <img src="/images/dancing_coach.jpg" alt="Coach 3">
            <div class="coach-details">
                <p class="coach-name">Daniel Lee</p>
                <p class="coach-role">Specialized in Dance</p>
                <p>Email: daniellee@dancemoves.com | Phone: 014-5678901</p>
                <p>Course Details: Explore the art of dance with our free online classes. Learn a variety of styles, including hip-hop, contemporary, and jazz, guided by an experienced choreographer.</p>
            </div>
        </div>

        <div class="coach-profile">
            <img src="/images/gym_coach.png" alt="Coach 4">
            <div class="coach-details">
                <p class="coach-name">Jessica Lim</p>
                <p class="coach-role">Specialized in Gym Training</p>
                <p>Email: jessicalim@fitlife.com | Phone: 015-6789012</p>
                <p>Course Details: Stay fit and active from the comfort of your home with our free online gym training classes. Includes strength training, cardio workouts, and personalized fitness tips.</p>
            </div>
        </div>

        <div class="coach-profile">
            <img src="/images/yoga_coach.png" alt="Coach 5">
            <div class="coach-details">
                <p class="coach-name">Aarav Patel</p>
                <p class="coach-role">Specialized in Yoga</p>
                <p>Email: aaravpatel@yogamind.com | Phone: 016-7890123</p>
                <p>Course Details: Rejuvenate your mind and body with our free online yoga sessions. Learn breathing techniques, improve flexibility, and achieve mindfulness with guided instructions.</p>
            </div>
        </div>


    </section>

    <!-- Footer -->
    <footer class="text-center py-4 bg-secondary text-white mt-5">
        <p>&copy; 2025 One-Health. All rights reserved.</p>
    </footer>

</body>
</html>       