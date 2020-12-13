function myFunction() {
    if (confirm("Anda yakin ingin keluar?")) {
        window.location.href = "login.php"
        return true
    } else {
    return false
    };
}