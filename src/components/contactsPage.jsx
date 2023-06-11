import ReactDOM from 'react-dom/client';
import React, { useEffect } from 'react';
import { Grid  , Box, Paper} from '@mui/material';
import LeftImages from './leftImages';
import '../App.css';
import MainColumn from './mainColumn';

const containerStyle={
    width : "90%",
    height : "fit-content",
    margin : "auto",
    padding:"5%",
}
const h1Style={
    color:"gray",
    fontSize : "3vw",
    FontFamily : "Arial", 
}

export default function ContactPage() {
    useEffect(() => {
        setTimeout(() => {
          document.querySelector('#background').classList.add('visible');
          document.querySelector('#pixel-image').classList.add('visible');
        }, 100);
      }, []);
    
  return (
    <div id="home">
        <div id = "background">
        </div>
        <Box style={{
                position: "fixed",
                width: "20%",
                height:"100%",
                overflow: "hidden",
                top:0,
                right:0
            }}
        sx= {{display : { xs: 'none', md: 'block' }}}>
            <img style={{
                width: "100%",
                height:"100%",
            }} src={require("../assets/cityscape.gif")}></img>
        </Box>

        <Grid container justifyContent="flex-end">
            <Grid item xs={12} md={9} >
                <img style={{
                    width : "50%",
                    marginLeft :"50%"

                }}
                src={require("../assets/title.png")}></img>

                <div className='parent-div ' style={{
                    width : "50%",
                    height : "5vh",
                    marginLeft :"50%",
                    objectFit: "cover",
                    overflow: "hidden",
                }}><img id="pixel-image" src={require("../assets/multipixels.jpg")}></img></div>
                
                <Grid container justifyContent="center">
                    <Grid item xs={12} md={3}>
                        <LeftImages/>
                    </Grid>
                    <Grid item xs={12} md={9}>
                        <Paper style = {containerStyle} elevation={3}>
                            <h1 style= {h1Style} >Contact</h1>
                            <h2>Here are a list of ways to contact me:</h2>

                            By email: <a href="mailto:conejoplata@gmail.com">conejoplata@gmail.com</a><br/>

                            Skype: xocolatl10 <br/>

                            Or,  < a href="http://www.facebook.com/zezipaktli"> http://www.facebook.com/zezipaktli.</a>
                        </Paper>
                    </Grid>
                </Grid>
            </Grid>
            <Grid item xs={0} md={3}>
            </Grid>
        </Grid>

    </div>
  );
}