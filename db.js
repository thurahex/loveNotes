const { createPool }= require("mysql")
const Connection = require("mysql/lib/Connection")
const pool = createPool({
    host:"localhost",
    user:"root",
    password:"password",
    database:"test",
    connectionLimit:10
})
pool.query(`select * from reg`,(err, result, feilds) => {
    if(err){
        return console.log(err);
    }
    return console.log(result);
})