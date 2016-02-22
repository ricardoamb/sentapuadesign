
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="footer-logo">
                    <img src="<?php echo base_url(); ?>source/frontend/assets/img/logo-blue.png" alt="Footer Logo Blue">
                </h1>
                <p>© Sentapua Design 2016 - Desenvolvido por <a href="http://ricardoambdev.github.io" target="_blank">Ricardo Amb</a></p>
            </div>
            <div class="col-md-6">
                <ul class="footer-nav pull-right text-right">
                    <li><a href="#about">Sobre</a></li>
                    <li><a href="#features">Serviços</a></li>
                    <li><a href="#screenshots">Portfólio</a></li>
                    <li><a href="#download">Blog</a></li>
                    <li><a href="#contato">Contato</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<div class="overlay overlay-boxify">
    <nav>
        <ul>
            <li><a class="link-menu" data-target="about"><i class="fa fa-heart"></i>Sobre</a></li>
            <li><a class="link-menu" data-target="features"><i class="fa fa-flash"></i>Serviços</a></li>
            <li><a class="link-menu" data-target="portfolio"><i class="fa fa-desktop"></i>Portfólio</a></li>
            <li><a class="link-menu" data-target="blog"><i class="fa fa-pencil"></i>Blog</a></li>
            <li><a class="link-menu" data-target="contact"><i class="fa fa-envelope"></i>Contato</a></li>
        </ul>
    </nav>
</div>

<!-- jQuery -->
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>

<script src="<?php echo base_url(); ?>source/frontend/assets/js/min/toucheffects-min.js"></script>
<script src="<?php echo base_url(); ?>source/frontend/assets/js/jquery.fancybox.pack.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo base_url(); ?>source/frontend/assets/js/min/scripts-min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/main.js"></script>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-XXXXX-X');ga('send','pageview');
</script>

</body>
</html>