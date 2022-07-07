package Java;

class Tarjeta extends Payment {
    Integer number;
    Integer cvv;
    Integer date;
    String name;
    public Tarjeta (String name, Integer number, Integer cvv, Integer date, Integer id){
        super(id);
        this.name = name;
        this.number = number;
        this.cvv = cvv;
        this.date = date;
    }
}