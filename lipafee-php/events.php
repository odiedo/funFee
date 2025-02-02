<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upcoming Events - FunFee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-green: #e96b17;
            --dark-bg: #1a251c;
            --card-bg: #39342c;
            --promo-green: #e96b17;
        }

        body {
            background-color: var(--dark-bg);
            color: white;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            min-height: 100vh;
        }

        .header {
            background-color: var(--primary-green);
            color: var(--dark-bg);
            padding: 0.2rem 2rem 0.2rem 2rem;            
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            display: flex;
            justify-content: space-between;
            z-index: 1000;
        }

        .back-button {
            color: #fff;
            font-size: 1.5rem;
            text-decoration: none;
        }

        .main-content {
            padding-top: 60px;
            padding-bottom: 80px;
        }

        .event-card {
            background-color: var(--card-bg);
            border-radius: 0.5rem;
            padding: 1rem;
            margin-bottom: 1rem;
        }

        .event-card h5 {
            color: var(--primary-green);
        }

        .event-card p {
            color: #ccc;
        }

        .event-date {
            color: var(--primary-green);
            font-weight: bold;
        }

        .bottom-nav {
            background-color: var(--dark-bg);
            border-top: 1px solid var(--card-bg);
            position: fixed;
            bottom: 0;
            width: 100%;
            padding: 1rem;
        }

        .nav-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            color: var(--primary-green);
            text-decoration: none;
            font-size: 0.75rem;
        }

        .nav-item i {
            font-size: 1.25rem;
            margin-bottom: 0.25rem;
        }

        .nav-item.active {
            color: var(--primary-green);
        }

        .nav-item:not(.active) {
            color: #ffffff80;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <div class="header d-flex align-items-center">
        <a href="index.html" class="back-button me-3">
            <i class="fas fa-arrow-left"></i>
        </a>
        <h1 class="h5 mb-0">Upcoming Events</h1>
    </div>

    <!-- Main Content -->
    <div class="container main-content">
        <div class="event-card">
            <h5>Parent-Teacher Meeting</h5>
            <p class="event-date">Date: January 15, 2025</p>
            <p>Join us for a parent-teacher meeting to discuss your child's progress and address any concerns.</p>
        </div>
        <div class="event-card">
            <h5>School Sports Day</h5>
            <p class="event-date">Date: February 20, 2025</p>
            <p>Come and cheer for your children as they participate in various sports activities.</p>
        </div>
        <div class="event-card">
            <h5>Annual Science Fair</h5>
            <p class="event-date">Date: March 10, 2025</p>
            <p>Explore the innovative science projects created by our students and support their creativity.</p>
        </div>
        <div class="event-card">
            <h5>Art Exhibition</h5>
            <p class="event-date">Date: April 5, 2025</p>
            <p>Visit our art exhibition to see the beautiful artworks created by our talented students.</p>
        </div>
    </div>

    <!-- Bottom Navigation -->
    <div class="bottom-nav">
    <div class="d-flex justify-content-between">
            <a href="support.php" class="nav-item">
                <i class="fas fa-headset" aria-hidden="true"></i>
                <span>Support</span>
            </a>
            <a href="index.php" class="nav-item active">
                <i class="fas fa-home" aria-hidden="true"></i>
                <span>Home</span>
            </a>
            <a href="settings.php" class="nav-item">
                <i class="fas fa-cog" aria-hidden="true"></i>
                <span>Settings</span>
            </a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>