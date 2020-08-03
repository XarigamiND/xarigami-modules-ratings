<?php
/**
 * Ratings Module
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
 * utility function pass individual menu items to the main menu
 *
 * @author the Ratings module development team
 * @return array containing the menulinks for the main menu items.
 */
function ratings_adminapi_getmenulinks()
{
    // Security Check
    if (xarSecurityCheck('AdminRatings')) {
        $menulinks[] = Array('url'   => xarModURL('ratings',
                                                  'admin',
                                                  'view'),
                              'title' => xarML('View ratings statistics per module'),
                              'label' => xarML('View Statistics'),
                              'active'=> array('view'));
        $menulinks[] = Array('url'   => xarModURL('ratings',
                                                  'admin',
                                                  'modifyconfig'),
                              'title' => xarML('Modify the ratings module configuration'),
                              'label' => xarML('Modify Config'),
                              'active'=>array('modifyconfig'));
    }

    if (empty($menulinks)){
        $menulinks = '';
    }

    return $menulinks;
}
?>
