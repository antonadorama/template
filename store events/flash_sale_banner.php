<?php 
  
  $banner_data = array (
  
    "desktop_image" => "https://asset1.basecamp.com/2599005/projects/8014995/attachments/266813374/81de798eedb8e17ba84237bdf98e8c840010/large.jpg",
    "mobile_image" => "https://asset1.basecamp.com/2599005/projects/8014995/attachments/266813380/21de6f7579ffc8bd1e0ea5766af8d34d0010/original/adorama_1-11_flashsale_mobile_non-vip.jpg",
    "banner_link" => "https://www.adorama.com/bgmt190goaba.html?emailprice=t",
    "alt" => "Manfrotto 190Go"
  
  );


?>					



<!-- Banner -->
					<table border="0" cellpadding="0" cellspacing="0" class="mobno" width="638">
						<tbody>
							<tr>
								<td>
									<a href="<?php echo $banner_data['banner_link'];?>&utm_source=slgt&utm_medium=email&utm_term=VIP360&utm_content=Body&utm_campaign=<?php echo $text['utm_compaign']; ?>" linkname="<?php echo $text['link_name']; ?>" target="_blank">
										<img alt="<?php echo $banner_data['alt'];?>" border="0" height="auto" src="<?php echo $banner_data['desktop_image'];?>" style="display: block" width="640" />
									</a>
								</td>
							</tr>
						</tbody>
					</table>
					<!--REVEAL MOBILE 250px IMAGE-->
					<!--[if !mso]>
					<!-->
					<table align="center" bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0" class="fluid" style="display: none">
						<tbody>
							<tr class="show" style="overflow: hidden; width: 0px; float: left; display: none; max-height: 0px; mso-hide: all">
								<td class="cta">
									<table align="center" border="0" cellpadding="0" cellspacing="0" width="320">
										<tbody>
											<tr>
												<td>
													<a href="<?php echo $banner_data['banner_link'];?>&utm_source=slgt&utm_medium=email&utm_term=VIP360&utm_content=Body&utm_campaign=<?php echo $text['utm_compaign']; ?>" linkname="<?php echo $text['link_name']; ?>" target="_blank">
														<img alt="<?php echo $banner_data['alt'];?>" border="0" height="auto" src="<?php echo $banner_data['desktop_image'];?>" style="display: block" width="320" />
													</a>
												</td>
											</tr>
										</tbody>
									</table>
								</td>
							</tr>
						</tbody>
					</table>
					<!--
					<![endif]-->
					<!--END REVEAL ON MOBILE--->
					<!-- END Banner -->