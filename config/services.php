<?php

return [

    /*
      |--------------------------------------------------------------------------
      | Third Party Services
      |--------------------------------------------------------------------------
      |
      | This file is for storing the credentials for third party services such
      | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
      | default location for this type of information, allowing packages
      | to have a conventional place to find your various credentials.
      |
     */

    'mailgun' => [
        'domain' => '',
        'secret' => '',
    ],
    'mandrill' => [
        'secret' => '',
    ],
    'ses' => [
        'key' => '',
        'secret' => '',
        'region' => 'us-east-1',
    ],
    'stripe' => [
        'model' => 'User',
        'secret' => '',
    ],
    'google' => [
        'client_id' => '651915961628-3q8v398qcoce5rjjdh07vt63lhho1ggj.apps.googleusercontent.com',
        'client_secret' => 'your-github-app-secret',
        'redirect' => 'https://localhost/oauth2callback',
    ],
];
