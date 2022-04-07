
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

       switch (now) {
          case "":
            l[0].style = "opacity: 1; border-bottom: 1.5px solid rgba(255, 251, 251, 0.5);";
            break;
         case "about-us":
            l[1].style = "opacity: 1; border-bottom: 1.5px solid rgba(255, 251, 251, 0.5);";
            break;
         case "news":
            l[2].style = "opacity: 1; border-bottom: 1.5px solid rgba(255, 251, 251, 0.5);";
            break;
         case "galery":
            l[3].style = "opacity: 1; border-bottom: 1.5px solid rgba(255, 251, 251, 0.5);";
            break;
         case "parents":
            l[4].style = "opacity: 1; border-bottom: 1.5px solid rgba(255, 251, 251, 0.5);";
            break;
         case "methods":
            l[5].style = "opacity: 1; border-bottom: 1.5px solid rgba(255, 251, 251, 0.5);";
            break;
          default:
             break;
       }

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

   // let path = location.href.split('/');
   //
   // let m = menu(path[path.length-1]);
   //
   //
   // if(path[path.length-1] === '' || path[path.length-1] === 'main'){
   //    m();
   // }
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
