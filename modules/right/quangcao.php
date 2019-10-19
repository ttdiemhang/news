<?php
	$sql='select * from sanpham order by idsanpham desc limit 4' ;
	$sanpham=mysqli_query($conn,$sql);

?>

<div class="boxqc nopadding noborder" >
	<div class="tieudebox">
     <p class="tieude2"> Quảng cáo </p></div>
       <div class="sanphamall" >
          <ul>
           <?php
				
				 while ($dong= mysqli_fetch_array($sanpham)){
		?>  
           <li><a href="index.php?xem=quangcao&id=<?php echo $dong['idsanpham']?>" title="<?php echo $dong['tensanpham'] ?>">
           	<img src="<?php echo $dong['anhsanpham']?>" width="160" height="140"><br /><br /><br />
   
            Tên sản phẩm:<?php echo $dong['tensanpham']?>
            <p>Giá:<?php echo $dong['gia']?>VND</p>
            </a>
            </li>
           <?php
				 }
		   ?>
           
           <ul>
            
      </div>    
           <div class="xemthem">
           <p style="float:right; font-size:20px;"><a href="index.php?xem=themquangcao"> Xem thêm >></a> </p></div>
</div>
