
 let mask = document.querySelector(".mask");

 window.addEventListener("load", ()=>{
    mask.classList.add("hide");
    setTimeout(() => {
       mask.remove();
    }, 500);
 })

   function menu(now){
      let links = document.querySelectorAll(".menuLinks");
      let menu = document.querySelector(".menu");
      let l=[];

       links.forEach(element => {
          l.push(element);
       });
       l.shift();
       l.pop();


      return (
         ()=>{
            document.addEventListener("scroll", ()=>{
               let topHeight = document.documentElement.scrollTop;
               if(topHeight > 100){
                  menu.style = "position:fixed; z-index:6; width: 100vw;";

               }
            })
         }
      )
   }

   let path = location.href.split('/');

   let m = menu(path[path.length-1]);


   if(path[path.length-1] === '' || path[path.length-1] === 'main'){
      m();
   }
   //
   // let pagesLocation=()=>{
   //    let menuItems = document.querySelectorAll(".menuLinks");
   //    let menuList = ["/", "about-us", "news", "gallery", "parents", "contacts","profile","login"];
   //    let a=[];
   //    menuItems.forEach(e=>{
   //       a.push(e);
   //    });
   //    a.shift();
   //    a.pop();
   //
   //
   //    for(let i=0; i<menuItems.length; i++){
   //        menuItems[i].addEventListener('click', ()=>{
   //          location.href = `${menuList[i-1]}`
   //       })
   //    }
   //
   // }
   //
   // pagesLocation();
   //
   //
   //
   let wrapperMenu = document.querySelector('.wrapper-menu');
   let low_menu = document.querySelector(".intoMenu");

   wrapperMenu.addEventListener('click', function(){
      let b = wrapperMenu.classList.toggle('open');
      if(b){
         low_menu.style = "transform: scaleY(1) ;opacity: 1;";
      }else{
         low_menu.style = "transform: scaleY(0); opacity: 0;";
      }
   })
