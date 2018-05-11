<?php
/* 
!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
All configuration values are mendatory
!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
*/


//Proxy configuration//////////////////////////////////////////////////////////////////////////////
//Proxy IP and Port
$bg_proxy="172.16.0.1:8080";

//Jabse Search API Key
$bg_jabse_apikey="";
//Google Search API Key
$bg_google_apikey="";


//Script refresh rate in seconds///////////////////////////////////////////////////////////////////
$bg_refreshrate=10000;

//Number of URL scaned per refresh///////////////////////////////////////////////////////////////////
$bg_url_limit=1;


//MySQL configuration//////////////////////////////////////////////////////////////////////////////

//MySQL host
$bg_host="localhost";

//Database user name
$bg_user="";

//User password
$bg_password="";

//Database name
$bg_database="";

//No databaase connection message
$bg_noconnection="Няма връзка с базата данни ";

//No sach database message
$bg_nodatabase="Не съществува база данни, поискана от заявката ";

//Database table name
$bg_table="bigdata";


//Database Table configuration//////////////////////////////////////////////////////////////////////////////
/*
!!!!!!!!!!!!!!!!!!
Table fields names
!!!!!!!!!!!!!!!!!!
*/

//Jabse configuration//////////////////////////////////////////////////////////////////////////////

//Datetime that Jabse search was done
$bg_dc_jabse="dc_jabse";

//Serach results from Jabse
$bg_url_jabse_maybe_json="url_jabse_maybe_json";
//Serach results from Jabse in Latin
$bg_url_jabse_lat_maybe_json="url_jabse_lat_maybe_json";


//Google configuration//////////////////////////////////////////////////////////////////////////////

//Datetime that Google search was done
$bg_dc_google="dc_google";

//Serach results from Google
$bg_url_google_maybe="url_google_maybe";


//Bing configuration//////////////////////////////////////////////////////////////////////////////

//Datetime that Bing search was done
$bg_dc_bing="dc_bing";

//UrlSearcher path. Must end with / !!!!!
$bg_bing_UrlSearcher_results="D:/UrlSearcher_results/";
//UrlSearcher path to text files. Must end with / !!!!!
$bg_bing_UrlSearcher_results_txt="D:/UrlSearcher_results/txtFiles/";


//Social Media Presence configuration//////////////////////////////////////////////////////////////////////////////

//Datetime that Social Media Presence search was done
$bg_dc_socialmediapresence="dc_socialmediapresence";

//Social Media Presence path. Must end with / !!!!!
$bg_socialmediapresence="D:/WP2-Social-Media-Presence-master/";


//ID of enterprice
$bg_EIK="EIK";

//URL of enterprice from SBR
$bg_url="Web";

//Enterprice name
$bg_NAME="NAME";

//NACE code
$bg_NACE="KID4_08";

//Teritorial unit
$bg_OBL="OBL_CA";

//Address
$bg_ADR="ADR";

//Telephone
$bg_tel="telefon";

//Fax
$bg_fax="fax";

//GSM
$bg_gsm="GSM";

//NUTS
$bg_nuts="NUTS";

//Old url from previous search project
$bg_url_old="url_old";

//Datetime that old url was checked
$bg_dc_url_old="dc_url_old";

//URL checked from initial url
$bg_url_from_url="url_from_url";

//Datetime that initial url was checked
$bg_dc_from_url="dc_from_url";

//E-mail of enterprice
$bg_email="e_mail";

//URL from e-mail domain
$bg_url_from_email="url_from_email";

//Datetime that e-mail was checked
$bg_dc_from_email="dc_from_email";

//Final(real) enterprice web site url
$bg_url_final="url_final";

//Final(real) enterprice web site url stop edit
$bg_url_final_stop="url_final_stop";

//Enterprice web site meta information - title, description and keywords
$bg_title="title";
$bg_description="description";
$bg_keywords="keywords";

//Time when the enterprice web site has been last web scraped
$bg_datechecked_scrap="datechecked_scrap";

//Enterprice e-store final(real) stop edit
$bg_estore_final_stop="estore_final_stop";

//Enterprice e-store final(real)
$bg_estore_final="estore_final";

//Enterprice e-store final(real)
$bg_estore_lost="estore_lost";

//Enterprice e-store web site version 1
$bg_estore="estore";

//Enterprice e-store web site version 2
$bg_estorev2="estorev2";

//Enterprice e-store web site version 3
$bg_estorev3="estorev3";

//Enterprice e-store web site version 1 meta information - title, description and keywords
$bg_etitle="etitle";
$bg_edescription="edescription";
$bg_ekeywords="ekeywords";

//Enterprice e-store web site version 2 meta information - title, description and keywords
$bg_etitlev2="etitlev2";
$bg_edescriptionv2="edescriptionv2";
$bg_ekeywordsv2="ekeywordsv2";

//Enterprice e-store web site version 3 meta information - title, description and keywords
$bg_etitlev3="etitlev3";
$bg_edescriptionv3="edescriptionv3";
$bg_ekeywordsv3="ekeywordsv3";

//Social media fields names
$bg_facebook="facebook";
$bg_twitter="twitter";
$bg_linkedin="linkedin";
$bg_google="google";
$bg_youtube="youtube";
$bg_pinterest="pinterest";
$bg_instagram="instagram";

//Job Vacancies
//Enterprice Job Vacancies final(real) stop edit
$bg_jobs_final_stop="jobs_final_stop";

//Enterprice Job Vacancies final(real)
$bg_jobs_final="jobs_final";

//Enterprice Job Vacancies final(real)
$bg_jobs_lost="jobs_lost";

//Enterprice Job Vacancies web site version 1
$bg_jobs="jobs";

//Enterprice Job Vacancies web site version 2
$bg_jobsv2="jobsv2";

//Enterprice Job Vacancies web site version 3
$bg_jobsv3="jobsv3";

//Enterprice Job Vacancies web site version 1 meta information - title, description and keywords
$bg_jtitle="jtitle";
$bg_jdescription="jdescription";
$bg_jkeywords="jkeywords";

//Enterprice Job Vacancies web site version 2 meta information - title, description and keywords
$bg_jtitlev2="jtitlev2";
$bg_jdescriptionv2="jdescriptionv2";
$bg_jkeywordsv2="jkeywordsv2";

//Enterprice Job Vacancies web site version 3 meta information - title, description and keywords
$bg_jtitlev3="jtitlev3";
$bg_jdescriptionv3="jdescriptionv3";
$bg_jkeywordsv3="jkeywordsv3";

//SBR
$bg_nuts="NUTS";
$bg_district="OBL_CA";
$bg_nace1="KID1_08";
$bg_nace2="KID2_08";
$bg_nace3="KID3_08";
$bg_nace4="KID4_08";
$bg_employee="V16110_ZL";
$bg_oborot="V12110_oborot";


///////////////////////////////////////////////////////////////////////////////////////////////////
//Social Media Data Table Polish software
//Database table name
$pl_social_media="social_media";

//ID of enterprice
$pl_EIK="ID";

//URL of enterprice
$pl_url="URL";

//Social media fields names
$pl_facebook="Facebook";
$pl_twitter="Twitter";
$pl_linkedin="LinkedIn";
$pl_google="GooglePlus";
$pl_youtube="Youtube";
$pl_instagram="Instagram";
$pl_notfound="notFound";



//End of Database Table configuration//////////////////////////////////////////////////////////////



///////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////
//Erase all information checked from initial url
//Value: true or false
$bg_erase_from_url=false;

///////////////////////////////////////////////////////////////////////////////////////////////////
//Erase all information checked from e-mail
//Value: true or false
$bg_erase_from_email=false;

///////////////////////////////////////////////////////////////////////////////////////////////////
//Erase all information searched from Jabse
//Value: true or false
$bg_erase_jabse=false;

///////////////////////////////////////////////////////////////////////////////////////////////////
//Erase all information searched from Jabse
//Value: true or false
$bg_erase_google=false;

///////////////////////////////////////////////////////////////////////////////////////////////////
//Resets Bing scan datetime
//Value: true or false
$bg_erase_bing=false;

///////////////////////////////////////////////////////////////////////////////////////////////////
//Resets Social Media Presence scan datetime
//Value: true or false
$bg_erase_socialmediapresence=false;

///////////////////////////////////////////////////////////////////////////////////////////////////
//Erase all web scraped information about e-stores urls and meta information and social media links
//Value: true or false
$bg_erase=false;

///////////////////////////////////////////////////////////////////////////////////////////////////
//Erase all web scraped information about job vacancies
//Value: true or false
$bg_erase_jobs=false;


///////////////////////////////////////////////////////////////////////////////////////////////////
//Not good e-mails (domains)
$bg_notgood_email[]="abv.bg";
$bg_notgood_email[]="mbox.contact.bg";
$bg_notgood_email[]="b-trust.org";
$bg_notgood_email[]="dir.bg";
$bg_notgood_email[]="mail.bg";
$bg_notgood_email[]="mbox.is.bg";
$bg_notgood_email[]="parvomai.escom.bg";
$bg_notgood_email[]="ogosta.com";
$bg_notgood_email[]="gbg.bg";
$bg_notgood_email[]="gmail.com";
$bg_notgood_email[]="yahoo.com";
$bg_notgood_email[]="mbox.is-bg.net";


///////////////////////////////////////////////////////////////////////////////////////////////////
//Key words used for finding e-store on enterprice web site

//Enterprice e-store web site version 1, 2 and 3
$estore1[]="е-магазин"; //e-store
$estore1[]="e-store";
$estore1[]="е-shop";
$estore1[]="online store";
$estore1[]="online shop";
$estore1[]="buy online";
$estore1[]="shop online";
$estore1[]="електронен магазин"; //electronic store
$estore1[]="онлайн магазин"; //online store
$estore1[]="купи онлайн"; //buy online
$estore1[]="пазарувай онлайн"; //shop online
//New
$estore1[]="магазин"; //store

//Enterprice e-store web site version 1 and 2
$estore2[]="кошница"; //shopping bag
$estore2[]="количка"; //cart
$estore2[]="продукти"; //products
$estore2[]="доставка"; //delivery 
$estore2[]="плащане"; //payment
$estore2[]="поръчка"; //order
$estore2[]="добави"; //add
$estore2[]="shopping bag";
$estore2[]="cart";
$estore2[]="products";
$estore2[]="delivery";
$estore2[]="payment";
$estore2[]="order";
$estore2[]="add";
$estore2[]="поръчване"; //ordering
$estore2[]="оферти"; //offers
//New
$estore2[]="0 items";
$estore2[]="доставки"; //deliveries
$estore2[]="deliveries";


//Enterprice e-store web site version 3
$estore3[]="кошница"; //shopping bag
$estore3[]="количка"; //cart
$estore3[]="shopping bag";
$estore3[]="cart";

//Enterprice e-store web site version 3
$estore4[]="продукти"; //products
$estore4[]="доставка"; //delivery
$estore4[]="плащане"; //payment
$estore4[]="поръчка"; //order
$estore4[]="добави"; //add
$estore4[]="products";
$estore4[]="delivery";
$estore4[]="payment";
$estore4[]="order";
$estore4[]="add";
$estore4[]="поръчване"; //ordering
$estore4[]="оферти"; //offers
//New
$estore4[]="доставки"; //deliveries
$estore4[]="deliveries";

//List of e-store content manegement systems, to filter the results, not to point to thair home pages
$estorel[]="Shopify";
$estorel[]="Bigcommerce";
$estorel[]="Volusion";
$estorel[]="Woocommerce";
$estorel[]="LemonStand";
$estorel[]="Squarespace";
$estorel[]="PinnacleCart";
$estorel[]="BigCartel";
$estorel[]="Ecwid";
$estorel[]="3DCart";
$estorel[]="Magento";
$estorel[]="Merchium";
$estorel[]="SellBeing";
$estorel[]="SpreeCommerce";
$estorel[]="X-Cart";
$estorel[]="Supadupa";
$estorel[]="Sylius";
$estorel[]="TomatoCart";
$estorel[]="VirtueMart";
$estorel[]="Yola";
$estorel[]="IBMWebSphere";
$estorel[]="2Checkout";
$estorel[]="Wazala";
$estorel[]="AbleCommerce";
$estorel[]="Actinic";
$estorel[]="Airsquare";
$estorel[]="AShop";
$estorel[]="Avactis";
$estorel[]="Avangate";
$estorel[]="BroadLeaf";
$estorel[]="Commercev3";
$estorel[]="CS-Cart";
$estorel[]="Demandware";
$estorel[]="DigitalRiver";
$estorel[]="eCrater";
$estorel[]="Celery";
$estorel[]="FastSpring";
$estorel[]="FoxyCart";
$estorel[]="Intershop";
$estorel[]="Ixxo cart";
$estorel[]="Jadasite";
$estorel[]="Jimdo";
$estorel[]="Jooy";
$estorel[]="Kalio";
$estorel[]="KonaKart";
$estorel[]="LightCMS";
$estorel[]="Marketlive";
$estorel[]="MivaMerchant";
$estorel[]="Moonfruit";
$estorel[]="SparkPay";
$estorel[]="Mozu";
$estorel[]="nopCommerce";
$estorel[]="OpenCart";
$estorel[]="osCMax";
$estorel[]="OSCommerce";
$estorel[]="PrestaShop";
$estorel[]="ProductCart";
$estorel[]="SanaCommerce";
$estorel[]="SearchFit";
$estorel[]="ShopGo";
$estorel[]="ShoppingCartElite";
$estorel[]="Shopio";
$estorel[]="Shopizer";
$estorel[]="Softslate";
$estorel[]="Storenvy";
$estorel[]="SureDone";
$estorel[]="TeaCommerce";
$estorel[]="Kong";
$estorel[]="uCoz";
$estorel[]="UltraCart";
$estorel[]="AllProWebTools";
$estorel[]="Pimcore";
$estorel[]="ZenCart";
$estorel[]="ZNOdeStorefront";
$estorel[]="Cart66";
$estorel[]="DrupalCommerce";
$estorel[]="GoECart";
$estorel[]="IndieMade";
$estorel[]="Neto";
$estorel[]="MadeFreshly";
$estorel[]="Moltin";
$estorel[]="Selz";
$estorel[]="YahooStore";
$estorel[]="Tictail";
$estorel[]="Jigoshop";
$estorel[]="CleverBridge";
$estorel[]="CoreCommerce";
$estorel[]="Etsy";
$estorel[]="IceShop";
$estorel[]="AspDotNetStorefront";
$estorel[]="SuiteCommerce";
$estorel[]="Yovigo";
$estorel[]="E-bee";
$estorel[]="FlyingCart";
$estorel[]="Goodsie";
$estorel[]="BlueSnap";
$estorel[]="HotCakesCommerce";
$estorel[]="Hybris";
$estorel[]="Jumpseller";
$estorel[]="CubeCart";
$estorel[]="TurnkeyWebTools";
$estorel[]="SquirrelCart";
$estorel[]="LiveCart";
$estorel[]="ShopFactory";
$estorel[]="simpleCart";
$estorel[]="Vendio";
$estorel[]="DPD";
$estorel[]="InstanteStore";
$estorel[]="ShopSite";
$estorel[]="ViArt";
$estorel[]="ShopVisible";
$estorel[]="Fortune3";
$estorel[]="ShopTab";
$estorel[]="InfusionSoft";
$estorel[]="mShopper";
$estorel[]="OXIDeSales";
$estorel[]="Ktools";
$estorel[]="Kooomo";
$estorel[]="PowerStores";
$estorel[]="GoLiveCart";
$estorel[]="ClarityEcommerce";
$estorel[]="1AutomationWizEcommerce";
$estorel[]="MyCloudGrocer";
$estorel[]="HighWire";
$estorel[]="Wix";
$estorel[]="Smoolis";
$estorel[]="EasyDigitalDownloads";
$estorel[]="ModularMerchant";
$estorel[]="Gumroad";
$estorel[]="Weebly";
$estorel[]="ExlCart";
$estorel[]="GoDaddy";
$estorel[]="MrSite";
$estorel[]="Persollo";
$estorel[]="RocketSpark";
$estorel[]="Schema";
$estorel[]="PayProGlobal";
$estorel[]="FlickRocket";
$estorel[]="EcommerceTemplates";
$estorel[]="ShopRocket";
$estorel[]="SnipCart";
$estorel[]="Kentico";
$estorel[]="VevoCart";
$estorel[]="k-eCommerce";
$estorel[]="EasyStore";
$estorel[]="BVCommerce";
$estorel[]="Create";
$estorel[]="Eonic";
$estorel[]="Shopcloud";
$estorel[]="Eshopsgalore";
$estorel[]="Expandly";
$estorel[]="Fashmark";
$estorel[]="Shoutcms";
$estorel[]="VeraCart";
$estorel[]="UnieMerchant";
$estorel[]="Nexternal";
$estorel[]="Vilkas Group";
$estorel[]="eStoreAdvanced";
$estorel[]="Aplus";
$estorel[]="SideCommerce";
$estorel[]="Spryker";
$estorel[]="StivaShoppingCart";
$estorel[]="Thelia";
$estorel[]="EasyCart";
$estorel[]="UpshotCommerce";
$estorel[]="VirtoCommerce";
$estorel[]="LoadedCommerce";
$estorel[]="AbanteCart";
$estorel[]="ItemHut";
$estorel[]="GoCart";
$estorel[]="SolidCommerce";
$estorel[]="GrandNode";
$estorel[]="UberCart";
$estorel[]="LiteCommerce";
$estorel[]="Shoop";
$estorel[]="Arastta";
$estorel[]="YesCart";
$estorel[]="VP-Cart";
$estorel[]="SolidShops";
$estorel[]="eCRATER";
$estorel[]="Yokaboo";
$estorel[]="ZeusCArt";
$estorel[]="Cart42";


///////////////////////////////////////////////////////////////////////////////////////////////////
//Key words used for finding job vacancies on enterprice web site

//Enterprice job vacancies web site version 1, 2 and 3
$jobs1[]="Работни места";
$jobs1[]="Кариера";
$jobs1[]="Кариери";
$jobs1[]="Работа в";
$jobs1[]="Работа при нас";
$jobs1[]="Обяви";
$jobs1[]="Свободни работни позиции";
$jobs1[]="Свободни позиции";
$jobs1[]="Свободни работни места";
$jobs1[]="Обяви за работа";
$jobs1[]="Конкурси";
$jobs1[]="Отворени позиции";
$jobs1[]="За кандидати";
$jobs1[]="Търсите работа";
$jobs1[]="Работни позиции";
$jobs1[]="Предложения за работа";
$jobs1[]="Човешки ресурси";
$jobs1[]="Работа и кариера";
$jobs1[]="Стани част от нашия екип";
$jobs1[]="Кандидатствай сега";
$jobs1[]="Кадри";
$jobs1[]="ВЪЗМОЖНОСТИ ЗА РАБОТА";
$jobs1[]="Work";
$jobs1[]="Vacancies";
$jobs1[]="Career";
$jobs1[]="Jobs";

//Enterprice job vacancies web site version 1 and 2
$jobs2[]="Кариера";
$jobs2[]="Кариери";
$jobs2[]="Работа";
$jobs2[]="Обяви";
$jobs2[]="Конкурс";
$jobs2[]="Конкурси";
$jobs1[]="Work";
$jobs1[]="Vacancies";
$jobs1[]="Career";
$jobs1[]="Job";

//Enterprice job vacancies web site version 3
$jobs3[]="Кариера";
$jobs3[]="Кариери";
$jobs3[]="Работа";
$jobs1[]="Work";
$jobs1[]="Career";
$jobs1[]="Job";

//Enterprice job vacancies web site version 3
$jobs4[]="опит";
$jobs4[]="стаж";
$jobs4[]="търсим";
$jobs4[]="завършил";
$jobs4[]="кандидата";
$jobs4[]="позиция";
$jobs4[]="позицията";
$jobs4[]="умения";
$jobs4[]="looking";
$jobs4[]="candidat";
$jobs4[]="experience";
$jobs4[]="position";
$jobs4[]="свободни";
$jobs4[]="Vacancies";

//List of job vacancies content manegement systems, to filter the results, not to point to thair home pages
$jobsl[]="";


///////////////////////////////////////////////////////////////////////////////////////////////////
//Page navigation

//$bg_navigation[1]="Show";
$bg_navigation[1]="Покжи";

//$bg_navigation[2]=" after record number ";
$bg_navigation[2]=" след запис ";

//$bg_navigation[3]=" next ";
$bg_navigation[3]=" следващите ";

//$bg_navigation[4]=" records. ";
$bg_navigation[4]=" записа. ";

//$bg_navigation[5]="Previous";
$bg_navigation[5]="Предишна";

//$bg_navigation[6]="Next";
$bg_navigation[6]="Следваща";

//$bg_navigation[7]="#";
$bg_navigation[7]="№";

//$bg_navigation[8]="SBR Info";
$bg_navigation[8]="СБР Инфо";

//$bg_navigation[9]="Enterprice web site";
$bg_navigation[9]="Сайт на предприятието";

//$bg_navigation[10]="e-store v1";
$bg_navigation[10]="е-магазин v1";

//$bg_navigation[11]="e-store v2";
$bg_navigation[11]="е-магазин v2";

//$bg_navigation[12]="e-store v3";
$bg_navigation[12]="е-магазин v3";

//$bg_navigation[13]="social media";
$bg_navigation[13]="социални медии";

//$bg_navigation[14]="Final e-store";
$bg_navigation[14]="Финален е-магазин";

//$bg_navigation[15]="Missing e-store";
$bg_navigation[15]="Пропуснат е-магазин";

//$bg_navigation[16]="Recheck";
$bg_navigation[16]="Повторна проверка";

//$bg_navigation[17]="This is";
$bg_navigation[17]="Това е";

//$bg_navigation[18]="Old web site";
$bg_navigation[18]="Стар сайт";

//$bg_navigation[19]="Jabse search";
$bg_navigation[19]="Jabse търсене";

//$bg_navigation[20]="Google search";
$bg_navigation[20]="Google търсене";

//$bg_navigation[21]="Bing search";
$bg_navigation[21]="Bing търсене";

//$bg_navigation[22]="job vacancies v1";
$bg_navigation[22]="свободни работни места v1";

//$bg_navigation[23]="job vacancies v2";
$bg_navigation[23]="свободни работни места v2";

//$bg_navigation[24]="job vacancies v3";
$bg_navigation[24]="свободни работни места v3";

//$bg_navigation[25]="Final job vacancies";
$bg_navigation[25]="Финални свободни работни места";

//$bg_navigation[26]="Missing job vacancies";
$bg_navigation[26]="Пропуснат свободни работни места";


///////////////////////////////////////////////////////////////////////////////////////////////////
//Info

//Default Language
$bg_lang="bg";

//Bulgarian districts from $bg_district
$bg_dis["bg"]["01"]="Благоевград";
$bg_dis["bg"]["02"]="Бургас";
$bg_dis["bg"]["03"]="Варна";
$bg_dis["bg"]["04"]="Велико Търново";
$bg_dis["bg"]["05"]="Видин";
$bg_dis["bg"]["06"]="Враца";
$bg_dis["bg"]["07"]="Габрово";
$bg_dis["bg"]["08"]="Кърджали";
$bg_dis["bg"]["09"]="Кюстендил";
$bg_dis["bg"]["10"]="Ловеч";
$bg_dis["bg"]["11"]="Монтана";
$bg_dis["bg"]["12"]="Пазарджик";
$bg_dis["bg"]["13"]="Перник";
$bg_dis["bg"]["14"]="Плевен";
$bg_dis["bg"]["15"]="Пловдив";
$bg_dis["bg"]["16"]="Разград";
$bg_dis["bg"]["17"]="Русе";
$bg_dis["bg"]["18"]="Силистра";
$bg_dis["bg"]["19"]="Сливен";
$bg_dis["bg"]["20"]="Смолян";
$bg_dis["bg"]["21"]="София (столица)";
$bg_dis["bg"]["22"]="София";
$bg_dis["bg"]["23"]="Стара Загора";
$bg_dis["bg"]["24"]="Добрич";
$bg_dis["bg"]["25"]="Търговище";
$bg_dis["bg"]["26"]="Хасково";
$bg_dis["bg"]["27"]="Шумен";
$bg_dis["bg"]["28"]="Ямбол";

//Bulgarian districts from $bg_district in English
$bg_dis["en"]["01"]="Blagoevgrad";
$bg_dis["en"]["02"]="Burgas";
$bg_dis["en"]["03"]="Varna";
$bg_dis["en"]["04"]="Veliko Tarnovo";
$bg_dis["en"]["05"]="Vidin";
$bg_dis["en"]["06"]="Vratsa";
$bg_dis["en"]["07"]="Gabrovo";
$bg_dis["en"]["08"]="Kardzhali";
$bg_dis["en"]["09"]="Kyustendil";
$bg_dis["en"]["10"]="Lovech";
$bg_dis["en"]["11"]="Montana";
$bg_dis["en"]["12"]="Pazardzhik";
$bg_dis["en"]["13"]="Pernik";
$bg_dis["en"]["14"]="Pleven";
$bg_dis["en"]["15"]="Plovdiv";
$bg_dis["en"]["16"]="Razgrad";
$bg_dis["en"]["17"]="Rousse";
$bg_dis["en"]["18"]="Silistra";
$bg_dis["en"]["19"]="Sliven";
$bg_dis["en"]["20"]="Smolyan";
$bg_dis["en"]["21"]="Sofia (capital)";
$bg_dis["en"]["22"]="Sofia";
$bg_dis["en"]["23"]="Stara Zagora";
$bg_dis["en"]["24"]="Dobrich";
$bg_dis["en"]["25"]="Targovishte";
$bg_dis["en"]["26"]="Haskovo";
$bg_dis["en"]["27"]="Shumen";
$bg_dis["en"]["28"]="Yambol";

