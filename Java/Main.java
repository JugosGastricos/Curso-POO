package Java;

class Main {
    public static void main(String[] args) {
        // System.out.println("Hola Mundo");
        UberX uberX = new UberX("MAQ123", new Driver("Andrés Herrera","AND123"), "Chevrolet", "Spark");
        // uberX.passenger = 4;
        uberX.setPassenger(4);
        uberX.printDataCar();

        UberPool uberPool = new UberPool("FUK069", new Driver("Andrea Serna", "ANDA876"), "Volkswagen", "Jetta");
        uberPool.setPassenger(4);
        uberPool.printDataCar();

        UberVan uberVan = new UberVan("FGH345", new Driver("Andrés Herrera", "AND123"));
        uberVan.setPassenger(6);
        uberVan.printDataCar();
    }
}