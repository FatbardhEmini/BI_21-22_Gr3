function setInnerText(el, text, timeout) {
    el.innerHTML = text;
    if (timeout) {
        setTimeout(() => {
            el.innerHTML = "";
        }, 3000);
    }
}

const isEmailValid = (email) => {
    const re =
        /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
};

const checkForName = (string) => {
    let pattern = /math/i;
    let pattern2 = /math/gi;
    return [string.match(pattern), string.match(pattern2)];
};
