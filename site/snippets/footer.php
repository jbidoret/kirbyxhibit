      <footer class="footer cf" role="contentinfo">

        <div class="copyright">
          <?php echo $site->copyright()->kirbytext() ?>
          <a href="http://getkirby.com/made-with-kirby-and-love">Made with Kirby and <b>♥</b></a>
        </div>

      </footer>
  </div>
  <script type="text/javascript">
    
    var menulink = document.querySelector('#menu-link'),
        wrap = document.querySelector('#wrap');

    menulink.addEventListener("click", function(e) {
        e.preventDefault();
        wrap.classList.toggle('active');
    });

  </script>
</body>
</html>