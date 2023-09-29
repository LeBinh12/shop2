<div class="search-bar">
                <form action="#">
                    <input type="text" name="search" placeholder="Nhap thứ bạn cần tìm....">
                    <button type="submit" name="btn-search"><a><i class="fa-solid fa-magnifying-glass"></i></a></button>

                </form>
            </div>

            <div class="danhmuc">
                <a href="#">Trang chu</a>

                <span>Danh Muc san pham</span>
            </div>


<div class="giong">
    <div class="box">
        <div class="banner">
            <div style="margin-top:0.5%;font-size:1.2em"><h1 style="margin-left: 3%;">Cogri</h1></div>
        </div>
        
        <div class="hienthi">
                
            <?php
                $sql="SELECT * FROM dulieu WHERE id=0";
                if ($r = mysqli_query($conn, $sql)) {
                    if (mysqli_num_rows($r) > 0) {
                        while ($sp = mysqli_fetch_array($r)) {
                            ?>
                            <div class="fold">
                                
                                <div class="hinhanh" id="product-lable"><a href="#"><img src="image/<?php echo $sp["hinhanh"] ?>"> <span>New</span></a></div>
                                <div class="ten" style="margin-top: 45%;"><a href="#"><?php echo $sp["ten"] ?></a></div>
                                <div class="gia"><a href="#"><?php echo number_format($sp['gia'],0,",",".") ?></a></div>
                                
                            </div>
                            <?php
                        }
                    }
                }
            ?>
        </div>

        <header>
            <div class="stick-bottom">
                <ul>
                    <li><a id="home" href="#">
                        <img src="https://matpetfamily.com/wp-content/uploads/2022/01/home-icon-1.png" width="72" height="72" scale="0">
                    </a></li>
                    <li><a id="zalo" href="#">
                        <img src="https://matpetfamily.com/wp-content/uploads/2022/01/zalo-icon-1.png" width="72" height="72">
                    </a></li>
                    <li>
                        <a id="fb" href="#">
                            <img src="https://matpetfamily.com/wp-content/uploads/2022/01/mess-icon-1.png" width="72" height="72">
                        </a>
                    </li>
                    <li>
                        <a id="phone" href="tel://0328075014">
                            <img src="https://matpetfamily.com/wp-content/uploads/2022/01/call-icon-1.png" width="72" height="72">
                        </a>
                    </li>
                </ul>
            </div>
        </header>

    </div>
    <div class="element">
        <div class="wrapper">
            <a href="#">
                
                xem them
                
            </a>
        </div>
    </div>
</div>

<div class="giong">
    <div class="box">
        <div class="banner">
            <div style="margin-top:0.5%;font-size:1.2em"><h1 style="margin-left: 3%;">Alaska</h1></div>
        </div>
        <div class="hienthi">
            <?php
                $sql="SELECT * FROM dulieu WHERE id=1";
                if ($r = mysqli_query($conn, $sql)) {
                    if (mysqli_num_rows($r) > 0) {
                        while ($sp = mysqli_fetch_array($r)) {
                            ?>
                            <div class="fold">
                                <div class="hinhanh"><a href="#"><img src="image/<?php echo $sp["hinhanh"] ?>"></a></div>
                                <div class="ten" style="margin-top:50%;"><a href="#"><?php echo $sp["ten"] ?></a></div>
                                <div class="gia"><a href="#"><?php echo number_format($sp['gia'],0,",",".") ?></a></div>
                                
                            </div>
                            <?php
                        }
                    }
                }
            ?>
        </div>
    </div>
    <div class="element">
        <div class="wrapper">
            <a href="#">
                
                xem them
                
            </a>
        </div>
    </div>
</div>


<div class="giong">
    <div class="box">
        <div class="banner">
            <div style="margin-top:0.5%;font-size:1.2em"><h1 style="margin-left: 3%;">Pitpull</h1></div>
        </div>
        <div class="hienthi">
            <?php
                $sql="SELECT * FROM dulieu WHERE id=2";
                if ($r = mysqli_query($conn, $sql)) {
                    if (mysqli_num_rows($r) > 0) {
                        while ($sp = mysqli_fetch_array($r)) {
                            ?>
                            <div class="fold">
                                <div class="hinhanh"><a href="#"><img src="image/<?php echo $sp["hinhanh"] ?>"></a></div>
                                <div class="ten"><a href="#"><?php echo $sp["ten"] ?></a></div>
                                <div class="gia"><a href="#"><?php echo number_format($sp['gia'],0,",",".")?></a></div>
                                
                            </div>
                            <?php
                        }
                    }
                }
            ?>
        </div>
    </div>
    <div class="element">
        <div class="wrapper">
            <a href="#">
                
                xem them
                
            </a>
        </div>
    </div>
</div>


<div class="giong">
    <div class="box">
        <div class="banner">
            <div style="margin-top:0.5%;font-size:1.2em"><h1 style="margin-left: 3%;">Husky</h1></div>
        </div>
        <div class="hienthi">
            <?php
                $sql="SELECT * FROM dulieu WHERE id=3";
                if ($r = mysqli_query($conn, $sql)) {
                    if (mysqli_num_rows($r) > 0) {
                        while ($sp = mysqli_fetch_array($r)) {
                            ?>
                            <div class="fold">
                                <div class="hinhanh"><a href="#"><img src="image/<?php echo $sp["hinhanh"] ?>"></a></div>
                                <div class="ten"><a href="#"><?php echo $sp["ten"] ?></a></div>
                                <div class="gia"><a href="#"><?php echo number_format($sp['gia'],0,",",".") ?></a></div>
                                
                            </div>
                            <?php
                        }
                    }
                }
            ?>
        </div>
    </div>
    <div class="element">
        <div class="wrapper">
            <a href="#">
                
                xem them
                
            </a>
        </div>
    </div>
</div>


<div class="giong">
    <div class="box">
        <div class="banner">
            <div style="margin-top:0.5%;font-size:1.2em"><h1 style="margin-left: 3%;">Poodle</h1></div>
        </div>
        <div class="hienthi">
            <?php
                $sql="SELECT * FROM dulieu WHERE id=4";
                if ($r = mysqli_query($conn, $sql)) {
                    if (mysqli_num_rows($r) > 0) {
                        while ($sp = mysqli_fetch_array($r)) {
                            ?>
                            <div class="fold">
                                <div class="hinhanh"><a href="#"><img src="image/<?php echo $sp["hinhanh"] ?>"></a></div>
                                <div class="ten" style="margin-top:60%;"><a href="#"><?php echo $sp["ten"] ?></a></div>
                                <div class="gia"><a href="#"><?php echo number_format($sp['gia'],0,",",".") ?></a></div>
                                
                            </div>
                            <?php
                        }
                    }
                }
            ?>
        </div>
    </div>
    <div class="element">
        <div class="wrapper">
            <a href="#">
                
                xem them
                
            </a>
        </div>
    </div>
</div>


