<?php
/**
 * @author           Pierre-Henry Soria <ph7software@gmail.com>
 * @copyright        (c) 2012-2013, Pierre-Henry Soria. All Rights Reserved.
 * @license          GNU General Public License; See PH7.LICENSE.txt and PH7.COPYRIGHT.txt in the root directory.
 * @package          PH7 / Inc
 */

define('PH7', 1);
require '_ajax.inc.php';

if (!empty($_POST['dir']))
{
    if (is_directory($_POST['dir']))
        echo '<p class="success">' . $LANG['yes_is_dir'] . '</p>';
    else
        echo '<p class="error">' . $LANG['no_is_dir'] . '</p>';
}
