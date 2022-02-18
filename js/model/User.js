class User {

    #senha= "12345";
    
    contructor(nome){
        this._nome = nome;
    }

    get nome(){
        console.log("get nome(){...");
        return this._nome;
    }
}

export { User };