<?php
namespace App\Core;

class Logger {
    private static function getLogFile() {
        $logDir = dirname(__DIR__, 2) . '/storage/logs';
        if (!is_dir($logDir)) {
            mkdir($logDir, 0755, true);
        }
        return $logDir . '/app.log';
    }

    public static function log($level, $message) {
        $file = self::getLogFile();
        $date = date('Y-m-d H:i:s');
        $entry = "[{$date}] [{$level}] {$message}" . PHP_EOL;
        @file_put_contents($file, $entry, FILE_APPEND);
    }

    public static function info($message) {
        self::log('INFO', $message);
    }

    public static function error($message) {
        self::log('ERROR', $message);
    }

    public static function warning($message) {
        self::log('WARNING', $message);
    }
}
