setInterval(function() {
    var logo = document.querySelector('.neon-logo');
    var letterToBlink = logo.innerHTML.indexOf('A'); // Substitua 'A' pela letra que deseja fazer piscar

    if (letterToBlink !== -1) {
        logo.innerHTML = logo.innerHTML.substring(0, letterToBlink) + '<span class="blink">' + logo.innerHTML.charAt(letterToBlink) + '</span>' + logo.innerHTML.substring(letterToBlink + 1);
    }
}, 1000);