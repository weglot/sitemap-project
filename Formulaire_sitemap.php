<!DOCTYPE html>
<html>
    <head>
        <title>Weglot - Sitemap multilingue</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/perso_css.css" rel="stylesheet"/>
    </head>
    <body>
        <div class="container h-100 position-relative">
            <nav class="navbar navbar-expand-md w-100" style="height: 50px;">
                <div class="w-100 text-center">
                    <a href="https://weglot.com/">
                        <img src="images/weglot-blue.svg" alt="Weglot">
                    </a>
                </div>
            </nav>
            <div class="row justify-content-center h-100" style="margin-top: -50px;">
                <div class="col-md-10 text-center my-auto">
                    <div class="l-shape-background l-shape-background--header">
                        <img class="l-shape-background__img l-shape-background__img--1" src="https://weglot.com/wp-content/themes/weglotv2/dist/images/Shape_10.svg" alt="">
                        <img class="l-shape-background__img l-shape-background__img--2" src="https://weglot.com/wp-content/themes/weglotv2/dist/images/Shape_9@1x.png" srcset="https://weglot.com/wp-content/themes/weglotv2/dist/images/Shape_9@1x.png 1x, https://weglot.com/wp-content/themes/weglotv2/dist/images/Shape_9@2x.png 2x" alt="">
                        <img class="l-shape-background__img l-shape-background__img--3" src="https://weglot.com/wp-content/themes/weglotv2/dist/images/Shape_9@1x.png" srcset="https://weglot.com/wp-content/themes/weglotv2/dist/images/Shape_9@1x.png 1x, https://weglot.com/wp-content/themes/weglotv2/dist/images/Shape_9@2x.png 2x" alt="">
                        <div class="pyramid-wrap l-shape-background__img l-shape-background__img--4">
                            <div class="pyramid pyramid--2">
                                <div class="front"></div>
                                <div class="back"></div>
                                <div class="top"></div>
                                <div class="bottom"></div>
                                <div class="left"></div>
                                <div class="right"></div>
                            </div>
                        </div>
                        <div class="pyramid-wrap l-shape-background__img l-shape-background__img--5">
                            <div class="pyramid">
                                <div class="front"></div>
                                <div class="back"></div>
                                <div class="top"></div>
                                <div class="bottom"></div>
                                <div class="left"></div>
                                <div class="right"></div>
                            </div>
                        </div>
                        <div class="cube-wrap l-shape-background__img l-shape-background__img--6">
                            <div class="cube">
                                <div class="front"></div>
                                <div class="back"></div>
                                <div class="top"></div>
                                <div class="bottom"></div>
                                <div class="left"></div>
                                <div class="right"></div>
                            </div>
                        </div>
                        <div class="cube-wrap l-shape-background__img l-shape-background__img--7">
                            <div class="cube cube--lg">
                                <div class="front"></div>
                                <div class="back"></div>
                                <div class="top"></div>
                                <div class="bottom"></div>
                                <div class="left"></div>
                                <div class="right"></div>
                            </div>
                        </div>
                    </div>

                    <h1 style="font-size: 3rem; font-weight: bold">
                        Create your <span class="text-primary">multilingual</span> sitemap!
                    </h1>
                    <br>
                    <p class="lead">
                        Enter your original sitemap and we'll provide your new one.<br>
                        Choose below the options that suit you.<br>
                    </p>
                    <form action="action_sitemap.php" method="post" enctype="multipart/form-data">
                        <div class="position-relative mx-auto mt-5">
                        <!-- xml text -->
                        <textarea class="form-control" id="form-sitemap" placeholder="Enter your sitemap here..." name="text_sitemap" rows="10"></textarea><br>
                        <!-- xml fichier -->
                        <!-- <label for="fname">Entrez votre sitemap en version fichier:</label><br>
                        <input type="file" name="fileToUpload" id="fileToUpload"><br> -->
                        <!-- langue originale -->

                        <label for="ftrans">What is the original language?</label><br>
                        <select required class="form-control w-50 mx-auto" id="form-original-lang" name="originallang">
                            <option id="af" value="af">Afrikaans</option>
                            <option id="sq" value="sq">Albanian</option>
                            <option id="am" value="am">Amharic</option>
                            <option id="ar" value="ar">Arabic</option>
                            <option id="hy" value="hy">Armenian</option>
                            <option id="az" value="az">Azerbaijani</option>
                            <option id="ba" value="ba">Bashkir</option>
                            <option id="eu" value="eu">Basque</option>
                            <option id="be" value="be">Belarusian</option>
                            <option id="bn" value="bn">Bengali</option>
                            <option id="bs" value="bs">Bosnian</option>
                            <option id="bg" value="bg">Bulgarian</option>
                            <option id="my" value="my">Burmese</option>
                            <option id="ca" value="ca">Catalan</option>
                            <option id="km" value="km">Central Khmer</option>
                            <option id="ny" value="ny">Chichewa</option>
                            <option id="co" value="co">Corsican</option>
                            <option id="hr" value="hr">Croatian</option>
                            <option id="cs" value="cs">Czech</option>
                            <option id="da" value="da">Danish</option>
                            <option id="nl" value="nl">Dutch</option>
                            <option id="en" value="en">English</option>
                            <option id="eo" value="eo">Esperanto</option>
                            <option id="et" value="et">Estonian</option>
                            <option id="fj" value="fj">Fijian</option>
                            <option id="fl" value="fl">Filipino</option>
                            <option id="fi" value="fi">Finnish</option>
                            <option id="fr" value="fr">French</option>
                            <option id="gl" value="gl">Galician</option>
                            <option id="ka" value="ka">Georgian</option>
                            <option id="de" value="de">German</option>
                            <option id="el" value="el">Greek</option>
                            <option id="gu" value="gu">Gujarati</option>
                            <option id="ht" value="ht">Haitian</option>
                            <option id="ha" value="ha">Hausa</option>
                            <option id="hw" value="hw">Hawaiian</option>
                            <option id="he" value="he">Hebrew</option>
                            <option id="hi" value="hi">Hindi</option>
                            <option id="hu" value="hu">Hungarian</option>
                            <option id="is" value="is">Icelandic</option>
                            <option id="ig" value="ig">Igbo</option>
                            <option id="id" value="id">Indonesian</option>
                            <option id="ga" value="ga">Irish</option>
                            <option id="it" value="it">Italian</option>
                            <option id="ja" value="ja">Japanese</option>
                            <option id="jv" value="jv">Javanese</option>
                            <option id="kn" value="kn">Kannada</option>
                            <option id="kk" value="kk">Kazakh</option>
                            <option id="ko" value="ko">Korean</option>
                            <option id="ku" value="ku">Kurdish</option>
                            <option id="ky" value="ky">Kyrgyz</option>
                            <option id="la" value="la">Latin</option>
                            <option id="lv" value="lv">Latvian</option>
                            <option id="lo" value="lo">Lao</option>
                            <option id="lt" value="lt">Lithuanian</option>
                            <option id="lb" value="lb">Luxembourgish</option>
                            <option id="mk" value="mk">Macedonian</option>
                            <option id="mg" value="mg">Malagasy</option>
                            <option id="ms" value="ms">Malay</option>
                            <option id="ml" value="ml">Malayalam</option>
                            <option id="mt" value="mt">Maltese</option>
                            <option id="mi" value="mi">Māori</option>
                            <option id="mr" value="mr">Marathi</option>
                            <option id="mn" value="mn">Mongolian</option>
                            <option id="ne" value="ne">Nepali</option>
                            <option id="no" value="no">Norwegian</option>
                            <option id="ps" value="ps">Pashto</option>
                            <option id="fa" value="fa">Persian</option>
                            <option id="pl" value="pl">Polish</option>
                            <option id="pt" value="pt">Portuguese</option>
                            <option id="pa" value="pa">Punjabi</option>
                            <option id="ro" value="ro">Romanian</option>
                            <option id="ru" value="ru">Russian</option>
                            <option id="sm" value="sm">Samoan</option>
                            <option id="gd" value="gd">Scottish Gaelic</option>
                            <option id="sr" value="sr">Serbian</option>
                            <option id="sn" value="sn">Shona</option>
                            <option id="zh" value="zh">Simplified Chinese</option>
                            <option id="sd" value="sd">Sindhi</option>
                            <option id="si" value="si">Sinhalese</option>
                            <option id="sk" value="sk">Slovak</option>
                            <option id="sl" value="sl">Slovenian</option>
                            <option id="so" value="so">Somali</option>
                            <option id="st" value="st">Southern Sotho</option>
                            <option id="es" value="es">Spanish</option>
                            <option id="su" value="su">Sundanese</option>
                            <option id="sw" value="sw">Swahili</option>
                            <option id="sv" value="sv">Swedish</option>
                            <option id="tl" value="tl">Tagalog</option>
                            <option id="ty" value="ty">Tahitian</option>
                            <option id="tg" value="tg">Tajik</option>
                            <option id="ta" value="ta">Tamil</option>
                            <option id="tt" value="tt">Tatar</option>
                            <option id="te" value="te">Telugu</option>
                            <option id="th" value="th">Thai</option>
                            <option id="to" value="to">Tongan</option>
                            <option id="tw" value="tw">Traditional Chinese</option>
                            <option id="tr" value="tr">Turkish</option>
                            <option id="uk" value="uk">Ukrainian</option>
                            <option id="ur" value="ur">Urdu</option>
                            <option id="uz" value="uz">Uzbek</option>
                            <option id="vi" value="vi">Vietnamese</option>
                            <option id="cy" value="cy">Welsh</option>
                            <option id="fy" value="fy">Western Frisian</option>
                            <option id="xh" value="xh">Xhosa</option>
                            <option id="yi" value="yi">Yiddish</option>
                            <option id="yo" value="yo">Yoruba</option>
                            <option id="zu" value="zu">Zulu</option>
                        </select>
                        <br/>


                        <!-- langue traduite -->
                        <label for="ftrans">What are the translated languages?</label><br>
                        <select multiple required class="form-control w-50 mx-auto" id="form-trans-lang" name="translang[]">
                            <option id="af" value="af">Afrikaans</option>
                            <option id="sq" value="sq">Albanian</option>
                            <option id="am" value="am">Amharic</option>
                            <option id="ar" value="ar">Arabic</option>
                            <option id="hy" value="hy">Armenian</option>
                            <option id="az" value="az">Azerbaijani</option>
                            <option id="ba" value="ba">Bashkir</option>
                            <option id="eu" value="eu">Basque</option>
                            <option id="be" value="be">Belarusian</option>
                            <option id="bn" value="bn">Bengali</option>
                            <option id="bs" value="bs">Bosnian</option>
                            <option id="bg" value="bg">Bulgarian</option>
                            <option id="my" value="my">Burmese</option>
                            <option id="ca" value="ca">Catalan</option>
                            <option id="km" value="km">Central Khmer</option>
                            <option id="ny" value="ny">Chichewa</option>
                            <option id="co" value="co">Corsican</option>
                            <option id="hr" value="hr">Croatian</option>
                            <option id="cs" value="cs">Czech</option>
                            <option id="da" value="da">Danish</option>
                            <option id="nl" value="nl">Dutch</option>
                            <option id="en" value="en">English</option>
                            <option id="eo" value="eo">Esperanto</option>
                            <option id="et" value="et">Estonian</option>
                            <option id="fj" value="fj">Fijian</option>
                            <option id="fl" value="fl">Filipino</option>
                            <option id="fi" value="fi">Finnish</option>
                            <option id="fr" value="fr">French</option>
                            <option id="gl" value="gl">Galician</option>
                            <option id="ka" value="ka">Georgian</option>
                            <option id="de" value="de">German</option>
                            <option id="el" value="el">Greek</option>
                            <option id="gu" value="gu">Gujarati</option>
                            <option id="ht" value="ht">Haitian</option>
                            <option id="ha" value="ha">Hausa</option>
                            <option id="hw" value="hw">Hawaiian</option>
                            <option id="he" value="he">Hebrew</option>
                            <option id="hi" value="hi">Hindi</option>
                            <option id="hu" value="hu">Hungarian</option>
                            <option id="is" value="is">Icelandic</option>
                            <option id="ig" value="ig">Igbo</option>
                            <option id="id" value="id">Indonesian</option>
                            <option id="ga" value="ga">Irish</option>
                            <option id="it" value="it">Italian</option>
                            <option id="ja" value="ja">Japanese</option>
                            <option id="jv" value="jv">Javanese</option>
                            <option id="kn" value="kn">Kannada</option>
                            <option id="kk" value="kk">Kazakh</option>
                            <option id="ko" value="ko">Korean</option>
                            <option id="ku" value="ku">Kurdish</option>
                            <option id="ky" value="ky">Kyrgyz</option>
                            <option id="la" value="la">Latin</option>
                            <option id="lv" value="lv">Latvian</option>
                            <option id="lo" value="lo">Lao</option>
                            <option id="lt" value="lt">Lithuanian</option>
                            <option id="lb" value="lb">Luxembourgish</option>
                            <option id="mk" value="mk">Macedonian</option>
                            <option id="mg" value="mg">Malagasy</option>
                            <option id="ms" value="ms">Malay</option>
                            <option id="ml" value="ml">Malayalam</option>
                            <option id="mt" value="mt">Maltese</option>
                            <option id="mi" value="mi">Māori</option>
                            <option id="mr" value="mr">Marathi</option>
                            <option id="mn" value="mn">Mongolian</option>
                            <option id="ne" value="ne">Nepali</option>
                            <option id="no" value="no">Norwegian</option>
                            <option id="ps" value="ps">Pashto</option>
                            <option id="fa" value="fa">Persian</option>
                            <option id="pl" value="pl">Polish</option>
                            <option id="pt" value="pt">Portuguese</option>
                            <option id="pa" value="pa">Punjabi</option>
                            <option id="ro" value="ro">Romanian</option>
                            <option id="ru" value="ru">Russian</option>
                            <option id="sm" value="sm">Samoan</option>
                            <option id="gd" value="gd">Scottish Gaelic</option>
                            <option id="sr" value="sr">Serbian</option>
                            <option id="sn" value="sn">Shona</option>
                            <option id="zh" value="zh">Simplified Chinese</option>
                            <option id="sd" value="sd">Sindhi</option>
                            <option id="si" value="si">Sinhalese</option>
                            <option id="sk" value="sk">Slovak</option>
                            <option id="sl" value="sl">Slovenian</option>
                            <option id="so" value="so">Somali</option>
                            <option id="st" value="st">Southern Sotho</option>
                            <option id="es" value="es">Spanish</option>
                            <option id="su" value="su">Sundanese</option>
                            <option id="sw" value="sw">Swahili</option>
                            <option id="sv" value="sv">Swedish</option>
                            <option id="tl" value="tl">Tagalog</option>
                            <option id="ty" value="ty">Tahitian</option>
                            <option id="tg" value="tg">Tajik</option>
                            <option id="ta" value="ta">Tamil</option>
                            <option id="tt" value="tt">Tatar</option>
                            <option id="te" value="te">Telugu</option>
                            <option id="th" value="th">Thai</option>
                            <option id="to" value="to">Tongan</option>
                            <option id="tw" value="tw">Traditional Chinese</option>
                            <option id="tr" value="tr">Turkish</option>
                            <option id="uk" value="uk">Ukrainian</option>
                            <option id="ur" value="ur">Urdu</option>
                            <option id="uz" value="uz">Uzbek</option>
                            <option id="vi" value="vi">Vietnamese</option>
                            <option id="cy" value="cy">Welsh</option>
                            <option id="fy" value="fy">Western Frisian</option>
                            <option id="xh" value="xh">Xhosa</option>
                            <option id="yi" value="yi">Yiddish</option>
                            <option id="yo" value="yo">Yoruba</option>
                            <option id="zu" value="zu">Zulu</option>
                        </select>
                        <br/>

                        <label for="type">What type of integration is it?</label><br>
                        <select required class="form-control w-50 mx-auto" id="form-type" name="type">
                            <option id="domain" value="domain">Subdomain</option>
                            <option id="dir" value="dir">Subdirectory</option>
                        </select>
                        <br/>

                        <!-- Submit -->
                        <input type="submit" class="btn btn-primary" id="form-submit" value="Generate sitemap">
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </body>
</html>