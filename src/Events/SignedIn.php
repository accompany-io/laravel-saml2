<?php

namespace Slides\Saml2\Events;

use Slides\Saml2\Saml2User;
use Slides\Saml2\Auth;

/**
 * Class LoggedIn
 *
 * @package Slides\Saml2\Events
 */
class SignedIn
{
    protected $user;
    protected $auth;

    /**
     * LoggedIn constructor.
     *
     * @param Saml2User $user
     * @param Auth $auth
     */
    public function __construct(Saml2User $user, Auth $auth)
    {
        $this->user = $user;
        $this->auth = $auth;
    }

    /**
     * The authentication handler.
     *
     * @return Auth
     */
    public function getAuth()
    {
        return $this->auth;
    }

    /**
     * The signed-up user.
     *
     * @return Saml2User
     */
    public function getSaml2User()
    {
        return $this->user;
    }
}
