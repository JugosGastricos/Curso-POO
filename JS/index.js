// import Car from "./car.js";

const car = new Car();

car.license = "AMG063";
car.driver = "Mercedes Campuzano";
car.passenger = 4;

console.log(car);
console.log(`License: ${car.license} \nDriver: ${car.driver}`);

const car2 = new Car();

car2.license = "FUK069";
car2.driver = "Andrea Serna";
car2.passenger = 3;

console.log(car2);
console.log(`License: ${car2.license} \nDriver: ${car2.driver}`);