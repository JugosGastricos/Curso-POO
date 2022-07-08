package Java;

class Car {
    private Integer id;
    private String license;
    private Account driver;
    protected Integer passenger;

    public Car(String license, Account driver){
        this.license = license;
        this.driver = driver;
    }

    void printDataCar() {
        if(driver == null || license == null || passenger == null){
            System.err.println("Ingresa los datos requeridos");
        } else {
            System.out.println("Driver name: " + driver.name + "\nLicense: " + license + "\nPassengers: " + passenger);
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

    public Integer getId() {
        return id;
    }

    public void setId(Integer id) {
        this.id = id;
    }

    public String getLicense() {
        return license;
    }

    public void setLicense(String license) {
        this.license = license;
    }

    public Account getDriver() {
        return driver;
    }

    public void setDriver(Account driver) {
        this.driver = driver;
    }

    
}