<?php
	$sql='select * from baiviet WHERE idloaitin = 28 order by idbaiviet desc limit 5';
	$baiviet=mysqli_query($conn,$sql);

?>
<div class="box nopadding noborder">
	<div class="tieudebox">
     <p class="tieude2"> Tin cập nhật</p></div>
       <div class="box-right" style="width:auto">
                	 <?php
				
					 while ($dong= mysqli_fetch_array($baiviet)){
					?>
                    	<div class="boxtin">
                        	<img src="<?php echo $dong['anhminhhoa']?>" />
                            <p> <a href="index.php?xem=baiviet&id=<?php echo $dong['idbaiviet']?>">
                        <?php echo $dong['tenbaiviet'] ?>
                        
                         </a></p>
                            <div class="xoa"></div>
                        </div>
                      <?php
					 }
					 ?>
                        
                </div>
               
</div>