<?php

	$sql="select * from baiviet where idbaiviet=$_GET[id]" ;
	$baiviet=mysqli_query($conn,$sql);

?>

<div class="boxchitiet" >
 
	<div class="box-right" style="width:auto">
    
                	<?php
				
			$dong= mysqli_fetch_array($baiviet)
	?>
                    	<div class="boxtinchitiet">
                        	
                        	<img src="<?php echo $dong['anhminhhoa']?>" />
                            <p>
                        <?php  echo $dong['tenbaiviet'] ?>
                        	</p>
                         
                            <p>  <?php echo $dong['tomtat']?></p>
                            <div class="xoa"></div>
                            <br />
                            <p>  <?php echo $dong['noidung']?></p>
                            <div class="xoa"></div>
                  
                            
                        </div>
             
                </div>
</div>