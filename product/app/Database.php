<?php
namespace App;

/**
 * SQLite connnection
 */
class Database {
    /**
     * PDO instance
     * @var type 
     */
    private $pdo;

    function __construct() {
        $this->connect();
        $this->createTables();
    }


    /**
     * return in instance of the PDO object that connects to the SQLite database
     * @return \PDO
     */
    private function connect() {
        if ($this->pdo == null) {
            $this->pdo = new \PDO("sqlite:" . Config::PATH_TO_SQLITE_FILE);
        }
        return $this->pdo;
    }

    /**
     * create tables 
     */
    public function createTables() {
        $commands = ['CREATE TABLE IF NOT EXISTS login_attempts (
                        id   INTEGER PRIMARY KEY,
                        ts DATETIME
                      )'];
        // execute the sql commands to create new tables
        foreach ($commands as $command) {
            $this->pdo->exec($command);
        }
    }

    /**
     * get the table list in the database
     */
    public function getAttempts() {

        $stmt = $this->pdo->query("SELECT *
                                   FROM login_attempts
                                   ORDER BY ts");
        $attempts = [];
        while ($row = $stmt->fetch(\PDO::FETCH_OBJ)) {
            $attempts[] = $row;
        }

        return $attempts;
    }

    /**
     * Insert a new attempt into the login_attempts table
     * @return the id of the new login attempt
     */
    public function recordFailedAttempt() {
        $sql = 'INSERT INTO login_attempts(ts) VALUES(:ts)';
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':ts', time());
        $stmt->execute();

        return $this->pdo->lastInsertId();
    }

    /**
     * Check if login is locked
     */
    public function isAccountLocked() {
        // check if there are 5 or more failed login attempts in the last 30 minutes

        $sql = 'SELECT COUNT(*) FROM login_attempts WHERE ts > :30minago';
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':30minago', time()-60*30);
        $stmt->execute();
        
        $ret = $stmt->fetchColumn();
        if ($ret >= 5) {
            return true;
        }

        return false;
    }

    /**
     * Zero any past login attempts
     */
    public function clearFailedAttempts() {
        $sql = 'DELETE FROM login_attempts';
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
    }
}