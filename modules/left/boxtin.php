<?php
	$sql='select * from baiviet WHERE idloaitin = 27 order by idbaiviet desc limit 12';
	$baiviet=mysqli_query($conn,$sql);

?>
        	<div class="box nopadding noborder" style="margin-top:10px">
            	<div class="tieudebox">
                <p class="tieude2"> Tin tức - Sự kiện</p>
                </div>
                <?php
		   		$dong= mysqli_fetch_array($baiviet);
		   		?>
            	<div class="box-left">
                	<img src="<?php echo $dong['anhminhhoa']?>"/>
                    <p class="tieude"> <a href="index.php?xem=baiviet&id=<?php echo $dong['idbaiviet']?>">
                   
                        <?php echo $dong['tenbaiviet'] ?>
                        
                         </a>
                      </p>
                    <p class="tomtat"><?php echo $dong['tomtat']?> </p>
                </div>
                <div class="box-right">
                <?php
				
					 while ($dong= mysqli_fetch_array($baiviet)){
					?>
                	
                    	<div class="boxtin">
                        	<img src="<?php echo $dong['anhminhhoa']?>" />
                            <p> <a href="index.php?xem=baiviet&id=<?php echo $dong['idbaiviet']?>">
                        <?php echo $dong['tenbaiviet'] ?></p>
                            <div class="xoa"></div>
                        </div>
                        
                      <?php
					 }
					 ?>
                        </div>
                        
                </div>
                <div class="xoa"></div>
            