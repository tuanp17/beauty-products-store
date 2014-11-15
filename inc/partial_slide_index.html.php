 <div class="item active">
  <ul class="products products-index">
   <?php 
      
      $display_products_index = "";
      foreach ($recent_pop_products_slide_1 as $product) {
        $display_products_index = display_products_index($product).$display_products_index;
      }
      echo $display_products_index;
   ?>
  </ul>
<!--/row-->
</div>
<!--/item-->
<div class="item">
  <ul class="products products-index">
    <?php 
    
      $display_products_index = "";
      foreach ($recent_pop_products_slide_2 as $product) {                       
        $display_products_index = display_products_index($product).$display_products_index;                        
      }
      echo $display_products_index;
   ?>
  </ul>
<!--/row-->
</div>
<!--/item-->