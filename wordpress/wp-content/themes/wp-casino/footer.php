    </div><!--end my-container-->
    <div class="footer_place"></div>
  </section>

  <footer class="footer clear_fix">
    <div class="footer-pseudo"></div>
    <div class="footer-content">

      <?php wpeFootNav(); ?>
      <ul class="footer-pay">
        <li class="footer-pay-item"><span class="footer-pay-link visa-m"></span></li>
        <li class="footer-pay-item"><span class="footer-pay-link yamoney"></span></li>
        <li class="footer-pay-item"><span class="footer-pay-link liqpay"></span></li>
        <li class="footer-pay-item"><span class="footer-pay-link qiwi"></span></li>
        <li class="footer-pay-item"><span class="footer-pay-link sms"></span></li>
        <li class="footer-pay-item"><span class="footer-pay-link wm"></span></li>
      </ul>

      <div class="copy">&copy; <?php echo date("Y"); ?> Собственность <?php bloginfo('name'); ?>.</div>

    </div>
  </footer>

  <div class="scroll" id="scroll" data-top1="572" data-top2="70" data-margin="880" style="top: 70px;">
    <div class="reg-left" id="reg-left" style="top: -23px; margin-bottom: 0px; display: block;">
      <a href="http://777casino-vulkan.com/go/reg"  class="reg-left-buttom"><img width="171" height="54" src="<?php echo get_template_directory_uri(); ?>/img/reg-scroll.gif"></a>
      <a class="reg-left-plus" href="http://777casino-vulkan.com/go/reg"><img width="147" height="69" src="<?php echo get_template_directory_uri(); ?>/img/reg-scroll-1000.png"></a>
    </div>
  </div>

  <?php wp_footer(); ?>
  <script src="<?php echo get_template_directory_uri(); ?>/js/all.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.validate.min.js"></script>


</body>

</html>
