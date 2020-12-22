
    console.log( "ready!" );
    
    const inputNamePlayerOne = document.querySelector('#namePlayerOne');
    const inputNamePlayerTwo = document.querySelector('#namePlayerTwo');
    const inputObjectName = document.querySelector('#objectName');
    const inputPrice = document.querySelector('#price');
    
    const fctOnKeyup = (e) => {
        const submitButton = document.querySelector('#submit');
    
        if (inputNamePlayerOne.value && inputNamePlayerTwo.value && inputObjectName.value && inputPrice.value) { // Vérifie si les champs sont remplis, et si c'est le cas, effectue l'action ci-dessous
    
            console.log('Valeur Remplie');
    
            if (submitButton){ // Si le bouton existe, effectue les actions ci-dessous
                submitButton.hidden = false;  // hidden = true (Caché), hidden = false (pas Caché), donc la, on révèle le bouton.
            }
    
            else { // Creation du bouton
                const btn = document.createElement('button');
                btn.type = 'submit';
                btn.id = 'submit';
                btn.innerHTML = 'valider';
                formulaire.appendChild(btn); // Attache le bouton au formulaire.
                btn.addEventListener('click',(e) => { // Ajoute un Listener qui va regarder si l'utilisateur clique sur le bouton
                    e.preventDefault(); // Empêche le bouton d'executer sa fonction par défaut (Dans ce cas la, rafraichir la page.)
                    formulaire.hidden = true;

                    const text = document.createElement('p');
                    text.innerText = inputNamePlayerOne.value +' a choisi de vous faire deviner la valeur de  : ' + inputObjectName.value;
                    test.appendChild(text)
                    
                    const answerInput = document.createElement('input');
                    answerInput.id = 'answerTry';
                    test.appendChild(answerInput); 
                    
                    const btnTry = document.createElement('button');
                    btnTry.type = 'submit';
                    btnTry.id = 'submit';
                    btnTry.innerHTML = 'Jouer';
                    test.appendChild(btnTry);

                    let nbTry = 0;

                    btnTry.addEventListener('click',(e) =>{
                        
                        nbTry ++;
                        console.log(answerInput.value);

                        if (answerInput.value == inputPrice.value){
                            const tentative = document.createElement('p');
                            tentative.innerText = 'Tentative '+ nbTry +' : Vous avez gagné ! ';
                            test.appendChild(tentative);
                        }
                        else {

                            if (answerInput.value < inputPrice.value){
                            const tentative = document.createElement('p');
                            tentative.innerText = 'Tentative '+ nbTry +' : C\'est plus haut';
                            test.appendChild(tentative);
                            }

                            else if (answerInput.value > inputPrice.value){
                            const tentative = document.createElement('p');
                            tentative.innerText = 'Tentative '+ nbTry +' : C\'est plus bas';
                            test.appendChild(tentative);
                            }

                            else if (!answerInput.value) {
                            const tentative = document.createElement('p');
                            tentative.innerText = 'Tentative '+ nbTry +' : Vous n\'avez pas entrer de valeur';
                            test.appendChild(tentative);
                            }

                        }

                    })
                    })
                }
            }
    
        else { // Si les champs ne sont pas remplis
            if (submitButton && !submitButton.hidden){ // Si le bouton existe ET que le bouton est visible, effectue les actions ci-dessous
                submitButton.hidden = true;  // hidden = true (Caché), hidden = false (pas Caché), donc la, on cache le bouton.
            }
        }
    };

    inputNamePlayerOne.addEventListener('keyup', fctOnKeyup); 
    inputNamePlayerTwo.addEventListener('keyup', fctOnKeyup);
    inputObjectName.addEventListener('keyup', fctOnKeyup);
    inputPrice.addEventListener('keyup', fctOnKeyup);