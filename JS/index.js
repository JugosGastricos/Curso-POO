// import Car from "./car.js";

const car = new Car("AMG063", new Account("Mercedes Campuzano", "LOL420"));
car.passenger = 4;

console.log(car);
car.printDataCar();

const car2 = new Car();
car2.license = "FUK069";
car2.driver = new Account("Andrea Serna", "69420666");
car2.passenger = 3;

console.log(car2);
car2.printDataCar();