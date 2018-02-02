<?php 
/*Template name: Contact*/
?>
<?php get_header() ?>

    <div id="ContactHead">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Contact us</h1>
            </div>
        </div>
    </div>
</div>

<div id="ContactMain">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Contact Us</h2>
                <p>
                We are dedicated to providing the best possible customer service around. Whether you have a question about your car or want to know more about us, we’d love to hear from you.
                <br />
                Please give us a call or e-mail and we’ll get back to you as soon as possible. Also, feel free to visit us at our convenient shop location. We look forward to speaking with you.
                </p>
            </div>
        </div>
    </div>
</div>
<div id="ContactAppointment">
    <div class="container">
        <div class="row">
            <?php echo do_shortcode( '[contact-form-7 id="217" title="Customer Contact Form"]' ); ?>
        </div>
    </div>
</div>

<?php get_footer() ?>