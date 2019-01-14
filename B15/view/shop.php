 <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Shop</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <?php
                    $count = 1;
                    $start = $quantity - 7;
                    $i = $result->num_rows; 
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            $id = $row['id'];
                            if($count >= $start && $count <= $quantity){
                                echo "<div class='col-md-3 col-sm-6'>
                                        <div class='single-shop-product'>
                                            <div class='product-upper'>
                                                <img src='uploads/".$row['image']."' alt='' class='phi'>
                                            </div>
                                            <h2><a href='index.php?action=single&id=$id'>".$row['name']."</a></h2>
                                            <div class='product-carousel-price'>
                                                <ins>".$row['price']."$</ins> <del>$999.00</del>
                                            </div>  
                                            <div class='product-option-shop'>
                                                <a class='add_to_cart_button' data-quantity='1' data-product_sku='' data-product_id='70' rel='nofollow' href='index.php?action=add_cart&product=$id'>Add to cart</a>
                                            </div> 
                                        </div>
                                    </div>";
                            }
                            $count = $count + 1;
                        }
                    }
                ?>
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    <div class="product-pagination text-center">
                        <nav>
                          <ul class="pagination">
                            <li>
                              <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                              </a>
                            </li>
                            <?php      
                                $page = ceil($i/8);
                                $k = 1;
                                while($k<=$page){
                                    echo " <li><a href='index.php?action=shop&quantity=".($k*8)."'>".$k."</a></li>";
                                    $k = $k + 1;
                                }
                            ?>
                            <li>
                              <a href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                              </a>
                            </li>
                          </ul>
                        </nav>                        
                    </div>
                </div>
            </div>
        </div>
    </div>


   