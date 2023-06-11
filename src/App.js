import logo from './logo.svg';
import './App.css';
import HomepPage from './components/homePage';
import ContactPage from './components/contactsPage';
import FilmMaking from "./components/filmMaking";
import React from 'react';
import { Routes , Route, Link } from 'react-router-dom';





function App() {
  return (
    <div style={{marginTop:"5vh"}}> 
      <Routes >
        <Route exact path="/" element={<HomepPage/>} />
        <Route path="/contact" element={<ContactPage/>} />
        <Route path = "/film-making" element = {<FilmMaking/>} ></Route>
      </Routes >
    </div>
  );
};

export default App;