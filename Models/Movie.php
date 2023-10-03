<?php 

require_once __DIR__. '/Genere.php';
class Movie 
{
    public $title;
    public $genres;
    public $length;

    public function __construct(
        // valore di default = qualcosa,
        string $title = null,
        array $genres = null,
        int $length = null,  
    ) {
        $this->title = $title;
        $this->genres = $genres;
        $this->length = $length;
    }

    public function get_genres_text() {
        $genres_text = '';
        foreach($this->genres as $genre) {
            $genres_text .= $genre->name . ' - ';
        }
        return $genres_text;
    }

    // NON UTILIZZATA
    public function transform_in_string() {
        implode('-', $this->genres );
    }

    // NON UTILIZZATA
    public function get_details() {
        $genres_text = $this->get_details();
        return "Titolo: $this->title, Durata: $this->length, Generi: $genres_text";
    }
}

?>