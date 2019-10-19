<?php
	if(isset($_POST['search'])){
		$search=$_POST['searchtext'];
		$sql_search="select * from baiviet where tenbaiviet LIKE '%$search%'";
		$query_search=mysqli_query($conn,$sql_search);
	}

?>
<div class="boxloaitin">
	<div class="box-right" style="width:auto">
     <?php
	 
			 if($count=mysqli_num_rows($query_search)==0){?>
				 <p>Không tìm thấy bài viết nào</p>
			 <?php
			 }else{
			 ?>
     <?php
				
			while ($dong_search= mysqli_fetch_array($query_search)){
	?>
                	
                    	<div class="boxtin">
                        	<img src="<?php echo $dong_search['anhminhhoa']?>" />
                            <p><a href="index.php?xem=baiviet&id=<?php echo $dong_search['idbaiviet']?>">
                        <?php echo $dong_search['tenbaiviet'] ?>
                        	</p>
                            <p><?php echo $dong_search['tomtat'] ?>  
                            </p>
                            <div class="xoa"></div>
                        </div>
                <?php
				}
			 }
                ?>  
      </div>
</div>