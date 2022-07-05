package Java;

class Main {
    public static void main(String[] args) {
        System.out.println("Hola Mundo");
        Car car = new Car();
        car.license = "MAQ123";
        car.driver = "Andres Herrera";
        car.passenger = 4;
        car.printDataCar();
        
        Car car2 = new Car();
        car2.license = "FUK069";
        car2.driver = "Andrea Serna";
        car2.passenger = 3;
        car.printDataCar();
    }
}