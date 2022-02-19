<?php

use App\Models\User;

return [
    'LAST_NAME'=>User::find(1)->last_name,
    'FIRST_NAME'=>User::find(1)->first_name
];
