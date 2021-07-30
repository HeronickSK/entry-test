class Receipt {

    Receipt (name, lastName, product, storage) {
        this.name = name;
        this.lastName = lastName;
        this.product = product;
        this.storage = storage;
        this.price = null;
    }

    addPrice (price) {
        this.price = price;
    }

}

function chaos () {
    document.getElementsByClassName('para').style.fontSize = '10px';
}