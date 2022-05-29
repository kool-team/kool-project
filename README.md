# kool-project
Kool est une application web de gestion et commande d'un restaurant 

Notre application web est composé de deux parties :

 1. partie front-office :

 C'est l'interface de communication avec le client qui le permet de choisir parmi une liste de produits

 Pour commander depuis notre app-web, il faut d'abord s'authentifier

 Les produits séléctionnées se trouvent au sein du panier qui est modifiable, et qui contient deux méthodes de payments : googlePay & PayPal (api)

 2. partie back-office :

 C'est l'interface de gestion qui permet à l'administrateur du site la gestion des ressources matérielles et humaines

 il faut s'authentifier entant qu'Admin avec les coordonnées suivantes:

    e-mail : root@gmail.com
    
    password : root

 Cette interface offre aussi des outils de visualisation des données comme les graphes...

 L'administrateur peut aussi ajouter, modifier et supprimer des produits à l'aide d'un CRUD nommé "Stock" 

# Pour utiliser l'App-web (Important !) :
  Insérez la base de données ( kool-project/kool_db.sql )

# Technologies utilisées

1. ( HTML-CSS-JS ) : partie front-end

2. PHP : partie back-end

3. Payment API : méthodes de payment (paypal api, googlepay api)

4. SQL : base de données relationnelle contenant des tables des employés, produits, users, payments...

5. ( Ajax-Jquery ) : transfert des données des produits dans le panier sans actualiser la page 

6. ( Chart.js - Json ) : Implémentation des graphes & Importation des données

7. SwipperJs : Implémentation du carousel

8. SweetAlert : mise en forme des alertes 

9. Bootstrap 

10. FontAwesome : icones...

11. GoogleFonts

