# Appli Liquid

# Cahier des charges 

## Tables :
* Guest :  
    * id  
    * name  
    * email
    * created_at  
    * updated_at  

* Expences :  
    * id  
    * name  
    * price  
    * guest_id
    * event_id  
    * created_at  
    * updated_at  

* Event :  
    * id  
    * name  
    * slug
    * date  
    * created_at  
    * updated_at  

* Guest_Event :
    * id
    * id_guest  
    * id_event  
    * created_at
    * updated_at


## Commandes utilisées 
Installation de laravel avec composer
* `laravel new` On crée un nouveau dossier laravel.
* `npm install` On installe les modules necessaires pour javascript et css.
* `php artisan make:model Guest -rmc` On crée la table guest dans phpMyAdmin ainsi que la migration pour guests.
* `php artisan make:model Event -rmc` On crée la table event dans phpMyAdmin ainsi que la migration pour events.
* `php artisan make:model Expence -rmc` On crée la table expence dans phpMyAdmin ainsi que la migration pour expences.
* `php artisan make:model Guest_Event -rmc` On crée la table guest_event dans phpMyAdmin ainsi que la migration pour guest_event.
* `php artisan migrate` Apres avoir modifié la migration de chaque table on actualise pour que les champs apparaissent sur phpMyAdmin.
* `php artisan serve` On lance laravel pour pouvoir voir notre page web.
* `npm run watch` Cette commande permet d'actualiser à chaque fois que du css où du javascript est changé pour voir la différence sur la page web.
* `php artisan make:controller ContactController` On crée le controller de la page contact.
* `php artisan make:auth` On crée les controller et les views pour le login.

## Reflexion  
Projet d'application qui récapitule qui apporte quoi à un évenement, pour avoir le total de dépenses, le total de nourritures, de boissons...  
Reflexion sur le nom de l'application.
Differend nom proposé : LeakId, Liquid.  
Nom gardé : Liquid.
 

## Partie dev

* Création de chaque page MVC (Model View Controller) pour toutes les tables.


## Partie design 

* Ajout du logo. 
* Ajout de la couleur de font.
* Design de la page d'accueil.
* Design de chaque page.
* Responsive pour chaque écran (ordinateur, tablette, portable).
