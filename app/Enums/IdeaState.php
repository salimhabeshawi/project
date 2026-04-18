<?php

namespace App\Enums;

enum IdeaState: string
{
    case pending = 'Pending';
    case completed = 'Completed';
}
