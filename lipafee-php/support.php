<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support - Faiba Mobile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-green: #e96b17;
            --dark-bg: #1a251c;
            --card-bg: #39342c;
            --darker-green: #1a251c;
            --button-green: #39342c;
        }

        body {
            background-color: var(--dark-bg);
            color: white;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            min-height: 100vh;
        }

        .header {
            background-color: var(--primary-green);
            color: #fff;
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
            font-size: 1rem;
            text-decoration: none;
        }
        .main-content {
            padding-top: 60px;
            padding-bottom: 80px;
            background-color: var(--dark-bg);
        }

        .support-card {
            background-color: var(--card-bg);
            border-radius: 1rem;
            padding: 2rem;
            margin: 1rem;
        }

        .contact-button {
            background-color: #0004;
            color: var(--primary-green);
            border: none;
            border-radius: 0.9rem;
            padding: 0.75rem 3rem 0.75rem 3rem;
            margin-bottom: 1rem;
            width: 100%;
            text-align: left;
            font-size: 1rem;
            display: flex;
            justify-content: center;
        }

        .contact-button i {
            margin-right: 1rem;
        }

        .email-button {
            background-color: transparent;
            color: var(--primary-green);
            border: none;
            width: 100%;
            text-align: center;
            font-size: 1.1rem;
            margin: 1.5rem 0;
        }

        .action-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1rem;
            text-align: center;
            margin-top: 2rem;
        }

        .action-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            color: white;
            text-decoration: none;
        }

        .action-item i {
            font-size: 2rem;
            color: var(--primary-green);
            margin-bottom: 1rem;
        }

        .action-item span {
            font-size: 1rem;
            text-align: center;
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
    <div class="header">
        <a href="index.html" class="back-button me-3">
            <i class="fas fa-arrow-left"></i>
        </a>
        <h1 class="h5 mb-0">Support</h1>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <div class="support-card">
            <h2 class="text-center mb-4">Contact Us</h2>
            
            <!-- Phone Buttons -->
            <button class="contact-button">
                <i class="fas fa-phone"></i>
                0759680813
            </button>
            <button class="contact-button">
                <i class="fas fa-phone"></i>
                0743050069
            </button>

            <!-- Email -->
            <button class="email-button">
                <i class="fas fa-envelope me-2"></i>
                info@funfee.co.ke
            </button>

            <!-- Action Grid -->
            <div class="action-grid">
                <a href="#" class="action-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Find an Agent</span>
                </a>
                <a href="#" class="action-item">
                    <i class="fas fa-ticket-alt"></i>
                    <span>Create Ticket</span>
                </a>
                <a href="#" class="action-item">
                    <i class="fas fa-desktop"></i>
                    <span>View Tickets</span>
                </a>
            </div>
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