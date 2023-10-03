<?php 

class Movie extends Production
{
    public $published_year;
    public $running_time;

    public function __construct(
        // valore di default = qualcosa,
        string $title = null,
        array $genres = null,
        float $vote = null,
        int $published_year= null,
        int $running_time = null,
    ) {
        parent :: __construct($title, $genres, $vote);
        $this->published_year = $published_year;
        $this->running_time = $running_time;
    }
        public function get_details() {

            return parent::get_details() . 
            "<b> Anno di pubblicazione : </b> $this->published_year <br>
            <b> Durata : </b> $this->running_time <br>";
        }
    }
    
    ?>
   