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

**Symptôme** :

**Cause** :

**Règle du module en jeu** :

**Correctif** :

## testOpeningAnOrderIgnoresAnAbandonedOne

**Symptôme** :

**Cause** :

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
