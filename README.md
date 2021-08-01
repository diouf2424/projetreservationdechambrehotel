# projetreservationdechambrehotel
projetreservationdechambrehotel

REPUBLIQUE DU SENEGAL
UN PEUPLE UN BUT UNE FOI





















https://trello.com/b/25OEOhbs

https://github.com/diouf2424/projetreservationdechambrehotel.git

Tables des matières
Introduction	2
Contexte	2
Problématiques	2
Objectifs	2
Motivation / intérêt	2
Etude de l’art et méthodologie	3
Les Besoins Fonctionnels	3
Les Besoins Non-fonctionnels	4
Gestion des Clients :	5
Gestion des réservations :	5
Gestion des  Chambres	6
Figure 01: Digramme de cas d’utilisation de la gestion des clients.	8
Figure 02: Digramme de cas d’utilisation de la gestion des réservations.	8
Figure 03: Digramme de cas d’utilisation de la gestion de chambres .	9
Conception du système	9
Figure 04: Représente le diagramme de classe associé à l'application	10
Figure 05:  Diagramme de Séquence « Enregistrement » :	11
Figure 06: Diagramme de Séquence « Mise à jour » :	12
Figure 07: Diagramme de Séquence « Consultation » :	13
Figure 08: Le modèle relationnel des données de l'application.	14
La composition du système	15
Figure 09: La composition du système	15
Outils utilisés dans le cadre du projet	16
github:	16
Trello:	17
Présentation de la solution	17
Capture d’écran	19
La page d’inscription(login)	20
Résumé du travail	21
Perspectives	21







Canevas des documents de certification : - back end Simplon Sénégal
Introduction
Contexte 
Le web est venu pour répondre aux interrogations humaines, comment subvenir à nos besoins sans avoir à se déplacer : Comme réserver une chambre d'hôtel sans téléphoner ni se déplacer, lequel dans un simple « clic » on peut obtenir toutes les informations dont on a besoin.
Problématiques
Les trois-A hôtel, est un hôtel 4 étoiles de haut standing situé à Dakar et qui offre différents types de services tels que l'hébergement, l'événementiel, la restauration. Pour améliorer sa relation avec sa clientèle et avoir un avantage concurrentiel, il démarre aujourd’hui un projet de digitalisation de ses services à travers l’informatisation du système de réservation.
Objectifs
Notre objectif est de mettre en place une application web qui permet  aux clients de faire des réservations en ligne, mais aussi permettre aux gérants de l'hôtel de pouvoir gérer les réservations,  les clients et les chambres pour pouvoir bien administrer le site.
Motivation / intérêt 
La conception et la réalisation de l'application  web pour la gestion des réservations des chambres en ligne pour l'amélioration des relations existant déjà entre l'hôtel “Les trois-A Hotel”  et ses clients d'une part et d'autre part, l'hôtel et ses futurs clients à travers la mise en place de l’application.
Etude de l’art et méthodologie
Solutions existantes et mode de fonctionnement en rapport avec le projet.
Pour l'hôtel“Les trois-A Hotel”, nous identifierons donc quelques sites leaders dans l'hôtellerie pour les analyser. Ainsi, nous pouvons nous inspirer de leurs réussites ou échecs à ne pas commettre les mêmes erreurs.
Pour guider notre analyse, préparons une liste des caractéristiques auxquelles nous porterons une attention particulière.
Ergonomie (navigation, adaptabilité mobile)
Charte graphique (typographie, palette de couleurs)
Fonctionnalités (ex. système de réservation, newsletter)
Méthodologie de projet et outils à utiliser en rapport avec le projet
Pour ce projet nous allons utiliser le model agile (scrum) pour le séquencement et l’organisation du travail.
Les outils de travaille et technologie utilisés sont a savoire 
github pour le versionnage des fichiers en ligne.
trello pour mettre en place les tâches, pour le séquencement et l’organisation du travail. 
Modélisation des diagrammes en UML (staruml).
Html css
Api
Php
 javascript
