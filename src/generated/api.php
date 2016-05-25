<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin 1.0
// Source: google/protobuf/api.proto
//   Date: 2016-05-23 22:01:42

namespace google\protobuf {

  class Api extends \DrSlump\Protobuf\Message {

    /**  @var string */
    public $name = null;
    
    /**  @var \google\protobuf\Method[]  */
    public $methods = array();
    
    /**  @var \google\protobuf\Option[]  */
    public $options = array();
    
    /**  @var string */
    public $version = null;
    
    /**  @var \google\protobuf\SourceContext */
    public $source_context = null;
    
    /**  @var \google\protobuf\Mixin[]  */
    public $mixins = array();
    
    /**  @var int - \google\protobuf\Syntax */
    public $syntax = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.protobuf.Api');

      // OPTIONAL STRING name = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "name";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // REPEATED MESSAGE methods = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "methods";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\google\protobuf\Method';
      $descriptor->addField($f);

      // REPEATED MESSAGE options = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "options";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\google\protobuf\Option';
      $descriptor->addField($f);

      // OPTIONAL STRING version = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "version";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE source_context = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "source_context";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\google\protobuf\SourceContext';
      $descriptor->addField($f);

      // REPEATED MESSAGE mixins = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "mixins";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\google\protobuf\Mixin';
      $descriptor->addField($f);

