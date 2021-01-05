const express 	= require('express');
//const { param } = require('./home');
const bodyParser = require('body-parser');
const { check, validationResult } = require('express-validator');
const userModel = require.main.require('./models/userModel');
const validator_Model = require.main.require('./models/validator_Model');
const router 	= express.Router();
const urlencodedParser  =bodyParser.urlencoded({ extended:false })

const passport						= require('passport')
const facebookStrategy				= require('passport-facebook').Strategy


router.use(passport.initialize());
router.use(passport.session());


router.get('/', (req, res)=>{
	res.render('login/index',{mesg: req.flash('mesg')});
});

router.post('/'
, urlencodedParser,[
	check('username' , 'username cannot Empty')
	.exists()
	.isLength({min : 1}),
	check('password' , 'password cannot Empty')
	.exists()
	.isLength({min : 1}),
	
] 
,
 (req, res)=>{

	const errors = validationResult(req)
	if(!errors.isEmpty()){
		//return res.status(422).jsonp(errors.array())
		 const alert = errors.array()
		res.render('login/index' , {alert,mesg:'Username and Password Incorrect'});
	}
	else{ 
		var user = {

			username: req.body.username,
			email: req.body.email,
			password: req.body.password

		};

	validator_Model.validate(user, function(status){
        console.log("userModel.validate -> status", status)
		if(status != false){

				res.cookie('id', status[0].id);

				var user = {
					id : status[0].id,
				}

					res.redirect('/home');



			}
			

		
	});

	}
}); 




module.exports = router;