bootstrap 
Les Besoins Fonctionnels
Les besoins fonctionnels produisent le modèle des besoins qui sont obligatoires qui relie le site et l'utilisateur  en se basant sur les fonctions des utilisateurs ci-dessus, c'est-à-dire qu' elle qualifie de produire un système adapté pour les utilisateurs de pouvoir:
- Consulter des réservations
-Permettre la gestion des réservations.
- Permettre  la gestion de chambre: ajout, modification, suppression, lister.
- Permettre la gestion de gestion des clients
 Les Besoins Non-fonctionnels
Les besoins non fonctionnels produisent le modèle des besoins qui ne sont pas indispensables pour le fonctionnement de la plateforme.
Après avoir vue que les besoins fonctionnels sont bien définis, les besoins non-fonctionnels doivent être pris en compte tout au long du processus de développement de l'application à savoir :
- L'application doit fournir un fonctionnement sous-réseau
- Ergonomie et convivialité ; c'est-à-dire l'application doit fournir aux différents utilisateurs une interface (espace des utilisateurs)
- La latence (délai de réponse) doit être raisonnable
- Portabilité : l'application doit être portable, c'est-à-dire fonctionnelle sur n'importe quel écran (ordinateur, téléphone portable et tablette)
- Sécurité : l'application doit assurer un niveau minimum de sécurité pour les informations traitées.
Identification des fonctionnalités de l’application par rapport aux acteurs  et aux modules

Un acteur représente un rôle joué par une personne ou une chose qui interagit avec le système(UML) c'est-à-dire il peut consulter et/ou modifier directement l'état du système. 
Nous avons 4 acteurs qui vont avoir un rapport avec notre application :

Les utilisateurs simples qui n’ont pas encore de compte client.
Clients qui ont déjà un compte dans notre base de données.
Administrateur du site.
La back office de l’hôtel  qui est basé à l'intérieur de l’hôtel  
	trois  modules sont identifiés par rapport aux acteurs
Gestion des Clients :
Créer  compte
Modifier compte
Supprimer compte
Lister compte
Bloquer compte
Ajouter client
Lister clients
Rechercher client
Modifier client
Bloquer client
Supprimer client
Trouver types de chambre
Changer la langue
Bloquer compte
Inscription newsletter
Gestion des réservations :
Enregistrer réservation
Supprimer réservation
Modifier réservation
Comparer les prix
Noter l’hôtel
Confirmer réservation
Lister les réservations
Refuser réservation
Gérer paiement
Gestion des  Chambres
Ajouter Chambre
Modifier Chambre
Supprimer Chambre
Lister Chambre
Afficher Chambre
Gérer disponibilité 

Analyse et conception
Nous nous intéressons à l'étude de l'analyse et conception de notre application proposée pour le traitement de différentes difficultés rencontrées lors de la réservation à l'hôtel Les-3-A-Hotel , Nous adoptons l'UML comme langage de modélisation. Cela consiste à présenter les diagrammes de cas d'utilisation décrivant les scénarios nominaux de chaque acteur ainsi que les diagrammes de séquence qui représentent les interactions entre ces acteurs et le système. Par conséquent, les diagrammes de séquence évoquent les interactions entre ces acteurs et les différents objets.
La modélisation du système s'appuie sur le concept modèle qui peut être défini comme étant une représentation de la réalité, une abstraction que quelque chose de réel. Comme nous l'avons annoncé dans le précédent point, nous allons utiliser UML : Le Langage de modélisations de notre futur système.
Ainsi, nous allons présenter les diagrammes ci-après :
- Le Diagramme des cas d'Utilisation
Les (use case) permettent de structurer les besoins des utilisateurs et les objets correspondants d'un système. Pour cela, les cas d'utilisation identifient les utilisateurs de système (acteurs) et leurs interactions avec le système
- Le Diagramme des Classes
Le diagramme met en évidence d'éventuelles relations entre ces classes à savoir . Dans la phase de l'analyse, ce diagramme représente les entités (des informations) manipulées par les utilisateurs. Dans la phase de la conception, il représente la structure objet d'un développement orienté objet.
- Le Diagramme des Séquences
Le diagramme de séquence permet de décrire les différents scénarios d'utilisation du système(Classe). L'objectif du diagramme de séquence est de représenter les interactions entre les objets en indiquant la chronologie des échanges.

