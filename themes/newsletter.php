<html xmlns="http://www.w3.org/1999/xhtml"><head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title><?php echo $newsletter['title']; ?></title>
      <style type="text/css">
         /* Client-specific Styles */
         #outlook a {padding:0;} /* Force Outlook to provide a "view in browser" menu link. */
         body{width:100% !important; -webkit-text-size-adjust:100%; -ms-text-size-adjust:100%; margin:0; padding:0;}
         /* Prevent Webkit and Windows Mobile platforms from changing default font sizes, while not breaking desktop design. */
         .ExternalClass {width:100%;} /* Force Hotmail to display emails at full width */
         .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {line-height: 100%;} /* Force Hotmail to display normal line spacing.  More on that: http://www.emailonacid.com/forum/viewthread/43/ */
         #backgroundTable {margin:0; padding:0; width:100% !important; line-height: 100% !important;}
         img {outline:none; text-decoration:none;border:none; -ms-interpolation-mode: bicubic;}
         a img {border:none;}
         .image_fix {display:block;}
         p {margin: 0px 0px !important;}

         table td {border-collapse: collapse;}
         table { border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; }
         /*a {color: #e95353;text-decoration: none;text-decoration:none!important;}*/
         /*STYLES*/
         table[class=full] { width: 100%; clear: both; }

         /*################################################*/
         /*IPAD STYLES*/
         /*################################################*/
         @media only screen and (max-width: 640px) {
         a[href^="tel"], a[href^="sms"] {
         text-decoration: none;
         color: #ffffff; /* or whatever your want */
         pointer-events: none;
         cursor: default;
         }
         .mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {
         text-decoration: default;
         color: #ffffff !important;
         pointer-events: auto;
         cursor: default;
         }
         table[class=devicewidth] {width: 440px!important;text-align:center!important;}
         table[class=devicewidthinner] {width: 420px!important;text-align:center!important;}
         table[class="sthide"]{display: none!important;}
         img[class="bigimage"]{width: 420px!important;height:219px!important;}
         img[class="col2img"]{width: 420px!important;height:258px!important;}
         img[class="image-banner"]{width: 440px!important;height:106px!important;}
         td[class="menu"]{text-align:center !important; padding: 0 0 10px 0 !important;}
         td[class="logo"]{padding:10px 0 5px 0!important;margin: 0 auto !important;}
         img[class="logo"]{padding:0!important;margin: 0 auto !important;}

         }
         /*##############################################*/
         /*IPHONE STYLES*/
         /*##############################################*/
         @media only screen and (max-width: 480px) {
         a[href^="tel"], a[href^="sms"] {
         text-decoration: none;
         color: #ffffff; /* or whatever your want */
         pointer-events: none;
         cursor: default;
         }
         .mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {
         text-decoration: default;
         color: #ffffff !important;
         pointer-events: auto;
         cursor: default;
         }
         table[class=devicewidth] {width: 280px!important;text-align:center!important;}
         table[class=devicewidthinner] {width: 260px!important;text-align:center!important;}
         table[class="sthide"]{display: none!important;}
         img[class="bigimage"]{width: 260px!important;height:136px!important;}
         img[class="col2img"]{width: 260px!important;height:160px!important;}
         img[class="image-banner"]{width: 280px!important;height:68px!important;}

         }
      </style>


   </head>
<body>
<div class="block">
   <!-- Start of preheader -->
   <table width="100%" bgcolor="#f6f4f5" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="preheader">
      <tbody>
         <tr>
            <td width="100%">
               <table width="580" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                  <tbody>
                     <!-- Spacing -->
                     <tr>
                        <td width="100%" height="5"></td>
                     </tr>
                     <!-- Spacing -->
                     <tr>
                        <td align="right" valign="middle" style="font-family: Helvetica, arial, sans-serif; font-size: 10px;color: #999999" st-content="preheader">
                           If you cannot read this email, please  <a class="hlite" href="<?php echo $newsletter['url']; ?>" style="text-decoration: none; color: #0db9ea">click here</a>
                        </td>
                     </tr>
                     <!-- Spacing -->
                     <tr>
                        <td width="100%" height="5"></td>
                     </tr>
                     <!-- Spacing -->
                  </tbody>
               </table>
            </td>
         </tr>
      </tbody>
   </table>
   <!-- End of preheader -->
