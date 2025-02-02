<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Fees Payment</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
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
            background-color: #1a251c;
            color: white;
        }
        .header {
            background-color: var(--primary-green);
            color: white;
            padding: 0.2rem 2rem 0.2rem 2rem;    
            position: sticky;
            top: 0;
            display: flex;
            justify-content: space-between;
            z-index: 1000;
        }
        .back-arrow {
            color: white;
            text-decoration: none;
            font-size: 24px;
            position: absolute;
            left: 15px;
        }
        .main-content {
            padding: 20px;
        }
        .number-select {
            margin: 20px 0;
        }
        .radio-option {
            display: inline-block;
            margin-right: 20px;
            color: #ccc;
        }
        .phone-number {
            color: white;
            padding: 10px 0;
            border-bottom: 1px solid #333;
        }
        .amount-input {
            background-color: #2a332e;
            border: none;
            color: white;
            padding: 15px;
            margin: 20px 0;
            width: 100%;
        }
        .service-option {
            padding: 15px 0;
            border-bottom: 1px solid #333;
            color: #ccc;
            cursor: pointer;
        }
        .service-content {
            background-color: #2a332e;
            padding: 15px;
            margin-top: 5px;
            display: none;
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
        .modal-content {
            background-color: #2a332e;
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 90%;
            max-width: 400px;
        }
        .modal {
            background-color: rgba(0, 0, 0, 0.5);
        }
        .btn-custom {
            background-color: #e96b17;
            color: white;
            border: none;
        }
        .toggle-switch {
            position: relative;
            display: inline-block;
            width: 50px;
            height: 24px;
        }
        .modal-dialog {
            height: 100vh;
            display: flex;
            align-items: center;
            margin: 0 auto;
        }
        .service-content ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .service-content ul li {
            padding: 10px 0;
            border-bottom: 1px solid #333;
        }
    </style>
</head>
<body>
    <div class="header">
        <a href="index.php" class="back-button me-3">
            <i class="fas fa-arrow-left"></i>
        </a>
        <h5 class="text-center mb-0">Pay Fee</h5>
    </div>

    <div class="main-content">
        <h5 class="mb-4">MPESA</h5>
        
        <div class="number-select">
            <div class="radio-option">
                <input type="radio" name="number-type" id="my-number" checked>
                <label for="my-number">My Number</label>
            </div>
            <div class="radio-option">
                <input type="radio" name="number-type" id="other-number">
                <label for="other-number">Other Number</label>
            </div>
        </div>

        <div class="phone-number">
            254747501436 <span class="float-end">▼</span>
        </div>

        <input type="text" class="amount-input" placeholder="Amount">

        <button class="btn btn-custom w-100 my-4" data-bs-toggle="modal" data-bs-target="#confirmModal">
            Pay Fee
        </button>

        <div class="service-section">
            <div class="service-option" onclick="toggleService('pesalink')">
                Pesalink <span class="float-end">▼</span>
            </div>
            <div class="service-content" id="pesalink-content">
                <ul>
                    <li>Send to Bank Account</li>
                    <li>Request from Bank Account</li>
                    <li>Link Bank Account</li>
                </ul>
            </div>

            <div class="service-option" onclick="toggleService('equitel')">
                Equitel <span class="float-end">▼</span>
            </div>
            <div class="service-content" id="equitel-content">
                <ul>
                    <li>Send Money</li>
                    <li>Buy Airtime</li>
                    <li>Pay Bill</li>
                </ul>
            </div>

            <div class="service-option" onclick="toggleService('eazzy')">
                Eazzy Pay <span class="float-end">▼</span>
            </div>
            <div class="service-content" id="eazzy-content">
                <ul>
                    <li>Pay Merchant</li>
                    <li>Withdraw Cash</li>
                    <li>Check Balance</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- First Modal -->
    <div class="modal fade" id="confirmModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <h5 class="text-center mb-4">Pay Fee</h5>
                    <p class="text-center">Buy Ksh.500?</p>
                    <div class="d-flex justify-content-end">
                        <button class="btn text-success" data-bs-dismiss="modal">Cancel</button>
                        <button class="btn text-success" data-bs-target="#mpesaModal" data-bs-toggle="modal">Ok</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Second Modal -->
    <div class="modal fade" id="mpesaModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <h5 class="text-center mb-4">Confirm Mpesa Number</h5>
                    <input type="text" class="form-control bg-dark text-white mb-3" value="254743050069" readonly>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <span>Remember this number?</span>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" checked>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button class="btn text-success" data-bs-dismiss="modal">Cancel</button>
                        <button class="btn text-success" onclick="showSuccess()">Ok</button>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        // function showSuccess() {
        //     $('#mpesaModal').modal('hide');
        //     toastr.success('Fee Paid successfully!');
        // }

        // function toggleService(service) {
        //     const content = document.getElementById(`${service}-content`);
        //     const allContents = document.getElementsByClassName('service-content');
            
        //     // Close all other dropdowns
        //     Array.from(allContents).forEach(element => {
        //         if (element.id !== `${service}-content`) {
        //             element.style.display = 'none';
        //         }
        //     });

        //     // Toggle the clicked dropdown
        //     if (content.style.display === 'block') {
        //         content.style.display = 'none';
        //     } else {
        //         content.style.display = 'block';
        //     }
        // }

        // toastr.options = {
        //     "positionClass": "toast-bottom-center",
        //     "timeOut": "3000"
        // }
    </script>
    <script>
        // Add this function to handle the M-Pesa payment
        async function initiateMpesaPayment(phoneNumber, amount) {
            try {
                const response = await fetch('process-payment.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({
                        phone: phoneNumber.trim(),
                        amount: parseInt(amount)
                    })
                });
                
                const data = await response.json();
                if (!response.ok) {
                    throw new Error(data.message || 'Payment failed');
                }
                
                return data;
            } catch (error) {
                console.error('Payment Error:', error);
                throw error;
            }
        }

        // Modify your showSuccess function
        async function showSuccess() {
            try {
                // Get the phone number and amount from the form
                const phoneNumber = document.querySelector('#mpesaModal .form-control').value;
                const amount = document.querySelector('.amount-input').value;
                
                if (!phoneNumber || !amount) {
                    toastr.error('Please enter both phone number and amount');
                    return;
                }
                
                // Show loading state
                const okButton = document.querySelector('#mpesaModal button.text-success:last-child');
                const originalText = okButton.innerHTML;
                okButton.innerHTML = 'Processing...';
                okButton.disabled = true;
                
                // Initiate payment
                const result = await initiateMpesaPayment(phoneNumber, amount);
                
                // Hide the modal
                $('#mpesaModal').modal('hide');
                
                // Show success message
                toastr.success('Please check your phone for the M-Pesa prompt');
                
                // Optional: Save the phone number if "Remember this number" is checked
                const rememberNumber = document.querySelector('#mpesaModal .form-check-input').checked;
                if (rememberNumber) {
                    localStorage.setItem('savedMpesaNumber', phoneNumber);
                }
                
            } catch (error) {
                // Show error message
                toastr.error(error.message || 'Payment failed. Please try again.');
            } finally {
                // Reset button state
                const okButton = document.querySelector('#mpesaModal button.text-success:last-child');
                okButton.innerHTML = 'Ok';
                okButton.disabled = false;
            }
        }

        // Add this to your existing script
        document.addEventListener('DOMContentLoaded', function() {
            // Load saved phone number if available
            const savedNumber = localStorage.getItem('savedMpesaNumber');
            if (savedNumber) {
                document.querySelector('#mpesaModal .form-control').value = savedNumber;
            }
            
            // Update amount in confirmation modal
            document.querySelector('[data-bs-target="#confirmModal"]').addEventListener('click', function() {
                const amount = document.querySelector('.amount-input').value;
                if (amount) {
                    document.querySelector('#confirmModal p').innerHTML = `Pay Ksh.${amount}?`;
                }
            });
        });

        // Modify toastr options for better UX
        toastr.options = {
            "positionClass": "toast-bottom-center",
            "timeOut": "5000",
            "closeButton": true,
            "progressBar": true,
            "preventDuplicates": true
        };
    </script>
</body>
</html>