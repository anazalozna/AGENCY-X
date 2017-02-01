(function(){
    "use strict";
    window.addEventListener("load", function(){
        //slider
        var slides = document.querySelectorAll(".slide"), //an arr with all slides
            prev_slide = document.querySelector("#prev_slide"), //prev_slide btn
            next_slide = document.querySelector("#next_slide"), //next_slide btn
            cnt = 0, //count every step in slider
            num_of_slides = 1; //number of visible slides

        //check if current slide is the last
        //if so, all slides become block (not active are hidden with css)
        //if not, specified number of slides become display: none
        function plus_slide(e){
            e ? e.preventDefault() : "";
            if(cnt == slides.length-num_of_slides){
                cnt=0;
                for(let i=0; i<slides.length; ++i){
                    slides[i].style.display = "block";
                }
            }else{
                slides[cnt].style.display = "none";
                cnt+=1;
            }
        }
        //the same as plus_slide but backwards
        function minus_slide(e){
            e ? e.preventDefault() : "";
            if(cnt == 0){
                cnt=slides.length-(num_of_slides-1);
                for(let i=0; i<slides.length-num_of_slides; ++i){
                    slides[i].style.display = "none";
                }
            }
            cnt=cnt-1;
            slides[cnt].style.display = "block";
        }

        //add click events to buttons on slider
        next_slide.addEventListener("click", plus_slide, false);
        prev_slide.addEventListener("click", minus_slide, false);

        //autoplay
        setInterval(plus_slide, 7000);
    },false);
})();

(function () {
    "use strict";
    let page_content = document.querySelector(".page_content"), //where to add/change content
        links = document.querySelectorAll(".nav_h a"), //links that trigger an ajax function call
        url, httpRequest;

    function changeContent(e, self) {
        e.preventDefault();
        url = self.getAttribute("href");
        httpRequest = new XMLHttpRequest();

        if(!httpRequest) {
            alert('Your browser is too old, update please.');
            return false;
        }
        httpRequest.onreadystatechange = getRes;
        httpRequest.open('GET', url);
        httpRequest.send();
    }
    
    function getRes() {
        if(httpRequest.readyState === XMLHttpRequest.DONE){
            if(httpRequest.status !== 200){ return false; }

            let response = httpRequest.responseText;
            page_content.innerHTML = response;
        }
    }

    [].forEach.call(links, function(link){
        link.addEventListener("click", function(e){changeContent(e, this);}, false);
    });

    links[0].click();
})();