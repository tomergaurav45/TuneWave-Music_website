const music = new Audio('audio/1.mp3');


const songs = [
    {
        id: 1,
        songName: `O Sajni Re <br> 
        <div class="subtitle">Arijit Singh</div>`,
        poster: "img/1.jpg"

    },
    {
        id: 2,
        songName: `Dekha Tenu <br>
         <div class="subtitle">Arijit Singh</div>`,
        poster: "img/2.jpg"

    },
    {
        id: 3,
        songName: `I love My India <br>
         <div class="subtitle">Arijit Singh</div>`,
        poster: "img/3.jpg"

    },
    {
        id: 4,
        songName: `Aaj Ki Raat <br>
         <div class="subtitle">Arijit Singh</div>`,
        poster: "img/4.jpg"

    },
    {
        id: 5,
        songName: `Namo Namo <br>
         <div class="subtitle">Arijit Singh</div>`,
        poster: "img/5.jpg"

    },
    {
        id: 6,
        songName: `Shiddat Title Track <br>
         <div class="subtitle">Arijit Singh</div>`,
        poster: "img/6.jpg"

    },
    {
        id: 7,
        songName: `52 Gaj ka Daman <br>
         <div class="subtitle">Arijit Singh</div>`,
        poster: "img/7.jpg"

    },
    {
        id: 8,
        songName: `Badnam Gabru <br>
         <div class="subtitle">Arijit Singh</div>`,
        poster: "img/8.jpg"

    },
    {
        id: 9,
        songName: `Born To Shine <br>
         <div class="subtitle">Arijit Singh</div>`,
        poster: "img/9.jpg"

    },
    {
        id: 10,
        songName: `Rubicon Drill <br>
         <div class="subtitle">Arijit Singh</div>`,
        poster: "img/10.jpg"

    },
    {
        id: 11,
        songName: `Is Qadar <br>
         <div class="subtitle">Arijit Singh</div>`,
        poster: "img/11.jpg"

    },
    {
        id: 12,
        songName: `Western UP <br>
         <div class="subtitle">Arijit Singh</div>`,
        poster: "img/12.jpg"

    },
    {
        id: 13,
        songName: `Shadow <br>
         <div class="subtitle">Arijit Singh</div>`,
        poster: "img/13.jpg"

    },
    {
        id: 14,
        songName: `Defaulter <br>
         <div class="subtitle">Arijit Singh</div>`,
        poster: "img/14.jpg"

    },
    {
        id: 15,
        songName: `Rose Garden <br>
         <div class="subtitle">Arijit Singh</div>`,
        poster: "img/15.jpg"

    },
    {
        id: 16,
        songName: `Proper Patola <br>
         <div class="subtitle">Arijit Singh</div>`,
        poster: "img/16.jpg"

    },
    {
        id: 17,
        songName: `Dil Chori <br>
         <div class="subtitle">Arijit Singh</div>`,
        poster: "img/17.jpg"

    },
    {
        id: 18,
        songName: `Dilbar <br>
         <div class="subtitle">Arijit Singh</div>`,
        poster: "img/18.jpg"

    },
    {
        id: 19,
        songName: `Mummy Nu Pasand <br>
         <div class="subtitle">Arijit Singh</div>`,
        poster: "img/19.jpg"

    },
    {
        id: 20,
        songName: `Daaku <br>
         <div class="subtitle">Arijit Singh</div>`,
        poster: "img/20.jpg"

    }
]

Array.from(document.getElementsByClassName('songItem')).forEach((e, i)=>{
    e.getElementsByTagName('img')[0].src = songs[i].poster;
    e.getElementsByTagName('h5')[0].innerHTML = songs[i].songName;
})

let masterPlay = document.getElementById('masterPlay');

masterPlay.addEventListener('click', ()=>{
     if (music.paused || music.currentTime <= 0) {
        music.play();
     } else {
        music.pause();
     }
})


let pop_song_left = document.getElementById('pop_song_left');
let pop_song_right = document.getElementById('pop_song_right');
let pop_song = document.getElementsByClassName('pop_song')[0];


pop_song_right.addEventListener('click',()=>{
    pop_song.scrollLeft += 330;
});
pop_song_left.addEventListener('click',()=>{
    pop_song.scrollLeft -= 330;
});


let pop_art_left = document.getElementById('pop_art_left');
let pop_art_right = document.getElementById('pop_art_right');
let Artist_bx = document.getElementsByClassName('Artist_bx')[0];


pop_art_right.addEventListener('click',()=>{
    Artist_bx.scrollLeft += 330;
});
pop_art_left.addEventListener('click',()=>{
    Artist_bx.scrollLeft -= 330;
});
