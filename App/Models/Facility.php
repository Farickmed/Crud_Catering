<?php

namespace App\Models;

use JsonSerializable;
use DateTime;

class Facility implements JsonSerializable{

    private int $id;
    private string $name;
    private string $creationDate;

    private int $locationId;
    private string $location;
    private array $tags;

    
    function __construct($id, $name, $creationDate, $locationId, $location, $tags = []){
        $this->id = $id;
        $this->name = $name;
        $this->creationDate = $creationDate;
        $this->locationId = $locationId;
        $this->location = $location;
        $this->tags = $tags;
    }

    public function getId(): int {
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
        return $this;
    }

    public function getName() : string {
        return $this->name;
      }
    
    
      public function setName($name) {
        $this->name = $name;
        return $this;
      }
      public function getCreationDate(): string {
        return $this->creationDate;
      }
    
      public function setCreationDate($date): self {
        $this->creationDate = $date;
        return $this;
      }
    
      public function getLocationId(): int {
        return $this->locationId;
      }
    
      public function setLocationId($locationId){
        $this->location = $locationId;
        return $this;
      }
      
    
      public function getLocation(): Location {
        return $this->location;
      }
    
      public function setLocation($location){
        $this->location = $location;
        return $this;
      }
    
    
      public function getTags(): array {
        return $this->tags;
      }
    
      
      public function setTags($tags){
        $this->tags = $tags;
        return $this;
      }
    
      //serialize output for status messages
      public function jsonSerialize(): mixed
      {
        return [
          'id' => $this->id,
          'name' => $this->name,
          'creationDate' => $this->creationDate,
          'location' => $this->location,
          'tags' => $this->tags
        ];
      }
}
?>