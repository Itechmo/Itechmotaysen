<?php
$page_title = "Video Tutorials";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <p><a href="index.php">Back</a> </p>
<style>

    *{
    margin:0; padding:0;
    box-sizing: border-box;
    text-transform: capitalize;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    font-weight: normal;
}

body{
    background-color: white;
}

.heading{
    color: #444;
    font-size: 40px;
    text-align: center;
    padding:10px;
}

.container{
    display: grid;
    grid-template-columns: 2fr 1fr;
    gap:15px;
    align-items: flex-start;
    padding:5px 5%;
}

.container .main-video{
    background: #fff;
    border-radius: 5px;
    padding:10px;
}

.container .main-video video{
    width:100%;
    border-radius: 5px;
}
.container .main-video .title{
    color: #333;
    font-size: 23px;
    padding-top: 15px;
    padding-bottom: 15px;
}

.container .video-list{
    background: whte;
    border-radius: 5px;
    height: 520px;
    overflow-y: scroll;
}

.container .video-list::-webkit-scrollbar{
    width: 7px;
}

.container .video-list::-webkit-scrollbar-track{
    background: white;
    border-radius: 50px;
}

.container .video-list::-webkit-scrollbar-thumb{
    background: #666;
    border-radius: 50px;

}
.container .video-list .vid video{
    width:100px;
    border-radius: 5px;
}

.container .video-list .vid{
    display: flex;
    align-items: center;
    gap:15px;
    background: #f7f7f7;
    border-radius: 5px;
    margin: 10px;
    padding: 10px;
    border:1px solid rgba(0,0,0,.1);
}

.container .video-list .vid.hover{
    background: #eee;
}

.container .video-list .vid.active{
    background: #2980b9;
}

.container .video-list .vid.active .title{
    color: #fff;
}

.container .video-list .vid .title{
    color: #333;
    font-size: 17px;
}

@media (max-width:991px){

    .container{
    grid-template-columns: 1.5fr 1fr;
    padding:5px 5%;
    }

}

    @media (max-width:768px){

    .container{
        grid-template-columns: 1fr;
    }

 }
    </style>


<body>
    
    <h3 class="heading"> Video Tutorials </h3>

<div class="container">

<div class="main-video">
    <div class="video">
        <video src="SIMPLE HTML.mp4" controls muted autoplay></video>
        <h3 class="title">01. Simple html</h3>
        </div>
    </div>

    <div class="video-list">
        <div class="vid active">
            <video src="SIMPLE HTML.mp4" muted></video>
            <h3 class="title">01. Simple html</h3>
    </div>
    <div class="vid">
            <video src="SIMPLE HTML.mp4" muted></video>
            <h3 class="title">02. Video title goes here</h3>
    </div>
    <div class="vid">
            <video src="SIMPLE HTML.mp4" muted></video>
            <h3 class="title">03. Video title goes here</h3>
    </div>
    <div class="vid">
            <video src="SIMPLE HTML.mp4" muted></video>
            <h3 class="title">04. Video title goes here</h3>
    </div>
    <div class="vid">
            <video src="SIMPLE HTML.mp4" muted></video>
            <h3 class="title">05. Video title goes here</h3>
    </div>
    <div class="vid">
            <video src="SIMPLE HTML.mp4" muted></video>
            <h3 class="title">06. Video title goes here</h3>
    </div>
    <div class="vid">
            <video src="SIMPLE HTML.mp4" muted></video>
            <h3 class="title">07. Video title goes here</h3>
    </div>
    <div class="vid">
            <video src="SIMPLE HTML.mp4" muted></video>
            <h3 class="title">08. Video title goes here</h3>
    </div>
    <div class="vid">
            <video src="SIMPLE HTML.mp4" muted></video>
            <h3 class="title">09. Video title goes here</h3>
        </div>
    </div>
</div>

<script>

    let listVideo = document.querySelectorAll('.video-list .vid');
    let mainVideo = document.querySelector('.main-video video');
    let title = document.querySelector('.main-video .title');

    listVideo.forEach(video =>{
        video.onclick = () =>{  
            listVideo.forEach(vid => vid.classList.remove('active'));
            video.classList.add('active');
            if(video.classList.contains('active')){
                let src = video.children[0].getAttribute('src');
                mainVideo.src = src;
                let text = video.children[1].innerHTML;
                title.innerHTML = text;
            };
        };
    });
    </script>
</div>  
</body>
</html>