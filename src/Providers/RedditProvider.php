<?php namespace CodeZero\OAuth\Providers;

use CodeZero\OAuth\BaseProvider;

class RedditProvider extends BaseProvider
{
    /**
     * Internal Provider Handle
     *
     * @var string
     */
    protected $handle = 'reddit';

    /**
     * Default Scope
     *
     * @var array
     */
    protected $defaultScope = [];

    /**
     * Default Request Uri
     *
     * @var string
     */
    protected $defaultRequest = 'https://oauth.reddit.com/api/v1/me.json';
}
