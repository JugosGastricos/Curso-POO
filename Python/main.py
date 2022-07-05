from car import Car

if __name__ == "__main__": 
    print("Hola Mundo")
    car = Car()
    car.license = "AMG063"
    car.driver = "Mercedes Campuzano"
    car.passenger = 4
    print(vars(car))
    car.printDataCar()
        
    car2 = Car()
    car2.license = "FUK069"
    car2.driver = "Andrea Serna"
    car2.passenger = 3
    print(vars(car2))
    car2.printDataCar()