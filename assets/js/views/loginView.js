class LoginView {

    constructor() {
        let helper = new Helper();
        if (helper.validate()) {
            window.location.href = "home.php";
            return false;
        }
        this.defaultEvents();
    }

    defaultEvents() {
        let login = document.querySelector(".login");
        login.addEventListener('submit', (ev) => {
            ev.preventDefault();
            this.submit(ev.target);
        });
    }

    submit(value) {
        let helper = new Helper();
        const data = new FormData(value);
        const values = Object.fromEntries(data.entries());
        helper.postData('login.php', values).then(function(res) {
            if(res.ok) {
              res.json().then(({access_token}) => {
                localStorage.setItem("token", access_token);
                window.location.href = "home.php";
              });
            } else {
              alert('Usuario o password incorrecto!');
            }
        })
        .catch(function(error) {
            alert('Hubo un problema con la petición Fetch:' + error.message);
        });
    }
}