const mongoose = require('express')
const User = require('../models/model')

const Login = async(req, res) => {
    res.render('login')
}

const Register = async(req, res) => {
    res.render('register')
}

const userRegister = async(req, res) => {
    try {
        const user = {
            firstname: req.body.firstname,
            lastname: req.body.lastname,
            email: req.body.email,
            address: req.body.address,
            password: req.body.password,
        };
        const newUser = new User(user);
        const result = await newUser.save();
        console.log(user)
        res.render('login', { user: user })
    } catch (e) {
        return res.status(400).json({
            error: e
        })
    }
}

const userLogin = async(req, res) => {
    try {
        const email = req.body.email;
        const password = req.body.password;
        console.log(req.body)
        await User.findOne({ password: password }, (err, foundResults) => {
            if (err) {
                console.log(err)
            } else {
                if (foundResults.password === password) {
                    res.render('main', { foundResults: foundResults })
                } else {
                    res.redirect('login')
                }
            }
        })

    } catch (e) {
        return res.status(400)
    }
}

module.exports = {
    Login,
    Register,
    userRegister,
    userLogin
}