<div>
<style>
.woocommerce form .form-row-wide, .woocommerce-page form .form-row-wide {
    clear: none !important;
}


span.select2.select2-container.select2-container--default.select2-container--focus {
    width: 100% !IMPORTANT;
}

span.select2-selection.select2-selection--single {
    width: 100% !important;
    padding: 0 20px;
    height: 61px;
    border-radius: 35px;
    border: 1px solid #e5e5e5;
}

span.select2.select2-container.select2-container--default.select2-container--focus {}

span#select2-billing_country-container {
    line-height: 3;
}

span.select2-selection__arrow {
    line-height: 3;
    width: 38px !important;
}

span.select2.select2-container.select2-container--default.select2-container--below {
    width: 100% !important;
}

.woocommerce form .form-row .select2-container {
    width: 100% !important;
    line-height: 2em;
}
.select-wrap {
    margin-bottom: 0 !important;
}

</style>
    <header class="page-header   header-h1  header-parallax ltx-parallax  hasBreadcrumbs">
        <div class="container">
            <h1>Register </h1>
            <ul class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
                <!-- Breadcrumb NavXT 6.2.1 -->
                <li class="home"><span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage"
                            title="Go to Home." href="http://chaitan.like-themes.com" class="home"><span
                                property="name">Home</span></a>
                        <meta property="position" content="1">
                    </span></li>
                <li class="post post-page current-item"><span property="itemListElement" typeof="ListItem"><span
                            property="name">Register</span>
                        <meta property="position" content="2">
                    </span></li>
            </ul>
        </div>
        <div class="ltx-social ltx-nav-second">
            <ul>
                <li><a href="#" target="_self"><span class="fa fa-twitter"></span></a></li>
                <li><a href="#" target="_self"><span class="fa fa-facebook-f"></span></a></li>
                <li><a href="#" target="_self"><span class="fa fa-instagram"></span></a></li>
                <li><a href="#" target="_self"><span class="fa fa-google-plus"></span></a></li>
            </ul><span class="header"><span>Follow us</span></span>
        </div>
    </header>

    <div class="container main-wrapper">
        <!-- Content -->
        <div class="inner-page text-page margin-default">
            <div class="row">
                <div class=" col-md-12 text-page">
                    <article id="post-617" class="post-617 page type-page status-publish hentry">
                        <div class="entry-content clearfix" id="entry-div">
                            <div class="woocommerce">
                                <div class="woocommerce-notices-wrapper"></div>

                                <h2>Register</h2>

                                <form action="{{ url('/my-account/register') }}" class="woocommerce-form woocommerce-form-login login row" method="post">
                                @csrf

                                    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide col-md-6">
                                        <label for="customer_name">Name&nbsp;<span
                                                class="required">*</span></label>
                                        <input type="text" class="woocommerce-Input woocommerce-Input--text input-text"
                                            name="customer_name" id="customer_name" autocomplete="customer_name" value="" />
                                    </p>

                                    <p class="form-row form-row-wide  col-md-6" id="billing_company_field"
                                    data-priority="30"><label for="billing_company" class="">Company
                                        name&nbsp;<span class="optional">(optional)</span></label><span
                                        class="woocommerce-input-wrapper"><input type="text"
                                            class="input-text " name="billing_company"
                                            id="billing_company" placeholder="" value=""
                                            autocomplete="organization"></span></p>


                                    <p class="form-row form-row-wide address-field update_totals_on_change validate-required  col-md-12"
                                        id="billing_country_field" data-priority="40"><label
                                            for="billing_country" class="">Country&nbsp;<abbr
                                                class="required" title="required">*</abbr></label><span
                                            class="woocommerce-input-wrapper">
                                            <select name="billing_country" id="billing_country" class="country_to_state country_select select2-hidden-accessible form-control"
                                                autocomplete="country">
                                                <option value="">Select a country…</option>
                                                <option value="AX">Åland Islands</option>
                                                <option value="AF">Afghanistan</option>
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
                                                <option value="AU">Australia</option>
                                                <option value="AT">Austria</option>
                                                <option value="AZ">Azerbaijan</option>
                                                <option value="BS">Bahamas</option>
                                                <option value="BH">Bahrain</option>
                                                <option value="BD" selected="selected">Bangladesh</option>
                                                <option value="BB">Barbados</option>
                                                <option value="BY">Belarus</option>
                                                <option value="PW">Belau</option>
                                                <option value="BE">Belgium</option>
                                                <option value="BZ">Belize</option>
                                                <option value="BJ">Benin</option>
                                                <option value="BM">Bermuda</option>
                                                <option value="BT">Bhutan</option>
                                                <option value="BO">Bolivia</option>
                                                <option value="BQ">Bonaire, Saint Eustatius and Saba
                                                </option>
                                                <option value="BA">Bosnia and Herzegovina</option>
                                                <option value="BW">Botswana</option>
                                                <option value="BV">Bouvet Island</option>
                                                <option value="BR">Brazil</option>
                                                <option value="IO">British Indian Ocean Territory</option>
                                                <option value="VG">British Virgin Islands</option>
                                                <option value="BN">Brunei</option>
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
                                                <option value="CG">Congo (Brazzaville)</option>
                                                <option value="CD">Congo (Kinshasa)</option>
                                                <option value="CK">Cook Islands</option>
                                                <option value="CR">Costa Rica</option>
                                                <option value="HR">Croatia</option>
                                                <option value="CU">Cuba</option>
                                                <option value="CW">Curaçao</option>
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
                                                <option value="FK">Falkland Islands</option>
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
                                                <option value="GW">Guinea-Bissau</option>
                                                <option value="GY">Guyana</option>
                                                <option value="HT">Haiti</option>
                                                <option value="HM">Heard Island and McDonald Islands
                                                </option>
                                                <option value="HN">Honduras</option>
                                                <option value="HK">Hong Kong</option>
                                                <option value="HU">Hungary</option>
                                                <option value="IS">Iceland</option>
                                                <option value="IN">India</option>
                                                <option value="ID">Indonesia</option>
                                                <option value="IR">Iran</option>
                                                <option value="IQ">Iraq</option>
                                                <option value="IE">Ireland</option>
                                                <option value="IM">Isle of Man</option>
                                                <option value="IL">Israel</option>
                                                <option value="IT">Italy</option>
                                                <option value="CI">Ivory Coast</option>
                                                <option value="JM">Jamaica</option>
                                                <option value="JP">Japan</option>
                                                <option value="JE">Jersey</option>
                                                <option value="JO">Jordan</option>
                                                <option value="KZ">Kazakhstan</option>
                                                <option value="KE">Kenya</option>
                                                <option value="KI">Kiribati</option>
                                                <option value="KW">Kuwait</option>
                                                <option value="KG">Kyrgyzstan</option>
                                                <option value="LA">Laos</option>
                                                <option value="LV">Latvia</option>
                                                <option value="LB">Lebanon</option>
                                                <option value="LS">Lesotho</option>
                                                <option value="LR">Liberia</option>
                                                <option value="LY">Libya</option>
                                                <option value="LI">Liechtenstein</option>
                                                <option value="LT">Lithuania</option>
                                                <option value="LU">Luxembourg</option>
                                                <option value="MO">Macao S.A.R., China</option>
                                                <option value="MK">Macedonia</option>
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
                                                <option value="FM">Micronesia</option>
                                                <option value="MD">Moldova</option>
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
                                                <option value="NC">New Caledonia</option>
                                                <option value="NZ">New Zealand</option>
                                                <option value="NI">Nicaragua</option>
                                                <option value="NE">Niger</option>
                                                <option value="NG">Nigeria</option>
                                                <option value="NU">Niue</option>
                                                <option value="NF">Norfolk Island</option>
                                                <option value="KP">North Korea</option>
                                                <option value="MP">Northern Mariana Islands</option>
                                                <option value="NO">Norway</option>
                                                <option value="OM">Oman</option>
                                                <option value="PK">Pakistan</option>
                                                <option value="PS">Palestinian Territory</option>
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
                                                <option value="RU">Russia</option>
                                                <option value="RW">Rwanda</option>
                                                <option value="ST">São Tomé and Príncipe</option>
                                                <option value="BL">Saint Barthélemy</option>
                                                <option value="SH">Saint Helena</option>
                                                <option value="KN">Saint Kitts and Nevis</option>
                                                <option value="LC">Saint Lucia</option>
                                                <option value="SX">Saint Martin (Dutch part)</option>
                                                <option value="MF">Saint Martin (French part)</option>
                                                <option value="PM">Saint Pierre and Miquelon</option>
                                                <option value="VC">Saint Vincent and the Grenadines</option>
                                                <option value="WS">Samoa</option>
                                                <option value="SM">San Marino</option>
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
                                                <option value="GS">South Georgia/Sandwich Islands</option>
                                                <option value="KR">South Korea</option>
                                                <option value="SS">South Sudan</option>
                                                <option value="ES">Spain</option>
                                                <option value="LK">Sri Lanka</option>
                                                <option value="SD">Sudan</option>
                                                <option value="SR">Suriname</option>
                                                <option value="SJ">Svalbard and Jan Mayen</option>
                                                <option value="SZ">Swaziland</option>
                                                <option value="SE">Sweden</option>
                                                <option value="CH">Switzerland</option>
                                                <option value="SY">Syria</option>
                                                <option value="TW">Taiwan</option>
                                                <option value="TJ">Tajikistan</option>
                                                <option value="TZ">Tanzania</option>
                                                <option value="TH">Thailand</option>
                                                <option value="TL">Timor-Leste</option>
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
                                                <option value="GB">United Kingdom (UK)</option>
                                                <option value="US">United States (US)</option>
                                                <option value="UM">United States (US) Minor Outlying Islands
                                                </option>
                                                <option value="VI">United States (US) Virgin Islands
                                                </option>
                                                <option value="UY">Uruguay</option>
                                                <option value="UZ">Uzbekistan</option>
                                                <option value="VU">Vanuatu</option>
                                                <option value="VA">Vatican</option>
                                                <option value="VE">Venezuela</option>
                                                <option value="VN">Vietnam</option>
                                                <option value="WF">Wallis and Futuna</option>
                                                <option value="EH">Western Sahara</option>
                                                <option value="YE">Yemen</option>
                                                <option value="ZM">Zambia</option>
                                                <option value="ZW">Zimbabwe</option>
                                            </select>
                               </p>
                                    <p class="form-row form-row-wide address-field validate-required  col-md-12"
                                        id="billing_address_1_field" data-priority="50"><label
                                            for="billing_address_1" class="">Street address&nbsp;<abbr
                                                class="required" title="required">*</abbr></label><span
                                            class="woocommerce-input-wrapper"><input type="text"
                                                class="input-text " name="billing_address_1"
                                                id="billing_address_1"
                                                placeholder="House number and street name" value=""
                                                autocomplete="address-line1"
                                                data-placeholder="House number and street name"></span></p>
                                    <p class="form-row form-row-wide address-field  col-md-12"
                                        id="billing_address_2_field" data-priority="60"><label
                                            for="billing_address_2" class="screen-reader-text">Apartment,
                                            suite, unit etc.&nbsp;<span
                                                class="optional">(optional)</span></label><span
                                            class="woocommerce-input-wrapper"><input type="text"
                                                class="input-text " name="billing_address_2"
                                                id="billing_address_2"
                                                placeholder="Apartment, suite, unit etc. (optional)"
                                                value="" autocomplete="address-line2"
                                                data-placeholder="Apartment, suite, unit etc. (optional)"></span>
                                    </p>
                                    <p class="form-row form-row-wide address-field validate-required col-md-6"
                                        id="billing_city_field" data-priority="70"
                                        data-o_class="form-row form-row-wide address-field validate-required">
                                        <label for="billing_city" class="">Town / City&nbsp;<abbr
                                                class="required" title="required">*</abbr></label><span
                                            class="woocommerce-input-wrapper"><input type="text"
                                                class="input-text " name="billing_city" id="billing_city"
                                                placeholder="" value=""
                                                autocomplete="address-level2"></span>
                                    </p>
                                    <p class="form-row form-row-wide address-field validate-required validate-state col-md-6"
                                        id="billing_state_field" data-priority="80"
                                        data-o_class="form-row form-row-wide address-field validate-required validate-state">
                                        <label for="billing_state" class="">District&nbsp;<abbr
                                                class="required" title="required">*</abbr></label><span
                                            class="woocommerce-input-wrapper">

                                            <select name="billing_state"
                                                id="billing_state"
                                                class="state_select select2-hidden-accessible form-control"
                                                autocomplete="address-level1" data-placeholder=""
                                                tabindex="-1" aria-hidden="true">
                                                <option value="">Select an option…</option>
                                                <option value="BD-05">Bagerhat</option>
                                                <option value="BD-01">Bandarban</option>
                                                <option value="BD-02">Barguna</option>
                                                <option value="BD-06">Barishal</option>
                                                <option value="BD-07">Bhola</option>
                                                <option value="BD-03">Bogura</option>
                                                <option value="BD-04">Brahmanbaria</option>
                                                <option value="BD-09">Chandpur</option>
                                                <option value="BD-10">Chattogram</option>
                                                <option value="BD-12">Chuadanga</option>
                                                <option value="BD-11">Cox's Bazar</option>
                                                <option value="BD-08">Cumilla</option>
                                                <option value="BD-13">Dhaka</option>
                                                <option value="BD-14">Dinajpur</option>
                                                <option value="BD-15">Faridpur </option>
                                                <option value="BD-16">Feni</option>
                                                <option value="BD-19">Gaibandha</option>
                                                <option value="BD-18">Gazipur</option>
                                                <option value="BD-17">Gopalganj</option>
                                                <option value="BD-20">Habiganj</option>
                                                <option value="BD-21">Jamalpur</option>
                                                <option value="BD-22">Jashore</option>
                                                <option value="BD-25">Jhalokati</option>
                                                <option value="BD-23">Jhenaidah</option>
                                                <option value="BD-24">Joypurhat</option>
                                                <option value="BD-29">Khagrachhari</option>
                                                <option value="BD-27">Khulna</option>
                                                <option value="BD-26">Kishoreganj</option>
                                                <option value="BD-28">Kurigram</option>
                                                <option value="BD-30">Kushtia</option>
                                                <option value="BD-31">Lakshmipur</option>
                                                <option value="BD-32">Lalmonirhat</option>
                                                <option value="BD-36">Madaripur</option>
                                                <option value="BD-37">Magura</option>
                                                <option value="BD-33">Manikganj </option>
                                                <option value="BD-39">Meherpur</option>
                                                <option value="BD-38">Moulvibazar</option>
                                                <option value="BD-35">Munshiganj</option>
                                                <option value="BD-34">Mymensingh</option>
                                                <option value="BD-48">Naogaon</option>
                                                <option value="BD-43">Narail</option>
                                                <option value="BD-40">Narayanganj</option>
                                                <option value="BD-42">Narsingdi</option>
                                                <option value="BD-44">Natore</option>
                                                <option value="BD-45">Nawabganj</option>
                                                <option value="BD-41">Netrakona</option>
                                                <option value="BD-46">Nilphamari</option>
                                                <option value="BD-47">Noakhali</option>
                                                <option value="BD-49">Pabna</option>
                                                <option value="BD-52">Panchagarh</option>
                                                <option value="BD-51">Patuakhali</option>
                                                <option value="BD-50">Pirojpur</option>
                                                <option value="BD-53">Rajbari</option>
                                                <option value="BD-54">Rajshahi</option>
                                                <option value="BD-56">Rangamati</option>
                                                <option value="BD-55">Rangpur</option>
                                                <option value="BD-58">Satkhira</option>
                                                <option value="BD-62">Shariatpur</option>
                                                <option value="BD-57">Sherpur</option>
                                                <option value="BD-59">Sirajganj</option>
                                                <option value="BD-61">Sunamganj</option>
                                                <option value="BD-60">Sylhet</option>
                                                <option value="BD-63">Tangail</option>
                                                <option value="BD-64">Thakurgaon</option>
                                            </select></span>
                                    </p>

