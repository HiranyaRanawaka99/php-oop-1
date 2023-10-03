<?php
class Production 
{
    public $title;
    public $genres;
    public $vote;

    public function __construct(
        string $title,
        array $genres,
        float $vote,
    ) {
        $this->title = $title;
        $this->genres = $genres;
        $this->vote = $vote;
    }
    
    public function get_details() {
        if(is_array($this->genres) && !empty($this->genres)) {
            $genres_string = "<b> Genere: </b>" . implode(' - ', $this->genres);
        } else {
            $genres_string = 'Non disponibile';
        }
        return
        "<b> Titolo : </b> $this->title  <br>
         $genres_string <br>
        <b> Voto : </b> $this->vote  <br>";
    }  
}








