import { Grid  , Box} from '@mui/material';
import { Link } from 'react-router-dom';

import '../App.css';



export default function LeftImages() {
    return <div className='left-navigation'>
        <Grid container >
            <Grid item xs={6}>
            <img style={{
                    aspectRatio:1,
                    objectFit:'cover',
                    overflow:'hidden'
                }}
                src={require('../assets/leftNav/books.jpg')} ></img>
                <img style={{
                    aspectRatio:1,
                    objectFit:'cover',
                    overflow:'hidden'
                }}
                src={require('../assets/leftNav/pixels-small.jpg')} ></img>
            </Grid>
            <Grid item xs={6}>
                <img style={{aspectRatio:0.75}}
                src={require('../assets/leftNav/boxes-small.jpg')} ></img>
                <img style={{aspectRatio:1.5}}
                src={require('../assets/leftNav/cds-small.jpg')} ></img>
            </Grid>
            
            <Grid item xs={3}>
                <Link to="/film-making"><img style={{height:"88%",marginTop:"6%"}}  src={require('../assets/leftNav/photo.jpg')} ></img> </Link>
            </Grid>
            <Grid item xs={9}>
                <Link to="/"><img style={{aspectRatio:1.8}}  src={require('../assets/leftNav/home-icon.jpg')} ></img></Link> 
            </Grid>
            <Grid item xs={6}>
                <img style={{aspectRatio:1}} src={require('../assets/leftNav/old_computer.jpg')} ></img>
            </Grid>
            <Grid item xs={6}>
                <Link to="/contact"> <img style={{aspectRatio:1}} src={require('../assets/leftNav/envelopes-small.jpg')} ></img></Link>
            </Grid>

        </Grid>


    </div>
}