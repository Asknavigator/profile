let collapse_btn=document.querySelectorAll(".collapse-btn")

let faq_sec=document.querySelectorAll(".faq-sec p")
let faq_sec_btn=document.querySelectorAll(".faq-sec>.d-flex")


faq_sec_btn.forEach((elem,i)=>{
    elem.addEventListener("click",()=>{
       
            if(!(elem.classList.contains("activebtn")))
            {
                elem.classList.add("activebtn")
                collapse_btn[i].classList.add("active")

                faq_sec[i].classList.add("show")


                


                
                collapse_btn[i].children[0].classList.remove("fa-plus")
                collapse_btn[i].children[0].classList.add("fa-minus")
            }
            else{
                elem.classList.remove("activebtn")
                faq_sec[i].classList.remove("show")

                collapse_btn[i].classList.remove("active")


                




                collapse_btn[i].children[0].classList.remove("fa-minus")
                collapse_btn[i].children[0].classList.add("fa-plus")



            }

        
    })
})

console.log(faq_sec)
let vendor_nav=document.querySelectorAll(".vendor-nav a")

let tab_main_content=document.querySelectorAll(".tab-main-content .tab-pane")


vendor_nav.forEach((elem,i)=>{
    elem.addEventListener("click",()=>{

        vendor_nav.forEach(elem2=>{
            elem2.classList.remove("active")

        })
        elem.classList.add("active")



        if(elem.classList.contains("active"))
            {
        tab_main_content.forEach((tabpane,j)=>{

            
                if(i==j)
                {
                    tab_main_content[j].classList.add("active")

                }
                else{
                    tab_main_content[j].classList.remove("active")

                }


        })
    }


        

    })
})

let serv_sec=document.querySelectorAll(".serv-sec>.col-md-35>.d-flex")

let collapse_div=document.querySelectorAll(".serv-sec p")

serv_sec.forEach((elem,i)=>{
    elem.addEventListener("click",()=>{

        if(collapse_div[i].classList.contains("show"))
        {
            collapse_div[i].classList.remove("show")

            elem.classList.remove("active")

         

        }
        else{
            collapse_div[i].classList.add("show")
            elem.classList.add("active")


        }


    })
})

let rev_card=document.querySelectorAll(".review-card-sec>.rev-card")

let show_more=document.querySelector(".show-more")

show_more.addEventListener("click",()=>{


    if(show_more.classList.contains("showless"))
    {
        show_more.classList.remove("showless")
        rev_card.forEach((elem,i)=>{
            if (i!=1 && i!=0)
            {
elem.classList.add("d-none")

            }

        })

        show_more.children[0].innerHTML=`Show more`
        show_more.children[1].style.setProperty("transform","rotate(0deg)")

    }
    else{
        show_more.classList.add("showless")
        rev_card.forEach(elem=>{
elem.classList.remove("d-none")
        })

        show_more.children[0].innerHTML=`Show less`
        show_more.children[1].style.setProperty("transform","rotate(180deg)")
    }
    
   
})

let menu_sm=document.querySelector(".menu-sm")
let rep_user=document.querySelector(".rep-user")

let info_block=document.querySelector(".info-block")
let info_content=document.querySelector(".info-content")



document.body.addEventListener("click",(e)=>{

    if(e.target==menu_sm||e.target==menu_sm.children[0])
    {
        if(rep_user.classList.contains("d-none"))
        {
         rep_user.classList.remove("d-none")
        }
        else{
         rep_user.classList.add("d-none")
 
        }
    }

    else{
        if(!(rep_user.classList.contains("d-none")))
        {
         rep_user.classList.add("d-none")
        }
       
    }
      

  
})

if(window.innerWidth>767)
{
    info_block.addEventListener("mouseover",(e)=>{
        info_content.classList.remove("d-none")
    
        console.log("Hello")
       
        
    
    })
    info_block.addEventListener("mouseout",()=>{
        info_content.classList.add("d-none")
    
    })
    
}




document.body.addEventListener("click",(e)=>{

    if(e.target==info_block||e.target==info_block.children[0])
    {
        if(info_content.classList.contains("d-none"))
        {
            info_content.classList.remove("d-none")
        }
        else{
            info_content.classList.add("d-none")
 
        }
    }

    else{
        if(!(info_content.classList.contains("d-none")))
        {
            info_content.classList.add("d-none")
        }
       
    }
      

  
})

