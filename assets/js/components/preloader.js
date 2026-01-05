function sitePreloader1(selector,duration){
    let sitePreloader1 = document.querySelector(selector);
    if(sitePreloader1) {
        document.addEventListener('DOMContentLoaded',()=>{
            document.body.style.overflow='hidden';
        })
    }

    setTimeout(function(){
        
        sitePreloader1.remove();  
        // document.body.style.border='3px solid red';
        if(sitePreloader1) {
            document.body.removeAttribute('style');
        }
        },duration); 
    }

  sitePreloader1('.site-preloader1',1000);
  export default sitePreloader1;