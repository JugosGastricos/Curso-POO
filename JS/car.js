class Car {
    constructor (license, driver, passenger){
        this.id;
        this.license = license;
        this.driver = driver;
        this.#passenger = passenger;
    }
    
    #passenger = 0;
    get passenger () {
        return this.#passenger;
    }
    set passenger (passenger) {
        passenger == 4 ? this.#passenger = passenger 
        : console.error('El carro debe ser de al menos 4 pasajeros');
    }

    printDataCar = (brand, model) => {
        if (brand && model && this.#passenger == 4){
            console.log(`Driver: ${this.driver.name} \nDriver document: ${this.driver.document} \nCar license: ${this.license} \nBrand: ${brand} \nModel: ${model} \nPassengers: ${this.#passenger}`);
        } else if (this.#passenger != 4){
            this.#passenger = undefined;
        }
    }
}