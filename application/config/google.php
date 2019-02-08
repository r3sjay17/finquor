<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------
|  Google API Configuration
| -------------------------------------------------------------------
| 
| To get API details you have to create a Google Project
| at Google API Console (https://console.developers.google.com)
| 
|  client_id         string   Your Google API Client ID.
|  client_secret     string   Your Google API Client secret.
|  redirect_uri      string   URL to redirect back to after login.
|  application_name  string   Your Google application name.
|  api_key           string   Developer key.
|  scopes            string   Specify scopes
*/

$config['google']['client_id'] = '471011139323-rap0mihmqg6nscouhhg2m7ve0iccd08r.apps.googleusercontent.com';
$config['google']['client_secret'] = 'yepqNpmb9PUy_I1tIfMwTSA-';
$config['google']['redirect_url'] = base_url('api/googleoauth2callback');