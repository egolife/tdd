<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    const PRIORITY_EXTREME = 10;
    const PRIORITY_LOW = 1;
    const PRIORITY_NORMAL = 2;
    const PRIORITY_HIGH = 3;

    const STATUS_NEW = 'new';
    const STATUS_PRICING = 'pricing';
    const STATUS_ACCEPTED = 'accepted';
    const STATUS_IN_PROGRESS = 'progress';
    const STATUS_DONE = 'done';
    const STATUS_FEEDBACK = 'feedback';
    const STATUS_POSTPONED = 'postponed';
    const STATUS_CLOSED = 'closed';
    const STATUS_DENIED = 'denied';
    const STATUS_PENDING = 'pending';
    const STATUS_QUEUED = 'queued';
    const STATUS_ON_REVIEW = 'review';

    public static $adminActiveStatuses = [
        self::STATUS_NEW,
        self::STATUS_ACCEPTED,
        self::STATUS_IN_PROGRESS,
        self::STATUS_DONE,
        self::STATUS_FEEDBACK,
        self::STATUS_PRICING,
    ];

    public static $clientActiveStatuses = [
        self::STATUS_NEW,
        self::STATUS_IN_PROGRESS,
        self::STATUS_DONE,
        self::STATUS_ON_REVIEW,
    ];
}
