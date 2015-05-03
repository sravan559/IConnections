<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Registration | I-Connections</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/iconnections.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/iconn.ico">
</head><!--/head-->
<body>
    <header id="header">
       <nav class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="home.html"><img src="images/IC-logo.gif" alt="logo" class="iconn-logo"></a>
                </div>
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="home.html">Home</a></li>
                        <li class="active"><a href="events.html">Events</a></li>
                        <li><a href="gallery.html">Gallery</a></li>
                        <li><a href="aboutus.html">About Us</a></li>
                        <li><a href="contactus.php">Contact Us</a></li>
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->
    <section id="registrationform">
        <div class="center wow fadeInDown" style="padding-bottom:20px;">
            <h2>Registration Form</h2>
        </div>
        <div class="container" style="margin:0% 20%;width:80%;">
    

	<form method="post" class="form-horizontal">
                <div class="form-group">
                    <label for="inputfirstname" class="col-md-3  required">
                        First Name
                    </label>
                    <div class="col-md-5">
                        <input type="text" name="fname" class="form-control" id="inputfirstname" placeholder="Enter First Name..." required maxlength="20" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputlastname" class="col-md-3 required">
                        Last Name
                    </label>
                    <div class="col-md-5">
                        <input type="text"  name="lname" class="form-control" id="inputlastname" placeholder="Enter Last Name..." required maxlength="20" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 required"> Date of Birth</label>
                    <div class="col-md-5">
                        <div class="row">
                            <div class="col-md-5">
                                <select class="form-control" name="month" required>
                                    <option value="">Month</option>
                                    <option value="01">January</option>
                                    <option value="02">February</option>
                                    <option value="03">March</option>
                                    <option value="04">April</option>
                                    <option value="05">May</option>
                                    <option value="06">June</option>
                                    <option value="07">July</option>
                                    <option value="08">August</option>
                                    <option value="09">September</option>
                                    <option value="10">October</option>
                                    <option value="11">November</option>
                                    <option value="12">December</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <select name="day" class="form-control" required>
                                    <option value="">Day</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                </select>
                            </div>
                            <div class="col-xs-4">
                                <select name="year" class="form-control" required>
                                    <option value="">Year</option>
                                    <option value="1955">1955</option>
                                    <option value="1956">1956</option>
                                    <option value="1957">1957</option>
                                    <option value="1958">1958</option>
                                    <option value="1959">1959</option>
                                    <option value="1960">1960</option>
                                    <option value="1961">1961</option>
                                    <option value="1962">1962</option>
                                    <option value="1963">1963</option>
                                    <option value="1964">1964</option>
                                    <option value="1965">1965</option>
                                    <option value="1966">1966</option>
                                    <option value="1967">1967</option>
                                    <option value="1968">1968</option>
                                    <option value="1969">1969</option>
                                    <option value="1970">1970</option>
                                    <option value="1971">1971</option>
                                    <option value="1972">1972</option>
                                    <option value="1973">1973</option>
                                    <option value="1974">1974</option>
                                    <option value="1975">1975</option>
                                    <option value="1976">1976</option>
                                    <option value="1977">1977</option>
                                    <option value="1978">1978</option>
                                    <option value="1979">1979</option>
                                    <option value="1980">1980</option>
                                    <option value="1981">1981</option>
                                    <option value="1982">1982</option>
                                    <option value="1983">1983</option>
                                    <option value="1984">1984</option>
                                    <option value="1985">1985</option>
                                    <option value="1986">1986</option>
                                    <option value="1987">1987</option>
                                    <option value="1988">1988</option>
                                    <option value="1989">1989</option>
                                    <option value="1990">1990</option>
                                    <option value="1991">1991</option>
                                    <option value="1992">1992</option>
                                    <option value="1993">1993</option>
                                    <option value="1994">1994</option>
                                    <option value="1995">1995</option>
                                    <option value="1996">1996</option>
                                    <option value="1997">1997</option>
                                    <option value="1998">1998</option>
                                    <option value="1999">1999</option>
                                    <option value="2000">2000</option>
                                    <option value="2001">2001</option>
                                    <option value="2002">2002</option>
                                    <option value="2003">2003</option>
                                    <option value="2004">2004</option>
                                    <option value="2005">2005</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="gender" class="col-md-3 required">Gender</label>
                    <div class="col-md-5 ">
                        <label>
                            <input type="radio" id="gender" name="gender" value="M" required>
                            Male
                        </label>
                        <label>
                            <input type="radio" name="gender" value="F" required>
                            Female
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="country" class="col-md-3 required">
                        Country
                    </label>
                    <div class="col-md-5">
                        <select name="country" id="country" class="form-control">
                            <option value="">Select a Country</option>
                            <option value="Afghanistan">Afghanistan</option>
                            <option value="Albania">Albania</option>
                            <option value="Algeria">Algeria</option>
                            <option value="American Samoa">American Samoa</option>
                            <option value="Andorra">Andorra</option>
                            <option value="Angola">Angola</option>
                            <option value="Anguila">Anguila</option>
                            <option value="Antarctica">Antarctica</option>
                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                            <option value="Argentina">Argentina</option>
                            <option value="Armenia">Armenia</option>
                            <option value="Aruba">Aruba</option>
                            <option value="Australia">Australia</option>
                            <option value="Austria">Austria</option>
                            <option value="Azerbaijan">Azerbaijan</option>
                            <option value="Bahamas">Bahamas</option>
                            <option value="Bahrain">Bahrain</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="Barbados">Barbados</option>
                            <option value="Belarus">Belarus</option>
                            <option value="Belguim">Belguim</option>
                            <option value="Belize">Belize</option>
                            <option value="Benin">Benin</option>
                            <option value="Bermuda">Bermuda</option>
                            <option value="Bhutan">Bhutan</option>
                            <option value="Bolivia">Bolivia</option>
                            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                            <option value="Botswana">Botswana</option>
                            <option value="Bouvet Island">Bouvet Island</option>
                            <option value="Brazil">Brazil</option>
                            <option value="British Indian Ocean territory">British Indian Ocean territory</option>
                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                            <option value="Bulgaria">Bulgaria</option>
                            <option value="Burkina Faso">Burkina Faso</option>
                            <option value="Burundi">Burundi</option>
                            <option value="Cambodia">Cambodia</option>
                            <option value="Cameroon">Cameroon</option>
                            <option value="Canada">Canada</option>
                            <option value="Cape Verd">Cape Verde</option>
                            <option value="Cayman Islands">Cayman Islands</option>
                            <option value="Central African Republic">Central African Republic</option>
                            <option value="Chad">Chad</option>
                            <option value="Chile">Chile</option>
                            <option value="China">China</option>
                            <option value="Christmas Island">Christmas Island</option>
                            <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                            <option value="Colombia">Colombia</option>
                            <option value="Comoros">Comoros</option>
                            <option value="Congo">Congo</option>
                            <option value="Cook Islands">Cook Islands</option>
                            <option value="Costa Rica">Costa Rica</option>
                            <option value="Cote d'Ivoire">Cote d'Ivoire (Ivory Coast)</option>
                            <option value="Croatia">Croatia (Hrvatska)</option>
                            <option value="Cuba">Cuba</option>
                            <option value="Cyprus">Cyprus</option>
                            <option value="Czech Republic">Czech Republic</option>
                            <option value="Denmark">Denmark</option>
                            <option value="Djibouti">Djibouti</option>
                            <option value="Dominica">Dominica</option>
                            <option value="Dominican Republic">Dominican Republic</option>
                            <option value="East Timor">East Timor</option>
                            <option value="Ecuador">Ecuador</option>
                            <option value="Egypt">Egypt</option>
                            <option value="El Salvador">El Salvador</option>
                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                            <option value="Equatorial Guinea">Eritrea</option>
                            <option value="Estonia">Estonia</option>
                            <option value="Ethiopia">Ethiopia</option>
                            <option value="Falkland Islands">Falkland Islands</option>
                            <option value="Faroe Islands">Faroe Islands</option>
                            <option value="Fiji">Fiji</option>
                            <option value="Finland">Finland</option>
                            <option value="France">France</option>
                            <option value="French Guyana">French Guyana</option>
                            <option value="French Polynesia">French Polynesia</option>
                            <option value="French Southern Territories">French Southern Territories</option>
                            <option value="Gabon">Gabon</option>
                            <option value="Gambia">Gambia</option>
                            <option value="Georgia">Georgia</option>
                            <option value="Germany">Germany</option>
                            <option value="Ghana">Ghana</option>
                            <option value="Greece">Greece</option>
                            <option value="Greenland">Greenland</option>
                            <option value="Grenada">Grenada</option>
                            <option value="Guadaloupe">Guadaloupe</option>
                            <option value="Guam">Guam</option>
                            <option value="Guatamala">Guatamala</option>
                            <option value="Guinea-Bissau">Guinea-Bissau</option>
                            <option value="Guinea">Guinea</option>
                            <option value="Guyana">Guyana</option>
                            <option value="Haiti">Haiti</option>
                            <option value="Heard and McDonald Islands">Heard and McDonald Islands</option>
                            <option value="Honduras">Honduras</option>
                            <option value="Hong Kong">Hong Kong</option>
                            <option value="Hungary">Hungary</option>
                            <option value="Iceland">Iceland</option>
                            <option value="India">India</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="Iran">Iran</option>
                            <option value="Iraq">Iraq</option>
                            <option value="Ireland">Ireland</option>
                            <option value="Israel">Israel</option>
                            <option value="Italy">Italy</option>
                            <option value="Jamaica">Jamaica</option>
                            <option value="Japan">Japan</option>
                            <option value="Jordan">Jordan</option>
                            <option value="Kazakhstan">Kazakhstan</option>
                            <option value="Kenya">Kenya</option>
                            <option value="Kiribati">Kiribati</option>
                            <option value="Korea (north)">Korea (north)</option>
                            <option value="Korea (south)">Korea (south)</option>
                            <option value="Kuwait">Kuwait</option>
                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                            <option value="Laos">Laos</option>
                            <option value="Latvia">Latvia</option>
                            <option value="Lebanon">Lebanon</option>
                            <option value="Lesotho">Lesotho</option>
                            <option value="Liberia">Liberia</option>
                            <option value="Liechtenstein">Liechtenstein</option>
                            <option value="Lithuania">Lithuania</option>
                            <option value="Luxembourg">Luxembourg</option>
                            <option value="Macau">Macau</option>
                            <option value="Macedonia">Macedonia</option>
                            <option value="Madagascar">Madagascar</option>
                            <option value="Malaysia">Malaysia</option>
                            <option value="Malawi">Malawi</option>
                            <option value="Maldives">Maldives</option>
                            <option value="Mali">Mali</option>
                            <option value="Malta">Malta</option>
                            <option value="Marshal Islands">Marshal Islands</option>
                            <option value="Martinique">Martinique</option>
                            <option value="Mauritania">Mauritania</option>
                            <option value="Maurritius">Maurritius</option>
                            <option value="Mayotte">Mayotte</option>
                            <option value="Mexico">Mexico</option>
                            <option value="Micronesia">Micronesia</option>
                            <option value="Moldova">Moldova</option>
                            <option value="Monaco">Monaco</option>
                            <option value="Mongolia">Mongolia</option>
                            <option value="Montserrat">Montserrat</option>
                            <option value="Morocco">Morocco</option>
                            <option value="Mozambique">Mozambique</option>
                            <option value="Mynamar">Mynamar</option>
                            <option value="Namibia">Namibia</option>
                            <option value="Nauru">Nauru</option>
                            <option value="Nepal">Nepal</option>
                            <option value="Netherland Antilles">Netherland Antilles</option>
                            <option value="Netherlands">Netherlands</option>
                            <option value="New Caledonia">New Caledonia</option>
                            <option value="New Zealand">New Zealand</option>
                            <option value="Nicaragua">Nicaragua</option>
                            <option value="Niger">Niger</option>
                            <option value="Nigeria">Nigeria</option>
                            <option value="Niue">Niue</option>
                            <option value="Norfolk Island">Norfolk Island</option>
                            <option value="Northern Marianas Islands">Northern Marianas Islands</option>
                            <option value="Norway">Norway</option>
                            <option value="Oman">Oman</option>
                            <option value="Pakistan">Pakistan</option>
                            <option value="Palau">Palau</option>
                            <option value="Panama">Panama</option>
                            <option value="Papua New Guinea">Papua New Guinea</option>
                            <option value="Paraguay">Paraguay</option>
                            <option value="Peru">Peru</option>
                            <option value="Philippines">Philippines</option>
                            <option value="Pitcairn">Pitcairn</option>
                            <option value="Poland">Poland</option>
                            <option value="Portugal">Portugal</option>
                            <option value="Puerto Rico">Puerto Rico</option>
                            <option value="Qatar">Qatar</option>
                            <option value="Reunion">Reunion</option>
                            <option value="Romania">Romania</option>
                            <option value="Russian Federation">Russian Federation</option>
                            <option value="Rwanda">Rwanda</option>
                            <option value="Saint Helena">Saint Helena</option>
                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                            <option value="Saint Lucia">Saint Lucia</option>
                            <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                            <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                            <option value="Samoa">Samoa</option>
                            <option value="San Marino">San Marino</option>
                            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                            <option value="Saudi Arabia">Saudi Arabia</option>
                            <option value="Senegal">Senegal</option>
                            <option value="Seychelles">Seychelles</option>
                            <option value="Sierra Leone">Sierra Leone</option>
                            <option value="Singapore">Singapore</option>
                            <option value="Slovak Republic">Slovak Republic</option>
                            <option value="Slovenia">Slovenia</option>
                            <option value="Solomon Islands">Solomon Islands</option>
                            <option value="Somalia">Somalia</option>
                            <option value="South Africa">South Africa</option>
                            <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
                            <option value="Spain">Spain</option>
                            <option value="Sri Lanka">Sri Lanka</option>
                            <option value="Sudan">Sudan</option>
                            <option value="Suriname">Suriname</option>
                            <option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>
                            <option value="Swaziland">Swaziland</option>
                            <option value="Sweden">Sweden</option>
                            <option value="Switzerland">Switzerland</option>
                            <option value="Syria">Syria</option>
                            <option value="Taiwan">Taiwan</option>
                            <option value="Tajikistan">Tajikistan</option>
                            <option value="Tanzania">Tanzania</option>
                            <option value="Thailand">Thailand</option>
                            <option value="Togo">Togo</option>
                            <option value="Tokelau">Tokelau</option>
                            <option value="Tonga">Tonga</option>
                            <option value="Trinidad and Tobego">Trinidad and Tobego</option>
                            <option value="Tunisia">Tunisia</option>
                            <option value="Turkey">Turkey</option>
                            <option value="Turkmenistan">Turkmenistan</option>
                            <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                            <option value="Tuvalu">Tuvalu</option>
                            <option value="Uganda">Uganda</option>
                            <option value="Ukraine">Ukraine</option>
                            <option value="United Arab Emirates">United Arab Emirates</option>
                            <option value="United Kingdom">United Kingdom</option>
                            <option value="United States">United States of America</option>
                            <option value="Uruguay">Uruguay</option>
                            <option value="Uzbekistan">Uzbekistan</option>
                            <option value="Vanuatu">Vanuatu</option>
                            <option value="Vatican City">Vatican City</option>
                            <option value="Venezuela">Venezuela</option>
                            <option value="Vietnam">Vietnam</option>
                            <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                            <option value="Virgin Islands (US)">Virgin Islands (US)</option>
                            <option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>
                            <option value="Western Sahara">Western Sahara</option>
                            <option value="Yemen">Yemen</option>
                            <option value="Yugoslavia">Yugoslavia</option>
                            <option value="Zaire">Zaire</option>
                            <option value="Zambia">Zambia</option>
                            <option value="Zimbabwe">Zimbabwe</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-md-3 required">
                        E-mail
                    </label>
                    <div class="col-md-5">
                        <input type="email" id="email" name="email" class="form-control" id="inputemail" placeholder="Enter E-mail address" required />
                    </div>
                </div>
                <div class="form-group">
                    <label for="phone" class="col-md-3">
                        Phone
                    </label>
                    <div class="col-md-5">
                        <input type="tel" name="phone" id="phone" class="form-control" id="inputphone" placeholder="Enter Phone number" maxlength="10" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="school" class="col-md-3">
                        School
                    </label>
                    <div class="col-md-5">
                        <select name="school" id="school" class="form-control">
                            <option>Select a School</option>
                            <option value="IEP">IEP</option>
                            <option value="IU">IU</option>
                            <option value="Ivy_Tech">Ivy Tech</option>
                            <option value="Other_School">Other School</option>
                            <option value="Not_in_School">Not in School</option>
                        </select>
                    </div>

                </div>
                <div class="form-group">
                    <label for="needchildcare" class="col-md-3 required">Need ChildCare</label>
                    <div class="col-md-5 ">
                        <label>
                            <input type="radio" id="needchildcare" name="needchildcare" value="Yes" required>
                            Yes
                        </label>
                        <label>
                            <input type="radio" name="needchildcare" value="No">
                            No
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="numchild" class="col-md-3">
                        No. of Children Needing ChildCare
                    </label>
                    <div class="col-md-5">
                        <select name="numchild" id="numchild" class="form-control">
                            <option>Select a number</option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="childcare_info" class="col-md-3">
                        Children Information (List Name,Age,Sex of Children)
                    </label>
                    <div class="col-md-5">
                        <textarea rows="4" name="childcare_info" id="childcare_info" cols="45" class="form-control" maxlength="100"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="needtransportation" class="col-md-3 required">Need Transportation</label>
                    <div class="col-md-5 ">
                        <label>
                            <input type="radio" id="needtransportation" name="needtransportation" value="Yes" required>
                            Yes
                        </label>
                        <label>
                            <input type="radio" name="needtransportation" value="No" required>
                            No
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="pickuplocation" class="col-md-3">
                        Pickup Location
                    </label>
                    <div class="col-md-5">
                        <select name="pickuplocation" id="pickuplocation" class="form-control">
                            <option value="">Select a Location</option>
                            <option value="Evermann/Red Bud">Evermann/Red Bud</option>
                            <option value="Campus View">Campus View</option>
                            <option value="Tulip Tree">Tulip Tree</option>
                            <option value="Fountain Park">Fountain Park</option>
                            <option value="Park Doral">Park Doral</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="comments" class="col-md-3">
                        Comments or Queries?
                    </label>
                    <div class="col-md-5">
                        <textarea rows="4" id="comments" name="comments" class="form-control"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-md-6">
                        <div class="checkbox">
                            <input type="checkbox" required name="agreement"> <label class="required"> I agree the Terms and Conditions.</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-md-6">
                        <input type="submit" name="submit" value="Submit" class="btn btn-primary btn-lg" />
                        <input type="button" name="cancel" value="Cancel" class="btn btn-primary btn-lg" />
                    </div>
                </div>
            </form>
        </div>
    </section>

    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2015 International Connections. All Rights Reserved.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="home.html">Home</a></li>
                        <li><a href="events.html">Events</a></li>
                        <li><a href="gallery.html">Gallery</a></li>
                        <li><a href="aboutus.html">About Us</a></li>
                        <li><a href="contactus.php">Contact Us</a></li>
						 <li>
                            <ul class="social-share">
                                <li><a href="https://www.facebook.com/groups/socc.coffeehour/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

	<?php
