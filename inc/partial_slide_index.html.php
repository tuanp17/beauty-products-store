 <div class="item active">
  <div class="row">
   <?php 
      
      $display_products_index = "";
      foreach ($recent_pop_products_slide_1 as $product) {
        $display_products_index = display_products_index($product).$display_products_index;
      }
      echo $display_products_index;
   ?>
  </div>
<!--/row-->
</div>
<!--/item-->
<div class="item">
  <div class="row">
    <?php 
    
      $display_products_index = "";
      foreach ($recent_pop_products_slide_2 as $product) {                       
        $display_products_index = display_products_index($product).$display_products_index;                        
      }
      echo $display_products_index;
   ?>
  </div>
<!--/row-->
</div>
<!--/item-->