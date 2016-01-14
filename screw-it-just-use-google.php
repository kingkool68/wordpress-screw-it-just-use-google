<?php
/**
 * Plugin Name: Screw It! Just Use Google
 * Description: WordPress + Google.com + "site:" = BEST SEARCH EVER!
 * Version:	 0.1
 * Author:	  Russell Heimlich
 * Author URI:  http://www.russellheimlich.com
 * GitHub Plugin URI: https://github.com/kingkool68/wordpress-screw-it-just-use-google
 **/

function sijug_get_google_domain() {
	$domain = 'google.com';
	$the_locale = get_locale();

	// via https://make.wordpress.org/polyglots/teams/ and https://en.wikipedia.org/wiki/List_of_Google_domains
	$locales = array(
		'af' => '', // Afrikaans
		'ak' => '', // Akan
		'sq' => 'google.al', // Albanian
		'arq' => 'google.dz', // Algerian Arabic
		'am' => '', // Amharic
		'ar' => 'google.ae', // Arabic
		'hy' => 'google.am', // Armenian
		'rup_MK' => '', // Aromanian
		'frp' => '', // Arpitan
		'as' => '', // Assamese
		'az' => 'google.az', // Azerbaijani
		'az_TR' => 'google.com.tr', // Azerbaijani (Turkey)
		'bcc' => '', // Balochi Southern
		'ba' => '', // Bashkir
		'eu' => '', // Basque
		'bel' => '', // Belarusian
		'bn_BD' => '', // Bengali
		'bs_BA' => 'google.ba', // Bosnian
		'bre' => '', // Breton
		'bg_BG' => 'google.bg', // Bulgarian
		'ca' => 'google.cat', // Catalan
		'bal' => 'google.cat', // Catalan (Balear)
		'ceb' => '', // Cebuano
		'zh_CN' => 'google.cn', // Chinese (China)
		'zh_HK' => 'google.com.hk', // Chinese (Hong Kong)
		'zh_TW' => 'google.com.tw', // Chinese (Taiwan)
		'co' => '', // Corsican
		'hr' => 'google.hr', // Croatian
		'cs_CZ' => 'google.cz', // Czech
		'da_DK' => 'google.dk', // Danish
		'dv' => '', // Dhivehi
		'nl_NL' => 'google.nl', // Dutch
		'nl_BE' => 'google.be', // Dutch (Belgium)
		'dzo' => '', // Dzongkha
		'art_xemoji' => '', // Emoji
		'en_AU' => 'google.com.au', // English (Australia)
		'en_CA' => 'google.ca', // English (Canada)
		'en_NZ' => 'google.co.nz', // English (New Zealand)
		'en_ZA' => 'google.co.za', // English (South Africa)
		'en_GB' => 'google.co.uk', // English (UK)
		'eo' => '', // Esperanto
		'et' => 'google.ee', // Estonian
		'fo' => '', // Faroese
		'fi' => 'google.fi', // Finnish
		'fr_BE' => 'google.be', // French (Belgium)
		'fr_CA' => 'google.ca', // French (Canada)
		'fr_FR' => 'google.fr', // French (France)
		'fy' => '', // Frisian
		'fur' => '', // Friulian
		'fuc' => '', // Fulah
		'gl_ES' => '', // Galician
		'ka_GE' => 'google.ge', // Georgian
		'de_DE' => 'google.de', // German
		'de_CH' => 'google.ch', // German (Switzerland)
		'el' => 'google.gr', // Greek
		'gn' => '', // Guaraní
		'gu' => '', // Gujarati
		'haw_US' => 'google.com', // Hawaiian
		'haz' => '', // Hazaragi
		'he_IL' => 'google.co.il', // Hebrew
		'hi_IN' => 'google.co.in', // Hindi
		'hu_HU' => 'google.hu', // Hungarian
		'is_IS' => 'google.is', // Icelandic
		'ido' => '', // Ido
		'id_ID' => 'google.co.id', // Indonesian
		'ga' => 'google.ie', // Irish
		'it_IT' => 'google.it', // Italian
		'ja' => 'google.co.jp', // Japanese
		'jv_ID' => '', // Javanese
		'kab' => '', // Kabyle
		'kn' => '', // Kannada
		'kk' => '', // Kazakh
		'km' => '', // Khmer
		'kin' => '', // Kinyarwanda
		'ky_KY' => '', // Kirghiz
		'ko_KR' => 'google.co.kr', // Korean
		'ckb' => '', // Kurdish (Sorani)
		'lo' => 'google.la', // Lao
		'lv' => 'google.lv', // Latvian
		'li' => 'google.li', // Limburgish
		'lin' => '', // Lingala
		'lt_LT' => 'google.lt', // Lithuanian
		'lb_LU' => 'google.lu', // Luxembourgish
		'mk_MK' => 'google.mk', // Macedonian
		'mg_MG' => 'google.mg', // Malagasy
		'ms_MY' => 'google.com.my', // Malay
		'ml_IN' => '', // Malayalam
		'mri' => '', // Maori
		'mr' => '', // Marathi
		'xmf' => '', // Mingrelian
		'mn' => 'google.mn', // Mongolian
		'me_ME' => 'google.me', // Montenegrin
		'ary' => 'google.co.ma', // Moroccan Arabic
		'my_MM' => 'google.com.mm', // Myanmar (Burmese)
		'ne_NP' => 'google.com.np', // Nepali
		'nb_NO' => 'google.no', // Norwegian (Bokmål)
		'nn_NO' => 'google.no', // Norwegian (Nynorsk)
		'oci' => '', // Occitan
		'ory' => '', // Oriya
		'os' => '', // Ossetic
		'ps' => '', // Pashto
		'fa_IR' => '', // Persian
		'fa_AF' => 'google.com.af', // Persian (Afghanistan)
		'pl_PL' => 'google.pl', // Polish
		'pt_BR' => 'google.com.br', // Portuguese (Brazil)
		'pt_PT' => 'google.pt', // Portuguese (Portugal)
		'pa_IN' => '', // Punjabi
		'rhg' => '', // Rohingya
		'ro_RO' => 'google.ro', // Romanian
		'roh' => '', // Romansh Vallader
		'ru_RU' => 'google.ru', // Russian
		'ru_UA' => 'google.com.ua', // Russian (Ukraine)
		'rue' => '', // Rusyn
		'sah' => '', // Sakha
		'sa_IN' => 'google.co.in', // Sanskrit
		'srd' => '', // Sardinian
		'gd' => '', // Scottish Gaelic
		'sr_RS' => 'google.rs', // Serbian
		'szl' => '', // Silesian
		'snd' => '', // Sindhi
		'si_LK' => '', // Sinhala
		'sk_SK' => 'google.sk', // Slovak
		'sl_SI' => 'google.si', // Slovenian
		'so_SO' => 'google.so', // Somali
		'azb' => 'google.az', // South Azerbaijani
		'es_AR' => 'google.com.ar', // Spanish (Argentina)
		'es_CL' => 'google.cl', // Spanish (Chile)
		'es_CO' => 'google.com.co', // Spanish (Colombia)
		'es_MX' => 'google.com.mx', // Spanish (Mexico)
		'es_PE' => 'google.com.pe', // Spanish (Peru)
		'es_PR' => 'google.com.pr', // Spanish (Puerto Rico)
		'es_ES' => 'google.es', // Spanish (Spain)
		'es_VE' => 'google.co.ve', // Spanish (Venezuela)
		'su_ID' => '', // Sundanese
		'sw' => '', // Swahili
		'sv_SE' => 'google.se', // Swedish
		'gsw' => '', // Swiss German
		'tl' => 'google.com.ph', // Tagalog
		'tg' => 'google.com.tj', // Tajik
		'tzm' => '', // Tamazight (Central Atlas)
		'ta_IN' => '', // Tamil
		'ta_LK' => 'google.lk', // Tamil (Sri Lanka)
		'tt_RU' => '', // Tatar
		'te' => '', // Telugu
		'th' => 'google.co.th', // Thai
		'bo' => '', // Tibetan
		'tir' => '', // Tigrinya
		'tr_TR' => 'google.com.tr', // Turkish
		'tuk' => 'google.tm', // Turkmen
		'twd' => '', // Tweants
		'ug_CN' => '', // Uighur
		'uk' => 'google.com.ua', // Ukrainian
		'ur' => '', // Urdu
		'uz_UZ' => 'google.co.uz', // Uzbek
		'vi' => 'google.com.vn', // Vietnamese
		'wa' => '', // Walloon
		'cy' => '', // Welsh
		'yor' => '', // Yoruba
	);

	if ( isset( $locales[ $the_locale ] ) && ! empty( $locales[ $the_locale ] ) ) {
		$domain = $locales[ $the_locale ];
	}

	return $domain;
}

function sijug_template_redirect() {
	global $wp_query;
	if ( is_search() ) {
		$q = $wp_query->query['s'];
		$q .= ' site:' . get_site_url();
		$q = urlencode( $q );
		$domain = sijug_get_google_domain();
		$redirect_url = 'https://www.' . $domain . '/search?q=' . $q;
		wp_redirect( $redirect_url );
		die();
	}
}
add_action( 'template_redirect', 'sijug_template_redirect' );

/*
How to Scrape https://make.wordpress.org/polyglots/teams/ for the $locales array:

var output = '';
jQuery('table').eq(0).find('tbody tr').each(function() {
    $this = jQuery(this);
    var locale = jQuery.trim( $this.find('td').eq(0).text() );
    var wpLocale = jQuery.trim( $this.find('td').eq(2).text() );

    output += "'" + wpLocale + "' => '', // " + locale + "\n";
});
console.log( output );
 */
