<?php

class ZangeressenModel
{
    private $db;

    public function __construct()
    {
        /** Door het maken van een database instantie
         *  kunnen we de database functies gebruiken
         *  en hebben we een verbinding met de database
         */
        $this->db = new Database();
    }

    public function getAllSingers()
    {
        $sql = 'SELECT ZARS.Naam
                      ,ZARS.Nettowaarde 
                      ,ZARS.Land
                      ,ZARS.Mobiel
                      ,ZARS.Leeftijd      
        
                FROM Zangeres as ZARS
                
                ORDER BY ZARS.Leeftijd DESC';

        $this->db->query($sql);

        return $this->db->resultSet();
    }
}