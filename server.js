import {mariadb} from "mariadb";

var mariadb = require('mariadb');
var connection = mariadb
 .createConnection({
   host: '192.168.0.102',
   port: '3306',
   user: 'root', 
   password:'root', 
   database:'itproject'
}).then(conn => {
    console.log('Database Connected successfully!')
});

connection.query('SELECT * from user', function(err){ 
if (err){ 
  console.log(err.code);  
  console.log(err.fatal);  
  }
});

connection.end();