</div>
<div class="block">
   <!-- start of header -->
   <table width="100%" bgcolor="#f6f4f5" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="header">
      <tbody>
         <tr>
            <td>
               <table width="580" bgcolor="#0db9ea" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth" hlitebg="edit" shadow="edit">
                  <tbody>
                     <tr>
                        <td>
                           <!-- logo -->
                           <table width="280" cellpadding="0" cellspacing="0" border="0" align="left" class="devicewidth">
                              <tbody>
                                 <tr>
                                    <td valign="middle" width="270" style="padding: 10px 0 10px 20px;" class="logo">
                                       <div class="imgpop">
                                          <a href="#"><img src="img/logo.png" alt="logo" border="0" style="display:block; border:none; outline:none; text-decoration:none;" st-image="edit" class="logo"></a>
                                       </div>
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                           <!-- End of logo -->
                           <!-- menu -->
                           <table width="280" cellpadding="0" cellspacing="0" border="0" align="right" class="devicewidth">
                              <tbody>
                                 <tr>
                                    <td width="270" valign="middle" style="font-family: Helvetica, Arial, sans-serif;font-size: 14px; color: #ffffff;line-height: 24px; padding: 10px 0;" align="right" class="menu" st-content="menu">
                                       <a href="#" style="text-decoration: none; color: #ffffff;">HOME</a>
                                       &nbsp;|&nbsp;
                                       <a href="#" style="text-decoration: none; color: #ffffff;">ABOUT</a>
                                       &nbsp;|&nbsp;
                                       <a href="#" style="text-decoration: none; color: #ffffff;">SHOP</a>
                                    </td>
                                    <td width="20"></td>
                                 </tr>
                              </tbody>
                           </table>
                           <!-- End of Menu -->
                        </td>
                     </tr>
                  </tbody>
               </table>
            </td>
         </tr>
      </tbody>
   </table>
   <!-- end of header -->
</div><div class="block">
   <!-- image + text -->
   <table width="100%" bgcolor="#f6f4f5" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="bigimage">
      <tbody>
         <tr>
            <td>
               <table bgcolor="#ffffff" width="580" align="center" cellspacing="0" cellpadding="0" border="0" class="devicewidth" modulebg="edit">
                  <tbody>
                     <tr>
                        <td width="100%" height="20"></td>
                     </tr>
                     <tr>
                        <td>
                           <table width="540" align="center" cellspacing="0" cellpadding="0" border="0" class="devicewidthinner">
                              <tbody>
                                 <tr>
                                    <!-- start of image -->
                                    <td align="center">
                                       <a target="_blank" href="<?php echo $articles[0]['link']; ?>"><img width="540" border="0" height="282" alt="" style="display:block; border:none; outline:none; text-decoration:none;" src="<?php echo $articles[0]['image_url']; ?>" class="bigimage"></a>
                                    </td>
                                 </tr>
                                 <!-- end of image -->
                                 <!-- Spacing -->
                                 <tr>
                                    <td width="100%" height="20"></td>
                                 </tr>
                                 <!-- Spacing -->
                                 <!-- title -->
                                 <tr>
                                    <td style="font-family: Helvetica, arial, sans-serif; font-size: 18px; color: #333333; text-align:left;line-height: 20px;" st-title="rightimage-title">
                                       <?php echo $articles[0]['title']; ?>
                                    </td>
                                 </tr>
                                 <!-- end of title -->
                                 <!-- Spacing -->
                                 <tr>
                                    <td width="100%" height="20"></td>
                                 </tr>
                                 <!-- Spacing -->
                                 <!-- content -->
                                 <tr>
                                    <td style="font-family: Helvetica, arial, sans-serif; font-size: 13px; color: #95a5a6; text-align:left;line-height: 24px;" st-content="rightimage-paragraph">
                                       <?php echo $articles[0]['body']; ?>
                                    </td>
                                 </tr>
                                 <!-- end of content -->
                                 <!-- Spacing -->
                                 <tr>
                                    <td width="100%" height="10"></td>
                                 </tr>
                                 <!-- button -->
                                 <tr>
                                    <td>
                                       <table height="30" align="left" valign="middle" border="0" cellpadding="0" cellspacing="0" class="tablet-button" st-button="edit">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td width="auto" align="center" valign="middle" height="30" style=" background-color:#0db9ea; border-top-left-radius:4px; border-bottom-left-radius:4px;border-top-right-radius:4px; border-bottom-right-radius:4px; background-clip: padding-box;font-size:13px; font-family:Helvetica, arial, sans-serif; text-align:center;  color:#ffffff; font-weight: 300; padding-left:18px; padding-right:18px;">

                                                                           <span style="color: #ffffff; font-weight: 300;">
                                                                              <a style="color: #ffffff; text-align:center;text-decoration: none;" href="<?php echo $articles[0]['link']; ?>">Read More</a>
                                                                           </span>
                                                                        </td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                    </td>
                                 </tr>
                                 <!-- /button -->
                                 <!-- Spacing -->
                                 <tr>
                                    <td width="100%" height="20"></td>
                                 </tr>
                                 <!-- Spacing -->
                              </tbody>
                           </table>
                        </td>
                     </tr>
                  </tbody>
               </table>
            </td>
         </tr>
      </tbody>
   </table>
