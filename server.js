var mariadb = require('mariadb')

mariadb.createConnection({ // Open a new connection                                                                                                                                           
    user: 'root',
    password: 'toor',
    host: '25.1.147.8',
    port: 3306,
    database:'itproject'
})
    .then(conn => {
        conn.query('SELECT * from user') // Execute a query                                                                                                                                
            .then(result => { // Print the results                                                                                                                                            
                for (row of result) {
                    console.log(row)
                }
            })
            .then(conn.destroy()) // Close the connection                                                                                                                                     
    })