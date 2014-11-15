   <!-- Footer -->
    <footer class = "main-footer">
      <div class ="container">
        <div class = "row footer">
          <div class="col-xs-6 col-sm-4">
            <h4><a href="<?php echo BASE_URL; ?>"><strong>VY VY Boutique</strong></a></h4>
            <p><a href ="<?php echo BASE_URL; ?>contact/"><img src = "<?php echo BASE_URL; ?>img/location.png" alt = "location">7 Phan Chu Trinh - P.Xương Huân</br> Nha Trang - Khánh Hòa</a></p>
            <p>Điện Thoại: 01687520700</p>
            <p><span class="glyphicon glyphicon-copyright-mark"></span>&nbsp;<?php echo date("Y");?> VyVyBoutique</p>
          </div>
          <div class="col-xs-6 col-sm-4">
            <ul class="footer-nav">
              <li><a href="<?php echo BASE_URL; ?>">Trang Chủ</a></li>
              <li class ="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sản Phẩm&nbsp;<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="<?php echo BASE_URL; ?>popular_products/">Nổi Bật</a></li>
                  <li><a href="<?php echo BASE_URL; ?>newest_products.php">Mới Nhất</a></li>
                  <li><a href="<?php echo BASE_URL; ?>face_products.php">Dành Cho Da Mặt</a></li>
                  <li><a href="<?php echo BASE_URL; ?>body_products.php">Dành Cho Body</a></li>
                </ul>
              </li>
              <li><a href="<?php echo BASE_URL; ?>contact/">Liên Hệ</a></li>
            </ul>
          </div>
          <div class="col-xs-6 col-sm-4">
            <ul class="footer-nav-icon">
              <li><a target="_blank"href="https://www.facebook.com/VYVYBoutique.beautiful?ref=br_rs"><img src="<?php echo BASE_URL; ?>img/facebook.png" alt="facebook-logo"></a></li>
              <li><a href="mailto:teresangocvy@gmail.com"><img src="<?php echo BASE_URL; ?>img/envelope.png" alt="mail-logo"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <!-- End Footer -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="<?php echo BASE_URL; ?>js/bootstrap.min.js"></script>
  </body>
</html>