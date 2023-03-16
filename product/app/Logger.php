<?php

namespace App;

class EventCategory {
    const ACCESS_CONTROL = "ACCESS_CONTROL";
    const REQUEST_ERROR = "REQUEST_ERROR";
    const CONTROL_SYSTEM = "CONTROL_SYSTEM";
    const BACKUP_RESTORE = "BACKUP_RESTORE";
    const CONFIGURATION = "CONFIGURATION";
    const AUDIT = "AUDIT";
}

class Event {
    const SUCCESSFUL_GREETING = "SUCCESSFUL_GREETING";
    const INVALID_PASSWORD = "INVALID_PASSWORD";
    const ACCOUNT_LOCKED = "ACCOUNT_LOCKED";
    const INVALID_INPUT = "INVALID_INPUT";
    const INVALID_CONFIG = "INVALID_CONFIG";
}

class EventType {
    const NORMAL = "NORMAL";
    const ABNORMAL = "ABNORMAL";
}

class Logger {

    /**
     * log file
     * @var string 
     */
    private $logfile;

    function __construct($logfile) {
        $this->logfile = $logfile;
    }

    /**
     * log message
     */
    private function log_message($eventId, $category, $type) {

        $timestamp = time();
        $source = sprintf("%s:%d", $_SERVER['REMOTE_ADDR'], $_SERVER['REMOTE_PORT']);

        $log_message = sprintf("%s %s %s %s %s\n", $timestamp, $source, $category, $type, $eventId);

        return file_put_contents($this->logfile, $log_message, FILE_APPEND);
    }

    public function logSuccesfulGreeting() {
        $this->log_message(Event::SUCCESSFUL_GREETING, EventCategory::AUDIT, EventType::NORMAL);
    }

    public function logInvalidPassword() {
        $this->log_message(Event::INVALID_PASSWORD, EventCategory::AUDIT, EventType::ABNORMAL);
    }

    public function logAccountLocked() {
        $this->log_message(Event::ACCOUNT_LOCKED, EventCategory::AUDIT, EventType::ABNORMAL);
    }

    public function logInvalidInput() {
        $this->log_message(Event::INVALID_INPUT, EventCategory::AUDIT, EventType::ABNORMAL);
    }

    public function logInvalidConfig() {
        $this->log_message(Event::INVALID_CONFIG, EventCategory::CONFIGURATION, EventType::ABNORMAL);
    }

}