<?php
include 'includes/header.php';
?>

<main>

    <!-- Page Header -->

    <section class="page-header">

        <div class="container">

            <h1>Contact Us</h1>

            <p>
                Get in touch with us for products, orders and enquiries.
            </p>

        </div>

    </section>


    <!-- Contact Section -->

    <section class="content-section">

        <div class="container">

            <h2>Get In Touch</h2>

            <p>
                If you have any questions about our products or services,
                please contact us using the details below or send us an enquiry.
            </p>


            <div class="contact-grid">


                <!-- Company Details -->

                <div class="contact-info">

                    <h3>Company Information</h3>

                    <p>
                        <strong>Company:</strong>
                        Manufacturing Solutions
                    </p>

                    <p>
                        <strong>Phone:</strong>
                        +91 98674 81876
                    </p>

                    <p>
                        <strong>Email:</strong>
                        info@example.com
                    </p>

                    <p>
                        <strong>Address:</strong>
                        Tamil Nadu, India
                    </p>

                </div>


                <!-- Contact Form -->

                <div class="contact-form">

                    <h3>Send Us an Enquiry</h3>

                    <form action="#" method="post">

                        <div class="form-group">

                            <label for="name">
                                Your Name
                            </label>

                            <input
                                type="text"
                                id="name"
                                name="name"
                                placeholder="Enter your name"
                                required
                            >

                        </div>


                        <div class="form-group">

                            <label for="email">
                                Email Address
                            </label>

                            <input
                                type="email"
                                id="email"
                                name="email"
                                placeholder="Enter your email"
                                required
                            >

                        </div>


                        <div class="form-group">

                            <label for="phone">
                                Phone Number
                            </label>

                            <input
                                type="tel"
                                id="phone"
                                name="phone"
                                placeholder="Enter your phone number"
                            >

                        </div>


                        <div class="form-group">

                            <label for="message">
                                Message
                            </label>

                            <textarea
                                id="message"
                                name="message"
                                rows="6"
                                placeholder="Enter your enquiry"
                                required
                            ></textarea>

                        </div>


                        <button type="submit">
                            Send Enquiry
                        </button>

                    </form>

                </div>

            </div>

        </div>

    </section>

</main>


<?php
include 'includes/footer.php';
?>