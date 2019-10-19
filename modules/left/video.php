<?php
	$sql='select * from baiviet WHERE idloaitin = 30 order by idbaiviet asc limit 12';
	$baiviet=mysqli_query($conn,$sql);

?>
        	<div class="box nopadding noborder" style="margin-top:10px">
            	<div class="tieudebox">
                <p class="tieude2"> VIDEO</p>
                </div>
                <video width="650" controls>
  <source src="img/video1.mp4" type="video/mp4">
 
</video>
                <?php
		   		$dong= mysqli_fetch_array($baiviet);
		   		?>
                
            	
                <div class="box-rightvideo">
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
            