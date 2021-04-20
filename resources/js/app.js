require('./bootstrap');

// =========== header & fade animation ============
window.addEventListener('scroll', function(params) {
    let header = document.querySelector('header');
    let desc = document.querySelector('.desc');
    desc.classList.toggle('fade', window.scrollY > 400);
    header.classList.toggle('sticky', window.scrollY > 0);
});

// =========== type writer animation ============
class TypeWriter {
    constructor(TxtType, words, wait = 3000) {
        this.TxtType = TxtType;
        this.words = words;
        this.wait = parseInt(wait);
        this.txt = '';
        this.wordsIndex = 0;
        this.type();
        this.isDeleting = false;
    }

    type() {
        const currentIndex = this.wordsIndex % this.words.length;
        const fullWords = this.words[currentIndex];
        if (this.isDeleting) {
            this.txt = fullWords.substring(0, this.txt.length - 1);
        } else {
            this.txt = fullWords.substring(0, this.txt.length + 1);
        }

        this.TxtType.innerHTML = `<span class="txt">${this.txt}</span>`;

        let typeSpeed = 300;

        if (this.isDeleting) {
            typeSpeed /= 2;
        }

        if (!this.isDeleting && this.txt === fullWords) {
            typeSpeed = this.wait;
            this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
            this.isDeleting = false;
            typeSpeed = 500;

            this.wordsIndex++;
        }

        setTimeout(() => this.type(), typeSpeed);
    }
}

document.addEventListener('DOMContentLoaded', init);

function init(params) {
    const TxtType = document.querySelector('.txt-type');
    const wait = TxtType.getAttribute('data-wait');
    const words = JSON.parse(TxtType.getAttribute('data-words'));
    new TypeWriter(TxtType, words, wait);
}
