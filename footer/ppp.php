<?php 
	
  $pb_product1 = array(
 
	 "product_name" => "Canon imageCLASS MF247dw All-in-One Monochrome Laser Printer",
	 "product_link" => "http://www.adorama.com/icamf247dw.html",
	 "product_image" => "https://www.adorama.com/images/Large/icamf247dw_2.jpg",
	 "rating_image" => "https://adorama.hosted.strongview.com:8443/sm/image_library/org_1/736/reviews_5star.png",
	 "old_price" => "$249.00",
	 "product_price" => "$174.00",
	 "additional_info" => "Free Shipping<br /><br />"
 
 );


$pb_product3 = array(
 
	 "product_name" => "Epson WorkForce WF-3620 All-in-One Inkjet Printer <br /><br />",
	 "product_link" => "https://www.adorama.com/ieswf3620.html",
	 "product_image" => "https://www.adorama.com/images/Large/ieswf3620_1.jpg",
	 "rating_image" => "https://adorama.hosted.strongview.com:8443/sm/image_library/org_1/736/reviews_4-5star.png",
	 "old_price" => "$169.99",
	 "product_price" => "$89.99",
	 "additional_info" => "with Free $60 Adorama Gift Certificate"
 
 );

$pb_product2 = array(
 
	 "product_name" => "Xerox DocuMate 3120 Sheetfed Scanner <br /><br />",
	 "product_link" => "https://www.adorama.com/xedm3120u.html",
	 "product_image" => "https://www.adorama.com/images/Large/xedm3120u.jpg",
	 "rating_image" => "https://adorama.hosted.strongview.com:8443/sm/image_library/org_1/736/reviews_5star.png",
	 "old_price" => "$379.99",
	 "product_price" => "$219.99",
	 "additional_info" => "<br /><br />"
 
 );

?>

<style>

	@media only screen and (max-width: 450px) {
        image {
            max-width: 100%;
            height: auto !important;
        }
		

    }
	
</style>

<table role="presentation" width="200" cellspacing="0" cellpadding="0" border="0" align="center" style="max-width:200px; width:100%;">
	<tbody>
		<tr>
			<td style="" valign="top" class="title" style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; color: #000001">
				<span><?php echo $pb_product3['product_name'];?></span>
			</td>
		</tr>
		<tr>
			<td align="center">
				<a href="<?php echo $pb_product3['product_link'];?>" linkname="P_Image_gph5b_<?php echo $text['link_name'];?>" target="_blank" class="post-clickout" rel="nofollow">
					<img alt="<?php echo $pb_product3['product_name'];?>" src="<?php echo $pb_product3['product_image'];?>" style="margin:0; padding:0; border:none; display:block;" width="80" height="80" />
				</a>
			</td>
		</tr>
		<tr>
			<td align="center">
				<a href="<?php echo $pb_product3['product_link']; ?>">
					<img src="<?php echo $pb_product3['rating_image']; ?>" style="margin:0; padding:0; border:none; display:block;" width="78" height="17" border="0" alt="" />
				</a>
			</td>
		</tr>
		<tr>
			<td style="color: #adadad;font-weight: 400;font-size: 13px;font-family: 'Montserrat', Arial;text-transform: none;text-align: center;text-decoration: line-through;" class="old_price">
				<strong><?php echo $pb_product3['old_price'];?></strong>
			</td>
		</tr>
		<tr>
			<td style="font-weight: 400;font-size: 18px;font-family: 'Montserrat', Arial;text-transform: none;text-align: center;" class="new_price">
				<strong><?php echo $pb_product3['product_price'];?></strong>
			</td>
		</tr>
		<tr>
			<td class="add_info" style="display: block; color: #f7b45e; font-size: 18px; font-family: Dancing Script, cursive; text-transform: none; text-align: center;">
				<?php echo $pb_product3['additional_info'];?>
			</td>
		</tr>
		<tr>
			<td align="center">
							<table width="80" height="" cellpadding="0" cellspacing="0" border="0" bgcolor="#87c427" style="border-radius:4px;">
								<tr>
									<td align="center" valign="middle" height="20" style="font-family: Arial, sans-serif; font-size:14px; font-weight:bold; color:#ffffff; text-decoration: none;">
										<a href="<?php echo $npa_product1['product_link']; ?>" class="btn45" target="_blank" 
											 style="font-family: 'Montserrat', Arial, sans-serif; color:#ffffff !important; 
															display: inline-block; text-decoration: none !important; line-height:20px;
															padding:5px;
															width:80px; font-weight:bold; text-transform: uppercase !important;">
											Buy Now
										</a>
    							</td>
  							</tr>
							</table>
			</td>
		</tr>
	</tbody>
</table>