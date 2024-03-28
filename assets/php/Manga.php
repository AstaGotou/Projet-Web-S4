<?php

require_once 'Database.php';

class Manga extends Database
{
    public function __construct(){
        parent::__construct();

        $this->pdo->query('CREATE TABLE IF NOT EXISTS manga (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            titre VARCHAR(100) NOT NULL,
            chemin_photo TEXT NOT NULL,
            type VARCHAR(100) NOT NULL,
            statut VARCHAR(100) NOT NULL,
            date_sortie TEXT CHECK (date_sortie LIKE "____-__-__"),
            date_fin TEXT CHECK (date_fin LIKE "____-__-__"),
            nombre_volume INTEGER NOT NULL,
            nombre_chapitre INTEGER NOT NULL
            )'
        );

        $this->pdo->query('CREATE TABLE IF NOT EXISTS manga_all_title (
            id INTEGER NOT NULL,
            langue VARCHAR(100) NOT NULL,
            titre VARCHAR(100) NOT NULL,
            FOREIGN KEY(id) REFERENCES manga(id)
            )'
        );

        $this->pdo->query('CREATE TABLE IF NOT EXISTS manga_note (
            id INTEGER NOT NULL,
            username VARCHAR(100) NOT NULL,
            note INTEGER NOT NULL CHECK (note BETWEEN 1 AND 10),
            commentaire TEXT NOT NULL,
            date_publication TEXT CHECK (date_publication LIKE "____-__-__"),
            heure_publication TEXT CHECK (heure_publication LIKE "__:__:__"),
            FOREIGN KEY(id) REFERENCES manga(id)
            )'
        );

        $this->pdo->query('CREATE TABLE IF NOT EXISTS manga_genre (
            id INTEGER NOT NULL,
            genre VARCHAR(100) NOT NULL,
            FOREIGN KEY(id) REFERENCES manga(id)
            )'
        );

        $this->pdo->query('CREATE TABLE IF NOT EXISTS manga_synopsis (
            id INTEGER NOT NULL,
            langue VARCHAR(100) NOT NULL,
            synopsis TEXT NOT NULL,
            FOREIGN KEY(id) REFERENCES manga(id)
            )'
        );
    }

    public function insertReview(int $id, string $username, string $note, string $commentaire): void
    {
        $statement = $this->pdo->prepare("INSERT INTO manga_note (id, username, note, commentaire, date_publication, heure_publication) 
        VALUES (:id, :username, :note, :commentaire, CURRENT_DATE, CURRENT_TIME)");
        $statement->bindValue(':id', $id);
        $statement->bindValue(':username', $username);
        $statement->bindValue(':note', $note);
        $statement->bindValue(':commentaire', $commentaire);
        $statement->execute();
    }

    public function getReview(): array
    {
        return $this->pdo->query('SELECT * FROM manga_note')->fetchAll();
    }
     
    public function getMoyenneNote(int $id): float
    {   
        if ($this->pdo->query("SELECT COUNT(*) FROM manga_note WHERE id = $id")->fetchColumn() === 0) {
            return -1;
        }
        return $this->pdo->query("SELECT AVG(note) FROM manga_note WHERE id = $id")->fetchColumn();
    }

    public function getAllMangas(): array
    {
        return $this->pdo->query('SELECT * FROM manga')->fetchAll();
    }

    public function getMangaById(int $id): array
    {
        return $this->pdo->query("SELECT * FROM manga WHERE id = $id")->fetch();
    }

    public function getMangaSynopsisById(int $id, string $langue): array
    {
        return $this->pdo->query("SELECT * FROM manga_synopsis WHERE id = $id AND langue = '$langue'")->fetch();
    }

    public function getMangaAllTitleById(int $id): array
    {
        return $this->pdo->query("SELECT * FROM manga_all_title WHERE id = $id")->fetchAll();
    }

    public function getMangaGenreById(int $id): array
    {
        return $this->pdo->query("SELECT * FROM manga_genre WHERE id = $id")->fetchAll();
    }

    public function getMangaRecommendation(): array
    {
        return $this->pdo->query('SELECT * FROM manga where id IN (1, 2, 8, 4, 7, 9, 5, 6, 3) ORDER BY 
        CASE id
            WHEN 1 THEN 1
            WHEN 2 THEN 2
            WHEN 8 THEN 3
            WHEN 4 THEN 4
            WHEN 7 THEN 5
            WHEN 9 THEN 6
            WHEN 5 THEN 7
            WHEN 6 THEN 8
            WHEN 3 THEN 9
        END'
        )->fetchAll();
    }
}

?>

