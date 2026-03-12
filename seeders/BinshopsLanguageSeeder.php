<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use BinshopsBlog\Models\BinshopsLanguage;

class BinshopsLanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos = [
                array(
                  "id" =>  1,
                  "name" =>  "Afar",
                  "code" =>  "AA"
                ),
                array(
                  "id" =>  2,
                  "name" =>  "Abkhazian",
                  "code" =>  "AB"
                ),
                array(
                  "id" =>  3,
                  "name" =>  "Avestan",
                  "code" =>  "AE"
                ),
                array(
                  "id" =>  4,
                  "name" =>  "Afrikaans",
                  "code" =>  "AF"
                ),
                array(
                  "id" =>  5,
                  "name" =>  "Akan",
                  "code" =>  "AK"
                ),
                array(
                  "id" =>  6,
                  "name" =>  "Amharic",
                  "code" =>  "AM"
                ),
                array(
                  "id" =>  7,
                  "name" =>  "Aragonese",
                  "code" =>  "AN"
                ),
                array(
                  "id" =>  8,
                  "name" =>  "Arabic",
                  "code" =>  "AR"
                ),
                array(
                  "id" =>  9,
                  "name" =>  "Assamese",
                  "code" =>  "AS"
                ),
                array(
                  "id" =>  10,
                  "name" =>  "Avaric",
                  "code" =>  "AV"
                ),
                array(
                  "id" =>  11,
                  "name" =>  "Aymara",
                  "code" =>  "AY"
                ),
                array(
                  "id" =>  12,
                  "name" =>  "Azerbaijani",
                  "code" =>  "AZ"
                ),
                array(
                  "id" =>  13,
                  "name" =>  "Bashkir",
                  "code" =>  "BA"
                ),
                array(
                  "id" =>  14,
                  "name" =>  "Belarusian",
                  "code" =>  "BE"
                ),
                array(
                  "id" =>  15,
                  "name" =>  "Bulgarian",
                  "code" =>  "BG"
                ),
                array(
                  "id" =>  16,
                  "name" =>  "Bihari languages",
                  "code" =>  "BH"
                ),
                array(
                  "id" =>  17,
                  "name" =>  "Bislama",
                  "code" =>  "BI"
                ),
                array(
                  "id" =>  18,
                  "name" =>  "Bambara",
                  "code" =>  "BM"
                ),
                array(
                  "id" =>  19,
                  "name" =>  "Bengali",
                  "code" =>  "BN"
                ),
                array(
                  "id" =>  20,
                  "name" =>  "Tibetan",
                  "code" =>  "BO"
                ),
                array(
                  "id" =>  21,
                  "name" =>  "Breton",
                  "code" =>  "BR"
                ),
                array(
                  "id" =>  22,
                  "name" =>  "Bosnian",
                  "code" =>  "BS"
                ),
                array(
                  "id" =>  23,
                  "name" =>  "Catalan; Valencian",
                  "code" =>  "CA"
                ),
                array(
                  "id" =>  24,
                  "name" =>  "Chechen",
                  "code" =>  "CE"
                ),
                array(
                  "id" =>  25,
                  "name" =>  "Chamorro",
                  "code" =>  "CH"
                ),
                array(
                  "id" =>  26,
                  "name" =>  "Corsican",
                  "code" =>  "CO"
                ),
                array(
                  "id" =>  27,
                  "name" =>  "Cree",
                  "code" =>  "CR"
                ),
                array(
                  "id" =>  28,
                  "name" =>  "Czech",
                  "code" =>  "CS"
                ),
                array(
                  "id" =>  29,
                  "name" =>  "Church Slavic; Old Slavonic; Church Slavonic; Old Bulgarian; Old Church Slavonic",
                  "code" =>  "CU"
                ),
                array(
                  "id" =>  30,
                  "name" =>  "Chuvash",
                  "code" =>  "CV"
                ),
                array(
                  "id" =>  31,
                  "name" =>  "Welsh",
                  "code" =>  "CY"
                ),
                array(
                  "id" =>  32,
                  "name" =>  "Danish",
                  "code" =>  "DA"
                ),
                array(
                  "id" =>  33,
                  "name" =>  "German",
                  "code" =>  "DE"
                ),
                array(
                  "id" =>  34,
                  "name" =>  "Divehi; Dhivehi; Maldivian",
                  "code" =>  "DV"
                ),
                array(
                  "id" =>  35,
                  "name" =>  "Dzongkha",
                  "code" =>  "DZ"
                ),
                array(
                  "id" =>  36,
                  "name" =>  "Ewe",
                  "code" =>  "EE"
                ),
                array(
                  "id" =>  37,
                  "name" =>  "Greek; Modern (1453-)",
                  "code" =>  "EL"
                ),
                array(
                  "id" =>  38,
                  "name" =>  "English",
                  "code" =>  "EN"
                ),
                array(
                  "id" =>  39,
                  "name" =>  "Esperanto",
                  "code" =>  "EO"
                ),
                array(
                  "id" =>  40,
                  "name" =>  "Spanish",
                  "code" =>  "ES"
                ),
                array(
                  "id" =>  41,
                  "name" =>  "Estonian",
                  "code" =>  "ET"
                ),
                array(
                  "id" =>  42,
                  "name" =>  "Basque",
                  "code" =>  "EU"
                ),
                array(
                  "id" =>  43,
                  "name" =>  "Persian",
                  "code" =>  "FA"
                ),
                array(
                  "id" =>  44,
                  "name" =>  "Fulah",
                  "code" =>  "FF"
                ),
                array(
                  "id" =>  45,
                  "name" =>  "Finnish",
                  "code" =>  "FI"
                ),
                array(
                  "id" =>  46,
                  "name" =>  "Fijian",
                  "code" =>  "FJ"
                ),
                array(
                  "id" =>  47,
                  "name" =>  "Faroese",
                  "code" =>  "FO"
                ),
                array(
                  "id" =>  48,
                  "name" =>  "French",
                  "code" =>  "FR"
                ),
                array(
                  "id" =>  49,
                  "name" =>  "Western Frisian",
                  "code" =>  "FY"
                ),
                array(
                  "id" =>  50,
                  "name" =>  "Irish",
                  "code" =>  "GA"
                ),
                array(
                  "id" =>  51,
                  "name" =>  "Gaelic; Scottish Gaelic",
                  "code" =>  "GD"
                ),
                array(
                  "id" =>  52,
                  "name" =>  "Galician",
                  "code" =>  "GL"
                ),
                array(
                  "id" =>  53,
                  "name" =>  "Guarani",
                  "code" =>  "GN"
                ),
                array(
                  "id" =>  54,
                  "name" =>  "Gujarati",
                  "code" =>  "GU"
                ),
                array(
                  "id" =>  55,
                  "name" =>  "Manx",
                  "code" =>  "GV"
                ),
                array(
                  "id" =>  56,
                  "name" =>  "Hausa",
                  "code" =>  "HA"
                ),
                array(
                  "id" =>  57,
                  "name" =>  "Hebrew",
                  "code" =>  "HE"
                ),
                array(
                  "id" =>  58,
                  "name" =>  "Hindi",
                  "code" =>  "HI"
                ),
                array(
                  "id" =>  59,
                  "name" =>  "Hiri Motu",
                  "code" =>  "HO"
                ),
                array(
                  "id" =>  60,
                  "name" =>  "Croatian",
                  "code" =>  "HR"
                ),
                array(
                  "id" =>  61,
                  "name" =>  "Haitian; Haitian Creole",
                  "code" =>  "HT"
                ),
                array(
                  "id" =>  62,
                  "name" =>  "Hungarian",
                  "code" =>  "HU"
                ),
                array(
                  "id" =>  63,
                  "name" =>  "Armenian",
                  "code" =>  "HY"
                ),
                array(
                  "id" =>  64,
                  "name" =>  "Herero",
                  "code" =>  "HZ"
                ),
                array(
                  "id" =>  65,
                  "name" =>  "Interlingua (International Auxiliary Language Association)",
                  "code" =>  "IA"
                ),
                array(
                  "id" =>  66,
                  "name" =>  "Indonesian",
                  "code" =>  "ID"
                ),
                array(
                  "id" =>  67,
                  "name" =>  "Interlingue; Occidental",
                  "code" =>  "IE"
                ),
                array(
                  "id" =>  68,
                  "name" =>  "Igbo",
                  "code" =>  "IG"
                ),
                array(
                  "id" =>  69,
                  "name" =>  "Sichuan Yi; Nuosu",
                  "code" =>  "II"
                ),
                array(
                  "id" =>  70,
                  "name" =>  "Inupiaq",
                  "code" =>  "IK"
                ),
                array(
                  "id" =>  71,
                  "name" =>  "Ido",
                  "code" =>  "IO"
                ),
                array(
                  "id" =>  72,
                  "name" =>  "Icelandic",
                  "code" =>  "IS"
                ),
                array(
                  "id" =>  73,
                  "name" =>  "Italian",
                  "code" =>  "IT"
                ),
                array(
                  "id" =>  74,
                  "name" =>  "Inuktiut",
                  "code" =>  "IU"
                ),
                array(
                  "id" =>  75,
                  "name" =>  "Japanese",
                  "code" =>  "JA"
                ),
                array(
                  "id" =>  76,
                  "name" =>  "Javanese",
                  "code" =>  "JV"
                ),
                array(
                  "id" =>  77,
                  "name" =>  "Georgian",
                  "code" =>  "KA"
                ),
                array(
                  "id" =>  78,
                  "name" =>  "Kongo",
                  "code" =>  "KG"
                ),
                array(
                  "id" =>  79,
                  "name" =>  "Kikuyu; Gikuyu",
                  "code" =>  "KI"
                ),
                array(
                  "id" =>  80,
                  "name" =>  "Kuanyama; Kwanyama",
                  "code" =>  "KJ"
                ),
                array(
                  "id" =>  81,
                  "name" =>  "Kazakh",
                  "code" =>  "KK"
                ),
                array(
                  "id" =>  82,
                  "name" =>  "Kalaallisut; Greenlandic",
                  "code" =>  "KL"
                ),
                array(
                  "id" =>  83,
                  "name" =>  "Central Khmer",
                  "code" =>  "KM"
                ),
                array(
                  "id" =>  84,
                  "name" =>  "Kannada",
                  "code" =>  "KN"
                ),
                array(
                  "id" =>  85,
                  "name" =>  "Korean",
                  "code" =>  "KO"
                ),
                array(
                  "id" =>  86,
                  "name" =>  "Kanuri",
                  "code" =>  "KR"
                ),
                array(
                  "id" =>  87,
                  "name" =>  "Kashmiri",
                  "code" =>  "KS"
                ),
                array(
                  "id" =>  88,
                  "name" =>  "Kurdish",
                  "code" =>  "KU"
                ),
                array(
                  "id" =>  89,
                  "name" =>  "Komi",
                  "code" =>  "KV"
                ),
                array(
                  "id" =>  90,
                  "name" =>  "Cornish",
                  "code" =>  "KW"
                ),
                array(
                  "id" =>  91,
                  "name" =>  "Kirghiz; Kyrgyz",
                  "code" =>  "KY"
                ),
                array(
                  "id" =>  92,
                  "name" =>  "Latin",
                  "code" =>  "LA"
                ),
                array(
                  "id" =>  93,
                  "name" =>  "Luxembourgish; Letzeburgesch",
                  "code" =>  "LB"
                ),
                array(
                  "id" =>  94,
                  "name" =>  "Ganda",
                  "code" =>  "LG"
                ),
                array(
                  "id" =>  95,
                  "name" =>  "Limburgan; Limburger; Limburgish",
                  "code" =>  "LI"
                ),
                array(
                  "id" =>  96,
                  "name" =>  "Lingala",
                  "code" =>  "LN"
                ),
                array(
                  "id" =>  97,
                  "name" =>  "Lao",
                  "code" =>  "LO"
                ),
                array(
                  "id" =>  98,
                  "name" =>  "Lithuanian",
                  "code" =>  "LT"
                ),
                array(
                  "id" =>  99,
                  "name" =>  "Luba-Katanga",
                  "code" =>  "LU"
                ),
                array(
                  "id" =>  100,
                  "name" =>  "Latvian",
                  "code" =>  "LV"
                ),
                array(
                  "id" =>  101,
                  "name" =>  "Malagasy",
                  "code" =>  "MG"
                ),
                array(
                  "id" =>  102,
                  "name" =>  "Marshallese",
                  "code" =>  "MH"
                ),
                array(
                  "id" =>  103,
                  "name" =>  "Maori",
                  "code" =>  "MI"
                ),
                array(
                  "id" =>  104,
                  "name" =>  "Macedonian",
                  "code" =>  "MK"
                ),
                array(
                  "id" =>  105,
                  "name" =>  "Malayalam",
                  "code" =>  "ML"
                ),
                array(
                  "id" =>  106,
                  "name" =>  "Mongolian",
                  "code" =>  "MN"
                ),
                array(
                  "id" =>  107,
                  "name" =>  "Moldavian; Moldovan",
                  "code" =>  "MO"
                ),
                array(
                  "id" =>  108,
                  "name" =>  "Marathi",
                  "code" =>  "MR"
                ),
                array(
                  "id" =>  109,
                  "name" =>  "Malay",
                  "code" =>  "MS"
                ),
                array(
                  "id" =>  110,
                  "name" =>  "Maltese",
                  "code" =>  "MT"
                ),
                array(
                  "id" =>  111,
                  "name" =>  "Burmese",
                  "code" =>  "MY"
                ),
                array(
                  "id" =>  112,
                  "name" =>  "Nauru",
                  "code" =>  "NA"
                ),
                array(
                  "id" =>  113,
                  "name" =>  "Bokmal Norwegian; Norwegian Bokmal",
                  "code" =>  "NB"
                ),
                array(
                  "id" =>  114,
                  "name" =>  "Ndebele; North; North Ndebele",
                  "code" =>  "ND"
                ),
                array(
                  "id" =>  115,
                  "name" =>  "Nepali",
                  "code" =>  "NE"
                ),
                array(
                  "id" =>  116,
                  "name" =>  "Ndonga",
                  "code" =>  "NG"
                ),
                array(
                  "id" =>  117,
                  "name" =>  "Dutch; Flemish",
                  "code" =>  "NL"
                ),
                array(
                  "id" =>  118,
                  "name" =>  "Norwegian Nynorsk; Nynorsk, Norwegian",
                  "code" =>  "NN"
                ),
                array(
                  "id" =>  119,
                  "name" =>  "Norwegian",
                  "code" =>  "NO"
                ),
                array(
                  "id" =>  120,
                  "name" =>  "Ndebele; South; South Ndebele",
                  "code" =>  "NR"
                ),
                array(
                  "id" =>  121,
                  "name" =>  "Navajo; Navaho",
                  "code" =>  "NV"
                ),
                array(
                  "id" =>  122,
                  "name" =>  "Chichewa; Chewa; Nyanja",
                  "code" =>  "NY"
                ),
                array(
                  "id" =>  123,
                  "name" =>  "Occitan (post 1500)",
                  "code" =>  "OC"
                ),
                array(
                  "id" =>  124,
                  "name" =>  "Ojibwa",
                  "code" =>  "OJ"
                ),
                array(
                  "id" =>  125,
                  "name" =>  "Oromo",
                  "code" =>  "OM"
                ),
                array(
                  "id" =>  126,
                  "name" =>  "Oriya",
                  "code" =>  "OR"
                ),
                array(
                  "id" =>  127,
                  "name" =>  "Ossetian; Ossetic",
                  "code" =>  "OS"
                ),
                array(
                  "id" =>  128,
                  "name" =>  "Panjabi; Punjabi",
                  "code" =>  "PA"
                ),
                array(
                  "id" =>  129,
                  "name" =>  "Pali",
                  "code" =>  "PI"
                ),
                array(
                  "id" =>  130,
                  "name" =>  "Polish",
                  "code" =>  "PL"
                ),
                array(
                  "id" =>  131,
                  "name" =>  "Pushto; Pashto",
                  "code" =>  "PS"
                ),
                array(
                  "id" =>  132,
                  "name" =>  "Portuguese",
                  "code" =>  "PT"
                ),
                array(
                  "id" =>  133,
                  "name" =>  "Quechua",
                  "code" =>  "QU"
                ),
                array(
                  "id" =>  134,
                  "name" =>  "Romansh",
                  "code" =>  "RM"
                ),
                array(
                  "id" =>  135,
                  "name" =>  "Rundi",
                  "code" =>  "RN"
                ),
                array(
                  "id" =>  136,
                  "name" =>  "Romanian",
                  "code" =>  "RO"
                ),
                array(
                  "id" =>  137,
                  "name" =>  "Russian",
                  "code" =>  "RU"
                ),
                array(
                  "id" =>  138,
                  "name" =>  "Kinyarwanda",
                  "code" =>  "RW"
                ),
                array(
                  "id" =>  139,
                  "name" =>  "Sanskrit",
                  "code" =>  "SA"
                ),
                array(
                  "id" =>  140,
                  "name" =>  "Sardinian",
                  "code" =>  "SC"
                ),
                array(
                  "id" =>  141,
                  "name" =>  "Sindhi",
                  "code" =>  "SD"
                ),
                array(
                  "id" =>  142,
                  "name" =>  "Northern Sami",
                  "code" =>  "SE"
                ),
                array(
                  "id" =>  143,
                  "name" =>  "Sango",
                  "code" =>  "SG"
                ),
                array(
                  "id" =>  144,
                  "name" =>  "Sinhala; Sinhalese",
                  "code" =>  "SI"
                ),
                array(
                  "id" =>  145,
                  "name" =>  "Slovak",
                  "code" =>  "SK"
                ),
                array(
                  "id" =>  146,
                  "name" =>  "Slovenian",
                  "code" =>  "SL"
                ),
                array(
                  "id" =>  147,
                  "name" =>  "Samoan",
                  "code" =>  "SM"
                ),
                array(
                  "id" =>  148,
                  "name" =>  "Shona",
                  "code" =>  "SN"
                ),
                array(
                  "id" =>  149,
                  "name" =>  "Somali",
                  "code" =>  "SO"
                ),
                array(
                  "id" =>  150,
                  "name" =>  "Albanian",
                  "code" =>  "SQ"
                ),
                array(
                  "id" =>  151,
                  "name" =>  "Serbian",
                  "code" =>  "SR"
                ),
                array(
                  "id" =>  152,
                  "name" =>  "Swati",
                  "code" =>  "SS"
                ),
                array(
                  "id" =>  153,
                  "name" =>  "Sotho, Southern",
                  "code" =>  "ST"
                ),
                array(
                  "id" =>  154,
                  "name" =>  "Sundanese",
                  "code" =>  "SU"
                ),
                array(
                  "id" =>  155,
                  "name" =>  "Swedish",
                  "code" =>  "SV"
                ),
                array(
                  "id" =>  156,
                  "name" =>  "Swahili",
                  "code" =>  "SW"
                ),
                array(
                  "id" =>  157,
                  "name" =>  "Tamil",
                  "code" =>  "TA"
                ),
                array(
                  "id" =>  158,
                  "name" =>  "Telugu",
                  "code" =>  "TE"
                ),
                array(
                  "id" =>  159,
                  "name" =>  "Tajik",
                  "code" =>  "TG"
                ),
                array(
                  "id" =>  160,
                  "name" =>  "Thai",
                  "code" =>  "TH"
                ),
                array(
                  "id" =>  161,
                  "name" =>  "Tigrinya",
                  "code" =>  "TI"
                ),
                array(
                  "id" =>  162,
                  "name" =>  "Turkmen",
                  "code" =>  "TK"
                ),
                array(
                  "id" =>  163,
                  "name" =>  "Tagalog",
                  "code" =>  "TL"
                ),
                array(
                  "id" =>  164,
                  "name" =>  "Tswana",
                  "code" =>  "TN"
                ),
                array(
                  "id" =>  165,
                  "name" =>  "Tonga (Tonga Islands)",
                  "code" =>  "TO"
                ),
                array(
                  "id" =>  166,
                  "name" =>  "Turkish",
                  "code" =>  "TR"
                ),
                array(
                  "id" =>  167,
                  "name" =>  "Tsonga",
                  "code" =>  "TS"
                ),
                array(
                  "id" =>  168,
                  "name" =>  "Tatar",
                  "code" =>  "TT"
                ),
                array(
                  "id" =>  169,
                  "name" =>  "Twi",
                  "code" =>  "TW"
                ),
                array(
                  "id" =>  170,
                  "name" =>  "Tahitian",
                  "code" =>  "TY"
                ),
                array(
                  "id" =>  171,
                  "name" =>  "Uighur; Uyghur",
                  "code" =>  "UG"
                ),
                array(
                  "id" =>  172,
                  "name" =>  "Ukrainian",
                  "code" =>  "UK"
                ),
                array(
                  "id" =>  173,
                  "name" =>  "Urdu",
                  "code" =>  "UR"
                ),
                array(
                  "id" =>  174,
                  "name" =>  "Uzbek",
                  "code" =>  "UZ"
                ),
                array(
                  "id" =>  175,
                  "name" =>  "Venda",
                  "code" =>  "VE"
                ),
                array(
                  "id" =>  176,
                  "name" =>  "Vietnamese",
                  "code" =>  "VI"
                ),
                array(
                  "id" =>  177,
                  "name" =>  "Volapük",
                  "code" =>  "VO"
                ),
                array(
                  "id" =>  178,
                  "name" =>  "Walloon",
                  "code" =>  "WA"
                ),
                array(
                  "id" =>  179,
                  "name" =>  "Wolof",
                  "code" =>  "WO"
                ),
                array(
                  "id" =>  180,
                  "name" =>  "Xhosa",
                  "code" =>  "XH"
                ),
                array(
                  "id" =>  181,
                  "name" =>  "Yiddish",
                  "code" =>  "YI"
                ),
                array(
                  "id" =>  182,
                  "name" =>  "Yoruba",
                  "code" =>  "YO"
                ),
                array(
                  "id" =>  183,
                  "name" =>  "Zhuang; Chuang",
                  "code" =>  "ZA"
                ),
                array(
                  "id" =>  184,
                  "name" =>  "Chinese",
                  "code" =>  "ZH"
                ),
                array(
                  "id" =>  185,
                  "name" =>  "Zulu",
                  "code" =>  "ZU"
                )
        ];

        foreach ($datos as $key => $value) {
            BinshopsLanguage::updateOrCreate($value);
        }
    }
}
