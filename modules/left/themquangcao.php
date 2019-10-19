
<?php
	if(isset($_GET['trang'])){
		$get_trang=$_GET['trang'];
		
	}else{
		$get_trang='';
	}
	if($get_trang==''||$get_trang=='1'){
				 $trang1=0;
			 }else{
				 $trang1=($get_trang*10)-10;
			 }
			 
	$sql="select * from sanpham limit $trang1,10";
	$sanpham=mysqli_query($conn,$sql);

?>
<div class="box">
	<div class="boxsp" style="width:auto">
     <?php
				
			while ($dong= mysqli_fetch_array($sanpham)){
	?>
                	
                    	<div class="boxtin">
                        	<img style="width:150px; height:150px" src="<?php echo $dong['anhsanpham']?>" title="<?php echo $dong['tensanpham'] ?>"/>
                            <p><a href="index.php?xem=quangcao&id=<?php echo $dong['idsanpham']?>" >
                            Tên sản phẩm:
                        <?php echo $dong['tensanpham'] ?>
                        	</a></p>
                           
                            <p style="color:#F00"> Giá:<?php echo $dong['gia'] ?>VND  
                            </p> 
                           
                            <div class="xoa"></div>
                        </div>
                <?php
				}
                ?>  
                
      </div>
      <div class="trang">
      <p>
      Trang:
      <?php
	$sql_trang="select * from sanpham";
	$query_trang=mysqli_query($conn,$sql_trang);
	$count=mysqli_num_rows($query_trang);
	$a=ceil ($count/10)	;
	for($b=1;$b<=$a;$b++){
		echo ' <a href="index.php?xem=themquangcao&trang='.$b.'">'.$b.'</a>'.' ' ;
					}

?>
      </p>
      </div>
</div>


