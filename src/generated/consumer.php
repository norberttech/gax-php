<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin 1.0
// Source: google/api/consumer.proto
//   Date: 2016-05-23 22:01:42

namespace google\api {

  class ProjectProperties extends \DrSlump\Protobuf\Message {

    /**  @var \google\api\Property[]  */
    public $properties = array();
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.api.ProjectProperties');

      // REPEATED MESSAGE properties = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "properties";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\google\api\Property';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <properties> has a value
     *
     * @return boolean
     */
    public function hasProperties(){
      return $this->_has(1);
    }
    
    /**
     * Clear <properties> value
     *
     * @return \google\api\ProjectProperties
     */
    public function clearProperties(){
      return $this->_clear(1);
    }
    
    /**
     * Get <properties> value
     *
     * @param int $idx
     * @return \google\api\Property
     */
    public function getProperties($idx = NULL){
      return $this->_get(1, $idx);
    }
    
    /**
     * Set <properties> value
     *
     * @param \google\api\Property $value
     * @return \google\api\ProjectProperties
     */
    public function setProperties(\google\api\Property $value, $idx = NULL){
      return $this->_set(1, $value, $idx);
    }
    
    /**
     * Get all elements of <properties>
     *
     * @return \google\api\Property[]
     */
    public function getPropertiesList(){
     return $this->_get(1);
    }
    
    /**
     * Add a new element to <properties>
     *
     * @param \google\api\Property $value
     * @return \google\api\ProjectProperties
     */
    public function addProperties(\google\api\Property $value){
     return $this->_add(1, $value);
    }
  }
}

namespace google\api\Property {

  class PropertyType extends \DrSlump\Protobuf\Enum {
    const UNSPECIFIED = 0;
    const INT64 = 1;
    const BOOL = 2;
    const STRING = 3;
    const DOUBLE = 4;
  }
}
namespace google\api {

  class Property extends \DrSlump\Protobuf\Message {

    /**  @var string */
    public $name = null;
    
    /**  @var int - \google\api\Property\PropertyType */
    public $type = null;
    
    /**  @var string */
    public $description = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.api.Property');

      // OPTIONAL STRING name = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "name";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL ENUM type = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "type";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\google\api\Property\PropertyType';
      $descriptor->addField($f);

      // OPTIONAL STRING description = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "description";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <name> has a value
     *
     * @return boolean
     */
    public function hasName(){
      return $this->_has(1);
    }
    
    /**
     * Clear <name> value
     *
     * @return \google\api\Property
     */
    public function clearName(){
      return $this->_clear(1);
    }
    
    /**
     * Get <name> value
     *
     * @return string
     */
    public function getName(){
      return $this->_get(1);
    }
    
    /**
     * Set <name> value
     *
     * @param string $value
     * @return \google\api\Property
     */
    public function setName( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <type> has a value
     *
     * @return boolean
     */
    public function hasType(){
      return $this->_has(2);
    }
    
    /**
     * Clear <type> value
     *
     * @return \google\api\Property
     */
    public function clearType(){
      return $this->_clear(2);
    }
    
    /**
     * Get <type> value
     *
     * @return int - \google\api\Property\PropertyType
     */
    public function getType(){
      return $this->_get(2);
    }
    
    /**
     * Set <type> value
     *
     * @param int - \google\api\Property\PropertyType $value
     * @return \google\api\Property
     */
    public function setType( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <description> has a value
     *
     * @return boolean
     */
    public function hasDescription(){
      return $this->_has(3);
    }
    
    /**
     * Clear <description> value
     *
     * @return \google\api\Property
     */
    public function clearDescription(){
      return $this->_clear(3);
    }
    
    /**
     * Get <description> value
     *
     * @return string
     */
    public function getDescription(){
      return $this->_get(3);
    }
    
    /**
     * Set <description> value
     *
     * @param string $value
     * @return \google\api\Property
     */
    public function setDescription( $value){
      return $this->_set(3, $value);
    }
  }
}

