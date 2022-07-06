package Java;

class Main {
    public static void main(String[] args) {
        // System.out.println("Hola Mundo");
        Car car = new Car("MAQ123", new Account("Andrés Herrera","AND123"));
        car.passenger = 4;
        car.printDataCar();
        
        Car car2 = new Car("FUK069", new Account("Andrea Serna", "ANDA876"));
        // car2.license = "FUK069";
        // car2.driver = "Andrea Serna";
        car2.passenger = 3;
        car2.printDataCar();
    }
}