//Google GeoChart Districts Names
$bg_disl["01"]="Blagoevgrad";
$bg_disl["02"]="Burgas";
$bg_disl["03"]="Varna";
$bg_disl["04"]="Veliko Tarnovo";
$bg_disl["05"]="Vidin";
$bg_disl["06"]="Vratsa";
$bg_disl["07"]="Gabrovo";
$bg_disl["08"]="Kardzhali";
$bg_disl["09"]="Kyustendil";
$bg_disl["10"]="Lovech";
$bg_disl["11"]="Montana";
$bg_disl["12"]="Pazardzhik";
$bg_disl["13"]="Pernik";
$bg_disl["14"]="Pleven";
$bg_disl["15"]="Plovdiv";
$bg_disl["16"]="Razgrad";
$bg_disl["17"]="Ruse";
$bg_disl["18"]="Silistra";
$bg_disl["19"]="Sliven";
$bg_disl["20"]="Smolyan";
$bg_disl["21"]="Sofia-grad";
$bg_disl["22"]="Sofia";
$bg_disl["23"]="Stara Zagora";
$bg_disl["24"]="Dobrich";
$bg_disl["25"]="Targovishte";
$bg_disl["26"]="Haskovo";
$bg_disl["27"]="Shumen";
$bg_disl["28"]="Yambol";

$bg_info["bg"][1]="Област";
$bg_info["en"][1]="District";
$bg_info["bg"][2]="Общо";
$bg_info["en"][2]="Total";
$bg_info["bg"][3]="Интернет сайт";
$bg_info["en"][3]="Web Site";
$bg_info["bg"][4]="Електронен магазин";
$bg_info["en"][4]="E-store";
$bg_info["bg"][5]="Социални медии";
$bg_info["en"][5]="Social Media";
$bg_info["bg"][6]="Предприятия (брой)";
$bg_info["en"][6]="Enterprises (number)";
$bg_info["bg"][7]="Заети лица (брой)";
$bg_info["en"][7]="Employed (number)";
$bg_info["bg"][8]="Предприятия (%)";
$bg_info["en"][8]="Enterprises (%)";
$bg_info["bg"][9]="Заети лица (%)";
$bg_info["en"][9]="Employed (%)";
$bg_info["bg"][10]="Общо - Предприятия (брой)";
$bg_info["en"][10]="Total - Enterprises (number)";
$bg_info["bg"][11]="Общо - Заети лица (брой)";
$bg_info["en"][11]="Total - Employed (number)";
$bg_info["bg"][12]="Интернет сайт - Предприятия (брой)";
$bg_info["en"][12]="Web Site - Enterprises (number)";
$bg_info["bg"][13]="Интернет сайт - Заети лица (брой)";
$bg_info["en"][13]="Web Site - Employed (number)";
$bg_info["bg"][14]="Интернет сайт - Предприятия (%)";
$bg_info["en"][14]="Web Site - Enterprises (%)";
$bg_info["bg"][15]="Интернет сайт - Заети лица (%)";
$bg_info["en"][15]="Web Site - Employed (%)";
$bg_info["bg"][16]="Електронен магазин - Предприятия (брой)";
$bg_info["en"][16]="E-store - Enterprises (number)";
$bg_info["bg"][17]="Електронен магазин - Заети лица (брой)";
$bg_info["en"][17]="E-store - Employed (number)";
$bg_info["bg"][18]="Електронен магазин - Предприятия (%)";
$bg_info["en"][18]="E-store - Enterprises (%)";
$bg_info["bg"][19]="Електронен магазин - Заети лица (%)";
$bg_info["en"][19]="E-store - Employed (%)";
$bg_info["bg"][20]="Социални медии - Предприятия (брой)";
$bg_info["en"][20]="Social Media - Enterprises (number)";
$bg_info["bg"][21]="Социални медии - Заети лица (брой)";
$bg_info["en"][21]="Social Media - Employed (number)";
$bg_info["bg"][22]="Социални медии - Предприятия (%)";
$bg_info["en"][22]="Social Media - Enterprises (%)";
$bg_info["bg"][23]="Социални медии - Заети лица (%)";
$bg_info["en"][23]="Social Media - Employed (%)";

$bg_info["bg"][24]="Икономическа дейност";
$bg_info["en"][24]="Economic activity";
$bg_info["bg"][25]="Предприятия по икономическа дейност (брой)";
$bg_info["en"][25]="Enterprises by economic activity (number)";
$bg_info["bg"][26]="Заети лица по икономическа дейност (брой)";
$bg_info["en"][26]="Employed by economic activity (number)";
$bg_info["bg"][27]="Предприятия по икономическа дейност (%)";
$bg_info["en"][27]="Enterprises by economic activity (%)";
$bg_info["bg"][28]="Заети лица по икономическа дейност (%)";
$bg_info["en"][28]="Employed by economic activity (%)";
$bg_info["bg"][29]="брой";
$bg_info["en"][29]="number";
$bg_info["bg"][30]="%";
$bg_info["en"][30]="%";
$bg_info["bg"][31]="Име";
$bg_info["en"][31]="Name";
$bg_info["bg"][32]="Код";
$bg_info["en"][32]="Code";

$bg_info["bg"][33]="Брой предприятия с 10+ заети лица участващи в ИКТ изследването: ";
$bg_info["en"][33]="Number of enterprises with 10+ employees taking part in ICT survey: ";
$bg_info["bg"][34]="Оборот общо: ";
$bg_info["en"][34]="Total turnover: ";
$bg_info["bg"][35]="Заети лица общо: ";
$bg_info["en"][35]="Total number of employees: ";
$bg_info["bg"][36]="Брой електронни пощи на предприятията: ";
$bg_info["en"][36]="Number of e-mails of the enterprises: ";
$bg_info["bg"][37]="Начален брой на интернет адреси за предприятията: ";
$bg_info["en"][37]="Initial number of urls of enterprises: ";
$bg_info["bg"][38]="Намерени и проверени за съществуване интернет адреси от началните: ";
$bg_info["en"][38]="Verified urls from the initial ones: ";
$bg_info["bg"][39]="Намерени и проверени за съществуване интернет адреси от електронни пощи: ";
$bg_info["en"][39]="Verified urls from the e-mails: ";
$bg_info["bg"][40]="Брой търсения през www.jabse.com: ";
$bg_info["en"][40]="Number of searches in www.jabse.com: ";
$bg_info["bg"][41]="Брой търсения през www.jabse.com Latin: ";
$bg_info["en"][41]="Number of searches in www.jabse.com Latin: ";
$bg_info["bg"][42]="Брой търсения през www.google.com: ";
$bg_info["en"][42]="Number of searches in www.google.com: ";
$bg_info["bg"][43]="Брой търсения през www.bing.com с Италианския софтуер: ";
$bg_info["en"][43]="Number of searches in www.bing.com with Italian software: ";
$bg_info["bg"][44]="Интернет адреси на предприятия намерени с предишния проект: ";
$bg_info["en"][44]="Urls of enterprises found with previous project: ";
$bg_info["bg"][45]="Интернет адреси на предприятия намерени с проекта: ";
$bg_info["en"][45]="Urls of enterprises found with the project: ";
$bg_info["bg"][46]="Работен: ";
$bg_info["en"][46]="Working: ";
$bg_info["bg"][47]="Електронни магазини на предприятия намерени с проекта: ";
$bg_info["en"][47]="E-stores of enterprises found with the project: ";
$bg_info["bg"][48]="Пропуснати електронни магазини на предприятия в 10% извадка: ";
$bg_info["en"][48]="Missed e-stores of enterprises in 10% sample: ";
$bg_info["bg"][49]="Предсказани електронни магазини на предприятията със скрипт весия";
$bg_info["en"][49]="Predicted e-stores of enterprises with script";
$bg_info["bg"][50]="Брой предприятия с предсказани видове социални мрежи с използван софтуер";
$bg_info["en"][50]="Number of enterprises with predicted social media by kind and software used";
$bg_info["bg"][51]="Вероятен брой на електронни магазини на предприятията: ";
$bg_info["en"][51]="Probable number of e-stores of enterprises: ";
$bg_info["bg"][52]="Софтуер";
$bg_info["en"][52]="Software";
$bg_info["bg"][53]="Български";
$bg_info["en"][53]="Bulgarian";
$bg_info["bg"][54]="Полски";
$bg_info["en"][54]="Polish";
$bg_info["bg"][55]="Предсказани предлагания на свободни работни места на интернет сайтовете на предприятията със скрипт весия";
$bg_info["en"][55]="Predicted offerings of job vacancies on the enterprises web sites with script";
$bg_info["bg"][56]="Предлагания на свободни работни места на интернет сайтовете на предприятията намерени с проекта: ";
$bg_info["en"][56]="Job vacancies offerings on the enterprises web sites found with the project: ";
$bg_info["bg"][57]="Пропуснати предлагания на свободни работни места на интернет сайтовете на предприятията в 10% извадка: ";
$bg_info["en"][57]="Missed offerings of job vacancies on the web sites of enterprises in 10% sample: ";
$bg_info["bg"][58]="Вероятен брой на предлагания на свободни работни места на интернет сайтовете на предприятията: ";
$bg_info["en"][58]="Probable number of job vacancies offerings on the web sites of enterprises: ";

$bg_info["bg"][59]="Предлагане на работа";
$bg_info["en"][59]="Jobs Advertising";

$bg_info["bg"][60]="Предлагане на работа - Предприятия (брой)";
$bg_info["en"][60]="Jobs Advertising - Enterprises (number)";
$bg_info["bg"][61]="Предлагане на работа - Заети лица (брой)";
$bg_info["en"][61]="Jobs Advertising - Employed (number)";
$bg_info["bg"][62]="Предлагане на работа - Предприятия (%)";
$bg_info["en"][62]="Jobs Advertising - Enterprises (%)";
$bg_info["bg"][63]="Предлагане на работа - Заети лица (%)";
$bg_info["en"][63]="Jobs Advertising - Employed (%)";

$bg_info["bg"][64]="Rate of retrieved URLs from an enterprise list";
$bg_info["en"][64]="Rate of retrieved URLs from an enterprise list";
$bg_info["bg"][65]="Rate of enterprises engaged in websales on their website";
$bg_info["en"][65]="Rate of enterprises engaged in websales on their website";
$bg_info["bg"][66]="Rate of enterprises with job advertisments on their websites";
$bg_info["en"][66]="Rate of enterprises with job advertisments on their websites";
$bg_info["bg"][67]="Rate of enterprises that are present on social media";
$bg_info["en"][67]="Rate of enterprises that are present on social media";
$bg_info["bg"][68]="Percentage of enterprises using Twitter for a specific purpose, estimated from web data:";
$bg_info["en"][68]="Percentage of enterprises using Twitter for a specific purpose, estimated from web data:";
$bg_info["bg"][69]="Estimate from web data";
$bg_info["en"][69]="Estimate from web data";
$bg_info["bg"][70]="Survey Estimate";
$bg_info["en"][70]="Survey Estimate";
$bg_info["bg"][71]="Recruitment";
$bg_info["en"][71]="Recruitment";
$bg_info["bg"][72]="Enterprise image";
$bg_info["en"][72]="Enterprise image";
$bg_info["bg"][73]="Commercials";
$bg_info["en"][73]="Commercials";
$bg_info["bg"][74]="Marketing";
$bg_info["en"][74]="Marketing";
$bg_info["bg"][75]="Others";
$bg_info["en"][75]="Others";
$bg_info["bg"][76]="Rates";
$bg_info["en"][76]="Rates";
$bg_info["bg"][77]="Known";
$bg_info["en"][77]="Known";
$bg_info["bg"][78]="Estemated";
$bg_info["en"][78]="Estemated";
$bg_info["bg"][79]="Twitter usage by enterprises, estimated from web data:";
$bg_info["en"][79]="Twitter usage by enterprises, estimated from web data:";

$sm["recruitment"]=118;
$sm["enterprise image"]=77570;
$sm["commercials"]=510644;
$sm["marketing"]=23137;
$sm["others"]=388804;
$sm["total"]=$sm["recruitment"]+$sm["enterprise image"]+$sm["commercials"]+$sm["others"]+$sm["marketing"];

///////////////////////////////////////////////////////////////////////////////////////////////////
//NACE

