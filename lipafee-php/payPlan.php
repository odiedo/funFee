<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fee Payment Plans - SchoolPay</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-blue: #e96b17;
            --dark-bg: #1a251c;
            --card-bg: #39342c;
            --darker-blue: #0004;
        }

        body {
            background-color: var(--dark-bg);
            color: white;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            padding-bottom: 80px;
        }

        .header {
            background-color: var(--primary-blue);
            color: white;
            padding: 0.2rem 2rem 0.2rem 2rem;    
            position: sticky;
            top: 0;
            display: flex;
            justify-content: space-between;
            z-index: 1000;
        }

        .back-button {
            color: #fff;
            font-size: 1rem;
            text-decoration: none;
        }

        .fee-summary {
            background-color: var(--darker-blue);
            color: white;
            padding: 1.5rem;
            margin-bottom: 1rem;
        }

        .fee-amount {
            font-size: 1.5rem;
            font-weight: bold;
            color: var(--primary-blue);
        }

        .plan-section {
            background-color: var(--darker-blue);
            border-radius: 0.75rem;
            padding: 1rem;
            margin-bottom: 2rem;
        }

        .plan-card {
            background-color: var(--card-bg);
            border-radius: 0.75rem;
            padding: 1.5rem;
            margin-bottom: 1rem;
            transition: transform 0.2s;
        }

        .plan-card:hover {
            transform: translateY(-2px);
        }

        .plan-amount {
            color: var(--primary-blue);
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 0.5rem;
        }

        .plan-duration {
            color: #ffffff80;
            font-size: 0.875rem;
            margin-bottom: 0.5rem;
        }

        .completion-date {
            color: #4CAF50;
            font-size: 0.875rem;
            margin-bottom: 0.5rem;
        }

        .select-plan-btn {
            background-color: var(--primary-blue);
            border: none;
            border-radius: 0.5rem;
            color: white;
            padding: 0.5rem 1rem;
            width: 100%;
            margin-top: 1rem;
        }

        .progress {
            height: 0.5rem;
            margin: 1rem 0;
            background-color: var(--card-bg);
        }

        .progress-bar {
            background-color: var(--primary-blue);
        }

        .section-title {
            color: var(--primary-blue);
            margin-bottom: 1rem;
            padding: 0.5rem;
            border-bottom: 1px solid var(--card-bg);
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
            color: var(--primary-blue);
            text-decoration: none;
            font-size: 0.75rem;
        }

        .nav-item i {
            font-size: 1.25rem;
            margin-bottom: 0.25rem;
        }

        .nav-item.active {
            color: var(--primary-blue);
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
        <h1 class="h5 mb-0">Fee Payment Plans</h1>
    </div>

    <!-- Fee Summary -->
    <div class="fee-summary">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <div>Total Fees</div>
            <div class="fee-amount">Ksh. 53,000</div>
        </div>
        <div class="d-flex justify-content-between align-items-center mb-2">
            <div>Paid Amount</div>
            <div class="text-success">Ksh. 23,200</div>
        </div>
        <div class="d-flex justify-content-between align-items-center mb-3">
            <div>Balance</div>
            <div class="text-warning">Ksh. 29,800</div>
        </div>
        <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 44%" aria-valuenow="44" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="text-center mt-2">
            <small>44% paid</small>
        </div>
    </div>

    <!-- Payment Plans -->
    <div class="container">
        <h2 class="h4 mb-4">Choose Your Payment Plan</h2>
        
        <!-- Monthly Plans -->
        <div class="plan-section">
            <h3 class="section-title">Monthly Plans</h3>
            <div class="row g-3">
                <div class="col-6">
                    <div class="plan-card">
                        <div class="plan-amount">Ksh. 7,450</div>
                        <div class="plan-duration">4 monthly payments</div>
                        <div class="completion-date">Complete by: May 2025</div>
                        <button class="select-plan-btn">Select Plan</button>
                    </div>
                </div>
                <div class="col-6">
                    <div class="plan-card">
                        <div class="plan-amount">Ksh. 9,933</div>
                        <div class="plan-duration">3 monthly payments</div>
                        <div class="completion-date">Complete by: April 2025</div>
                        <button class="select-plan-btn">Select Plan</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Weekly Plans -->
        <div class="plan-section">
            <h3 class="section-title">Weekly Plans</h3>
            <div class="row g-3">
                <div class="col-6">
                    <div class="plan-card">
                        <div class="plan-amount">Ksh. 2,483</div>
                        <div class="plan-duration">12 weekly payments</div>
                        <div class="completion-date">Complete by: April 2025</div>
                        <button class="select-plan-btn">Select Plan</button>
                    </div>
                </div>
                <div class="col-6">
                    <div class="plan-card">
                        <div class="plan-amount">Ksh. 3,725</div>
                        <div class="plan-duration">8 weekly payments</div>
                        <div class="completion-date">Complete by: March 2025</div>
                        <button class="select-plan-btn">Select Plan</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Daily Plans -->
        <div class="plan-section">
            <h3 class="section-title">Daily Plans</h3>
            <div class="row g-3">
                <div class="col-6">
                    <div class="plan-card">
                        <div class="plan-amount">Ksh. 497</div>
                        <div class="plan-duration">60 daily payments</div>
                        <div class="completion-date">Complete by: March 2025</div>
                        <button class="select-plan-btn">Select Plan</button>
                    </div>
                </div>
                <div class="col-6">
                    <div class="plan-card">
                        <div class="plan-amount">Ksh. 745</div>
                        <div class="plan-duration">40 daily payments</div>
                        <div class="completion-date">Complete by: February 2025</div>
                        <button class="select-plan-btn">Select Plan</button>
                    </div>
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
</body>
</html>