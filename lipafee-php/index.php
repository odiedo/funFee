<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FunFee - Lipa Fee Mdogo Mdogo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <meta name="description" content="lipaFee Mobile - Pay fees, check balances, and more.">
    <meta name="keywords" content="lipaFee, Mobile, Pay, Fees, Balance, Services">
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
        }

        .header {
            background-color: var(--primary-green);
            padding: 0.2rem 2rem 0.2rem 2rem;            
            color: white;
        }
        .lipaFee {
            border-radius: 10px;
            padding: 1px 10px 1px 10px;
            box-shadow: 0 8px 10px 0px #0004;
        }
        .feature-card {
            background-color: var(--card-bg);
            border-radius: 0.75rem;
            width: 64px;
            height: 64px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 0.2px 0.2px 0px #e96b17;
            text-align: center;
            margin-bottom: 0.5rem;
        }

        .feature-card:hover {
            background-color: var(--dark-bg);
            border-radius: 0.75rem;
            cursor: pointer;
            box-shadow: 0 0.2px 0.2px 0px #fff;
            margin-bottom: 0.5rem;
        }        

        .feature-card i {
            color: var(--primary-green);
            font-size: 1.3rem;
            text-align: center;
        }

        .feature-text {
            font-size: 0.875rem;
            text-align: center;
        }

        .promo-banner {
            background-color: var(--promo-green);
            border-radius: 0.5rem;
            padding: 0.2rem;
            height: 28vh;
            text-align: center;
        }

        .promo-tag {
            background-color: white;
            color: black;
            border-radius: 999px;
            padding: 0.25rem 1rem;
            display: inline-block;
            margin: 0.5rem 0;
        }

        .promo-price {
            background-color: var(--primary-green);
            color: black;
            border-radius: 0.5rem;
            padding: 0.5rem;
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

        .carousel-indicators {
            margin-bottom: 0;
        }
        
        .carousel-indicators button {
            width: 8px !important;
            height: 8px !important;
            border-radius: 50%;
            margin: 0 4px !important;
        }
        
        .promo-banner {
            background-color: #0004;
            border-radius: 0.5rem;
            padding: 1rem;
            text-align: center;
            margin-bottom: 3rem;
        }
        
        .carousel-control-prev,
        .carousel-control-next {
            width: 10%;
        }
        
        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            width: 1.5rem;
            height: 1.5rem;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <div class="header d-flex justify-content-between align-items-center">
        <i class="fas fa-shopping-cart" aria-hidden="true"></i>
        <h1 class="h5 mb-0">Hello Paul</h1>
        <i class="fas fa-bell" aria-hidden="true"></i>
    </div>

    <!-- Main Content -->
    <div class="container main-content py-4">
        <div class="lipaFee">
            <!-- lipaFee Mobile Section -->
            <div class="mb-4">
                <h2 class="text-center h3 mb-4">LipaFee</h2>
                <div class="row g-4">
                    <div class="col-4 text-center">
                        <div class="feature-card mx-auto" onclick="window.location.href='payFee.php'">
                            <i class="fas fa-dollar" aria-hidden="true"></i>
                        </div>
                        <div class="feature-text">Pay Fee</div>
                    </div>
                    <div class="col-4 text-center">
                        <div class="feature-card mx-auto" onclick="window.location.href='payPlan.php'">
                            <i class="fas fa-mobile-alt" aria-hidden="true"></i>
                        </div>
                        <div class="feature-text">Payment Plan</div>
                    </div>
                    <div class="col-4 text-center">
                        <div class="feature-card mx-auto" onclick="window.location.href='balance.php'">
                            <i class="fas fa-chart-pie" aria-hidden="true"></i>
                        </div>
                        <div class="feature-text">Check Balance</div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="servicesModal" tabindex="-1" aria-labelledby="servicesModalLabel" aria-hidden="true" style="background-color: var(--dark-bg);">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content" style="background-color: var(--card-bg); color: white; border-radius: 1rem;">
                        <div class="modal-header" style="border-bottom: 1px solid var(--primary-green);">
                            <h5 class="modal-title" id="servicesModalLabel">
                                <i class="fas fa-tools me-2" style="color: var(--primary-green);"></i> Services
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="filter: invert(1);"></button>
                        </div>
                        <div class="modal-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex align-items-center" style="background-color: var(--card-bg); color: white; border: none;" onclick="window.location.href='report.php'">
                                    <i class="fas fa-file-alt me-3" style="color: var(--primary-green); font-size: 1.5rem;"></i>
                                    <span>Report Form</span>
                                </li>
                                <li class="list-group-item d-flex align-items-center" style="background-color: var(--card-bg); color: white; border: none;" onclick="window.location.href='events.php'">
                                    <i class="fas fa-calendar-alt me-3" style="color: var(--primary-green); font-size: 1.5rem;"></i>
                                    <span>School Events</span>
                                </li>
                                <li class="list-group-item d-flex align-items-center" style="background-color: var(--card-bg); color: white; border: none;">
                                    <i class="fas fa-gavel me-3" style="color: var(--primary-green); font-size: 1.5rem;"></i>
                                    <span>Indiscipline Cases</span>
                                </li>
                            </ul>
                        </div>
                        <div class="modal-footer" style="border-top: 1px solid var(--primary-green);">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="background-color: var(--primary-green); color: var(--dark-bg);">
                                Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>


            <!-- lipaFee Fixed Section -->
            <div class="mb-4">
                <h2 class="text-center h3 mb-4">funFee</h2>
                <div class="row g-4">
                    <div class="col-4 text-center">
                        <div class="feature-card mx-auto">
                            <i class="fas fa-download" aria-hidden="true"></i>
                        </div>
                        <div class="feature-text">Statement</div>
                    </div>
                    <div class="col-4 text-center">
                        <div class="feature-card mx-auto">
                            <i class="fas fa-file-invoice" aria-hidden="true"></i>
                        </div>
                        <div class="feature-text">Invoices</div>
                    </div>
                    <div class="col-4 text-center">
                        <div class="feature-card mx-auto" data-bs-toggle="modal" data-bs-target="#servicesModal">
                            <i class="fas fa-wifi" aria-hidden="true"></i>
                        </div>
                        <div class="feature-text">Services</div>
                    </div>
                </div>
                
            </div>
        </div>

        <!-- Promo Banner -->
        <div class="promo-banner mt-4">
            <div id="promoCarousel" class="carousel slide" data-bs-ride="carousel">
                <!-- <div class="carousel-indicators">
                    <button type="button" data-bs-target="#promoCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#promoCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#promoCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div> -->
                <div class="carousel-inner">
                    <!-- First Slide -->
                    <div class="carousel-item active">
                        <h3 class="h4 mb-2">Pay School Fees</h3>
                        <p class="small mb-2">Easily pay your child's school fees online.</p>
                        <div class="promo-tag">Secure & Fast</div>
                        <div class="promo-price">
                            <div class="small">Click to Pay Now</div>
                        </div>
                    </div>
                    
                    <!-- Second Slide -->
                    <div class="carousel-item">
                        <h3 class="h4 mb-2">Upcoming Events</h3>
                        <p class="small mb-2">Stay updated with the latest school events.</p>
                        <div class="promo-tag">Never Miss Out</div>
                        <div class="promo-price">
                            <div class="small">Check Events</div>
                        </div>
                    </div>
                    
                    <!-- Third Slide -->
                    <div class="carousel-item">
                        <h3 class="h4 mb-2">Indiscipline Cases</h3>
                        <p class="small mb-2">Monitor any indiscipline cases involving your child.</p>
                        <div class="promo-tag">Stay Informed</div>
                        <div class="promo-price">
                            <div class="small">View Cases</div>
                        </div>
                    </div>
                    
                    <!-- Fourth Slide -->
                    <div class="carousel-item">
                        <h3 class="h4 mb-2">Report Card</h3>
                        <p class="small mb-2">Access your child's academic performance report.</p>
                        <div class="promo-tag">Detailed Reports</div>
                        <div class="promo-price">
                            <div class="small">View Report Card</div>
                        </div>
                    </div>
                </div>
                
                <!-- <button class="carousel-control-prev" type="button" data-bs-target="#promoCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#promoCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button> -->
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