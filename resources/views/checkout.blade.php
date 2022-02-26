
@extends('layouts.layout')

@section('content')

<style>

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

</style>

<header class="page-header   header-h1  header-parallax ltx-parallax  hasBreadcrumbs">
    <div class="container">
        <h1>Checkout </h1>
        <ul class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
            <!-- Breadcrumb NavXT 6.2.1 -->
            <li class="home"><span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage"
                        title="Go to Home." href="http://chaitan.like-themes.com" class="home"><span
                            property="name">Home</span></a>
                    <meta property="position" content="1">
                </span></li>
            <li class="post post-page current-item"><span property="itemListElement" typeof="ListItem"><span
                        property="name">Checkout</span>
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
                <article id="post-616" class="post-616 page type-page status-publish hentry">
                    <div class="entry-content clearfix" id="entry-div">
                        <div class="woocommerce">
                            <div class="woocommerce-notices-wrapper"></div>
                            <div class="woocommerce-form-login-toggle">

                                <div class="woocommerce-info">
                                    Returning customer? <a href="#" class="showlogin">Click here to login</a> </div>
                            </div>



                            <div class="woocommerce-notices-wrapper"></div>
                            <form name="checkout" method="post" class="checkout woocommerce-checkout"
                                action="" enctype="multipart/form-data"
                                novalidate="novalidate">

                                @csrf



                                <div class="col2-set" id="customer_details">
                                    <div class="col-1">
                                        <div class="woocommerce-billing-fields">

                                            <h3>Billing details</h3>



                                            <div class="woocommerce-billing-fields__field-wrapper">
                                                <p class="form-row form-row-first validate-required"
                                                    id="billing_first_name_field" data-priority="10"><label
                                                        for="billing_first_name" class="">First name&nbsp;<abbr
                                                            class="required" title="required">*</abbr></label><span
                                                        class="woocommerce-input-wrapper"><input type="text"
                                                            class="input-text " name="billing_first_name"
                                                            id="billing_first_name" placeholder="" value="{{ $Customer->customer_name }}"
                                                            autocomplete="given-name"></span></p>
                                                <p class="form-row form-row-last validate-required"
                                                    id="billing_last_name_field" data-priority="20"><label
                                                        for="billing_last_name" class="">Last name&nbsp;<abbr
                                                            class="required" title="required">*</abbr></label><span
                                                        class="woocommerce-input-wrapper"><input type="text"
                                                            class="input-text " name="billing_last_name"
                                                            id="billing_last_name" placeholder="" value=""
                                                            autocomplete="family-name"></span></p>
                                                <p class="form-row form-row-wide" id="billing_company_field"
                                                    data-priority="30"><label for="billing_company" class="">Company
                                                        name&nbsp;<span class="optional">(optional)</span></label><span
                                                        class="woocommerce-input-wrapper"><input type="text"
                                                            class="input-text " name="billing_company"
                                                            id="billing_company" placeholder="" value="{{ $Customer->billing_company }}"
                                                            autocomplete="organization"></span></p>
                                                <p class="form-row form-row-wide address-field update_totals_on_change validate-required"
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


<script>
document.getElementById('billing_country').value="{{ $Customer->billing_company }}";
</script>

                                           </p>
                                                <p class="form-row form-row-wide address-field validate-required"
                                                    id="billing_address_1_field" data-priority="50"><label
                                                        for="billing_address_1" class="">Street address&nbsp;<abbr
                                                            class="required" title="required">*</abbr></label><span
                                                        class="woocommerce-input-wrapper"><input type="text"
                                                            class="input-text " name="billing_address_1"
                                                            id="billing_address_1"
                                                            placeholder="House number and street name" value="{{ $Customer->customer_address }}"
                                                            autocomplete="address-line1"
                                                            data-placeholder="House number and street name"></span></p>
                                                <p class="form-row form-row-wide address-field"
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
                                                <p class="form-row form-row-wide address-field validate-required"
                                                    id="billing_city_field" data-priority="70"
                                                    data-o_class="form-row form-row-wide address-field validate-required">
                                                    <label for="billing_city" class="">Town / City&nbsp;<abbr
                                                            class="required" title="required">*</abbr></label><span
                                                        class="woocommerce-input-wrapper"><input type="text"
                                                            class="input-text " name="billing_city" id="billing_city"
                                                            placeholder="" value="{{ $Customer->customer_city }}"
                                                            autocomplete="address-level2"></span>
                                                </p>
                                                <p class="form-row form-row-wide address-field validate-required validate-state"
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
                                                        </select>

                                                    <script>

