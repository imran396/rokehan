<?php

/**
 * BaseGadget
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $type
 * @property string $name
 * @property integer $sort_order
 * @property Doctrine_Collection $GadgetConfig
 * 
 * @method integer             getId()           Returns the current record's "id" value
 * @method string              getType()         Returns the current record's "type" value
 * @method string              getName()         Returns the current record's "name" value
 * @method integer             getSortOrder()    Returns the current record's "sort_order" value
 * @method Doctrine_Collection getGadgetConfig() Returns the current record's "GadgetConfig" collection
 * @method Gadget              setId()           Sets the current record's "id" value
 * @method Gadget              setType()         Sets the current record's "type" value
 * @method Gadget              setName()         Sets the current record's "name" value
 * @method Gadget              setSortOrder()    Sets the current record's "sort_order" value
 * @method Gadget              setGadgetConfig() Sets the current record's "GadgetConfig" collection
 * 
 * @package    OpenPNE
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseGadget extends opDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('gadget');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'comment' => 'Serial number',
             'length' => 4,
             ));
        $this->hasColumn('type', 'string', 64, array(
             'type' => 'string',
             'default' => '',
             'notnull' => true,
             'comment' => 'Gadget type',
             'length' => 64,
             ));
        $this->hasColumn('name', 'string', 64, array(
             'type' => 'string',
             'default' => '',
             'notnull' => true,
             'comment' => 'Gadget name',
             'length' => 64,
             ));
        $this->hasColumn('sort_order', 'integer', 4, array(
             'type' => 'integer',
             'comment' => 'Order to sort',
             'length' => 4,
             ));


        $this->index('sort_order_INDEX', array(
             'fields' => 
             array(
              0 => 'sort_order',
             ),
             ));
        $this->option('type', 'INNODB');
        $this->option('collate', 'utf8_unicode_ci');
        $this->option('charset', 'utf8');
        $this->option('comment', 'Saves informations of gadget');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('GadgetConfig', array(
             'local' => 'id',
             'foreign' => 'gadget_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}