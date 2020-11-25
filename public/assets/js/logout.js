const logout = document.querySelector("#logout");

logout.addEventListener("click", async (event) =>{
    event.preventDefault();
    try{
       
        const res = await fetch("/post/logout", {
            method: "POST"
        });
        const text = res.text();
        console.log(text);
        res.status === 204
        ? window.location="/entrar"
        : null
        
    }catch(err){
        console.log("a ocurrido un error "+err);
    }
})