document.getElementById('billing_state').value="{{ $Customer->customer_city }}"

                                                    </script>
                                                    </span>
                                                </p>
                                                <p class="form-row form-row-wide address-field validate-postcode"
                                                    id="billing_postcode_field" data-priority="90"
                                                    data-o_class="form-row form-row-wide address-field validate-postcode">
                                                    <label for="billing_postcode" class="">Postcode / ZIP&nbsp;<span
                                                            class="optional">(optional)</span></label><span
                                                        class="woocommerce-input-wrapper"><input type="text"
                                                            class="input-text " name="billing_postcode"
                                                            id="billing_postcode" placeholder="" value=""
                                                            autocomplete="postal-code"></span>
                                                </p>
                                                <p class="form-row form-row-wide validate-required validate-phone"
                                                    id="billing_phone_field" data-priority="100"><label
                                                        for="billing_phone" class="">Phone&nbsp;<abbr class="required"
                                                            title="required">*</abbr></label><span
                                                        class="woocommerce-input-wrapper"><input type="tel"
                                                            class="input-text " name="billing_phone" id="billing_phone"
                                                            placeholder="" value="{{ $Customer->customer_phone }}" autocomplete="tel"></span></p>
                                                <p class="form-row form-row-wide validate-required validate-email"
                                                    id="billing_email_field" data-priority="110"><label
                                                        for="billing_email" class="">Email address&nbsp;<abbr
                                                            class="required" title="required">*</abbr></label><span
                                                        class="woocommerce-input-wrapper"><input type="email"
                                                            class="input-text " name="billing_email" id="billing_email"
                                                            placeholder="" value="{{ $Customer->customer_email }}"
                                                            autocomplete="email username"></span></p>
                                            </div>

                                        </div>

                                        <div class="woocommerce-account-fields">

                                        @if (session()->has('customer'))

                                        @else

                                            <p class="form-row form-row-wide create-account woocommerce-validated">
                                                <label
                                                    class="woocommerce-form__label woocommerce-form__label-for-checkbox checkbox">
                                                    <input
                                                        class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox"
                                                        id="createaccount" type="checkbox" name="createaccount" onclick="checkonOrNOt()"
                                                        value="1"> <span>Create an account?</span>
                                                </label>
                                            </p>

                                            @endif


                                            <div class="create-account" id="create-account" style="display: none;">
                                                <p class="form-row validate-required" id="account_password_field"
                                                    data-priority=""><label for="account_password" class="">Create
                                                        account password&nbsp;<abbr class="required"
                                                            title="required">*</abbr></label><span
                                                        class="woocommerce-input-wrapper"><input type="password"
                                                            class="input-text " name="account_password"
                                                            id="account_password" placeholder="Password"
                                                            value=""></span></p>
                                                <div class="clear"></div>
                                            </div>
<script>

function checkonOrNOt() {


    var createaccount = document.getElementById('createaccount');



        if(createaccount.checked == true){
            document.getElementById('create-account').style.display="block";
        }else{
            document.getElementById('create-account').style.display="none";
        }
    }

</script>

                                        </div>
                                    </div>

                                    <div class="col-2">
                                        <div class="woocommerce-shipping-fields">
                                        </div>
                                        <div class="woocommerce-additional-fields">



                                            <h3>Additional information</h3>


                                            <div class="woocommerce-additional-fields__field-wrapper">
                                                <p class="form-row notes" id="order_comments_field" data-priority="">
                                                    <label for="order_comments" class="">Order notes&nbsp;<span
                                                            class="optional">(optional)</span></label><span
                                                        class="woocommerce-input-wrapper"><textarea
                                                            name="order_comments" class="input-text "
                                                            id="order_comments"
                                                            placeholder="Notes about your order, e.g. special notes for delivery."
                                                            rows="2" cols="5"></textarea></span>
                                                </p>
                                            </div>


                                        </div>
                                    </div>
                                </div>



                                <h3 id="order_review_heading">Your order</h3>


                                <div id="order_review" class="woocommerce-checkout-review-order">
                                    <table class="shop_table woocommerce-checkout-review-order-table">
                                        <thead>
                                            <tr>
                                                <th class="product-name">Product</th>
                                                <th class="product-total">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @php $total = 0 @endphp
                                            @if(session('cart'))
                                                @foreach(session('cart') as $id => $details)
                                                    @php $total += $details['price'] * $details['quantity'] @endphp

                                            <tr class="cart_item">
                                                <td class="product-name">
                                                    {{ $details['name'] }} &nbsp; <strong class="product-quantity">× {{ $details['quantity'] }}</strong>
                                                </td>
                                                <td class="product-total">
                                                    <span class="woocommerce-Price-amount amount"><span
                                                            class="woocommerce-Price-currencySymbol">$</span>{{ $details['price']*$details['quantity'] }}</span>
                                                </td>
                                            </tr>

                                            @endforeach


