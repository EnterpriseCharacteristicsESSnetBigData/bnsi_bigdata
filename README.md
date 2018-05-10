# Bulgarian National Statistical Institute ESSnet Big Data WP2 Software
_The ESSnet BD WP2 performs joint web scraping experiments following in multiple countries, using as much as possible the same methodological concepts. The aim is to derive experimental statistics on enterprises from information found on the web, especially the websites of enterprises. It should be noted that these statistics have not reached maturity in terms of harmonisation, coverage or methodology. At this point they are to be treated as the output of research experiments and they do not necessarily align with the official statistics published on this subject._

## Preconditions
- PHP
- MySQL
- Enterprises list (SBR)

## Scripts descriptions

### Common to all use-cases

#### conf.php
The file contains configuration information necessary for the operation of all other scripts.

#### info.php
- info_district.php
- info_nace1.php
- info_nace2.php
- info_nace3.php
- info_nace4.php
- info_rates.php

The files display statistics at regional level and NACE categories from the results of use-cases execution.

### Use-case URL Inventory of enterprises

#### geturl.php
The script checks if the known URLs from SBR have working websites,  generate URLs from the e-mails domains of the enterprises (excluding the popular e-mails domains: Yahoo, Gmail, etc. form the list in the conf.php file.) and check the generated URLs for working websites.

#### checkoldurl.php 
The script checks the known and verified URLs of the enterprises from the previous project for working websites.

#### google_search.php
The script gets up to 10 suggested URLs of the enterprises from the results of running Google Search API with the enterprises names.

#### jabse_search.php (jabse_interface.php)
_You probably do not need to run it (JABSE - Just Another Bulgarian Search Engine)!_  
The script gets up to 20 suggested URLs of the enterprises from the results of running Jabse Search API with the enterprises names in Bulgarian and transliterated in Latin.

#### UrlSearcher.php
The script runs [ISTAT](https://www.istat.it/) software [UrlSearcher.jar](https://github.com/SummaIstat/UrlSearcher) (you may run directly [UrlSearcher.jar](https://github.com/SummaIstat/UrlSearcher) without UrlSearcher.php) to get to up to 10 suggested URLs of the enterprises form the results of running Bing Search API with the enterprises names.

#### list.php
The script provides functionality for manual verification of the correct URLs of the enterprises from the checked URLs of the SBR and previous project and the suggested URLs from the Google, Jabse and Bing Search APIs. After running this step, you have a List of enterprises with known URLs in the DB table.

### Use-case E-commerce

#### scrap.v3.php
The script gets up to 3 predictions for e-commerce URLs of the enterprises based on scraped data from the enterprises websites.

#### list_estore.php
The script provides functionality to choose manually the correct e-commerce URLs of the enterprises.

#### list_estore_lost.php
The script provides functionality to find missed e-commerce URLs with 10% sample extracted from enterprises we don’t predict e-commerce websites with scrap.v3.php script.

### Use-case Social Media Presence

#### scrap.v3.php
The script gets social media URLs of the enterprises on the first page of their websites.

#### SocialMediaPresence.php
The script runs [WP2_SocialMediaPresence_Dev.py](https://github.com/jmaslankowski/WP2-Social-Media-Presence) a social media detection software developed by [Statistics Poland](http://stat.gov.pl/) (detects social media on all pages of the website)(you may run directly [WP2-Social-Media-Presence software](https://github.com/jmaslankowski/WP2-Social-Media-Presence) without SocialMediaPresence.php).

### Use-case Job advertisements on enterprises’ websites

#### scrap.jobs.v3.php
The script gets up to 3 predictions for Job advertisements URLs of the enterprises based on scraped data from the enterprises websites.

#### list_jobs.php
The script provides functionality to choose manually the correct Job advertisements URLs of the enterprises.

#### list_jobs_lost.php
The script provides functionality to find missed Job advertisements URLs with 10% sample extracted from enterprises we don’t predict Job advertisements websites with scrap.jobs.v3.php script.
