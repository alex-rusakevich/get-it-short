let intervalId = null;

function fireOnReady() {
    intervalId = setInterval(() => {
        let counter_span = document.querySelector("span#sec-to-redirect");

        if(counter_span.textContent == 0) {
            window.location.href = document.link_to_redirect;
            clearInterval(intervalId);
            return;
        }

        counter_span.textContent -= 1; 
    }, 1000)
}

if (document.readyState === 'complete') {
    fireOnReady();
} else {
    document.addEventListener("DOMContentLoaded", fireOnReady);
}