<input type="hidden" name="order_items" value="{{ json_encode(session('cart')) }}">

                                            @endif


                                        </tbody>
                                        <tfoot>

                                            <input type="hidden" name="order_items_total_amount" value="{{ $total }}">




                                            <tr class="order-total">
                                                <th>Total</th>
                                                <td><strong><span class="woocommerce-Price-amount amount"><span
                                                                class="woocommerce-Price-currencySymbol">$</span>{{ $total }}</span></strong>
                                                </td>
                                            </tr>


                                        </tfoot>
                                    </table>

                                    <div id="payment" class="woocommerce-checkout-payment">
                                        <ul class="wc_payment_methods payment_methods methods">
                                            <li class="wc_payment_method payment_method_bacs">
                                                <input id="payment_method_bacs" type="radio" class="input-radio"
                                                    name="payment_method" value="bacs" checked="checked"
                                                    data-order_button_text="">

                                                <label for="payment_method_bacs">
                                                    Direct bank transfer </label>
                                                <div class="payment_box payment_method_bacs">
                                                    <p>Make your payment directly into our bank account. Please use your
                                                        Order ID as the payment reference. Your order will not be
                                                        shipped until the funds have cleared in our account.</p>
                                                </div>
                                            </li>
                                            <li class="wc_payment_method payment_method_cheque">
                                                <input id="payment_method_cheque" type="radio" class="input-radio"
                                                    name="payment_method" value="cheque" data-order_button_text="">

                                                <label for="payment_method_cheque">
                                                    Check payments </label>
                                                <div class="payment_box payment_method_cheque" style="display:none;">
                                                    <p>Please send a check to Store Name, Store Street, Store Town,
                                                        Store State / County, Store Postcode.</p>
                                                </div>
                                            </li>
                                            <li class="wc_payment_method payment_method_cod">
                                                <input id="payment_method_cod" type="radio" class="input-radio"
                                                    name="payment_method" value="cod" data-order_button_text="">

                                                <label for="payment_method_cod">
                                                    Cash on delivery </label>
                                                <div class="payment_box payment_method_cod" style="display:none;">
                                                    <p>Pay with cash upon delivery.</p>
                                                </div>
                                            </li>
                                            <li class="wc_payment_method payment_method_paypal">
                                                <input id="payment_method_paypal" type="radio" class="input-radio"
                                                    name="payment_method" value="paypal"
                                                    data-order_button_text="Proceed to PayPal">

                                                <label for="payment_method_paypal">
                                                    PayPal <img
                                                        src="https://www.paypalobjects.com/webstatic/mktg/logo/AM_mc_vs_dc_ae.jpg"
                                                        alt="PayPal acceptance mark"><a
                                                        href="https://www.paypal.com/us/webapps/mpp/paypal-popup"
                                                        class="about_paypal"
                                                        onclick="javascript:window.open('https://www.paypal.com/us/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;">What
                                                        is PayPal?</a> </label>
                                                <div class="payment_box payment_method_paypal" style="display:none;">
                                                    <p>Pay via PayPal; you can pay with your credit card if you don’t
                                                        have a PayPal account.</p>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="form-row place-order">
                                            <noscript>
                                                Since your browser does not support JavaScript, or it is disabled,
                                                please ensure you click the <em>Update Totals</em> button before placing
                                                your order. You may be charged more than the amount stated above if you
                                                fail to do so. <br /><button type="submit" class="button alt"
                                                    name="woocommerce_checkout_update_totals"
                                                    value="Update totals">Update totals</button>
                                            </noscript>

                                            <div class="woocommerce-terms-and-conditions-wrapper">
                                                <div class="woocommerce-privacy-policy-text"></div>
                                            </div>


                                            <button type="submit" class="button alt" id="place_order"
                                                value="Place order" data-value="Place order">Place order</button>

                                        </div>
                                    </div>

                                </div>


                            </form>

                        </div>
                    </div>
                </article>
            </div>

        </div>
    </div>

</div>



@endsection


@section('scripts')

<script>

$(document).ready(function() {
    $('#billing_country').select2();
    $('#billing_state').select2();
});

</script>
@endsection
