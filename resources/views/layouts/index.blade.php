<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon" />
    <title>@yield('title', 'Salem HR')</title>
    @yield('seo_tags')
    <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.css?_v=20240517140044') }}" />
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css?_v=20240517140044') }}" />
    <link rel="stylesheet" href="{{ asset('css/select2.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css?_v=2.44') }}" />
    <script src="{{ asset('js/lazyload.min.js') }}"></script>
</head>

<body>
    <?php $costs = \App\Models\Costs::all();  ?>
@include('layouts.header')
<div class="header-space"></div>

@yield('content')
<!-- loader form -->
<div class="modal">
    <div class="modal__box">
        <div class="modal__box-title">Оставьте заявку на демо</div>
        <div class="modal__box-text">Наши менеджеры свяжутся с Вами</div>
        <a href="javascript:;" class="modal__box-close">
            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M22.5 7.5L7.5 22.5" stroke="#7F7D83" stroke-width="2" />
                <path d="M22.5 22.5L7.5 7.5" stroke="#7F7D83" stroke-width="2" />
            </svg>
        </a>
        <form action="{{ route('request.demo') }}" method="POST">
            @csrf
            <div class="modal__box-form">
                <input type="text" name="first_name" placeholder="Имя*" class="modal__box-field" required />
                <input type="text" name="last_name" placeholder="Фамилия*" class="modal__box-field" required />
                <input type="email" name="email" placeholder="Адрес эл. почты*" class="modal__box-field col-2" required />
                <select  id="country_code" class="modal__box-select" required>
                    <option value="+93">Afghanistan (‫افغانستان‬‎)</option>
                    <option value="+355">Albania (Shqipëri)</option>
                    <option value="+213">Algeria (‫الجزائر‬‎)</option>
                    <option value="+1">American Samoa</option>
                    <option value="+376">Andorra</option>
                    <option value="+244">Angola</option>
                    <option value="+1">Anguilla</option>
                    <option value="+1">Antigua and Barbuda</option>
                    <option value="+54">Argentina</option>
                    <option value="+374">Armenia (Հայաստան)</option>
                    <option value="+297">Aruba</option>
                    <option value="+61">Australia</option>
                    <option value="+43">Austria (Österreich)</option>
                    <option value="+994">Azerbaijan (Azərbaycan)</option>
                    <option value="+1">Bahamas</option>
                    <option value="+973">Bahrain (‫البحرين‬‎)</option>
                    <option value="+880">Bangladesh (বাংলাদেশ)</option>
                    <option value="+1">Barbados</option>
                    <option value="+375">Belarus (Беларусь)</option>
                    <option value="+32">Belgium (België)</option>
                    <option value="+501">Belize</option>
                    <option value="+229">Benin (Bénin)</option>
                    <option value="+1">Bermuda</option>
                    <option value="+975">Bhutan (འབྲུག)</option>
                    <option value="+591">Bolivia</option>
                    <option value="+387">Bosnia and Herzegovina (Босна и Херцеговина)</option>
                    <option value="+267">Botswana</option>
                    <option value="+55">Brazil (Brasil)</option>
                    <option value="+246">British Indian Ocean Territory</option>
                    <option value="+1">British Virgin Islands</option>
                    <option value="+673">Brunei</option>
                    <option value="+359">Bulgaria (България)</option>
                    <option value="+226">Burkina Faso</option>
                    <option value="+257">Burundi (Uburundi)</option>
                    <option value="+855">Cambodia (កម្ពុជា)</option>
                    <option value="+237">Cameroon (Cameroun)</option>
                    <option value="+1">Canada</option>
                    <option value="+238">Cape Verde (Kabu Verdi)</option>
                    <option value="+599">Caribbean Netherlands</option>
                    <option value="+1">Cayman Islands</option>
                    <option value="+236">Central African Republic (République centrafricaine)</option>
                    <option value="+235">Chad (Tchad)</option>
                    <option value="+56">Chile</option>
                    <option value="+86">China (中国)</option>
                    <option value="+57">Colombia</option>
                    <option value="+269">Comoros (‫جزر القمر‬‎)</option>
                    <option value="+243">Congo (DRC) (Jamhuri ya Kidemokrasia ya Kongo)</option>
                    <option value="+242">Congo (Republic) (Congo-Brazzaville)</option>
                    <option value="+682">Cook Islands</option>
                    <option value="+506">Costa Rica</option>
                    <option value="+225">Côte d’Ivoire</option>
                    <option value="+385">Croatia (Hrvatska)</option>
                    <option value="+53">Cuba</option>
                    <option value="+599">Curaçao</option>
                    <option value="+357">Cyprus (Κύπρος)</option>
                    <option value="+420">Czech Republic (Česká republika)</option>
                    <option value="+45">Denmark (Danmark)</option>
                    <option value="+253">Djibouti</option>
                    <option value="+1">Dominica</option>
                    <option value="+1">Dominican Republic (República Dominicana)</option>
                    <option value="+593">Ecuador</option>
                    <option value="+20">Egypt (‫مصر‬‎)</option>
                    <option value="+503">El Salvador</option>
                    <option value="+240">Equatorial Guinea (Guinea Ecuatorial)</option>
                    <option value="+291">Eritrea</option>
                    <option value="+372">Estonia (Eesti)</option>
                    <option value="+251">Ethiopia</option>
                    <option value="+500">Falkland Islands (Islas Malvinas)</option>
                    <option value="+298">Faroe Islands (Føroyar)</option>
                    <option value="+679">Fiji</option>
                    <option value="+358">Finland (Suomi)</option>
                    <option value="+33">France</option>
                    <option value="+594">French Guiana (Guyane française)</option>
                    <option value="+689">French Polynesia (Polynésie française)</option>
                    <option value="+241">Gabon</option>
                    <option value="+220">Gambia</option>
                    <option value="+995">Georgia (საქართველო)</option>
                    <option value="+49">Germany (Deutschland)</option>
                    <option value="+233">Ghana (Gaana)</option>
                    <option value="+350">Gibraltar</option>
                    <option value="+30">Greece (Ελλάδα)</option>
                    <option value="+299">Greenland (Kalaallit Nunaat)</option>
                    <option value="+1">Grenada</option>
                    <option value="+590">Guadeloupe</option>
                    <option value="+1">Guam</option>
                    <option value="+502">Guatemala</option>
                    <option value="+224">Guinea (Guinée)</option>
                    <option value="+245">Guinea-Bissau (Guiné Bissau)</option>
                    <option value="+592">Guyana</option>
                    <option value="+509">Haiti</option>
                    <option value="+504">Honduras</option>
                    <option value="+852">Hong Kong (香港)</option>
                    <option value="+36">Hungary (Magyarország)</option>
                    <option value="+354">Iceland (Ísland)</option>
                    <option value="+91">India (भारत)</option>
                    <option value="+62">Indonesia</option>
                    <option value="+98">Iran (‫ایران‬‎)</option>
                    <option value="+964">Iraq (‫العراق‬‎)</option>
                    <option value="+353">Ireland</option>
                    <option value="+972">Israel (‫ישראל‬‎)</option>
                    <option value="+39">Italy (Italia)</option>
                    <option value="+1">Jamaica</option>
                    <option value="+81">Japan (日本)</option>
                    <option value="+962">Jordan (‫الأردن‬‎)</option>
                    <option value="+7" selected>Kazakhstan (Қазақстан)</option>
                    <option value="+254">Kenya</option>
                    <option value="+686">Kiribati</option>
                    <option value="+383">Kosovo</option>
                    <option value="+965">Kuwait (‫الكويت‬‎)</option>
                    <option value="+996">Kyrgyzstan (Кыргызстан)</option>
                    <option value="+856">Laos (ລາວ)</option>
                    <option value="+371">Latvia (Latvija)</option>
                    <option value="+961">Lebanon (‫لبنان‬‎)</option>
                    <option value="+266">Lesotho</option>
                    <option value="+231">Liberia</option>
                    <option value="+218">Libya (‫ليبيا‬‎)</option>
                    <option value="+423">Liechtenstein</option>
                    <option value="+370">Lithuania (Lietuva)</option>
                    <option value="+352">Luxembourg</option>
                    <option value="+853">Macau (澳門)</option>
                    <option value="+389">Macedonia (FYROM) (Македонија)</option>
                    <option value="+261">Madagascar (Madagasikara)</option>
                    <option value="+265">Malawi</option>
                    <option value="+60">Malaysia</option>
                    <option value="+960">Maldives</option>
                    <option value="+223">Mali</option>
                    <option value="+356">Malta</option>
                    <option value="+692">Marshall Islands</option>
                    <option value="+596">Martinique</option>
                    <option value="+222">Mauritania (‫موريتانيا‬‎)</option>
                    <option value="+230">Mauritius (Moris)</option>
                    <option value="+52">Mexico (México)</option>
                    <option value="+691">Micronesia</option>
                    <option value="+373">Moldova (Republica Moldova)</option>
                    <option value="+377">Monaco</option>
                    <option value="+976">Mongolia (Монгол)</option>
                    <option value="+382">Montenegro (Crna Gora)</option>
                    <option value="+1">Montserrat</option>
                    <option value="+212">Morocco (‫المغرب‬‎)</option>
                    <option value="+258">Mozambique (Moçambique)</option>
                    <option value="+95">Myanmar (Burma) (မြန်မာ)</option>
                    <option value="+264">Namibia (Namibië)</option>
                    <option value="+674">Nauru</option>
                    <option value="+977">Nepal (नेपाल)</option>
                    <option value="+31">Netherlands (Nederland)</option>
                    <option value="+687">New Caledonia (Nouvelle-Calédonie)</option>
                    <option value="+64">New Zealand</option>
                    <option value="+505">Nicaragua</option>
                    <option value="+227">Niger (Nijar)</option>
                    <option value="+234">Nigeria</option>
                    <option value="+683">Niue</option>
                    <option value="+672">Norfolk Island</option>
                    <option value="+850">North Korea (조선 민주주의 인민 공화국)</option>
                    <option value="+1">Northern Mariana Islands</option>
                    <option value="+47">Norway (Norge)</option>
                    <option value="+968">Oman (‫عُمان‬‎)</option>
                    <option value="+92">Pakistan (‫پاکستان‬‎)</option>
                    <option value="+680">Palau</option>
                    <option value="+970">Palestine (‫فلسطين‬‎)</option>
                    <option value="+507">Panama (Panamá)</option>
                    <option value="+675">Papua New Guinea</option>
                    <option value="+595">Paraguay</option>
                    <option value="+51">Peru (Perú)</option>
                    <option value="+63">Philippines</option>
                    <option value="+48">Poland (Polska)</option>
                    <option value="+351">Portugal</option>
                    <option value="+1">Puerto Rico</option>
                    <option value="+974">Qatar (‫قطر‬‎)</option>
                    <option value="+262">Réunion (La Réunion)</option>
                    <option value="+40">Romania (România)</option>
                    <option value="+7">Russia (Россия)</option>
                    <option value="+250">Rwanda</option>
                    <option value="+590">Saint Barthélemy (Saint-Barthélemy)</option>
                    <option value="+290">Saint Helena</option>
                    <option value="+1">Saint Kitts and Nevis</option>
                    <option value="+1">Saint Lucia</option>
                    <option value="+590">Saint Martin (Saint-Martin (partie française))</option>
                    <option value="+508">Saint Pierre and Miquelon (Saint-Pierre-et-Miquelon)</option>
                    <option value="+1">Saint Vincent and the Grenadines</option>
                    <option value="+685">Samoa</option>
                    <option value="+378">San Marino</option>
                    <option value="+239">São Tomé and Príncipe (São Tomé e Príncipe)</option>
                    <option value="+966">Saudi Arabia (‫المملكة العربية السعودية‬‎)</option>
                    <option value="+221">Senegal (Sénégal)</option>
                    <option value="+381">Serbia (Србија)</option>
                    <option value="+248">Seychelles</option>
                    <option value="+232">Sierra Leone</option>
                    <option value="+65">Singapore</option>
                    <option value="+1">Sint Maarten</option>
                    <option value="+421">Slovakia (Slovensko)</option>
                    <option value="+386">Slovenia (Slovenija)</option>
                    <option value="+677">Solomon Islands</option>
                    <option value="+252">Somalia (Soomaaliya)</option>
                    <option value="+27">South Africa</option>
                    <option value="+82">South Korea (대한민국)</option>
                    <option value="+211">South Sudan (‫جنوب السودان‬‎)</option>
                    <option value="+34">Spain (España)</option>
                    <option value="+94">Sri Lanka (ශ්‍රී ලංකාව)</option>
                    <option value="+249">Sudan (‫السودان‬‎)</option>
                    <option value="+597">Suriname</option>
                    <option value="+268">Swaziland</option>
                    <option value="+46">Sweden (Sverige)</option>
                    <option value="+41">Switzerland (Schweiz)</option>
                    <option value="+963">Syria (‫سوريا‬‎)</option>
                    <option value="+886">Taiwan (台灣)</option>
                    <option value="+992">Tajikistan</option>
                    <option value="+255">Tanzania</option>
                    <option value="+66">Thailand (ไทย)</option>
                    <option value="+670">Timor-Leste</option>
                    <option value="+228">Togo</option>
                    <option value="+690">Tokelau</option>
                    <option value="+676">Tonga</option>
                    <option value="+1">Trinidad and Tobago</option>
                    <option value="+216">Tunisia (‫تونس‬‎)</option>
                    <option value="+90">Turkey (Türkiye)</option>
                    <option value="+993">Turkmenistan</option>
                    <option value="+1">Turks and Caicos Islands</option>
                    <option value="+688">Tuvalu</option>
                    <option value="+1">U.S. Virgin Islands</option>
                    <option value="+256">Uganda</option>
                    <option value="+380">Ukraine (Україна)</option>
                    <option value="+971">United Arab Emirates (‫الإمارات العربية المتحدة‬‎)</option>
                    <option value="+44">United Kingdom</option>
                    <option value="+1">United States</option>
                    <option value="+598">Uruguay</option>
                    <option value="+998">Uzbekistan (Oʻzbekiston)</option>
                    <option value="+678">Vanuatu</option>
                    <option value="+39">Vatican City (Città del Vaticano)</option>
                    <option value="+58">Venezuela</option>
                    <option value="+84">Vietnam (Việt Nam)</option>
                    <option value="+681">Wallis and Futuna</option>
                    <option value="+967">Yemen (‫اليمن‬‎)</option>
                    <option value="+260">Zambia</option>
                    <option value="+263">Zimbabwe</option>
                </select>
                <input type="tel" name="phone" id="phone" placeholder="Телефон*" class="modal__box-field" required />
                <input type="text" name="position" placeholder="Должность*" class="modal__box-field col-2" required />
                <input type="text" name="company" placeholder="Компания*" class="modal__box-field" required />
                <select name="employee_count" class="modal__box-select" required>
    <option selected hidden>Кол-во сотрудников*</option>
    @foreach($costs as $item)
        <option value="{{$item->getTranslatedAttribute('quantity', app()->getLocale(), 'ru')}}">
            {{$item->getTranslatedAttribute('quantity', app()->getLocale(), 'ru')}}
        </option>
    @endforeach

