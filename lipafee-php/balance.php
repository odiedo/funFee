<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Balance</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-green: #e96b17;
            --dark-bg: #1a251c;
            --card-bg: #2c392f;
            --card-darker: #e96b17;
        }

        body {
            background-color: var(--dark-bg);
            color: white;
            font-family: -apple-system, BlinkMacSystemFont, system-ui, sans-serif;
        }

        .header {
            background-color: var(--primary-green);
            padding: 1rem;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            border-bottom-right-radius: 20%;
            height: 30vh;
        }

        .back-button {
            color: var(--dark-bg);
            font-size: 1.5rem;
            text-decoration: none;
        }

        .balance-container {
            margin-top: 80px;
            padding: 1rem;
        }

        .termly-bal {
            position: relative;
            top: 30vh;
            padding-bottom: 10vh;
        }

        .phone-number {
            background-color: var(--card-bg);
            padding: 1rem;
            border-radius: 0.5rem;
            margin-bottom: 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .balance-card {
            background-color: var(--card-bg);
            padding: 2rem;
            border-radius: 0.5rem;
            text-align: center;
            margin-bottom: 1rem;
        }

        .balance-amount {
            font-size: 2.5rem;
            font-weight: bold;
            margin: 1rem 0;
        }

        .toggle-container {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
        }

        .toggle-switch {
            width: 40px;
            height: 24px;
            background-color: var(--primary-green);
            border-radius: 12px;
            position: relative;
            cursor: pointer;
        }

        .toggle-switch::after {
            content: '';
            position: absolute;
            width: 20px;
            height: 20px;
            background-color: white;
            border-radius: 50%;
            top: 2px;
            left: 2px;
            transition: left 0.3s;
        }

        .toggle-switch.active::after {
            left: 18px;
        }

        .usage-card {
            background-color: var(--card-bg);
            padding: 1.5rem;
            border-radius: 0.5rem;
            margin-bottom: 1rem;
        }

        .progress-circle {
            width: 60px;
            height: 60px;
        }

        .progress-circle circle {
            fill: none;
            stroke-width: 8;
        }

        .progress-circle .progress-bg {
            stroke: #fa050567;
        }

        .progress-circle .progress {
            stroke: var(--primary-green);
            stroke-linecap: round;
        }

        .date-info {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: #888;
            font-size: 0.9rem;
            margin-top: 0.5rem;
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

        .main-content {
            padding-bottom: 80px;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <div class="header">
        <div class="phone-number">
            <span>Antony Emuria</span>
            <i class="fas fa-chevron-down"></i>
        </div>

        <div class="balance-card">
            <div class="balance-amount" id="balanceAmount">KSh. 29,800</div>
            <div class="toggle-container">
                <div class="toggle-switch" onclick="toggleDataManager(this)"></div>
                <span>Automanage Fund</span>
            </div>
        </div>
    </div>
    <!-- Main Content -->
    <div class="main-content balance-container">
        <div class="termly-bal">
            <!-- Term 1 Usage Card -->
            <div class="usage-card">
                <div class="d-flex justify-content-between align-items-start mb-3">
                    <div>
                        <h2 class="h5 mb-2">Term 1 Fee: 27,500</h2>
                        <div>Ksh. 4,300 left</div>
                    </div>
                    <svg class="progress-circle" viewBox="0 0 36 36">
                        <circle class="progress-bg" cx="18" cy="18" r="14" />
                        <circle class="progress" cx="18" cy="18" r="14"
                                stroke-dasharray="87.96" stroke-dashoffset="15"
                                transform="rotate(-90 18 18)" />
                        <text x="18" y="18" text-anchor="middle" dy=".3em" 
                            fill="white" font-size="10">85%</text>
                    </svg>
                </div>
                <div class="date-info">
                    <i class="far fa-calendar"></i>
                    <span>Start Date</span>
                    <span class="ms-auto">January 6, 2025</span>
                </div>
                <div class="date-info">
                    <i class="far fa-calendar"></i>
                    <span>Expiry Date</span>
                    <span class="ms-auto">April 7, 2025</span>
                </div>
            </div>

            <!-- Term 2 Usage Card -->
            <div class="usage-card">
                <div class="d-flex justify-content-between align-items-start mb-3">
                    <div>
                        <h2 class="h5 mb-2">Term 2 Fee: 14,870</h2>
                        <div>Ksh. 19,170 left</div>
                    </div>
                    <svg class="progress-circle" viewBox="0 0 36 36">
                        <circle class="progress-bg" cx="18" cy="18" r="14" />
                        <circle class="progress" cx="18" cy="18" r="14"
                                stroke-dasharray="87.96" stroke-dashoffset="87.96"
                                transform="rotate(-90 18 18)" />
                        <text x="18" y="18" text-anchor="middle" dy=".3em" 
                            fill="white" font-size="10">0%</text>
                    </svg>
                </div>
                <div class="date-info">
                    <i class="far fa-calendar"></i>
                    <span>Start Date</span>
                    <span class="ms-auto">May 1, 2025</span>
                </div>
                <div class="date-info">
                    <i class="far fa-calendar"></i>
                    <span>Expiry Date</span>
                    <span class="ms-auto">August 1, 2025</span>
                </div>
            </div>

            <!-- Term 3 Usage Card -->
            <div class="usage-card">
                <div class="d-flex justify-content-between align-items-start mb-3">
                    <div>
                        <h2 class="h5 mb-2">Term 3 Fee: 10,630 </h2>
                        <div>Ksh. 29,800 left</div>
                    </div>
                    <svg class="progress-circle" viewBox="0 0 36 36">
                        <circle class="progress-bg" cx="18" cy="18" r="14" />
                        <circle class="progress" cx="18" cy="18" r="14"
                                stroke-dasharray="87.96" stroke-dashoffset="87.96"
                                transform="rotate(-90 18 18)" />
                        <text x="18" y="18" text-anchor="middle" dy=".3em" 
                            fill="white" font-size="10">0%</text>
                    </svg>
                </div>
                <div class="date-info">
                    <i class="far fa-calendar"></i>
                    <span>Start Date</span>
                    <span class="ms-auto">September 1, 2025</span>
                </div>
                <div class="date-info">
                    <i class="far fa-calendar"></i>
                    <span>Expiry Date</span>
                    <span class="ms-auto">December 1, 2025</span>
                </div>
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
    <script>
        function toggleDataManager(element) {
            element.classList.toggle('active');
        }
    </script>
    <script>
        function toggleDataManager(element) {
            element.classList.toggle('active');
            const balanceAmount = document.getElementById('balanceAmount');
            if (element.classList.contains('active')) {
                balanceAmount.textContent = 'KSh. 53,200';
            } else {
                balanceAmount.textContent = 'KSh. 29,800';
            }
        }
    </script>
</body>
</html>