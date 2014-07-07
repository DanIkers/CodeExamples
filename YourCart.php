<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>HawkiQ</title>
		<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="lib/js/libs/jquery-1.8.1.min.js"></script>

	<link rel="stylesheet" type="text/css" media="all" href="lib/css/styles.css" />
		<link rel="stylesheet/less" type="text/css"  href="lib/css/cart.css" />
			<link rel="stylesheet/less" type="text/css"  href="lib/css/chat.css" />
	
<script src="lib/js/less-1.7.0.min.js" type="text/javascript"></script>

	<link rel="shortcut icon" href="favicon.ico" />
</head>
<!--[if IE 7 ]>    <body class="ie7 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8 ]>    <body class="ie8 lt-ie9"> <![endif]-->
<!--[if IE 9 ]>    <body class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><body><!--<![endif]-->

	<div id="wrap" class="blank guest">
		<div id="header">
			<div id="toolbar">
				<div class="wrap">
					<div class="left">
						<h1 id="logo"><a href="#">HawkiQ</a></h1>
						<p id="byline">Site byline</p>
					</div>
			
					<div class="right">
						<div id="search">
							<form action="#">
								<div>
									<input type="text" name="site-search-input" id="site-search-input" placeholder="Search" />
									<div id="site-search-city-container" class="select-container">
										<select name="site-search-city" id="site-search-city">
											<option disabled="disabled" selected="selected" value="City">City</option>
											<option value="sydney">Sydney</option>
											<option value="melbourne">Melbourne</option>
											<option value="brisbane">Brisbane</option>
											<option value="new-south-wales">New South Wales</option>
										</select>
									</div>
									<!-- #site-search-city-container -->
									<button type="submit" id="site-search-submit"><span>Search</span></button>
								</div>
							</form>
						</div>

						<div class="black-links">
							<a href="#" class="black-link iwant-icon">iWant</a>
							<a href="#" class="black-link sign-in">Sign In</a>
						</div>
					</div>
					<!-- end #toolbar-right -->
				</div> <!-- end #toolbar .wrap -->
			</div> <!-- end #toolbar -->
			<div id="navigation" class="clearfix">
				<div class="wrap">
					<div class="menu">
						<ul>
							<li id="shop-by-category">
								<a href="#">SHOP BY CATEGORY</a>
								<ul id="category-list" class="sub-menu">
									<li id="category-1"><a href="#">Category Name</a></li>
									<li id="category-2">
										<a href="#">Category Name</a>
										<div class="sub-categories">
											<h2 class="category-name">Category</h2>
										</div>
										<div class="category-stores">
											<h2 class="category-stores-heading">Category Stores</h2>
											<ul>
												<li><a href="#">Store Name (# items)</a></li>
												<li><a href="#">Store Name (# items)</a></li>
												<li><a href="#">Store Name (# items)</a></li>
												<li><a href="#">Store Name (# items)</a></li>
												<li><a href="#">Store Name (# items)</a></li>
												<li><a href="#">Store Name (# items)</a></li>
												<li><a href="#">Store Name (# items)</a></li>
												<li><a href="#">Store Name (# items)</a></li>
												<li><a href="#">Store Name (# items)</a></li>
												<li><a href="#">Store Name (# items)</a></li>
												<li><a href="#">Store Name (# items)</a></li>
												<li><a href="#">Store Name (# items)</a></li>
												<li><a href="#">Store Name (# items)</a></li>
												<li><a href="#">Store Name (# items)</a></li>
											</ul>
										</div>
									</li>
									<li id="category-3"><a href="#">Category Name</a></li>
									<li id="category-4"><a href="#">Category Name</a></li>
									<li id="category-5"><a href="#">Category Name</a></li>
									<li id="category-6"><a href="#">Category Name</a></li>
									<li id="category-7"><a href="#">Category Name</a></li>
									<li id="category-8"><a href="#">Category Name</a></li>
									<li id="category-9"><a href="#">Category Name</a></li>
									<li id="category-10"><a href="#">Category Name</a></li>
								</ul>
							</li>
							<li><a href="#">STORES</a></li>
							<li><a href="#">ON SALE</a></li>
							<li><a href="#">NEED HELP?</a></li>
							<li><a href="#">ABOUT HAWKiQ</a></li>
						</ul>
					</div> <!-- end .menu -->
					<div class="member-signup">
						<a class="system-sign-up button orange" href="#">Become A Member</a>
						<p>OR</p>
						<a class="facebook-sign-up" href="#">Sign in with Facebook</a>
					</div> <!-- end .member-signup -->
				</div> <!-- end #navigation .wrap -->
			</div> <!-- end #navigation -->
		</div> <!-- end #header -->
		<div class="sticky-bar">
			<div class="wrap">
			</div> <!-- end .wrap -->
		</div> <!-- end .sticky-bar -->

		<div style="background-image:url(lib/images/Cart-Header.jpg);" class="orders-featbanner"> 
            <div class="banner-heading">
<h1>YOUR <span class="gold">CART</span></h1>
            </div>


            </div>

<div class="page-container">

<div class="cart-container">

	<div class="cart-header">
		THE ICONIC SHOP
	</div><!--cart-header-->

	<div class="cart-contents">

		<div class="cart-items">

			<div class="item-header">
				<span class="itde" id="name"></span>
				<span class="itde"  id="item"></span>
				<span class="itde"  id="price"></span>
				<span class="itde"  id="size"></span>
				<span class="itde"  id="qty"></span>
				<span class="itde"  id="color"></span>
				<span class="arrow">
					<img src="lib/images/arr.png">
				</span>
			</div>

			<div class="item-images">
				<a href="#"><img src="lib/images/order-img-1.jpg" storeName="Talulah" item="Cocoa Peach Dress" price="$21.80" size="S" qty="1" color="Orange"></a>
<a href="#"><img src="lib/images/order-img-2.jpg" storeName="ASOS" item="A different dress" price="$24.10" size="M" qty="3" color="Pink"></a>
<a href="#"><img src="lib/images/order-img-3.jpg" storeName="Sass & Bide" item="Strange dress" price="$36.13" size="S" qty="1" color="N/A"></a>
<a href="#"><img src="lib/images/order-img-4.jpg" storeName="Talulah" item="Cocoa Peach Dress" price="$21.80" size="S" qty="1" color="Orange"></a>

			</div>


		</div><!--cart-items-->

			<div class="item-footer">PAYMENT TOTAL
			<span class="the-total">
				$189.80
			</span>
			</div>

			<div class="cart-header">CUSTOMER INFORMATION
			</div>

			<div class="information left">
			
			<div class="labels left">
				<span>First Name</span>
				<span>Last Name</span>
				<span>Company</span>
				<span>Phone</span>
			</div>
			<div class="fields right">
				<input type="text" placeholder="First Name">
				<input type="text" placeholder="Last Name">
				<input type="text" placeholder="Company">
				<input type="text" placeholder="Phone">

			</div>

			</div>
			<div class="information right">

			<div class="labels left">
				<span>Use Existing Address?</span>
				<span>Street Address</span>
				<span></span>
				<span>City</span>
				<span>State</span>
				<span>Country</span>
			</div>
			<div class="fields right">
				<div class="squaredTwo">
				<input type="checkbox" id="squaredTwo" name="check"><label for="squaredTwo"></label>
				</div>
				<input type="text" placeholder="Street Address">
				<input type="text" placeholder="...">
				<input type="text" placeholder="City">
				<select>
					<option>QLD</option>
					<option>NSW</option>
					<option>WA</option>
					<option>SA</option>
					<option>NT</option>
					<option>ACT</option>
				</select>
				<input type="text" id="postcode" class="numericOnly" placeholder="PostCode / ZIP">
								<select id="country">
				<option value="AF">Afghanistan</option>
<option value="AX">Åland Islands</option>
<option value="AL">Albania</option>
<option value="DZ">Algeria</option>
<option value="AS">American Samoa</option>
<option value="AD">Andorra</option>
<option value="AO">Angola</option>
<option value="AI">Anguilla</option>
<option value="AQ">Antarctica</option>
<option value="AG">Antigua and Barbuda</option>
<option value="AR">Argentina</option>
<option value="AM">Armenia</option>
<option value="AW">Aruba</option>
<option value="AU" selected="yes">Australia</option>
<option value="AT">Austria</option>
<option value="AZ">Azerbaijan</option>
<option value="BS">Bahamas</option>
<option value="BH">Bahrain</option>
<option value="BD">Bangladesh</option>
<option value="BB">Barbados</option>
<option value="BY">Belarus</option>
<option value="BE">Belgium</option>
<option value="BZ">Belize</option>
<option value="BJ">Benin</option>
<option value="BM">Bermuda</option>
<option value="BT">Bhutan</option>
<option value="BO">Bolivia</option>
<option value="BA">Bosnia and Herzegovina</option>
<option value="BW">Botswana</option>
<option value="BV">Bouvet Island</option>
<option value="BR">Brazil</option>
<option value="IO">British Indian Ocean Territory</option>
<option value="BN">Brunei Darussalam</option>
<option value="BG">Bulgaria</option>
<option value="BF">Burkina Faso</option>
<option value="BI">Burundi</option>
<option value="KH">Cambodia</option>
<option value="CM">Cameroon</option>
<option value="CA">Canada</option>
<option value="CV">Cape Verde</option>
<option value="KY">Cayman Islands</option>
<option value="CF">Central African Republic</option>
<option value="TD">Chad</option>
<option value="CL">Chile</option>
<option value="CN">China</option>
<option value="CX">Christmas Island</option>
<option value="CC">Cocos (Keeling) Islands</option>
<option value="CO">Colombia</option>
<option value="KM">Comoros</option>
<option value="CG">Congo</option>
<option value="CD">Congo, The Democratic Republic of The</option>
<option value="CK">Cook Islands</option>
<option value="CR">Costa Rica</option>
<option value="CI">Cote D'ivoire</option>
<option value="HR">Croatia</option>
<option value="CU">Cuba</option>
<option value="CY">Cyprus</option>
<option value="CZ">Czech Republic</option>
<option value="DK">Denmark</option>
<option value="DJ">Djibouti</option>
<option value="DM">Dominica</option>
<option value="DO">Dominican Republic</option>
<option value="EC">Ecuador</option>
<option value="EG">Egypt</option>
<option value="SV">El Salvador</option>
<option value="GQ">Equatorial Guinea</option>
<option value="ER">Eritrea</option>
<option value="EE">Estonia</option>
<option value="ET">Ethiopia</option>
<option value="FK">Falkland Islands (Malvinas)</option>
<option value="FO">Faroe Islands</option>
<option value="FJ">Fiji</option>
<option value="FI">Finland</option>
<option value="FR">France</option>
<option value="GF">French Guiana</option>
<option value="PF">French Polynesia</option>
<option value="TF">French Southern Territories</option>
<option value="GA">Gabon</option>
<option value="GM">Gambia</option>
<option value="GE">Georgia</option>
<option value="DE">Germany</option>
<option value="GH">Ghana</option>
<option value="GI">Gibraltar</option>
<option value="GR">Greece</option>
<option value="GL">Greenland</option>
<option value="GD">Grenada</option>
<option value="GP">Guadeloupe</option>
<option value="GU">Guam</option>
<option value="GT">Guatemala</option>
<option value="GG">Guernsey</option>
<option value="GN">Guinea</option>
<option value="GW">Guinea-bissau</option>
<option value="GY">Guyana</option>
<option value="HT">Haiti</option>
<option value="HM">Heard Island and Mcdonald Islands</option>
<option value="VA">Holy See (Vatican City State)</option>
<option value="HN">Honduras</option>
<option value="HK">Hong Kong</option>
<option value="HU">Hungary</option>
<option value="IS">Iceland</option>
<option value="IN">India</option>
<option value="ID">Indonesia</option>
<option value="IR">Iran, Islamic Republic of</option>
<option value="IQ">Iraq</option>
<option value="IE">Ireland</option>
<option value="IM">Isle of Man</option>
<option value="IL">Israel</option>
<option value="IT">Italy</option>
<option value="JM">Jamaica</option>
<option value="JP">Japan</option>
<option value="JE">Jersey</option>
<option value="JO">Jordan</option>
<option value="KZ">Kazakhstan</option>
<option value="KE">Kenya</option>
<option value="KI">Kiribati</option>
<option value="KP">Korea, Democratic People's Republic of</option>
<option value="KR">Korea, Republic of</option>
<option value="KW">Kuwait</option>
<option value="KG">Kyrgyzstan</option>
<option value="LA">Lao People's Democratic Republic</option>
<option value="LV">Latvia</option>
<option value="LB">Lebanon</option>
<option value="LS">Lesotho</option>
<option value="LR">Liberia</option>
<option value="LY">Libyan Arab Jamahiriya</option>
<option value="LI">Liechtenstein</option>
<option value="LT">Lithuania</option>
<option value="LU">Luxembourg</option>
<option value="MO">Macao</option>
<option value="MK">Macedonia, The Former Yugoslav Republic of</option>
<option value="MG">Madagascar</option>
<option value="MW">Malawi</option>
<option value="MY">Malaysia</option>
<option value="MV">Maldives</option>
<option value="ML">Mali</option>
<option value="MT">Malta</option>
<option value="MH">Marshall Islands</option>
<option value="MQ">Martinique</option>
<option value="MR">Mauritania</option>
<option value="MU">Mauritius</option>
<option value="YT">Mayotte</option>
<option value="MX">Mexico</option>
<option value="FM">Micronesia, Federated States of</option>
<option value="MD">Moldova, Republic of</option>
<option value="MC">Monaco</option>
<option value="MN">Mongolia</option>
<option value="ME">Montenegro</option>
<option value="MS">Montserrat</option>
<option value="MA">Morocco</option>
<option value="MZ">Mozambique</option>
<option value="MM">Myanmar</option>
<option value="NA">Namibia</option>
<option value="NR">Nauru</option>
<option value="NP">Nepal</option>
<option value="NL">Netherlands</option>
<option value="AN">Netherlands Antilles</option>
<option value="NC">New Caledonia</option>
<option value="NZ">New Zealand</option>
<option value="NI">Nicaragua</option>
<option value="NE">Niger</option>
<option value="NG">Nigeria</option>
<option value="NU">Niue</option>
<option value="NF">Norfolk Island</option>
<option value="MP">Northern Mariana Islands</option>
<option value="NO">Norway</option>
<option value="OM">Oman</option>
<option value="PK">Pakistan</option>
<option value="PW">Palau</option>
<option value="PS">Palestinian Territory, Occupied</option>
<option value="PA">Panama</option>
<option value="PG">Papua New Guinea</option>
<option value="PY">Paraguay</option>
<option value="PE">Peru</option>
<option value="PH">Philippines</option>
<option value="PN">Pitcairn</option>
<option value="PL">Poland</option>
<option value="PT">Portugal</option>
<option value="PR">Puerto Rico</option>
<option value="QA">Qatar</option>
<option value="RE">Reunion</option>
<option value="RO">Romania</option>
<option value="RU">Russian Federation</option>
<option value="RW">Rwanda</option>
<option value="SH">Saint Helena</option>
<option value="KN">Saint Kitts and Nevis</option>
<option value="LC">Saint Lucia</option>
<option value="PM">Saint Pierre and Miquelon</option>
<option value="VC">Saint Vincent and The Grenadines</option>
<option value="WS">Samoa</option>
<option value="SM">San Marino</option>
<option value="ST">Sao Tome and Principe</option>
<option value="SA">Saudi Arabia</option>
<option value="SN">Senegal</option>
<option value="RS">Serbia</option>
<option value="SC">Seychelles</option>
<option value="SL">Sierra Leone</option>
<option value="SG">Singapore</option>
<option value="SK">Slovakia</option>
<option value="SI">Slovenia</option>
<option value="SB">Solomon Islands</option>
<option value="SO">Somalia</option>
<option value="ZA">South Africa</option>
<option value="GS">South Georgia and The South Sandwich Islands</option>
<option value="ES">Spain</option>
<option value="LK">Sri Lanka</option>
<option value="SD">Sudan</option>
<option value="SR">Suriname</option>
<option value="SJ">Svalbard and Jan Mayen</option>
<option value="SZ">Swaziland</option>
<option value="SE">Sweden</option>
<option value="CH">Switzerland</option>
<option value="SY">Syrian Arab Republic</option>
<option value="TW">Taiwan, Province of China</option>
<option value="TJ">Tajikistan</option>
<option value="TZ">Tanzania, United Republic of</option>
<option value="TH">Thailand</option>
<option value="TL">Timor-leste</option>
<option value="TG">Togo</option>
<option value="TK">Tokelau</option>
<option value="TO">Tonga</option>
<option value="TT">Trinidad and Tobago</option>
<option value="TN">Tunisia</option>
<option value="TR">Turkey</option>
<option value="TM">Turkmenistan</option>
<option value="TC">Turks and Caicos Islands</option>
<option value="TV">Tuvalu</option>
<option value="UG">Uganda</option>
<option value="UA">Ukraine</option>
<option value="AE">United Arab Emirates</option>
<option value="GB">United Kingdom</option>
<option value="US">United States</option>
<option value="UM">United States Minor Outlying Islands</option>
<option value="UY">Uruguay</option>
<option value="UZ">Uzbekistan</option>
<option value="VU">Vanuatu</option>
<option value="VE">Venezuela</option>
<option value="VN">Viet Nam</option>
<option value="VG">Virgin Islands, British</option>
<option value="VI">Virgin Islands, U.S.</option>
<option value="WF">Wallis and Futuna</option>
<option value="EH">Western Sahara</option>
<option value="YE">Yemen</option>
<option value="ZM">Zambia</option>
<option value="ZW">Zimbabwe</option>
				</select>
			</div>


			</div>

			<div class="cart-header">PAYMENT
			</div>

			<div class="payment-container">
			<div class="left payments">
								<div class="left">
<span>CHOOSE PAYMENT METHOD:</span>
								</div>
								<div class="right alignright">
<div>
	<img src="lib/images/paypal.jpg">
	<input type="radio" value="paypal" name="payment-method">
</div>
<div>
	<img src="lib/images/visa.jpg">
	<input type="radio" value="visa" name="payment-method">
</div>
<div>
	<img src="lib/images/mastercard.jpg">
	<input type="radio" value="mastercard" name="payment-method">
</div>
								</div>
			</div><!--left-container-->
			<div class="right">

				<div class="left two">
					<span>Use Existing Card</span>
					<span>Card Number</span>
					<span>Security Number</span>
					<span>Expiry Date</span>
					<span>Cardholder Name</span>
				</div>
				<div class="right two">
					<select id="existing-card">
						<option>XXXX XXXX XXXX 2837</option>
					</select>
					<input type="text" placeholder="Card Number">
					<input type="text" placeholder="CCV / Security Number">
					<select id="day">
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
						<option>6</option>
						<option>7</option>
						<option>8</option>
						<option>9</option>
						<option>10</option>
						<option>11</option>
						<option>12</option>
						<option>13</option>
						<option>14</option>
						<option>15</option>
						<option>16</option>
						<option>17</option>
						<option>18</option>
						<option>19</option>
						<option>20</option>
						<option>21</option>
						<option>22</option>
						<option>23</option>
						<option>24</option>
						<option>25</option>
						<option>26</option>
						<option>27</option>
						<option>28</option>
						<option>29</option>
						<option>30</option>
						<option>31</option>
					</select>
					<select id="month">
						<option  disabled selected>Month</option>
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
						<option>6</option>
						<option>7</option>
						<option>8</option>
						<option>9</option>
						<option>10</option>
						<option>11</option>
						<option>12</option>
					</select>
					<select id="year">
						<option  disabled selected>Year</option>
						<option>2014</option>
						<option>2015</option>
						<option>2016</option>
						<option>2017</option>
						<option>2018</option>
						<option>2019</option>
						<option>2020</option>
						<option>2021</option>
						<option>2022</option>
						<option>2023</option>
						<option>2024</option>
						<option>2025</option>
					</select>
					<input type="text" placeholder="Cardholder Name">
				</div>

			</div><!--right-container-->
			
<span class="clear"></span>
<button class="submit-checkout">FINISH CHECKOUT</button>


			</div><!--payment-container-->
	</div><!--cart-contents-->

</div><!--cart-container-->

</div> <!--page-containerends-->

            <!-- CONTENT GOES ABOVE -->


		<div id="site-footer">
			<div class="wrap">
				<div class="column">
					<img src="images/footer-logo.png" alt="#" />
				</div>

				<div class="column">
					<h4>About Hawk<span>i</span>Q</h4>
					<ul>
						<li><a href="#">About</a></li>
						<li><a href="#">Careers</a></li>
						<li><a href="#">FAQ</a></li>
						<li><a href="#">Retail Partners</a></li>
						<li><a href="#">Customers</a></li>
						<li><a href="#">Testimonials</a></li>
						<li><a href="#">Contact Us</a></li>
						<li><a href="#">Chat Online</a></li>
					</ul>
				</div>

				<div class="column">
					<h4>Customer Service</h4>
					<ul>
						<li><a href="#">Contact Us</a></li>
						<li><a href="#">Return Policy</a></li>
						<li><a href="#">Shipping &amp; Tax</a></li>
						<li><a href="#">International</a></li>
					</ul>

					<h4>Policies</h4>
					<ul>
						<li><a href="#">Terms of Service</a></li>
						<li><a href="#">Privacy</a></li>
						<li><a href="#">Security</a></li>
						<li><a href="#">Website Terms of Use</a></li>
					</ul>
				</div>

				<div class="column">
					<h4>Connect</h4>
					<ul id="footer-social">
						<li class="facebook"><a href="#">Facebook</a></li>
						<li class="twitter"><a href="#">Twitter</a></li>
						<li class="pinterest"><a href="#">Pinterest</a></li>
						<li class="linkedin"><a href="#">LinkedIn</a></li>
						<li class="youtube"><a href="#">YouTube Channel</a></li>
					</ul>
				</div>
			</div>
			<!-- .wrap -->
		</div>
		<!-- #site-footer -->
		<div id="live-chat">
			<a href="#">
				<div class="avatar">
					<img src="images/chat-avatar.png" alt="Alternative text for image" />
				</div>
				<div class="status">
					<img src="images/chat-status-online.png" alt="Alternative text for image" />
				</div>
				<div class="chats">
					Chat (23)
				</div>
			</a>
		</div>
		<!-- #live-chat -->
	</div> <!-- end #wrap -->

	<script type="text/javascript" src="lib/js/libs/jquery-1.8.1.min.js"></script>

	<script type="text/javascript" src="lib/js/libs/custom-plugins/styleselect.js"></script>

	<script type="text/javascript" src="lib/js/script.min.js"></script>

   <script src="lib/js/jquery-ui-1.10.4.custom.js"></script>
<script type="text/javascript" src="lib/js/live-chat.js"></script>
	<script type="text/javascript">



$(function() { 
$('#live-chat').load('chunk_live-chat.php', function() {
  console.log( "Loaded 'chunk_live-chat.php'" );
  $("#stores-online").accordion({autoHeight: false}).css('display','none');
$('.item-images > a > img').first().trigger('click');
});

var sum = '0';
		$('.item-images a').each(function() {
			var item = $(this).children('img').attr('price').replace("$", "");
			sum = parseFloat(sum + parseFloat(item));
		})
		$('p#total').text('$'+sum)
})





$(document).on('click','.item-images a img', function(e) {
e.preventDefault();
$('.item-images a img').css('border','none')

$(this).css({'border':'2px solid #d2a849'});

var storeName = $(this).attr('storeName');
var storeItem = $(this).attr('item');
var storePrice = $(this).attr('price');
var size = $(this).attr('size');
var qty = $(this).attr('qty');
var color = $(this).attr('color');
$('.item-header span.itde').fadeOut('fast',function() {
$('span#name.itde').text(storeName);
$('span#item.itde').text(storeItem);
$('span#price.itde').text(storePrice);
$('span#size.itde').text('SIZE '+size);
$('span#qty.itde').text('QTY '+qty);
$('span#color.itde').text(color);
$('.item-header span.itde').fadeIn();
})
var whereArr = $(this).position().left;
var minusWidth = $(this).width();
var whereToArr = minusWidth / 2;
var whereArr = (whereArr + whereToArr) - 30;
$('span.arrow').css('left', whereArr)



})

$(".numericOnly").keypress(function (e) {
    if (String.fromCharCode(e.keyCode).match(/[^0-9]/g)) return false;
});

	</script>
</body>
</html>