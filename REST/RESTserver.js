
// Asenna ensin express npm install express --save

var express = require('express');
var app=express();

let cookieParser = require('cookie-parser');

app.use(cookieParser()); 

var bodyParser = require('body-parser');
var RESTcontroller = require('./RESTcontroller');

const http = require('http');
const url = require('url');

const hostname = '127.0.0.1';
const port = process.env.PORT || 3002;

var randomNum = Math.random().toString();
randomNum = randomNum.substring(2, randomNum.length);

let users = {                           /////
    Kayttajatieto: "Joku Niminen",
    Sisaankirjautumisaika: Date.now(),
    SessioID: randomNum
}

//CORS middleware
var allowCrossDomain = function(req, res, next) {
    res.header('Access-Control-Allow-Origin', '*');
 //   res.header('Access-Control-Allow-Methods', 'GET,PUT,POST,DELETE');
 //   res.header('Access-Control-Allow-Headers', 'Content-Type');

    next();
}

app.use(express.static(__dirname + "/public"));

app.use(allowCrossDomain);

app.use(bodyParser.urlencoded({ extended: true }));
app.use(bodyParser.json());


// Staattiset filut
app.use(express.static('public'));

// REST API Asiakas
app.route('/Types')
    .get(RESTcontroller.fetchTypes);


app.route('/projekti')
    .get(RESTcontroller.fetchAll)
    .post(RESTcontroller.create);

app.route('/projekti/:id')
    .put(RESTcontroller.update)
    .delete(RESTcontroller.delete);
//

app.get('/getid', (req, res) => {          ///// (action="setlogin")

    var cook = req.cookies.userData;

    if (cook == undefined) {
        res.cookie("userData", users);
        res.send("Keksi lisatty, paivita sivu")
    }
    else {
        console.log(req.cookies);
        res.send(req.cookies)
    }
});

app.get('/logout', (req, res) => {
    res.clearCookie("userData");
    res.send("Keksi poistettu")
});

app.get('/', function(request, response){
    fs.readFile("aloitus.php", function (err, data) {
        response.writeHead(200, { 'Content-Type': 'text/php' });
        response.write(data);
        response.end();
    });          
});

/*app.get('/maali', function(request, response){
    response.statusCode = 200;
    response.setHeader('Content-Type', 'text/plain');
    response.end("Maalit 2-3"); 
});

app.route('/task')
    .get(function(request, response){
        response.statusCode = 200;
        response.setHeader('Content-Type', 'text/plain');
        response.end("Taskeja pukkaa");     
    });

app.listen(port, hostname, () => {
  console.log(`Server running AT http://${hostname}:${port}/`);
});*/


/*
app.listen(port, () => {
    console.log(`Server running AT http://${port}/`);
  });
*/  