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
function showDataInModal(e){
    

    
    var modalartist =e.target.parentElement.parentElement.parentElement.querySelector('.art1').textContent
    var modalalbum =  e.target.parentElement.parentElement.parentElement.querySelector('.art2').textContent
    var modaltrack =  e.target.parentElement.parentElement.parentElement.querySelector('.art3').textContent
    var modallyrics =  e.target.parentElement.parentElement.parentElement.querySelector('.art4').textContent


    artist.value = modalartist
    album.value= modalalbum
    track.value= modaltrack
    lyrics.value = modallyrics
        

}
