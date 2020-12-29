<?php


class Dbconn {

    private $host = "localhost",
            $dbname = "ulang_cms",
            $username = "root",
            $pwd = "Devy_@1999@_Mutiara";

    public function connect() {
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
        $pdo = new PDO($dsn, $this->username, $this->pwd);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }
}

class Post extends Dbconn {
    public function getPost() {
        $sql = "SELECT daftar.id, daftar.kegiatan, daftar.keterangan, daftar.penulis, daftar.tanggal, status.status FROM daftar INNER JOIN status ON daftar.status_id = status.id";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();

        while($result = $stmt->fetchAll()){
        return $result;
        }
    }

    public function addPost() {
        $sql = "INSERT INTO daftar(kegiatan, keterangan, penulis, tanggal, status_id) VALUES (?, ?, ?, ? ,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([]);
    }

    public function editPost() {
        $sql = "SELECT * FROM daftar WHERE id=?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([]);
        $result = $stmt->fetch();
        return $result;
    }
    public function updatePost() {
        $sql = "UPDATE daftar SET kegistan=?, keterangan=?, penulis=?, tanggal=?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([]);
    }
    public function deletePost() {
        $sql = "DELETE FROM daftar WHERE";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
    }
}


