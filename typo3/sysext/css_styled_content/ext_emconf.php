<?php
$EM_CONF[$_EXTKEY] = array(
    'title' => 'CSS styled content',
    'description' => 'Contains configuration for CSS content-rendering of the table "tt_content". This is meant as a modern substitute for the classic "content (default)" template which was based more on <font>-tags, while this is pure CSS. It is intended to work with all modern browsers (which excludes the NS4 series).',
    'category' => 'fe',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Kasper Skaarhoj',
    'author_email' => 'kasperYYYY@typo3.com',
    'author_company' => 'Curby Soft Multimedia',
    'version' => '8.3.0',
    'constraints' => array(
        'depends' => array(
            'typo3' => '8.3.0-8.3.99',
        ),
        'conflicts' => array(),
        'suggests' => array(),
    ),
);
