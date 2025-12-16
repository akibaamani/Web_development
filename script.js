const jwt = require('jsonwebtoken');
const bcrypt = require('bcryptjs');

// Function to generate a secure token for doctors or patients
const generateToken = (userId, role) => {
    return jwt.sign({ id: userId, role: role }, process.env.JWT_SECRET, {
        expiresIn: '24h'
    });
};

exports.login = async (req, res) => {
    const { email, password } = req.body;
    // logic to find user in DB and compare hashed password
    const token = generateToken(user.id, user.role);
    res.json({ token, role: user.role });
};
