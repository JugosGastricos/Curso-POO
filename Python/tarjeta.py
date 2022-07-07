from payment import Payment

class Tarjeta(Payment):
    name = str
    number = int
    cvv = int
    date = int
    def __init__(self, id, name, number, cvv, date):
        super().__init__(id)
        self.name = name
        self.number = number 
        self.cvv = cvv
        self.date = date