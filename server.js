var mariadb = require('mariadb')

mariadb.createConnection({ // Open a new connection                                                                                                                                           
    user: 'root',
    host: '192.168.0.102',
    port: 3006
})
    .then(conn => {
        conn.query('SELECT * from testtable') // Execute a query                                                                                                                                
            .then(result => { // Print the results                                                                                                                                            
                for (row of result) {
                    console.log(row)
                }
            })
            .then(conn.destroy()) // Close the connection                                                                                                                                     
    })