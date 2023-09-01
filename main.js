window.addEventListener('DOMContentLoaded', function () {
    const checkbox = document.getElementById('form-2');
    const isMobile = window.matchMedia('(max-width: 431px)').matches;

    if (isMobile) {
        checkbox.removeAttribute('required');
    }


    const accordionItems = document.querySelectorAll('.methods__item__mobile');

accordionItems.forEach(item => {
    const subtitle = item.querySelector('.methods__subtitle__mobile');
    const icon = subtitle.querySelector('.accordion-icon');
    const content = item.querySelector('.methods__content__mobile');

    subtitle.addEventListener('click', (event) => {
        item.classList.toggle('active');
        icon.classList.toggle('active');
        
        const description = subtitle.nextElementSibling;
        if (description && description.classList.contains('methods__content__mobile')) {
            description.classList.toggle('display-none');
        }
    });
});


// const burgerBtn = document.querySelector('.burger-btn');
// const menuTablet = document.querySelector('.navigation__tablet');
// const closeTabletBtn = document.querySelector('.close__tablet');

// burgerBtn.addEventListener('click', () => {
//     menuTablet.classList.add('active');
// });

// closeTabletBtn.addEventListener('click', () => {
//     menuTablet.classList.remove('active');
// });



const navigationLinksTablet = document.querySelectorAll(".navigation__item__tablet a");
const navigationLinks = document.querySelectorAll(".navigation__item__ a");

    navigationLinks.forEach(link => {
        link.addEventListener("click", event => {
            event.preventDefault();

            const targetId = link.getAttribute("href");
            const targetElement = document.querySelector(targetId);

            if (targetElement) {
                targetElement.scrollIntoView({
                    behavior: "smooth"
                });
            }
        });
    });

    navigationLinksTablet.forEach(link => {
        link.addEventListener("click", event => {
            event.preventDefault();

            const targetId = link.getAttribute("href");
            const targetElement = document.querySelector(targetId);

            if (targetElement) {
                targetElement.scrollIntoView({
                    behavior: "smooth"
                });
            }
        });
    });




    new Splide( '#slider__company' , {
        type: 'loop',
        perPage: 3,
        perMove: 1,
        pagination: true,
        arrows: true,
		focus : 'center',
  		drag: 'free',
		autoStart: boolean = true,
		rewind: false,
  		autoScroll: {
    	speed: 2,
        },
		  breakpoints: {
            1024: {
                perPage: 2,
        }
		  },
		  breakpoints: {
            768: {
                perPage: 3,
        }
		  },
    }).mount( window.splide.Extensions  );
    

    






});

function handleFileInputChange(inputElement, outputElement) {
    inputElement.addEventListener('change', (event) => {
      const selectedFiles = event.target.files;
      
      if (selectedFiles.length > 0) {
        outputElement.textContent = `Выбран файл: ${selectedFiles[0].name}`;
      } else {
        outputElement.textContent = 'Файл не выбран';
      }
    });
  }
  
  const fileInputOne = document.getElementById('fileInput__one');
  const selectedFileNameOne = document.getElementById('selectedFileNameOne');
  handleFileInputChange(fileInputOne, selectedFileNameOne);
  
  const fileInputTwo = document.getElementById('fileInput__two');
  const selectedFileNameTwo = document.getElementById('selectedFileNameTwo');
  handleFileInputChange(fileInputTwo, selectedFileNameTwo);
  
  const fileInputThree = document.getElementById('fileInput__three');
  const selectedFileNameThree = document.getElementById('selectedFileNameThree');
  handleFileInputChange(fileInputThree, selectedFileNameThree);
  