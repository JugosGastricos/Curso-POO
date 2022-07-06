from account import Account

class Car:
    id = int
    license = str
    driver = Account("","")
    passenger = int
    
    def __init__(self, license, driver):
        self.license = license
        self.driver = driver
    
    # No obligatorio pero pos qué carajos 
    def printDataCar (self):
        print("Driver: " + self.driver.name + "\nDrivers license: " + self.driver.document + "\nCar license: " + self.license)
    