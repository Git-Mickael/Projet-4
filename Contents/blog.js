class Blog{

    constructor(){
        this.title = document.getElementById("title");
        this.connection = document.getElementById("connection");
        this.design();
    }
    
    design(){
        this.connection.addEventListener("click",() =>{
            this.title.style.visibility = "hidden";
            console.log('bonjour');
        })
    }
}
new Blog();
