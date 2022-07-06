class Car {
    constructor (license, driver){
        this.id;
        this.license = license;
        this.driver = driver;
        this.passenger;
    }
    printDataCar = () => {
        console.log(`Driver: ${this.driver.name} \nDriver document: ${this.driver.document} \nCar license: ${this.license}`);
    }
}
// const car = new Car();

// car.license = "AMG063";
// car.driver = "Mercedes Campuzano";
// car.passenger = 4;

// console.log(car);
// console.log(`License: ${car.license} \nDriver: ${car.driver}`);

// // export default Car