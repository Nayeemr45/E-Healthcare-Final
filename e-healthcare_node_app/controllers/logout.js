const express 	= require('express');
const router 	= express.Router();

router.get('/', (req, res)=>{


	res.clearCookie('id');
	res.redirect('/login');
});


module.exports = router;