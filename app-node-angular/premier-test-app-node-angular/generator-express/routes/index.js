var express = require('express');
var router = express.Router();

const collection = require('../controllers/controller_collection')

/* GET home page. */
router.get('/', function(req, res, next) {
  res.render('index', { title: 'Express' });
});

router.get('/col', collection.getAllCollection)

module.exports = router;
