//typewriter

const TypeWriter = function(txtElement, words,wait = 2000){
    this.txtElement = txtElement;
    this.words = words;
    this.txt = '';
    this.wordIndex = 0;
    this.wait = parseInt(wait, 10);
    this.type();
    this.Deleting = false;
}

TypeWriter.prototype.type = function(){
   
    const current = this.wordIndex % this.words.length;

    const fullTxt = this.words[current];

    if(this.Deleting){
        this.txt = fullTxt.substring(0, this.txt.length - 1);

    }else{
        this.txt = fullTxt.substring(0, this.txt.length + 1);
    }
        this.txtElement.innerHTML = `<span class="txt">${this.txt}</span>`;

        let typespeed = 300;
    if(this.Deleting){
        
        typespeed = typespeed / 2;
    }
    if(!this.Deleting && this.txt === fullTxt){
       
        typespeed = this.wait;
        this.Deleting = true;
    } else if(this.Deleting && this.txt === ''){
        
        this.Deleting = false;
        this.wordIndex++;
        typespeed = 300;
    }

        setTimeout(() => this.type(),typespeed)
}   

document.addEventListener('DOMContentLoaded', init);

function init(){
    const txtElement = document.querySelector('.txt-type');
    const words = JSON.parse(txtElement.getAttribute('data-words'));
    const wait = txtElement.getAttribute('data-wait');

    new TypeWriter(txtElement, words, wait)
}