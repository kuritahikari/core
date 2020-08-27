</main>

<!-- footer -->

<footer>
  <div id="footer">
    <small class="copyright">Copyright &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> All Rights Reserved.</small>
  </div>
</footer>


<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<?php wp_enqueue_script("script.js", "/wp-content/themes/core-theme/js/script.js"); ?>

<?php wp_footer(); ?>
</body>

</html>