class Car:
    id = int
    license = str
    driver = str
    passenger = int
    # No obligatorio pero pos qué carajos 
    def printDataCar (self):
        print("Driver: " + self.driver + ". License: " + self.license)
    