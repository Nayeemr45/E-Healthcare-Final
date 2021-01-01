//declaration
const express 					= require('express');	
const bodyParser 				= require('body-parser');
const upload 					= require('express-fileupload');
const flash            			= require('connect-flash');
const login						= require('./controllers/login');
const register					= require('./controllers/register');
const data						= require('./controllers/data');

const app						= express();
const port						= 3000;
const path						= require('path');


//configuration
app.set('view engine', 'ejs');

const urlencodedParser = bodyParser.urlencoded({extended:false});

//middleware
app.use('/abc', express.static('assets'));
app.use(bodyParser.urlencoded({extended: true}));
app.use(upload());

app.use(flash());
app.use('/login', login);
app.use('/register', register);
app.use('/data', data);
//app.use('/admin', admin);





//router
app.get('/', (req, res)=>{
    res.render('p_home/index' , {uname  : null});
});



//server startup
app.listen(port, (error)=>{
	console.log('server strated at '+port);
});