</div>

<div class="block">
   <!-- Start of 2-columns -->
   <table width="100%" bgcolor="#f6f4f5" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="2columns">
      <tbody>
         <tr>
            <td>
               <table bgcolor="#ffffff" width="580" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth" modulebg="edit">
                  <tbody>
                     <tr>
                        <td width="100%" height="20"></td>
                     </tr>
                     <tr>
                        <td>
                           <table width="540" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                              <tbody>
                                 <tr>
                                    <td>
                                       <table width="260" align="left" border="0" cellpadding="0" cellspacing="0" class="devicewidth">
                                          <tbody>
                                             <!-- image -->
                                             <tr>
                                                <td width="260" height="140" align="center" class="devicewidth">
                                                   <img src="<?php echo $articles[0]['image_url']; ?>" alt="" border="0" width="260" height="140" style="display:block; border:none; outline:none; text-decoration:none;" class="col2img">
                                                </td>
                                             </tr>
                                             <!-- Spacing -->
                                             <tr>
                                                <td width="100%" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                             </tr>
                                             <!-- Spacing -->
                                             <tr>
                                                <td>
                                                   <!-- start of text content table -->
                                                   <table width="260" align="center" border="0" cellpadding="0" cellspacing="0" class="devicewidthinner">
                                                      <tbody>
                                                         <!-- title -->
                                                         <tr>
                                                            <td style="font-family: Helvetica, arial, sans-serif; font-size: 18px; color: #333333; text-align:left;line-height: 20px;" st-title="2col-title1">
                                                               <?php echo $articles[1]['title']; ?>
                                                            </td>
                                                         </tr>
                                                         <!-- end of title -->
                                                         <!-- Spacing -->
                                                         <tr>
                                                            <td width="100%" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                         </tr>
                                                         <!-- /Spacing -->
                                                         <!-- content -->
                                                         <tr>
                                                            <td style="font-family: Helvetica, arial, sans-serif; font-size: 13px; color: #95a5a6; text-align:left;line-height: 20px;" st-content="2col-para1">
                                                               <?php echo $articles[1]['body']; ?>
                                                            </td>
                                                         </tr>
                                                         <!-- end of content -->
                                                         <!-- Spacing -->
                                                         <tr>
                                                            <td width="100%" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                         </tr>
                                                         <!-- /Spacing -->
                                                         <!-- button -->
                                                         <tr>
                                                            <td>
                                                               <table height="30" align="left" valign="middle" border="0" cellpadding="0" cellspacing="0" class="tablet-button" st-button="edit">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td width="auto" align="center" valign="middle" height="30" style=" background-color:#0db9ea; border-top-left-radius:4px; border-bottom-left-radius:4px;border-top-right-radius:4px; border-bottom-right-radius:4px; background-clip: padding-box;font-size:13px; font-family:Helvetica, arial, sans-serif; text-align:center;  color:#ffffff; font-weight: 300; padding-left:18px; padding-right:18px;">

                                                                           <span style="color: #ffffff; font-weight: 300;">
                                                                              <a style="color: #ffffff; text-align:center;text-decoration: none;" href="<?php echo $articles[1]['link']; ?>">Read More</a>
                                                                           </span>
                                                                        </td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                         </tr>
                                                         <!-- /button -->
                                                      </tbody>
                                                   </table>
                                                </td>
                                             </tr>
                                             <!-- end of text content table -->
                                          </tbody>
                                       </table>
                                       <!-- end of left column -->
                                       <!-- spacing for mobile devices-->
                                       <table align="left" border="0" cellpadding="0" cellspacing="0" class="mobilespacing">
                                          <tbody>
                                             <tr>
                                                <td width="100%" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                             </tr>
                                          </tbody>
                                       </table>
                                       <!-- end of for mobile devices-->
                                       <!-- start of right column -->
                                       <table width="260" align="right" border="0" cellpadding="0" cellspacing="0" class="devicewidth">
                                          <tbody>
                                             <!-- image -->
                                             <tr>
                                                <td width="260" height="140" align="center" class="devicewidth">
                                                   <img src="<?php echo $articles[2]['image_url']; ?>" alt="" border="0" width="260" height="140" style="display:block; border:none; outline:none; text-decoration:none;" class="col2img">
                                                </td>
                                             </tr>
                                             <!-- Spacing -->
                                             <tr>
                                                <td width="100%" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                             </tr>
                                             <!-- Spacing -->
                                             <tr>
                                                <td>
                                                   <!-- start of text content table -->
                                                   <table width="260" align="center" border="0" cellpadding="0" cellspacing="0" class="devicewidthinner">
                                                      <tbody>
                                                         <!-- title -->
                                                         <tr>
                                                            <td style="font-family: Helvetica, arial, sans-serif; font-size: 18px; color: #333333; text-align:left;line-height: 20px;" st-title="2col-title2">
                                                               <?php echo $articles[2]['title']; ?>
                                                            </td>
                                                         </tr>
                                                         <!-- end of title -->
                                                         <!-- Spacing -->
                                                         <tr>
                                                            <td width="100%" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                         </tr>
                                                         <!-- /Spacing -->
                                                         <!-- content -->
                                                         <tr>
                                                            <td style="font-family: Helvetica, arial, sans-serif; font-size: 13px; color: #95a5a6; text-align:left;line-height: 20px;" st-content="2col-para2">
                                                               <?php echo $articles[2]['body']; ?>
                                                            </td>
                                                         </tr>
                                                         <!-- end of content -->
                                                         <!-- Spacing -->
                                                         <tr>
                                                            <td width="100%" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                         </tr>
                                                         <!-- /Spacing -->
                                                         <!-- button -->
                                                         <tr>
                                                            <td>
                                                               <table height="30" align="left" valign="middle" border="0" cellpadding="0" cellspacing="0" class="tablet-button" st-button="edit">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td width="auto" align="center" valign="middle" height="30" style=" background-color:#0db9ea; border-top-left-radius:4px; border-bottom-left-radius:4px;border-top-right-radius:4px; border-bottom-right-radius:4px; background-clip: padding-box;font-size:13px; font-family:Helvetica, arial, sans-serif; text-align:center;  color:#ffffff; font-weight: 300; padding-left:18px; padding-right:18px;">

                                                                           <span style="color: #ffffff; font-weight: 300;">
                                                                              <a style="color: #ffffff; text-align:center;text-decoration: none;" href="<?php echo $articles[0]['link']; ?>">Read More</a>
                                                                           </span>
                                                                        </td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                         </tr>
                                                         <!-- /button -->
                                                      </tbody>
                                                   </table>
                                                </td>
                                             </tr>
                                             <!-- end of text content table -->
                                          </tbody>
                                       </table>
                                       <!-- end of right column -->
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                        </td>
                     </tr>
                     <tr>
                        <td width="100%" height="20"></td>
                     </tr>
                  </tbody>
               </table>
            </td>
         </tr>
      </tbody>
   </table>
   <!-- End of 2-columns -->
