 
const db = require('./db');

module.exports= {
	validate: function(user, callback){
		var sql = "select * from users where username='"+user.username+"' and password='"+user.password+"'";
		db.getResults(sql, function(results){
			if(results.length >0 ){
				callback(results[0].type);
			}
		});
	},
	getById: function(id, callback){
		var sql = "select * from users INNER JOIN patients where users.id=patients.user_id AND users.id='"+id+"'";
		db.getResults(sql, function(results){
			if(results.length >0 ){
				callback(results[0]);
			}
		});
	},

	getDoctors: function(callback){
		var sql = "select * from users where type='patient'";
		db.getResults(sql, function(results){
			callback(results);
			
		});
	},

	getPatients: function(callback){
		var sql = "select * from users where type='patient'";
		db.getResults(sql, function(results){
			callback(results);
		});
	},





	getAll: function(callback){
		var sql = "select * from users";
		db.getResults(sql, function(results){
			callback(results);
		});
	},
	insert: function(report, callback){
		var sql = "INSERT INTO test_reports(name,photo,user_id,date) VALUES ('"+report.name+"','"+report.photo+"','"+report.id+"','"+report.date+"')";
		
		db.getResults(sql,function(results){
			callback(results);
			});
	},
	
	update: function(user, callback){
		console.log(user);
		var sql = "update users set contactno = '"+user.contactno+"' where id = '"+user.id+"'";
		db.execute(sql, function(status){
		var sql2 = "update patients set address = '"+user.address+"',bmi = '"+user.bmi+"',weight = '"+user.weight+"',bloodpressure = '"+user.bloodpressure+"',cal = '"+user.cal+"' where user_id = '"+user.id+"'";
		db.execute(sql2, function(status1){
			if(status1){
				callback(true);
			}else{
				callback(false);
			}
		});
		});
	},
	delete: function(patient, callback){
		var sql = "DELETE FROM users WHERE user_id = '"+patient.id+"'";
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