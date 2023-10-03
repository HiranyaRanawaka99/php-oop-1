<?php 
class SerieTv extends Production 
{
    public $aired_from_year ;
    public $aired_to_year ;
    public $number_of_episode ;
    public $number_of_seasons ;


    public function __construct(
        string $title = null,
        array $genres = null,
        float $vote = null,
        int $aired_from_year = null,
        int $aired_to_year = null,
        int $number_of_episode = null,
        int $number_of_seasons = null,
    ) {
        parent :: __construct($title, $genres, $vote);
        $this->aired_from_year = $aired_from_year;
        $this->aired_to_year = $aired_to_year;
        $this->number_of_episode = $number_of_episode;
        $this->number_of_seasons = $number_of_seasons;
    }

    public function get_details() {

        return parent::get_details() . 
        "<b> In onda dal : </b> $this->aired_from_year <br>
        <b> In onda fino al : </b> $this->aired_to_year<br>
        <b> Numero di episodi : </b> $this->number_of_episode <br>
        <b> Numero di stagioni : </b> $this->number_of_seasons <br> ";
    }
}