</div>
<div class="block">
   <!-- 3-columns -->
   <table width="100%" bgcolor="#f6f4f5" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="3columns">
      <tbody>
         <tr>
            <td>
               <table bgcolor="#ffffff" width="580" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth" modulebg="edit">
                  <tbody>
                     <tr>
                        <td width="100%" height="20"></td>
                     </tr>
                     <tr>
                        <td>
                           <table width="540" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                              <tbody>
                                 <tr>
                                    <td>
                                       <!-- col 1 -->
                                       <table width="170" align="left" border="0" cellpadding="0" cellspacing="0" class="devicewidth">
                                          <tbody>
                                             <!-- image 2 -->
                                             <tr>
                                                <td width="170" height="128" align="center" class="devicewidth">
                                                   <img src="img/3col-image.png" alt="" border="0" width="170" height="128" style="display:block; border:none; outline:none; text-decoration:none;" class="col3img">
                                                </td>
                                             </tr>
                                             <!-- end of image2 -->
                                             <tr>
                                                <td>
                                                   <!-- start of text content table -->
                                                   <table width="170" align="center" border="0" cellpadding="0" cellspacing="0" class="devicewidthinner">
                                                      <tbody>
                                                         <!-- Spacing -->
                                                         <tr>
                                                            <td width="100%" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                         </tr>
                                                         <!-- Spacing -->
                                                         <!-- title2 -->
                                                         <tr>
                                                            <td style="font-family: Helvetica, arial, sans-serif; font-size: 18px; color: #333333; text-align:left;line-height: 20px;" st-title="3col-title1">
                                                               Lorem Ipsum
                                                            </td>
                                                         </tr>
                                                         <!-- end of title2 -->
                                                         <!-- Spacing -->
                                                         <tr>
                                                            <td width="100%" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                         </tr>
                                                         <!-- Spacing -->
                                                         <!-- content2 -->
                                                         <tr>
                                                            <td style="font-family: Helvetica, arial, sans-serif; font-size: 13px; color: #95a5a6; text-align:left;line-height: 20px;" st-content="3col-para1">
                                                               Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                                            </td>
                                                         </tr>
                                                         <!-- end of content2 -->
                                                         <!-- Spacing -->
                                                         <tr>
                                                            <td width="100%" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                         </tr>
                                                         <!-- Spacing -->
                                                         <!-- button -->
                                                         <tr>
                                                            <td>
                                                               <table height="30" align="left" valign="middle" border="0" cellpadding="0" cellspacing="0" class="tablet-button" st-button="edit">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td width="auto" align="center" valign="middle" height="30" style=" background-color:#0db9ea; border-top-left-radius:4px; border-bottom-left-radius:4px; border-top-right-radius:4px; border-bottom-right-radius:4px;background-clip: padding-box;font-size:13px; font-family:Helvetica, arial, sans-serif; text-align:center;  color:#ffffff; font-weight: 300; padding-left:18px; padding-right:18px;">

                                                                           <span style="color: #ffffff; font-weight: 300;">
                                                                              <a style="color: #ffffff; text-align:center;text-decoration: none;" href="#">Read More</a>
                                                                           </span>
                                                                        </td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                         </tr>
                                                         <!-- /button -->
                                                      </tbody>
                                                   </table>
                                                </td>
                                             </tr>
                                             <!-- end of text content table -->
                                          </tbody>
                                       </table>
                                       <!-- spacing -->
                                       <table width="15" align="left" border="0" cellpadding="0" cellspacing="0" class="removeMobile">
                                          <tbody>
                                             <tr>
                                                <td width="100%" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                             </tr>
                                          </tbody>
                                       </table>
                                       <!-- end of spacing -->
                                       <!-- col 2 -->
                                       <table width="170" align="left" border="0" cellpadding="0" cellspacing="0" class="devicewidth">
                                          <tbody>
                                             <!-- image 2 -->
                                             <tr>
                                                <td width="170" height="128" align="center" class="devicewidth">
                                                   <img src="img/3col-image.png" alt="" border="0" width="170" height="128" style="display:block; border:none; outline:none; text-decoration:none;" class="col3img">
                                                </td>
                                             </tr>
                                             <!-- end of image2 -->
                                             <tr>
                                                <td>
                                                   <!-- start of text content table -->
                                                   <table width="170" align="center" border="0" cellpadding="0" cellspacing="0" class="devicewidthinner">
                                                      <tbody>
                                                         <!-- Spacing -->
                                                         <tr>
                                                            <td width="100%" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                         </tr>
                                                         <!-- Spacing -->
                                                         <!-- title2 -->
                                                         <tr>
                                                            <td style="font-family: Helvetica, arial, sans-serif; font-size: 18px; color: #333333; text-align:left;line-height: 20px;" st-title="3col-title2">
                                                               Lorem Ipsum
                                                            </td>
                                                         </tr>
                                                         <!-- end of title2 -->
                                                         <!-- Spacing -->
                                                         <tr>
                                                            <td width="100%" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                         </tr>
                                                         <!-- Spacing -->
                                                         <!-- content2 -->
                                                         <tr>
                                                            <td style="font-family: Helvetica, arial, sans-serif; font-size: 13px; color: #95a5a6; text-align:left;line-height: 20px;" st-content="3col-para2">
                                                               Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                                            </td>
                                                         </tr>
                                                         <!-- end of content2 -->
                                                         <!-- Spacing -->
                                                         <tr>
                                                            <td width="100%" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                         </tr>
                                                         <!-- /Spacing -->
                                                         <!-- button -->
                                                         <tr>
                                                            <td>
                                                               <table height="30" align="left" valign="middle" border="0" cellpadding="0" cellspacing="0" class="tablet-button" st-button="edit">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td width="auto" align="center" valign="middle" height="30" style=" background-color:#0db9ea; border-top-left-radius:4px; border-bottom-left-radius:4px; border-top-right-radius:4px; border-bottom-right-radius:4px;background-clip: padding-box;font-size:13px; font-family:Helvetica, arial, sans-serif; text-align:center;  color:#ffffff; font-weight: 300; padding-left:18px; padding-right:18px;">

                                                                           <span style="color: #ffffff; font-weight: 300;">
                                                                              <a style="color: #ffffff; text-align:center;text-decoration: none;" href="#">Read More</a>
                                                                           </span>
                                                                        </td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                         </tr>
                                                         <!-- /button -->
                                                      </tbody>
                                                   </table>
                                                </td>
                                             </tr>
                                             <!-- end of text content table -->
                                          </tbody>
                                       </table>
                                       <!-- end of col 2 -->
                                       <!-- spacing -->
                                       <table width="1" align="left" border="0" cellpadding="0" cellspacing="0" class="removeMobile">
                                          <tbody>
                                             <tr>
                                                <td width="100%" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                             </tr>
                                          </tbody>
                                       </table>
                                       <!-- end of spacing -->
                                       <!-- col 3 -->
                                       <table width="170" align="right" border="0" cellpadding="0" cellspacing="0" class="devicewidth">
                                          <tbody>
                                             <!-- image3 -->
                                             <tr>
                                                <td width="170" height="128" align="center" class="devicewidth">
                                                   <img src="img/3col-image.png" alt="" width="170" height="128" border="0" style="display:block; border:none; outline:none; text-decoration:none;" class="col3img">
                                                </td>
                                             </tr>
                                             <!-- end of image3 -->
                                             <tr>
                                                <td>
                                                   <!-- start of text content table -->
                                                   <table width="170" align="center" border="0" cellpadding="0" cellspacing="0" class="devicewidthinner">
                                                      <tbody>
                                                         <!-- Spacing -->
                                                         <tr>
                                                            <td width="100%" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                         </tr>
                                                         <!-- Spacing -->
                                                         <!-- title -->
                                                         <tr>
                                                            <td style="font-family: Helvetica, arial, sans-serif; font-size: 18px; color: #333333; text-align:left;line-height: 20px;" st-title="3col-title3">
                                                               Lorem Ipsum
                                                            </td>
                                                         </tr>
                                                         <!-- end of title -->
                                                         <!-- Spacing -->
                                                         <tr>
                                                            <td width="100%" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                         </tr>
                                                         <!-- Spacing -->
                                                         <!-- content -->
                                                         <tr>
                                                            <td style="font-family: Helvetica, arial, sans-serif; font-size: 13px; color: #95a5a6; text-align:left;line-height: 20px;" st-content="3col-para1">
                                                               Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                                            </td>
                                                         </tr>
                                                         <!-- end of content -->
                                                         <!-- Spacing -->
                                                         <tr>
                                                            <td width="100%" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                         </tr>
                                                         <!-- Spacing -->
                                                         <!-- button -->
                                                         <tr>
                                                            <td>
                                                               <table height="30" align="left" valign="middle" border="0" cellpadding="0" cellspacing="0" class="tablet-button" st-button="edit">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td width="auto" align="center" valign="middle" height="30" style=" background-color:#0db9ea; border-top-left-radius:4px; border-bottom-left-radius:4px;border-top-right-radius:4px; border-bottom-right-radius:4px; background-clip: padding-box;font-size:13px; font-family:Helvetica, arial, sans-serif; text-align:center;  color:#ffffff; font-weight: 300; padding-left:18px; padding-right:18px;">

                                                                           <span style="color: #ffffff; font-weight: 300;">
                                                                              <a style="color: #ffffff; text-align:center;text-decoration: none;" href="#">Read More</a>
                                                                           </span>
                                                                        </td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                         </tr>
                                                         <!-- /button -->
                                                      </tbody>
                                                   </table>
                                                </td>
                                             </tr>
                                             <!-- end of text content table -->
                                          </tbody>
                                       </table>
                                    </td>
                                    <!-- spacing -->
                                    <!-- end of spacing -->
                                 </tr>
                              </tbody>
                           </table>
                        </td>
                     </tr>
                     <tr>
                        <td width="100%" height="20"></td>
                     </tr>
                  </tbody>
               </table>
            </td>
         </tr>
      </tbody>
   </table>
   <!-- end of 3-columns -->
