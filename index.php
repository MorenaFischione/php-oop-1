<?php 


class Movies {
    public $id;
    public $genere;
    public $titolo;
    public $anno;
    public $regista;
    public $paese;
    public $durata;
    public $attori;
    public $etaVisione;
    

    /**
     * Crea un nuovo movies
     *
     * @param [string] $genere
     * @param [string] $titolo
     * @param [string] $anno
     * @param [string] $regista
     * @param [string] $paese
     * @param [string] $durata
     * @param [string] $attori
     * @param [string] $etaVisione 
     */

    function __construct($genere, $titolo, $anno, $regista, $paese, $durata, $attori, $etaVisione) {
        $this->genere = $genere;
        $this->titolo = $titolo;
        $this->anno = $anno;
        $this->regista = $regista;
        $this->paese = $paese;
        $this->durata = $durata;
        $this->attori = $attori;
        $this -> etaVisione = $etaVisione;
        


    }
    
   /** 
     * Funzione che ritorna vero se l'età dell'utente ($eta) è >= etàVisione ($etaVisione) altrimenti ritorna false.
     *
     * @return boolean
     */

    public function isCensurato($eta){
        if ( $eta >= $this->etaVisione) {
            return true;
        } else {
            return false;
        }
    }
    
}

$ilGrandeGasby = new Movies("Drammatico", "Li Grande Gasby", "2013", "Baz Luhrmann", "123 min", "USA", ["Leonardo DiCaprio", "Tobey Maguire", "Carey Mulligan", "Joel Edgerton", "Isla Fisher"], 13);
$luca = new Movies("Animazione", "Luca", "2021", "Enrico Casarosa", "USA", "", ["Luca Argentero", "Giacomo Gianniotti", "Marina Massironi", "Saverio Raimondo", "Fabio Fazio"], 5);


?>




<pre>
    <?php 

        var_dump($ilGrandeGasby, $luca);

        var_dump($ilGrandeGasby->attori, $luca -> attori);

        var_dump($luca -> isCensurato(4));
        var_dump($ilGrandeGasby -> isCensurato(13));

    


    ?>
</pre>
