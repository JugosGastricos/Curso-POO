from account import Account

class Car:
    id = int
    license = str
    driver = Account("","")
    __passenger = int
    
    def __init__(self, license, driver):
        self.license = license
        self.driver = driver
    
    # No obligatorio pero pos qué carajos 
    def printDataCar (self):
        print("Driver: " + self.driver.name + "\nDrivers license: " + self.driver.document + "\nCar license: " + self.license)
    
    def getPassenger (self):
        return self.__passenger
    
    def setPassenger (self, passenger):
        if(passenger == 4):
            self.__passenger = passenger
        else:
            raise ValueError(f'El carro debe ser de al menos 4 pasajeros')