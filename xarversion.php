<?php
/**
 * Ratings Module
 *
 * @package modules
 * @copyright (C) 2002-2007 The Digital Development Foundation
 * @license GPL {@link http://www.gnu.org/licenses/gpl.html}
 *
 * @subpackage Xarigami Ratings Module
 * @copyright (C) 2009-2011 2skies.com
 * @link http://xarigami.com/project/xarigami_ratings
 */
$modversion['name']           = 'Ratings';
$modversion['id']             = '41';
$modversion['version']        = '1.3.0';
$modversion['displayname']    =  'Ratings';
$modversion['description']    = 'Rate siteitems';
$modversion['credits']        = 'xardocs/credits.txt';
$modversion['help']           = 'xardocs/help.txt';
$modversion['changelog']      = 'xardocs/changelog.txt';
$modversion['license']        = 'xardocs/license.txt';
$modversion['coding']         = 'xardocs/coding.txt';
$modversion['official']       = 1;
$modversion['author']         = 'Jim McDonald';
$modversion['contact']        = 'http://www.mcdee.net/';
$modversion['admin']          = 1;
$modversion['user']           = 0;
$modversion['class']          = 'Utility';
$modversion['category']       = 'Utilities';
$modversion['dependencyinfo']   = array(
                                    0 => array(
                                            'name' => 'core',
                                            'version_ge' => '1.4.0'
                                         )
                                  );
if (false) {
    xarML('Ratings');
    xarML('Rate site items');
}
?>
