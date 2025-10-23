<?php
class Page {
    private $db;

    public function __construct() {
        $this->db  = Database::getInstance();
    }

    public function getBySlug($slug) {
        $stmt = $this->db->prepare("SELECT * FROM pages WHERE slug = ? AND status = 'published'");
        $stmt->execute([$slug]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getAll() {
        $stmt = $this->db->query("SELECT * FROM pages ORDER BY created_at DESC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($title, $content, $slug) {
        $stmt = $this->db->prepare(
            "INSERT INTO pages (title, content, slug, created_at, updated_at
            VALUES (?, ?, ?, NOW(), NOW())"
        );

        return $stmt->execute([$title, $content, $slug]);    
    }
}
?>