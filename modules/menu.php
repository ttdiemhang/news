<?php

	$sql="select * from loaitin where idloaitin order by thutu asc limit 6";
	
	$loaitin= mysqli_query($conn,$sql);
?>

<div id="menu">
    <ul>
    	<a href="index.php">
    		<li>
            	 Trang chủ
             </li>
         </a>
        <?php
				
				 while ($dong= mysqli_fetch_array($loaitin)){
		?>  	
              <li> <a href="index.php?xem=loaitin&id=<?php echo $dong['idloaitin']?>"> 
            <?php echo $dong['tenloaitin'] ?>
            
            	</a>  

		</li>
        <?php
		}
		 ?>

<a href="index.php?xem=giohang">
    		<li>
            	 Giỏ hàng
             </li>
         </a>
        
            <form action="index.php" method="post" enctype="multipart/form-data">
            <div class="searchform">
            <input type="text" id="searchf" name="searchtext" size="15" /><input type="submit" id="searchbtn" name="search" value="Search" placeholder="Search..." />
            	
            </div>   
            </form>
      </ul>
       
    </div>
