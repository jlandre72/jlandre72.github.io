
@import url('https://fonts.googleapis.com/css?family=Nunito|Roboto|Source+Code+Pro&display=swap');

html, body {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Nunito', sans-serif;
    scroll-behavior: smooth;
    background-color: white;
    color: black}

#logo {
    position: absolute;
    left: 1vw;
    top: 1vw;
    width: 8vw;
    height: 8vw;
    z-index: 50;
}

#burger, #burger_x {
    position: absolute;
    right: 1vw;
    top: 1vw;
    width: 8vw;
    height: 8vw;
    z-index: 50;
}


.mySlides {
    width: 100vw;
    margin: 0 auto;
    clip-path: polygon(0% 0%, 100% 0%, 100% 80%, 0% 60%, 0% 65%, 100% 85%, 100% 90%, 0% 70%, 0% 75%, 100% 95%, 100% 100%, 0% 100%);
}

#contenu {
    width: 96%;
    padding-left: 2%;
    padding-right: 2%;
    margin: 0 auto;
    font-family: 'Nunito', sans-serif;
}

#home, #teaching, #research, #contact {
    padding-top: 1%;
    padding-bottom: 1%;
    margin-top: 1%;
    margin-bottom: 1%;
}

p.images {
    width: 80%;
    margin: 0 auto;
    text-align: center;
    transform: rotate(-2.7deg);
}

p.images.img {
    max-width: 30vw;
}

img.survol {
    filter: gray; /* IE6-9 */
    -webkit-filter: grayscale(100%); /* Chrome 19+ & Safari 6+ */
    -webkit-transition: all 0.5s ease-in-out;
}
img.survol:hover {
    filter: none;
    -webkit-filter: grayscale(0%);
    -webkit-transform: scale(1.1);
}


#lemenu {
    position: absolute;
    font-family: 'Roboto', sans-serif;
    font-size: 48px;
    text-align: center;
    width: 100%;
    height: 100%;
    top: 0px;
    left: 0px;
    background: orange;
    opacity: 0.9;
    filter: alpha(opacity=90); /* IE8 and lower */
    zoom: 1; /* Triggers "hasLayout" in IE 7 and lower */
}
#lemenu p a {
    color: white;
    text-shadow: 2px 2px 2px #333;
    text-decoration: none;
}
#lemenu p a:hover {
    color: white;
    text-shadow: 1px 1px black, 1px -1px lightgray, -1px 1px black, -1px -1px lightgray;
}


h1, h2, h3, h4, h5, h6 {
    text-shadow: 1px 1px white, -1px -1px #333;
    color: orange;
    font-family: 'Roboto', serif;
}

h1 {
    height: 16wv;
    background: linear-gradient(117deg, darkgray,  lightgray 10%, #333 50%, lightgray 80%, lightgray);
    text-align: center;
    color: darkorange;
    /*transform: rotate(-1.7deg);*/
    overflow: hidden;
    padding: 4px;
    border-radius: 8px;
}

.titre2 {
    display: inline-block;
    /*transform: rotate(3.7deg);*/
}

p {
    width: 96%;
    padding: 1%;
    margin: 1% auto;
}

form {
    width: 60%;
    padding: 1%;
    margin: 1% auto;
}
label {
    width: 44%;
}
input, textarea {
    width: 44%;
    float: right;
}
#send {
    width: 44%;
    float: right;
}

.title h1 {
    color: orange;
    width: 100%;
    /*text-transform: capitalize;*/
}
.fond {
    width: 100%;
    min-height: 80px;
}

footer {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;

    background: linear-gradient(17deg, lightgray, white);
    text-align: center;
    padding-top: 1%;
    width: 100%;
}

.info {
    float: left;
    width: 36vw;
    margin: 1vw;
    padding: 1vw;
}

.clearfloats {
    /*width: 100%;*/
    content: "";
    clear: both;
}

#pied {
    padding: 1%;
    background-color: darkgray;
    color: white;
    width: 100%;
}

.centre {
    width: 100%;
    margin: 0 auto;
    text-align: center;
}

.important {
    text-shadow: 1px 1px orange;
    font-weight: bold;
}

.rouge {
    color: red;
    text-shadow: 1px 1px black;
}

.deuxcolonnes {
    /*border: 1px dashed #777;*/
}

.deuxcolonnes div {
    float: left;
    width: 49%;
}

.ancre {
    margin-top: 30px;
    padding-top: 30px;
}

pre {
    background-color: lightgray;
    border-radius: 8px;
    padding: 16px;
}

pre code {
    font-family: 'Source Code Pro', monospace;
}
