<?php

if ( file_exists( dirname( __FILE__ ) . '/cmb2/init.php' ) ) {
	require_once dirname( __FILE__ ) . '/cmb2/init.php';
} elseif ( file_exists( dirname( __FILE__ ) . '/CMB2/init.php' ) ) {
	require_once dirname( __FILE__ ) . '/CMB2/init.php';
}

/** 
    REMOVE ABOVE LINES IF THEY
    ARE ALREADY ADDED IN functions.php
	
	**/
	 
/** 
    Include this file to functions.php
    for copy/paste below lines to functions.php to work
	
	**/

add_action( 'cmb2_admin_init', 'myTheme_location_metabox' );
function myTheme_location_metabox() {
	$prefix = 'myTheme_';
	$cmb_demo = new_cmb2_box( array(
		'id'            => $prefix . 'metabox',
		'title'         => esc_html__( 'Location Details', 'cmb2' ),
		'object_types'  => array( 'page', ), // Post type
		// 'show_on_cb' => 'yourprefix_show_if_front_page', // function should return a bool value
		// 'context'    => 'normal',
		// 'priority'   => 'high',
		// 'show_names' => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // true to keep the metabox closed by default
		// 'classes'    => 'extra-class', // Extra cmb2-wrap classes
		// 'classes_cb' => 'yourprefix_add_some_classes', // Add classes through a callback.
	) );
	
	$cmb_demo->add_field( array(
		'name'       => esc_html__( 'Location Title', 'cmb2' ),
		'desc'       => esc_html__( 'Enter Location Title, e.g: USA: Headquarters or CA: Regional Office', 'cmb2' ),
		'id'         => $prefix . 'l_title',
		'type'       => 'text'
	) );
	
	$cmb_demo->add_field( array(
		'name'       => esc_html__( 'Location Region', 'cmb2' ),
		'desc'       => esc_html__( 'Select location Region', 'cmb2' ),
		'id'         => $prefix . 'l_region',
		'type'             => 'select',
		'show_option_none' => true,
		'options'          => array(
			'AF' => esc_html__( 'Afghanistan', 'cmb2' ),
			'AX'   => esc_html__( 'Åland Islands', 'cmb2' ),
			'AL'     => esc_html__( 'Albania', 'cmb2' ),			
			'DZ' => esc_html__( 'Algeria', 'cmb2' ),
			'AS'   => esc_html__( 'American Samoa', 'cmb2' ),
			'AD'     => esc_html__( 'Andorra', 'cmb2' ),			
			'AO' => esc_html__( 'Angola', 'cmb2' ),
			'AI'   => esc_html__( 'Anguilla', 'cmb2' ),
			'AQ'     => esc_html__( 'Antarctica', 'cmb2' ),			
			'AG' => esc_html__( 'Antigua and Barbuda', 'cmb2' ),
			'AR'   => esc_html__( 'Argentina', 'cmb2' ),
			'AM'     => esc_html__( 'Armenia', 'cmb2' ),			
			'AW' => esc_html__( 'Aruba', 'cmb2' ),
			'AU'   => esc_html__( 'Australia', 'cmb2' ),
			'AT'     => esc_html__( 'Austria', 'cmb2' ),			
			'AZ' => esc_html__( 'Azerbaijan', 'cmb2' ),
			'BS'   => esc_html__( 'Bahamas', 'cmb2' ),
			'BH'     => esc_html__( 'Bahrain', 'cmb2' ),			
			'BD' => esc_html__( 'Bangladesh', 'cmb2' ),
			'BB'   => esc_html__( 'Barbados', 'cmb2' ),
			'BY'     => esc_html__( 'Belarus', 'cmb2' ),			
			'BE' => esc_html__( 'Belgium', 'cmb2' ),
			'BZ'   => esc_html__( 'Belize', 'cmb2' ),
			'BJ'     => esc_html__( 'Benin', 'cmb2' ),			
			'BM' => esc_html__( 'Bermuda', 'cmb2' ),
			'BT'   => esc_html__( 'Bhutan', 'cmb2' ),
			'BO'     => esc_html__( '"Bolivia, Plurinational State of"', 'cmb2' ),			
			'BQ' => esc_html__( 'Bonaire, Sint Eustatius and Saba', 'cmb2' ),
			'BA'   => esc_html__( 'Bosnia and Herzegovina', 'cmb2' ),
			'BW'     => esc_html__( 'Botswana', 'cmb2' ),			
			'BV' => esc_html__( 'Bouvet Island', 'cmb2' ),
			'BR'   => esc_html__( 'Brazil', 'cmb2' ),
			'IO'     => esc_html__( 'British Indian Ocean Territory', 'cmb2' ),			
			'BN' => esc_html__( 'Brunei Darussalam', 'cmb2' ),
			'BG'   => esc_html__( 'Bulgaria', 'cmb2' ),
			'BF'     => esc_html__( 'Burkina Faso', 'cmb2' ),			
			'BI' => esc_html__( 'Burundi', 'cmb2' ),
			'KH'   => esc_html__( 'Cambodia', 'cmb2' ),
			'CM'     => esc_html__( 'Cameroon', 'cmb2' ),			
			'CA' => esc_html__( 'Canada', 'cmb2' ),
			'CV'   => esc_html__( 'Cape Verde', 'cmb2' ),
			'KY'     => esc_html__( 'Cayman Islands', 'cmb2' ),			
			'CF' => esc_html__( 'Central African Republic', 'cmb2' ),
			'TD'   => esc_html__( 'Chad', 'cmb2' ),
			'CL'     => esc_html__( 'Chile', 'cmb2' ),			
			'CN' => esc_html__( 'China', 'cmb2' ),
			'CX'   => esc_html__( 'Christmas Island', 'cmb2' ),
			'CC'     => esc_html__( 'Cocos (Keeling) Islands', 'cmb2' ),			
			'CO' => esc_html__( 'Colombia', 'cmb2' ),
			'KM'   => esc_html__( 'Comoros', 'cmb2' ),
			'CG'     => esc_html__( 'Congo', 'cmb2' ),			
			'CD' => esc_html__( '"Congo, the Democratic Republic of the"', 'cmb2' ),
			'CK'   => esc_html__( 'Cook Islands', 'cmb2' ),
			'CR'     => esc_html__( 'Costa Rica', 'cmb2' ),
			
			'CI' => esc_html__( 'Côte d\'Ivoire', 'cmb2' ),
			'HR'   => esc_html__( 'Croatia', 'cmb2' ),
			'CU'     => esc_html__( 'Cuba', 'cmb2' ),
			
			'CW' => esc_html__( 'Curaçao', 'cmb2' ),
			'CY'   => esc_html__( 'Cyprus', 'cmb2' ),
			'CZ'     => esc_html__( 'Czech Republic', 'cmb2' ),
			
			'DK' => esc_html__( 'Denmark', 'cmb2' ),
			'DJ'   => esc_html__( 'Djibouti', 'cmb2' ),
			'DM'     => esc_html__( 'Dominica', 'cmb2' ),
			
			'DO' => esc_html__( 'Dominican Republic', 'cmb2' ),
			'EC'   => esc_html__( 'Ecuador', 'cmb2' ),
			'EG'     => esc_html__( 'Egypt', 'cmb2' ),
			
			'SV' => esc_html__( 'El Salvador', 'cmb2' ),
			'GQ'   => esc_html__( 'Equatorial Guinea', 'cmb2' ),
			'ER'     => esc_html__( 'Eritrea', 'cmb2' ),
			
			'EE' => esc_html__( 'Estonia', 'cmb2' ),
			'ET'   => esc_html__( 'Ethiopia', 'cmb2' ),
			'FK'     => esc_html__( 'Falkland Islands (Malvinas)', 'cmb2' ),
			'FO' => esc_html__( 'Faroe Islands', 'cmb2' ),
			'FJ'   => esc_html__( 'Fiji', 'cmb2' ),
			'FI'     => esc_html__( 'Finland', 'cmb2' ),
			
			'FR' => esc_html__( 'France', 'cmb2' ),
			'GF'   => esc_html__( 'French Guiana', 'cmb2' ),
			'PF'     => esc_html__( 'French Polynesia', 'cmb2' ),
			
			'TF' => esc_html__( 'French Southern Territories', 'cmb2' ),
			'GA'   => esc_html__( 'Gabon', 'cmb2' ),
			'GM'     => esc_html__( 'Gambia', 'cmb2' ),
			
			'GE' => esc_html__( 'Georgia', 'cmb2' ),
			'DE'   => esc_html__( 'Germany', 'cmb2' ),
			'GH'     => esc_html__( 'Ghana', 'cmb2' ),
			
			'GT' => esc_html__( 'Gibraltar', 'cmb2' ),
			'GR'   => esc_html__( 'Greece', 'cmb2' ),
			'GL'     => esc_html__( 'Greenland', 'cmb2' ),
			
			'GD' => esc_html__( 'Grenada', 'cmb2' ),
			'GP'   => esc_html__( 'Guadeloupe', 'cmb2' ),
			'GU'     => esc_html__( 'Guam', 'cmb2' ),
			
			'GT' => esc_html__( 'Guatemala', 'cmb2' ),
			'GG'   => esc_html__( 'Guernsey', 'cmb2' ),
			'GN'     => esc_html__( 'Guinea', 'cmb2' ),
			
			'GW' => esc_html__( 'Guinea-Bissau', 'cmb2' ),
			'GY'   => esc_html__( 'Guyana', 'cmb2' ),
			'HT'     => esc_html__( 'Haiti', 'cmb2' ),
			
			'HM' => esc_html__( 'Heard Island and McDonald Islands', 'cmb2' ),
			'VA'   => esc_html__( 'Holy See (Vatican City State)', 'cmb2' ),
			'HN'     => esc_html__( 'Honduras', 'cmb2' ),
			
			'HK' => esc_html__( 'Hong Kong', 'cmb2' ),
			'HU'   => esc_html__( 'Hungary', 'cmb2' ),
			'IS'     => esc_html__( 'Iceland', 'cmb2' ),
			
			'IN' => esc_html__( 'India', 'cmb2' ),
			'ID'   => esc_html__( 'Indonesia', 'cmb2' ),
			'IR'     => esc_html__( 'Iran, Islamic Republic of', 'cmb2' ),
			
			'IQ' => esc_html__( 'Iraq', 'cmb2' ),
			'IE'   => esc_html__( 'Ireland', 'cmb2' ),
			'IM'     => esc_html__( 'Isle of Man', 'cmb2' ),
			
			'IT' => esc_html__( 'Italy', 'cmb2' ),
			'JM'   => esc_html__( 'Jamaica', 'cmb2' ),
			'JP'     => esc_html__( 'Japan', 'cmb2' ),
			
			'JE' => esc_html__( 'Jersey', 'cmb2' ),
			'JO'   => esc_html__( 'Jordan', 'cmb2' ),
			'KZ'     => esc_html__( 'Kazakhstan', 'cmb2' ),
			
			'KE' => esc_html__( 'Kenya', 'cmb2' ),
			'KI'   => esc_html__( 'Kiribati', 'cmb2' ),
			'KP'     => esc_html__( 'Korea, Democratic People\'s Republic of', 'cmb2' ),
			
			'KR' => esc_html__( 'Korea, Republic of', 'cmb2' ),
			'KW'   => esc_html__( 'Kuwait', 'cmb2' ),
			'KG'     => esc_html__( 'Kyrgyzstan', 'cmb2' ),
			
			'LA' => esc_html__( 'Lao People\'s Democratic Republic', 'cmb2' ),
			'LV'   => esc_html__( 'Latvia', 'cmb2' ),
			'LB'     => esc_html__( 'Lebanon', 'cmb2' ),
			
			'LS' => esc_html__( 'Lesotho', 'cmb2' ),
			'LR'   => esc_html__( 'Liberia', 'cmb2' ),
			'LY'     => esc_html__( 'Libya', 'cmb2' ),
			
			'LI' => esc_html__( 'Liechtenstein', 'cmb2' ),
			'LT'   => esc_html__( 'Lithuania', 'cmb2' ),
			'LU'     => esc_html__( 'Luxembourg', 'cmb2' ),
			
			'MO' => esc_html__( 'Macao', 'cmb2' ),
			'MK'   => esc_html__( 'Macedonia, the Former Yugoslav Republic of', 'cmb2' ),
			'MG'     => esc_html__( 'Madagascar', 'cmb2' ),
			
			'MW' => esc_html__( 'Malawi', 'cmb2' ),
			'MY'   => esc_html__( 'Malaysia', 'cmb2' ),
			'MV'     => esc_html__( 'Maldives', 'cmb2' ),			
			'ML' => esc_html__( 'Mali', 'cmb2' ),
			'MT'   => esc_html__( 'Malta', 'cmb2' ),
			'MH'     => esc_html__( 'Marshall Islands', 'cmb2' ),
			
			'MQ' => esc_html__( 'Martinique', 'cmb2' ),
			'MR'   => esc_html__( 'Mauritania', 'cmb2' ),
			'MU'     => esc_html__( 'Mauritius', 'cmb2' ),
			
			'YT' => esc_html__( 'Mayotte', 'cmb2' ),
			'MX'   => esc_html__( 'Mexico', 'cmb2' ),
			'FM'     => esc_html__( 'Micronesia, Federated States of', 'cmb2' ),
			
			'MD' => esc_html__( 'Moldova, Republic of', 'cmb2' ),
			'MC'   => esc_html__( 'Monaco', 'cmb2' ),
			'MN'     => esc_html__( 'Mongolia', 'cmb2' ),
			
			'ME' => esc_html__( 'Montenegro', 'cmb2' ),
			'MS'   => esc_html__( 'Montserrat', 'cmb2' ),
			'MA'     => esc_html__( 'Morocco', 'cmb2' ),
			
			'MZ' => esc_html__( 'Mozambique', 'cmb2' ),
			'MM'   => esc_html__( 'Myanmar', 'cmb2' ),
			'NA'     => esc_html__( 'Namibia', 'cmb2' ),
			
			'NR' => esc_html__( 'Nauru', 'cmb2' ),
			'NP'   => esc_html__( 'Nepal', 'cmb2' ),
			'NL'     => esc_html__( 'Netherlands', 'cmb2' ),
			
			'NC' => esc_html__( 'New Caledonia', 'cmb2' ),
			'NZ'   => esc_html__( 'New Zealand', 'cmb2' ),
			'NI'     => esc_html__( 'Nicaragua', 'cmb2' ),
			
			'NE' => esc_html__( 'Niger', 'cmb2' ),
			'NG'   => esc_html__( 'Nigeria', 'cmb2' ),
			'NU'     => esc_html__( 'Niue', 'cmb2' ),
			
			'NF' => esc_html__( 'Norfolk Island', 'cmb2' ),
			'MP'   => esc_html__( 'Northern Mariana Islands', 'cmb2' ),
			'NO'     => esc_html__( 'Norway', 'cmb2' ),
			
			'OM' => esc_html__( 'Oman', 'cmb2' ),
			'PK'   => esc_html__( 'Pakistan', 'cmb2' ),
			'PW'     => esc_html__( 'Palau', 'cmb2' ),
			
			'PS' => esc_html__( 'Palestine, State of', 'cmb2' ),
			'PA'   => esc_html__( 'Panama', 'cmb2' ),
			'PG'     => esc_html__( 'Papua New Guinea', 'cmb2' ),
			
			'PY' => esc_html__( 'Paraguay', 'cmb2' ),
			'PE'   => esc_html__( 'Peru', 'cmb2' ),
			'PH'     => esc_html__( 'Philippines', 'cmb2' ),
			
			'PN' => esc_html__( 'Pitcairn', 'cmb2' ),
			'PL'   => esc_html__( 'Poland', 'cmb2' ),
			'PT'     => esc_html__( 'Portugal', 'cmb2' ),
			
			'PR' => esc_html__( 'Puerto Rico', 'cmb2' ),
			'QA'   => esc_html__( 'Qatar', 'cmb2' ),
			'RE'     => esc_html__( 'Réunion', 'cmb2' ),
			
			'RO' => esc_html__( 'Romania', 'cmb2' ),
			'RU'   => esc_html__( 'Russian Federation', 'cmb2' ),
			'RW'     => esc_html__( 'Rwanda', 'cmb2' ),
			
			'BL' => esc_html__( 'Saint Barthélemy', 'cmb2' ),
			'SH'   => esc_html__( 'Saint Helena, Ascension and Tristan da Cunha', 'cmb2' ),
			'KN'     => esc_html__( 'Saint Kitts and Nevis', 'cmb2' ),
			
			'LC' => esc_html__( 'Saint Lucia', 'cmb2' ),
			'MF'   => esc_html__( 'Saint Martin (French part)', 'cmb2' ),
			'PM'     => esc_html__( 'Saint Pierre and Miquelon', 'cmb2' ),
			
			
			'VC' => esc_html__( 'Saint Vincent and the Grenadines', 'cmb2' ),
			'WS'   => esc_html__( 'Samoa', 'cmb2' ),
			'SM'     => esc_html__( 'San Marino', 'cmb2' ),
			
			'ST' => esc_html__( 'Sao Tome and Principe', 'cmb2' ),
			'SA'   => esc_html__( 'Saudi Arabia', 'cmb2' ),
			'SN'     => esc_html__( 'Senegal', 'cmb2' ),
			
			'RS' => esc_html__( 'Serbia', 'cmb2' ),
			'SC'   => esc_html__( 'Seychelles', 'cmb2' ),
			'SL'     => esc_html__( 'Sierra Leone', 'cmb2' ),
			
			'SG' => esc_html__( 'Singapore', 'cmb2' ),
			'SX'   => esc_html__( 'Sint Maarten (Dutch part)', 'cmb2' ),
			'SK'     => esc_html__( 'Slovakia', 'cmb2' ),
			
			'SI' => esc_html__( 'Slovenia', 'cmb2' ),
			'SB'   => esc_html__( 'Solomon Islands', 'cmb2' ),
			
			'SO' => esc_html__( 'Somalia', 'cmb2' ),
			'ZA'   => esc_html__( 'South Africa', 'cmb2' ),
			'GS'     => esc_html__( 'South Georgia and the South Sandwich Islands', 'cmb2' ),
			
			'SS' => esc_html__( 'South Sudan', 'cmb2' ),
			'ES'   => esc_html__( 'Spain', 'cmb2' ),
			'LK'     => esc_html__( 'Sri Lanka', 'cmb2' ),
			
			'SD' => esc_html__( 'Sudan', 'cmb2' ),
			'SR'   => esc_html__( 'Suriname', 'cmb2' ),
			'SJ'     => esc_html__( 'Svalbard and Jan Mayen', 'cmb2' ),
			
			'SZ' => esc_html__( 'Swaziland', 'cmb2' ),
			'SE'   => esc_html__( 'Sweden', 'cmb2' ),
			'CH'     => esc_html__( 'Switzerland', 'cmb2' ),
			
			'SY' => esc_html__( 'Syrian Arab Republic', 'cmb2' ),
			'TW'   => esc_html__( 'Taiwan, Province of China', 'cmb2' ),
			'TJ'     => esc_html__( 'Tajikistan', 'cmb2' ),
			
			'TZ' => esc_html__( 'Tanzania, United Republic of', 'cmb2' ),
			'TH'   => esc_html__( 'Thailand', 'cmb2' ),
			'TL'     => esc_html__( 'Timor-Leste', 'cmb2' ),
			
			'TG' => esc_html__( 'Togo', 'cmb2' ),
			'TK'   => esc_html__( 'Tokelau', 'cmb2' ),
			'TO'     => esc_html__( 'Tonga', 'cmb2' ),
			
			'TT' => esc_html__( 'Trinidad and Tobago', 'cmb2' ),
			'TN'   => esc_html__( 'Tunisia', 'cmb2' ),
			'TR'     => esc_html__( 'Turkey', 'cmb2' ),
			
			'TM' => esc_html__( 'Turkmenistan', 'cmb2' ),
			'TC'   => esc_html__( 'Turks and Caicos Islands', 'cmb2' ),
			'TV'     => esc_html__( 'Tuvalu', 'cmb2' ),
			
			'UG' => esc_html__( 'Uganda', 'cmb2' ),
			'UA'   => esc_html__( 'Ukraine', 'cmb2' ),
			'AE'     => esc_html__( 'United Arab Emirates', 'cmb2' ),
			
			'GB' => esc_html__( 'United Kingdom', 'cmb2' ),
			'US'   => esc_html__( 'United States', 'cmb2' ),
			'UM'     => esc_html__( 'United States Minor Outlying Islands', 'cmb2' ),
			
			'UY' => esc_html__( 'Uruguay', 'cmb2' ),
			'UZ'   => esc_html__( 'Uzbekistan', 'cmb2' ),
			'VU'     => esc_html__( 'Vanuatu', 'cmb2' ),
			
			'VE' => esc_html__( 'Venezuela, Bolivarian Republic of', 'cmb2' ),
			'VN'   => esc_html__( 'Viet Nam', 'cmb2' ),
			'VG'     => esc_html__( 'Virgin Islands, British', 'cmb2' ),
			
			'VI' => esc_html__( 'Virgin Islands, U.S', 'cmb2' ),
			'WF'   => esc_html__( 'Wallis and Futuna', 'cmb2' ),
			'EH'     => esc_html__( 'Western Sahara', 'cmb2' ),
			
			'YE' => esc_html__( 'Yemen', 'cmb2' ),
			'ZM'   => esc_html__( 'Zambia', 'cmb2' ),
			'ZW'     => esc_html__( 'Zimbabwe', 'cmb2' ),
			
		),
	) );	

	
}