</select>
                <button type="submit" class="modal__box-submit">Запросить демо</button>
                <div class="modal__box-politic">
                    Предоставляя свои данные, вы соглашаетесь с
                    <a href="#" target="_blank">Политикой конфиденциальности</a> SalemHr.
                </div>
            </div>
        </form>
    </div>
</div>

@include('layouts.footer')

<script>
    var lazyLoadInstance = new LazyLoad({
        // Your custom settings go here
    });
</script>
<script src="{{ asset('js/jquery-3.6.0.min.js?_v=20240517140044') }}"></script>
<script src="{{ asset('js/jquery.maskedinput.min.js?_v=20240517140044') }}"></script>
<script src="{{ asset('js/jquery.fancybox.min.js?_v=20240517140044') }}"></script>
<script src="{{ asset('js/swiper-bundle.min.js?_v=20240517140044') }}"></script>
<script src="{{ asset('js/jquery.waypoints.min.js?_v=20240517140044') }}"></script>
<!-- <script src="{{ asset('js/debug.addIndicators.min.js') }}"></script> -->
<script src="{{ asset('js/ScrollMagic.min.js') }}"></script>
<script src="{{ asset('js/app.js?_v=2.19') }}"></script>
<!-- <script src="{{ asset('js/src/index.mjs') }}"></script> -->
<!-- <script src="{{ asset('js/animation-products.js') }}"></script> -->

