 <footer>
    <p>&copy; <?php echo date('Y'); ?> Lock In Digital</p>
  </footer>
  <?php wp_footer(); ?>
  <script>
    const toggle = document.getElementById('menu-toggle');
    const menu = document.getElementById('mobile-menu');

    toggle.addEventListener('click', () => {
      menu.classList.toggle('hidden');
    });
  </script>
</body>
</html>