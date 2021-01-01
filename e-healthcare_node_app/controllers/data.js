const express 	= require('express');
const bodyParser = require('body-parser');
const userModel = require.main.require('./models/a_patientModel');
const router 	= express.Router();


/* router.get('*',  (req, res, next)=>{
	if(req.cookies['uname'] == null){
		res.redirect('/login');
	}else{
		next();
	}
}); */


router.get('/:id', (req, res)=>{
	//var id = 13
	var id = req.params.id
	userModel.getById(id, function(results){	
		console.log("userModel.getById_user -> p_info", results)
		res.send(results);
	});
});


module.exports = router;

