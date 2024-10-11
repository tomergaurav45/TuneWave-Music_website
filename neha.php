<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Neha Kakkar</title>

    <style>
        header .song_side{
         background-image: url('neha_bg.png');
           background-repeat: no-repeat;
           background-size: 100 100;
          }
    </style>
</head>
<body>
    <header>
        <div class="menu_side">
            <a href="welcome.php"><h1>TuneWave</h1></a>
            <h2>The Unit By Gaurav Tomer</h2>
            <div class="playlist">
              <h4 class="active"><span></span><i class="bi bi-music-note-beamed"></i>Playlist</h4>
              <h4 ><span></span><i class="bi bi-music-note-beamed"></i>Last Listening</h4>
              <h4 ><span></span><i class="bi bi-music-note-beamed"></i> Recommended</h4>
            </div>
            <div class="menu_song">
              
               
               
            </div>
        </div>
        <div class="song_side">
            <nav>
                <ul>
                    <li>DISCOVER <span></span></li>
                    <li>MY LIBRARY</li>
                    <li>RADIO</li> 
                </ul>
                <div class="search">
                    <i class="bi bi-search"></i>
                    <input type="text" placeholder="Search Music...">
                </div>
                <div class="user">
                    <img src="img/icon.png" alt="" >
                </div>
            </nav>
            <div class="content">
                <h1>Neha Kakkar</h1>
                <p> Neha Kakkar is an Indian singer.She is the younger sister of playback singers Tony Kakkar and Sonu Kakkar. She began performing at a very early age at religious events. In 2005, she participated in the second season of the singing reality show, Indian Idol.</p>
                <div class="buttons">
                    <button>PLAY</button>
                    <button>FOLLOW</button>
                </div>
            </div>
            <div class="popular_song">
                <div class="h4">
                    <h4>Popular Song</h4>
                    <div class="btn_s">
                        <i class="bi bi-arrow-left" id="pop_song_left"></i>
                        <i class="bi bi-arrow-right" id="pop_song_right"></i>
                    </div>
                </div>
                <div class="pop_song">
                    
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/image 2.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle" id="1"></i>
                        </div>
                        <h5>Dekkha Tenu<br> <div class="subtitle">Janni</div></h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/image 2.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle" id="2"></i>
                        </div>
                        <h5>Dekkha Tenu<br> <div class="subtitle">Janni</div></h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/image 2.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle" id="3"></i>
                        </div>
                        <h5>Dekkha Tenu<br> <div class="subtitle">Janni</div></h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/image 2.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle" id="4"></i>
                        </div>
                        <h5>Dekkha Tenu<br> <div class="subtitle">Janni</div></h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/image 2.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle" id="5"></i>
                        </div>
                        <h5>Dekkha Tenu<br> <div class="subtitle">Janni</div></h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/image 2.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle" id="6"></i>
                        </div>
                        <h5>Dekkha Tenu<br> <div class="subtitle">Janni</div></h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/image 2.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle" id="7"></i>
                        </div>
                        <h5>Dekkha Tenu<br> <div class="subtitle">Janni</div></h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/image 2.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle" id="8"></i>
                        </div>
                        <h5>Dekkha Tenu<br> <div class="subtitle">Janni</div></h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/image 2.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle" id="9"></i>
                        </div>
                        <h5>Dekkha Tenu<br> <div class="subtitle">Janni</div></h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/image 2.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle" id="10"></i>
                        </div>
                        <h5>Dekkha Tenu<br> <div class="subtitle">Janni</div></h5>
                    </li>
                  
                   
                   
                </div>
            </div>
           
            </div>
        </div>


        <div class="master_play">
            <div class="wave" id="wave">
                <div class="wave1"></div>
                <div class="wave1"></div>
                <div class="wave1"></div>
            </div>
            <img src="img/neha/1.jpg" alt="" id="poster_master_play">
            <h5 id="title">Aao Raja
                <div class="subtitle">Neha Kakkar</div>
            </h5>
            <div class="icon">
                <i class="bi shuffle bi-music-note-beamed">next</i>
                <i class="bi bi-skip-start-circle" id="back"></i>
                <i class="bi bi-play-circle" id="masterPlay"></i> 
                <i class="bi bi-skip-end-circle" id="next"></i>
                <a href="" download id="download_music"><i class="bi bi-download" ></i></a>
                
            </div>
            <span id="currentStart">0:00</span>
            <div class="bar">
                <input type="range"  id="seek" min="0" max="100">
            <div class="bar2" id="bar2"> </div>
            <div class="dot"></div>
            </div>
            <span id="currentEnd">0:30</span>
            <div class="vol">
                <i class="bi  bi-volume-up-fill" id="vol_icon"></i>
                <input type="range" min="0" max="100" id="vol">
                <div class="vol_bar"></div>
                <div class="dot" id="vol_dot"> </div>

            </div>
           
        </div>

    </header>
    <script src="neha.js"></script>
</body>
</html>