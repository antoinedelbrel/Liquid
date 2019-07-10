# Appli Leakid

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
    * user_id  
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
    * id_guest  
    * id_event  

## Commandes utiliser 
Installation de laravel avec composer
* `laravel new` 
* `npm install`  
* `php artisan make:model Guest -rmc`
* `php artisan migrate` 
* `php artisan serve`

## Reflexion  
Projet d'application qui récapitule qui apporte quoi à un évenement, pour avoir le total de dépenses, le total de nourritures, de boissons...  
Reflexion sur le nom de l'application.
Differend nom proposé : LeakId, Liquid.  
 

## Partie dev

* Création de chaque page Model View Controller (MVC).


## Partie design 

* Ajout du logo. 
* Ajout de la couleur de font.
* Design de la page d'accueil.