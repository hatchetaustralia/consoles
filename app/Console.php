<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Sushi\Sushi;

class Console extends Model
{
    use Sushi;

    protected $rows = [
        [
            'name' => 'AWS Management Console',
            'url' => 'https://console.aws.amazon.com/',
            'provider' => 'Amazon',
            'route' => 'amazon',
        ],
        [
            'name' => 'AWS Console w/IAM Account',
            'url' => 'https://123456789.signin.aws.amazon.com/console/',
            'provider' => 'Amazon',
            'route' => 'amazon/with-account',
        ],
        [
            'name' => 'Google API Console',
            'url' => 'https://console.developers.google.com/',
            'provider' => 'Google',
            'route' => 'google',
        ],
        [
            'name' => 'Google Analytics Console',
            'url' => 'https://analytics.google.com/analytics/web/',
            'provider' => 'Google',
            'route' => 'google/analytics',
        ],
        [
            'name' => 'Google Play Console',
            'url' => 'https://play.google.com/apps/publish',
            'provider' => 'Google',
            'route' => 'google/play',
        ],
        [
            'name' => 'Twitter Apps',
            'url' => 'https://developer.twitter.com/en/apps',
            'provider' => 'Twitter',
            'route' => 'twitter',
        ],
        [
            'name' => 'GitHub OAuth Apps',
            'url' => 'https://github.com/settings/developers',
            'provider' => 'GitHub',
            'route' => 'github',
        ],
        [
            'name' => 'Azure Portal',
            'url' => 'https://portal.azure.com/',
            'provider' => 'Microsoft',
            'route' => 'azure',
        ],
    ];

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'route';
    }

    public function provider()
    {
        return $this->belongsTo(Provider::class, 'provider', 'name');
    }
}
