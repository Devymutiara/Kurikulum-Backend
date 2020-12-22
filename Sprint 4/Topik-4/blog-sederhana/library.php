<?php
class Dbh {
    
    private $host = "localhost",
            $dbname = "cms",
            $username = "root",
            $pwd = "Devy_@1999@_Mutiara";

    public function connect() {
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
        $pdo = new PDO($dsn, $this->username, $this->pwd);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;        
    }
}
class Posts extends Dbh {
    public function getPost() {
        $sql = "SELECT blog.id, blog.title, blog.content, blog.author, blog.date, kategori.kategori FROM blog INNER JOIN kategori ON blog.kategori_id = kategori.id";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();

        while($result = $stmt->fetchAll()) {
            return $result;
        }
    }

    public function addPost($title, $content, $author, $date, $kategori) {
        $sql = "INSERT INTO blog(title, content, author, date, kategori_id) VALUES(?, ?, ?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$title, $content, $author, $date, $kategori]);
        
    }

    public function editPost($id) {
        $sql = "SELECT * FROM blog  WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
        $result = $stmt->fetch();
        return $result;
    }

    public function updatePost($title, $content, $author, $kategori, $id) {
        $sql = "UPDATE blog SET title = ?, content = ?, author = ?, kategori_id = ? WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$title, $content, $author, $kategori, $id]);

    }

    public function deletePost($id) {
        $sql = "DELETE FROM blog WHERE id =?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
    }

    // public function getCategory() {
    //     $sql = "SELECT * FROM kategori";
    //     $stmt = $this->connect()->prepare($sql);
    //     $stmt->execute();

    //     while($result = $stmt->fetchAll()) {
    //         return $result;
    //     }
    // }

    
}

class Login extends Dbh {
    public function register($uname, $email, $pass) {
        $sql = "INSERT INTO admin(username, email, password) VALUES(?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$uname, $email, $pass]);
    }

    public function masuk($uname, $pass) {
        $sql = "SELECT COUNT(*) FROM admin WHERE username = '$uname' and password = '$pass'";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$uname, $pass]);

        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        var_dump($row);
        if($row > 0) {
            $_SESSION['username'] = $uname;
            $_SESSION['status'] = "user";
            header("location: beranda_user.php");
        } else {
            header("location: login.php");
        }
        
    }
}