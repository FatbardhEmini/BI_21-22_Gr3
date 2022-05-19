function validateEmpty(string) {
    if(!string || string.length <= 2) {
        return {
            message: "Field can not be empty!"
        };
    }
    return true;
}