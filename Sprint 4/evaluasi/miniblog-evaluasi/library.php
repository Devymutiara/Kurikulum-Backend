<?php
class Dbconn {
    private $host = "localhost",
            $dbname = "curblog",
            $dbuser = "root",
            $pwd = "Devy_@1999@_Mutiara";

    public function connect() {
        $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->dbname;
        $pdo = new PDO($dsn, $this->dbuser, $this->pwd);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }
}

class Posts extends Dbconn {
    public function getPost() {
        $sql = "SELECT curhat.id, curhat.judul, curhat.curhat, curhat.tanggal, perihal.perihal FROM curhat INNER JOIN perihal ON curhat.perihal_id = perihal.id";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();

        while($result = $stmt->fetchAll()) {
            return $result;
        }
    }

    public function addPost($judul, $curhat, $tanggal, $perihal) {
        $sql = "INSERT INTO curhat(judul, curhat, tanggal, perihal_id) VALUES(?, ?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$judul, $curhat, $tanggal, $perihal]);
        
    }

    public function editPost($id) {
        $sql = "SELECT * FROM curhat  WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
        $result = $stmt->fetch();
        return $result;
    }

    public function updatePost($judul, $curhat, $perihal, $id) {
        $sql = "UPDATE curhat SET judul = ?, curhat = ?, perihal_id = ? WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$judul, $curhat, $perihal, $id]);

    }

    public function deletePost($id) {
        $sql = "DELETE FROM curhat WHERE id =?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
    }
}
//belum diganti ya
class Login extends Dbconn {
    public function register($uname, $email, $pass) {
        $sql = "INSERT INTO users(username, email, password) VALUES(?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$uname, $email, $pass]);
    }

    public function masuk($uname, $pass) {
        $sql = "SELECT COUNT(*) AS semua FROM users WHERE username = '$uname' and password = '$pass'";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$uname, $pass]);

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if($row['semua'] != "0") {
            $_SESSION['username'] = $uname;
            $_SESSION['status'] = "user";
            header("location: user.php");
        } else {
            header("location: login.php");
        }   
    }

    
}




?>