<?php

require_once 'Database.php';

class Anime extends Database
{
    public function __construct(){
        parent::__construct();

        $this->pdo->query('CREATE TABLE IF NOT EXISTS anime (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            titre VARCHAR(100) NOT NULL,
            chemin_photo TEXT NOT NULL,
            type VARCHAR(100) NOT NULL,
            statut VARCHAR(100) NOT NULL,
            date_sortie TEXT CHECK (date_sortie LIKE "____-__-__"),
            date_fin TEXT CHECK (date_fin LIKE "____-__-__"),
            nombre_ep INTEGER NOT NULL
            )'
        );
        
        $this->pdo->query('CREATE TABLE IF NOT EXISTS anime_all_title (
            id INTEGER NOT NULL,
            langue VARCHAR(100) NOT NULL,
            titre VARCHAR(100) NOT NULL,
            FOREIGN KEY(id) REFERENCES anime(id)
            )'
        );
        
        $this->pdo->query('CREATE TABLE IF NOT EXISTS anime_note (
            id INTEGER NOT NULL,
            username VARCHAR(100) NOT NULL,
            note INTEGER NOT NULL CHECK (note BETWEEN 1 AND 10),
            commentaire TEXT NOT NULL,
            date_publication TEXT CHECK (date_publication LIKE "____-__-__"),
            heure_publication TEXT CHECK (heure_publication LIKE "__:__:__"),
            FOREIGN KEY(id) REFERENCES anime(id)
            )'
        );
        
        $this->pdo->query('CREATE TABLE IF NOT EXISTS anime_genre (
            id INTEGER NOT NULL,
            genre VARCHAR(100) NOT NULL,
            FOREIGN KEY(id) REFERENCES anime(id)
            )'
        );
        
        $this->pdo->query('CREATE TABLE IF NOT EXISTS anime_synopsis (
            id INTEGER NOT NULL,
            langue VARCHAR(100) NOT NULL,
            synopsis TEXT NOT NULL,
            FOREIGN KEY(id) REFERENCES anime(id)
            )'
        );
    }
    
    public function insertReview(string $id, string $username, int $note, string $commentaire): void
    {
        $statement = $this->pdo->prepare("INSERT INTO anime_note ('id', 'username', 'note', 'commentaire', 'date_publication', 'heure_publication') VALUES (:id, :username, :note, :commentaire, CURRENT_DATE, CURRENT_TIME)");
        $statement->bindValue(':id', $id);
        $statement->bindValue(':username', $username);
        $statement->bindValue(':commentaire', $commentaire);
        $statement->bindValue(':note', $note);
        $statement->execute();
    }
    
    public function getReview(): array
    {
        return $this->pdo->query('SELECT * FROM anime_note')->fetchAll();
    }
    
    public function getMoyenneNote(int $id): float
    {
        if ($this->pdo->query("SELECT COUNT(*) FROM anime_note WHERE id = $id")->fetchColumn() === 0) {
            return -1;
        }
        return $this->pdo->query("SELECT AVG(note) FROM anime_note WHERE id = $id")->fetchColumn();
    }
    
    public function getAllAnimes(): array
    {
        return $this->pdo->query('SELECT * FROM anime')->fetchAll();
    }
    
    public function getAnimeById(int $id): array
    {
        return $this->pdo->query("SELECT * FROM anime WHERE id = $id")->fetch();
    }
    
    public function getAnimeSynopsisById(int $id, string $langue): array
    {
        return $this->pdo->query("SELECT * FROM anime_synopsis WHERE id = $id" . " AND langue = '$langue'")->fetch();
    }
    
    public function getAnimeAllTitleById(int $id): array
    {
        return $this->pdo->query("SELECT * FROM anime_all_title WHERE id = $id")->fetchAll();
    }
    
    public function getAnimeGenreById(int $id): array
    {
        return $this->pdo->query("SELECT * FROM anime_genre WHERE id = $id")->fetchAll();
    }

    public function getAnimeRecommendation(): array
    {
        return $this->pdo->query('SELECT * FROM anime where id = 1 OR id = 2 OR id = 3 OR id = 4 OR id = 5 OR id = 6 OR id = 7 OR id = 8 OR id = 9')->fetchAll();
    }
    
}

?>

