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
		console.log("userModel.getById_user -> result", results)
		res.send(results);
	});
});
router.post('/:id', (req, res)=>{
	//var id = 13
	var user = {
		id : req.params.id,
		contactno : req.body.contactno,
		address : req.body.address,
		bmi : req.body.bmi,
		weight : req.body.weight,
		bloodpressure : req.body.bloodpressure,
		cal : req.body.cal
	}
    console.log("🚀 ~ file: data.js ~ line 35 ~ router.post ~ user", user)
	
	userModel.update(user, function(results){	
		console.log("userModel.getById_user -> p_info", results)
		res.send(results);
	});
});
router.post('/test_report/:id', (req, res)=>{
	//var id = 13
	var date = new Date();
	var report = {
		id : req.params.id,
		name : req.body.name,
		photo : req.body.photo,
		date : date
	}
    console.log("🚀 test_report", report)
	
	userModel.insert(report, function(results){	
		console.log("userModel.getById_user -> p_info", results)
		res.send(results);
	});
});


module.exports = router;