$bg_nace["en"]["A"]="Agriculture, forestry and fishing";
$bg_nace["en"]["01"]="Crop and animal production, hunting and related service activities";
$bg_nace["en"]["01.1"]="Growing of non-perennial crops";
$bg_nace["en"]["01.11"]="Growing of cereals (except rice), leguminous crops and oil seeds";
$bg_nace["en"]["01.12"]="Growing of rice";
$bg_nace["en"]["01.13"]="Growing of vegetables and melons, roots and tubers";
$bg_nace["en"]["01.14"]="Growing of sugar cane";
$bg_nace["en"]["01.15"]="Growing of tobacco";
$bg_nace["en"]["01.16"]="Growing of fibre crops";
$bg_nace["en"]["01.19"]="Growing of other non-perennial crops";
$bg_nace["en"]["01.2"]="Growing of perennial crops";
$bg_nace["en"]["01.21"]="Growing of grapes";
$bg_nace["en"]["01.22"]="Growing of tropical and subtropical fruits";
$bg_nace["en"]["01.23"]="Growing of citrus fruits";
$bg_nace["en"]["01.24"]="Growing of pome fruits and stone fruits";
$bg_nace["en"]["01.25"]="Growing of other tree and bush fruits and nuts";
$bg_nace["en"]["01.26"]="Growing of oleaginous fruits";
$bg_nace["en"]["01.27"]="Growing of beverage crops";
$bg_nace["en"]["01.28"]="Growing of spices, aromatic, drug and pharmaceutical crops";
$bg_nace["en"]["01.29"]="Growing of other perennial crops";
$bg_nace["en"]["01.3"]="Plant propagation";
$bg_nace["en"]["01.30"]="Plant propagation";
$bg_nace["en"]["01.4"]="Animal production";
$bg_nace["en"]["01.41"]="Raising of dairy cattle";
$bg_nace["en"]["01.42"]="Raising of other cattle and buffaloes";
$bg_nace["en"]["01.43"]="Raising of horses and other equines";
$bg_nace["en"]["01.44"]="Raising of camels and camelids";
$bg_nace["en"]["01.45"]="Raising of sheep and goats";
$bg_nace["en"]["01.46"]="Raising of swine/pigs";
$bg_nace["en"]["01.47"]="Raising of poultry";
$bg_nace["en"]["01.49"]="Raising of other animals";
$bg_nace["en"]["01.5"]="Mixed farming";
$bg_nace["en"]["01.50"]="Mixed farming";
$bg_nace["en"]["01.6"]="Support activities to agriculture and post-harvest crop activities";
$bg_nace["en"]["01.61"]="Support activities for crop production";
$bg_nace["en"]["01.62"]="Support activities for animal production";
$bg_nace["en"]["01.63"]="Post-harvest crop activities";
$bg_nace["en"]["01.64"]="Seed processing for propagation";
$bg_nace["en"]["01.7"]="Hunting, trapping and related service activities";
$bg_nace["en"]["01.70"]="Hunting, trapping and related service activities";
$bg_nace["en"]["02"]="Forestry and logging";
$bg_nace["en"]["02.1"]="Silviculture and other forestry activities";
$bg_nace["en"]["02.10"]="Silviculture and other forestry activities";
$bg_nace["en"]["02.2"]="Logging";
$bg_nace["en"]["02.20"]="Logging";
$bg_nace["en"]["02.3"]="Gathering of wild growing non-wood products";
$bg_nace["en"]["02.30"]="Gathering of wild growing non-wood products";
$bg_nace["en"]["02.4"]="Support services to forestry";
$bg_nace["en"]["02.40"]="Support services to forestry";
$bg_nace["en"]["03"]="Fishing and aquaculture";
$bg_nace["en"]["03.1"]="Fishing";
$bg_nace["en"]["03.11"]="Marine fishing";
$bg_nace["en"]["03.12"]="Freshwater fishing";
$bg_nace["en"]["03.2"]="Aquaculture";
$bg_nace["en"]["03.21"]="Marine aquaculture";
$bg_nace["en"]["03.22"]="Freshwater aquaculture";
$bg_nace["en"]["B"]="Mining and quarrying";
$bg_nace["en"]["05"]="Mining of coal and lignite";
$bg_nace["en"]["05.1"]="Mining of hard coal";
$bg_nace["en"]["05.10"]="Mining of hard coal";
$bg_nace["en"]["05.2"]="Mining of lignite";
$bg_nace["en"]["05.20"]="Mining of lignite";
$bg_nace["en"]["06"]="Extraction of crude petroleum and natural gas";
$bg_nace["en"]["06.1"]="Extraction of crude petroleum";
$bg_nace["en"]["06.10"]="Extraction of crude petroleum";
$bg_nace["en"]["06.2"]="Extraction of natural gas";
$bg_nace["en"]["06.20"]="Extraction of natural gas";
$bg_nace["en"]["07"]="Mining of metal ores";
$bg_nace["en"]["07.1"]="Mining of iron ores";
$bg_nace["en"]["07.10"]="Mining of iron ores";
$bg_nace["en"]["07.2"]="Mining of non-ferrous metal ores";
$bg_nace["en"]["07.21"]="Mining of uranium and thorium ores";
$bg_nace["en"]["07.29"]="Mining of other non-ferrous metal ores";
$bg_nace["en"]["08"]="Other mining and quarrying";
$bg_nace["en"]["08.1"]="Quarrying of stone, sand and clay";
$bg_nace["en"]["08.11"]="Quarrying of ornamental and building stone, limestone, gypsum, chalk and slate";
$bg_nace["en"]["08.12"]="Operation of gravel and sand pits; mining of clays and kaolin";
$bg_nace["en"]["08.9"]="Mining and quarrying n.e.c.";
$bg_nace["en"]["08.91"]="Mining of chemical and fertiliser minerals";
$bg_nace["en"]["08.92"]="Extraction of peat";
$bg_nace["en"]["08.93"]="Extraction of salt";
$bg_nace["en"]["08.99"]="Other mining and quarrying n.e.c.";
$bg_nace["en"]["09"]="Mining support service activities";
$bg_nace["en"]["09.1"]="Support activities for petroleum and natural gas extraction";
$bg_nace["en"]["09.10"]="Support activities for petroleum and natural gas extraction";
$bg_nace["en"]["09.9"]="Support activities for other mining and quarrying";
$bg_nace["en"]["09.90"]="Support activities for other mining and quarrying";
$bg_nace["en"]["C"]="Manufacturing";
$bg_nace["en"]["10"]="Manufacture of food products";
$bg_nace["en"]["10.1"]="Processing and preserving of meat and production of meat products";
$bg_nace["en"]["10.11"]="Processing and preserving of meat";
$bg_nace["en"]["10.12"]="Processing and preserving of poultry meat";
$bg_nace["en"]["10.13"]="Production of meat and poultry meat products";
$bg_nace["en"]["10.2"]="Processing and preserving of fish, crustaceans and molluscs";
$bg_nace["en"]["10.20"]="Processing and preserving of fish, crustaceans and molluscs";
$bg_nace["en"]["10.3"]="Processing and preserving of fruit and vegetables";
$bg_nace["en"]["10.31"]="Processing and preserving of potatoes";
$bg_nace["en"]["10.32"]="Manufacture of fruit and vegetable juice";
$bg_nace["en"]["10.39"]="Other processing and preserving of fruit and vegetables";
$bg_nace["en"]["10.4"]="Manufacture of vegetable and animal oils and fats";
$bg_nace["en"]["10.41"]="Manufacture of oils and fats";
$bg_nace["en"]["10.42"]="Manufacture of margarine and similar edible fats";
$bg_nace["en"]["10.5"]="Manufacture of dairy products";
$bg_nace["en"]["10.51"]="Operation of dairies and cheese making";
$bg_nace["en"]["10.52"]="Manufacture of ice cream";
$bg_nace["en"]["10.6"]="Manufacture of grain mill products, starches and starch products";
$bg_nace["en"]["10.61"]="Manufacture of grain mill products";
$bg_nace["en"]["10.62"]="Manufacture of starches and starch products";
$bg_nace["en"]["10.7"]="Manufacture of bakery and farinaceous products";
$bg_nace["en"]["10.71"]="Manufacture of bread; manufacture of fresh pastry goods and cakes";
$bg_nace["en"]["10.72"]="Manufacture of rusks and biscuits; manufacture of preserved pastry goods and cakes";
$bg_nace["en"]["10.73"]="Manufacture of macaroni, noodles, couscous and similar farinaceous products";
$bg_nace["en"]["10.8"]="Manufacture of other food products";
$bg_nace["en"]["10.81"]="Manufacture of sugar";
$bg_nace["en"]["10.82"]="Manufacture of cocoa, chocolate and sugar confectionery";
$bg_nace["en"]["10.83"]="Processing of tea and coffee";
$bg_nace["en"]["10.84"]="Manufacture of condiments and seasonings";
$bg_nace["en"]["10.85"]="Manufacture of prepared meals and dishes";
$bg_nace["en"]["10.86"]="Manufacture of homogenised food preparations and dietetic food";
$bg_nace["en"]["10.89"]="Manufacture of other food products n.e.c.";
$bg_nace["en"]["10.9"]="Manufacture of prepared animal feeds";
$bg_nace["en"]["10.91"]="Manufacture of prepared feeds for farm animals";
$bg_nace["en"]["10.92"]="Manufacture of prepared pet foods";
$bg_nace["en"]["11"]="Manufacture of beverages";
$bg_nace["en"]["11.0"]="Manufacture of beverages";
$bg_nace["en"]["11.01"]="Distilling, rectifying and blending of spirits";
$bg_nace["en"]["11.02"]="Manufacture of wine from grape";
$bg_nace["en"]["11.03"]="Manufacture of cider and other fruit wines";
$bg_nace["en"]["11.04"]="Manufacture of other non-distilled fermented beverages";
$bg_nace["en"]["11.05"]="Manufacture of beer";
$bg_nace["en"]["11.06"]="Manufacture of malt";
$bg_nace["en"]["11.07"]="Manufacture of soft drinks; production of mineral waters and other bottled waters";
$bg_nace["en"]["12"]="Manufacture of tobacco products";
$bg_nace["en"]["12.0"]="Manufacture of tobacco products";
$bg_nace["en"]["12.00"]="Manufacture of tobacco products";
$bg_nace["en"]["13"]="Manufacture of textiles";
$bg_nace["en"]["13.1"]="Preparation and spinning of textile fibres";
$bg_nace["en"]["13.10"]="Preparation and spinning of textile fibres";
$bg_nace["en"]["13.2"]="Weaving of textiles";
$bg_nace["en"]["13.20"]="Weaving of textiles";
$bg_nace["en"]["13.3"]="Finishing of textiles";
$bg_nace["en"]["13.30"]="Finishing of textiles";
$bg_nace["en"]["13.9"]="Manufacture of other textiles";
$bg_nace["en"]["13.91"]="Manufacture of knitted and crocheted fabrics";
$bg_nace["en"]["13.92"]="Manufacture of made-up textile articles, except apparel";
$bg_nace["en"]["13.93"]="Manufacture of carpets and rugs";
$bg_nace["en"]["13.94"]="Manufacture of cordage, rope, twine and netting";
$bg_nace["en"]["13.95"]="Manufacture of non-wovens and articles made from non-wovens, except apparel";
$bg_nace["en"]["13.96"]="Manufacture of other technical and industrial textiles";
$bg_nace["en"]["13.99"]="Manufacture of other textiles n.e.c.";
$bg_nace["en"]["14"]="Manufacture of wearing apparel";
$bg_nace["en"]["14.1"]="Manufacture of wearing apparel, except fur apparel";
$bg_nace["en"]["14.11"]="Manufacture of leather clothes";
$bg_nace["en"]["14.12"]="Manufacture of workwear";
$bg_nace["en"]["14.13"]="Manufacture of other outerwear";
$bg_nace["en"]["14.14"]="Manufacture of underwear";
$bg_nace["en"]["14.19"]="Manufacture of other wearing apparel and accessories";
$bg_nace["en"]["14.2"]="Manufacture of articles of fur";
$bg_nace["en"]["14.20"]="Manufacture of articles of fur";
$bg_nace["en"]["14.3"]="Manufacture of knitted and crocheted apparel";
$bg_nace["en"]["14.31"]="Manufacture of knitted and crocheted hosiery";
$bg_nace["en"]["14.39"]="Manufacture of other knitted and crocheted apparel";
$bg_nace["en"]["15"]="Manufacture of leather and related products";
$bg_nace["en"]["15.1"]="Tanning and dressing of leather; manufacture of luggage, handbags, saddlery and harness; dressing and dyeing of fur";
$bg_nace["en"]["15.11"]="Tanning and dressing of leather; dressing and dyeing of fur";
$bg_nace["en"]["15.12"]="Manufacture of luggage, handbags and the like, saddlery and harness";
$bg_nace["en"]["15.2"]="Manufacture of footwear";
$bg_nace["en"]["15.20"]="Manufacture of footwear";
$bg_nace["en"]["16"]="Manufacture of wood and of products of wood and cork, except furniture; manufacture of articles of straw and plaiting materials";
$bg_nace["en"]["16.1"]="Sawmilling and planing of wood";
$bg_nace["en"]["16.10"]="Sawmilling and planing of wood";
$bg_nace["en"]["16.2"]="Manufacture of products of wood, cork, straw and plaiting materials";
$bg_nace["en"]["16.21"]="Manufacture of veneer sheets and wood-based panels";
$bg_nace["en"]["16.22"]="Manufacture of assembled parquet floors";
$bg_nace["en"]["16.23"]="Manufacture of other builders' carpentry and joinery";
$bg_nace["en"]["16.24"]="Manufacture of wooden containers";
$bg_nace["en"]["16.29"]="Manufacture of other products of wood; manufacture of articles of cork, straw and plaiting materials";
$bg_nace["en"]["17"]="Manufacture of paper and paper products";
$bg_nace["en"]["17.1"]="Manufacture of pulp, paper and paperboard";
$bg_nace["en"]["17.11"]="Manufacture of pulp";
$bg_nace["en"]["17.12"]="Manufacture of paper and paperboard";
$bg_nace["en"]["17.2"]="Manufacture of articles of paper and paperboard";
$bg_nace["en"]["17.21"]="Manufacture of corrugated paper and paperboard and of containers of paper and paperboard";
$bg_nace["en"]["17.22"]="Manufacture of household and sanitary goods and of toilet requisites";
$bg_nace["en"]["17.23"]="Manufacture of paper stationery";
$bg_nace["en"]["17.24"]="Manufacture of wallpaper";
$bg_nace["en"]["17.29"]="Manufacture of other articles of paper and paperboard";
$bg_nace["en"]["18"]="Printing and reproduction of recorded media";
$bg_nace["en"]["18.1"]="Printing and service activities related to printing";
$bg_nace["en"]["18.11"]="Printing of newspapers";
$bg_nace["en"]["18.12"]="Other printing";
$bg_nace["en"]["18.13"]="Pre-press and pre-media services";
$bg_nace["en"]["18.14"]="Binding and related services";
$bg_nace["en"]["18.2"]="Reproduction of recorded media";
$bg_nace["en"]["18.20"]="Reproduction of recorded media";
$bg_nace["en"]["19"]="Manufacture of coke and refined petroleum products";
$bg_nace["en"]["19.1"]="Manufacture of coke oven products";
$bg_nace["en"]["19.10"]="Manufacture of coke oven products";
$bg_nace["en"]["19.2"]="Manufacture of refined petroleum products";
$bg_nace["en"]["19.20"]="Manufacture of refined petroleum products";
$bg_nace["en"]["20"]="Manufacture of chemicals and chemical products";
$bg_nace["en"]["20.1"]="Manufacture of basic chemicals, fertilisers and nitrogen compounds, plastics and synthetic rubber in primary forms";
$bg_nace["en"]["20.11"]="Manufacture of industrial gases";
$bg_nace["en"]["20.12"]="Manufacture of dyes and pigments";
$bg_nace["en"]["20.13"]="Manufacture of other inorganic basic chemicals";
$bg_nace["en"]["20.14"]="Manufacture of other organic basic chemicals";
$bg_nace["en"]["20.15"]="Manufacture of fertilisers and nitrogen compounds";
$bg_nace["en"]["20.16"]="Manufacture of plastics in primary forms";
$bg_nace["en"]["20.17"]="Manufacture of synthetic rubber in primary forms";
$bg_nace["en"]["20.2"]="Manufacture of pesticides and other agrochemical products";
$bg_nace["en"]["20.20"]="Manufacture of pesticides and other agrochemical products";
$bg_nace["en"]["20.3"]="Manufacture of paints, varnishes and similar coatings, printing ink and mastics";
$bg_nace["en"]["20.30"]="Manufacture of paints, varnishes and similar coatings, printing ink and mastics";
$bg_nace["en"]["20.4"]="Manufacture of soap and detergents, cleaning and polishing preparations, perfumes and toilet preparations";
$bg_nace["en"]["20.41"]="Manufacture of soap and detergents, cleaning and polishing preparations";
$bg_nace["en"]["20.42"]="Manufacture of perfumes and toilet preparations";
$bg_nace["en"]["20.5"]="Manufacture of other chemical products";
$bg_nace["en"]["20.51"]="Manufacture of explosives";
$bg_nace["en"]["20.52"]="Manufacture of glues";
$bg_nace["en"]["20.53"]="Manufacture of essential oils";
$bg_nace["en"]["20.59"]="Manufacture of other chemical products n.e.c.";
$bg_nace["en"]["20.6"]="Manufacture of man-made fibres";
$bg_nace["en"]["20.60"]="Manufacture of man-made fibres";
$bg_nace["en"]["21"]="Manufacture of basic pharmaceutical products and pharmaceutical preparations";
$bg_nace["en"]["21.1"]="Manufacture of basic pharmaceutical products";
$bg_nace["en"]["21.10"]="Manufacture of basic pharmaceutical products";
$bg_nace["en"]["21.2"]="Manufacture of pharmaceutical preparations";
$bg_nace["en"]["21.20"]="Manufacture of pharmaceutical preparations";
$bg_nace["en"]["22"]="Manufacture of rubber and plastic products";
$bg_nace["en"]["22.1"]="Manufacture of rubber products";
$bg_nace["en"]["22.11"]="Manufacture of rubber tyres and tubes; retreading and rebuilding of rubber tyres";
$bg_nace["en"]["22.19"]="Manufacture of other rubber products";
$bg_nace["en"]["22.2"]="Manufacture of plastics products";
$bg_nace["en"]["22.21"]="Manufacture of plastic plates, sheets, tubes and profiles";
$bg_nace["en"]["22.22"]="Manufacture of plastic packing goods";
$bg_nace["en"]["22.23"]="Manufacture of builders’ ware of plastic";
$bg_nace["en"]["22.29"]="Manufacture of other plastic products";
$bg_nace["en"]["23"]="Manufacture of other non-metallic mineral products";
$bg_nace["en"]["23.1"]="Manufacture of glass and glass products";
$bg_nace["en"]["23.11"]="Manufacture of flat glass";
$bg_nace["en"]["23.12"]="Shaping and processing of flat glass";
$bg_nace["en"]["23.13"]="Manufacture of hollow glass";
$bg_nace["en"]["23.14"]="Manufacture of glass fibres";
$bg_nace["en"]["23.19"]="Manufacture and processing of other glass, including technical glassware";
$bg_nace["en"]["23.2"]="Manufacture of refractory products";
$bg_nace["en"]["23.20"]="Manufacture of refractory products";
$bg_nace["en"]["23.3"]="Manufacture of clay building materials";
$bg_nace["en"]["23.31"]="Manufacture of ceramic tiles and flags";
$bg_nace["en"]["23.32"]="Manufacture of bricks, tiles and construction products, in baked clay";
$bg_nace["en"]["23.4"]="Manufacture of other porcelain and ceramic products";
$bg_nace["en"]["23.41"]="Manufacture of ceramic household and ornamental articles";
$bg_nace["en"]["23.42"]="Manufacture of ceramic sanitary fixtures";
$bg_nace["en"]["23.43"]="Manufacture of ceramic insulators and insulating fittings";
$bg_nace["en"]["23.44"]="Manufacture of other technical ceramic products";
$bg_nace["en"]["23.49"]="Manufacture of other ceramic products";
$bg_nace["en"]["23.5"]="Manufacture of cement, lime and plaster";
$bg_nace["en"]["23.51"]="Manufacture of cement";
$bg_nace["en"]["23.52"]="Manufacture of lime and plaster";
$bg_nace["en"]["23.6"]="Manufacture of articles of concrete, cement and plaster";
$bg_nace["en"]["23.61"]="Manufacture of concrete products for construction purposes";
$bg_nace["en"]["23.62"]="Manufacture of plaster products for construction purposes";
$bg_nace["en"]["23.63"]="Manufacture of ready-mixed concrete";
$bg_nace["en"]["23.64"]="Manufacture of mortars";
$bg_nace["en"]["23.65"]="Manufacture of fibre cement";
$bg_nace["en"]["23.69"]="Manufacture of other articles of concrete, plaster and cement";
$bg_nace["en"]["23.7"]="Cutting, shaping and finishing of stone";
$bg_nace["en"]["23.70"]="Cutting, shaping and finishing of stone";
$bg_nace["en"]["23.9"]="Manufacture of abrasive products and non-metallic mineral products n.e.c.";
$bg_nace["en"]["23.91"]="Production of abrasive products";
$bg_nace["en"]["23.99"]="Manufacture of other non-metallic mineral products n.e.c.";
$bg_nace["en"]["24"]="Manufacture of basic metals";
$bg_nace["en"]["24.1"]="Manufacture of basic iron and steel and of ferro-alloys";
$bg_nace["en"]["24.10"]="Manufacture of basic iron and steel and of ferro-alloys";
$bg_nace["en"]["24.2"]="Manufacture of tubes, pipes, hollow profiles and related fittings, of steel";
$bg_nace["en"]["24.20"]="Manufacture of tubes, pipes, hollow profiles and related fittings, of steel";
$bg_nace["en"]["24.3"]="Manufacture of other products of first processing of steel";
$bg_nace["en"]["24.31"]="Cold drawing of bars";
$bg_nace["en"]["24.32"]="Cold rolling of narrow strip";
$bg_nace["en"]["24.33"]="Cold forming or folding";
$bg_nace["en"]["24.34"]="Cold drawing of wire";
$bg_nace["en"]["24.4"]="Manufacture of basic precious and other non-ferrous metals";
$bg_nace["en"]["24.41"]="Precious metals production";
$bg_nace["en"]["24.42"]="Aluminium production";
$bg_nace["en"]["24.43"]="Lead, zinc and tin production";
$bg_nace["en"]["24.44"]="Copper production";
$bg_nace["en"]["24.45"]="Other non-ferrous metal production";
$bg_nace["en"]["24.46"]="Processing of nuclear fuel";
$bg_nace["en"]["24.5"]="Casting of metals";
$bg_nace["en"]["24.51"]="Casting of iron";
$bg_nace["en"]["24.52"]="Casting of steel";
$bg_nace["en"]["24.53"]="Casting of light metals";
$bg_nace["en"]["24.54"]="Casting of other non-ferrous metals";
$bg_nace["en"]["25"]="Manufacture of fabricated metal products, except machinery and equipment";
$bg_nace["en"]["25.1"]="Manufacture of structural metal products";
$bg_nace["en"]["25.11"]="Manufacture of metal structures and parts of structures";
$bg_nace["en"]["25.12"]="Manufacture of doors and windows of metal";
$bg_nace["en"]["25.2"]="Manufacture of tanks, reservoirs and containers of metal";
$bg_nace["en"]["25.21"]="Manufacture of central heating radiators and boilers";
$bg_nace["en"]["25.29"]="Manufacture of other tanks, reservoirs and containers of metal";
$bg_nace["en"]["25.3"]="Manufacture of steam generators, except central heating hot water boilers";
$bg_nace["en"]["25.30"]="Manufacture of steam generators, except central heating hot water boilers";
$bg_nace["en"]["25.4"]="Manufacture of weapons and ammunition";
$bg_nace["en"]["25.40"]="Manufacture of weapons and ammunition";
$bg_nace["en"]["25.5"]="Forging, pressing, stamping and roll-forming of metal; powder metallurgy";
$bg_nace["en"]["25.50"]="Forging, pressing, stamping and roll-forming of metal; powder metallurgy";
$bg_nace["en"]["25.6"]="Treatment and coating of metals; machining";
$bg_nace["en"]["25.61"]="Treatment and coating of metals";
$bg_nace["en"]["25.62"]="Machining";
$bg_nace["en"]["25.7"]="Manufacture of cutlery, tools and general hardware";
$bg_nace["en"]["25.71"]="Manufacture of cutlery";
$bg_nace["en"]["25.72"]="Manufacture of locks and hinges";
$bg_nace["en"]["25.73"]="Manufacture of tools";
$bg_nace["en"]["25.9"]="Manufacture of other fabricated metal products";
$bg_nace["en"]["25.91"]="Manufacture of steel drums and similar containers";
$bg_nace["en"]["25.92"]="Manufacture of light metal packaging";
$bg_nace["en"]["25.93"]="Manufacture of wire products, chain and springs";
$bg_nace["en"]["25.94"]="Manufacture of fasteners and screw machine products";
$bg_nace["en"]["25.99"]="Manufacture of other fabricated metal products n.e.c.";
$bg_nace["en"]["26"]="Manufacture of computer, electronic and optical products";
$bg_nace["en"]["26.1"]="Manufacture of electronic components and boards";
$bg_nace["en"]["26.11"]="Manufacture of electronic components";
$bg_nace["en"]["26.12"]="Manufacture of loaded electronic boards";
$bg_nace["en"]["26.2"]="Manufacture of computers and peripheral equipment";
$bg_nace["en"]["26.20"]="Manufacture of computers and peripheral equipment";
$bg_nace["en"]["26.3"]="Manufacture of communication equipment";
$bg_nace["en"]["26.30"]="Manufacture of communication equipment";
$bg_nace["en"]["26.4"]="Manufacture of consumer electronics";
$bg_nace["en"]["26.40"]="Manufacture of consumer electronics";
$bg_nace["en"]["26.5"]="Manufacture of instruments and appliances for measuring, testing and navigation; watches and clocks";
$bg_nace["en"]["26.51"]="Manufacture of instruments and appliances for measuring, testing and navigation";
$bg_nace["en"]["26.52"]="Manufacture of watches and clocks";
$bg_nace["en"]["26.6"]="Manufacture of irradiation, electromedical and electrotherapeutic equipment";
$bg_nace["en"]["26.60"]="Manufacture of irradiation, electromedical and electrotherapeutic equipment";
$bg_nace["en"]["26.7"]="Manufacture of optical instruments and photographic equipment";
$bg_nace["en"]["29.70"]="Manufacture of optical instruments and photographic equipment";
$bg_nace["en"]["26.8"]="Manufacture of magnetic and optical media";
$bg_nace["en"]["26.80"]="Manufacture of magnetic and optical media";
$bg_nace["en"]["27"]="Manufacture of electrical equipment";
$bg_nace["en"]["27.1"]="Manufacture of electric motors, generators, transformers and electricity distribution and control apparatus";
$bg_nace["en"]["27.11"]="Manufacture of electric motors, generators and transformers";
$bg_nace["en"]["27.12"]="Manufacture of electricity distribution and control apparatus";
$bg_nace["en"]["27.2"]="Manufacture of batteries and accumulators";
$bg_nace["en"]["27.20"]="Manufacture of batteries and accumulators";
$bg_nace["en"]["27.3"]="Manufacture of wiring and wiring devices";
$bg_nace["en"]["27.31"]="Manufacture of fibre optic cables";
$bg_nace["en"]["27.32"]="Manufacture of other electronic and electric wires and cables";
$bg_nace["en"]["27.33"]="Manufacture of wiring devices";
$bg_nace["en"]["27.4"]="Manufacture of electric lighting equipment";
$bg_nace["en"]["27.40"]="Manufacture of electric lighting equipment";
$bg_nace["en"]["27.5"]="Manufacture of domestic appliances";
$bg_nace["en"]["27.51"]="Manufacture of electric domestic appliances";
$bg_nace["en"]["27.52"]="Manufacture of non-electric domestic appliances";
$bg_nace["en"]["27.9"]="Manufacture of other electrical equipment";
$bg_nace["en"]["27.90"]="Manufacture of other electrical equipment";
$bg_nace["en"]["28"]="Manufacture of machinery and equipment n.e.c.";
$bg_nace["en"]["28.1"]="Manufacture of general-purpose machinery";
$bg_nace["en"]["28.11"]="Manufacture of engines and turbines, except aircraft, vehicle and cycle engines";
$bg_nace["en"]["28.12"]="Manufacture of fluid power equipment";
$bg_nace["en"]["28.13"]="Manufacture of other pumps and compressors";
$bg_nace["en"]["28.14"]="Manufacture of other taps and valves";
$bg_nace["en"]["28.15"]="Manufacture of bearings, gears, gearing and driving elements";
$bg_nace["en"]["28.2"]="Manufacture of other general-purpose machinery";
$bg_nace["en"]["28.21"]="Manufacture of ovens, furnaces and furnace burners";
$bg_nace["en"]["28.22"]="Manufacture of lifting and handling equipment";
$bg_nace["en"]["28.23"]="Manufacture of office machinery and equipment (except computers and peripheral equipment)";
$bg_nace["en"]["28.24"]="Manufacture of power-driven hand tools";
$bg_nace["en"]["28.25"]="Manufacture of non-domestic cooling and ventilation equipment";
$bg_nace["en"]["28.29"]="Manufacture of other general-purpose machinery n.e.c.";
$bg_nace["en"]["28.3"]="Manufacture of agricultural and forestry machinery";
$bg_nace["en"]["28.30"]="Manufacture of agricultural and forestry machinery";
$bg_nace["en"]["28.4"]="Manufacture of metal forming machinery and machine tools";
$bg_nace["en"]["28.41"]="Manufacture of metal forming machinery";
$bg_nace["en"]["28.49"]="Manufacture of other machine tools";
$bg_nace["en"]["28.9"]="Manufacture of other special-purpose machinery";
$bg_nace["en"]["28.91"]="Manufacture of machinery for metallurgy";
$bg_nace["en"]["28.92"]="Manufacture of machinery for mining, quarrying and construction";
$bg_nace["en"]["28.93"]="Manufacture of machinery for food, beverage and tobacco processing";
$bg_nace["en"]["28.94"]="Manufacture of machinery for textile, apparel and leather production";
$bg_nace["en"]["28.95"]="Manufacture of machinery for paper and paperboard production";
$bg_nace["en"]["28.96"]="Manufacture of plastics and rubber machinery";
$bg_nace["en"]["28.99"]="Manufacture of other special-purpose machinery n.e.c.";
$bg_nace["en"]["29"]="Manufacture of motor vehicles, trailers and semi-trailers";
$bg_nace["en"]["29.1"]="Manufacture of motor vehicles";
$bg_nace["en"]["29.10"]="Manufacture of motor vehicles";
$bg_nace["en"]["29.2"]="Manufacture of bodies (coachwork) for motor vehicles; manufacture of trailers and semitrailers";
$bg_nace["en"]["29.20"]="Manufacture of bodies (coachwork) for motor vehicles; manufacture of trailers and semitrailers";
$bg_nace["en"]["29.3"]="Manufacture of parts and accessories for motor vehicles";
$bg_nace["en"]["29.31"]="Manufacture of electrical and electronic equipment for motor vehicles";
$bg_nace["en"]["29.32"]="Manufacture of other parts and accessories for motor vehicles";
$bg_nace["en"]["30"]="Manufacture of other transport equipment";
$bg_nace["en"]["30.1"]="Building of ships and boats";
$bg_nace["en"]["30.11"]="Building of ships and floating structures";
$bg_nace["en"]["30.12"]="Building of pleasure and sporting boats";
$bg_nace["en"]["30.2"]="Manufacture of railway locomotives and rolling stock";
$bg_nace["en"]["30.20"]="Manufacture of railway locomotives and rolling stock";
$bg_nace["en"]["30.3"]="Manufacture of air and spacecraft and related machinery";
$bg_nace["en"]["30.30"]="Manufacture of air and spacecraft and related machinery";
$bg_nace["en"]["30.4"]="Manufacture of military fighting vehicles";
$bg_nace["en"]["30.40"]="Manufacture of military fighting vehicles";
$bg_nace["en"]["30.9"]="Manufacture of transport equipment n.e.c.";
$bg_nace["en"]["30.91"]="Manufacture of motorcycles";
$bg_nace["en"]["30.92"]="Manufacture of bicycles and invalid carriages";
$bg_nace["en"]["30.99"]="Manufacture of other transport equipment n.e.c.";
$bg_nace["en"]["31"]="Manufacture of furniture";
$bg_nace["en"]["31.0"]="Manufacture of furniture";
$bg_nace["en"]["31.01"]="Manufacture of office and shop furniture";
$bg_nace["en"]["31.02"]="Manufacture of kitchen furniture";
$bg_nace["en"]["31.03"]="Manufacture of mattresses";
$bg_nace["en"]["31.09"]="Manufacture of other furniture";
$bg_nace["en"]["32"]="Other manufacturing";
$bg_nace["en"]["32.1"]="Manufacture of jewellery, bijouterie and related articles";
$bg_nace["en"]["32.11"]="Striking of coins";
$bg_nace["en"]["32.12"]="Manufacture of jewellery and related articles";
$bg_nace["en"]["32.13"]="Manufacture of imitation jewellery and related articles";
$bg_nace["en"]["32.2"]="Manufacture of musical instruments";
$bg_nace["en"]["32.20"]="Manufacture of musical instruments";
$bg_nace["en"]["32.3"]="Manufacture of sports goods";
$bg_nace["en"]["32.30"]="Manufacture of sports goods";
$bg_nace["en"]["32.4"]="Manufacture of games and toys";
$bg_nace["en"]["32.40"]="Manufacture of games and toys";
$bg_nace["en"]["32.5"]="Manufacture of medical and dental instruments and supplies";
$bg_nace["en"]["32.50"]="Manufacture of medical and dental instruments and supplies";
$bg_nace["en"]["32.9"]="Manufacturing n.e.c.";
$bg_nace["en"]["32.91"]="Manufacture of brooms and brushes";
$bg_nace["en"]["32.99"]="Other manufacturing n.e.c.";
$bg_nace["en"]["33"]="Repair and installation of machinery and equipment";
$bg_nace["en"]["33.1"]="Repair of fabricated metal products, machinery and equipment";
$bg_nace["en"]["33.11"]="Repair of fabricated metal products";
$bg_nace["en"]["33.12"]="Repair of machinery";
$bg_nace["en"]["33.13"]="Repair of electronic and optical equipment";
$bg_nace["en"]["33.14"]="Repair of electrical equipment";
$bg_nace["en"]["33.15"]="Repair and maintenance of ships and boats";
$bg_nace["en"]["33.16"]="Repair and maintenance of aircraft and spacecraft";
$bg_nace["en"]["33.17"]="Repair and maintenance of other transport equipment";
$bg_nace["en"]["33.19"]="Repair of other equipment";
$bg_nace["en"]["33.2"]="Installation of industrial machinery and equipment";
$bg_nace["en"]["33.20"]="Installation of industrial machinery and equipment";
$bg_nace["en"]["D"]="Electricity, gas, steam and air conditioning supply";
$bg_nace["en"]["35"]="Electricity, gas, steam and air conditioning supply";
$bg_nace["en"]["35.1"]="Electric power generation, transmission and distribution";
$bg_nace["en"]["35.11"]="Production of electricity";
$bg_nace["en"]["35.12"]="Transmission of electricity";
$bg_nace["en"]["35.13"]="Distribution of electricity";
$bg_nace["en"]["35.14"]="Trade of electricity";
$bg_nace["en"]["35.2"]="Manufacture of gas; distribution of gaseous fuels through mains";
$bg_nace["en"]["35.21"]="Manufacture of gas";
$bg_nace["en"]["35.22"]="Distribution of gaseous fuels through mains";
$bg_nace["en"]["35.23"]="Trade of gas through mains";
$bg_nace["en"]["35.3"]="Steam and air conditioning supply";
$bg_nace["en"]["35.30"]="Steam and air conditioning supply";
$bg_nace["en"]["E"]="Water supply; sewerage; waste managment and remediation activities";
$bg_nace["en"]["36"]="Water collection, treatment and supply";
$bg_nace["en"]["36.0"]="Water collection, treatment and supply";
$bg_nace["en"]["36.00"]="Water collection, treatment and supply";
$bg_nace["en"]["37"]="Sewerage";
$bg_nace["en"]["37.0"]="Sewerage";
$bg_nace["en"]["37.00"]="Sewerage";
$bg_nace["en"]["38"]="Waste collection, treatment and disposal activities; materials recovery";
$bg_nace["en"]["38.1"]="Waste collection";
$bg_nace["en"]["38.11"]="Collection of non-hazardous waste";
$bg_nace["en"]["38.12"]="Collection of hazardous waste";
$bg_nace["en"]["38.2"]="Waste treatment and disposal";
$bg_nace["en"]["38.21"]="Treatment and disposal of non-hazardous waste";
$bg_nace["en"]["38.22"]="Treatment and disposal of hazardous waste";
$bg_nace["en"]["38.3"]="Materials recovery";
$bg_nace["en"]["38.31"]="Dismantling of wrecks";
$bg_nace["en"]["38.32"]="Recovery of sorted materials";
$bg_nace["en"]["39"]="Remediation activities and other waste management services";
$bg_nace["en"]["39.0"]="Remediation activities and other waste management services";
$bg_nace["en"]["39.00"]="Remediation activities and other waste management services";
$bg_nace["en"]["F"]="Construction";
$bg_nace["en"]["41"]="Construction of buildings";
$bg_nace["en"]["41.1"]="Development of building projects";
$bg_nace["en"]["41.10"]="Development of building projects";
$bg_nace["en"]["41.2"]="Construction of residential and non-residential buildings";
$bg_nace["en"]["41.20"]="Construction of residential and non-residential buildings";
$bg_nace["en"]["42"]="Civil engineering";
$bg_nace["en"]["42.1"]="Construction of roads and railways";
$bg_nace["en"]["42.11"]="Construction of roads and motorways";
$bg_nace["en"]["42.12"]="Construction of railways and underground railways";
$bg_nace["en"]["42.13"]="Construction of bridges and tunnels";
$bg_nace["en"]["42.2"]="Construction of utility projects";
$bg_nace["en"]["42.21"]="Construction of utility projects for fluids";
$bg_nace["en"]["42.22"]="Construction of utility projects for electricity and telecommunications";
$bg_nace["en"]["42.9"]="Construction of other civil engineering projects";
$bg_nace["en"]["42.91"]="Construction of water projects";
$bg_nace["en"]["42.99"]="Construction of other civil engineering projects n.e.c.";
$bg_nace["en"]["43"]="Specialised construction activities";
$bg_nace["en"]["43.1"]="Demolition and site preparation";
$bg_nace["en"]["43.11"]="Demolition";
$bg_nace["en"]["43.12"]="Site preparation";
$bg_nace["en"]["43.13"]="Test drilling and boring";
$bg_nace["en"]["43.2"]="Electrical, plumbing and other construction installation activities";
$bg_nace["en"]["43.21"]="Electrical installation";
$bg_nace["en"]["43.22"]="Plumbing, heat and air-conditioning installation";
$bg_nace["en"]["43.29"]="Other construction installation";
$bg_nace["en"]["43.3"]="Building completion and finishing";
$bg_nace["en"]["43.31"]="Plastering";
$bg_nace["en"]["43.32"]="Joinery installation";
$bg_nace["en"]["43.33"]="Floor and wall covering";
$bg_nace["en"]["43.34"]="Painting and glazing";
$bg_nace["en"]["43.39"]="Other building completion and finishing";
$bg_nace["en"]["43.9"]="Other specialised construction activities";
$bg_nace["en"]["43.91"]="Roofing activities";
$bg_nace["en"]["43.99"]="Other specialised construction activities n.e.c.";
$bg_nace["en"]["G"]="Wholesale and retail trade; repair of motor vehicles and motorcycles";
$bg_nace["en"]["45"]="Wholesale and retail trade and repair of motor vehicles and motorcycles";
$bg_nace["en"]["45.1"]="Sale of motor vehicles";
$bg_nace["en"]["45.11"]="Sale of cars and light motor vehicles";
$bg_nace["en"]["45.19"]="Sale of other motor vehicles";
$bg_nace["en"]["45.2"]="Maintenance and repair of motor vehicles";
$bg_nace["en"]["45.20"]="Maintenance and repair of motor vehicles";
$bg_nace["en"]["45.3"]="Sale of motor vehicle parts and accessories";
$bg_nace["en"]["45.31"]="Wholesale trade of motor vehicle parts and accessories";
$bg_nace["en"]["45.32"]="Retail trade of motor vehicle parts and accessories";
$bg_nace["en"]["45.4"]="Sale, maintenance and repair of motorcycles and related parts and accessories";
$bg_nace["en"]["45.40"]="Sale, maintenance and repair of motorcycles and related parts and accessories";
$bg_nace["en"]["46"]="Wholesale trade, except of motor vehicles and motorcycles";
$bg_nace["en"]["46.1"]="Wholesale on a fee or contract basis";
$bg_nace["en"]["46.11"]="Agents involved in the sale of agricultural raw materials, live animals, textile raw materials and semi-finished goods";
$bg_nace["en"]["46.12"]="Agents involved in the sale of fuels, ores, metals and industrial chemicals";
$bg_nace["en"]["46.13"]="Agents involved in the sale of timber and building materials";
$bg_nace["en"]["46.14"]="Agents involved in the sale of machinery, industrial equipment, ships and aircraft";
$bg_nace["en"]["46.15"]="Agents involved in the sale of furniture, household goods, hardware and ironmongery";
$bg_nace["en"]["46.16"]="Agents involved in the sale of textiles, clothing, fur, footwear and leather goods";
$bg_nace["en"]["46.17"]="Agents involved in the sale of food, beverages and tobacco";
$bg_nace["en"]["46.18"]="Agents specialised in the sale of other particular products";
$bg_nace["en"]["46.19"]="Agents involved in the sale of a variety of goods";
$bg_nace["en"]["46.2"]="Wholesale of agricultural raw materials and live animals";
$bg_nace["en"]["46.21"]="Wholesale of grain, unmanufactured tobacco, seeds and animal feeds";
$bg_nace["en"]["46.22"]="Wholesale of flowers and plants";
$bg_nace["en"]["46.23"]="Wholesale of live animals";
$bg_nace["en"]["43.24"]="Wholesale of hides, skins and leather";
$bg_nace["en"]["46.3"]="Wholesale of food, beverages and tobacco";
$bg_nace["en"]["46.31"]="Wholesale of fruit and vegetables";
$bg_nace["en"]["46.32"]="Wholesale of meat and meat products";
$bg_nace["en"]["46.33"]="Wholesale of dairy products, eggs and edible oils and fats";
$bg_nace["en"]["46.34"]="Wholesale of beverages";
$bg_nace["en"]["46.35"]="Wholesale of tobacco products";
$bg_nace["en"]["46.36"]="Wholesale of sugar and chocolate and sugar confectionery";
$bg_nace["en"]["46.37"]="Wholesale of coffee, tea, cocoa and spices";
$bg_nace["en"]["46.38"]="Wholesale of other food, including fish, crustaceans and molluscs";
$bg_nace["en"]["46.39"]="Non-specialised wholesale of food, beverages and tobacco";
$bg_nace["en"]["46.4"]="Wholesale of household goods";
$bg_nace["en"]["46.41"]="Wholesale of textiles";
$bg_nace["en"]["46.42"]="Wholesale of clothing and footwear";
$bg_nace["en"]["46.43"]="Wholesale of electrical household appliances";
$bg_nace["en"]["46.44"]="Wholesale of china and glassware and cleaning materials";
$bg_nace["en"]["46.45"]="Wholesale of perfume and cosmetics";
$bg_nace["en"]["46.46"]="Wholesale of pharmaceutical goods";
$bg_nace["en"]["46.47"]="Wholesale of furniture, carpets and lighting equipment";
$bg_nace["en"]["46.48"]="Wholesale of watches and jewellery";
$bg_nace["en"]["46.49"]="Wholesale of other household goods";
$bg_nace["en"]["46.5"]="Wholesale of information and communication equipment";
$bg_nace["en"]["46.51"]="Wholesale of computers, computer peripheral equipment and software";
$bg_nace["en"]["46.52"]="Wholesale of electronic and telecommunications equipment and parts";
$bg_nace["en"]["46.6"]="Wholesale of other machinery, equipment and supplies";
$bg_nace["en"]["46.61"]="Wholesale of agricultural machinery, equipment and supplies";
$bg_nace["en"]["46.62"]="Wholesale of machine tools";
$bg_nace["en"]["46.63"]="Wholesale of mining, construction and civil engineering machinery";
$bg_nace["en"]["46.64"]="Wholesale of machinery for the textile industry and of sewing and knitting machines";
$bg_nace["en"]["46.65"]="Wholesale of office furniture";
$bg_nace["en"]["46.66"]="Wholesale of other office machinery and equipment";
$bg_nace["en"]["46.69"]="Wholesale of other machinery and equipment";
$bg_nace["en"]["46.7"]="Other specialised wholesale";
$bg_nace["en"]["46.71"]="Wholesale of solid, liquid and gaseous fuels and related products";
$bg_nace["en"]["46.72"]="Wholesale of metals and metal ores";
$bg_nace["en"]["46.73"]="Wholesale of wood, construction materials and sanitary equipment";
$bg_nace["en"]["46.74"]="Wholesale of hardware, plumbing and heating equipment and supplies";
$bg_nace["en"]["46.75"]="Wholesale of chemical products";
$bg_nace["en"]["46.76"]="Wholesale of other intermediate products";
$bg_nace["en"]["46.77"]="Wholesale of waste and scrap";
$bg_nace["en"]["46.9"]="Non-specialised wholesale trade";
$bg_nace["en"]["46.90"]="Non-specialised wholesale trade";
$bg_nace["en"]["47"]="Retail trade, except of motor vehicles and motorcycles";
$bg_nace["en"]["47.1"]="Retail sale in non-specialised stores";
$bg_nace["en"]["47.11"]="Retail sale in non-specialised stores with food, beverages or tobacco predominating";
$bg_nace["en"]["47.19"]="Other retail sale in non-specialised stores";
$bg_nace["en"]["47.2"]="Retail sale of food, beverages and tobacco in specialised stores";
$bg_nace["en"]["47.21"]="Retail sale of fruit and vegetables in specialised stores";
$bg_nace["en"]["47.22"]="Retail sale of meat and meat products in specialised stores";
$bg_nace["en"]["47.23"]="Retail sale of fish, crustaceans and molluscs in specialised stores";
$bg_nace["en"]["47.24"]="Retail sale of bread, cakes, flour confectionery and sugar confectionery in specialised stores";
$bg_nace["en"]["47.25"]="Retail sale of beverages in specialised stores";
$bg_nace["en"]["47.26"]="Retail sale of tobacco products in specialised stores";
$bg_nace["en"]["47.29"]="Other retail sale of food in specialised stores";
$bg_nace["en"]["47.3"]="Retail sale of automotive fuel in specialised stores";
$bg_nace["en"]["47.30"]="Retail sale of automotive fuel in specialised stores";
$bg_nace["en"]["47.4"]="Retail sale of information and communication equipment in specialised stores";
$bg_nace["en"]["47.41"]="Retail sale of computers, peripheral units and software in specialised stores";
$bg_nace["en"]["47.42"]="Retail sale of telecommunications equipment in specialised stores";
$bg_nace["en"]["47.43"]="Retail sale of audio and video equipment in specialised stores";
$bg_nace["en"]["47.5"]="Retail sale of other household equipment in specialised stores";
$bg_nace["en"]["47.51"]="Retail sale of textiles in specialised stores";
$bg_nace["en"]["47.52"]="Retail sale of hardware, paints and glass in specialised stores";
$bg_nace["en"]["47.53"]="Retail sale of carpets, rugs, wall and floor coverings in specialised stores";
$bg_nace["en"]["47.54"]="Retail sale of electrical household appliances in specialised stores";
$bg_nace["en"]["47.59"]="Retail sale of furniture, lighting equipment and other household articles in specialised stores";
$bg_nace["en"]["47.6"]="Retail sale of cultural and recreation goods in specialised stores";
$bg_nace["en"]["47.61"]="Retail sale of books in specialised stores";
$bg_nace["en"]["47.62"]="Retail sale of newspapers and stationery in specialised stores";
$bg_nace["en"]["47.63"]="Retail sale of music and video recordings in specialised stores";
$bg_nace["en"]["47.64"]="Retail sale of sporting equipment in specialised stores";
$bg_nace["en"]["47.65"]="Retail sale of games and toys in specialised stores";
$bg_nace["en"]["47.7"]="Retail sale of other goods in specialised stores";
$bg_nace["en"]["47.71"]="Retail sale of clothing in specialised stores";
$bg_nace["en"]["47.72"]="Retail sale of footwear and leather goods in specialised stores";
$bg_nace["en"]["47.73"]="Dispensing chemist in specialised stores";
$bg_nace["en"]["47.74"]="Retail sale of medical and orthopaedic goods in specialised stores";
$bg_nace["en"]["47.75"]="Retail sale of cosmetic and toilet articles in specialised stores";
$bg_nace["en"]["47.76"]="Retail sale of flowers, plants, seeds, fertilisers, pet animals and pet food in specialised stores";
$bg_nace["en"]["47.77"]="Retail sale of watches and jewellery in specialised stores";
$bg_nace["en"]["47.78"]="Other retail sale of new goods in specialised stores";
$bg_nace["en"]["47.79"]="Retail sale of second-hand goods in stores";
$bg_nace["en"]["47.8"]="Retail sale via stalls and markets";
$bg_nace["en"]["47.81"]="Retail sale via stalls and markets of food, beverages and tobacco products";
$bg_nace["en"]["47.82"]="Retail sale via stalls and markets of textiles, clothing and footwear";
$bg_nace["en"]["47.89"]="Retail sale via stalls and markets of other goods";
$bg_nace["en"]["47.9"]="Retail trade not in stores, stalls or markets";
$bg_nace["en"]["47.91"]="Retail sale via mail order houses or via Internet";
$bg_nace["en"]["47.99"]="Other retail sale not in stores, stalls or markets";
$bg_nace["en"]["H"]="Transporting and storage";
$bg_nace["en"]["49"]="Land transport and transport via pipelines";
$bg_nace["en"]["49.1"]="Passenger rail transport, interurban";
$bg_nace["en"]["49.10"]="Passenger rail transport, interurban";
$bg_nace["en"]["49.2"]="Freight rail transport";
$bg_nace["en"]["49.20"]="Freight rail transport";
$bg_nace["en"]["49.3"]="Other passenger land transport";
$bg_nace["en"]["49.31"]="Urban and suburban passenger land transport";
$bg_nace["en"]["49.32"]="Taxi operation";
$bg_nace["en"]["49.39"]="Other passenger land transport n.e.c.";
$bg_nace["en"]["49.4"]="Freight transport by road and removal services";
$bg_nace["en"]["49.41"]="Freight transport by road";
$bg_nace["en"]["49.42"]="Removal services";
$bg_nace["en"]["49.5"]="Transport via pipeline";
$bg_nace["en"]["49.50"]="Transport via pipeline";
$bg_nace["en"]["50"]="Water transport";
$bg_nace["en"]["50.1"]="Sea and coastal passenger water transport";
$bg_nace["en"]["50.10"]="Sea and coastal passenger water transport";
$bg_nace["en"]["50.2"]="Sea and coastal freight water transport";
$bg_nace["en"]["50.20"]="Sea and coastal freight water transport";
$bg_nace["en"]["50.3"]="Inland passenger water transport";
$bg_nace["en"]["50.30"]="Inland passenger water transport";
$bg_nace["en"]["50.4"]="Inland freight water transport";
$bg_nace["en"]["50.40"]="Inland freight water transport";
$bg_nace["en"]["51"]="Air transport";
$bg_nace["en"]["51.1"]="Passenger air transport";
$bg_nace["en"]["51.10"]="Passenger air transport";
$bg_nace["en"]["51.2"]="Freight air transport and space transport";
$bg_nace["en"]["51.21"]="Freight air transport";
$bg_nace["en"]["51.22"]="Space transport";
$bg_nace["en"]["52"]="Warehousing and support activities for transportation";
$bg_nace["en"]["52.1"]="Warehousing and storage";
$bg_nace["en"]["52.10"]="Warehousing and storage";
$bg_nace["en"]["52.2"]="Support activities for transportation";
$bg_nace["en"]["52.21"]="Service activities incidental to land transportation";
$bg_nace["en"]["52.22"]="Service activities incidental to water transportation";
$bg_nace["en"]["52.23"]="Service activities incidental to air transportation";
$bg_nace["en"]["52.24"]="Cargo handling";
$bg_nace["en"]["52.29"]="Other transportation support activities";
$bg_nace["en"]["53"]="Postal and courier activities";
$bg_nace["en"]["53.1"]="Postal activities under universal service obligation";
$bg_nace["en"]["53.10"]="Postal activities under universal service obligation";
$bg_nace["en"]["53.2"]="Other postal and courier activities";
$bg_nace["en"]["53.20"]="Other postal and courier activities";
$bg_nace["en"]["I"]="Accommodation and food service activities";
$bg_nace["en"]["55"]="Accommodation";
$bg_nace["en"]["55.1"]="Hotels and similar accommodation";
$bg_nace["en"]["55.10"]="Hotels and similar accommodation";
$bg_nace["en"]["55.2"]="Holiday and other short-stay accommodation";
$bg_nace["en"]["55.20"]="Holiday and other short-stay accommodation";
$bg_nace["en"]["55.3"]="Camping grounds, recreational vehicle parks and trailer parks";
$bg_nace["en"]["55.30"]="Camping grounds, recreational vehicle parks and trailer parks";
$bg_nace["en"]["55.9"]="Other accommodation";
$bg_nace["en"]["55.90"]="Other accommodation";
$bg_nace["en"]["56"]="Food and beverage service activities";
$bg_nace["en"]["56.1"]="Restaurants and mobile food service activities";
$bg_nace["en"]["56.10"]="Restaurants and mobile food service activities";
$bg_nace["en"]["56.2"]="Event catering and other food service activities";
$bg_nace["en"]["56.21"]="Event catering activities";
$bg_nace["en"]["56.29"]="Other food service activities";
$bg_nace["en"]["56.3"]="Beverage serving activities";
$bg_nace["en"]["56.30"]="Beverage serving activities";
$bg_nace["en"]["J"]="Information and communication";
$bg_nace["en"]["58"]="Publishing activities";
$bg_nace["en"]["58.1"]="Publishing of books, periodicals and other publishing activities";
$bg_nace["en"]["58.11"]="Book publishing";
$bg_nace["en"]["58.12"]="Publishing of directories and mailing lists";
$bg_nace["en"]["58.13"]="Publishing of newspapers";
$bg_nace["en"]["58.14"]="Publishing of journals and periodicals";
$bg_nace["en"]["58.19"]="Other publishing activities";
$bg_nace["en"]["58.2"]="Software publishing";
$bg_nace["en"]["58.21"]="Publishing of computer games";
$bg_nace["en"]["58.29"]="Other software publishing";
$bg_nace["en"]["59"]="Motion picture, video and television programme production, sound recording and music publishing activities";
$bg_nace["en"]["59.1"]="Motion picture, video and television programme activities";
$bg_nace["en"]["59.11"]="Motion picture, video and television programme production activities";
$bg_nace["en"]["59.12"]="Motion picture, video and television programme post-production activities";
$bg_nace["en"]["59.13"]="Motion picture, video and television programme distribution activities";
$bg_nace["en"]["59.14"]="Motion picture projection activities";
$bg_nace["en"]["59.2"]="Sound recording and music publishing activities";
$bg_nace["en"]["59.20"]="Sound recording and music publishing activities";
$bg_nace["en"]["60"]="Programming and broadcasting activities";
$bg_nace["en"]["60.1"]="Radio broadcasting";
$bg_nace["en"]["60.10"]="Radio broadcasting";
$bg_nace["en"]["60.2"]="Television programming and broadcasting activities";
$bg_nace["en"]["60.20"]="Television programming and broadcasting activities";
$bg_nace["en"]["61"]="Telecommunications";
$bg_nace["en"]["61.1"]="Wired telecommunications activities";
$bg_nace["en"]["61.10"]="Wired telecommunications activities";
$bg_nace["en"]["61.2"]="Wireless telecommunications activities";
$bg_nace["en"]["61.20"]="Wireless telecommunications activities";
$bg_nace["en"]["61.3"]="Satellite telecommunications activities";
$bg_nace["en"]["61.30"]="Satellite telecommunications activities";
$bg_nace["en"]["61.9"]="Other telecommunications activities";
$bg_nace["en"]["61.90"]="Other telecommunications activities";
$bg_nace["en"]["62"]="Computer programming, consultancy and related activities";
$bg_nace["en"]["62.0"]="Computer programming, consultancy and related activities";
$bg_nace["en"]["62.01"]="Computer programming activities";
$bg_nace["en"]["62.02"]="Computer consultancy activities";
$bg_nace["en"]["62.03"]="Computer facilities management activities";
$bg_nace["en"]["62.09"]="Other information technology and computer service activities";
$bg_nace["en"]["63"]="Information service activities";
$bg_nace["en"]["63.1"]="Data processing, hosting and related activities; web portals";
$bg_nace["en"]["63.11"]="Data processing, hosting and related activities";
$bg_nace["en"]["63.12"]="Web portals";
$bg_nace["en"]["63.9"]="Other information service activities";
$bg_nace["en"]["63.91"]="News agency activities";
$bg_nace["en"]["63.99"]="Other information service activities n.e.c.";
$bg_nace["en"]["K"]="Financial and insurance activities";
$bg_nace["en"]["64"]="Financial service activities, except insurance and pension funding";
$bg_nace["en"]["64.1"]="Monetary intermediation";
$bg_nace["en"]["64.11"]="Central banking";
$bg_nace["en"]["64.19"]="Other monetary intermediation";
$bg_nace["en"]["64.2"]="Activities of holding companies";
$bg_nace["en"]["64.20"]="Activities of holding companies";
$bg_nace["en"]["64.3"]="Trusts, funds and similar financial entities";
$bg_nace["en"]["64.30"]="Trusts, funds and similar financial entities";
$bg_nace["en"]["64.9"]="Other financial service activities, except insurance and pension funding";
$bg_nace["en"]["64.91"]="Financial leasing";
$bg_nace["en"]["64.92"]="Other credit granting";
$bg_nace["en"]["64.99"]="Other financial service activities, except insurance and pension funding n.e.c.";
$bg_nace["en"]["65"]="Insurance, reinsurance and pension funding, except compulsory social security";
$bg_nace["en"]["65.1"]="Insurance";
$bg_nace["en"]["65.11"]="Life insurance";
$bg_nace["en"]["65.12"]="Non-life insurance";
$bg_nace["en"]["65.2"]="Reinsurance";
$bg_nace["en"]["65.20"]="Reinsurance";
$bg_nace["en"]["65.3"]="Pension funding";
$bg_nace["en"]["65.30"]="Pension funding";
$bg_nace["en"]["66"]="Activities auxiliary to financial services and insurance activities";
$bg_nace["en"]["66.1"]="Activities auxiliary to financial services, except insurance and pension funding";
$bg_nace["en"]["66.11"]="Administration of financial markets";
$bg_nace["en"]["66.12"]="Security and commodity contracts brokerage";
$bg_nace["en"]["66.19"]="Other activities auxiliary to financial services, except insurance and pension funding";
$bg_nace["en"]["66.2"]="Activities auxiliary to insurance and pension funding";
$bg_nace["en"]["66.21"]="Risk and damage evaluation";
$bg_nace["en"]["66.22"]="Activities of insurance agents and brokers";
$bg_nace["en"]["66.29"]="Other activities auxiliary to insurance and pension funding";
$bg_nace["en"]["66.3"]="Fund management activities";
$bg_nace["en"]["66.30"]="Fund management activities";
$bg_nace["en"]["L"]="Real estate activities";
$bg_nace["en"]["68"]="Real estate activities";
$bg_nace["en"]["68.1"]="Buying and selling of own real estate";
$bg_nace["en"]["68.10"]="Buying and selling of own real estate";
$bg_nace["en"]["68.2"]="Renting and operating of own or leased real estate";
$bg_nace["en"]["68.20"]="Renting and operating of own or leased real estate";
$bg_nace["en"]["68.3"]="Real estate activities on a fee or contract basis";
$bg_nace["en"]["68.31"]="Real estate agencies";
$bg_nace["en"]["68.32"]="Management of real estate on a fee or contract basis";
$bg_nace["en"]["M"]="Professional, scientific and technical activities";
$bg_nace["en"]["69"]="Legal and accounting activities";
$bg_nace["en"]["69.1"]="Legal activities";
$bg_nace["en"]["69.10"]="Legal activities";
$bg_nace["en"]["69.2"]="Accounting, bookkeeping and auditing activities; tax consultancy";
$bg_nace["en"]["69.20"]="Accounting, bookkeeping and auditing activities; tax consultancy";
$bg_nace["en"]["70"]="Activities of head offices; management consultancy activities";
$bg_nace["en"]["70.1"]="Activities of head offices";
$bg_nace["en"]["70.10"]="Activities of head offices";
$bg_nace["en"]["70.2"]="Management consultancy activities";
$bg_nace["en"]["70.21"]="Public relations and communication activities";
$bg_nace["en"]["70.22"]="Business and other management consultancy activities";
$bg_nace["en"]["71"]="Architectural and engineering activities; technical testing and analysis";
$bg_nace["en"]["71.1"]="Architectural and engineering activities and related technical consultancy";
$bg_nace["en"]["71.11"]="Architectural activities";
$bg_nace["en"]["71.12"]="Engineering activities and related technical consultancy";
$bg_nace["en"]["71.2"]="Technical testing and analysis";
$bg_nace["en"]["71.20"]="Technical testing and analysis";
$bg_nace["en"]["72"]="Scientific research and development";
$bg_nace["en"]["72.1"]="Research and experimental development on natural sciences and engineering";
$bg_nace["en"]["72.11"]="Research and experimental development on biotechnology";
$bg_nace["en"]["72.19"]="Other research and experimental development on natural sciences and engineering";
$bg_nace["en"]["72.2"]="Research and experimental development on social sciences and humanities";
$bg_nace["en"]["72.20"]="Research and experimental development on social sciences and humanities";
$bg_nace["en"]["73"]="Advertising and market research";
$bg_nace["en"]["73.1"]="Advertising";
$bg_nace["en"]["73.11"]="Advertising agencies";
$bg_nace["en"]["73.12"]="Media representation";
$bg_nace["en"]["73.2"]="Market research and public opinion polling";
$bg_nace["en"]["73.20"]="Market research and public opinion polling";
$bg_nace["en"]["74"]="Other professional, scientific and technical activities";
$bg_nace["en"]["74.1"]="Specialised design activities";
$bg_nace["en"]["74.10"]="Specialised design activities";
$bg_nace["en"]["74.2"]="Photographic activities";
$bg_nace["en"]["74.20"]="Photographic activities";
$bg_nace["en"]["74.3"]="Translation and interpretation activities";
$bg_nace["en"]["74.30"]="Translation and interpretation activities";
$bg_nace["en"]["74.9"]="Other professional, scientific and technical activities n.e.c.";
$bg_nace["en"]["74.90"]="Other professional, scientific and technical activities n.e.c.";
$bg_nace["en"]["75"]="Veterinary activities";
$bg_nace["en"]["75.0"]="Veterinary activities";
$bg_nace["en"]["75.00"]="Veterinary activities";
$bg_nace["en"]["N"]="Administrative and support service activities";
$bg_nace["en"]["77"]="Rental and leasing activities";
$bg_nace["en"]["77.1"]="Renting and leasing of motor vehicles";
$bg_nace["en"]["77.11"]="Renting and leasing of cars and light motor vehicles";
$bg_nace["en"]["77.12"]="Renting and leasing of trucks";
$bg_nace["en"]["77.2"]="Renting and leasing of personal and household goods";
$bg_nace["en"]["77.21"]="Renting and leasing of recreational and sports goods";
$bg_nace["en"]["77.22"]="Renting of video tapes and disks";
$bg_nace["en"]["77.29"]="Renting and leasing of other personal and household goods";
$bg_nace["en"]["77.3"]="Renting and leasing of other machinery, equipment and tangible goods";
$bg_nace["en"]["77.31"]="Renting and leasing of agricultural machinery and equipment";
$bg_nace["en"]["77.32"]="Renting and leasing of construction and civil engineering machinery and equipment";
$bg_nace["en"]["77.33"]="Renting and leasing of office machinery and equipment (including computers)";
$bg_nace["en"]["77.34"]="Renting and leasing of water transport equipment";
$bg_nace["en"]["77.35"]="Renting and leasing of air transport equipment";
$bg_nace["en"]["77.39"]="Renting and leasing of other machinery, equipment and tangible goods n.e.c.";
$bg_nace["en"]["77.4"]="Leasing of intellectual property and similar products, except copyrighted works";
$bg_nace["en"]["77.40"]="Leasing of intellectual property and similar products, except copyrighted works";
$bg_nace["en"]["78"]="Employment activities";
$bg_nace["en"]["78.1"]="Activities of employment placement agencies";
$bg_nace["en"]["78.10"]="Activities of employment placement agencies";
$bg_nace["en"]["78.2"]="Temporary employment agency activities";
$bg_nace["en"]["78.20"]="Temporary employment agency activities";
$bg_nace["en"]["78.3"]="Other human resources provision";
$bg_nace["en"]["78.30"]="Other human resources provision";
$bg_nace["en"]["79"]="Travel agency, tour operator and other reservation service and related activities";
$bg_nace["en"]["79.1"]="Travel agency and tour operator activities";
$bg_nace["en"]["79.11"]="Travel agency activities";
$bg_nace["en"]["79.12"]="Tour operator activities";
$bg_nace["en"]["79.9"]="Other reservation service and related activities";
$bg_nace["en"]["79.90"]="Other reservation service and related activities";
$bg_nace["en"]["80"]="Security and investigation activities";
$bg_nace["en"]["80.1"]="Private security activities";
$bg_nace["en"]["80.10"]="Private security activities";
$bg_nace["en"]["80.2"]="Security systems service activities";
$bg_nace["en"]["80.20"]="Security systems service activities";
$bg_nace["en"]["80.3"]="Investigation activities";
$bg_nace["en"]["80.30"]="Investigation activities";
$bg_nace["en"]["81"]="Services to buildings and landscape activities";
$bg_nace["en"]["81.1"]="Combined facilities support activities";
$bg_nace["en"]["81.10"]="Combined facilities support activities";
$bg_nace["en"]["81.2"]="Cleaning activities";
$bg_nace["en"]["81.21"]="General cleaning of buildings";
$bg_nace["en"]["81.22"]="Other building and industrial cleaning activities";
$bg_nace["en"]["81.29"]="Other cleaning activities";
$bg_nace["en"]["81.3"]="Landscape service activities";
$bg_nace["en"]["81.30"]="Landscape service activities";
$bg_nace["en"]["82"]="Office administrative, office support and other business support activities";
$bg_nace["en"]["82.1"]="Office administrative and support activities";
$bg_nace["en"]["82.11"]="Combined office administrative service activities";
$bg_nace["en"]["82.19"]="Photocopying, document preparation and other specialised office support activities";
$bg_nace["en"]["82.2"]="Activities of call centres";
$bg_nace["en"]["82.20"]="Activities of call centres";
$bg_nace["en"]["82.3"]="Organisation of conventions and trade shows";
$bg_nace["en"]["82.30"]="Organisation of conventions and trade shows";
$bg_nace["en"]["82.9"]="Business support service activities n.e.c.";
$bg_nace["en"]["82.91"]="Activities of collection agencies and credit bureaus";
$bg_nace["en"]["82.92"]="Packaging activities";
$bg_nace["en"]["82.99"]="Other business support service activities n.e.c.";
$bg_nace["en"]["O"]="Public administration and defence; compulsory social security";
$bg_nace["en"]["84"]="Public administration and defence; compulsory social security";
$bg_nace["en"]["84.1"]="Administration of the State and the economic and social policy of the community";
$bg_nace["en"]["84.11"]="General public administration activities";
$bg_nace["en"]["84.12"]="Regulation of the activities of providing health care, education, cultural services and other social services, excluding social security";
$bg_nace["en"]["84.13"]="Regulation of and contribution to more efficient operation of businesses";
$bg_nace["en"]["84.2"]="Provision of services to the community as a whole";
$bg_nace["en"]["84.21"]="Foreign affairs";
$bg_nace["en"]["84.22"]="Defence activities";
$bg_nace["en"]["84.23"]="Justice and judicial activities";
$bg_nace["en"]["84.24"]="Public order and safety activities";
$bg_nace["en"]["84.25"]="Fire service activities";
$bg_nace["en"]["84.3"]="Compulsory social security activities";
$bg_nace["en"]["84.30"]="Compulsory social security activities";
$bg_nace["en"]["P"]="Education";
$bg_nace["en"]["85"]="Education";
$bg_nace["en"]["85.1"]="Pre-primary education";
$bg_nace["en"]["85.10"]="Pre-primary education";
$bg_nace["en"]["85.2"]="Primary education";
$bg_nace["en"]["85.20"]="Primary education";
$bg_nace["en"]["85.3"]="Secondary education";
$bg_nace["en"]["85.31"]="General secondary education";
$bg_nace["en"]["85.32"]="Technical and vocational secondary education";
$bg_nace["en"]["85.4"]="Higher education";
$bg_nace["en"]["85.41"]="Post-secondary non-tertiary education";
$bg_nace["en"]["85.42"]="Tertiary education";
$bg_nace["en"]["85.5"]="Other education";
$bg_nace["en"]["85.51"]="Sports and recreation education";
$bg_nace["en"]["85.52"]="Cultural education";
$bg_nace["en"]["85.53"]="Driving school activities";
$bg_nace["en"]["85.59"]="Other education n.e.c.";
$bg_nace["en"]["85.6"]="Educational support activities";
$bg_nace["en"]["85.60"]="Educational support activities";
$bg_nace["en"]["Q"]="Human health and social work activities";
$bg_nace["en"]["86"]="Human health activities";
$bg_nace["en"]["86.1"]="Hospital activities";
$bg_nace["en"]["86.10"]="Hospital activities";
$bg_nace["en"]["86.2"]="Medical and dental practice activities";
$bg_nace["en"]["86.21"]="General medical practice activities";
$bg_nace["en"]["86.22"]="Specialist medical practice activities";
$bg_nace["en"]["86.23"]="Dental practice activities";
$bg_nace["en"]["86.9"]="Other human health activities";
$bg_nace["en"]["86.90"]="Other human health activities";
$bg_nace["en"]["87"]="Residential care activities";
$bg_nace["en"]["87.1"]="Residential nursing care activities";
$bg_nace["en"]["87.10"]="Residential nursing care activities";
$bg_nace["en"]["87.2"]="Residential care activities for mental retardation, mental health and substance abuse";
$bg_nace["en"]["87.20"]="Residential care activities for mental retardation, mental health and substance abuse";
$bg_nace["en"]["87.3"]="Residential care activities for the elderly and disabled";
$bg_nace["en"]["87.30"]="Residential care activities for the elderly and disabled";
$bg_nace["en"]["87.9"]="Other residential care activities";
$bg_nace["en"]["87.90"]="Other residential care activities";
$bg_nace["en"]["88"]="Social work activities without accommodation";
$bg_nace["en"]["88.1"]="Social work activities without accommodation for the elderly and disabled";
$bg_nace["en"]["88.10"]="Social work activities without accommodation for the elderly and disabled";
$bg_nace["en"]["88.9"]="Other social work activities without accommodation";
$bg_nace["en"]["88.91"]="Child day-care activities";
$bg_nace["en"]["88.99"]="Other social work activities without accommodation n.e.c.";
$bg_nace["en"]["R"]="Arts, entertainment and recreation";
$bg_nace["en"]["90"]="Creative, arts and entertainment activities";
$bg_nace["en"]["90.0"]="Creative, arts and entertainment activities";
$bg_nace["en"]["90.01"]="Performing arts";
$bg_nace["en"]["90.02"]="Support activities to performing arts";
$bg_nace["en"]["90.03"]="Artistic creation";
$bg_nace["en"]["90.04"]="Operation of arts facilities";
$bg_nace["en"]["91"]="Libraries, archives, museums and other cultural activities";
$bg_nace["en"]["91.0"]="Libraries, archives, museums and other cultural activities";
$bg_nace["en"]["91.01"]="Library and archives activities";
$bg_nace["en"]["91.02"]="Museums activities";
$bg_nace["en"]["91.03"]="Operation of historical sites and buildings and similar visitor attractions";
$bg_nace["en"]["91.04"]="Botanical and zoological gardens and nature reserves activities";
$bg_nace["en"]["92"]="Gambling and betting activities";
$bg_nace["en"]["92.0"]="Gambling and betting activities";
$bg_nace["en"]["92.00"]="Gambling and betting activities";
$bg_nace["en"]["93"]="Sports activities and amusement and recreation activities";
$bg_nace["en"]["93.1"]="Sports activities";
$bg_nace["en"]["93.11"]="Operation of sports facilities";
$bg_nace["en"]["93.12"]="Activities of sport clubs";
$bg_nace["en"]["93.13"]="Fitness facilities";
$bg_nace["en"]["93.19"]="Other sports activities";
$bg_nace["en"]["93.2"]="Amusement and recreation activities";
$bg_nace["en"]["93.21"]="Activities of amusement parks and theme parks";
$bg_nace["en"]["93.29"]="Other amusement and recreation activities";
$bg_nace["en"]["S"]="Other services activities";
$bg_nace["en"]["94"]="Activities of membership organisations";
$bg_nace["en"]["94.1"]="Activities of business, employers and professional membership organisations";
$bg_nace["en"]["94.11"]="Activities of business and employers membership organisations";
$bg_nace["en"]["94.12"]="Activities of professional membership organisations";
$bg_nace["en"]["94.2"]="Activities of trade unions";
$bg_nace["en"]["94.20"]="Activities of trade unions";
$bg_nace["en"]["94.9"]="Activities of other membership organisations";
$bg_nace["en"]["94.91"]="Activities of religious organisations";
$bg_nace["en"]["94.92"]="Activities of political organisations";
$bg_nace["en"]["94.99"]="Activities of other membership organisations n.e.c.";
$bg_nace["en"]["95"]="Repair of computers and personal and household goods";
$bg_nace["en"]["95.1"]="Repair of computers and communication equipment";
$bg_nace["en"]["95.11"]="Repair of computers and peripheral equipment";
$bg_nace["en"]["95.12"]="Repair of communication equipment";
$bg_nace["en"]["95.2"]="Repair of personal and household goods";
$bg_nace["en"]["95.21"]="Repair of consumer electronics";
$bg_nace["en"]["95.22"]="Repair of household appliances and home and garden equipment";
$bg_nace["en"]["95.23"]="Repair of footwear and leather goods";
$bg_nace["en"]["95.24"]="Repair of furniture and home furnishings";
$bg_nace["en"]["95.25"]="Repair of watches, clocks and jewellery";
$bg_nace["en"]["95.29"]="Repair of other personal and household goods";
$bg_nace["en"]["96"]="Other personal service activities";
$bg_nace["en"]["96.0"]="Other personal service activities";
$bg_nace["en"]["96.01"]="Washing and (dry-)cleaning of textile and fur products";
$bg_nace["en"]["96.02"]="Hairdressing and other beauty treatment";
$bg_nace["en"]["96.03"]="Funeral and related activities";
$bg_nace["en"]["96.04"]="Physical well-being activities";
$bg_nace["en"]["96.09"]="Other personal service activities n.e.c.";
$bg_nace["en"]["T"]="Activities of households as employers; undifferentiated goods - and services - producing activities of households for own use";
$bg_nace["en"]["97"]="Activities of households as employers of domestic personnel";
$bg_nace["en"]["97.0"]="Activities of households as employers of domestic personnel";
$bg_nace["en"]["97.00"]="Activities of households as employers of domestic personnel";
$bg_nace["en"]["98"]="Undifferentiated goods- and services-producing activities of private households for own use";
$bg_nace["en"]["98.1"]="Undifferentiated goods-producing activities of private households for own use";
$bg_nace["en"]["98.10"]="Undifferentiated goods-producing activities of private households for own use";
$bg_nace["en"]["98.2"]="Undifferentiated service-producing activities of private households for own use";
$bg_nace["en"]["98.20"]="Undifferentiated service-producing activities of private households for own use";
$bg_nace["en"]["U"]="Activities of extraterritorial organisations and bodies";
$bg_nace["en"]["99"]="Activities of extraterritorial organisations and bodies";
$bg_nace["en"]["99.0"]="Activities of extraterritorial organisations and bodies";
$bg_nace["en"]["99.00"]="Activities of extraterritorial organisations and bodies";


