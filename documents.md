# TD **1**

## *I - Méthodes GET et POST*

La méthode GET passe les réponses saisies via l’URL tandis que la méthode POST passe les paramètres dans le corps de la requête.


### 1 - La méthode GET
 
La méthode GET est la méthode la plus utilisée, elle passe les réponses de l’utilisateur par l’URL.
Cette méthode est donc limitée par la taille limite d’une URL et les données sensibles sont accessibles à tous, ce qui n’est pas sécurisé.

Exemple : Voici ci-dessous le code HTML associé à un formulaire et son aperçu dans le navigateur, où le mot de passe a été tapé.
![Image](https://e.educlever.com/img/5/8/9/8/589830.jpg)
![Image](https://e.educlever.com/img/5/8/9/9/589908.jpg)

À la soumission du formulaire, on est redirigé vers la page suivante, et le mot de passe est visible dans l’URL, ce qui ne permet pas d’avoir un mot de passe confidentiel.

![Image](https://e.educlever.com/img/5/8/9/9/589911.jpg)


### 2 - La méthode POST

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



## *II - Comparaison méthodes*

![Image](https://image.noelshack.com/fichiers/2023/37/3/1694638809-capture-d-ecran-2023-09-13-225950.png)

[Source](https://www.ionos.fr/digitalguide/sites-internet/developpement-web/get-vs-post/)

## *III - Extensible*

### HTTP/1.0 – Mise en place de l'extensibilité

HTTP/0.9 était très limité. Navigateurs et serveurs l'ont rapidement étendu vers des usages plus polyvalents.

- Dans chaque requête figurent dorénavant les informations de version (HTTP/1.0 est ajouté à la ligne GET).
- Une ligne de code d'état est aussi envoyée au début de chaque réponse. Elle permet au navigateur de prendre connaissance du succès ou de l'échec de la requête, et de s'adapter en conséquence (avec une mise à jour, par exemple, ou en utilisant son cache local de manière spécifique).
- La notion d'en-tête HTTP a été mise en place à la fois pour les requêtes et pour les réponses. Elle autorise la transmission de métadonnées, et rend le protocole très flexible et extensible.
- Avec ces nouveaux en-têtes HTTP, il est désormais possible de transmettre d'autres documents que des fichiers HTML bruts (grâce à l'en-tête
  >Content-Type.

Une requête typique ressemblait ainsi à :

![Image](https://image.noelshack.com/fichiers/2023/37/3/1694639305-exten1.png)

Suivie d'une seconde connexion-requête pour le transfert de l'image :

![Image](https://image.noelshack.com/fichiers/2023/37/3/1694639459-exten2.png)

Ces innovations n'ont pas été mises en place à la suite d'un effort concerté, mais par une approche expérimentale couvrant les années 1991-1995. Un serveur ou un navigateur ajoutaient une fonctionnalité pour voir si elle suscitait l'intérêt escompté. Nombre de problèmes d'interopérabilité relevaient du lot commun. Pour répondre à ces désagréments, un document d'information décrivant les pratiques communes a été publié en novembre 1996, [RFC 1945](https://datatracker.ietf.org/doc/html/rfc1945). Cela correspondait à la définition de HTTP/1.0. Mais rigoureusement parlant, il convient de noter qu'il ne possède pas l'état de standard officiel.

[Source](https://developer.mozilla.org/fr/docs/Web/HTTP/Basics_of_HTTP/Evolution_of_HTTP)



## *IV - Sans état*

HTTP est un protocole sans état.

Cela veut dire que ni le serveur, ni le client ne se souviennent des communications précédentes.\
Par exemple, si on utilisait uniquement HTTP, un serveur ne pourrait pas se souvenir si un mot de passe a été saisi ou si une transaction est en cours (pour gérer cela, il faut utiliser un serveur d'applications).

[Source](https://iamjmm.ovh/NSI/http/site/http.html)


## *V - URL*

Une URL est composée de 5 parties : 
1. Le protocole
2. Le sous-domaine
3. Le nom de domaine principal
4. Le domaine de deuxième niveau (SLD – Second-level Domain en anglais)
5. Le répertoire.

Prenons comme exemple l’adresse suivante
[https://www.mondomaine.com/contact]

### 1) Le protocole

Dans cet exemple, le protocole est : **https://**

En premier lieu, voyons ce que sont les protocoles, qui constituent les premières parties d’une URL. Le protocole communique au serveur internet comment accéder aux pages de votre site internet.\
De nos jours, le protocole **HTTPS**, qui correspond à [Hypertest Transfer Protocol Secure](https://fr.wikipedia.org/wiki/Hypertext_Transfer_Protocol_Secure) (protocole de transfert hypertexte sécurisé), est le protocole le plus courant. Il indique à votre navigateur internet qu’il doit crypter, en d’autres termes dissimuler, les informations sensibles qui sont entrées sur votre page. Comme par exemple un numéro de carte bancaire ou encore un mot de passe de connexion. De cette manière, les pirates ne peuvent pas accéder à ces informations. Ce protocole est donc un gage de sécurité pour les visiteurs de votre site et l’utiliser vous permet d’améliorer votre référencement auprès de Google.

Vous avez sûrement déjà observé d’autres protocoles comme **http://** ou **ftp://** par exemple. l’http:/ est l’ancienne version de l’https://, mais ne contient pas la variante de sécurité. le ftp:// est le protocole standard de transfert de fichier entre client/serveur. Il permet de copier, modifier ou supprimer des fichiers d’un ordinateur à un autre, ce protocole est souvent utilisé pour alimenter un site web hébergé chez un tiers.
