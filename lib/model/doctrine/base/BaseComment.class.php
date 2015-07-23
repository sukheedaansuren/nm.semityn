<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Comment', 'doctrine');

/**
 * BaseComment
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $object_type
 * @property integer $object_id
 * @property timestamp $created_at
 * @property integer $user_id
 * @property string $avator
 * @property string $ip_address
 * @property string $name
 * @property string $text
 * @property integer $nb_love
 * @property integer $is_active
 * @property integer $nb_like
 * @property integer $nb_unlike
 * 
 * @method integer   getId()          Returns the current record's "id" value
 * @method string    getObjectType()  Returns the current record's "object_type" value
 * @method integer   getObjectId()    Returns the current record's "object_id" value
 * @method timestamp getCreatedAt()   Returns the current record's "created_at" value
 * @method integer   getUserId()      Returns the current record's "user_id" value
 * @method string    getAvator()      Returns the current record's "avator" value
 * @method string    getIpAddress()   Returns the current record's "ip_address" value
 * @method string    getName()        Returns the current record's "name" value
 * @method string    getText()        Returns the current record's "text" value
 * @method integer   getNbLove()      Returns the current record's "nb_love" value
 * @method integer   getIsActive()    Returns the current record's "is_active" value
 * @method integer   getNbLike()      Returns the current record's "nb_like" value
 * @method integer   getNbUnlike()    Returns the current record's "nb_unlike" value
 * @method Comment   setId()          Sets the current record's "id" value
 * @method Comment   setObjectType()  Sets the current record's "object_type" value
 * @method Comment   setObjectId()    Sets the current record's "object_id" value
 * @method Comment   setCreatedAt()   Sets the current record's "created_at" value
 * @method Comment   setUserId()      Sets the current record's "user_id" value
 * @method Comment   setAvator()      Sets the current record's "avator" value
 * @method Comment   setIpAddress()   Sets the current record's "ip_address" value
 * @method Comment   setName()        Sets the current record's "name" value
 * @method Comment   setText()        Sets the current record's "text" value
 * @method Comment   setNbLove()      Sets the current record's "nb_love" value
 * @method Comment   setIsActive()    Sets the current record's "is_active" value
 * @method Comment   setNbLike()      Sets the current record's "nb_like" value
 * @method Comment   setNbUnlike()    Sets the current record's "nb_unlike" value
 * 
 * @package    imdb
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseComment extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('comment');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('object_type', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('object_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
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
        $this->hasColumn('user_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('avator', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('ip_address', 'string', 15, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 15,
             ));
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('text', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('nb_love', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
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
        $this->hasColumn('nb_like', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('nb_unlike', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}