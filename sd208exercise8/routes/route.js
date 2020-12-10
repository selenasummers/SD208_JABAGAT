const express = require('express')
const router = express.Router()

const { Login, Register, userRegister, userLogin } = require('../controllers/controller')

router.get('/login', Login)
router.get('/', Register)
router.post('/register', userRegister)
router.post('/login', userLogin)

module.exports = router;