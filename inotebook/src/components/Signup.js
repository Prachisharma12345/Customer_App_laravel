import React,{useState} from 'react'
import {useNavigate} from 'react-router-dom'

const SignUp = (props) => {
  
  const [credentials, setcredentials] = useState({name:"",email:"",password:""});
  let navigate=useNavigate();
  const handlesubmit=async(e)=>{
    e.preventDefault();
    const {name,email,password}=credentials;
    const response=await fetch ("http://localhost:5000/api/auth/createuser",{
      method:'POST',
        headers:{
          'Content-Type':'application/json'          
      },
      body:JSON.stringify({name:credentials.name,email:credentials.email,password:credentials.password})
    });
    const json=await response.json();
    console.log(json);
    if(json.success){
      localStorage.setItem('token',json.authtoken);
      navigate("/")
      props.showAlert("Account created successfully","success")

    }else{
      props.showAlert("Invalid details","danger")
    }
    }
    const onChange=(e)=>{
      setcredentials({...credentials,[e.target.name]:e.target.value})
    }
    

  return (
    <div className='container my-2'>
      <h2>Create an Account</h2>
      <form onSubmit={handlesubmit}>
        <div className="mb-3">
          <label htmlFor="name" className="form-label">Name</label>
          <input type="name" className="form-control" id="name"  name='name' onChange={onChange} aria-describedby="emailHelp"/>
        </div>
        <div className="mb-3">
          <label htmlFor="name" className="form-label">Email address</label>
          <input type="text" className="form-control" id="name" name='email'  required minLength={5}  onChange={onChange}  aria-describedby="emailHelp"/>
        </div>
        <div className="mb-3">
          <label htmlFor="password" className="form-label">Password</label>
          <input type="password" className="form-control" id="password" name='password'  required minLength={5}  onChange={onChange} />
        </div>
        
       <button type="submit"  className="btn btn-primary">Submit</button>
    </form>
    </div>
  )
}

export default SignUp