<div class="col-md-12"></div>
                                    <p class="form-row form-row-wide address-field validate-required validate-state col-md-6">
                                        <label for="billing_phone">Phone Number&nbsp;<span class="required">*</span></label>
                                        <input class="woocommerce-Input woocommerce-Input--text input-text"
                                            type="text" name="billing_phone" id="billing_phone"
                                            autocomplete="billing_phone" />
                                    </p>


                                    <p class="form-row form-row-wide address-field validate-required validate-state col-md-6">
                                        <label for="billing_email">Email&nbsp;<span class="required">*</span></label>
                                        <input class="woocommerce-Input woocommerce-Input--text input-text"
                                            type="email" name="billing_email" id="billing_email"
                                            autocomplete="billing_email" />
                                    </p>


                                    <p class="form-row form-row-wide address-field validate-required validate-state col-md-12">
                                        <label for="account_password">Password&nbsp;<span class="required">*</span></label>
                                        <input class="woocommerce-Input woocommerce-Input--text input-text"
                                            type="account_password" name="account_password" id="account_password"
                                            autocomplete="account_password" />
                                    </p>


                                    <p class="form-row col-md-12">

                                            <button type="submit"
                                            class="woocommerce-Button button" name="login" value="Log in">Register</button>

                                    </p>
                                    <p class="woocommerce-LostPassword lost_password col-md-12">


                                            <a href="javascript:void(0)" wire:click="customers('login')" >Login</a>
                                    </p>


                                </form>


                            </div>
                        </div>
                    </article>
                </div>

            </div>
        </div>

    </div>
    <div class="subscribe-block">
        <div class="container">
            <section data-vc-full-width="true" data-vc-full-width-init="false"
                class="vc_section vc_section-o-content-middle vc_section-flex">
                <div class="vc_row wpb_row vc_row-fluid vc_row-o-equal-height vc_row-o-content-middle vc_row-flex">
                    <div
                        class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-6 vc_col-md-12 vc_hidden-sm vc_hidden-xs">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <div class="heading  header-inline align-left color-white subcolor-black icon-type-before   vc_custom_1530546375063 heading-tag-h3 heading-icon"
                                    id="like_sc_header_633871106"><img
                                        src="http://chaitan.like-themes.com/wp-content/uploads/2018/07/subscribe-icon.png"
                                        class="heading-icon "
                                        alt="Subscribe &lt;span&gt; weekly newsletter &lt;/span&gt;">
                                    <div class="heading-content">
                                        <h3
                                            class="header ltx-sr-id-like_sc_header_6338711061028254046 ltx-sr ltx-sr-effect-fade_in ltx-sr-el-block ltx-sr-delay-0 ltx-sr-duration-1000 ltx-sr-sequences-0">
                                            Subscribe <span> weekly newsletter </span></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-6 vc_col-md-12 text-align-center-md-sm-ms">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <div class="wpb_text_column wpb_content_element ">
                                    <div class="wpb_wrapper">
                                        <script>(function () {
                                                if (!window.mc4wp) {
                                                    window.mc4wp = {
                                                        listeners: [],
                                                        forms: {
                                                            on: function (event, callback) {
                                                                window.mc4wp.listeners.push({
                                                                    event: event,
                                                                    callback: callback
                                                                });
                                                            }
                                                        }
                                                    }
                                                }
                                            })();
                                        </script><!-- MailChimp for WordPress v4.3.3 - https://wordpress.org/plugins/mailchimp-for-wp/ -->
                                        <form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-806" method="post"
                                            data-id="806" data-name="Subscribe Form">
                                            <div class="mc4wp-form-fields">
                                                <div class="input-group">
                                                    <input type="email" name="EMAIL" placeholder="Your email ..."
                                                        required />
                                                    <span class="input-group-append">
                                                        <button class="btn btn-xs btn-black color-hover-white"
                                                            type="submit">Subscribe</button>
                                                    </span>
                                                </div>
                                            </div><label style="display: none !important;">Leave this field empty if
                                                you're human: <input type="text" name="_mc4wp_honeypot" value=""
                                                    tabindex="-1" autocomplete="off" /></label><input type="hidden"
                                                name="_mc4wp_timestamp" value="1645632796" /><input type="hidden"
                                                name="_mc4wp_form_id" value="806" /><input type="hidden"
                                                name="_mc4wp_form_element_id" value="mc4wp-form-1" />
                                            <div class="mc4wp-response"></div>
                                        </form><!-- / MailChimp for WordPress Plugin -->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="vc_row-full-width vc_clearfix"></div>
        </div>
    </div>


</div>

@section('scripts')

<script>

$(document).ready(function() {
    $('#billing_country').select2();
    $('#billing_state').select2();
});

</script>
@endsection
