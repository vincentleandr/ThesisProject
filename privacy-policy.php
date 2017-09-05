<?php  
include("mod/connect.php");
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fav and touch icons -->
    <title>MyScholarships - Privacy Policy</title>
    <link rel="icon" href="ico/myscholarships.png">
    <title>BOOTCLASIFIED - Responsive Classified Theme</title>
    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/addition.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">

    <!-- styles needed for carousel slider -->
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">

    <!-- Just for debugging purposes. -->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- include pace script for automatic web page progress bar  -->

    <script>
        paceOptions = {
            elements: true
        };
    </script>
    <script src="js/pace.min.js"></script>
</head>
<body>
<div id="wrapper">
    <div class="header">
        <nav class="navbar   navbar-site navbar-default" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                        <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span
                            class="icon-bar"></span> <span class="icon-bar"></span></button>
                    <a href="index.php" class="navbar-brand logo logo-title">
                        <!-- Original Logo will be placed here  -->
                        <span class="logo-icon"><i class="fa fa-graduation-cap fa-fw"></i> </span>
                        My<span>Scholarships </span> </a>
                </div>
                 <div class="navbar-collapse collapse">

                    <ul class="nav navbar-nav navbar-right">
                    <?php  
                        if(isset($_SESSION['Email']))
                        {
                            if($_SESSION['Role'] == "Member"){
                            // if sudah login
                    ?>

                        <li><a href="blog.php">Blog</a></li>
                        <li><a href="about-us.php">About Us</a></li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span><i class="fa fa-user fa-fw"></i>
                                <?php 
                                    echo $_SESSION['Firstname' ];
                                ?>
                            </span><i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu user-menu">
                                <li class="active"><a href="profile.php"><i class="fa fa-home fa-fw"></i> Profile</a></li>
                                <li><a href="dashboard.php"><i class="fa fa-line-chart fa-fw"></i> Dashboard</a></li>
                                <li><a href="myscholarships.php"><i class="fa fa-graduation-cap fa-fw"></i> My Scholarships</a></li>
                                <li><a href="universities.php"><i class="fa fa-university fa-fw"></i> Universities</a></li>
                                <li><a href="mod/dologout.php"><i class="fa fa-power-off fa-fw"></i> Logout</a></li>
                            </ul>
                        </li>
                    <?php 
                            }else{
                                //dropdown admin
                                
                    ?>
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span><i class="fa fa-user fa-fw"></i>Admin </span><i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu user-menu">
                                <li><a href="admin/admin-scholarships.php"><i class="fa fa-graduation-cap fa-fw"></i> Scholarships</a></li>
                                <li class=""><a href="admin/admin-universities.php"><i class="fa fa-university fa-fw"></i> Universities</a></li>
                                <li><a href="admin/admin-blog.php"><i class="fa fa-rss fa-fw"></i> Blog</a></li>
                                <li><a href=""><i class="fa fa-question fa-fw"></i> Whatever</a></li>
                                <li><a href="mod/dologout.php"><i class="fa fa-power-off fa-fw"></i> Logout</a></li>
                            </ul>
                        </li>
                        
                    <?php
                            }
                        }else{             
                        // if belum login               
                    ?>
                        <li><a href="blog.php">Blog</a></li>
                        <li><a href="about-us.php">About Us</a></li>
                        <li><a href="login.php">Login</a></li>
                        <li><a href="signup.php">Sign Up</a></li>
                        <?php } ?>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
    </div>
    <!-- /.header -->

    <div class="intro-inner">
        <div class="about-intro" style="
    background:url(images/bg2.jpg) no-repeat center;
	background-size:cover;">

            <div class="dtable hw100">
                <div class="dtable-cell hw100">
                    <div class="container text-center">

                        <h1 class="intro-title animated fadeInDown"> Privacy Policy </h1>


                    </div>
                </div>
            </div>


        </div>
        <!--/.about-intro -->

    </div>
    <!-- /.intro-inner -->

    <div class="main-container inner-page">
        <div class="container">
            <div class="section-content">
                <div class="row ">
                </div>
                <div class="container-content">

                    <div class="inner-box ">


                        
                        <div class="w100 clearfix">
                            <h3> What information do we collect? </h3>

                            <p> We collect information from you when you register on our site, fill out a form, complete your "Parameters," search for scholarships or perform any other activity on the Website. We may also collect your internet protocol address, first and last name, home or other physical address, including street name and name of a city or town, and billing information, such as billing name and address, bank account number, routing number and in some instances a credit card number and/or other identifier that permits the physical or online contacting of a specific individual, depending on your activities while on the Website and/or User-Generated Content.</p>
                            <hr>

                            <!--Section-->

                            <h3> What we use information for? </h3>

                            <p> Any of the information we collect from you may be used in one of the following ways: to personalize your experience (your information helps us to better respond to your individual needs); to improve the Website and/or User-Generated Content (we continually strive to improve our offerings based on the information and feedback we receive from you); to improve customer service (your information helps us to more effectively respond to your customer service requests and support needs); to send periodic emails. We can also use your information to monitor and assemble analytics pertaining to an individual's use of the Website. If you provide information in relation to a registration of an Account, the email address you provide for order processing, may be used to send you information and updates pertaining to your order, in addition to receiving occasional company news, updates, related product or service information, etc. If at any time you would like to unsubscribe from receiving future emails, we include detailed unsubscribe instructions at the bottom of each email. <br><br>
                            We may disclose any information (other than billing information) to outside parties. We may sell, trade, or otherwise transfer to outside parties your personally identifiable information. This includes trusted third parties who assist us in operating our website, conducting our business, or servicing you, so long as those parties agree to keep this information confidential. We may also release your information when we believe release is appropriate to comply with the law, enforce our site policies, or protect ours or others' rights, property, or safety. Customer email addresses and any personal customer information will not be sold to or otherwise shared with third parties for marketing purposes. Individual records may at times be viewed or accessed only for the purpose of resolving a problem, support issue, or as may be required by law. Of course, registered users are responsible for maintaining the confidentiality and security of their user registration and password. we may aggregate data together in an anonymous fashion to generate reporting for internal analysis or distribution as it sees fit and may, at its sole discretion, choose to offer such reporting for promotional purposes and/or monetary gain. All aggregated and reported User Content shall be 100% anonymous.<br><br>
                            we may also track and analyze non-identifying and aggregate usage and volume statistical information from our visitors and customers and provide such information to third parties.</p>
                            <hr>

                            <!--Section-->

                            <h3> Third Party Links </h3>

                            <p>THE WEBSITE MAY PROVIDE ACCESS TO THIRD PARTY PRODUCTS OR SERVICES ON OUR WEBSITE, INCLUDING OFFERS TO APPLY FOR ACADEMIC SCHOLARSHIPS OR OTHER BENEFITS. THESE THIRD PARTY SITES HAVE SEPARATE AND INDEPENDENT PRIVACY POLICIES. WE THEREFORE HAVE NO RESPONSIBILITY OR LIABILITY FOR THE CONTENT AND ACTIVITIES OF THESE LINKED SITES. NONETHELESS, WE SEEK TO PROTECT THE INTEGRITY OF OUR SITE AND WELCOME ANY FEEDBACK ABOUT THESE SITES.</p>
                            <hr>

                            <!--Section-->

                            <h3> Online Privacy Policy Only </h3>

                            <p>This online Privacy Policy applies only to information collected through our website and not to information collected offline.</p>
                            <hr>

                            <!--Section-->

                            <h3> Changes to our Privacy Policy </h3>

                            <p>If we decide to change our Privacy Policy, we will post those changes on this page. Those changes will be immediately effective upon their posting even if posted without notice.</p>

                            <hr>

                            <!--Section-->

                            <h3> Public Forums </h3>

                            <p>We may offer chat rooms, message boards, bulletin boards, or similar public forums where you and other users of our Website and/or Apps and/or User-Generated Content and/or Services can communicate. The protections described in this Privacy Policy do not apply when you provide information (including personal information) in connection with your use of these public forums. We may use personally identifiable and non-personal information about you to identify you with a posting in a public forum. Any information you share in a public forum is public information and may be seen or collected by anyone, including third parties that do not adhere to our Privacy Policy. We are not responsible for events arising from the distribution of any information you choose to publicly post or share through the Website and/or Features and/or User-Generated Content.</p>
                            <hr>

                            <!--Section-->

                            <h3> Keeping Your Information Secure </h3>

                            <p>We have implemented security measures we consider reasonable and appropriate to protect against the loss, misuse and alteration of the information under our control. Please be advised, however, that while we strive to protect your personally identifiable information and privacy, we cannot guarantee or warrant the security of any information you disclose or transmit to us online and are not responsible for the theft, destruction, or inadvertent disclosure of your personally identifiable information. In the unfortunate event that your "personally identifiable information" (as the term or similar terms are defined by any applicable law requiring notice upon a security breach) is compromised, we may notify you by email (at our sole and absolute discretion) to the last email address you have provided us in the most expedient time reasonable under the circumstances; provided, however, delays in notification may occur while we take necessary measures to determine the scope of the breach and restore reasonable integrity to the system as well as for the legitimate needs of law enforcement if notification would impede a criminal investigation. From time to time we evaluate new technology for protecting information, and when appropriate, we upgrade our information security systems.</p>
                            <hr>

                            <!--Section-->

                            <h3> Contact and Opt-Out Information </h3>

                            <p>You may contact us as at info@mywe.com if: (a) you have questions or comments about our Privacy Policy; (b) wish to make corrections to any personally identifiable information you have provided; (c) want to opt-out from receiving future commercial correspondence, including emails, from us or our affiliated companies; or (d) wish to withdraw your consent to sharing your personally identifiable information with others. We will respond to your request and, if applicable and appropriate, make the requested change in our active databases as soon as reasonably practicable. Please note that we may not be able to fulfill certain requests while allowing you access to certain benefits and features of our Website.</p>
                            <hr>

                            <!--Section-->

                            <h3> Sole Statement </h3>

                            <p>This Privacy Policy as posted on this Website is the sole statement of our privacy policy with respect to the Website, and no summary, modification, restatement or other version thereof, or other privacy statement or policy, in any form, is valid unless we post a new or revised policy to the Website.</p>
                            <hr>

                            <!--Section-->

                            <h3> COPYRIGHT POLICY </h3>

                            <p>we, Inc. ("we"), respects the intellectual property interests of other parties. If you believe that your work has been copied in a way that constitutes copyright infringement, please provide we's copyright agent the written information specified below. Please note that this procedure is exclusively for notifying we and its affiliates that your copyrighted material has been infringed:
                            <ul class="list-number">
                                <li>An electronic or physical signature of the person authorized to act on behalf of the owner of the copyright interest;</li>
                                <li>A copy of the copyrighted work that you claim has been infringed, or a description of the copyrighted work, including the URL (i.e., web page address) of the location where the copyrighted work exists;</li>
                                <li>Identification of the URL or other specific location on the Website where the material that you claim is infringing is located;</li>
                                <li>A statement by you that you have a good faith belief that the disputed use is not authorized by the copyright owner, its agent, or the law;</li>
                                <li>A statement by you, made under penalty of perjury, that the information in your notice is accurate and that you are the copyright owner or authorized to act on the copyright owner's behalf; and</li>
                                <li>Your address, telephone number, and e-mail address.</li>
                            </ul></p>
                            <hr>

                            <!--Section-->

                            <h3> Limitation on Liability </h3>

                            <p><strong>A. </strong>UNDER NO CIRCUMSTANCES SHALL we, AND ITS EMPLOYEES, AGENTS, DISTRIBUTION PARTNERS, AFFILIATES, SUBSIDIARIES AND THEIR RELATED COMPANIES BE LIABLE FOR INDIRECT, INCIDENTAL, SPECIAL, CONSEQUENTIAL OR EXEMPLARY DAMAGES ARISING OUT OF, RELATING TO, OR IN ANY WAY CONNECTED WITH THE WEBSITE AND/OR THESE TERMS. YOUR SOLE REMEDY FOR DISSATISFACTION WITH THE WEBSITE INCLUDING, WITHOUT LIMITATION, THE WEBSITE IS TO STOP USING THE WEBSITE. SUCH LIMITATION SHALL ALSO APPLY WITH RESPECT TO DAMAGES INCURRED BY REASON OF SERVICES OR PRODUCTS RECEIVED THROUGH OR ADVERTISED IN CONNECTION WITH THE WEBSITE OR ANY LINKS ON THE WEBSITE, AS WELL AS BY REASON OF ANY INFORMATION OR ADVICE RECEIVED THROUGH OR ADVERTISED IN CONNECTION WITH ANY OF THE WEBSITE OR ANY LINKS ON THE WEBSITE. SUCH LIMITATION SHALL ALSO APPLY WITH RESPECT TO DAMAGES INCURRED BY REASON OF ANY CONTENT POSTED BY A THIRD-PARTY OR CONDUCT OF A THIRD-PARTY ON THE WEBSITE.</p>

                            <p><strong>B. </strong>NOTWITHSTANDING ANYTHING TO THE CONTRARY CONTAINED HEREIN, IN NO EVENT SHALL THE CUMULATIVE LIABILITY OF we AND ITS EMPLOYEES, AGENTS, DISTRIBUTION PARTNERS, AFFILIATES, SUBSIDIARIES AND THEIR RELATED COMPANIES EXCEED THE AMOUNT OF THE SINGLE INSTANCE REGISTRATION FEE PAID TO we BY THE USER.</p>

                            <p><strong>C. </strong>YOU AGREE THAT REGARDLESS OF ANY STATUTE OR LAW TO THE CONTRARY, ANY CLAIM OR CAUSE OF ACTION ARISING OUT OF OR RELATED TO YOUR USE OF THE WEBSITE, OR IN ANYWAY RELATED TO THESE TERMS, MUST BE FILED WITHIN SIX (6) MONTHS AFTER SUCH CLAIM OR CAUSE OF ACTION AROSE OR SUCH CLAIM WILL BE FOREVER BARRED.</p>

                            <p><strong>D. </strong>IN SOME JURISDICTIONS LIMITATIONS OF LIABILITY ARE NOT PERMITTED. IN SUCH JURISDICTIONS, SOME OF THE FOREGOING LIMITATIONS MAY NOT APPLY TO YOU. NOTWITHSTANDING, THESE LIMITATIONS SHALL APPLY TO THE FULLEST EXTENT PERMITTED BY LAW.</p>

                            <p><strong>E. </strong>Disputes involving we. In the event that a lawsuit is filed against a User of we, and we needs to seek legal counsel for any involvement in the matter, the User shall pay for all legal fees associated with the lawsuit. This clause in no way limits we's right to hire legal counsel of its choice.</p>
                            <hr>

                            <!--Section-->

                            <h3> Termination </h3>

                            <p><strong>A. </strong>We reserve the right in our sole discretion and at any time to terminate or suspend your Account and/or block your access to the Website for any reason including, without limitation if you have failed to comply with the letter and spirit of these Terms. You agree that we shall not be liable to you or any third party for any termination or suspension of your Account or for blocking your access to the Website and/or any User-Generated Content that may reside there.</p>

                            <p><strong>B. </strong>If you become a registered user, you may terminate your Account at any time by accessing your Account and deleting it. Before any Account may be deleted, any outstanding charges issued against the Account must be paid.</p>

                            <p><strong>C. </strong>Any suspension or termination shall not affect your obligations to us under these Terms. The provisions of these Terms which by their nature should survive the suspension or termination of your Account or these Terms shall survive including, but not limited to the rights and licenses that you have granted hereunder, indemnities, releases, disclaimers, limitations on liability, and provisions related to choice of law.</p>
                            <hr>

                            <!--Section-->

                            <h3>Choice of Law; Forum</h3>

                            <p>These Terms shall be construed in accordance with the laws of the Commonwealth of Pennsylvania of the United States of America, without regard to its conflict of laws rules. <br>
                            we makes no representation that materials on the Website are appropriate or available for use in other locations. If you access this site from another location, you do so on your own initiative and are responsible for compliance with local laws, if, and to the extent they are applicable. The parties consent to the exclusive jurisdiction and venue of the federal and state courts located in Philadelphia, Pennsylvania in any action arising out of or relating to these Terms. The parties waive any other venue to which either party might be entitled by domicile or otherwise.</p>
                            <hr>

                            <!--Section-->

                            <h3>Amendment; Additional Terms</h3>

                            <p><strong>A. </strong>We reserve the right in our sole discretion and at any time and for any reason, to modify or discontinue any aspect or feature of the Website or to modify these Terms.</p>

                            <p><strong>B. </strong>In addition, we reserve the right to provide you with operating rules or Additional Terms that may govern your use of the Website generally, unique parts of the Website, or both ("Additional Terms"). Any Additional Terms that we may provide to you will be incorporated by reference into these Terms. To the extent any Additional Terms conflict with these Terms, the Additional Terms will control.</p>

                            <p><strong>C. </strong>Modifications to these Terms or Additional Terms will be effective immediately upon notice, either by posting on the Website or by notification by email or conventional mail. It is your responsibility to review these Terms and the Website from time to time for any changes or Additional Terms. Your access and use of any the Website following any modification of these Terms or the provision of Additional Terms will signify your assent to and acceptance of the same. If you object to any subsequent revision to the Terms or to any Additional Terms, you may terminate your Account as provided in Section XII above or, if you do not have an Account, your only recourse is to immediately discontinue use of the Website.</p>
                            <hr>

                            <!--Section-->

                            <h3>Choice of Law; Mandatory Arbitration</h3>

                            <p><strong>A. </strong>THIS AGREEMENT, THE WEBSITE AND/OR ANY DISPUTE ARISING THEREFROM SHALL BE GOVERNED BY AND CONSTRUED ACCORDING TO THE LAWS OF THE COMMONWEALTH OF PENNSYLVANIA. THE PARTIES WAIVE ANY OTHER VENUE TO WHICH EITHER PARTY MIGHT BE ENTITLED BY DOMICILE OR OTHERWISE. we MAKES NO REPRESENTATION THAT MATERIALS ON THE WEBSITE ARE APPROPRIATE OR AVAILABLE FOR USE IN OTHER LOCATIONS. WITH RESPECT TO ANY DISPUTE ARISING OUT OF OR RELATED TO THIS AGREEMENT, THE PARTIES HEREBY AGREE THAT ALL DISPUTES ARISING UNDER THIS AGREEMENT SHALL PROMPTLY BE SUBMITTED TO ARBITRATION IN PHILADELPHIA, PENNSYLVANIA, BEFORE ONE ARBITRATOR IN ACCORDANCE WITH THE RULES OF THE AMERICAN ARBITRATION ASSOCIATION. THE ARBITRATOR MAY ASSESS COSTS IN FAVOR OF we ONLY, INCLUDING COUNSEL FEES, IN SUCH MANNER AS THE ARBITRATOR DEEMS FAIR AND EQUITABLE. THE AWARD OF THE ARBITRATOR SHALL BE FINAL AND BINDING UPON ALL PARTIES, AND JUDGMENT UPON THE AWARD MAY BE ENTERED IN ANY COURT OF COMPETENT JURISDICTION. THE PARTIES HEREBY WAIVE ANY RIGHT TO A TRIAL BY JURY IN CONNECTION WITH ANY DISPUTE ARISING OUT OF THIS AGREEMENT, THE WEBSITE AND/OR ANY DISPUTE ARISING THEREFROM.</p>
                            <hr>

                            <!--Section-->

                            <h3>Miscellaneous</h3>

                            <p><strong>A. </strong>Any delay or failure on the part of us to exercise or enforce any rights under these Terms to which we may be entitled shall not, in any event, be construed as a waiver of the right and privilege to do so at any subsequent time. You irrevocably agree that you waive any and all rights to injunctive or other equitable relief. The section headings used herein are for convenience only and shall not be given any legal import. If any provision of these Terms is held to be invalid or unenforceable, the invalidity of such provision shall not affect the validity of the remaining provisions of the Terms, which shall remain in full force and effect.</p>

                            <p><strong>B. </strong>These Terms (including the Privacy Policy, Copyright Policy and any Additional Terms incorporated by reference) constitute the entire agreement of the parties with respect to the subject matter hereof, and supersede all previous written or oral agreements between us with respect to such subject matter.</p>

                            <p><strong>C. </strong>You may not assign these Terms or assign any rights or delegate any obligations hereunder, in whole or in part, without our prior written consent. Any such purported assignment or delegation by you without the appropriate prior written consent will be null and void and of no force and effect. we reserves the right to transfer or assign these Terms or any right or obligation under these Terms at any time.</p>

                            <p><strong>D. </strong>Notices. Except as otherwise set forth herein, notices made by us to you under these Terms that affect our customers generally (e.g., notices of Additional Terms, etc.) will be posted on the Website. Notices made by us under these Terms for you or your Account specifically (e.g., notices of breach and/or suspension) will be provided to you via the email address provided to us in your registration for the Account or in any updated e-mail address you provide to us in accordance with standard account information update procedures we may provide from time to time. It is your responsibility to keep your email address current and you will be deemed to have received any email sent to any such email address, upon our sending of the email, whether or not you actually receive the email. For notices made by you to us under these Terms and for questions regarding these Terms or the Services, you may contact Terms as follows: we, Inc., ATTN: LEGAL, 30 South 15th St., Philadelphia, PA 19102, and info@mywe.com. All communications and notices to be made or given pursuant to these Terms shall be in the English language.</p>

                            <p><strong>E. </strong>Relationship. Nothing contained in these Terms shall be deemed to constitute either party a partner, joint venturer or employee of the other party for any purpose.</p>

                            <p><strong>F. </strong>Force Majeure. we shall not be liable for any default, delay in the performance of any of its obligations under these Terms or your inability to access the Website and/or User-Generated Content if such default or delay is caused, directly or indirectly, by forces beyond we's reasonable control, including, without limitation, fire, flood, acts of God, labor disputes, accidents, acts of war or terrorism, interruptions of transportation or communications (including third party integrations related to social media, server malfunctions, or any other mechanical, electronic, or communication error), power outages, supply shortages or the failure of any third party to perform any commitment relating to the production or delivery of any equipment or material required for we to perform its obligations hereunder.</p>

                            <p><strong>G. </strong>Attorney's Fees. In any dispute arising out of or related to these Terms, we shall have the right to collect from the other party its reasonable attorney fees and costs and necessary expenditures and such punitive and/or liquidated damages as the arbiter deems appropriate and just. <br>
                            BY CLICKING THE "ACCEPT" BUTTON FOR THESE TERMS, INCLUDING PRIVACY POLICY OR ACCEPTING ANY MODIFICATION TO THESE TERMS IN ACCORDANCE WITH SECTION XIV ABOVE, YOU AGREE TO BE BOUND BY THE TERMS AND CONDITIONS OF THESE TERMS. IF YOU ARE ENTERING INTO THESE TERMS ON BEHALF OF A COMPANY OR OTHER LEGAL ENTITY, YOU REPRESENT THAT YOU HAVE THE LEGAL AUTHORITY TO BIND THE LEGAL ENTITY TO THESE TERMS, IN WHICH CASE "YOU" SHALL MEAN SUCH ENTITY. IF YOU DO NOT HAVE SUCH AUTHORITY, IF YOU ARE UNDER THE AGE OF THIRTEEN, OR IF YOU DO NOT AGREE WITH THE TERMS AND CONDITIONS OF THESE TERMS, YOU MUST SELECT THE "DECLINE" BUTTON AND YOU MAY NOT USE THE WEBSITE.</p>
                            <hr>
                        </div>
                    </div>


                </div>


            </div>
        </div>
    </div>
    <!-- /.main-container -->
    

    <div class="footer" id="footer">
        <div class="container">
            <ul class="navbar-link footer-nav text-center">
                <li><a href="contact.php"> Contact us </a> <a href="terms-conditions.php"> Terms and
                    Conditions </a> <a href="privacy-policy.php"> Privacy Policy </a> <a
                        href="faq.php"> FAQ </a></li>
            </ul>
            <br>
            <ul class="navbar-link footer-nav text-center">
                <li><a href=""><i class="fa fa-facebook fa-2x"></i></a>
                	<a href=""><i class="fa fa-twitter fa-2x"></i></a>
                    <a href=""><i class="fa fa-instagram fa-2x"></i></a>
                    </li>
            </ul>
        </div>

    </div>
    <!-- /.footer -->
</div>
<!-- /.wrapper -->

<!-- Le javascript
================================================== -->

<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

<!-- include carousel slider plugin  -->
<script src="js/owl.carousel.min.js"></script>

<!-- include form-validation plugin || add this script where you need validation   -->
<script src="js/form-validation.js"></script>

<!-- include equal height plugin  -->
<script src="js/jquery.matchHeight-min.js"></script>

<!-- include jquery list shorting plugin plugin  -->
<script src="js/hideMaxListItem.js"></script>

<!-- include jquery.fs plugin for custom scroller and selecter  -->
<script src="plugins/jquery.fs.scroller/jquery.fs.scroller.js"></script>
<script src="plugins/jquery.fs.selecter/jquery.fs.selecter.js"></script>
<!-- include custom script for site  -->
<script src="js/script.js"></script>
</body>
</html>
