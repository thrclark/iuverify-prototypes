<?php $page_title = "Home" ?>

<!DOCTYPE html>
<html lang="en-us">
<head>
<?php include ('includes/head-meta.php') ?>
<style>
@font-face {
	font-family: 'BentonSansRegular';
	src: url("https://fonts.iu.edu/fonts/benton-sans-regular.eot");
	src: url("https://fonts.iu.edu/fonts/benton-sans-regular.eot?#iefix") format("embedded-opentype"), url("https://fonts.iu.edu/fonts/benton-sans-regular.woff") format("woff"), url("https://fonts.iu.edu/fonts/benton-sans-regular.ttf") format("truetype"), url("https://fonts.iu.edu/fonts/benton-sans-regular.svg#BentonSansRegular") format("svg");
	font-style: normal;
	font-weight: normal;
}
@font-face {
	font-family: 'BentonSansCondRegular';
	src: url("https://fonts.iu.edu/fonts/benton-sans-cond-regular.eot");
	src: url("https://fonts.iu.edu/fonts/benton-sans-cond-regular.eot?#iefix") format("embedded-opentype"), url("https://fonts.iu.edu/fonts/benton-sans-cond-regular.woff") format("woff"), url("https://fonts.iu.edu/fonts/benton-sans-cond-regular.ttf") format("truetype"), url("https://fonts.iu.edu/fonts/benton-sans-cond-regular.svg#BentonSansCondRegular") format("svg");
	font-style: normal;
	font-weight: normal;
}
@font-face {
	font-family: 'BentonSansCondBold';
	src: url("https://fonts.iu.edu/fonts/benton-sans-cond-bold.eot");
	src: url("https://fonts.iu.edu/fonts/benton-sans-cond-bold.eot?#iefix") format("embedded-opentype"), url("https://fonts.iu.edu/fonts/benton-sans-cond-bold.woff") format("woff"), url("https://fonts.iu.edu/fonts/benton-sans-cond-bold.ttf") format("truetype"), url("https://fonts.iu.edu/fonts/benton-sans-cond-bold.svg#BentonSansCondBold") format("svg");
	font-style: normal;
	font-weight: normal;
}
@font-face {
	font-family: 'GeorgiaProBoldItalic';
	src: url("https://fonts.iu.edu/fonts/georgia-pro-bold-italic.eot");
	src: url("https://fonts.iu.edu/fonts/georgia-pro-bold-italic.eot?#iefix") format("embedded-opentype"), url("https://fonts.iu.edu/fonts/georgia-pro-bold-italic.woff") format("woff"), url("https://fonts.iu.edu/fonts/georgia-pro-bold-italic.ttf") format("truetype"), url("https://fonts.iu.edu/fonts/georgia-pro-bold-italic.svg#GeorgiaProBoldItalic") format("svg");
	font-style: normal;
	font-weight: normal;
}
.visually-hidden {
	position: absolute;
	overflow: hidden;
	clip: rect(0 0 0 0);
	height: 1px;
	width: 1px;
	margin: -1px;
	padding: 0;
	border: 0;
}
#branding-bar {
	-webkit-font-smoothing: initial;
	-moz-font-smoothing: initial;
	font-smoothing: initial;
}
#branding-bar * {
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}
#branding-bar .row {
	width: 100%;
	margin-left: auto;
	margin-right: auto;
	margin-top: 0;
	margin-bottom: 0;
	/*max-width: 64rem;*/
	position: relative;
}
#branding-bar .row:before, #branding-bar .row:after {
	content: " ";
	display: table;
}
#branding-bar .row:after {
	clear: both;
}
#branding-bar .row.pad {
	padding-left: 0.9375rem;
	padding-right: 0.9375rem;
	width: 100%;
}
#branding-bar {
	background-color: #7A1705;
	border-top: 5px solid #990000;
	/*position: fixed;*/
	top: 0;
	width: 100%;
	z-index: 10;
}
#branding-bar .show-on-mobile {
	display: inline;
}
#branding-bar .show-on-tablet, #branding-bar .show-on-desktop {
	display: none;
}
#branding-bar img {
	position: absolute;
	top: -5px;
	left: 0px;
	width: 43px;
	-webkit-transition: all 0.5s;
	-moz-transition: all 0.5s;
	transition: all 0.5s;
}
#branding-bar h1, #branding-bar #iu-campus {
	font-family: BentonSansCondRegular, Arial, serif;
	font-weight: normal;
	color: #fff;
	font-size: 18px;
	float: left;
	line-height: 45px;
	margin: 0;
	padding-left: 48px;
	text-transform: uppercase;
	-webkit-transition: all 0.25s;
	-moz-transition: all 0.25s;
	transition: all 0.25s;
}
#branding-bar h1 a, #branding-bar #iu-campus a {
	color: #fff;
	text-decoration: none;
}
#branding-bar h1 span, #branding-bar #iu-campus span {
	font-family: inherit;
}
#branding-bar h1 .show-on-tablet, #branding-bar h1 .show-on-mobile, #branding-bar #iu-campus .show-on-tablet, #branding-bar #iu-campus .show-on-mobile {
	font-size: 17px;
}
#footer {
	-webkit-font-smoothing: initial;
	-moz-font-smoothing: initial;
	font-smoothing: initial;
}
#footer * {
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}
#footer .row {
	width: 100%;
	margin-left: auto;
	margin-right: auto;
	margin-top: 0;
	margin-bottom: 0;
	position: relative;
}
#footer .row:before, #footer .row:after {
	content: " ";
	display: table;
}
#footer .row:after {
	clear: both;
}
#footer .row.pad {
	padding-left: 0.9375rem;
	padding-right: 0.9375rem;
	width: 100%;
}
#footer {
	padding: 24px 0;
	text-align: center;
	position: relative;
	font-family: BentonSansRegular, Arial, serif;
	font-weight: normal;
	background:#ffffff;
}
#footer a {
	color: #990000;
	text-decoration:none;
}
#footer a:focus {
	outline: .125rem solid #990000;
	outline-offset: .125rem;
}
#footer .signature {
	text-align: center;
}
#footer .signature-link {
	background: url("iu-sig-formal.svg") no-repeat left top;
	background-size: contain;
	display: inline-block;
	height: 0;
	padding-top: 36px;
	overflow: hidden;
	width: 240px;
}
#footer .signature-link.signature-img {
	background-image: none;
	height: auto;
	width: 25rem;
	padding-top: 0;
}
#footer p {
	font-size: 12px;
	line-height: 24px;
	margin: 0;
	clear: left;
}
#footer .tagline {
	font-family: BentonSansCondBold, Arial, serif;
	font-weight: normal;
	-webkit-font-smoothing: antialiased;
	background: #7A1705;
	color: #fff;
	font-size: 1.375rem;
	line-height: 2.5rem;
	margin: -24px -0.9375rem 24px -0.9375rem;
	text-transform: uppercase;
	letter-spacing: 0.2em;
}
#footer .tagline span {
	text-transform: lowercase;
	font-family: GeorgiaProBoldItalic, Georgia, serif;
	font-size: 1rem;
	vertical-align: 2px;
	letter-spacing: 0;
	margin-left: -4px;
}
#footer .tagline a:focus {
	outline-color: #fff;
}
#footer .tagline.bicentennial {
	font-family: inherit;
	letter-spacing: .1em;
}
#footer .tagline.bicentennial.celebration {
    font-size: inherit;
    padding-bottom: 8px;
    padding-top: 8px;
}
#footer .tagline.celebration a {
	text-decoration: none;
}
#footer .tagline.celebration svg {
	vertical-align: middle;
}

