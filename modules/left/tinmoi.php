<?php
	$sql='select * from baiviet order by idbaiviet desc limit 10';
	$baiviet=mysqli_query($conn,$sql);

?>
        	<div class="box" >
            
           <?php
		   $dong= mysqli_fetch_array($baiviet);
		   ?>
            	<div class="box-left">
                	<img src="<?php echo $dong['anhminhhoa'] ?>"/>
                    <p class="tieude">
                    	<a href="index.php?xem=baiviet&id=<?php echo $dong['idbaiviet']?>" >
                        <?php echo $dong['tenbaiviet'] ?>
                        
                         </a>
                     </p>
                    <p class="tomtat"><?php echo $dong['tomtat']?></p>
                </div>
                <div class="box-right">
                	<ul>
                    <?php
					 while ($dong= mysqli_fetch_array($baiviet)){
					?>
                    	<li>
                        	<a href="index.php?xem=baiviet&id=<?php echo $dong['idbaiviet']?>">
						<?php echo $dong['tenbaiviet']?>
                        	</a>
                        </li>
                     <?php
					 }
					?>
                       
                    </ul>
                </div>
                <div class="xoa"></div>
            </div>