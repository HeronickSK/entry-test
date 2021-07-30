function write() {
    var firstN = document.getElementById(firstName);
    var lastN = document.getElementById(lastName);
    var prod = document.getElementById(product);
    var stor = document.getElementById(storage);
    var pri = document.getElementById(price);
    const rec = {
        firstName: firstN.options.value, 
        lastName: lastN.options.value, 
        product: prod.options[prod.selectedIndex].value,
        storage: stor.options[stor.selectedIndex].value,
        price: pri.options.value
    };
    window.location.replace('finish.html');
}