Analyse du système
Dans cette partie il s'agit de décrire les actions qui devront être réalisées par les utilisateurs (acteurs) et par le système lui-même en vue de produire les résultats attendus par les acteurs.

Figure 01: Digramme de cas d’utilisation de la gestion des clients.
Dans ce diagramme  il s'agit de décrire les actions qui devront être réalisées par les utilisateurs (acteurs) et par le système lui-même en vue de produire les résultats attendus par les acteurs.
Figure 02: Digramme de cas d’utilisation de la gestion des réservations.


Figure 03: Digramme de cas d’utilisation de la gestion de chambres .
Conception du système
Le diagramme suivant, représente le diagramme de classe associé à l'application que nous réalisons. L'intérêt du diagramme de classe est de modéliser les entités du système d'information. Le diagramme de classe permet de représenter l'ensemble des informations analysées qui sont gérées par le domaine. Ces informations sont structurées, c'est-à-dire qu'elles sont regroupées dans des classes (Utilisateur, client, chambre et réservation) . 

Figure 04: Représente le diagramme de classe associé à l'application
-Classe : une classe est une description abstraite (condensée) d'un ensemble d'objets du domaine de l'application : elle définit leur structure, leur comportement et leurs relations.


Figure 05:  Diagramme de Séquence « Enregistrement » :
Ce diagramme de séquence d'Enregistrement montre comment l'utilisateur peut atteindre à ajouter un enregistrement dans notre système (application) en passant d'abord à l'authentification


Figure 06: Diagramme de Séquence « Mise à jour » :
Ce diagramme de séquence de Modification montre comment l'utilisateur peut parvenir à modifier un enregistrement et/ou à supprimer un enregistrement dans notre système (application) en passant tout d'abord à l'authentification.

Figure 07: Diagramme de Séquence « Consultation » :
Ce diagramme de séquence de consultation montre comment l'utilisateur peut parvenir à voir les enregistrements dans notre système (application) en passant tout d'abord à l'authentification et affichage des données.

Figure 08: Le modèle relationnel des données de l'application.
Cette partie a été consacrée à l'analyse des besoins et la conception de l'application à réaliser selon l'approche orientée objet. Nous avons présenté d'une façon globale, les deux étapes essentielles du système élaboré pour l'analyse et la conception de notre application en suivant le processus de normalisation UML et les différents diagrammes, afin de faciliter la phase de réalisation. Cela fait la base pour la phase réalisation tel qu'en vas garantir la fiabilité et l'efficacité de l'application à réaliser.
La partie suivante, quant à elle, sera consacrée à la phase de développement de notre application.
INTERFACE GRAPHIQUE DE L'APPLICATION

La composition du système
Les composantes du système représentent les grandes fonctionnalités assurées par l'application. Dans le présent travail, notre travail est composé de deux grandes fonctions à savoir une chargée par l'administration du système et une autre chargée l'enregistrement des réservations des clients. Rappelons que la fonctionnalité de chaque tâche n'est accessible que par les utilisateurs selon le rôle.

Figure 09: La composition du système

Mise en place de la solution
La solution informatique implique l'informatisation qui consiste à mettre en place un système informatique pour faciliter aux clients leurs réservations à distance en créant une base de données pour la gestion des clients, des réservations et des chambres  de l‘hôtel.
Cette solution fait recours aux matériels informatiques et aux logiciels appropriés qui faciliteront le traitement automatique de données, et cela par rapport aux besoins de l'entreprise et au volume des informations à traiter tout en tenant compte de l'évaluation de la technologie utilisée.












Outils utilisés dans le cadre du projet

github: 


Trello: 



