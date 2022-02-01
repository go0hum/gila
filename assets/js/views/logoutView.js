class LogoutView {

    constructor() {
        this.logout();
    }

    logout() {
        localStorage.removeItem("token");
        window.location.href = "index.php";
    }
}