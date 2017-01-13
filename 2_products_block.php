<?php 
	
  $pb2_product1 = array(
 
	 "product_name" => "SanDisk 32GB Imaging Ultra microSDHC UHS-I Class 10 Memory Card, 80MB/s, with SD Adapter",
	 "product_link" => "https://www.adorama.com/idsiumsan32g.html",
	 "product_image" => "https://www.adorama.com/images/Large/idsiumsan32g.jpg",
	 "rating_image" => "image_library/org_1/736/reviews_5star.png",
	 "old_price" => "$13.95",
	 "product_price" => "$9.95",
	 "additional_info" => "Free Shipping<br /><br />"
 
 );


$pb2_product2 = array(
 
	 "product_name" => "SanDisk 256GB Ultra microSDXC UHS-I Class 10 Memory Card, 90MB/s, with SD Card Adapter",
	 "product_link" => "http://www.adorama.com/idsiums256gb.html",
	 "product_image" => "https://www.adorama.com/images/Large/idsiums256gb.jpg",
	 "rating_image" => "image_library/org_1/736/reviews_5star.png",
	 "old_price" => "$199.95",
	 "product_price" => "$179.95",
	 "additional_info" => "<br /><br />"
 
 );

?>

<style>
	.column2 {
		
		width:50%;
		text-align:center;
		padding-top:10px;
		
				
	}


	
</style>
				<tr>
					<td align="center">
						<span style="padding-top:10px; display: block; color: #f7b45e; font-size: 24px; font-family: 'Dancing Script', cursive;  text-transform: none; text-align: center; line-height: 36px;">
							Memory &#38; Storage
						</span>
					</td>
		    </tr>
<tr>
  <td>
    <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
      <tbody>

        <tr style="margin-top:10px;">
					<!-- Column 1 -->
					<td class="column2">
					<table>
							<tbody>
								<tr>
									<td style="" valign="top" class="title" style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; color: #000001">
                   <span><?php echo $pb2_product1['product_name'];?></span>
									</td>
								</tr>
								<tr>
									<td align="center">
										<a href="<?php echo $pb2_product1['product_link'];?>" linkname="P_Image_gph5b_<?php echo $text['link_name'];?>" target="_blank" class="post-clickout" rel="nofollow">
											<img alt="<?php echo $pb2_product1['product_name'];?>" src="<?php echo $pb2_product1['product_image'];?>" style="display: block" width="200px" height="auto">
										</a>
									</td>
								</tr>
								<tr>
                <td align="center">
									<a href="<?php echo $pb2_product1['product_link']; ?>">
									<img src="<?php echo $pb2_product1['rating_image']; ?>" style="margin: 0 auto; display: block" border="0" alt="<?php echo $pb2_product1['product_name'];?>" />
									</a>
								</td>
                </tr>
								<tr>
									<td style="" class="old_price">
										<strong><?php echo $pb2_product1['old_price'];?></strong>
									</td>
								</tr>
								<tr>
									<td style="" class="new_price">
										<strong><?php echo $pb2_product1['product_price'];?></strong>
									</td>
								</tr>
								<tr>
									<td style="" class="add_info">
										<?php echo $pb2_product1['additional_info'];?>
									</td>								
								</tr>
								<tr>
									<td align="center" bgcolor="#87c427" style="" class="btn4">
										<a href="<?php echo $pb2_product1['product_link'];?>" linkname="P_CTA_gph5b_<?php echo $text['link_name'];?>"  rel="nofollow">
											BUY NOW
										</a>
									</td>
								</tr>
							</tbody>
						</table>
					</td>
					<!-- End Column 1 -->
					<!-- Column 2 -->
					<td class="column2">
						<table>
							<tbody>
								<tr>
									<td style="" valign="top" class="title" style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; color: #000001">
                   <span><?php echo $pb2_product2['product_name'];?></span>
									</td>
								</tr>
								<tr>
									<td align="center">
										<a href="<?php echo $pb2_product2['product_link'];?>" linkname="P_Image_gph5b_<?php echo $text['link_name'];?>" target="_blank" class="post-clickout" rel="nofollow">
											<img alt="<?php echo $pb2_product2['product_name'];?>" src="<?php echo $pb2_product2['product_image'];?>" style="display: block" width="200px" height="auto">
										</a>
									</td>
								</tr>
								<tr>
                <td align="center">
									<a href="<?php echo $pb2_product2['product_link']; ?>">
									<img src="<?php echo $pb2_product2['rating_image']; ?>" style="margin: 0 auto; display: block" border="0" alt="<?php echo $pb2_product2['product_name'];?>" />
									</a>
								</td>
                </tr>
								<tr>
									<td style="" class="old_price">
										<strong><?php echo $pb2_product2['old_price'];?></strong>
									</td>
								</tr>
								<tr>
									<td style="" class="new_price">
										<strong><?php echo $pb2_product2['product_price'];?></strong>
									</td>
								</tr>
								<tr>
									<td style="" class="add_info">
										<?php echo $pb2_product2['additional_info'];?>
									</td>								
								</tr>
								<tr>
									<td align="center" bgcolor="#87c427" style="" class="btn4">
										<a href="<?php echo $pb2_product2['product_link'];?>" linkname="P_CTA_gph5b_<?php echo $text['link_name'];?>"  rel="nofollow">
											BUY NOW
										</a>
									</td>
								</tr>
							</tbody>
						</table>
					</td>
					<!-- End Column 2 -->
					
				</tr>
			</tbody>
    </table>
  </td>
</tr>