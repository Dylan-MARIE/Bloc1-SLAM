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
- Avec ces nouveaux en-têtes HTTP, il est désormais possible de transmettre d'autres documents que des fichiers HTML bruts, grâce à l'en-tête *Content-Type.*

Une requête typique ressemblait ainsi à :

![Image](https://image.noelshack.com/fichiers/2023/37/3/1694639305-exten1.png)

Suivie d'une seconde connexion-requête pour le transfert de l'image :

![Image](https://image.noelshack.com/fichiers/2023/37/3/1694639459-exten2.png)

Ces innovations n'ont pas été mises en place à la suite d'un effort concerté, mais par une approche expérimentale couvrant les années 1991-1995. Un serveur ou un navigateur ajoutaient une fonctionnalité pour voir si elle suscitait l'intérêt escompté. Nombre de problèmes d'interopérabilité relevaient du lot commun. Pour répondre à ces désagréments, un document d'information décrivant les pratiques communes a été publié en novembre 1996, [RFC 1945](https://datatracker.ietf.org/doc/html/rfc1945). Cela correspondait à la définition de HTTP/1.0. Mais rigoureusement parlant, il convient de noter qu'il ne possède pas l'état de standard officiel.

[Source](https://developer.mozilla.org/fr/docs/Web/HTTP/Basics_of_HTTP/Evolution_of_HTTP)



## *IV - Sans état*

HTTP est un protocole sans état.

Cela veut dire que ni le serveur, ni le client ne se souviennent des communications précédentes.\
Par exemple, si on utilisait uniquement HTTP, un serveur ne pourrait pas se souvenir si un mot de passe a été saisi ou si une transaction est en cours (pour gérer cela, il faut utiliser un cookie de session).

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

### 1 - Le protocole

Dans cet exemple, le protocole est : **https://**

En premier lieu, voyons ce que sont les protocoles, qui constituent les premières parties d’une URL. Le protocole communique au serveur internet comment accéder aux pages de votre site internet.\
De nos jours, le protocole **HTTPS**, qui correspond à [Hypertest Transfer Protocol Secure](https://fr.wikipedia.org/wiki/Hypertext_Transfer_Protocol_Secure) (protocole de transfert hypertexte sécurisé), est le protocole le plus courant. Il indique à votre navigateur internet qu’il doit crypter, en d’autres termes dissimuler, les informations sensibles qui sont entrées sur votre page. Comme par exemple un numéro de carte bancaire ou encore un mot de passe de connexion. De cette manière, les pirates ne peuvent pas accéder à ces informations. Ce protocole est donc un gage de sécurité pour les visiteurs de votre site et l’utiliser vous permet d’améliorer votre référencement auprès de Google.

Vous avez sûrement déjà observé d’autres protocoles comme **http://** ou **ftp://** par exemple. l’http:/ est l’ancienne version de l’https://, mais ne contient pas la variante de sécurité. le ftp:// est le protocole standard de transfert de fichier entre client/serveur. Il permet de copier, modifier ou supprimer des fichiers d’un ordinateur à un autre, ce protocole est souvent utilisé pour alimenter un site web hébergé chez un tiers.

### 2 - Le sous-domaine

Dans notre exemple, le sous-domaine est : **www.**

Maintenant attardons nous sur le sous-domaine. Comme on l’a dit plus haut, imaginons que votre site internet soit votre maison. Dans ce cas, le sous-domaine représente une des pièces à l’intérieur de cette maison. Le sous-domaine dans une URL indique à votre navigateur quelle page de votre site il doit afficher. Par exemple, un sous-domaine tel que « blog » fournit la page blog de votre site web.\
De plus, les sous-domaines répartissent votre site web dans différentes catégories de contenu, et montrent à Google et à vos visiteurs qu’il contient d’avantage d’informations que simplement la page d’accueil.

### 3 - Le nom de domaine principal

Dans notre exemple, le nom de domaine est : **mondomaine**

Désormais, voyons le nom de domaine. C’est tout simplement le nom de votre site web. Il est important, car il aide les visiteurs à savoir de quoi votre site parle. Il est souvent similaire au nom de la marque. Les personnes visitant « [lvmh.com](https://www.lvmh.com/) » savent directement qu’il s’agit de la marque LVMH, Louis Vuitton Moët Hennessy.

### 4 - Le domaine de deuxième niveau

Dans notre exemple, le domaine de deuxième niveau est : **.com**

Le domaine de deuxième niveau précise le type d’entité sous laquelle est enregistrée votre organisation sur internet. Par exemple, « .net » est originellement destiné aux organisations présentant un lien avec les technologies réseau, comme les fournisseurs de services Internet et autres sociétés d’infrastructures réseau. Le « **.org** » est lui destiné aux organisations sans but lucratif. Il en existe beaucoup, et pour tous les usages.

### 5 - Le répertoire

Dans notre exemple, le répertoire est : /contact

Enfin, voici le répertoire, cinquième et dernière partie d’une URL. Dans une URL, le répertoire aide les visiteurs à comprendre sur quelle section bien précise du site ils se trouvent. Prenons un nouvel exemple. Imaginons que vous possédiez une boutique en ligne de T-shirts, de chapeaux, de bottes et de ceintures. L’une des URL de votre site web pourrait donc ressembler à « https://www.maboutique.com/bottes ». Avec l’utilisation du répertoire « **bottes** », les utilisateurs savent tout de suite qu’ils se trouvent sur la page du magasin dédiées aux bottes.

[Source](https://digitalmym.com/les-differentes-parties-dune-url/)


## *VI - Codes Status*

1. 1XX : réponses informatives.
2. 2XX : réponses de succès.
3. 3XX : redirections.
4. 4XX : réponses d'erreur côté client.
5. 5XX : réponses d'erreur côté serveur.

### Code 1XX

Les codes de statut de réponse commençant par **1** sont au nombre de **trois**. Ils indiquent une réponse informative du serveur. Ils ne signalent ni une erreur ni un succès, mais délivrent simplement une information au client.

> Exemple :\
> Le code 103 ou Processing informe le client du fait que le serveur a bien reçu la requête et qu'il est en train de la traiter. Il s'affiche lorsqu'aucune réponse de succès ou d'échec n'est encore disponible.

### Code 2XX

Les codes HTTP débutant par **2** sont au nombre de **dix**. Tous indiquent un message de succès de la part du serveur.

> Exemple :\
> Le code 200 est le plus généraliste. Il indique au client que la requête a fonctionné. Selon la méthode HTTP utilisée pour communiquer avec le serveur, le message de succès peut prendre différentes significations. Ainsi, GET indique que la donnée a pu être récupérée et qu'elle est transmise dans le corps du message, tandis que HEAD sert à récupérer les en-têtes d'entité. Le message de succès indique alors que ces en-têtes sont dans le corps du message serveur.

### Code 3XX

Les codes de statut de réponse débutant par le chiffre **3** sont connus pour leur utilisation en SEO (Search Engine Optimization). Ils servent à afficher des messages de redirection.

>Exemple:\
>Le code 301, ou Moved Permanently précise au client que l'URL de la ressource qu'il recherche a été modifiée de façon permanente. La réponse du serveur indique généralement la nouvelle URL à utiliser. Le code 302 est relativement proche du 301. Il indique que l'URL a été modifiée de manière temporaire.

### Code 4XX

Les codes HTTP débutant par **4** servent à indiquer une erreur du côté du client.

>Exemple:\
>Le code 404 fait partie des plus courants, notamment sur les sites web. Dans ce cas, le serveur n'a pas trouvé la ressource demandée par l'utilisateur.

### Code 5XX
Les codes de statut de réponse débutant par le chiffre **5** servent à informer d'une erreur du côté du serveur.

>Exemple:\
>Le code 500 Internal Error prévient d'une erreur interne : le serveur n'est pas en mesure de traiter la situation qu'il rencontre.

[Source](https://blog.hubspot.fr/marketing/http-status-code)


## *VII - Négocation de contenu*

En HTTP, la **négociation de contenu** est le mécanisme utilisé pour servir différentes représentations d'une ressource à partir du même URI pour aider l'agent utilisateur à indiquer la représentation la plus adaptée à l'utilisateur (par exemple, la langue du document, le format d'image ou l'encodage à utiliser pour le contenu).

### Les principes de la négociation de contenu

Un document donné est défini comme une *ressource*. Lorsqu'un client souhaite obtenir une ressource, il la demande via une URL. Le serveur utilise alors cette URL pour choisir l'une des variantes disponibles. Chaque variante est appelée une *représentation*. Le serveur renvoie alors une représentation donnée au client. La ressource, ainsi que chacune de ses représentations, dispose d'une URL spécifique. *La négociation de contenu* détermine quelle représentation donnée est utilisée lorsque la ressource est demandée. Il existe plusieurs méthodes de négociation entre le client et le serveur.

![Image](https://developer.mozilla.org/fr/docs/Web/HTTP/Content_negotiation/httpnego.png)

La représentation la plus adaptée est choisie selon l'un de ces deux mécanismes :

- Des en-têtes HTTP spécifiques envoyés par le client (*négociation menée par le serveur ou négociation proactive*) : il s'agit de la méthode standard pour négocier un type de ressource donné.

- Les codes de réponse HTTP ***300 Multiple Choices***, ***406 Not Acceptable*** ou ***415 Unsupported Media Type*** envoyés par le serveur (*négociation menée par l'agent ou négociation réactive*), sont utilisés comme mécanismes de recours.

Au fur et à mesure des années, d'autres propositions relatives à la négociation de contenu ont été faites, comme la négociation de contenu transparente et **l'en-tête** *Alternates*. Toutefois, elles n'ont pas suffisamment pris d'ampleur et ont finalement été abandonnées.

[Source](https://developer.mozilla.org/fr/docs/Web/HTTP/Content_negotiation#les_principes_de_la_n%C3%A9gociation_de_contenu)

## *VIII – Installation Apache et configuration*

## *IX – CURL*

## *X – Headers*

![Image](https://image.noelshack.com/fichiers/2023/37/4/1694648548-en-tetes.png)

[Source](https://developer.mozilla.org/fr/docs/Web/HTTP/Content_negotiation#les_principes_de_la_n%C3%A9gociation_de_contenu)
