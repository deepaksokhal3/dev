<?php

return [

    /*
     * Path to the json file containing the credentials.
     */
    'service_account_credentials_json' => public_path('/calender-733eaac7cf44.json'),

    /*
     *  The id of the Google Calendar that will be used by default.
     */
    'calendar_id' => env('GOOGLE_CALENDAR_ID'),
];
