<!-- app/Views/public/partials/footer.php -->
<section class="contact-us" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 align-self-center">
                <div class="row">
                    <div class="col-lg-12">
                        <form id="contact" action="" method="post">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h2>Let's get in touch</h2>
                                </div>
                                <div class="col-lg-4">
                                    <fieldset>
                                        <input name="name" type="text" id="name" placeholder="YOURNAME...*" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-4">
                                    <fieldset>
                                        <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*"
                                            placeholder="YOUR EMAIL..." required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-4">
                                    <fieldset>
                                        <input name="subject" type="text" id="subject" placeholder="SUBJECT...*"
                                            required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <textarea name="message" type="text" class="form-control" id="message"
                                            placeholder="YOUR MESSAGE..." required=""></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="button">SEND MESSAGE NOW</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="right-info">
                    <ul>
                        <li>
                            <h6>Phone Number</h6>
                            <span>010-020-0340</span>
                        </li>
                        <li>
                            <h6>Email Address</h6>
                            <span>info@meeting.edu</span>
                        </li>
                        <li>
                            <h6>Street Address</h6>
                            <span>Rio de Janeiro - RJ, 22795-008, Brazil</span>
                        </li>
                        <li>
                            <h6>Website URL</h6>
                            <span>www.meeting.edu</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <p>Copyright © 2025 SMK BHS. All Rights Reserved.
            <br>
            project by: <a href="#" id="project-by" title="free css templates">Billy Ramdhani</a>
        </p>
        <div id="programmer-info"
            style="display:none; position:fixed; top:50%; left:50%; transform:translate(-50%, -50%); background-color:white; padding:20px; border:1px solid #ccc; box-shadow:0 0 10px rgba(0,0,0,0.5); z-index:1000;">
            <h4>Programmer Info</h4>
            <p>Name: Billy Ramdhani</p>
            <p>Email: billy@example.com</p>
            <button id="close-info"
                style="margin-top:10px; padding:5px 10px; background-color:#007bff; color:white; border:none; cursor:pointer;">Close</button>
        </div>
        <script>
        document.getElementById('project-by').addEventListener('click', function(e) {
            e.preventDefault();
            document.getElementById('programmer-info').style.display = 'block';
        });

        document.getElementById('close-info').addEventListener('click', function() {
            document.getElementById('programmer-info').style.display = 'none';
        });
        </script>
    </div>
</section>

<!-- Scripts -->
<!-- Bootstrap core JavaScript -->
<script src="<?= base_url('vendor/jquery/jquery.min.js'); ?>"></script>
<script src="<?= base_url('vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

<script src="<?= base_url('assets/js/isotope.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/owl-carousel.js'); ?>"></script>
<script src="<?= base_url('assets/js/lightbox.js'); ?>"></script>
<script src="<?= base_url('assets/js/tabs.js'); ?>"></script>
<script src="<?= base_url('assets/js/video.js'); ?>"></script>
<script src="<?= base_url('assets/js/slick-slider.js'); ?>"></script>
<script src="<?= base_url('assets/js/custom.js'); ?>"></script>
<script>
//according to loftblog tut
$('.nav li:first').addClass('active');

var showSection = function showSection(section, isAnimate) {
    var
        direction = section.replace(/#/, ''),
        reqSection = $('.section').filter('[data-section="' + direction + '"]'),
        reqSectionPos = reqSection.offset().top - 0;

    if (isAnimate) {
        $('body, html').animate({
                scrollTop: reqSectionPos
            },
            800);
    } else {
        $('body, html').scrollTop(reqSectionPos);
    }

};

var checkSection = function checkSection() {
    $('.section').each(function() {
        var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
        if (topEdge < wScroll && bottomEdge > wScroll) {
            var
                currentId = $this.data('section'),
                reqLink = $('a').filter('[href*=\\#' + currentId + ']');
            reqLink.closest('li').addClass('active').
            siblings().removeClass('active');
        }
    });
};

$('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function(e) {
    e.preventDefault();
    showSection($(this).attr('href'), true);
});

$(window).scroll(function() {
    checkSection();
});
</script>
</body>