<!DOCTYPE html>
<html>
    <head>
        <title>Weglot - Sitemap multilingue</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="clipboard.js-master/dist/clipboard.min.js" type="text/javascript"></script>
        <link href="css/perso_css.css" rel="stylesheet"/>
    </head>
    <body>
        <div class="container_bis h-100 position-relative">
            <nav class="navbar navbar-expand-md w-100" style="height: 50px;">
                <div class="w-100 text-center">
                    <a href="https://weglot.com/">
                        <img src="images/weglot-blue.svg" alt="Weglot">
                    </a>
                </div>
            </nav>
            <?php
            
            
                //vérification que c'est un texte
                if(isset($_POST['text_sitemap']) and $_POST['text_sitemap'] != null and $_POST['text_sitemap'][0]=="<"){
                    
                   
                    /** echo("</br>");
                    echo($_POST['originalelang']);
                    echo("</br>");
                    print_r ($_POST['translang']); */
                    
                    //creation du xml
                    /**$doc = new DOMDocument();
                    $doc->loadXML($_POST['text_sitemap']);
                    echo 'le xml: \n<br/>';
                    echo $doc->saveXML();*/

                    //parser le sitemap
                    /* $p = xml_parser_create();
                    xml_parse_into_struct($p, $_POST['text_sitemap'], $vals, $index);
                    xml_parser_free($p);
                    echo "Index array <br/>\n";
                    print_r($index);
                    echo "\nVals array<br/>\n";
                    print_r($vals);
                    echo "\n<br/>\n";
                    
                    //recuperaition des URLs
                    foreach ($index['LOC'] as $i) {
                        echo "La liste des URLs: <br/>\n";
                        echo $vals[$i]['value'];
                    }*/
                    
                    
                    /*$sitemap = simplexml_load_string($_POST['text_sitemap']);
                    echo "<br/>\n";
                    echo "Conversion en objet:<br/>\n";
                    print_r($sitemap);
                    echo "<br/>\n";*/
                    
                   
                    
                    
                    $sitemap = new SimpleXMLElement($_POST['text_sitemap']);
                    

                    echo "
                    <table>
                        <caption>Your multilingual sitemap has been </br>successfully generated!</caption>

                        <thead>
                            <tr>
                                <th>Your original sitemap:</th>
                                <th>Your multilingual sitemap:</th>
                            </tr>
                        </thead>

                        <tbody> 
                            <tr>
                                <td>
                                    <pre>\n";
                    echo htmlentities($sitemap->asXML());
                    echo "</pre>\n";
                    echo "</td>";
                    
                    
                    $nameSpace=$sitemap->getDocNamespaces();
                    
                    if(!isset($nameSpace['xhtml'])){
                        $sitemap->addAttribute('xmlns:xmlns:xhtml', 'http://www.w3.org/1999/xhtml');
                    }
                    
                    //afficher la liste des URLs
                    echo "<br/>\n";
                    /*echo "La liste des URLs: <br/>\n";
                    foreach ($sitemap->url as $url) {
                        echo $url->loc;
                        echo "<br/>\n";
                    }*/
                    
                    //recuperation des langues
                    $originalLang = $_POST['originallang'];
                    $translatedLang = $_POST['translang'];
                    
                    //Si c'est un sous repertoire
                    if(isset($_POST['type'])){
                        if($_POST['type'] == 'dir'){
                            
                            //Ajout de l'URL traduite
                            $translatedUrl = array();
                            
                            foreach ($sitemap->url as $url) {
                                //Construction de l'URL
                                $selectedUrl = (string)$url->loc;
                                $slug = explode('/', $selectedUrl);
                                //$slug[0]=$slug[0].'/';
                                /*echo '<pre>';
                                print_r($slug);
                                echo '</pre>';*/
                                
                                //Premiere langue traduite
                                //echo 'le code de langue: '.$translatedLang[0]."</br>";
                                $tab1 = array_slice ($slug, 0, 3); //Récupère http: et domaine
                                $tab2 = array_slice ($slug, 3); //Récupère tous les éléments à partir de l'indice 2
                                array_push ($tab1, $translatedLang[0]); //Ajoute à lde code de langue à la fin de tab1
                                $slug = array_merge ($tab1, $tab2); //Fusionne les deux tableaux
                                /*echo '<pre>';
                                print_r($slug); //Affiche le tableau
                                echo '</pre>';*/
                                
                                //reformation de l'url
                                $newurl = implode('/', $slug);
                                //echo 'La nouvelle URL: '.$newurl."<br/>\n";
                                
                                //recuperation de la nouvelle URL
                                $translatedUrl[]= [
                                    "originalUrl" => $selectedUrl,
                                    "url" => $newurl,
                                    "lang" => $translatedLang[0],
                                ];
                                
                                //Si il existe d'autres langues traduites
                                $i=1;
                                while (!empty($translatedLang[$i])){
                                    //echo 'le code de langue: '.$translatedLang[$i]."</br>";
                                    //on remplace directement le code de langue precedent, dans le tableau
                                    $slug[3] = $translatedLang[$i];
                                    /*echo '<pre>';
                                    print_r($slug); 
                                    echo '</pre>';*/
                                    
                                    //reformation de l'url
                                    $newurl = implode('/', $slug);
                                    //echo 'La nouvelle URL: '.$newurl."<br/>\n";
                                    
                                    //recuperation de la nouvelle URL
                                    $translatedUrl[]= [
                                        "originalUrl" => $selectedUrl,
                                        "url" => $newurl,
                                        "lang" => $translatedLang[$i],
                                    ];
                                    
                                    $i++;
                                }
                                
                                
                            }
                            
                            /*echo '<pre>';
                            print_r($translatedUrl); 
                            echo '</pre>';*/
                            
                            foreach ($sitemap->url as $element){
                                $hreftag=$element->addChild('xmlns:xhtml:link');
                                $hreftag->addAttribute('rel', 'alternate');
                                $hreftag->addAttribute('hreflang', $originalLang);
                                $hreftag->addAttribute('href', $element->loc);
                                foreach ($translatedUrl as $alternateUrl){
                                    if($alternateUrl['originalUrl'] == $element->loc){
                                        $hreftag=$element->addChild('xmlns:xhtml:link');
                                        $hreftag->addAttribute('rel', 'alternate');
                                        $hreftag->addAttribute('hreflang', $alternateUrl['lang']);
                                        $hreftag->addAttribute('href', $alternateUrl['url']);
                                    }
                                }
                            }
                            
                            //ajoute des nouvelles URLs au sitemap
                            foreach ($translatedUrl as $element){
                                
                                $url = $sitemap->addChild('url');
                                $url->addChild('loc', $element['url']);
                                $hreftag=$url->addChild('xmlns:xhtml:link');
                                $hreftag->addAttribute('rel', 'alternate');
                                $hreftag->addAttribute('hreflang', $originalLang);
                                $hreftag->addAttribute('href', $element['originalUrl']);
                                foreach ($translatedUrl as $alternateUrl){
                                    if($alternateUrl['originalUrl'] == $element['originalUrl']){
                                        $hreftag=$url->addChild('xmlns:xhtml:link');
                                        $hreftag->addAttribute('rel', 'alternate');
                                        $hreftag->addAttribute('hreflang', $alternateUrl['lang']);
                                        $hreftag->addAttribute('href', $alternateUrl['url']);
                                    }
                                }
                                
                            }
                            
                            $translatedUrl = array();
                            
                            
                            
                            
                        //si c'est un sous domaine    
                        }else if($_POST['type'] == 'domain'){
                            
                            //Ajout de l'URL traduite
                            $translatedUrl = array();
                            foreach ($sitemap->url as $url) {
                                //Construction de l'URL
                                $selectedUrl = (string)$url->loc;
                                $slug = explode('/', $selectedUrl);
                                /*echo '<pre>';
                                print_r($slug);
                                echo '</pre>';*/
                                
                                
                                $domain=explode('.',$slug[2]);
                                if($domain[0] == 'www'){
                                    foreach ($translatedLang as $lang){
                                        //echo 'le code de langue: '.$lang."</br>";
                                        $domain[0] = $lang;
                                        
                                        /*echo '<pre>';
                                        print_r($domain); //Affiche le tableau
                                        echo '</pre>';*/

                                        //reformation du domain
                                        $newDomain = implode('.', $domain);

                                        //Ajout du nouveau domaine au slug
                                        $slug[2] = $newDomain;

                                        //reformation de l'url
                                        $newurl = implode('/', $slug);
                                        //echo 'La nouvelle URL: '.$newurl."<br/>\n";

                                        //recuperation de la nouvelle URL
                                        $translatedUrl[]= [
                                            "originalUrl" => $selectedUrl,
                                            "url" => $newurl,
                                            "lang" => $lang,
                                        ];
                                    }
                                }else{
                                    //echo 'le code de langue: '.$translatedLang[0]."</br>";
                                    
                                    $tab1 = array_slice ($domain, 0, 0); //Récupère http: et domaine
                                    $tab2 = array_slice ($domain, 0); //Récupère tous les éléments à partir de l'indice 2
                                    array_push ($tab1, $translatedLang[0]); //Ajoute à lde code de langue à la fin de tab1
                                    $domain = array_merge ($tab1, $tab2); //Fusionne les deux tableaux
                                    
                                    /*echo '<pre>';
                                    print_r($domain); //Affiche le tableau
                                    echo '</pre>';*/

                                    //reformation du domain
                                    $newDomain = implode('.', $domain);

                                    //Ajout du nouveau domaine au slug
                                    $slug[2] = $newDomain;

                                    //reformation de l'url
                                    $newurl = implode('/', $slug);
                                    //echo 'La nouvelle URL: '.$newurl."<br/>\n";

                                    //recuperation de la nouvelle URL
                                    $translatedUrl[]= [
                                        "originalUrl" => $selectedUrl,
                                        "url" => $newurl,
                                        "lang" => $translatedLang[0],
                                    ];
                                    
                                    
                                    //Si il existe d'autres langues traduites
                                    $i=1;
                                    while (!empty($translatedLang[$i])){
                                        //echo 'le code de langue: '.$translatedLang[$i]."</br>";
                                        
                                        //on remplace directement le code de langue precedent, dans le tableau
                                        $domain[0] = $translatedLang[$i];
                                        /*echo '<pre>';
                                        print_r($domain); //Affiche le tableau
                                        echo '</pre>';*/

                                        //reformation du domain
                                        $newDomain = implode('.', $domain);

                                        //Ajout du nouveau domaine au slug
                                        $slug[2] = $newDomain;

                                        //reformation de l'url
                                        $newurl = implode('/', $slug);
                                        //echo 'La nouvelle URL: '.$newurl."<br/>\n";

                                        //recuperation de la nouvelle URL
                                        $translatedUrl[]= [
                                            "originalUrl" => $selectedUrl,
                                            "url" => $newurl,
                                            "lang" => $translatedLang[$i],
                                        ];

                                        $i++;
                                    }
                                }
                                
                                
                                
                                
                            }
                            
                            foreach ($sitemap->url as $element){
                                $hreftag=$element->addChild('xmlns:xhtml:link');
                                $hreftag->addAttribute('rel', 'alternate');
                                $hreftag->addAttribute('hreflang', $originalLang);
                                $hreftag->addAttribute('href', $element->loc);
                                foreach ($translatedUrl as $alternateUrl){
                                    if($alternateUrl['originalUrl'] == $element->loc){
                                        $hreftag=$element->addChild('xmlns:xhtml:link');
                                        $hreftag->addAttribute('rel', 'alternate');
                                        $hreftag->addAttribute('hreflang', $alternateUrl['lang']);
                                        $hreftag->addAttribute('href', $alternateUrl['url']);
                                    }
                                }
                            }
                            
                            //ajoute des nouvelles URLs au sitemap
                            foreach ($translatedUrl as $element){
                                
                                $url = $sitemap->addChild('url');
                                $url->addChild('loc', $element['url']);
                                $hreftag=$url->addChild('xmlns:xhtml:link');
                                $hreftag->addAttribute('rel', 'alternate');
                                $hreftag->addAttribute('hreflang', $originalLang);
                                $hreftag->addAttribute('href', $element['originalUrl']);
                                foreach ($translatedUrl as $alternateUrl){
                                    if($alternateUrl['originalUrl'] == $element['originalUrl']){
                                        $hreftag=$url->addChild('xmlns:xhtml:link');
                                        $hreftag->addAttribute('rel', 'alternate');
                                        $hreftag->addAttribute('hreflang', $alternateUrl['lang']);
                                        $hreftag->addAttribute('href', $alternateUrl['url']);
                                    }
                                }
                                
                            }
                            
                        
                        }else{
                            echo 'Erreur';
                        }
                    }
                    
                    $dom = new DOMDocument("1.0");
                    $dom->preserveWhiteSpace = false;
                    $dom->formatOutput = true;
                    $dom->loadXML($sitemap->asXML());
                    
                    echo '
                                <td>';
                    echo "<pre>\n";
                    echo htmlentities($dom->saveXML());
                    echo "</pre>\n";
                    $strToCopy=(string)htmlentities($dom->saveXML());
                    echo "<input type='text' value='$strToCopy' id='toCopy'>";
                    echo '<div class="tooltip">
                            <button class="btn copy-btn" onclick="copyFunction()" onmouseout="outFunc()">
                                <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
                                Copy to clipboard
                            </button>
                        </div>';
                    echo"</td>
                            </tr>
                        </tbody>
                     </table>";
         
                   echo "<script>"
                    . 'function copyFunction() {

                    var copyText = document.getElementById("toCopy");


                    copyText.select();
                    copyText.setSelectionRange(0, 99999); 


                    document.execCommand("copy");


                    var tooltip = document.getElementById("myTooltip");
                    tooltip.innerHTML = "Copied!";
                  }
                  function outFunc() {
                    var tooltip = document.getElementById("myTooltip");
                    tooltip.innerHTML = "Copy to clipboard";
                  }'
                    
                    . "</script>";

                   
               
                //vérification que c'est un fichier    
                }elseif(isset ($_POST['fileToUpload'])and $_POST['fileToUpload'] != null){
                    echo("le sitemap fichier: </br>\n");
                    
                    $target_dir = "/uploads";
                    $target_file = $target_dir . basename($_FILES["fileToUpload"]["sitemap"]);
                    $uploadOk = 1;
                    $xmlFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                    // Check if xml file is a actual xml or fake xml

                    
                    
                    // Check if file already exists
                    if (file_exists($target_file)) {
                      echo "Sorry, file already exists.";
                      $uploadOk = 0;
                    }

                    // Check file size
                    if ($_FILES["fileToUpload"]["size"] > 500000) {
                      echo "Sorry, your file is too large.";
                      $uploadOk = 0;
                    }

                    // Allow certain file formats
                    if($imageFileType != "xml") {
                      echo "Sorry, only XML files are allowed.";
                      $uploadOk = 0;
                    }

                    // Check if $uploadOk is set to 0 by an error
                    if ($uploadOk == 0) {
                      echo "Sorry, your file was not uploaded.";
                    // if everything is ok, try to upload file
                    } else {
                      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_sitemap"], $target_file)) {
                        echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["sitemap"])). " has been uploaded.";
                      } else {
                        echo "Sorry, there was an error uploading your file.";
                      }
                    }
                    
                //Si on a ni un texte ni un fichier    
                }else{
                    echo "Error. This is not a valid sitemap.</br>\n";
                    //mettre un bouton pour revenir à la page d'accueil
                }
            ?>
        </div>
    </body>
</html>