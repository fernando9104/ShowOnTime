<?php
/*
    Name:   CodEventType.php
    Autor:  Hawerd Gonzalez
    Date:   30-Jun-2016
    Desc:   se crea ORM para la tabla codeventtype.
 
    History change
    
    Name:
    Description:
    Date:
 
*/

require_once '/../MethodsORM.php';

class sistEvents extends methods{

    protected  $entityObj;
    protected  $nameTable;
    /* funcion constructora para definir los campos de la tabla de Base de Datos */
    public function __construct(){

        $this->entityObj = Array();         //Array por Defecto
        $this->nameTable = "codeventtype"; //nombre de la tabla
        
        //Definir aqui los campos de la Tabla Requerida.
        $this->entityObj['eventTypeUUID']  = uniqid(mt_rand(),true);
        $this->entityObj['eventTypeDesc']  = "";
        $this->entityObj['eventTypeCode']  = "";
        $this->entityObj['CreatedDT']       = "";
        $this->entityObj['CreatedBy']       = "";
        $this->entityObj['UpdatedDT']       = "";
        $this->entityObj['UpdatedBy']       = "";
        $this->entityObj['Active']          = "";
        $this->entityObj['ActiveDT']        = "";
        $this->entityObj['ActiveBy']        = "";
        //Contructor para la conexion de los metodos
        parent::__construct();  

    }//fin del constructor 

}//fin de la clase sistEvents


