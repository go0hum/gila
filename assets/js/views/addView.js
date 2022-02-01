class AddView {

    constructor() {
        let helper = new Helper();
        if (!helper.validate()) {
            window.location.href = "index.php";
            return false;
        }
        this.defaultEvents();
    }

    defaultEvents() {
        let createForm = document.querySelector(".create");
        createForm.addEventListener('submit', (ev) => {
            ev.preventDefault();
            this.submit(ev.target);
        });
    }
      
    submit(value) {
        const data = new FormData(value);
        const values = Object.fromEntries(data.entries());
        let helper = new Helper();
        helper.postData('vehicule', values).then(function(res) {
            if(res.ok) {
              res.json().then(data => {
                window.location.href = "home.php";
              });
            } else {
              alert('Respuesta de red OK pero respuesta HTTP no OK');
            }
        })
        .catch(function(error) {
            alert('Hubo un problema con la petición Fetch:' + error.message);
        });
    }
}