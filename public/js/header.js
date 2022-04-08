
function header(){
   let slides = document.querySelectorAll(".headerSliderBlocks");

   function moveSlid(slides, bool){
         setTimeout(() => {
             slides.style = `transform: translateX(0%);`;
         }, 5000);
         setTimeout(() => {
            if(bool){
                slides.style = `transform: translateX(-100%);`;
            }else{
                slides.style = `transform: translateX(100%);`;
            }
         }, 10000);
   }

   return ( ()=>{
      let bool = false;
      let i = 4;
      setInterval(() => {

         moveSlid(slides[i], bool);

         if(i===0){
            i=5;
            bool=!bool;
         }
         i--;
      }, 5000);
   } );

}
let h = header();
h();

