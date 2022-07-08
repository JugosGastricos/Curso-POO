package Java;

class Car {
    Integer id;
    String license;
    Account driver;
    private Integer passenger;

    public Car(String license, Account driver){
        this.license = license;
        this.driver = driver;
    }

    void printDataCar() {
        if(driver != null && passenger != null && license != null){
        System.out.println("Driver name: " + driver.name + "\nLicense: " + license + "\nPassengers: " + passenger);
        } else {
            System.err.println("Ingresa los datos requeridos");
        }
    }
    
    public Integer getPassenger(){
        return passenger;
    }

    public void setPassenger(Integer passengers){
        if (passengers == 4){
            this.passenger = passengers;
        } else {
            System.err.println("El carro debe permitir 4 pasajeros");
        }
    }
}