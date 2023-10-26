const {
    createApp,
    ref,
    watchEffect
} = Vue
const APPS_URL = "index.json"
app = createApp({
    data() {
        const config = ref(null)
        fetch(APPS_URL)
            .then((res) => res.json())
            .then((json) => (config.value = json))
            .catch(function(error) {
                console.error(error)
            })
        return {
            config
        }
    },
    mounted() {

    },
    updated() {
        mdui.mutation()
    }
})
mdui.$(function() {
    app.mount('#app')
    if ('serviceWorker' in navigator) {
        navigator.serviceWorker.register('/serviceWorker.js', {
            scope: '/'
        }).then(function(reg) {
            // registration worked
            console.log('Registration succeeded. Scope is ' + reg.scope);
        }).catch(function(error) {
            // registration failed
            console.log('Registration failed with ' + error);
        });
    }
})

function filterFunction() {
    var input, filter, a, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    div = document.getElementById("myDropdown");
    a = div.getElementsByTagName("a");
    for (i = 0; i < a.length; i++) {
        txtValue = a[i].textContent || a[i].innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            a[i].style.display = "";
        } else {
            a[i].style.display = "none";
        }
    }
}