@media screen and (max-width: 350px) {
#footer .line-break-small {
	display: block;
}
}

@media screen and (max-width: 420px) {
#footer .line-break {
	display: block;
}
#footer .hide-on-mobile {
	display: none;
}
}

@media only screen and (min-width: 991px) {
#footer {
	text-align: left;
	border-top: 6px solid #7A1705;
	padding: 32px 0 24px;
}
#footer p {
	line-height: 3.5rem;
}
#footer .signature {
	float: left;
	text-align: left;
	height: 36px;
}
#footer .copyright {
	float: right;
	clear: right;
	text-align: right;
	padding-top: 3px;
}
#footer .tagline {
	font-size: 1.5rem;
	position: absolute;
	left: 50%;
	margin: 0 -200px 0 0;
	top: -55px;
	padding: 0 24px;
	-webkit-transform: translateX(-50%);
	-moz-transform: translateX(-50%);
	-ms-transform: translateX(-50%);
	-o-transform: translateX(-50%);
	transform: translateX(-50%);
}
#footer .tagline.bicentennial {
	padding: 0 16px;
}
}
</style>
</head>
<body>
<div id="branding-bar" itemscope="itemscope" itemtype="http://schema.org/CollegeOrUniversity" role="complementary" aria-labelledby="campus-name">
    <div class="container">
        <div class="row pad"> <img src="https://sd-prd-images.s3.amazonaws.com/prd/test-uisapp2/20150702T0521167633961_trident-large.png" alt="IU">
            <p id="iu-campus"> <a href="http://www.iu.edu" title="Indiana University" class="external"> <span class="show-on-desktop" itemprop="name" id="campus-name">Indiana University</span> <span class="show-on-tablet" itemprop="name">Indiana University</span> <span class="show-on-mobile" itemprop="name">Indiana University</span> </a> </p>
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<footer id="footer" role="contentinfo" itemscope="itemscope" itemtype="http://schema.org/CollegeOrUniversity">
    <div class="container">
        <div class="row pad">
            <p class="tagline bicentennial celebration"><a href="https://200.iu.edu">
                    <svg width="223" height="25" viewBox="0 0 223 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.32813 18.196C7.49813 18.196 8.81413 16.88 9.31813 14.836L8.15613 14.57C7.72213 16.25 6.81213 17.076 5.34213 17.076C3.41013 17.076 2.17813 15.508 2.17813 12.764C2.17813 10.202 3.38213 8.57797 5.31413 8.57797C6.82613 8.57797 7.54013 9.37597 7.98813 10.944L9.16413 10.622C8.68813 8.71797 7.52613 7.44397 5.32813 7.44397C2.73813 7.44397 0.932129 9.54397 0.932129 12.778C0.932129 16.166 2.69613 18.196 5.32813 18.196Z" fill="white"/>
                        <path d="M18.6572 18V16.88H13.2392V13.114H17.0472V12.008H13.2392V8.77397H18.3632V7.63997H12.0072V18H18.6572Z" fill="white"/>
                        <path d="M27.4545 18V16.88H22.4705V7.63997H21.2385V18H27.4545Z" fill="white"/>
                        <path d="M36.5592 18V16.88H31.1412V13.114H34.9492V12.008H31.1412V8.77397H36.2652V7.63997H29.9092V18H36.5592Z" fill="white"/>
                        <path d="M43.1444 18C45.4404 18 46.7284 16.908 46.7284 15.172C46.7284 13.66 45.7484 12.89 44.4744 12.652V12.624C45.5384 12.4 46.3924 11.644 46.3924 10.23C46.3924 8.50797 45.1044 7.63997 42.8504 7.63997H39.1404V18H43.1444ZM40.3584 13.226H42.8084C44.4744 13.226 45.5104 13.786 45.5104 15.088C45.5104 16.278 44.7544 16.922 43.0604 16.922H40.3584V13.226ZM40.3584 8.73197H42.7664C44.4464 8.73197 45.1884 9.23597 45.1884 10.426C45.1884 11.616 44.2924 12.162 42.7384 12.162H40.3584V8.73197Z" fill="white"/>
                        <path d="M50.7381 18V13.534H53.0761L55.5541 18H56.8981L54.3501 13.38C55.8201 13.072 56.7581 12.204 56.7581 10.538C56.7581 8.63397 55.4281 7.63997 53.0761 7.63997H49.5201V18H50.7381ZM50.7381 8.75997H52.9921C54.6441 8.75997 55.5401 9.22197 55.5401 10.58C55.5401 11.994 54.6301 12.442 53.0061 12.442H50.7381V8.75997Z" fill="white"/>
                        <path d="M59.922 18L60.944 15.032H65.06L66.082 18H67.356L63.688 7.59797H62.4L58.732 18H59.922ZM63.002 9.09597H63.03L64.682 13.954H61.322L63.002 9.09597Z" fill="white"/>
                        <path d="M72.2118 18V8.77397H75.5158V7.63997H67.6898V8.77397H70.9798V18H72.2118Z" fill="white"/>
                        <path d="M79.3105 18V7.63997H78.0785V18H79.3105Z" fill="white"/>
                        <path d="M83.861 18V9.58597H83.889L89.531 18H90.637V7.63997H89.475V15.83H89.447L84.001 7.63997H82.699V18H83.861Z" fill="white"/>
                        <path d="M97.7074 18.196C99.3174 18.196 100.227 17.3 100.633 16.446H100.661V18H101.739V13.044H98.1693V14.08H100.549C100.521 15.998 99.4294 17.09 97.8194 17.09C95.9854 17.09 94.6273 15.634 94.6273 12.736C94.6273 9.82397 96.1534 8.57797 97.7774 8.57797C99.2194 8.57797 99.9894 9.27797 100.479 10.944L101.627 10.65C101.081 8.47997 99.7514 7.44397 97.7914 7.44397C95.2014 7.44397 93.3813 9.48797 93.3813 12.778C93.3813 15.914 94.9074 18.196 97.7074 18.196Z" fill="white"/>
                        <path d="M180.417 18V13.464L183.917 7.63997H182.629L179.829 12.414L177.015 7.63997H175.699L179.185 13.464V18H180.417Z" fill="white"/>
                        <path d="M192.847 18V16.88H187.429V13.114H191.237V12.008H187.429V8.77397H192.553V7.63997H186.197V18H192.847Z" fill="white"/>
                        <path d="M195.792 18L196.814 15.032H200.93L201.952 18H203.226L199.558 7.59797H198.27L194.602 18H195.792ZM198.872 9.09597H198.9L200.552 13.954H197.192L198.872 9.09597Z" fill="white"/>
                        <path d="M206.862 18V13.534H209.2L211.678 18H213.022L210.474 13.38C211.944 13.072 212.882 12.204 212.882 10.538C212.882 8.63397 211.552 7.63997 209.2 7.63997H205.644V18H206.862ZM206.862 8.75997H209.116C210.768 8.75997 211.664 9.22197 211.664 10.58C211.664 11.994 210.754 12.442 209.13 12.442H206.862V8.75997Z" fill="white"/>
                        <path d="M219.084 18.196C221.282 18.196 222.78 17.02 222.78 15.312C222.78 13.548 221.548 12.848 219.462 12.204C217.432 11.56 216.732 11.196 216.732 10.09C216.732 9.20797 217.516 8.56397 218.832 8.56397C220.064 8.56397 220.96 9.06797 221.52 10.314L222.5 9.76797C221.968 8.45197 220.82 7.44397 218.846 7.44397C216.872 7.44397 215.514 8.60597 215.514 10.188C215.514 11.98 216.802 12.568 218.958 13.226C221.002 13.87 221.562 14.374 221.562 15.396C221.562 16.488 220.596 17.104 219.14 17.104C217.74 17.104 216.718 16.418 216.2 15.032L215.164 15.494C215.71 17.132 217.11 18.196 219.084 18.196Z" fill="white"/>
                        <path d="M124.83 24.4462H109L109.558 22.1815C110.06 21.3669 110.631 20.5966 111.265 19.8792C112.371 18.4944 114.389 16.7642 117.318 14.6885C119.978 12.8317 121.713 11.2 122.523 9.7933C123.32 8.43571 123.741 6.88989 123.742 5.31536C123.798 4.30106 123.462 3.30399 122.804 2.53013C122.492 2.19358 122.111 1.92812 121.687 1.75175C121.263 1.57539 120.806 1.49224 120.347 1.50795C118.628 1.50795 117.378 2.01123 116.596 3.01778C116.643 3.51169 116.666 4.03685 116.666 4.59327C116.666 6.51573 115.838 7.47696 114.181 7.47696C113.087 7.47696 112.54 6.99713 112.54 6.03746C112.54 4.537 113.387 3.18971 115.081 1.99559C116.697 0.824119 118.642 0.195337 120.638 0.19973C122.729 0.19973 124.37 0.706137 125.561 1.71895C126.154 2.23019 126.622 2.86948 126.93 3.58843C127.239 4.30737 127.38 5.08713 127.343 5.86866C127.352 7.6216 126.787 9.32935 125.735 10.7311C124.659 12.194 122.39 13.882 118.926 15.7951C115.463 17.7082 113.118 19.6197 111.893 21.5297H125.528L124.83 24.4462Z" fill="white"/>
                        <path d="M136.585 25C134.444 25 132.792 24.3155 131.629 22.9463C130.466 21.5771 129.891 19.6375 129.903 17.1273C129.871 13.0379 130.956 9.01734 133.04 5.49875C135.131 1.95704 137.898 0.187755 141.34 0.190881C142.23 0.15022 143.118 0.318592 143.933 0.682534C144.747 1.04648 145.465 1.59589 146.028 2.28684C147.157 3.69039 147.721 5.60504 147.721 8.03078C147.728 12.0429 146.751 15.9955 144.875 19.5421C142.981 23.1807 140.217 25 136.585 25ZM144.148 6.6241C144.148 3.18555 143.176 1.46627 141.232 1.46627C138.884 1.46627 137.009 3.54503 135.605 7.70255C134.201 11.8601 133.493 15.3877 133.481 18.2855C133.481 20.308 133.74 21.7147 134.259 22.5055C134.525 22.9029 134.89 23.2232 135.319 23.434C135.748 23.6447 136.225 23.7385 136.702 23.7059C139.003 23.7059 140.822 21.5396 142.16 17.207C143.498 12.8744 144.161 9.34681 144.148 6.6241Z" fill="white"/>
                        <path d="M157.151 25C155.006 25 153.354 24.3155 152.194 22.9463C151.035 21.5771 150.456 19.6375 150.46 17.1273C150.425 13.0376 151.51 9.01641 153.596 5.49875C155.688 1.95704 158.454 0.187755 161.896 0.190881C162.787 0.15022 163.675 0.318592 164.489 0.682534C165.303 1.04648 166.021 1.59589 166.585 2.28684C167.726 3.68414 168.296 5.59566 168.296 8.0214C168.302 12.0329 167.327 15.9849 165.455 19.5327C163.551 23.1776 160.783 25 157.151 25ZM164.714 6.6241C164.714 3.18555 163.742 1.46627 161.797 1.46627C159.447 1.46627 157.571 3.54503 156.171 7.70255C154.77 11.8601 154.062 15.3877 154.047 18.2855C154.047 20.308 154.308 21.7147 154.83 22.5055C155.094 22.9032 155.458 23.2239 155.887 23.4347C156.315 23.6456 156.792 23.7392 157.268 23.7059C159.569 23.7059 161.388 21.5396 162.726 17.207C164.064 12.8744 164.726 9.34681 164.714 6.6241Z" fill="white"/>
                    </svg>
                    <span class="visually-hidden">Celebrating 200 years</span> </a> </p>
            <p class="signature"> <a href="https://www.iu.edu" class="signature-link signature-img" target="_blank"><img src="//assets.iu.edu/brand/3.2.x/iu-sig-formal.svg" alt="Indiana University" /></a> </p>
            <p class="copyright"> <span class="line-break"><a href="https://accessibility.iu.edu/assistance" target="_blank" id="accessibility-link" title="Having trouble accessing this web page content? Please visit this page for assistance.">Accessibility</a> | <a href="https://www.iu.edu/~espd/vs/privacyPolicy.html" target="_blank" id="privacy-policy-link">Privacy Notice</a></span> <span class="hide-on-mobile"> | </span> <a href="https://www.iu.edu/copyright/index.html" target="_blank">Copyright</a> &#169; 2019 <span class="line-break-small">The Trustees of <a href="https://www.iu.edu/" itemprop="url" target="_blank"><span itemprop="name">Indiana University</span></a></span> </p>
        </div>
    </div>
</footer>
</body>
</html>
