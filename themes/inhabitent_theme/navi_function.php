<?php 
$picture = "https://i.vimeocdn.com/portrait/13201883_300x300";
// echo "<img src = '$picture' />"


// to get the string of the image to show
function image_string ($picture) {
    return "yooo check ... $picture";
}
echo image_string($picture);

//to get the image to show
function show_image ($picture) {
    return "<img src = '$picture' />";
}
echo show_image($picture);


?>

