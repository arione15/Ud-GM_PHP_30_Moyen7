# Exercice Moyen 7 : Gestion de maisons

Créer une bibliothèque de livres. Les filtrer selon la date, la maison d'édition.

## I. Environnement de développement

* PHP 7.4
* POO

## II. Démarches
- Créer une classe `Maison` pour gérer les maisons avec un `id` auto incrémenté : `__construct()` + `__toString()`
- Utiliser un formulaire (avec `POST`)



## III. Points à retenir

1. Pour l'identifiant auto incrémenté, on utilise un ``static $increment`` : 

```php
class Maison{
    static private $compteur = 1;
    private $id;
    .....
    public function __construct($dateCreation, $nombreChambres, $surface){
        $this->id=self::$compteur;
        self::$compteur++;
        .....
```