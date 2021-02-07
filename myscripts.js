var images = ["transfer.jpg","s.png","r.jpg","5.jpg"];
var imageHead = document.getElementById("home");
var i = 0;
setInterval(function() {
      imageHead.style.backgroundImage = "url(" + images[i] + ")";
      i = i + 1;
      if (i == images.length) {
        i =  0;
      }
      
}, 3000)


///// 1st way /////

// function changeImage() {

//   if (document.getElementById("1")) 
//   {
    // var element = document.getElementById("1");
    // element.innerHTML = "New Heading";
//     var x = document.getElementsByClassName("third-heading");
//     x.innerHTML = "New Heading";
      
//   }
//   else 
//   {
//       document.getElementById("imgClickAndChange").src = "http://www.userinterfaceicons.com/80x80/minimize.png";
//   }
// }



///// 2nd way//////
// above images are not showing in this

// var textOverImages = document.getElementsByClassName("connection");
// var previousTextOverImage;
// for (var i = 0; i < textOverImages.length; i++) {
//   textOverImages[i].onclick = function() {
//     var classes = this.classList;
//     if (classes.contains("show")) {
//       classes.remove("show");
//     } else {
//       if (previousTextOverImage != null)
//         previousTextOverImage.classList.remove("show");
//       previousTextOverImage = this;
//       classes.add("show");
//     }
//   }
// }

// function stopPropagation(event){
//   event.stopPropagation();
// }