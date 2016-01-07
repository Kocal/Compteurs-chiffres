var fields = document.querySelectorAll('input.count');

for(var i = 0; i < fields.length; i++) {
    (function(i) {
        var field = fields[i];
        var key = field.dataset.key;

        field.value = localStorage.getItem('_' + key) || 0;

        field.addEventListener('change', function(e) {
            localStorage.setItem('_' + key, e.currentTarget.value);
        }, 'false');
    })(i);
}
