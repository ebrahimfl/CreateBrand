</main>
<footer>
    <div class="container">
        <div class="row">
            <div class="footer_col">
                <div class="logo">
                    <h2><a href="<?php base_url('home')?>" style="color:white;font-size:28px;text-align:left;">Create of Brand</a></h2>
                </div>
                <p>বর্তমান তথ্য ও যোগাযোগ প্রযুক্তির যুগ। ভার্চুয়াল জগতের আমাদের কাজগুলোকে আরো সহজ করে তুলতে আমরা নিয়ে এসেছি এক বিশস্থ প্রতিষ্ঠান <a href="<?php base_url('home')?>" style="color:blue; text-decoration: underline">ক্রিয়েট অফ ব্রান্ড
                    </a>
                </p>
            </div>
            <div class="footer_col">
                <ul>
                    <li><a href="<?php base_url('loginSign.php?log=ourproject')?>" class="footer_h_a">Page</a></li>
                    <li><a href="<?php base_url('loginSign.php?log=mostpopularservices')?>">Most Popular Services</a></li>
                    <li><a href="<?php base_url('loginSign.php?log=figmaDesign')?>">Figma Design</a></li>
                    <li><a href="<?php base_url('loginSign.php?log=htmlTemplate')?>">HTML Template</a></li>
                </ul>
            </div>
            <div class="footer_col">
                <ul>
                    <li><a href="<?php base_url('loginSign.php?log=useFullLink')?>" class="footer_h_a">Uesfull Link</a></li>
                    <li><a href="<?php base_url('blog')?>">Blog</a></li>
                    <li><a href="<?php base_url('loginSign.php?log=pricing') ?>">Pricing</a></li>
                    <li><a href="<?php base_url('loginSign.php?log=descount')?>">Descount</a></li>
                    <li><a href="<?php base_url('loginSign.php?log=costomarService')?>">Customer Service</a></li>
                </ul>
            </div>
            <div class="footer_col">
                <ul>
                    <li><a href="<?php base_url('loginSign.php?log=ouradds')?>" class="footer_h_a">Address</a></li>
                    <li><a href="<?php base_url('home')?>">Create Brand</a></li>
                    <li><a href="mailto:createbrand.team@gmail.com" target="_blank">createbrand.team@gmail.com</a></li>
                </ul>
            </div>
        </div>
        <div class="icons_section">
            <a><img src="<?php base_url('assets/icons/facebook.svg')?>" alt=""></a>
            <a><img src="<?php base_url('assets/icons/linkdin.svg')?>" alt=""></a>
            <a><img src="<?php base_url('assets/icons/twitter.svg')?>" alt=""></a>
            <a><img src="<?php base_url('assets/icons/instagram.svg') ?>" alt=""></a>
        </div>
        <div class="copyrighting_section">
            <p>Copyrighting&copy; 2023-ALL Rights Reserved | <a href="<?php base_url('home')?>" style="color: white;">Create of Brand</a></p>
        </div>
    </div>
</footer>
<script src="<?php base_url('assets/js/animation.js')?>"></script>
<script src="<?php base_url('assets/js/main.js')?>"></script>
<script>
    <?php if (isset($_SESSION['alert']) && !empty($_SESSION['alert'])) {

        if (isset($_SESSION['alert']['type'])) {
            if ($_SESSION['alert']['type'] == 'danger') {
                echo 'openModal("dangerModal", "overlay")';
                unset($_SESSION['alert']);
            }
        }
        if (isset($_SESSION['alert']['type'])) {
            if ($_SESSION['alert']['type'] == 'success') {
                echo 'openModal("successModal", "overlay")';
                unset($_SESSION['alert']);
            }
        }
    } ?>
</script>
</body>

</html>