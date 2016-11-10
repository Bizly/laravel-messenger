<?php

return [

    'user_model' => App\Models\User::class,

    'property_model' => App\Models\Property::class,

    'message_model' => Cmgmyr\Messenger\Models\Message::class,

    'participant_model' => Cmgmyr\Messenger\Models\Participant::class,

    'thread_model' => Cmgmyr\Messenger\Models\Thread::class,

    /**
     * Define custom database table names.
     */
    'properties_table' => null,

    'messages_table' => null,

    'participants_table' => null,

    'threads_table' => null,
];
