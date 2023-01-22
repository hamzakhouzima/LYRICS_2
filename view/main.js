let button = document.getElementsByName('update');

let artist = document.getElementById('exampleInputEmail1');
let album = document.getElementById('exampleInputPassword1');
let track = document.getElementById('exampleCheck1');
let lyrics = document.getElementById('exampleCheck2');


// button.addEventListener("click", showDataInModal);

function setAtt(){

for(let i=0 ; i<button.length; i++){
    button[i].setAttribute('data-bs-toggle','modal')
    button[i].setAttribute('data-bs-target','#exampleModal')
}
 
    artist.setAttribute('name','u_artist');
    album.setAttribute('name','u_album');
    track.setAttribute('name','u_track');
    lyrics.setAttribute('name','u_lyrics');



}
function resetAtt(){

    artist.setAttribute('name','artist');
    album.setAttribute('name','album');
    track.setAttribute('name','track');
    lyrics.setAttribute('name','lyrics');


}
function showDataInModal(){
    

    
    var modalartist = document.getElementsByClassName('.art1').textContent
    var modalalbum =  document.getElementsByClassName('.art2').textContent
    var modaltrack =  document.getElementsByClassName('.art3').textContent
    var modallyrics =  document.getElementsByClassName('.art4').textContent


    artist.innerText = modalartist
    album.innerText= modalalbum
    track.innerText= modaltrack
    lyrics.innerText = modallyrics
        

}