<script>
    $(document).ready(function() {
        function setPhoneMask(countryCode) {
            var masks = {
                '+93': '+93 99 999 9999',      // Afghanistan
                '+355': '+355 999 999 999',    // Albania
                '+213': '+213 999 99 99 99',   // Algeria
                '+1': '+1 (999) 999-9999',     // American Samoa, Anguilla, Antigua and Barbuda, Bahamas, Barbados, Bermuda, British Virgin Islands, Canada, Dominica, Dominican Republic, Grenada, Guam, Jamaica, Montserrat, Northern Mariana Islands, Puerto Rico, Saint Kitts and Nevis, Saint Lucia, Saint Vincent and the Grenadines, Trinidad and Tobago, Turks and Caicos Islands, U.S. Virgin Islands, United States
                '+376': '+376 999 999',        // Andorra
                '+244': '+244 999 999 999',    // Angola
                '+54': '+54 999 9999 9999',    // Argentina
                '+374': '+374 99 999 999',     // Armenia
                '+297': '+297 999 9999',       // Aruba
                '+61': '+61 9 9999 9999',      // Australia
                '+43': '+43 999 9999999',      // Austria
                '+994': '+994 99 999 99 99',   // Azerbaijan
                '+973': '+973 9999 9999',      // Bahrain
                '+880': '+880 9999-999999',    // Bangladesh
                '+375': '+375 99 999-99-99',   // Belarus
                '+32': '+32 9 999 99 99',      // Belgium
                '+501': '+501 999-9999',       // Belize
                '+229': '+229 99 99 99 99',    // Benin
                '+975': '+975 17 999 999',     // Bhutan
                '+591': '+591 9 999 9999',     // Bolivia
                '+387': '+387 99 999 999',     // Bosnia and Herzegovina
                '+267': '+267 99 999 999',     // Botswana
                '+55': '+55 (99) 99999-9999',  // Brazil
                '+246': '+246 999 9999',       // British Indian Ocean Territory
                '+673': '+673 999 9999',       // Brunei
                '+359': '+359 99 999 999',     // Bulgaria
                '+226': '+226 99 99 99 99',    // Burkina Faso
                '+257': '+257 99 99 9999',     // Burundi
                '+855': '+855 99 999 999',     // Cambodia
                '+237': '+237 6 9999 9999',    // Cameroon
                '+238': '+238 999 99 99',      // Cape Verde
                '+599': '+599 9 999 9999',     // Caribbean Netherlands, Curaçao
                '+236': '+236 99 99 99 99',    // Central African Republic
                '+235': '+235 99 99 99 99',    // Chad
                '+56': '+56 9 9999 9999',      // Chile
                '+86': '+86 999 9999 9999',    // China
                '+57': '+57 999 999 9999',     // Colombia
                '+269': '+269 999 99 99',      // Comoros
                '+243': '+243 999 999 999',    // Congo (DRC)
                '+242': '+242 99 999 9999',    // Congo (Republic)
                '+682': '+682 99 999',         // Cook Islands
                '+506': '+506 9999 9999',      // Costa Rica
                '+225': '+225 99 999 999',     // Côte d’Ivoire
                '+385': '+385 99 999 9999',    // Croatia
                '+53': '+53 9 999 9999',       // Cuba
                '+357': '+357 99 999999',      // Cyprus
                '+420': '+420 999 999 999',    // Czech Republic
                '+45': '+45 99 99 99 99',      // Denmark
                '+253': '+253 99 99 99 99',    // Djibouti
                '+593': '+593 9 999 9999',     // Ecuador
                '+20': '+20 999 999 9999',     // Egypt
                '+503': '+503 9999 9999',      // El Salvador
                '+240': '+240 999 999 999',    // Equatorial Guinea
                '+291': '+291 99 999 999',     // Eritrea
                '+372': '+372 9999 9999',      // Estonia
                '+251': '+251 99 999 9999',    // Ethiopia
                '+500': '+500 99999',          // Falkland Islands
                '+298': '+298 999 999',        // Faroe Islands
                '+679': '+679 999 9999',       // Fiji
                '+358': '+358 999 9999999',    // Finland
                '+33': '+33 9 99 99 99 99',    // France
                '+594': '+594 999 99 99 99',   // French Guiana
                '+689': '+689 99 99 99',       // French Polynesia
                '+241': '+241 9 99 99 99',     // Gabon
                '+220': '+220 999 9999',       // Gambia
                '+995': '+995 999 999 999',    // Georgia
                '+49': '+49 999 99999999',     // Germany
                '+233': '+233 99 999 9999',    // Ghana
                '+350': '+350 9999 9999',      // Gibraltar
                '+30': '+30 999 999 9999',     // Greece
                '+299': '+299 99 99 99',       // Greenland
                '+590': '+590 999 99 99 99',   // Guadeloupe, Saint Barthélemy, Saint Martin
                '+502': '+502 9999 9999',      // Guatemala
                '+224': '+224 999 99 99 99',   // Guinea
                '+245': '+245 9 999999',       // Guinea-Bissau
                '+592': '+592 999 9999',       // Guyana
                '+509': '+509 99 99 9999',     // Haiti
                '+504': '+504 9999 9999',      // Honduras
                '+852': '+852 9999 9999',      // Hong Kong
                '+36': '+36 9 999 9999',       // Hungary
                '+354': '+354 999 9999',       // Iceland
                '+91': '+91 99999 99999',      // India
                '+62': '+62 999-9999-9999',    // Indonesia
                '+98': '+98 999 999 9999',     // Iran
                '+964': '+964 999 999 9999',   // Iraq
                '+353': '+353 999 999 999',    // Ireland
                '+972': '+972 99-999-9999',    // Israel
                '+39': '+39 999 999 9999',     // Italy, Vatican City
                '+81': '+81 999-999-9999',     // Japan
                '+962': '+962 9 9999 9999',    // Jordan
                '+7': '+7 (999) 999-99-99',    // Kazakhstan, Russia
                '+254': '+254 999 999999',     // Kenya
                '+686': '+686 999 99999',      // Kiribati
                '+383': '+383 99 999 999',     // Kosovo
                '+965': '+965 999 99999',      // Kuwait
                '+996': '+996 999 999 999',    // Kyrgyzstan
                '+856': '+856 999 99 999 999', // Laos
                '+371': '+371 99 999 999',     // Latvia
                '+961': '+961 99 999 999',     // Lebanon
                '+266': '+266 9999 9999',      // Lesotho
                '+231': '+231 999 999 999',    // Liberia
                '+218': '+218 99 999 9999',    // Libya
                '+423': '+423 999 999 9999',   // Liechtenstein
                '+370': '+370 999 99 999',     // Lithuania
                '+352': '+352 999 999 999',    // Luxembourg
                '+853': '+853 9999 9999',      // Macau
                '+389': '+389 999 999 999',    // Macedonia (FYROM)
                '+261': '+261 99 99 999 99',   // Madagascar
                '+265': '+265 9 9999 9999',    // Malawi
                '+60': '+60 9 999 9999',       // Malaysia
                '+960': '+960 999-9999',       // Maldives
                '+223': '+223 99 99 99 99',    // Mali
                '+356': '+356 9999 9999',      // Malta
                '+692': '+692 999-9999',       // Marshall Islands
                '+596': '+596 999 99 99 99',   // Martinique
                '+222': '+222 99 99 99 99',    // Mauritania
                '+230': '+230 999 9999',       // Mauritius
                '+52': '+52 999 999 9999',     // Mexico
                '+691': '+691 999 9999',       // Micronesia
                '+373': '+373 99 999 999',     // Moldova
                '+377': '+377 99 999 999',     // Monaco
                '+976': '+976 9999 9999',      // Mongolia
                '+382': '+382 99 999 999',     // Montenegro
                '+212': '+212 9999-999999',    // Morocco
                '+258': '+258 99 999 9999',    // Mozambique
                '+95': '+95 999 999 9999',     // Myanmar (Burma)
                '+264': '+264 99 999 9999',    // Namibia
                '+674': '+674 999 9999',       // Nauru
                '+977': '+977 999-9999999',    // Nepal
                '+31': '+31 99 999 9999',      // Netherlands
                '+687': '+687 99 99 99',       // New Caledonia
                '+64': '+64 999 999 9999',     // New Zealand
                '+505': '+505 9999 9999',      // Nicaragua
                '+227': '+227 99 99 99 99',    // Niger
                '+234': '+234 999 999 9999',   // Nigeria
                '+683': '+683 999 9999',       // Niue
                '+672': '+672 3 999 999',      // Norfolk Island
                '+850': '+850 999-9999',       // North Korea
                '+47': '+47 999 99 999',       // Norway
                '+968': '+968 9999 9999',      // Oman
                '+92': '+92 999 9999999',      // Pakistan
                '+680': '+680 999 9999',       // Palau
                '+970': '+970 99 999 9999',    // Palestine
                '+507': '+507 9999-9999',      // Panama
                '+675': '+675 999 9999',       // Papua New Guinea
                '+595': '+595 999 999 999',    // Paraguay
                '+51': '+51 999 999 999',      // Peru
                '+63': '+63 999 999 9999',     // Philippines
                '+48': '+48 999 999 999',      // Poland
                '+351': '+351 99 999 9999',    // Portugal
                '+974': '+974 9999 9999',      // Qatar
                '+262': '+262 999 99 99 99',   // Réunion
                '+250': '+250 999 99 999',     // Rwanda
                '+378': '+378 999 999 999',    // San Marino
                '+239': '+239 999 9999',       // São Tomé and Príncipe
                '+966': '+966 9 9999 9999',    // Saudi Arabia
                '+221': '+221 99 999 99 99',   // Senegal
                '+381': '+381 99 999 9999',    // Serbia
                '+248': '+248 9 999 999',      // Seychelles
                '+232': '+232 99 999999',      // Sierra Leone
                '+65': '+65 9999 9999',        // Singapore
                '+421': '+421 999 999 999',    // Slovakia
                '+386': '+386 999 999 999',    // Slovenia
                '+677': '+677 999 9999',       // Solomon Islands
                '+252': '+252 9 999 999',      // Somalia
                '+27': '+27 99 999 9999',      // South Africa
                '+82': '+82 99-999-9999',      // South Korea
                '+211': '+211 999 999 999',    // South Sudan
                '+34': '+34 999 999 999',      // Spain
                '+94': '+94 999 999 9999',     // Sri Lanka
                '+249': '+249 99 999 9999',    // Sudan
                '+597': '+597 999-9999',       // Suriname
                '+268': '+268 9999 9999',      // Swaziland
                '+46': '+46 99 999 99 99',     // Sweden
                '+41': '+41 99 999 9999',      // Switzerland
                '+963': '+963 999 999 999',    // Syria
                '+886': '+886 9999 999 999',   // Taiwan
                '+992': '+992 999 999 999',    // Tajikistan
                '+255': '+255 99 999 9999',    // Tanzania
                '+66': '+66 99 999 9999',      // Thailand
                '+670': '+670 999 999 999',    // Timor-Leste
                '+228': '+228 99 999 999',     // Togo
                '+690': '+690 9999',           // Tokelau
                '+676': '+676 99 999',         // Tonga
                '+216': '+216 99 999 999',     // Tunisia
                '+90': '+90 (999) 999-99-99',  // Turkey
                '+993': '+993 99 999999',      // Turkmenistan
                '+688': '+688 999 9999',       // Tuvalu
                '+256': '+256 999 999 999',    // Uganda
                '+380': '+380 (99) 999-99-99', // Ukraine
                '+971': '+971 9 999 9999',     // United Arab Emirates
                '+598': '+598 99 999 999',     // Uruguay
                '+998': '+998 99 999 9999',    // Uzbekistan
                '+678': '+678 99 99999',       // Vanuatu
                '+58': '+58 999 9999999',      // Venezuela
                '+84': '+84 99 999 9999',      // Vietnam
                '+681': '+681 99 9999',        // Wallis and Futuna
                '+967': '+967 999 999 999',    // Yemen
                '+260': '+260 99 999 9999',    // Zambia
                '+263': '+263 99 999 9999'     // Zimbabwe
            };
            $('#phone').mask(masks[countryCode]);
        }

        // Установить маску по умолчанию для Казахстана
        setPhoneMask($('#country_code').val());

        $('#country_code').change(function() {
            var selectedCountryCode = $(this).val();
            setPhoneMask(selectedCountryCode);
        });
    });
</script>

<div class="popup form_loader" id="form_loader">
    <div class="form_loader_block">
        <div class="form_loader_animate"></div>
        <div class="form_loader_text" style="color: #000">
            Пожалуйста, подождите
        </div>
    </div>
</div>
</body>
</html>
