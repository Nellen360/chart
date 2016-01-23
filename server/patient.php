<?php

class Patient {
    
    private $hosNum;
    private $tableNum;
    
    public function __construct($patNum){
        //check if patient table already exists
        $database = new Database();
        $database->query('SELECT TableNum, Discharged FROM patients WHERE HosNum = :num');
        $database->bind(':num', $patNum);
        $row = $database->single();
        if($row){
            
        }else{
            add();
        }
    }
    
    //creates a new table for the patients obs
    private function add(){
        
    }
    
    // retrieves any existing obs for a patient from archive
    private function retrieveArchive(){
        
    }
    
    // retrieves obs data
    public function getObs(){
        
    }
    
    //archives a patients obs once they have been discharged
    public function archive(){
        
    }
    
    

}
?>