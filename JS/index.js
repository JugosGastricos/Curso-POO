const uberX = new UberX("AMG063", new Account("Mercedes Campuzano", "LOL420"), "Chevrolet", "Spark");
uberX.printDataCar(uberX.brand, uberX.model);

const car2 = new Car();
car2.license = "FUK069";
car2.driver = new Account("Andrea Serna", "69420666");
car2.passenger = 3;

console.log(car2);
car2.printDataCar();