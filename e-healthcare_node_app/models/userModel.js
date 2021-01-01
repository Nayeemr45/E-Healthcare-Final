 
const db = require('./db');

module.exports= {
	validate: function(doctor, callback){
		var sql = "select * from users where username='"+doctor.username+"'";
		db.getResults(sql, function(results){
			if(results.length >0 ){
				callback(results);
			}else{
				callback(false);
			}
		});
	},
	check_username: function(username, callback){
		var sql = "select * from users where username ='"+username+"'";
		db.getResults(sql, function(results){
			if(results.length >0 ){
				callback(true);
			}else{
				callback(false);
			}
		});
	},

	getByEmail:  function(email, callback){
		var sql = "select * from users where email ='"+email.email+"'";
		db.getResults(sql, function(results){
           
			if(results.length >0 ){
				console.log("db.getResults ~ results", results)
				callback(results[0]);
			}
		});
	},


	insertAdmin: function(admin, callback){
		var sql = "INSERT INTO users(fullname,username,email,password,type,photo,contactno) VALUES ('"+admin.fullname+"','"+admin.username+"','"+admin.email+"','"+admin.password+"','"+admin.type+"','"+admin.photo+"','"+admin.contactno+"')";
		
		db.getResults(sql,function(results){
			
			callback(results);
			//abc = status.insertId;
			//console.log("abc :",abc);
			});
		
	},
	insertService: function(service, callback){
		var sql = "INSERT INTO service(name,price) VALUES ('"+service.name+"','"+service.price+"')";
		
		db.getResults(sql,function(results){
			
			callback(results);
			//abc = status.insertId;
			//console.log("abc :",abc);
			});
		
	},

	update: function(admin, callback){
		console.log(admin);
		var sql = "update users set fullname = '"+admin.fullname+"', username = '"+admin.username+"',email = '"+admin.email+"', password = '"+admin.password+"',contactno = '"+admin.contactno+"' where user_id = '"+admin.id+"'";
		//var sql = "INSERT INTO users(fullname,username,email,password,type,photo,contactno) VALUES ('"+admin.fullname+"','"+admin.username+"','"+admin.email+"','"+admin.password+"','"+admin.type+"','"+admin.photo+"','"+admin.contactno+"')";
		
		db.getResults(sql,function(results){
			
			callback(results);
			//abc = status.insertId;
			//console.log("abc :",abc);
			});
	},
	updatePass: function(user, callback){
		//console.log(admin);
		var sql = "update users set  password = '"+user.password+"' where user_id = '"+user.id+"'";
		//var sql = "INSERT INTO users(fullname,username,email,password,type,photo,contactno) VALUES ('"+admin.fullname+"','"+admin.username+"','"+admin.email+"','"+admin.password+"','"+admin.type+"','"+admin.photo+"','"+admin.contactno+"')";
		
		
			
			db.execute(sql, function(status){
				if(status){
					callback(true);
				}else{
					callback(false);
				}
			});
			
	},
	delete: function(doctor, callback){
		var sql = "DELETE FROM users WHERE user_id = '"+doctor.id+"'";
		//var sql2 = "DELETE FROM doctor_table WHERE user_id = '"+doctor.id+"'";
		//sql = {sql1,sql2};
		
		db.execute(sql,function(status){
		
				if(status){
					callback(true);
				}else{
					callback(false);
				}
			});
			
		
	}
}