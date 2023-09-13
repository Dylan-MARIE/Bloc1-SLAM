# TD **1**

## *Méthodes GET et POST*

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

> Exemple
Lors de l’achat d’un objet sur un site commerçant, le stock doit être diminué de un sur le serveur du site.

On précise method=”post” dans la balise HTML pour l’utiliser.

> Exemple
Voici un exemple de formulaire réalisé avec la méthode GET, où l’utilisateur doit rentrer son nom et son prénom avant de cliquer sur « Envoyer ».
<form method="post" action="mapage.fr">	Création d’un formulaire utilisant la méthode POST. Les données seront envoyée à mapage.fr.
   <input type="text" name="nom">	Création d’un champ de saisie de texte, appelé « nom ».
   <input type="text" name="prénom">	Création d’un champ de saisie de texte, appelé « prénom ».
   <input type="submit" value="Envoyer">	Création de l’envoi.
</form>	Fermeture de la balise du formulaire.
Comme les données du formulaire sont envoyées dans la requête elle-même, il n’y a pas de limite de taille et les données ne sont pas visibles par les autres. Ces données ne sont cependant pas protégées (elles peuvent être interceptées et lues par une tierce personne) si le protocole utilisé n’est pas du type HTTPS.
