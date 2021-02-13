<?php
namespace common\helpers;

class StatusHelper
{
    const STATUS_ACTIVE = 1;
    const STATUS_DRAFT = 0;

    public static function getStatusLabels()
    {
        return
        [
          self::STATUS_ACTIVE => 'Active',
          self::STATUS_DRAFT => 'Draft'
        ];
    }
}