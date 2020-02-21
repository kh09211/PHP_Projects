<?php

// SQLite connection class
Class SQLiteConnection {

  //PDO instance property
  private $pdo;

  //return a PDO object instance that uses this method to connect to the sqlite Database
  public function connect() {
    if ($this->pdo == null) {
      $this->pdo = new PDO("sqlite:" . Config::PATH_TO_SQLITE_FILE);
    }
    return $this->pdo;
  }

}
