const tl = gsap.timeline({ defaults: { ease: "power1.out" } });

tl.to(".text", { y: "0%", duration: 0.85, stagger: 0.2 });
tl.to(".slider", { y: "-100%", duration: 1.3, delay: 0.5 });
tl.to(".intro", { y: "-100%", duration: 1 }, "-=1");
tl.fromTo("nav", { opacity: 0 }, { opacity: 1, duration: 1 });
tl.fromTo(".landing-header", { opacity: 0 }, { opacity: 1, duration: 1 }, "-=1");
tl.fromTo(".landing-para", { opacity: 0 }, { opacity: 1, duration: 1 }, "-=1");

$(document).ready(function() {
    $('body').addClass('stop-scrolling');
    setTimeout(()=>{
        $('body').removeClass('stop-scrolling');
        $('div.intro').hide();
    },3100);

    $("form").submit(function(event){
        event.preventDefault();
        var formData = new FormData(this);
        $.ajax({
          url: 'https://ngbrandon.com/includes/contact.inc.php',
          data: formData,
          processData: false,
          contentType: false,
          cache: false,
          type: 'POST'
        }).done(function(data){
            $('.formResults').html(data);
        });
      });
});

function navSlide() {
    const burger = document.querySelector(".burger");
    const nav = document.querySelector(".nav-links");
    const navLinks = document.querySelectorAll(".nav-links li");
    
    burger.addEventListener("click", () => {
        //Toggle Nav
        nav.classList.toggle("nav-active");
        
        //Animate Links
        navLinks.forEach((link, index) => {
            if (link.style.animation) {
                link.style.animation = ""
            } else {
                link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.5}s`;
            }
        });
        //Burger Animation
        burger.classList.toggle("toggle");
    });
    
}

navSlide();