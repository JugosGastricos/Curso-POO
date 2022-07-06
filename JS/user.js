class User extends Account {
    constructor (name, document) {
        super(name, document);
    }
    showData () {
        console.log(`User: ${this.name} \nUser document: ${this.document}`);
    }
}