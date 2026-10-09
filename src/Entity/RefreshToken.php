<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gesdinet\JWTRefreshTokenBundle\Entity\RefreshToken as BaseRefreshToken;

#[ORM\Entity]
#[ORM\Table(name: 'refresh_tokens')]
class RefreshToken extends BaseRefreshToken{

    #[ORM\Id]
    #[ORM\Column(type: 'string')]
    private ?string $refresh_token = null;

    public function getRefreshToken(): ?string{
        return $this->refresh_token;
    }

}
