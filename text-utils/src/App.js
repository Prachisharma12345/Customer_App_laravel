//import logo from './logo.svg';
import './App.css';
// import About from './components/About';
import Navbar from './components/Navbar';
import TextForm from './components/TextForm';
import Alert from './components/Alert';
import React,{useState} from 'react';
// import {
//   BrowserRouter as Router,
//   Switch,
//   Route
// } from "react-router-dom";

function App() {
  const [mode, setMode] = useState('light');

  // const removeBodyClases=()=>{
    // document.body.classList.remove('bg-light')
    // document.body.classList.remove('bg-dark')
    // document.body.classList.remove('bg-primary')
    // document.body.classList.remove('bg-danger')
    // document.body.classList.remove('bg-success')
    // document.body.classList.remove('bg-warning')
  // }

  const toggleMode=()=>{
  //   removeBodyClases();
  //   document.body.classList.add('bg-'+cls)
  
    if(mode==='light'){
      setMode('dark');
      document.body.style.backgroundColor='#042743';
       showAlert("Dark mode has been enabled","success");
           // document.title="Text Utils-Dark Mode";
      // setInterval(() => {
      //   document.title="Install text utils now";
      // }, 1000); setInterval(() => {
      //   document.title="Text utils is amazing";
      // }, 1500);
    }else{
      setMode('light');
      document.body.style.backgroundColor='white';
      showAlert("Light mode has been enabled","success");
      //document.title="Text Utils-Light Mode";
    }
  }
  const [alert, setAlert] = useState(null);
  const showAlert=(message,type)=>{
    setAlert({
      msg:message,
      type:type
    })
    setTimeout(()=>{
      setAlert(null);
    },1500);
  }
  return (
  <>
  {/* <Router> */}
  <Navbar title="TextUtils" mode={mode} toggleMode={toggleMode}   />
  <Alert alert={alert}/>
  <div className="container my-3">
  {/* <Switch>
          <Route exact path="/about">
           // <About />
          </Route>
          
          <Route exact path="/">*/
          <TextForm heading="Enter the text to analyze"    showAlert={showAlert}  mode={mode}  />
          // </Route>
    // </Switch> 
  }
    </div>
    {/* </Router> */}
  
   </>
  );
}
  export default App;


