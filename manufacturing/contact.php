<?php
include 'includes/header.php';
?>

<main>

    <section class="page-header contact-page-header">

        <div class="container">

            <span class="contact-label">
                GET IN TOUCH
            </span>

            <h1>
                Contact Us
            </h1>

            <p>
                Have a question, product requirement or bulk order?
                Our team is ready to help.
            </p>

        </div>

    </section>


    <section class="content-section">

        <div class="container">

            <div class="contact-layout">

                <!-- Contact Information -->
                <div class="contact-info-card">

                    <span class="section-label">
                        CONTACT INFORMATION
                    </span>

                    <h2>
                        Let's Talk
                    </h2>

                    <p class="contact-intro">
                        Get in touch with our team for product enquiries,
                        bulk requirements, order assistance or delivery
                        related questions.
                    </p>


                    <div class="contact-info-item">

                        <div class="contact-info-icon">
                            📍
                        </div>

                        <div>

                            <span>
                                OFFICE ADDRESS
                            </span>

                            <strong>
                                Tamil Nadu, India
                            </strong>

                        </div>

                    </div>


                    <div class="contact-info-item">

                        <div class="contact-info-icon">
                            📞
                        </div>

                        <div>

                            <span>
                                PHONE
                            </span>

                            <strong>
                                +91 XXXXX XXXXX
                            </strong>

                        </div>

                    </div>


                    <div class="contact-info-item">

                        <div class="contact-info-icon">
                            ✉️
                        </div>

                        <div>

                            <span>
                                EMAIL
                            </span>

                            <strong>
                                info@example.com
                            </strong>

                        </div>

                    </div>


                    <div class="contact-info-item">

                        <div class="contact-info-icon">
                            🕘
                        </div>

                        <div>

                            <span>
                                WORKING HOURS
                            </span>

                            <strong>
                                Monday – Saturday, 9:00 AM – 6:00 PM
                            </strong>

                        </div>

                    </div>

                </div>


                <!-- Contact Form -->
                <div class="contact-form-card">

                    <span class="section-label">
                        SEND AN ENQUIRY
                    </span>

                    <h2>
                        How Can We Help?
                    </h2>


                    <form>

                        <div class="contact-form-grid">

                            <div class="contact-form-group">

                                <label for="contact-name">
                                    Full Name
                                </label>

                                <input
                                    type="text"
                                    id="contact-name"
                                    name="name"
                                    placeholder="Enter your name"
                                >

                            </div>


                            <div class="contact-form-group">

                                <label for="contact-phone">
                                    Phone Number
                                </label>

                                <input
                                    type="tel"
                                    id="contact-phone"
                                    name="phone"
                                    placeholder="Enter your phone number"
                                >

                            </div>

                        </div>


                        <div class="contact-form-grid">

                            <div class="contact-form-group">

                                <label for="contact-email">
                                    Email Address
                                </label>

                                <input
                                    type="email"
                                    id="contact-email"
                                    name="email"
                                    placeholder="Enter your email"
                                >

                            </div>


                            <div class="contact-form-group">

                                <label for="contact-subject">
                                    Subject
                                </label>

                                <input
                                    type="text"
                                    id="contact-subject"
                                    name="subject"
                                    placeholder="Enter subject"
                                >

                            </div>

                        </div>


                        <div class="contact-form-group">

                            <label for="contact-message">
                                Message
                            </label>

                            <textarea
                                id="contact-message"
                                name="message"
                                rows="6"
                                placeholder="Tell us about your requirement..."
                            ></textarea>

                        </div>


                        <button
                            type="button"
                            class="contact-submit-button"
                        >
                            Send Enquiry →
                        </button>

                    </form>

                </div>

            </div>


            <!-- Bottom Help Section -->
            <div class="contact-bottom">

                <div>

                    <span class="section-label">
                        NEED QUICK HELP?
                    </span>

                    <h2>
                        Looking for a specific product?
                    </h2>

                    <p>
                        Browse our product catalogue or contact our team
                        for bulk and customized requirements.
                    </p>

                </div>


                <a
                    href="products.php"
                    class="contact-products-button"
                >
                    View Products →
                </a>

            </div>

        </div>

    </section>

</main>

<?php
include 'includes/footer.php';
?>