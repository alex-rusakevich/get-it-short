let copy_btn_timeout = null;

function onCopyButtonClick(event){
    var input = document.createElement('input');
    input.setAttribute('value', document.querySelector("a#generated-link").textContent.trim());

    document.body.appendChild(input);
    input.select();

    document.execCommand('copy');
    document.body.removeChild(input);

    let copy_addr_span = document.querySelector("span#copy-address")
    copy_addr_span.classList.remove("bi-copy");
    copy_addr_span.classList.add("bi-check-circle");

    if(copy_btn_timeout != null) {
        clearTimeout(copy_btn_timeout);
    }

    copy_btn_timeout = setTimeout(() => {
        let copy_addr_span = document.querySelector("span#copy-address")
        copy_addr_span.classList.remove("bi-check-circle");
        copy_addr_span.classList.add("bi-copy");
    }, 5000);
}

window.addEventListener('load', function () {
    let copy_addr_span = document.querySelector("span#copy-address");
    if (copy_addr_span) copy_addr_span.addEventListener('click', onCopyButtonClick);
});
