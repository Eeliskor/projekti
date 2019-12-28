'use strict'

// Asenna ensin mysql driver 
// npm install mysql --save

var mysql = require('mysql');

var connection = mysql.createConnection({
  host     : 'localhost',
  user     : 'root',  // HUOM! Älä käytä root:n tunnusta tuotantokoneella!!!!
  password : '',
  database : 'tyoajat'
});

module.exports = 
{
    fetchTypes: function (req, res) {  
      connection.query('SELECT id, projekti_nimi, tyontekija, pvm, tunnit FROM projekti', function(error, results, fields){
        if ( error ){
          console.log("Virhe haettaessa dataa projekti-taulusta, syy: " + error);
          //res.send(error);
          //res.send(JSON.stringify({"status": 500, "error": error, "response": null})); 
          res.send({"status": 500, "error": error, "response": null}); 
        }
        else
        {
          console.log("Data = " + JSON.stringify(results));
          res.json(results);
          //res.statusCode = 201;
          //res.send(results);
          //res.send({ "status": 768, "error": null, "response": results });
        }
    });

    },

    fetchAll: function (req, res) {
        console.log("Body = " + JSON.stringify(req.body));
        console.log("Params = " + JSON.stringify(req.query));
        res.send("Kutsuttiin fetchAll");
        connection.query("SELECT * FROM projekti", function (error, result, fields) {
            console.log(result);
        });
        
        /*var sql = "SELECT * FROM ASIAKAS WHERE 1=1";
        sql = sql + " AND nimi like '" + req.query.nimi + "%'";

        connection.query();*/
    },

    create: function(req, res){
        // Client lähettää POST-moethod:n

        let c = req.body;

        connection.query('INSERT INTO projekti (id, projekti_nimi, tyontekija, pvm, tunnit) VALUES (?, ?, ?, ?, ?)', [c.id, c.projekti_nimi, c.tuontekija, c.pvm, c.tunnit],
            function (error, results, fields) {
                if (error) {
                    console.log(error);
                    res.send(error);
                }
                else {
                    console.log("Data = " + JSON.stringify(req.body));
                    console.log("Param = " + JSON.stringify(req.query));
                    let params = req.query;
                    console.log(params.Nimi);
                    res.send("Kutsuttiin create");
                }
            });
    },

    fetchCustomers: function (req, res) {
        console.log("Body = " + JSON.stringify(req.body));
        console.log("Params = " + JSON.stringify(req.query));
        connection.query("SELECT * FROM projekti", function (error, result, fields) {
            console.log(result);
        });
    },

    update: function(req, res){

    },

    delete: function (req, res) {
        // Client lähettää DELETE method:n

        let avain = req.params.id;

        connection.query('DELETE FROM projekti WHERE id=?', [avain],
            function (error, results, fields) {
                if (error) {
                    console.log(error);
                    res.send(error);
                }
                else {
                    console.log("Body = " + JSON.stringify(req.body));
                    console.log("Params = " + JSON.stringify(req.params));
                    res.send("Kutsuttiin delete");
                    var id = req.params.id;
                    return res.status(200);
                }
            });
    }
}
