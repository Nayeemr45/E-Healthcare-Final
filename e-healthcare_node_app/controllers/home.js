const express 	= require('express');
const router 	= express.Router();
const fs = require('fs');


const passport						= require('passport')
const facebookStrategy				= require('passport-facebook').Strategy





router.get('*',  (req, res, next)=>{
	if(req.cookies['id'] == null){
		res.redirect('/login');
	}else{
		next();
	}
}); 

router.get('/', (req, res)=>{
        

    let rawdata = fs.readFileSync('../json/pending_transaction.json');
    let list = JSON.parse(rawdata);
    console.log(list);
    
    res.render('home/index', {id: req.cookies['id'] , data: list});
});

router.post('/', (req, res)=>{
        
    approve = req.body.approve

    
	if(approve != null){
		var data=fs.readFileSync('../json/pending_transaction.json');
		var list=JSON.parse(data);
		var pending_list = [];
		list.forEach(function(li){
			pending_list.push([li.id,li.vote,li.vote_id,li.department,li.date,li.time,li.doctor,li.user_id,li.book_date,li.status]);
        });
                console.log("🚀 ~ file: home.js ~ line 40 ~ router.post ~ pending_list", pending_list[0][2])

		  pending_list.forEach(function(li,index){
			if(approve == li[0] && req.cookies['id']!=li[0]){
				if(pending_list[index][1]<2){
					pending_list[index][1] = parseInt(pending_list[index][1])+1;
					pending_list[index][2] = req.cookies['id'];
				}
				else if(pending_list[index][1]='2'){
					pending_list[index][1] = parseInt(pending_list[index][1])+1;
					pending_list[index][9] = 'approved';
					pending_list[index][2] = req.cookies['id'];
				}
				
			}
		});
		var liobj = [];
		pending_list.forEach(function(li){
			liobj.push({
				id : li[0],
				vote : li[1],
				vote_id : li[2],
				department : li[3],
				date : li[4],
				time : li[5],
				doctor : li[6],
				user_id : li[7],
				book_date : li[8],
				status : li[9]
			});

        });
        console.log("🚀 ~ liobj", liobj)

		 fs.writeFile("../json/pending_transaction.json", JSON.stringify(liobj, null, 10), (err) => {
			if (err) {
				console.error(err);
				return;
			}
        }); 
        console.log("🚀 ~ file: home.js ~ line 34 ~ router.post ~ approve", approve);
		res.render('home/success')
	}else{
		res.redirect('/login');
	}
    
    
});


module.exports = router;