</div>

<div class="block">
   <!-- Full + text -->
   <table width="100%" bgcolor="#f6f4f5" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="fullimage">
      <tbody>
         <tr>
            <td>
               <table bgcolor="#ffffff" width="580" align="center" cellspacing="0" cellpadding="0" border="0" class="devicewidth" modulebg="edit">
                  <tbody>
                     <tr>
                        <td width="100%" height="20"></td>
                     </tr>
                     <tr>
                        <td>
                           <table width="540" align="center" cellspacing="0" cellpadding="0" border="0" class="devicewidthinner">
                              <tbody>
                                 <!-- title -->
                                 <tr>
                                    <td style="font-family: Helvetica, arial, sans-serif; font-size: 18px; color: #333333; text-align:left;line-height: 20px;" st-title="rightimage-title">
                                       LOREM IPSUM
                                    </td>
                                 </tr>
                                 <!-- end of title -->
                                 <!-- Spacing -->
                                 <tr>
                                    <td width="100%" height="10"></td>
                                 </tr>
                                 <!-- Spacing -->
                                 <!-- content -->
                                 <tr>
                                    <td style="font-family: Helvetica, arial, sans-serif; font-size: 13px; color: #666666; text-align:left;line-height: 24px;" st-content="rightimage-paragraph">
                                       Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                    </td>
                                 </tr>
                                 <!-- end of content -->
                                 <!-- Spacing -->
                                 <tr>
                                    <td width="100%" height="10"></td>
                                 </tr>
                                 <!-- button -->
                                 <tr>
                                    <td>
                                       <table height="30" align="left" valign="middle" border="0" cellpadding="0" cellspacing="0" class="tablet-button" st-button="edit">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td width="auto" align="center" valign="middle" height="30" style=" background-color:#0db9ea; border-top-left-radius:4px; border-bottom-left-radius:4px;border-top-right-radius:4px; border-bottom-right-radius:4px; background-clip: padding-box;font-size:13px; font-family:Helvetica, arial, sans-serif; text-align:center;  color:#ffffff; font-weight: 300; padding-left:18px; padding-right:18px;">

                                                                           <span style="color: #ffffff; font-weight: 300;">
                                                                              <a style="color: #ffffff; text-align:center;text-decoration: none;" href="#">Read More</a>
                                                                           </span>
                                                                        </td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                    </td>
                                 </tr>
                                 <!-- /button -->
                                 <!-- Spacing -->
                                 <tr>
                                    <td width="100%" height="20"></td>
                                 </tr>
                                 <!-- Spacing -->
                              </tbody>
                           </table>
                        </td>
                     </tr>
                  </tbody>
               </table>
            </td>
         </tr>
      </tbody>
   </table>
</div>
<div class="block">
   <!-- Start of preheader -->
   <table width="100%" bgcolor="#f6f4f5" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="postfooter">
      <tbody>
         <tr>
            <td width="100%">
               <table width="580" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                  <tbody>
                     <!-- Spacing -->
                     <tr>
                        <td width="100%" height="5"></td>
                     </tr>
                     <!-- Spacing -->
                     <tr>
                        <td align="center" valign="middle" style="font-family: Helvetica, arial, sans-serif; font-size: 10px;color: #999999" st-content="preheader">
                           If you don't want to receive updates. please  <a class="hlite" href="#" style="text-decoration: none; color: #0db9ea">unsubscribe</a>
                        </td>
                     </tr>
                     <!-- Spacing -->
                     <tr>
                        <td width="100%" height="5"></td>
                     </tr>
                     <!-- Spacing -->
                  </tbody>
               </table>
            </td>
         </tr>
      </tbody>
   </table>
   <!-- End of preheader -->
</div>

</body></html>
