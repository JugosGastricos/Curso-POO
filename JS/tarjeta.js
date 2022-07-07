class Tarjeta extends Payment {
    constructor(name, number, cvv, date){
        super();
        this.name = name;
        this.number = number;
        this.cvv = cvv;
        this.date = date;
    }
}