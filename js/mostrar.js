document.querySelectorAll('[wm-folder]').forEach(folder => {
    folder.onclick = function(e){
        const ul = folder.nextElementSibling
        const d = ul.style.display
        ul.style.display = d === 'none' ? 'block' : 'none'
    }
})