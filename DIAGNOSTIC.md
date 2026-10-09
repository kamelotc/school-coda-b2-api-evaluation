# Diagnostic

Une section par test en échec : renseignez ses quatre champs.

## testAddingALineToAnUnknownOrderIsNotFound

**Symptôme** :

**Cause** :

**Règle du module en jeu** :

**Correctif** :

## testAddingALineToAPaidOrderIsAConflict

**Symptôme** :

**Cause** :

**Règle du module en jeu** :

**Correctif** :

## testAddingALineToMyOrder

**Symptôme** :

**Cause** :

**Règle du module en jeu** :

**Correctif** :

## testAddingALineWithAZeroQuantityIsUnprocessable

**Symptôme** :

**Cause** :

**Règle du module en jeu** :

**Correctif** :

## testListingKitchenTicketsReturnsMine

**Symptôme** :

**Cause** :

**Règle du module en jeu** :

**Correctif** :

## testListingKitchenTicketsWithoutTokenIsUnauthorized

**Symptôme** : Une erreur 401 est attendu , nous avons reçu une 200 donc tout le monde peux accèder à la mise en vente de ticket même ceux qui n'on pas de jeton

**Cause** :

**Règle du module en jeu** : Pour régler le problème il faut allez dans le KitchenTicket.php et rajouter dans le new GetCollection un sécuriter pour que ce soit que les personne ayant des jetons qui y accède.

**Correctif** :

    new GetCollection(
    uriTemplate: '/kitchen-tickets',
    paginationClientEnabled: false,
    output: KitchenTicketListOutput::class,
    provider: KitchenTicketCollectionProvider::class,
    security: "is_granted('ROLE_USER')", /* <--- cette ligne a été rajouter */


## testOpeningAnOrderIgnoresAnAbandonedOne

**Symptôme** : problème au niveau du panier de la commande, pour l'utilisateur bob. 

**Cause** : corriger le OrderRepository.php et mettre une conditon , si l'utilisateur quitte son panier avec des commandes dedans, garder en cache la commande et un fois qu'il revient sur le site il aura ça commande qui sera toujours présente.

**Règle du module en jeu** :

**Correctif** :

## testPayingMyOrderMarksItPaid

**Symptôme** :

**Cause** :

**Règle du module en jeu** :

**Correctif** :

## testRefreshingTwiceWithTheSameTokenIsUnauthorized

**Symptôme** : Un utilisateur à réutiliser son jeton de renouvellement une deuxième fois donc il à été refuser, 
on'a reçu un statut 200 alors que l'on devrait avoir un statut 401 , donc il faut modifier les codes d'erreurs pour bien vérifier que le refresh token n'est utilisable qu'une seul fois.


**Cause** : l'entity RefreshToken.php , il manque une règle pour dire d'envoyer une erreur 401 quand l'utilisateur réutillise son jeton de renouvellement

**Règle du module en jeu** :

**Correctif** :

    class RefreshToken extends BaseRefreshToken
    {
    #[ORM\Id]
    #[ORM\Column(type: 'string')]
    private ?string $refresh_token = null;

    public function getRefreshToken(): ?string{
        return $this->refresh_token;
    }


## testRemovingALineFromSomeoneElsesOrderIsForbidden

**Symptôme** :

**Cause** :

**Règle du module en jeu** :

**Correctif** :
