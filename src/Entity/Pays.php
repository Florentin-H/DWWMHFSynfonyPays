<?php

namespace App\Entity;



class Pays{

    private $nom;
    private $capital;  
    private $description;  
    private static $pays=[];

    public function __construct($nom,  $capital, $description){
        $this->nom = $nom;
        $this->capital = $capital;
        $this->description = $description;
        self::$pays[] = $this;
    }
    
    public static function creerPays(){
        $p1 = new Pays("France", "Paris", "La France (Écouter), en forme longue depuis 1875 la République française (Écouter), est un État souverain transcontinental dont le territoire métropolitain s'étend en Europe de l'Ouest et dont le territoire ultramarin s'étend dans les océans Indien, Atlantique, Pacifique, ainsi qu'en Antarctique6 et en Amérique du Sud. Le pays a des frontières terrestres avec la Belgique, le Luxembourg, l'Allemagne, la Suisse, l'Italie, l'Espagne, Monaco et l'Andorre en Europe, auxquelles s'ajoutent les frontières terrestres avec le Brésil, le Suriname et les Pays-Bas aux Amériques. La France dispose d'importantes façades maritimes sur l'Atlantique, la Méditerranée, le Pacifique et l'océan Indien, lui permettant de bénéficier de la deuxième plus vaste zone économique exclusive du monde.");
        $p2 = new Pays("USA", "Washington DC", "Les États-Unis (prononcé : [etazyni]), en forme longue les États-Unis d'Amériqueb, également appelés informellement les USA ou moins exactement l'Amérique (en anglais : United States, United States of America, US, USA, America ; en espagnol : Estados Unidos, Estados Unidos de América), sont un État transcontinental dont la majorité du territoire se situe en Amérique du Nord. Les États-Unis ont la structure politique d'une république et d'un État fédéral à régime présidentiel, composé de cinquante États. La capitale fédérale, Washington, est située dans le district de Columbia, une zone enclavée dans l'Union, mais hors des cinquante États. La monnaie est le dollar américain. Il n'y a pas de langue officielle aux États-Unis, bien que la langue nationale soit de facto l'anglais américain");
        $p3 = new Pays("Ile Maurice", "Port Louis", "L'île Maurice (Moris en créole mauricien), autrefois appelée l'isle de France (1717-1814), Mauritius en anglais, est l'île principale de la république de Maurice. Elle est rattachée géographiquement à l'Afrique et est située dans l'Ouest de l'océan Indien, au cœur de l'archipel des Mascareignes, entre La Réunion à l'ouest et l'île Rodrigues à l'est.");
    }

    public static function getPays(){
        foreach (self::$pays as $listePays){
                return $listePays;           
        }
    }

    public static function getPaysParNom($nom){
        foreach (self::$pays as $pays){
            if(strtolower($pays->nom) === $nom){
                return $pays;
            }
        }
    }
        
}