$bg_nace["bg"]["A"]="Селско, горско и рибно стопанство";
$bg_nace["bg"]["01"]="Растениевъдство, животновъдство и лов; спомагателни дейности";
$bg_nace["bg"]["01.1"]="Отглеждане на едногодишни растения";
$bg_nace["bg"]["01.11"]="Отглеждане на зърнени (без ориз) и бобови растения и маслодайни семена";
$bg_nace["bg"]["01.12"]="Отглеждане на ориз";
$bg_nace["bg"]["01.13"]="Отглеждане на зеленчуци, дини и пъпеши, кореноплодни и грудкови";
$bg_nace["bg"]["01.14"]="Отглеждане на захарна тръстика";
$bg_nace["bg"]["01.15"]="Отглеждане на тютюн";
$bg_nace["bg"]["01.16"]="Отглеждане на влакнодайни растения";
$bg_nace["bg"]["01.19"]="Отглеждане на други едногодишни растения";
$bg_nace["bg"]["01.2"]="Отглеждане на многогодишни насаждения";
$bg_nace["bg"]["01.21"]="Отглеждане на грозде";
$bg_nace["bg"]["01.22"]="Отглеждане на тропични и субтропични плодове";
$bg_nace["bg"]["01.23"]="Отглеждане на цитрусови плодове";
$bg_nace["bg"]["01.24"]="Отглеждане на семкови и костилкови плодове";
$bg_nace["bg"]["01.25"]="Отглеждане на черупкови, ягодоплодни и други плодове";
$bg_nace["bg"]["01.26"]="Отглеждане на маслосъдържащи плодове";
$bg_nace["bg"]["01.27"]="Отглеждане на растения за напитки";
$bg_nace["bg"]["01.28"]="Отглеждане на подправки, етеричномаслени и лечебни растения";
$bg_nace["bg"]["01.29"]="Отглеждане на други многогодишни насаждения";
$bg_nace["bg"]["01.3"]="Дейности на разсадници, без горските";
$bg_nace["bg"]["01.30"]="Дейности на разсадници, без горските";
$bg_nace["bg"]["01.4"]="Животновъдство";
$bg_nace["bg"]["01.41"]="Отглеждане на едър рогат добитък, с млечно направление";
$bg_nace["bg"]["01.42"]="Отглеждане на едър рогат добитък, с друго направление";
$bg_nace["bg"]["01.43"]="Отглеждане на коне, магарета, мулета и катъри";
$bg_nace["bg"]["01.44"]="Отглеждане на камили, лами и подобни животни";
$bg_nace["bg"]["01.45"]="Отглеждане на дребен рогат добитък";
$bg_nace["bg"]["01.46"]="Отглеждане на свине";
$bg_nace["bg"]["01.47"]="Отглеждане на домашни птици";
$bg_nace["bg"]["01.49"]="Отглеждане на други животни";
$bg_nace["bg"]["01.5"]="Комбинирано растениевъдно-животновъдно стопанствово";
$bg_nace["bg"]["01.50"]="Комбинирано растениевъдно-животновъдно стопанство";
$bg_nace["bg"]["01.6"]="Спомагателни дейности в селското стопанство";
$bg_nace["bg"]["01.61"]="Спомагателни дейности в растениевъдството";
$bg_nace["bg"]["01.62"]="Спомагателни дейности в животновъдството";
$bg_nace["bg"]["01.63"]="Дейности след прибиране на реколтата";
$bg_nace["bg"]["01.64"]="Обработка на семена за посев";
$bg_nace["bg"]["01.7"]="Лов и спомагателни дейности";
$bg_nace["bg"]["01.70"]="Лов и спомагателни дейности";
$bg_nace["bg"]["02"]="Горско стопанство";
$bg_nace["bg"]["02.1"]="Възпроизводство на гори";
$bg_nace["bg"]["02.10"]="Възпроизводство на гори";
$bg_nace["bg"]["02.2"]="Дърводобив";
$bg_nace["bg"]["02.20"]="Дърводобив";
$bg_nace["bg"]["02.3"]="Събиране на диворастящи и недървесни продукти";
$bg_nace["bg"]["02.30"]="Събиране на диворастящи и недървесни продукти";
$bg_nace["bg"]["02.4"]="Спомагателни дейности в горското стопанство";
$bg_nace["bg"]["02.40"]="Спомагателни дейности в горското стопанство";
$bg_nace["bg"]["03"]="Рибно стопанство";
$bg_nace["bg"]["03.1"]="Риболов";
$bg_nace["bg"]["03.11"]="Океански и морски риболов";
$bg_nace["bg"]["03.12"]="Сладководен риболов";
$bg_nace["bg"]["03.2"]="Развъждане и отглеждане на риба и други водни организми";
$bg_nace["bg"]["03.21"]="Развъждане и отглеждане на риба и други водни организми в солени басейни";
$bg_nace["bg"]["03.22"]="Развъждане и отглеждане на риба и други водни организми в сладководни басейни";
$bg_nace["bg"]["B"]="Добивна промишленост";
$bg_nace["bg"]["05"]="Добив на въглища";
$bg_nace["bg"]["05.1"]="Добив на антрацитни и черни въглища";
$bg_nace["bg"]["05.10"]="Добив на антрацитни и черни въглища";
$bg_nace["bg"]["05.2"]="Добив на кафяви и лигнитни въглища";
$bg_nace["bg"]["05.20"]="Добив на кафяви и лигнитни въглища";
$bg_nace["bg"]["06"]="Добив на нефт и природен газ";
$bg_nace["bg"]["06.1"]="Добив на нефт";
$bg_nace["bg"]["06.10"]="Добив на нефт";
$bg_nace["bg"]["06.2"]="Добив на природен газ";
$bg_nace["bg"]["06.20"]="Добив на природен газ";
$bg_nace["bg"]["07"]="Добив на метални руди";
$bg_nace["bg"]["07.1"]="Добив на железни руди";
$bg_nace["bg"]["07.10"]="Добив на железни руди";
$bg_nace["bg"]["07.2"]="Добив на уранови, ториеви и руди на цветни метали";
$bg_nace["bg"]["07.21"]="Добив на уранови и ториеви руди";
$bg_nace["bg"]["07.29"]="Добив на руди на цветни метали";
$bg_nace["bg"]["08"]="Добив на неметални материали и суровини";
$bg_nace["bg"]["08.1"]="Добив на скални материали, пясък и глина";
$bg_nace["bg"]["08.11"]="Добив на строителни и декоративни скални материали, варовик, суров гипс, креда, доломит и шисти";
$bg_nace["bg"]["08.12"]="Добив на трошен камък, чакъл и пясък; добив на глина и каолин";
$bg_nace["bg"]["08.9"]="Добив на други неметални материали и суровини";
$bg_nace["bg"]["08.91"]="Добив на минерални суровини за химическото производство и на естествени торове";
$bg_nace["bg"]["08.92"]="Добив на торф";
$bg_nace["bg"]["08.93"]="Добив на сол";
$bg_nace["bg"]["08.99"]="Добив на други неметални материали и суровини, некласифицирани другаде";
$bg_nace["bg"]["09"]="Спомагателни дейности в добива";
$bg_nace["bg"]["09.1"]="Спомагателни дейности в добива на нефт и природен газ";
$bg_nace["bg"]["09.10"]="Спомагателни дейности в добива на нефт и природен газ";
$bg_nace["bg"]["09.9"]="Спомагателни дейности в добива, без добива на нефт и природен газ";
$bg_nace["bg"]["09.90"]="Спомагателни дейности в добива, без добива на нефт и природен газ";
$bg_nace["bg"]["C"]="Преработваща промишленост";
$bg_nace["bg"]["10"]="Производство на хранителни продукти";
$bg_nace["bg"]["10.1"]="Производство и преработка на месо; производство на месни продукти, без готови ястия";
$bg_nace["bg"]["10.11"]="Производство и преработка на месо, без месо от домашни птици";
$bg_nace["bg"]["10.12"]="Производство и преработка на месо от домашни птици";
$bg_nace["bg"]["10.13"]="Производство на месни продукти, без готови ястия";
$bg_nace["bg"]["10.2"]="Преработка и консервиране на риба и други водни животни, без готови ястия";
$bg_nace["bg"]["10.20"]="Преработка и консервиране на риба и други водни животни, без готови ястия";
$bg_nace["bg"]["10.3"]="Преработка и консервиране на плодове и зеленчуци, без готови ястия";
$bg_nace["bg"]["10.31"]="Преработка и консервиране на картофи";
$bg_nace["bg"]["10.32"]="Производство на плодови и зеленчукови сокове";
$bg_nace["bg"]["10.39"]="Преработка и консервиране на други плодове и зеленчуци, без готови ястия";
$bg_nace["bg"]["10.4"]="Производство на растителни и животински масла и мазнини";
$bg_nace["bg"]["10.41"]="Производство на растителни и животински масла и мазнини, без маргарин";
$bg_nace["bg"]["10.42"]="Производство на маргарин и подобни хранителни мазнини";
$bg_nace["bg"]["10.5"]="Производство на мляко и млечни продукти";
$bg_nace["bg"]["10.51"]="Производство на мляко и млечни продукти, без сладолед";
$bg_nace["bg"]["10.52"]="Производство на сладолед";
$bg_nace["bg"]["10.6"]="Производство на мелничарски продукти, нишесте и нишестени продукти";
$bg_nace["bg"]["10.61"]="Производство на мелничарски продукти";
$bg_nace["bg"]["10.62"]="Производство на нишесте и нишестени продукти";
$bg_nace["bg"]["10.7"]="Производство на хлебни и тестени изделия";
$bg_nace["bg"]["10.71"]="Производство на хляб, хлебни и пресни сладкарски изделия";
$bg_nace["bg"]["10.72"]="Производство на сухари, бисквити и сухи сладкарски изделия";
$bg_nace["bg"]["10.73"]="Производство на макарони, юфка, кус-кус и подобни макаронени изделия";
$bg_nace["bg"]["10.8"]="Производство на други хранителни продукти";
$bg_nace["bg"]["10.81"]="Производство на захар";
$bg_nace["bg"]["10.82"]="Производство на какао, шоколадови и захарни изделия";
$bg_nace["bg"]["10.83"]="Преработка на кафе и чай";
$bg_nace["bg"]["10.84"]="Производство на хранителни подправки и овкусители";
$bg_nace["bg"]["10.85"]="Производство на готови ястия";
$bg_nace["bg"]["10.86"]="Производство на детски, диетични и други хомогенизирани храни";
$bg_nace["bg"]["10.89"]="Производство на други хранителни продукти, некласифицирани другаде";
$bg_nace["bg"]["10.9"]="Производство на готови храни за животни";
$bg_nace["bg"]["10.91"]="Производство на готови храни (фуражи) за селскостопански животни";
$bg_nace["bg"]["10.92"]="Производство на готови храни за домашни любимци";
$bg_nace["bg"]["11"]="Производство на напитки";
$bg_nace["bg"]["11.0"]="Производство на напитки";
$bg_nace["bg"]["11.01"]="Производство на спиртни напитки";
$bg_nace["bg"]["11.02"]="Производство на вина от грозде";
$bg_nace["bg"]["11.03"]="Производство на други ферментирали напитки";
$bg_nace["bg"]["11.04"]="Производство на други недестилирани алкохолни напитки";
$bg_nace["bg"]["11.05"]="Производство на пиво";
$bg_nace["bg"]["11.06"]="Производство на малц";
$bg_nace["bg"]["11.07"]="Производство на безалкохолни напитки, минерални и други бутилирани води";
$bg_nace["bg"]["12"]="Производство на тютюневи изделия";
$bg_nace["bg"]["12.0"]="Производство на тютюневи изделия";
$bg_nace["bg"]["12.00"]="Производство на тютюневи изделия";
$bg_nace["bg"]["13"]="Производство на текстил и изделия от текстил, без облекло";
$bg_nace["bg"]["13.1"]="Подготовка и предене на текстилни влакна";
$bg_nace["bg"]["13.10"]="Подготовка и предене на текстилни влакна";
$bg_nace["bg"]["13.2"]="Производство на тъкани";
$bg_nace["bg"]["13.20"]="Производство на тъкани";
$bg_nace["bg"]["13.3"]="Облагородяване на прежди, платове и облекло";
$bg_nace["bg"]["13.30"]="Облагородяване на прежди, платове и облекло";
$bg_nace["bg"]["13.9"]="Производство на други текстилни изделия";
$bg_nace["bg"]["13.91"]="Производство на плетени платове";
$bg_nace["bg"]["13.92"]="Производство на конфекционирани текстилни изделия, без облекло";
$bg_nace["bg"]["13.93"]="Производство на килими и текстилни подови настилки";
$bg_nace["bg"]["13.94"]="Производство на канапи, въжета, мрежи и изделия от тях";
$bg_nace["bg"]["13.95"]="Производство на нетъкани текстилни изделия, без облекло";
$bg_nace["bg"]["13.96"]="Производство на други текстилни изделия за техническа и производствена употреба";
$bg_nace["bg"]["13.99"]="Производство на други текстилни изделия, некласифицирани другаде";
$bg_nace["bg"]["14"]="Производство на облекло";
$bg_nace["bg"]["14.1"]="Производство на облекло, без кожухарско";
$bg_nace["bg"]["14.11"]="Производство на облекло от обработени меки кожи";
$bg_nace["bg"]["14.12"]="Производство на работно облекло";
$bg_nace["bg"]["14.13"]="Производство на горно облекло, без работно";
$bg_nace["bg"]["14.14"]="Производство на долно облекло";
$bg_nace["bg"]["14.19"]="Производство на друго облекло и допълнения за облекло";
$bg_nace["bg"]["14.2"]="Производство на облекло и изделия от кожухарски кожи";
$bg_nace["bg"]["14.20"]="Производство на облекло и изделия от кожухарски кожи";
$bg_nace["bg"]["14.3"]="Производство на други трикотажни изделия";
$bg_nace["bg"]["14.31"]="Производство на чорапи и чорапогащи";
$bg_nace["bg"]["14.39"]="Производство на класически (машинно или ръчно плетени) пуловери, жилетки и други подобни изделия";
$bg_nace["bg"]["15"]="Обработка на кожи; производство на обувки и други изделия от обработени кожи без косъм";
$bg_nace["bg"]["15.1"]="Обработка на кожи; производство на изделия за пътуване и сарашки изделия";
$bg_nace["bg"]["15.11"]="Обработка на кожи без косъм; обработка и багрене на кожухарски кожи";
$bg_nace["bg"]["15.12"]="Производство на куфари, чанти и други изделия за пътуване, сарашки и седларски изделия";
$bg_nace["bg"]["15.2"]="Производство на обувки";
$bg_nace["bg"]["15.20"]="Производство на обувки";
$bg_nace["bg"]["16"]="Производство на дървен материал и изделия от дървен материал и корк, без мебели; производство на изделия от слама и материали за плетене";
$bg_nace["bg"]["16.1"]="Разкрояване, рендосване и импрегниране на дървен материал";
$bg_nace["bg"]["16.10"]="Разкрояване, рендосване и импрегниране на дървен материал";
$bg_nace["bg"]["16.2"]="Производство на изделия от дървен материал, корк, слама и материали за плетене";
$bg_nace["bg"]["16.21"]="Производство на фурнир и дървесни плочи";
$bg_nace["bg"]["16.22"]="Производство на сглобени паркетни плочи";
$bg_nace["bg"]["16.23"]="Производство на дограма и други изделия от дървен материал за строителството";
$bg_nace["bg"]["16.24"]="Производство на опаковки от дървен материал";
$bg_nace["bg"]["16.29"]="Производство на други изделия от дървен материал; производство на изделия от корк, слама и материали за плетене";
$bg_nace["bg"]["17"]="Производство на хартия, картон и изделия от хартия и картон";
$bg_nace["bg"]["17.1"]="Производство на влакнести полуфабрикати, хартия и картон";
$bg_nace["bg"]["17.11"]="Производство на влакнести полуфабрикати";
$bg_nace["bg"]["17.12"]="Производство на хартия и картон";
$bg_nace["bg"]["17.2"]="Производство на изделия от хартия и картон";
$bg_nace["bg"]["17.21"]="Производство на вълнообразен картон и опаковки от хартия и картон";
$bg_nace["bg"]["17.22"]="Производство на домакински, санитарно-хигиенни и тоалетни изделия от хартия и картон";
$bg_nace["bg"]["17.23"]="Производство на канцеларски материали от хартия и картон";
$bg_nace["bg"]["17.24"]="Производство на тапети и подобни стенни облицовки";
$bg_nace["bg"]["17.29"]="Производство на други изделия от хартия и картон";
$bg_nace["bg"]["18"]="Печатна дейност и възпроизвеждане на записани носители";
$bg_nace["bg"]["18.1"]="Печатна дейност";
$bg_nace["bg"]["18.11"]="Печатане на вестници";
$bg_nace["bg"]["18.12"]="Печатане на други издания и печатни продукти";
$bg_nace["bg"]["18.13"]="Предпечатна подготовка";
$bg_nace["bg"]["18.14"]="Подвързване и подобни дейности, свързани с печатането";
$bg_nace["bg"]["18.2"]="Възпроизвеждане на записани носители";
$bg_nace["bg"]["18.20"]="Възпроизвеждане на записани носители";
$bg_nace["bg"]["19"]="Производство на кокс и рафинирани нефтопродукти";
$bg_nace["bg"]["19.1"]="Производство на кокс и продукти на коксуването";
$bg_nace["bg"]["19.10"]="Производство на кокс и продукти на коксуването";
$bg_nace["bg"]["19.2"]="Производство на рафинирани нефтопродукти и брикети от въглища и торф";
$bg_nace["bg"]["19.20"]="Производство на рафинирани нефтопродукти и брикети от въглища и торф";
$bg_nace["bg"]["20"]="Производство на химични продукти";
$bg_nace["bg"]["20.1"]="Производство на основни химични вещества";
$bg_nace["bg"]["20.11"]="Производство на промишлени газове";
$bg_nace["bg"]["20.12"]="Производство на багрила и пигменти";
$bg_nace["bg"]["20.13"]="Производство на други основни неорганични химични вещества";
$bg_nace["bg"]["20.14"]="Производство на други основни органични химични вещества";
$bg_nace["bg"]["20.15"]="Производство на азотни съединения и торове";
$bg_nace["bg"]["20.16"]="Производство на полимери в първични форми";
$bg_nace["bg"]["20.17"]="Производство на синтетичен каучук в първични форми";
$bg_nace["bg"]["20.2"]="Производство на пестициди и други агрохимикали";
$bg_nace["bg"]["20.20"]="Производство на пестициди и други агрохимикали";
$bg_nace["bg"]["20.3"]="Производство на бои, лакове и подобни продукти, печатарско мастило и китове";
$bg_nace["bg"]["20.30"]="Производство на бои, лакове и подобни продукти, печатарско мастило и китове";
$bg_nace["bg"]["20.4"]="Производство на почистващи, миещи, тоалетни и козметични препарати";
$bg_nace["bg"]["20.41"]="Производство на сапун, миещи, почистващи и полиращи препарати";
$bg_nace["bg"]["20.42"]="Производство на парфюми и тоалетни продукти";
$bg_nace["bg"]["20.5"]="Производство на други химични продукти";
$bg_nace["bg"]["20.51"]="Производство на експлозиви";
$bg_nace["bg"]["20.52"]="Производство на лепила";
$bg_nace["bg"]["20.53"]="Производство на етерични масла";
$bg_nace["bg"]["20.59"]="Производство на други химични продукти, некласифицирани другаде";
$bg_nace["bg"]["20.6"]="Производство на изкуствени и синтетични влакна";
$bg_nace["bg"]["20.60"]="Производство на изкуствени и синтетични влакна";
$bg_nace["bg"]["21"]="Производство на лекарствени вещества и продукти";
$bg_nace["bg"]["21.1"]="Производство на лекарствени вещества";
$bg_nace["bg"]["21.10"]="Производство на лекарствени вещества";
$bg_nace["bg"]["21.2"]="Производство на лекарствени продукти";
$bg_nace["bg"]["21.20"]="Производство на лекарствени продукти";
$bg_nace["bg"]["22"]="Производство на изделия от каучук и пластмаси";
$bg_nace["bg"]["22.1"]="Производство на изделия от каучук";
$bg_nace["bg"]["22.11"]="Производство на външни и вътрешни гуми; регенериране на пневматични гуми";
$bg_nace["bg"]["22.19"]="Производство на други изделия от каучук";
$bg_nace["bg"]["22.2"]="Производство на изделия от пластмаси";
$bg_nace["bg"]["22.21"]="Производство на листове, плочи, тръби и профили, от пластмаси";
$bg_nace["bg"]["22.22"]="Производство на опаковки от пластмаси";
$bg_nace["bg"]["22.23"]="Производство на дограма и други изделия от пластмаси за строителството";
$bg_nace["bg"]["22.29"]="Производство на други изделия от пластмаси";
$bg_nace["bg"]["23"]="Производство на изделия от други неметални минерални суровини";
$bg_nace["bg"]["23.1"]="Производство на стъкло и изделия от стъкло";
$bg_nace["bg"]["23.11"]="Производство на необработено плоско стъкло";
$bg_nace["bg"]["23.12"]="Формуване и обработване на плоско стъкло";
$bg_nace["bg"]["23.13"]="Производство на опаковки и домакинско стъкло";
$bg_nace["bg"]["23.14"]="Производство на стъклени влакна";
$bg_nace["bg"]["23.19"]="Производство и обработване на други изделия от стъкло, вкл. за техническа употреба";
$bg_nace["bg"]["23.2"]="Производство на огнеупорни изделия";
$bg_nace["bg"]["23.20"]="Производство на огнеупорни изделия";
$bg_nace["bg"]["23.3"]="Производство на керамични изделия за строителството";
$bg_nace["bg"]["23.31"]="Производство на керамични плочки";
$bg_nace["bg"]["23.32"]="Производство на тухли, керемиди и други изделия от печена глина за строителството";
$bg_nace["bg"]["23.4"]="Производство на други порцеланови и керамични изделия";
$bg_nace["bg"]["23.41"]="Производство на домакински порцелан, декоративни изделия от порцелан и други керамични материали";
$bg_nace["bg"]["23.42"]="Производство на санитарна керамика";
$bg_nace["bg"]["23.43"]="Производство на керамични изолатори";
$bg_nace["bg"]["23.44"]="Производство на друга техническа керамика";
$bg_nace["bg"]["23.49"]="Производство на други керамични изделия, некласифицирани другаде";
$bg_nace["bg"]["23.5"]="Производство на цимент, вар и гипс";
$bg_nace["bg"]["23.51"]="Производство на цимент";
$bg_nace["bg"]["23.52"]="Производство на вар и гипс";
$bg_nace["bg"]["23.6"]="Производство на изделия от бетон, гипс и цимент";
$bg_nace["bg"]["23.61"]="Производство на изделия от бетон за строителството";
$bg_nace["bg"]["23.62"]="Производство на изделия от гипс за строителството";
$bg_nace["bg"]["23.63"]="Производство на готови бетонови смеси";
$bg_nace["bg"]["23.64"]="Производство на неогнеупорни строителни разтвори";
$bg_nace["bg"]["23.65"]="Производство на влакнесто-циментови изделия";
$bg_nace["bg"]["23.69"]="Производство на други изделия от бетон, гипс и цимент";
$bg_nace["bg"]["23.7"]="Рязане, профилиране и обработване на строителни и декоративни скални материали";
$bg_nace["bg"]["23.70"]="Рязане, профилиране и обработване на строителни и декоративни скални материали";
$bg_nace["bg"]["23.9"]="Производство на изделия от други неметални минерали";
$bg_nace["bg"]["23.91"]="Производство на абразивни изделия";
$bg_nace["bg"]["23.99"]="Производство на изделия от други неметални минерали, некласифицирани другаде";
$bg_nace["bg"]["24"]="Производство на основни метали";
$bg_nace["bg"]["24.1"]="Производство на чугун, стомана и феросплави";
$bg_nace["bg"]["24.10"]="Производство на чугун, стомана и феросплави";
$bg_nace["bg"]["24.2"]="Производство на тръби, кухи профили и фитинги за тях от стомана";
$bg_nace["bg"]["24.20"]="Производство на тръби, кухи профили и фитинги за тях от стомана";
$bg_nace["bg"]["24.3"]="Производство на други продукти при първичната преработка на стомана";
$bg_nace["bg"]["24.31"]="Студено изтегляне на пръти";
$bg_nace["bg"]["24.32"]="Студено валцуване на тесни ленти";
$bg_nace["bg"]["24.33"]="Студено формуване или прегъване на продукти от стомана";
$bg_nace["bg"]["24.34"]="Студено изтегляне на тел";
$bg_nace["bg"]["24.4"]="Производство на основни благородни и други цветни метали";
$bg_nace["bg"]["24.41"]="Производство на благородни метали";
$bg_nace["bg"]["24.42"]="Производство на алуминий";
$bg_nace["bg"]["24.43"]="Производство на олово, цинк, калай";
$bg_nace["bg"]["24.44"]="Производство на мед";
$bg_nace["bg"]["24.45"]="Производство на други цветни метали";
$bg_nace["bg"]["24.46"]="Преработка на ядрено гориво";
$bg_nace["bg"]["24.5"]="Леене на метали";
$bg_nace["bg"]["24.51"]="Леене на чугун";
$bg_nace["bg"]["24.52"]="Леене на стомана";
$bg_nace["bg"]["24.53"]="Леене на леки метали";
$bg_nace["bg"]["24.54"]="Леене на други метали";
$bg_nace["bg"]["25"]="Производство на метални изделия, без машини и оборудване";
$bg_nace["bg"]["25.1"]="Производство на метални изделия за строителството";
$bg_nace["bg"]["25.11"]="Производство на метални конструкции и части от тях";
$bg_nace["bg"]["25.12"]="Производство на метална дограма";
$bg_nace["bg"]["25.2"]="Производство на котли за централно отопление и радиатори с неелектрическо загряване; производство на цистерни, резервоари и контейнери от метал";
$bg_nace["bg"]["25.21"]="Производство на котли за централно отопление и радиатори с неелектрическо загряване";
$bg_nace["bg"]["25.29"]="Производство на цистерни, резервоари и контейнери от метал";
$bg_nace["bg"]["25.3"]="Производство на парни котли, без котли за централно отопление";
$bg_nace["bg"]["25.30"]="Производство на парни котли, без котли за централно отопление";
$bg_nace["bg"]["25.4"]="Производство на въоръжение и боеприпаси";
$bg_nace["bg"]["25.40"]="Производство на въоръжение и боеприпаси";
$bg_nace["bg"]["25.5"]="Коване, щамповане и валцуване на метал; прахова металургия";
$bg_nace["bg"]["25.50"]="Коване, щамповане и валцуване на метал; прахова металургия";
$bg_nace["bg"]["25.6"]="Друго металообработване";
$bg_nace["bg"]["25.61"]="Повърхностно обработване и нанасяне на покритие върху метал";
$bg_nace["bg"]["25.62"]="Механично обработване на метал";
$bg_nace["bg"]["25.7"]="Производство на кухненски прибори, инструменти и железария";
$bg_nace["bg"]["25.71"]="Производство на кухненски прибори и ножарски изделия";
$bg_nace["bg"]["25.72"]="Производство на строителен и мебелен обков";
$bg_nace["bg"]["25.73"]="Производство на сечива и инструменти за ръчна работа";
$bg_nace["bg"]["25.9"]="Производство на други метални изделия";
$bg_nace["bg"]["25.91"]="Производство на варели и подобни съдове от стомана";
$bg_nace["bg"]["25.92"]="Производство на леки опаковки от метал";
$bg_nace["bg"]["25.93"]="Производство на изделия от тел, вериги и пружини";
$bg_nace["bg"]["25.94"]="Производство на свързващи елементи";
$bg_nace["bg"]["25.99"]="Производство на други метални изделия, некласифицирани другаде";
$bg_nace["bg"]["26"]="Производство на компютърна и комуникационна техника, електронни и оптични продукти";
$bg_nace["bg"]["26.1"]="Производство на електронни елементи и печатни платки";
$bg_nace["bg"]["26.11"]="Производство на електронни елементи";
$bg_nace["bg"]["26.12"]="Производство на монтирани печатни платки";
$bg_nace["bg"]["26.2"]="Производство на компютърна техника";
$bg_nace["bg"]["26.20"]="Производство на компютърна техника";
$bg_nace["bg"]["26.3"]="Производство на радио-, телевизионна и далекосъобщителна техника";
$bg_nace["bg"]["26.30"]="Производство на радио-, телевизионна и далекосъобщителна техника";
$bg_nace["bg"]["26.4"]="Производство на битова електроника";
$bg_nace["bg"]["26.40"]="Производство на битова електроника";
$bg_nace["bg"]["26.5"]="Производство на уреди и апарати за измерване, изпитване и навигация; производство на часовници";
$bg_nace["bg"]["26.51"]="Производство на уреди и апарати за измерване, изпитване и навигация";
$bg_nace["bg"]["26.52"]="Производство на часовници и часовникови механизми";
$bg_nace["bg"]["26.6"]="Производство на излъчващи електромедицински и терапевтични апарати";
$bg_nace["bg"]["26.60"]="Производство на излъчващи електромедицински и терапевтични апарати";
$bg_nace["bg"]["26.7"]="Производство на оптични уреди и елементи и фотографска техника";
$bg_nace["bg"]["26.70"]="Производство на оптични уреди и елементи и фотографска техника";
$bg_nace["bg"]["26.8"]="Производство на магнитни и оптични носители, незаписани";
$bg_nace["bg"]["26.80"]="Производство на магнитни и оптични носители, незаписани";
$bg_nace["bg"]["27"]="Производство на електрически съоръжения";
$bg_nace["bg"]["27.1"]="Производство на електрически двигатели, генератори и трансформатори и апарати за управление и разпределение на електрическа енергия";
$bg_nace["bg"]["27.11"]="Производство на електрически двигатели, генератори и трансформатори";
$bg_nace["bg"]["27.12"]="Производство на апарати за управление и разпределение на електрическа енергия";
$bg_nace["bg"]["27.2"]="Производство на акумулаторни батерии и акумулатори";
$bg_nace["bg"]["27.20"]="Производство на акумулаторни батерии и акумулатори";
$bg_nace["bg"]["27.3"]="Производство на изолирани проводници и електроинсталационни изделия";
$bg_nace["bg"]["27.31"]="Производство на кабели от оптични влакна";
$bg_nace["bg"]["27.32"]="Производство на други електрически и електронни проводници и кабели";
$bg_nace["bg"]["27.33"]="Производство на електроинсталационни изделия";
$bg_nace["bg"]["27.4"]="Производство на лампи и осветители";
$bg_nace["bg"]["27.40"]="Производство на лампи и осветители";
$bg_nace["bg"]["27.5"]="Производство на битови уреди";
$bg_nace["bg"]["27.51"]="Производство на битови електроуреди";
$bg_nace["bg"]["27.52"]="Производство на неелектрически битови уреди";
$bg_nace["bg"]["27.9"]="Производство на други електрически съоръжения";
$bg_nace["bg"]["27.90"]="Производство на други електрически съоръжения";
$bg_nace["bg"]["28"]="Производство на машини и оборудване, с общо и специално предназначение";
$bg_nace["bg"]["28.1"]="Производство на машини с общо предназначение";
$bg_nace["bg"]["28.11"]="Производство на турбини и двигатели, без авиационни, автомобилни и мотоциклетни";
$bg_nace["bg"]["28.12"]="Производство на хидравлични помпи, хидравлични и пневматични двигатели";
$bg_nace["bg"]["28.13"]="Производство на други помпи и компресори";
$bg_nace["bg"]["28.14"]="Производство на арматурни изделия";
$bg_nace["bg"]["28.15"]="Производство на лагери, предавки и съединители";
$bg_nace["bg"]["28.2"]="Производство на други машини с общо предназначение";
$bg_nace["bg"]["28.21"]="Производство на пещи и горелки";
$bg_nace["bg"]["28.22"]="Производство на подемно-транспортни машини";
$bg_nace["bg"]["28.23"]="Производство на офис техника, без компютърната";
$bg_nace["bg"]["28.24"]="Производство на преносими инструменти с вграден двигател";
$bg_nace["bg"]["28.25"]="Производство на промишлено хладилно и вентилационно оборудване";
$bg_nace["bg"]["28.29"]="Производство на други машини с общо предназначение, некласифицирани другаде";
$bg_nace["bg"]["28.3"]="Производство на машини за селското и горското стопанство";
$bg_nace["bg"]["28.30"]="Производство на машини за селското и горското стопанство";
$bg_nace["bg"]["28.4"]="Производство на обработващи машини";
$bg_nace["bg"]["28.41"]="Производство на машини за обработка на метал";
$bg_nace["bg"]["28.49"]="Производство на други обработващи машини";
$bg_nace["bg"]["28.9"]="Производство на други машини със специално предназначение";
$bg_nace["bg"]["28.91"]="Производство на машини и оборудване за металургията и леярството";
$bg_nace["bg"]["28.92"]="Производство на машини за добива и строителството";
$bg_nace["bg"]["28.93"]="Производство на машини и оборудване за преработка на храни, напитки и тютюн";
$bg_nace["bg"]["28.94"]="Производство на машини за текстил, облекло, кожи и кожени изделия";
$bg_nace["bg"]["28.95"]="Производство на машини за хартия, картон и изделия от хартия и картон";
$bg_nace["bg"]["28.96"]="Производство на машини за каучук или пластмаси";
$bg_nace["bg"]["28.99"]="Производство на други машини със специално предназначение, некласифицирани другаде";
$bg_nace["bg"]["29"]="Производство на автомобили, ремаркета и полуремаркета";
$bg_nace["bg"]["29.1"]="Производство на автомобили и техните двигатели";
$bg_nace["bg"]["29.10"]="Производство на автомобили и техните двигатели";
$bg_nace["bg"]["29.2"]="Производство на купета и каросерии за автомобили; производство на ремаркета и полуремаркета";
$bg_nace["bg"]["29.20"]="Производство на купета и каросерии за автомобили; производство на ремаркета и полуремаркета";
$bg_nace["bg"]["29.3"]="Производство на части и принадлежности за автомобили";
$bg_nace["bg"]["29.31"]="Производство на електронни и електрически части и устройства за автомобили";
$bg_nace["bg"]["29.32"]="Производство на други части и принадлежности за автомобили";
$bg_nace["bg"]["30"]="Производство на превозни средства, без автомобили";
$bg_nace["bg"]["30.1"]="Строителство на плавателни съдове";
$bg_nace["bg"]["30.11"]="Строителство на плавателни съдове, без тези за отдих";
$bg_nace["bg"]["30.12"]="Строителство на плавателни съдове за отдих";
$bg_nace["bg"]["30.2"]="Производство на локомотиви, мотриси и вагони";
$bg_nace["bg"]["30.20"]="Производство на локомотиви, мотриси и вагони";
$bg_nace["bg"]["30.3"]="Производство на въздухоплавателни и космически средства и техните двигатели";
$bg_nace["bg"]["30.30"]="Производство на въздухоплавателни и космически средства и техните двигатели";
$bg_nace["bg"]["30.4"]="Производство на бойни бронирани транспортни машини";
$bg_nace["bg"]["30.40"]="Производство на бойни бронирани транспортни машини";
$bg_nace["bg"]["30.9"]="Производство на други превозни средства";
$bg_nace["bg"]["30.91"]="Производство на мотоциклети и техните двигатели";
$bg_nace["bg"]["30.92"]="Производство на велосипеди и инвалидни колички";
$bg_nace["bg"]["30.99"]="Производство на други превозни средства, некласифицирани другаде";
$bg_nace["bg"]["31"]="Производство на мебели";
$bg_nace["bg"]["31.0"]="Производство на мебели";
$bg_nace["bg"]["31.01"]="Производство на мебели за офиси и магазини";
$bg_nace["bg"]["31.02"]="Производство на кухненски мебели";
$bg_nace["bg"]["31.03"]="Производство на матраци и дюшеци";
$bg_nace["bg"]["31.09"]="Производство на други мебели";
$bg_nace["bg"]["32"]="Производство, некласифицирано другаде";
$bg_nace["bg"]["32.1"]="Производство на бижута и подобни изделия";
$bg_nace["bg"]["32.11"]="Сечене на монети";
$bg_nace["bg"]["32.12"]="Производство на бижутерийни и подобни изделия от благородни метали";
$bg_nace["bg"]["32.13"]="Производство на бижута имитация";
$bg_nace["bg"]["32.2"]="Производство на музикални инструменти";
$bg_nace["bg"]["32.20"]="Производство на музикални инструменти";
$bg_nace["bg"]["32.3"]="Производство на спортни стоки";
$bg_nace["bg"]["32.30"]="Производство на спортни стоки";
$bg_nace["bg"]["32.4"]="Производство на игри и детски играчки";
$bg_nace["bg"]["32.40"]="Производство на игри и детски играчки";
$bg_nace["bg"]["32.5"]="Производство на медицински и зъболекарски инструменти и средства";
$bg_nace["bg"]["32.50"]="Производство на медицински и зъболекарски инструменти и средства";
$bg_nace["bg"]["32.9"]="Разнообразни производства, некласифицирани другаде";
$bg_nace["bg"]["32.91"]="Производство на метли и четки";
$bg_nace["bg"]["32.99"]="Други разнообразни производства, некласифицирани другаде";
$bg_nace["bg"]["33"]="Ремонт и инсталиране на машини и оборудване";
$bg_nace["bg"]["33.1"]="Ремонт на метални изделия, машини и оборудване";
$bg_nace["bg"]["33.11"]="Ремонт на метални изделия";
$bg_nace["bg"]["33.12"]="Ремонт на машини и оборудване, с общо и специално предназначение";
$bg_nace["bg"]["33.13"]="Ремонт на електронни и оптични уреди и апарати";
$bg_nace["bg"]["33.14"]="Ремонт на електрически съоръжения";
$bg_nace["bg"]["33.15"]="Ремонт и поддържане на плавателни съдове";
$bg_nace["bg"]["33.16"]="Ремонт и поддържане на въздухоплавателни и космически средства";
$bg_nace["bg"]["33.17"]="Ремонт и поддържане на други превозни средства";
$bg_nace["bg"]["33.19"]="Ремонт на друго оборудване";
$bg_nace["bg"]["33.2"]="Инсталиране на машини и оборудване";
$bg_nace["bg"]["33.20"]="Инсталиране на машини и оборудване";
$bg_nace["bg"]["D"]="Производство и разпределение на електрическа и топлинна енергия и на газообразни горива";
$bg_nace["bg"]["35"]="Производство и разпределение на електрическа и топлинна енергия и на газообразни горива";
$bg_nace["bg"]["35.1"]="Производство, пренос и разпределение на електрическа енергия";
$bg_nace["bg"]["35.11"]="Производство на електрическа енергия";
$bg_nace["bg"]["35.12"]="Пренос на електрическа енергия";
$bg_nace["bg"]["35.13"]="Разпределение на електрическа енергия";
$bg_nace["bg"]["35.14"]="Търговия с електрическа енергия";
$bg_nace["bg"]["35.2"]="Производство и разпределение на газообразни горива по газоразпределителните мрежи";
$bg_nace["bg"]["35.21"]="Производство на газообразни горива";
$bg_nace["bg"]["35.22"]="Разпределение на газообразни горива по газоразпределителните мрежи";
$bg_nace["bg"]["35.23"]="Търговия с газообразни горива по газоразпределителните мрежи";
$bg_nace["bg"]["35.3"]="Производство и разпределение на топлинна енергия";
$bg_nace["bg"]["35.30"]="Производство и разпределение на топлинна енергия";
$bg_nace["bg"]["E"]="Доставяне на води; канализационни услуги, управление на отпадъци и възстановяване";
$bg_nace["bg"]["36"]="Събиране, пречистване и доставяне на води";
$bg_nace["bg"]["36.0"]="Събиране, пречистване и доставяне на води";
$bg_nace["bg"]["36.00"]="Събиране, пречистване и доставяне на води";
$bg_nace["bg"]["37"]="Събиране, отвеждане и пречистване на отпадъчни води";
$bg_nace["bg"]["37.0"]="Събиране, отвеждане и пречистване на отпадъчни води";
$bg_nace["bg"]["37.00"]="Събиране, отвеждане и пречистване на отпадъчни води";
$bg_nace["bg"]["38"]="Събиране и обезвреждане на отпадъци; рециклиране на материали";
$bg_nace["bg"]["38.1"]="Събиране на отпадъци";
$bg_nace["bg"]["38.11"]="Събиране на неопасни отпадъци";
$bg_nace["bg"]["38.12"]="Събиране на опасни отпадъци";
$bg_nace["bg"]["38.2"]="Обработване и обезвреждане на отпадъци";
$bg_nace["bg"]["38.21"]="Обработване и обезвреждане на неопасни отпадъци";
$bg_nace["bg"]["38.22"]="Обработване и обезвреждане на опасни отпадъци";
$bg_nace["bg"]["38.3"]="Рециклиране на материали";
$bg_nace["bg"]["38.31"]="Разкомплектоване на отпадъци";
$bg_nace["bg"]["38.32"]="Рециклиране на сортирани отпадъци";
$bg_nace["bg"]["39"]="Възстановяване и други услуги по управление на отпадъци";
$bg_nace["bg"]["39.0"]="Възстановяване и други услуги по управление на отпадъци";
$bg_nace["bg"]["39.00"]="Възстановяване и други услуги по управление на отпадъци";
$bg_nace["bg"]["F"]="Строителство";
$bg_nace["bg"]["41"]="Строителство на сгради";
$bg_nace["bg"]["41.1"]="Дейности по реализиране на инвестиционни проекти за сгради";
$bg_nace["bg"]["41.10"]="Дейности по реализиране на инвестиционни проекти за сгради";
$bg_nace["bg"]["41.2"]="Строителство на жилищни и нежилищни сгради";
$bg_nace["bg"]["41.20"]="Строителство на жилищни и нежилищни сгради";
$bg_nace["bg"]["42"]="Строителство на съоръжения";
$bg_nace["bg"]["42.1"]="Строителство на пътища, вкл. релсови";
$bg_nace["bg"]["42.11"]="Строителство на автомагистрали, пътища и самолетни писти";
$bg_nace["bg"]["42.12"]="Строителство на подземни и надземни релсови пътища";
$bg_nace["bg"]["42.13"]="Строителство на мостове и тунели";
$bg_nace["bg"]["42.2"]="Строителство на преносни и разпределителни проводи и мрежи";
$bg_nace["bg"]["42.21"]="Строителство на преносни и разпределителни тръбопроводи";
$bg_nace["bg"]["42.22"]="Строителство на преносни и разпределителни електрически и далекосъобщителни мрежи";
$bg_nace["bg"]["42.9"]="Строителство на други съоръжения";
$bg_nace["bg"]["42.91"]="Строителство на хидротехнически съоръжения";
$bg_nace["bg"]["42.99"]="Строителство на други съоръжения, некласифицирани другаде";
$bg_nace["bg"]["43"]="Специализирани строителни дейности";
$bg_nace["bg"]["43.1"]="Разчистване и подготовка на строителната площадка";
$bg_nace["bg"]["43.11"]="Събаряне и разрушаване";
$bg_nace["bg"]["43.12"]="Земни работи";
$bg_nace["bg"]["43.13"]="Сондиране и пробиване";
$bg_nace["bg"]["43.2"]="Изграждане на инсталации";
$bg_nace["bg"]["43.21"]="Изграждане на електрически инсталации";
$bg_nace["bg"]["43.22"]="Изграждане на водопроводни, канализационни, отоплителни и климатични инсталации";
$bg_nace["bg"]["43.29"]="Изграждане на други инсталации";
$bg_nace["bg"]["43.3"]="Довършителни строителни дейности";
$bg_nace["bg"]["43.31"]="Полагане на мазилки";
$bg_nace["bg"]["43.32"]="Монтаж на дограма и дърводелски работи";
$bg_nace["bg"]["43.33"]="Полагане на облицовки и настилки";
$bg_nace["bg"]["43.34"]="Боядисване и стъклопоставяне";
$bg_nace["bg"]["43.39"]="Други довършителни строителни дейности";
$bg_nace["bg"]["43.9"]="Други специализирани строителни дейности";
$bg_nace["bg"]["43.91"]="Покривни работи";
$bg_nace["bg"]["43.99"]="Други специализирани строителни дейности, некласифицирани другаде";
$bg_nace["bg"]["G"]="Търговия; ремонт на автомобили и мотоциклети";
$bg_nace["bg"]["45"]="Търговия на едро и дребно с автомобили и мотоциклети, техническо обслужване и ремонт";
$bg_nace["bg"]["45.1"]="Търговия с автомобили";
$bg_nace["bg"]["45.11"]="Търговия с леки и лекотоварни автомобили до 3.5 т";
$bg_nace["bg"]["45.19"]="Търговия с други автомобили над 3.5 т";
$bg_nace["bg"]["45.2"]="Техническо обслужване и ремонт на автомобили";
$bg_nace["bg"]["45.20"]="Техническо обслужване и ремонт на автомобили";
$bg_nace["bg"]["45.3"]="Търговия с части и принадлежности за автомобили";
$bg_nace["bg"]["45.31"]="Търговия на едро с части и принадлежности за автомобили";
$bg_nace["bg"]["45.32"]="Търговия на дребно с части и принадлежности за автомобили";
$bg_nace["bg"]["45.4"]="Търговия с мотоциклети и с части за тях, техническо обслужване и ремонт на мотоциклети";
$bg_nace["bg"]["45.40"]="Търговия с мотоциклети и с части за тях, техническо обслужване и ремонт на мотоциклети";
$bg_nace["bg"]["46"]="Търговия на едро, без търговията с автомобили и мотоциклети";
$bg_nace["bg"]["46.1"]="Търговия на едро чрез посредничество";
$bg_nace["bg"]["46.11"]="Търговско посредничество със селскостопански суровини, живи животни, текстилни суровини и полуфабрикати";
$bg_nace["bg"]["46.12"]="Търговско посредничество с горива, руди, метали и химични продукти";
$bg_nace["bg"]["46.13"]="Търговско посредничество с дървен материал и материали за строителството";
$bg_nace["bg"]["46.14"]="Търговско посредничество с машини, промишлено оборудване, кораби и самолети";
$bg_nace["bg"]["46.15"]="Търговско посредничество с мебели, стоки за бита, железария и метални изделия";
$bg_nace["bg"]["46.16"]="Търговско посредничество с текстил, облекло, обувки и кожени изделия";
$bg_nace["bg"]["46.17"]="Търговско посредничество с хранителни стоки, напитки и тютюневи изделия";
$bg_nace["bg"]["46.18"]="Специализирано търговско посредничество с други групи стоки";
$bg_nace["bg"]["46.19"]="Неспециализирано търговско посредничество с разнообразни стоки";
$bg_nace["bg"]["46.2"]="Търговия на едро със селскостопански суровини и живи животни";
$bg_nace["bg"]["46.21"]="Търговия на едро със зърно, семена, фуражи и необработен тютюн";
$bg_nace["bg"]["46.22"]="Търговия на едро с цветя и растения";
$bg_nace["bg"]["46.23"]="Търговия на едро с живи животни";
$bg_nace["bg"]["46.24"]="Търговия на едро със сурови и обработени кожи";
$bg_nace["bg"]["46.3"]="Търговия на едро с хранителни стоки, напитки и тютюневи изделия";
$bg_nace["bg"]["46.31"]="Търговия на едро с плодове и зеленчуци";
$bg_nace["bg"]["46.32"]="Търговия на едро с месо и месни продукти";
$bg_nace["bg"]["46.33"]="Търговия на едро с мляко и млечни продукти, яйца, хранителни масла и мазнини";
$bg_nace["bg"]["46.34"]="Търговия на едро с напитки";
$bg_nace["bg"]["46.35"]="Търговия на едро с тютюневи изделия";
$bg_nace["bg"]["46.36"]="Търговия на едро със захар, захарни и шоколадови изделия";
$bg_nace["bg"]["46.37"]="Търговия на едро с кафе, чай, какао и подправки";
$bg_nace["bg"]["46.38"]="Специализирана търговия на едро с други хранителни стоки";
$bg_nace["bg"]["46.39"]="Неспециализирана търговия на едро с хранителни стоки, напитки и тютюневи изделия";
$bg_nace["bg"]["46.4"]="Търговия на едро с нехранителни потребителски стоки";
$bg_nace["bg"]["46.41"]="Търговия на едро с текстил и галантерийни стоки";
$bg_nace["bg"]["46.42"]="Търговия на едро с облекло и обувки";
$bg_nace["bg"]["46.43"]="Търговия на едро с битова електроника и електроуреди";
$bg_nace["bg"]["46.44"]="Търговия на едро с порцеланови и стъкларски изделия и почистващи препарати";
$bg_nace["bg"]["46.45"]="Търговия на едро с парфюмерийни и козметични стоки";
$bg_nace["bg"]["46.46"]="Търговия на едро с фармацевтични стоки, медицинска техника и апаратура";
$bg_nace["bg"]["46.47"]="Търговия на едро с мебели, килими и осветители";
$bg_nace["bg"]["46.48"]="Търговия на едро с часовници и бижутерия";
$bg_nace["bg"]["46.49"]="Търговия на едро с други нехранителни потребителски стоки";
$bg_nace["bg"]["46.5"]="Търговия на едро с компютърна и комуникационна техника";
$bg_nace["bg"]["46.51"]="Търговия на едро с компютри, периферни устройства за тях и програмни продукти";
$bg_nace["bg"]["46.52"]="Търговия на едро с електронни елементи и комуникационна техника";
$bg_nace["bg"]["46.6"]="Търговия на едро с други машини и оборудване със стопанско предназначение и части за тях";
$bg_nace["bg"]["46.61"]="Търговия на едро с машини и обрудване за селското и горското стопанство и части за тях";
$bg_nace["bg"]["46.62"]="Търговия на едро с обработващи машини и части за тях";
$bg_nace["bg"]["46.63"]="Търговия на едро с машини и оборудване за добива и строителството и части за тях";
$bg_nace["bg"]["46.64"]="Търговия на едро с машини за производство на текстил, облекло и кожени изделия и части за тях";
$bg_nace["bg"]["46.65"]="Търговия на едро с офис мебели";
$bg_nace["bg"]["46.66"]="Търговия на едро с друга офис техника, без компютри";
$bg_nace["bg"]["46.69"]="Търговия на едро с други машини и оборудване със стопанско предназначение, некласифицирана другаде и части за тях";
$bg_nace["bg"]["46.7"]="Търговия на едро с неселскостопански междинни продукти, отпадъци и скрап";
$bg_nace["bg"]["46.71"]="Търговия на едро с твърди, течни и газообразни горива и подобни продукти";
$bg_nace["bg"]["46.72"]="Търговия на едро с метали и руди";
$bg_nace["bg"]["46.73"]="Търговия на едро с дървен материал, материали за строителството и санитарно оборудване";
$bg_nace["bg"]["46.74"]="Търговия на едро с железария и арматурни изделия";
$bg_nace["bg"]["46.75"]="Търговия на едро с химични вещества и продукти";
$bg_nace["bg"]["46.76"]="Специализирана търговия на едро с други междинни продукти";
$bg_nace["bg"]["46.77"]="Търговия на едро с отпадъци и скрап";
$bg_nace["bg"]["46.9"]="Неспециализирана търговия на едро";
$bg_nace["bg"]["46.90"]="Неспециализирана търговия на едро";
$bg_nace["bg"]["47"]="Търговия на дребно, без търговията с автомобили и мотоциклети";
$bg_nace["bg"]["47.1"]="Търговия на дребно в неспециализирани магазини";
$bg_nace["bg"]["47.11"]="Търговия на дребно в неспециализирани магазини предимно с хранителни стоки, напитки и тютюневи изделия";
$bg_nace["bg"]["47.19"]="Търговия на дребно в неспециализирани магазини с разнообразни стоки";
$bg_nace["bg"]["47.2"]="Търговия на дребно в специализирани магазини с хранителни стоки, напитки и тютюневи изделия";
$bg_nace["bg"]["47.21"]="Търговия на дребно с плодове и зеленчуци";
$bg_nace["bg"]["47.22"]="Търговия на дребно с месо и месни продукти";
$bg_nace["bg"]["47.23"]="Търговия на дребно с риба и други морски храни";
$bg_nace["bg"]["47.24"]="Търговия на дребно с хляб, хлебни, захарни и сладкарски изделия";
$bg_nace["bg"]["47.25"]="Търговия на дребно с напитки";
$bg_nace["bg"]["47.26"]="Търговия на дребно с тютюневи изделия";
$bg_nace["bg"]["47.29"]="Търговия на дребно с други хранителни стоки";
$bg_nace["bg"]["47.3"]="Търговия на дребно с автомобилни горива и смазочни материали";
$bg_nace["bg"]["47.30"]="Търговия на дребно с автомобилни горива и смазочни материали";
$bg_nace["bg"]["47.4"]="Търговия на дребно в специализирани магазини с компютърна и комуникационна техника и битова електроника";
$bg_nace["bg"]["47.41"]="Търговия на дребно с компютри, периферни устройства за тях и програмни продукти";
$bg_nace["bg"]["47.42"]="Търговия на дребно с телефонни апарати и други устройства за далекосъобщения";
$bg_nace["bg"]["47.43"]="Търговия на дребно с битова електроника";
$bg_nace["bg"]["47.5"]="Търговия на дребно в специализирани магазини с текстил, железария, стоки за обзавеждане и битови електроуреди";
$bg_nace["bg"]["47.51"]="Търговия на дребно с текстил и галантерийни стоки";
$bg_nace["bg"]["47.52"]="Търговия на дребно с железария, бои и плоско стъкло";
$bg_nace["bg"]["47.53"]="Търговия на дребно с тапети, килими и други стенни и подови покрития";
$bg_nace["bg"]["47.54"]="Търговия на дребно с битови електроуреди";
$bg_nace["bg"]["47.59"]="Търговия на дребно с мебели, осветители и с други стоки за бита, некласифицирани другаде";
$bg_nace["bg"]["47.6"]="Търговия на дребно в специализирани магазини със стоки, предназначени за свободното време";
$bg_nace["bg"]["47.61"]="Търговия на дребно с книги";
$bg_nace["bg"]["47.62"]="Търговия на дребно с вестници и канцеларски стоки";
$bg_nace["bg"]["47.63"]="Търговия на дребно с аудио и видео записи";
$bg_nace["bg"]["47.64"]="Търговия на дребно със спортни стоки";
$bg_nace["bg"]["47.65"]="Търговия на дребно с игри и играчки";
$bg_nace["bg"]["47.7"]="Търговия на дребно в специализирани магазини с други нехранителни стоки";
$bg_nace["bg"]["47.71"]="Търговия на дребно с облекло";
$bg_nace["bg"]["47.72"]="Търговия на дребно с обувки и кожени изделия";
$bg_nace["bg"]["47.73"]="Търговия на дребно с лекарства и други фармацевтични стоки";
$bg_nace["bg"]["47.74"]="Търговия на дребно с медицински и ортопедични стоки";
$bg_nace["bg"]["47.75"]="Търговия на дребно с парфюмерийни и козметични стоки и тоалетни принадлежности";
$bg_nace["bg"]["47.76"]="Търговия на дребно с цветя, растения, семена, торове, домашни любимци и храни за тях";
$bg_nace["bg"]["47.77"]="Търговия на дребно с часовници и бижутерия";
$bg_nace["bg"]["47.78"]="Търговия на дребно с други нехранителни стоки, некласифицирана другаде";
$bg_nace["bg"]["47.79"]="Търговия на дребно в магазини с употребявани стоки";
$bg_nace["bg"]["47.8"]="Търговия на дребно на открити щандове и пазари";
$bg_nace["bg"]["47.81"]="Търговия на дребно на открити щандове и пазари с хранителни стоки, напитки и тютюневи изделия";
$bg_nace["bg"]["47.82"]="Търговия на дребно на открити щандове и пазари с текстил, облекло и обувки";
$bg_nace["bg"]["47.89"]="Търговия на дребно на открити щандове и пазари с други стоки";
$bg_nace["bg"]["47.9"]="Търговия на дребно извън търговски обекти";
$bg_nace["bg"]["47.91"]="Търговия на дребно чрез поръчки по пощата, телефона или Интернет";
$bg_nace["bg"]["47.99"]="Търговия на дребно извън търговски обекти, некласифицирана другаде";
$bg_nace["bg"]["H"]="Транспорт, складиране и пощи";
$bg_nace["bg"]["49"]="Сухопътен транспорт";
$bg_nace["bg"]["49.1"]="Пътнически железопътен транспорт, междуселищен";
$bg_nace["bg"]["49.10"]="Пътнически железопътен транспорт, междуселищен";
$bg_nace["bg"]["49.2"]="Товарен железопътен транспорт";
$bg_nace["bg"]["49.20"]="Товарен железопътен транспорт";
$bg_nace["bg"]["49.3"]="Друг пътнически сухопътен транспорт";
$bg_nace["bg"]["49.31"]="Пътнически градски и крайградски транспорт";
$bg_nace["bg"]["49.32"]="Пътнически таксиметров транспорт";
$bg_nace["bg"]["49.39"]="Друг пътнически сухопътен транспорт, некласифициран другаде";
$bg_nace["bg"]["49.4"]="Товарен автомобилен транспорт и услуги по преместване";
$bg_nace["bg"]["49.41"]="Товарен автомобилен транспорт";
$bg_nace["bg"]["49.42"]="Услуги по преместване";
$bg_nace["bg"]["49.5"]="Тръбопроводен транспорт";
$bg_nace["bg"]["49.50"]="Тръбопроводен транспорт";
$bg_nace["bg"]["50"]="Воден транспорт";
$bg_nace["bg"]["50.1"]="Пътнически морски и крайбрежен транспорт";
$bg_nace["bg"]["50.10"]="Пътнически морски и крайбрежен транспорт";
$bg_nace["bg"]["50.2"]="Товарен морски и крайбрежен транспорт";
$bg_nace["bg"]["50.20"]="Товарен морски и крайбрежен транспорт";
$bg_nace["bg"]["50.3"]="Пътнически транспорт по вътрешни водни пътища";
$bg_nace["bg"]["50.30"]="Пътнически транспорт по вътрешни водни пътища";
$bg_nace["bg"]["50.4"]="Товарен транспорт по вътрешни водни пътища";
$bg_nace["bg"]["50.40"]="Товарен транспорт по вътрешни водни пътища";
$bg_nace["bg"]["51"]="Въздушен транспорт";
$bg_nace["bg"]["51.1"]="Пътнически въздушен транспорт";
$bg_nace["bg"]["51.10"]="Пътнически въздушен транспорт";
$bg_nace["bg"]["51.2"]="Товарен въздушен транспорт; космически транспорт";
$bg_nace["bg"]["51.21"]="Товарен въздушен транспорт";
$bg_nace["bg"]["51.22"]="Космически транспорт";
$bg_nace["bg"]["52"]="Складиране на товари и спомагателни дейности в транспорта";
$bg_nace["bg"]["52.1"]="Складиране и съхраняване на товари";
$bg_nace["bg"]["52.10"]="Складиране и съхраняване на товари";
$bg_nace["bg"]["52.2"]="Спомагателни дейности в транспорта";
$bg_nace["bg"]["52.21"]="Експлоатация на инфраструктурата в сухопътния транспорт";
$bg_nace["bg"]["52.22"]="Спомагателни дейности във водния транспорт";
$bg_nace["bg"]["52.23"]="Спомагателни дейности във въздушния транспорт";
$bg_nace["bg"]["52.24"]="Обработка на товари";
$bg_nace["bg"]["52.29"]="Други спомагателни дейности в транспорта";
$bg_nace["bg"]["53"]="Пощенски и куриерски дейности";
$bg_nace["bg"]["53.1"]="Дейност на пощи, предоставящи универсална пощенска услуга";
$bg_nace["bg"]["53.10"]="Дейност на пощи, предоставящи универсална пощенска услуга";
$bg_nace["bg"]["53.2"]="Други пощенски и куриерски дейности";
$bg_nace["bg"]["53.20"]="Други пощенски и куриерски дейности";
$bg_nace["bg"]["I"]="Хотелиерство и ресторантьорство";
$bg_nace["bg"]["55"]="Хотелиерство";
$bg_nace["bg"]["55.1"]="Хотели и подобни места за настаняване";
$bg_nace["bg"]["55.10"]="Хотели и подобни места за настаняване";
$bg_nace["bg"]["55.2"]="Туристическо и друго краткосрочно настаняване";
$bg_nace["bg"]["55.20"]="Туристическо и друго краткосрочно настаняване";
$bg_nace["bg"]["55.3"]="Къмпинги и терени за каравани и къмпинг-автомобили";
$bg_nace["bg"]["55.30"]="Къмпинги и терени за каравани и къмпинг-автомобили";
$bg_nace["bg"]["55.9"]="Други места за настаняване";
$bg_nace["bg"]["55.90"]="Други места за настаняване";
$bg_nace["bg"]["56"]="Ресторантьорство";
$bg_nace["bg"]["56.1"]="Дейност на ресторанти и заведения за бързо обслужване";
$bg_nace["bg"]["56.10"]="Дейност на ресторанти и заведения за бързо обслужване";
$bg_nace["bg"]["56.2"]="Приготвяне и доставяне на храна";
$bg_nace["bg"]["56.21"]="Приготвяне и доставяне на храна по конкретен повод";
$bg_nace["bg"]["56.29"]="Други дейности по приготвяне и доставяне на храна";
$bg_nace["bg"]["56.3"]="Дейност на питейни заведения";
$bg_nace["bg"]["56.30"]="Дейност на питейни заведения";
$bg_nace["bg"]["J"]="Създаване и разпространение на информация и творчески продукти; далекосъобщения";
$bg_nace["bg"]["58"]="Издателска дейност";
$bg_nace["bg"]["58.1"]="Издаване на книги, периодични издания и друга издателска дейност";
$bg_nace["bg"]["58.11"]="Издаване на книги";
$bg_nace["bg"]["58.12"]="Издаване на указатели, справочници и адресни списъци";
$bg_nace["bg"]["58.13"]="Издаване на вестници";
$bg_nace["bg"]["58.14"]="Издаване на списания и други периодични издания";
$bg_nace["bg"]["58.19"]="Друга издателска дейност";
$bg_nace["bg"]["58.2"]="Издаване на програмни продукти";
$bg_nace["bg"]["58.21"]="Издаване на компютърни игри";
$bg_nace["bg"]["58.29"]="Издаване на други програмни продукти";
$bg_nace["bg"]["59"]="Производство на филми и телевизионни предавания, звукозаписване и издаване на музика";
$bg_nace["bg"]["59.1"]="Производство и разпространение на филми и телевизионни предавания";
$bg_nace["bg"]["59.11"]="Производство на филми и телевизионни предавания";
$bg_nace["bg"]["59.12"]="Технически дейности, свързани с производство на филми и телевизионни предавания (постпродукция)";
$bg_nace["bg"]["59.13"]="Разпространение на филми и телевизионни предавания";
$bg_nace["bg"]["59.14"]="Прожектиране на филми";
$bg_nace["bg"]["59.2"]="Звукозаписване и издаване на музика";
$bg_nace["bg"]["59.20"]="Звукозаписване и издаване на музика";
$bg_nace["bg"]["60"]="Радио- и телевизионна дейност";
$bg_nace["bg"]["60.1"]="Създаване и излъчване на радиопрограми";
$bg_nace["bg"]["60.10"]="Създаване и излъчване на радиопрограми";
$bg_nace["bg"]["60.2"]="Създаване и излъчване на телевизионни програми";
$bg_nace["bg"]["60.20"]="Създаване и излъчване на телевизионни програми";
$bg_nace["bg"]["61"]="Далекосъобщения";
$bg_nace["bg"]["61.1"]="Далекосъобщителна дейност чрез фиксирани мрежи";
$bg_nace["bg"]["61.10"]="Далекосъобщителна дейност чрез фиксирани мрежи";
$bg_nace["bg"]["61.2"]="Далекосъобщителна дейност по безжичен път";
$bg_nace["bg"]["61.20"]="Далекосъобщителна дейност по безжичен път";
$bg_nace["bg"]["61.3"]="Спътникова далекосъобщителна дейност";
$bg_nace["bg"]["61.30"]="Спътникова далекосъобщителна дейност";
$bg_nace["bg"]["61.9"]="Други далекосъобщителни дейности";
$bg_nace["bg"]["61.90"]="Други далекосъобщителни дейности";
$bg_nace["bg"]["62"]="Дейности в областта на информационните технологии";
$bg_nace["bg"]["62.0"]="Дейности в областта на информационните технологии";
$bg_nace["bg"]["62.01"]="Компютърно програмиране";
$bg_nace["bg"]["62.02"]="Консултантска дейност по информационни технологии";
$bg_nace["bg"]["62.03"]="Управление и обслужване на компютърни средства и системи";
$bg_nace["bg"]["62.09"]="Други дейности в областта на информационните технологии";
$bg_nace["bg"]["63"]="Информационни услуги";
$bg_nace["bg"]["63.1"]="Обработка на данни, хостинг и подобни дейности; web-портали";
$bg_nace["bg"]["63.11"]="Обработка на данни, хостинг и подобни дейности";
$bg_nace["bg"]["63.12"]="Web-портали";
$bg_nace["bg"]["63.9"]="Други информационни услуги";
$bg_nace["bg"]["63.91"]="Дейност на информационни агенции";
$bg_nace["bg"]["63.99"]="Други информационни услуги, некласифицирани другаде";
$bg_nace["bg"]["K"]="Финансови и застрахователни дейности";
$bg_nace["bg"]["64"]="Предоставяне на финансови услуги, без застраховане и допълнително пенсионно осигуряване";
$bg_nace["bg"]["64.1"]="Парично посредничество";
$bg_nace["bg"]["64.11"]="Дейност на централната банка";
$bg_nace["bg"]["64.19"]="Друго парично посредничество";
$bg_nace["bg"]["64.2"]="Дейност на холдингови дружества";
$bg_nace["bg"]["64.20"]="Дейност на холдингови дружества";
$bg_nace["bg"]["64.3"]="Фондове за инвестиране и подобни финансови субекти";
$bg_nace["bg"]["64.30"]="Фондове за инвестиране и подобни финансови субекти";
$bg_nace["bg"]["64.9"]="Предоставяне на други финансови услуги, без застраховане и допълнително пенсионно осигуряване";
$bg_nace["bg"]["64.91"]="Финансов лизинг";
$bg_nace["bg"]["64.92"]="Други форми на предоставяне на кредит";
$bg_nace["bg"]["64.99"]="Предоставяне на други финансови услуги, без застраховане и допълнително пенсионно осигуряване, некласифицирани другаде";
$bg_nace["bg"]["65"]="Застраховане, презастраховане и допълнително пенсионно осигуряване";
$bg_nace["bg"]["65.1"]="Застраховане";
$bg_nace["bg"]["65.11"]="Животозастраховане";
$bg_nace["bg"]["65.12"]="Друго застраховане, без животозастраховане";
$bg_nace["bg"]["65.2"]="Презастраховане";
$bg_nace["bg"]["65.20"]="Презастраховане";
$bg_nace["bg"]["65.3"]="Допълнително пенсионно осигуряване";
$bg_nace["bg"]["65.30"]="Допълнително пенсионно осигуряване";
$bg_nace["bg"]["66"]="Спомагателни дейности във финансовите услуги и застраховането";
$bg_nace["bg"]["66.1"]="Спомагателни дейности във финансовите услуги, без застраховане и допълнително пенсионно осигуряване";
$bg_nace["bg"]["66.11"]="Управление на финансови пазари";
$bg_nace["bg"]["66.12"]="Посредническа дейност по сделки с ценни книжа и стоки";
$bg_nace["bg"]["66.19"]="Други спомагателни дейности във финансовите услуги, без застраховане и допълнително пенсионно осигуряване";
$bg_nace["bg"]["66.2"]="Спомагателни дейности в застраховането и допълнителното пенсионно осигуряване";
$bg_nace["bg"]["66.21"]="Оценяване на застрахователни рискове и щети";
$bg_nace["bg"]["66.22"]="Дейности на застрахователни брокери и агенти";
$bg_nace["bg"]["66.29"]="Други спомагателни дейности в застраховането и допълнителното пенсионно осигуряване";
$bg_nace["bg"]["66.3"]="Управление на фондове";
$bg_nace["bg"]["66.30"]="Управление на фондове";
$bg_nace["bg"]["L"]="Операции с недвижими имоти";
$bg_nace["bg"]["68"]="Операции с недвижими имоти";
$bg_nace["bg"]["68.1"]="Покупка и продажба на собствени недвижими имоти";
$bg_nace["bg"]["68.10"]="Покупка и продажба на собствени недвижими имоти";
$bg_nace["bg"]["68.2"]="Даване под наем и експлоатация на собствени недвижими имоти";
$bg_nace["bg"]["68.20"]="Даване под наем и експлоатация на собствени недвижими имоти";
$bg_nace["bg"]["68.3"]="Посредническа дейност по операции с недвижими имоти";
$bg_nace["bg"]["68.31"]="Дейност на агенции за недвижими имоти";
$bg_nace["bg"]["68.32"]="Управление на недвижими имоти";
$bg_nace["bg"]["M"]="Професионални дейности и научни изследвания";
$bg_nace["bg"]["69"]="Юридически и счетоводни дейности";
$bg_nace["bg"]["69.1"]="Юридически дейности";
$bg_nace["bg"]["69.10"]="Юридически дейности";
$bg_nace["bg"]["69.2"]="Счетоводни и одиторски дейности; данъчни консултации";
$bg_nace["bg"]["69.20"]="Счетоводни и одиторски дейности; данъчни консултации";
$bg_nace["bg"]["70"]="Дейност на централни офиси; консултантски дейности в областта на управлението";
$bg_nace["bg"]["70.1"]="Дейност на централни офиси";
$bg_nace["bg"]["70.10"]="Дейност на централни офиси";
$bg_nace["bg"]["70.2"]="Консултантски дейности в областта на управлението";
$bg_nace["bg"]["70.21"]="Консултантска дейност по връзки с обществеността";
$bg_nace["bg"]["70.22"]="Консултантска дейност по стопанско и друго управление";
$bg_nace["bg"]["71"]="Архитектурни и инженерни дейности; технически изпитвания и анализи";
$bg_nace["bg"]["71.1"]="Архитектурни и инженерни дейности";
$bg_nace["bg"]["71.11"]="Архитектурни дейности";
$bg_nace["bg"]["71.12"]="Инженерни дейности и технически консултации";
$bg_nace["bg"]["71.2"]="Технически изпитвания и анализи";
$bg_nace["bg"]["71.20"]="Технически изпитвания и анализи";
$bg_nace["bg"]["72"]="Научноизследователска и развойна дейност";
$bg_nace["bg"]["72.1"]="Научноизследователска и развойна дейност в областта на естествените, медицинските, селскостопанските и техническите науки";
$bg_nace["bg"]["72.11"]="Научноизследователска и развойна дейност в областта на биотехнологиите";
$bg_nace["bg"]["72.19"]="Научноизследователска и развойна дейност в областта на естествените, медицинските, селскостопанските и техническите науки, без биотехнологиите";
$bg_nace["bg"]["72.2"]="Научноизследователска и развойна дейност в областта на обществените и хуманитарните науки";
$bg_nace["bg"]["72.20"]="Научноизследователска и развойна дейност в областта на обществените и хуманитарните науки";
$bg_nace["bg"]["73"]="Рекламна дейност и проучване на пазари";
$bg_nace["bg"]["73.1"]="Рекламна дейност";
$bg_nace["bg"]["73.11"]="Дейност на рекламни агенции";
$bg_nace["bg"]["73.12"]="Дейности по продажба на медийно време и място за реклама";
$bg_nace["bg"]["73.2"]="Проучване на пазари и изследване на общественото мнение";
$bg_nace["bg"]["73.20"]="Проучване на пазари и изследване на общественото мнение";
$bg_nace["bg"]["74"]="Други професионални дейности";
$bg_nace["bg"]["74.1"]="Специализирани дейности в областта на дизайна";
$bg_nace["bg"]["74.10"]="Специализирани дейности в областта на дизайна";
$bg_nace["bg"]["74.2"]="Дейности в областта на фотографията";
$bg_nace["bg"]["74.20"]="Дейности в областта на фотографията";
$bg_nace["bg"]["74.3"]="Преводаческа дейност";
$bg_nace["bg"]["74.30"]="Преводаческа дейност";
$bg_nace["bg"]["74.9"]="Други професионални дейности, некласифицирани другаде";
$bg_nace["bg"]["74.90"]="Други професионални дейности, некласифицирани другаде";
$bg_nace["bg"]["75"]="Ветеринарномедицинска дейност";
$bg_nace["bg"]["75.0"]="Ветеринарномедицинска дейност";
$bg_nace["bg"]["75.00"]="Ветеринарномедицинска дейност";
$bg_nace["bg"]["N"]="Административни и спомагателни дейности";
$bg_nace["bg"]["77"]="Даване под наем и оперативен лизинг";
$bg_nace["bg"]["77.1"]="Даване под наем и оперативен лизинг на автомобили";
$bg_nace["bg"]["77.11"]="Даване под наем и оперативен лизинг на леки и лекотоварни автомобили, без водач";
$bg_nace["bg"]["77.12"]="Даване под наем и оперативен лизинг на тежкотоварни автомобили, без водач";
$bg_nace["bg"]["77.2"]="Даване под наем и оперативен лизинг на лични и домакински вещи";
$bg_nace["bg"]["77.21"]="Даване под наем и оперативен лизинг на оборудване и екипировка за спорт и развлечения";
$bg_nace["bg"]["77.22"]="Даване под наем на видеокасети и дискове";
$bg_nace["bg"]["77.29"]="Даване под наем и оперативен лизинг на други лични и домакински вещи";
$bg_nace["bg"]["77.3"]="Даване под наем и оперативен лизинг на други машини и оборудване със стопанско предназначение";
$bg_nace["bg"]["77.31"]="Даване под наем и оперативен лизинг на машини и оборудване за селското и горско стопанство, без оператор";
$bg_nace["bg"]["77.32"]="Даване под наем и оперативен лизинг на машини и оборудване за строителството, без оператор";
$bg_nace["bg"]["77.33"]="Даване под наем и оперативен лизинг на офис мебели и техника (вкл. компютри), без оператор";
$bg_nace["bg"]["77.34"]="Даване под наем и оперативен лизинг на плавателни съдове, без екипаж";
$bg_nace["bg"]["77.35"]="Даване под наем и оперативен лизинг на въздухоплавателни средства, без екипаж";
$bg_nace["bg"]["77.39"]="Даване под наем и оперативен лизинг на други машини и оборудване със стопанско предназначение, некласифицирани другаде";
$bg_nace["bg"]["77.4"]="Оперативен лизинг на интелектуална собственост и сходни продукти, без обектите на авторско право";
$bg_nace["bg"]["77.40"]="Оперативен лизинг на интелектуална собственост и сходни продукти, без обектите на авторско право";
$bg_nace["bg"]["78"]="Дейности по наемане и предоставяне на работна сила";
$bg_nace["bg"]["78.1"]="Посредническа дейност на агенции по наемане на работа";
$bg_nace["bg"]["78.10"]="Посредническа дейност на агенции по наемане на работа";
$bg_nace["bg"]["78.2"]="Предоставяне на работна сила за временна заетост";
$bg_nace["bg"]["78.20"]="Предоставяне на работна сила за временна заетост";
$bg_nace["bg"]["78.3"]="Други дейности по предоставяне на работна сила";
$bg_nace["bg"]["78.30"]="Други дейности по предоставяне на работна сила";
$bg_nace["bg"]["79"]="Туристическа агентска и операторска дейност; други дейности, свързани с пътувания и резервации";
$bg_nace["bg"]["79.1"]="Туристическа агентска и операторска дейност";
$bg_nace["bg"]["79.11"]="Туристическа агентска дейност";
$bg_nace["bg"]["79.12"]="Туроператорска дейност";
$bg_nace["bg"]["79.9"]="Други дейности, свързани с пътувания и резервации";
$bg_nace["bg"]["79.90"]="Други дейности, свързани с пътувания и резервации";
$bg_nace["bg"]["80"]="Дейности по охрана и разследване";
$bg_nace["bg"]["80.1"]="Частна охранителна дейност, без използване на технически системи за сигурност";
$bg_nace["bg"]["80.10"]="Частна охранителна дейност, без използване на технически системи за сигурност";
$bg_nace["bg"]["80.2"]="Дейности в областта на технически системи за сигурност";
$bg_nace["bg"]["80.20"]="Дейности в областта на технически системи за сигурност";
$bg_nace["bg"]["80.3"]="Дейности по разследване и издирване";
$bg_nace["bg"]["80.30"]="Дейности по разследване и издирване";
$bg_nace["bg"]["81"]="Дейности по обслужване на сгради и озеленяване";
$bg_nace["bg"]["81.1"]="Комплексно обслужване на сгради";
$bg_nace["bg"]["81.10"]="Комплексно обслужване на сгради";
$bg_nace["bg"]["81.2"]="Дейности по почистване";
$bg_nace["bg"]["81.21"]="Неспециализирано вътрешно почистване на сгради";
$bg_nace["bg"]["81.22"]="Специализирано почистване на сгради и промишлени обекти";
$bg_nace["bg"]["81.29"]="Други дейности по почистване";
$bg_nace["bg"]["81.3"]="Оформяне и поддържане на озеленени площи";
$bg_nace["bg"]["81.30"]="Оформяне и поддържане на озеленени площи";
$bg_nace["bg"]["82"]="Административни офис дейности и друго спомагателно обслужване на стопанската дейност";
$bg_nace["bg"]["82.1"]="Административни и спомагателни офис дейности";
$bg_nace["bg"]["82.11"]="Комбинирани административни офис дейности";
$bg_nace["bg"]["82.19"]="Размножаване, изготвяне на документи и други специализирани помощни офис дейности";
$bg_nace["bg"]["82.2"]="Дейност на телефонни центрове за услуги";
$bg_nace["bg"]["82.20"]="Дейност на телефонни центрове за услуги";
$bg_nace["bg"]["82.3"]="Организиране на конгреси и търговски изложения";
$bg_nace["bg"]["82.30"]="Организиране на конгреси и търговски изложения";
$bg_nace["bg"]["82.9"]="Спомагателно обслужване на стопанската дейност, некласифицирано другаде";
$bg_nace["bg"]["82.91"]="Дейности по събиране на парични вземания и на финансова информация";
$bg_nace["bg"]["82.92"]="Дейности по опаковане и пакетиране";
$bg_nace["bg"]["82.99"]="Друго спомагателно обслужване на стопанската дейност, некласифицирано другаде";
$bg_nace["bg"]["O"]="Държавно управление";
$bg_nace["bg"]["84"]="Държавно управление";
$bg_nace["bg"]["84.1"]="Държавно управление с общ, икономически и социален характер";
$bg_nace["bg"]["84.11"]="Общофункционално управление на държавата на централно и местно равнище";
$bg_nace["bg"]["84.12"]="Държавно управление в областта на здравеопазването, образованието и други социални дейности";
$bg_nace["bg"]["84.13"]="Държавно управление в областта на стопанската дейност";
$bg_nace["bg"]["84.2"]="Услуги на държавното управление за обществото като цяло";
$bg_nace["bg"]["84.21"]="Външни работи";
$bg_nace["bg"]["84.22"]="Отбрана";
$bg_nace["bg"]["84.23"]="Правосъдие";
$bg_nace["bg"]["84.24"]="Обществен ред и сигурност";
$bg_nace["bg"]["84.25"]="Пожарна безопасност и защита при бедствия";
$bg_nace["bg"]["84.3"]="Държавно обществено осигуряване";
$bg_nace["bg"]["84.30"]="Държавно обществено осигуряване";
$bg_nace["bg"]["P"]="Образование";
$bg_nace["bg"]["85"]="Образование";
$bg_nace["bg"]["85.1"]="Предучилищно образование";
$bg_nace["bg"]["85.10"]="Предучилищно образование";
$bg_nace["bg"]["85.2"]="Начално образование (първи етап на основното образование)";
$bg_nace["bg"]["85.20"]="Начално образование (първи етап на основното образование)";
$bg_nace["bg"]["85.3"]="Прогимназиално (втори етап на основното образование) и средно образование";
$bg_nace["bg"]["85.31"]="Прогимназиално и средно общо образование";
$bg_nace["bg"]["85.32"]="Прогимназиално и средно професионално образование и обучение";
$bg_nace["bg"]["85.4"]="Образование след завършено средно образование";
$bg_nace["bg"]["85.41"]="Професионално обучение след средно образование, но не висше";
$bg_nace["bg"]["85.42"]="Висше образование";
$bg_nace["bg"]["85.5"]="Други образователни дейности";
$bg_nace["bg"]["85.51"]="Неформално обучение в областта на спорта и активния отдих";
$bg_nace["bg"]["85.52"]="Неформално обучение в областта на културата";
$bg_nace["bg"]["85.53"]="Обучение на водачи на превозни средства";
$bg_nace["bg"]["85.59"]="Други образователни дейности, некласифицирани другаде";
$bg_nace["bg"]["85.6"]="Спомагателни дейности в областта на образованието";
$bg_nace["bg"]["85.60"]="Спомагателни дейности в областта на образованието";
$bg_nace["bg"]["Q"]="Хуманно здравеопазване и социална работа";
$bg_nace["bg"]["86"]="Хуманно здравеопазване";
$bg_nace["bg"]["86.1"]="Дейност на болници";
$bg_nace["bg"]["86.10"]="Дейност на болници";
$bg_nace["bg"]["86.2"]="Извънболнична лекарска практика";
$bg_nace["bg"]["86.21"]="Дейност на общопрактикуващи лекари";
$bg_nace["bg"]["86.22"]="Дейност на лекари специалисти";
$bg_nace["bg"]["86.23"]="Дейност на лекари по дентална медицина";
$bg_nace["bg"]["86.9"]="Други дейности по хуманно здравеопазване";
$bg_nace["bg"]["86.90"]="Други дейности по хуманно здравеопазване";
$bg_nace["bg"]["87"]="Медико-социални грижи с настаняване";
$bg_nace["bg"]["87.1"]="Дейност на заведения със здравни грижи";
$bg_nace["bg"]["87.10"]="Дейност на заведения със здравни грижи";
$bg_nace["bg"]["87.2"]="Социални грижи с настаняване за лица с умствена изостаналост, психичноболни и зависими от наркотици";
$bg_nace["bg"]["87.20"]="Социални грижи с настаняване за лица с умствена изостаналост, психичноболни и зависими от наркотици";
$bg_nace["bg"]["87.3"]="Социални грижи с настаняване за възрастни лица и хора с физически увреждания";
$bg_nace["bg"]["87.30"]="Социални грижи с настаняване за възрастни лица и хора с физически увреждания";
$bg_nace["bg"]["87.9"]="Други социални грижи с настаняване";
$bg_nace["bg"]["87.90"]="Други социални грижи с настаняване";
$bg_nace["bg"]["88"]="Социална работа без настаняване";
$bg_nace["bg"]["88.1"]="Социална работа без настаняване за възрастни лица и хора с увреждания";
$bg_nace["bg"]["88.10"]="Социална работа без настаняване за възрастни лица и хора с увреждания";
$bg_nace["bg"]["88.9"]="Друга социална работа без настаняване";
$bg_nace["bg"]["88.91"]="Дневни грижи за малки деца";
$bg_nace["bg"]["88.99"]="Друга социална работа без настаняване, некласифицирана другаде";
$bg_nace["bg"]["R"]="Култура, спорт и развлечения";
$bg_nace["bg"]["90"]="Артистична и творческа дейност";
$bg_nace["bg"]["90.0"]="Артистична и творческа дейност";
$bg_nace["bg"]["90.01"]="Изпълнителско изкуство";
$bg_nace["bg"]["90.02"]="Спомагателни дейности, свързани с изпълнителско изкуство";
$bg_nace["bg"]["90.03"]="Творческа дейност в областта на литературата и изкуствата";
$bg_nace["bg"]["90.04"]="Експлоатация на зали за представления";
$bg_nace["bg"]["91"]="Други дейности в областта на културата";
$bg_nace["bg"]["91.0"]="Други дейности в областта на културата";
$bg_nace["bg"]["91.01"]="Дейност на библиотеки и архиви";
$bg_nace["bg"]["91.02"]="Дейност на музеи";
$bg_nace["bg"]["91.03"]="Опазване и стопанисване на културно-исторически паметници и места";
$bg_nace["bg"]["91.04"]="Дейност на ботанически и зоологически градини, природни паркове и резервати";
$bg_nace["bg"]["92"]="Организиране на хазартни игри";
$bg_nace["bg"]["92.0"]="Организиране на хазартни игри";
$bg_nace["bg"]["92.00"]="Организиране на хазартни игри";
$bg_nace["bg"]["93"]="Спортни и други дейности, свързани с развлечения и отдих";
$bg_nace["bg"]["93.1"]="Дейности в областта на спорта";
$bg_nace["bg"]["93.11"]="Експлоатация на спортни обекти и съоръжения";
$bg_nace["bg"]["93.12"]="Дейност на спортни клубове";
$bg_nace["bg"]["93.13"]="Дейност на фитнес центрове и зали";
$bg_nace["bg"]["93.19"]="Други дейности в областта на спорта";
$bg_nace["bg"]["93.2"]="Дейности, свързани с развлечения и отдих";
$bg_nace["bg"]["93.21"]="Дейност на увеселителни и тематични паркове";
$bg_nace["bg"]["93.29"]="Други дейности, свързани с развлечения и отдих";
$bg_nace["bg"]["S"]="Други дейности";
$bg_nace["bg"]["94"]="Дейности на организации с нестопанска цел";
$bg_nace["bg"]["94.1"]="Дейност на бизнес организации, организации на работодатели и професионални организации";
$bg_nace["bg"]["94.11"]="Дейност на бизнес организации и организации на работодатели";
$bg_nace["bg"]["94.12"]="Дейност на професионални организации";
$bg_nace["bg"]["94.2"]="Дейност на синдикални организации";
$bg_nace["bg"]["94.20"]="Дейност на синдикални организации";
$bg_nace["bg"]["94.9"]="Дейност на други организации с нестопанска цел";
$bg_nace["bg"]["94.91"]="Дейност на религиозни организации";
$bg_nace["bg"]["94.92"]="Дейност на политически организации";
$bg_nace["bg"]["94.99"]="Дейност на други организации с нестопанска цел, некласифицирани другаде";
$bg_nace["bg"]["95"]="Ремонт на компютърна техника, на лични и домакински вещи";
$bg_nace["bg"]["95.1"]="Ремонт на компютърна и комуникационна техника";
$bg_nace["bg"]["95.11"]="Ремонт на компютри и периферни устройства за тях";
$bg_nace["bg"]["95.12"]="Ремонт на телефонни апарати и други устройства за далекосъобщения";
$bg_nace["bg"]["95.2"]="Ремонт на лични и домакински вещи";
$bg_nace["bg"]["95.21"]="Ремонт на битова електроника";
$bg_nace["bg"]["95.22"]="Ремонт на битови електроуреди и друго оборудване за дома и градината";
$bg_nace["bg"]["95.23"]="Поправка на обувки и кожени изделия";
$bg_nace["bg"]["95.24"]="Ремонт на мебели и предмети за обзавеждане";
$bg_nace["bg"]["95.25"]="Ремонт на часовници и бижута";
$bg_nace["bg"]["95.29"]="Ремонт на други лични и домакински вещи";
$bg_nace["bg"]["96"]="Други персонални услуги";
$bg_nace["bg"]["96.0"]="Други персонални услуги";
$bg_nace["bg"]["96.01"]="Пране и химическо чистене";
$bg_nace["bg"]["96.02"]="Фризьорски и козметични услуги";
$bg_nace["bg"]["96.03"]="Организиране на погребения и свързани с тях услуги";
$bg_nace["bg"]["96.04"]="Поддържане на добро физическо състояние";
$bg_nace["bg"]["96.09"]="Други персонални услуги, некласифицирани другаде";
$bg_nace["bg"]["T"]="Дейности на домакинства като работодатели; недиференцирани дейности на домакинства по производство на стоки и услуги за собствено потребление";
$bg_nace["bg"]["97"]="Дейности на домакинства като работодатели на домашен персонал";
$bg_nace["bg"]["97.0"]="Дейности на домакинства като работодатели на домашен персонал";
$bg_nace["bg"]["97.00"]="Дейности на домакинства като работодатели на домашен персонал";
$bg_nace["bg"]["98"]="Недиференцирани дейности на домакинства по производство на стоки и услуги за собствено потребление";
$bg_nace["bg"]["98.1"]="Недиференцирани дейности на домакинства по производство на стоки за собствено потребление";
$bg_nace["bg"]["98.10"]="Недиференцирани дейности на домакинства по производство на стоки за собствено потребление";
$bg_nace["bg"]["98.2"]="Недиференцирани дейности на домакинства по производство на услуги за собствено потребление";
$bg_nace["bg"]["98.20"]="Недиференцирани дейности на домакинства по производство на услуги за собствено потребление";
$bg_nace["bg"]["U"]="ДЕЙНОСТИ НА ЕКСТЕРИТОРИАЛНИ ОРГАНИЗАЦИИ И СЛУЖБИ";
$bg_nace["bg"]["99"]="Дейности на екстериториални организации и служби";
$bg_nace["bg"]["99.0"]="Дейности на екстериториални организации и служби";
$bg_nace["bg"]["99.00"]="Дейности на екстериториални организации и служби";


?>