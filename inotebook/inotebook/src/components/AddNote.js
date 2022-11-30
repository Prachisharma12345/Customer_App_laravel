import React,{useContext,useState} from 'react';
import NoteContext from '../context/notes/NoteContext';

const AddNote = (props) => {
    const context = useContext(NoteContext);
    const {addNote}=context;

    const [note, setNotes] = useState({title: "",description: "",tag: ""})
    const handleOnClick= (e) =>{
      e.preventDefault();
      addNote(note.title,note.description,note.tag);
      setNotes({title: "",description: "",tag: ""})
      props.showAlert("Added successfully","success");

    }
    const onChange=(e)=>{
      setNotes({...note,[e.target.name]:e.target.value})
    }
  return (
    <div className="container my-3">
          <h2>Add  Note</h2>
          <form className='my-3'>
            <div className="mb-3">
              <label htmlFor="title" className="form-label">Title</label>
              <input type="text" className="form-control" id="title" name='title' value={note.title} aria-describedby="emailHelp" required minLength={5} onChange={onChange}/>
              
            </div>
            <div className="mb-3">
              <label htmlFor="description" className="form-label">Description</label>
              <input type="text" className="form-control" id="description" name="description" value={note.description} required minLength={5} onChange={onChange}/>
            </div>
            <div className="mb-3">
              <label htmlFor="tag" className="form-label">Tag</label>
              <input type="text" className="form-control" id="tag" name="tag"  value={note.tag} onChange={onChange}/>
            </div>
           
          <button disabled={note.title.length<5 || note.description.length<5} type="submit" className="btn btn-primary" onClick={handleOnClick}>Add Note</button>
        </form>
        </div>
  )
}

export default AddNote