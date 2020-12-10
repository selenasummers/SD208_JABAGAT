const mongoose = require("mongoose");

const connectToDatabase = () => {
    mongoose.connect('mongodb://localhost:27017/signup_system',{
        useNewUrlParser:true,
        useUnifiedTopology: true,
        useCreateIndex:true,
        useFindAndModify: false,
    })
    .then(()=>{
        console.log("Connected");
    })
    .catch((err)=> console.log(err));
};
module.exports = {
    connect: connectToDatabase
};
