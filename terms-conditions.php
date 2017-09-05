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
    <title>MyScholarships - Terms and Conditions</title>
    <link rel="icon" href="ico/myscholarships.png">
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

                        <h1 class="intro-title animated fadeInDown"> Terms and Conditions </h1>


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


                        <p><strong> PLEASE READ THESE TERMS OF SERVICE (THESE "TERMS") CAREFULLY BEFORE USING THE WEBSITE. BY ACCESSING AND/OR USING THE WEBSITE (OTHER THAN TO READ THIS AGREEMENT FOR THE FIRST TIME), YOU ARE AGREEING TO COMPLY WITH THESE TERMS, WHICH MAY CHANGE FROM TIME TO TIME WITHOUT NOTICE TO YOU, AS SET FORTH HEREIN BELOW. <br><br>
                        THIS AGREEMENT IS A BINDING AGREEMENT BETWEEN we AND YOU ("YOU" OR "USER"). YOUR CONTINUED USE OF THE WEBSITE FOLLOWING ANY CHANGES SHALL CONSTITUTE YOUR ACCEPTANCE OF SUCH CHANGES. IF YOU DO NOT AGREE TO THIS AGREEMENT AND/OR THE PRIVACY POLICY AND/OR THE COPYRIGHT POLICY, THEN YOU MAY NOT USE THE WEBSITE AND SHALL DISCONTINUE DOING SO IMMEDIATELY. <br><br>
                        YOU ARE HEREBY, AFTER USAGE OF SAID WEBSITE, ENTERING INTO AND AGREEING TO BE BOUND BY THIS AGREEMENT. <br><br>
                        IF YOU DO NOT AGREE OR WISH TO BE BOUND BY THIS AGREEMENT, DISCONTINUE YOUR USAGE OF THE WEBSITE AND/OR TERMINATE YOUR ACCOUNT IN ACCORDANCE WITH THE TERMS HEREIN.</strong></p>
 
                        <hr>
                        <div class="w100 clearfix">
                            <h3> Intellectual Property </h3>

                            <p> The Website and its content, including, but not limited to, the web-based functionalities commonly referred to as Scholarships, Essays, About Us, Parameters, Search, Matches, Notifications, Saved and/or Details (collectively, the "Features"), and all functionality related incidentally and/or indirectly thereto, (including those web services for which we may specifically provide a separate customer agreement) and any derivative works or enhancements of the same, including, but not limited to, all text, illustrations, files, images, software, scripts, graphics, photos, sounds, music, videos, information, content, materials, products, services, URLs, technology, documentation, and interactive features and all intellectual property rights to the same are owned by we. Additionally, all trademarks, service marks, trade names and trade dress that may appear on the Website are owned by we, we's licensors, or both. Except for the limited use rights granted to you in these Terms, you shall not acquire any right, title or interest in the Website any other intellectual property of we. Any rights not expressly granted in these Terms are expressly reserved.</p>
                            <hr>

                            <!--Section-->

                            <h3> Users </h3>

                            <p> "User" shall mean any individual who completes the registration to become a registered User as set forth herein below, who downloads, installs, views, accesses, and/or uses the Website in any manner, whatsoever, including, but not limited to, You, and other individuals as context may require. <br><br>
                            If you are under the age of 13 years old, then you are not permitted to register as a User or otherwise submit personal information to the Website. we will not knowingly collect any personally identifiable information from children under the age of 13, nor will children under the age of 13 be allowed to register as a User. The Website is not intended for children under the age of 13. we will not knowingly register or otherwise collect personal information from persons who identify themselves as being under the age of 13 during the registration process, without prior consent of such child's parent or guardian. <br><br>
                            To become a registered User, you shall provide true, accurate and complete registration information and, if such information changes, you will promptly update the relevant registration information. During registration, you will create a user name and password, and input identifying information, such as your functioning phone number, email, company and/or educational information, billing information, and possibly credit/debit card information, which may permit you access to certain areas of the Website not available to non-registered users (an "Account"). You are responsible for safeguarding and maintaining the confidentiality of your Account. You are solely responsible for the activity that occurs under your Account, whether or not you have authorized the activity. You agree to notify us immediately at info@mywe.com of any breach of security or unauthorized use of your Account.</p>
                            <hr>

                            <!--Section-->

                            <h3> Usage </h3>

                            <p><strong>A. </strong>In no way is any right, title, interest, or any other portion except for such rights and/or privileges hereby given, to You by we for use strictly in adherence with these Terms. The terms "Website and/or Features and/or Account," in addition to the definitions set forth above, shall include to mean, and refer to the following:
                            <ul class="list-number">
                                <li>any updates, modifications or enhancements thereto regardless of whether the same are accessible by You or not; and</li>
                                <li>any specific website the Website directs you to via any browser located on your Device, if the same is maintained by we, or its affiliates.</li>
                            </ul> <br>
                                "Device" shall mean any computing device capable of operating the Website, including, but not limited to, the iPhone, iPod Touch, iPad, and such other similar products by Apple and/or any mobile devices manufactured and/or implementing Android or any other operating system.</p>

                            <p><strong>B. </strong>In exchange for the Registration Fee, we grants permission to registered Users to operate and/or use the Website on any Device controlled by such registered User, and to access and use the Software on Devices owned and/or controlled by such registered User strictly in accordance with these Terms solely for such registered User's own purposes. All rights not expressly granted to such registered User are reserved by we, its affiliates, and licensors. Your rights shall allow such registered User to use the Software on any Device that such registered User owns and/or controls, and as permitted by the usage rules.
                            <ul class="list-number">
                                <li>You may not access the Website if you are a direct competitor of we, except with we's prior written consent. In addition, you may not access the Website for the purposes of monitoring its availability, performance, functionality, or for any other benchmarking or competitive purpose.</li>
                                <li>You agree that at all times while using the Website that you will comply with all Applicable Federal, State, international, and local laws including, without limitation, copyright law. Except as expressly permitted in these Terms, You may not use, reproduce, distribute, create derivative works based upon, publicly display, publicly perform, publish, transmit, or otherwise exploit the Application for any purpose, whatsoever, without obtaining prior written consent from we, any third-party, or other Users in the case of User-Generated Content, as set forth hereinafter, who is the respective owner of such content. You hereby expressly acknowledge that you do not acquire any ownership rights or interests of any nature by way of any usage of the Website, and that we may revoke your rights, privileges and/or access without any notice to You whatsoever, and thereby your rights to continued usage of the Website and/or any of your information stored therein or associated therewith.</li>
                            </ul> </p>
                                
                            <p><strong>C. </strong>These rights hereby established by these Terms shall be effective until terminated. we MAY TERMINATE YOUR RIGHTS AND/OR THESE TERMS WITH, OR WITHOUT ANY NOTICE TO YOU WHATSOEVER.</p>
                            <p><strong>D. </strong>we may, in its sole and absolute discretion, at any time and for any or no reason, suspend or terminate these Terms, the Website and/or Account, Your usage and access to same, and any rights or privileges afforded to You hereunder with or without prior notice. Furthermore, if You fail to comply with any terms and conditions of these Terms, then these Terms and any rights granted to You shall terminate automatically, without any notice or other action by Company. Upon the termination of these Terms, You shall cease all use of the Website and delete the Account.</p>
                            <hr>

                            <!--Section-->

                            <h3> Content Generated by Registered Users </h3>

                            <p><strong>A. </strong>we may now, or in the future, permit registered Users to post, upload, transmit through, or otherwise make available on the Website (collectively, "Submit") messages, text, illustrations, files, images, graphics, photos, comments, sounds, music, videos, information, content, financial information, legal information and/or other materials ("User-Generated Content"). USER-GENERATED CONTENT INCLUDES INFORMATION ABOUT YOU SUBMITTED TO we DURING REGISTRATION FOR THE WEBSITE AND INFORMATION SUBMITTED TO we IN THE COURSE OF SEARCHING FOR SCHOLARSHIPS, SUCH AS THAT INFORMATION ENTERED INTO THE "PARAMETERS." BY SUBMITTING USER-GENERATED CONTENT TO THE WEBSITE, YOU ASSIGN AND TRANSFER ALL RIGHT AND TITLE THEREIN TO we TO THE FULLEST EXTENT PERMITTED BY LAW. AS SUCH, we MAY USE, REPRODUCE, MODIFY, ADAPT, PUBLISH, TRANSLATE, CREATE DERIVATIVE WORKS FROM, DISTRIBUTE, PERFORM, AND DISPLAY ALL USER-GENERATED CONTENT, INCLUDING, BUT NOT LIMITED TO, REMARKS, SUGGESTIONS, IDEAS, GRAPHICS, OR OTHER INFORMATION COMMUNICATED TO we THROUGH THE WEBSITE, AND TO INCORPORATE ANY USER-GENERATED CONTENT IN OTHER WORKS IN ANY FORM, MEDIA, OR TECHNOLOGY NOW KNOWN OR LATER DEVELOPED. we WILL ALSO BE FREE TO USE ANY IDEAS, CONCEPTS, KNOW-HOW OR TECHNIQUES CONTAINED IN THE USER-GENERATED CONTENT FOR ANY PURPOSE WHATSOEVER INCLUDING, WITHOUT LIMITATION, DEVELOPING, MANUFACTURING AND MARKETING PRODUCTS AND SERVICES INCORPORATING SUCH INFORMATION. To the extent that any User-Generated Content may not be legally assigned or transferred as stated above, You hereby grant to such non-assignable/non-transferrable User-Generated Content to we the royalty-free, perpetual (or otherwise longest duration permitted by law), irrevocable, transferrable, worldwide, non-exclusive right and license to use, reproduce, modify, adapt, publish, translate, create derivative works from, distribute, perform, and display all such User-Generated Content, and to incorporate any such User- Generated Content in other works in any form, media, or technology now known or later developed. we will not be required to treat any User- Generated Content as confidential, and may use any User-Generated Content in its business (including without limitation, for products or advertising) without incurring any liability for royalties or any other consideration of any kind, and will not incur any liability as a result of any similarities that may appear in future we operations.</p>

                            <p><strong>B. </strong>we cannot guarantee any confidentiality with respect to User-Generated Content and we specifically reserves the express right to monitor User- Generated Content as it sees fit—even where such information has not been made public and is under a registered Account. we will not be required to treat any Submission as confidential, and may use any Submission in its business (including without limitation, for products or advertising) without incurring any liability for royalties or any other consideration of any kind, and will not incur any liability as a result of any similarities that may appear in future we operations. we reserves the right to utilize User-Generated Content for promotional or other purposes as reflected in our Privacy Policy. Otherwise, it is solely Your responsibility to monitor and protect any intellectual property rights that you may have in Your User-Generated Content, and we does not accept any responsibility for same. You agree that we has no such responsibility. You are responsible to comply with all terms and conditions applicable to Your User-Generated Content. we will treat any personal information that you submit through this site in accordance with its Privacy Policy.</p>
                            <p><strong>B. </strong>we cannot guarantee any confidentiality with respect to User-Generated Content and we specifically reserves the express right to monitor User- Generated Content as it sees fit—even where such information has not been made public and is under a registered Account. we will not be required to treat any Submission as confidential, and may use any Submission in its business (including without limitation, for products or advertising) without incurring any liability for royalties or any other consideration of any kind, and will not incur any liability as a result of any similarities that may appear in future we operations. we reserves the right to utilize User-Generated Content for promotional or other purposes as reflected in our Privacy Policy. Otherwise, it is solely Your responsibility to monitor and protect any intellectual property rights that you may have in Your User-Generated Content, and we does not accept any responsibility for same. You agree that we has no such responsibility. You are responsible to comply with all terms and conditions applicable to Your User-Generated Content. we will treat any personal information that you submit through this site in accordance with its Privacy Policy.</p>
                            <p><strong>C. </strong>You shall not submit any User-Generated Content protected by copyright, trademark, patent, trade secret, moral right, or other intellectual property, personal, contractual, proprietary or other third party right without the express permission of the owner of the respective right. YOU ARE SOLELY LIABLE FOR ANY DAMAGE RESULTING FROM YOUR FAILURE TO OBTAIN SUCH PERMISSION OR FROM ANY OTHER HARM RESULTING FROM USER-GENERATED CONTENT THAT YOU SUBMIT.</p>
                            <p><strong>D. </strong>You represent, warrant, and covenant that you will not submit any User- Generated Content that:
                            <ul class="list-number">
                                <li>Violates or infringes in any way upon the rights of others, including, but not limited to, any copyright, trademark, patent, trade secret, moral right, or other intellectual property, personal, contractual, proprietary or other third party right of any person or entity;</li>
                                <li>Impersonates another or is unlawful, threatening, abusive, harassing, libelous, defamatory, invasive of privacy or publicity rights, vulgar, obscene, profane, pornographic, lewd, lascivious, filthy, excessively violent, harassing or otherwise objectionable;</li>
                                <li>Encourages conduct that would constitute a criminal offense, give rise to civil liability or otherwise violate any law;</li>
                                <li>Is an advertisement for goods or services (without we's express written permission);</li>
                                <li>Unnecessarily includes personal information;</li>
                                <li>Contains a formula, instruction, or advice that could cause harm or injury;</li>
                                <li>Is a chain letter of any kind;</li>
                                <li>The licensed use by us hereunder would result in us having any obligation or liability to any party; or</li>
                                <li>Violates any of the exclusions to use set forth in Section V(B) below.</li>
                                <li>Amounts to any conduct by a user that in our sole discretion restricts or inhibits any other user from using or enjoying the Website, which will not be permitted.</li>
                            </ul></p>
                            <p><strong>E. </strong>WE RESERVE THE RIGHT TO DELETE, DISABLE OR OTHERWISE ELIMINATE FROM THE WEBSITE ANY USER-GENERATED CONTENT THAT WE DEEM VIOLATIVE OF THESE TERMS AND/OR ANY RULE OF LAW, REGULATION OR PROTOCOL, IN OUR SOLE DISCRETION.</p>
                            <p><strong>F. </strong>We have the right, but not the obligation, to monitor all User-Generated Content. We have no obligation to post, maintain or otherwise make use of User-Generated Content and do not guarantee distribution of User-Generated Content. We may discontinue operation of the Website and/or ser-Generated Content, or your use of the Website and/or User-Generated Content, in either case in whole or in part, in our sole discretion. You have no right to maintain or access your User-Generated Content on the Website and we have no obligation to return your User-Generated Content or otherwise make it available to you.</p>
                            <p><strong>G. </strong>The rights granted by you hereunder may not be terminated, revoked or rescinded and are not subject to reversion. If you become aware that User-Generated Content you have submitted includes any material for which you lack the unrestricted right to grant us the rights set forth above without obligations or liability to any party, you agree to promptly provide us with detailed written notice thereof to we, Inc, ATTN: LEGAL, 30 South 15th St., Philadelphia, PA 19102, and info@mywe.com.</p>
                            <p><strong>H. </strong>We strive to keep User-Generated Content secure but cannot guarantee that we will be successful at doing so, given the nature of the Internet. Accordingly, you acknowledge that you bear sole responsibility for adequate security, protection, and backup of User-Generated Content. We strongly encourage you, where available and appropriate, to (a) use encryption technology to protect User- Generated Content from unauthorized access, (b) routinely archive User- Generated Content, and (c) keep your User-Generated Content or any software that you use or run with the Website current with the latest security patches or updates. WE SHALL HAVE NO LIABILITY TO YOU FOR ANY UNAUTHORIZED ACCESS OR USE, CORRUPTION, DELETION, DESTRUCTION, OR LOSS OF ANY OF USER-GENERATED CONTENT.</p>
                            <p><strong>I. </strong>Feedback. In the event you elect, in connection with any of the Website, to communicate to us suggestions for improvements to same or to any other property of we, intellectual or otherwise, (collectively, "Feedback"), we shall own all right, title, and interest in and to the same, even if you have designated the Feedback as confidential, and we shall be entitled to use the Feedback without restriction. You hereby irrevocably assign all right, title, and interest in and to the Feedback to us and agree to provide us such assistance as we may require to document, perfect, and maintain our rights to the Feedback.</p>
                            <p><strong>J. </strong>Governmental requests for User-Generated Content. In keeping with our efforts to maintain your privacy, we will not disclose User-Generated Content to any governmental agency, body and/or department unless lawfully sought by presentation to us of a valid Subpoena, warrant or other such document.</p>
                            <p><strong>K. </strong>Digital Communication. we IS NOT RESPONSIBLE FOR COMMUNICATION INITIATED BY REGISTERED USERS THROUGH THE WEBSITE. OUR SERVICE IS A MEANS OF COMMUNICATION FOR REGISTERED USERS ONLY. DIGITAL COMMUNICATION MAY NOT BE AN OFFICIAL LEGAL FORM OF COMMUNICATION FOR ANY REASON. we WILL NOT BE HELD RESPONSIBLE FOR A USER'S FAILURE TO RECEIVE ANY BENEFIT OFFERED ON THE WEBSITE.</p>
                            <hr>

                            <!--Section-->

                            <h3> Access and Use </h3>

                            <p><strong>A. </strong>When using the Website, you agree to comply with all applicable federal, state, and local laws including, without limitation, copyright law. Except as expressly permitted in these Terms, you may not use, reproduce, distribute, create derivative works based upon, publicly display, publicly perform, publish, transmit, or otherwise exploit the Website for any purpose whatsoever without obtaining prior written consent from us or, in the case of third-party content, its respective owner. In certain instances, we may permit you to download or print Website and/or Features and/or Account or both. In such a case, you acknowledge that you do not acquire any ownership rights by downloading or printing any portion of the Website.</p>

                            <p><strong>B. </strong>Except as expressly permitted in these Terms, you may not:
                            <ul class="list-number">
                                <li>Remove, alter, cover, or distort any copyright, trademark, or other proprietary rights notice on the Website;</li>
                                <li>Circumvent, disable or otherwise interfere with security-related features of the Website, without limitation, any features that prevent or restrict use or copying of any content or enforce limitations on the, use of the Website;</li>
                                <li>Use an automatic device (such as a robot or spider) or manual process to copy or scrape the Website for any purpose without the express written permission of we;</li>
                                <li>Collect or harvest any personally identifiable information from the Website besides that information expressly identified in the Privacy Policy;</li>
                                <li>Attempt to or interfere with the proper working of the Website or impair, purposely overburden, or disable the same;</li>
                                <li>Decompile, reverse engineer, or disassemble any portion of any the Website and/or Features and/or Account;</li>
                                <li>Use network-monitoring software to determine architecture of or extract usage data from the Website;</li>
                                <li>Encourage conduct that violates any local, state or federal law, either civil or criminal, or impersonate another user, person, or entity (e.g., accessing another member's account without permission, etc.);</li>
                                <li>Violate U.S. export laws, including, without limitation, violations of the Export Administration Act, the Export Administration Regulations administered by the Department of Commerce and/or the International Traffic in Arms administered by the Department of State;</li>
                                <li>Engage in any conduct that restricts or inhibits any other user from using or enjoying the Website;</li>
                                <li>Use the Website to encourage conduct taking place offline or on other third-party websites that violates any local, state or federal law, either civil or criminal;</li>
                                <li>Fail to remove, eliminate, resolve and/or take down any content allegedly infringing of a third-party's rights of any kind once notice of alleged infringement by we has been given pursuant to the terms herein; and/or</li>
                                <li>You agree to cooperate fully with we to investigate any suspected or actual activity that is in breach of these Terms.</li>
                            </ul></p>

                            <p><strong>C. </strong>we HEREBY EXPRESSLY RESERVES THE RIGHT TO PREVENT ANY USER(S) FROM ACCESSING THE WEBSITE FOR ANY REASON, OR NO REASON, WITHIN ITS SOLE DISCRETION.</p>

                            <p><strong>D. </strong>Registered accounts are protected by and subject to security safeguards. You agree that such safeguards are necessary and further agree that your Account shall be subject to all such safeguards.</p>
                            <hr>

                            <!--Section-->

                            <h3> Conditions for Linking to Website </h3>

                            <p>Upon your acceptance of these Terms as evidenced by your clicking where indicated below your acceptance of and agreement to these Terms, we hereby grant you a non-exclusive, limited license, revocable at our discretion, for you to link to the Website from any site you own or control that is not commercially competitive with the Website and does not criticize or otherwise injure the Website, so long as the site where the link resides, and all other locations to which such site links, comply with all applicable laws and do not in any way abuse, defame, stalk, threaten or violate the rights of privacy, publicity, intellectual property or other legal rights of others or, in any way, post, publish, distribute, disseminate or facilitate any inappropriate, infringing, defamatory, profane, indecent, obscene or illegal/unlawful information, topic, name or other material or that violates the spirit of our mission. Such a link is not an endorsement of such other site(s) by us. All of our rights and remedies are expressly reserved.</p>
                            <hr>

                            <!--Section-->

                            <h3> Third-Party Links </h3>

                            <p><strong>A. </strong>In all instances, it is your responsibility to evaluate the accuracy, timeliness, completeness, or usefulness of information displayed by the Website. UNDER NO CIRCUMSTANCES WILL we BE LIABLE FOR ANY LOSSES OR DAMAGES CAUSED BY ANY USER'S RELIANCE ON ANY INFORMATION DISPLAYED BY THE WEBSITE, INCLUDING, BUT NOT LIMITED TO, ANY AND ALL INFORMATION RELATING TO ANY OFFERS FOR SCHOLARSHIPS, AWARDS, PAYMENTS OR ANY OTHER BENEFIT OFFERED TO ANY USER OF ANY KIND BY ANY OFFEROR.</p>

                            <p><strong>B. </strong>In some instances, Website and/or Features and/or Account will include content posted by a third-party or will represent the opinions and judgments of a third- party. We do not endorse, warrant and are not responsible for the accuracy, timeliness, completeness, or reliability of any opinion, advice, or statement made on the Website by anyone other than authorized employees or spokespersons while acting in their official capacities.</p>

                            <p><strong>C. </strong>YOU ACKNOWLEDGE THAT we DOES NOT INVESTIGATE, MONITOR, REPRESENT OR ENDORSE THE THIRD-PARTY CONTENT AND SERVICES (INCLUDING ANY THIRD-PARTY WEBSITES, OR OTHER SERVICES, AVAILABLE THROUGH THE WEBSITE). FURTHERMORE, YOUR ACCESS TO AND USE OF THE THIRD-PARTY CONTENT AND SERVICES IS AT YOUR SOLE DISCRETION AND RISK, AND we AND ITS AFFILIATES, PARTNERS, SUPPLIERS AND LICENSORS, SHALL HAVE NO LIABILITY TO YOU ARISING OUT OF OR IN CONNECTION WITH YOUR ACCESS TO AND USE OF THE THIRD-PARTY CONTENT AND SERVICES. we HEREBY DISCLAIMS ANY REPRESENTATION, WARRANTY, OR GUARANTY REGARDING THE THIRD-PARTY CONTENT AND SERVICES, WHETHER EXPRESS, IMPLIED, OR STATUTORY, INCLUDING, WITHOUT LIMITATION, THE IMPLIED WARRANTIES OF MERCHANTABILITY OR FITNESS FOR A PARTICULAR PURPOSE, AND ANY REPRESENTATION, WARRANTY, OR GUARANTY REGARDING THE AVAILABILITY, QUALITY, RELIABILITY, FEATURES, APPROPRIATENESSS, ACCURACY, COMPLETENESS, OR LEGALITY OF THE THIRD-PARTY CONTENT AND SERVICES.</p>

                            <p><strong>D. </strong>The Website may contain links to other websites maintained by third-parties, including the payment processor for the payment of the Registration Fee. We do not operate or control, in any respect, or necessarily endorse the content found on these third-party websites. You assume sole responsibility for your use of third-party links. We are not responsible for any content posted on third-party websites or liable to you for any loss or damage of any sort incurred as a result of your dealings with any third-party or their website.</p>
                            <hr>

                            <!--Section-->

                            <h3> User Liability </h3>

                            <p><strong>A. </strong>Liability of registered User(s). Registered User is responsible for any and all complaints, claims, causes of action and/or lawsuits caused by or arising out of registered User's breach of these Terms and/or registered User's use of the Website and/or User-Generated Content. Registered User shall indemnify, reimburse and hold we harmless for any and all such liability to the extent permitted by law and in accordance with Sections IX-XI below.</p>

                            <p><strong>B. </strong>Actions by we. If we have reason to believe that you have engaged in any Restricted Activities, we may take various actions to protect we, Users, and other third parties claims, fees, fines, penalties and any other liability. The actions we may take include but are not limited to the following:
                            <ul class="list-number">
                                <li>We may close, suspend, or limit your access to your Account and/or the Website and/or Features;</li>
                                <li>We may contact your bank or credit card issuer, and/or warn other Users, law enforcement, or impacted third parties of your actions;</li>
                                <li>We may update inaccurate information you provided us;</li>
                                <li>We may refuse to provide access to the Website to you in the future; and/or</li>
                                <li>We may take legal action against you.</li>
                            </ul></p>
                            <hr>

                            <!--Section-->

                            <h3> Indemnification </h3>

                            <p>YOU AGREE TO INDEMNIFY AND HOLD HARMLESS we, AND ITSEMPLOYEES, AGENTS, DISTRIBUTION PARTNERS, AFFILIATES, SUBSIDIARIES, AND THEIR RELATED COMPANIES FROM AND AGAINST ANY AND ALL CLAIMS, LIABILITIES, LOSSES, DAMAGES, OBLIGATIONS, COSTS AND EXPENSES (INCLUDING REASONABLE ATTORNEYS' FEES AND COSTS) ARISING OUT OF, RELATED TO, OR THAT MAY ARISE IN CONNECTION WITH:
                            <ul class="list-number">
                                <li>YOUR ACCESS TO OR USE OF THE WEBSITE;</li>
                                <li>USER-GENERATED CONTENT PROVIDED BY YOU OR THROUGH USE OF YOUR ACCOUNT;</li>
                                <li>ANY ACTUAL OR ALLEGED VIOLATION OR BREACH BY YOU OF THESE TERMS;</li>
                                <li>ANY ACTUAL OR ALLEGED BREACH OF ANY REPRESENTATION, WARRANTY, OR COVENANT THAT YOU HAVE MADE TO US;</li>
                                <li>YOUR ACTS OR OMISSIONS;</li>
                                <li>LOSS OF OR DAMAGE TO USER-GENERATED CONTENT FOR ANY REASON. YOU AGREE TO COOPERATE FULLY WITH US IN THE DEFENSE OF ANY CLAIM THAT IS THE SUBJECT OF YOUR OBLIGATIONS HEREUNDER.</li>
                            </ul></p>
                            <hr>

                            <!--Section-->

                            <h3> Disclaimers </h3>

                            <p>YOU EXPRESSLY AGREE THAT USE OF THE WEBSITE IS AT YOUR SOLE RISK. THE WEBSITE ARE PROVIDED ON AN "AS IS" AND "AS AVAILABLE" BASIS WITHOUT WARRANTY OF ANY KIND, EITHER EXPRESS OR IMPLIED. we DISCLAIMS ANY AND ALL WARRANTIES INCLUDING ANY:
                            <ul class="list-number">
                                <li>WARRANTIES THAT THE WEBSITE WILL MEET YOUR REQUIREMENTS;</li>
                                <li>WARRANTIES CONCERNING THE AVAILABILITY, ACCURACY, SECURITY, USEFULNESS, TIMELINESS, OR INFORMATIONAL CONTENT OF THE WEBSITE;</li>
                                <li>WARRANTIES OF TITLE, NON-INFRINGEMENT, MERCHANTABILITY, OR FITNESS FOR A PARTICULAR PURPOSE;</li>
                                <li>WARRANTIES FOR SERVICES OR GOODS RECEIVED THROUGH OR ADVERTISED ON OUR WEBSITE OR ACCESSED THROUGH THE WEBSITE;</li>
                                <li>WARRANTIES CONCERNING THE ACCURACY OR RELIABILITY OF THE RESULTS THAT MAY BE OBTAINED FROM THE USE OF THE WEBSITE;</li>
                                <li>WARRANTIES THAT YOUR USE OF THE WEBSITE WILL BE SECURE OR UNINTERRUPTED; AND</li>
                                <li>WARRANTIES THAT ERRORS IN THE WEBSITE WILL BE CORRECTED. ANY CONTENT OR SOFTWARE DOWNLOADED OR OTHERWISE OBTAINED THROUGH THE USE OF THE WEBSITE IS DONE AT YOUR OWN DISCRETION AND RISK. we SHALL HAVE NO RESPONSIBILITY FOR ANY DAMAGE TO YOUR COMPUTER SYSTEM AND/OR DEVICE(S) OR LOSS OF DATA THAT RESULTS FROM THE DOWNLOAD OF ANY CONTENT OR SOFTWARE AND/OR USE OF THE WEBSITE.</li>
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
