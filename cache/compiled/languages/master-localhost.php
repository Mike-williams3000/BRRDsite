<?php
return [
    '@class' => 'Grav\\Common\\Config\\Config',
    'checksum' => 'a5e434e03f020589283957f3f83b89dd:e9abfd530d149d0a44474ab9015f0a75',
    'files' => [
        'system/languages' => [
            'cs' => [
                'file' => 'system/languages/cs.yaml',
                'modified' => 1446043720
            ],
            'de' => [
                'file' => 'system/languages/de.yaml',
                'modified' => 1446043720
            ],
            'en' => [
                'file' => 'system/languages/en.yaml',
                'modified' => 1446043720
            ],
            'fr' => [
                'file' => 'system/languages/fr.yaml',
                'modified' => 1446043720
            ],
            'it' => [
                'file' => 'system/languages/it.yaml',
                'modified' => 1446043720
            ],
            'nl' => [
                'file' => 'system/languages/nl.yaml',
                'modified' => 1446043720
            ],
            'ru' => [
                'file' => 'system/languages/ru.yaml',
                'modified' => 1446043720
            ]
        ]
    ],
    'data' => [
        'cs' => [
            'NICETIME' => [
                'NO_DATE_PROVIDED' => 'Datum nebylo vloženo',
                'BAD_DATE' => 'Chybné datum',
                'AGO' => 'zpět',
                'FROM_NOW' => 'od teď',
                'SECOND' => 'sekunda',
                'MINUTE' => 'minuta',
                'HOUR' => 'hodina',
                'DAY' => 'den',
                'WEEK' => 'týden',
                'MONTH' => 'měsíc',
                'YEAR' => 'rok',
                'DECADE' => 'dekáda',
                'SEC' => 'sek',
                'MIN' => 'min',
                'HR' => 'hod',
                'WK' => 't',
                'MO' => 'm',
                'YR' => 'r',
                'DEC' => 'dek',
                'SECOND_PLURAL' => 'sekundy',
                'MINUTE_PLURAL' => 'minuty',
                'HOUR_PLURAL' => 'hodiny',
                'DAY_PLURAL' => 'dny',
                'WEEK_PLURAL' => 'týdny',
                'MONTH_PLURAL' => 'měsíce',
                'YEAR_PLURAL' => 'roky',
                'DECADE_PLURAL' => 'dekády',
                'SEC_PLURAL' => 'sek',
                'MIN_PLURAL' => 'min',
                'HR_PLURAL' => 'hod',
                'WK_PLURAL' => 't',
                'MO_PLURAL' => 'm',
                'YR_PLURAL' => 'r',
                'DEC_PLURAL' => 'dek'
            ]
        ],
        'de' => [
            'INFLECTOR_IRREGULAR' => [
                'person' => 'Personen',
                'man' => 'Menschen',
                'child' => 'Kinder',
                'sex' => 'Geschlecht',
                'move' => 'Züge'
            ],
            'NICETIME' => [
                'NO_DATE_PROVIDED' => 'Keine Daten vorhanden',
                'BAD_DATE' => 'Falsches Datum',
                'AGO' => 'her',
                'FROM_NOW' => 'ab jetzt',
                'SECOND' => 'Sekunde',
                'MINUTE' => 'Minute',
                'HOUR' => 'Stunde',
                'DAY' => 'Tag',
                'WEEK' => 'Woche',
                'MONTH' => 'Monat',
                'YEAR' => 'Jahr',
                'DECADE' => 'Dekade',
                'SEC' => 'sek',
                'MIN' => 'min',
                'HR' => 'std',
                'WK' => 'wo',
                'MO' => 'mo',
                'YR' => 'yh',
                'DEC' => 'dec',
                'SECOND_PLURAL' => 'Sekunden',
                'MINUTE_PLURAL' => 'Minuten',
                'HOUR_PLURAL' => 'Stunden',
                'DAY_PLURAL' => 'Tage',
                'WEEK_PLURAL' => 'Wochen',
                'MONTH_PLURAL' => 'Monate',
                'YEAR_PLURAL' => 'Jahre',
                'DECADE_PLURAL' => 'Dekaden',
                'SEC_PLURAL' => 'Sekunden',
                'MIN_PLURAL' => 'Minuten',
                'HR_PLURAL' => 'Stunden',
                'WK_PLURAL' => 'Wochen',
                'MO_PLURAL' => 'Monate',
                'YR_PLURAL' => 'Jahre',
                'DEC_PLURAL' => 'Dekaden'
            ]
        ],
        'en' => [
            'FRONTMATTER_ERROR_PAGE' => '---
title: %1$s
---

# Error: Invalid Frontmatter

Path: `%2$s`

**%3$s**

```
%4$s
```',
            'INFLECTOR_PLURALS' => [
                '/(quiz)$/i' => '\\1zes',
                '/^(ox)$/i' => '\\1en',
                '/([m|l])ouse$/i' => '\\1ice',
                '/(matr|vert|ind)ix|ex$/i' => '\\1ices',
                '/(x|ch|ss|sh)$/i' => '\\1es',
                '/([^aeiouy]|qu)ies$/i' => '\\1y',
                '/([^aeiouy]|qu)y$/i' => '\\1ies',
                '/(hive)$/i' => '\\1s',
                '/(?:([^f])fe|([lr])f)$/i' => '\\1\\2ves',
                '/sis$/i' => 'ses',
                '/([ti])um$/i' => '\\1a',
                '/(buffal|tomat)o$/i' => '\\1oes',
                '/(bu)s$/i' => '\\1ses',
                '/(alias|status)/i' => '\\1es',
                '/(octop|vir)us$/i' => '\\1i',
                '/(ax|test)is$/i' => '\\1es',
                '/s$/i' => 's',
                '/$/' => 's'
            ],
            'INFLECTOR_SINGULAR' => [
                '/(quiz)zes$/i' => '\\1',
                '/(matr)ices$/i' => '\\1ix',
                '/(vert|ind)ices$/i' => '\\1ex',
                '/^(ox)en/i' => '\\1',
                '/(alias|status)es$/i' => '\\1',
                '/([octop|vir])i$/i' => '\\1us',
                '/(cris|ax|test)es$/i' => '\\1is',
                '/(shoe)s$/i' => '\\1',
                '/(o)es$/i' => '\\1',
                '/(bus)es$/i' => '\\1',
                '/([m|l])ice$/i' => '\\1ouse',
                '/(x|ch|ss|sh)es$/i' => '\\1',
                '/(m)ovies$/i' => '\\1ovie',
                '/(s)eries$/i' => '\\1eries',
                '/([^aeiouy]|qu)ies$/i' => '\\1y',
                '/([lr])ves$/i' => '\\1f',
                '/(tive)s$/i' => '\\1',
                '/(hive)s$/i' => '\\1',
                '/([^f])ves$/i' => '\\1fe',
                '/(^analy)ses$/i' => '\\1sis',
                '/((a)naly|(b)a|(d)iagno|(p)arenthe|(p)rogno|(s)ynop|(t)he)ses$/i' => '\\1\\2sis',
                '/([ti])a$/i' => '\\1um',
                '/(n)ews$/i' => '\\1ews',
                '/s$/i' => ''
            ],
            'INFLECTOR_UNCOUNTABLE' => [
                0 => 'equipment',
                1 => 'information',
                2 => 'rice',
                3 => 'money',
                4 => 'species',
                5 => 'series',
                6 => 'fish',
                7 => 'sheep'
            ],
            'INFLECTOR_IRREGULAR' => [
                'person' => 'people',
                'man' => 'men',
                'child' => 'children',
                'sex' => 'sexes',
                'move' => 'moves'
            ],
            'INFLECTOR_ORDINALS' => [
                'default' => 'th',
                'first' => 'st',
                'second' => 'nd',
                'third' => 'rd'
            ],
            'NICETIME' => [
                'NO_DATE_PROVIDED' => 'No date provided',
                'BAD_DATE' => 'Bad date',
                'AGO' => 'ago',
                'FROM_NOW' => 'from now',
                'SECOND' => 'second',
                'MINUTE' => 'minute',
                'HOUR' => 'hour',
                'DAY' => 'day',
                'WEEK' => 'week',
                'MONTH' => 'month',
                'YEAR' => 'year',
                'DECADE' => 'decade',
                'SEC' => 'sec',
                'MIN' => 'min',
                'HR' => 'hr',
                'WK' => 'wk',
                'MO' => 'mo',
                'YR' => 'yr',
                'DEC' => 'dec',
                'SECOND_PLURAL' => 'seconds',
                'MINUTE_PLURAL' => 'minutes',
                'HOUR_PLURAL' => 'hours',
                'DAY_PLURAL' => 'days',
                'WEEK_PLURAL' => 'weeks',
                'MONTH_PLURAL' => 'months',
                'YEAR_PLURAL' => 'years',
                'DECADE_PLURAL' => 'decades',
                'SEC_PLURAL' => 'secs',
                'MIN_PLURAL' => 'mins',
                'HR_PLURAL' => 'hrs',
                'WK_PLURAL' => 'wks',
                'MO_PLURAL' => 'mos',
                'YR_PLURAL' => 'yrs',
                'DEC_PLURAL' => 'decs'
            ]
        ],
        'fr' => [
            'INFLECTOR_PLURALS' => [
                '/$/' => 's',
                '/(bijou|caillou|chou|genou|hibou|joujou|pou|au|eu|eau)$/' => '\\1x',
                '/(bleu|émeu|landau|lieu|pneu|sarrau)$/' => '\\1s',
                '/(b|cor|ém|gemm|soupir|trav|vant|vitr)ail$/' => '\\1aux',
                '/(s|x|z)$/' => '\\1',
                '/ail$/' => 'ails',
                '/al$/' => 'aux',
                '/s$/i' => 's'
            ],
            'INFLECTOR_SINGULAR' => [
                '/(bijou|caillou|chou|genou|hibou|joujou|pou|au|eu|eau)x$/' => '\\1',
                '/(b|cor|ém|gemm|soupir|trav|vant|vitr)aux$/' => '\\1ail',
                '/(journ|chev)aux$/' => '\\1al',
                '/ails$/' => 'ail',
                '/s$/i' => ''
            ],
            'INFLECTOR_IRREGULAR' => [
                'madame' => 'mesdames',
                'mademoiselle' => 'mesdemoiselles',
                'monsieur' => 'messieurs'
            ],
            'INFLECTOR_ORDINALS' => [
                'default' => 'ème',
                'first' => 'er',
                'second' => 'nd'
            ],
            'NICETIME' => [
                'NO_DATE_PROVIDED' => 'Aucune date',
                'BAD_DATE' => 'Date erronée',
                'AGO' => 'plus tôt',
                'FROM_NOW' => 'à partir de maintenant',
                'SECOND' => 'seconde',
                'MINUTE' => 'minute',
                'HOUR' => 'heure',
                'DAY' => 'jour',
                'WEEK' => 'semaine',
                'MONTH' => 'mois',
                'YEAR' => 'an',
                'DECADE' => 'décennie',
                'SEC' => 's',
                'MIN' => 'm',
                'HR' => 'h',
                'WK' => 's',
                'MO' => 'm',
                'YR' => 'a',
                'DEC' => 'd',
                'SECOND_PLURAL' => 'secondes',
                'MINUTE_PLURAL' => 'minutes',
                'HOUR_PLURAL' => 'heures',
                'DAY_PLURAL' => 'jours',
                'WEEK_PLURAL' => 'semaines',
                'MONTH_PLURAL' => 'mois',
                'YEAR_PLURAL' => 'ans',
                'DECADE_PLURAL' => 'décennies',
                'SEC_PLURAL' => 's',
                'MIN_PLURAL' => 'm',
                'HR_PLURAL' => 'h',
                'WK_PLURAL' => 's',
                'MO_PLURAL' => 'm',
                'YR_PLURAL' => 'a',
                'DEC_PLURAL' => 'd'
            ]
        ],
        'it' => [
            'NICETIME' => [
                'NO_DATE_PROVIDED' => 'Nessuna data fornita',
                'BAD_DATE' => 'Data errata',
                'AGO' => 'fa',
                'FROM_NOW' => 'da adesso',
                'SECOND' => 'secondo',
                'MINUTE' => 'minuto',
                'HOUR' => 'ora',
                'DAY' => 'giorno',
                'WEEK' => 'settimana',
                'MONTH' => 'mese',
                'YEAR' => 'anno',
                'DECADE' => 'decade',
                'SECOND_PLURAL' => 'secondi',
                'MINUTE_PLURAL' => 'minuti',
                'HOUR_PLURAL' => 'ore',
                'DAY_PLURAL' => 'giorni',
                'WEEK_PLURAL' => 'settimane',
                'MONTH_PLURAL' => 'mesi',
                'YEAR_PLURAL' => 'anni',
                'DECADE_PLURAL' => 'decadi'
            ]
        ],
        'nl' => [
            'INFLECTOR_IRREGULAR' => [
                'person' => 'personen',
                'man' => 'mensen',
                'child' => 'kinderen',
                'sex' => 'geslacht',
                'move' => 'verplaatsen'
            ],
            'NICETIME' => [
                'NO_DATE_PROVIDED' => 'geen datum opgegeven',
                'BAD_DATE' => 'Datumformaat onjuist',
                'AGO' => 'geleden',
                'FROM_NOW' => 'vanaf nu',
                'SECOND' => 'seconde',
                'MINUTE' => 'minuut',
                'HOUR' => 'uur',
                'DAY' => 'dag',
                'WEEK' => 'week',
                'MONTH' => 'maand',
                'YEAR' => 'jaar',
                'DECADE' => 'decenium',
                'SEC' => 'sec',
                'MIN' => 'min',
                'HR' => 'hr',
                'WK' => 'wk',
                'MO' => 'ma',
                'YR' => 'yr',
                'DEC' => 'dec',
                'SECOND_PLURAL' => 'seconden',
                'MINUTE_PLURAL' => 'minuten',
                'HOUR_PLURAL' => 'uren',
                'DAY_PLURAL' => 'dagen',
                'WEEK_PLURAL' => 'weken',
                'MONTH_PLURAL' => 'maanden',
                'YEAR_PLURAL' => 'jaren',
                'DECADE_PLURAL' => 'decennia',
                'SEC_PLURAL' => 'seconden',
                'MIN_PLURAL' => 'minuten',
                'HR_PLURAL' => 'uren',
                'WK_PLURAL' => 'weken',
                'MO_PLURAL' => 'maanden',
                'YR_PLURAL' => 'jaren',
                'DEC_PLURAL' => 'decs'
            ]
        ],
        'ru' => [
            'INFLECTOR_IRREGULAR' => [
                'person' => 'люди',
                'man' => 'человек',
                'child' => 'ребенок',
                'sex' => 'пол',
                'move' => 'движется'
            ],
            'NICETIME' => [
                'NO_DATE_PROVIDED' => 'Дата не указана',
                'BAD_DATE' => 'Неверная дата',
                'AGO' => 'назад',
                'FROM_NOW' => 'теперь',
                'SECOND' => 'секунда',
                'MINUTE' => 'минута',
                'HOUR' => 'час',
                'DAY' => 'день',
                'WEEK' => 'неделя',
                'MONTH' => 'месяц',
                'YEAR' => 'год',
                'DECADE' => 'десятилетие',
                'SEC' => 'с',
                'MIN' => 'мин',
                'HR' => 'ч',
                'WK' => 'нед',
                'MO' => 'мес',
                'YR' => 'г.',
                'DEC' => 'гг.',
                'SECOND_PLURAL' => 'секунды',
                'MINUTE_PLURAL' => 'минуты',
                'HOUR_PLURAL' => 'часы',
                'DAY_PLURAL' => 'дни',
                'WEEK_PLURAL' => 'недели',
                'MONTH_PLURAL' => 'месяцы',
                'YEAR_PLURAL' => 'годы',
                'DECADE_PLURAL' => 'десятилетия',
                'SEC_PLURAL' => 'с',
                'MIN_PLURAL' => 'мин',
                'HR_PLURAL' => 'ч',
                'WK_PLURAL' => 'нед',
                'MO_PLURAL' => 'мес',
                'YR_PLURAL' => 'г.',
                'DEC_PLURAL' => 'гг.'
            ]
        ]
    ]
];
