<?php namespace CodeZero\OAuth\Providers;

use CodeZero\OAuth\BaseProvider;
use OAuth\OAuth2\Service\Facebook;
use OAuth\OAuth2\Service\Twitch;

class TwitchProvider extends BaseProvider
{
    /**
     * Internal Provider Handle
     *
     * @var string
     */
    protected $handle = 'twitch';

    /**
     * Default Scope
     *
     * @var array
     */
    protected $defaultScope = [ Twitch::SCOPE_USER_READ, Twitch::SCOPE_CHAT_LOGIN, Twitch::SCOPE_USER_EDIT, Twitch::SCOPE_USER_EMAIL ];

    /**
     * Default Request Uri
     *
     * @var string
     */
    protected $defaultRequest = 'https://api.twitch.tv/kraken/user';
}
