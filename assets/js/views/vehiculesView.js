class VehiculesView {

    constructor() {
        let helper = new Helper();
        if (!helper.validate()) {
            window.location.href = "index.php";
            return false;
        }
        this.defaultEvents();
    }

    defaultEvents() {
        this.get();
    }

    get() {
        let helper = new Helper();
        helper.getData().then(function(res) {
            let rows = document.querySelector(".rows");
            if(res.ok) {
              res.json().then(data => {
                data.forEach(element => {
                    const tr = document.createElement("tr");
                    const tdtipo = document.createElement("td");
                    tdtipo.innerHTML = element.tipo === 1 ? "Sedan" : "Motocicletas";
                    tr.appendChild(tdtipo);
                    const tdname = document.createElement("td");
                    tdname.innerHTML = element.name;
                    tr.appendChild(tdname);
                    const tdllantas = document.createElement("td");
                    tdllantas.innerHTML = element.llantas;
                    tr.appendChild(tdllantas);
                    const tdpotencia = document.createElement("td");
                    tdpotencia.innerHTML = element.potencia;
                    tr.appendChild(tdpotencia);
                    const tdmarca = document.createElement("td");
                    tdmarca.innerHTML = element.marca;
                    tr.appendChild(tdmarca);
                    const tdfecha = document.createElement("td");
                    tdfecha.innerHTML = element.fecha;
                    tr.appendChild(tdfecha);
                    rows.appendChild(tr);
                });
              });
            } else {
              alert('Respuesta de red OK pero respuesta HTTP no OK');
            }
        })
        .catch(function(error) {
            alert('Hubo un problema con la petición Fetch: ' + error.message);
        });
    }
      
}