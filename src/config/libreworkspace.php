<?php

return [
    'client_id' => env('LIBREWORKSPACE_CLIENT_ID', ''),
    'client_secret' => env('LIBREWORKSPACE_CLIENT_SECRET', ''),
    'redirect' => env('LIBREWORKSPACE_REDIRECT_URI', config('app.url') . '/auth/libreworkspace/callback'),
];
