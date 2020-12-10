  
let express = require('express');
let mongoose = require('mongoose');
let bodyParser = require('body-parser');
let app = express();
let port = 1485;
let database = require('./services/database');
let userRouter = require('./routes/route');

app.use(express.json());
app.set('view engine', 'ejs');
app.use(bodyParser.urlencoded({ extended: true }));
app.use('/public', express.static('public'));

app.use('/', userRouter);

database.connect();

app.listen(port, console.log(`Server listening at port ${port}`));