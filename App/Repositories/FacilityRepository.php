<?php

class FacilityRepository extends Repository{

    public function getAllFacilities(){
        
        $objects = $this->db->executeGetListRecocrdsQyery("SELECCT id, name, creationDate, locationId, FROM Facility");
        $Facilities = [];
        
        foreach ($objects as $objects){

            $facility = new Facility($object->id, $object->name, $object->creationDate, $object->locationId)
            array_push($Facilities, $facility);
        }
        return $Facilities;
    }


    public function createNewFacility($facility){
        try{
          $this->db->executeQuery("INSERT INTO Facility(name, creationDate, locationId) VALUES (:name,:creationDate,:locationId)",
           ["name" => htmlspecialchars($facility->getName()), "creationDate" => htmlspecialchars($facility->getCreationDate()), "locationId" => htmlspecialchars($facility->getLocation()->getId())]);
        }
            $id = $this->db->getLastInsertedId();
        return $this->getFacilityById($id);
      }

    public function getFacilityById($id){

        $object = $this->db->executeGetOneRecordQuery("SELECT id, name, creationDate, locationId FROM Facility WHERE id = :id", ["id" => htmlspecialchars($id)]);
        return empty($object) ? null : new Facility($object->name, $object->creationDate, $object->locationId, $object->id);
      }
    
    public function getFacilityById($id){

        $object = $this->db->executeGetOneRecordQuery("SELECT id, name, creationDate, locationId FROM Facility WHERE id = :id", ["id" => htmlspecialchars($id)]);
        return empty($object) ? null : new Facility($object->name, $object->creationDate, $object->locationId, $object->id);
      }


    public function updateFacility($facility){
        try {
          $this->db->executeQuery("UPDATE Facility SET name= :name, creationDate= :creationDate, locationId= :locationId WHERE id = :id", ["id" => htmlspecialchars($facility->getId()), "name" => htmlspecialchars($facility->getName()), "creationDate" => htmlspecialchars($facility->getCreationDate()), "locationId" => htmlspecialchars($facility->getLocation()->getId())]);
          return $facility;
        }catch(PDOException $e){
          return $e->getMessage();
        }
      }
    
      
      public function deleteFacility($id){
        try {
          return $this->db->executeQuery("DELETE FROM Facility WHERE id = :id", ["id" => htmlspecialchars($id)]);
        }catch(PDOException $e){
          return $e->getMessage();
        }
      }
    }





}