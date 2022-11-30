const express = require("express");
const router = express.Router();
const User = require("../models/User");
const bcrypt = require('bcryptjs');
const jwt = require('jsonwebtoken');
const JWT_SECRET="SECRET MESSAGE";
const fetchuser=require('../middleware/fetchuser');
const { body, validationResult } = require("express-validator");
//Route1:create a user using:POST "/api/auth/createuser".No login required
router.post(
  "/createuser",
  [
    body("email", "Enter a valid email").isEmail(),
    body("name", "Enter a valid name").isLength({ min: 3 }),
    body("password", "Password must be minimum 5 characters").isLength({ min: 5})
  ],
  async (req, res) => {
    let success=false;
    //If there are errors return BAD request and the errors
    const errors = validationResult(req);
    if (!errors.isEmpty()) {
      return res.status(400).json({success, errors: errors.array() });
    }
    try {

      //check if the user with same email exists already
      let user = await User.findOne({ email: req.body.email });
      if (user) {
        return res.status(400).json({ error: "Sorry a user with this email exists already" });
      }
      const salt=await bcrypt.genSalt(10);
      const secPass=await bcrypt.hash(req.body.password,salt);
      //create a new user
      user = await User.create({
        name: req.body.name,
        password: secPass,
        email: req.body.email,
      });
      const data={
        user:{
          id:user.id
        }
      }
      const authtoken=jwt.sign(data,JWT_SECRET);
      success=true;
      res.json({success,authtoken});
    } catch (error) {
      console.error(error.message);
      res.status(500).send("Internal Server Occured");
    }
  }
);

//Route 2:authenticate a user using POST:"/api/auth/login".No login required
router.post('/login',[
body("email","Enter a valid Email").isEmail(),
body("password","Password cannot be blank").exists(),
],
async(req,res)=>{
  let success=false;
  //If there are errors return BAD request and the errors
  const errors = validationResult(req);
  if (!errors.isEmpty()) {
    return res.status(400).json({ errors: errors.array() });
  }
const {email,password}=req.body;
try {
  let user=await User.findOne({email});
  if(!user){
    return res.status(400).json({error:"Please try to login with correct credentials"});
  }
  const passwordCompare=await bcrypt.compare(password,user.password);
  if(!passwordCompare){
   
    return res.status(400).json({error:"Please try to login with correct credentials"});
  }
  const data={
    user:{
      id:user.id
    }
  }
  const authtoken=jwt.sign(data,JWT_SECRET); 
  success=true;
  res.json({success,authtoken});
} catch (error) {
  console.error(error.message);
  res.status(500).send("Internal Server Occured");
}
});

//Route 3:Get loggedin user details using POST "/api/auth/getuser".Login required

  router.post('/getuser',fetchuser,async (req,res)=>{

    try {
      userId=req.user.id;
      const user=await User.findById(userId).select("-password");
      res.send(user);
    } catch (error) {
      console.error(error.message);
      res.status(500).send("Internal Server Occured");
    }
  })

module.exports = router;
