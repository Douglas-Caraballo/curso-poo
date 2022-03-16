class User extends Account{
    constructor(name, document,email, password){
        super(name,document,email,password);
    }
    printDataUser(){
        console.log('***Usuarios***');
        console.log(`Name: ${this.name}`);
        console.log(`Document: ${this.document}`);
        console.log(`Email: ${this.email}`);
    }
}