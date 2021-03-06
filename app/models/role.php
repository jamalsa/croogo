<?php
/**
 * Role
 *
 * PHP version 5
 *
 * @category Model
 * @package  Croogo
 * @version  1.0
 * @author   Fahad Ibnay Heylaal <contact@fahad19.com>
 * @license  http://www.opensource.org/licenses/mit-license.php The MIT License
 * @link     http://www.croogo.org
 */
class Role extends AppModel {
/**
 * Model name
 *
 * @var string
 * @access public
 */
    var $name = 'Role';
/**
 * Behaviors used by the Model
 *
 * @var array
 * @access public
 */
    var $actsAs = array('Acl' => array('type' => 'requester'));

    function parentNode() {
        return null;
    }

}
?>