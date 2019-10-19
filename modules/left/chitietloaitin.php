<?php
	$sql="select * from baiviet WHERE idloaitin ='$_GET[id]' order by idbaiviet asc";
	$baiviet=mysqli_query($conn,$sql);

?>
<div class="boxloaitin">
	<div class="box-right" style="width:auto">
     <?php
				
			while ($dong= mysqli_fetch_array($baiviet)){
	?>
                	
                    	<div class="boxtin">
                        	<img src="<?php echo $dong['anhminhhoa']?>" />
                            <p><a href="index.php?xem=baiviet&id=<?php echo $dong['idbaiviet']?>">
                        <?php echo $dong['tenbaiviet'] ?>
                        	</p>
                            <p><?php echo $dong['tomtat'] ?>  
                            </p>
                            <div class="xoa"></div>
                        </div>
                <?php
				}
                ?>  
      </div>
</div>