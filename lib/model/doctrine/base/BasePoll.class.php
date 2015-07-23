<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Poll', 'doctrine');

/**
 * BasePoll
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $item_id
 * @property string $title
 * @property string $route
 * @property string $body
 * @property integer $options_addable
 * @property integer $multiple_choice
 * @property integer $sort
 * @property integer $is_active
 * @property integer $is_featured
 * @property timestamp $created_at
 * @property timestamp $updated_at
 * @property integer $created_aid
 * @property integer $updated_aid
 * @property Admin $Admin
 * @property Admin $Admin_2
 * @property Doctrine_Collection $PollOption
 * 
 * @method integer             getId()              Returns the current record's "id" value
 * @method integer             getItemId()          Returns the current record's "item_id" value
 * @method string              getTitle()           Returns the current record's "title" value
 * @method string              getRoute()           Returns the current record's "route" value
 * @method string              getBody()            Returns the current record's "body" value
 * @method integer             getOptionsAddable()  Returns the current record's "options_addable" value
 * @method integer             getMultipleChoice()  Returns the current record's "multiple_choice" value
 * @method integer             getSort()            Returns the current record's "sort" value
 * @method integer             getIsActive()        Returns the current record's "is_active" value
 * @method integer             getIsFeatured()      Returns the current record's "is_featured" value
 * @method timestamp           getCreatedAt()       Returns the current record's "created_at" value
 * @method timestamp           getUpdatedAt()       Returns the current record's "updated_at" value
 * @method integer             getCreatedAid()      Returns the current record's "created_aid" value
 * @method integer             getUpdatedAid()      Returns the current record's "updated_aid" value
 * @method Admin               getAdmin()           Returns the current record's "Admin" value
 * @method Admin               getAdmin2()          Returns the current record's "Admin_2" value
 * @method Doctrine_Collection getPollOption()      Returns the current record's "PollOption" collection
 * @method Poll                setId()              Sets the current record's "id" value
 * @method Poll                setItemId()          Sets the current record's "item_id" value
 * @method Poll                setTitle()           Sets the current record's "title" value
 * @method Poll                setRoute()           Sets the current record's "route" value
 * @method Poll                setBody()            Sets the current record's "body" value
 * @method Poll                setOptionsAddable()  Sets the current record's "options_addable" value
 * @method Poll                setMultipleChoice()  Sets the current record's "multiple_choice" value
 * @method Poll                setSort()            Sets the current record's "sort" value
 * @method Poll                setIsActive()        Sets the current record's "is_active" value
 * @method Poll                setIsFeatured()      Sets the current record's "is_featured" value
 * @method Poll                setCreatedAt()       Sets the current record's "created_at" value
 * @method Poll                setUpdatedAt()       Sets the current record's "updated_at" value
 * @method Poll                setCreatedAid()      Sets the current record's "created_aid" value
 * @method Poll                setUpdatedAid()      Sets the current record's "updated_aid" value
 * @method Poll                setAdmin()           Sets the current record's "Admin" value
 * @method Poll                setAdmin2()          Sets the current record's "Admin_2" value
 * @method Poll                setPollOption()      Sets the current record's "PollOption" collection
 * 
 * @package    imdb
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasePoll extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('poll');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('item_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('title', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('route', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('body', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('options_addable', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('multiple_choice', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('sort', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('is_active', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('is_featured', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('created_at', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('updated_at', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0000-00-00 00:00:00',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('created_aid', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('updated_aid', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Admin', array(
             'local' => 'created_aid',
             'foreign' => 'id'));

        $this->hasOne('Admin as Admin_2', array(
             'local' => 'updated_aid',
             'foreign' => 'id'));

        $this->hasMany('PollOption', array(
             'local' => 'id',
             'foreign' => 'poll_id'));
    }
}