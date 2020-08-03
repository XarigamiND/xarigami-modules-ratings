<?php
/**
 * Displays standard Overview page
 *
 * @package modules
 * @copyright (C) 2002-2007 The Digital Development Foundation
 * @license GPL {@link http://www.gnu.org/licenses/gpl.html}
 *
 * @subpackage Xarigami Polls Module
 * @copyright (C) 2009 2skies.com
 * @link http://xarigami.com/project/xarigami_ratings
 */
/**
 * Overview function that displays the standard Overview page
 *
 */
function ratings_admin_overview()
{
   /* Security Check */
    if (!xarSecurityCheck('AdminRatings',0)) return;

    $data=array();

    /* if there is a separate overview function return data to it
     * else just call the main function that displays the overview
     */
        $data['menulinks'] = xarModAPIFunc('ratings','admin','getmenulinks');
    return xarTplModule('ratings', 'admin', 'main', $data,'main');
}

?>
