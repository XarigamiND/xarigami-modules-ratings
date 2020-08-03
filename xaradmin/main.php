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
 * the main administration function
 *
 * @author Jim McDonald
 * @access public
 * @param no $ parameters
 * @return true on success or void on falure
 * @throws XAR_SYSTEM_EXCEPTION, 'NO_PERMISSION'
 */
function ratings_admin_main()
{
    // Security Check
    if (!xarSecurityCheck('AdminRatings')) return;

        xarResponseRedirect(xarModURL('ratings', 'admin', 'modifyconfig'));

    // success
    return true;
}

?>