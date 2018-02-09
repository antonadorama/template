<?xml version="1.0" encoding="UTF-8" ?>
<!DOCTYPE xsl:stylesheet>

<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0" xmlns:msxsl="urn:schemas-microsoft-com:xslt" exclude-result-prefixes="msxsl">

  <xsl:variable name="company" select="/Email/EmailBody/OrderConfirmationEmailBody/Company/CompanyName" />
  <xsl:variable name="FundsAvailableLabel" select="/Email/EmailBody/OrderConfirmationEmailBody/FundsAvailableLabel" />
  <xsl:variable name="CompanyFreePhone" select="/Email/EmailBody/OrderConfirmationEmailBody/Company/CompanyFreePhone" />
  <xsl:variable name="CompanyAddress" select="/Email/EmailBody/OrderConfirmationEmailBody/Company/CompanyAddress" />
  <xsl:variable name="CompanyCity" select="/Email/EmailBody/OrderConfirmationEmailBody/Company/CompanyCity" />
  <xsl:variable name="CompanyState" select="/Email/EmailBody/OrderConfirmationEmailBody/Company/CompanyState" />
  <xsl:variable name="CompanyZipCode" select="/Email/EmailBody/OrderConfirmationEmailBody/Company/CompanyZipCode" />
  <xsl:variable name="CompanyEmailInfo" select="/Email/EmailBody/OrderConfirmationEmailBody/Company/CompanyEmailInfo" />
  <xsl:variable name="email" select="/Email/EmailBody/EmailBody/OrderConfirmationEmailBody/Company/CompanyEmailCustomerService" />
  <xsl:variable name="CompanyUrl" select="/Email/EmailBody/OrderConfirmationEmailBody/Company/CompanyUrl" />
  <xsl:variable name="EmailAddress" select="/Email/EmailBody/OrderConfirmationEmailBody/EmailAddress" />
  <xsl:variable name="CompanyEmailCustomerService" select="/Email/EmailBody/OrderConfirmationEmailBody/Company/CompanyEmailCustomerService" />
  <xsl:variable name="ViewOnlineLinkUrl" select="/Email/EmailBody/OrderConfirmationEmailBody/ViewOnlineLink" />
  <xsl:variable name="ItemReturned" select="/Email/EmailBody/OrderConfirmationEmailBody/ItemReturned" />
  <xsl:variable name="shipMethod" select="/Email/EmailBody/OrderConfirmationEmailBody/Order/ShipMethod" />
  <xsl:variable name="dutyTotal" select="/Email/EmailBody/OrderConfirmationEmailBody/Order/DutyTotal" />
  <xsl:include href="EMWBase/ResponsiveEMWBase.xslt" />
  <xsl:variable name="areAllItemsDswGiftsAndNl" select ="count(/Email/EmailBody/OrderConfirmationEmailBody/OrderItems/OrderConfirmationItem) = count(/Email/EmailBody/OrderConfirmationEmailBody/OrderItems/OrderConfirmationItem/IsGiftViaEmail[.='true']) + count(/Email/EmailBody/OrderConfirmationEmailBody/OrderItems/OrderConfirmationItem/ProductId[starts-with(., 'NL')]) + count(/Email/EmailBody/OrderConfirmationEmailBody/OrderItems/OrderConfirmationItem/ProductId[starts-with(., 'DSW')])"/>
  <xsl:variable name="areAllItemsVirtual" select ="count(/Email/EmailBody/OrderConfirmationEmailBody/OrderItems/OrderConfirmationItem) = count(/Email/EmailBody/OrderConfirmationEmailBody/OrderItems/OrderConfirmationItem/IsVirtualItem[.='true'])"/>


  <xsl:variable name="tableWidth">
    <xsl:value-of select="'100%'" />
  </xsl:variable>

  <xsl:variable name="tdWidth">
    <xsl:value-of select="'100%'" />
  </xsl:variable>

  <xsl:template match="/">
    <html xmlns="http://www.w3.org/1999/xhtml">
      <head>
        <title>
          <xsl:value-of select="Email/EmailBody/OrderConfirmationEmailBody/Title" />
        </title>
        <xsl:call-template name="HeadResponsiveStyle" />
      </head>
      <body style="{$bodyResponsiv}">
        <xsl:call-template name="ResponsiveHeader" />
        <table class="main-wrap" style="{$mainWrap}">
          <tr style="{$trbody}">
            <td class="body" style="{$tdbody}">
              <div class="content" align="center" style="{$content}">
                <xsl:apply-templates select="Email/EmailBody/OrderConfirmationEmailBody" />
              </div>
            </td>
          </tr>
        </table>
        <xsl:call-template name="ResponsiveFooter" />
      </body>
    </html>
  </xsl:template>



  <xsl:template match="OrderConfirmationEmailBody">
    <table align="center" cellpadding="0" cellspacing="0" width="500" style="border-spacing:0;margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;padding-top:0px;padding-right:0;padding-left:0;padding-bottom:18px;">
      <tr style="{$baseCSS}">
        <td style="font-family:'Open Sans',sans-serif;border-spacing:0;margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;border-collapse:collapse;">
          <table class="product-list-row" align="left" cellpadding="0" cellspacing="0"  style="border-spacing:0;text-align:center;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;margin-top:8px;margin-bottom:8px;margin-right:0;margin-left:0;">
            <tr style="{$baseCSS}">
              <td class="plr-td" style="{$plrTD}">
                <xsl:call-template name="MainMessage" />
              </td>
            </tr>
          </table>
          <!--<table cellpadding="0" cellspacing="0"  valign="top" align="center" style="padding-top:8px;">
            <tr>
              <td>
                <table class="product superspecial" width="200" valign="top" align="right"  style="border-color: rgb(121, 132, 142); margin: 0px 10px; padding: 0px; border-collapse: collapse; border-spacing: 0;">
                  <tbody>
                    <tr style="{$baseCSS};">
                      <td align="center" height="200" valign="top" width="100%" style="font-family:'Open Sans',sans-serif;margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;border-collapse:collapse;padding-top:0;padding-bottom:12px;padding-right:0;padding-left:0;vertical-align:top;border-spacing:0;text-align:center;">
                        <xsl:call-template name="Magazine" />
                        <xsl:call-template name="EmailUpdatesInOrderConfirmation" />
                      </td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>
          </table>-->
        </td>
      </tr>
    </table>
  </xsl:template>

  <xsl:template name="MainMessage">

    <table class="product superspecial" cellpadding="0" cellspacing="0" align="left" width="{$tableWidth}" style="{$productSuperspecial}">
      <tbody>
        <tr style="{$baseCSS}">
          <td class="padded-td" align="center" style="{$paddedTd}">
            <table class="product-list-row"  cellpadding="0" cellspacing="0" align="left" width="{$tableWidth}" style="{$productListRow}">
              <tr style="{$baseCSS}">
                <td class="plr-td" width="{$tableWidth}" style="border-spacing:0;margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;border-collapse:collapse;padding-top:32px;padding-bottom:13px;padding-right:0;padding-left:0; text-align:left;">
                  <xsl:call-template name="DutiesAndTaxes" />
                  <xsl:call-template name="ReceivMessage" />
                  <h2 class="main-title" style="{$mainTitle}">
                    <font id="orderSummarySectionName" face="'Open Sans', Arial, sans-serif">
                      Order Summary
                    </font>
                  </h2>
                  <p style="margin-bottom:0px;margin-top:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;font-weight:normal;font-size:16px;line-height:1.35;color:#333e49;text-align:left;">
                    <font face="'Open Sans', Arial, sans-serif" style="font-weight: bold;">Order Number: </font>
                    <font id="orderNumber" face="'Open Sans', Arial, sans-serif">
                      <xsl:value-of select="Order/IntOrderNumber"/>
                    </font>
					<br />
					<font face="'Open Sans', Arial, sans-serif" style="font-weight: bold;">Order Date: </font>
                    <font id="orderDate" face="'Open Sans', Arial, sans-serif">
                      <xsl:value-of select="Order/OrderDate"/>
                    </font>
                  </p>
                  <br/>
                  <xsl:if test = "CustomerName != ''">
                    <p style="margin-bottom:0px;margin-top:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;font-weight:normal;font-size:16px;line-height:1.35;color:#333e49;text-align:left;">
                      <font face="'Open Sans', Arial, sans-serif">
                        Hi <xsl:value-of select="CustomerName" />,
                      </font>
                    </p>
                    <br />
                  </xsl:if>
                  <font id="thanksForShopping" face="'Open Sans', Arial, sans-serif" style="{$textStyle}">
                    Thanks for shopping with <xsl:value-of select="$company"/>
                  </font>
                </td>
              </tr>
            </table>

            <xsl:call-template name="WhatNextMessage" />
          </td>
        </tr>
        <tr style="{$baseCSS}">
          <td class="plr-td"  style="{$customPlrTD}">

            <table class="product-list-row"  width="{$tableWidth}" align="left" style="{$productListRow}">
              <tr style="{$baseCSS}">
                <td class="plr-td" width="{$tableWidth}" style="margin: 0px; padding-left: 0px;padding-right: 0px; text-align: left; border-collapse: collapse; border-spacing: 0; padding-top: 20px;padding-bottom: 20px;">
                  <table class="item-header" bgcolor="{$menuColor}" cellpadding="12" align="left" width="{$tableWidth}" style="margin: 0p; padding: 0px; border-radius: 4px 4px 0px 0px; width: 500px; color: rgb(255, 255, 255); clear: both; border-spacing: 0;">
                    <tbody>
                      <tr style="{$baseCSS}">
                        <td class="padded-td" style="{$productListRowTd}">
                          <h3 style="{$productListRowHeader}">
                            <font id="productInfoSectionName" face="'Open Sans', Arial, sans-serif">Product Information</font>
                          </h3>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </td>
              </tr>

              <tr style="{$baseCSS}">
                <td class="plr-td" width="{$tableWidth}" style="{$customPlrTD}">
                  <xsl:for-each select="OrderItems/OrderConfirmationItem">
                    <xsl:call-template name="OrderItems" />
                  </xsl:for-each>
                </td>
              </tr>

              <tr style="{$baseCSS}">
                <td class="plr-td" aligh="left" colspan="2" valigh="top" width="{$tableWidth}" style="margin: 0px; padding: 14px 0px; font-family:'Open Sans',Arial,sans-serif; border-collapse: collapse; border-spacing: 0;">
                  <xsl:if test="$company != 'AdoramaRentals' and Order/DeliveryMethod and Order/DeliveryMethod != ''">
                    <p id="shipMethod" style="margin-top:0; margin-bottom: 0; padding-bottom: 0; padding-top: 0; text-align:left;">
                      <span style="font-weight:bold; margin-top:0; margin-bottom: 0; padding-bottom: 0; padding-top: 0;">
                        <font face="'Open Sans', Arial, sans-serif" color="{$OrderColor}" style="font-weight:bold;">Delivery Method:&#160;</font>
                      </span>
                      <font face="'Open Sans', Arial, sans-serif">
                        <xsl:value-of select="Order/DeliveryMethod"/>
                      </font>
                      <xsl:if test="Order/Fallback = 'FreeFallback'">
                        <font face="'Open Sans', Arial, sans-serif"><![CDATA[ (FREE)]]></font>
                      </xsl:if>
                      <xsl:if test="/Email/EmailBody/OrderConfirmationEmailBody/Order/Fallback = 'Fallback'">
                        <font face="'Open Sans', Arial, sans-serif"><![CDATA[ (TBD)]]></font>
                      </xsl:if>
                    </p>
                  </xsl:if>
                </td>
              </tr>

              <tr style="{$baseCSS}">
                <td class="plr-td" width="{$tableWidth}" style="{$customPlrTD}">
                  <table class="width100" align="right" width="320" height="92" color="#006aad" style="height:92px; border-spacing:0;margin-top:0px;margin-bottom:0;margin-right:0;margin-left:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:24px; width:320px;">
                    <tbody>
                      <xsl:if test="ProductCoupons/AdoramaProductCoupon != ''">
                        <tr style="{$baseCSS}">
                          <td style="{$width100Td} white-space:nowrap;">
                            <p style="{$width100P}">
                              <font face="'Open Sans', Arial, sans-serif" color="{$OrderColor}" style="font-weight:bold;">Coupon:</font>
                            </p>
                          </td>
                          <td style="{$width100Td} white-space:nowrap;">
                            <font face="'Open Sans', Arial, sans-serif" style="{$width100P}">
                              <xsl:value-of select="ProductCoupons/AdoramaProductCoupon/CouponCode" />
                            </font>
                          </td>
                        </tr>
                      </xsl:if>

                      <tr style="{$baseCSS}">
                        <td style="{$width100Td} white-space:nowrap;">
                          <p style="{$width100P}">
                            <font face="'Open Sans', Arial, sans-serif" color="{$OrderColor}" style="font-weight:bold;">Order&#160;Subtotal:</font>
                          </p>
                        </td>
                        <td style="{$width100Td} white-space:nowrap;">
                          <font id="orderSubtotal" face="'Open Sans', Arial, sans-serif" style="{$width100P}">
                            $<xsl:value-of select="format-number(Order/SubTotal, '#,##0.00')"/>
                          </font>
                        </td>
                      </tr>

                      <xsl:if test="Order/DiscTotal > 0">
                        <tr style="{$baseCSS}">
                          <td style="{$width100Td} white-space:nowrap;">
                            <p style="{$width100P}">
                              <font face="'Open Sans', Arial, sans-serif" color="{$OrderColor}" style="font-weight:bold;">Coupon / Gift Card:</font>
                            </p>
                          </td>
                          <td style="{$width100Td} white-space:nowrap;">
                            <font id="giftAndCouponTotal" face="'Open Sans', Arial, sans-serif" style="{$width100P}">
                              -$<xsl:value-of select="format-number(Order/DiscTotal, '#,##0.00')"/>
                            </font>
                          </td>
                        </tr>
                      </xsl:if>
                      <xsl:if test="Order/DiscountTotal > 0">
                        <tr style="{$baseCSS}">
                          <td style="{$width100Td}">
                            <font face="'Open Sans', Arial, sans-serif" style="{$width100P}">
                              <font color="{$OrderColor}" style="font-weight:bold;">Military Discount:</font>
                            </font>
                          </td>
                          <td style="{$width100Td}">
                            <font id="militaryDiscount" face="'Open Sans', Arial, sans-serif" style="{$width100P}">
                              -$<xsl:value-of select="format-number(Order/DiscountTotal, '#,##0.00')" />
                            </font>
                          </td>
                        </tr>
                      </xsl:if>
                      <tr style="{$baseCSS}">
                        <td style="{$width100Td} white-space:nowrap;">
                          <p style="{$width100P}">
                            <font face="'Open Sans', Arial, sans-serif" color="{$OrderColor}" style="font-weight:bold;">Shipping Cost:</font>
                          </p>
                        </td>
                        <td style="{$width100Td} white-space:nowrap;">
                          <font id="shipTotal" face="'Open Sans', Arial, sans-serif" style="{$width100P}">
                            <xsl:choose>
                              <xsl:when test="$company != 'AdoramaRentals' and /Email/EmailBody/OrderConfirmationEmailBody/Order/Fallback != 'NotFallback'">
                                <xsl:if test="Order/Fallback = 'FreeFallback'">FREE</xsl:if>
                                <xsl:if test="Order/Fallback = 'Fallback'">TBD </xsl:if>
                              </xsl:when>
                              <xsl:otherwise>
                                $<xsl:value-of select="format-number(Order/ShipTotal, '#,##0.00')"/>
                              </xsl:otherwise>
                            </xsl:choose>
                          </font>
                        </td>
                      </tr>
					  
					  <xsl:if test="Order/ShippingCredit > 0">
                        <tr style="{$baseCSS}">
                          <td style="{$width100Td} white-space:nowrap;">
                            <p style="{$width100P}">
                              <font face="'Open Sans', Arial, sans-serif" color="{$OrderColor}" style="font-weight:bold;">Shipping Credit:</font>
                            </p>
                          </td>
                          <td style="{$width100Td} white-space:nowrap;">
                            <font face="'Open Sans', Arial, sans-serif" style="{$width100P}">
                              -$<xsl:value-of select="format-number(Order/ShippingCredit, '#,##0.00')" />
                            </font>
                          </td>
                        </tr>
                      </xsl:if>

                      <xsl:if test="Order/InstantSavings > 0">
                        <tr style="{$baseCSS}">
                          <td style="{$width100Td} white-space:nowrap;">
                            <p style="{$width100P}">
                              <font face="'Open Sans', Arial, sans-serif" color="{$OrderColor}" style="font-weight:bold;">Instant savings:</font>
                            </p>
                          </td>
                          <td style="{$width100Td} white-space:nowrap;">
                            <font id="instantSavingsTotal" face="'Open Sans', Arial, sans-serif" style="{$width100P}">
                              $<xsl:value-of select="format-number(Order/InstantSavings, '#,##0.00')" />
                            </font>
                          </td>
                        </tr>
                      </xsl:if>

                      <tr style="{$baseCSS}">
                        <td style="{$width100Td} white-space:nowrap;">
                          <p style="{$width100P}">
                            <font face="'Open Sans', Arial, sans-serif" color="{$OrderColor}" style="font-weight:bold;">Taxes:</font>
                          </p>
                        </td>
                        <td style="{$width100Td} white-space:nowrap;">
                          <font id="taxTotal" face="'Open Sans', Arial, sans-serif" style="{$width100P}">
                            $<xsl:value-of select="format-number(Order/TaxTotal, '#,##0.00')"/>
                          </font>
                        </td>
                      </tr>

                      <xsl:if test="Order/DutyTotal != ''">
                        <tr style="{$baseCSS}">
                          <td style="{$width100Td} white-space:nowrap;">
                            <p style="{$width100P}">
                              <font face="'Open Sans', Arial, sans-serif" color="{$OrderColor}" style="font-weight:bold;">Duties:</font>
                            </p>
                          </td>
                          <td style="{$width100Td} white-space:nowrap;">
                            <font id="dutyTotal" face="'Open Sans', Arial, sans-serif" style="{$width100P}">
                              $<xsl:value-of select="format-number(Order/DutyTotal, '#,##0.00')"/>
                            </font>
                          </td>
                        </tr>
                      </xsl:if>

                        <xsl:if test="Order/FundsAvailableDiscount > 0">
                        <tr style="{$baseCSS}">
                          <td style="{$width100Td} white-space:nowrap;">
                            <p style="{$width100P}">
                              <font face="'Open Sans', Arial, sans-serif" color="{$OrderColor}" style="font-weight:bold;">
                                <xsl:value-of select="$FundsAvailableLabel"/>:
                              </font>
                            </p>
                          </td>
                          <td style="{$width100Td} white-space:nowrap;">
                            <font id="fundsAvailableDiscount" face="'Open Sans', Arial, sans-serif" style="{$width100P}">
                              -$<xsl:value-of select="format-number(Order/FundsAvailableDiscount, '#,##0.00')"/>
                            </font>
                          </td>
                        </tr>
                      </xsl:if>

                      <tr style="{$baseCSS}">
                        <td style="{$width100Td} white-space:nowrap;">
                          <p style="{$width100P}">
                            <font face="'Open Sans', Arial, sans-serif" color="{$OrderColor}" style="font-weight:bold;">Total:</font>
                          </p>
                        </td>
                        <td style="{$width100Td} white-space:nowrap;">
                          <font id="grandTotal" face="'Open Sans', Arial, sans-serif" style="{$width100P}">
                            $<xsl:value-of select="format-number(Order/GrandTotal, '#,##0.00')"/>
                          </font>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </td>
              </tr>
            </table>
          </td>
        </tr>
        <tr style="{$baseCSS}">
          <td class="plr-td"  style="{$customPlrTD}">
            <xsl:call-template name="ShippingInfo" />
          </td>
        </tr>
        <tr style="{$baseCSS}">
          <td class="plr-td"  style="{$customPlrTD}">
            <xsl:call-template name="ReturnPolicy" />
          </td>
        </tr>
        <tr style="{$baseCSS}">
          <td class="plr-td"  style="{$customPlrTD}">
            <a href="/pages/usedQuote">
              <img src="https://www.adorama.com/col/UIimages/Confirmation-Email-Banner.jpg" style="max-width:100%;"/>
            </a>
          </td>
        </tr>
      </tbody>
    </table>


  </xsl:template>

  <xsl:template name="WhatNextMessage">
    <table class="item-header" cellspacing="0" bgcolor="{$menuColor}" cellpadding="12" align="left" width="{$tableWidth}" style="{$itemHeader}">
      <tr style="{$baseCSS}">
        <td class="padded-td" style="{$productListRowTd}">
          <h3 style="{$productListRowHeader}">
            <font id="whatsTheNextSectionName" face="'Open Sans', Arial, sans-serif">What's Next?</font>
          </h3>
        </td>
      </tr>
    </table>
    <table class="product-list-row"  width="{$tableWidth}" align="left" style="{$productListRow}">
      <tr style="{$baseCSS}">
        <td class="plr-td" width="{$tableWidth}" style="margin: 0px; padding-left: 0px;padding-right: 0px; text-align: left; border-collapse: collapse; border-spacing: 0; padding-top: 0;padding-bottom:0">
          <p style="margin-bottom:0;margin-top:10px;padding-bottom:0;padding-right:0;padding-left:10px;font-weight:normal;font-size:16px;line-height:1.3;color:#333e49;text-align:left;">
            <font id="infoForCustomer" face="'Open Sans', Arial, sans-serif"  style="margin-bottom:0;margin-top:0px;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;font-weight:normal;font-size:16px;line-height:1.3;color:#333e49;text-align:left;">
              Your order has been placed and will be processed as soon as possible.<br/>
              <br/>
              <xsl:choose>
                <xsl:when test = " $areAllItemsDswGiftsAndNl != 'true' and  $areAllItemsVirtual != 'true'">
                  Once your package has shipped, we'll send you a confirmation email with a tracking number.<br/>
                </xsl:when>
              </xsl:choose>
              <br/>
              Your credit card will not be charged until the order has shipped.<br/>
              <br/>
              <font face="'Open Sans', Arial, sans-serif" style="font-weight:bold;">Questions?</font>
              <br/>
            </font>
            <xsl:choose>
              <xsl:when test="$company = 'Adorama'">
                <a href="https://www.adorama.com/help/contactus">
                  <font face="'Open Sans', Arial, sans-serif">
                    Contact Us
                  </font>
                </a>
              </xsl:when>
              <xsl:otherwise>
                <a href="mailto:{$CompanyEmailCustomerService}">
                  <font face="'Open Sans', Arial, sans-serif">
                    <xsl:value-of select="$CompanyEmailCustomerService"/>
                  </font>
                </a>
              </xsl:otherwise>
            </xsl:choose>
          </p>
          <br/>
          <br/>
        </td>
      </tr>
    </table>
    <table class="btn soc-btn" width="200" cellpadding="0" cellspacing="0" align="center" bgcolor="{$OrderButton}" style="text-align:center!important;cursor:pointer;text-transform:uppercase;border-spacing:0;padding-top:0!important;padding-bottom:0!important;padding-right:0!important;padding-left:0!important;display:inline-table;font-size:14px;margin-top:0;margin-bottom:0;margin-right:6px;margin-left:0px;text-decoration:none;color:#ffffff;font-weight:bold;border-radius:3px;">
      <tbody>
        <tr style="{$baseCSS}">
          <td style="{$buttonTd}">
            <img src="http://www.leisurepro.com/image/email/btn-spc.gif" alt=" " width="10" style="{$buttonImgStyle}" />
          </td>
          <td align="center" style="{$buttonTd}">      
            <a id="trackOrderBtn" href="{OrderDetailsLink}" style="margin-top:5px;margin-bottom:5px;margin-right:5px;margin-left:5px;display:block;text-decoration:none;color:#ffffff;white-space:nowrap;text-decoration:none;">
              <font face="'Open Sans', Arial, sans-serif">Check Order Status</font>
            </a>
          </td>
          <td style="{$buttonTd}">
            <img src="http://www.leisurepro.com/image/email/btn-spc.gif" alt=" " width="10" style="{$buttonImgStyle}" />
          </td>
        </tr>

      </tbody>
    </table>
    <br/>
    <br/>

  </xsl:template>

  <xsl:template name="OrderItems">
    <table id="item" class="product-list-row" cellpadding="0" cellspacing="0" width="{$tableWidth}" align="left" style="border-bottom: 1px solid #ccc; border-spacing:0;text-align:center;width:500px;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;margin-top:8px;margin-bottom:8px;margin-right:0;margin-left:0;clear:both">
      <tbody>
        <tr style="{$baseCSS}">
          <td class="plr-td" style="font-family:'Open Sans',sans-serif;border-spacing:0;margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;border-collapse:collapse;padding-top:10px;padding-bottom:0;padding-right:0;padding-left:0;">
            <table class="width100" align="left" width="80" valign="top" height="80" style="{$width100}">
              <tbody>
                <tr style="{$baseCSS}">
                  <td id="itemImg" valign="top" style="font-family:'Open Sans',Arial,sans-serif;margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;border-collapse:collapse;padding-bottom:12px;padding-right:12px;padding-left:0px; padding-top:0px;vertical-align:top;border-spacing:0;text-align:center;color:#ffffff!important;">
                    <xsl:variable name="itemImagelink" select="ImageLink" />
                    <a href="/{ProductId}.html">
                      <img width="80" src="{$itemImagelink}" />
                    </a>
                  </td>
                </tr>
              </tbody>
            </table>
            <table class="width100" align="left" width="210" valign="top" style="{$width100}">
              <tbody>
                <tr style="border-spacing:0;margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;">
                  <td valign="middle" style=" vertical-align:middle; font-family:'Open Sans',sans-serif;margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;border-collapse:collapse;padding-top:0;padding-bottom:12px;padding-right:0;padding-left:5px;vertical-align:top;border-spacing:0;text-align:center;">
                    <p id="itemDescription" style="font-weight:bold;font-size:14px;line-height:1.45;color:#333e49;margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;text-align:left;">
                      <xsl:if test="IsUsed = 'true'">
                        <span style="font-size:12px; color:#258cd1; border:1px solid #d1d1d6; padding:0 5px; border-radius:12px; background-color:#f1f1f4;">
                          Used - <em>
                            Rating: <xsl:value-of select="Rating" /> &#160;
                          </em>
                        </span>
                        <br/>
                      </xsl:if>
                      <a href="/{ProductId}.html" style="{$linkProduct}" >
                        <font face="'Open Sans', Arial, sans-serif">
                          <xsl:value-of select="ShortDescription" />
                        </font>
                      </a>
                    </p>
                    <xsl:if test="IsPackage = 'true' or IsQuote = 'true'">
                      <br/>
                      <ul style="font-style:italic;font-size:14px;line-height:1.45;text-align:left;color:#333e49;margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;padding-top:5px;padding-bottom:0;padding-right:0;padding-left:10px;">
                        <font id="packageIncludes" face="'Open Sans', Arial, sans-serif">Package Includes:</font>
                        <xsl:for-each select="PackageItems/PackageItem">
                          <li id="subItemDescription" style="font-style:normal;font-size:11px;line-height:1.45;text-align:left;color:#333e49;margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;padding-top:0;padding-bottom:0;padding-right:0;margin-left:15px;">
                            <font face="'Open Sans', Arial, sans-serif">
                              <xsl:if test="QuantityInPackage > 1">
                                <xsl:value-of select="QuantityInPackage" />
                                x
                              </xsl:if>
                            </font>
                            <a href="/{ProductID}.html" style="{$linkProduct}">
                              <font face="'Open Sans', Arial, sans-serif">
                                <xsl:apply-templates select="ShortDescription" />
                              </font>
                            </a>
                          </li>
                        </xsl:for-each>
                      </ul>
                    </xsl:if>                 
                  </td>
                </tr>
              </tbody>
            </table>
            <table class="width100" align="left" width="55" valign="top" style="{$width100}">
              <tbody>
                <tr style="{$baseCSS}">
                  <td valign="middle" style="font-family:'Open Sans',Arial,sans-serif;margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;border-collapse:collapse;padding-top:0;padding-bottom:12px;padding-right:0;padding-left:5px;border-spacing:0;text-align:center;">
                    <p style="font-weight:normal;font-size:14px;line-height:1.45;text-align:center;color:#333e49;margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;">
                      <font id="itemQty" face="'Open Sans', Arial, sans-serif">
                        Qty: <xsl:value-of select="Quantity" />
                      </font>
                    </p>
                  </td>
                </tr>
              </tbody>
            </table>
            <table class="width100" align="left" width="60" valign="top" style="height:auto; border-spacing:0;margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;padding-top:0;padding-bottom:0;padding-right:0; margin-left:24px;">
              <tbody>
                <tr style="{$baseCSS}">
                  <td style="font-family:'Open Sans',sans-serif;margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;border-collapse:collapse;padding-top:0;padding-bottom:12px;padding-right:0;padding-left:0px;vertical-align:top;border-spacing:0;text-align:center;">
                    <p style="font-weight:bold;font-size:16px;line-height:1.45;text-align:center;color:#c00c00;margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;">
                      <font id="itemPrice" face="'Open Sans', Arial, sans-serif">
                        $<xsl:value-of select='format-number(Price,"#,##0.00")' />
                      </font>
                    </p>
                  </td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>
      </tbody>
    </table>
  </xsl:template>

  <xsl:template name="ShippingInfo">
    <table class="product-list-row" cellpadding="0" cellspacing="0"  width="{$tableWidth}" align="left" style="margin: 8px 0px 0px; padding: 0px; text-align: center; border-spacing: 0; clear:both;">
      <tr style="{$baseCSS}">
        <td class="plr-td" style="{$customPlrTD}">
          <table class="item-header" bgcolor="{$menuColor}" cellpadding="12" align="left" width="{$tableWidth}" style="{$itemHeader}">
            <tbody>
              <tr style="{$baseCSS}">
                <td class="padded-td" style="{$productListRowTd}">
                  <h3 style="{$productListRowHeader}">
                    <xsl:choose>
                      <xsl:when test = "$company = 'Adorama' and //ShippingAddress">
                        <xsl:choose>
                          <xsl:when test="$shipMethod != 'PU' and count(/Email/EmailBody/OrderConfirmationEmailBody/OrderItems/OrderConfirmationItem) != count(/Email/EmailBody/OrderConfirmationEmailBody/OrderItems/OrderConfirmationItem/IsGiftViaEmail[.='true'])">
                            <font id="shipping_and_billing_section_name" face="'Open Sans', Arial, sans-serif">Shipping &amp; Billing Info</font>
                          </xsl:when>
                          <xsl:otherwise>
                            <font face="'Open Sans', Arial, sans-serif">Billing Info</font>
                          </xsl:otherwise>
                        </xsl:choose>
                      </xsl:when>
                      <xsl:otherwise>
                        <font face="'Open Sans', Arial, sans-serif">Billing Info</font>
                      </xsl:otherwise>
                    </xsl:choose>
                  </h3>
                </td>
              </tr>
            </tbody>
          </table>
        </td>
      </tr>
      <tr style="{$baseCSS}">
        <td class="plr-td" style="{$customPlrTD}">
          <p style="font-family:'Open Sans',Arial,sans-serif;margin-bottom:0;margin-top:0px;padding-bottom:0;padding-right:0;padding-left:10px; padding-top:0px;font-weight:normal;line-height:1.2;color:#333e49;text-align:left;">

            <xsl:if test="$company = 'Adorama' and //ShippingAddress">
              <xsl:if test="$shipMethod != 'PU' and count(/Email/EmailBody/OrderConfirmationEmailBody/OrderItems/OrderConfirmationItem) != count(/Email/EmailBody/OrderConfirmationEmailBody/OrderItems/OrderConfirmationItem/IsGiftViaEmail[.='true'])">
                <font face="'Open Sans', Arial, sans-serif" style="font-weight:bold;">
                  Shipping Address<br/><br/>
                </font>
                <font id="shipFirstAndLastName" face="'Open Sans', Arial, sans-serif">
                  <xsl:value-of select="ShippingAddress/ShipToName" />&#160;
                </font>
                <xsl:if test="ShippingAddress/Company != ''">
                  <font id="shipCompanyName" face="'Open Sans', Arial, sans-serif">
                    <xsl:value-of select="ShippingAddress/Company" />
                  </font>
                </xsl:if>
                <br/>
                <font id="shipAddressLine" face="'Open Sans', Arial, sans-serif">
                  <xsl:value-of select="ShippingAddress/Address1" />&#160;<xsl:value-of select="ShippingAddress/Address2" />
                  <br />
                  <xsl:value-of select="ShippingAddress/City" />,
                </font>
                <xsl:if test="ShippingAddress/State != ''">
                  <font id="shipState" face="'Open Sans', Arial, sans-serif">
                    <xsl:value-of select="/Email/EmailBody/OrderConfirmationEmailBody/ShippingAddress/State" />,
                  </font>
                </xsl:if>
                <font id="shipCountry" face="'Open Sans', Arial, sans-serif">
                  <xsl:value-of select="ShippingAddress/Country" />,
                </font>
                <font id="shipZip" face="'Open Sans', Arial, sans-serif">
                  <xsl:value-of select="ShippingAddress/Zip" />
                </font>
                <br/>
                <br/>
              </xsl:if>
            </xsl:if>
            <font face="'Open Sans', Arial, sans-serif" style="font-weight:bold;">
              Billing Address <br/>
              <br/>
            </font>
            <font id="billFirstAndLastName" face="'Open Sans', Arial, sans-serif">
              <xsl:value-of select="BillingAddress/ShipToName" />&#160;
            </font>
            <xsl:if test="BillingAddress/Company != ''">
              <font id="billCompanyName" face="'Open Sans', Arial, sans-serif">
                <xsl:value-of select="BillingAddress/Company" />
              </font>
            </xsl:if><br/>
            <font id="billAddressLine" face="'Open Sans', Arial, sans-serif">
              <xsl:value-of select="BillingAddress/Address1" />&#160;<xsl:value-of select="/Email/EmailBody/OrderConfirmationEmailBody/BillingAddress/Address2" />
              <br />
            </font>
            <font id="billCity" face="'Open Sans', Arial, sans-serif">
              <xsl:value-of select="BillingAddress/City" />,
            </font>
            <xsl:if test="BillingAddress/State != ''">
              <font id="billState" face="'Open Sans', Arial, sans-serif">
                <xsl:value-of select="BillingAddress/State" />,
              </font>
            </xsl:if>
            <font id="billCountry" face="'Open Sans', Arial, sans-serif">
              <xsl:value-of select="BillingAddress/Country" />,
            </font>
            <font id="billZip" face="'Open Sans', Arial, sans-serif">
              <xsl:value-of select="BillingAddress/Zip" />
            </font>
            <br/>
            <br/>
            <font face="'Open Sans', Arial, sans-serif" style="font-weight:bold;">
              Payment Method <br/>
              <br/>
            </font>
            <font id="orderPayment" face="'Open Sans', Arial, sans-serif">
              <xsl:choose>
                <xsl:when test="Order/PaymentMethod = 'V.me'">
                  Visa Checkout
                </xsl:when>
                <xsl:otherwise>
                  <xsl:value-of select="Order/PaymentMethod" />
                  <xsl:if test="Order/PaymentMethod = 'FlexShopper'">
                    <strong>- Lease to own</strong>
                    <br/>
                    $<xsl:value-of select="format-number(Order/WeeklyBill, '#,##0.00')" /> per week
                  </xsl:if>
                </xsl:otherwise>
              </xsl:choose>
              <br/>
            </font>
          </p>
          <br/>
        </td>
      </tr>
    </table>
  </xsl:template>


  <xsl:template name="Magazine">
    <table bgcolor="#333e49" cellpadding="12" align="left" width="200" style="{$tableHeaderSideBar}">
      <tbody>
        <tr style="{$baseCSS}">
          <td class="padded-td" style="{$tdHeaderSideBar}">
            <h3 style="{$headerSideBar}">Learning Center</h3>
          </td>
        </tr>
      </tbody>
    </table>
    <table class="superspecial" align="left" width="200" style="{$tableBodySideBar}">
      <tbody>
        <tr style="{$baseCSS}">
          <td bgcolor="#f3f3f6" class="padded-td" style="font-family:'Open Sans',Arial,sans-serif;margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;border-collapse:collapse; padding-top:12px;padding-bottom:12px;padding-right:12px;padding-left:12px;vertical-align:top;border-spacing:0;text-align:center; border-radius:0 0 4px 4px; border-left: 1px solid #9ba5b0; border-right:1px solid #9ba5b0; border-bottom:1px solid #9ba5b0;">
            <p style="font-family:'Open Sans',Arial,sans-serif;margin-bottom:5px;margin-top:5px;padding-bottom:0px;padding-right:0px;padding-left:5px;font-weight:normal;font-size:15px;line-height:1.2;color:#333e49;text-align:left;">
              Learning Center is an online publication of Adorama <br/>
              <br/>
              <span style="line-height: 1.3; text-decoration:none; color:#333e49;">
                - Find "how to" articles
              </span>
              <br/>
              <span style="line-height: 1.3; text-decoration:none; color:#333e49;">
                - Sign up for workshops
              </span>
              <br/>
              <span style="line-height: 1.3; text-decoration:none; color:#333e49;">
                - Read our daily blog
              </span>
              <br/>
              <span style="line-height: 1.3; text-decoration:none; color:#333e49;">
                - Browse product reviews
              </span>
              <br/>
              <span style="line-height: 1.3; text-decoration:none; color:#333e49;">
                - And much more!
              </span>
              <br/>
              <br/>
              <a href="/alc/" style="line-height: 2; font-weight:bold; text-decoration:none; color:#333e49;">Visit Learning Center</a>
              <br/>
            </p>
          </td>
        </tr>
      </tbody>
    </table>
  </xsl:template>

  <xsl:template name="EmailUpdatesInOrderConfirmation">
    <table bgcolor="#333e49" cellpadding="12" align="left" width="200" style="{$tableHeaderSideBar}">
      <tbody>
        <tr style="{$baseCSS}">
          <td class="padded-td" style="{$tdHeaderSideBar}">
            <h3 style="{$headerSideBar}">Email Updates</h3>
          </td>
        </tr>
      </tbody>
    </table>
    <table class="superspecial" align="left" width="200" style="{$tableBodySideBar}">
      <tbody>
        <tr style="{$baseCSS}">
          <td bgcolor="#f3f3f6" class="padded-td" style="font-family:'Open Sans',sans-serif;margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;border-collapse:collapse; padding-top:12px;padding-bottom:12px;padding-right:12px;padding-left:12px;vertical-align:top;border-spacing:0;text-align:center; border-radius:0 0 4px 4px; border-left: 1px solid #9ba5b0; border-right:1px solid #9ba5b0; border-bottom:1px solid #9ba5b0;">
            <p style="font-family:'Open Sans',Arial,sans-serif;margin-bottom:5px;margin-top:5px;padding-bottom:0px;padding-right:0px;padding-left:5px;font-weight:normal;font-size:15px;line-height:1.2;color:#333e49;text-align:left;">
              Subscribe to Adorama's Newsletters &amp; get:
              <br/>
              <br/>
              <span style="line-height: 1.3; text-decoration:none; color:#333e49;">- Our latest news</span><br/>
              <span style="line-height: 1.3; text-decoration:none; color:#333e49;">- Product tips</span>
              <br/>
              <span style="line-height: 1.3; text-decoration:none; color:#333e49;">- Exclusive specials and savings</span>
              <br/>
              <span style="line-height: 1.3; text-decoration:none; color:#333e49;">- And Much More</span>
              <br/>
              <br/>
              <a href="#" style="line-height: 2; font-weight:bold; text-decoration:none; color:#333e49;">Subscribe Now</a>
              <br/>
            </p>
          </td>
        </tr>
      </tbody>
    </table>
  </xsl:template>

  <xsl:template name="DutiesAndTaxes">
    <xsl:choose>
      <!-- http://jira.adorama.com/browse/WEB-22681 -->
      <!-- Please hide "Taxes & Duties" section for Adorama Order Confirmation email, only where customer selects "Canada Shipping". In other cases, this section has to be shown. -->
      <xsl:when test="ShippingAddress/Country != 'US' and ShippingAddress/Country != 'USA' and $shipMethod != 'BLS' and $dutyTotal = '' and $shipMethod != 'PU'">
        <h2 class="main-title" style="{$mainTitle} font-family:'Open Sans',Arial,sans-serif;">
          <font face="'Open Sans', Arial, sans-serif">Duties and Taxes</font>
        </h2>
        <table id="internationalOrderlInfo" class="width100" align="left"  color="#006aad" style=" border-spacing:0;margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;padding-top:0;padding-bottom:13px;padding-right:0;padding-left:0;">
          <tr>
            <td>
              <font face="'Open Sans', Arial, sans-serif" style="margin-bottom:0;margin-top:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;font-weight:normal;font-size:16px;line-height:1.35;color:#333e49;text-align:left;">
                As the recipient of an international shipment, you may be subject to import duties and taxes which are
                levied once a shipment reaches your country. Customs policies vary widely from country to country; you
                should contact your local customs office for further information. <br/>
              </font>
            </td>
          </tr>
        </table>
      </xsl:when>
    </xsl:choose>
  </xsl:template>


  <xsl:template name="ReceivMessage">
    <xsl:choose>
      <xsl:when test="$shipMethod='PU'">
        <h2 class="main-title" style="{$mainTitle} font-family:'Open Sans',Arial,sans-serif;">
          <font id="orderHasBeenReceived" face="'Open Sans', Arial, sans-serif">Your order has been received.</font>
        </h2>
        <table id="pickupOrderInfo" class="width100" align="left"  color="#006aad" style=" border-spacing:0;margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;">
          <tr>
            <td>
              <p style="font-family:'Open Sans',Arial,sans-serif;margin-bottom:8px;margin-top:0;padding-top:0;padding-bottom:5px;padding-right:0;padding-left:0;font-weight:normal;font-size:16px;line-height:1.35;color:#333e49;text-align:left;">
                <font face="'Open Sans', Arial, sans-serif">
                  IT IS NOT READY YET but will be processed as soon as possible. We will email you as soon as it is ready for pick up.
                  <br />
                  No charge will be made to your card until you arrive at the store. At the store, the cardholder will be asked to present the
                  card for payment.
                  <br />

                  Orders may be picked up during Store Business hours (<a href="https://www.adorama.com/g/nyc-store">link to store hours on site</a>) at the Customer Service counter.
                  <br />
                  <br />

                  Call us at <a href="tel:1-212-741-0063">1-212-741-0063</a> with any questions.
                  <br />
                  <br />
                  Thank you again for shopping with Adorama
                </font>
              </p>
            </td>
          </tr>
        </table>
      </xsl:when>
    </xsl:choose>
  </xsl:template>

</xsl:stylesheet>