Présentation de la solution
Étant donné que nous venons de réaliser une conception qui répond bien aux besoins de l'application, nous commençons la partie de réalisation de l'application que nous avons développé pour l'hôtel Les -3-A Hotel en présentant les différents outils, les langages de développements utilisés pendant la réalisation d'implémentation de la base de données, le schéma architectural sa comptabilité ainsi qu'une démonstration sur les interfaces de notre application.
Pour le développement de notre application, nous avons ainsi utilisé les outils suivants :
· MAMP: (Système de gestion de base  de donnée sous environnement mac) Nous avons utilisé le trio PHP-APACHE-MYSQL que forme MAMP SERVER qui est une plateforme de développement web de type MAMP permettant de faire fonctionner localement sous mac (sans se connecter à serveur externe).Page d'accueil Mamp Lorsque nous lançons un navigateur web notamment : Google Chrome, Firefox, internet explorer, Opéra, safari..., en y mettant aussi une adresse IP lequel : http://localhost/  ou http://127.0.0.1 dans la barre d'adresse ;
· BOOTSTRAP : Est une compilation de plusieurs éléments et fonctions web-design personnalisables, le tout emballé dans un seul et même outil ;
· Visual Studio Code, phpStorm,Sublime Text : Sont des éditeurs de texte, nous a servi à taper nos différentes lignes de codes (PHP, SQL, CSS, HTML, JavaScript) ;
· StarUML for UML : Qui est un logiciel permettant aux programmeurs de mettre en place des diagrammes UML.
Nous avons utilisé Symfony 
Symfony est un framework qui représente un ensemble de composants (aussi appelés librairies) PHP autonomes qui peuvent être utilisés dans des projets web privés ou open source. Mais c’est également un puissant Framework PHP développé par une société française : SensioLabs. Il permet de réaliser des sites internet dynamiques de manière rapide, structurée, et avec un développement clair. Les développeurs peuvent travailler sur ce Framework très facilement, seuls ou en équipe, grâce à la facilité de prise en main.)comme framework dans notre projet 
· Google chrome et safari : Qui sont des navigateurs web libres et gratuits, nous a servi à faire le test de notre site web en local.
LANGAGE DE PROGRAMMATION UTILISÉES
· HTML : L'hypertext Markup Language, généralement abrégé HTML est le langage de balisage conçu pour représenter les pages web(Anonyme, wikipdia).
· PHP(PHP Hypertext PreProcessor) : C'est un langage de langage de script. Il permet de décrire, d'afficher dynamiquement les informations et de créer des pages web ;
· MySQL : C'est un système de gestion de base de données. Son rôle est de stocker et de gérer une grande quantité de données en les organisant sous forme de tables, et de permettre la manipulation de ces données à travers le langage de requête SQL ;
· CSS :« Cascading Style Sheets », forment un langage informatique qui décrit la présentation des documents HTML et XML, en d'autre terme dit la mise en forme de nos pages web(Anonyme, wikipdia, 2020).36(*)
· JavaScript :C'est un langage de programmation de scripts principalement employé dans les pages web interactives mais aussi pour les serveurs avec l'utilisateur. (Anonyme, wikipdia, 2020).


Capture d’écran




Arborescence de notre projet:















La page d”accueille :

Au niveau de cette page on a la possibilité de voir le menu principale du site avec tous ses onglets qui est toujour fixer en haut de la page d’accueille mais aussi présent dans tous les autres pages de la plateforme, ce qui permet de faciliter la navigation des utilisateurs et pouvoir se retrouver où qu'il se situe dans le site. Le client a la possibilité de faire une réservation au niveau de la page d’accueil même s'il n’a pas de compte mais ses droits sont limités.
La page d’inscription(Register):


Après la création de compte au niveau de cette page, le système stocke tous les utilisateurs qui ont un droit d'accès dans une interface(entité) au sein de la base de données. Il inclut son mail d'inscription(mail), son mot de passe (password) tout en acceptent les termes et conditions pour pouvoir être enregistré dans la base de données .
La page de connexion(Authentification):login
Après la création de compte , avant de se connecter,














Après avoir s'identifier avec son compte et se connecter,