// Make a MySQL Connection
$con = mysqli_connect("localhost", "root", "sravi123") or die(mysqli_error());
mysqli_select_db($con,"iconnections") or die(mysqli_error());

if($con)
{
//echo "<h1> Connection successful</h1>";

if(isset($_POST['agreement']) && isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['gender']) && isset($_POST['email']) && isset($_POST['needchildcare']) && isset($_POST['needtransportation']))
{
//echo "<h2>Mandatory fields filled</h2>";
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$needchildcare = $_POST['needchildcare'];
$needtransportation = $_POST['needtransportation'];


if(isset($_POST['month']) && isset($_POST['day']) && isset($_POST['year']) && isset($_POST['country']) && isset($_POST['phone']) && isset($_POST['school']) && isset($_POST['numchild']) && isset($_POST['childcare_info']) && isset($_POST['pickuplocation']) && isset($_POST['comments']) && isset($_POST['agreement']))
	{
		$month = $_POST['month'];
		$day = $_POST['day'];
		$year = $_POST['year'];
		$country = $_POST['country'];
		$phone = $_POST['phone'];
		$school = $_POST['school'];
		$numchild = $_POST['numchild'];
		$childcare_info = $_POST['childcare_info'];
		$pickuplocation = $_POST['pickuplocation'];
		$comments = $_POST['comments'];
		$agreement = $_POST['agreement'];
		$dob = "$year-$month-$day";
		//echo "DATE OF BIRTH: $dob";
	}
else
	{
		//initializing unfilled non mandatory fields to null
		$month = "";
		$day = "";
		$year = "";
		$country = "";
		$phone = "";
		$school = "";
		$numchild = "";
		$childcare_info = "";
		$pickuplocation = "";
		$comments = "";
		$agreement = "";
		$dob = "";
	}


//After all the fields are initialized to defined or default null values
//insert to database table Reg_Info
$sql = "insert into Reg_Info(fname,lname,
gender,
email,
needchildcare,
needtransportation,
dob,
country,
phone,
school,
numchild,
childcareinfo,
pickuplocation,
comments) values('$fname','$lname','$gender','$email','$needchildcare','$needtransportation','$dob','$country','$phone','$school','$numchild','$childcare_info',
'$pickuplocation','$comments')";

$returnvalue = mysqli_query($con,$sql);
if($returnvalue)
	{
	echo "<script type='text/javascript'>alert('Registration request submitted successfully.');</script>";
	}
else
	{
	echo "<script type='text/javascript'>alert('Unable to process your request. Please try contacting the Administrators.');</script>";
	}
}
}
mysqli_close($con);
?>
</body>
</html>