<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{
    public function run()
    {
        $countries = [
            [
                'name' => 'Afghanistan',
                'currency' => 'AFN',
            ],
            [
                'name' => 'Albania',
                'currency' => 'ALL',
            ],
            [
                'name' => 'Algeria',
                'currency' => 'DZD',
            ],
            [
                'name' => 'American Samoa',
                'currency' => 'USD',
            ],
            [
                'name' => 'Andorra',
                'currency' => 'EUR',
            ],
            [
                'name' => 'Angola',
                'currency' => 'AOA',
            ],
            [
                'name' => 'Anguilla',
                'currency' => 'XCD',
            ],
            [
                'name' => 'Antarctica',
                'currency' => 'ARS',
            ],
            [
                'name' => 'Antigua and Barbuda',
                'currency' => 'XCD',
            ],
            [
                'name' => 'Argentina',
                'currency' => 'ARS',
            ],
            [
                'name' => 'Armenia',
                'currency' => 'AMD',
            ],
            [
                'name' => 'Aruba',
                'currency' => 'AWG',
            ],
            [
                'name' => 'Australia',
                'currency' => 'AUD',
            ],
            [
                'name' => 'Austria',

                'currency' => 'EUR',],
            [
                'name' => 'Azerbaijan',
                'currency' => 'AZN',
            ],
            [
                'name' => 'Bahamas',
                'currency' => 'BSD',
            ],
            [
                'name' => 'Bahrain',
                'currency' => 'BHD',
            ],
            [
                'name' => 'Bangladesh',
                'currency' => 'BDT',
            ],
            [
                'name' => 'Barbados',
                'currency' => 'BBD',
            ],
            [
                'name' => 'Belarus',
                'currency' => 'BYN',
            ],
            [
                'name' => 'Belgium',
                'currency' => 'EUR',
            ],
            [
                'name' => 'Belize',
                'currency' => 'BZD',
            ],
            [
                'name' => 'Benin',
                'currency' => 'XOF',
            ],
            [
                'name' => 'Bermuda',
                'currency' => 'BMD',
            ],
            [
                'name' => 'Bhutan',
                'currency' => 'BTN',
            ],
            [
                'name' => 'Bolivia',
                'currency' => 'BOB',
            ],
            [
                'name' => 'Bosnia and Herzegovina',
                'currency' => 'BAM',
            ],
            [
                'name' => 'Botswana',
                'currency' => 'BWP',
            ],
            [
                'name' => 'Brazil',
                'currency' => 'BRL',
            ],
            [
                'name' => 'British Indian Ocean Territory',
                'currency' => 'USD',
            ],
            [
                'name' => 'British Virgin Islands',
                'currency' => 'USD',
            ],
            [
                'name' => 'Brunei',
                'currency' => 'BND',
            ],
            [
                'name' => 'Bulgaria',
                'currency' => 'BGN',
            ],
            [
                'name' => 'Burkina Faso',
                'currency' => 'XOF',
            ],
            [
                'name' => 'Burundi',
                'currency' => 'BIF',
            ],
            [
                'name' => 'Cambodia',
                'currency' => '',
            ],
            [
                'name' => 'Cameroon',
                'currency' => 'KHR',
            ],
            [
                'name' => 'Canada',
                'currency' => 'CAD',
            ],
            [
                'name' => 'Cape Verde',
                'currency' => 'CVE',
            ],
            [
                'name' => 'Cayman Islands',
                'currency' => 'KYD',
            ],
            [
                'name' => 'Central African Republic',
                'currency' => 'XAF',
            ],
            [
                'name' => 'Chad',
                'currency' => 'XAF',
            ],
            [
                'name' => 'Chile',
                'currency' => 'CLP',
            ],
            [
                'name' => 'China',
                'currency' => 'CYN',
            ],
            [
                'name' => 'Christmas Island',
                'currency' => 'AUD',
            ],
            [
                'name' => 'Cocos Islands',
                'currency' => 'AUD',
            ],
            [
                'name' => 'Colombia',
                'currency' => 'COP',
            ],
            [
                'name' => 'Comoros',
                'currency' => 'KMF',
            ],
            [
                'name' => 'Cook Islands',
                'currency' => '',
            ],
            [
                'name' => 'Costa Rica',
                'currency' => '',
            ],
            [
                'name' => 'Croatia',
                'currency' => '',
            ],
            [
                'name' => 'Cuba',
                'currency' => '',
            ],
            [
                'name' => 'Curacao',
                'currency' => '',
            ],
            [
                'name' => 'Cyprus',
                'currency' => '',
            ],
            [
                'name' => 'Czech Republic',
                'currency' => '',
            ],
            [
                'name' => 'Democratic Republic of the Congo',
                'currency' => '',
            ],
            [
                'name' => 'Denmark',
                'currency' => 'DKK',
            ],
            [
                'name' => 'Djibouti',
                'currency' => 'DJF',
            ],
            [
                'name' => 'Dominica',
                'currency' => 'XCD',
            ],
            [
                'name' => 'Dominican Republic',
                'currency' => 'DOP',
            ],
            [
                'name' => 'East Timor',
                'currency' => '',
            ],
            [
                'name' => 'Ecuador',
                'currency' => 'USD',
            ],
            [
                'name' => 'Egypt',
                'currency' => 'EGP',
            ],
            [
                'name' => 'El Salvador',
                'currency' => 'USD',
            ],
            [
                'name' => 'Equatorial Guinea',
                'currency' => 'XAF',
            ],
            [
                'name' => 'Eritrea',
                'currency' => 'ERN',
            ],
            [
                'name' => 'Estonia',
                'currency' => 'EUR',
            ],
            [
                'name' => 'Ethiopia',
                'currency' => 'ETP',
            ],
            [
                'name' => 'Falkland Islands',
                'currency' => '',
            ],
            [
                'name' => 'Faroe Islands',
                'currency' => 'FKP',
            ],
            [
                'name' => 'Fiji',
                'currency' => 'DKK',
            ],
            [
                'name' => 'Finland',
                'currency' => 'EUR',
            ],
            [
                'name' => 'France',
                'currency' => 'EUR',
            ],
            [
                'name' => 'French Polynesia',
                'currency' => 'XPF',
            ],
            [
                'name' => 'Gabon',
                'currency' => 'XAF',
            ],
            [
                'name' => 'Gambia',
                'currency' => 'GMD',
            ],
            [
                'name' => 'Georgia',
                'currency' => 'GEL',
            ],
            [
                'name' => 'Germany',
                'currency' => 'EUR',
            ],
            [
                'name' => 'Ghana',
                'currency' => 'GHS',
            ],
            [
                'name' => 'Gibraltar',
                'currency' => 'GIP',
            ],
            [
                'name' => 'Greece',
                'currency' => 'EUR',
            ],
            [
                'name' => 'Greenland',
                'currency' => 'DKK',
            ],
            [
                'name' => 'Grenada',
                'currency' => 'XCD',
            ],
            [
                'name' => 'Guam',
                'currency' => 'USD',
            ],
            [
                'name' => 'Guatemala',
                'currency' => 'GTQ',
            ],
            [
                'name' => 'Guernsey',
                'currency' => 'GBP',
            ],
            [
                'name' => 'Guinea',
                'currency' => 'GNF',
            ],
            [
                'name' => 'Guinea-Bissau',
                'currency' => 'XOF',
            ],
            [
                'name' => 'Guyana',
                'currency' => '',
            ],
            [
                'name' => 'Haiti',
                'currency' => 'GYD',
            ],
            [
                'name' => 'Honduras',
                'currency' => 'HNL',
            ],
            [
                'name' => 'Hong Kong',
                'currency' => 'HKD',
            ],
            [
                'name' => 'Hungary',
                'currency' => 'HUF',
            ],
            [
                'name' => 'Iceland',
                'currency' => 'ISK',
            ],
            [
                'name' => 'India',
                'currency' => 'INR',
            ],
            [
                'name' => 'Indonesia',
                'currency' => 'IDR',
            ],
            [
                'name' => 'Iran',
                'currency' => 'IRR',
            ],
            [
                'name' => 'Iraq',
                'currency' => 'IQD',
            ],
            [
                'name' => 'Ireland',
                'currency' => 'EUR',
            ],
            [
                'name' => 'Isle of Man',
                'currency' => 'BP',
            ],
            [
                'name' => 'Italy',
                'currency' => 'EUR',
            ],
            [
                'name' => 'Ivory Coast',
                'currency' => 'XOF',
            ],
            [
                'name' => 'Jamaica',
                'currency' => 'JMD',
            ],
            [
                'name' => 'Japan',
                'currency' => 'JPY',
            ],
            [
                'name' => 'Jersey',
                'currency' => 'JBP',
            ],
            [
                'name' => 'Jordan',
                'currency' => 'JOD',
            ],
            [
                'name' => 'Kazakhstan',
                'currency' => 'KZT',
            ],
            [
                'name' => 'Kenya',
                'currency' => 'KES',
            ],
            [
                'name' => 'Kiribati',
                'currency' => 'AUD',
            ],
            [
                'name' => 'Kosovo',
                'currency' => '',
            ],
            [
                'name' => 'Kuwait',
                'currency' => 'KWD',
            ],
            [
                'name' => 'Kyrgyzstan',
                'currency' => 'KGS',
            ],
            [
                'name' => 'Laos',
                'currency' => '',
            ],
            [
                'name' => 'Latvia',
                'currency' => 'EUR',
            ],
            [
                'name' => 'Lebanon',
                'currency' => 'LBP',
            ],
            [
                'name' => 'Lesotho',
                'currency' => 'LSL',
            ],
            [
                'name' => 'Liberia',
                'currency' => 'LRD',
            ],
            [
                'name' => 'Libya',
                'currency' => 'LYD',
            ],
            [
                'name' => 'Liechtenstein',
                'currency' => 'CHF',
            ],
            [
                'name' => 'Lithuania',
                'currency' => 'EUR',
            ],
            [
                'name' => 'Luxembourg',
                'currency' => 'EUR',
            ],
            [
                'name' => 'Macau',
                'currency' => 'MOP',
            ],
            [
                'name' => 'North Macedonia',
                'currency' => 'MKD',
            ],
            [
                'name' => 'Madagascar',
                'currency' => 'MGA',
            ],
            [
                'name' => 'Malawi',
                'currency' => 'MWK',
            ],
            [
                'name' => 'Malaysia',
                'currency' => 'MYR',
            ],
            [
                'name' => 'Maldives',
                'currency' => 'MVR',
            ],
            [
                'name' => 'Mali',
                'currency' => 'XOF',
            ],
            [
                'name' => 'Malta',
                'currency' => 'EUR',
            ],
            [
                'name' => 'Marshall Islands',
                'currency' => 'USD',
            ],
            [
                'name' => 'Mauritania',
                'currency' => 'EUR',
            ],
            [
                'name' => 'Mauritius',
                'currency' => 'MUR',
            ],
            [
                'name' => 'Mayotte',
                'currency' => 'EUR',
            ],
            [
                'name' => 'Mexico',
                'currency' => 'MXN',
            ],
            [
                'name' => 'Micronesia',
                'currency' => 'USD',
            ],
            [
                'name' => 'Moldova',
                'currency' => 'MDL',
            ],
            [
                'name' => 'Monaco',
                'currency' => 'EUR',
            ],
            [
                'name' => 'Mongolia',
                'currency' => 'MNT',
            ],
            [
                'name' => 'Montenegro',
                'currency' => 'EUR',
            ],
            [
                'name' => 'Montserrat',
                'currency' => 'XCD',
            ],
            [
                'name' => 'Morocco',
                'currency' => 'MAD',
            ],
            [
                'name' => 'Mozambique',
                'currency' => 'MZN',
            ],
            [
                'name' => 'Myanmar',
                'currency' => 'MMK',
            ],
            [
                'name' => 'Namibia',
                'currency' => 'NAD',
            ],
            [
                'name' => 'Nauru',
                'currency' => 'AUD',
            ],
            [
                'name' => 'Nepal',
                'currency' => 'NPR',
            ],
            [
                'name' => 'Netherlands',
                'currency' => 'EUR',
            ],
            [
                'name' => 'Netherlands Antilles',
                'currency' => 'EUR',
            ],
            [
                'name' => 'New Caledonia',
                'currency' => 'XEF',
            ],
            [
                'name' => 'New Zealand',
                'currency' => 'NZD',
            ],
            [
                'name' => 'Nicaragua',
                'currency' => 'NIO',
            ],
            [
                'name' => 'Niger',
                'currency' => 'XOF',
            ],
            [
                'name' => 'Nigeria',
                'currency' => 'NGN',
            ],
            [
                'name' => 'Niue',
                'currency' => 'NZD',
            ],
            [
                'name' => 'North Korea',
                'currency' => 'KPU',
            ],
            [
                'name' => 'Northern Mariana Islands',
                'currency' => 'USD',
            ],
            [
                'name' => 'Norway',
                'currency' => 'NOK',
            ],
            [
                'name' => 'Oman',
                'currency' => 'OMR',
            ],
            [
                'name' => 'Pakistan',
                'currency' => 'PKR',
            ],
            [
                'name' => 'Palau',
                'currency' => 'USD',
            ],
            [
                'name' => 'Palestine',
                'currency' => 'ISL',
            ],
            [
                'name' => 'Panama',
                'currency' => 'USD',
            ],
            [
                'name' => 'Papua New Guinea',
                'currency' => 'PGK',
            ],
            [
                'name' => 'Paraguay',
                'currency' => 'PYG',
            ],
            [
                'name' => 'Peru',
                'currency' => 'PEN',
            ],
            [
                'name' => 'Philippines',
                'currency' => 'PHP',
            ],
            [
                'name' => 'Pitcairn',
                'currency' => 'NZD',
            ],
            [
                'name' => 'Poland',
                'currency' => 'PLN',
            ],
            [
                'name' => 'Portugal',
                'currency' => 'EUR',
            ],
            [
                'name' => 'Puerto Rico',
                'currency' => 'USD',
            ],
            [
                'name' => 'Qatar',
                'currency' => 'QAR',
            ],
            [
                'name' => 'Republic of the Congo',
                'currency' => 'EUR',
            ],
            [
                'name' => 'Reunion',
                'currency' => 'EUR',
            ],
            [
                'name' => 'Romania',
                'currency' => 'EUR',
            ],
            [
                'name' => 'Russia',
                'currency' => 'RUB',
            ],
            [
                'name' => 'Rwanda',
                'currency' => 'EUR',
            ],
            [
                'name' => 'Saint Barthelemy',
                'currency' => 'EUR',
            ],
            [
                'name' => 'Saint Helena',
                'currency' => 'USD',
            ],
            [
                'name' => 'Saint Kitts and Nevis',
                'currency' => 'SPH',
            ],
            [
                'name' => 'Saint Lucia',
                'currency' => 'XCD',
            ],
            [
                'name' => 'Saint Martin',
                'currency' => 'XCD',
            ],
            [
                'name' => 'Saint Pierre and Miquelon',
                'currency' => 'EUR',
            ],
            [
                'name' => 'Saint Vincent and the Grenadines',
                'currency' => 'EUR',
            ],
            [
                'name' => 'Samoa',
                'currency' => '',
            ],
            [
                'name' => 'San Marino',
                'currency' => 'WST',
            ],
            [
                'name' => 'Sao Tome and Principe',
                'currency' => 'EUR',
            ],
            [
                'name' => 'Saudi Arabia',
                'currency' => 'SAR',
            ],
            [
                'name' => 'Senegal',
                'currency' => 'XOF',
            ],
            [
                'name' => 'Serbia',
                'currency' => 'RSD',
            ],
            [
                'name' => 'Seychelles',
                'currency' => 'SCR',
            ],
            [
                'name' => 'Sierra Leone',
                'currency' => 'SLL',
            ],
            [
                'name' => 'Singapore',
                'currency' => 'SGD',
            ],
            [
                'name' => 'Sint Maarten',
                'currency' => 'ANG',
            ],
            [
                'name' => 'Slovakia',
                'currency' => 'EUR',
            ],
            [
                'name' => 'Slovenia',
                'currency' => 'EUR',
            ],
            [
                'name' => 'Solomon Islands',
                'currency' => 'EUR',
            ],
            [
                'name' => 'Somalia',
                'currency' => 'EUR',
            ],
            [
                'name' => 'South Africa',
                'currency' => 'ZAR',
            ],
            [
                'name' => 'South Korea',
                'currency' => 'KRW',
            ],
            [
                'name' => 'South Sudan',
                'currency' => 'SSP',
            ],
            [
                'name' => 'Spain',
                'currency' => 'EUR',
            ],
            [
                'name' => 'Sri Lanka',
                'currency' => 'LKR',
            ],
            [
                'name' => 'Sudan',
                'currency' => 'SDG',
            ],
            [
                'name' => 'Suriname',
                'currency' => 'SRD',
            ],
            [
                'name' => 'Svalbard and Jan Mayen',
                'currency' => 'EUR',
            ],
            [
                'name' => 'Swaziland',
                'currency' => 'SZP',
            ],
            [
                'name' => 'Sweden',
                'currency' => 'SEK',
            ],
            [
                'name' => 'Switzerland',
                'currency' => 'CHF',
            ],
            [
                'name' => 'Syria',
                'currency' => 'SYP',
            ],
            [
                'name' => 'Taiwan',
                'currency' => 'TWD',
            ],
            [
                'name' => 'Tajikistan',
                'currency' => 'TJS',
            ],
            [
                'name' => 'Tanzania',
                'currency' => 'TZS',
            ],
            [
                'name' => 'Thailand',
                'currency' => 'THP',
            ],
            [
                'name' => 'Togo',
                'currency' => 'USD',
            ],
            [
                'name' => 'Tokelau',
                'currency' => 'USD',
            ],
            [
                'name' => 'Tonga',
                'currency' => 'USD',
            ],
            [
                'name' => 'Trinidad and Tobago',
                'currency' => 'XOF',
            ],
            [
                'name' => 'Tunisia',
                'currency' => 'TND',
            ],
            [
                'name' => 'Turkey',
                'currency' => 'TRY',
            ],
            [
                'name' => 'Turkmenistan',
                'currency' => 'TMT',
            ],
            [
                'name' => 'Turks and Caicos Islands',
                'currency' => 'USD',
            ],
            [
                'name' => 'Tuvalu',
                'currency' => 'TSD',
            ],
            [
                'name' => 'U.S. Virgin Islands',
                'currency' => 'USD',
            ],
            [
                'name' => 'Uganda',
                'currency' => 'UGX',
            ],
            [
                'name' => 'Ukraine',
                'currency' => 'EUR',
            ],
            [
                'name' => 'United Arab Emirates',
                'currency' => 'AED',
            ],
            [
                'name' => 'United Kingdom',
                'currency' => 'GBP',
            ],
            [
                'name' => 'United States',
                'currency' => 'USD',
            ],
            [
                'name' => 'Uruguay',
                'currency' => 'UYU',
            ],
            [
                'name' => 'Uzbekistan',
                'currency' => 'UZS',
            ],
            [
                'name' => 'Vanuatu',
                'currency' => 'VUP',
            ],
            [
                'name' => 'Vatican',
                'currency' => 'XOF',
            ],
            [
                'name' => 'Venezuela',
                'currency' => '',
            ],
            [
                'name' => 'Vietnam',
                'currency' => 'XOF',
            ],
            [
                'name' => 'Wallis and Futuna',
                'currency' => 'WFP',
            ],
            [
                'name' => 'Western Sahara',
                'currency' => 'EHD',
            ],
            [
                'name' => 'Yemen',
                'currency' => 'YER',
            ],
            [
                'name' => 'Zambia',
                'currency' => 'ZMW',
            ],
            [
                'name' => 'Zimbabwe',
                'currency' => 'BWP',
            ],
        ];

        foreach ($countries as $country)
        {
            Country::create($country);
        }
    }
}
