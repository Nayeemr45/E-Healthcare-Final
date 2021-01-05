//declaration
const express 					= require('express');	
const bodyParser 				= require('body-parser');
const upload 					= require('express-fileupload');
const flash            			= require('connect-flash');
const home						= require('./controllers/home');
const login						= require('./controllers/login');
const data						= require('./controllers/data');
const exSession 				= require('express-session');
const {check,validationResult} 	= require('express-validator');
const cookieParser 				= require('cookie-parser');
const logout					= require('./controllers/logout');

const app						= express();
const port						= 3000;
const path						= require('path');


//configuration
app.set('view engine', 'ejs');

const urlencodedParser = bodyParser.urlencoded({extended:false});

//middleware
app.use(cookieParser());
app.use('/abc', express.static('assets'));
app.use(bodyParser.urlencoded({extended: true}));
app.use(upload());
app.use(exSession({secret: 'secret value', saveUninitialized: true, resave: false}));

app.use(flash());
app.use('/home', home);
app.use('/login', login);
app.use('/data', data);
app.use('/logout',logout);

//app.use('/admin', admin);





//router
app.get('/', (req, res)=>{
    res.redirect('/login');
});



//server startup
app.listen(port, (error)=>{
	console.log('server strated at '+port);
});