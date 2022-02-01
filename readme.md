## Installation

Upload the database in mysql with the file name 

```
database.sql 
```

and add to the database with the name **"gila"** later make the command 

```
cp .env.example .env
```

and configure with your database info

change in assets/js/helpers/helper.js the method 

```
getHttp() {
        return 'https://gila-app.herokuapp.com/api/';
}
```

for the correct url.

For import in postman the file is

```
gila.postman_collection
```

## Preview in Heroku

I upload the site in this link https://gila-app.herokuapp.com/

For create users use the url:
https://gila-app.herokuapp.com/register.php (Its optional site)

Thank You




