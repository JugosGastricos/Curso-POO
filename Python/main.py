from car import Car
from account import Account

if __name__ == "__main__": 
    print("Hola Mundo")
    car = Car("AMG063", Account("Mercedes Campuzano", "LOL420"))
    car.passenger = 4
    print(vars(car))
    car.printDataCar()
        
    car2 = Car("FUK069", Account("Andrea Serna", "69420666"))
    car2.passenger = 3
    print(vars(car2))
    car2.printDataCar()