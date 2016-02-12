<?php
    class Contact {
      private $name;
      private $number;
      private $address;

      function __construct($contact_name, $contact_number, $contact_address)
      {
        $this->name = $contact_name;
        $this->number = $contact_number;
        $this->address = $contact_address;
      }
      function setName($new_name)
      {
        $this->name = $new_name;
      }
      function setNumber($new_number)
      {
        $this->number = $new_number;
      }
      function setAddress($new_address)
      {
        $this->address = $new_address;
      }
      function getName()
      {
        return $this->name;
      }
      function getNumber()
      {
        return $this->number;
      }
      function getAddress()
      {
        return $this->address;
      }
      function save()
      {
        array_push($_SESSION['list_of_contacts'], $this);
      }
      static function getAll()
      {
        return $_SESSION['list_of_contacts'];
      }
      static function deleteAll()
      {
        $_SESSION['list_of_contacts'] = array();
      }
    }
 ?>
