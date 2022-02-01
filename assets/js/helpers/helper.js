class Helper {

    validate() {
        if (localStorage.getItem("token") == undefined) {
            return false;
        }
        return true;
    }

    getHttp() {
        return 'http://localhost/api/';
    }

    getData() {
        const url = this.getHttp() + 'vehicule';

        const myInit = { 
            method: 'GET',
            headers: {
                'Content-Type': 'application/json',
                'Authorization' : 'Bearer ' + localStorage.getItem('token')
            }
        };

        return fetch(url, myInit);
    }

    postData(route, data) {
        const url = this.getHttp() + route;

        let header = {
            'Content-Type': 'application/json'
        };

        if (this.validate()) {
            header.Authorization = "Bearer " + localStorage.getItem('token');
        }

        const myInit = { 
            method: 'POST',
            headers: header,
            body: JSON.stringify(data)
        };

        return fetch(url, myInit);
    } 
}