<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/42562b750b.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text|Montserrat:400,700x&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./dist/css/main.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>San Diego County Water Authority</title>
</head>
<body class="<?php if(strpos($_SERVER['SCRIPT_NAME'], 'index.php') !== false) { echo 'homepage'; } else { echo $pagename; } ?>">
<div class="menu item">
    <div class="menu-container">
    <div class="container">
        <div class="menu-left">
            <ul class="menu-navigation-list">
                <li><a href="#!" class="menu-navigation-list-item-link">Officers' Letter</a></li>
                <li><a href="#!" class="menu-navigation-list-item-link">Diversification and Efficiency</a></li>
                <li><a href="#!" class="menu-navigation-list-item-link">Innovation And Business Services</a>
                    <div class="menu-navigation-list-right hide">
                    <ol class="menu-sub-navigation-list">
                        <li><a href="#!">75 Years: Water Authority Marks Major Milestone</a></li>
                        <li><a href="#!">Citizens Water Academy Tops 500 Graduates</a></li>
                        <li><a href="#!">Inside Look: MWD Delegates Host Inspection Tours</a></li>
                        <li><a href="#!">Water Authority Toasts Brewing Industry</a></li>
                        <li><a href="#!">Growing Partnership: Water, Ag Leaders Promote Farm Economy</a></li>
                        <li><a href="#!">Jon Foreman Rocks as First Social Influencer</a></li>
                        <li><a href="#!">New Award Celebrates Water Innovation & Efficiency</a></li>
                        <li><a href="#!">Water Authority and SDG&E Boost Water-Energy Savings</a></li>
                        <li><a href="#!">Airport Ads Remind Travelers That San Diego is Brought to You by Water</a></li>
                        <li><a href="#!">Outreach Program Wins Regional Recognition</a></li>
                        <li><a href="#!">Hot Topics: Execs Share with Statewide Audience</a></li>                 
                    </ol>
                    </div>    
                 </li>
                <li class="active"><a href="#!" class="menu-navigation-list-item-link">Communication And Collaboration</a>
                <div class="menu-navigation-list-right show">
                  <ol class="menu-sub-navigation-list">
                    <li><a href="#!">75 Years: Water Authority Marks Major Milestone</a></li>
                    <li><a href="#!">Citizens Water Academy Tops 500 Graduates</a></li>
                    <li><a href="#!">Inside Look: MWD Delegates Host Inspection Tours</a></li>
                    <li><a href="#!">Water Authority Toasts Brewing Industry</a></li>
                    <li><a href="#!">Growing Partnership: Water, Ag Leaders Promote Farm Economy</a></li>
                    <li><a href="#!">Jon Foreman Rocks as First Social Influencer</a></li>
                    <li><a href="#!">New Award Celebrates Water Innovation & Efficiency</a></li>
                    <li><a href="#!">Water Authority and SDG&E Boost Water-Energy Savings</a></li>
                    <li><a href="#!">Airport Ads Remind Travelers That San Diego is Brought to You by Water</a></li>
                    <li><a href="#!">Outreach Program Wins Regional Recognition</a></li>
                    <li><a href="#!">Hot Topics: Execs Share with Statewide Audience</a></li>
                    </ol>
                </div>
            </li>
                <li><a href="#!" class="menu-navigation-list-item-link">Legislation and Collaboration</a></li>
                <li><a href="#!" class="menu-navigation-list-item-link">Legislation and Leadership</a></li>
                <li><a href="#!" class="menu-navigation-list-item-link">Operation And Rehabilitation</a></li>
                <li><a href="#!" class="menu-navigation-list-item-link">Resources</a></li>
            </ul>
            <div class="menu-left-bottom">
                <a href="/" class="menu-navigation-sdcwa-link">SDCWA.org</a>
                <ul class="menu-social-list">
                    <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#!"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="#!"><i class="fas fa-rss"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="menu-separator"></div>
    </div>
    </div>
</div>
<header class="<?php if(strpos($_SERVER['SCRIPT_NAME'], 'index.php') !== false) { echo 'bg-none'; } else { echo 'bg-light'; } ?>">
    <div class="container">
        <div class="header-logo-left">
            <a href="/">
                <?php if($pagename=='homepage') { ?>
                <img src="/img/final-logos-white-horizontal.svg" />
                <?php } else { ?>
                    <img src="/img/logo-color.svg" />
                <?php } ?>
                </a>

        </div>
        <div class="header-right">
            <a href="#!" class="annual-report-link">2009 Annual Report</a>
            <div class="hamburger-menu">
            <button class="hamburger hamburger--squeeze" type="button">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
            </div>
            <div class="ada-text-size-toggle">

            </div>
        </div>
    </div>
</header>