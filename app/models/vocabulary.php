<?php
/**
 * Vocabulary
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
class Vocabulary extends AppModel {
/**
 * Model name
 *
 * @var string
 * @access public
 */
    var $name = 'Vocabulary';
/**
 * Model associations: hasMany
 *
 * @var array
 * @access public
 */
    var $hasMany = array(
            'Term' => array('className' => 'Term',
                                'foreignKey' => 'vocabulary_id',
                                'dependent' => false,
                                'conditions' => '',
                                'fields' => '',
                                'order' => 'Term.lft ASC',
                                'limit' => '3',
                                'offset' => '',
                                'exclusive' => '',
                                'finderQuery' => '',
                                'counterQuery' => ''
            )
        );
/**
 * Model associations: hasAndBelongsToMany
 *
 * @var array
 * @access public
 */
    var $hasAndBelongsToMany = array(
            'Type' => array('className' => 'Type',
                        'joinTable' => 'types_vocabularies',
                        'foreignKey' => 'vocabulary_id',
                        'associationForeignKey' => 'type_id',
                        'unique' => true,
                        'conditions' => '',
                        'fields' => '',
                        'order' => '',
                        'limit' => '',
                        'offset' => '',
                        'finderQuery' => '',
                        'deleteQuery' => '',
                        'insertQuery' => ''
            )
    );
}
?>