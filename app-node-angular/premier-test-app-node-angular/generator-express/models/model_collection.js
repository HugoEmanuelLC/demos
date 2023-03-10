const DBconnMySql = require('./DBmysqlConfig')
const mySql = require('promise-mysql')

//afficher toutes les collections
exports.getAllCollection = () => {
    return DBconnMySql.then((conn) => {
        return conn.query("SELECT * FROM collection")
    })
}