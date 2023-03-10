const collection = require('../models/model_collection')

//afficher toutes les collections
exports.getAllCollection = (req, res, next) => {
    collection.getAllCollection()
    .then((datas) => {
        res.json(datas)
        console.log(datas)
    })
}