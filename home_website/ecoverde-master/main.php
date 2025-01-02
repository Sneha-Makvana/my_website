<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JustHome - Real Estate</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        /* Global Styles */
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #0b3558; /* Matches the background */
            color: #fff;
        }
        a {
            text-decoration: none;
            color: inherit;
        }

        /* Navbar */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 50px;
            background-color: transparent;
        }
        .navbar-brand {
            font-size: 1.8rem;
            font-weight: bold;
        }
        .navbar-nav {
            display: flex;
            list-style: none;
            gap: 30px;
        }
        .navbar-nav li a {
            font-size: 1rem;
            font-weight: 500;
        }
        .navbar-right {
            display: flex;
            align-items: center;
            gap: 20px;
        }
        .phone-number {
            display: flex;
            align-items: center;
            font-size: 1rem;
        }
        .phone-number i {
            margin-right: 8px;
        }
        .btn-add-property {
            border: 2px solid #fff;
            border-radius: 25px;
            padding: 8px 20px;
            font-size: 0.9rem;
            background: none;
            cursor: pointer;
        }
        .btn-add-property:hover {
            background: #fff;
            color: #0b3558;
        }

        /* Hero Section */
        .hero {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 100px 50px;
        }
        .hero-content {
            max-width: 50%;
        }
        .hero-content h1 {
            font-size: 3rem;
            line-height: 1.2;
            margin-bottom: 20px;
        }
        .hero-content h1 span {
            color: #FFD700; /* Yellow color for #1 */
        }
        .hero-content p {
            font-size: 1.2rem;
            margin-bottom: 20px;
        }
        .hero-content .btn-primary {
            border: 2px solid #fff;
            color: #fff;
            padding: 10px 20px;
            border-radius: 25px;
            background: none;
            font-size: 1rem;
            cursor: pointer;
        }
        .hero-content .btn-primary:hover {
            background: #fff;
            color: #0b3558;
        }
        .hero-image {
            max-width: 40%;
            position: relative;
        }
        .hero-image img {
            width: 100%;
            border-radius: 10px;
        }

        /* Stats Section */
        .stats {
            display: flex;
            justify-content: space-between;
            margin-top: 50px;
            background-color: #00344b;
            padding: 30px 50px;
            border-radius: 10px;
        }
        .stat {
            text-align: center;
        }
        .stat h2 {
            font-size: 2rem;
            color: #FFD700;
            margin-bottom: 10px;
        }
        .stat p {
            font-size: 1rem;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar">
        <div class="navbar-brand">JustHome</div>
        <ul class="navbar-nav">
            <li><a href="#">Home</a></li>
            <li><a href="#">Listings</a></li>
            <li><a href="#">Members</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Pages</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
        <div class="navbar-right">
            <div class="phone-number">
                <i class="fas fa-phone-alt"></i> +65 685 68666
            </div>
            <button class="btn-add-property">Add Property</button>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>The <span>#1</span> site real estate professionals trust*</h1>
            <p>From as low as $10 per day with limited time offer discounts.</p>
            <button class="btn-primary">Browse More Properties</button>
        </div>
        <div class="hero-image">
            <img src="house.jpg" alt="Luxury House">
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats">
        <div class="stat">
            <h2>680</h2>
            <p>Award Winning</p>
        </div>
        <div class="stat">
            <h2>8K+</h2>
            <p>Happy Customers</p>
        </div>
        <div class="stat">
            <h2>500+</h2>
            <p>Property Ready</p>
        </div>
    </section>

</body>
</html>
