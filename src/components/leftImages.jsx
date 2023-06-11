import { Grid  , Box} from '@mui/material';
import { Link } from 'react-router-dom';

import '../App.css';

const imageStyle = {
    objectFit:'cover',
    overflow:'hidden'
}

const containerStyle = {
    position : "relative",
    height : "100%"
}

const textOverlayStyle = {
    position : "absolute",
    top : -10 ,
    left : 7 ,
    fontSize : 15,
    color:"black",
    fontWeight : "bold",
    fontFamily : "monospace",
}

export default function LeftImages() {
    return <div className='left-navigation'>
        <Grid container >
            <Grid item xs={6}>
            <img style={{
                    aspectRatio:1,
                    ...imageStyle
                }}
                src={require('../assets/leftNav/books.jpg')} ></img>
                <img style={{
                    aspectRatio:1,
                    ...imageStyle
                }}
                src={require('../assets/leftNav/pixels-small.jpg')} ></img>
            </Grid>
            <Grid item xs={6}>
                <img style={{aspectRatio:0.75,...imageStyle}}
                src={require('../assets/leftNav/boxes-small.jpg')} ></img>
                <img style={{aspectRatio:1.5,...imageStyle}}
                src={require('../assets/leftNav/cds-small.jpg')} ></img>
            </Grid>
            
            <Grid item xs={4}>
                <Link to="/film-making">
                    <div style={containerStyle}>
                        <img style={{height:"88%",marginTop:"6%",...imageStyle}}  src={require('../assets/leftNav/photo.jpg')} ></img>
                        <p className="stroke" style={textOverlayStyle} > Film making </p>
                    </div>
                </Link>
            </Grid>
            <Grid item xs={8}>
                <Link to="/">
                    <div style={containerStyle}>
                        <img style={{aspectRatio:1.8,...imageStyle}}  src={require('../assets/leftNav/home-icon.jpg')} ></img>
                        <p className="stroke" style={textOverlayStyle} > Home </p>
                    </div>
                </Link>
            </Grid>
            <Grid item xs={6}>
                <img style={{aspectRatio:1,...imageStyle}} src={require('../assets/leftNav/old_computer.jpg')} ></img>
            </Grid>
            <Grid item xs={6}>
                <Link to="/contact">
                    <div style={containerStyle}>
                    <img style={{aspectRatio:1,...imageStyle}} src={require('../assets/leftNav/envelopes-small.jpg')} ></img>
                    <p className="stroke" style={textOverlayStyle} > Contacts </p>
                    </div>
                </Link>
            </Grid>

        </Grid>


    </div>
}