# Exercice Moyen 7 : Manipuler 2 classes

Créer deux classes `Player` et `Arme` et les mettre en relation.

## I. Environnement de développement

* PHP 7.4
* POO

## II. Démarches
- Créer deux classes `Player` et `Arme`, dans la classe Joueur il y a le lien avec la classe Arme sous forme de `idArme`.
- Créer un tableau `static $armes` pour y stocker toutes les instances d'`Arme`.
- Le constructeur dans cet exercice ne prend aps de paramètres.
- 2 propritéts sont attribuées avec des valeurs par défaut dans le constructeur :

  ```php
  $this->force = 5;
  $this->pv = 100;
  ``` 



## III. Points à retenir

1. Ne pas faire de setter pour le `$id`
2. Pour faire la liaison entre `Player` et `Arme` : 
   - Dans la class Arme, définir un tableau `static $armes`, contenant toutes les armes instanciées, afin de pouvoir y accèder de partout.
        ```php
        class Arme{
        private static $armes = [];
        ....

        public function __construct($nom,$degat){
            self::$armes[] = $this;
        ```
    - Créer une fonction static qui récupère l'arme (`$arme`) selon son id :
        ```php
            public static function recupererArme($id){
                foreach(self::$armes as $arme){
                    if($id === $arme->id)
                    {return $arme;
                    }
                }
            } 
        ```

    - Dans __toString dans la classe `Payer` rajouter l'affichage de l'arme en lui donnant `$idArme` de l'instance `Player` comme paramètre:
        ```php
            public function __toString(){
        $arme = Arme::recupererArme
        ......
        ($this->idArme);
        $txt .= $arme;
        ......
        ```

3. Dans `index.php` lors des instanciations, dynamiser le id de l'arme au lieu de l'écrire en dur : 
   ```php
   $joueur1->setIdArme($arme1->getId());
   ```

