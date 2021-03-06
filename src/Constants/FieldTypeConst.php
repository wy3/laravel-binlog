<?php

namespace Telanflow\Binlog\Constants;

class FieldTypeConst
{
    // libmysql/libmysql.c 2933
    const DECIMAL       = 0;
    const TINY          = 1; // 1 byte store_param_tinyint
    const SHORT         = 2; // 2 bytes store_param_short
    const LONG          = 3; // 4 bytes store_param_int32
    const FLOAT         = 4; // 4 bytes store_param_float
    const DOUBLE        = 5; // 8 bytes store_param_double
    const NULL          = 6; // int_is_null_true == 1
    const TIMESTAMP     = 7; // store_param_datetime
    const LONGLONG      = 8; // 8 bytes store_param_int64
    const BIGINT        = 8; // alias LONGLONG 8 bytes store_param_int64
    const INT24         = 9;
    const DATE          = 10;
    const TIME          = 11;
    const DATETIME      = 12;
    const YEAR          = 13;
    const NEWDATE       = 14;
    const VARCHAR       = 15;
    const BIT           = 16;
    const TIMESTAMP2    = 17;
    const DATETIME2     = 18;
    const TIME2         = 19;
    const JSON          = 245;
    const NEWDECIMAL    = 246; // (new in MYSQL 5.0)
    const ENUM          = 247;
    const SET           = 248;
    const TINY_BLOB     = 249;
    const MEDIUM_BLOB   = 250;
    const LONG_BLOB     = 251;
    const BLOB          = 252;
    const VAR_STRING    = 253;
    const STRING        = 254;
    const GEOMETRY      = 255;
    const IGNORE        = 666;

    public static $map = [
        self::DECIMAL       => 'DECIMAL',
        self::TINY          => 'TINYINT',
        self::SHORT         => 'SHORT',
        self::LONG          => 'INT32',
        self::FLOAT         => 'FLOAT',
        self::DOUBLE        => 'DOUBLE',
        self::NULL          => 'NULL',
        self::TIMESTAMP     => 'TIMESTAMP',
        self::LONGLONG      => 'LONGLONG',
        self::BIGINT        => 'BIGINT',
        self::INT24         => 'INT24',
        self::DATE          => 'DATE',
        self::TIME          => 'TIME',
        self::DATETIME      => 'DATETIME',
        self::YEAR          => 'YEAR',
        self::NEWDATE       => 'DATE',
        self::VARCHAR       => 'VARCHAR',
        self::BIT           => 'BIT',
        self::TIMESTAMP2    => 'TIMESTAMP',
        self::DATETIME2     => 'DATETIME',
        self::TIME2         => 'TIME',
        self::JSON          => 'JSON',
        self::NEWDECIMAL    => 'DECIMAL',
        self::ENUM          => 'ENUM',
        self::SET           => 'SET',
        self::TINY_BLOB     => 'TINY_BLOB',
        self::MEDIUM_BLOB   => 'MEDIUM_BLOB',
        self::LONG_BLOB     => 'LONG_BLOB',
        self::BLOB          => 'BLOB',
        self::VAR_STRING    => 'VAR_STRING',
        self::STRING        => 'STRING',
        self::GEOMETRY      => 'GEOMETRY',
        self::IGNORE        => 'IGNORE',
    ];

    public static function getTypeName($type)
    {
        $type = intval($type);
        return isset(self::$map[$type]) ? self::$map[$type] : '';
    }

}
