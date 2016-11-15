<?php namespace CodeZero\OAuth\Providers;

use CodeZero\OAuth\BaseProvider;
use OAuth\OAuth2\Service\Microsoft;

class MicrosoftProvider extends BaseProvider
{
    /**
     * Internal Provider Handle
     *
     * @var string
     */
    protected $handle = 'microsoft';

    /**
     * Default Scope
     *
     * @var array
     */
    protected $defaultScope = [ Microsoft::SCOPE_BASIC, Microsoft::SCOPE_EMAILS, Microsoft::SCOPE_SKYDRIVE, Microsoft::SCOPE_CONTACTS_EMAILS ];

    /**
     * Default Request Uri
     *
     * @var string
     */
    protected $defaultRequest = 'https://apis.live.net/v5.0/me';
}