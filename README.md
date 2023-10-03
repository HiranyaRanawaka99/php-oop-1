# php-oop-1

create un file index.php in cui:
- è definita una classe Movie
- all'interno della classe sono dichiarate delle variabili d'istanza
- all'interno della classe è definito un costruttore
- all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti Movie e stampati a schermo i valori delle relative proprietà
- è definita una classe Genre che, con la composizione, viene associata ai Movie.


###### Bonus 1:
Modificare la classe Movie in modo che accetti più di un genere.
###### Bonus 2:
Creare un layout completo per stampare a schermo una lista di movies.


# php-oop-2

## Traccia
Realizzare una classe Production che sia estesa dalla classe Movie e dalla classe TvSerie.

- Aggiungiamo anche degli attributi unici per le nuove classi. Per esempio:
per la classe Movie:
- $published_year anno di pubblicazione
- $running_timedurata in minuti
per la classe TvSerie:
- $aired_from_year anno di messa in onda del primo episodio
- $aired_to_year anno di messa in onda dell'ultimo episodio
- $number_of_episodes numero di episodi
- $number_of_seasons numero di stagioni
### Bonus
Creare un array misto di oggetti Movie e TvSerie. Stamparli a schermo in delle cards.
NB: per gestire correttamente le stampe va gestito correttamente il polimorfismo delle classi, ossia la capacità di fare override dei metodi del genitore piuttosto che ereditarli.