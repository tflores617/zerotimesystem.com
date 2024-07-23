function openModal(source){

    //container

    let container = document.createElement('div');
    container.id = "modalContainer";
    container.classList.add('modal-container');


    //background
    let background = document.createElement('div');
    background.id = 'modalBackground';
    background.classList.add('modal-background');

    

    //phase 1
    document.querySelector('body').appendChild(container);
    container.appendChild(background);
    //background.classList.add('active');

    //image container
    let imgCont = document.createElement('div');
    imgCont.id = 'modalImageContainer';
    imgCont.classList.add('modal-image-container');

    //image
    let img = document.createElement('img');
    img.id = 'modalImage';
    img.classList.add('modal-image');
    img.src = source;
    //phase 2
    imgCont.appendChild(img);
    container.appendChild(imgCont);


    //exit button container
    let exitCont = document.createElement('div');
    exitCont.id = 'exitCont';
    exitCont.classList.add('exit-cont');

    //exit button
    let exitButton = document.createElement('div');
    exitButton.id = 'exitButton';
    exitButton.classList.add('exit-button');

    //exit icon
    let icon = document.createElement('i');
    icon.classList.add('fas', 'fa-times');


    //phase 3
    exitButton.appendChild(icon);
    exitCont.appendChild(exitButton);
    container.appendChild(exitCont);
    container.classList.add('active');

    exitButton.addEventListener('click', function(){exitModal()});
    exitCont.addEventListener('click', function(){exitModal()});
    document.querySelector('body').addEventListener('keydown', function(event) {
        const key = event.key; // "a", "1", "Shift", etc.
        if (key === 'Escape') {
            exitModal();
        }
    });
}




function exitModal(){
    let modal = document.querySelector('#modalContainer');
    modal.classList.add('exit-activated');
    
    document.querySelector('body').removeEventListener('keydown', function(event) {
        const key = event.key; // "a", "1", "Shift", etc.
        if (key === 'Escape') {
            exitModal();
        }
    });

    setTimeout(
        function(){
            console.log('removed');
            let modal = document.querySelector('#modalContainer');
            modal.parentNode.removeChild(modal);
        },
        400); 
}