document.querySelectorAll('.log input').forEach(input => {
    input.addEventListener('mousedown', function() {
        this.nextElementSibling.style.top = '-10px';
        this.nextElementSibling.style.fontSize = '12px';
        this.nextElementSibling.style.color = '#007bff';
        this.nextElementSibling.style.background = 'white';
    });
});