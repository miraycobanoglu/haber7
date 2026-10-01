const kaydedilenTema = localStorage.getItem('secilenTema');
if (kaydedilenTema === 'koyu') {
    document.documentElement.classList.add('dark-mode');
} else {
    document.documentElement.classList.remove('dark-mode');
}

window.addEventListener('pageshow', function (event) {
    const guncelTema = localStorage.getItem('secilenTema');
    if (guncelTema === 'koyu') {
        document.documentElement.classList.add('dark-mode');
    } else {
        document.documentElement.classList.remove('dark-mode');
    }
});