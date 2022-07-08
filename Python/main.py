from uberX import UberX
from uberPool import UberPool
from driver import Driver

if __name__ == "__main__": 
    # print("Hola Mundo")
    
    uberX = UberX("AMG063", Driver("Mercedes Campuzano", "LOL420"), "Chevrolet", "Spark")
    uberX.setPassenger(4)
    print(vars(uberX))
    uberX.printDataCar()
        
    uberPool = UberPool("FUK069", Driver("Andrea Serna", "69420666"), "Volkswagen", "Jetta")
    uberPool.setPassenger(4)
    print(vars(uberPool))
    uberPool.printDataCar()