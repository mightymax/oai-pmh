<?php

namespace DataProviderObject;

class Header extends DataProviderObject {
  private $identifier;
  private $datestamp;
  public $setSpec;
  const HEADER = "header";
  const HEADER_IDENTIFIER = "identifier";
  const HEADER_DATESTAMP = "datestamp";
  const HEADER_SETSPEC = "setSpec";
  public function __construct($data) {
    if (is_array ( $data )) {
      if (isset ( $data [self::HEADER_IDENTIFIER] ) && ! is_null ( $data [self::HEADER_IDENTIFIER] ) && is_string ( $data [self::HEADER_IDENTIFIER] )) {
        $this->identifier = $data [self::HEADER_IDENTIFIER];
      } else {
        echo '<pre>'; var_dump($data );
        die ( "17 no " . self::HEADER_IDENTIFIER );
      }
      if (isset ( $data [self::HEADER_DATESTAMP] ) && ! is_null ( $data [self::HEADER_DATESTAMP] ) && (is_string ( $data [self::HEADER_DATESTAMP] ) || is_numeric ( $data [self::HEADER_DATESTAMP] ))) {
        $this->datestamp = $data [self::HEADER_DATESTAMP];
      } else {
        die ( "22 no " . self::HEADER_DATESTAMP );
      }
      $this->setSpec = array ();
      if (isset ( $data [self::HEADER_SETSPEC] ) && ! is_null ( $data [self::HEADER_SETSPEC] )) {
        if (is_string ( $data [self::HEADER_SETSPEC] )) {
          $this->setSpec [] = $data [self::HEADER_SETSPEC];
        } else if (is_array ( $data [self::HEADER_SETSPEC] )) {
          foreach ( $data [self::HEADER_SETSPEC] as $setSpec ) {
            if (is_string ( $setSpec )) {
              $this->setSpec [] = $setSpec;
            } else {
              die ( "invalid " . self::HEADER_SETSPEC );
            }
          }
        } else {
          die ( "invalid " . self::HEADER_SETSPEC );
        }
      }
    } else {
      die ( "incorrect call header" );
    }
  }
  public function getIdentifier() {
    return $this->identifier;
  }
  public function getDatestamp() {
    return $this->datestamp;
  }
  public function getSetSpecs() {
    return $this->setSpec;
  }
}