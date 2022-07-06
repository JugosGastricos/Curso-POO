class Car {
    constructor (license, driver){
        this.id;
        this.license = license;
        this.driver = driver;
        this.passenger;
    }
    printDataCar = (brand, model) => {
        brand && model ? 
        console.log(`Driver: ${this.driver.name} \nDriver document: ${this.driver.document} \nCar license: ${this.license} \nBrand: ${brand} \nModel: ${model}`) 
        : 
        console.log(`Driver: ${this.driver.name} \nDriver document: ${this.driver.document} \nCar license: ${this.license}`);
    }
}