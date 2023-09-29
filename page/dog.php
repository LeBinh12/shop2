
<div class="dog-menu">
<ul>
<?php

    $sql = "select * from dog where trangthai=0";

    if($r = mysqli_query($conn,$sql)){
        if(mysqli_num_rows($r)>0){
            while($row = mysqli_fetch_array($r)){
                ?>
                <li>
                    <a href="#"><?php echo $row['giong'] ?></a>
                </li>
                <?php
            }
        }
    }

?>
</ul>
</div>