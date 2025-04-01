<?php

class CyberaanvalModel
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

    public function getAllCyberaanvallen()
    {
        $sql = 'SELECT CA.Naam
                      ,CA.Jaar
                      ,CA.AantalSlachtoffers
                      ,CA.TypeAanval
                      ,CA.Schade
                FROM Cyberaanval as CA
                ORDER BY CA.Jaar DESC';

        $this->db->query($sql);

        return $this->db->resultSet();
    }
}
