<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "mask".
 *
 * Auto generated 25-02-2018 14:39
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'Mask',
  'description' => 'Create your own content elements and page templates. Easy to use, even without programming skills because of the comfortable drag and drop system. Stored in structured database tables. Style your frontend with Fluid tags. Ideal, if you want to switch from Templavoila.',
  'category' => 'plugin',
  'author' => 'WEBprofil - Gernot Ploiner e.U.',
  'author_email' => 'office@webprofil.at',
  'author_company' => 'WEBprofil - Gernot Ploiner e.U.',
  'state' => 'stable',
  'uploadfolder' => false,
  'createDirs' => '',
  'clearCacheOnLoad' => 1,
  'version' => '2.1.1',
  'constraints' => 
  array (
    'depends' => 
    array (
      'typo3' => '7.6.0-8.2.99',
    ),
    'conflicts' => 
    array (
    ),
    'suggests' => 
    array (
      'gridelements' => '',
    ),
  ),
  'autoload' => 
  array (
    'psr-4' => 
    array (
      'MASK\\Mask\\' => 'Classes/',
    ),
  ),
  'clearcacheonload' => true,
);