      // OPTIONAL ENUM syntax = 7
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 7;
      $f->name      = "syntax";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\google\protobuf\Syntax';
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
     * @return \google\protobuf\Api
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
     * @return \google\protobuf\Api
     */
    public function setName( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <methods> has a value
     *
     * @return boolean
     */
    public function hasMethods(){
      return $this->_has(2);
    }
    
    /**
     * Clear <methods> value
     *
     * @return \google\protobuf\Api
     */
    public function clearMethods(){
      return $this->_clear(2);
    }
    
    /**
     * Get <methods> value
     *
     * @param int $idx
     * @return \google\protobuf\Method
     */
    public function getMethods($idx = NULL){
      return $this->_get(2, $idx);
    }
    
    /**
     * Set <methods> value
     *
     * @param \google\protobuf\Method $value
     * @return \google\protobuf\Api
     */
    public function setMethods(\google\protobuf\Method $value, $idx = NULL){
      return $this->_set(2, $value, $idx);
    }
    
    /**
     * Get all elements of <methods>
     *
     * @return \google\protobuf\Method[]
     */
    public function getMethodsList(){
     return $this->_get(2);
    }
    
    /**
     * Add a new element to <methods>
     *
     * @param \google\protobuf\Method $value
     * @return \google\protobuf\Api
     */
    public function addMethods(\google\protobuf\Method $value){
     return $this->_add(2, $value);
    }
    
    /**
     * Check if <options> has a value
     *
     * @return boolean
     */
    public function hasOptions(){
      return $this->_has(3);
    }
    
    /**
     * Clear <options> value
     *
     * @return \google\protobuf\Api
     */
    public function clearOptions(){
      return $this->_clear(3);
    }
    
    /**
     * Get <options> value
     *
     * @param int $idx
     * @return \google\protobuf\Option
     */
    public function getOptions($idx = NULL){
      return $this->_get(3, $idx);
    }
    
    /**
     * Set <options> value
     *
     * @param \google\protobuf\Option $value
     * @return \google\protobuf\Api
     */
    public function setOptions(\google\protobuf\Option $value, $idx = NULL){
      return $this->_set(3, $value, $idx);
    }
    
    /**
     * Get all elements of <options>
     *
     * @return \google\protobuf\Option[]
     */
    public function getOptionsList(){
     return $this->_get(3);
    }
    
    /**
     * Add a new element to <options>
     *
     * @param \google\protobuf\Option $value
     * @return \google\protobuf\Api
     */
    public function addOptions(\google\protobuf\Option $value){
     return $this->_add(3, $value);
    }
    
    /**
     * Check if <version> has a value
     *
     * @return boolean
     */
    public function hasVersion(){
      return $this->_has(4);
    }
    
    /**
     * Clear <version> value
     *
     * @return \google\protobuf\Api
     */
    public function clearVersion(){
      return $this->_clear(4);
    }
    
    /**
     * Get <version> value
     *
     * @return string
     */
    public function getVersion(){
      return $this->_get(4);
    }
    
    /**
     * Set <version> value
     *
     * @param string $value
     * @return \google\protobuf\Api
     */
    public function setVersion( $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <source_context> has a value
     *
     * @return boolean
     */
    public function hasSourceContext(){
      return $this->_has(5);
    }
    
    /**
     * Clear <source_context> value
     *
     * @return \google\protobuf\Api
     */
    public function clearSourceContext(){
      return $this->_clear(5);
    }
    
    /**
     * Get <source_context> value
     *
     * @return \google\protobuf\SourceContext
     */
    public function getSourceContext(){
      return $this->_get(5);
    }
    
    /**
     * Set <source_context> value
     *
     * @param \google\protobuf\SourceContext $value
     * @return \google\protobuf\Api
     */
    public function setSourceContext(\google\protobuf\SourceContext $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <mixins> has a value
     *
     * @return boolean
     */
    public function hasMixins(){
      return $this->_has(6);
    }
    
    /**
     * Clear <mixins> value
     *
     * @return \google\protobuf\Api
     */
    public function clearMixins(){
      return $this->_clear(6);
    }
    
    /**
     * Get <mixins> value
     *
     * @param int $idx
     * @return \google\protobuf\Mixin
     */
    public function getMixins($idx = NULL){
      return $this->_get(6, $idx);
    }
    
    /**
     * Set <mixins> value
     *
     * @param \google\protobuf\Mixin $value
     * @return \google\protobuf\Api
     */
    public function setMixins(\google\protobuf\Mixin $value, $idx = NULL){
      return $this->_set(6, $value, $idx);
    }
    
    /**
     * Get all elements of <mixins>
     *
     * @return \google\protobuf\Mixin[]
     */
    public function getMixinsList(){
     return $this->_get(6);
    }
    
    /**
     * Add a new element to <mixins>
     *
     * @param \google\protobuf\Mixin $value
     * @return \google\protobuf\Api
     */
    public function addMixins(\google\protobuf\Mixin $value){
     return $this->_add(6, $value);
    }
    
    /**
     * Check if <syntax> has a value
     *
     * @return boolean
     */
    public function hasSyntax(){
      return $this->_has(7);
    }
    
    /**
     * Clear <syntax> value
     *
     * @return \google\protobuf\Api
     */
    public function clearSyntax(){
      return $this->_clear(7);
    }
    
    /**
     * Get <syntax> value
     *
     * @return int - \google\protobuf\Syntax
     */
    public function getSyntax(){
      return $this->_get(7);
    }
    
    /**
     * Set <syntax> value
     *
     * @param int - \google\protobuf\Syntax $value
     * @return \google\protobuf\Api
     */
    public function setSyntax( $value){
      return $this->_set(7, $value);
    }
  }
}

namespace google\protobuf {

  class Method extends \DrSlump\Protobuf\Message {

    /**  @var string */
    public $name = null;
    
    /**  @var string */
    public $request_type_url = null;
    
    /**  @var boolean */
    public $request_streaming = null;
    
    /**  @var string */
    public $response_type_url = null;
    
    /**  @var boolean */
    public $response_streaming = null;
    
    /**  @var \google\protobuf\Option[]  */
    public $options = array();
    
    /**  @var int - \google\protobuf\Syntax */
    public $syntax = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.protobuf.Method');

      // OPTIONAL STRING name = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "name";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING request_type_url = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "request_type_url";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL BOOL request_streaming = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "request_streaming";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING response_type_url = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "response_type_url";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL BOOL response_streaming = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "response_streaming";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // REPEATED MESSAGE options = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "options";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\google\protobuf\Option';
      $descriptor->addField($f);

      // OPTIONAL ENUM syntax = 7
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 7;
      $f->name      = "syntax";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\google\protobuf\Syntax';
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
     * @return \google\protobuf\Method
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
     * @return \google\protobuf\Method
     */
    public function setName( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <request_type_url> has a value
     *
     * @return boolean
     */
    public function hasRequestTypeUrl(){
      return $this->_has(2);
    }
    
    /**
     * Clear <request_type_url> value
     *
     * @return \google\protobuf\Method
     */
    public function clearRequestTypeUrl(){
      return $this->_clear(2);
    }
    
    /**
     * Get <request_type_url> value
     *
     * @return string
     */
    public function getRequestTypeUrl(){
      return $this->_get(2);
    }
    
    /**
     * Set <request_type_url> value
     *
     * @param string $value
     * @return \google\protobuf\Method
     */
    public function setRequestTypeUrl( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <request_streaming> has a value
     *
     * @return boolean
     */
    public function hasRequestStreaming(){
      return $this->_has(3);
    }
    
    /**
     * Clear <request_streaming> value
     *
     * @return \google\protobuf\Method
     */
    public function clearRequestStreaming(){
      return $this->_clear(3);
    }
    
    /**
     * Get <request_streaming> value
     *
     * @return boolean
     */
    public function getRequestStreaming(){
      return $this->_get(3);
    }
    
    /**
     * Set <request_streaming> value
     *
     * @param boolean $value
     * @return \google\protobuf\Method
     */
    public function setRequestStreaming( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <response_type_url> has a value
     *
     * @return boolean
     */
    public function hasResponseTypeUrl(){
      return $this->_has(4);
    }
    
    /**
     * Clear <response_type_url> value
     *
     * @return \google\protobuf\Method
     */
    public function clearResponseTypeUrl(){
      return $this->_clear(4);
    }
    
    /**
     * Get <response_type_url> value
     *
     * @return string
     */
    public function getResponseTypeUrl(){
      return $this->_get(4);
    }
    
    /**
     * Set <response_type_url> value
     *
     * @param string $value
     * @return \google\protobuf\Method
     */
    public function setResponseTypeUrl( $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <response_streaming> has a value
     *
     * @return boolean
     */
    public function hasResponseStreaming(){
      return $this->_has(5);
    }
    
    /**
     * Clear <response_streaming> value
     *
     * @return \google\protobuf\Method
     */
    public function clearResponseStreaming(){
      return $this->_clear(5);
    }
    
    /**
     * Get <response_streaming> value
     *
     * @return boolean
     */
    public function getResponseStreaming(){
      return $this->_get(5);
    }
    
    /**
     * Set <response_streaming> value
     *
     * @param boolean $value
     * @return \google\protobuf\Method
     */
    public function setResponseStreaming( $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <options> has a value
     *
     * @return boolean
     */
    public function hasOptions(){
      return $this->_has(6);
    }
    
    /**
     * Clear <options> value
     *
     * @return \google\protobuf\Method
     */
    public function clearOptions(){
      return $this->_clear(6);
    }
    
    /**
     * Get <options> value
     *
     * @param int $idx
     * @return \google\protobuf\Option
     */
    public function getOptions($idx = NULL){
      return $this->_get(6, $idx);
    }
    
    /**
     * Set <options> value
     *
     * @param \google\protobuf\Option $value
     * @return \google\protobuf\Method
     */
    public function setOptions(\google\protobuf\Option $value, $idx = NULL){
      return $this->_set(6, $value, $idx);
    }
    
    /**
     * Get all elements of <options>
     *
     * @return \google\protobuf\Option[]
     */
    public function getOptionsList(){
     return $this->_get(6);
    }
    
    /**
     * Add a new element to <options>
     *
     * @param \google\protobuf\Option $value
     * @return \google\protobuf\Method
     */
    public function addOptions(\google\protobuf\Option $value){
     return $this->_add(6, $value);
    }
    
    /**
     * Check if <syntax> has a value
     *
     * @return boolean
     */
    public function hasSyntax(){
      return $this->_has(7);
    }
    
    /**
     * Clear <syntax> value
     *
     * @return \google\protobuf\Method
     */
    public function clearSyntax(){
      return $this->_clear(7);
    }
    
    /**
     * Get <syntax> value
     *
     * @return int - \google\protobuf\Syntax
     */
    public function getSyntax(){
      return $this->_get(7);
    }
    
    /**
     * Set <syntax> value
     *
     * @param int - \google\protobuf\Syntax $value
     * @return \google\protobuf\Method
     */
    public function setSyntax( $value){
      return $this->_set(7, $value);
    }
  }
}

namespace google\protobuf {

  class Mixin extends \DrSlump\Protobuf\Message {

    /**  @var string */
    public $name = null;
    
    /**  @var string */
    public $root = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.protobuf.Mixin');

      // OPTIONAL STRING name = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "name";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING root = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "root";
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
     * @return \google\protobuf\Mixin
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
     * @return \google\protobuf\Mixin
     */
    public function setName( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <root> has a value
     *
     * @return boolean
     */
    public function hasRoot(){
      return $this->_has(2);
    }
    
    /**
     * Clear <root> value
     *
     * @return \google\protobuf\Mixin
     */
    public function clearRoot(){
      return $this->_clear(2);
    }
    
    /**
     * Get <root> value
     *
     * @return string
     */
    public function getRoot(){
      return $this->_get(2);
    }
    
    /**
     * Set <root> value
     *
     * @param string $value
     * @return \google\protobuf\Mixin
     */
    public function setRoot( $value){
      return $this->_set(2, $value);
    }
  }
}

