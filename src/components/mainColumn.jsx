import ReactDOM from 'react-dom/client';
import React, { useEffect } from 'react';
import { Grid  , Box , Paper} from '@mui/material';
import LeftImages from './leftImages';
import '../App.css';

const containerStyle={
    width : "90%",
    height : "fit-content",
    margin : "auto",
    padding:"5%"
}

const titleStyle={
    color:"brown",
    textDecoration : "underline",
}
const picStyle={
    width:"90%",
    margin : "5%",
    marginLeft : 0
}
const h1Style={
    color:"gray",
    fontSize : "3vw",
    FontFamily : "Arial", 
}

export default function MainColumn(){
    return <>
        <Grid container >
            <Paper style = {containerStyle} elevation={3}>
                <h1 style= {h1Style} >Projects</h1>

            <   Grid item xs={12} md={12} >
                    <a style={titleStyle}>Appointment Scheduler </a> -- Appointment scheduler front-end built with ReactJS.
                    <img style={picStyle} src={require("../assets/mainColumn/appointment-scheduler.gif")}></img>
                </Grid>
                <Grid item xs={12} md={12} >
                    <a style={titleStyle}>OnDevs </a> -- Proposed layout for http://ondevs.com. Click the image for live demo.
                    <img style={picStyle} src={require("../assets/mainColumn/ondevs.png")}></img>
                </Grid>
                <Grid item xs={12} md={12} >
                    <a style={titleStyle}>iBrowse 1st Exercise</a> -- Coding exercise for iBrowse. Click the image for live demo.
                    <img style={picStyle} src={require("../assets/mainColumn/ibrowse.png")}></img>
                </Grid>
                <Grid item xs={12} md={12} >
                    <a style={titleStyle}>iBrowse 2nd Exercise</a> -- Coding exercise for iBrowse. Click the image for live demo.
                    <img style={picStyle} src={require("../assets/mainColumn/ibrowse2.png")}></img>
                </Grid>
                <Grid item xs={12} md={12} >
                    <a style={titleStyle}>LibreLending</a> -- Website for http://librelending.com. Click the image for live demo.
                    <img style={picStyle} src={require("../assets/mainColumn/librelending.png")}></img>
                </Grid>
                <Grid item xs={12} md={12} >
                    <a style={titleStyle}>The Open Fund</a> -- Concept landing page for The Open Fund. Click the image for live demo.
                    <img style={picStyle} src={require("../assets/mainColumn/theopenfund.png")}></img>
                </Grid>
                <Grid item xs={12} md={12} >
                    <a style={titleStyle}>Soshio Login/Signup</a> -- <strong>Unfinished</strong> AngularJS login/signup process for Soshio (New York). Click the image for live demo.
                    <img style={picStyle} src={require("../assets/mainColumn/soshio-login.png")}></img>
                </Grid>
                <Grid item xs={12} md={12} >
                    <a style={titleStyle}>IronHold</a> - AngularJS web app for RQ Partners, Inc. / Reqo, Inc. (New York). Because the app is heavily dependent on the database which I do not have access to, only the source code for the front-end is available. Clicking on the link will take you to the github repository for this project.
                    <img style={picStyle} ></img>
                </Grid>
                <Grid item xs={12} md={12} >
                    <a style={titleStyle}>Travtar Demo</a> -- Unfinished layout for Travtar. Click the image for live demo.
                    <img style={picStyle} src={require("../assets/mainColumn/travtar.png")}></img>
                </Grid>
                <Grid item xs={12} md={12} >
                    <a style={titleStyle}>AirComp Mobile Web App</a> -- Unfinished web app for iOS. Click the image for live demo.
                    <img style={picStyle} src={require("../assets/mainColumn/aircomp.png")}></img>
                </Grid>
                <Grid item xs={12} md={12} >
                    <a style={titleStyle}>Tarzana Wines & Spirits</a> -- Proposed layout for Tarzana Wines & Spirits. Click the image for live demo.
                    <img style={picStyle} src={require("../assets/mainColumn/tarzanawinesandspirits.png")}></img>
                </Grid>
                <Grid item xs={12} md={12} >
                    <a style={titleStyle}>Dr. Hola! Wellness Products</a> (currently offline)
                    <img style={picStyle} src={require("../assets/mainColumn/drhola-preview.png")}></img>
                </Grid>
                <Grid item xs={12} md={12} >
                    <a style={titleStyle}>abvcinc.com</a> (currently offline) -- Main site for the Santa Monica Volleyball Coach Association.
                    <img style={picStyle} src={require("../assets/mainColumn/abvcinc.png")}></img>
                </Grid>
                <Grid item xs={12} md={12} >
                    <a style={titleStyle}>Frutogard</a> (currently offline) -- Draft version of website for Frutogard, a nutritive supplement for plants.
                    <img style={picStyle} src={require("../assets/mainColumn/airhitch.png")}></img>
                </Grid>


            </Paper>

        </Grid>

    </>
}