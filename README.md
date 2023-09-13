# TD **1**

## *1 - Méthodes GET et POST*

La méthode GET passe les réponses saisies via l’URL tandis que la méthode POST passe les paramètres dans le corps de la requête.

#### 1) La méthode GET
 
La méthode GET est la méthode la plus utilisée, elle passe les réponses de l’utilisateur par l’URL.
Cette méthode est donc limitée par la taille limite d’une URL et les données sensibles sont accessibles à tous, ce qui n’est pas sécurisé.

Exemple : Voici ci-dessous le code HTML associé à un formulaire et son aperçu dans le navigateur, où le mot de passe a été tapé.
![Image](https://e.educlever.com/img/5/8/9/8/589830.jpg)
![Image](https://e.educlever.com/img/5/8/9/9/589908.jpg)

À la soumission du formulaire, on est redirigé vers la page suivante, et le mot de passe est visible dans l’URL, ce qui ne permet pas d’avoir un mot de passe confidentiel.

![Image](https://e.educlever.com/img/5/8/9/9/589911.jpg)

#### 2) La méthode POST

La méthode POST possède des caractéristiques différentes : les paramètres, c’est-à-dire les données saisies par l’utilisateur, sont passés non pas dans l’URL, mais dans la requête elle-même.

Cette méthode peut de plus modifier une ressource du serveur.

> Exemple\
Lors de l’achat d’un objet sur un site commerçant, le stock doit être diminué de un sur le serveur du site.

On précise **method=”post”** dans la balise HTML pour l’utiliser.

> Exemple\
>Voici un exemple de formulaire réalisé avec la méthode GET, où l’utilisateur doit rentrer son nom et son prénom avant de cliquer sur « Envoyer ».


> form method="post" action="mapage.fr"

> Création d’un formulaire utilisant la méthode POST. Les données seront envoyée à mapage.fr.

>   input type="text" name="nom"

> Création d’un champ de saisie de texte, appelé « nom ».

>  input type="text" name="prénom"

> Création d’un champ de saisie de texte, appelé « prénom ».

>  input type="submit" value="Envoyer"

> Création de l’envoi.

> /form

> Fermeture de la balise du formulaire.

Comme les données du formulaire sont envoyées dans la requête elle-même, il n’y a **pas de limite de taille** et les données ne sont **pas visibles** par les autres. Ces données ne sont cependant pas protégées (elles peuvent être interceptées et lues par une tierce personne) si le protocole utilisé n’est pas du type HTTPS.

[Source](https://www.maxicours.com/se/cours/la-transmission-d-un-formulaire-avec-get-ou-post/)

## *2 - Comparaison méthodes*

![Image](https://image.noelshack.com/fichiers/2023/37/3/1694638809-capture-d-ecran-2023-09-13-225950.png)

## *3 - Extensible*

###### HTTP/1.0 – Mise en place de l'extensibilité

HTTP/0.9 était très limité. Navigateurs et serveurs l'ont rapidement étendu vers des usages plus polyvalents.

- Dans chaque requête figurent dorénavant les informations de version (HTTP/1.0 est ajouté à la ligne GET).
- Une ligne de code d'état est aussi envoyée au début de chaque réponse. Elle permet au navigateur de prendre connaissance du succès ou de l'échec de la requête, et de s'adapter en conséquence (avec une mise à jour, par exemple, ou en utilisant son cache local de manière spécifique).
- La notion d'en-tête HTTP a été mise en place à la fois pour les requêtes et pour les réponses. Elle autorise la transmission de métadonnées, et rend le protocole très flexible et extensible.
- Avec ces nouveaux en-têtes HTTP, il est désormais possible de transmettre d'autres documents que des fichiers HTML bruts (grâce à l'en-tête Content-Type.
Une requête typique ressemblait ainsi à :