Pour pouvoir effectuer certaines tâches l’utilisateur doit se connecter avec le compte qu’il a créé. Malgré ça il n’a toujour pas certain privileges  comme le fait de pouvoir accéder aux APi des Chambres, clients et utilisateurs du fait seul l’administrateur principale a le droit d'accès aux APi du fait que c’est à lui que revient le rôle admin et c’est lui qui a le droit d'octroyer ce rôles à un utilisateur qui a un compte.
La page d’ajout de pièce (Chambre):

Dans cette page on a le formulair qui permet d’ajouter de nouvelles Chambres dans la base de données et de pouvoir définir leur statuts en renseignant les champs: Types de chambres (Standard, moyen,haut niveau, ou simple),prix par nuit,nombre de lit, type de lit et statut (disponible ou occupé).Ici on voit qu Magatte a le droit d’ajouter de nouvelles pièces. 
Après avoir créé un compte et se connecter l’utilisateur a la possibilité d’ajouter une Chambre si l’admin lui donne le rôle de user sinon il n’a de possibilité que de faire des réservation ou de voir la liste des chambres et de leur disponibilité.  

La page de la liste des chambres:

Au niveau de cette page on a la possibilité de voir les différents types de chambre et de pouvoir comparer les prix avant d’en choisir la  chambre a reserver au niveau de la page de réservation par le biais  du bouton (FAIRE UNE RÉSERVATION )  qui conduit  à la page de réservation.
La page de réservation:

Ici, tout comme l’utilisateur, le visiteur qui n’a pas de compte doit renseigner les champs (Nom, Prénom, Email, Date de début, Date de fin et  Date de Paiement ) pour effectuer l’enregistrement d’une nouvelle  réservation.

Conclusion
Nous voici au terme de notre travail qui traite de la Conception et réalisation d'un système informatisé d'une application web de gestion de réservation dans un hôtel ( les 3 A Hotel). Sachant que toute recherche scientifique a comme but d'aboutir à un résultat, dans ce travail il a été question de proposer une solution aux problèmes de gestion de réservation des clients dans l'hôtel sans avoir à se déplacer, Cette gestion était manuelle, il a fallu pour nous de trouver un nouveau système de gestion capable de rentabiliser les activités et de sa rapprocher de ses clients
Pour y arriver, Nous sommes parties de la problématique, des hypothèses, des objectifs, des méthodes et techniques dont l'ensemble nous ont conduit aux résultats.
Résumé du travail
Notre travail est constitué comme suit: 
Dans le premier niveau, Il était question de définir quelques que nous avons utilisés, suivi par la présentation d'étude du milieu en plus le système d'information, critique de l'existant et la proposition des solutions. 
Dans le second temps, nous avons décrit le langage de modélisation pour la conception de notre application qui est le langage UML.
Enfin, dans le troisième Chapitre, on a pris le temps de réaliser notre application tout en spécifiant les outils de développement ainsi que les langages des programmations  et le MVC utilisés, suivi d'aperçu de quelques  interfaces à travers des captures . 
Perspectives
En regard de ce qui précède, nous disons que notre hypothèse préalablement établie est confirmée et rencontre les objectifs que nous nous sommes fixés.
Nous pensons avoir mis un nouvel outil de travail pour une gestion efficace de réservation à l'hôtel “les 3 A Hotel''.
Tout compte fait de la mise en place de la solution de réservation en ligne, on pense pouvoir mettre en disposition des clients la possibilité de faire leurs paiement en ligne et même mettre en place une application mobile pour élargir l'accessibilité de l'hôtel. 
Nous demandons ainsi à nos potentiels lecteurs l'indulgence pour les insuffisances qu'ils auront à constater, étant donné que l'œuvre humaine ne manque jamais d'imperfection, surtout que cette certification en dev back-end fait partie de nos premiers exercices intellectuels et professionnels  que nous avons  réalisés .
Que nos limites et nos faiblesses puissent profiter à nos successeurs pour des horizons meilleurs.

Lien Trello :https://trello.com/b/25OEOhbs
Lien Github: https://github.com/diouf2424/projetreservationdechambrehotel.git
