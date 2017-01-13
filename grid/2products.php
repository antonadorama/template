<?php 
	
  $pb2_product1 = array(
 
	 "product_name" => "SanDisk 32GB Imaging Ultra microSDHC UHS-I Class 10 Memory Card, 80MB/s, with SD Adapter",
	 "product_link" => "https://www.adorama.com/idsiumsan32g.html",
	 "product_image" => "https://www.adorama.com/images/Large/idsiumsan32g.jpg",
	 "rating_image" => "https://adorama.hosted.strongview.com:8443/sm/image_library/org_1/736/reviews_5star.png",
	 "old_price" => "$13.95",
	 "product_price" => "$9.95",
	 "additional_info" => "Free Shipping<br /><br />"
 
 );


$pb2_product2 = array(
 
	 "product_name" => "SanDisk 256GB Ultra microSDXC UHS-I Class 10 Memory Card, 90MB/s, with SD Card Adapter",
	 "product_link" => "http://www.adorama.com/idsiums256gb.html",
	 "product_image" => "https://www.adorama.com/images/Large/idsiums256gb.jpg",
	 "rating_image" => "https://adorama.hosted.strongview.com:8443/sm/image_library/org_1/736/reviews_5star.png",
	 "old_price" => "$199.95",
	 "product_price" => "$179.95",
	 "additional_info" => "<br /><br />"
 
 );

?>

<table role="presentation" width="300" cellspacing="0" cellpadding="0" border="0" align="center" style="max-width:300px; width:100%;">
							<tbody>
								<tr>
									<td style="" valign="top" class="title" style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; color: #000001">
                   <span><?php echo $pb2_product1['product_name'];?></span>
									</td>
								</tr>
								<tr>
									<td align="center">
										<a href="<?php echo $pb2_product1['product_link'];?>" linkname="P_Image_gph5b_<?php echo $text['link_name'];?>" target="_blank" class="post-clickout" rel="nofollow">
											<img alt="<?php echo $pb2_product1['product_name'];?>" src="<?php echo $pb2_product1['product_image'];?>" style="display: block;" width="150" height="150">
										</a>
									</td>
								</tr>
								<tr>
                <td align="center">
									<a href="<?php echo $pb2_product1['product_link']; ?>">
									<img src="<?php echo $pb2_product1['rating_image']; ?>" style="margin:0; padding:0; border:none; display:block;" width="78" height="17" border="0" alt="" />
									</a>
								</td>
                </tr>
								<tr>
									<td  style="color: #adadad;font-weight: 400;font-size: 13px;font-family: 'Montserrat', Arial;text-transform: none;text-align: center;text-decoration: line-through;" class="old_price">
										<strong><?php echo $pb2_product1['old_price'];?></strong>
									</td>
								</tr>
								<tr>
									<td style="font-weight: 400;font-size: 18px;font-family: 'Montserrat', Arial;text-transform: none;text-align: center;" class="new_price">
										<strong><?php echo $pb2_product1['product_price'];?></strong>
									</td>
								</tr>
								<tr>
									<td style="display: block; color: #f7b45e; font-size: 14px; font-family: 'Dancing Script', cursive; text-transform: none; text-align: center;" class="add_info">
										<?php echo $pb2_product1['additional_info'];?>
									</td>								
								</tr>
								<tr>
									<td>
									<table width="100" cellspacing="0" cellpadding="0" border="0" align="center" style="max-width:100px; width:100%;" class="Btn135">
                    <tbody>
                    <tr>
                    <td align="center" bgcolor="#87c427" style="margin: 0 auto 0; padding-top: 10px; padding-bottom: 10px; font-family: 'Montserrat', Arial; text-transform: uppercase; text-decoration: none; color: #ffffff;">
											<a style="text-transform: uppercase; text-decoration: none; color: #ffffff;" href="<?php echo $pb2_product1['product_link']; ?>"> 
												<strong>buy now</strong>
											</a>
											</td>
                    </tr>
                    </tbody>
                    </table>
									</td>
								</tr>
							</tbody>
						</table>