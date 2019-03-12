// var mysql = require('mysql');

// var con = mysql.createConnection({
//     user: 'root',
//     password: 'toor',
//     host: '25.1.147.8',
//     port: 3306,
//     database:'itproject'
// });

// con.connect();

// con.connect(function(err) {
//   if (err) throw err;
//   con.query("SELECT * FROM user", function (err, result, fields) {
//     if (err) throw err;
//     console.log(result);
//   });
// });

// con.end();

var mysql      = require('mysql');
var connection = mysql.createConnection({
  user: 'root',
  password: 'toor',
  host: '25.1.147.8',
  port: 3306,
  database:'itproject'
});
 
connection.connect();
 
connection.query('SELECT * from user', function (error, results, fields) {
  if (error) throw error;
  console.log(results[1]);
});
 
connection.end();