var albumNameInput = document.getElementById('albumName');
var artistNameInput = document.getElementById('artistName');
var dateInput = document.getElementById('date');
var genreInput = document.getElementById('genre');
var spotifyLinkInput = document.getElementById('spotifyLink');
var uploadedByInput = document.getElementById('uploadedBy');

albumNameInput.onkeyup = function(){
  document.getElementById("albumNameReflect").innerHTML = albumNameInput.value;
}

artistNameInput.onkeyup = function(){
  document.getElementById("artistReflect").innerHTML = artistNameInput.value;
}

dateInput.onchange = function(){
  document.getElementById("dateReflect").innerHTML = dateInput.value;
}

genreInput.onchange = function(){
  document.getElementById("genreReflect").innerHTML = genreInput.value;
}

spotifyLinkInput.onkeyup = function(){
  document.getElementById("spotifyLinkReflect").innerHTML = spotifyLinkInput.value;
}

uploadedByInput.onkeyup = function(){
  document.getElementById("uploadedByReflect").innerHTML = uploadedByInput.value;
}
