<?php include 'includes/header.php'; ?>

<section class="py-5">
    <div class="container">

        <div class="text-center mb-5">
            <span class="text-primary fw-semibold">Get in Touch</span>
            <h2 class="fw-bold mt-2">Contact TV Mounting Experts</h2>
            <p class="text-muted">
                Have questions or ready to book a service? Our team is here to help.
            </p>
        </div>

        <div class="row g-4">

            <div class="col-lg-4">
                <div class="card p-4 h-100">
                    <h5><i class="fa fa-phone text-primary me-2"></i> Call Us</h5>
                    <p class="text-muted mb-1">Speak directly with our support team.</p>
                    <a href="tel:8885384197" class="fw-bold">(888) 538-4197</a>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card p-4 h-100">
                    <h5><i class="fa fa-envelope text-primary me-2"></i> Email Us</h5>
                    <p class="text-muted mb-1">Send us your queries anytime.</p>
                    <a href="mailto:contact@itgeeksetup.online" class="fw-bold">contact@itgeeksetup.online</a>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card p-4 h-100">
                    <h5><i class="fa fa-location-dot text-primary me-2"></i> Our Address</h5>
                    <p class="text-muted mb-0">
                        16131 Domestic Dove Way, Hockley, TX,<br>
                         77447, USA
                    </p>
                </div>
            </div>

        </div>

        <div class="row justify-content-center mt-5">
            <div class="col-lg-8">
                <div class="card p-4 shadow-sm">
                    <h4 class="fw-bold mb-3">Send Us a Message</h4>

                    <?php if (isset($_GET['success'])): ?>
                        <div class="alert alert-success">Thank you! Your message has been sent.</div>
                    <?php endif; ?>

                    <?php if (isset($_GET['error'])): ?>
                        <div class="alert alert-danger">Please fill in all required fields.</div>
                    <?php endif; ?>

                  <form action="thank-you.php" method="GET">

                        <div class="row g-3">

                            <div class="col-md-6">
                                <label class="form-label">Full Name *</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Email *</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Phone *</label>
                                <input type="text" name="phone" class="form-control" required>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Service</label>
                                <select name="service" class="form-select">
                                    <option>TV Wall Mounting</option>
                                    <option>Cable Management</option>
                                    <option>Soundbar Setup</option>
                                    <option>TV Uninstallation</option>
                                    <option>Home Entertainment Setup</option>
                                </select>
                            </div>

                            <div class="col-12">
                                <label class="form-label">Message *</label>
                                <textarea name="message" rows="4" class="form-control" required></textarea>
                            </div>

                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-primary px-5">Send Message</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</section>

<?php include 'includes/footer.php'; ?>