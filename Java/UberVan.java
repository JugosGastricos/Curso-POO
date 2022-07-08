package Java;

import java.util.ArrayList;
import java.util.Map;

public class UberVan extends Car {
    Map<String, Map<String,Integer>> typeCarAccepted;
    ArrayList<String> seatsMaterial;

    public UberVan(String license, Account driver){
        super(license, driver);
    }

    @Override
    public Integer getPassenger() {
        return this.passenger;
    }

    @Override
    public void setPassenger(Integer passengers) {
        if(passengers == 6){
            this.passenger = passengers;
        } else {
            System.err.println("La van debe permitir 6 pasajeros");
        }
    }
}