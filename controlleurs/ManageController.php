<?php


class ManageController {
  
 private $dao;
    
    function __construct(ManageDAO $dao) {
        $this->dao = $dao;
    }

    
    function add(){
        
        require '/../vues/manage/add.php';
    }
    
    function update(){
        
        require '/../vues/manage/update.php';
    }
    
    function liste(){
        
        //$province =  $this->dao->getListProvince();
        require '/../vues/manage/list.php';
    }
    
    function view(){
        
        require '/../vues/manage/view.php';
    }
}

