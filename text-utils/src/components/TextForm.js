
import React,{useState} from 'react'

export default function TextForm(props) {
  
  const handleUpClick=()=>{
    
        let newText=text.toUpperCase();
        setText(newText);
        props.showAlert("Converted to Uppercase!","success");
    }
    
    const handleLowerClick=()=>{
      let newText=text.toLowerCase();
      setText(newText);
      props.showAlert("Converted to Lowercase!","success");
    }
    const handleclearClick=()=>{
      let newText='';
      setText(newText);
      props.showAlert("Text Cleared","success");
    }
const handleCapClick=()=>{
  let newText=text.charAt(0).toUpperCase() + text.slice(1).toLowerCase();
  setText(newText);
  props.showAlert("Text Capitalized","success");
}

const handleExtraSpaceClick=()=>{
  let newText=text.split(/[ ] +/);
  setText(newText.join(" "));
  props.showAlert("Remove extra spaces!","success");
}
const handleCopyClick=()=>{
  let newText=document.getElementById("myBox");
  newText.select();
  navigator.clipboard.writeText(newText.value);
  props.showAlert("Copy to Clipboard!","success");
}

// const handledownloadClick=()=>{
    //   const element=document.createElement("a");
    //   const file=new Blob([document.getElementById("textarea").value],{
    //     type:"text/plain;charset=utf-8",
    //   });
    //   element.href=URL.createObjectURL(file);
    //   element.download="NewFile.txt";
    //   document.body.appendChild(element);
    //   element.click();
    // }
    const handleOnChange=(event)=>{
        setText(event.target.value);
    }
   
    const [text,setText]=useState('');
  return (
<>

    <div className="container" style={{color:props.mode==='light'?'black':'white'}} >
        
            <h1 >{props.heading}</h1>
            <div className="mb-3">
          
               <textarea className="form-control" onChange={handleOnChange} style={{backgroundColor:props.mode==='light'?'white':'grey',color:props.mode==='light'?'black':'white'}}   id="myBox" rows="9"></textarea>
            </div>
          <button className="btn btn-light mx-1 p-1"  onClick={handleUpClick}> Uppercase</button>        
           <button className="btn btn-light mx-1 p-1"  onClick={handleLowerClick}> Lowercase</button>
            <button className="btn btn-light mx-1 p-1" onClick={handleclearClick}>Clear Text</button>
            <button className="btn btn-light mx-1 p-1 " onClick={handleCapClick}>Capitalized text</button>
            <button className="btn btn-light mx-1 p-1" onClick={handleExtraSpaceClick}>Remove Spaces</button>
            <button className="btn btn-light mx-1 p-1" onClick={handleCopyClick}>Copy to Clipboard</button>
    </div>

    <div className="container my-3" style={{color:props.mode==='light'?'black':'white'}} >
        <h2>Your text summary</h2>
        <p>{text.split(" ").length} words,{text.length} characters</p>
        <p>{0.008 * text.split(" ").length}Minutes Read</p>
        <h2>Preview</h2>
        <p>{text.length>0?text:"Enter text to preview"}</p>
    </div>

    </>
  )
}
