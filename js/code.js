// $(document).ready(function(){
//     let imgCount = 0;
//     // $(".button-reload").click(function(){
//         setTimeout(() => {
//             imgCount =imgCount + 2;
//             $(".gallery").load("/gallery/parts/load-gallery.php",{
//                 // imgNewCount:imgCount
//             });
//             alert("jell");
//         }, 1000);

//     // })   
// });
let button_delete = document.querySelectorAll('.button_delete');
for(let i = 0; i < button_delete.length; i++ ){
button_delete[i].onclick = function() {
   this.parentNode.remove();
}
}
