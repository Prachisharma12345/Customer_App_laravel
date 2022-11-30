import './App.css';
import  Navbar from './components/Navbar';
import  Home  from './components/Home';
import NoteState from './context/notes/NoteState';
import Login from './components/Login';
import Signup from './components/Signup';
import {useState} from 'react';
import{
BrowserRouter as Router ,
  Routes,
  Route
}from "react-router-dom";
import Alert from './components/Alert';
import React from 'react';

function App() {
  const [alert, setalert] = useState(null);
  const showAlert=(message,type)=>{
      setalert({
        msg:message,
        type:type
      })
    setTimeout(() => {
      setalert(null)
    }, 2000);
  }
  return (
    <>
    <NoteState>
    <Router>
   
    <Navbar/>
    <Alert alert={alert}/>
    <Alert message="Life is amazing with coding!"/>
    <div className="container">
      <Routes>
      <Route  path='/'element={<Home showAlert={showAlert} />}/>
       
        <Route path='/login' element={<Login showAlert={showAlert} />}/>
        <Route path='/signup' element={<Signup showAlert={showAlert} />}/>
        
      </Routes>
      </div>
      </Router>
      
      </NoteState>
    </>
  );
}

export default App;
