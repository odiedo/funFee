<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings - FunFee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-green: #e96b17;
            --dark-bg: #1a251c;
            --card-bg: #39342c;
            --menu-hover: #2c392f;
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

        .menu-item {
            padding: 1.25rem 1rem;
            display: flex;
            align-items: center;
            text-decoration: none;
            color: white;
            border-radius: 0.5rem;
            margin-bottom: 0.5rem;
        }

        .menu-item:hover {
            background-color: var(--menu-hover);
            color: white;
        }

        .menu-item i {
            color: var(--primary-green);
            font-size: 1.5rem;
            width: 2.5rem;
        }

        .menu-item .content {
            margin-left: 1rem;
        }

        .menu-item .title {
            font-size: 1.1rem;
            margin-bottom: 0.25rem;
        }

        .menu-item .subtitle {
            font-size: 0.9rem;
            color: #888;
        }

        .selected-item {
            background-color: var(--menu-hover);
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
        <h1 class="h5 mb-0">Settings</h1>
    </div>

    <!-- Menu Items -->
    <div class="container py-4">
        <a href="#" class="menu-item">
            <i class="fas fa-dollar-sign"></i>
            <div class="content">
                <div class="title">Fee Payment Alert</div>
                <div class="subtitle">Manage your fee payments</div>
            </div>
        </a>

        <a href="#" class="menu-item">
            <i class="fas fa-user"></i>
            <div class="content">
                <div class="title">Profile</div>
                <div class="subtitle">Update your profile</div>
            </div>
        </a>

        <a href="#" class="menu-item">
            <i class="fas fa-info-circle"></i>
            <div class="content">
                <div class="title">About</div>
                <div class="subtitle">Get to know us</div>
            </div>
        </a>

        <a href="#" class="menu-item">
            <i class="fas fa-question-circle"></i>
            <div class="content">
                <div class="title">FAQ</div>
                <div class="subtitle">Frequently asked questions</div>
            </div>
        </a>

        <a href="#" class="menu-item">
            <i class="fas fa-sign-out-alt"></i>
            <div class="content">
                <div class="title">Logout</div>
                <div class="subtitle">Sign out of your account</div>
            </div>
        </a>
    </div>

    <!-- Bottom Navigation -->
    <div class="bottom-nav">
        <div class="d-flex justify-content-between">
            <a href="support.php" class="nav-item">
                <i class="fas fa-headset" aria-hidden="true"></i>
                <span>Support</span>
            </a>
            <a href="index.php" class="nav-item">
                <i class="fas fa-home" aria-hidden="true"></i>
                <span>Home</span>
            </a>
            <a href="settings.php" class="nav-item active">
                <i class="fas fa-cog" aria-hidden="true"></i>
                <span>Settings</span>
            </a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>