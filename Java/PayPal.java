package Java;

class PayPal extends Payment {
    String email;
    public PayPal(String email, Integer id) {
        super(id);
        this.email = email;
    }
}