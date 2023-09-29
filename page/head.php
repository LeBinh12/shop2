<!-- <div class="container"> -->
<div class="logo">
    <div class="logo">
        <a href="index.php">
           <h2 style="color: #cdcdcd;">Shop</h2> 
        </a>
    </div>  
</div>
    <div class="information-dog">
        <ul>
        <?php
            $sql = "select * from yeucau where trangthai=3"; 
            $request=mysqli_query($conn,$sql);
            if($request){
                    if(mysqli_num_rows($request)>0){
                while($row=mysqli_fetch_array($request)){
                    ?>
                <li>
                    <a href="#"><?php echo $row['loai'] ?></a>
                </li>
                <?php
                }
                }
            }


        ?>
    </ul>
    </div>

            
            <div class="ico-gh"><a 
        href="index.php?page=blocks/dathang/giohang.php&&$_COOKIE['uid']"><i class="fa-solid fa-cart-shopping"></i>Giỏ hàng</a></div>


<!-- </div> -->