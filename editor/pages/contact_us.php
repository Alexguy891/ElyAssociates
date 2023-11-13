<!DOCTYPE html>
<html lang="en">
<!--HEAD-->
<?php require 'support/head.php'; ?>
<title>Contact Us</title>
</head>
    <!--BODY-->
    <body>
        <?php require 'support/header.php'; ?>
        <div class="container mt-5" style="max-width: 500px;">
        <h1>Contact Us</h1>
            <form method="post" name="contact_form" id="contact_form" onsubmit="sendMail(event)">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="firstName" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="firstName" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="lastName" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="lastName" required>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" required>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="tel" class="form-control" id="phone" required>
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" id="address" required>
                </div>
                <div class="mb-3">
                    <label for="city" class="form-label">City</label>
                    <input type="text" class="form-control" id="city" required>
                </div>
                <div class="mb-3">
                    <label for="state" class="form-label">State</label>
                    <select class="form-select" id="state" required>
                        <option value="" disabled selected>Select state</option>
                        <option value="OH">Ohio</option>
                        <option value="PA">Pennsylvania</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="zip" class="form-label">Zip</label>
                    <input type="text" class="form-control" id="zip" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-dark mb-5">Send Message</button>
            </form>
        </div>
        <?php require 'support/footer.php'; ?>
    </body>
</html>